const fs = require('fs');

const files = ['index.html', 'about.html', 'contact.html', 'academics.html', 'labs.html', 'activities.html', 'gallery.html'];

const oldText = `                <div>
                    <h1 class="nav-font font-bold text-xl text-primary leading-tight">TMISB</h1>
                    <p class="text-xs text-gray-500 font-semibold tracking-wide">TECHNO MISSION INTL. SCHOOL</p>
                </div>`;

const newText = `                <div>
                    <h1 class="nav-font font-extrabold text-xl md:text-2xl text-primary leading-tight">Techno Mission</h1>
                    <p class="text-xs md:text-sm text-gray-700 font-semibold tracking-wide">International School Bhagalpur</p>
                    <p class="text-[10px] text-gray-500 font-bold tracking-wider uppercase mt-0.5">CBSE Affiliated <span class="text-secondary mx-1">|</span> ESTD 1997</p>
                </div>`;

files.forEach(file => {
    let content = fs.readFileSync(file, 'utf8');
    
    // Replace in header
    content = content.replace(oldText, newText);
    
    // Replace in footer
    const oldFooterText = `<h2 class="nav-font font-bold text-xl tracking-wider">TMISB</h2>`;
    const newFooterText = `<div>
                            <h2 class="nav-font font-bold text-xl tracking-wider leading-tight">Techno Mission</h2>
                            <p class="text-[10px] text-gray-400 font-semibold tracking-widest mt-1">ESTD 1997</p>
                        </div>`;
    content = content.replace(oldFooterText, newFooterText);

    fs.writeFileSync(file, content, 'utf8');
});

console.log('Logo text updated successfully in all files!');
