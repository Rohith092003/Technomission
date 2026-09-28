const fs = require('fs');

const files = ['index.html', 'about.html', 'contact.html', 'academics.html', 'labs.html', 'activities.html', 'gallery.html', 'admissions.html'];

const oldBlock = `<div class="flex space-x-4 items-center">
                <a href="#" class="hover:text-primary transition">Transportation</a>
                <span class="text-gray-300">|</span>
                <a href="#" class="hover:text-primary transition">Mandatory Public Disclosure</a>
                <span class="text-gray-300">|</span>
                <a href="#" class="hover:text-primary transition">Parent Login</a>
                <a href="admissions.html" class="bg-secondary text-black font-semibold px-4 py-1 rounded ml-2 hover:bg-yellow-400 transition">Admissions Open 2026–27</a>
            </div>`;

const newBlock = `<div class="flex space-x-4 items-center">
                <a href="admissions.html" class="bg-secondary text-black font-semibold px-4 py-1 rounded hover:bg-yellow-400 transition">Admissions Open 2026–27</a>
            </div>`;

files.forEach(file => {
    let content = fs.readFileSync(file, 'utf8');
    
    // Normalize string spaces slightly if strict match fails, but try exact first
    if (content.includes('<a href="#" class="hover:text-primary transition">Transportation</a>')) {
        const startMarker = '<div class="flex space-x-4 items-center">';
        const endMarker = 'Admissions Open 2026–27</a>\n            </div>';
        
        const startIndex = content.indexOf(startMarker);
        if(startIndex !== -1) {
            const endIndex = content.indexOf(endMarker, startIndex);
            if(endIndex !== -1) {
                content = content.substring(0, startIndex) + newBlock + content.substring(endIndex + endMarker.length);
                fs.writeFileSync(file, content, 'utf8');
                console.log(`Updated topbar in ${file}`);
            }
        }
    }
});

console.log('Update complete!');
