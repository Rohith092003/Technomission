const fs = require('fs');

const files = ['index.html', 'about.html', 'contact.html', 'academics.html', 'labs.html', 'activities.html', 'gallery.html', 'admissions.html'];

const oldBlock = `<div class="flex space-x-3">
                        <a href="#" class="w-10 h-10 rounded-lg bg-white/5 border border-white/20 flex items-center justify-center hover:bg-secondary hover:text-primary transition duration-300 hover:border-secondary hover:-translate-y-1"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="w-10 h-10 rounded-lg bg-white/5 border border-white/20 flex items-center justify-center hover:bg-secondary hover:text-primary transition duration-300 hover:border-secondary hover:-translate-y-1"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="w-10 h-10 rounded-lg bg-white/5 border border-white/20 flex items-center justify-center hover:bg-secondary hover:text-primary transition duration-300 hover:border-secondary hover:-translate-y-1"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="w-10 h-10 rounded-lg bg-white/5 border border-white/20 flex items-center justify-center hover:bg-secondary hover:text-primary transition duration-300 hover:border-secondary hover:-translate-y-1"><i class="fab fa-youtube"></i></a>
                    </div>`;

const newBlock = `<div class="flex space-x-3 mt-4">
                        <a href="https://www.facebook.com/Technomissioninternationalschool/" target="_blank" class="w-10 h-10 rounded-lg bg-white/5 border border-white/20 flex items-center justify-center hover:bg-secondary hover:text-primary transition duration-300 hover:border-secondary hover:-translate-y-1"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/tmis.bhagalpur/" target="_blank" class="w-10 h-10 rounded-lg bg-white/5 border border-white/20 flex items-center justify-center hover:bg-secondary hover:text-primary transition duration-300 hover:border-secondary hover:-translate-y-1"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.youtube.com/@technomissionbhagalpur" target="_blank" class="w-10 h-10 rounded-lg bg-white/5 border border-white/20 flex items-center justify-center hover:bg-secondary hover:text-primary transition duration-300 hover:border-secondary hover:-translate-y-1"><i class="fab fa-youtube"></i></a>
                    </div>`;

files.forEach(file => {
    let content = fs.readFileSync(file, 'utf8');
    
    // Normalize whitespace for safer replacement if exact string fails
    // But since it's a direct copy, let's try direct first
    if (content.includes('<i class="fab fa-twitter"></i>')) {
        // Find the start of the div
        const searchStr = '<div class="flex space-x-3">';
        const startIndex = content.indexOf(searchStr);
        if (startIndex !== -1) {
            const endIndex = content.indexOf('</div>', startIndex);
            if (endIndex !== -1) {
                content = content.substring(0, startIndex) + newBlock + content.substring(endIndex + 6);
                fs.writeFileSync(file, content, 'utf8');
                console.log(`Updated social links in ${file}`);
            }
        }
    }
});

console.log('Update complete!');
