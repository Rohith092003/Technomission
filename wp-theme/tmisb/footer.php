<footer class="relative bg-primary text-white pt-20 pb-10 overflow-hidden">
        <!-- Background Particles -->
        <div class="school-particles absolute inset-0 opacity-[0.03] pointer-events-none"></div>
        <div class="absolute top-0 right-0 w-96 h-96 bg-white rounded-full mix-blend-overlay filter blur-3xl opacity-10 -translate-y-1/2 translate-x-1/2 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-secondary rounded-full mix-blend-overlay filter blur-3xl opacity-10 translate-y-1/2 -translate-x-1/2 pointer-events-none"></div>
        
        <div class="container mx-auto px-4 max-w-7xl relative z-10">


            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-12 mb-12">
                <!-- Brand -->
                <div class="lg:col-span-2">
                    <a href="<?php echo home_url('/'); ?>" class="flex items-center mb-6 inline-block">
                        <div class="flex items-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.webp?v=<?php echo time(); ?>" alt="TMISB Logo" class="h-16 w-auto mr-5 bg-white p-1.5 rounded-lg">
                            <div>
                                <h2 class="nav-font font-extrabold text-xl md:text-2xl text-white leading-tight">Techno Mission</h2>
                                <p class="text-xs md:text-sm text-white/80 font-semibold tracking-wide mt-0.5 whitespace-nowrap">International School Bhagalpur</p>
                                <p class="text-[10px] text-white/60 font-bold tracking-wider uppercase mt-1">CBSE Affiliated <span class="text-secondary mx-1">|</span> ESTD 1997</p>
                            </div>
                        </div>
                    </a>
                    <p class="text-white/70 text-sm mb-6 leading-relaxed pr-4">
                        Creating future-ready global citizens through academic rigor, technological integration, and strong moral character.
                    </p>
                    <div class="flex space-x-3 mt-4">
                        <a href="https://www.facebook.com/Technomissioninternationalschool/" target="_blank" class="w-10 h-10 rounded-lg bg-white/5 border border-white/20 flex items-center justify-center hover:bg-secondary hover:text-primary transition duration-300 hover:border-secondary hover:-translate-y-1"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/tmis.bhagalpur/" target="_blank" class="w-10 h-10 rounded-lg bg-white/5 border border-white/20 flex items-center justify-center hover:bg-secondary hover:text-primary transition duration-300 hover:border-secondary hover:-translate-y-1"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.youtube.com/@technomissionbhagalpur" target="_blank" class="w-10 h-10 rounded-lg bg-white/5 border border-white/20 flex items-center justify-center hover:bg-secondary hover:text-primary transition duration-300 hover:border-secondary hover:-translate-y-1"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                
                <!-- Explore -->
                <div>
                    <h4 class="font-bold text-lg mb-6 tracking-wide text-secondary uppercase text-sm">Explore</h4>
                    <ul class="space-y-4 text-sm text-white/80">
                        <li><a href="<?php echo home_url('/about/'); ?>" class="hover:text-white hover:translate-x-1 inline-block transition duration-300 flex items-center"><span class="w-1.5 h-1.5 rounded-full bg-secondary/50 mr-3"></span> About School</a></li>
                        <li><a href="<?php echo home_url('/admissions/'); ?>" class="hover:text-white hover:translate-x-1 inline-block transition duration-300 flex items-center"><span class="w-1.5 h-1.5 rounded-full bg-secondary/50 mr-3"></span> Admissions</a></li>
                        <li><a href="<?php echo home_url('/academics/'); ?>" class="hover:text-white hover:translate-x-1 inline-block transition duration-300 flex items-center"><span class="w-1.5 h-1.5 rounded-full bg-secondary/50 mr-3"></span> Academics</a></li>
                        <li><a href="<?php echo home_url('/gallery/'); ?>" class="hover:text-white hover:translate-x-1 inline-block transition duration-300 flex items-center"><span class="w-1.5 h-1.5 rounded-full bg-secondary/50 mr-3"></span> Photo Gallery</a></li>
                        <li><a href="<?php echo home_url('/contact/'); ?>" class="hover:text-white hover:translate-x-1 inline-block transition duration-300 flex items-center"><span class="w-1.5 h-1.5 rounded-full bg-secondary/50 mr-3"></span> Contact Us</a></li>
                    </ul>
                </div>
                
                <!-- Campus Life -->
                <div>
                    <h4 class="font-bold text-lg mb-6 tracking-wide text-secondary uppercase text-sm">Campus Life</h4>
                    <ul class="space-y-4 text-sm text-white/80">
                        <li><a href="<?php echo home_url('/labs/'); ?>" class="hover:text-white hover:translate-x-1 inline-block transition duration-300 flex items-center"><span class="w-1.5 h-1.5 rounded-full bg-secondary/50 mr-3"></span> Laboratories</a></li>
                        <li><a href="<?php echo home_url('/activities/'); ?>" class="hover:text-white hover:translate-x-1 inline-block transition duration-300 flex items-center"><span class="w-1.5 h-1.5 rounded-full bg-secondary/50 mr-3"></span> Sports & Activities</a></li>
                        <li><a href="#" class="hover:text-white hover:translate-x-1 inline-block transition duration-300 flex items-center"><span class="w-1.5 h-1.5 rounded-full bg-secondary/50 mr-3"></span> Student Clubs</a></li>
                        <li><a href="#" class="hover:text-white hover:translate-x-1 inline-block transition duration-300 flex items-center"><span class="w-1.5 h-1.5 rounded-full bg-secondary/50 mr-3"></span> Events & News</a></li>
                        <li><a href="#" class="hover:text-white hover:translate-x-1 inline-block transition duration-300 flex items-center"><span class="w-1.5 h-1.5 rounded-full bg-secondary/50 mr-3"></span> Boarding Life</a></li>
                    </ul>
                </div>
                
                <!-- Contact Info -->
                <div>
                    <h4 class="font-bold text-lg mb-6 tracking-wide text-secondary uppercase text-sm">Contact Us</h4>
                    <ul class="space-y-5 text-sm text-white/90">
                        <li class="flex items-start">
                            <div class="mt-1 w-5 text-center shrink-0 mr-4 text-secondary text-lg">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <span class="leading-relaxed"><a href="https://maps.app.goo.gl/fQYFbkphkkN2VVay9" target="_blank" class="hover:underline hover:text-secondary transition" title="View on Google Maps">Vikramshila Setu Path, Jagatpur, Bhagalpur, Bihar 812002</a></span>
                        </li>
                        <li class="flex items-center">
                            <div class="w-5 text-center shrink-0 mr-4 text-secondary text-lg">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <span>+91 9431214985<br>0641-2610985</span>
                        </li>
                        <li class="flex items-center">
                            <div class="w-5 text-center shrink-0 mr-4 text-secondary text-lg">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <span class="break-all">techno.edu.school@gmail.com</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Bottom Copyright -->
            <div class="border-t border-white/20 pt-8 flex flex-col md:flex-row justify-between items-center text-xs text-white/50">
                <p>&copy; 2026 Techno Mission International School, Bhagalpur. All Rights Reserved.</p>
                
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
