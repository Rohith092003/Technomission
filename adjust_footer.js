const fs = require('fs');

const files = ['index.html', 'about.html', 'contact.html', 'academics.html', 'labs.html', 'activities.html', 'gallery.html', 'admissions.html'];

files.forEach(file => {
    let content = fs.readFileSync(file, 'utf8');
    
    // Change grid
    content = content.replace(
        '<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">',
        '<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-12 mb-12">'
    );
    
    // Span 2 columns for brand
    content = content.replace(
        '<!-- Brand -->\n                <div>',
        '<!-- Brand -->\n                <div class="lg:col-span-2">'
    );
    
    // Increase logo size and adjust spacing
    content = content.replace(
        '<img src="assets/images/logo.webp" alt="TMISB Logo" class="h-12 w-auto mr-3 bg-white p-1 rounded-md">',
        '<img src="assets/images/logo.webp" alt="TMISB Logo" class="h-16 w-auto mr-5 bg-white p-1.5 rounded-lg">'
    );
    
    // Make text one line
    content = content.replace(
        '<p class="text-xs md:text-sm text-white/80 font-semibold tracking-wide mt-0.5">International School Bhagalpur</p>',
        '<p class="text-xs md:text-sm text-white/80 font-semibold tracking-wide mt-0.5 whitespace-nowrap">International School Bhagalpur</p>'
    );
    
    // Remove Privacy Policy links
    const policyLinks = `<div class="flex space-x-6 mt-4 md:mt-0 font-medium uppercase tracking-wider">
                    <a href="#" class="hover:text-secondary transition">Privacy Policy</a>
                    <a href="#" class="hover:text-secondary transition">Terms of Use</a>
                    <a href="#" class="hover:text-secondary transition">Mandatory Disclosure</a>
                </div>`;
    content = content.replace(policyLinks, '');
    
    fs.writeFileSync(file, content, 'utf8');
});

console.log('Footer adjustments complete!');
