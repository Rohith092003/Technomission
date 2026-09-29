<?php
/* Template Name: About Page */
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
                    <ul class="dropdown-menu absolute hidden bg-white shadow-xl border-t-4 border-secondary top-full left-0 w-56 py-2 z-50 transition-opacity opacity-0 group-hover:opacity-100 text-gray-800 font-medium rounded-b">
                        <li><a href="<?php echo home_url('/academics/'); ?>#primary" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Primary Education</a></li>
                        <li><a href="<?php echo home_url('/academics/'); ?>#secondary" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Middle & Secondary</a></li>
                        <li><a href="<?php echo home_url('/academics/'); ?>#senior-secondary" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Senior Secondary</a></li>
                        <li><a href="<?php echo home_url('/academics/'); ?>#specialized" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary">Specialized Programs</a></li>
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
    <section class="relative py-16 md:py-32 bg-primaryDark overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Hero2.png?v=<?php echo time(); ?>" alt="Campus Background" class="w-full h-full object-cover opacity-40">
            <div class="absolute inset-0 bg-gradient-to-r from-primaryDark/90 to-primaryDark/30"></div>
        </div>
        <div class="container mx-auto px-4 relative z-10 max-w-7xl">
            <div class="max-w-2xl">
                <div class="inline-block bg-secondary text-white px-3 py-1 rounded text-xs font-bold tracking-widest uppercase mb-4">Discover TMISB</div>
                <h1 class="nav-font font-bold text-5xl md:text-6xl text-white mb-6 leading-tight">Empowering Minds,<br>Shaping the Future.</h1>
                <div class="flex items-center text-gray-300 text-sm font-medium">
                    <a href="<?php echo home_url('/'); ?>" class="hover:text-white transition flex items-center"><i class="fas fa-home mr-2"></i> Home</a>
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
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white rounded-full p-2 shadow-2xl hidden sm:flex items-center justify-center">
                        <div class="w-24 h-24 border-2 border-dashed border-secondary rounded-full flex flex-col items-center justify-center bg-lightBg">
                            <span class="text-secondary font-bold text-2xl">29+</span>
                            <span class="text-[9px] uppercase font-bold text-primary tracking-widest">Years</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Director Message Section -->
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
                    <div class="absolute -top-10 left-0 md:-left-10 text-[100px] md:text-[180px] text-gray-50 leading-none nav-font font-serif z-0 select-none">"</div>
                    
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

    <!-- Footer (Reused) -->
    
<?php
get_footer();
?>