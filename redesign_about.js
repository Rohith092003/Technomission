const fs = require('fs');
const path = require('path');

const filePath = path.join(__dirname, 'about.html');
let html = fs.readFileSync(filePath, 'utf8');

const headerStart = html.indexOf('<!-- Page Header -->');
const footerStart = html.indexOf('<!-- Footer (Reused) -->');

if (headerStart !== -1 && footerStart !== -1) {
    const newContent = `<!-- Page Header -->
    <section class="relative py-32 bg-primaryDark overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" alt="Campus Background" class="w-full h-full object-cover opacity-20">
            <div class="absolute inset-0 bg-gradient-to-r from-primaryDark to-transparent"></div>
        </div>
        <div class="container mx-auto px-4 relative z-10 max-w-7xl">
            <div class="max-w-2xl">
                <div class="inline-block bg-secondary text-white px-3 py-1 rounded text-xs font-bold tracking-widest uppercase mb-4">Discover TMISB</div>
                <h1 class="nav-font font-bold text-5xl md:text-6xl text-white mb-6 leading-tight">Empowering Minds,<br>Shaping the Future.</h1>
                <div class="flex items-center text-gray-300 text-sm font-medium">
                    <a href="index.html" class="hover:text-white transition flex items-center"><i class="fas fa-home mr-2"></i> Home</a>
                    <i class="fas fa-chevron-right mx-4 text-[10px] text-gray-500"></i>
                    <span class="text-secondary">About Us</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="py-24 bg-white relative overflow-hidden">
        <!-- Background Decor -->
        <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-3xl -mt-20 -mr-20"></div>
        
        <div class="container mx-auto px-4 max-w-7xl relative z-10">
            <div class="flex flex-col lg:flex-row gap-16 items-center">
                <!-- Text Content -->
                <div class="w-full lg:w-1/2">
                    <div class="flex items-center mb-4">
                        <span class="w-12 h-1 bg-secondary rounded-full mr-4"></span>
                        <h4 class="text-primary font-bold text-sm uppercase tracking-widest">Who We Are</h4>
                    </div>
                    <h2 class="nav-font font-bold text-4xl text-primary mb-8 leading-tight">A Tradition of <span class="text-secondary">Excellence</span> in Education.</h2>
                    
                    <div class="space-y-8">
                        <div class="flex">
                            <div class="mt-1 mr-6 flex-shrink-0 w-12 h-12 bg-lightBg rounded-xl flex items-center justify-center text-secondary shadow-sm">
                                <i class="fas fa-bullseye text-xl"></i>
                            </div>
                            <div>
                                <h3 class="nav-font font-bold text-xl text-primary mb-2">Our Mission</h3>
                                <p class="text-gray-600 leading-relaxed">To empower students with the knowledge, skills, and values required to thrive in a rapidly changing world. We focus on academic rigor alongside holistic development, ensuring every child achieves their highest potential.</p>
                            </div>
                        </div>
                        
                        <div class="flex">
                            <div class="mt-1 mr-6 flex-shrink-0 w-12 h-12 bg-lightBg rounded-xl flex items-center justify-center text-secondary shadow-sm">
                                <i class="fas fa-eye text-xl"></i>
                            </div>
                            <div>
                                <h3 class="nav-font font-bold text-xl text-primary mb-2">Our Vision</h3>
                                <p class="text-gray-600 leading-relaxed">To become a premier institution of educational excellence that nurtures innovative thinkers, compassionate leaders, and responsible global citizens ready to make a positive impact.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-10 bg-primary text-white p-6 rounded-2xl shadow-xl relative overflow-hidden group hover:shadow-2xl transition-shadow duration-300">
                        <div class="absolute -right-4 -bottom-4 opacity-10 transform group-hover:scale-110 transition-transform duration-500">
                            <i class="fas fa-quote-right text-8xl"></i>
                        </div>
                        <h4 class="font-bold text-lg mb-2 relative z-10">The TMISB Philosophy</h4>
                        <p class="text-sm text-white/80 leading-relaxed relative z-10">Education goes beyond the classroom. Through our day-cum-boarding model, we instil discipline, strong character, and a deep sense of community spirit in every student.</p>
                    </div>
                </div>
                
                <!-- Image Grid -->
                <div class="w-full lg:w-1/2 relative">
                    <div class="grid grid-cols-2 gap-4 items-center">
                        <div class="space-y-4">
                            <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Students Learning" class="rounded-2xl shadow-lg w-full h-64 object-cover transform hover:-translate-y-2 transition duration-500">
                            <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Library" class="rounded-2xl shadow-lg w-full h-48 object-cover transform hover:-translate-y-2 transition duration-500">
                        </div>
                        <div>
                            <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Campus" class="rounded-2xl shadow-xl w-full h-80 object-cover transform hover:-translate-y-2 transition duration-500 border-4 border-white">
                        </div>
                    </div>
                    <!-- Experience Badge -->
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white rounded-full p-2 shadow-2xl flex items-center justify-center">
                        <div class="w-24 h-24 border-2 border-dashed border-secondary rounded-full flex flex-col items-center justify-center bg-lightBg">
                            <span class="text-secondary font-bold text-2xl">25+</span>
                            <span class="text-[9px] uppercase font-bold text-primary tracking-widest">Years</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Director Message Section -->
    <section class="py-24 bg-lightBg relative">
        <div class="container mx-auto px-4 max-w-5xl relative z-10">
            <div class="bg-white rounded-3xl shadow-2xl overflow-hidden flex flex-col md:flex-row">
                <!-- Image Side -->
                <div class="w-full md:w-2/5 relative h-80 md:h-auto">
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Director" class="absolute inset-0 w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 w-full p-6 text-white">
                        <h4 class="font-bold text-xl mb-1">Er Anshu Kumar Singh</h4>
                        <p class="text-xs font-semibold uppercase tracking-widest text-secondary">Director, TMISB</p>
                    </div>
                </div>
                
                <!-- Content Side -->
                <div class="w-full md:w-3/5 p-8 md:p-12 relative">
                    <i class="fas fa-quote-left text-5xl text-gray-100 absolute top-8 left-8"></i>
                    <div class="relative z-10">
                        <h3 class="nav-font font-bold text-3xl text-primary mb-6">Welcome to Excellence</h3>
                        
                        <div class="space-y-4 text-gray-600 leading-relaxed italic font-medium">
                            <p>
                                "At Techno Mission International School, we believe that education is the most powerful weapon which you can use to change the world. Our commitment goes beyond academic rigor; we strive to cultivate character, creativity, and compassion in every student."
                            </p>
                            <p>
                                "We have created an environment where students are encouraged to ask questions, explore new ideas, and push the boundaries of their potential. Our dedicated faculty ensures that every child receives personalized attention and guidance on their journey of discovery."
                            </p>
                        </div>
                        
                        <div class="mt-8 pt-6 border-t border-gray-100">
                            <!-- Signature placeholder -->
                            <img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Signature_of_John_Hancock.png" alt="Signature" class="h-12 opacity-40 hover:opacity-80 transition duration-300">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    `;
    
    html = html.substring(0, headerStart) + newContent + html.substring(footerStart);
    fs.writeFileSync(filePath, html, 'utf8');
    console.log('Successfully redesigned About Us page.');
} else {
    console.log('Markers not found');
}
