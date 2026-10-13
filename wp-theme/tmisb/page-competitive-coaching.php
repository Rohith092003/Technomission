<?php
/* Template Name: Competitive-coaching Page */
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
                        <li><a href="<?php echo home_url('/about/'); ?>#overview" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">About School</a></li>
                        <li><a href="<?php echo home_url('/about/'); ?>#vision-mission" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Vision & Mission</a></li>
                        <li><a href="<?php echo home_url('/about/'); ?>#director" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Director's Message</a></li>
                        <li><a href="<?php echo home_url('/about/'); ?>#principal" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Principal's Message</a></li>
                        <li><a href="<?php echo home_url('/about/'); ?>#values" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Core Values</a></li>
                        <li><a href="<?php echo home_url('/about/'); ?>#why-tmisb" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Why Choose TMISB</a></li>
                        <li><a href="<?php echo home_url('/about/'); ?>#affiliation" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">CBSE Affiliation</a></li>
                        <li><a href="<?php echo home_url('/about/'); ?>#faculty" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary">Faculty & Staff</a></li>
                    </ul>
                </li>

                <li class="relative group nav-item">
                    <a href="<?php echo home_url('/academics/'); ?>" class="hover:text-secondary transition flex items-center pb-1">Academics <i class="fas fa-chevron-down text-[10px] ml-1.5 opacity-70"></i></a>
                    <ul class="dropdown-menu absolute hidden bg-white shadow-xl border-t-4 border-secondary top-full left-0 w-64 py-2 z-50 transition-opacity opacity-0 group-hover:opacity-100 text-gray-800 font-medium rounded-b">
                        <li><a href="<?php echo home_url('/academics/'); ?>#overview" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Academic Philosophy</a></li>
                        <li><a href="<?php echo home_url('/academics/'); ?>#pre-primary" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Pre-Primary (Nursery–UKG)</a></li>
                        <li><a href="<?php echo home_url('/academics/'); ?>#primary" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Primary Wing (Classes I–V)</a></li>
                        <li><a href="<?php echo home_url('/academics/'); ?>#secondary" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Middle & Secondary (VI–X)</a></li>
                        <li><a href="<?php echo home_url('/academics/'); ?>#senior-secondary" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Senior Secondary (XI–XII)</a></li>
                        <li><a href="<?php echo home_url('/academics/'); ?>#competitive" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Competitive Prep (JEE/NEET)</a></li>
                        <li><a href="<?php echo home_url('/academics/'); ?>#methodology" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary">Teaching & Evaluation</a></li>
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

        // Mobile menu active link highlighting
        const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');
        mobileNavLinks.forEach(link => {
            const href = link.getAttribute('href');
            if (!href || href === '#') return;
            
            if (href !== 'index.html' && href !== '/' && currentPath.includes(href.replace('.html', ''))) {
                link.classList.add('text-secondary', 'font-bold');
            } else if ((currentPath === '/' || currentPath.endsWith('index.html') || currentPath.endsWith('/')) && href === 'index.html') {
                link.classList.add('text-secondary', 'font-bold');
            }
        });
    });
    </script>
    

    
    </div>

    
    <!-- Page Header -->
    <section class="relative py-16 md:py-28 bg-primaryDark overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80" alt="Competitive Exam Preparation" class="w-full h-full object-cover opacity-25">
            <div class="absolute inset-0 bg-gradient-to-r from-primaryDark/95 via-primaryDark/85 to-primaryDark/50"></div>
        </div>
        <div class="container mx-auto px-4 relative z-10 max-w-7xl">
            <div class="max-w-3xl">
                <div class="inline-flex items-center gap-2 bg-secondary text-white px-3.5 py-1.5 rounded text-xs font-bold tracking-widest uppercase mb-4 shadow">
                    <i class="fas fa-trophy"></i> Specialized Entrance Wing
                </div>
                <h1 class="nav-font font-extrabold text-4xl sm:text-5xl md:text-6xl text-white mb-4 leading-tight">
                    Competitive <span class="text-secondary">Prep (JEE / NEET)</span>
                </h1>
                <p class="text-xl md:text-2xl text-yellow-300 font-semibold italic mb-6">
                    "Turning aspirations into purposeful preparation"
                </p>
                <div class="flex items-center text-gray-300 text-sm font-medium">
                    <a href="<?php echo home_url('/'); ?>" class="hover:text-white transition flex items-center"><i class="fas fa-home mr-2"></i> Home</a>
                    <i class="fas fa-chevron-right mx-3 text-xs text-gray-500"></i>
                    <a href="<?php echo home_url('/academics/'); ?>" class="hover:text-white transition">Academics</a>
                    <i class="fas fa-chevron-right mx-3 text-xs text-gray-500"></i>
                    <span class="text-secondary font-semibold">Competitive Prep</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content Area -->
    <section class="py-16 md:py-20 bg-white">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="flex flex-col lg:flex-row gap-12">
                <!-- Main Column -->
                <div class="w-full lg:w-8/12">
                    <div class="mb-10">
                        <span class="w-10 h-1 bg-secondary rounded-full inline-block mb-3"></span>
                        <h2 class="nav-font font-extrabold text-3xl md:text-4xl text-primary mb-6">
                            Turning Aspirations into Purposeful Preparation
                        </h2>
                        <p class="text-gray-700 text-lg leading-relaxed mb-6 font-normal">
                            For students aspiring to pursue engineering, medicine and related fields, competitive examinations require conceptual clarity, consistent practice, analytical thinking and disciplined preparation.
                        </p>
                        <p class="text-gray-600 leading-relaxed mb-6">
                            Where offered by <strong class="text-primary font-semibold">TMISB</strong>, competitive examination support aims to complement the regular school curriculum and help students prepare systematically for their chosen academic pathways.
                        </p>
                    </div>

                    <!-- 5 Strategic Pillars Grid -->
                    <div class="space-y-6 mb-12">
                        <!-- 1 -->
                        <div class="bg-lightBg rounded-2xl p-6 sm:p-8 border border-gray-100 hover:shadow-lg transition">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-xl bg-primary text-white flex items-center justify-center text-xl shrink-0 shadow">
                                    <i class="fas fa-bullseye"></i>
                                </div>
                                <div>
                                    <h3 class="nav-font font-bold text-xl text-primary mb-2">Conceptual Clarity</h3>
                                    <p class="text-gray-600 text-sm leading-relaxed">
                                        Strengthening fundamentals in relevant subjects and applying concepts to examination-style problems.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- 2 -->
                        <div class="bg-lightBg rounded-2xl p-6 sm:p-8 border border-gray-100 hover:shadow-lg transition">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-xl bg-secondary text-white flex items-center justify-center text-xl shrink-0 shadow">
                                    <i class="fas fa-sync"></i>
                                </div>
                                <div>
                                    <h3 class="nav-font font-bold text-xl text-primary mb-2">Syllabus Coordination</h3>
                                    <p class="text-gray-600 text-sm leading-relaxed">
                                        Aligning school learning and entrance examination preparation wherever the programme permits to maximize focus and avoid duplicate efforts.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- 3 -->
                        <div class="bg-lightBg rounded-2xl p-6 sm:p-8 border border-gray-100 hover:shadow-lg transition">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-xl bg-primary text-white flex items-center justify-center text-xl shrink-0 shadow">
                                    <i class="fas fa-comments"></i>
                                </div>
                                <div>
                                    <h3 class="nav-font font-bold text-xl text-primary mb-2">Guided Doubt Clarification</h3>
                                    <p class="text-gray-600 text-sm leading-relaxed">
                                        Providing regular opportunities to address difficult concepts and reinforce understanding with experienced mentor guidance.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- 4 -->
                        <div class="bg-lightBg rounded-2xl p-6 sm:p-8 border border-gray-100 hover:shadow-lg transition">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-xl bg-secondary text-white flex items-center justify-center text-xl shrink-0 shadow">
                                    <i class="fas fa-file-alt"></i>
                                </div>
                                <div>
                                    <h3 class="nav-font font-bold text-xl text-primary mb-2">Practice and Assessment</h3>
                                    <p class="text-gray-600 text-sm leading-relaxed">
                                        Using subject-wise exercises, mock tests and performance reviews, where provided, to identify areas for improvement and build exam endurance.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- 5 -->
                        <div class="bg-lightBg rounded-2xl p-6 sm:p-8 border border-gray-100 hover:shadow-lg transition">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-xl bg-primary text-white flex items-center justify-center text-xl shrink-0 shadow">
                                    <i class="fas fa-stopwatch"></i>
                                </div>
                                <div>
                                    <h3 class="nav-font font-bold text-xl text-primary mb-2">Time Management and Revision</h3>
                                    <p class="text-gray-600 text-sm leading-relaxed">
                                        Encouraging consistent study schedules, planned revision and balanced preparation for school and entrance examinations.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Callout Emphasis Box -->
                    <div class="bg-gradient-to-r from-primary to-primaryDark text-white p-8 rounded-2xl shadow-xl mb-8">
                        <span class="inline-block bg-secondary text-white font-bold text-[11px] uppercase tracking-widest px-3 py-1 rounded mb-3">Our Core Emphasis</span>
                        <p class="text-lg md:text-xl font-light italic leading-relaxed text-gray-100 mb-2">
                            “Our emphasis is on helping students develop the knowledge, confidence and perseverance required to pursue their aspirations with purpose.”
                        </p>
                    </div>

                    <!-- Compliance Note -->
                    <div class="p-4 bg-yellow-50 border border-yellow-200 rounded-xl mb-10 text-xs text-yellow-800">
                        <i class="fas fa-info-circle mr-1.5 text-yellow-600"></i> The school must verify whether JEE/NEET coaching is operational, the faculty involved, the format of instruction and the availability of test series before these services are advertised.
                    </div>

                    <!-- Next Academic Stage Navigation -->
                    <div class="p-6 bg-lightBg rounded-2xl border border-gray-200 flex items-center justify-between">
                        <div>
                            <span class="text-xs uppercase text-gray-500 font-bold tracking-wider block">Pedagogical Framework</span>
                            <h4 class="nav-font font-bold text-lg text-primary">Academic Methodology & Evaluation</h4>
                        </div>
                        <a href="<?php echo home_url('/teaching-methodology/'); ?>" class="inline-flex items-center bg-primary hover:bg-secondary text-white font-bold py-2.5 px-5 rounded-lg text-xs uppercase tracking-wider transition">
                            Explore Methodology <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Right Sidebar -->
                <div class="w-full lg:w-4/12">
                    
    <div class="space-y-8">
        <!-- Academic Navigation Widget -->
        <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
            <h4 class="nav-font font-bold text-lg text-primary mb-4 pb-2 border-b border-gray-100 flex items-center">
                <i class="fas fa-layer-group text-secondary mr-2"></i> Academic Wings
            </h4>
            <ul class="space-y-2">
                <li>
            <a href="<?php echo home_url('/academics/'); ?>" class="flex items-center justify-between p-3.5 rounded-xl transition bg-gray-50 text-gray-700 hover:bg-primary/5 hover:text-primary">
                <span class="flex items-center text-sm">
                    <i class="fas fa-book-open mr-3 text-xs text-primary"></i> Academic Overview & Philosophy
                </span>
                <i class="fas fa-chevron-right text-xs text-gray-400"></i>
            </a>
        </li>
<li>
            <a href="<?php echo home_url('/pre-primary/'); ?>" class="flex items-center justify-between p-3.5 rounded-xl transition bg-gray-50 text-gray-700 hover:bg-primary/5 hover:text-primary">
                <span class="flex items-center text-sm">
                    <i class="fas fa-shapes mr-3 text-xs text-primary"></i> Pre-Primary Wing (Nursery–UKG)
                </span>
                <i class="fas fa-chevron-right text-xs text-gray-400"></i>
            </a>
        </li>
<li>
            <a href="<?php echo home_url('/primary/'); ?>" class="flex items-center justify-between p-3.5 rounded-xl transition bg-gray-50 text-gray-700 hover:bg-primary/5 hover:text-primary">
                <span class="flex items-center text-sm">
                    <i class="fas fa-cubes mr-3 text-xs text-primary"></i> Primary Wing (Classes I–V)
                </span>
                <i class="fas fa-chevron-right text-xs text-gray-400"></i>
            </a>
        </li>
<li>
            <a href="<?php echo home_url('/secondary/'); ?>" class="flex items-center justify-between p-3.5 rounded-xl transition bg-gray-50 text-gray-700 hover:bg-primary/5 hover:text-primary">
                <span class="flex items-center text-sm">
                    <i class="fas fa-graduation-cap mr-3 text-xs text-primary"></i> Middle & Secondary (VI–X)
                </span>
                <i class="fas fa-chevron-right text-xs text-gray-400"></i>
            </a>
        </li>
<li>
            <a href="<?php echo home_url('/senior-secondary/'); ?>" class="flex items-center justify-between p-3.5 rounded-xl transition bg-gray-50 text-gray-700 hover:bg-primary/5 hover:text-primary">
                <span class="flex items-center text-sm">
                    <i class="fas fa-atom mr-3 text-xs text-primary"></i> Senior Secondary (XI–XII)
                </span>
                <i class="fas fa-chevron-right text-xs text-gray-400"></i>
            </a>
        </li>
<li>
            <a href="<?php echo home_url('/competitive-coaching/'); ?>" class="flex items-center justify-between p-3.5 rounded-xl transition bg-primary text-white font-bold shadow-md">
                <span class="flex items-center text-sm">
                    <i class="fas fa-trophy mr-3 text-xs text-secondary"></i> Competitive Prep (JEE/NEET)
                </span>
                <i class="fas fa-chevron-right text-xs text-white"></i>
            </a>
        </li>
<li>
            <a href="<?php echo home_url('/teaching-methodology/'); ?>" class="flex items-center justify-between p-3.5 rounded-xl transition bg-gray-50 text-gray-700 hover:bg-primary/5 hover:text-primary">
                <span class="flex items-center text-sm">
                    <i class="fas fa-chalkboard-teacher mr-3 text-xs text-primary"></i> Teaching & Evaluation
                </span>
                <i class="fas fa-chevron-right text-xs text-gray-400"></i>
            </a>
        </li>
            </ul>
        </div>

        <!-- Admissions 2026-27 Card -->
        <div class="bg-gradient-to-br from-primary to-primaryDark text-white rounded-2xl p-6 shadow-xl relative overflow-hidden">
            <div class="absolute -right-6 -bottom-6 opacity-10 text-8xl">
                <i class="fas fa-user-graduate"></i>
            </div>
            <span class="bg-secondary text-white text-[11px] font-bold uppercase tracking-wider px-3 py-1 rounded inline-block mb-3 shadow">
                Admissions Open 2026–27
            </span>
            <h4 class="nav-font font-bold text-xl text-white mb-2 leading-tight">Begin Your Child's Journey at TMISB</h4>
            <p class="text-gray-200 text-xs leading-relaxed mb-5 font-light">
                Secure your child's seat in an environment dedicated to academic excellence, moral values, and all-round growth.
            </p>
            <div class="space-y-2 mb-5 text-xs text-yellow-300 font-semibold">
                <div><i class="fas fa-phone-alt mr-2"></i> +91 9431214985, 0641-2610985</div>
                <div><i class="fas fa-envelope mr-2"></i> techno.edu.school@gmail.com</div>
            </div>
            <a href="<?php echo home_url('/admissions/'); ?>" class="block text-center bg-secondary hover:bg-red-700 text-white font-bold py-2.5 px-4 rounded-lg text-xs uppercase tracking-wider transition shadow">
                Enquire for Admission
            </a>
        </div>

        <!-- Key Credentials Card -->
        <div class="bg-lightBg rounded-2xl p-6 border border-gray-200">
            <h4 class="nav-font font-bold text-base text-primary mb-3 flex items-center">
                <i class="fas fa-certificate text-secondary mr-2"></i> Official Credentials
            </h4>
            <ul class="space-y-2.5 text-xs text-gray-600">
                <li class="flex items-center"><i class="fas fa-check text-secondary mr-2"></i> CBSE Affiliation No: <strong>330331</strong></li>
                <li class="flex items-center"><i class="fas fa-check text-secondary mr-2"></i> School Code: <strong>65328</strong></li>
                <li class="flex items-center"><i class="fas fa-check text-secondary mr-2"></i> Managed by: <strong>Jagriti Charitable Trust</strong></li>
                <li class="flex items-center"><i class="fas fa-check text-secondary mr-2"></i> 29+ Years Legacy of Excellence</li>
            </ul>
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