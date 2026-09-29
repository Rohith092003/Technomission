const fs = require('fs');

const htmlFile = 'index.html';
let html = fs.readFileSync(htmlFile, 'utf8');

const startMarker = '<!-- 7. Our Programs';
const endMarker = '</section>';
const start = html.indexOf(startMarker);
const end = html.indexOf(endMarker, start);

if (start !== -1 && end !== -1) {
    const newSection = `<!-- 7. Our Programs -->
    <section class="section-padding bg-lightBg relative overflow-hidden">
        <div class="container mx-auto px-4 max-w-7xl relative z-10">
            <div class="text-center mb-16">
                <h4 class="text-secondary font-bold text-sm uppercase tracking-widest mb-3">Academic Excellence</h4>
                <h2 class="section-title">Our Programs</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-8">
                
                <!-- Program Card 1 -->
                <div class="group bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden flex flex-col border border-gray-100 transform hover:-translate-y-2">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Primary" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-primary/10 group-hover:bg-transparent transition-colors duration-500"></div>
                        <div class="absolute top-4 right-4 bg-secondary text-white text-[10px] font-bold uppercase tracking-wider px-3 py-1 rounded shadow-md">Foundation</div>
                    </div>
                    <div class="p-6 flex-grow flex flex-col relative">
                        <div class="absolute top-0 left-0 w-0 h-1 bg-secondary transition-all duration-500 group-hover:w-full"></div>
                        <h3 class="nav-font font-bold text-2xl text-primary mb-3">Primary</h3>
                        <p class="text-gray-600 text-sm mb-6 flex-grow leading-relaxed">
                            Building a strong foundation with inquiry-based learning, interactive play, and creative exploration.
                        </p>
                        <a href="academics.html" class="inline-flex items-center text-sm font-bold text-secondary hover:text-primary transition-colors">
                            Explore Program <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-2 transition-transform duration-300"></i>
                        </a>
                    </div>
                </div>

                <!-- Program Card 2 -->
                <div class="group bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden flex flex-col border border-gray-100 transform hover:-translate-y-2">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Secondary" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-primary/10 group-hover:bg-transparent transition-colors duration-500"></div>
                        <div class="absolute top-4 right-4 bg-secondary text-white text-[10px] font-bold uppercase tracking-wider px-3 py-1 rounded shadow-md">Growth</div>
                    </div>
                    <div class="p-6 flex-grow flex flex-col relative">
                        <div class="absolute top-0 left-0 w-0 h-1 bg-secondary transition-all duration-500 group-hover:w-full"></div>
                        <h3 class="nav-font font-bold text-2xl text-primary mb-3">Secondary</h3>
                        <p class="text-gray-600 text-sm mb-6 flex-grow leading-relaxed">
                            Fostering critical thinking, academic discipline, and leadership skills in growing minds.
                        </p>
                        <a href="academics.html" class="inline-flex items-center text-sm font-bold text-secondary hover:text-primary transition-colors">
                            Explore Program <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-2 transition-transform duration-300"></i>
                        </a>
                    </div>
                </div>

                <!-- Program Card 3 -->
                <div class="group bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden flex flex-col border border-gray-100 transform hover:-translate-y-2">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="High School" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-primary/10 group-hover:bg-transparent transition-colors duration-500"></div>
                        <div class="absolute top-4 right-4 bg-secondary text-white text-[10px] font-bold uppercase tracking-wider px-3 py-1 rounded shadow-md">Future Ready</div>
                    </div>
                    <div class="p-6 flex-grow flex flex-col relative">
                        <div class="absolute top-0 left-0 w-0 h-1 bg-secondary transition-all duration-500 group-hover:w-full"></div>
                        <h3 class="nav-font font-bold text-2xl text-primary mb-3">High School</h3>
                        <p class="text-gray-600 text-sm mb-6 flex-grow leading-relaxed">
                            Comprehensive preparation for board exams and future career pathways with specialized streams.
                        </p>
                        <a href="academics.html" class="inline-flex items-center text-sm font-bold text-secondary hover:text-primary transition-colors">
                            Explore Program <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-2 transition-transform duration-300"></i>
                        </a>
                    </div>
                </div>

                <!-- Program Card 4 -->
                <div class="group bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden flex flex-col border border-gray-100 transform hover:-translate-y-2">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1558021211-6d1403321394?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Boarding" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-primary/10 group-hover:bg-transparent transition-colors duration-500"></div>
                        <div class="absolute top-4 right-4 bg-secondary text-white text-[10px] font-bold uppercase tracking-wider px-3 py-1 rounded shadow-md">Residential</div>
                    </div>
                    <div class="p-6 flex-grow flex flex-col relative">
                        <div class="absolute top-0 left-0 w-0 h-1 bg-secondary transition-all duration-500 group-hover:w-full"></div>
                        <h3 class="nav-font font-bold text-2xl text-primary mb-3">Day-Cum-Boarding</h3>
                        <p class="text-gray-600 text-sm mb-6 flex-grow leading-relaxed">
                            A secure, nurturing residential environment emphasizing independence and essential life skills.
                        </p>
                        <a href="academics.html" class="inline-flex items-center text-sm font-bold text-secondary hover:text-primary transition-colors">
                            Explore Program <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-2 transition-transform duration-300"></i>
                        </a>
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
