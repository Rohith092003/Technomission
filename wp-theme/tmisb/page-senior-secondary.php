<?php
/* Template Name: Senior Secondary Page */
get_header();
?>
<!-- Page Header -->
    <section class="relative py-16 md:py-28 bg-primaryDark overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80" alt="Senior Secondary Laboratory" class="w-full h-full object-cover opacity-25">
            <div class="absolute inset-0 bg-gradient-to-r from-primaryDark/95 via-primaryDark/85 to-primaryDark/50"></div>
        </div>
        <div class="container mx-auto px-4 relative z-10 max-w-7xl">
            <div class="max-w-3xl">
                <div class="inline-flex items-center gap-2 bg-secondary text-white px-3.5 py-1.5 rounded text-xs font-bold tracking-widest uppercase mb-4 shadow">
                    <i class="fas fa-atom"></i> Classes: XI – XII (+2 Stage)
                </div>
                <h1 class="nav-font font-extrabold text-4xl sm:text-5xl md:text-6xl text-white mb-4 leading-tight">
                    Senior Secondary <span class="text-secondary">Wing</span>
                </h1>
                <p class="text-xl md:text-2xl text-yellow-300 font-semibold italic mb-6">
                    "Specialisation, independent thinking and future readiness"
                </p>
                <div class="flex items-center text-gray-300 text-sm font-medium">
                    <a href="<?php echo home_url('/'); ?>" class="hover:text-white transition flex items-center"><i class="fas fa-home mr-2"></i> Home</a>
                    <i class="fas fa-chevron-right mx-3 text-xs text-gray-500"></i>
                    <a href="<?php echo home_url('/academics/'); ?>" class="hover:text-white transition">Academics</a>
                    <i class="fas fa-chevron-right mx-3 text-xs text-gray-500"></i>
                    <span class="text-secondary font-semibold">Senior Secondary</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content Area -->
    <section class="py-16 md:py-20 bg-white">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="flex flex-col lg:flex-row gap-12">
                <!-- Main Column -->
                <div class="w-full lg:w-8/12">
                    <div class="mb-10">
                        <span class="w-10 h-1 bg-secondary rounded-full inline-block mb-3"></span>
                        <h2 class="nav-font font-extrabold text-3xl md:text-4xl text-primary mb-6">
                            Specialisation, Independent Thinking & Future Readiness
                        </h2>
                        <p class="text-gray-700 text-lg leading-relaxed mb-6 font-normal">
                            Senior secondary education marks an important transition towards higher education and professional aspirations. At <strong class="text-primary font-semibold">TMISB</strong>, our aim is to help students deepen their subject knowledge, develop independent learning habits and make informed decisions about their future.
                        </p>
                    </div>

                    <!-- Stream Showcases -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-10">
                        <!-- Science Stream -->
                        <div class="bg-gradient-to-br from-primary to-primaryDark text-white rounded-2xl p-8 shadow-xl relative overflow-hidden">
                            <span class="bg-secondary text-white text-[11px] font-bold uppercase tracking-wider px-3 py-1 rounded inline-block mb-4 shadow">
                                Stream 01
                            </span>
                            <h3 class="nav-font font-bold text-2xl text-white mb-3">Science Stream</h3>
                            <p class="text-gray-200 text-sm leading-relaxed mb-5 font-light">
                                Subject combinations may include Physics, Chemistry and Mathematics (PCM) or Physics, Chemistry and Biology (PCB), subject to the school's approved offerings. Appropriate electives may include Computer Science, Physical Education or other available subjects.
                            </p>
                            <div class="border-t border-white/20 pt-4 text-xs text-yellow-300 space-y-1.5">
                                <div><i class="fas fa-check-circle mr-1.5"></i> PCM: Engineering, Architecture, Research</div>
                                <div><i class="fas fa-check-circle mr-1.5"></i> PCB: Medicine, Biotechnology, Life Sciences</div>
                            </div>
                        </div>

                        <!-- Commerce Stream -->
                        <div class="bg-white rounded-2xl p-8 shadow-xl border-2 border-gray-100 relative overflow-hidden">
                            <span class="bg-primary text-white text-[11px] font-bold uppercase tracking-wider px-3 py-1 rounded inline-block mb-4 shadow">
                                Stream 02
                            </span>
                            <h3 class="nav-font font-bold text-2xl text-primary mb-3">Commerce Stream</h3>
                            <p class="text-gray-600 text-sm leading-relaxed mb-5">
                                Subjects may include Accountancy, Business Studies and Economics, with Mathematics, Applied Mathematics or other approved electives where offered.
                            </p>
                            <div class="border-t border-gray-200 pt-4 text-xs text-secondary space-y-1.5 font-semibold">
                                <div><i class="fas fa-check-circle mr-1.5"></i> CA / CS / Finance / Corporate Law</div>
                                <div><i class="fas fa-check-circle mr-1.5"></i> Business Administration & Economics</div>
                            </div>
                        </div>
                    </div>

                    <!-- 3 Supporting Senior Secondary Pillars -->
                    <div class="space-y-6 mb-12">
                        <div class="bg-lightBg rounded-2xl p-6 sm:p-8 border border-gray-100 hover:shadow-lg transition">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-xl bg-primary text-white flex items-center justify-center text-xl shrink-0 shadow">
                                    <i class="fas fa-microscope"></i>
                                </div>
                                <div>
                                    <h3 class="nav-font font-bold text-xl text-primary mb-2">Research, Innovation and Application</h3>
                                    <p class="text-gray-600 text-sm leading-relaxed">
                                        Students should be encouraged to connect theoretical concepts with practical applications, analyse information, undertake projects and develop independent problem-solving skills.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-lightBg rounded-2xl p-6 sm:p-8 border border-gray-100 hover:shadow-lg transition">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-xl bg-secondary text-white flex items-center justify-center text-xl shrink-0 shadow">
                                    <i class="fas fa-trophy"></i>
                                </div>
                                <div>
                                    <h3 class="nav-font font-bold text-xl text-primary mb-2">Competitive Examination Readiness</h3>
                                    <p class="text-gray-600 text-sm leading-relaxed">
                                        Where provided, academic support for entrance examinations can help students strengthen subject fundamentals, practise application-based questions and develop effective examination strategies.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-lightBg rounded-2xl p-6 sm:p-8 border border-gray-100 hover:shadow-lg transition">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-xl bg-primary text-white flex items-center justify-center text-xl shrink-0 shadow">
                                    <i class="fas fa-heartbeat"></i>
                                </div>
                                <div>
                                    <h3 class="nav-font font-bold text-xl text-primary mb-2">Personal Well-Being and Discipline</h3>
                                    <p class="text-gray-600 text-sm leading-relaxed">
                                        Healthy routines, physical activity and age-appropriate mindfulness practices support a balanced approach to the demands of senior secondary education.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Callout Objective Box -->
                    <div class="bg-gradient-to-r from-primary to-primaryDark text-white p-8 rounded-2xl shadow-xl mb-8">
                        <span class="inline-block bg-secondary text-white font-bold text-[11px] uppercase tracking-widest px-3 py-1 rounded mb-3">Our Objective</span>
                        <p class="text-lg md:text-xl font-light italic leading-relaxed text-gray-100 mb-2">
                            “Our objective is to prepare students for higher education and future careers by developing subject expertise, critical thinking, confidence and a commitment to continuous learning.”
                        </p>
                    </div>

                    <!-- Compliance Note -->
                    <div class="p-4 bg-yellow-50 border border-yellow-200 rounded-xl mb-10 text-xs text-yellow-800">
                        <i class="fas fa-info-circle mr-1.5 text-yellow-600"></i> The school must confirm the actual streams, subject combinations and electives offered before publication.
                    </div>

                    <!-- Next Academic Stage Navigation -->
                    <div class="p-6 bg-lightBg rounded-2xl border border-gray-200 flex items-center justify-between">
                        <div>
                            <span class="text-xs uppercase text-gray-500 font-bold tracking-wider block">Competitive Programs</span>
                            <h4 class="nav-font font-bold text-lg text-primary">Integrated Competitive Preparation (JEE / NEET)</h4>
                        </div>
                        <a href="<?php echo home_url('/competitive-coaching/'); ?>" class="inline-flex items-center bg-primary hover:bg-secondary text-white font-bold py-2.5 px-5 rounded-lg text-xs uppercase tracking-wider transition">
                            Explore JEE/NEET <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Right Sidebar -->
                <div class="w-full lg:w-4/12">
                    
    <div class="space-y-8">
        <!-- Academic Navigation Widget -->
        <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
            <h4 class="nav-font font-bold text-lg text-primary mb-4 pb-2 border-b border-gray-100 flex items-center">
                <i class="fas fa-layer-group text-secondary mr-2"></i> Academic Wings
            </h4>
            <ul class="space-y-2">
                <li>
            <a href="<?php echo home_url('/academics/'); ?>" class="flex items-center justify-between p-3.5 rounded-xl transition bg-gray-50 text-gray-700 hover:bg-primary/5 hover:text-primary">
                <span class="flex items-center text-sm">
                    <i class="fas fa-book-open mr-3 text-xs text-primary"></i> Academic Overview & Philosophy
                </span>
                <i class="fas fa-chevron-right text-xs text-gray-400"></i>
            </a>
        </li>
<li>
            <a href="<?php echo home_url('/pre-primary/'); ?>" class="flex items-center justify-between p-3.5 rounded-xl transition bg-gray-50 text-gray-700 hover:bg-primary/5 hover:text-primary">
                <span class="flex items-center text-sm">
                    <i class="fas fa-shapes mr-3 text-xs text-primary"></i> Pre-Primary Wing (Nursery–UKG)
                </span>
                <i class="fas fa-chevron-right text-xs text-gray-400"></i>
            </a>
        </li>
<li>
            <a href="<?php echo home_url('/primary/'); ?>" class="flex items-center justify-between p-3.5 rounded-xl transition bg-gray-50 text-gray-700 hover:bg-primary/5 hover:text-primary">
                <span class="flex items-center text-sm">
                    <i class="fas fa-cubes mr-3 text-xs text-primary"></i> Primary Wing (Classes I–V)
                </span>
                <i class="fas fa-chevron-right text-xs text-gray-400"></i>
            </a>
        </li>
<li>
            <a href="<?php echo home_url('/secondary/'); ?>" class="flex items-center justify-between p-3.5 rounded-xl transition bg-gray-50 text-gray-700 hover:bg-primary/5 hover:text-primary">
                <span class="flex items-center text-sm">
                    <i class="fas fa-graduation-cap mr-3 text-xs text-primary"></i> Middle & Secondary (VI–X)
                </span>
                <i class="fas fa-chevron-right text-xs text-gray-400"></i>
            </a>
        </li>
<li>
            <a href="<?php echo home_url('/senior-secondary/'); ?>" class="flex items-center justify-between p-3.5 rounded-xl transition bg-primary text-white font-bold shadow-md">
                <span class="flex items-center text-sm">
                    <i class="fas fa-atom mr-3 text-xs text-secondary"></i> Senior Secondary (XI–XII)
                </span>
                <i class="fas fa-chevron-right text-xs text-white"></i>
            </a>
        </li>
<li>
            <a href="<?php echo home_url('/competitive-coaching/'); ?>" class="flex items-center justify-between p-3.5 rounded-xl transition bg-gray-50 text-gray-700 hover:bg-primary/5 hover:text-primary">
                <span class="flex items-center text-sm">
                    <i class="fas fa-trophy mr-3 text-xs text-primary"></i> Competitive Prep (JEE/NEET)
                </span>
                <i class="fas fa-chevron-right text-xs text-gray-400"></i>
            </a>
        </li>
<li>
            <a href="<?php echo home_url('/teaching-methodology/'); ?>" class="flex items-center justify-between p-3.5 rounded-xl transition bg-gray-50 text-gray-700 hover:bg-primary/5 hover:text-primary">
                <span class="flex items-center text-sm">
                    <i class="fas fa-chalkboard-teacher mr-3 text-xs text-primary"></i> Teaching & Evaluation
                </span>
                <i class="fas fa-chevron-right text-xs text-gray-400"></i>
            </a>
        </li>
            </ul>
        </div>

        <!-- Admissions 2026-27 Card -->
        <div class="bg-gradient-to-br from-primary to-primaryDark text-white rounded-2xl p-6 shadow-xl relative overflow-hidden">
            <div class="absolute -right-6 -bottom-6 opacity-10 text-8xl">
                <i class="fas fa-user-graduate"></i>
            </div>
            <span class="bg-secondary text-white text-[11px] font-bold uppercase tracking-wider px-3 py-1 rounded inline-block mb-3 shadow">
                Admissions Open 2026–27
            </span>
            <h4 class="nav-font font-bold text-xl text-white mb-2 leading-tight">Begin Your Child's Journey at TMISB</h4>
            <p class="text-gray-200 text-xs leading-relaxed mb-5 font-light">
                Secure your child's seat in an environment dedicated to academic excellence, moral values, and all-round growth.
            </p>
            <div class="space-y-2 mb-5 text-xs text-yellow-300 font-semibold">
                <div><i class="fas fa-phone-alt mr-2"></i> +91 9431214985, 0641-2610985</div>
                <div><i class="fas fa-envelope mr-2"></i> techno.edu.school@gmail.com</div>
            </div>
            <a href="<?php echo home_url('/admissions/'); ?>" class="block text-center bg-secondary hover:bg-red-700 text-white font-bold py-2.5 px-4 rounded-lg text-xs uppercase tracking-wider transition shadow">
                Enquire for Admission
            </a>
        </div>

        <!-- Key Credentials Card -->
        <div class="bg-lightBg rounded-2xl p-6 border border-gray-200">
            <h4 class="nav-font font-bold text-base text-primary mb-3 flex items-center">
                <i class="fas fa-certificate text-secondary mr-2"></i> Official Credentials
            </h4>
            <ul class="space-y-2.5 text-xs text-gray-600">
                <li class="flex items-center"><i class="fas fa-check text-secondary mr-2"></i> CBSE Affiliation No: <strong>330331</strong></li>
                <li class="flex items-center"><i class="fas fa-check text-secondary mr-2"></i> School Code: <strong>65328</strong></li>
                <li class="flex items-center"><i class="fas fa-check text-secondary mr-2"></i> Managed by: <strong>Jagriti Charitable Trust</strong></li>
                <li class="flex items-center"><i class="fas fa-check text-secondary mr-2"></i> 29+ Years Legacy of Excellence</li>
            </ul>
        </div>
    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Footer (Reused) -->
    
<?php
get_footer();
?>