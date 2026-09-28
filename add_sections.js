const fs = require('fs');

const file = 'index.html';
let content = fs.readFileSync(file, 'utf8');

const startMarker = '<!-- 10. TMISB Updates / Blog -->';
const endMarker = '<!-- 15. Our Partners / Affiliations -->';

const startIndex = content.indexOf(startMarker);
const endIndex = content.indexOf(endMarker);

if (startIndex !== -1 && endIndex !== -1) {
    const newSection = `    <!-- 10. News & Notice Board -->
    <section class="section-padding bg-white">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-12">
                <h4 class="text-secondary font-bold text-sm uppercase tracking-wider mb-2">Stay Informed</h4>
                <h2 class="section-title">Updates & Notices</h2>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
                <!-- Blog/News Section (Span 2) -->
                <div class="lg:col-span-2">
                    <h3 class="nav-font font-bold text-2xl mb-6 border-b-2 border-secondary inline-block pb-1 text-primary">Latest News</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Blog Post 1 -->
                        <div class="bg-white rounded-lg border border-gray-100 overflow-hidden card-hover shadow-sm">
                            <div class="relative h-48">
                                <img src="https://images.unsplash.com/photo-1511629091441-ee46146481b6?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Blog" class="w-full h-full object-cover">
                                <div class="absolute top-4 left-4 bg-primary text-white text-xs font-bold px-3 py-1 rounded shadow">Education</div>
                            </div>
                            <div class="p-6">
                                <div class="text-gray-400 text-sm mb-2"><i class="far fa-calendar-alt mr-2"></i> Oct 15, 2026</div>
                                <h3 class="font-bold text-xl mb-3 text-gray-800"><a href="#" class="hover:text-primary transition">Preparing Students for the Digital Future</a></h3>
                                <p class="text-gray-600 text-sm mb-4 leading-relaxed">Discover how TMISB is integrating robotics, coding, and AI into our daily curriculum...</p>
                                <a href="#" class="text-primary font-semibold hover:text-secondary transition text-sm">Read More <i class="fas fa-arrow-right ml-1"></i></a>
                            </div>
                        </div>

                        <!-- Blog Post 2 -->
                        <div class="bg-white rounded-lg border border-gray-100 overflow-hidden card-hover shadow-sm">
                            <div class="relative h-48">
                                <img src="https://images.unsplash.com/photo-1546410531-bea5aad792f3?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Blog" class="w-full h-full object-cover">
                                <div class="absolute top-4 left-4 bg-primary text-white text-xs font-bold px-3 py-1 rounded shadow">Sports</div>
                            </div>
                            <div class="p-6">
                                <div class="text-gray-400 text-sm mb-2"><i class="far fa-calendar-alt mr-2"></i> Oct 05, 2026</div>
                                <h3 class="font-bold text-xl mb-3 text-gray-800"><a href="#" class="hover:text-primary transition">TMISB Wins Inter-School Athletics Meet</a></h3>
                                <p class="text-gray-600 text-sm mb-4 leading-relaxed">Our young athletes demonstrated outstanding performance taking home 15 gold medals...</p>
                                <a href="#" class="text-primary font-semibold hover:text-secondary transition text-sm">Read More <i class="fas fa-arrow-right ml-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Notice Board (Span 1) -->
                <div class="lg:col-span-1">
                    <h3 class="nav-font font-bold text-2xl mb-6 border-b-2 border-secondary inline-block pb-1 text-primary">Notice Board</h3>
                    <div class="bg-lightBg rounded-lg border border-gray-200 p-6 shadow-sm relative overflow-hidden h-[450px]">
                        <!-- Decorative top accent -->
                        <div class="absolute top-0 left-0 w-full h-1 bg-secondary"></div>
                        
                        <!-- Scrollable Area -->
                        <div class="space-y-4 overflow-y-auto h-full pr-2" style="scrollbar-width: thin; scrollbar-color: #d4af37 #f1f1f1;">
                            <!-- Notice Item -->
                            <div class="border-l-4 border-primary pl-4 py-3 bg-white rounded shadow-sm hover:shadow transition relative">
                                <span class="absolute top-0 right-2 -mt-2 text-[10px] font-bold text-primary bg-secondary px-2 py-0.5 rounded uppercase tracking-wider">New</span>
                                <h4 class="font-semibold text-gray-800 text-sm pr-6"><a href="#" class="hover:text-primary transition leading-tight block">Parent-Teacher Meeting Schedule</a></h4>
                                <p class="text-xs text-gray-500 mt-1.5"><i class="far fa-calendar-alt mr-1"></i> Oct 20, 2026</p>
                            </div>
                            
                            <!-- Notice Item -->
                            <div class="border-l-4 border-gray-300 pl-4 py-3 bg-white rounded shadow-sm hover:border-primary transition group">
                                <h4 class="font-semibold text-gray-800 text-sm group-hover:text-primary transition leading-tight block"><a href="#">Half-Yearly Examination Timetable Released</a></h4>
                                <p class="text-xs text-gray-500 mt-1.5"><i class="far fa-calendar-alt mr-1"></i> Oct 15, 2026</p>
                            </div>
                            
                            <!-- Notice Item -->
                            <div class="border-l-4 border-gray-300 pl-4 py-3 bg-white rounded shadow-sm hover:border-primary transition group">
                                <h4 class="font-semibold text-gray-800 text-sm group-hover:text-primary transition leading-tight block"><a href="#">Winter Uniform Guidelines for 2026</a></h4>
                                <p class="text-xs text-gray-500 mt-1.5"><i class="far fa-calendar-alt mr-1"></i> Oct 02, 2026</p>
                            </div>

                            <!-- Notice Item -->
                            <div class="border-l-4 border-gray-300 pl-4 py-3 bg-white rounded shadow-sm hover:border-primary transition group">
                                <h4 class="font-semibold text-gray-800 text-sm group-hover:text-primary transition leading-tight block"><a href="#">Annual Sports Meet Registration Open</a></h4>
                                <p class="text-xs text-gray-500 mt-1.5"><i class="far fa-calendar-alt mr-1"></i> Sep 28, 2026</p>
                            </div>

                            <!-- Notice Item -->
                            <div class="border-l-4 border-gray-300 pl-4 py-3 bg-white rounded shadow-sm hover:border-primary transition group">
                                <h4 class="font-semibold text-gray-800 text-sm group-hover:text-primary transition leading-tight block"><a href="#">Diwali Holiday Announcement</a></h4>
                                <p class="text-xs text-gray-500 mt-1.5"><i class="far fa-calendar-alt mr-1"></i> Sep 20, 2026</p>
                            </div>
                            
                             <!-- View All button -->
                            <a href="#" class="block text-center text-primary text-sm font-bold mt-4 hover:text-secondary transition pt-2">View All Notices <i class="fas fa-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 11. Admissions CTA Banner -->
    <section class="py-24 relative overflow-hidden bg-primary text-white my-10 shadow-2xl">
        <div class="absolute inset-0 z-0 opacity-20">
            <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=1920&q=80" alt="Students" class="w-full h-full object-cover">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-primary/95 to-primary/80 z-0"></div>
        <div class="container mx-auto px-4 relative z-10 text-center max-w-4xl">
            <span class="inline-block px-4 py-1 rounded-full bg-secondary text-primary font-bold text-xs uppercase tracking-widest mb-6 shadow">Limited Seats Available</span>
            <h2 class="nav-font text-4xl md:text-5xl font-extrabold mb-6 leading-tight">Secure Your Child's Future</h2>
            <p class="text-lg md:text-xl text-white/90 mb-10 leading-relaxed font-light">Admissions are now open for the academic year 2026-27. Join the TMISB family and give your child a world-class educational experience.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-5">
                <a href="admissions.html" class="bg-secondary text-primary font-bold py-4 px-10 rounded-full hover:bg-yellow-400 transform hover:-translate-y-1 transition duration-300 text-sm md:text-base uppercase tracking-wider shadow-xl flex items-center justify-center">
                    Apply Now <i class="fas fa-arrow-right ml-2"></i>
                </a>
                <a href="contact.html" class="bg-white/10 backdrop-blur border-2 border-white/50 text-white font-bold py-4 px-10 rounded-full hover:bg-white hover:text-primary transform hover:-translate-y-1 transition duration-300 text-sm md:text-base uppercase tracking-wider flex items-center justify-center">
                    Schedule a Visit <i class="far fa-calendar-check ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    `;
    
    content = content.substring(0, startIndex) + newSection + content.substring(endIndex);
    fs.writeFileSync(file, content, 'utf8');
    console.log('Sections added successfully to index.html!');
} else {
    console.log('Markers not found!');
}
