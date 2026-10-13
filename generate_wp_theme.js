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
Version: 2.0
Text Domain: tmisb
*/

/* Tailwind is loaded via CDN in this theme, with custom utilities in css/style.css */
`;
fs.writeFileSync(path.join(THEME_DIR, 'style.css'), styleCssContent);

// 2. Create functions.php with Auto-Page Creation & Smart Template Redirect
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
    const raw404 = fs.readFileSync(path.join(__dirname, '404.html'), 'utf8');
    const mainStart = raw404.indexOf('<main');
    const mainEnd = raw404.indexOf('</main>');
    if (mainStart !== -1 && mainEnd !== -1) {
        let body404 = raw404.substring(mainStart, mainEnd + 7);
        body404 = fixAssetPaths(body404);
        const fourZeroFourPhp = `<?php get_header(); ?>\n${body404}\n<?php get_footer(); ?>`;
        fs.writeFileSync(path.join(THEME_DIR, '404.php'), fourZeroFourPhp);
        console.log('Generated rich 404.php from 404.html.');
    }
}

function fixAssetPaths(html) {
    let fixed = html;
    
    // Fix src attributes (excluding absolute URLs like http/https)
    fixed = fixed.replace(/src="(?!http|\/\/|<)([^"]+)"/g, 'src="<?php echo get_template_directory_uri(); ?>/$1?v=<?php echo time(); ?>"');
    
    // Fix href for assets and css
    fixed = fixed.replace(/href="(assets\/[^"]+)"/g, 'href="<?php echo get_template_directory_uri(); ?>/$1?v=<?php echo time(); ?>"');
    fixed = fixed.replace(/href="(css\/[^"]+)"/g, 'href="<?php echo get_template_directory_uri(); ?>/$1?v=<?php echo time(); ?>"');
    
    // Fix background inline styles (excluding absolute URLs)
    fixed = fixed.replace(/url\(['"]?(?!http|\/\/)([^'"\)]+)['"]?\)/g, "url('<?php echo get_template_directory_uri(); ?>/$1')");

    // Fix internal HTML links to clean WordPress URLs
    fixed = fixed.replace(/href="index\.html(#?[a-zA-Z0-9_-]*)"/g, 'href="<?php echo home_url(\'/\'); ?>$1"');
    fixed = fixed.replace(/href="([a-zA-Z0-9_-]+)\.html(#?[a-zA-Z0-9_-]*)"/g, 'href="<?php echo home_url(\'/$1/\'); ?>$2"');

    return fixed;
}

const indexHtml = fs.readFileSync(path.join(__dirname, 'index.html'), 'utf8');

// The complete header ends right before the hero section
let headerEndMatch = indexHtml.indexOf('<!-- 3. Hero Section');
if (headerEndMatch === -1) {
    headerEndMatch = indexHtml.indexOf('<section class="swiper hero-swiper');
}

if (headerEndMatch !== -1) {
    let rawHeader = indexHtml.substring(0, headerEndMatch);
    rawHeader = rawHeader.replace('</head>', '    <?php wp_head(); ?>\n</head>');
    let headerHtml = fixAssetPaths(rawHeader);
    fs.writeFileSync(path.join(THEME_DIR, 'header.php'), headerHtml);
    console.log('Generated complete header.php with full desktop & mobile navigation.');
}

const footerStartMatch = indexHtml.indexOf('<footer');
if (footerStartMatch !== -1) {
    let rawFooter = indexHtml.substring(footerStartMatch);
    rawFooter = rawFooter.replace('</body>', '    <?php wp_footer(); ?>\n</body>');
    let footerHtml = fixAssetPaths(rawFooter);
    fs.writeFileSync(path.join(THEME_DIR, 'footer.php'), footerHtml);
    console.log('Generated footer.php.');
}

// Generate Templates for Pages
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
try {
    console.log('Copying assets...');
    if(fs.existsSync(path.join(__dirname, 'Achievements'))) {
        execSync(`xcopy /E /I /Y "${path.join(__dirname, 'Achievements')}" "${path.join(THEME_DIR, 'Achievements')}"`);
    }
    if(fs.existsSync(path.join(__dirname, 'assets'))) {
        execSync(`xcopy /E /I /Y "${path.join(__dirname, 'assets')}" "${path.join(THEME_DIR, 'assets')}"`);
    }
    if(fs.existsSync(path.join(__dirname, 'css'))) {
        execSync(`xcopy /E /I /Y "${path.join(__dirname, 'css')}" "${path.join(THEME_DIR, 'css')}"`);
    }
    if(fs.existsSync(path.join(__dirname, 'js'))) {
        execSync(`xcopy /E /I /Y "${path.join(__dirname, 'js')}" "${path.join(THEME_DIR, 'js')}"`);
    }
    if(fs.existsSync(path.join(__dirname, 'Notice.png'))) {
        execSync(`copy /Y "${path.join(__dirname, 'Notice.png')}" "${path.join(THEME_DIR, 'Notice.png')}"`);
    }
    console.log('Copied assets successfully.');
} catch (e) {
    console.error('Error copying assets:', e.message);
}

// 5. Automatically package tmisb-theme.zip
try {
    console.log('Compressing theme package to tmisb-theme.zip...');
    if (fs.existsSync(ZIP_OUTPUT)) {
        fs.unlinkSync(ZIP_OUTPUT);
    }
    execSync(`powershell -Command "Compress-Archive -Path '${THEME_DIR}' -DestinationPath '${ZIP_OUTPUT}' -Force"`);
    console.log('[SUCCESS] Created tmisb-theme.zip successfully!');
} catch (e) {
    console.error('Error creating theme zip:', e.message);
}

console.log('WordPress theme creation complete! Theme is located in wp-theme/tmisb and packaged in tmisb-theme.zip');
