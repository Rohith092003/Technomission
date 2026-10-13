<?php
/* Template Name: Teaching Methodology Page */
get_header();
?>
<!-- Page Header -->
    <section class="relative py-16 md:py-28 bg-primaryDark overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80" alt="Teaching Methodology" class="w-full h-full object-cover opacity-25">
            <div class="absolute inset-0 bg-gradient-to-r from-primaryDark/95 via-primaryDark/85 to-primaryDark/50"></div>
        </div>
        <div class="container mx-auto px-4 relative z-10 max-w-7xl">
            <div class="max-w-3xl">
                <div class="inline-flex items-center gap-2 bg-secondary text-white px-3.5 py-1.5 rounded text-xs font-bold tracking-widest uppercase mb-4 shadow">
                    <i class="fas fa-chalkboard-teacher"></i> Pedagogical Framework
                </div>
                <h1 class="nav-font font-extrabold text-4xl sm:text-5xl md:text-6xl text-white mb-4 leading-tight">
                    Academic Methodology <span class="text-secondary">& Evaluation</span>
                </h1>
                <p class="text-xl md:text-2xl text-yellow-300 font-semibold italic mb-6">
                    "Learning, reflection and continuous improvement"
                </p>
                <div class="flex items-center text-gray-300 text-sm font-medium">
                    <a href="<?php echo home_url('/'); ?>" class="hover:text-white transition flex items-center"><i class="fas fa-home mr-2"></i> Home</a>
                    <i class="fas fa-chevron-right mx-3 text-xs text-gray-500"></i>
                    <a href="<?php echo home_url('/academics/'); ?>" class="hover:text-white transition">Academics</a>
                    <i class="fas fa-chevron-right mx-3 text-xs text-gray-500"></i>
                    <span class="text-secondary font-semibold">Methodology</span>
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
                            Learning, Reflection and Continuous Improvement
                        </h2>
                        <p class="text-gray-700 text-lg leading-relaxed mb-6 font-normal">
                            At <strong class="text-primary font-semibold">TMISB</strong>, we believe that effective education combines clear instruction, active participation, regular assessment and constructive feedback. Our aim is to help students understand concepts, recognise their strengths and steadily improve their performance.
                        </p>
                    </div>

                    <!-- 6 Methodology Pillars Detailed Grid -->
                    <div class="space-y-6 mb-12">
                        <!-- 1 -->
                        <div class="bg-lightBg rounded-2xl p-6 sm:p-8 border border-gray-100 hover:shadow-lg transition">
                            <div class="flex items-start gap-4">
                                <span class="w-10 h-10 rounded-lg bg-primary text-white flex items-center justify-center font-bold text-sm shrink-0">01</span>
                                <div>
                                    <h3 class="nav-font font-bold text-xl text-primary mb-2">Student-Centred Teaching</h3>
                                    <p class="text-gray-600 text-sm leading-relaxed">
                                        Lessons should encourage questioning, discussion, exploration and application rather than relying exclusively on memorisation.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- 2 -->
                        <div class="bg-lightBg rounded-2xl p-6 sm:p-8 border border-gray-100 hover:shadow-lg transition">
                            <div class="flex items-start gap-4">
                                <span class="w-10 h-10 rounded-lg bg-secondary text-white flex items-center justify-center font-bold text-sm shrink-0">02</span>
                                <div>
                                    <h3 class="nav-font font-bold text-xl text-primary mb-2">Continuous Assessment</h3>
                                    <p class="text-gray-600 text-sm leading-relaxed">
                                        Classwork, assignments, projects, periodic tests and other prescribed assessments help teachers monitor student progress and identify areas requiring additional support.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- 3 -->
                        <div class="bg-lightBg rounded-2xl p-6 sm:p-8 border border-gray-100 hover:shadow-lg transition">
                            <div class="flex items-start gap-4">
                                <span class="w-10 h-10 rounded-lg bg-primary text-white flex items-center justify-center font-bold text-sm shrink-0">03</span>
                                <div>
                                    <h3 class="nav-font font-bold text-xl text-primary mb-2">Term Examinations</h3>
                                    <p class="text-gray-600 text-sm leading-relaxed">
                                        Structured examinations help students consolidate learning, practise revision techniques and develop effective time-management skills.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- 4 -->
                        <div class="bg-lightBg rounded-2xl p-6 sm:p-8 border border-gray-100 hover:shadow-lg transition">
                            <div class="flex items-start gap-4">
                                <span class="w-10 h-10 rounded-lg bg-secondary text-white flex items-center justify-center font-bold text-sm shrink-0">04</span>
                                <div>
                                    <h3 class="nav-font font-bold text-xl text-primary mb-2">Innovation Through Learning</h3>
                                    <p class="text-gray-600 text-sm leading-relaxed">
                                        Students should be encouraged to approach problems creatively, explore different solutions and learn from mistakes. Projects and practical activities can help develop curiosity, collaboration and independent thinking.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- 5 -->
                        <div class="bg-lightBg rounded-2xl p-6 sm:p-8 border border-gray-100 hover:shadow-lg transition">
                            <div class="flex items-start gap-4">
                                <span class="w-10 h-10 rounded-lg bg-primary text-white flex items-center justify-center font-bold text-sm shrink-0">05</span>
                                <div>
                                    <h3 class="nav-font font-bold text-xl text-primary mb-2">Yoga, Meditation and Concentration</h3>
                                    <p class="text-gray-600 text-sm leading-relaxed">
                                        Where incorporated into the school routine, age-appropriate yoga, breathing exercises and meditation can complement classroom learning by encouraging focus, self-awareness and emotional balance.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- 6 -->
                        <div class="bg-lightBg rounded-2xl p-6 sm:p-8 border border-gray-100 hover:shadow-lg transition">
                            <div class="flex items-start gap-4">
                                <span class="w-10 h-10 rounded-lg bg-secondary text-white flex items-center justify-center font-bold text-sm shrink-0">06</span>
                                <div>
                                    <h3 class="nav-font font-bold text-xl text-primary mb-2">Parent–Teacher Partnership</h3>
                                    <p class="text-gray-600 text-sm leading-relaxed">
                                        Regular parent–teacher interactions provide an opportunity to discuss academic progress, behaviour, interests and areas requiring support. Collaboration between school and home helps create a more consistent learning environment.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Callout Objective Box -->
                    <div class="bg-gradient-to-r from-primary to-primaryDark text-white p-8 rounded-2xl shadow-xl mb-12">
                        <span class="inline-block bg-secondary text-white font-bold text-[11px] uppercase tracking-widest px-3 py-1 rounded mb-3">Our Objective</span>
                        <p class="text-lg md:text-xl font-light italic leading-relaxed text-gray-100 mb-2">
                            “Our objective is to make learning a continuous process of understanding, experimentation, reflection and improvement.”
                        </p>
                    </div>

                    <!-- The Academic Philosophy Parents Should Remember -->
                    <div class="bg-primary text-white p-8 rounded-2xl shadow-xl text-center">
                        <span class="bg-secondary text-white text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded inline-block mb-3">
                            The Philosophy Parents Remember
                        </span>
                        <h3 class="nav-font font-extrabold text-2xl md:text-3xl text-yellow-300 mb-3">
                            “Beyond Books. Beyond Boundaries.”
                        </h3>
                        <p class="text-gray-200 text-sm md:text-base leading-relaxed font-light mb-4">
                            We aspire to combine academic excellence with innovation, creativity, mindfulness and strong human values. From rhymes in the early years to scientific inquiry in higher classes, our aim is to make every stage of learning purposeful, engaging and relevant to the future.
                        </p>
                        <p class="text-white font-bold text-base">
                            “We nurture curious minds, creative thinkers and responsible citizens.”
                        </p>
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
            <a href="<?php echo home_url('/senior-secondary/'); ?>" class="flex items-center justify-between p-3.5 rounded-xl transition bg-gray-50 text-gray-700 hover:bg-primary/5 hover:text-primary">
                <span class="flex items-center text-sm">
                    <i class="fas fa-atom mr-3 text-xs text-primary"></i> Senior Secondary (XI–XII)
                </span>
                <i class="fas fa-chevron-right text-xs text-gray-400"></i>
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
            <a href="<?php echo home_url('/teaching-methodology/'); ?>" class="flex items-center justify-between p-3.5 rounded-xl transition bg-primary text-white font-bold shadow-md">
                <span class="flex items-center text-sm">
                    <i class="fas fa-chalkboard-teacher mr-3 text-xs text-secondary"></i> Teaching & Evaluation
                </span>
                <i class="fas fa-chevron-right text-xs text-white"></i>
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