const fs = require('fs');

let js = fs.readFileSync('generate_wp_theme.js', 'utf8');

// I will add a cache buster parameter to the fixAssetPaths replacements
const replacement = `function fixAssetPaths(html) {
    let fixed = html;
    
    // Fix src attributes (excluding absolute URLs like http/https)
    fixed = fixed.replace(/src="(?!http|\\/\\/|<)([^"]+)"/g, 'src="<?php echo get_template_directory_uri(); ?>/$1?v=<?php echo time(); ?>"');
    
    // Fix href for assets and css
    fixed = fixed.replace(/href="(assets\\/[^"]+)"/g, 'href="<?php echo get_template_directory_uri(); ?>/$1?v=<?php echo time(); ?>"');
    fixed = fixed.replace(/href="(css\\/[^"]+)"/g, 'href="<?php echo get_template_directory_uri(); ?>/$1?v=<?php echo time(); ?>"');
    
    // Fix background inline styles (excluding absolute URLs)
    fixed = fixed.replace(/url\\(['"]?(?!http|\\/\\/)([^'"\\)]+)['"]?\\)/g, "url('<?php echo get_template_directory_uri(); ?>/$1')");

    return fixed;
}`;

js = js.replace(/function fixAssetPaths\(html\) \{[\s\S]*?return fixed;\n\}/, replacement);

fs.writeFileSync('generate_wp_theme.js', js, 'utf8');
console.log('Fixed generate_wp_theme.js for cache busting');
