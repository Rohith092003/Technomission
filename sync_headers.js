const fs = require('fs');
const path = require('path');

// 1. Extract new header from index.html
const indexHtml = fs.readFileSync('index.html', 'utf8');

const startMarker = '<!-- 1. Top Bar (Tier 1) -->';
const indexStart = indexHtml.indexOf(startMarker);
if (indexStart === -1) {
    console.error("Could not find start of header in index.html");
    process.exit(1);
}

// Find the end of the Sticky Header Wrapper div
const wrapperStart = indexHtml.indexOf('<!-- Sticky Header Wrapper -->', indexStart);
const nextSection = indexHtml.indexOf('<!-- 3. Hero Section', wrapperStart);
if (wrapperStart === -1 || nextSection === -1) {
    console.error("Could not find end of header in index.html");
    process.exit(1);
}

// Extract up to the start of the next section
const newHeader = indexHtml.substring(indexStart, nextSection).trim() + '\n\n    ';

// 2. Loop through all html files
const files = fs.readdirSync(__dirname).filter(file => file.endsWith('.html') && file !== 'index.html');

for (const file of files) {
    let html = fs.readFileSync(file, 'utf8');
    
    // Find where the old header starts
    const oldStart1 = html.indexOf('<!-- 1. Top Bar -->');
    const oldStart2 = html.indexOf('<!-- 1. Top Bar (Tier 1) -->'); // just in case some are already partially updated
    const oldStart = oldStart1 !== -1 ? oldStart1 : oldStart2;
    
    if (oldStart === -1) {
        console.warn(`Could not find header start in ${file}`);
        continue;
    }

    // Find where the old header ends. It's usually after </header>
    // Wait, the old header had a <header> tag. Let's find the closing </header> tag.
    let oldEnd = html.indexOf('</header>', oldStart);
    if (oldEnd !== -1) {
        oldEnd += '</header>'.length;
        
        // Wait, did I leave a dangling </div> in my previous script?
        // Let's check if there is an extra </div> or a Sticky Wrapper closing div in the files that might have been updated.
        // It's safer to look for the next major section marker.
        const nextMarkerMatch = html.substring(oldEnd).match(/<!-- (Page Header|3\.|Main Content|4\.|[A-Z])/i);
        if (nextMarkerMatch) {
            oldEnd += nextMarkerMatch.index;
        }

        // We will just replace everything between oldStart and the next comment block that looks like a section
        const contentBefore = html.substring(0, oldStart);
        let contentAfter = html.substring(oldEnd);
        
        // Find the precise start of the next section by looking for <!--
        const nextComment = contentAfter.indexOf('<!--');
        if(nextComment !== -1 && nextComment < 200) {
            contentAfter = contentAfter.substring(nextComment);
        }

        fs.writeFileSync(file, contentBefore + newHeader + contentAfter, 'utf8');
        console.log(`Updated header in ${file}`);
    } else {
        console.warn(`Could not find </header> in ${file}`);
    }
}
console.log('Finished updating headers.');
