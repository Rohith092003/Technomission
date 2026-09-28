const fs = require('fs');

const files = ['index.html', 'about.html', 'contact.html', 'academics.html', 'labs.html', 'activities.html', 'gallery.html', 'admissions.html'];

const replacements = {
    '[TMISB Phone Number]': '+91 9431214985, 6412610985',
    '[TMISB Email]': 'techno.edu.school@gmail.com',
    '[TMISB Address, Bhagalpur, Bihar, India]': 'Vikramshila Setu Path, Jagatpur, Bhagalpur, Bihar 812002',
    '[TMISB Phone]': '+91 9431214985, 6412610985',
    '[TMISB Complete Address, Bhagalpur, Bihar, India]': 'Vikramshila Setu Path, Jagatpur, Bhagalpur, Bihar 812002',
    '[TMISB Phone Number 1]<br>[TMISB Phone Number 2]': '+91 9431214985<br>6412610985',
    '[TMISB Email Address]': 'techno.edu.school@gmail.com'
};

files.forEach(file => {
    let content = fs.readFileSync(file, 'utf8');
    
    for (const [placeholder, actual] of Object.entries(replacements)) {
        // Use global replacement just in case it appears multiple times
        content = content.split(placeholder).join(actual);
    }
    
    fs.writeFileSync(file, content, 'utf8');
});

console.log('Contact info updated successfully in all files!');
