const fs = require('fs');
const path = require('path');

const files = fs.readdirSync(__dirname).filter(f => f.endsWith('.html'));

for (const file of files) {
    const filePath = path.join(__dirname, file);
    let html = fs.readFileSync(filePath, 'utf8');
    
    // Use regex to remove the entire <p> tag containing "Opensky"
    const regex = /<p[^>]*>Design & development by <a href="https:\/\/openskyglobal\.com\/"[^>]*>Opensky<\/a><\/p>/g;
    html = html.replace(regex, '');
    
    fs.writeFileSync(filePath, html, 'utf8');
}
console.log('Removed Opensky credit from all html files');
