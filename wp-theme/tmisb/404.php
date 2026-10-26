<?php get_header(); ?>
<main class="flex-grow py-16 md:py-24 relative overflow-hidden flex items-center justify-center">
        <!-- Decorative Ambient Background Elements -->
        <div class="absolute inset-0 z-0 pointer-events-none opacity-40">
            <div class="absolute -top-32 -left-32 w-96 h-96 bg-primary/10 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-32 -right-32 w-96 h-96 bg-secondary/10 rounded-full blur-3xl"></div>
            <div class="school-particles absolute inset-0 opacity-20"></div>
        </div>

        <div class="container mx-auto px-4 max-w-5xl relative z-10 text-center">
            
            <!-- Status Badge -->
            <div class="inline-flex items-center gap-2 bg-secondary/10 text-secondary border border-secondary/20 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-widest mb-6 shadow-sm">
                <i class="fas fa-compass text-secondary"></i> Navigation Assistance • Error 404
            </div>

            <!-- Stylized Monumental 404 Number -->
            <div class="relative inline-block mb-4">
                <span class="nav-font font-black text-8xl sm:text-9xl md:text-[150px] leading-none text-transparent bg-clip-text bg-gradient-to-r from-primary via-primaryDark to-secondary select-none tracking-tight drop-shadow-sm">
                    404
                </span>
                <div class="absolute -top-3 -right-3 sm:-top-5 sm:-right-6 w-14 h-14 sm:w-16 sm:h-16 rounded-2xl bg-secondary text-white flex items-center justify-center text-xl sm:text-2xl shadow-xl shadow-secondary/30 animate-float border-2 border-white">
                    <i class="fas fa-graduation-cap"></i>
                </div>
            </div>

            <!-- Main Heading & Friendly Explanation -->
            <h1 class="nav-font font-extrabold text-2xl sm:text-3xl md:text-4xl text-gray-900 mb-4 tracking-tight">
                Oops! This Page Took An Unscheduled Recess
            </h1>
            <p class="text-gray-600 text-base md:text-lg max-w-2xl mx-auto leading-relaxed mb-10">
                Even the brightest scholars take an unexpected turn once in a while. The resource or link you are seeking may have moved to a new wing, been renamed, or is temporarily unavailable.
            </p>

            <!-- Quick Action Buttons -->
            <div class="flex flex-wrap justify-center items-center gap-4 mb-16">
                <a href="<?php echo home_url('/'); ?>" class="bg-primary hover:bg-primaryDark text-white font-bold py-3.5 px-8 rounded-xl text-sm uppercase tracking-wider transition shadow-lg hover:shadow-xl flex items-center btn-shine">
                    <i class="fas fa-home mr-2.5 text-secondary"></i> Back to Campus Home
                </a>
                <a href="<?php echo home_url('/admissions/'); ?>" class="bg-secondary hover:bg-red-700 text-white font-bold py-3.5 px-8 rounded-xl text-sm uppercase tracking-wider transition shadow-lg hover:shadow-xl flex items-center btn-shine">
                    <i class="fas fa-user-graduate mr-2.5"></i> Admissions 2026–27
                </a>
                <a href="<?php echo home_url('/academics/'); ?>" class="bg-white hover:bg-gray-100 text-primary border border-gray-300 font-bold py-3.5 px-7 rounded-xl text-sm uppercase tracking-wider transition shadow-sm hover:shadow flex items-center">
                    <i class="fas fa-book-open mr-2.5 text-secondary"></i> Academic Wings
                </a>
            </div>

            <!-- Helpful Navigation Directory Cards (4-Column Grid) -->
            <div class="text-left mb-16">
                <div class="text-center mb-8">
                    <h3 class="nav-font font-bold text-xl text-primary mb-1">Looking for something specific?</h3>
                    <p class="text-gray-500 text-xs sm:text-sm">Explore our primary portals and find what you need in seconds.</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Card 1: Academic Wings -->
                    <a href="<?php echo home_url('/academics/'); ?>" class="bg-white p-6 rounded-2xl border border-gray-200/80 shadow-sm hover:shadow-xl transition-all duration-300 card-hover group block">
                        <div class="w-12 h-12 rounded-xl bg-primary/10 text-primary flex items-center justify-center text-xl mb-4 group-hover:bg-primary group-hover:text-white transition-colors duration-300">
                            <i class="fas fa-school"></i>
                        </div>
                        <h4 class="nav-font font-bold text-base text-gray-900 group-hover:text-primary mb-1 transition-colors">Academic Wings</h4>
                        <p class="text-xs text-gray-500 leading-relaxed mb-3">Pre-Primary, Primary, Middle, Secondary & Senior Secondary curricula.</p>
                        <span class="text-xs font-bold text-secondary inline-flex items-center group-hover:translate-x-1 transition-transform">
                            Explore Wings <i class="fas fa-arrow-right ml-1.5 text-[10px]"></i>
                        </span>
                    </a>

                    <!-- Card 2: Admissions & Criteria -->
                    <a href="<?php echo home_url('/admissions/'); ?>" class="bg-white p-6 rounded-2xl border border-gray-200/80 shadow-sm hover:shadow-xl transition-all duration-300 card-hover group block">
                        <div class="w-12 h-12 rounded-xl bg-secondary/10 text-secondary flex items-center justify-center text-xl mb-4 group-hover:bg-secondary group-hover:text-white transition-colors duration-300">
                            <i class="fas fa-file-signature"></i>
                        </div>
                        <h4 class="nav-font font-bold text-base text-gray-900 group-hover:text-secondary mb-1 transition-colors">Admissions 2026–27</h4>
                        <p class="text-xs text-gray-500 leading-relaxed mb-3">5-step process, age criteria, document checklist & application enquiry.</p>
                        <span class="text-xs font-bold text-secondary inline-flex items-center group-hover:translate-x-1 transition-transform">
                            Apply Online <i class="fas fa-arrow-right ml-1.5 text-[10px]"></i>
                        </span>
                    </a>

                    <!-- Card 3: Laboratories & Facilities -->
                    <a href="labs.html" class="bg-white p-6 rounded-2xl border border-gray-200/80 shadow-sm hover:shadow-xl transition-all duration-300 card-hover group block">
                        <div class="w-12 h-12 rounded-xl bg-primary/10 text-primary flex items-center justify-center text-xl mb-4 group-hover:bg-primary group-hover:text-white transition-colors duration-300">
                            <i class="fas fa-flask"></i>
                        </div>
                        <h4 class="nav-font font-bold text-base text-gray-900 group-hover:text-primary mb-1 transition-colors">Campus Laboratories</h4>
                        <p class="text-xs text-gray-500 leading-relaxed mb-3">Computer, Physics, Chemistry, Biology and advanced robotics facilities.</p>
                        <span class="text-xs font-bold text-secondary inline-flex items-center group-hover:translate-x-1 transition-transform">
                            View Labs <i class="fas fa-arrow-right ml-1.5 text-[10px]"></i>
                        </span>
                    </a>

                    <!-- Card 4: Contact & Campus Visit -->
                    <a href="<?php echo home_url('/contact/'); ?>" class="bg-white p-6 rounded-2xl border border-gray-200/80 shadow-sm hover:shadow-xl transition-all duration-300 card-hover group block">
                        <div class="w-12 h-12 rounded-xl bg-secondary/10 text-secondary flex items-center justify-center text-xl mb-4 group-hover:bg-secondary group-hover:text-white transition-colors duration-300">
                            <i class="fas fa-map-marked-alt"></i>
                        </div>
                        <h4 class="nav-font font-bold text-base text-gray-900 group-hover:text-secondary mb-1 transition-colors">Contact & Campus</h4>
                        <p class="text-xs text-gray-500 leading-relaxed mb-3">Get directions, campus timings, phone numbers and desk support.</p>
                        <span class="text-xs font-bold text-secondary inline-flex items-center group-hover:translate-x-1 transition-transform">
                            Get Directions <i class="fas fa-arrow-right ml-1.5 text-[10px]"></i>
                        </span>
                    </a>
                </div>
            </div>

            <!-- Campus Support Helpline Box -->
            <div class="bg-white rounded-2xl p-6 md:p-8 border border-gray-200 shadow-sm flex flex-col md:flex-row items-center justify-between gap-6 text-left">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full bg-primary text-white flex items-center justify-center text-xl shrink-0 shadow-sm">
                        <i class="fas fa-headset"></i>
                    </div>
                    <div>
                        <h4 class="nav-font font-bold text-lg text-primary">Need Direct Assistance?</h4>
                        <p class="text-xs md:text-sm text-gray-600">Our Admissions & Information Helpdesk is open Mon–Sat, 9:00 AM – 3:00 PM.</p>
                    </div>
                </div>
                <div class="flex flex-wrap items-center gap-3 shrink-0">
                    <a href="tel:+919431214985" class="bg-primary hover:bg-primaryDark text-white font-bold py-2.5 px-5 rounded-lg text-xs uppercase tracking-wider transition shadow flex items-center">
                        <i class="fas fa-phone-alt mr-2 text-secondary"></i> +91 9431214985
                    </a>
                    <a href="mailto:techno.edu.school@gmail.com" class="bg-gray-100 hover:bg-gray-200 text-gray-800 font-bold py-2.5 px-5 rounded-lg text-xs uppercase tracking-wider transition flex items-center">
                        <i class="fas fa-envelope mr-2 text-primary"></i> Email Desk
                    </a>
                </div>
            </div>

        </div>
    </main>

    
<?php get_footer(); ?>