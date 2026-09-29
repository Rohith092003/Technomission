<footer class="bg-primary text-gray-300 pt-16 pb-8 border-t-[5px] border-secondary">
        <div class="container mx-auto px-4 max-w-7xl">
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 lg:gap-8 mb-12">
                
                <!-- Brand Section (4 columns) -->
                <div class="lg:col-span-4 pr-0 lg:pr-6">
                    <a href="<?php echo home_url('/'); ?>" class="flex items-center mb-6">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.webp?v=<?php echo time(); ?>" alt="TMISB Logo" class="h-16 w-auto bg-white p-2 rounded mr-4">
                        <div>
                            <h2 class="nav-font font-bold text-2xl text-white leading-tight">Techno Mission</h2>
                            <p class="text-[13px] text-gray-400 font-medium tracking-wide mt-1">International School</p>
                        </div>
                    </a>
                    <p class="text-sm mb-6 leading-relaxed">
                        Creating future-ready global citizens through rigorous academics, cutting-edge technology, and strong moral character since 1997.
                    </p>
                    <div class="flex space-x-3">
                        <a href="https://www.facebook.com/Technomissioninternationalschool/" target="_blank" class="w-9 h-9 rounded bg-white/10 flex items-center justify-center text-white hover:bg-secondary transition-colors"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/tmis.bhagalpur/" target="_blank" class="w-9 h-9 rounded bg-white/10 flex items-center justify-center text-white hover:bg-secondary transition-colors"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.youtube.com/@technomissionbhagalpur" target="_blank" class="w-9 h-9 rounded bg-white/10 flex items-center justify-center text-white hover:bg-secondary transition-colors"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                
                <!-- Quick Links (2 columns) -->
                <div class="lg:col-span-2 lg:col-start-6">
                    <h4 class="font-bold text-lg mb-6 text-white border-b border-gray-700 pb-2 inline-block">Explore</h4>
                    <ul class="space-y-3">
                        <li><a href="<?php echo home_url('/about/'); ?>" class="group inline-flex items-center text-sm hover:text-white transition-all"><i class="fas fa-angle-right text-secondary text-xs mr-2 transition-transform duration-300 group-hover:translate-x-1.5"></i> About Us</a></li>
                        <li><a href="<?php echo home_url('/admissions/'); ?>" class="group inline-flex items-center text-sm hover:text-white transition-all"><i class="fas fa-angle-right text-secondary text-xs mr-2 transition-transform duration-300 group-hover:translate-x-1.5"></i> Admissions</a></li>
                        <li><a href="<?php echo home_url('/academics/'); ?>" class="group inline-flex items-center text-sm hover:text-white transition-all"><i class="fas fa-angle-right text-secondary text-xs mr-2 transition-transform duration-300 group-hover:translate-x-1.5"></i> Academics</a></li>
                        <li><a href="<?php echo home_url('/gallery/'); ?>" class="group inline-flex items-center text-sm hover:text-white transition-all"><i class="fas fa-angle-right text-secondary text-xs mr-2 transition-transform duration-300 group-hover:translate-x-1.5"></i> Gallery</a></li>
                        <li><a href="<?php echo home_url('/contact/'); ?>" class="group inline-flex items-center text-sm hover:text-white transition-all"><i class="fas fa-angle-right text-secondary text-xs mr-2 transition-transform duration-300 group-hover:translate-x-1.5"></i> Contact</a></li>
                    </ul>
                </div>
                
                <!-- Campus Life (2 columns) -->
                <div class="lg:col-span-2">
                    <h4 class="font-bold text-lg mb-6 text-white border-b border-gray-700 pb-2 inline-block">Campus</h4>
                    <ul class="space-y-3">
                        <li><a href="<?php echo home_url('/labs/'); ?>" class="group inline-flex items-center text-sm hover:text-white transition-all"><i class="fas fa-angle-right text-secondary text-xs mr-2 transition-transform duration-300 group-hover:translate-x-1.5"></i> Laboratories</a></li>
                        <li><a href="<?php echo home_url('/activities/'); ?>" class="group inline-flex items-center text-sm hover:text-white transition-all"><i class="fas fa-angle-right text-secondary text-xs mr-2 transition-transform duration-300 group-hover:translate-x-1.5"></i> Sports</a></li>
                        <li><a href="#" class="group inline-flex items-center text-sm hover:text-white transition-all"><i class="fas fa-angle-right text-secondary text-xs mr-2 transition-transform duration-300 group-hover:translate-x-1.5"></i> Clubs</a></li>
                        <li><a href="#" class="group inline-flex items-center text-sm hover:text-white transition-all"><i class="fas fa-angle-right text-secondary text-xs mr-2 transition-transform duration-300 group-hover:translate-x-1.5"></i> Events</a></li>
                    </ul>
                </div>
                
                <!-- Contact Info (3 columns) -->
                <div class="lg:col-span-3">
                    <h4 class="font-bold text-lg mb-6 text-white border-b border-gray-700 pb-2 inline-block">Get in Touch</h4>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt text-secondary mt-1 mr-3 w-4 text-center"></i>
                            <span class="text-sm leading-relaxed"><a href="https://maps.app.goo.gl/fQYFbkphkkN2VVay9" target="_blank" class="hover:text-white hover:underline transition">Vikramshila Setu Path, Jagatpur,<br>Bhagalpur, Bihar 812002</a></span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-phone-alt text-secondary mt-1 mr-3 w-4 text-center"></i>
                            <span class="text-sm leading-relaxed">+91 9431214985<br>0641-2610985</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-envelope text-secondary mt-1 mr-3 w-4 text-center"></i>
                            <span class="text-sm leading-relaxed break-all">techno.edu.school@gmail.com</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Bottom Copyright -->
            <div class="border-t border-gray-800 pt-6 flex flex-col md:flex-row justify-between items-center text-sm">
                <p>&copy; 2026 Techno Mission International School. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Initialize Swiper for Hero
        const swiper = new Swiper('.hero-swiper', {
            loop: true,
            effect: 'fade', // Elegant fade transition between slides
            fadeEffect: {
                crossFade: true
            },
            autoplay: {
                delay: 6000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
    <?php wp_footer(); ?>
</body>
</html>
