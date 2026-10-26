const fs = require('fs');
const path = require('path');
const { execSync } = require('child_process');

const THEME_NAME = 'tmisb';
const THEME_DIR = path.join(__dirname, 'wp-theme', THEME_NAME);
const ZIP_OUTPUT = path.join(__dirname, 'tmisb-theme.zip');

if (!fs.existsSync(THEME_DIR)) {
    fs.mkdirSync(THEME_DIR, { recursive: true });
}

// 1. Create style.css
const styleCssContent = `/*
Theme Name: TMISB Theme
Theme URI: https://technomission.in/
Author: Antigravity
Author URI: https://technomission.in/
Description: Custom WordPress theme for Techno Mission International School Bhagalpur.
Version: 2.1
Text Domain: tmisb
*/

/* Tailwind is loaded via CDN in this theme, with custom utilities in css/style.css */
`;
fs.writeFileSync(path.join(THEME_DIR, 'style.css'), styleCssContent);

// 2. Create functions.php with Auto-Page Creation, Smart Template Redirect, and Dynamic Achievements CPT
const functionsPhpContent = `<?php
function tmisb_enqueue_scripts() {
    wp_enqueue_style( 'tmisb-style', get_stylesheet_uri(), array(), time() );
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

/**
 * 1. Smart Template Redirect:
 * If a visitor requests /primary/, /pre-primary/, /secondary/, etc.,
 * automatically load the matching page template even if the page hasn't been created in WP-Admin.
 */
function tmisb_custom_template_redirect( $template ) {
    if ( is_404() || ! is_singular( 'page' ) ) {
        $path = trim( parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ), '/' );
        $segments = explode( '/', $path );
        $slug = end( $segments );
        
        if ( ! empty( $slug ) ) {
            if ( in_array( $slug, array( 'labs', 'activities' ) ) ) {
                wp_redirect( home_url( '/facilities/' ), 301 );
                exit;
            }
            $custom_template = get_template_directory() . '/page-' . sanitize_title( $slug ) . '.php';
            if ( file_exists( $custom_template ) ) {
                global $wp_query;
                $wp_query->is_404 = false;
                $wp_query->is_page = true;
                status_header( 200 );
                return $custom_template;
            }
        }
    }
    return $template;
}
add_filter( 'template_include', 'tmisb_custom_template_redirect', 99 );

/**
 * 2. Auto Page Creator:
 * Automatically creates and publishes all standard school pages in WordPress with their proper templates.
 */
function tmisb_auto_create_pages() {
    $pages = array(
        'about' => array('title' => 'About Us', 'template' => 'page-about.php'),
        'academics' => array('title' => 'Academics', 'template' => 'page-academics.php'),
        'admissions' => array('title' => 'Admissions 2026–27', 'template' => 'page-admissions.php'),
        'gallery' => array('title' => 'Gallery', 'template' => 'page-gallery.php'),
        'contact' => array('title' => 'Contact Us', 'template' => 'page-contact.php'),
        'facilities' => array('title' => 'Campus Facilities & Infrastructure', 'template' => 'page-facilities.php'),
        'pre-primary' => array('title' => 'Pre-Primary Wing', 'template' => 'page-pre-primary.php'),
        'primary' => array('title' => 'Primary Wing', 'template' => 'page-primary.php'),
        'secondary' => array('title' => 'Middle & Secondary Wing', 'template' => 'page-secondary.php'),
        'senior-secondary' => array('title' => 'Senior Secondary Wing', 'template' => 'page-senior-secondary.php'),
        'competitive-coaching' => array('title' => 'Integrated Competitive Prep', 'template' => 'page-competitive-coaching.php'),
        'teaching-methodology' => array('title' => 'Teaching Methodology & Evaluation', 'template' => 'page-teaching-methodology.php'),
        'cbse-disclosure' => array('title' => 'CBSE Mandatory Public Disclosure', 'template' => 'page-cbse-disclosure.php'),
    );

    foreach ( $pages as $slug => $data ) {
        $page_obj = get_page_by_path( $slug );
        if ( ! $page_obj ) {
            $page_id = wp_insert_post( array(
                'post_title'     => $data['title'],
                'post_name'      => $slug,
                'post_status'    => 'publish',
                'post_type'      => 'page',
                'comment_status' => 'closed',
            ) );
            if ( $page_id && ! is_wp_error( $page_id ) ) {
                update_post_meta( $page_id, '_wp_page_template', $data['template'] );
            }
        } else {
            $current_template = get_post_meta( $page_obj->ID, '_wp_page_template', true );
            if ( $current_template !== $data['template'] ) {
                update_post_meta( $page_obj->ID, '_wp_page_template', $data['template'] );
            }
        }
    }
}
add_action( 'init', 'tmisb_auto_create_pages' );

/**
 * 3. Custom Post Type: Achievements (Wall of Fame)
 * Allows administrators to add/edit student achievements, upload newspaper clippings or certificates,
 * set badges, subtitles/captions, and display locations directly from the WordPress dashboard.
 */
function tmisb_register_achievement_cpt() {
    $labels = array(
        'name'                  => _x( 'Achievements', 'Post type general name', 'tmisb' ),
        'singular_name'         => _x( 'Achievement', 'Post type singular name', 'tmisb' ),
        'menu_name'             => _x( 'Achievements', 'Admin Menu text', 'tmisb' ),
        'name_admin_bar'        => _x( 'Achievement', 'Add New on Toolbar', 'tmisb' ),
        'add_new'               => __( 'Add New Achievement', 'tmisb' ),
        'add_new_item'          => __( 'Add New Student Achievement', 'tmisb' ),
        'new_item'              => __( 'New Achievement', 'tmisb' ),
        'edit_item'             => __( 'Edit Achievement', 'tmisb' ),
        'view_item'             => __( 'View Achievement', 'tmisb' ),
        'all_items'             => __( 'All Achievements', 'tmisb' ),
        'search_items'          => __( 'Search Achievements', 'tmisb' ),
        'not_found'             => __( 'No achievements found.', 'tmisb' ),
        'not_found_in_trash'    => __( 'No achievements found in Trash.', 'tmisb' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'achievements' ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 21,
        'menu_icon'          => 'dashicons-awards',
        'supports'           => array( 'title', 'thumbnail', 'page-attributes' ),
        'show_in_rest'       => true,
    );

    register_post_type( 'tmisb_achievement', $args );
}
add_action( 'init', 'tmisb_register_achievement_cpt' );

/**
 * 4. Custom Meta Box for Achievement Details
 */
function tmisb_add_achievement_meta_boxes() {
    add_meta_box(
        'tmisb_achievement_details',
        __( 'Achievement Details & Display Settings', 'tmisb' ),
        'tmisb_render_achievement_meta_box',
        'tmisb_achievement',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'tmisb_add_achievement_meta_boxes' );

function tmisb_render_achievement_meta_box( $post ) {
    wp_nonce_field( 'tmisb_save_achievement_meta', 'tmisb_achievement_meta_nonce' );

    $badge         = get_post_meta( $post->ID, '_tmisb_achievement_badge', true );
    $badge_color   = get_post_meta( $post->ID, '_tmisb_achievement_badge_color', true ) ?: 'secondary';
    $caption       = get_post_meta( $post->ID, '_tmisb_achievement_caption', true );
    $image_only    = get_post_meta( $post->ID, '_tmisb_achievement_image_only', true );
    $show_home     = get_post_meta( $post->ID, '_tmisb_achievement_show_home', true );
    $show_coaching = get_post_meta( $post->ID, '_tmisb_achievement_show_coaching', true );

    // Default for brand new achievement posts
    if ( $post->post_status === 'auto-draft' ) {
        $show_home = '1';
    }
    ?>
    <style>
        .tmisb-meta-field { margin-bottom: 16px; }
        .tmisb-meta-field label { display: block; font-weight: 600; margin-bottom: 5px; color: #1e293b; font-size: 13px; }
        .tmisb-meta-field input[type="text"], .tmisb-meta-field textarea, .tmisb-meta-field select { width: 100%; max-width: 650px; padding: 8px 12px; border: 1px solid #cbd5e1; border-radius: 6px; box-sizing: border-box; }
        .tmisb-meta-field .desc { font-size: 12px; color: #64748b; margin-top: 4px; }
        .tmisb-checkboxes { display: flex; flex-direction: column; gap: 8px; margin-top: 6px; background: #f8fafc; padding: 12px; border-radius: 6px; border: 1px solid #e2e8f0; max-width: 650px; }
        .tmisb-checkbox-label { display: flex !important; align-items: center; gap: 8px; font-weight: normal !important; cursor: pointer; font-size: 13px; color: #334155; }
    </style>

    <div class="tmisb-meta-field">
        <label for="tmisb_achievement_badge"><?php _e( 'Badge / Category Tag', 'tmisb' ); ?></label>
        <input type="text" id="tmisb_achievement_badge" name="tmisb_achievement_badge" value="<?php echo esc_attr( $badge ); ?>" placeholder="e.g. NEET 2022 Medical, IIT-JEE Advanced, National Merit, National Science">
        <p class="desc"><?php _e( 'Highlighted pill tag displayed above the achievement title on cards.', 'tmisb' ); ?></p>
    </div>

    <div class="tmisb-meta-field">
        <label for="tmisb_achievement_badge_color"><?php _e( 'Badge Color Theme', 'tmisb' ); ?></label>
        <select id="tmisb_achievement_badge_color" name="tmisb_achievement_badge_color">
            <option value="secondary" <?php selected( $badge_color, 'secondary' ); ?>><?php _e( 'Red Accent (Secondary)', 'tmisb' ); ?></option>
            <option value="primary" <?php selected( $badge_color, 'primary' ); ?>><?php _e( 'Navy Blue (Primary)', 'tmisb' ); ?></option>
            <option value="amber" <?php selected( $badge_color, 'amber' ); ?>><?php _e( 'Gold / Amber', 'tmisb' ); ?></option>
            <option value="emerald" <?php selected( $badge_color, 'emerald' ); ?>><?php _e( 'Green / Emerald', 'tmisb' ); ?></option>
        </select>
    </div>

    <div class="tmisb-meta-field">
        <label for="tmisb_achievement_caption"><?php _e( 'Short Description / Subtitle', 'tmisb' ); ?></label>
        <textarea id="tmisb_achievement_caption" name="tmisb_achievement_caption" rows="2" placeholder="e.g. Top scores: Kumar Shubham (671/720) &amp; Tarbiya Niyom (668/720) with stellar national ranks."><?php echo esc_textarea( $caption ); ?></textarea>
        <p class="desc"><?php _e( '1-2 brief sentences summarizing student ranks, marks, or awards.', 'tmisb' ); ?></p>
    </div>

    <div class="tmisb-meta-field">
        <label><?php _e( 'Card Display Options', 'tmisb' ); ?></label>
        <div class="tmisb-checkboxes">
            <label class="tmisb-checkbox-label">
                <input type="checkbox" name="tmisb_achievement_show_home" value="1" <?php checked( $show_home, '1' ); ?>>
                <span><strong><?php _e( 'Show on Homepage Wall of Fame', 'tmisb' ); ?></strong> (Section 8.5)</span>
            </label>
            <label class="tmisb-checkbox-label">
                <input type="checkbox" name="tmisb_achievement_show_coaching" value="1" <?php checked( $show_coaching, '1' ); ?>>
                <span><strong><?php _e( 'Show on Competitive Coaching Page', 'tmisb' ); ?></strong> (Proven Track Record &amp; Media Highlights)</span>
            </label>
            <label class="tmisb-checkbox-label">
                <input type="checkbox" name="tmisb_achievement_image_only" value="1" <?php checked( $image_only, '1' ); ?>>
                <span><strong><?php _e( 'Image-Only Mode', 'tmisb' ); ?></strong> (Hides card text footer — ideal for full certificate scans or newspaper clippings)</span>
            </label>
        </div>
        <p class="desc"><?php _e( 'Note: All published achievements automatically appear on the main Gallery Wall of Fame page.', 'tmisb' ); ?></p>
    </div>
    <?php
}

function tmisb_save_achievement_meta( $post_id ) {
    if ( ! isset( $_POST['tmisb_achievement_meta_nonce'] ) || ! wp_verify_nonce( $_POST['tmisb_achievement_meta_nonce'], 'tmisb_save_achievement_meta' ) ) {
        return;
    }
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    if ( isset( $_POST['tmisb_achievement_badge'] ) ) {
        update_post_meta( $post_id, '_tmisb_achievement_badge', sanitize_text_field( $_POST['tmisb_achievement_badge'] ) );
    }
    if ( isset( $_POST['tmisb_achievement_badge_color'] ) ) {
        update_post_meta( $post_id, '_tmisb_achievement_badge_color', sanitize_key( $_POST['tmisb_achievement_badge_color'] ) );
    }
    if ( isset( $_POST['tmisb_achievement_caption'] ) ) {
        update_post_meta( $post_id, '_tmisb_achievement_caption', sanitize_textarea_field( $_POST['tmisb_achievement_caption'] ) );
    }

    update_post_meta( $post_id, '_tmisb_achievement_show_home', isset( $_POST['tmisb_achievement_show_home'] ) ? '1' : '0' );
    update_post_meta( $post_id, '_tmisb_achievement_show_coaching', isset( $_POST['tmisb_achievement_show_coaching'] ) ? '1' : '0' );
    update_post_meta( $post_id, '_tmisb_achievement_image_only', isset( $_POST['tmisb_achievement_image_only'] ) ? '1' : '0' );
}
add_action( 'save_post_tmisb_achievement', 'tmisb_save_achievement_meta' );

/**
 * 5. Admin Columns for Achievements
 */
function tmisb_achievement_columns( $columns ) {
    $new_columns = array();
    $new_columns['cb'] = $columns['cb'];
    $new_columns['thumbnail'] = __( 'Image', 'tmisb' );
    $new_columns['title'] = __( 'Achievement Title', 'tmisb' );
    $new_columns['badge'] = __( 'Badge / Category', 'tmisb' );
    $new_columns['locations'] = __( 'Display Locations', 'tmisb' );
    $new_columns['menu_order'] = __( 'Order', 'tmisb' );
    $new_columns['date'] = $columns['date'];
    return $new_columns;
}
add_filter( 'manage_tmisb_achievement_posts_columns', 'tmisb_achievement_columns' );

function tmisb_achievement_custom_column( $column, $post_id ) {
    switch ( $column ) {
        case 'thumbnail':
            if ( has_post_thumbnail( $post_id ) ) {
                echo get_the_post_thumbnail( $post_id, array( 60, 60 ), array( 'style' => 'width:50px;height:50px;object-fit:cover;border-radius:6px;border:1px solid #cbd5e1;' ) );
            } else {
                $legacy = get_post_meta( $post_id, '_tmisb_achievement_legacy_image', true );
                if ( $legacy ) {
                    echo '<img src="' . esc_url( get_template_directory_uri() . '/' . $legacy ) . '" style="width:50px;height:50px;object-fit:cover;border-radius:6px;border:1px solid #cbd5e1;">';
                } else {
                    echo '<span style="color:#94a3b8;font-size:12px;">No image</span>';
                }
            }
            break;
        case 'badge':
            $badge = get_post_meta( $post_id, '_tmisb_achievement_badge', true );
            $color = get_post_meta( $post_id, '_tmisb_achievement_badge_color', true ) ?: 'secondary';
            $bg = ( $color === 'primary' ) ? '#0b2545' : '#e63946';
            if ( $badge ) {
                echo '<span style="background:' . esc_attr( $bg ) . ';color:#fff;padding:3px 8px;border-radius:4px;font-size:11px;font-weight:600;">' . esc_html( $badge ) . '</span>';
            } else {
                echo '<span style="color:#94a3b8;">—</span>';
            }
            break;
        case 'locations':
            $locations = array( 'Gallery' );
            if ( get_post_meta( $post_id, '_tmisb_achievement_show_home', true ) === '1' ) {
                $locations[] = 'Homepage';
            }
            if ( get_post_meta( $post_id, '_tmisb_achievement_show_coaching', true ) === '1' ) {
                $locations[] = 'Coaching';
            }
            echo '<span style="font-size:12px;color:#334155;">' . esc_html( implode( ', ', $locations ) ) . '</span>';
            break;
        case 'menu_order':
            $post = get_post( $post_id );
            echo esc_html( $post->menu_order );
            break;
    }
}
add_action( 'manage_tmisb_achievement_posts_custom_column', 'tmisb_achievement_custom_column', 10, 2 );

/**
 * 6. Quick & Easy Seed Function for Achievements
 * Automatically inserts initial achievement posts if none exist, so the client has sample/live content to edit immediately.
 */
function tmisb_auto_seed_achievements() {
    if ( get_option( 'tmisb_achievements_auto_seeded' ) ) {
        return;
    }

    $existing = get_posts( array(
        'post_type'      => 'tmisb_achievement',
        'post_status'    => 'any',
        'posts_per_page' => 1,
    ) );

    if ( ! empty( $existing ) ) {
        update_option( 'tmisb_achievements_auto_seeded', 1 );
        return;
    }

    $default_achievements = array(
        array(
            'title'         => 'NEET 2022: 10 Students Qualified',
            'badge'         => 'Medical Entrance',
            'badge_color'   => 'secondary',
            'caption'       => 'Top scores: Kumar Shubham (671/720) & Tarbiya Niyom (668/720) with stellar national ranks.',
            'image'         => 'assets/images/achievement-neet-medical-toppers.jpg',
            'show_home'     => '1',
            'show_coaching' => '1',
            'image_only'    => '0',
            'order'         => 1,
        ),
        array(
            'title'         => 'Anuj Kumar (AIR 1015) & Arya Kumar',
            'badge'         => 'IIT-JEE Advanced',
            'badge_color'   => 'primary',
            'caption'       => '1st Attempt Success in JEE Advanced 2020: Anuj Kumar AIR 1015 (OBC 132) & Arya Kumar AIR 16275.',
            'image'         => 'assets/images/achievement-jee-topper-anuj-arya.jpg',
            'show_home'     => '1',
            'show_coaching' => '1',
            'image_only'    => '0',
            'order'         => 2,
        ),
        array(
            'title'         => '5 Students in IIT-JEE Advanced',
            'badge'         => 'National Merit',
            'badge_color'   => 'secondary',
            'caption'       => 'Exceptional percentiles: 99.90, 98.27, 97.27, 96.53 selected for JEE Advanced.',
            'image'         => 'assets/images/achievement-jee-5-students.jpg',
            'show_home'     => '1',
            'show_coaching' => '1',
            'image_only'    => '0',
            'order'         => 3,
        ),
        array(
            'title'         => 'ISRO Cyberspace Top 500',
            'badge'         => 'National Science',
            'badge_color'   => 'primary',
            'caption'       => 'Abhijeet Kumar & Ayush Kumar Singh shine in ISRO National Cyberspace Competition.',
            'image'         => 'assets/images/achievement-isro-cyber-space.jpg',
            'show_home'     => '1',
            'show_coaching' => '1',
            'image_only'    => '0',
            'order'         => 4,
        ),
        array(
            'title'         => 'Student Merit Certificate 1',
            'badge'         => 'Academic Excellence',
            'badge_color'   => 'primary',
            'caption'       => '',
            'image'         => 'Achievements/students_achievements_1771715819718_ewu4r8.jpg',
            'show_home'     => '0',
            'show_coaching' => '0',
            'image_only'    => '1',
            'order'         => 5,
        ),
        array(
            'title'         => 'Student Merit Certificate 2',
            'badge'         => 'National Laurels',
            'badge_color'   => 'secondary',
            'caption'       => '',
            'image'         => 'Achievements/students_achievements_1771715822383_5whp8p.jpg',
            'show_home'     => '0',
            'show_coaching' => '0',
            'image_only'    => '1',
            'order'         => 6,
        ),
        array(
            'title'         => 'Student Merit Certificate 3',
            'badge'         => 'Inter-School Laurels',
            'badge_color'   => 'primary',
            'caption'       => '',
            'image'         => 'Achievements/students_achievements_1771715823656_7xpfmn.jpg',
            'show_home'     => '0',
            'show_coaching' => '0',
            'image_only'    => '1',
            'order'         => 7,
        ),
        array(
            'title'         => 'Student Merit Certificate 4',
            'badge'         => 'State Competition',
            'badge_color'   => 'secondary',
            'caption'       => '',
            'image'         => 'Achievements/students_achievements_1771715825041_n6sp8rg.jpg',
            'show_home'     => '0',
            'show_coaching' => '0',
            'image_only'    => '1',
            'order'         => 8,
        ),
        array(
            'title'         => 'Student Merit Certificate 5',
            'badge'         => 'Board Merit',
            'badge_color'   => 'primary',
            'caption'       => '',
            'image'         => 'Achievements/students_achievements_1771715851488_sn61pa.png',
            'show_home'     => '0',
            'show_coaching' => '0',
            'image_only'    => '1',
            'order'         => 9,
        ),
    );

    require_once( ABSPATH . 'wp-admin/includes/image.php' );
    require_once( ABSPATH . 'wp-admin/includes/file.php' );
    require_once( ABSPATH . 'wp-admin/includes/media.php' );

    $upload_dir = wp_upload_dir();

    foreach ( $default_achievements as $item ) {
        $post_id = wp_insert_post( array(
            'post_title'     => $item['title'],
            'post_status'    => 'publish',
            'post_type'      => 'tmisb_achievement',
            'menu_order'     => $item['order'],
            'comment_status' => 'closed',
        ) );

        if ( $post_id && ! is_wp_error( $post_id ) ) {
            update_post_meta( $post_id, '_tmisb_achievement_badge', $item['badge'] );
            update_post_meta( $post_id, '_tmisb_achievement_badge_color', $item['badge_color'] );
            update_post_meta( $post_id, '_tmisb_achievement_caption', $item['caption'] );
            update_post_meta( $post_id, '_tmisb_achievement_show_home', $item['show_home'] );
            update_post_meta( $post_id, '_tmisb_achievement_show_coaching', $item['show_coaching'] );
            update_post_meta( $post_id, '_tmisb_achievement_image_only', $item['image_only'] );
            update_post_meta( $post_id, '_tmisb_achievement_legacy_image', $item['image'] );

            // Try to attach theme image to post
            $source_file = get_template_directory() . '/' . $item['image'];
            if ( file_exists( $source_file ) && ! empty( $upload_dir['path'] ) && is_writable( $upload_dir['path'] ) ) {
                $filename = basename( $source_file );
                $target_file = $upload_dir['path'] . '/' . wp_unique_filename( $upload_dir['path'], $filename );
                if ( @copy( $source_file, $target_file ) ) {
                    $filetype = wp_check_filetype( $filename, null );
                    $attachment = array(
                        'post_mime_type' => $filetype['type'],
                        'post_title'     => sanitize_file_name( $filename ),
                        'post_content'   => '',
                        'post_status'    => 'inherit'
                    );
                    $attach_id = wp_insert_attachment( $attachment, $target_file, $post_id );
                    if ( $attach_id && ! is_wp_error( $attach_id ) ) {
                        $attach_data = wp_generate_attachment_metadata( $attach_id, $target_file );
                        wp_update_attachment_metadata( $attach_id, $attach_data );
                        set_post_thumbnail( $post_id, $attach_id );
                    }
                }
            }
        }
    }

    update_option( 'tmisb_achievements_auto_seeded', 1 );
}
add_action( 'admin_init', 'tmisb_auto_seed_achievements' );

/**
 * 7. Custom Post Type: Notices (Notice Board)
 * Allows administrators to publish announcements, exam schedules, and circulars directly from WP Admin.
 */
function tmisb_register_notice_cpt() {
    $labels = array(
        'name'               => _x( 'Notices', 'Post type general name', 'tmisb' ),
        'singular_name'      => _x( 'Notice', 'Post type singular name', 'tmisb' ),
        'menu_name'          => _x( 'Notice Board', 'Admin Menu text', 'tmisb' ),
        'name_admin_bar'     => _x( 'Notice', 'Add New on Toolbar', 'tmisb' ),
        'add_new'            => __( 'Add New Notice', 'tmisb' ),
        'add_new_item'       => __( 'Add New School Notice', 'tmisb' ),
        'new_item'           => __( 'New Notice', 'tmisb' ),
        'edit_item'          => __( 'Edit Notice', 'tmisb' ),
        'view_item'          => __( 'View Notice', 'tmisb' ),
        'all_items'          => __( 'All Notices', 'tmisb' ),
        'search_items'       => __( 'Search Notices', 'tmisb' ),
        'not_found'          => __( 'No notices found.', 'tmisb' ),
        'not_found_in_trash' => __( 'No notices found in Trash.', 'tmisb' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'notice' ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 22,
        'menu_icon'          => 'dashicons-megaphone',
        'supports'           => array( 'title', 'page-attributes' ),
        'show_in_rest'       => true,
    );

    register_post_type( 'notice', $args );
}
add_action( 'init', 'tmisb_register_notice_cpt' );

/**
 * 8. Notice Meta Box: Attachment & Settings
 */
function tmisb_add_notice_meta_boxes() {
    add_meta_box(
        'tmisb_notice_details',
        __( 'Notice Attachment & Settings', 'tmisb' ),
        'tmisb_render_notice_meta_box',
        'notice',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'tmisb_add_notice_meta_boxes' );

function tmisb_render_notice_meta_box( $post ) {
    wp_nonce_field( 'tmisb_save_notice_meta', 'tmisb_notice_meta_nonce' );

    $file_url = get_post_meta( $post->ID, '_notice_file_url', true );
    $badge    = get_post_meta( $post->ID, '_notice_badge', true );
    ?>
    <div style="margin-bottom: 16px;">
        <label for="notice_file_url" style="display:block; font-weight:600; margin-bottom:6px; color:#1e293b; font-size:13px;"><?php _e( 'Notice Document / Attachment URL (PDF / Image / Link):', 'tmisb' ); ?></label>
        <input type="url" id="notice_file_url" name="notice_file_url" value="<?php echo esc_attr( $file_url ); ?>" style="width:100%; max-width:650px; padding:8px 12px; border:1px solid #cbd5e1; border-radius:6px; box-sizing:border-box;" placeholder="https://... or upload PDF to Media Library" />
        <p style="font-size:12px; color:#64748b; margin-top:4px;"><?php _e( 'When visitors click this notice on the homepage Notice Board, this document or link will open in a new tab.', 'tmisb' ); ?></p>
    </div>

    <div style="margin-bottom: 16px;">
        <label for="notice_badge" style="display:block; font-weight:600; margin-bottom:6px; color:#1e293b; font-size:13px;"><?php _e( 'Badge Tag (Optional):', 'tmisb' ); ?></label>
        <input type="text" id="notice_badge" name="notice_badge" value="<?php echo esc_attr( $badge ); ?>" style="width:200px; padding:8px 12px; border:1px solid #cbd5e1; border-radius:6px; box-sizing:border-box;" placeholder="e.g. New, Urgent, Exam" />
        <p style="font-size:12px; color:#64748b; margin-top:4px;"><?php _e( 'Leave empty to automatically show "New" on the most recent notice.', 'tmisb' ); ?></p>
    </div>
    <?php
}

function tmisb_save_notice_meta( $post_id ) {
    if ( ! isset( $_POST['tmisb_notice_meta_nonce'] ) || ! wp_verify_nonce( $_POST['tmisb_notice_meta_nonce'], 'tmisb_save_notice_meta' ) ) {
        return;
    }
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    if ( isset( $_POST['notice_file_url'] ) ) {
        update_post_meta( $post_id, '_notice_file_url', esc_url_raw( $_POST['notice_file_url'] ) );
    }
    if ( isset( $_POST['notice_badge'] ) ) {
        update_post_meta( $post_id, '_notice_badge', sanitize_text_field( $_POST['notice_badge'] ) );
    }
}
add_action( 'save_post_notice', 'tmisb_save_notice_meta' );

/**
 * 9. Admin Columns for Notice Board
 */
function tmisb_notice_columns( $columns ) {
    $new_columns = array();
    $new_columns['cb'] = $columns['cb'];
    $new_columns['title'] = __( 'Notice Title', 'tmisb' );
    $new_columns['badge'] = __( 'Badge', 'tmisb' );
    $new_columns['attachment'] = __( 'Attachment / Link', 'tmisb' );
    $new_columns['date'] = __( 'Notice Date', 'tmisb' );
    return $new_columns;
}
add_filter( 'manage_notice_posts_columns', 'tmisb_notice_columns' );

function tmisb_notice_custom_column( $column, $post_id ) {
    switch ( $column ) {
        case 'badge':
            $badge = get_post_meta( $post_id, '_notice_badge', true );
            if ( $badge ) {
                echo '<span style="background:#e63946;color:#fff;padding:2px 8px;border-radius:4px;font-size:11px;font-weight:600;">' . esc_html( $badge ) . '</span>';
            } else {
                echo '<span style="color:#94a3b8;">—</span>';
            }
            break;
        case 'attachment':
            $url = get_post_meta( $post_id, '_notice_file_url', true );
            if ( $url ) {
                echo '<a href="' . esc_url( $url ) . '" target="_blank" style="color:#0b2545;font-weight:600;font-size:12px;">' . __( 'View File', 'tmisb' ) . ' <i class="fas fa-external-link-alt" style="font-size:10px;"></i></a>';
            } else {
                echo '<span style="color:#94a3b8;font-size:12px;">' . __( 'None (Text Only)', 'tmisb' ) . '</span>';
            }
            break;
    }
}
add_action( 'manage_notice_posts_custom_column', 'tmisb_notice_custom_column', 10, 2 );

/**
 * 10. Auto-Seed Initial Notices
 */
function tmisb_auto_seed_notices() {
    if ( get_option( 'tmisb_notices_auto_seeded' ) ) {
        return;
    }

    $existing = get_posts( array(
        'post_type'      => 'notice',
        'post_status'    => 'any',
        'posts_per_page' => 1,
    ) );

    if ( ! empty( $existing ) ) {
        update_option( 'tmisb_notices_auto_seeded', 1 );
        return;
    }

    $default_notices = array(
        array(
            'title' => 'Parent-Teacher Meeting Schedule for Middle School',
            'badge' => 'New',
            'date'  => date( 'Y-m-d H:i:s', strtotime( '-2 days' ) ),
        ),
        array(
            'title' => 'Half-Yearly Examination Timetable Released for All Classes',
            'badge' => '',
            'date'  => date( 'Y-m-d H:i:s', strtotime( '-7 days' ) ),
        ),
        array(
            'title' => 'Winter Uniform Guidelines for the Upcoming Session',
            'badge' => '',
            'date'  => date( 'Y-m-d H:i:s', strtotime( '-20 days' ) ),
        ),
        array(
            'title' => 'Annual Sports Meet Registration Now Open',
            'badge' => '',
            'date'  => date( 'Y-m-d H:i:s', strtotime( '-24 days' ) ),
        ),
        array(
            'title' => 'School Closed for Public Holiday on Friday',
            'badge' => '',
            'date'  => date( 'Y-m-d H:i:s', strtotime( '-27 days' ) ),
        ),
    );

    foreach ( $default_notices as $notice ) {
        $post_id = wp_insert_post( array(
            'post_title'     => $notice['title'],
            'post_status'    => 'publish',
            'post_type'      => 'notice',
            'post_date'      => $notice['date'],
            'comment_status' => 'closed',
        ) );

        if ( $post_id && ! is_wp_error( $post_id ) ) {
            if ( ! empty( $notice['badge'] ) ) {
                update_post_meta( $post_id, '_notice_badge', $notice['badge'] );
            }
        }
    }

    update_option( 'tmisb_notices_auto_seeded', 1 );
}
add_action( 'admin_init', 'tmisb_auto_seed_notices' );

/**
 * 7. Custom Post Type: Campus Gallery (Our Campus & Activities)
 * Allows administrators to add/edit campus and activity photos, set categories (Campus, Academics, Sports & Events),
 * write captions, choose card width (Standard vs Wide), and manage display order directly from WP Admin.
 */
function tmisb_register_gallery_cpt() {
    $labels = array(
        'name'                  => _x( 'Campus Gallery', 'Post type general name', 'tmisb' ),
        'singular_name'         => _x( 'Gallery Photo', 'Post type singular name', 'tmisb' ),
        'menu_name'             => _x( 'Campus Gallery', 'Admin Menu text', 'tmisb' ),
        'name_admin_bar'        => _x( 'Gallery Photo', 'Add New on Toolbar', 'tmisb' ),
        'add_new'               => __( 'Add New Photo', 'tmisb' ),
        'add_new_item'          => __( 'Add New Campus Gallery Photo', 'tmisb' ),
        'new_item'              => __( 'New Photo', 'tmisb' ),
        'edit_item'             => __( 'Edit Gallery Photo', 'tmisb' ),
        'view_item'             => __( 'View Photo', 'tmisb' ),
        'all_items'             => __( 'All Gallery Photos', 'tmisb' ),
        'search_items'          => __( 'Search Gallery', 'tmisb' ),
        'not_found'             => __( 'No photos found.', 'tmisb' ),
        'not_found_in_trash'    => __( 'No photos found in Trash.', 'tmisb' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'campus-gallery' ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 22,
        'menu_icon'          => 'dashicons-format-gallery',
        'supports'           => array( 'title', 'thumbnail', 'page-attributes' ),
        'show_in_rest'       => true,
    );

    register_post_type( 'tmisb_gallery', $args );
}
add_action( 'init', 'tmisb_register_gallery_cpt' );

/**
 * Custom Meta Box for Campus Gallery
 */
function tmisb_add_gallery_meta_boxes() {
    add_meta_box(
        'tmisb_gallery_details',
        __( 'Photo Details & Category Settings', 'tmisb' ),
        'tmisb_render_gallery_meta_box',
        'tmisb_gallery',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'tmisb_add_gallery_meta_boxes' );

function tmisb_render_gallery_meta_box( $post ) {
    wp_nonce_field( 'tmisb_save_gallery_meta', 'tmisb_gallery_meta_nonce' );

    $category    = get_post_meta( $post->ID, '_tmisb_gallery_category', true ) ?: 'campus';
    $caption     = get_post_meta( $post->ID, '_tmisb_gallery_caption', true );
    $layout      = get_post_meta( $post->ID, '_tmisb_gallery_layout', true ) ?: 'standard';
    $legacy_img  = get_post_meta( $post->ID, '_tmisb_gallery_legacy_image', true );
    ?>
    <style>
        .tmisb-gallery-meta-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-top: 10px; }
        .tmisb-gallery-meta-field { margin-bottom: 14px; }
        .tmisb-gallery-meta-field label { display: block; font-weight: 600; margin-bottom: 5px; color: #1e293b; }
        .tmisb-gallery-meta-field input[type="text"], .tmisb-gallery-meta-field select { width: 100%; max-width: 480px; }
        .tmisb-gallery-meta-desc { font-size: 12px; color: #64748b; margin-top: 4px; }
    </style>

    <div class="tmisb-gallery-meta-grid">
        <div class="tmisb-gallery-meta-field">
            <label for="tmisb_gallery_category"><?php _e( 'Filter Category', 'tmisb' ); ?></label>
            <select name="tmisb_gallery_category" id="tmisb_gallery_category">
                <option value="campus" <?php selected( $category, 'campus' ); ?>><?php _e( 'Campus (Infrastructure & Grounds)', 'tmisb' ); ?></option>
                <option value="academics" <?php selected( $category, 'academics' ); ?>><?php _e( 'Academics (Classrooms, Labs & Study)', 'tmisb' ); ?></option>
                <option value="sports" <?php selected( $category, 'sports' ); ?>><?php _e( 'Sports & Events (Fests, Activities & Celebrations)', 'tmisb' ); ?></option>
            </select>
            <p class="tmisb-gallery-meta-desc"><?php _e( 'Determines which filter button shows this photo on the Gallery page.', 'tmisb' ); ?></p>
        </div>

        <div class="tmisb-gallery-meta-field">
            <label for="tmisb_gallery_layout"><?php _e( 'Grid Card Layout', 'tmisb' ); ?></label>
            <select name="tmisb_gallery_layout" id="tmisb_gallery_layout">
                <option value="standard" <?php selected( $layout, 'standard' ); ?>><?php _e( 'Standard (1 Column Square)', 'tmisb' ); ?></option>
                <option value="wide" <?php selected( $layout, 'wide' ); ?>><?php _e( 'Wide Feature Card (2 Columns)', 'tmisb' ); ?></option>
            </select>
            <p class="tmisb-gallery-meta-desc"><?php _e( 'Use Wide Feature Card for highlight photos like Morning Assembly or Panoramic Campus views.', 'tmisb' ); ?></p>
        </div>
    </div>

    <div class="tmisb-gallery-meta-field">
        <label for="tmisb_gallery_caption"><?php _e( 'Subtitle / Caption (Shown on Hover)', 'tmisb' ); ?></label>
        <input type="text" name="tmisb_gallery_caption" id="tmisb_gallery_caption" value="<?php echo esc_attr( $caption ); ?>" placeholder="<?php esc_attr_e( 'e.g. State-of-the-art interactive smart boards', 'tmisb' ); ?>">
        <p class="tmisb-gallery-meta-desc"><?php _e( 'Appears underneath the title when visitors hover over the photo card.', 'tmisb' ); ?></p>
    </div>

    <div class="tmisb-gallery-meta-field" style="margin-top: 15px; padding-top: 12px; border-top: 1px solid #e2e8f0;">
        <label for="tmisb_gallery_legacy_image"><?php _e( 'Theme Bundled Image Path (Optional Fallback)', 'tmisb' ); ?></label>
        <input type="text" name="tmisb_gallery_legacy_image" id="tmisb_gallery_legacy_image" value="<?php echo esc_attr( $legacy_img ); ?>" placeholder="assets/images/campus-building-front.jpg">
        <p class="tmisb-gallery-meta-desc"><?php _e( 'If no Featured Image is uploaded, the theme loads this bundled file path.', 'tmisb' ); ?></p>
    </div>
    <?php
}

function tmisb_save_gallery_meta( $post_id ) {
    if ( ! isset( $_POST['tmisb_gallery_meta_nonce'] ) || ! wp_verify_nonce( $_POST['tmisb_gallery_meta_nonce'], 'tmisb_save_gallery_meta' ) ) {
        return;
    }
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    if ( isset( $_POST['tmisb_gallery_category'] ) ) {
        update_post_meta( $post_id, '_tmisb_gallery_category', sanitize_text_field( $_POST['tmisb_gallery_category'] ) );
    }
    if ( isset( $_POST['tmisb_gallery_caption'] ) ) {
        update_post_meta( $post_id, '_tmisb_gallery_caption', sanitize_text_field( $_POST['tmisb_gallery_caption'] ) );
    }
    if ( isset( $_POST['tmisb_gallery_layout'] ) ) {
        update_post_meta( $post_id, '_tmisb_gallery_layout', sanitize_text_field( $_POST['tmisb_gallery_layout'] ) );
    }
    if ( isset( $_POST['tmisb_gallery_legacy_image'] ) ) {
        update_post_meta( $post_id, '_tmisb_gallery_legacy_image', sanitize_text_field( $_POST['tmisb_gallery_legacy_image'] ) );
    }
}
add_action( 'save_post_tmisb_gallery', 'tmisb_save_gallery_meta' );

/**
 * Custom Columns in WP Admin for Campus Gallery
 */
function tmisb_set_gallery_columns( $columns ) {
    $new_cols = array();
    $new_cols['cb']          = $columns['cb'];
    $new_cols['photo_thumb'] = __( 'Photo', 'tmisb' );
    $new_cols['title']       = __( 'Title', 'tmisb' );
    $new_cols['category']    = __( 'Category', 'tmisb' );
    $new_cols['caption']     = __( 'Caption', 'tmisb' );
    $new_cols['layout']      = __( 'Card Size', 'tmisb' );
    $new_cols['order']       = __( 'Order', 'tmisb' );
    $new_cols['date']        = $columns['date'];
    return $new_cols;
}
add_filter( 'manage_tmisb_gallery_posts_columns', 'tmisb_set_gallery_columns' );

function tmisb_custom_gallery_column( $column, $post_id ) {
    switch ( $column ) {
        case 'photo_thumb':
            if ( has_post_thumbnail( $post_id ) ) {
                echo get_the_post_thumbnail( $post_id, array( 60, 60 ), array( 'style' => 'width:55px;height:55px;object-fit:cover;border-radius:6px;' ) );
            } else {
                $legacy = get_post_meta( $post_id, '_tmisb_gallery_legacy_image', true );
                if ( $legacy ) {
                    echo '<img src="' . esc_url( get_template_directory_uri() . '/' . $legacy ) . '" style="width:55px;height:55px;object-fit:cover;border-radius:6px;">';
                } else {
                    echo '<span style="color:#94a3b8;font-size:11px;">No photo</span>';
                }
            }
            break;
        case 'category':
            $cat = get_post_meta( $post_id, '_tmisb_gallery_category', true ) ?: 'campus';
            $labels = array(
                'campus'    => '<span style="background:#e0f2fe;color:#0369a1;padding:2px 8px;border-radius:12px;font-weight:600;font-size:11px;">Campus</span>',
                'academics' => '<span style="background:#fef3c7;color:#b45309;padding:2px 8px;border-radius:12px;font-weight:600;font-size:11px;">Academics</span>',
                'sports'    => '<span style="background:#fce7f3;color:#be185d;padding:2px 8px;border-radius:12px;font-weight:600;font-size:11px;">Sports & Events</span>',
            );
            echo isset( $labels[$cat] ) ? $labels[$cat] : esc_html( ucfirst( $cat ) );
            break;
        case 'caption':
            $caption = get_post_meta( $post_id, '_tmisb_gallery_caption', true );
            echo ! empty( $caption ) ? '<span style="font-size:12px;color:#475569;">' . esc_html( $caption ) . '</span>' : '<span style="color:#94a3b8;">—</span>';
            break;
        case 'layout':
            $layout = get_post_meta( $post_id, '_tmisb_gallery_layout', true ) ?: 'standard';
            echo ( $layout === 'wide' ) ? '<strong style="color:#003c71;">Wide (2 Col)</strong>' : '<span style="color:#64748b;">Standard (1 Col)</span>';
            break;
        case 'order':
            $post = get_post( $post_id );
            echo esc_html( $post->menu_order );
            break;
    }
}
add_action( 'manage_tmisb_gallery_posts_custom_column', 'tmisb_custom_gallery_column', 10, 2 );

/**
 * Auto-seeder for Campus Gallery Photos
 */
function tmisb_auto_seed_gallery() {
    if ( get_option( 'tmisb_gallery_auto_seeded' ) ) {
        return;
    }

    $existing_count = wp_count_posts( 'tmisb_gallery' );
    if ( ! empty( $existing_count->publish ) && (int) $existing_count->publish > 0 ) {
        update_option( 'tmisb_gallery_auto_seeded', 1 );
        return;
    }

    $default_photos = array(
        array(
            'title'    => 'Senior Secondary Scholars & Campus Pride',
            'caption'  => 'Graduating batch and student leaders proudly photographed in front of the TMISB campus building',
            'category' => 'campus',
            'layout'   => 'wide',
            'image'    => 'assets/images/client-images/techno-mission-group-photo.jpg',
            'order'    => 1,
        ),
        array(
            'title'    => 'Main Campus',
            'caption'  => 'State-of-the-art infrastructure',
            'category' => 'campus',
            'layout'   => 'standard',
            'image'    => 'assets/images/campus-building-front.jpg',
            'order'    => 2,
        ),
        array(
            'title'    => 'Smart Classrooms',
            'caption'  => 'Interactive learning environments',
            'category' => 'academics',
            'layout'   => 'standard',
            'image'    => 'School Images/classrooms_learning_1771715713266_lltmd9.jpg',
            'order'    => 2,
        ),
        array(
            'title'    => 'Science Labs',
            'caption'  => 'Practical experimentation',
            'category' => 'academics',
            'layout'   => 'standard',
            'image'    => 'school images google/Science lab.webp',
            'order'    => 3,
        ),
        array(
            'title'    => 'Morning Assembly & Culture',
            'caption'  => 'Discipline, spiritual harmony, and values every morning',
            'category' => 'campus',
            'layout'   => 'wide',
            'image'    => 'assets/images/morning-assembly-students.jpg',
            'order'    => 4,
        ),
        array(
            'title'    => 'Central Library & Reading Hall',
            'caption'  => 'A vast collection of knowledge and quiet reading halls',
            'category' => 'campus',
            'layout'   => 'standard',
            'image'    => 'assets/images/client-images/library.jpeg',
            'order'    => 5,
        ),
        array(
            'title'    => 'Group Study',
            'caption'  => 'Collaborative learning',
            'category' => 'academics',
            'layout'   => 'standard',
            'image'    => 'school images google/685f11c1b5a24f6bbf7ff382b40717c5.webp',
            'order'    => 6,
        ),
        array(
            'title'    => 'Cultural Fest',
            'caption'  => 'Celebrating diversity and arts',
            'category' => 'sports',
            'layout'   => 'standard',
            'image'    => 'School Images/classrooms_learning_1771715744842_14puoq.jpg',
            'order'    => 7,
        ),
    );

    foreach ( $default_photos as $item ) {
        $post_id = wp_insert_post( array(
            'post_title'     => $item['title'],
            'post_status'    => 'publish',
            'post_type'      => 'tmisb_gallery',
            'menu_order'     => $item['order'],
            'comment_status' => 'closed',
        ) );

        if ( $post_id && ! is_wp_error( $post_id ) ) {
            update_post_meta( $post_id, '_tmisb_gallery_category', $item['category'] );
            update_post_meta( $post_id, '_tmisb_gallery_caption', $item['caption'] );
            update_post_meta( $post_id, '_tmisb_gallery_layout', $item['layout'] );
            update_post_meta( $post_id, '_tmisb_gallery_legacy_image', $item['image'] );
        }
    }

    update_option( 'tmisb_gallery_auto_seeded', 1 );
}
add_action( 'admin_init', 'tmisb_auto_seed_gallery' );

?>`;
fs.writeFileSync(path.join(THEME_DIR, 'functions.php'), functionsPhpContent);

// 3. Create index.php (fallback)
const indexPhpContent = `<?php get_header(); ?>
<main class="py-16 bg-white min-h-[50vh]">
    <div class="container mx-auto px-4 max-w-5xl">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                the_title('<h1 class="nav-font font-bold text-3xl md:text-4xl text-primary mb-6">', '</h1>');
                the_content();
            endwhile;
        else :
            echo '<p class="text-gray-600">No content found.</p>';
        endif;
        ?>
    </div>
</main>
<?php get_footer(); ?>`;
fs.writeFileSync(path.join(THEME_DIR, 'index.php'), indexPhpContent);

// 4. Create 404.php (rich educational error portal)
if (fs.existsSync(path.join(__dirname, '404.html'))) {
    let errContent = fs.readFileSync(path.join(__dirname, '404.html'), 'utf8');
    let errHeaderEnd = errContent.indexOf('<main');
    let errFooterStart = errContent.indexOf('<footer');
    if (errHeaderEnd !== -1 && errFooterStart !== -1) {
        let errBody = errContent.substring(errHeaderEnd, errFooterStart);
        errBody = errBody.replace(/href="index\.html"/g, 'href="<?php echo home_url(\'/\'); ?>"');
        errBody = errBody.replace(/href="contact\.html"/g, 'href="<?php echo home_url(\'/contact/\'); ?>"');
        errBody = errBody.replace(/href="admissions\.html"/g, 'href="<?php echo home_url(\'/admissions/\'); ?>"');
        errBody = errBody.replace(/href="gallery\.html"/g, 'href="<?php echo home_url(\'/gallery/\'); ?>"');
        errBody = errBody.replace(/href="academics\.html"/g, 'href="<?php echo home_url(\'/academics/\'); ?>"');
        let errPhp = `<?php get_header(); ?>\n` + errBody + `\n<?php get_footer(); ?>`;
        fs.writeFileSync(path.join(THEME_DIR, '404.php'), errPhp);
        console.log('Generated rich 404.php from 404.html.');
    }
}

// 5. Generate header.php
const headerTemplate = `<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;600;700;800;900&family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,600&family=Playfair+Display:ital,wght@0,600;0,700;1,400;1,600&family=Poppins:wght@400;500;600;700;800&family=Open+Sans:wght@300;400;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css?v=<?php echo time(); ?>">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#003c71', // Classic Navy Blue
                        primaryDark: '#002244', // Darker Navy
                        secondary: '#e31837', // Vivid Red
                        secondaryDark: '#c2142d',
                        secondaryLight: '#ffffff',
                        accent: '#ffb703',
                        lightBg: '#f8f9fa',
                        darkText: '#1e293b'
                    },
                    fontFamily: {
                        sans: ['"Open Sans"', '"Plus Jakarta Sans"', 'sans-serif'],
                        heading: ['"Poppins"', 'sans-serif'],
                        serif: ['"Playfair Display"', 'serif'],
                        cinzel: ['"Cinzel"', 'serif'],
                        inter: ['"Inter"', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script defer src="<?php echo get_template_directory_uri(); ?>/js/animations.js?v=<?php echo time(); ?>"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'font-sans text-darkText bg-white antialiased' ); ?> x-data="{ mobileMenuOpen: false }">
<?php wp_body_open(); ?>
`;

// Extract navigation from index.html
let indexContent = fs.readFileSync(path.join(__dirname, 'index.html'), 'utf8');
let topHeaderStart = indexContent.indexOf('<!-- 1. Top Bar');
if (topHeaderStart === -1) topHeaderStart = indexContent.indexOf('class="bg-primaryDark text-white');
if (topHeaderStart === -1) topHeaderStart = indexContent.indexOf('<!-- Top Bar');
let heroStart = indexContent.indexOf('<!-- 3. Hero Section');
if (heroStart === -1) heroStart = indexContent.indexOf('<section class="swiper hero-swiper');
let navHtml = indexContent.substring(topHeaderStart, heroStart);

function fixAssetPaths(html) {
    let out = html;
    
    // 1. Fix src attributes
    out = out.replace(/src="assets\//g, 'src="<?php echo get_template_directory_uri(); ?>/assets/');
    out = out.replace(/src="school images google\//g, 'src="<?php echo get_template_directory_uri(); ?>/school images google/');
    out = out.replace(/src="School Images\//g, 'src="<?php echo get_template_directory_uri(); ?>/School Images/');
    out = out.replace(/src="Achievements\//g, 'src="<?php echo get_template_directory_uri(); ?>/Achievements/');
    out = out.replace(/src="Notice\.png"/g, 'src="<?php echo get_template_directory_uri(); ?>/Notice.png"');
    out = out.replace(/src="js\//g, 'src="<?php echo get_template_directory_uri(); ?>/js/');
    out = out.replace(/href="css\//g, 'href="<?php echo get_template_directory_uri(); ?>/css/');

    // 2. Fix CSS inline background-image url() attributes (CRITICAL: fixes hero section images)
    out = out.replace(/url\(['"]?assets\//g, "url('<?php echo get_template_directory_uri(); ?>/assets/");
    out = out.replace(/url\(['"]?school images google\//g, "url('<?php echo get_template_directory_uri(); ?>/school images google/");
    out = out.replace(/url\(['"]?School Images\//g, "url('<?php echo get_template_directory_uri(); ?>/School Images/");
    out = out.replace(/url\(['"]?Achievements\//g, "url('<?php echo get_template_directory_uri(); ?>/Achievements/");
    out = out.replace(/url\(['"]?Notice\.png['"]?\)/g, "url('<?php echo get_template_directory_uri(); ?>/Notice.png')");
    
    // 3. Convert links to WordPress URLs
    out = out.replace(/href="index\.html"/g, 'href="<?php echo home_url(\'/\'); ?>"');
    out = out.replace(/href="about\.html#([^"]+)"/g, 'href="<?php echo home_url(\'/about/#$1\'); ?>"');
    out = out.replace(/href="about\.html"/g, 'href="<?php echo home_url(\'/about/\'); ?>"');
    out = out.replace(/href="academics\.html#([^"]+)"/g, 'href="<?php echo home_url(\'/academics/#$1\'); ?>"');
    out = out.replace(/href="academics\.html"/g, 'href="<?php echo home_url(\'/academics/\'); ?>"');
    out = out.replace(/href="facilities\.html#([^"]+)"/g, 'href="<?php echo home_url(\'/facilities/#$1\'); ?>"');
    out = out.replace(/href="facilities\.html"/g, 'href="<?php echo home_url(\'/facilities/\'); ?>"');
    out = out.replace(/href="admissions\.html#([^"]+)"/g, 'href="<?php echo home_url(\'/admissions/#$1\'); ?>"');
    out = out.replace(/href="admissions\.html"/g, 'href="<?php echo home_url(\'/admissions/\'); ?>"');
    out = out.replace(/href="gallery\.html"/g, 'href="<?php echo home_url(\'/gallery/\'); ?>"');
    out = out.replace(/href="contact\.html"/g, 'href="<?php echo home_url(\'/contact/\'); ?>"');
    out = out.replace(/href="pre-primary\.html"/g, 'href="<?php echo home_url(\'/pre-primary/\'); ?>"');
    out = out.replace(/href="primary\.html"/g, 'href="<?php echo home_url(\'/primary/\'); ?>"');
    out = out.replace(/href="secondary\.html"/g, 'href="<?php echo home_url(\'/secondary/\'); ?>"');
    out = out.replace(/href="senior-secondary\.html"/g, 'href="<?php echo home_url(\'/senior-secondary/\'); ?>"');
    out = out.replace(/href="competitive-coaching\.html"/g, 'href="<?php echo home_url(\'/competitive-coaching/\'); ?>"');
    out = out.replace(/href="teaching-methodology\.html"/g, 'href="<?php echo home_url(\'/teaching-methodology/\'); ?>"');
    out = out.replace(/href="cbse-disclosure\.html#([^"]+)"/g, 'href="<?php echo home_url(\'/cbse-disclosure/#$1\'); ?>"');
    out = out.replace(/href="cbse-disclosure\.html"/g, 'href="<?php echo home_url(\'/cbse-disclosure/\'); ?>"');
    
    return out;
}

const finalHeader = headerTemplate + fixAssetPaths(navHtml);
fs.writeFileSync(path.join(THEME_DIR, 'header.php'), finalHeader);
console.log('Generated complete header.php with full desktop & mobile navigation.');

// 6. Generate footer.php
let footerStart = indexContent.indexOf('<footer');
let bodyEnd = indexContent.indexOf('</body>');
let footerHtml = indexContent.substring(footerStart, bodyEnd);

const footerTemplate = fixAssetPaths(footerHtml) + `
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js?v=<?php echo time(); ?>"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/animations.js?v=<?php echo time(); ?>"></script>
    <?php wp_footer(); ?>
</body>
</html>`;
fs.writeFileSync(path.join(THEME_DIR, 'footer.php'), footerTemplate);
console.log('Generated footer.php.');

// 7. Generate page templates
const pages = [
    { file: 'index.html', template: 'front-page.php' },
    { file: 'about.html', template: 'page-about.php' },
    { file: 'academics.html', template: 'page-academics.php' },
    { file: 'gallery.html', template: 'page-gallery.php' },
    { file: 'contact.html', template: 'page-contact.php' },
    { file: 'facilities.html', template: 'page-facilities.php' },
    { file: 'admissions.html', template: 'page-admissions.php' },
    { file: 'pre-primary.html', template: 'page-pre-primary.php' },
    { file: 'primary.html', template: 'page-primary.php' },
    { file: 'secondary.html', template: 'page-secondary.php' },
    { file: 'senior-secondary.html', template: 'page-senior-secondary.php' },
    { file: 'competitive-coaching.html', template: 'page-competitive-coaching.php' },
    { file: 'teaching-methodology.html', template: 'page-teaching-methodology.php' },
    { file: 'cbse-disclosure.html', template: 'page-cbse-disclosure.php' },
];

pages.forEach(p => {
    const pagePath = path.join(__dirname, p.file);
    if (fs.existsSync(pagePath)) {
        let content = fs.readFileSync(pagePath, 'utf8');
        
        let headerEnd = content.indexOf('<!-- Page Header -->');
        if (headerEnd === -1) {
            headerEnd = content.indexOf('<!-- 3. Hero Section');
        }
        if (headerEnd === -1) {
            headerEnd = content.indexOf('<section class="swiper');
        }
        
        let footerStart = content.indexOf('<footer');
        
        if (headerEnd !== -1 && footerStart !== -1) {
            let bodyContent = content.substring(headerEnd, footerStart);
            bodyContent = fixAssetPaths(bodyContent);
            
            // Admissions Forminator hook
            if (p.template === 'page-admissions.php') {
                const formStart = bodyContent.indexOf('<form class="space-y-4"');
                const formEnd = bodyContent.indexOf('</form>', formStart);
                if (formStart !== -1 && formEnd !== -1) {
                    const fallbackForm = bodyContent.substring(formStart, formEnd + 7);
                    const phpReplacement = `<?php
// Display Forminator Admissions form if available, otherwise show styled template form
$form_rendered = false;
if ( shortcode_exists( 'forminator_form' ) ) {
    $form_posts = get_posts( array(
        'post_type'      => 'forminator_forms',
        'post_status'    => 'publish',
        's'              => 'Admission',
        'posts_per_page' => 1,
    ) );
    if ( empty( $form_posts ) ) {
        $form_posts = get_posts( array(
            'post_type'      => 'forminator_forms',
            'post_status'    => 'publish',
            'posts_per_page' => 1,
        ) );
    }
    if ( ! empty( $form_posts ) ) {
        echo do_shortcode( '[forminator_form id="' . $form_posts[0]->ID . '"]' );
        $form_rendered = true;
    }
}
if ( ! $form_rendered ) :
?>
${fallbackForm}
<?php endif; ?>`;
                    bodyContent = bodyContent.substring(0, formStart) + phpReplacement + bodyContent.substring(formEnd + 7);
                }
            }

            // Contact Forminator hook
            if (p.template === 'page-contact.php') {
                const formStart = bodyContent.indexOf('<form action="#" method="POST" class="space-y-4">');
                const formEnd = bodyContent.indexOf('</form>', formStart);
                if (formStart !== -1 && formEnd !== -1) {
                    const fallbackForm = bodyContent.substring(formStart, formEnd + 7);
                    const phpReplacement = `<?php
// Display Forminator Contact form if available, otherwise show styled template form
$form_rendered = false;
if ( shortcode_exists( 'forminator_form' ) ) {
    $contact_forms = get_posts( array(
        'post_type'      => 'forminator_forms',
        'post_status'    => 'publish',
        's'              => 'Contact',
        'posts_per_page' => 1,
    ) );
    if ( ! empty( $contact_forms ) ) {
        echo do_shortcode( '[forminator_form id="' . $contact_forms[0]->ID . '"]' );
        $form_rendered = true;
    }
}
if ( ! $form_rendered ) :
?>
${fallbackForm}
<?php endif; ?>`;
                    bodyContent = bodyContent.substring(0, formStart) + phpReplacement + bodyContent.substring(formEnd + 7);
                }
            }

            // Dynamic Achievements Hook for Gallery Page
            if (p.template === 'page-gallery.php') {
                const achSectionIdx = bodyContent.indexOf('id="achievements"');
                if (achSectionIdx !== -1) {
                    const gridMarker = '<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">';
                    const gridStart = bodyContent.indexOf(gridMarker, achSectionIdx);
                    if (gridStart !== -1) {
                        const gridEndMarker = '</div>\n        </div>\n    </section>';
                        const gridEndMarkerCRLF = '</div>\r\n        </div>\r\n    </section>';
                        let gridEnd = bodyContent.indexOf(gridEndMarker, gridStart);
                        let markerLen = gridEndMarker.length;
                        if (gridEnd === -1) {
                            gridEnd = bodyContent.indexOf(gridEndMarkerCRLF, gridStart);
                            markerLen = gridEndMarkerCRLF.length;
                        }
                        if (gridEnd !== -1) {
                            const fallbackCards = bodyContent.substring(gridStart + gridMarker.length, gridEnd);
                            const dynamicGalleryPhp = `${gridMarker}
            <?php
            $gallery_achievements = new WP_Query( array(
                'post_type'      => 'tmisb_achievement',
                'posts_per_page' => -1,
                'post_status'    => 'publish',
                'orderby'        => array( 'menu_order' => 'ASC', 'date' => 'DESC' ),
            ) );

            if ( $gallery_achievements->have_posts() ) :
                while ( $gallery_achievements->have_posts() ) : $gallery_achievements->the_post();
                    $badge        = get_post_meta( get_the_ID(), '_tmisb_achievement_badge', true );
                    $badge_color  = get_post_meta( get_the_ID(), '_tmisb_achievement_badge_color', true ) ?: 'secondary';
                    $caption      = get_post_meta( get_the_ID(), '_tmisb_achievement_caption', true );
                    $image_only   = get_post_meta( get_the_ID(), '_tmisb_achievement_image_only', true );
                    $legacy_img   = get_post_meta( get_the_ID(), '_tmisb_achievement_legacy_image', true );
                    
                    $img_url = get_the_post_thumbnail_url( get_the_ID(), 'large' );
                    if ( ! $img_url && $legacy_img ) {
                        $img_url = get_template_directory_uri() . '/' . $legacy_img;
                    }
                    $badge_class = ( $badge_color === 'primary' ) ? 'text-primary' : 'text-secondary';
            ?>
                <?php if ( $image_only === '1' ) : ?>
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 group">
                        <?php if ( $img_url ) : ?>
                            <img src="<?php echo esc_url( $img_url ); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-auto object-contain transition-transform duration-700 group-hover:scale-105">
                        <?php endif; ?>
                    </div>
                <?php else : ?>
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 group flex flex-col">
                        <div class="p-3 bg-gray-50 flex items-center justify-center flex-grow">
                            <?php if ( $img_url ) : ?>
                                <img src="<?php echo esc_url( $img_url ); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-auto max-h-[380px] object-contain transition-transform duration-700 group-hover:scale-105">
                            <?php else : ?>
                                <div class="w-full h-64 bg-gray-100 flex items-center justify-center text-gray-400">
                                    <i class="fas fa-award text-4xl"></i>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="p-4 border-t border-gray-100 bg-white">
                            <?php if ( ! empty( $badge ) ) : ?>
                                <span class="text-[10px] font-bold uppercase tracking-wider <?php echo esc_attr( $badge_class ); ?>"><?php echo esc_html( $badge ); ?></span>
                            <?php endif; ?>
                            <h4 class="nav-font font-bold text-base text-primary"><?php the_title(); ?></h4>
                            <?php if ( ! empty( $caption ) ) : ?>
                                <p class="text-xs text-gray-500 mt-1"><?php echo esc_html( $caption ); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
            ?>
${fallbackCards}
            <?php endif; ?>
            </div>
        </div>
    </section>`;
                            bodyContent = bodyContent.substring(0, gridStart) + dynamicGalleryPhp + bodyContent.substring(gridEnd + markerLen);
                        }
                    }
                }
            }

            // Dynamic Campus Gallery Hook for Gallery Page (Our Campus & Activities)
            if (p.template === 'page-gallery.php') {
                const campusSecIdx = bodyContent.indexOf('Our Campus & Activities');
                if (campusSecIdx !== -1) {
                    const gridMarker = '<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">';
                    const gridStart = bodyContent.indexOf(gridMarker, campusSecIdx);
                    if (gridStart !== -1) {
                        const gridEndMarker = '</div>\n            \n            <div class="text-center mt-12">';
                        const gridEndMarkerCRLF = '</div>\r\n            \r\n            <div class="text-center mt-12">';
                        let gridEnd = bodyContent.indexOf(gridEndMarker, gridStart);
                        let markerLen = gridEndMarker.length;
                        if (gridEnd === -1) {
                            gridEnd = bodyContent.indexOf(gridEndMarkerCRLF, gridStart);
                            markerLen = gridEndMarkerCRLF.length;
                        }
                        if (gridEnd !== -1) {
                            const fallbackCards = bodyContent.substring(gridStart + gridMarker.length, gridEnd);
                            const dynamicCampusPhp = `${gridMarker}
            <?php
            $campus_photos = new WP_Query( array(
                'post_type'      => 'tmisb_gallery',
                'posts_per_page' => -1,
                'post_status'    => 'publish',
                'orderby'        => array( 'menu_order' => 'ASC', 'date' => 'DESC' ),
            ) );

            if ( $campus_photos->have_posts() ) :
                while ( $campus_photos->have_posts() ) : $campus_photos->the_post();
                    $cat        = get_post_meta( get_the_ID(), '_tmisb_gallery_category', true ) ?: 'campus';
                    $caption    = get_post_meta( get_the_ID(), '_tmisb_gallery_caption', true );
                    $layout     = get_post_meta( get_the_ID(), '_tmisb_gallery_layout', true ) ?: 'standard';
                    $legacy_img = get_post_meta( get_the_ID(), '_tmisb_gallery_legacy_image', true );
                    
                    $img_url = get_the_post_thumbnail_url( get_the_ID(), 'large' );
                    if ( ! $img_url && $legacy_img ) {
                        $img_url = get_template_directory_uri() . '/' . $legacy_img;
                    }
                    $card_class = ( $layout === 'wide' ) ? 'aspect-[4/3] md:col-span-2' : 'aspect-square';
            ?>
                <div x-show="filter === 'all' || filter === '<?php echo esc_attr( $cat ); ?>'" x-transition class="group relative rounded-xl overflow-hidden shadow-md cursor-pointer <?php echo esc_attr( $card_class ); ?>">
                    <?php if ( $img_url ) : ?>
                        <img src="<?php echo esc_url( $img_url ); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                    <?php endif; ?>
                    <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-end p-6">
                        <h4 class="text-white font-bold text-lg"><?php the_title(); ?></h4>
                        <?php if ( ! empty( $caption ) ) : ?>
                            <p class="text-gray-200 text-sm"><?php echo esc_html( $caption ); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
            ?>
${fallbackCards}
            <?php endif; ?>
            </div>
            
            <div class="text-center mt-12">`;
                            bodyContent = bodyContent.substring(0, gridStart) + dynamicCampusPhp + bodyContent.substring(gridEnd + markerLen);
                        }
                    }
                }
            }

            // Dynamic Achievements Hook for Homepage (Section 8.5)
            if (p.template === 'front-page.php') {
                const homeAchIdx = bodyContent.indexOf('<!-- 8.5 Student Achievements -->');
                if (homeAchIdx !== -1) {
                    const gridMarker = '<div class="flex lg:grid lg:grid-cols-4 gap-6 overflow-x-auto snap-x snap-mandatory pb-6" style="scrollbar-width: none; -ms-overflow-style: none;">';
                    const gridStart = bodyContent.indexOf(gridMarker, homeAchIdx);
                    if (gridStart !== -1) {
                        const gridEndMarker = '</div>\n            \n            <div class="text-center mt-12">';
                        const gridEndMarkerCRLF = '</div>\r\n            \r\n            <div class="text-center mt-12">';
                        let gridEnd = bodyContent.indexOf(gridEndMarker, gridStart);
                        let markerLen = gridEndMarker.length;
                        if (gridEnd === -1) {
                            gridEnd = bodyContent.indexOf(gridEndMarkerCRLF, gridStart);
                            markerLen = gridEndMarkerCRLF.length;
                        }
                        if (gridEnd !== -1) {
                            const fallbackCards = bodyContent.substring(gridStart + gridMarker.length, gridEnd);
                            const dynamicHomePhp = `${gridMarker}
                <style>
                    /* Hide scrollbar for Chrome, Safari and Opera */
                    .flex.overflow-x-auto::-webkit-scrollbar {
                        display: none;
                    }
                </style>
            <?php
            $home_achievements = new WP_Query( array(
                'post_type'      => 'tmisb_achievement',
                'posts_per_page' => 8,
                'post_status'    => 'publish',
                'orderby'        => array( 'menu_order' => 'ASC', 'date' => 'DESC' ),
                'meta_query'     => array(
                    'relation' => 'OR',
                    array(
                        'key'     => '_tmisb_achievement_show_home',
                        'value'   => '1',
                        'compare' => '=',
                    ),
                    array(
                        'key'     => '_tmisb_achievement_show_home',
                        'compare' => 'NOT EXISTS',
                    ),
                ),
            ) );

            if ( $home_achievements->have_posts() ) :
                while ( $home_achievements->have_posts() ) : $home_achievements->the_post();
                    $badge        = get_post_meta( get_the_ID(), '_tmisb_achievement_badge', true );
                    $badge_color  = get_post_meta( get_the_ID(), '_tmisb_achievement_badge_color', true ) ?: 'secondary';
                    $caption      = get_post_meta( get_the_ID(), '_tmisb_achievement_caption', true );
                    $legacy_img   = get_post_meta( get_the_ID(), '_tmisb_achievement_legacy_image', true );
                    
                    $img_url = get_the_post_thumbnail_url( get_the_ID(), 'large' );
                    if ( ! $img_url && $legacy_img ) {
                        $img_url = get_template_directory_uri() . '/' . $legacy_img;
                    }
                    $badge_pill = ( $badge_color === 'primary' ) ? 'bg-primary' : 'bg-secondary';
            ?>
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 group flex-none w-[85%] sm:w-[45%] lg:w-auto snap-center flex flex-col">
                    <div class="overflow-hidden bg-gray-50 p-3 flex-grow flex items-center justify-center">
                        <?php if ( $img_url ) : ?>
                            <img src="<?php echo esc_url( $img_url ); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-auto max-h-[380px] object-contain transition-transform duration-700 group-hover:scale-105">
                        <?php else : ?>
                            <div class="w-full h-64 bg-gray-100 flex items-center justify-center text-gray-400">
                                <i class="fas fa-award text-4xl"></i>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="p-4 border-t border-gray-100 bg-white">
                        <?php if ( ! empty( $badge ) ) : ?>
                            <span class="inline-block <?php echo esc_attr( $badge_pill ); ?> text-white text-[10px] font-bold uppercase tracking-wider px-2 py-0.5 rounded mb-1"><?php echo esc_html( $badge ); ?></span>
                        <?php endif; ?>
                        <h4 class="nav-font font-bold text-sm text-primary"><?php the_title(); ?></h4>
                        <?php if ( ! empty( $caption ) ) : ?>
                            <p class="text-xs text-gray-500 mt-1"><?php echo esc_html( $caption ); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
            ?>
${fallbackCards}
            <?php endif; ?>
            </div>
            
            <div class="text-center mt-12">`;
                            bodyContent = bodyContent.substring(0, gridStart) + dynamicHomePhp + bodyContent.substring(gridEnd + markerLen);
                        }
                    }
                }
            }

                // Dynamic Notice Board Hook for Homepage
                const noticeScrollMarker = '<div class="space-y-4 overflow-y-auto h-full p-6"';
                const noticeStart = bodyContent.indexOf(noticeScrollMarker);
                const viewAllMarker = '<!-- View All button -->';
                const noticeEnd = bodyContent.indexOf(viewAllMarker, noticeStart);
                if (noticeStart !== -1 && noticeEnd !== -1) {
                    const fullMarkerEnd = bodyContent.indexOf('>', noticeStart) + 1;
                    const fallbackNotices = bodyContent.substring(fullMarkerEnd, noticeEnd);
                    const dynamicNoticePhp = `
                            <?php
                            $notice_query = new WP_Query( array(
                                'post_type'      => 'notice',
                                'posts_per_page' => 10,
                                'post_status'    => 'publish',
                                'orderby'        => 'date',
                                'order'          => 'DESC',
                            ) );

                            if ( $notice_query->have_posts() ) :
                                $notice_count = 0;
                                while ( $notice_query->have_posts() ) : $notice_query->the_post();
                                    $file_url = get_post_meta( get_the_ID(), '_notice_file_url', true );
                                    $custom_badge = get_post_meta( get_the_ID(), '_notice_badge', true );
                                    $link = ! empty( $file_url ) ? esc_url( $file_url ) : '#';
                                    $target = ! empty( $file_url ) ? ' target="_blank"' : '';
                                    $day = get_the_date( 'd' );
                                    $month = get_the_date( 'M' );
                                    $is_first = ( $notice_count === 0 );
                                    $badge_text = ! empty( $custom_badge ) ? $custom_badge : ( $is_first ? 'New' : '' );
                                    $bg_class = $is_first ? 'bg-primary/5 text-primary border-primary/10' : 'bg-gray-50 text-gray-500 border-gray-100';
                            ?>
                            <!-- Dynamic Notice Item -->
                            <div class="flex gap-4 p-4 bg-white rounded-xl shadow-sm hover:shadow-md transition border border-gray-50 hover:border-primary/20 group">
                                <div class="flex flex-col items-center justify-center <?php echo esc_attr( $bg_class ); ?> rounded-lg min-w-[60px] h-[60px] shrink-0 border">
                                    <span class="text-xl font-bold leading-none"><?php echo esc_html( $day ); ?></span>
                                    <span class="text-xs uppercase font-semibold mt-1"><?php echo esc_html( $month ); ?></span>
                                </div>
                                <div class="flex flex-col justify-center">
                                    <?php if ( ! empty( $badge_text ) ) : ?>
                                        <span class="inline-block mb-1 text-[10px] font-bold text-primary bg-secondary/20 px-2 py-0.5 rounded uppercase tracking-wider w-max"><?php echo esc_html( $badge_text ); ?></span>
                                    <?php endif; ?>
                                    <h4 class="font-bold text-gray-800 text-sm group-hover:text-primary transition leading-snug">
                                        <a href="<?php echo $link; ?>"<?php echo $target; ?>><?php the_title(); ?></a>
                                    </h4>
                                </div>
                            </div>
                            <?php
                                    $notice_count++;
                                endwhile;
                                wp_reset_postdata();
                            else :
                            ?>
${fallbackNotices}
                            <?php endif; ?>
                            `;
                    bodyContent = bodyContent.substring(0, fullMarkerEnd) + dynamicNoticePhp + bodyContent.substring(noticeEnd);
                }


            // Dynamic Achievements Hook for Competitive Coaching Page
            if (p.template === 'page-competitive-coaching.php') {
                const coachingAchIdx = bodyContent.indexOf('Proven Track Record');
                if (coachingAchIdx !== -1) {
                    const gridMarker = '<div class="grid grid-cols-1 sm:grid-cols-2 gap-6">';
                    const gridStart = bodyContent.indexOf(gridMarker, coachingAchIdx);
                    const calloutIdx = bodyContent.indexOf('<!-- Callout Emphasis Box -->', gridStart);
                    if (gridStart !== -1 && calloutIdx !== -1) {
                        const sub = bodyContent.substring(gridStart, calloutIdx);
                        const lastDiv = sub.lastIndexOf('</div>');
                        const secondLastDiv = sub.lastIndexOf('</div>', lastDiv - 1);
                        if (secondLastDiv !== -1) {
                            const gridEnd = gridStart + secondLastDiv;
                            const fallbackCards = bodyContent.substring(gridStart + gridMarker.length, gridEnd);
                            const dynamicCoachingPhp = `${gridMarker}
                        <?php
                        $coaching_achievements = new WP_Query( array(
                            'post_type'      => 'tmisb_achievement',
                            'posts_per_page' => 6,
                            'post_status'    => 'publish',
                            'orderby'        => array( 'menu_order' => 'ASC', 'date' => 'DESC' ),
                            'meta_query'     => array(
                                array(
                                    'key'     => '_tmisb_achievement_show_coaching',
                                    'value'   => '1',
                                    'compare' => '=',
                                ),
                            ),
                        ) );

                        if ( $coaching_achievements->have_posts() ) :
                            while ( $coaching_achievements->have_posts() ) : $coaching_achievements->the_post();
                                $badge        = get_post_meta( get_the_ID(), '_tmisb_achievement_badge', true );
                                $badge_color  = get_post_meta( get_the_ID(), '_tmisb_achievement_badge_color', true ) ?: 'secondary';
                                $caption      = get_post_meta( get_the_ID(), '_tmisb_achievement_caption', true );
                                $legacy_img   = get_post_meta( get_the_ID(), '_tmisb_achievement_legacy_image', true );
                                
                                $img_url = get_the_post_thumbnail_url( get_the_ID(), 'large' );
                                if ( ! $img_url && $legacy_img ) {
                                    $img_url = get_template_directory_uri() . '/' . $legacy_img;
                                }
                                $badge_style = ( $badge_color === 'primary' ) ? 'bg-primary/10 text-primary' : 'bg-secondary/10 text-secondary';
                        ?>
                            <div class="bg-white rounded-2xl p-4 border border-gray-200 shadow-sm hover:shadow-md transition group">
                                <div class="bg-gray-50 rounded-xl overflow-hidden p-2 mb-3 border border-gray-100 flex items-center justify-center">
                                    <?php if ( $img_url ) : ?>
                                        <img src="<?php echo esc_url( $img_url ); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-auto max-h-[320px] object-contain transition duration-500 group-hover:scale-105">
                                    <?php endif; ?>
                                </div>
                                <div class="flex items-center justify-between mb-1">
                                    <?php if ( ! empty( $badge ) ) : ?>
                                        <span class="<?php echo esc_attr( $badge_style ); ?> text-[10px] font-bold uppercase tracking-wider px-2 py-0.5 rounded"><?php echo esc_html( $badge ); ?></span>
                                    <?php endif; ?>
                                    <span class="text-[11px] text-gray-400 font-medium"><?php _e( 'Media / Verified', 'tmisb' ); ?></span>
                                </div>
                                <h4 class="nav-font font-bold text-base text-primary"><?php the_title(); ?></h4>
                                <?php if ( ! empty( $caption ) ) : ?>
                                    <p class="text-xs text-gray-600 mt-1 leading-relaxed"><?php echo esc_html( $caption ); ?></p>
                                <?php endif; ?>
                            </div>
                        <?php
                            endwhile;
                            wp_reset_postdata();
                        else :
                        ?>
${fallbackCards}
                        <?php endif; ?>
                        </div>`;
                            bodyContent = bodyContent.substring(0, gridStart) + dynamicCoachingPhp + bodyContent.substring(gridEnd + 6);
                        }
                    }
                }
            }
            
            const templateTitle = p.file.replace('.html', '').split('-').map(s => s.charAt(0).toUpperCase() + s.slice(1)).join(' ');
            let wpTemplate = `<?php\n/* Template Name: ${templateTitle} Page */\nget_header();\n?>\n`;
            if (p.template === 'front-page.php') {
                wpTemplate = `<?php\nget_header();\n?>\n`;
            }
            
            wpTemplate += bodyContent;
            wpTemplate += `\n<?php\nget_footer();\n?>`;
            
            fs.writeFileSync(path.join(THEME_DIR, p.template), wpTemplate);
            console.log(`Generated ${p.template}`);
        } else {
            console.warn(`Could not find header or footer marker in ${p.file}`);
        }
    }
});

// Copy assets
console.log('Copying assets...');
if (fs.existsSync(path.join(__dirname, 'assets'))) {
    execSync(`xcopy /E /I /Y "${path.join(__dirname, 'assets')}" "${path.join(THEME_DIR, 'assets')}"`);
}
if (fs.existsSync(path.join(__dirname, 'css'))) {
    execSync(`xcopy /E /I /Y "${path.join(__dirname, 'css')}" "${path.join(THEME_DIR, 'css')}"`);
}
if (fs.existsSync(path.join(__dirname, 'js'))) {
    execSync(`xcopy /E /I /Y "${path.join(__dirname, 'js')}" "${path.join(THEME_DIR, 'js')}"`);
}
if (fs.existsSync(path.join(__dirname, 'Achievements'))) {
    execSync(`xcopy /E /I /Y "${path.join(__dirname, 'Achievements')}" "${path.join(THEME_DIR, 'Achievements')}"`);
}
if (fs.existsSync(path.join(__dirname, 'School Images'))) {
    execSync(`xcopy /E /I /Y "${path.join(__dirname, 'School Images')}" "${path.join(THEME_DIR, 'School Images')}"`);
}
if (fs.existsSync(path.join(__dirname, 'school images google'))) {
    execSync(`xcopy /E /I /Y "${path.join(__dirname, 'school images google')}" "${path.join(THEME_DIR, 'school images google')}"`);
}
if (fs.existsSync(path.join(__dirname, 'Notice.png'))) {
    fs.copyFileSync(path.join(__dirname, 'Notice.png'), path.join(THEME_DIR, 'Notice.png'));
}
if (fs.existsSync(path.join(__dirname, 'admissions-enquiry-forminator.json'))) {
    fs.copyFileSync(path.join(__dirname, 'admissions-enquiry-forminator.json'), path.join(THEME_DIR, 'admissions-enquiry-forminator.json'));
}
if (fs.existsSync(path.join(__dirname, 'contact-us-forminator.json'))) {
    fs.copyFileSync(path.join(__dirname, 'contact-us-forminator.json'), path.join(THEME_DIR, 'contact-us-forminator.json'));
}
console.log('Copied assets successfully.');

// Compress theme package to ZIP
console.log(`Compressing theme package to ${path.basename(ZIP_OUTPUT)}...`);
try {
    if (fs.existsSync(ZIP_OUTPUT)) {
        fs.unlinkSync(ZIP_OUTPUT);
    }
    execSync(`powershell -Command "Compress-Archive -Path '${THEME_DIR}' -DestinationPath '${ZIP_OUTPUT}' -Force"`);
    console.log(`[SUCCESS] Created ${path.basename(ZIP_OUTPUT)} successfully!`);
} catch (err) {
    console.error('[ERROR] Failed to compress theme:', err.message);
}

console.log(`WordPress theme creation complete! Theme is located in wp-theme/${THEME_NAME} and packaged in ${path.basename(ZIP_OUTPUT)}`);
