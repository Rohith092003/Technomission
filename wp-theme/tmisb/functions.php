<?php
function tmisb_enqueue_scripts() {
    wp_enqueue_style( 'tmisb-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'tmisb_enqueue_scripts' );

function tmisb_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'tmisb' ),
    ) );
}
add_action( 'after_setup_theme', 'tmisb_theme_setup' );

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

// Auto-create pages on theme activation
function tmisb_auto_create_pages() {
    $pages = array(
        'about' => array('title' => 'About', 'template' => 'page-about.php'),
        'academics' => array('title' => 'Academics', 'template' => 'page-academics.php'),
        'gallery' => array('title' => 'Gallery', 'template' => 'page-gallery.php'),
        'contact' => array('title' => 'Contact Us', 'template' => 'page-contact.php'),
        'labs' => array('title' => 'Labs', 'template' => 'page-labs.php'),
        'activities' => array('title' => 'Activities', 'template' => 'page-activities.php'),
        'admissions' => array('title' => 'Admissions', 'template' => 'page-admissions.php'),
    );

    foreach ($pages as $slug => $page_data) {
        $page_check = get_page_by_path($slug);
        if (!isset($page_check->ID)) {
            $new_page_id = wp_insert_post(array(
                'post_type' => 'page',
                'post_title' => $page_data['title'],
                'post_name' => $slug,
                'post_status' => 'publish',
            ));
            if ($new_page_id && !is_wp_error($new_page_id)) {
                update_post_meta($new_page_id, '_wp_page_template', $page_data['template']);
            }
        } else {
            // Ensure template is set even if page exists
            update_post_meta($page_check->ID, '_wp_page_template', $page_data['template']);
        }
    }
}
add_action('after_switch_theme', 'tmisb_auto_create_pages');
// We will also run it on admin_init just in case the theme is already active
add_action('admin_init', 'tmisb_auto_create_pages');
?>