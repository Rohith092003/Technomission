const fs = require('fs');

let html = fs.readFileSync('index.html', 'utf8');

const targetStr = `<div class="flex space-x-3 items-center divide-x divide-white/20">
                <a href="#" class="hover:text-secondary transition pl-3">Fee Structure</a>
                <a href="#" class="hover:text-secondary transition pl-3">Mandatory Disclosure</a>
                <a href="#" class="hover:text-secondary transition pl-3">Careers</a>
                <a href="contact.html" class="hover:text-secondary transition pl-3">Contact Us</a>
            </div>`;

const replaceStr = `<div class="flex space-x-5 items-center">
                <a href="#" class="text-white hover:text-secondary transition text-sm" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-white hover:text-secondary transition text-sm" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-white hover:text-secondary transition text-sm" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-white hover:text-secondary transition text-sm" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                <a href="#" class="text-white hover:text-secondary transition text-sm" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            </div>`;

if (html.includes(targetStr)) {
    html = html.replace(targetStr, replaceStr);
    fs.writeFileSync('index.html', html, 'utf8');
    console.log('Successfully replaced top bar links with social media icons.');
} else {
    console.log('Target string not found in index.html.');
}
