const fs = require('fs');

const files = ['index.html', 'about.html', 'contact.html', 'academics.html', 'labs.html', 'activities.html', 'gallery.html', 'admissions.html'];

const oldBlock = `            <!-- Bottom Copyright -->
            <div class="border-t border-white/20 pt-8 flex flex-col md:flex-row justify-between items-center text-xs text-white/50">
                <p>&copy; 2026 Techno Mission International School, Bhagalpur. All Rights Reserved.</p>
                
            </div>`;

const newBlock = `            <!-- Bottom Copyright -->
            <div class="border-t border-white/20 pt-8 flex flex-col md:flex-row justify-between items-center text-xs text-white/50">
                <p>&copy; 2026 Techno Mission International School, Bhagalpur. All Rights Reserved.</p>
                <p class="mt-4 md:mt-0 tracking-wide">Design & development by <a href="https://openskyglobal.com/" target="_blank" class="text-secondary hover:text-white transition font-semibold">Opensky</a></p>
            </div>`;

files.forEach(file => {
    let content = fs.readFileSync(file, 'utf8');
    
    if (content.includes(oldBlock)) {
        content = content.replace(oldBlock, newBlock);
        fs.writeFileSync(file, content, 'utf8');
        console.log(`Updated copyright block in ${file}`);
    } else {
        console.log(`Could not find old block in ${file}`);
    }
});

console.log('Update complete!');
