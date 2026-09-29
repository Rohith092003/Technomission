const fs = require('fs');
const path = require('path');

const files = fs.readdirSync(__dirname).filter(f => f.endsWith('.html'));

const footerRegex = /(<!-- Footer \(Reused\) -->[\s\S]*?<\/footer>)/;

for (const file of files) {
    const filePath = path.join(__dirname, file);
    let html = fs.readFileSync(filePath, 'utf8');
    
    // Find the footer
    const match = html.match(footerRegex);
    if (match) {
        let footerHtml = match[1];
        
        // Make text white
        footerHtml = footerHtml.replace(/text-white\/40/g, 'text-white/80'); // for copyright
        footerHtml = footerHtml.replace(/text-white\/60/g, 'text-white');
        footerHtml = footerHtml.replace(/text-white\/70/g, 'text-white');
        footerHtml = footerHtml.replace(/text-white\/80/g, 'text-white');
        footerHtml = footerHtml.replace(/text-white\/90/g, 'text-white');
        
        html = html.replace(footerRegex, footerHtml);
        fs.writeFileSync(filePath, html, 'utf8');
    }
}
console.log('Made footer text pure white in all HTML files.');
