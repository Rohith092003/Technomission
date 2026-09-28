const fs = require('fs');

const files = ['index.html', 'about.html', 'contact.html', 'academics.html', 'labs.html', 'activities.html'];

files.forEach(file => {
    let content = fs.readFileSync(file, 'utf8');
    
    // Desktop Nav
    content = content.replace(
        '<a href="#" class="hover:text-primary flex items-center">Academics',
        '<a href="academics.html" class="hover:text-primary flex items-center">Academics'
    );
    content = content.replace(
        '<a href="#" class="hover:text-primary flex items-center">Labs',
        '<a href="labs.html" class="hover:text-primary flex items-center">Labs'
    );
    content = content.replace(
        '<a href="#" class="hover:text-primary flex items-center">Activities',
        '<a href="activities.html" class="hover:text-primary flex items-center">Activities'
    );
    
    // Mobile Nav
    content = content.replace(
        '<a href="#" class="py-3 border-b border-gray-100 hover:text-primary">Academics</a>',
        '<a href="academics.html" class="py-3 border-b border-gray-100 hover:text-primary">Academics</a>'
    );
    content = content.replace(
        '<a href="#" class="py-3 border-b border-gray-100 hover:text-primary">Labs</a>',
        '<a href="labs.html" class="py-3 border-b border-gray-100 hover:text-primary">Labs</a>'
    );
    content = content.replace(
        '<a href="#" class="py-3 border-b border-gray-100 hover:text-primary">Activities</a>',
        '<a href="activities.html" class="py-3 border-b border-gray-100 hover:text-primary">Activities</a>'
    );
    
    // Fallbacks if active classes are applied (which they might be in the respective pages)
    // For Academics page
    content = content.replace(
        '<a href="#" class="text-primary border-b-2 border-primary flex items-center py-2">Academics',
        '<a href="academics.html" class="text-primary border-b-2 border-primary flex items-center py-2">Academics'
    );
    // For Labs page
    content = content.replace(
        '<a href="#" class="text-primary border-b-2 border-primary flex items-center py-2">Labs',
        '<a href="labs.html" class="text-primary border-b-2 border-primary flex items-center py-2">Labs'
    );
    // For Activities page
    content = content.replace(
        '<a href="#" class="text-primary border-b-2 border-primary flex items-center py-2">Activities',
        '<a href="activities.html" class="text-primary border-b-2 border-primary flex items-center py-2">Activities'
    );
    
    fs.writeFileSync(file, content, 'utf8');
});

console.log('Links updated successfully!');
