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
    
    <script src="<?php echo get_template_directory_uri(); ?>/js/tailwind-config.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <?php wp_head(); ?>
</head>
<body class="bg-white text-gray-700" x-data="{ mobileMenuOpen: false }">

    <!-- 1. Top Bar -->
    <div class="bg-gray-100 border-b border-gray-200 py-2 hidden md:block text-sm">
        <div class="container mx-auto px-4 flex justify-between items-center max-w-7xl">
            <div class="flex space-x-6 text-gray-600">
                <span><i class="fas fa-phone text-secondary mr-2"></i>+91 9431214985, 6412610985</span>
                <span><i class="fas fa-envelope text-secondary mr-2"></i>techno.edu.school@gmail.com</span>
            </div>
            <div class="flex space-x-4 items-center">
                <a href="admissions.html" class="bg-secondary text-black font-semibold px-4 py-1 rounded hover:bg-yellow-400 transition">Admissions Open 2026–27</a>
            </div>
        </div>
    </div>

    <!-- 2. Header & Navigation -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4 max-w-7xl flex justify-between items-center py-4">
            <!-- Logo -->
            <a href="index.html" class="flex items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.webp" alt="TMISB Logo" class="h-12 w-auto mr-3">
                <div>
                    <h1 class="nav-font font-extrabold text-xl md:text-2xl text-primary leading-tight">Techno Mission</h1>
                    <p class="text-xs md:text-sm text-gray-700 font-semibold tracking-wide">International School Bhagalpur</p>
                    <p class="text-[10px] text-gray-500 font-bold tracking-wider uppercase mt-0.5">CBSE Affiliated <span class="text-secondary mx-1">|</span> ESTD 1997</p>
                </div>
            </a>

            <!-- Desktop Nav -->
            <nav class="hidden lg:flex items-center space-x-6 nav-font font-semibold text-gray-700 text-sm">
                <a href="index.html" class="text-primary border-b-2 border-primary py-2">Home</a>
                
                <div class="relative nav-item py-2 group">
                    <a href="about.html" class="hover:text-primary flex items-center">About Us <i class="fas fa-chevron-down text-[10px] ml-1"></i></a>
                    <div class="dropdown-menu absolute hidden bg-white shadow-lg border-t-2 border-primary top-full left-0 w-64 py-2 z-50 transition-opacity opacity-0 group-hover:opacity-100">
                        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-50 hover:text-primary border-b border-gray-100">About School</a>
                        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-50 hover:text-primary border-b border-gray-100">Principal's Message</a>
                        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-50 hover:text-primary border-b border-gray-100">Management / Leadership</a>
                        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-50 hover:text-primary border-b border-gray-100">Salient Features</a>
                        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-50 hover:text-primary border-b border-gray-100">Values</a>
                        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-50 hover:text-primary">Alumni Connect</a>
                    </div>
                </div>

                <div class="relative nav-item py-2 group">
                    <a href="academics.html" class="hover:text-primary flex items-center">Academics <i class="fas fa-chevron-down text-[10px] ml-1"></i></a>
                    <div class="dropdown-menu absolute hidden bg-white shadow-lg border-t-2 border-primary top-full left-0 w-48 py-2 z-50">
                        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-50 hover:text-primary border-b border-gray-100">Primary</a>
                        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-50 hover:text-primary border-b border-gray-100">Secondary</a>
                        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-50 hover:text-primary">High School</a>
                    </div>
                </div>
                
                <div class="relative nav-item py-2 group">
                    <a href="labs.html" class="hover:text-primary flex items-center">Labs <i class="fas fa-chevron-down text-[10px] ml-1"></i></a>
                    <div class="dropdown-menu absolute hidden bg-white shadow-lg border-t-2 border-primary top-full left-0 w-48 py-2 z-50">
                        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-50 hover:text-primary border-b border-gray-100">Computer Lab</a>
                        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-50 hover:text-primary border-b border-gray-100">Physics Lab</a>
                        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-50 hover:text-primary border-b border-gray-100">Chemistry Lab</a>
                        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-50 hover:text-primary border-b border-gray-100">Biology Lab</a>
                        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-50 hover:text-primary">Robotics Lab</a>
                    </div>
                </div>

                <div class="relative nav-item py-2 group">
                    <a href="activities.html" class="hover:text-primary flex items-center">Activities <i class="fas fa-chevron-down text-[10px] ml-1"></i></a>
                    <div class="dropdown-menu absolute hidden bg-white shadow-lg border-t-2 border-primary top-full left-0 w-48 py-2 z-50">
                        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-50 hover:text-primary border-b border-gray-100">Yoga</a>
                        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-50 hover:text-primary border-b border-gray-100">Dramatics</a>
                        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-50 hover:text-primary border-b border-gray-100">Sports</a>
                        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-50 hover:text-primary">Art & Craft</a>
                    </div>
                </div>

                <a href="gallery.html" class="hover:text-primary py-2">Gallery</a>
                <a href="#" class="hover:text-primary py-2">Blog</a>
                <a href="contact.html" class="hover:text-primary py-2">Contact Us</a>
                
                <a href="admissions.html" class="bg-primary text-white px-5 py-2 rounded shadow hover:bg-blue-800 transition">Apply Now</a>
            </nav>

            <!-- Mobile Menu Button -->
            <button class="lg:hidden text-2xl text-primary focus:outline-none" @click="mobileMenuOpen = !mobileMenuOpen">
                <i class="fas fa-bars" x-show="!mobileMenuOpen"></i>
                <i class="fas fa-times" x-show="mobileMenuOpen" x-cloak></i>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div class="lg:hidden absolute w-full bg-white shadow-xl border-t z-40" x-show="mobileMenuOpen" x-transition x-cloak>
            <div class="flex flex-col px-4 py-2 nav-font font-medium text-gray-700">
                <a href="index.html" class="py-3 border-b border-gray-100 text-primary">Home</a>
                <div x-data="{ open: false }">
                    <button @click="open = !open" class="flex justify-between items-center w-full py-3 border-b border-gray-100">
                        About Us <i class="fas fa-chevron-down text-xs transition" :class="open ? 'rotate-180' : ''"></i>
                    </button>
                    <div x-show="open" class="bg-gray-50 px-4 py-2 text-sm flex flex-col">
                        <a href="#" class="py-2">About School</a>
                        <a href="#" class="py-2">Principal's Message</a>
                        <a href="#" class="py-2">Management</a>
                    </div>
                </div>
                <a href="#" class="py-3 border-b border-gray-100">Academics</a>
                <a href="#" class="py-3 border-b border-gray-100">Labs</a>
                <a href="#" class="py-3 border-b border-gray-100">Activities</a>
                <a href="contact.html" class="py-3 border-b border-gray-100">Contact Us</a>
            </div>
        </div>
    </header>