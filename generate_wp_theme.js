const fs = require('fs');
const path = require('path');
const { execSync } = require('child_process');

const THEME_NAME = 'tmisb';
const THEME_DIR = path.join(__dirname, 'wp-theme', THEME_NAME);
const HTML_FILES = ['index.html', 'about.html', 'academics.html', 'gallery.html', 'contact.html', 'labs.html', 'activities.html', 'admissions.html'];

if (!fs.existsSync(THEME_DIR)) {
    fs.mkdirSync(THEME_DIR, { recursive: true });
}

// 1. Create style.css
const styleCssContent = `/*
Theme Name: TMISB Theme
Theme URI: 
Author: Antigravity
Author URI: 
Description: Custom WordPress theme for Techno Mission International School Bhagalpur.
Version: 1.0
Text Domain: tmisb
*/

/* Tailwind is loaded via CDN in this theme, so custom CSS is minimal here. */
`;
fs.writeFileSync(path.join(THEME_DIR, 'style.css'), styleCssContent);

// 2. Create functions.php
const functionsPhpContent = `<?php
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
?>`;
fs.writeFileSync(path.join(THEME_DIR, 'functions.php'), functionsPhpContent);

// 3. Create index.php (fallback)
const indexPhpContent = `<?php get_header(); ?>
<main>
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
    endif;
    ?>
</main>
<?php get_footer(); ?>`;
fs.writeFileSync(path.join(THEME_DIR, 'index.php'), indexPhpContent);

function fixAssetPaths(html) {
    let fixed = html;
    
    // Fix src attributes (excluding absolute URLs like http/https)
    fixed = fixed.replace(/src="(?!http|\/\/|<)([^"]+)"/g, 'src="<?php echo get_template_directory_uri(); ?>/$1"');
    
    // Fix href for assets and css
    fixed = fixed.replace(/href="(assets\/[^"]+)"/g, 'href="<?php echo get_template_directory_uri(); ?>/$1"');
    fixed = fixed.replace(/href="(css\/[^"]+)"/g, 'href="<?php echo get_template_directory_uri(); ?>/$1"');
    
    // Fix background inline styles (excluding absolute URLs)
    fixed = fixed.replace(/url\(['"]?(?!http|\/\/)([^'"\)]+)['"]?\)/g, 'url(\\\'<?php echo get_template_directory_uri(); ?>/$1\\\')');

    return fixed;
}

const indexHtml = fs.readFileSync(path.join(__dirname, 'index.html'), 'utf8');

const headerEndMatch = indexHtml.indexOf('</header>');
let headerHtml = '';
let footerHtml = '';

if (headerEndMatch !== -1) {
    let rawHeader = indexHtml.substring(0, headerEndMatch + '</header>'.length);
    rawHeader = rawHeader.replace('</head>', '    <?php wp_head(); ?>\n</head>');
    // Let's also make sure links in the header (like about.html) point to WordPress pages or we leave them as is for now 
    // since the user wants to test HTML locally too. In WordPress they should be dynamic but hardcoding works for a quick theme conversion.
    headerHtml = fixAssetPaths(rawHeader);
    fs.writeFileSync(path.join(THEME_DIR, 'header.php'), headerHtml);
}

const footerStartMatch = indexHtml.indexOf('<footer');
if (footerStartMatch !== -1) {
    let rawFooter = indexHtml.substring(footerStartMatch);
    rawFooter = rawFooter.replace('</body>', '    <?php wp_footer(); ?>\n</body>');
    footerHtml = fixAssetPaths(rawFooter);
    fs.writeFileSync(path.join(THEME_DIR, 'footer.php'), footerHtml);
}

// Generate Templates for Pages
const pages = [
    { file: 'index.html', template: 'front-page.php' },
    { file: 'about.html', template: 'page-about.php' },
    { file: 'academics.html', template: 'page-academics.php' },
    { file: 'gallery.html', template: 'page-gallery.php' },
    { file: 'contact.html', template: 'page-contact.php' },
    { file: 'labs.html', template: 'page-labs.php' },
    { file: 'activities.html', template: 'page-activities.php' },
    { file: 'admissions.html', template: 'page-admissions.php' },
];

pages.forEach(p => {
    if (fs.existsSync(path.join(__dirname, p.file))) {
        let content = fs.readFileSync(path.join(__dirname, p.file), 'utf8');
        
        let headerEnd = content.indexOf('</header>') + '</header>'.length;
        let footerStart = content.indexOf('<footer');
        
        if (headerEnd !== -1 && footerStart !== -1) {
            let bodyContent = content.substring(headerEnd, footerStart);
            bodyContent = fixAssetPaths(bodyContent);
            
            let wpTemplate = `<?php\n/* Template Name: ${p.file.replace('.html', '').charAt(0).toUpperCase() + p.file.replace('.html', '').slice(1)} Page */\nget_header();\n?>\n`;
            if (p.template === 'front-page.php') {
                wpTemplate = `<?php\nget_header();\n?>\n`;
            }
            
            wpTemplate += bodyContent;
            wpTemplate += `\n<?php\nget_footer();\n?>`;
            
            fs.writeFileSync(path.join(THEME_DIR, p.template), wpTemplate);
            console.log(`Generated ${p.template}`);
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

console.log('WordPress theme creation complete! Theme is located in wp-theme/tmisb');
