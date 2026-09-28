<?php
/* Template Name: Labs Page */
get_header();
?>


    <!-- Page Header -->
    <section class="page-header py-24 text-center">
        <div class="container mx-auto px-4">
            <h1 class="nav-font font-bold text-4xl text-white mb-4">Practical Learning</h1>
            <div class="flex items-center justify-center text-gray-300 text-sm">
                <a href="<?php echo home_url("/"); ?>" class="hover:text-white transition">Home</a>
                <i class="fas fa-chevron-right mx-3 text-xs"></i>
                <span class="text-secondary font-semibold">Labs</span>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-16">
                <h2 class="nav-font font-bold text-3xl text-primary mb-4">State-of-the-Art Laboratories</h2>
                <p class="text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    We believe in learning by doing. TMISB is equipped with modern, fully-functional laboratories designed to provide practical, hands-on experience that complements theoretical classroom learning.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-16 bg-white p-8 rounded-xl shadow-sm">
                <div>
                    <h3 class="nav-font font-bold text-2xl text-gray-800 mb-4">Science Laboratories</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Our dedicated Physics, Chemistry, and Biology labs are equipped with the latest apparatus and safety measures, enabling students, particularly at the +2 level, to conduct complex experiments and investigatory projects.
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-center text-gray-700"><i class="fas fa-check-circle text-secondary mr-3"></i> Advanced Physics Equipment</li>
                        <li class="flex items-center text-gray-700"><i class="fas fa-check-circle text-secondary mr-3"></i> Safe & Ventilated Chemistry Stations</li>
                        <li class="flex items-center text-gray-700"><i class="fas fa-check-circle text-secondary mr-3"></i> Modern Biology Microscopes & Specimens</li>
                    </ul>
                </div>
                <div class="h-64 bg-gray-200 rounded-lg bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1532094349884-543bc11b234d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80');"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-sm border-t-4 border-primary">
                    <h4 class="font-bold text-lg mb-3">Computer Science</h4>
                    <p class="text-sm text-gray-600">High-speed internet and modern systems to facilitate IT and technology-based learning.</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-sm border-t-4 border-primary">
                    <h4 class="font-bold text-lg mb-3">Robotics Lab</h4>
                    <p class="text-sm text-gray-600">Fostering innovation, coding skills, and logical thinking through hands-on robotics kits.</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-sm border-t-4 border-primary">
                    <h4 class="font-bold text-lg mb-3">Language & Maths Labs</h4>
                    <p class="text-sm text-gray-600">Specialized zones for improving linguistic fluency and understanding complex mathematical concepts visually.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer (Reused) -->
    
<?php
get_footer();
?>