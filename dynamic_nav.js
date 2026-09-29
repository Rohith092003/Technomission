const fs = require('fs');
const path = require('path');

const files = fs.readdirSync(__dirname).filter(f => f.endsWith('.html'));

const jsSnippet = `
    <!-- Dynamic Active Nav Script -->
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const navLinks = document.querySelectorAll('nav ul > li > a, nav ul > li.nav-item > a');
        const currentPath = window.location.pathname;
        
        // Remove hardcoded active classes
        navLinks.forEach(link => {
            link.classList.remove('border-b-2', 'border-secondary');
        });

        // Determine current page identifier
        let activeFound = false;
        navLinks.forEach(link => {
            const href = link.getAttribute('href');
            if (!href || href === '#') return;

            // Check if current URL includes the href (works for about.html and /about/)
            if (href !== 'index.html' && href !== '/' && currentPath.includes(href.replace('.html', ''))) {
                link.classList.add('border-b-2', 'border-secondary');
                activeFound = true;
            }
        });

        // Fallback for Home page
        if (!activeFound && (currentPath === '/' || currentPath.endsWith('index.html'))) {
            navLinks.forEach(link => {
                if (link.getAttribute('href') === 'index.html' || link.getAttribute('href').includes('home_url')) {
                    link.classList.add('border-b-2', 'border-secondary');
                }
            });
        }
    });
    </script>
    `;

for (const file of files) {
    const filePath = path.join(__dirname, file);
    let html = fs.readFileSync(filePath, 'utf8');
    
    // First, remove any existing hardcoded active state
    html = html.replace(/class="hover:text-secondary transition pb-1 border-b-2 border-secondary"/g, 'class="hover:text-secondary transition pb-1"');
    
    // Remove any previously injected script to avoid duplicates
    html = html.replace(/<!-- Dynamic Active Nav Script -->[\s\S]*?<\/script>/, '');

    // Inject the script right after </nav>
    html = html.replace('</nav>', '</nav>\n' + jsSnippet);
    
    fs.writeFileSync(filePath, html, 'utf8');
}
console.log('Added dynamic active nav script to all HTML files');
