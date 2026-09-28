const fs = require('fs');
let html = fs.readFileSync('index.html', 'utf8');

// The three buttons are inside <div class="hidden xl:flex items-center space-x-3"> in Tier 2
const startMarker = '<div class="hidden xl:flex items-center space-x-3">';
let startIndex = html.indexOf(startMarker);

if (startIndex !== -1) {
    let endIndex = html.indexOf('</div>', startIndex);
    if (endIndex !== -1) {
        const replacement = `<div class="hidden xl:flex items-center">
                <img src="assets/images/29.png" alt="29" class="h-14 w-auto object-contain">
            </div>`;
        html = html.substring(0, startIndex) + replacement + html.substring(endIndex + 6);
        fs.writeFileSync('index.html', html, 'utf8');
        console.log('Replaced 3 buttons with image 29.png');
    } else {
        console.log('Could not find closing div');
    }
} else {
    // try searching just for TMISB ERP
    console.log('Could not find start marker');
}
