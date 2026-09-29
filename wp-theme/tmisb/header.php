<!DOCTYPE html>
<html lang="en">
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
                <a href="#" class="text-white hover:text-secondary transition text-sm" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-white hover:text-secondary transition text-sm" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-white hover:text-secondary transition text-sm" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-white hover:text-secondary transition text-sm" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                <a href="#" class="text-white hover:text-secondary transition text-sm" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
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
                <a href="admissions.html" class="bg-secondary text-white font-bold px-6 py-2.5 rounded shadow-sm hover:shadow-md transition text-sm inline-block admission-glow ring-2 ring-secondary ring-offset-2 ring-offset-white">
                    Admissions Enquiry 2026 - 27
                </a>
            </div>
            
            <!-- Center Logo -->
            <div class="w-2/4 flex justify-center">
                <a href="index.html" class="flex items-center transform hover:scale-105 transition duration-300">
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
    <header class="bg-white shadow-md xl:hidden">
        <div class="container mx-auto px-4 flex justify-between items-center py-3">
            <a href="index.html" class="flex items-center">
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
        <div class="absolute w-full bg-primary text-white shadow-xl border-t border-white/10 z-40" x-show="mobileMenuOpen" x-transition x-cloak>
            <div class="flex flex-col px-4 py-2 nav-font font-medium">
                <a href="index.html" class="py-3 border-b border-white/10 text-secondary">Home</a>
                <div x-data="{ open: false }">
                    <button @click="open = !open" class="flex justify-between items-center w-full py-3 border-b border-white/10">
                        About Us <i class="fas fa-chevron-down text-xs transition" :class="open ? 'rotate-180' : ''"></i>
                    </button>
                    <div x-show="open" class="bg-primaryDark px-4 py-2 text-sm flex flex-col">
                        <a href="#" class="py-2 hover:text-secondary">About School</a>
                        <a href="#" class="py-2 hover:text-secondary">Principal's Message</a>
                    </div>
                </div>
                <a href="academics.html" class="py-3 border-b border-white/10">Academics</a>
                <a href="labs.html" class="py-3 border-b border-white/10">Facilities</a>
                <a href="admissions.html" class="py-3 border-b border-white/10">Admissions</a>
                <a href="contact.html" class="py-3 border-b border-white/10">Contact Us</a>
            </div>
        </div>
    </header>