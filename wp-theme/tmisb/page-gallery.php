<?php
/* Template Name: Gallery Page */
get_header();
?>
<!-- Page Header -->
    <section class="page-header py-14 sm:py-20 md:py-24 text-center">
        <div class="container mx-auto px-4">
            <h1 class="nav-font font-bold text-4xl text-white mb-4">Life at TMISB</h1>
            <div class="flex items-center justify-center text-gray-300 text-sm">
                <a href="<?php echo home_url('/'); ?>" class="hover:text-white transition">Home</a>
                <i class="fas fa-chevron-right mx-3 text-xs"></i>
                <span class="text-secondary font-semibold">Gallery</span>
            </div>
        </div>
    </section>
    
    <!-- Annual Function Video Highlight -->
    <section class="py-14 bg-gradient-to-r from-primaryDark via-primary to-primaryDark text-white border-b border-gray-100">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="text-center max-w-3xl mx-auto mb-8">
                <span class="inline-flex items-center gap-2 bg-secondary text-white text-[11px] font-bold uppercase tracking-widest px-3 py-1 rounded-full mb-3 shadow">
                    <i class="fab fa-youtube text-xs"></i> Official Video Showcase
                </span>
                <h2 class="nav-font font-bold text-3xl sm:text-4xl text-white mb-2">Annual Cultural Function</h2>
                <p class="text-gray-300 text-sm leading-relaxed">
                    Watch our students bring the stage alive with vibrant dance performances, musical renditions, and dramatic excellence.
                </p>
            </div>
            
            <div class="max-w-4xl mx-auto rounded-2xl overflow-hidden shadow-2xl border-2 border-white/20 aspect-video bg-black">
                <iframe 
                    src="https://www.youtube-nocookie.com/embed/Y-5ZlrGmU7E?rel=0&modestbranding=1" 
                    title="Techno Mission International School Annual Function" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    allowfullscreen 
                    class="w-full h-full object-cover">
                </iframe>
            </div>
            
            <div class="text-center mt-6">
                <a href="https://youtu.be/Y-5ZlrGmU7E?si=xp78Nm2e-QRmvY1V" target="_blank" class="inline-flex items-center gap-2 text-yellow-300 hover:text-white font-semibold text-xs tracking-wide transition">
                    <i class="fas fa-external-link-alt text-[10px]"></i> Open in YouTube App / Full Screen
                </a>
            </div>
        </div>
    </section>

    <!-- Achievements Section -->
    <section id="achievements" class="py-20 bg-white">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-12">
                <h4 class="text-secondary font-bold text-sm uppercase tracking-wider mb-2">Wall of Fame</h4>
                <h2 class="nav-font font-bold text-4xl text-primary mb-4">Student Achievements</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Celebrating the hard work, dedication, and outstanding success of our students in academics, sports, and co-curricular activities.</p>
            </div>
            
            <!-- Using grid with masonry-like behavior or just standard cols -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Real Achievement 1: NEET Medical 2022 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 group flex flex-col">
                    <div class="p-3 bg-gray-50 flex items-center justify-center flex-grow">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/achievement-neet-medical-toppers.jpg?v=<?php echo time(); ?>" alt="NEET Medical 2022 Results" class="w-full h-auto max-h-[380px] object-contain transition-transform duration-700 group-hover:scale-105">
                    </div>
                    <div class="p-4 border-t border-gray-100">
                        <span class="text-[10px] font-bold uppercase tracking-wider text-secondary">Medical Entrance</span>
                        <h4 class="nav-font font-bold text-base text-primary">NEET 2022: 10 Students Qualified</h4>
                        <p class="text-xs text-gray-500 mt-1">Top scores: Kumar Shubham (671/720) &amp; Tarbiya Niyom (668/720)</p>
                    </div>
                </div>

                <!-- Real Achievement 2: JEE Advanced Toppers -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 group flex flex-col">
                    <div class="p-3 bg-gray-50 flex items-center justify-center flex-grow">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/achievement-jee-topper-anuj-arya.jpg?v=<?php echo time(); ?>" alt="JEE Advanced Toppers" class="w-full h-auto max-h-[380px] object-contain transition-transform duration-700 group-hover:scale-105">
                    </div>
                    <div class="p-4 border-t border-gray-100">
                        <span class="text-[10px] font-bold uppercase tracking-wider text-primary">IIT-JEE Advanced</span>
                        <h4 class="nav-font font-bold text-base text-primary">Anuj Kumar (AIR 1015) &amp; Arya Kumar</h4>
                        <p class="text-xs text-gray-500 mt-1">1st Attempt Success in JEE Advanced</p>
                    </div>
                </div>

                <!-- Real Achievement 3: JEE Advanced 5 Students -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 group flex flex-col">
                    <div class="p-3 bg-gray-50 flex items-center justify-center flex-grow">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/achievement-jee-5-students.jpg?v=<?php echo time(); ?>" alt="5 Students in JEE Advanced" class="w-full h-auto max-h-[380px] object-contain transition-transform duration-700 group-hover:scale-105">
                    </div>
                    <div class="p-4 border-t border-gray-100">
                        <span class="text-[10px] font-bold uppercase tracking-wider text-secondary">National Merit</span>
                        <h4 class="nav-font font-bold text-base text-primary">5 Students in IIT-JEE Advanced</h4>
                        <p class="text-xs text-gray-500 mt-1">Percentiles: 99.90, 98.27, 97.27, 96.53</p>
                    </div>
                </div>

                <!-- Real Achievement 4: ISRO Cyberspace -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 group flex flex-col">
                    <div class="p-3 bg-gray-50 flex items-center justify-center flex-grow">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/achievement-isro-cyber-space.jpg?v=<?php echo time(); ?>" alt="ISRO Cyberspace Winners" class="w-full h-auto max-h-[380px] object-contain transition-transform duration-700 group-hover:scale-105">
                    </div>
                    <div class="p-4 border-t border-gray-100">
                        <span class="text-[10px] font-bold uppercase tracking-wider text-primary">National Science</span>
                        <h4 class="nav-font font-bold text-base text-primary">ISRO Cyberspace Top 500</h4>
                        <p class="text-xs text-gray-500 mt-1">Abhijeet Kumar &amp; Ayush Kumar Singh</p>
                    </div>
                </div>

                <!-- Real Photo 5: Morning Assembly -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 group flex flex-col">
                    <div class="p-1 bg-gray-50 flex items-center justify-center flex-grow">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/morning-assembly-students.jpg?v=<?php echo time(); ?>" alt="Morning Assembly at TMISB" class="w-full h-auto max-h-[380px] object-cover transition-transform duration-700 group-hover:scale-105">
                    </div>
                    <div class="p-4 border-t border-gray-100">
                        <span class="text-[10px] font-bold uppercase tracking-wider text-primary">Campus Life</span>
                        <h4 class="nav-font font-bold text-base text-primary">Morning Assembly &amp; Culture</h4>
                        <p class="text-xs text-gray-500 mt-1">Discipline &amp; Spiritual Harmony at TMISB</p>
                    </div>
                </div>

                <!-- Real Photo 6: Campus Building -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 group flex flex-col">
                    <div class="p-1 bg-gray-50 flex items-center justify-center flex-grow">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/campus-building-front.jpg?v=<?php echo time(); ?>" alt="TMISB Campus Building" class="w-full h-auto max-h-[380px] object-cover transition-transform duration-700 group-hover:scale-105">
                    </div>
                    <div class="p-4 border-t border-gray-100">
                        <span class="text-[10px] font-bold uppercase tracking-wider text-secondary">Campus Infrastructure</span>
                        <h4 class="nav-font font-bold text-base text-primary">Grand Campus Facade</h4>
                        <p class="text-xs text-gray-500 mt-1">State-of-the-art Architectural Landmark</p>
                    </div>
                </div>
                <!-- Achievement 1 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 group">
                    <img src="<?php echo get_template_directory_uri(); ?>/Achievements/students_achievements_1771715819718_ewu4r8.jpg?v=<?php echo time(); ?>" alt="Student Achievement" class="w-full h-auto object-contain transition-transform duration-700 group-hover:scale-105">
                </div>
                
                <!-- Achievement 2 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 group">
                    <img src="<?php echo get_template_directory_uri(); ?>/Achievements/students_achievements_1771715822383_5whp8p.jpg?v=<?php echo time(); ?>" alt="Student Achievement" class="w-full h-auto object-contain transition-transform duration-700 group-hover:scale-105">
                </div>
                
                <!-- Achievement 3 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 group">
                    <img src="<?php echo get_template_directory_uri(); ?>/Achievements/students_achievements_1771715823656_7xpfmn.jpg?v=<?php echo time(); ?>" alt="Student Achievement" class="w-full h-auto object-contain transition-transform duration-700 group-hover:scale-105">
                </div>
                
                <!-- Achievement 4 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 group">
                    <img src="<?php echo get_template_directory_uri(); ?>/Achievements/students_achievements_1771715825041_n6sp8rg.jpg?v=<?php echo time(); ?>" alt="Student Achievement" class="w-full h-auto object-contain transition-transform duration-700 group-hover:scale-105">
                </div>
                
                <!-- Achievement 5 (The PNG file) -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 group">
                    <img src="<?php echo get_template_directory_uri(); ?>/Achievements/students_achievements_1771715851488_sn61pa.png?v=<?php echo time(); ?>" alt="Student Achievement" class="w-full h-auto object-contain transition-transform duration-700 group-hover:scale-105">
                </div>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-20 bg-gray-50 border-t border-gray-100" x-data="{ filter: 'all' }">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-12">
                <h2 class="nav-font font-bold text-3xl text-primary mb-4">Our Campus & Activities</h2>
                <p class="text-gray-600 max-w-3xl mx-auto leading-relaxed mb-8">
                    Explore the vibrant life at Techno Mission International School. From modern classrooms and state-of-the-art labs to thrilling sports events and cultural celebrations.
                </p>
                
                <!-- Filters -->
                <div class="flex flex-wrap justify-center gap-4">
                    <button @click="filter = 'all'" :class="filter === 'all' ? 'bg-primary text-white' : 'bg-white text-gray-700 hover:bg-gray-100'" class="px-6 py-2 rounded-full font-semibold transition shadow-sm border border-gray-200">All</button>
                    <button @click="filter = 'campus'" :class="filter === 'campus' ? 'bg-primary text-white' : 'bg-white text-gray-700 hover:bg-gray-100'" class="px-6 py-2 rounded-full font-semibold transition shadow-sm border border-gray-200">Campus</button>
                    <button @click="filter = 'academics'" :class="filter === 'academics' ? 'bg-primary text-white' : 'bg-white text-gray-700 hover:bg-gray-100'" class="px-6 py-2 rounded-full font-semibold transition shadow-sm border border-gray-200">Academics</button>
                    <button @click="filter = 'sports'" :class="filter === 'sports' ? 'bg-primary text-white' : 'bg-white text-gray-700 hover:bg-gray-100'" class="px-6 py-2 rounded-full font-semibold transition shadow-sm border border-gray-200">Sports & Events</button>
                </div>
            </div>
            
            <!-- Gallery Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <!-- Item 1 -->
                <div x-show="filter === 'all' || filter === 'campus'" x-transition class="group relative rounded-xl overflow-hidden shadow-md cursor-pointer aspect-square">
                    <img src="<?php echo get_template_directory_uri(); ?>/school images google/campus_infrastructure_1771715691851_8ss6lp.jpg?v=<?php echo time(); ?>" alt="Campus Building" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-end p-6">
                        <h4 class="text-white font-bold text-lg">Main Campus</h4>
                        <p class="text-gray-200 text-sm">State-of-the-art infrastructure</p>
                    </div>
                </div>
                
                <!-- Item 2 -->
                <div x-show="filter === 'all' || filter === 'academics'" x-transition class="group relative rounded-xl overflow-hidden shadow-md cursor-pointer aspect-square">
                    <img src="<?php echo get_template_directory_uri(); ?>/School Images/classrooms_learning_1771715713266_lltmd9.jpg?v=<?php echo time(); ?>" alt="Interactive Classroom" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-end p-6">
                        <h4 class="text-white font-bold text-lg">Smart Classrooms</h4>
                        <p class="text-gray-200 text-sm">Interactive learning environments</p>
                    </div>
                </div>
                
                <!-- Item 3 -->
                <div x-show="filter === 'all' || filter === 'academics'" x-transition class="group relative rounded-xl overflow-hidden shadow-md cursor-pointer aspect-square">
                    <img src="<?php echo get_template_directory_uri(); ?>/school images google/Science lab.webp?v=<?php echo time(); ?>" alt="Science Lab" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-end p-6">
                        <h4 class="text-white font-bold text-lg">Science Labs</h4>
                        <p class="text-gray-200 text-sm">Practical experimentation</p>
                    </div>
                </div>
                
                <!-- Item 4 -->
                <div x-show="filter === 'all' || filter === 'sports'" x-transition class="group relative rounded-xl overflow-hidden shadow-md cursor-pointer aspect-[4/3] md:col-span-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/school images google/9f8218_0a2316ea7be24810a46e7e5841f94e6c~mv2.jpeg?v=<?php echo time(); ?>" alt="Sports Ground" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-end p-6">
                        <h4 class="text-white font-bold text-lg">Annual Sports Day</h4>
                        <p class="text-gray-200 text-sm">Fostering teamwork and physical health</p>
                    </div>
                </div>
                
                <!-- Item 5 -->
                <div x-show="filter === 'all' || filter === 'campus'" x-transition class="group relative rounded-xl overflow-hidden shadow-md cursor-pointer aspect-[4/3] md:aspect-square">
                    <img src="<?php echo get_template_directory_uri(); ?>/school images google/63f03e7eda38af09f9012e779a2c2745.webp?v=<?php echo time(); ?>" alt="Library" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-end p-6">
                        <h4 class="text-white font-bold text-lg">Central Library</h4>
                        <p class="text-gray-200 text-sm">A vast collection of knowledge</p>
                    </div>
                </div>

                <!-- Item 6 -->
                <div x-show="filter === 'all' || filter === 'academics'" x-transition class="group relative rounded-xl overflow-hidden shadow-md cursor-pointer aspect-square">
                    <img src="<?php echo get_template_directory_uri(); ?>/school images google/685f11c1b5a24f6bbf7ff382b40717c5.webp?v=<?php echo time(); ?>" alt="Students Studying" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-end p-6">
                        <h4 class="text-white font-bold text-lg">Group Study</h4>
                        <p class="text-gray-200 text-sm">Collaborative learning</p>
                    </div>
                </div>

                <!-- Item 7 -->
                <div x-show="filter === 'all' || filter === 'sports'" x-transition class="group relative rounded-xl overflow-hidden shadow-md cursor-pointer aspect-square">
                    <img src="<?php echo get_template_directory_uri(); ?>/School Images/classrooms_learning_1771715744842_14puoq.jpg?v=<?php echo time(); ?>" alt="School Seminar & Leadership Event" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-end p-6">
                        <h4 class="text-white font-bold text-lg">Cultural Fest</h4>
                        <p class="text-gray-200 text-sm">Celebrating diversity and arts</p>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <button class="border-2 border-primary text-primary hover:bg-primary hover:text-white font-semibold py-3 px-8 rounded transition duration-300">
                    Load More Images
                </button>
            </div>
        </div>
    </section>

    <!-- Footer (Reused) -->
    
<?php
get_footer();
?>