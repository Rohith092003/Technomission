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
    <script defer src="<?php echo get_template_directory_uri(); ?>/js/animations.js?v=<?php echo time(); ?>"></script>
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
                <a href="<?php echo home_url('/'); ?>" class="flex items-center transform hover:scale-[1.02] transition duration-300">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.webp?v=<?php echo time(); ?>" alt="TMISB Logo" class="h-16 w-auto mr-3 shrink-0">
                    <div class="text-left">
                        <h1 class="nav-font font-extrabold text-2xl md:text-3xl text-primary leading-none tracking-tight uppercase">Techno Mission</h1>
                        <p class="text-xs text-primary font-bold tracking-[0.2em] uppercase mt-1">International School <span class="bg-primary text-white px-1 ml-1 text-[9px]">BHAGALPUR</span></p>
                        <div class="mt-1 flex items-center gap-1.5 text-[11px] font-semibold text-gray-600">
                            <span class="text-gray-500">Affiliated to CBSE</span>
                            <span class="text-gray-300">|</span>
                            <span class="inline-flex items-center gap-1 text-secondary font-bold">
                                <i class="fas fa-check-circle text-[10px]"></i> Affiliation No. 330331
                            </span>
                        </div>
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
    <header class="bg-white shadow-sm xl:hidden relative z-40 border-b border-gray-100">
        <div class="container mx-auto px-4 flex justify-between items-center py-3">
            <a href="<?php echo home_url('/'); ?>" class="flex items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.webp?v=<?php echo time(); ?>" alt="TMISB Logo" class="h-12 w-auto mr-2.5">
                <div>
                    <h1 class="nav-font font-bold text-xl text-primary leading-tight">Techno Mission</h1>
                    <p class="text-[10px] text-gray-500 font-semibold leading-tight">CBSE Affiliation No: <span class="text-secondary font-bold">330331</span></p>
                </div>
            </a>
            <button 
                class="w-10 h-10 rounded-lg bg-gray-50 hover:bg-gray-100 active:bg-gray-200 text-primary border border-gray-200 flex items-center justify-center text-lg focus:outline-none transition shadow-sm" 
                @click="mobileMenuOpen = true" 
                aria-label="Open navigation menu"
            >
                <i class="fas fa-bars"></i>
            </button>
        </div>
        
        <!-- Full-Screen Mobile Navigation Overlay (Clean White Design) -->
        <div 
            class="fixed inset-0 w-full h-full min-h-screen z-[9999] bg-white flex flex-col text-gray-800" 
            x-show="mobileMenuOpen" 
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-x-full"
            x-transition:enter-end="opacity-100 translate-x-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-x-0"
            x-transition:leave-end="opacity-0 translate-x-full"
            x-effect="document.body.style.overflow = mobileMenuOpen ? 'hidden' : ''"
            @keydown.escape.window="mobileMenuOpen = false"
            x-cloak
        >
            <!-- 1. Clean Top Bar with Close Button -->
            <div class="flex items-center justify-between px-5 py-4 border-b border-gray-200 bg-white shrink-0">
                <a href="<?php echo home_url('/'); ?>" class="flex items-center gap-2.5" @click="mobileMenuOpen = false">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.webp?v=<?php echo time(); ?>" alt="TMISB Logo" class="h-11 w-auto">
                    <div>
                        <h2 class="nav-font font-bold text-lg text-primary leading-tight">Techno Mission</h2>
                        <p class="text-[10px] text-gray-500 font-medium leading-tight">
                            Affiliated to CBSE <span class="text-gray-300">|</span> <span class="text-secondary font-bold">330331</span>
                        </p>
                    </div>
                </a>
                
                <!-- Close Button -->
                <button 
                    @click="mobileMenuOpen = false" 
                    class="w-10 h-10 rounded-full bg-gray-100 hover:bg-gray-200 active:bg-gray-300 text-gray-700 flex items-center justify-center text-base transition duration-150 focus:outline-none border border-gray-200"
                    aria-label="Close navigation menu"
                >
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <!-- 2. Admissions CTA Bar -->
            <div class="p-4 bg-gray-50 border-b border-gray-200 shrink-0">
                <a href="<?php echo home_url('/admissions/'); ?>" @click="mobileMenuOpen = false" class="block text-center bg-secondary hover:bg-red-700 text-white font-bold py-3 px-4 rounded-lg shadow-sm text-xs sm:text-sm uppercase tracking-wider transition">
                    Admissions Enquiry 2026 – 27
                </a>
            </div>

            <!-- 3. Navigation Links (Clean, Human, Consistent Typography) -->
            <div class="flex-1 overflow-y-auto px-5 py-3 divide-y divide-gray-100 nav-font">
                <!-- Home -->
                <div class="py-1">
                    <a href="<?php echo home_url('/'); ?>" @click="mobileMenuOpen = false" class="flex items-center justify-between py-3 px-2 text-primary font-semibold text-base hover:text-secondary transition mobile-nav-link">
                        <span>Home</span>
                        <i class="fas fa-chevron-right text-xs text-gray-300"></i>
                    </a>
                </div>

                <!-- About Us Accordion -->
                <div x-data="{ open: false }" class="py-1">
                    <button @click="open = !open" class="flex justify-between items-center w-full py-3 px-2 text-gray-800 font-semibold text-base hover:text-primary transition">
                        <span>About Us</span>
                        <i class="fas fa-chevron-down text-xs transition duration-200 text-gray-400" :class="open ? 'rotate-180 text-primary' : ''"></i>
                    </button>
                    <div x-show="open" x-collapse x-cloak class="bg-gray-50 rounded-lg my-1.5 px-3 py-2 text-sm flex flex-col space-y-1 border border-gray-100">
                        <a href="<?php echo home_url('/about/'); ?>#overview" @click="mobileMenuOpen = false" class="py-2 px-2 text-gray-600 hover:text-primary hover:bg-white rounded transition">About School</a>
                        <a href="<?php echo home_url('/about/'); ?>#vision-mission" @click="mobileMenuOpen = false" class="py-2 px-2 text-gray-600 hover:text-primary hover:bg-white rounded transition">Vision & Mission</a>
                        <a href="<?php echo home_url('/about/'); ?>#values" @click="mobileMenuOpen = false" class="py-2 px-2 text-gray-600 hover:text-primary hover:bg-white rounded transition">Our Core Values</a>
                        <a href="<?php echo home_url('/about/'); ?>#affiliation" @click="mobileMenuOpen = false" class="py-2 px-2 text-gray-600 hover:text-primary hover:bg-white rounded transition">CBSE Affiliation</a>
                        <a href="<?php echo home_url('/about/'); ?>#director" @click="mobileMenuOpen = false" class="py-2 px-2 text-gray-600 hover:text-primary hover:bg-white rounded transition">Director's Desk</a>
                        <a href="<?php echo home_url('/about/'); ?>#principal" @click="mobileMenuOpen = false" class="py-2 px-2 text-gray-600 hover:text-primary hover:bg-white rounded transition">Principal's Desk</a>
                        <a href="<?php echo home_url('/about/'); ?>#why-tmisb" @click="mobileMenuOpen = false" class="py-2 px-2 text-gray-600 hover:text-primary hover:bg-white rounded transition">Why Choose TMISB</a>
                        <a href="<?php echo home_url('/about/'); ?>#faculty" @click="mobileMenuOpen = false" class="py-2 px-2 text-gray-600 hover:text-primary hover:bg-white rounded transition">Faculty & Staff</a>
                    </div>
                </div>

                <!-- Academics Accordion -->
                <div x-data="{ open: false }" class="py-1">
                    <button @click="open = !open" class="flex justify-between items-center w-full py-3 px-2 text-gray-800 font-semibold text-base hover:text-primary transition">
                        <span>Academics</span>
                        <i class="fas fa-chevron-down text-xs transition duration-200 text-gray-400" :class="open ? 'rotate-180 text-primary' : ''"></i>
                    </button>
                    <div x-show="open" x-collapse x-cloak class="bg-gray-50 rounded-lg my-1.5 px-3 py-2 text-sm flex flex-col space-y-1 border border-gray-100">
                        <a href="<?php echo home_url('/academics/'); ?>" @click="mobileMenuOpen = false" class="py-2 px-2 text-gray-600 hover:text-primary hover:bg-white rounded transition">Academic Overview</a>
                        <a href="<?php echo home_url('/pre-primary/'); ?>" @click="mobileMenuOpen = false" class="py-2 px-2 text-gray-600 hover:text-primary hover:bg-white rounded transition">Pre-Primary (Nursery–UKG)</a>
                        <a href="<?php echo home_url('/primary/'); ?>" @click="mobileMenuOpen = false" class="py-2 px-2 text-gray-600 hover:text-primary hover:bg-white rounded transition">Primary Wing (Classes I–V)</a>
                        <a href="<?php echo home_url('/secondary/'); ?>" @click="mobileMenuOpen = false" class="py-2 px-2 text-gray-600 hover:text-primary hover:bg-white rounded transition">Middle & Secondary (VI–X)</a>
                        <a href="<?php echo home_url('/senior-secondary/'); ?>" @click="mobileMenuOpen = false" class="py-2 px-2 text-gray-600 hover:text-primary hover:bg-white rounded transition">Senior Secondary (XI–XII)</a>
                        <a href="<?php echo home_url('/competitive-coaching/'); ?>" @click="mobileMenuOpen = false" class="py-2 px-2 text-gray-600 hover:text-primary hover:bg-white rounded transition">Competitive Prep (JEE/NEET)</a>
                        <a href="<?php echo home_url('/teaching-methodology/'); ?>" @click="mobileMenuOpen = false" class="py-2 px-2 text-gray-600 hover:text-primary hover:bg-white rounded transition">Teaching & Evaluation</a>
                    </div>
                </div>

                <!-- Facilities Accordion -->
                <div x-data="{ open: false }" class="py-1">
                    <button @click="open = !open" class="flex justify-between items-center w-full py-3 px-2 text-gray-800 font-semibold text-base hover:text-primary transition">
                        <span>Facilities</span>
                        <i class="fas fa-chevron-down text-xs transition duration-200 text-gray-400" :class="open ? 'rotate-180 text-primary' : ''"></i>
                    </button>
                    <div x-show="open" x-collapse x-cloak class="bg-gray-50 rounded-lg my-1.5 px-3 py-2 text-sm flex flex-col space-y-1 border border-gray-100">
                        <a href="<?php echo home_url('/facilities/'); ?>" @click="mobileMenuOpen = false" class="py-2 px-2 text-gray-600 hover:text-primary hover:bg-white rounded transition">Facilities Overview</a>
                        <a href="<?php echo home_url('/facilities/'); ?>#labs" @click="mobileMenuOpen = false" class="py-2 px-2 text-gray-600 hover:text-primary hover:bg-white rounded transition">Laboratories</a>
                        <a href="<?php echo home_url('/facilities/'); ?>#classrooms" @click="mobileMenuOpen = false" class="py-2 px-2 text-gray-600 hover:text-primary hover:bg-white rounded transition">Digital Classrooms</a>
                        <a href="<?php echo home_url('/facilities/'); ?>#transport" @click="mobileMenuOpen = false" class="py-2 px-2 text-gray-600 hover:text-primary hover:bg-white rounded transition">Safe Transport</a>
                        <a href="<?php echo home_url('/facilities/'); ?>#library" @click="mobileMenuOpen = false" class="py-2 px-2 text-gray-600 hover:text-primary hover:bg-white rounded transition">Library & Resource Centre</a>
                        <a href="<?php echo home_url('/facilities/'); ?>#sports" @click="mobileMenuOpen = false" class="py-2 px-2 text-gray-600 hover:text-primary hover:bg-white rounded transition">Sports, NCC & Activities</a>
                    </div>
                </div>

                <!-- Admissions Accordion -->
                <div x-data="{ open: false }" class="py-1">
                    <button @click="open = !open" class="flex justify-between items-center w-full py-3 px-2 text-gray-800 font-semibold text-base hover:text-primary transition">
                        <span>Admissions</span>
                        <i class="fas fa-chevron-down text-xs transition duration-200 text-gray-400" :class="open ? 'rotate-180 text-primary' : ''"></i>
                    </button>
                    <div x-show="open" x-collapse x-cloak class="bg-gray-50 rounded-lg my-1.5 px-3 py-2 text-sm flex flex-col space-y-1 border border-gray-100">
                        <a href="<?php echo home_url('/admissions/'); ?>" @click="mobileMenuOpen = false" class="py-2 px-2 text-primary font-semibold hover:bg-white rounded transition">Admissions 2026–27 Overview</a>
                        <a href="<?php echo home_url('/admissions/'); ?>#process" @click="mobileMenuOpen = false" class="py-2 px-2 text-gray-600 hover:text-primary hover:bg-white rounded transition">Admission Process (5 Steps)</a>
                        <a href="<?php echo home_url('/admissions/'); ?>#apply-online" @click="mobileMenuOpen = false" class="py-2 px-2 text-gray-600 hover:text-primary hover:bg-white rounded transition">Apply Online (Enquiry Form)</a>
                        <a href="<?php echo home_url('/admissions/'); ?>#eligibility" @click="mobileMenuOpen = false" class="py-2 px-2 text-gray-600 hover:text-primary hover:bg-white rounded transition">Eligibility & Age Criteria</a>
                        <a href="<?php echo home_url('/admissions/'); ?>#documents" @click="mobileMenuOpen = false" class="py-2 px-2 text-gray-600 hover:text-primary hover:bg-white rounded transition">Required Documents Checklist</a>
                        <a href="<?php echo home_url('/admissions/'); ?>#assessment" @click="mobileMenuOpen = false" class="py-2 px-2 text-gray-600 hover:text-primary hover:bg-white rounded transition">Entrance Assessment Details</a>
                        <a href="<?php echo home_url('/admissions/'); ?>#faqs" @click="mobileMenuOpen = false" class="py-2 px-2 text-gray-600 hover:text-primary hover:bg-white rounded transition">Admissions FAQs</a>
                    </div>
                </div>

                <!-- Gallery -->
                <div class="py-1">
                    <a href="<?php echo home_url('/gallery/'); ?>" @click="mobileMenuOpen = false" class="flex items-center justify-between py-3 px-2 text-gray-800 font-semibold text-base hover:text-primary transition mobile-nav-link">
                        <span>Gallery</span>
                        <i class="fas fa-chevron-right text-xs text-gray-300"></i>
                    </a>
                </div>

                <!-- Blog -->
                <div class="py-1">
                    <a href="#" @click="mobileMenuOpen = false" class="flex items-center justify-between py-3 px-2 text-gray-800 font-semibold text-base hover:text-primary transition mobile-nav-link">
                        <span>Blog</span>
                        <i class="fas fa-chevron-right text-xs text-gray-300"></i>
                    </a>
                </div>

                <!-- Contact Us -->
                <div class="py-1">
                    <a href="<?php echo home_url('/contact/'); ?>" @click="mobileMenuOpen = false" class="flex items-center justify-between py-3 px-2 text-gray-800 font-semibold text-base hover:text-primary transition mobile-nav-link">
                        <span>Contact Us</span>
                        <i class="fas fa-chevron-right text-xs text-gray-300"></i>
                    </a>
                </div>
            </div>

            <!-- 4. Clean Footer (Phone, Email, Socials) -->
            <div class="p-5 border-t border-gray-200 bg-gray-50 shrink-0 space-y-3">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 text-xs text-gray-600">
                    <a href="tel:+919431214985" class="flex items-center gap-2 hover:text-primary transition">
                        <i class="fas fa-phone-alt text-secondary"></i> +91 9431214985
                    </a>
                    <a href="mailto:techno.edu.school@gmail.com" class="flex items-center gap-2 hover:text-primary transition">
                        <i class="fas fa-envelope text-secondary"></i> techno.edu.school@gmail.com
                    </a>
                </div>
                <div class="flex items-center justify-between pt-2 border-t border-gray-200 text-xs text-gray-500">
                    <span>Bhagalpur, Bihar</span>
                    <div class="flex items-center space-x-2.5">
                        <a href="https://www.facebook.com/Technomissioninternationalschool/" target="_blank" class="w-8 h-8 rounded-full bg-white border border-gray-200 hover:border-primary hover:text-primary flex items-center justify-center text-xs text-gray-600 transition" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/tmis.bhagalpur/" target="_blank" class="w-8 h-8 rounded-full bg-white border border-gray-200 hover:border-primary hover:text-primary flex items-center justify-center text-xs text-gray-600 transition" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.youtube.com/@technomissionbhagalpur" target="_blank" class="w-8 h-8 rounded-full bg-white border border-gray-200 hover:border-primary hover:text-primary flex items-center justify-center text-xs text-gray-600 transition" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
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
                        <li><a href="<?php echo home_url('/about/'); ?>#overview" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">About School</a></li>
                        <li><a href="<?php echo home_url('/about/'); ?>#vision-mission" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Vision & Mission</a></li>
                        <li><a href="<?php echo home_url('/about/'); ?>#values" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Our Core Values</a></li>
                        <li><a href="<?php echo home_url('/about/'); ?>#affiliation" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">CBSE Affiliation</a></li>
                        <li><a href="<?php echo home_url('/about/'); ?>#director" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Director's Desk</a></li>
                        <li><a href="<?php echo home_url('/about/'); ?>#principal" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Principal's Desk</a></li>
                        <li><a href="<?php echo home_url('/about/'); ?>#why-tmisb" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Why Choose TMISB</a></li>
                        <li><a href="<?php echo home_url('/about/'); ?>#faculty" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary">Faculty & Staff</a></li>
                    </ul>
                </li>

                <li class="relative group nav-item">
                    <a href="<?php echo home_url('/academics/'); ?>" class="hover:text-secondary transition flex items-center pb-1">Academics <i class="fas fa-chevron-down text-[10px] ml-1.5 opacity-70"></i></a>
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
                    <a href="<?php echo home_url('/facilities/'); ?>" class="hover:text-secondary transition flex items-center pb-1">Facilities <i class="fas fa-chevron-down text-[10px] ml-1.5 opacity-70"></i></a>
                    <ul class="dropdown-menu absolute hidden bg-white shadow-xl border-t-4 border-secondary top-full left-0 w-56 py-2 z-50 transition-opacity opacity-0 group-hover:opacity-100 text-gray-800 font-medium rounded-b">
                        <li><a href="<?php echo home_url('/facilities/'); ?>#labs" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Laboratories</a></li>
                        <li><a href="<?php echo home_url('/facilities/'); ?>#classrooms" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Digital Classrooms</a></li>
                        <li><a href="<?php echo home_url('/facilities/'); ?>#transport" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Safe Transport</a></li>
                        <li><a href="<?php echo home_url('/facilities/'); ?>#library" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Library & Resource Centre</a></li>
                        <li><a href="<?php echo home_url('/facilities/'); ?>#sports" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary">Sports, NCC & Activities</a></li>
                    </ul>
                </li>

                                <li class="relative group nav-item">
                    <a href="<?php echo home_url('/admissions/'); ?>" class="hover:text-secondary transition flex items-center pb-1">Admissions <i class="fas fa-chevron-down text-[10px] ml-1.5 opacity-70"></i></a>
                    <ul class="dropdown-menu absolute hidden bg-white shadow-xl border-t-4 border-secondary top-full left-0 w-64 py-2 z-50 transition-opacity opacity-0 group-hover:opacity-100 text-gray-800 font-medium rounded-b">
                        <li><a href="<?php echo home_url('/admissions/'); ?>#process" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Admission Process (5 Steps)</a></li>
                        <li><a href="<?php echo home_url('/admissions/'); ?>#apply-online" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Apply Online (Enquiry Form)</a></li>
                        <li><a href="<?php echo home_url('/admissions/'); ?>#eligibility" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Eligibility & Age Criteria</a></li>
                        <li><a href="<?php echo home_url('/admissions/'); ?>#documents" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Required Documents Checklist</a></li>
                        <li><a href="<?php echo home_url('/admissions/'); ?>#assessment" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Entrance Assessment Details</a></li>
                        <li><a href="<?php echo home_url('/admissions/'); ?>#faqs" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary">Admissions FAQs</a></li>
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
    