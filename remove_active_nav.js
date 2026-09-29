const fs = require('fs');
const path = require('path');

const files = fs.readdirSync(__dirname).filter(f => f.endsWith('.html'));

for (const file of files) {
    const filePath = path.join(__dirname, file);
    let html = fs.readFileSync(filePath, 'utf8');
    
    // Remove the hardcoded active state from the Home link
    html = html.replace(/class="hover:text-secondary transition pb-1 border-b-2 border-secondary"/g, 'class="hover:text-secondary transition pb-1"');
    
    fs.writeFileSync(filePath, html, 'utf8');
}
console.log('Removed hardcoded active state from all HTML files');
