<?php
/* Template Name: Pre Primary Page */
get_header();
?>
<!-- Page Header -->
    <section class="relative py-16 md:py-28 bg-primaryDark overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1587654780291-39c9404d746b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80" alt="Pre-Primary Class" class="w-full h-full object-cover opacity-25">
            <div class="absolute inset-0 bg-gradient-to-r from-primaryDark/95 via-primaryDark/85 to-primaryDark/50"></div>
        </div>
        <div class="container mx-auto px-4 relative z-10 max-w-7xl">
            <div class="max-w-3xl">
                <div class="inline-flex items-center gap-2 bg-secondary text-white px-3.5 py-1.5 rounded text-xs font-bold tracking-widest uppercase mb-4 shadow">
                    <i class="fas fa-shapes"></i> Classes: Nursery, LKG & UKG
                </div>
                <h1 class="nav-font font-extrabold text-4xl sm:text-5xl md:text-6xl text-white mb-4 leading-tight">
                    Pre-Primary <span class="text-secondary">Wing</span>
                </h1>
                <p class="text-xl md:text-2xl text-yellow-300 font-semibold italic mb-6">
                    "A joyful beginning to lifelong learning"
                </p>
                <div class="flex items-center text-gray-300 text-sm font-medium">
                    <a href="<?php echo home_url('/'); ?>" class="hover:text-white transition flex items-center"><i class="fas fa-home mr-2"></i> Home</a>
                    <i class="fas fa-chevron-right mx-3 text-xs text-gray-500"></i>
                    <a href="<?php echo home_url('/academics/'); ?>" class="hover:text-white transition">Academics</a>
                    <i class="fas fa-chevron-right mx-3 text-xs text-gray-500"></i>
                    <span class="text-secondary font-semibold">Pre-Primary Wing</span>
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
                            Nurturing Early Wonder, Joy & Self-Discovery
                        </h2>
                        <p class="text-gray-700 text-lg leading-relaxed mb-6 font-normal">
                            The early years form the foundation of a child's learning journey. At <strong class="text-primary font-semibold">TMISB</strong>, we aim to make these years joyful, stimulating and enriching through play-way pedagogy, rhymes, storytelling, music, movement and activity-based learning.
                        </p>
                        <p class="text-gray-600 leading-relaxed mb-6">
                            Every child enters school with natural curiosity, imagination and excitement. We ensure they are met with gentle guidance, warm smiles and colorful environments where learning feels like an adventure.
                        </p>
                    </div>

                    <!-- 5 Core Pillars Detailed Grid -->
                    <div class="space-y-6 mb-12">
                        <!-- Pillar 1 -->
                        <div class="bg-lightBg rounded-2xl p-6 sm:p-8 border border-gray-100 hover:shadow-lg transition">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-xl bg-primary text-white flex items-center justify-center text-xl shrink-0 shadow">
                                    <i class="fas fa-puzzle-piece"></i>
                                </div>
                                <div>
                                    <h3 class="nav-font font-bold text-xl text-primary mb-2">Play-Way and Activity-Based Learning</h3>
                                    <p class="text-gray-600 text-sm leading-relaxed">
                                        Children explore concepts through games, puzzles, building blocks, art, colours, shapes and hands-on activities. These experiences help them understand their surroundings while developing curiosity, creativity and confidence.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Pillar 2 -->
                        <div class="bg-lightBg rounded-2xl p-6 sm:p-8 border border-gray-100 hover:shadow-lg transition">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-xl bg-secondary text-white flex items-center justify-center text-xl shrink-0 shadow">
                                    <i class="fas fa-book-reader"></i>
                                </div>
                                <div>
                                    <h3 class="nav-font font-bold text-xl text-primary mb-2">Learning Through Rhymes and Stories</h3>
                                    <p class="text-gray-600 text-sm leading-relaxed">
                                        Rhymes, songs, storytelling and rhythmic activities make learning enjoyable and memorable. They help children develop vocabulary, pronunciation, listening skills, memory, language fluency and an early appreciation of rhythm and expression.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Pillar 3 -->
                        <div class="bg-lightBg rounded-2xl p-6 sm:p-8 border border-gray-100 hover:shadow-lg transition">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-xl bg-primary text-white flex items-center justify-center text-xl shrink-0 shadow">
                                    <i class="fas fa-child"></i>
                                </div>
                                <div>
                                    <h3 class="nav-font font-bold text-xl text-primary mb-2">Cognitive and Motor Development</h3>
                                    <p class="text-gray-600 text-sm leading-relaxed">
                                        Age-appropriate activities involving counting, sorting, drawing, colouring, clay modelling and movement help strengthen observation, logical thinking, hand-eye coordination and fine and gross motor skills.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Pillar 4 -->
                        <div class="bg-lightBg rounded-2xl p-6 sm:p-8 border border-gray-100 hover:shadow-lg transition">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-xl bg-secondary text-white flex items-center justify-center text-xl shrink-0 shadow">
                                    <i class="fas fa-spa"></i>
                                </div>
                                <div>
                                    <h3 class="nav-font font-bold text-xl text-primary mb-2">Yoga and Meditation</h3>
                                    <p class="text-gray-600 text-sm leading-relaxed">
                                        Simple, age-appropriate yoga postures, breathing activities and short guided relaxation sessions can help children develop body awareness, balance, concentration and calmness. These activities are introduced in an enjoyable and supportive manner.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Pillar 5 -->
                        <div class="bg-lightBg rounded-2xl p-6 sm:p-8 border border-gray-100 hover:shadow-lg transition">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-xl bg-primary text-white flex items-center justify-center text-xl shrink-0 shadow">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <div>
                                    <h3 class="nav-font font-bold text-xl text-primary mb-2">Social and Emotional Growth</h3>
                                    <p class="text-gray-600 text-sm leading-relaxed">
                                        Group play and collaborative activities encourage sharing, cooperation, patience, empathy and respect for others. Children learn mutual respect and positive emotional communication in a secure environment.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Callout Quote Box -->
                    <div class="bg-gradient-to-r from-primary to-primaryDark text-white p-8 rounded-2xl shadow-xl mb-10">
                        <span class="inline-block bg-secondary text-white font-bold text-[11px] uppercase tracking-widest px-3 py-1 rounded mb-3">Our Sacred Commitment</span>
                        <p class="text-lg md:text-xl font-light italic leading-relaxed text-gray-100 mb-2">
                            “Our aim is to provide a nurturing environment in which every child feels encouraged to explore, express themselves and develop a positive attitude towards learning.”
                        </p>
                        <span class="text-xs text-yellow-300 font-bold uppercase tracking-wider">— Pre-Primary Faculty, TMISB</span>
                    </div>

                    <!-- Next Academic Stage Navigation -->
                    <div class="p-6 bg-lightBg rounded-2xl border border-gray-200 flex items-center justify-between">
                        <div>
                            <span class="text-xs uppercase text-gray-500 font-bold tracking-wider block">Next Academic Stage</span>
                            <h4 class="nav-font font-bold text-lg text-primary">Primary Wing (Classes I–V)</h4>
                        </div>
                        <a href="<?php echo home_url('/primary/'); ?>" class="inline-flex items-center bg-primary hover:bg-secondary text-white font-bold py-2.5 px-5 rounded-lg text-xs uppercase tracking-wider transition">
                            Explore Primary <i class="fas fa-arrow-right ml-2"></i>
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
            <a href="<?php echo home_url('/pre-primary/'); ?>" class="flex items-center justify-between p-3.5 rounded-xl transition bg-primary text-white font-bold shadow-md">
                <span class="flex items-center text-sm">
                    <i class="fas fa-shapes mr-3 text-xs text-secondary"></i> Pre-Primary Wing (Nursery–UKG)
                </span>
                <i class="fas fa-chevron-right text-xs text-white"></i>
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