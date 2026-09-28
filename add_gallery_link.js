const fs = require('fs');

const files = ['index.html', 'about.html', 'contact.html', 'academics.html', 'labs.html', 'activities.html', 'gallery.html'];

files.forEach(file => {
    let content = fs.readFileSync(file, 'utf8');
    
    // Check if gallery link already exists to avoid duplicates
    if (!content.includes('"gallery.html"')) {
        // Desktop Nav: Add before Blog
        content = content.replace(
            '<a href="#" class="hover:text-primary py-2">Blog</a>',
            '<a href="gallery.html" class="hover:text-primary py-2">Gallery</a>\n                <a href="#" class="hover:text-primary py-2">Blog</a>'
        );
        
        // Mobile Nav: Add before Contact Us
        // In mobile nav, Contact Us is usually like: <a href="contact.html" class="py-3 border-b border-gray-100 hover:text-primary">Contact Us</a>
        content = content.replace(
            '<a href="contact.html" class="py-3 border-b border-gray-100 hover:text-primary">Contact Us</a>',
            '<a href="gallery.html" class="py-3 border-b border-gray-100 hover:text-primary">Gallery</a>\n                <a href="contact.html" class="py-3 border-b border-gray-100 hover:text-primary">Contact Us</a>'
        );
        // Fallback for mobile if contact.html has text-primary (e.g. in contact page)
        content = content.replace(
            '<a href="contact.html" class="py-3 border-b border-gray-100 text-primary">Contact Us</a>',
            '<a href="gallery.html" class="py-3 border-b border-gray-100 hover:text-primary">Gallery</a>\n                <a href="contact.html" class="py-3 border-b border-gray-100 text-primary">Contact Us</a>'
        );
    }
    
    // For gallery.html itself, make the desktop link active
    if (file === 'gallery.html') {
        content = content.replace(
            '<a href="gallery.html" class="hover:text-primary py-2">Gallery</a>',
            '<a href="gallery.html" class="text-primary border-b-2 border-primary py-2">Gallery</a>'
        );
        // Mobile active
        content = content.replace(
            '<a href="gallery.html" class="py-3 border-b border-gray-100 hover:text-primary">Gallery</a>',
            '<a href="gallery.html" class="py-3 border-b border-gray-100 text-primary">Gallery</a>'
        );
    }
    
    fs.writeFileSync(file, content, 'utf8');
});

console.log('Gallery links added successfully!');
