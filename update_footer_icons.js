const fs = require('fs');

const files = ['index.html', 'about.html', 'contact.html', 'academics.html', 'labs.html', 'activities.html', 'gallery.html', 'admissions.html'];

const oldBlock = `                        <li class="flex items-start">
                            <div class="mt-0.5 w-8 h-8 rounded bg-white/10 flex items-center justify-center shrink-0 mr-4 text-secondary border border-white/5">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <span class="leading-relaxed">Vikramshila Setu Path, Jagatpur, Bhagalpur, Bihar 812002</span>
                        </li>
                        <li class="flex items-center">
                            <div class="w-8 h-8 rounded bg-white/10 flex items-center justify-center shrink-0 mr-4 text-secondary border border-white/5">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <span>+91 9431214985<br>0641-2610985</span>
                        </li>
                        <li class="flex items-center">
                            <div class="w-8 h-8 rounded bg-white/10 flex items-center justify-center shrink-0 mr-4 text-secondary border border-white/5">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <span class="break-all">techno.edu.school@gmail.com</span>
                        </li>`;

const newBlock = `                        <li class="flex items-start">
                            <div class="mt-1 w-5 text-center shrink-0 mr-4 text-secondary text-lg">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <span class="leading-relaxed">Vikramshila Setu Path, Jagatpur, Bhagalpur, Bihar 812002</span>
                        </li>
                        <li class="flex items-center">
                            <div class="w-5 text-center shrink-0 mr-4 text-secondary text-lg">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <span>+91 9431214985<br>0641-2610985</span>
                        </li>
                        <li class="flex items-center">
                            <div class="w-5 text-center shrink-0 mr-4 text-secondary text-lg">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <span class="break-all">techno.edu.school@gmail.com</span>
                        </li>`;

files.forEach(file => {
    let content = fs.readFileSync(file, 'utf8');
    
    if (content.includes(oldBlock)) {
        content = content.replace(oldBlock, newBlock);
        fs.writeFileSync(file, content, 'utf8');
        console.log(`Updated footer icons in ${file}`);
    } else {
        console.log(`Could not find old block in ${file}`);
    }
});

console.log('Update complete!');
