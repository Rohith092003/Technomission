const fs = require('fs');

let html = fs.readFileSync('index.html', 'utf8');

const startMarker = '<!-- 2. Middle Bar (Tier 2) -->';
const endMarker = '<!-- 3. Hero Section -->';

const startIndex = html.indexOf(startMarker);
const endIndex = html.indexOf(endMarker);

if (startIndex !== -1 && endIndex !== -1) {
    let section = html.substring(startIndex, endIndex);

    // Remove existing sticky classes from individual elements so the wrapper handles it
    section = section.replace('header class="bg-white shadow-md sticky top-0 z-50 xl:hidden"', 'header class="bg-white shadow-md xl:hidden"');
    section = section.replace('nav class="bg-primary shadow-lg sticky top-0 z-40 hidden xl:block border-t border-white/10"', 'nav class="bg-primary hidden xl:block border-t border-white/10"');
    
    // Wrap them
    const newSection = `<!-- Sticky Header Wrapper -->
    <div class="sticky top-0 z-50 w-full shadow-2xl flex flex-col">
        ${section}
    </div>
    `;

    html = html.substring(0, startIndex) + newSection + html.substring(endIndex);
    fs.writeFileSync('index.html', html, 'utf8');
    console.log('Successfully wrapped Middle Bar and Bottom Bar in a sticky container.');
} else {
    console.log('Could not find markers.', startIndex, endIndex);
}
