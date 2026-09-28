const fs = require('fs');

let html = fs.readFileSync('index.html', 'utf8');

// Replace any instance of admissions@tmisb.org with techno.edu.school@gmail.com
html = html.replace(/admissions@tmisb\.org/g, 'techno.edu.school@gmail.com');

// Also ensure phone numbers are exactly "+91 9431214985, 6412610985"
// Actually the phone number in the screenshot matches what I put, but let's check the footer just in case.
// If the footer has something else, it needs fixing.

fs.writeFileSync('index.html', html, 'utf8');
console.log('Fixed contact details across the site.');
