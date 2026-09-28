const fs = require('fs');
let html = fs.readFileSync('index.html', 'utf8');

// The hero slides have background images set via inline styles.
html = html.replace(/url\('https:\/\/images\.unsplash\.com\/photo-1523050854058-8df90110c9f1[^']+'\)/, "url('assets/images/Hero1.png')");
html = html.replace(/url\('https:\/\/images\.unsplash\.com\/photo-1509062522246-3755977927d7[^']+'\)/, "url('assets/images/Hero1.png')");
html = html.replace(/url\('https:\/\/images\.unsplash\.com\/photo-1427504494785-3a9ca7044f45[^']+'\)/, "url('assets/images/Hero1.png')");

fs.writeFileSync('index.html', html, 'utf8');
console.log('Replaced all Unsplash images with Hero1.png in index.html');
