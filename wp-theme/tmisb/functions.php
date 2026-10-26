<?php
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
            'title'    => 'Main Campus',
            'caption'  => 'State-of-the-art infrastructure',
            'category' => 'campus',
            'layout'   => 'standard',
            'image'    => 'assets/images/campus-building-front.jpg',
            'order'    => 1,
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

?>