const fs = require('fs');

// 1. Update style.css
let css = fs.readFileSync('css/style.css', 'utf8');

const oldCss = `.news-label {
    background-color: #e31837;
    color: #040a08;
    padding: 5px 15px;
    font-weight: 600;
    z-index: 10;
    position: relative;
}`;

// I should just use regex to replace .news-label block robustly
css = css.replace(/\.news-label \{[\s\S]*?\}/, `.news-label {
    background: linear-gradient(90deg, #e31837 0%, #c2142d 100%);
    color: #ffffff;
    padding: 8px 40px 8px 25px;
    font-weight: 700;
    font-size: 0.85rem;
    letter-spacing: 0.1em;
    z-index: 10;
    position: relative;
    clip-path: polygon(0% 0%, 90% 0%, 100% 50%, 90% 100%, 0% 100%);
    display: inline-flex;
    align-items: center;
    white-space: nowrap;
    text-transform: uppercase;
    box-shadow: 2px 0 10px rgba(0,0,0,0.3);
}`);

fs.writeFileSync('css/style.css', css, 'utf8');
console.log('Updated style.css');

// 2. Update index.html
let html = fs.readFileSync('index.html', 'utf8');
html = html.replace(/<div class="news-label whitespace-nowrap shadow-md uppercase text-sm tracking-wider flex items-center">/, '<div class="news-label">');
html = html.replace(/<i class="fas fa-bolt mr-2 text-yellow-300"><\/i>/, '<span class="relative flex h-3 w-3 mr-3"><span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-white opacity-75"></span><span class="relative inline-flex rounded-full h-3 w-3 bg-white"></span></span>');

fs.writeFileSync('index.html', html, 'utf8');
console.log('Updated index.html');
