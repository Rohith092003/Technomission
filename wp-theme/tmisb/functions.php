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
?>