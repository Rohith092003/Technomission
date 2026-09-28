const fs = require('fs');
let html = fs.readFileSync('index.html', 'utf8');

const startMarker = '<!-- Parent Testimonials -->';
const endMarker = '<!-- FAQ -->';

const startIndex = html.indexOf(startMarker);
const endIndex = html.indexOf(endMarker);

if (startIndex !== -1 && endIndex !== -1) {
    const newTestimonials = `<!-- Parent Testimonials -->
            <div class="relative max-w-full overflow-hidden w-full lg:max-w-md xl:max-w-xl">
                <h4 class="text-secondary font-bold text-sm uppercase tracking-wider mb-2">Voices</h4>
                <h2 class="section-title left-align">Parent Testimonials</h2>
                
                <div class="swiper testimonials-swiper mt-8 relative pb-10">
                    <div class="swiper-wrapper">
                        <!-- Testimonial 1 -->
                        <div class="swiper-slide">
                            <div class="bg-lightBg p-8 rounded-lg shadow-inner relative h-full">
                                <i class="fas fa-quote-left text-4xl text-gray-200 absolute top-4 left-4"></i>
                                <p class="text-gray-600 italic mb-6 relative z-10 pt-4">
                                    "TMISB has provided my child with the perfect balance of academic challenge and extracurricular opportunities. The day-boarding facility allows them to focus completely on their development in a secure environment."
                                </p>
                                <div class="flex items-center">
                                    <img src="https://ui-avatars.com/api/?name=Rajesh+Kumar&background=random" alt="Rajesh Kumar" class="w-12 h-12 rounded-full mr-4 object-cover border-2 border-white shadow-sm">
                                    <div>
                                        <h4 class="nav-font font-bold text-gray-800">Rajesh Kumar</h4>
                                        <p class="text-xs text-gray-500">Parent of Aarav Kumar, Class 10</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 2 -->
                        <div class="swiper-slide">
                            <div class="bg-lightBg p-8 rounded-lg shadow-inner relative h-full">
                                <i class="fas fa-quote-left text-4xl text-gray-200 absolute top-4 left-4"></i>
                                <p class="text-gray-600 italic mb-6 relative z-10 pt-4">
                                    "The smart classrooms and dedicated STEM labs have sparked a completely new level of curiosity in my daughter. The teachers are exceptionally supportive and always available."
                                </p>
                                <div class="flex items-center">
                                    <img src="https://ui-avatars.com/api/?name=Priya+Sharma&background=random" alt="Priya Sharma" class="w-12 h-12 rounded-full mr-4 object-cover border-2 border-white shadow-sm">
                                    <div>
                                        <h4 class="nav-font font-bold text-gray-800">Priya Sharma</h4>
                                        <p class="text-xs text-gray-500">Parent of Ananya Sharma, Class 8</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 3 -->
                        <div class="swiper-slide">
                            <div class="bg-lightBg p-8 rounded-lg shadow-inner relative h-full">
                                <i class="fas fa-quote-left text-4xl text-gray-200 absolute top-4 left-4"></i>
                                <p class="text-gray-600 italic mb-6 relative z-10 pt-4">
                                    "We moved to Bhagalpur recently and TMISB made the transition so smooth. The sports facilities are world-class and the focus on character building is very visible."
                                </p>
                                <div class="flex items-center">
                                    <img src="https://ui-avatars.com/api/?name=Vikram+Singh&background=random" alt="Vikram Singh" class="w-12 h-12 rounded-full mr-4 object-cover border-2 border-white shadow-sm">
                                    <div>
                                        <h4 class="nav-font font-bold text-gray-800">Vikram Singh</h4>
                                        <p class="text-xs text-gray-500">Parent of Aditya Singh, Class 6</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Pagination dots inside swiper container to align easily -->
                    <div class="swiper-pagination !bottom-0 flex justify-center lg:justify-start"></div>
                </div>
            </div>
            
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    new Swiper('.testimonials-swiper', {
                        slidesPerView: 1,
                        spaceBetween: 30,
                        loop: true,
                        autoplay: {
                            delay: 4000,
                            disableOnInteraction: false,
                        },
                        pagination: {
                            el: '.swiper-pagination',
                            clickable: true,
                        },
                    });
                });
            </script>

            `;
    
    html = html.substring(0, startIndex) + newTestimonials + html.substring(endIndex);
    fs.writeFileSync('index.html', html, 'utf8');
    console.log('Testimonials updated to swiper carousel.');
} else {
    console.log('Could not find Testimonials section.', startIndex, endIndex);
}
