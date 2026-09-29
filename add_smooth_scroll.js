const fs = require('fs');
const path = require('path');

const files = fs.readdirSync(__dirname).filter(f => f.endsWith('.html'));

for (const file of files) {
    const filePath = path.join(__dirname, file);
    let html = fs.readFileSync(filePath, 'utf8');
    
    // Add scroll-smooth and scroll padding for the sticky header
    // Replace any existing <html lang="en"> or <html lang="en" class="...">
    if (html.includes('<html lang="en" class="scroll-smooth">')) {
        html = html.replace('<html lang="en" class="scroll-smooth">', '<html lang="en" class="scroll-smooth scroll-pt-32">');
    } else if (html.includes('<html lang="en">')) {
        html = html.replace(/<html\s+lang="en">/i, '<html lang="en" class="scroll-smooth scroll-pt-32">');
    }
    
    fs.writeFileSync(filePath, html, 'utf8');
}
console.log('Added smooth scroll and scroll padding to all HTML files.');
