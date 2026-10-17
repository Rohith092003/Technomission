<?php
/* Template Name: Facilities Page */
get_header();
?>
<!-- Page Header -->
    <section class="relative py-16 md:py-24 bg-primaryDark overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="<?php echo get_template_directory_uri(); ?>/school images google/63f03e7eda38af09f9012e779a2c2745.webp?v=<?php echo time(); ?>" alt="TMISB Campus" class="w-full h-full object-cover opacity-25">
            <div class="absolute inset-0 bg-gradient-to-r from-primaryDark/95 via-primaryDark/80 to-primaryDark/50"></div>
        </div>
        <div class="container mx-auto px-4 relative z-10 max-w-7xl">
            <div class="max-w-3xl">
                <div class="inline-flex items-center gap-2 bg-secondary text-white px-3.5 py-1.5 rounded text-xs font-bold tracking-widest uppercase mb-4 shadow">
                    <i class="fas fa-university"></i> World-Class Infrastructure
                </div>
                <h1 class="nav-font font-extrabold text-4xl sm:text-5xl md:text-6xl text-white mb-4 leading-tight">
                    Campus Facilities &amp; <br><span class="text-secondary">Learning Spaces</span>
                </h1>
                <p class="text-base sm:text-lg text-gray-200 leading-relaxed mb-6 font-normal">
                    Techno Mission International School provides a secure, technologically enriched, and stimulating campus environment designed to cultivate curiosity, physical vitality, scientific rigor, and character.
                </p>
                <div class="flex items-center text-gray-300 text-sm font-medium">
                    <a href="<?php echo home_url('/'); ?>" class="hover:text-white transition flex items-center"><i class="fas fa-home mr-2"></i> Home</a>
                    <i class="fas fa-chevron-right mx-3 text-xs text-gray-500"></i>
                    <span class="text-secondary font-semibold">Facilities</span>
                </div>
            </div>
        </div>
    </section>


    <!-- 1. LABORATORIES SECTION (#labs) -->
    <section class="section-padding bg-white relative" id="labs">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-16">
                <div class="flex items-center justify-center mb-3">
                    <span class="w-10 h-1 bg-secondary rounded-full mr-3"></span>
                    <h4 class="text-secondary font-bold text-sm uppercase tracking-widest">Hands-On Inquiry</h4>
                    <span class="w-10 h-1 bg-secondary rounded-full ml-3"></span>
                </div>
                <h2 class="section-title">State-of-the-Art Laboratories</h2>
                <p class="text-gray-600 max-w-3xl mx-auto text-base sm:text-lg leading-relaxed">
                    Experiential learning forms the backbone of the TMISB academic philosophy. Our specialized laboratories are equipped with modern apparatus, rigorous safety protocols, and digital demonstration stations.
                </p>
            </div>

            <!-- Featured Real Science Lab Showcase -->
            <div class="mb-12 rounded-2xl overflow-hidden shadow-xl border border-gray-100 bg-white grid grid-cols-1 lg:grid-cols-12 items-center">
                <div class="lg:col-span-7 h-[300px] md:h-[380px]">
                    <img src="<?php echo get_template_directory_uri(); ?>/school images google/Science lab.webp?v=<?php echo time(); ?>" alt="TMISB Science Laboratory" class="w-full h-full object-cover">
                </div>
                <div class="lg:col-span-5 p-6 md:p-8">
                    <div class="inline-flex items-center gap-2 bg-secondary/10 text-secondary px-3 py-1 rounded text-xs font-bold uppercase tracking-wider mb-3">
                        <i class="fas fa-microscope"></i> Practical Science in Action
                    </div>
                    <h3 class="nav-font font-bold text-2xl text-primary mb-3">Hands-On Laboratory Discovery</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">
                        Students and faculty collaborating in our composite science laboratory, conducting real microscope research and curriculum experiments aligned with CBSE standards.
                    </p>
                    <div class="flex flex-wrap items-center gap-4 text-xs font-semibold text-gray-700">
                        <span class="flex items-center gap-1.5"><i class="fas fa-check text-secondary"></i> Optical Microscopes</span>
                        <span class="flex items-center gap-1.5"><i class="fas fa-check text-secondary"></i> Supervised Sessions</span>
                        <span class="flex items-center gap-1.5"><i class="fas fa-check text-secondary"></i> Practical Records</span>
                    </div>
                </div>
            </div>

            <!-- Lab Highlights Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Physics Lab -->
                <div class="bg-lightBg rounded-2xl p-8 border border-gray-200/80 hover:border-primary/40 hover:shadow-xl transition-all duration-300 group flex flex-col justify-between">
                    <div>
                        <div class="w-14 h-14 rounded-xl bg-primary/10 text-primary flex items-center justify-center text-2xl mb-6 group-hover:bg-primary group-hover:text-white transition-colors duration-300">
                            <i class="fas fa-atom"></i>
                        </div>
                        <h3 class="nav-font font-bold text-xl text-primary mb-3">Physics Laboratory</h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6">
                            Equipped with high-precision optical benches, spectrometers, electrical bridges, magnetic measurement instruments, and mechanics apparatus for deep conceptual clarity.
                        </p>
                    </div>
                    <ul class="space-y-2 text-xs font-semibold text-gray-700 border-t border-gray-200/60 pt-4">
                        <li class="flex items-center gap-2"><i class="fas fa-check text-secondary"></i> Optical benches &amp; laser refraction kits</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-secondary"></i> Digital Vernier calipers &amp; resistance bridges</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-secondary"></i> CBSE Board exam experiment setups</li>
                    </ul>
                </div>

                <!-- Chemistry Lab -->
                <div class="bg-lightBg rounded-2xl p-8 border border-gray-200/80 hover:border-primary/40 hover:shadow-xl transition-all duration-300 group flex flex-col justify-between">
                    <div>
                        <div class="w-14 h-14 rounded-xl bg-secondary/10 text-secondary flex items-center justify-center text-2xl mb-6 group-hover:bg-secondary group-hover:text-white transition-colors duration-300">
                            <i class="fas fa-vial"></i>
                        </div>
                        <h3 class="nav-font font-bold text-xl text-primary mb-3">Chemistry Laboratory</h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6">
                            A well-ventilated laboratory featuring acid-resistant ceramic countertops, individual gas burner lines, emergency eyewash stations, and dedicated titration benches.
                        </p>
                    </div>
                    <ul class="space-y-2 text-xs font-semibold text-gray-700 border-t border-gray-200/60 pt-4">
                        <li class="flex items-center gap-2"><i class="fas fa-check text-secondary"></i> Ventilated fume hoods &amp; safe chemical storage</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-secondary"></i> Digital analytical balances &amp; glassware sets</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-secondary"></i> Supervised qualitative &amp; quantitative analysis</li>
                    </ul>
                </div>

                <!-- Biology Lab -->
                <div class="bg-lightBg rounded-2xl p-8 border border-gray-200/80 hover:border-primary/40 hover:shadow-xl transition-all duration-300 group flex flex-col justify-between">
                    <div>
                        <div class="w-14 h-14 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center text-2xl mb-6 group-hover:bg-emerald-600 group-hover:text-white transition-colors duration-300">
                            <i class="fas fa-dna"></i>
                        </div>
                        <h3 class="nav-font font-bold text-xl text-primary mb-3">Biology Laboratory</h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6">
                            Enables students to explore living ecosystems and anatomical structures through compound microscopes, human skeletal models, botany slides, and preserved zoological specimens.
                        </p>
                    </div>
                    <ul class="space-y-2 text-xs font-semibold text-gray-700 border-t border-gray-200/60 pt-4">
                        <li class="flex items-center gap-2"><i class="fas fa-check text-secondary"></i> Monocular &amp; binocular research microscopes</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-secondary"></i> Human 3D physiological models &amp; specimens</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-secondary"></i> Botany herbarium &amp; physiological charts</li>
                    </ul>
                </div>

                <!-- Computer & IT Lab -->
                <div class="bg-lightBg rounded-2xl p-8 border border-gray-200/80 hover:border-primary/40 hover:shadow-xl transition-all duration-300 group flex flex-col justify-between">
                    <div>
                        <div class="w-14 h-14 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center text-2xl mb-6 group-hover:bg-primary group-hover:text-white transition-colors duration-300">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h3 class="nav-font font-bold text-xl text-primary mb-3">Computer Science &amp; IT Lab</h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6">
                            Fully air-conditioned computer center connected to high-speed fiber internet, offering individual terminals for coding in Python, C++, HTML/web development, and digital literacy.
                        </p>
                    </div>
                    <ul class="space-y-2 text-xs font-semibold text-gray-700 border-t border-gray-200/60 pt-4">
                        <li class="flex items-center gap-2"><i class="fas fa-check text-secondary"></i> 1:1 student-to-computer ratio during lab hours</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-secondary"></i> High-speed optical fiber connectivity</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-secondary"></i> Licensed educational tools &amp; coding IDEs</li>
                    </ul>
                </div>

                <!-- STEM & Robotics Lab -->
                <div class="bg-lightBg rounded-2xl p-8 border border-gray-200/80 hover:border-primary/40 hover:shadow-xl transition-all duration-300 group flex flex-col justify-between">
                    <div>
                        <div class="w-14 h-14 rounded-xl bg-purple-100 text-purple-700 flex items-center justify-center text-2xl mb-6 group-hover:bg-purple-600 group-hover:text-white transition-colors duration-300">
                            <i class="fas fa-robot"></i>
                        </div>
                        <h3 class="nav-font font-bold text-xl text-primary mb-3">STEM &amp; Robotics Studio</h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6">
                            Hands-on innovation playground where students build circuits, program microcontrollers, assemble robotic models, and test design-thinking ideas to solve practical problems.
                        </p>
                    </div>
                    <ul class="space-y-2 text-xs font-semibold text-gray-700 border-t border-gray-200/60 pt-4">
                        <li class="flex items-center gap-2"><i class="fas fa-check text-secondary"></i> Microcontrollers, sensors &amp; DIY robotics kits</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-secondary"></i> Logic-building &amp; algorithm development</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-secondary"></i> Science fair &amp; innovation project mentoring</li>
                    </ul>
                </div>

                <!-- Composite Science & Mathematics Lab -->
                <div class="bg-lightBg rounded-2xl p-8 border border-gray-200/80 hover:border-primary/40 hover:shadow-xl transition-all duration-300 group flex flex-col justify-between">
                    <div>
                        <div class="w-14 h-14 rounded-xl bg-amber-100 text-amber-700 flex items-center justify-center text-2xl mb-6 group-hover:bg-amber-600 group-hover:text-white transition-colors duration-300">
                            <i class="fas fa-shapes"></i>
                        </div>
                        <h3 class="nav-font font-bold text-xl text-primary mb-3">Mathematics &amp; Activity Lab</h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6">
                            Demystifying abstract geometric, algebraic, and statistical concepts using physical manipulatives, 3D solids, measuring instruments, and mathematical puzzles.
                        </p>
                    </div>
                    <ul class="space-y-2 text-xs font-semibold text-gray-700 border-t border-gray-200/60 pt-4">
                        <li class="flex items-center gap-2"><i class="fas fa-check text-secondary"></i> Tangible 3D geometric proofs &amp; models</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-secondary"></i> Number systems &amp; practical arithmetic kits</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-secondary"></i> Experiential discovery for Primary &amp; Middle wings</li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <!-- 2. DIGITAL CLASSROOMS SECTION (#classrooms) -->
    <section class="section-padding bg-lightBg border-t border-gray-200" id="classrooms">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="flex flex-col lg:flex-row gap-12 lg:gap-16 items-center">
                
                <!-- Text Column -->
                <div class="w-full lg:w-6/12">
                    <div class="flex items-center mb-3">
                        <span class="w-10 h-1 bg-secondary rounded-full mr-3"></span>
                        <h4 class="text-secondary font-bold text-sm uppercase tracking-widest">Interactive Learning Environments</h4>
                    </div>
                    <h2 class="section-title left-align mb-6">
                        Smart &amp; Digital Classrooms
                    </h2>
                    <p class="text-gray-700 text-base sm:text-lg leading-relaxed mb-6 font-normal">
                        Every classroom at TMISB is thoughtfully architected to blend conventional interactive teaching with 21st-century multimedia clarity, creating a collaborative, engaging, and joyful atmosphere for students.
                    </p>

                    <div class="space-y-5">
                        <div class="flex items-start gap-4 p-4 rounded-xl bg-white shadow-sm border border-gray-200/70">
                            <div class="w-10 h-10 rounded-lg bg-primary/10 text-primary flex items-center justify-center shrink-0 text-lg mt-0.5">
                                <i class="fas fa-tv"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-base text-gray-900 mb-1">Interactive Smart Boards &amp; AV Content</h4>
                                <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">
                                    High-definition smart displays project curriculum-mapped 2D/3D visualizations, animations, and historical documentaries to make complex principles immediately intuitive.
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-4 rounded-xl bg-white shadow-sm border border-gray-200/70">
                            <div class="w-10 h-10 rounded-lg bg-secondary/10 text-secondary flex items-center justify-center shrink-0 text-lg mt-0.5">
                                <i class="fas fa-sun"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-base text-gray-900 mb-1">Natural Light &amp; Ergonomic Furniture</h4>
                                <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">
                                    Spacious, airy classrooms designed with dual-side ventilation, abundant natural sunlight, and posture-friendly dual desks configured for individual focus and teamwork.
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-4 rounded-xl bg-white shadow-sm border border-gray-200/70">
                            <div class="w-10 h-10 rounded-lg bg-blue-100 text-primary flex items-center justify-center shrink-0 text-lg mt-0.5">
                                <i class="fas fa-video"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-base text-gray-900 mb-1">CCTV Monitored &amp; PA Intercom Equipped</h4>
                                <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">
                                    Round-the-clock safety monitoring across all wings with central public address systems ensuring prompt communication and disciplined campus management.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Image Showcase Column -->
                <div class="w-full lg:w-6/12">
                    <div class="relative">
                        <div class="rounded-2xl overflow-hidden shadow-2xl border-4 border-white">
                            <img src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="TMISB Digital Classroom" class="w-full h-[420px] object-cover">
                        </div>
                        <!-- Floating Stat Card -->
                        <div class="absolute -bottom-6 -left-6 bg-white p-5 rounded-2xl shadow-xl border border-gray-100 hidden sm:flex items-center gap-4">
                            <div class="w-12 h-12 rounded-xl bg-secondary text-white flex items-center justify-center text-xl font-bold shadow">
                                <i class="fas fa-check-double"></i>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 font-bold uppercase tracking-wider">Multimedia Enabled</p>
                                <p class="text-base font-bold text-primary">Interactive Audio-Visuals</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 3. TRANSPORT NETWORK SECTION (#transport) -->
    <section class="section-padding bg-white border-t border-gray-200" id="transport">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-16">
                <div class="flex items-center justify-center mb-3">
                    <span class="w-10 h-1 bg-secondary rounded-full mr-3"></span>
                    <h4 class="text-secondary font-bold text-sm uppercase tracking-widest">Safe Commute</h4>
                    <span class="w-10 h-1 bg-secondary rounded-full ml-3"></span>
                </div>
                <h2 class="section-title">School Transport &amp; Commute Network</h2>
                <p class="text-gray-600 max-w-3xl mx-auto text-base sm:text-lg leading-relaxed">
                    TMISB operates an extensive, punctual, and safe transport fleet connecting students across Bhagalpur City and adjoining township corridors to our Jagatpur campus.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                
                <div class="bg-lightBg rounded-xl p-6 border border-gray-100 text-center hover:shadow-lg transition">
                    <div class="w-12 h-12 rounded-xl bg-primary/10 text-primary flex items-center justify-center text-xl mx-auto mb-4">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                    <h4 class="font-bold text-base text-gray-900 mb-2">GPS-Enabled Telematics</h4>
                    <p class="text-xs text-gray-600 leading-relaxed">
                        Every vehicle is fitted with GPS navigation enabling precise location tracking and monitored route adherence.
                    </p>
                </div>

                <div class="bg-lightBg rounded-xl p-6 border border-gray-100 text-center hover:shadow-lg transition">
                    <div class="w-12 h-12 rounded-xl bg-secondary/10 text-secondary flex items-center justify-center text-xl mx-auto mb-4">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <h4 class="font-bold text-base text-gray-900 mb-2">Verified Drivers &amp; Escorts</h4>
                    <p class="text-xs text-gray-600 leading-relaxed">
                        Experienced, verified drivers assisted by trained attendants and female escorts for younger students.
                    </p>
                </div>

                <div class="bg-lightBg rounded-xl p-6 border border-gray-100 text-center hover:shadow-lg transition">
                    <div class="w-12 h-12 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center text-xl mx-auto mb-4">
                        <i class="fas fa-medkit"></i>
                    </div>
                    <h4 class="font-bold text-base text-gray-900 mb-2">First Aid &amp; Fire Safety</h4>
                    <p class="text-xs text-gray-600 leading-relaxed">
                        On-board fire extinguishers, emergency exit windows, and fully stocked first-aid medical supplies.
                    </p>
                </div>

                <div class="bg-lightBg rounded-xl p-6 border border-gray-100 text-center hover:shadow-lg transition">
                    <div class="w-12 h-12 rounded-xl bg-amber-100 text-amber-700 flex items-center justify-center text-xl mx-auto mb-4">
                        <i class="fas fa-route"></i>
                    </div>
                    <h4 class="font-bold text-base text-gray-900 mb-2">Wide Coverage Grid</h4>
                    <p class="text-xs text-gray-600 leading-relaxed">
                        Well-planned routes covering urban neighborhoods, railway hubs, and key residential zones across Silk City.
                    </p>
                </div>

            </div>

            <!-- Transport Note Card -->
            <div class="bg-primary text-white rounded-2xl p-6 md:p-8 flex flex-col md:flex-row items-center justify-between gap-6 shadow-xl">
                <div class="flex items-center gap-4">
                    <div class="w-14 h-14 rounded-xl bg-white/10 flex items-center justify-center text-2xl text-secondary shrink-0">
                        <i class="fas fa-info-circle"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-lg text-white mb-1">Route &amp; Stop Details</h4>
                        <p class="text-xs sm:text-sm text-gray-200">
                            Parents seeking bus route schedules, pickup points, and quarterly transport fee schedules are requested to consult the school transport desk during admission registration.
                        </p>
                    </div>
                </div>
                <a href="<?php echo home_url('/contact/'); ?>" class="bg-secondary hover:bg-red-700 text-white font-bold py-2.5 px-6 rounded-lg text-xs uppercase tracking-wider transition shrink-0 shadow">
                    Transport Desk Enquiry
                </a>
            </div>
        </div>
    </section>

    <!-- 4. LIBRARY SECTION (#library) -->
    <section class="section-padding bg-lightBg border-t border-gray-200" id="library">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="flex flex-col lg:flex-row-reverse gap-12 lg:gap-16 items-center">
                
                <!-- Text Column -->
                <div class="w-full lg:w-6/12">
                    <div class="flex items-center mb-3">
                        <span class="w-10 h-1 bg-secondary rounded-full mr-3"></span>
                        <h4 class="text-secondary font-bold text-sm uppercase tracking-widest">Knowledge Resource Centre</h4>
                    </div>
                    <h2 class="section-title left-align mb-6">
                        School Library &amp; Reading Room
                    </h2>
                    <p class="text-gray-700 text-base sm:text-lg leading-relaxed mb-6 font-normal">
                        The school library serves as the intellectual sanctuary of TMISB, fostering independent inquiry, critical thinking, and a lifelong passion for reading from the earliest grades to board exam years.
                    </p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-6">
                        <div class="p-4 rounded-xl bg-white border border-gray-200 shadow-sm">
                            <i class="fas fa-book text-secondary text-xl mb-2"></i>
                            <h4 class="font-bold text-sm text-gray-900 mb-1">Extensive Literature</h4>
                            <p class="text-xs text-gray-600">Rich collection of fiction, non-fiction, biographies, world classics, and children’s literature in English and Hindi.</p>
                        </div>

                        <div class="p-4 rounded-xl bg-white border border-gray-200 shadow-sm">
                            <i class="fas fa-graduation-cap text-primary text-xl mb-2"></i>
                            <h4 class="font-bold text-sm text-gray-900 mb-1">Competitive Stacks</h4>
                            <p class="text-xs text-gray-600">Dedicated reference stacks for CBSE Board exams, Olympiads, NTSE, IIT-JEE, NEET, and CA entrance tests.</p>
                        </div>

                        <div class="p-4 rounded-xl bg-white border border-gray-200 shadow-sm">
                            <i class="fas fa-newspaper text-emerald-600 text-xl mb-2"></i>
                            <h4 class="font-bold text-sm text-gray-900 mb-1">Periodicals &amp; Dailies</h4>
                            <p class="text-xs text-gray-600">Subscribed educational journals, monthly science magazines, and national daily newspapers to build general awareness.</p>
                        </div>

                        <div class="p-4 rounded-xl bg-white border border-gray-200 shadow-sm">
                            <i class="fas fa-feather-alt text-amber-600 text-xl mb-2"></i>
                            <h4 class="font-bold text-sm text-gray-900 mb-1">Quiet Study Zone</h4>
                            <p class="text-xs text-gray-600">Naturally illuminated, distraction-free environment with reading carrels designed for sustained contemplation.</p>
                        </div>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="w-full lg:w-6/12">
                    <div class="relative">
                        <div class="rounded-2xl overflow-hidden shadow-2xl border-4 border-white">
                            <img src="https://images.unsplash.com/photo-1521587760476-6c12a4b040da?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="TMISB Library" class="w-full h-[420px] object-cover">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 5. SPORTS, NCC & ACTIVITIES SECTION (#sports) -->
    <section class="section-padding bg-white border-t border-gray-200" id="sports">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-16">
                <div class="flex items-center justify-center mb-3">
                    <span class="w-10 h-1 bg-secondary rounded-full mr-3"></span>
                    <h4 class="text-secondary font-bold text-sm uppercase tracking-widest">Character, Fitness &amp; Discipline</h4>
                    <span class="w-10 h-1 bg-secondary rounded-full ml-3"></span>
                </div>
                <h2 class="section-title">Sports, NCC &amp; Co-Curricular Activities</h2>
                <p class="text-gray-600 max-w-3xl mx-auto text-base sm:text-lg leading-relaxed">
                    Education at Techno Mission extends beyond classrooms into playgrounds and parade fields. We place immense value on physical fitness, teamwork, resilience, patriotism, and cultural self-expression.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Outdoor Sports -->
                <div class="bg-lightBg rounded-2xl overflow-hidden border border-gray-200 hover:shadow-xl transition group">
                    <div class="h-48 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1526676037777-05a232554f77?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80');"></div>
                    <div class="p-6">
                        <div class="flex items-center gap-2 text-secondary text-xs font-bold uppercase tracking-wider mb-2">
                            <i class="fas fa-trophy"></i> Outdoor Grounds
                        </div>
                        <h3 class="nav-font font-bold text-xl text-primary mb-3">Outdoor Sports &amp; Athletics</h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-4">
                            Extensive outdoor sports grounds offering facilities for cricket, football, basketball, volleyball, badminton, and running track athletics coached by qualified physical education faculty.
                        </p>
                        <div class="flex flex-wrap gap-1.5">
                            <span class="bg-white border border-gray-200 text-gray-700 text-xs px-2.5 py-1 rounded">Cricket</span>
                            <span class="bg-white border border-gray-200 text-gray-700 text-xs px-2.5 py-1 rounded">Football</span>
                            <span class="bg-white border border-gray-200 text-gray-700 text-xs px-2.5 py-1 rounded">Basketball</span>
                            <span class="bg-white border border-gray-200 text-gray-700 text-xs px-2.5 py-1 rounded">Athletics</span>
                        </div>
                    </div>
                </div>

                <!-- NCC & Scouts -->
                <div class="bg-lightBg rounded-2xl overflow-hidden border border-gray-200 hover:shadow-xl transition group">
                    <div class="h-48 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1541829070764-84a7d30dd3f3?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80');"></div>
                    <div class="p-6">
                        <div class="flex items-center gap-2 text-primary text-xs font-bold uppercase tracking-wider mb-2">
                            <i class="fas fa-shield-alt"></i> National Discipline
                        </div>
                        <h3 class="nav-font font-bold text-xl text-primary mb-3">NCC &amp; Scouts &amp; Guides</h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-4">
                            Inculcating civic duty, parade drill discipline, leadership, camaraderie, disaster management awareness, and patriotic devotion through structured cadet activities and camps.
                        </p>
                        <div class="flex flex-wrap gap-1.5">
                            <span class="bg-white border border-gray-200 text-gray-700 text-xs px-2.5 py-1 rounded">Parade Drills</span>
                            <span class="bg-white border border-gray-200 text-gray-700 text-xs px-2.5 py-1 rounded">Leadership</span>
                            <span class="bg-white border border-gray-200 text-gray-700 text-xs px-2.5 py-1 rounded">Community Service</span>
                            <span class="bg-white border border-gray-200 text-gray-700 text-xs px-2.5 py-1 rounded">Annual Camps</span>
                        </div>
                    </div>
                </div>

                <!-- Yoga & Meditation -->
                <div class="bg-lightBg rounded-2xl overflow-hidden border border-gray-200 hover:shadow-xl transition group">
                    <div class="h-48 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1545205597-3d9d02c29597?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80');"></div>
                    <div class="p-6">
                        <div class="flex items-center gap-2 text-emerald-700 text-xs font-bold uppercase tracking-wider mb-2">
                            <i class="fas fa-spa"></i> Mindfulness &amp; Wellness
                        </div>
                        <h3 class="nav-font font-bold text-xl text-primary mb-3">Yoga &amp; Meditation</h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-4">
                            Rooted in ancient Indian wisdom, daily yoga, pranayama, and mindful meditation sessions develop mental focus, emotional poise, physical flexibility, and resilience in our students.
                        </p>
                        <div class="flex flex-wrap gap-1.5">
                            <span class="bg-white border border-gray-200 text-gray-700 text-xs px-2.5 py-1 rounded">Daily Pranayama</span>
                            <span class="bg-white border border-gray-200 text-gray-700 text-xs px-2.5 py-1 rounded">Guided Meditation</span>
                            <span class="bg-white border border-gray-200 text-gray-700 text-xs px-2.5 py-1 rounded">Stress Management</span>
                            <span class="bg-white border border-gray-200 text-gray-700 text-xs px-2.5 py-1 rounded">Inner Balance</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Call to Action Banner -->
    <section class="py-16 bg-gradient-to-r from-primary to-primaryDark text-white relative overflow-hidden">
        <div class="container mx-auto px-4 max-w-7xl relative z-10 text-center">
            <h2 class="nav-font font-extrabold text-3xl md:text-4xl text-white mb-4">
                Experience the TMISB Campus First-Hand
            </h2>
            <p class="text-gray-200 max-w-2xl mx-auto text-base sm:text-lg mb-8 leading-relaxed">
                We warmly invite parents and prospective students to tour our classrooms, laboratories, sports grounds, and learning spaces at Jagatpur, Bhagalpur.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="<?php echo home_url('/admissions/'); ?>" class="bg-secondary hover:bg-red-700 text-white font-bold py-3.5 px-8 rounded-lg shadow-lg text-sm uppercase tracking-wider transition transform hover:-translate-y-0.5">
                    Admissions Enquiry 2026–27
                </a>
                <a href="<?php echo home_url('/contact/'); ?>" class="bg-white text-primary hover:bg-gray-100 font-bold py-3.5 px-8 rounded-lg shadow text-sm uppercase tracking-wider transition">
                    Contact School Office
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    
<?php
get_footer();
?>