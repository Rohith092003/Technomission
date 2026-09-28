const fs = require('fs');

// 1. Update style.css
let css = fs.readFileSync('css/style.css', 'utf8');

// Replace Dark Forest with Classic Navy
css = css.replace(/rgba\(8, 22, 17/g, 'rgba(0, 60, 113');
css = css.replace(/#081611/gi, '#003c71');

// Replace Darkest Black with white for text contrast on Red, or keep it dark for text
css = css.replace(/#040a08/gi, '#ffffff');

// Replace Neon Lime with Red
css = css.replace(/#BEF22A/gi, '#e31837');
css = css.replace(/rgba\(190, 242, 42/g, 'rgba(227, 24, 55');

fs.writeFileSync('css/style.css', css, 'utf8');
console.log('Updated style.css');

// 2. Update index.html
let html = fs.readFileSync('index.html', 'utf8');

// Fix button text colors and hardcoded colors
// Admissions button text: was text-[#040a08], should be text-white since button is red now
html = html.replace(/text-\[\#040a08\]/g, 'text-white');
// The inline style for Techno Mission text: style="color: #081611;"
html = html.replace(/style="color: #081611;"/g, ''); 
// We had some bg-[#e31837] buttons, we can just replace them with bg-secondary to keep it dynamic
html = html.replace(/bg-\[\#e31837\]/g, 'bg-secondary');
html = html.replace(/hover:bg-\[\#c2142d\]/g, 'hover:bg-red-800');

fs.writeFileSync('index.html', html, 'utf8');
console.log('Updated index.html');
