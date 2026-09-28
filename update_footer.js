const fs = require('fs');

const files = ['index.html', 'about.html', 'contact.html', 'academics.html', 'labs.html', 'activities.html', 'gallery.html', 'admissions.html'];

const newFooter = `<footer class="relative bg-primary text-white pt-20 pb-10 overflow-hidden">
        <!-- Background Particles -->
        <div class="school-particles absolute inset-0 opacity-[0.03] pointer-events-none"></div>
        <div class="absolute top-0 right-0 w-96 h-96 bg-white rounded-full mix-blend-overlay filter blur-3xl opacity-10 -translate-y-1/2 translate-x-1/2 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-secondary rounded-full mix-blend-overlay filter blur-3xl opacity-10 translate-y-1/2 -translate-x-1/2 pointer-events-none"></div>
        
        <div class="container mx-auto px-4 max-w-7xl relative z-10">
            <!-- Newsletter / CTA row -->
            <div class="flex flex-col md:flex-row justify-between items-center border-b border-white/20 pb-12 mb-12">
                <div class="mb-6 md:mb-0">
                    <h3 class="nav-font text-3xl font-bold mb-2">Ready to join our community?</h3>
                    <p class="text-white/80">Stay updated with our latest news, events, and admissions.</p>
                </div>
                <div class="flex w-full md:w-auto shadow-xl rounded overflow-hidden">
                    <input type="email" placeholder="Enter your email address" class="px-6 py-4 border-none outline-none text-gray-800 w-full md:w-80">
                    <button class="bg-secondary text-primary font-bold px-8 py-4 hover:bg-yellow-400 transition uppercase tracking-wider text-sm">Subscribe</button>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
                <!-- Brand -->
                <div>
                    <div class="flex items-center mb-6 bg-white/10 p-4 rounded-xl inline-flex border border-white/10 shadow-inner">
                        <img src="assets/images/logo.webp" alt="TMISB Logo" class="h-12 w-auto mr-4">
                        <div>
                            <h2 class="nav-font font-bold text-xl tracking-wider leading-tight">Techno Mission</h2>
                            <p class="text-[10px] text-white/70 font-semibold tracking-widest mt-1">ESTD 1997</p>
                        </div>
                    </div>
                    <p class="text-white/70 text-sm mb-6 leading-relaxed pr-4">
                        Creating future-ready global citizens through academic rigor, technological integration, and strong moral character.
                    </p>
                    <div class="flex space-x-3">
                        <a href="#" class="w-10 h-10 rounded-lg bg-white/5 border border-white/20 flex items-center justify-center hover:bg-secondary hover:text-primary transition duration-300 hover:border-secondary hover:-translate-y-1"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="w-10 h-10 rounded-lg bg-white/5 border border-white/20 flex items-center justify-center hover:bg-secondary hover:text-primary transition duration-300 hover:border-secondary hover:-translate-y-1"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="w-10 h-10 rounded-lg bg-white/5 border border-white/20 flex items-center justify-center hover:bg-secondary hover:text-primary transition duration-300 hover:border-secondary hover:-translate-y-1"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="w-10 h-10 rounded-lg bg-white/5 border border-white/20 flex items-center justify-center hover:bg-secondary hover:text-primary transition duration-300 hover:border-secondary hover:-translate-y-1"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                
                <!-- Explore -->
                <div>
                    <h4 class="font-bold text-lg mb-6 tracking-wide text-secondary uppercase text-sm">Explore</h4>
                    <ul class="space-y-4 text-sm text-white/80">
                        <li><a href="about.html" class="hover:text-white hover:translate-x-1 inline-block transition duration-300 flex items-center"><span class="w-1.5 h-1.5 rounded-full bg-secondary/50 mr-3"></span> About School</a></li>
                        <li><a href="admissions.html" class="hover:text-white hover:translate-x-1 inline-block transition duration-300 flex items-center"><span class="w-1.5 h-1.5 rounded-full bg-secondary/50 mr-3"></span> Admissions</a></li>
                        <li><a href="academics.html" class="hover:text-white hover:translate-x-1 inline-block transition duration-300 flex items-center"><span class="w-1.5 h-1.5 rounded-full bg-secondary/50 mr-3"></span> Academics</a></li>
                        <li><a href="gallery.html" class="hover:text-white hover:translate-x-1 inline-block transition duration-300 flex items-center"><span class="w-1.5 h-1.5 rounded-full bg-secondary/50 mr-3"></span> Photo Gallery</a></li>
                        <li><a href="contact.html" class="hover:text-white hover:translate-x-1 inline-block transition duration-300 flex items-center"><span class="w-1.5 h-1.5 rounded-full bg-secondary/50 mr-3"></span> Contact Us</a></li>
                    </ul>
                </div>
                
                <!-- Campus Life -->
                <div>
                    <h4 class="font-bold text-lg mb-6 tracking-wide text-secondary uppercase text-sm">Campus Life</h4>
                    <ul class="space-y-4 text-sm text-white/80">
                        <li><a href="labs.html" class="hover:text-white hover:translate-x-1 inline-block transition duration-300 flex items-center"><span class="w-1.5 h-1.5 rounded-full bg-secondary/50 mr-3"></span> Laboratories</a></li>
                        <li><a href="activities.html" class="hover:text-white hover:translate-x-1 inline-block transition duration-300 flex items-center"><span class="w-1.5 h-1.5 rounded-full bg-secondary/50 mr-3"></span> Sports & Activities</a></li>
                        <li><a href="#" class="hover:text-white hover:translate-x-1 inline-block transition duration-300 flex items-center"><span class="w-1.5 h-1.5 rounded-full bg-secondary/50 mr-3"></span> Student Clubs</a></li>
                        <li><a href="#" class="hover:text-white hover:translate-x-1 inline-block transition duration-300 flex items-center"><span class="w-1.5 h-1.5 rounded-full bg-secondary/50 mr-3"></span> Events & News</a></li>
                        <li><a href="#" class="hover:text-white hover:translate-x-1 inline-block transition duration-300 flex items-center"><span class="w-1.5 h-1.5 rounded-full bg-secondary/50 mr-3"></span> Boarding Life</a></li>
                    </ul>
                </div>
                
                <!-- Contact Info -->
                <div>
                    <h4 class="font-bold text-lg mb-6 tracking-wide text-secondary uppercase text-sm">Contact Us</h4>
                    <ul class="space-y-5 text-sm text-white/90">
                        <li class="flex items-start">
                            <div class="mt-0.5 w-8 h-8 rounded bg-white/10 flex items-center justify-center shrink-0 mr-4 text-secondary border border-white/5">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <span class="leading-relaxed">Vikramshila Setu Path, Jagatpur, Bhagalpur, Bihar 812002</span>
                        </li>
                        <li class="flex items-center">
                            <div class="w-8 h-8 rounded bg-white/10 flex items-center justify-center shrink-0 mr-4 text-secondary border border-white/5">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <span>+91 9431214985<br>0641-2610985</span>
                        </li>
                        <li class="flex items-center">
                            <div class="w-8 h-8 rounded bg-white/10 flex items-center justify-center shrink-0 mr-4 text-secondary border border-white/5">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <span class="break-all">techno.edu.school@gmail.com</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Bottom Copyright -->
            <div class="border-t border-white/20 pt-8 flex flex-col md:flex-row justify-between items-center text-xs text-white/50">
                <p>&copy; 2026 Techno Mission International School, Bhagalpur. All Rights Reserved.</p>
                <div class="flex space-x-6 mt-4 md:mt-0 font-medium uppercase tracking-wider">
                    <a href="#" class="hover:text-secondary transition">Privacy Policy</a>
                    <a href="#" class="hover:text-secondary transition">Terms of Use</a>
                    <a href="#" class="hover:text-secondary transition">Mandatory Disclosure</a>
                </div>
            </div>
        </div>
    </footer>`;

files.forEach(file => {
    let content = fs.readFileSync(file, 'utf8');
    
    // Find the exact footer tag instead of comments
    const footerStart = content.indexOf('<footer class="bg-gray-900');
    
    if (footerStart !== -1) {
        const footerEnd = content.indexOf('</footer>', footerStart);
        if (footerEnd !== -1) {
            content = content.substring(0, footerStart) + newFooter + content.substring(footerEnd + 9);
            fs.writeFileSync(file, content, 'utf8');
            console.log(`Updated footer in ${file}`);
        } else {
            console.log(`Could not find closing tag in ${file}`);
        }
    } else {
        console.log(`Could not find opening tag in ${file}`);
    }
});

console.log('All done!');
