const fs = require('fs');
const path = require('path');

const files = fs.readdirSync(__dirname).filter(f => f.endsWith('.html'));

const footerRegex = /<footer[^>]*>[\s\S]*?<\/footer>/;

const newFooter = `<footer class="relative bg-[#00284d] text-white pt-24 pb-12 overflow-hidden border-t-4 border-secondary">
        <!-- Abstract Background Elements -->
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-secondary/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-primary/50 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2 pointer-events-none"></div>
        
        <div class="container mx-auto px-4 max-w-7xl relative z-10">
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-12 lg:gap-8 mb-16">
                <!-- Brand Section (Takes up 4 columns) -->
                <div class="lg:col-span-4 pr-0 lg:pr-8">
                    <a href="index.html" class="flex items-center mb-8 inline-block">
                        <div class="flex items-center">
                            <div class="bg-white p-2.5 rounded-xl shadow-lg mr-5">
                                <img src="assets/images/logo.webp" alt="TMISB Logo" class="h-14 w-auto">
                            </div>
                            <div>
                                <h2 class="nav-font font-extrabold text-2xl text-white tracking-wide">Techno Mission</h2>
                                <p class="text-xs text-white font-semibold tracking-widest mt-1 uppercase">International School</p>
                            </div>
                        </div>
                    </a>
                    <p class="text-white text-sm mb-8 leading-relaxed font-light pr-4">
                        Creating future-ready global citizens through rigorous academics, cutting-edge technology, and strong moral character since 1997.
                    </p>
                    <div class="flex space-x-4">
                        <a href="https://www.facebook.com/Technomissioninternationalschool/" target="_blank" class="w-10 h-10 rounded-full bg-white/5 border border-white/20 flex items-center justify-center text-white hover:bg-secondary hover:text-primary hover:border-secondary transition-all duration-300 hover:-translate-y-1 shadow-lg"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/tmis.bhagalpur/" target="_blank" class="w-10 h-10 rounded-full bg-white/5 border border-white/20 flex items-center justify-center text-white hover:bg-secondary hover:text-primary hover:border-secondary transition-all duration-300 hover:-translate-y-1 shadow-lg"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.youtube.com/@technomissionbhagalpur" target="_blank" class="w-10 h-10 rounded-full bg-white/5 border border-white/20 flex items-center justify-center text-white hover:bg-secondary hover:text-primary hover:border-secondary transition-all duration-300 hover:-translate-y-1 shadow-lg"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                
                <!-- Quick Links (Takes up 2 columns) -->
                <div class="lg:col-span-2 lg:col-start-6">
                    <h4 class="font-bold text-lg mb-8 text-white">Explore</h4>
                    <ul class="space-y-4">
                        <li><a href="about.html" class="group flex items-center text-sm text-white hover:text-secondary transition-colors duration-300"><span class="w-4 h-[1px] bg-secondary/80 mr-3 transition-all duration-300 group-hover:w-6 group-hover:bg-secondary"></span> About Us</a></li>
                        <li><a href="admissions.html" class="group flex items-center text-sm text-white hover:text-secondary transition-colors duration-300"><span class="w-4 h-[1px] bg-secondary/80 mr-3 transition-all duration-300 group-hover:w-6 group-hover:bg-secondary"></span> Admissions</a></li>
                        <li><a href="academics.html" class="group flex items-center text-sm text-white hover:text-secondary transition-colors duration-300"><span class="w-4 h-[1px] bg-secondary/80 mr-3 transition-all duration-300 group-hover:w-6 group-hover:bg-secondary"></span> Academics</a></li>
                        <li><a href="gallery.html" class="group flex items-center text-sm text-white hover:text-secondary transition-colors duration-300"><span class="w-4 h-[1px] bg-secondary/80 mr-3 transition-all duration-300 group-hover:w-6 group-hover:bg-secondary"></span> Gallery</a></li>
                        <li><a href="contact.html" class="group flex items-center text-sm text-white hover:text-secondary transition-colors duration-300"><span class="w-4 h-[1px] bg-secondary/80 mr-3 transition-all duration-300 group-hover:w-6 group-hover:bg-secondary"></span> Contact</a></li>
                    </ul>
                </div>
                
                <!-- Campus Life (Takes up 2 columns) -->
                <div class="lg:col-span-2">
                    <h4 class="font-bold text-lg mb-8 text-white">Campus</h4>
                    <ul class="space-y-4">
                        <li><a href="labs.html" class="group flex items-center text-sm text-white hover:text-secondary transition-colors duration-300"><span class="w-4 h-[1px] bg-secondary/80 mr-3 transition-all duration-300 group-hover:w-6 group-hover:bg-secondary"></span> Laboratories</a></li>
                        <li><a href="activities.html" class="group flex items-center text-sm text-white hover:text-secondary transition-colors duration-300"><span class="w-4 h-[1px] bg-secondary/80 mr-3 transition-all duration-300 group-hover:w-6 group-hover:bg-secondary"></span> Sports</a></li>
                        <li><a href="#" class="group flex items-center text-sm text-white hover:text-secondary transition-colors duration-300"><span class="w-4 h-[1px] bg-secondary/80 mr-3 transition-all duration-300 group-hover:w-6 group-hover:bg-secondary"></span> Clubs</a></li>
                        <li><a href="#" class="group flex items-center text-sm text-white hover:text-secondary transition-colors duration-300"><span class="w-4 h-[1px] bg-secondary/80 mr-3 transition-all duration-300 group-hover:w-6 group-hover:bg-secondary"></span> Events</a></li>
                    </ul>
                </div>
                
                <!-- Contact Info (Takes up 3 columns) -->
                <div class="lg:col-span-3">
                    <h4 class="font-bold text-lg mb-8 text-white">Get in Touch</h4>
                    <ul class="space-y-6">
                        <li class="flex items-start group">
                            <div class="w-10 h-10 rounded-full bg-white/5 border border-white/20 flex items-center justify-center shrink-0 mr-4 group-hover:bg-secondary transition-colors duration-300">
                                <i class="fas fa-map-marker-alt text-secondary group-hover:text-primary transition-colors"></i>
                            </div>
                            <span class="text-sm text-white leading-relaxed font-light mt-1"><a href="https://maps.app.goo.gl/fQYFbkphkkN2VVay9" target="_blank" class="hover:text-white transition">Vikramshila Setu Path, Jagatpur,<br>Bhagalpur, Bihar 812002</a></span>
                        </li>
                        <li class="flex items-start group">
                            <div class="w-10 h-10 rounded-full bg-white/5 border border-white/20 flex items-center justify-center shrink-0 mr-4 group-hover:bg-secondary transition-colors duration-300">
                                <i class="fas fa-phone-alt text-secondary group-hover:text-primary transition-colors"></i>
                            </div>
                            <span class="text-sm text-white leading-relaxed font-light mt-1">+91 9431214985<br>0641-2610985</span>
                        </li>
                        <li class="flex items-start group">
                            <div class="w-10 h-10 rounded-full bg-white/5 border border-white/20 flex items-center justify-center shrink-0 mr-4 group-hover:bg-secondary transition-colors duration-300">
                                <i class="fas fa-envelope text-secondary group-hover:text-primary transition-colors"></i>
                            </div>
                            <span class="text-sm text-white leading-relaxed font-light mt-2 break-all">techno.edu.school@gmail.com</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Bottom Copyright -->
            <div class="border-t border-white/20 pt-8 flex flex-col md:flex-row justify-between items-center text-sm font-light text-white">
                <p>&copy; 2026 Techno Mission International School. All Rights Reserved.</p>
                <div class="mt-4 md:mt-0 flex space-x-6">
                    <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
                    <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>`;

for (const file of files) {
    const filePath = path.join(__dirname, file);
    let html = fs.readFileSync(filePath, 'utf8');
    
    html = html.replace(footerRegex, newFooter);
    
    fs.writeFileSync(filePath, html, 'utf8');
}
console.log('Premium white footer injected into all HTML files!');
