<?php
/* Template Name: Gallery Page */
get_header();
?>


    <!-- Page Header -->
    <section class="page-header py-24 text-center">
        <div class="container mx-auto px-4">
            <h1 class="nav-font font-bold text-4xl text-white mb-4">Life at TMISB</h1>
            <div class="flex items-center justify-center text-gray-300 text-sm">
                <a href="<?php echo home_url("/"); ?>" class="hover:text-white transition">Home</a>
                <i class="fas fa-chevron-right mx-3 text-xs"></i>
                <span class="text-secondary font-semibold">Gallery</span>
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
                
                <!-- Achievement 5 (The PNG file) -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 group">
                    <img src="<?php echo get_template_directory_uri(); ?>/Achievements/students_achievements_1771715851488_sn61pa.png" alt="Student Achievement" class="w-full h-auto object-contain transition-transform duration-700 group-hover:scale-105">
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
                    <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Campus Building" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-end p-6">
                        <h4 class="text-white font-bold text-lg">Main Campus</h4>
                        <p class="text-gray-200 text-sm">State-of-the-art infrastructure</p>
                    </div>
                </div>
                
                <!-- Item 2 -->
                <div x-show="filter === 'all' || filter === 'academics'" x-transition class="group relative rounded-xl overflow-hidden shadow-md cursor-pointer aspect-square">
                    <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Classroom" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-end p-6">
                        <h4 class="text-white font-bold text-lg">Smart Classrooms</h4>
                        <p class="text-gray-200 text-sm">Interactive learning environments</p>
                    </div>
                </div>
                
                <!-- Item 3 -->
                <div x-show="filter === 'all' || filter === 'academics'" x-transition class="group relative rounded-xl overflow-hidden shadow-md cursor-pointer aspect-square">
                    <img src="https://images.unsplash.com/photo-1532094349884-543bc11b234d?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Science Lab" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-end p-6">
                        <h4 class="text-white font-bold text-lg">Science Labs</h4>
                        <p class="text-gray-200 text-sm">Practical experimentation</p>
                    </div>
                </div>
                
                <!-- Item 4 -->
                <div x-show="filter === 'all' || filter === 'sports'" x-transition class="group relative rounded-xl overflow-hidden shadow-md cursor-pointer aspect-[4/3] md:col-span-2">
                    <img src="https://images.unsplash.com/photo-1526676037777-05a232554f77?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Sports Ground" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-end p-6">
                        <h4 class="text-white font-bold text-lg">Annual Sports Day</h4>
                        <p class="text-gray-200 text-sm">Fostering teamwork and physical health</p>
                    </div>
                </div>
                
                <!-- Item 5 -->
                <div x-show="filter === 'all' || filter === 'campus'" x-transition class="group relative rounded-xl overflow-hidden shadow-md cursor-pointer aspect-[4/3] md:aspect-square">
                    <img src="https://images.unsplash.com/photo-1541829070764-84a7d30dd3f3?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Library" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-end p-6">
                        <h4 class="text-white font-bold text-lg">Central Library</h4>
                        <p class="text-gray-200 text-sm">A vast collection of knowledge</p>
                    </div>
                </div>

                <!-- Item 6 -->
                <div x-show="filter === 'all' || filter === 'academics'" x-transition class="group relative rounded-xl overflow-hidden shadow-md cursor-pointer aspect-square">
                    <img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Students Studying" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-end p-6">
                        <h4 class="text-white font-bold text-lg">Group Study</h4>
                        <p class="text-gray-200 text-sm">Collaborative learning</p>
                    </div>
                </div>

                <!-- Item 7 -->
                <div x-show="filter === 'all' || filter === 'sports'" x-transition class="group relative rounded-xl overflow-hidden shadow-md cursor-pointer aspect-square">
                    <img src="https://images.unsplash.com/photo-1514320291840-2e0a9bf2a9ae?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Cultural Event" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
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