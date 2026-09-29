const fs = require('fs');
const path = require('path');

const files = fs.readdirSync(__dirname).filter(f => f.endsWith('.html'));

for (const file of files) {
    const filePath = path.join(__dirname, file);
    let html = fs.readFileSync(filePath, 'utf8');
    
    // Replace the three specific dropdown links
    html = html.replace(
        /<li><a href="#" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Primary<\/a><\/li>/g,
        '<li><a href="academics.html#primary" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Primary</a></li>'
    );
    
    html = html.replace(
        /<li><a href="#" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Secondary<\/a><\/li>/g,
        '<li><a href="academics.html#secondary" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Secondary</a></li>'
    );
    
    html = html.replace(
        /<li><a href="#" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary">High School<\/a><\/li>/g,
        '<li><a href="academics.html#high-school" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary">High School</a></li>'
    );
    
    fs.writeFileSync(filePath, html, 'utf8');
}
console.log('Updated academics links in all HTML files.');
