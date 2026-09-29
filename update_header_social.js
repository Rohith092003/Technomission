const fs = require('fs');
const path = require('path');

const files = fs.readdirSync(__dirname).filter(f => f.endsWith('.html'));

const oldSocialBlock = `<div class="flex space-x-5 items-center">
                <a href="#" class="text-white hover:text-secondary transition text-sm" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-white hover:text-secondary transition text-sm" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-white hover:text-secondary transition text-sm" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-white hover:text-secondary transition text-sm" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                <a href="#" class="text-white hover:text-secondary transition text-sm" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            </div>`;

// Some files might have slightly different spacing, so let's use regex
const regex = /<div class="flex space-x-5 items-center">[\s\S]*?<\/div>/;

const newSocialBlock = `<div class="flex space-x-5 items-center">
                <a href="https://www.facebook.com/Technomissioninternationalschool/" target="_blank" class="text-white hover:text-secondary transition text-sm" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/tmis.bhagalpur/" target="_blank" class="text-white hover:text-secondary transition text-sm" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="https://www.youtube.com/@technomissionbhagalpur" target="_blank" class="text-white hover:text-secondary transition text-sm" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
            </div>`;

for (const file of files) {
    const filePath = path.join(__dirname, file);
    let html = fs.readFileSync(filePath, 'utf8');
    
    // We only want to replace the FIRST match which is in the header, not footer!
    // The footer has a different class anyway: `flex space-x-3 mt-4` so this regex won't match the footer.
    html = html.replace(regex, newSocialBlock);
    
    fs.writeFileSync(filePath, html, 'utf8');
}
console.log('Updated social links in all HTML files');
