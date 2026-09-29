const fs = require('fs');
const path = require('path');

const files = fs.readdirSync(__dirname).filter(f => f.endsWith('.html'));

for (const file of files) {
    const filePath = path.join(__dirname, file);
    let html = fs.readFileSync(filePath, 'utf8');
    
    // Replace bg-primaryDark with bg-primary in the footer tag
    html = html.replace(/<footer class="bg-primaryDark /, '<footer class="bg-primary ');
    
    fs.writeFileSync(filePath, html, 'utf8');
}
console.log('Changed footer background to bg-primary (classic Navy Blue).');
