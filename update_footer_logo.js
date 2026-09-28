const fs = require('fs');

const files = ['index.html', 'about.html', 'contact.html', 'academics.html', 'labs.html', 'activities.html', 'gallery.html', 'admissions.html'];

const oldBlock = `                    <div class="flex items-center mb-6 bg-white/10 p-4 rounded-xl inline-flex border border-white/10 shadow-inner">
                        <img src="assets/images/logo.webp" alt="TMISB Logo" class="h-12 w-auto mr-4">
                        <div>
                            <h2 class="nav-font font-bold text-xl tracking-wider leading-tight">Techno Mission</h2>
                            <p class="text-[10px] text-white/70 font-semibold tracking-widest mt-1">ESTD 1997</p>
                        </div>
                    </div>`;

const newBlock = `                    <a href="index.html" class="flex items-center mb-6 inline-block">
                        <div class="flex items-center">
                            <img src="assets/images/logo.webp" alt="TMISB Logo" class="h-12 w-auto mr-3 bg-white p-1 rounded-md">
                            <div>
                                <h2 class="nav-font font-extrabold text-xl md:text-2xl text-white leading-tight">Techno Mission</h2>
                                <p class="text-xs md:text-sm text-white/80 font-semibold tracking-wide mt-0.5">International School Bhagalpur</p>
                                <p class="text-[10px] text-white/60 font-bold tracking-wider uppercase mt-1">CBSE Affiliated <span class="text-secondary mx-1">|</span> ESTD 1997</p>
                            </div>
                        </div>
                    </a>`;

files.forEach(file => {
    let content = fs.readFileSync(file, 'utf8');
    
    if (content.includes(oldBlock)) {
        content = content.replace(oldBlock, newBlock);
        fs.writeFileSync(file, content, 'utf8');
        console.log(`Updated footer logo in ${file}`);
    } else {
        console.log(`Could not find old block in ${file}`);
    }
});

console.log('Update complete!');
