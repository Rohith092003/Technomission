<?php
/* Template Name: Contact Page */
get_header();
?>


    <!-- Page Header -->
    <section class="page-header py-24 text-center">
        <div class="container mx-auto px-4">
            <h1 class="nav-font font-bold text-4xl text-white mb-4">Contact Us</h1>
            <div class="flex items-center justify-center text-gray-300 text-sm">
                <a href="<?php echo home_url("/"); ?>" class="hover:text-white transition">Home</a>
                <i class="fas fa-chevron-right mx-3 text-xs"></i>
                <span class="text-secondary font-semibold">Contact</span>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Info -->
                <div>
                    <h2 class="nav-font font-bold text-3xl text-primary mb-6">We'd Love to Hear from You</h2>
                    <p class="text-gray-600 mb-8">Whether you have a question about admissions, curriculum, or anything else, our team is ready to answer all your questions.</p>
                    
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="w-12 h-12 rounded-full bg-blue-100 text-primary flex items-center justify-center shrink-0 mr-4">
                                <i class="fas fa-map-marker-alt text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 text-lg">Our Location</h4>
                                <p class="text-gray-600 mt-1"><a href="https://maps.app.goo.gl/fQYFbkphkkN2VVay9" target="_blank" class="hover:underline hover:text-secondary transition" title="View on Google Maps">Vikramshila Setu Path, Jagatpur, Bhagalpur, Bihar 812002</a></p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-12 h-12 rounded-full bg-blue-100 text-primary flex items-center justify-center shrink-0 mr-4">
                                <i class="fas fa-phone-alt text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 text-lg">Contact Number</h4>
                                <p class="text-gray-600 mt-1">+91 9431214985<br>6412610985</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-12 h-12 rounded-full bg-blue-100 text-primary flex items-center justify-center shrink-0 mr-4">
                                <i class="fas fa-envelope text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 text-lg">Email Address</h4>
                                <p class="text-gray-600 mt-1">techno.edu.school@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form -->
                <div class="bg-lightBg p-8 rounded-lg shadow-md border border-gray-100">
                    <h3 class="nav-font font-bold text-2xl text-gray-800 mb-6">Send Us a Message</h3>
                    <form action="#" method="POST" class="space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">First Name</label>
                                <input type="text" class="w-full border border-gray-300 rounded px-4 py-2" required>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Last Name</label>
                                <input type="text" class="w-full border border-gray-300 rounded px-4 py-2" required>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                <input type="email" class="w-full border border-gray-300 rounded px-4 py-2" required>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Phone</label>
                                <input type="tel" class="w-full border border-gray-300 rounded px-4 py-2" required>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Your Message</label>
                            <textarea rows="5" class="w-full border border-gray-300 rounded px-4 py-2" required></textarea>
                        </div>
                        <button type="submit" class="bg-primary hover:bg-blue-800 text-white font-semibold py-3 px-8 rounded transition w-full">Submit Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Google Map Section -->
    <section class="w-full h-96 relative group">
        <iframe 
            src="https://maps.google.com/maps?q=Techno%20Mission%20International%20School,%20Bhagalpur&t=&z=14&ie=UTF8&iwloc=&output=embed" 
            width="100%" 
            height="100%" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade"
            class="absolute inset-0 z-0 grayscale opacity-80 hover:grayscale-0 hover:opacity-100 transition duration-500">
        </iframe>
        <a href="https://maps.app.goo.gl/fQYFbkphkkN2VVay9" target="_blank" class="absolute inset-0 z-10 hidden group-hover:flex items-center justify-center bg-black/20 backdrop-blur-sm transition duration-300">
            <span class="bg-primary text-white font-bold py-3 px-8 rounded shadow-2xl transform translate-y-4 group-hover:translate-y-0 transition duration-300">Open in Google Maps <i class="fas fa-external-link-alt ml-2"></i></span>
        </a>
    </section>

    <!-- Footer (Reused) -->
    
<?php
get_footer();
?>