<?php
get_header();
?>


    <!-- 3. Hero Section -->
    <section class="swiper hero-swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="hero-slide flex items-center justify-center" style="background-image: url('https://content.jdmagicbox.com/v2/comp/bhagalpur/v8/9999px641.x641.140721170408.g1v8/catalogue/techno-mission-international-school-bhagalpur-ho-bhagalpur-international-schools-GDFNeRRHrm.jpg');">
                    <div class="hero-overlay"></div>
                    <div class="container mx-auto px-4 relative z-10 text-center max-w-4xl mt-12">
                        <h2 class="text-secondary font-bold tracking-wider text-sm md:text-base uppercase mb-3">Welcome to TMISB</h2>
                        <h1 class="text-white nav-font font-bold text-4xl md:text-6xl leading-tight mb-6">Strong Academics. Future Skills.<br>Stronger Character.</h1>
                        <p class="text-gray-200 text-lg md:text-xl mb-10 max-w-2xl mx-auto">A future-focused K–12 Day-Cum-Boarding school focused on academic excellence, technology, creativity, sports and character development.</p>
                        <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6">
                            <a href="#" class="bg-primary hover:bg-blue-800 text-white font-semibold py-3 px-8 rounded transition duration-300">Explore Our School</a>
                            <a href="admissions.html" class="bg-secondary hover:bg-yellow-500 text-black font-semibold py-3 px-8 rounded transition duration-300">Admissions</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Additional slides can go here -->
        </div>
        <div class="swiper-pagination"></div>
    </section>

    <!-- 4. Latest News Ticker -->
    <div class="news-ticker-container">
        <div class="news-label hidden md:block">LATEST NEWS</div>
        <div class="ticker-wrap pl-4 md:pl-0">
            <div class="ticker text-sm md:text-base">
                <span class="mr-12"><i class="fas fa-bell text-secondary mr-2"></i> Admissions Open 2026–27</span>
                <span class="mr-12"><i class="fas fa-trophy text-secondary mr-2"></i> TMISB Annual Sports Meet Scheduled Next Month</span>
                <span class="mr-12"><i class="fas fa-microscope text-secondary mr-2"></i> Science Exhibition Registration Open</span>
                <span class="mr-12"><i class="fas fa-users text-secondary mr-2"></i> Parent Orientation Program This Weekend</span>
            </div>
        </div>
    </div>

    <!-- 5. About School -->
    <section class="section-padding bg-white">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="w-full lg:w-1/2">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="About TMISB" class="rounded-lg shadow-xl w-full object-cover h-[450px]">
                        <div class="absolute -bottom-6 -right-6 bg-secondary p-6 rounded-lg shadow-lg hidden md:block">
                            <p class="nav-font font-bold text-3xl text-primary mb-1">15+</p>
                            <p class="text-sm font-semibold text-gray-800">Years of Excellence</p>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2">
                    <h4 class="text-secondary font-bold text-sm uppercase tracking-wider mb-2">Welcome to</h4>
                    <h2 class="section-title left-align">About TMISB</h2>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        Techno Mission International School, Bhagalpur (TMISB) stands as a beacon of educational excellence. We believe in providing a holistic environment where academic rigor meets modern technology, ensuring our students are prepared for the challenges of tomorrow.
                    </p>
                    <p class="text-gray-600 mb-8 leading-relaxed">
                        Our day-cum-boarding model fosters independent thinking, strong character, and a lifelong love for learning. With world-class facilities and a dedicated faculty, TMISB is committed to nurturing the unique potential within every child.
                    </p>
                    <ul class="mb-8 space-y-3">
                        <li class="flex items-start"><i class="fas fa-check-circle text-primary mt-1 mr-3"></i> <span class="text-gray-700">Holistic Curriculum integrating technology & arts</span></li>
                        <li class="flex items-start"><i class="fas fa-check-circle text-primary mt-1 mr-3"></i> <span class="text-gray-700">Dedicated Day-cum-Boarding facilities</span></li>
                        <li class="flex items-start"><i class="fas fa-check-circle text-primary mt-1 mr-3"></i> <span class="text-gray-700">Focus on character building and sports</span></li>
                    </ul>
                    <a href="about.html" class="bg-primary hover:bg-blue-800 text-white font-semibold py-3 px-8 rounded transition inline-block">Read More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. Statistics -->
    <section class="py-16 bg-primary text-white relative" style="background-image: url('https://images.unsplash.com/photo-1541829070764-84a7d30dd3f3?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80'); background-size: cover; background-attachment: fixed;">
        <div class="absolute inset-0 bg-primary opacity-90"></div>
        <div class="container mx-auto px-4 max-w-7xl relative z-10" 
             x-data="{ 
                 show: false,
                 animate(target, duration = 2000) {
                     return {
                         current: 0,
                         init() {
                             this.$watch('show', value => {
                                 if(value) {
                                     let startTimestamp = null;
                                     const step = (timestamp) => {
                                         if (!startTimestamp) startTimestamp = timestamp;
                                         const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                                         this.current = Math.floor(progress * target);
                                         if (progress < 1) {
                                             window.requestAnimationFrame(step);
                                         }
                                     };
                                     window.requestAnimationFrame(step);
                                 }
                             });
                         }
                     }
                 }
             }" 
             x-init="
                 const observer = new IntersectionObserver(entries => {
                     if (entries[0].isIntersecting) {
                         show = true;
                         observer.disconnect();
                     }
                 }, { threshold: 0.5 });
                 observer.observe($el);
             ">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="p-4" x-data="animate(1500)">
                    <i class="fas fa-user-graduate text-4xl text-secondary mb-4"></i>
                    <h3 class="nav-font font-bold text-4xl mb-2"><span x-text="current">0</span>+</h3>
                    <p class="text-gray-200 font-medium">Students</p>
                </div>
                <div class="p-4" x-data="animate(100)">
                    <i class="fas fa-chalkboard-teacher text-4xl text-secondary mb-4"></i>
                    <h3 class="nav-font font-bold text-4xl mb-2"><span x-text="current">0</span>+</h3>
                    <p class="text-gray-200 font-medium">Faculty Members</p>
                </div>
                <div class="p-4" x-data="animate(10)">
                    <i class="fas fa-building text-4xl text-secondary mb-4"></i>
                    <h3 class="nav-font font-bold text-4xl mb-2"><span x-text="current">0</span>+</h3>
                    <p class="text-gray-200 font-medium">Acres Campus</p>
                </div>
                <div class="p-4" x-data="animate(15)">
                    <i class="fas fa-award text-4xl text-secondary mb-4"></i>
                    <h3 class="nav-font font-bold text-4xl mb-2"><span x-text="current">0</span>+</h3>
                    <p class="text-gray-200 font-medium">Years of Excellence</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. Our Programs -->
    <section class="section-padding bg-lightBg">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-12">
                <h4 class="text-secondary font-bold text-sm uppercase tracking-wider mb-2">Academics</h4>
                <h2 class="section-title">Our Programs</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Program Card -->
                <div class="bg-white rounded-lg shadow-card overflow-hidden card-hover">
                    <div class="h-48 img-zoom-container">
                        <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Primary" class="w-full h-full object-cover img-zoom">
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="nav-font font-bold text-xl text-primary mb-3">Primary</h3>
                        <p class="text-gray-600 text-sm mb-4">Building a strong foundation with inquiry-based learning and creative exploration.</p>
                        <a href="academics.html" class="text-secondary font-bold hover:text-primary transition">Read More <i class="fas fa-arrow-right ml-1 text-sm"></i></a>
                    </div>
                </div>
                <!-- Program Card -->
                <div class="bg-white rounded-lg shadow-card overflow-hidden card-hover">
                    <div class="h-48 img-zoom-container">
                        <img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Secondary" class="w-full h-full object-cover img-zoom">
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="nav-font font-bold text-xl text-primary mb-3">Secondary</h3>
                        <p class="text-gray-600 text-sm mb-4">Fostering critical thinking and academic discipline in growing minds.</p>
                        <a href="academics.html" class="text-secondary font-bold hover:text-primary transition">Read More <i class="fas fa-arrow-right ml-1 text-sm"></i></a>
                    </div>
                </div>
                <!-- Program Card -->
                <div class="bg-white rounded-lg shadow-card overflow-hidden card-hover">
                    <div class="h-48 img-zoom-container">
                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Senior Secondary" class="w-full h-full object-cover img-zoom">
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="nav-font font-bold text-xl text-primary mb-3">High School</h3>
                        <p class="text-gray-600 text-sm mb-4">Comprehensive preparation for board exams and future career pathways.</p>
                        <a href="academics.html" class="text-secondary font-bold hover:text-primary transition">Read More <i class="fas fa-arrow-right ml-1 text-sm"></i></a>
                    </div>
                </div>
                <!-- Program Card -->
                <div class="bg-white rounded-lg shadow-card overflow-hidden card-hover">
                    <div class="h-48 img-zoom-container">
                        <img src="https://images.unsplash.com/photo-1558021211-6d1403321394?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Boarding" class="w-full h-full object-cover img-zoom">
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="nav-font font-bold text-xl text-primary mb-3">Day-Cum-Boarding</h3>
                        <p class="text-gray-600 text-sm mb-4">A secure, nurturing residential environment emphasizing life skills.</p>
                        <a href="academics.html" class="text-secondary font-bold hover:text-primary transition">Read More <i class="fas fa-arrow-right ml-1 text-sm"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. Our Facilities -->
    <section class="section-padding bg-white">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-12">
                <h4 class="text-secondary font-bold text-sm uppercase tracking-wider mb-2">Infrastructure</h4>
                <h2 class="section-title">Our Facilities</h2>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <div class="border border-gray-100 p-6 rounded-lg text-center card-hover bg-lightBg">
                    <div class="w-16 h-16 mx-auto bg-primary text-white rounded-full flex items-center justify-center text-2xl mb-4">
                        <i class="fas fa-desktop"></i>
                    </div>
                    <h3 class="font-bold text-lg text-gray-800 mb-2">Smart Classrooms</h3>
                    <p class="text-gray-500 text-sm">Tech-enabled interactive learning spaces.</p>
                </div>
                
                <div class="border border-gray-100 p-6 rounded-lg text-center card-hover bg-lightBg">
                    <div class="w-16 h-16 mx-auto bg-primary text-white rounded-full flex items-center justify-center text-2xl mb-4">
                        <i class="fas fa-flask"></i>
                    </div>
                    <h3 class="font-bold text-lg text-gray-800 mb-2">Science Labs</h3>
                    <p class="text-gray-500 text-sm">Fully equipped Physics, Chemistry & Biology labs.</p>
                </div>
                
                <div class="border border-gray-100 p-6 rounded-lg text-center card-hover bg-lightBg">
                    <div class="w-16 h-16 mx-auto bg-primary text-white rounded-full flex items-center justify-center text-2xl mb-4">
                        <i class="fas fa-book-reader"></i>
                    </div>
                    <h3 class="font-bold text-lg text-gray-800 mb-2">Library</h3>
                    <p class="text-gray-500 text-sm">Extensive collection of physical & digital resources.</p>
                </div>
                
                <div class="border border-gray-100 p-6 rounded-lg text-center card-hover bg-lightBg">
                    <div class="w-16 h-16 mx-auto bg-primary text-white rounded-full flex items-center justify-center text-2xl mb-4">
                        <i class="fas fa-basketball-ball"></i>
                    </div>
                    <h3 class="font-bold text-lg text-gray-800 mb-2">Sports Facilities</h3>
                    <p class="text-gray-500 text-sm">Expansive grounds for outdoor and indoor sports.</p>
                </div>
                
                <div class="border border-gray-100 p-6 rounded-lg text-center card-hover bg-lightBg">
                    <div class="w-16 h-16 mx-auto bg-primary text-white rounded-full flex items-center justify-center text-2xl mb-4">
                        <i class="fas fa-robot"></i>
                    </div>
                    <h3 class="font-bold text-lg text-gray-800 mb-2">Robotics / STEM</h3>
                    <p class="text-gray-500 text-sm">Dedicated innovation labs for future skills.</p>
                </div>
                
                <div class="border border-gray-100 p-6 rounded-lg text-center card-hover bg-lightBg">
                    <div class="w-16 h-16 mx-auto bg-primary text-white rounded-full flex items-center justify-center text-2xl mb-4">
                        <i class="fas fa-bed"></i>
                    </div>
                    <h3 class="font-bold text-lg text-gray-800 mb-2">Boarding</h3>
                    <p class="text-gray-500 text-sm">Safe, comfortable and supervised residential wings.</p>
                </div>

                <div class="border border-gray-100 p-6 rounded-lg text-center card-hover bg-lightBg">
                    <div class="w-16 h-16 mx-auto bg-primary text-white rounded-full flex items-center justify-center text-2xl mb-4">
                        <i class="fas fa-theater-masks"></i>
                    </div>
                    <h3 class="font-bold text-lg text-gray-800 mb-2">Performing Arts</h3>
                    <p class="text-gray-500 text-sm">Studios for music, dance, and dramatics.</p>
                </div>

                <div class="border border-gray-100 p-6 rounded-lg text-center card-hover bg-lightBg">
                    <div class="w-16 h-16 mx-auto bg-primary text-white rounded-full flex items-center justify-center text-2xl mb-4">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="font-bold text-lg text-gray-800 mb-2">Safety & Security</h3>
                    <p class="text-gray-500 text-sm">24/7 CCTV surveillance and trained security staff.</p>
                </div>
            </div>
        </div>
    </section>

        <!-- 8.5 Student Achievements -->
    <section class="section-padding bg-lightBg border-y border-gray-100">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-12">
                <h4 class="text-secondary font-bold text-sm uppercase tracking-wider mb-2">Wall of Fame</h4>
                <h2 class="section-title">Student Achievements</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Celebrating the hard work, dedication, and outstanding success of our students in academics, sports, and co-curricular activities.</p>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Achievement 1 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 group">
                    <img src="<?php echo get_template_directory_uri(); ?>/Achievements/students_achievements_1771715819718_ewu4r8.jpg" alt="Student Achievement" class="w-full h-auto object-contain transition-transform duration-700 group-hover:scale-105">
                </div>
                
                <!-- Achievement 2 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 group">
                    <img src="<?php echo get_template_directory_uri(); ?>/Achievements/students_achievements_1771715822383_5whp8p.jpg" alt="Student Achievement" class="w-full h-auto object-contain transition-transform duration-700 group-hover:scale-105">
                </div>
                
                <!-- Achievement 3 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 group">
                    <img src="<?php echo get_template_directory_uri(); ?>/Achievements/students_achievements_1771715823656_7xpfmn.jpg" alt="Student Achievement" class="w-full h-auto object-contain transition-transform duration-700 group-hover:scale-105">
                </div>
                
                <!-- Achievement 4 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 group">
                    <img src="<?php echo get_template_directory_uri(); ?>/Achievements/students_achievements_1771715825041_n6sp8rg.jpg" alt="Student Achievement" class="w-full h-auto object-contain transition-transform duration-700 group-hover:scale-105">
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="gallery.html#achievements" class="inline-flex items-center text-primary font-bold hover:text-secondary transition uppercase tracking-wider text-sm border-b-2 border-primary hover:border-secondary pb-1">View All Achievements <i class="fas fa-arrow-right ml-2"></i></a>
            </div>
        </div>
    </section>

    <!-- 9. Image Gallery -->
    <section class="section-padding bg-lightBg">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="flex justify-between items-end mb-10">
                <div>
                    <h4 class="text-secondary font-bold text-sm uppercase tracking-wider mb-2">Campus Life</h4>
                    <h2 class="section-title left-align mb-0">Image Gallery</h2>
                </div>
                <a href="#" class="hidden md:inline-block border border-primary text-primary px-6 py-2 rounded hover:bg-primary hover:text-white transition">View All</a>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="col-span-2 row-span-2 overflow-hidden rounded group">
                    <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Gallery" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                </div>
                <div class="overflow-hidden rounded group h-48 md:h-64">
                    <img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Gallery" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                </div>
                <div class="overflow-hidden rounded group h-48 md:h-64">
                    <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Gallery" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                </div>
                <div class="overflow-hidden rounded group h-48 md:h-64">
                    <img src="https://images.unsplash.com/photo-1546410531-ee4cb4131557?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Gallery" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                </div>
                <div class="overflow-hidden rounded group h-48 md:h-64">
                    <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Gallery" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                </div>
            </div>
            <div class="text-center mt-8 md:hidden">
                <a href="#" class="inline-block border border-primary text-primary px-6 py-2 rounded">View All</a>
            </div>
        </div>
    </section>

            <!-- 10. Latest News -->
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
                        <img src="https://images.unsplash.com/photo-1461896836934-ffe607ba8211?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Blog" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
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
                        <img src="<?php echo get_template_directory_uri(); ?>/Notice.png" alt="Notice Board" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
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


    <!-- 13 & 16. Testimonials & FAQ Area -->
    <section class="section-padding bg-white">
        <div class="container mx-auto px-4 max-w-7xl grid grid-cols-1 lg:grid-cols-2 gap-12">
            
            <!-- Parent Testimonials -->
            <div>
                <h4 class="text-secondary font-bold text-sm uppercase tracking-wider mb-2">Voices</h4>
                <h2 class="section-title left-align">Parent Testimonials</h2>
                
                <div class="bg-lightBg p-8 rounded-lg shadow-inner relative mt-8">
                    <i class="fas fa-quote-left text-4xl text-gray-200 absolute top-4 left-4"></i>
                    <p class="text-gray-600 italic mb-6 relative z-10 pt-4">
                        "TMISB has provided my child with the perfect balance of academic challenge and extracurricular opportunities. The day-boarding facility allows them to focus completely on their development in a secure environment."
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-gray-300 rounded-full mr-4 flex items-center justify-center text-gray-500">
                            <i class="fas fa-user"></i>
                        </div>
                        <div>
                            <h4 class="nav-font font-bold text-gray-800">[Parent Name]</h4>
                            <p class="text-sm text-gray-500">Parent of [Student Name], Class 10</p>
                        </div>
                    </div>
                </div>
                
                <div class="flex space-x-2 mt-4 justify-center lg:justify-start">
                    <button class="w-3 h-3 rounded-full bg-primary"></button>
                    <button class="w-3 h-3 rounded-full bg-gray-300"></button>
                    <button class="w-3 h-3 rounded-full bg-gray-300"></button>
                </div>
            </div>

            <!-- FAQ -->
            <div x-data="{ activeAccordion: 1 }">
                <h4 class="text-secondary font-bold text-sm uppercase tracking-wider mb-2">Information</h4>
                <h2 class="section-title left-align">Frequently Asked Questions</h2>
                
                <div class="space-y-3 mt-8">
                    <!-- FAQ Item 1 -->
                    <div class="border border-gray-200 rounded">
                        <button @click="activeAccordion = activeAccordion === 1 ? null : 1" class="w-full text-left px-5 py-4 font-semibold text-gray-800 flex justify-between items-center focus:outline-none bg-gray-50">
                            What is the admission process?
                            <i class="fas fa-chevron-down transition-transform" :class="activeAccordion === 1 ? 'rotate-180' : ''"></i>
                        </button>
                        <div x-show="activeAccordion === 1" x-collapse x-cloak class="px-5 py-4 text-gray-600 border-t border-gray-200 text-sm">
                            [Verified admission process details will be updated here. Please contact the admissions office directly.]
                        </div>
                    </div>
                    
                    <!-- FAQ Item 2 -->
                    <div class="border border-gray-200 rounded">
                        <button @click="activeAccordion = activeAccordion === 2 ? null : 2" class="w-full text-left px-5 py-4 font-semibold text-gray-800 flex justify-between items-center focus:outline-none bg-gray-50">
                            Which curriculum does TMISB follow?
                            <i class="fas fa-chevron-down transition-transform" :class="activeAccordion === 2 ? 'rotate-180' : ''"></i>
                        </button>
                        <div x-show="activeAccordion === 2" x-collapse x-cloak class="px-5 py-4 text-gray-600 border-t border-gray-200 text-sm">
                            [TMISB curriculum details. E.g., CBSE pattern emphasizing holistic development.]
                        </div>
                    </div>
                    
                    <!-- FAQ Item 3 -->
                    <div class="border border-gray-200 rounded">
                        <button @click="activeAccordion = activeAccordion === 3 ? null : 3" class="w-full text-left px-5 py-4 font-semibold text-gray-800 flex justify-between items-center focus:outline-none bg-gray-50">
                            Is transportation available?
                            <i class="fas fa-chevron-down transition-transform" :class="activeAccordion === 3 ? 'rotate-180' : ''"></i>
                        </button>
                        <div x-show="activeAccordion === 3" x-collapse x-cloak class="px-5 py-4 text-gray-600 border-t border-gray-200 text-sm">
                            [Yes, we provide safe and secure transportation covering major routes in and around Bhagalpur.]
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="border border-gray-200 rounded">
                        <button @click="activeAccordion = activeAccordion === 4 ? null : 4" class="w-full text-left px-5 py-4 font-semibold text-gray-800 flex justify-between items-center focus:outline-none bg-gray-50">
                            Is boarding available?
                            <i class="fas fa-chevron-down transition-transform" :class="activeAccordion === 4 ? 'rotate-180' : ''"></i>
                        </button>
                        <div x-show="activeAccordion === 4" x-collapse x-cloak class="px-5 py-4 text-gray-600 border-t border-gray-200 text-sm">
                            [Yes, TMISB operates as a Day-Cum-Boarding school with excellent residential facilities.]
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 14 & 18. Get in Touch & Reach Us -->
    <section class="section-padding bg-lightBg border-t border-gray-200">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                
                <!-- Contact Form -->
                <div class="bg-white p-8 rounded-lg shadow-card">
                    <h2 class="nav-font font-bold text-2xl text-primary mb-6">Get in Touch</h2>
                    <form action="#" method="POST" class="space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">First Name</label>
                                <input type="text" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary" required>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Last Name</label>
                                <input type="text" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary" required>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                <input type="email" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary" required>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Phone</label>
                                <input type="tel" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary" required>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                            <input type="text" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Your Message</label>
                            <textarea rows="4" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary" required></textarea>
                        </div>
                        <button type="submit" class="bg-primary hover:bg-blue-800 text-white font-semibold py-3 px-8 rounded transition w-full md:w-auto">Submit Form</button>
                    </form>
                </div>

                <!-- Map & Contact Info -->
                <div>
                    <h2 class="nav-font font-bold text-2xl text-primary mb-6">Reach Us</h2>
                    <div class="space-y-6 mb-8">
                        <div class="flex items-start">
                            <div class="w-10 h-10 rounded-full bg-blue-100 text-primary flex items-center justify-center shrink-0 mr-4 mt-1">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800">Address</h4>
                                <p class="text-gray-600 text-sm mt-1"><a href="https://maps.app.goo.gl/fQYFbkphkkN2VVay9" target="_blank" class="hover:underline hover:text-secondary transition" title="View on Google Maps">Vikramshila Setu Path, Jagatpur, Bhagalpur, Bihar 812002</a></p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-10 h-10 rounded-full bg-blue-100 text-primary flex items-center justify-center shrink-0 mr-4 mt-1">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800">Contact Number</h4>
                                <p class="text-gray-600 text-sm mt-1">+91 9431214985<br>6412610985</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-10 h-10 rounded-full bg-blue-100 text-primary flex items-center justify-center shrink-0 mr-4 mt-1">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800">Email Address</h4>
                                <p class="text-gray-600 text-sm mt-1">techno.edu.school@gmail.com<br>admissions@[tmisb-domain.com]</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Google Map Placeholder -->
                    <div class="w-full h-64 bg-gray-300 rounded-lg overflow-hidden flex items-center justify-center relative shadow-inner group">
                        <iframe 
                            src="https://maps.google.com/maps?q=Techno%20Mission%20International%20School,%20Bhagalpur&t=&z=14&ie=UTF8&iwloc=&output=embed" 
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"
                            class="absolute inset-0 z-0">
                        </iframe>
                        <a href="https://maps.app.goo.gl/fQYFbkphkkN2VVay9" target="_blank" class="absolute inset-0 z-10 hidden group-hover:flex items-center justify-center bg-black/40 backdrop-blur-sm transition duration-300">
                            <span class="bg-primary text-white font-bold py-2 px-6 rounded shadow-lg transform translate-y-4 group-hover:translate-y-0 transition duration-300">Open in Google Maps <i class="fas fa-external-link-alt ml-2"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 20. Footer -->
    
<?php
get_footer();
?>