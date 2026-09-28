<?php
/* Template Name: About Page */
get_header();
?>


    <!-- Page Header -->
    <section class="page-header py-24 text-center">
        <div class="container mx-auto px-4">
            <h1 class="nav-font font-bold text-4xl text-white mb-4">About TMISB</h1>
            <div class="flex items-center justify-center text-gray-300 text-sm">
                <a href="<?php echo home_url("/"); ?>" class="hover:text-white transition">Home</a>
                <i class="fas fa-chevron-right mx-3 text-xs"></i>
                <span class="text-secondary font-semibold">About Us</span>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="flex flex-col lg:flex-row gap-12 items-center mb-16">
                <div class="w-full lg:w-1/2">
                    <h2 class="nav-font font-bold text-3xl text-primary mb-6">Our Mission & Vision</h2>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        At Techno Mission International School, Bhagalpur, our mission is to empower students with the knowledge, skills, and values required to thrive in a rapidly changing world. We focus on academic rigor alongside holistic development.
                    </p>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Our vision is to become a premier institution of educational excellence that nurtures innovative thinkers, compassionate leaders, and responsible global citizens.
                    </p>
                    <div class="bg-lightBg p-6 rounded-lg border-l-4 border-secondary">
                        <h4 class="font-bold text-gray-800 mb-2">The TMISB Philosophy</h4>
                        <p class="text-sm text-gray-600">Education goes beyond the classroom. Through our day-cum-boarding model, we instil discipline, character, and community spirit.</p>
                    </div>
                </div>
                <div class="w-full lg:w-1/2">
                    <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="TMISB Campus" class="rounded-lg shadow-xl w-full">
                </div>
            </div>

            <!-- Principal Message -->
            <div class="bg-gray-50 p-8 md:p-12 rounded-xl">
                <div class="flex flex-col md:flex-row gap-8 items-center">
                    <div class="w-48 h-48 rounded-full overflow-hidden shrink-0 border-4 border-white shadow-lg">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Principal" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h3 class="nav-font font-bold text-2xl text-primary mb-2">Message from the Principal</h3>
                        <h4 class="text-secondary font-semibold mb-4">[Principal's Name]</h4>
                        <p class="text-gray-600 italic mb-4 leading-relaxed">
                            "Welcome to TMISB. We are dedicated to providing an environment where every child feels valued and inspired. Our experienced faculty and state-of-the-art facilities ensure that learning is a joyful and enriching experience."
                        </p>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Signature_of_John_Hancock.png" alt="Signature" class="h-12 opacity-50">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer (Reused) -->
    
<?php
get_footer();
?>