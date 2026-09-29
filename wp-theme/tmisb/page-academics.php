<?php
/* Template Name: Academics Page */
get_header();
?>


    <!-- 3. Bottom Bar / Main Navigation (Tier 3) -->
    <nav class="bg-primary hidden xl:block border-t border-white/10">
        <div class="container mx-auto px-2 max-w-[1500px]">
            <ul class="flex justify-center items-center space-x-8 2xl:space-x-10 nav-font font-semibold text-white text-sm py-3.5">
                <li><a href="<?php echo home_url('/'); ?>" class="hover:text-secondary transition pb-1">Home</a></li>
                
                <li class="relative group nav-item">
                    <a href="<?php echo home_url('/about/'); ?>" class="hover:text-secondary transition flex items-center pb-1">About Us <i class="fas fa-chevron-down text-[10px] ml-1.5 opacity-70"></i></a>
                    <ul class="dropdown-menu absolute hidden bg-white shadow-xl border-t-4 border-secondary top-full left-0 w-64 py-2 z-50 transition-opacity opacity-0 group-hover:opacity-100 text-gray-800 font-medium rounded-b">
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">About School</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Principal's Message</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Management / Leadership</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Salient Features</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Values</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary">Alumni Connect</a></li>
                    </ul>
                </li>

                <li class="relative group nav-item">
                    <a href="<?php echo home_url('/academics/'); ?>" class="hover:text-secondary transition flex items-center pb-1">Academics <i class="fas fa-chevron-down text-[10px] ml-1.5 opacity-70"></i></a>
                    <ul class="dropdown-menu absolute hidden bg-white shadow-xl border-t-4 border-secondary top-full left-0 w-48 py-2 z-50 transition-opacity opacity-0 group-hover:opacity-100 text-gray-800 font-medium rounded-b">
                        <li><a href="<?php echo home_url('/academics/'); ?>#primary" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Primary</a></li>
                        <li><a href="<?php echo home_url('/academics/'); ?>#secondary" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Secondary</a></li>
                        <li><a href="<?php echo home_url('/academics/'); ?>#high-school" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary">High School</a></li>
                    </ul>
                </li>
                
                <li class="relative group nav-item">
                    <a href="<?php echo home_url('/labs/'); ?>" class="hover:text-secondary transition flex items-center pb-1">Labs <i class="fas fa-chevron-down text-[10px] ml-1.5 opacity-70"></i></a>
                    <ul class="dropdown-menu absolute hidden bg-white shadow-xl border-t-4 border-secondary top-full left-0 w-48 py-2 z-50 transition-opacity opacity-0 group-hover:opacity-100 text-gray-800 font-medium rounded-b">
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Computer Lab</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Physics Lab</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Chemistry Lab</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Biology Lab</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary">Robotics Lab</a></li>
                    </ul>
                </li>

                <li class="relative group nav-item">
                    <a href="<?php echo home_url('/activities/'); ?>" class="hover:text-secondary transition flex items-center pb-1">Activities <i class="fas fa-chevron-down text-[10px] ml-1.5 opacity-70"></i></a>
                    <ul class="dropdown-menu absolute hidden bg-white shadow-xl border-t-4 border-secondary top-full left-0 w-48 py-2 z-50 transition-opacity opacity-0 group-hover:opacity-100 text-gray-800 font-medium rounded-b">
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Yoga</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Dramatics</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Sports</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary">Art & Craft</a></li>
                    </ul>
                </li>

                <li><a href="<?php echo home_url('/gallery/'); ?>" class="hover:text-secondary transition pb-1">Gallery</a></li>
                <li><a href="#" class="hover:text-secondary transition pb-1">Blog</a></li>
                <li><a href="<?php echo home_url('/contact/'); ?>" class="hover:text-secondary transition pb-1">Contact Us</a></li>
            </ul>
        </div>
    </nav>

    <!-- Dynamic Active Nav Script -->
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const navLinks = document.querySelectorAll('nav ul > li > a, nav ul > li.nav-item > a');
        const currentPath = window.location.pathname;
        
        // Remove hardcoded active classes
        navLinks.forEach(link => {
            link.classList.remove('border-b-2', 'border-secondary');
        });

        // Determine current page identifier
        let activeFound = false;
        navLinks.forEach(link => {
            const href = link.getAttribute('href');
            if (!href || href === '#') return;

            // Check if current URL includes the href (works for about.html and /about/)
            if (href !== 'index.html' && href !== '/' && currentPath.includes(href.replace('.html', ''))) {
                link.classList.add('border-b-2', 'border-secondary');
                activeFound = true;
            }
        });

        // Fallback for Home page
        if (!activeFound && (currentPath === '/' || currentPath.endsWith('index.html'))) {
            navLinks.forEach(link => {
                if (link.getAttribute('href') === 'index.html' || link.getAttribute('href').includes('home_url')) {
                    link.classList.add('border-b-2', 'border-secondary');
                }
            });
        }
    });
    </script>
    

    
    </div>

    <!-- Page Header -->
    <section class="page-header py-24 text-center">
        <div class="container mx-auto px-4">
            <h1 class="nav-font font-bold text-4xl text-white mb-4">Academic Curriculum</h1>
            <div class="flex items-center justify-center text-gray-300 text-sm">
                <a href="<?php echo home_url('/'); ?>" class="hover:text-white transition">Home</a>
                <i class="fas fa-chevron-right mx-3 text-xs"></i>
                <span class="text-secondary font-semibold">Academics</span>
            </div>
        </div>
    </section>

        <!-- 1. Academic Philosophy / Curriculum Overview -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="flex flex-col lg:flex-row gap-16 items-center">
                <div class="w-full lg:w-1/2">
                    <h4 class="text-secondary font-bold text-sm uppercase tracking-wider mb-2">Our Philosophy</h4>
                    <h2 class="section-title left-align">Empowering Minds for a Global Future</h2>
                    <p class="text-gray-600 mb-6 leading-relaxed text-lg">
                        At Techno Mission International School, we follow the prestigious <strong class="text-primary">CBSE curriculum</strong>, seamlessly blending traditional values with modern, progressive education methodologies.
                    </p>
                    <p class="text-gray-600 mb-8 leading-relaxed">
                        Our academic framework is designed not just for rote learning, but to foster critical thinking, problem-solving, and intellectual curiosity. We believe that every child is unique, and our student-centric approach ensures personalized attention to help them realize their maximum potential.
                    </p>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary text-xl shrink-0"><i class="fas fa-laptop-code"></i></div>
                            <span class="font-bold text-gray-800 text-sm">Tech-Integrated<br>Classrooms</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary text-xl shrink-0"><i class="fas fa-chalkboard-teacher"></i></div>
                            <span class="font-bold text-gray-800 text-sm">Experienced<br>Faculty</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary text-xl shrink-0"><i class="fas fa-flask"></i></div>
                            <span class="font-bold text-gray-800 text-sm">Practical<br>Learning</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary text-xl shrink-0"><i class="fas fa-globe-asia"></i></div>
                            <span class="font-bold text-gray-800 text-sm">Global<br>Perspective</span>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2">
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl h-[500px]">
                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Academic Philosophy" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. Academic Stages -->
    <section class="py-20 bg-lightBg border-y border-gray-100" id="stages">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-16">
                <h4 class="text-secondary font-bold text-sm uppercase tracking-wider mb-2">Learning Journey</h4>
                <h2 class="section-title">Our Educational Stages</h2>
            </div>
            
            <div class="space-y-12">
                <!-- Stage 1 -->
                <div id="primary" class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden flex flex-col md:flex-row group">
                    <div class="w-full md:w-2/5 h-64 md:h-auto relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Primary" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    </div>
                    <div class="w-full md:w-3/5 p-8 md:p-12 flex flex-col justify-center">
                        <div class="text-secondary mb-3"><i class="fas fa-star text-xl"></i></div>
                        <h3 class="nav-font font-bold text-3xl text-primary mb-4">Primary Education (Classes I-V)</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            The primary years are crucial for laying a strong foundation. Our curriculum focuses on language proficiency, numerical ability, environmental awareness, and creative expression. We employ activity-based learning to make education engaging and joyful.
                        </p>
                        <ul class="space-y-3 text-sm text-gray-700 font-medium">
                            <li class="flex items-center"><i class="fas fa-check-circle text-secondary mr-3 text-lg"></i> Focus on foundational literacy and numeracy</li>
                            <li class="flex items-center"><i class="fas fa-check-circle text-secondary mr-3 text-lg"></i> Experiential and play-way methods</li>
                            <li class="flex items-center"><i class="fas fa-check-circle text-secondary mr-3 text-lg"></i> Introduction to basic computer skills</li>
                        </ul>
                    </div>
                </div>

                <!-- Stage 2 -->
                <div id="secondary" class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden flex flex-col md:flex-row-reverse group">
                    <div class="w-full md:w-2/5 h-64 md:h-auto relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Middle & Secondary" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    </div>
                    <div class="w-full md:w-3/5 p-8 md:p-12 flex flex-col justify-center">
                        <div class="text-secondary mb-3"><i class="fas fa-book-reader text-xl"></i></div>
                        <h3 class="nav-font font-bold text-3xl text-primary mb-4">Middle & Secondary (Classes VI-X)</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            As students mature, our academic rigor increases. We strictly follow the CBSE curriculum, emphasizing analytical skills, project-based learning, and interdisciplinary approaches to prepare them thoroughly for the Class X Board Examinations.
                        </p>
                        <ul class="space-y-3 text-sm text-gray-700 font-medium">
                            <li class="flex items-center"><i class="fas fa-check-circle text-secondary mr-3 text-lg"></i> Comprehensive subject knowledge</li>
                            <li class="flex items-center"><i class="fas fa-check-circle text-secondary mr-3 text-lg"></i> Regular assessments and feedback loops</li>
                            <li class="flex items-center"><i class="fas fa-check-circle text-secondary mr-3 text-lg"></i> Focus on mental wellness and career counseling</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Stage 3 -->
                <div id="senior-secondary" class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden flex flex-col md:flex-row group">
                    <div class="w-full md:w-2/5 h-64 md:h-auto relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Senior Secondary" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    </div>
                    <div class="w-full md:w-3/5 p-8 md:p-12 flex flex-col justify-center">
                        <div class="text-secondary mb-3"><i class="fas fa-graduation-cap text-xl"></i></div>
                        <h3 class="nav-font font-bold text-3xl text-primary mb-4">Senior Secondary (Classes XI-XII)</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            The defining years of school life. We offer robust streams in Science (PCM/PCB) and Commerce. With highly experienced faculty, state-of-the-art laboratories, and comprehensive study materials, we ensure students excel in Board Exams while simultaneously preparing for competitive entrances.
                        </p>
                        <ul class="space-y-3 text-sm text-gray-700 font-medium">
                            <li class="flex items-center"><i class="fas fa-check-circle text-secondary mr-3 text-lg"></i> Specialized faculty for higher-level subjects</li>
                            <li class="flex items-center"><i class="fas fa-check-circle text-secondary mr-3 text-lg"></i> Advanced laboratory sessions</li>
                            <li class="flex items-center"><i class="fas fa-check-circle text-secondary mr-3 text-lg"></i> Integrated coaching for IIT-JEE / NEET</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Specialized Programs Grid -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-16">
                <h4 class="text-secondary font-bold text-sm uppercase tracking-wider mb-2">Beyond Regular Academics</h4>
                <h2 class="section-title">Specialized Programs</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <!-- Competitive Prep -->
                <div class="bg-gradient-to-br from-primary to-blue-900 rounded-2xl p-10 text-white shadow-2xl relative overflow-hidden group">
                    <div class="absolute top-0 right-0 opacity-10 transform translate-x-1/4 -translate-y-1/4 group-hover:scale-110 transition duration-700">
                        <i class="fas fa-trophy text-[180px]"></i>
                    </div>
                    <div class="relative z-10">
                        <div class="w-16 h-16 bg-secondary text-primary rounded-2xl flex items-center justify-center text-3xl mb-8 shadow-lg">
                            <i class="fas fa-award"></i>
                        </div>
                        <h3 class="nav-font font-bold text-3xl mb-4 leading-tight">Integrated Competitive Coaching</h3>
                        <p class="text-white/80 leading-relaxed mb-8 text-lg font-light">
                            TMISB brings expert faculty to campus for specialized coaching in IIT-JEE, NEET, and other national-level competitive examinations. This saves students precious travel time and provides a synchronized curriculum that covers both Board and Entrance syllabi.
                        </p>
                        <a href="<?php echo home_url('/contact/'); ?>" class="inline-flex items-center text-secondary font-bold hover:text-white transition text-sm uppercase tracking-wider">Enquire Now <i class="fas fa-arrow-right ml-2"></i></a>
                    </div>
                </div>
                
                <!-- Day-Cum-Boarding -->
                <div class="bg-white rounded-2xl p-10 shadow-2xl border border-gray-100 relative overflow-hidden group">
                    <div class="absolute top-0 right-0 opacity-[0.03] transform translate-x-1/4 -translate-y-1/4 group-hover:scale-110 transition duration-700">
                        <i class="fas fa-home text-[180px] text-primary"></i>
                    </div>
                    <div class="relative z-10">
                        <div class="w-16 h-16 bg-primary text-white rounded-2xl flex items-center justify-center text-3xl mb-8 shadow-lg">
                            <i class="fas fa-bed"></i>
                        </div>
                        <h3 class="nav-font font-bold text-3xl text-primary mb-4 leading-tight">Day-Cum-Boarding Facility</h3>
                        <p class="text-gray-600 leading-relaxed mb-8 text-lg font-light">
                            Our unique day-cum-boarding program offers a highly structured, nurturing environment where students spend extended hours on campus. Supervised evening study sessions ensure homework and self-study are completed under expert guidance, leading to better academic outcomes.
                        </p>
                        <a href="<?php echo home_url('/contact/'); ?>" class="inline-flex items-center text-primary font-bold hover:text-secondary transition text-sm uppercase tracking-wider">Learn More <i class="fas fa-arrow-right ml-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer (Reused) -->
    
<?php
get_footer();
?>