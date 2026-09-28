const fs = require('fs');

const files = ['index.html', 'about.html', 'contact.html', 'academics.html', 'labs.html', 'activities.html', 'gallery.html', 'admissions.html'];

files.forEach(file => {
    let content = fs.readFileSync(file, 'utf8');
    
    // Top bar Admissions Open
    content = content.replace(
        '<a href="#" class="bg-secondary text-black font-semibold px-4 py-1 rounded ml-2 hover:bg-yellow-400 transition">Admissions Open 2026–27</a>',
        '<a href="admissions.html" class="bg-secondary text-black font-semibold px-4 py-1 rounded ml-2 hover:bg-yellow-400 transition">Admissions Open 2026–27</a>'
    );
    
    // Header Apply Now
    content = content.replace(
        '<a href="#" class="bg-primary text-white px-5 py-2 rounded shadow hover:bg-blue-800 transition">Apply Now</a>',
        '<a href="admissions.html" class="bg-primary text-white px-5 py-2 rounded shadow hover:bg-blue-800 transition">Apply Now</a>'
    );
    
    // Footer Quick Links Admissions
    content = content.replace(
        '<li><a href="#" class="hover:text-secondary transition"><i class="fas fa-angle-right mr-2"></i> Admissions</a></li>',
        '<li><a href="admissions.html" class="hover:text-secondary transition"><i class="fas fa-angle-right mr-2"></i> Admissions</a></li>'
    );
    
    // Home Page Hero Admissions
    content = content.replace(
        '<a href="#" class="bg-secondary hover:bg-yellow-500 text-black font-semibold py-3 px-8 rounded transition duration-300">Admissions</a>',
        '<a href="admissions.html" class="bg-secondary hover:bg-yellow-500 text-black font-semibold py-3 px-8 rounded transition duration-300">Admissions</a>'
    );
    
    fs.writeFileSync(file, content, 'utf8');
});

console.log('Admissions links added successfully!');
