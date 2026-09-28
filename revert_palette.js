const fs = require('fs');

// 1. Update style.css
let css = fs.readFileSync('css/style.css', 'utf8');

// Replace Classic Navy with Dark Forest
css = css.replace(/rgba\(0, 60, 113/g, 'rgba(8, 22, 17');
css = css.replace(/#003c71/gi, '#081611');

// Fix the news label text color specifically back to Darkest Black
css = css.replace(/color: #ffffff;\n    padding: 5px 15px;/g, 'color: #040a08;\n    padding: 5px 15px;');

// Replace Red with Neon Lime
css = css.replace(/#e31837/gi, '#BEF22A');
css = css.replace(/rgba\(227, 24, 55/g, 'rgba(190, 242, 42');

fs.writeFileSync('css/style.css', css, 'utf8');
console.log('Reverted style.css');

// 2. Update index.html
let html = fs.readFileSync('index.html', 'utf8');

// Admissions button text: was text-white, should be text-[#040a08] since button is Neon Lime now
html = html.replace(/<a href="admissions\.html" class="bg-secondary text-white/g, '<a href="admissions.html" class="bg-secondary text-[#040a08]');
// Some text-white might have been used in the right buttons of the header. But we changed those buttons to bg-secondary too. Wait, we changed right buttons to bg-secondary hover:bg-red-800.
// We need to fix the right buttons in the middle header. They used to be:
// <a href="#" class="bg-secondary text-white font-bold px-4 py-2 rounded text-xs hover:bg-red-800 transition shadow-sm uppercase tracking-wider">TMISB ERP</a>
// Let's replace the text-white and hover:bg-red-800 on those buttons to text-[#040a08] and hover:bg-[#a9db24]
html = html.replace(/bg-secondary text-white font-bold px-4 py-2 rounded text-xs hover:bg-red-800/g, 'bg-secondary text-[#040a08] font-bold px-4 py-2 rounded text-xs hover:bg-[#a9db24]');

fs.writeFileSync('index.html', html, 'utf8');
console.log('Reverted index.html');
