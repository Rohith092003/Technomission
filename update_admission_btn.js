const fs = require('fs');

// 1. Update style.css
let css = fs.readFileSync('css/style.css', 'utf8');
if (!css.includes('.admission-glow')) {
    css += `\n
/* Admission Button Glow Animation */
@keyframes glow-pulse {
    0% {
        box-shadow: 0 0 0 0 rgba(190, 242, 42, 0.7);
        transform: scale(1);
    }
    50% {
        box-shadow: 0 0 15px 5px rgba(190, 242, 42, 0.4);
        transform: scale(1.05);
    }
    100% {
        box-shadow: 0 0 0 0 rgba(190, 242, 42, 0);
        transform: scale(1);
    }
}
.admission-glow {
    animation: glow-pulse 2s infinite;
    display: inline-block;
}
`;
    fs.writeFileSync('css/style.css', css, 'utf8');
    console.log('Added .admission-glow to style.css');
}

// 2. Update index.html
let html = fs.readFileSync('index.html', 'utf8');
const targetStr = '<a href="admissions.html" class="bg-secondary text-black font-semibold px-4 py-1 rounded hover:bg-yellow-400 transition">Admissions Open 2026–27</a>';
const replacementStr = '<a href="admissions.html" class="bg-secondary text-[#040a08] font-bold px-4 py-1 rounded transition admission-glow ring-2 ring-secondary ring-offset-2 ring-offset-primaryDark">Admissions Open 2026–27 <i class="fas fa-star ml-1 text-xs"></i></a>';

if (html.includes(targetStr)) {
    html = html.replace(targetStr, replacementStr);
    fs.writeFileSync('index.html', html, 'utf8');
    console.log('Updated index.html button');
} else {
    console.log('Target string not found in index.html');
}
