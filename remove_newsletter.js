const fs = require('fs');

const files = ['index.html', 'about.html', 'contact.html', 'academics.html', 'labs.html', 'activities.html', 'gallery.html', 'admissions.html'];

const stringToRemove = `            <!-- Newsletter / CTA row -->
            <div class="flex flex-col md:flex-row justify-between items-center border-b border-white/20 pb-12 mb-12">
                <div class="mb-6 md:mb-0">
                    <h3 class="nav-font text-3xl font-bold mb-2">Ready to join our community?</h3>
                    <p class="text-white/80">Stay updated with our latest news, events, and admissions.</p>
                </div>
                <div class="flex w-full md:w-auto shadow-xl rounded overflow-hidden">
                    <input type="email" placeholder="Enter your email address" class="px-6 py-4 border-none outline-none text-gray-800 w-full md:w-80">
                    <button class="bg-secondary text-primary font-bold px-8 py-4 hover:bg-yellow-400 transition uppercase tracking-wider text-sm">Subscribe</button>
                </div>
            </div>`;

files.forEach(file => {
    let content = fs.readFileSync(file, 'utf8');
    
    if (content.includes(stringToRemove)) {
        content = content.replace(stringToRemove, '');
        fs.writeFileSync(file, content, 'utf8');
        console.log(`Removed newsletter block from ${file}`);
    } else {
        console.log(`Could not find newsletter block in ${file}`);
    }
});

console.log('Removal complete!');
