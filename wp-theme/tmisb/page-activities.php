<?php
/* Template Name: Activities Page */
get_header();
?>


    <!-- 3. Bottom Bar / Main Navigation (Tier 3) -->
    <nav class="bg-primary hidden xl:block border-t border-white/10">
        <div class="container mx-auto px-2 max-w-[1500px]">
            <ul class="flex justify-center items-center space-x-8 2xl:space-x-10 nav-font font-semibold text-white text-sm py-3.5">
                <li><a href="<?php echo home_url('/'); ?>" class="hover:text-secondary transition pb-1 border-b-2 border-secondary">Home</a></li>
                
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
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Primary</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Secondary</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary">High School</a></li>
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

    
    </div>

    <!-- Page Header -->
    <section class="page-header py-24 text-center">
        <div class="container mx-auto px-4">
            <h1 class="nav-font font-bold text-4xl text-white mb-4">Activities & Sports</h1>
            <div class="flex items-center justify-center text-gray-300 text-sm">
                <a href="<?php echo home_url('/'); ?>" class="hover:text-white transition">Home</a>
                <i class="fas fa-chevron-right mx-3 text-xs"></i>
                <span class="text-secondary font-semibold">Activities</span>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-16">
                <h2 class="nav-font font-bold text-3xl text-primary mb-4">Beyond the Classroom</h2>
                <p class="text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    TMISB places a strong emphasis on holistic development, integrating a wide range of sports and co-curricular activities into its curriculum to complement academic learning and build character.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                <!-- Sports -->
                <div class="border border-gray-100 rounded-xl overflow-hidden hover:shadow-xl transition">
                    <div class="h-48 bg-gray-200 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1526676037777-05a232554f77?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80');"></div>
                    <div class="p-8">
                        <h3 class="nav-font font-bold text-xl text-gray-800 mb-4"><i class="fas fa-running text-secondary mr-2"></i> Sports & Athletics</h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-4">
                            Physical fitness, team spirit, and discipline are fostered through comprehensive sports programs.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-gray-100 text-gray-700 text-xs px-3 py-1 rounded-full">Cricket</span>
                            <span class="bg-gray-100 text-gray-700 text-xs px-3 py-1 rounded-full">Football</span>
                            <span class="bg-gray-100 text-gray-700 text-xs px-3 py-1 rounded-full">Basketball</span>
                            <span class="bg-gray-100 text-gray-700 text-xs px-3 py-1 rounded-full">Swimming</span>
                            <span class="bg-gray-100 text-gray-700 text-xs px-3 py-1 rounded-full">Yoga</span>
                        </div>
                    </div>
                </div>
                
                <!-- Co-curricular -->
                <div class="border border-gray-100 rounded-xl overflow-hidden hover:shadow-xl transition">
                    <div class="h-48 bg-gray-200 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1514320291840-2e0a9bf2a9ae?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80');"></div>
                    <div class="p-8">
                        <h3 class="nav-font font-bold text-xl text-gray-800 mb-4"><i class="fas fa-palette text-secondary mr-2"></i> Performing & Creative Arts</h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-4">
                            We encourage students to explore their creativity and develop personality traits through diverse artistic mediums.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-gray-100 text-gray-700 text-xs px-3 py-1 rounded-full">Dramatics</span>
                            <span class="bg-gray-100 text-gray-700 text-xs px-3 py-1 rounded-full">Music</span>
                            <span class="bg-gray-100 text-gray-700 text-xs px-3 py-1 rounded-full">Dance</span>
                            <span class="bg-gray-100 text-gray-700 text-xs px-3 py-1 rounded-full">Fine Arts</span>
                            <span class="bg-gray-100 text-gray-700 text-xs px-3 py-1 rounded-full">Debate</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="bg-primary text-white p-8 rounded-xl text-center">
                <h3 class="font-bold text-xl mb-3">Clubs & Societies</h3>
                <p class="text-sm opacity-90 max-w-2xl mx-auto">
                    Students can participate in various clubs including N.C.C., Scouts & Guides, Literary Clubs, and Science Exhibitions to hone their leadership and teamwork skills.
                </p>
            </div>
        </div>
    </section>

    <!-- Footer (Reused) -->
    
<?php
get_footer();
?>