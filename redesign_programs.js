const fs = require('fs');

const htmlFile = 'index.html';
let html = fs.readFileSync(htmlFile, 'utf8');

const startMarker = '<!-- 7. Our Programs -->';
const endMarker = '</section>';
const start = html.indexOf(startMarker);
const end = html.indexOf(endMarker, start);

if (start !== -1 && end !== -1) {
    const newSection = `<!-- 7. Our Programs (Premium Redesign) -->
    <section class="section-padding bg-lightBg relative overflow-hidden">
        <!-- Decorative Background Element -->
        <div class="absolute top-0 right-0 w-64 h-64 bg-secondary/5 rounded-full blur-3xl -mt-10 -mr-10"></div>
        <div class="absolute bottom-0 left-0 w-80 h-80 bg-primary/5 rounded-full blur-3xl -mb-10 -ml-10"></div>

        <div class="container mx-auto px-4 max-w-7xl relative z-10">
            <div class="text-center mb-16">
                <h4 class="text-secondary font-bold text-sm uppercase tracking-widest mb-3">Academic Excellence</h4>
                <h2 class="section-title">Our Programs</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-8">
                
                <!-- Program Card 1 -->
                <div class="group relative h-[420px] w-full overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 cursor-pointer border border-gray-100">
                    <!-- Image -->
                    <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Primary" class="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                    
                    <!-- Gradient Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-primary via-primary/50 to-transparent opacity-90 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <!-- Content Overlay -->
                    <div class="absolute inset-0 p-8 flex flex-col justify-end text-white z-10">
                        <!-- Floating Badge -->
                        <span class="bg-secondary text-white text-[10px] uppercase font-bold tracking-widest px-3 py-1.5 rounded-full w-max mb-auto transform -translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500 ease-out shadow-lg">Foundation</span>
                        
                        <!-- Text Content -->
                        <div class="transform translate-y-[85px] group-hover:translate-y-0 transition-transform duration-500 ease-in-out">
                            <h3 class="nav-font font-bold text-3xl mb-3 text-white drop-shadow-md">Primary</h3>
                            <div class="w-12 h-1 bg-secondary mb-4 transition-all duration-700 ease-out group-hover:w-full rounded-full"></div>
                            <p class="text-gray-200 text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-150 mb-6 leading-relaxed">
                                Building a strong foundation with inquiry-based learning, interactive play, and creative exploration in a safe environment.
                            </p>
                            
                            <!-- Button -->
                            <a href="academics.html" class="inline-flex items-center text-sm font-bold text-white hover:text-secondary opacity-0 group-hover:opacity-100 transition-all duration-500 delay-200">
                                Explore Program <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-2 transition-transform"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Program Card 2 -->
                <div class="group relative h-[420px] w-full overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 cursor-pointer border border-gray-100">
                    <img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Secondary" class="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-primary via-primary/50 to-transparent opacity-90 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <div class="absolute inset-0 p-8 flex flex-col justify-end text-white z-10">
                        <span class="bg-secondary text-white text-[10px] uppercase font-bold tracking-widest px-3 py-1.5 rounded-full w-max mb-auto transform -translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500 ease-out shadow-lg">Growth</span>
                        
                        <div class="transform translate-y-[85px] group-hover:translate-y-0 transition-transform duration-500 ease-in-out">
                            <h3 class="nav-font font-bold text-3xl mb-3 text-white drop-shadow-md">Secondary</h3>
                            <div class="w-12 h-1 bg-secondary mb-4 transition-all duration-700 ease-out group-hover:w-full rounded-full"></div>
                            <p class="text-gray-200 text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-150 mb-6 leading-relaxed">
                                Fostering critical thinking, academic discipline, and leadership skills in growing minds through advanced curriculum.
                            </p>
                            
                            <a href="academics.html" class="inline-flex items-center text-sm font-bold text-white hover:text-secondary opacity-0 group-hover:opacity-100 transition-all duration-500 delay-200">
                                Explore Program <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-2 transition-transform"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Program Card 3 -->
                <div class="group relative h-[420px] w-full overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 cursor-pointer border border-gray-100">
                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="High School" class="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-primary via-primary/50 to-transparent opacity-90 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <div class="absolute inset-0 p-8 flex flex-col justify-end text-white z-10">
                        <span class="bg-secondary text-white text-[10px] uppercase font-bold tracking-widest px-3 py-1.5 rounded-full w-max mb-auto transform -translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500 ease-out shadow-lg">Future Ready</span>
                        
                        <div class="transform translate-y-[85px] group-hover:translate-y-0 transition-transform duration-500 ease-in-out">
                            <h3 class="nav-font font-bold text-3xl mb-3 text-white drop-shadow-md">High School</h3>
                            <div class="w-12 h-1 bg-secondary mb-4 transition-all duration-700 ease-out group-hover:w-full rounded-full"></div>
                            <p class="text-gray-200 text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-150 mb-6 leading-relaxed">
                                Comprehensive preparation for board exams and future career pathways with specialized subject streams.
                            </p>
                            
                            <a href="academics.html" class="inline-flex items-center text-sm font-bold text-white hover:text-secondary opacity-0 group-hover:opacity-100 transition-all duration-500 delay-200">
                                Explore Program <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-2 transition-transform"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Program Card 4 -->
                <div class="group relative h-[420px] w-full overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 cursor-pointer border border-gray-100">
                    <img src="https://images.unsplash.com/photo-1558021211-6d1403321394?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Boarding" class="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-primary via-primary/50 to-transparent opacity-90 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <div class="absolute inset-0 p-8 flex flex-col justify-end text-white z-10">
                        <span class="bg-secondary text-white text-[10px] uppercase font-bold tracking-widest px-3 py-1.5 rounded-full w-max mb-auto transform -translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500 ease-out shadow-lg">Residential</span>
                        
                        <div class="transform translate-y-[85px] group-hover:translate-y-0 transition-transform duration-500 ease-in-out">
                            <h3 class="nav-font font-bold text-3xl mb-3 text-white drop-shadow-md">Boarding</h3>
                            <div class="w-12 h-1 bg-secondary mb-4 transition-all duration-700 ease-out group-hover:w-full rounded-full"></div>
                            <p class="text-gray-200 text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-150 mb-6 leading-relaxed">
                                A secure, nurturing day-cum-boarding residential environment emphasizing independence and essential life skills.
                            </p>
                            
                            <a href="academics.html" class="inline-flex items-center text-sm font-bold text-white hover:text-secondary opacity-0 group-hover:opacity-100 transition-all duration-500 delay-200">
                                Explore Program <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-2 transition-transform"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>`;
    
    html = html.substring(0, start) + newSection + html.substring(end + endMarker.length);
    fs.writeFileSync(htmlFile, html, 'utf8');
    console.log('Successfully redesigned Our Programs section.');
} else {
    console.log('Could not find start or end marker.');
}
