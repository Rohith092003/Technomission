const fs = require('fs');
const path = require('path');

const filePath = path.join(__dirname, 'about.html');
let html = fs.readFileSync(filePath, 'utf8');

const sectionRegex = /<!-- Director Message Section -->[\s\S]*?(?=<!-- Footer \(Reused\) -->)/;

const newSection = `<!-- Director Message Section -->
    <section class="py-24 bg-white relative overflow-hidden">
        <div class="container mx-auto px-4 max-w-7xl relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-24">
                
                <!-- Image Side with Offset Frame -->
                <div class="w-full lg:w-5/12 relative">
                    <!-- Offset background box -->
                    <div class="absolute -top-6 -left-6 w-full h-full border-2 border-secondary rounded-tr-3xl rounded-bl-3xl z-0 hidden md:block"></div>
                    <div class="absolute -bottom-6 -right-6 w-full h-full bg-lightBg rounded-tl-3xl rounded-br-3xl z-0 hidden md:block"></div>
                    
                    <!-- Main Image -->
                    <div class="relative z-10 rounded-tr-3xl rounded-bl-3xl overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Director" class="w-full h-auto object-cover transform hover:scale-105 transition duration-700">
                        <div class="absolute inset-0 bg-primary opacity-10 hover:opacity-0 transition duration-500"></div>
                    </div>
                    
                    <!-- Floating Badge -->
                    <div class="absolute -right-8 bottom-12 bg-white p-4 rounded-xl shadow-xl z-20 hidden lg:block border border-gray-100">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-primary/5 flex items-center justify-center text-primary text-xl">
                                <i class="fas fa-award"></i>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 font-bold uppercase tracking-wider">Leadership</p>
                                <p class="text-sm font-bold text-primary">Excellence</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Content Side -->
                <div class="w-full lg:w-7/12 relative">
                    <!-- Massive decorative quote mark behind text -->
                    <div class="absolute -top-10 -left-10 text-[180px] text-gray-50 leading-none nav-font font-serif z-0 select-none">"</div>
                    
                    <div class="relative z-10">
                        <div class="flex items-center mb-6">
                            <span class="w-12 h-[2px] bg-secondary mr-4"></span>
                            <h4 class="text-secondary font-bold text-sm uppercase tracking-widest">Director's Message</h4>
                        </div>
                        
                        <h3 class="nav-font font-extrabold text-4xl text-primary mb-8 leading-tight">"Education is the most powerful weapon to change the world."</h3>
                        
                        <div class="space-y-6 text-gray-600 text-lg leading-relaxed font-light">
                            <p>
                                At Techno Mission International School, our commitment goes far beyond academic rigor. We strive every day to cultivate character, creativity, and deep compassion in every single student that walks through our doors.
                            </p>
                            <p>
                                We have meticulously built an environment where students are not just taught, but are actively encouraged to ask questions, explore revolutionary ideas, and push the very boundaries of their own potential. Our dedicated faculty ensures that every child receives the personalized attention and expert guidance necessary for their unique journey of discovery.
                            </p>
                        </div>
                        
                        <div class="mt-12 flex items-center gap-6">
                            <div class="w-16 h-[1px] bg-gray-300"></div>
                            <div>
                                <h4 class="font-bold text-2xl text-primary mb-1">Er Anshu Kumar Singh</h4>
                                <p class="text-sm font-bold uppercase tracking-widest text-secondary">Director, TMISB</p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    `;

html = html.replace(sectionRegex, newSection);
fs.writeFileSync(filePath, html, 'utf8');
console.log('Premium Director Message section injected.');
