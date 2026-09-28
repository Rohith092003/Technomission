const fs = require('fs');

let html = fs.readFileSync('index.html', 'utf8');

// Find 'SECURE ENVIRONMENT'
const slide3Start = html.indexOf('SECURE ENVIRONMENT');
if (slide3Start !== -1) {
    // Find the last occurrence of 'assets/images/Hero1.png' before slide3Start
    const targetString = "assets/images/Hero1.png";
    const lastHero1Index = html.lastIndexOf(targetString, slide3Start);
    
    if (lastHero1Index !== -1) {
        html = html.substring(0, lastHero1Index) + "assets/images/Hero3.png" + html.substring(lastHero1Index + targetString.length);
        fs.writeFileSync('index.html', html, 'utf8');
        console.log('Successfully updated 3rd slide to use Hero3.png');
    } else {
        console.log('Could not find Hero1.png before slide 3 text');
    }
} else {
    console.log('Could not find SECURE ENVIRONMENT text');
}
