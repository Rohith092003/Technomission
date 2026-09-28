const fs = require('fs');

let html = fs.readFileSync('index.html', 'utf8');

const startMarker = '<!-- 1. Top Bar -->';
const endMarker = '<!-- 3. Hero Section -->';

const startIndex = html.indexOf(startMarker);
const endIndex = html.indexOf(endMarker);

if (startIndex !== -1 && endIndex !== -1) {
    const newHeader = `<!-- 1. Top Bar (Tier 1) -->
    <div class="bg-primaryDark text-white py-1.5 hidden md:block text-xs font-semibold tracking-wide">
        <div class="container mx-auto px-4 max-w-[1400px] flex justify-between items-center">
            <div class="flex space-x-6 items-center">
                <span><i class="fas fa-phone-alt text-secondary mr-2"></i>+91 9431214985, 6412610985</span>
                <span><i class="fas fa-envelope text-secondary mr-2"></i>admissions@tmisb.org</span>
            </div>
            <div class="flex space-x-3 items-center divide-x divide-white/20">
                <a href="#" class="hover:text-secondary transition pl-3">Fee Structure</a>
                <a href="#" class="hover:text-secondary transition pl-3">Mandatory Disclosure</a>
                <a href="#" class="hover:text-secondary transition pl-3">Careers</a>
                <a href="contact.html" class="hover:text-secondary transition pl-3">Contact Us</a>
            </div>
        </div>
    </div>

    <!-- 2. Middle Bar (Tier 2) -->
    <div class="bg-white py-4 border-b border-gray-100 hidden xl:block">
        <div class="container mx-auto px-4 max-w-[1400px] flex justify-between items-center">
            <!-- Left Button -->
            <div class="w-1/4">
                <a href="admissions.html" class="bg-secondary text-[#040a08] font-bold px-6 py-2.5 rounded shadow-sm hover:shadow-md transition text-sm inline-block admission-glow ring-2 ring-secondary ring-offset-2 ring-offset-white">
                    Admissions Enquiry 2026 - 27
                </a>
            </div>
            
            <!-- Center Logo -->
            <div class="w-2/4 flex justify-center">
                <a href="index.html" class="flex items-center transform hover:scale-105 transition duration-300">
                    <img src="assets/images/logo.webp" alt="TMISB Logo" class="h-16 w-auto mr-3">
                    <div class="text-left">
                        <h1 class="nav-font font-extrabold text-2xl md:text-3xl text-primary leading-none tracking-tight uppercase" style="color: #081611;">Techno Mission</h1>
                        <p class="text-xs text-primary font-bold tracking-[0.2em] uppercase mt-1">International School <span class="bg-primary text-white px-1 ml-1 text-[9px]">BHAGALPUR</span></p>
                    </div>
                </a>
            </div>
            
            <!-- Right Buttons -->
            <div class="w-1/4 flex justify-end space-x-3">
                <a href="#" class="bg-[#e31837] text-white font-bold px-4 py-2 rounded text-xs hover:bg-[#c2142d] transition shadow-sm uppercase tracking-wider">TMISB ERP</a>
                <a href="#" class="bg-[#e31837] text-white font-bold px-4 py-2 rounded text-xs hover:bg-[#c2142d] transition shadow-sm uppercase tracking-wider">Current Openings</a>
                <a href="#" class="bg-[#e31837] text-white font-bold px-4 py-2 rounded text-xs hover:bg-[#c2142d] transition shadow-sm uppercase tracking-wider">Prospectus</a>
            </div>
        </div>
    </div>

    <!-- Mobile Header (Visible only on xl < ) -->
    <header class="bg-white shadow-md sticky top-0 z-50 xl:hidden">
        <div class="container mx-auto px-4 flex justify-between items-center py-3">
            <a href="index.html" class="flex items-center">
                <img src="assets/images/logo.webp" alt="TMISB Logo" class="h-12 w-auto mr-2">
                <div>
                    <h1 class="nav-font font-bold text-xl text-primary leading-tight">Techno Mission</h1>
                </div>
            </a>
            <button class="text-2xl text-primary focus:outline-none" @click="mobileMenuOpen = !mobileMenuOpen">
                <i class="fas fa-bars" x-show="!mobileMenuOpen"></i>
                <i class="fas fa-times" x-show="mobileMenuOpen" x-cloak></i>
            </button>
        </div>
        
        <!-- Mobile Menu -->
        <div class="absolute w-full bg-primary text-white shadow-xl border-t border-white/10 z-40" x-show="mobileMenuOpen" x-transition x-cloak>
            <div class="flex flex-col px-4 py-2 nav-font font-medium">
                <a href="index.html" class="py-3 border-b border-white/10 text-secondary">Home</a>
                <div x-data="{ open: false }">
                    <button @click="open = !open" class="flex justify-between items-center w-full py-3 border-b border-white/10">
                        About Us <i class="fas fa-chevron-down text-xs transition" :class="open ? 'rotate-180' : ''"></i>
                    </button>
                    <div x-show="open" class="bg-primaryDark px-4 py-2 text-sm flex flex-col">
                        <a href="#" class="py-2 hover:text-secondary">About School</a>
                        <a href="#" class="py-2 hover:text-secondary">Principal's Message</a>
                    </div>
                </div>
                <a href="academics.html" class="py-3 border-b border-white/10">Academics</a>
                <a href="labs.html" class="py-3 border-b border-white/10">Facilities</a>
                <a href="admissions.html" class="py-3 border-b border-white/10">Admissions</a>
                <a href="contact.html" class="py-3 border-b border-white/10">Contact Us</a>
            </div>
        </div>
    </header>

    <!-- 3. Bottom Bar / Main Navigation (Tier 3) -->
    <nav class="bg-primary shadow-lg sticky top-0 z-40 hidden xl:block border-t border-white/10">
        <div class="container mx-auto px-2 max-w-[1500px]">
            <ul class="flex justify-center items-center space-x-6 2xl:space-x-8 nav-font font-semibold text-white text-sm py-3.5">
                <li><a href="index.html" class="hover:text-secondary transition">Home</a></li>
                
                <li class="relative group">
                    <a href="about.html" class="hover:text-secondary transition flex items-center">About Us <i class="fas fa-chevron-down text-[10px] ml-1.5 opacity-70"></i></a>
                    <ul class="absolute hidden bg-white shadow-xl border-t-4 border-secondary top-full left-0 w-56 py-2 z-50 group-hover:block transition-all text-gray-800 font-medium rounded-b">
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary">About School</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary">Principal's Message</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary">Management</a></li>
                    </ul>
                </li>

                <li><a href="#" class="hover:text-secondary transition">University Institutes</a></li>
                
                <li class="relative group">
                    <a href="academics.html" class="hover:text-secondary transition flex items-center">Academics <i class="fas fa-chevron-down text-[10px] ml-1.5 opacity-70"></i></a>
                    <ul class="absolute hidden bg-white shadow-xl border-t-4 border-secondary top-full left-0 w-48 py-2 z-50 group-hover:block transition-all text-gray-800 font-medium rounded-b">
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary">Primary</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary">Secondary</a></li>
                    </ul>
                </li>
                
                <li><a href="#" class="hover:text-secondary transition">Examination</a></li>
                <li><a href="labs.html" class="hover:text-secondary transition">Facilities</a></li>
                <li><a href="admissions.html" class="hover:text-secondary transition">Admissions</a></li>
                <li><a href="#" class="hover:text-secondary transition">Placements</a></li>
                <li><a href="#" class="hover:text-secondary transition">Student Corner</a></li>
                <li><a href="#" class="hover:text-secondary transition">News & Events</a></li>
                <li><a href="#" class="hover:text-secondary transition">IQAC</a></li>
            </ul>
        </div>
    </nav>

    `;

    html = html.substring(0, startIndex) + newHeader + html.substring(endIndex);
    fs.writeFileSync('index.html', html, 'utf8');
    console.log('Header layout updated successfully.');
} else {
    console.log('Could not find header markers.', startIndex, endIndex);
}
