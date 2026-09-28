const fs = require('fs');

const file = 'index.html';
let content = fs.readFileSync(file, 'utf8');

const startMarker = '<!-- 10. News & Notice Board -->';
const endMarker = '<!-- 11. Admissions CTA Banner -->';

const startIndex = content.indexOf(startMarker);
const endIndex = content.indexOf(endMarker);

if (startIndex !== -1 && endIndex !== -1) {
    const newSection = `    <!-- 10. Latest News -->
    <section class="section-padding bg-lightBg">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-12">
                <h4 class="text-secondary font-bold text-sm uppercase tracking-wider mb-2">Latest Insights</h4>
                <h2 class="section-title">TMISB Updates</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Blog Post 1 -->
                <div class="bg-white rounded-xl border border-gray-100 overflow-hidden card-hover shadow-sm">
                    <div class="relative h-52">
                        <img src="https://images.unsplash.com/photo-1511629091441-ee46146481b6?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Blog" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                        <div class="absolute top-4 left-4 bg-primary text-white text-xs font-bold px-3 py-1 rounded shadow">Education</div>
                    </div>
                    <div class="p-6">
                        <div class="text-gray-400 text-sm mb-3"><i class="far fa-calendar-alt mr-2"></i> Oct 15, 2026</div>
                        <h3 class="font-bold text-xl mb-3 text-gray-800 leading-snug"><a href="#" class="hover:text-primary transition">Preparing Students for the Digital Future</a></h3>
                        <p class="text-gray-600 text-sm mb-5 leading-relaxed">Discover how TMISB is integrating robotics, coding, and AI into our daily curriculum.</p>
                        <a href="#" class="text-primary font-semibold hover:text-secondary transition text-sm flex items-center">Read More <i class="fas fa-arrow-right ml-2 text-xs"></i></a>
                    </div>
                </div>

                <!-- Blog Post 2 -->
                <div class="bg-white rounded-xl border border-gray-100 overflow-hidden card-hover shadow-sm">
                    <div class="relative h-52">
                        <img src="https://images.unsplash.com/photo-1546410531-bea5aad792f3?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Blog" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                        <div class="absolute top-4 left-4 bg-primary text-white text-xs font-bold px-3 py-1 rounded shadow">Sports</div>
                    </div>
                    <div class="p-6">
                        <div class="text-gray-400 text-sm mb-3"><i class="far fa-calendar-alt mr-2"></i> Oct 05, 2026</div>
                        <h3 class="font-bold text-xl mb-3 text-gray-800 leading-snug"><a href="#" class="hover:text-primary transition">TMISB Wins Inter-School Athletics Meet</a></h3>
                        <p class="text-gray-600 text-sm mb-5 leading-relaxed">Our young athletes demonstrated outstanding performance taking home 15 gold medals.</p>
                        <a href="#" class="text-primary font-semibold hover:text-secondary transition text-sm flex items-center">Read More <i class="fas fa-arrow-right ml-2 text-xs"></i></a>
                    </div>
                </div>
                
                <!-- Blog Post 3 -->
                <div class="bg-white rounded-xl border border-gray-100 overflow-hidden card-hover shadow-sm">
                    <div class="relative h-52">
                        <img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Blog" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                        <div class="absolute top-4 left-4 bg-primary text-white text-xs font-bold px-3 py-1 rounded shadow">Events</div>
                    </div>
                    <div class="p-6">
                        <div class="text-gray-400 text-sm mb-3"><i class="far fa-calendar-alt mr-2"></i> Sep 28, 2026</div>
                        <h3 class="font-bold text-xl mb-3 text-gray-800 leading-snug"><a href="#" class="hover:text-primary transition">Annual Science Exhibition Highlights</a></h3>
                        <p class="text-gray-600 text-sm mb-5 leading-relaxed">A look back at the incredible innovations and projects displayed by our talented students.</p>
                        <a href="#" class="text-primary font-semibold hover:text-secondary transition text-sm flex items-center">Read More <i class="fas fa-arrow-right ml-2 text-xs"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 10.5 Notice Board Section -->
    <section class="section-padding bg-white relative">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="flex flex-col lg:flex-row gap-16 items-center">
                <!-- Image Side -->
                <div class="w-full lg:w-1/2">
                    <div class="relative h-[500px] rounded-2xl overflow-hidden shadow-2xl group">
                        <img src="https://images.unsplash.com/photo-1523580494112-071d16940d14?auto=format&fit=crop&w=800&q=80" alt="Notice Board" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/90 via-primary/40 to-transparent"></div>
                        <div class="absolute bottom-10 left-10 right-10 text-white">
                            <span class="bg-secondary text-primary text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-4 inline-block shadow-md">Important</span>
                            <h3 class="nav-font font-extrabold text-4xl mb-3 leading-tight">Stay Updated with TMISB</h3>
                            <p class="text-white/90 text-lg font-light">Don't miss out on important announcements, exam schedules, and upcoming school events.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Notice Board Side -->
                <div class="w-full lg:w-1/2">
                    <div class="mb-8">
                        <h4 class="text-secondary font-bold text-sm uppercase tracking-wider mb-2">Announcements</h4>
                        <h2 class="section-title left-align mb-0">Notice Board</h2>
                    </div>
                    
                    <div class="bg-lightBg rounded-2xl border border-gray-100 p-2 shadow-xl relative overflow-hidden h-[420px]">
                        <!-- Decorative top accent -->
                        <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-primary to-secondary"></div>
                        
                        <!-- Scrollable Area -->
                        <div class="space-y-4 overflow-y-auto h-full p-6" style="scrollbar-width: thin; scrollbar-color: #d4af37 #f1f1f1;">
                            
                            <!-- Notice Item -->
                            <div class="flex gap-4 p-4 bg-white rounded-xl shadow-sm hover:shadow-md transition border border-gray-50 hover:border-primary/20 group">
                                <div class="flex flex-col items-center justify-center bg-primary/5 text-primary rounded-lg min-w-[60px] h-[60px] shrink-0 border border-primary/10">
                                    <span class="text-xl font-bold leading-none">20</span>
                                    <span class="text-xs uppercase font-semibold mt-1">Oct</span>
                                </div>
                                <div>
                                    <span class="inline-block mb-1 text-[10px] font-bold text-primary bg-secondary/20 px-2 py-0.5 rounded uppercase tracking-wider">New</span>
                                    <h4 class="font-bold text-gray-800 text-sm group-hover:text-primary transition leading-snug"><a href="#">Parent-Teacher Meeting Schedule for Middle School</a></h4>
                                </div>
                            </div>
                            
                            <!-- Notice Item -->
                            <div class="flex gap-4 p-4 bg-white rounded-xl shadow-sm hover:shadow-md transition border border-gray-50 hover:border-primary/20 group">
                                <div class="flex flex-col items-center justify-center bg-gray-50 text-gray-500 rounded-lg min-w-[60px] h-[60px] shrink-0 border border-gray-100">
                                    <span class="text-xl font-bold leading-none">15</span>
                                    <span class="text-xs uppercase font-semibold mt-1">Oct</span>
                                </div>
                                <div class="flex items-center">
                                    <h4 class="font-bold text-gray-800 text-sm group-hover:text-primary transition leading-snug"><a href="#">Half-Yearly Examination Timetable Released for All Classes</a></h4>
                                </div>
                            </div>
                            
                            <!-- Notice Item -->
                            <div class="flex gap-4 p-4 bg-white rounded-xl shadow-sm hover:shadow-md transition border border-gray-50 hover:border-primary/20 group">
                                <div class="flex flex-col items-center justify-center bg-gray-50 text-gray-500 rounded-lg min-w-[60px] h-[60px] shrink-0 border border-gray-100">
                                    <span class="text-xl font-bold leading-none">02</span>
                                    <span class="text-xs uppercase font-semibold mt-1">Oct</span>
                                </div>
                                <div class="flex items-center">
                                    <h4 class="font-bold text-gray-800 text-sm group-hover:text-primary transition leading-snug"><a href="#">Winter Uniform Guidelines for the Upcoming Session</a></h4>
                                </div>
                            </div>

                            <!-- Notice Item -->
                            <div class="flex gap-4 p-4 bg-white rounded-xl shadow-sm hover:shadow-md transition border border-gray-50 hover:border-primary/20 group">
                                <div class="flex flex-col items-center justify-center bg-gray-50 text-gray-500 rounded-lg min-w-[60px] h-[60px] shrink-0 border border-gray-100">
                                    <span class="text-xl font-bold leading-none">28</span>
                                    <span class="text-xs uppercase font-semibold mt-1">Sep</span>
                                </div>
                                <div class="flex items-center">
                                    <h4 class="font-bold text-gray-800 text-sm group-hover:text-primary transition leading-snug"><a href="#">Annual Sports Meet Registration Now Open</a></h4>
                                </div>
                            </div>
                            
                            <!-- View All button -->
                            <a href="#" class="flex items-center justify-center w-full py-3 mt-2 text-primary font-bold hover:text-secondary transition text-sm bg-primary/5 rounded-lg border border-primary/10 hover:bg-primary hover:text-white">
                                View All Notices <i class="fas fa-arrow-right ml-2 text-xs"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    `;
    
    content = content.substring(0, startIndex) + newSection + content.substring(endIndex);
    fs.writeFileSync(file, content, 'utf8');
    console.log('Notice board redesigned successfully in index.html!');
} else {
    console.log('Markers not found!');
}
