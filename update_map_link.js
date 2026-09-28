const fs = require('fs');

const files = ['index.html', 'about.html', 'contact.html', 'academics.html', 'labs.html', 'activities.html', 'gallery.html', 'admissions.html'];

files.forEach(file => {
    let content = fs.readFileSync(file, 'utf8');
    
    const address = 'Vikramshila Setu Path, Jagatpur, Bhagalpur, Bihar 812002';
    // If it's not already linked
    if (content.includes(address) && !content.includes(`href="https://maps.app.goo.gl/fQYFbkphkkN2VVay9"`)) {
        content = content.split(address).join(`<a href="https://maps.app.goo.gl/fQYFbkphkkN2VVay9" target="_blank" class="hover:underline hover:text-secondary transition" title="View on Google Maps">${address}</a>`);
        fs.writeFileSync(file, content, 'utf8');
        console.log(`Linked address in ${file}`);
    }
});

console.log('Map linking complete!');
