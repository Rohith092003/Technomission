const fs = require('fs');
const path = require('path');
const { execSync } = require('child_process');

const themeDir = path.join(__dirname, 'wp-theme', 'tmisb');

const files = fs.readdirSync(themeDir).filter(f => f.endsWith('.php'));

const replacements = {
    'index.html': '<?php echo home_url("/"); ?>',
    'about.html': '<?php echo home_url("/about"); ?>',
    'academics.html': '<?php echo home_url("/academics"); ?>',
    'gallery.html': '<?php echo home_url("/gallery"); ?>',
    'contact.html': '<?php echo home_url("/contact"); ?>',
    'labs.html': '<?php echo home_url("/labs"); ?>',
    'activities.html': '<?php echo home_url("/activities"); ?>',
    'admissions.html': '<?php echo home_url("/admissions"); ?>'
};

files.forEach(file => {
    const filePath = path.join(themeDir, file);
    let content = fs.readFileSync(filePath, 'utf8');
    let changed = false;

    for (const [htmlLink, wpLink] of Object.entries(replacements)) {
        // Regex to match href="page.html" or href="page.html#section"
        const regex = new RegExp(`href="${htmlLink}(#[^"]*)?"`, 'g');
        if (regex.test(content)) {
            content = content.replace(regex, (match, hash) => {
                return `href="${wpLink}${hash || ''}"`;
            });
            changed = true;
        }
    }

    if (changed) {
        fs.writeFileSync(filePath, content);
        console.log(`Updated links in ${file}`);
    }
});

// Also add a script to functions.php to auto-create pages
let functionsContent = fs.readFileSync(path.join(themeDir, 'functions.php'), 'utf8');
if (!functionsContent.includes('tmisb_auto_create_pages')) {
    const autoCreateCode = `
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
?>`;
    functionsContent = functionsContent.replace('?>', autoCreateCode);
    fs.writeFileSync(path.join(themeDir, 'functions.php'), functionsContent);
    console.log('Added auto-create pages script to functions.php');
}

try {
    execSync('git add .');
    execSync('git commit -m "Fix hardcoded HTML links and auto-create WordPress pages"');
    execSync('git push');
    console.log('Pushed to Github successfully.');
} catch(e) {
    console.error(e.message);
}
