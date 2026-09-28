const fs = require('fs');

let js = fs.readFileSync('generate_wp_theme.js', 'utf8');

// I am going to replace everything inside function fixAssetPaths(html) with the correct version.
const replacement = `function fixAssetPaths(html) {
    let fixed = html;
    
    // Fix src attributes (excluding absolute URLs like http/https)
    fixed = fixed.replace(/src="(?!http|\\/\\/|<)([^"]+)"/g, 'src="<?php echo get_template_directory_uri(); ?>/$1"');
    
    // Fix href for assets and css
    fixed = fixed.replace(/href="(assets\\/[^"]+)"/g, 'href="<?php echo get_template_directory_uri(); ?>/$1"');
    fixed = fixed.replace(/href="(css\\/[^"]+)"/g, 'href="<?php echo get_template_directory_uri(); ?>/$1"');
    
    // Fix background inline styles (excluding absolute URLs)
    // Here we use double quotes for the replacement string so we don't have to escape backslashes weirdly
    fixed = fixed.replace(/url\\(['"]?(?!http|\\/\\/)([^'"\\)]+)['"]?\\)/g, "url('<?php echo get_template_directory_uri(); ?>/$1')");

    return fixed;
}`;

// Use regex to replace the function definition
js = js.replace(/function fixAssetPaths\(html\) \{[\s\S]*?return fixed;\n\}/, replacement);

fs.writeFileSync('generate_wp_theme.js', js, 'utf8');
console.log('Fixed generate_wp_theme.js');
