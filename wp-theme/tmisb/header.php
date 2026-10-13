<!DOCTYPE html>
<html lang="en" class="scroll-smooth scroll-pt-32">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Techno Mission International School, Bhagalpur | TMISB</title>
    <!-- Tailwind CSS for rapid structural styling similar to the reference -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FontAwesome for standard icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Swiper for carousels/sliders -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <!-- Alpine.js for interactive elements (dropdowns, accordions, mobile menu) -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    
    <script src="<?php echo get_template_directory_uri(); ?>/js/tailwind-config.js?v=<?php echo time(); ?>"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css?v=<?php echo time(); ?>">
    <?php wp_head(); ?>
</head>
<body class="bg-white text-gray-700" x-data="{ mobileMenuOpen: false }">

    <!-- 1. Top Bar (Tier 1) -->
    <div class="bg-primaryDark text-white py-1.5 hidden md:block text-xs font-semibold tracking-wide">
        <div class="container mx-auto px-4 max-w-[1400px] flex justify-between items-center">
            <div class="flex space-x-6 items-center">
                <span><i class="fas fa-phone-alt text-secondary mr-2"></i>+91 9431214985, 6412610985</span>
                <span><i class="fas fa-envelope text-secondary mr-2"></i>techno.edu.school@gmail.com</span>
            </div>
            <div class="flex space-x-5 items-center">
                <a href="https://www.facebook.com/Technomissioninternationalschool/" target="_blank" class="text-white hover:text-secondary transition text-sm" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/tmis.bhagalpur/" target="_blank" class="text-white hover:text-secondary transition text-sm" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="https://www.youtube.com/@technomissionbhagalpur" target="_blank" class="text-white hover:text-secondary transition text-sm" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>

    <!-- Sticky Header Wrapper -->
    <div class="sticky top-0 z-50 w-full shadow-2xl flex flex-col">
        <!-- 2. Middle Bar (Tier 2) -->
    <div class="bg-white py-4 border-b border-gray-100 hidden xl:block">
        <div class="container mx-auto px-4 max-w-[1400px] flex justify-between items-center">
            <!-- Left Button -->
            <div class="w-1/4">
                <a href="<?php echo home_url('/admissions/'); ?>" class="bg-secondary text-white font-bold px-6 py-2.5 rounded shadow-sm hover:shadow-md transition text-sm inline-block admission-glow ring-2 ring-secondary ring-offset-2 ring-offset-white">
                    Admissions Enquiry 2026 - 27
                </a>
            </div>
            
            <!-- Center Logo -->
            <div class="w-2/4 flex justify-center">
                <a href="<?php echo home_url('/'); ?>" class="flex items-center transform hover:scale-105 transition duration-300">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.webp?v=<?php echo time(); ?>" alt="TMISB Logo" class="h-16 w-auto mr-3">
                    <div class="text-left">
                        <h1 class="nav-font font-extrabold text-2xl md:text-3xl text-primary leading-none tracking-tight uppercase" >Techno Mission</h1>
                        <p class="text-xs text-primary font-bold tracking-[0.2em] uppercase mt-1">International School <span class="bg-primary text-white px-1 ml-1 text-[9px]">BHAGALPUR</span></p>
                    </div>
                </a>
            </div>
            
            <!-- Right Buttons -->
            <div class="w-1/4 flex justify-end">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/29.png?v=<?php echo time(); ?>" alt="29" class="h-16 w-auto object-contain">
            </div>
        </div>
    </div>

    <!-- Mobile Header (Visible only on xl < ) -->
    <header class="bg-white shadow-md xl:hidden relative">
        <div class="container mx-auto px-4 flex justify-between items-center py-3">
            <a href="<?php echo home_url('/'); ?>" class="flex items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.webp?v=<?php echo time(); ?>" alt="TMISB Logo" class="h-12 w-auto mr-2">
                <div>
                    <h1 class="nav-font font-bold text-xl text-primary leading-tight">Techno Mission</h1>
                </div>
            </a>
            <button class="text-2xl text-primary focus:outline-none" @click="mobileMenuOpen = !mobileMenuOpen">
                <i class="fas fa-bars" x-show="!mobileMenuOpen"></i>
                <i class="fas fa-times" x-show="mobileMenuOpen" x-cloak></i>
            </button>
        </div>
        
        <!-- Mobile Menu -->
        <div class="absolute top-full left-0 w-full bg-primary text-white shadow-xl border-t border-white/10 z-40 max-h-[calc(100vh-65px)] overflow-y-auto" x-show="mobileMenuOpen" x-transition x-cloak>
            <!-- Admissions CTA in mobile -->
            <div class="p-4 border-b border-white/10">
                <a href="<?php echo home_url('/admissions/'); ?>" class="block text-center bg-secondary text-white font-bold py-2.5 px-4 rounded shadow admission-glow text-sm uppercase tracking-wide">
                    Admissions Enquiry 2026 - 27
                </a>
            </div>
            <div class="flex flex-col px-4 py-2 nav-font font-medium">
                <a href="<?php echo home_url('/'); ?>" class="py-3 border-b border-white/10 mobile-nav-link">Home</a>
                <div x-data="{ open: false }">
                    <button @click="open = !open" class="flex justify-between items-center w-full py-3 border-b border-white/10">
                        About Us <i class="fas fa-chevron-down text-xs transition" :class="open ? 'rotate-180' : ''"></i>
                    </button>
                    <div x-show="open" class="bg-primaryDark px-4 py-2 text-sm flex flex-col">
                        <a href="<?php echo home_url('/about/'); ?>#overview" class="py-2 hover:text-secondary">About School</a>
                        <a href="<?php echo home_url('/about/'); ?>#vision-mission" class="py-2 hover:text-secondary">Vision & Mission</a>
                        <a href="<?php echo home_url('/about/'); ?>#director" class="py-2 hover:text-secondary">Director's Message</a>
                        <a href="<?php echo home_url('/about/'); ?>#principal" class="py-2 hover:text-secondary">Principal's Message</a>
                        <a href="<?php echo home_url('/about/'); ?>#values" class="py-2 hover:text-secondary">Core Values</a>
                        <a href="<?php echo home_url('/about/'); ?>#why-tmisb" class="py-2 hover:text-secondary">Why Choose TMISB</a>
                        <a href="<?php echo home_url('/about/'); ?>#affiliation" class="py-2 hover:text-secondary">CBSE Affiliation</a>
                        <a href="<?php echo home_url('/about/'); ?>#faculty" class="py-2 hover:text-secondary">Faculty & Staff</a>
                    </div>
                </div>
                <div x-data="{ open: false }">
                    <button @click="open = !open" class="flex justify-between items-center w-full py-3 border-b border-white/10">
                        Academics <i class="fas fa-chevron-down text-xs transition" :class="open ? 'rotate-180' : ''"></i>
                    </button>
                                        <div x-show="open" class="bg-primaryDark px-4 py-2 text-sm flex flex-col">
                        <a href="<?php echo home_url('/academics/'); ?>" class="py-2 hover:text-secondary">Academic Overview</a>
                        <a href="<?php echo home_url('/pre-primary/'); ?>" class="py-2 hover:text-secondary">Pre-Primary (Nursery–UKG)</a>
                        <a href="<?php echo home_url('/primary/'); ?>" class="py-2 hover:text-secondary">Primary Wing (Classes I–V)</a>
                        <a href="<?php echo home_url('/secondary/'); ?>" class="py-2 hover:text-secondary">Middle & Secondary (VI–X)</a>
                        <a href="<?php echo home_url('/senior-secondary/'); ?>" class="py-2 hover:text-secondary">Senior Secondary (XI–XII)</a>
                        <a href="<?php echo home_url('/competitive-coaching/'); ?>" class="py-2 hover:text-secondary">Competitive Prep (JEE/NEET)</a>
                        <a href="<?php echo home_url('/teaching-methodology/'); ?>" class="py-2 hover:text-secondary">Teaching & Evaluation</a>
                    </div>
                </div>
                <a href="<?php echo home_url('/labs/'); ?>" class="py-3 border-b border-white/10 mobile-nav-link">Labs</a>
                <a href="<?php echo home_url('/activities/'); ?>" class="py-3 border-b border-white/10 mobile-nav-link">Activities</a>
                <a href="<?php echo home_url('/gallery/'); ?>" class="py-3 border-b border-white/10 mobile-nav-link">Gallery</a>
                <a href="<?php echo home_url('/admissions/'); ?>" class="py-3 border-b border-white/10 mobile-nav-link">Admissions</a>
                <a href="<?php echo home_url('/contact/'); ?>" class="py-3 border-b border-white/10 mobile-nav-link">Contact Us</a>
            </div>
        </div>
    </header>

    <!-- 3. Bottom Bar / Main Navigation (Tier 3) -->
    <nav class="bg-primary hidden xl:block border-t border-white/10">
        <div class="container mx-auto px-2 max-w-[1500px]">
            <ul class="flex justify-center items-center space-x-8 2xl:space-x-10 nav-font font-semibold text-white text-sm py-3.5">
                <li><a href="<?php echo home_url('/'); ?>" class="hover:text-secondary transition pb-1">Home</a></li>
                
                <li class="relative group nav-item">
                    <a href="<?php echo home_url('/about/'); ?>" class="hover:text-secondary transition flex items-center pb-1">About Us <i class="fas fa-chevron-down text-[10px] ml-1.5 opacity-70"></i></a>
                                        <ul class="dropdown-menu absolute hidden bg-white shadow-xl border-t-4 border-secondary top-full left-0 w-64 py-2 z-50 transition-opacity opacity-0 group-hover:opacity-100 text-gray-800 font-medium rounded-b">
                        <li><a href="<?php echo home_url('/academics/'); ?>" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Academic Overview</a></li>
                        <li><a href="<?php echo home_url('/pre-primary/'); ?>" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Pre-Primary (Nursery–UKG)</a></li>
                        <li><a href="<?php echo home_url('/primary/'); ?>" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Primary Wing (Classes I–V)</a></li>
                        <li><a href="<?php echo home_url('/secondary/'); ?>" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Middle & Secondary (VI–X)</a></li>
                        <li><a href="<?php echo home_url('/senior-secondary/'); ?>" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Senior Secondary (XI–XII)</a></li>
                        <li><a href="<?php echo home_url('/competitive-coaching/'); ?>" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Competitive Prep (JEE/NEET)</a></li>
                        <li><a href="<?php echo home_url('/teaching-methodology/'); ?>" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary">Teaching & Evaluation</a></li>
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
    