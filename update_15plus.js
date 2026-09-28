const fs = require('fs');
let html = fs.readFileSync('index.html', 'utf8');

// The text is likely "15+" and "Years of Excellence".
// Let's replace 'text-primary mb-1">15+</p>' with 'text-white mb-1">15+</p>'
// And 'text-gray-800">Years of Excellence</p>' with 'text-white">Years of Excellence</p>'

html = html.replace(/text-primary mb-1">15\+<\/p>/g, 'text-white mb-1">15+</p>');
html = html.replace(/text-gray-800">Years of Excellence<\/p>/g, 'text-white">Years of Excellence</p>');

fs.writeFileSync('index.html', html, 'utf8');
console.log('Regex replace complete.');
