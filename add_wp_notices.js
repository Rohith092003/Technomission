const fs = require('fs');
const path = require('path');
const { execSync } = require('child_process');

const themeDir = path.join(__dirname, 'wp-theme', 'tmisb');
const functionsFile = path.join(themeDir, 'functions.php');
const frontPageFile = path.join(themeDir, 'front-page.php');

// 1. Update functions.php
let functionsContent = fs.readFileSync(functionsFile, 'utf8');

const noticeCptCode = `
// Register Notice Custom Post Type
function tmisb_register_notice_cpt() {
    register_post_type('notice', array(
        'labels' => array(
            'name' => 'Notices',
            'singular_name' => 'Notice',
            'add_new' => 'Add New Notice',
            'add_new_item' => 'Add New Notice',
            'edit_item' => 'Edit Notice',
        ),
        'public' => true,
        'has_archive' => false,
        'supports' => array('title'),
        'menu_icon' => 'dashicons-megaphone',
        'exclude_from_search' => true,
        'publicly_queryable' => false,
        'show_ui' => true,
    ));
}
add_action('init', 'tmisb_register_notice_cpt');

// Add Meta Box for Notice File Attachment
function tmisb_add_notice_meta_box() {
    add_meta_box(
        'notice_file_meta_box',
        'Notice Attachment (PDF/Image)',
        'tmisb_notice_meta_box_callback',
        'notice',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'tmisb_add_notice_meta_box');

function tmisb_notice_meta_box_callback($post) {
    wp_nonce_field('tmisb_save_notice_file', 'tmisb_notice_file_nonce');
    $value = get_post_meta($post->ID, '_notice_file_url', true);
    echo '<p><label for="notice_file_url"><strong>File URL:</strong></label></p>';
    echo '<input type="url" id="notice_file_url" name="notice_file_url" value="' . esc_attr($value) . '" style="width:100%; padding:8px;" placeholder="https://..." />';
    echo '<p class="description" style="margin-top:10px;">To attach a file, upload it to the WordPress <strong>Media Library</strong> first, then copy its "File URL" and paste it here. When users click this notice on the homepage, this file will open.</p>';
}

function tmisb_save_notice_file_data($post_id) {
    if (!isset($_POST['tmisb_notice_file_nonce'])) return;
    if (!wp_verify_nonce($_POST['tmisb_notice_file_nonce'], 'tmisb_save_notice_file')) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;

    if (isset($_POST['notice_file_url'])) {
        update_post_meta($post_id, '_notice_file_url', sanitize_text_field($_POST['notice_file_url']));
    }
}
add_action('save_post', 'tmisb_save_notice_file_data');
?>`;

if (!functionsContent.includes('tmisb_register_notice_cpt')) {
    functionsContent = functionsContent.replace('?>', noticeCptCode);
    fs.writeFileSync(functionsFile, functionsContent);
    console.log('Updated functions.php');
}

// 2. Update front-page.php
let frontPageContent = fs.readFileSync(frontPageFile, 'utf8');

// The exact block to replace starts with <!-- Notice Item --> and ends before <!-- View All button -->
const noticeBlockStartStr = '<!-- Scrollable Area -->\n                        <div class="space-y-4 overflow-y-auto h-full p-6" style="scrollbar-width: thin; scrollbar-color: #d4af37 #f1f1f1;">';
const noticeBlockEndStr = '<!-- View All button -->';

let startIndex = frontPageContent.indexOf(noticeBlockStartStr);
let endIndex = frontPageContent.indexOf(noticeBlockEndStr);

if (startIndex !== -1 && endIndex !== -1) {
    startIndex += noticeBlockStartStr.length;
    
    const dynamicNotices = `
<?php
$notice_query = new WP_Query(array(
    'post_type' => 'notice',
    'posts_per_page' => 10,
));

if ($notice_query->have_posts()) :
    $count = 0;
    while ($notice_query->have_posts()) : $notice_query->the_post();
        $file_url = get_post_meta(get_the_ID(), '_notice_file_url', true);
        $link = !empty($file_url) ? esc_url($file_url) : '#';
        $day = get_the_date('d');
        $month = get_the_date('M');
        $is_new = ($count === 0);
        
        $bg_class = $is_new ? 'bg-primary/5 text-primary border-primary/10' : 'bg-gray-50 text-gray-500 border-gray-100';
?>
                            <!-- Dynamic Notice Item -->
                            <div class="flex gap-4 p-4 bg-white rounded-xl shadow-sm hover:shadow-md transition border border-gray-50 hover:border-primary/20 group">
                                <div class="flex flex-col items-center justify-center <?php echo $bg_class; ?> rounded-lg min-w-[60px] h-[60px] shrink-0 border">
                                    <span class="text-xl font-bold leading-none"><?php echo $day; ?></span>
                                    <span class="text-xs uppercase font-semibold mt-1"><?php echo $month; ?></span>
                                </div>
                                <div class="flex flex-col justify-center">
                                    <?php if ($is_new) : ?>
                                    <span class="inline-block mb-1 text-[10px] font-bold text-primary bg-secondary/20 px-2 py-0.5 rounded uppercase tracking-wider w-max">New</span>
                                    <?php endif; ?>
                                    <h4 class="font-bold text-gray-800 text-sm group-hover:text-primary transition leading-snug"><a href="<?php echo $link; ?>" target="_blank"><?php the_title(); ?></a></h4>
                                </div>
                            </div>
<?php
        $count++;
    endwhile;
    wp_reset_postdata();
else :
    echo '<p class="text-gray-500 p-4 text-center mt-4">No new notices currently.</p>';
endif;
?>
                            `;
                            
    const newFrontPageContent = frontPageContent.substring(0, startIndex) + dynamicNotices + frontPageContent.substring(endIndex);
    fs.writeFileSync(frontPageFile, newFrontPageContent);
    console.log('Updated front-page.php');
} else {
    console.log('Notice block not found in front-page.php');
}

// Ensure the change is pushed to Github
try {
    execSync('git add .');
    execSync('git commit -m "Add Dynamic Notice Board to WordPress theme"');
    execSync('git push');
    console.log('Pushed Notice Board updates to Github!');
} catch (e) {
    console.error('Git error:', e.message);
}
