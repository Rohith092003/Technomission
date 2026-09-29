const fs = require('fs');
const path = require('path');

// 1. Add id="specialized" to academics.html
const academicsPath = path.join(__dirname, 'academics.html');
let academicsHtml = fs.readFileSync(academicsPath, 'utf8');
academicsHtml = academicsHtml.replace(
    /<!-- 3\. Specialized Programs Grid -->\s*<section class="py-20 bg-white">/,
    '<!-- 3. Specialized Programs Grid -->\n    <section id="specialized" class="py-20 bg-white">'
);
fs.writeFileSync(academicsPath, academicsHtml, 'utf8');

// 2. Update the dropdown menu in all HTML files
const files = fs.readdirSync(__dirname).filter(f => f.endsWith('.html'));

const oldMenuRegex = /<ul class="dropdown-menu absolute hidden bg-white shadow-xl border-t-4 border-secondary top-full left-0 w-48 py-2 z-50 transition-opacity opacity-0 group-hover:opacity-100 text-gray-800 font-medium rounded-b">[\s\S]*?<\/ul>/;

// We need to target only the Academics dropdown!
// Wait, the Labs dropdown also has `w-48`.
// Let's do a more precise replacement by finding the `Academics <i...` part.

for (const file of files) {
    const filePath = path.join(__dirname, file);
    let html = fs.readFileSync(filePath, 'utf8');
    
    // Find the exact academics list item block
    const pattern = /(<a href="academics\.html"[^>]*>Academics <i[^>]*><\/i><\/a>\s*)<ul class="dropdown-menu[^>]*>[\s\S]*?<\/ul>/;
    
    const newMenu = `$1<ul class="dropdown-menu absolute hidden bg-white shadow-xl border-t-4 border-secondary top-full left-0 w-56 py-2 z-50 transition-opacity opacity-0 group-hover:opacity-100 text-gray-800 font-medium rounded-b">
                        <li><a href="academics.html#primary" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Primary Education</a></li>
                        <li><a href="academics.html#secondary" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Middle & Secondary</a></li>
                        <li><a href="academics.html#senior-secondary" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Senior Secondary</a></li>
                        <li><a href="academics.html#specialized" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary">Specialized Programs</a></li>
                    </ul>`;
                    
    html = html.replace(pattern, newMenu);
    
    fs.writeFileSync(filePath, html, 'utf8');
}

console.log('Academics dropdown synced with page content!');
