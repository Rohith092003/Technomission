<?php
/* Template Name: Academics Page */
get_header();
?>
<!-- Page Header -->
    <section class="relative py-16 md:py-32 bg-primaryDark overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="<?php echo get_template_directory_uri(); ?>/school images google/63f03e7eda38af09f9012e779a2c2745.webp" alt="Academic Background" class="w-full h-full object-cover opacity-25">
            <div class="absolute inset-0 bg-gradient-to-r from-primaryDark/95 via-primaryDark/85 to-primaryDark/50"></div>
        </div>
        <div class="container mx-auto px-4 relative z-10 max-w-7xl">
            <div class="max-w-3xl">
                <div class="inline-flex items-center gap-2 bg-secondary text-white px-3.5 py-1.5 rounded text-xs font-bold tracking-widest uppercase mb-4 shadow">
                    <i class="fas fa-book-open"></i> Academic Excellence & Character
                </div>
                <h1 class="nav-font font-extrabold text-4xl sm:text-5xl md:text-6xl text-white mb-4 leading-tight">
                    Academics at <span class="text-secondary">TMISB</span>
                </h1>
                <p class="text-xl md:text-2xl text-yellow-300 font-semibold italic mb-6">
                    "Beyond Books. Beyond Boundaries."
                </p>
                <div class="flex items-center text-gray-300 text-sm font-medium">
                    <a href="<?php echo home_url('/'); ?>" class="hover:text-white transition flex items-center"><i class="fas fa-home mr-2"></i> Home</a>
                    <i class="fas fa-chevron-right mx-3 text-xs text-gray-500"></i>
                    <span class="text-secondary font-semibold">Academics</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 1. Academic Philosophy & Overview -->
    <section class="section-padding bg-white relative overflow-hidden" id="overview">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="flex flex-col lg:flex-row gap-16 items-center">
                <!-- Text Content -->
                <div class="w-full lg:w-7/12">
                    <div class="flex items-center mb-3">
                        <span class="w-10 h-1 bg-secondary rounded-full mr-3"></span>
                        <h4 class="text-secondary font-bold text-sm uppercase tracking-widest">Our Educational Philosophy</h4>
                    </div>
                    <h2 class="section-title left-align mb-6">
                        Nurturing Curiosity, Creativity & Lifelong Learning
                    </h2>
                    
                    <p class="text-gray-700 text-lg leading-relaxed mb-5 font-normal">
                        At <strong class="text-primary font-semibold">Techno Mission International School, Bhagalpur</strong>, we believe that education should nurture curiosity, develop creativity and prepare children to meet the challenges of the future. Our academic approach goes beyond textbooks and examinations to encourage independent thinking, innovation, practical learning and the development of strong moral values.
                    </p>
                    <p class="text-gray-600 leading-relaxed mb-5">
                        We recognise that every child is unique and learns differently. Through age-appropriate teaching methods, activity-based learning, creative exploration and continuous guidance, we aim to develop each student's intellectual, physical, emotional and social abilities.
                    </p>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Alongside academic excellence, we emphasise the importance of yoga, meditation, physical fitness, cultural awareness and mindfulness. From learning through rhymes and playful activities in the early years to scientific exploration and innovative thinking in higher classes, we seek to create an environment where learning is meaningful, engaging and enjoyable.
                    </p>

                    <!-- Quote Highlight Box -->
                    <div class="bg-lightBg border-l-4 border-secondary p-5 rounded-r-xl shadow-sm mb-6">
                        <p class="text-primary font-semibold italic text-base md:text-lg mb-1">
                            “Our objective is to nurture confident learners, creative thinkers and responsible citizens who are equipped with knowledge, character and the courage to explore new possibilities.”
                        </p>
                        <span class="text-xs text-gray-500 font-bold uppercase tracking-wider">— Techno Mission Academic Mission</span>
                    </div>

                    <!-- 4 Quick Key Pillars -->
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 pt-2">
                        <div class="p-3 bg-lightBg rounded-xl border border-gray-100 text-center">
                            <i class="fas fa-lightbulb text-secondary text-xl mb-1 block"></i>
                            <span class="text-xs font-bold text-primary">Inquiry & Curiosity</span>
                        </div>
                        <div class="p-3 bg-lightBg rounded-xl border border-gray-100 text-center">
                            <i class="fas fa-spa text-secondary text-xl mb-1 block"></i>
                            <span class="text-xs font-bold text-primary">Yoga & Mindfulness</span>
                        </div>
                        <div class="p-3 bg-lightBg rounded-xl border border-gray-100 text-center">
                            <i class="fas fa-flask text-secondary text-xl mb-1 block"></i>
                            <span class="text-xs font-bold text-primary">Practical Learning</span>
                        </div>
                        <div class="p-3 bg-lightBg rounded-xl border border-gray-100 text-center">
                            <i class="fas fa-shield-alt text-secondary text-xl mb-1 block"></i>
                            <span class="text-xs font-bold text-primary">Moral Character</span>
                        </div>
                    </div>
                </div>
                
                <!-- Image & Graphic Side -->
                <div class="w-full lg:w-5/12 relative">
                    <div class="relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/school images google/Science lab.webp" alt="Students in Classroom" class="rounded-2xl shadow-2xl w-full h-[520px] object-cover">
                        <div class="absolute inset-0 rounded-2xl bg-gradient-to-t from-primaryDark/85 via-transparent to-transparent"></div>
                        
                        <!-- Floating Badge -->
                        <div class="absolute -bottom-6 -left-6 bg-white p-5 rounded-2xl shadow-2xl border border-gray-100 hidden sm:flex items-center gap-4">
                            <div class="w-14 h-14 rounded-xl bg-secondary text-white flex items-center justify-center text-2xl font-bold shadow">
                                <i class="fas fa-award"></i>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 font-bold uppercase tracking-wider">CBSE Affiliated</p>
                                <p class="text-base font-bold text-primary">Senior Secondary (#330331)</p>
                            </div>
                        </div>

                        <!-- Philosophy Card Overlay -->
                        <div class="absolute top-6 left-6 right-6 bg-primary/90 backdrop-blur-sm p-4 rounded-xl text-white border border-white/20">
                            <p class="text-xs uppercase text-yellow-300 font-bold tracking-widest mb-1">Guiding Principle</p>
                            <p class="text-sm font-medium italic">"Beyond Books. Beyond Boundaries."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. Academic Wings & Specialized Pathways (Directory & Subpage Navigation Hub) -->
    <section class="section-padding bg-lightBg border-t border-gray-200" id="academic-wings">
        <div class="container mx-auto px-4 max-w-7xl">
            <!-- Section Title -->
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="inline-block bg-primary/10 text-primary font-bold text-xs uppercase tracking-widest px-4 py-1.5 rounded-full mb-3">
                    Curriculum Framework & Structure
                </span>
                <h4 class="text-secondary font-bold text-sm uppercase tracking-widest mb-2">Our Academic Divisions</h4>
                <h2 class="section-title">Academic Wings & Specialized Programs</h2>
                <p class="text-gray-600 text-base leading-relaxed">
                    Explore our progressive, stage-by-stage learning continuum designed to nurture curiosity from foundational early childhood to competitive national entrance examinations.
                </p>
            </div>

            <!-- 6 Academic Division Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- 1. Pre-Primary Wing -->
                <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 flex flex-col justify-between group">
                    <div>
                        <div class="flex items-center justify-between mb-5">
                            <span class="bg-primary/10 text-primary font-bold text-xs uppercase tracking-wider px-3.5 py-1.5 rounded-full">
                                Nursery, LKG & UKG
                            </span>
                            <div class="w-12 h-12 rounded-xl bg-primary text-white flex items-center justify-center text-xl shadow group-hover:scale-110 transition duration-300">
                                <i class="fas fa-shapes"></i>
                            </div>
                        </div>
                        <h3 class="nav-font font-bold text-2xl text-primary mb-2 group-hover:text-secondary transition">
                            Pre-Primary Wing
                        </h3>
                        <p class="text-secondary font-semibold text-sm italic mb-4">
                            "A joyful beginning to lifelong learning"
                        </p>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6 font-normal">
                            Stimulating early childhood years through play-way pedagogy, rhymes, storytelling, music, movement, and activity-based learning that inspire natural curiosity and gross/fine motor skills.
                        </p>
                        <!-- Key Highlights Chips -->
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="text-[11px] font-semibold bg-gray-100 text-gray-700 px-2.5 py-1 rounded-md">Play-Way Learning</span>
                            <span class="text-[11px] font-semibold bg-gray-100 text-gray-700 px-2.5 py-1 rounded-md">Rhymes & Stories</span>
                            <span class="text-[11px] font-semibold bg-gray-100 text-gray-700 px-2.5 py-1 rounded-md">Motor Skills</span>
                            <span class="text-[11px] font-semibold bg-gray-100 text-gray-700 px-2.5 py-1 rounded-md">Yoga & Calmness</span>
                        </div>
                    </div>
                    <div>
                        <a href="<?php echo home_url('/pre-primary/'); ?>" class="inline-flex items-center justify-between w-full bg-primary hover:bg-secondary text-white font-bold py-3 px-5 rounded-xl text-sm transition duration-300 shadow group-hover:shadow-md">
                            <span>Explore Pre-Primary Wing</span>
                            <i class="fas fa-arrow-right text-xs transform group-hover:translate-x-1 transition"></i>
                        </a>
                    </div>
                </div>

                <!-- 2. Primary Wing -->
                <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 flex flex-col justify-between group">
                    <div>
                        <div class="flex items-center justify-between mb-5">
                            <span class="bg-secondary/10 text-secondary font-bold text-xs uppercase tracking-wider px-3.5 py-1.5 rounded-full">
                                Classes I – V
                            </span>
                            <div class="w-12 h-12 rounded-xl bg-secondary text-white flex items-center justify-center text-xl shadow group-hover:scale-110 transition duration-300">
                                <i class="fas fa-cubes"></i>
                            </div>
                        </div>
                        <h3 class="nav-font font-bold text-2xl text-primary mb-2 group-hover:text-secondary transition">
                            Primary Wing
                        </h3>
                        <p class="text-secondary font-semibold text-sm italic mb-4">
                            "Building strong foundations and nurturing curiosity"
                        </p>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6 font-normal">
                            Developing fundamental literacy, numeracy, language communication, environmental stewardship, computer education, and interactive project-based learning.
                        </p>
                        <!-- Key Highlights Chips -->
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="text-[11px] font-semibold bg-gray-100 text-gray-700 px-2.5 py-1 rounded-md">Literacy & Numeracy</span>
                            <span class="text-[11px] font-semibold bg-gray-100 text-gray-700 px-2.5 py-1 rounded-md">Communication</span>
                            <span class="text-[11px] font-semibold bg-gray-100 text-gray-700 px-2.5 py-1 rounded-md">Eco Awareness</span>
                            <span class="text-[11px] font-semibold bg-gray-100 text-gray-700 px-2.5 py-1 rounded-md">Project Learning</span>
                        </div>
                    </div>
                    <div>
                        <a href="<?php echo home_url('/primary/'); ?>" class="inline-flex items-center justify-between w-full bg-primary hover:bg-secondary text-white font-bold py-3 px-5 rounded-xl text-sm transition duration-300 shadow group-hover:shadow-md">
                            <span>Explore Primary Wing</span>
                            <i class="fas fa-arrow-right text-xs transform group-hover:translate-x-1 transition"></i>
                        </a>
                    </div>
                </div>

                <!-- 3. Middle & Secondary Wing -->
                <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 flex flex-col justify-between group">
                    <div>
                        <div class="flex items-center justify-between mb-5">
                            <span class="bg-primary/10 text-primary font-bold text-xs uppercase tracking-wider px-3.5 py-1.5 rounded-full">
                                Classes VI – X
                            </span>
                            <div class="w-12 h-12 rounded-xl bg-primary text-white flex items-center justify-center text-xl shadow group-hover:scale-110 transition duration-300">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                        </div>
                        <h3 class="nav-font font-bold text-2xl text-primary mb-2 group-hover:text-secondary transition">
                            Middle & Secondary Wing
                        </h3>
                        <p class="text-secondary font-semibold text-sm italic mb-4">
                            "Critical thinking, innovation and academic excellence"
                        </p>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6 font-normal">
                            Deep conceptual learning, experiential science laboratories, STEM-oriented creative problem-solving, yoga well-being, and structured CBSE board examination preparation.
                        </p>
                        <!-- Key Highlights Chips -->
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="text-[11px] font-semibold bg-gray-100 text-gray-700 px-2.5 py-1 rounded-md">Conceptual Depth</span>
                            <span class="text-[11px] font-semibold bg-gray-100 text-gray-700 px-2.5 py-1 rounded-md">Science Labs</span>
                            <span class="text-[11px] font-semibold bg-gray-100 text-gray-700 px-2.5 py-1 rounded-md">STEM Projects</span>
                            <span class="text-[11px] font-semibold bg-gray-100 text-gray-700 px-2.5 py-1 rounded-md">Board Prep</span>
                        </div>
                    </div>
                    <div>
                        <a href="<?php echo home_url('/secondary/'); ?>" class="inline-flex items-center justify-between w-full bg-primary hover:bg-secondary text-white font-bold py-3 px-5 rounded-xl text-sm transition duration-300 shadow group-hover:shadow-md">
                            <span>Explore Secondary Wing</span>
                            <i class="fas fa-arrow-right text-xs transform group-hover:translate-x-1 transition"></i>
                        </a>
                    </div>
                </div>

                <!-- 4. Senior Secondary Wing -->
                <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 flex flex-col justify-between group">
                    <div>
                        <div class="flex items-center justify-between mb-5">
                            <span class="bg-secondary/10 text-secondary font-bold text-xs uppercase tracking-wider px-3.5 py-1.5 rounded-full">
                                Classes XI – XII
                            </span>
                            <div class="w-12 h-12 rounded-xl bg-secondary text-white flex items-center justify-center text-xl shadow group-hover:scale-110 transition duration-300">
                                <i class="fas fa-atom"></i>
                            </div>
                        </div>
                        <h3 class="nav-font font-bold text-2xl text-primary mb-2 group-hover:text-secondary transition">
                            Senior Secondary Wing
                        </h3>
                        <p class="text-secondary font-semibold text-sm italic mb-4">
                            "Specialisation, independent thinking and future readiness"
                        </p>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6 font-normal">
                            Rigorous specialisation in Science (PCM / PCB) and Commerce streams, pre-university electives, research-oriented inquiry, and holistic personal discipline.
                        </p>
                        <!-- Key Highlights Chips -->
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="text-[11px] font-semibold bg-gray-100 text-gray-700 px-2.5 py-1 rounded-md">Science (PCM/PCB)</span>
                            <span class="text-[11px] font-semibold bg-gray-100 text-gray-700 px-2.5 py-1 rounded-md">Commerce Stream</span>
                            <span class="text-[11px] font-semibold bg-gray-100 text-gray-700 px-2.5 py-1 rounded-md">Electives</span>
                            <span class="text-[11px] font-semibold bg-gray-100 text-gray-700 px-2.5 py-1 rounded-md">Higher Ed Ready</span>
                        </div>
                    </div>
                    <div>
                        <a href="<?php echo home_url('/senior-secondary/'); ?>" class="inline-flex items-center justify-between w-full bg-primary hover:bg-secondary text-white font-bold py-3 px-5 rounded-xl text-sm transition duration-300 shadow group-hover:shadow-md">
                            <span>Explore Senior Secondary</span>
                            <i class="fas fa-arrow-right text-xs transform group-hover:translate-x-1 transition"></i>
                        </a>
                    </div>
                </div>

                <!-- 5. Integrated Competitive Preparation -->
                <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 flex flex-col justify-between group">
                    <div>
                        <div class="flex items-center justify-between mb-5">
                            <span class="bg-primary/10 text-primary font-bold text-xs uppercase tracking-wider px-3.5 py-1.5 rounded-full">
                                Entrance Coaching
                            </span>
                            <div class="w-12 h-12 rounded-xl bg-primary text-white flex items-center justify-center text-xl shadow group-hover:scale-110 transition duration-300">
                                <i class="fas fa-trophy"></i>
                            </div>
                        </div>
                        <h3 class="nav-font font-bold text-2xl text-primary mb-2 group-hover:text-secondary transition">
                            Integrated JEE / NEET Prep
                        </h3>
                        <p class="text-secondary font-semibold text-sm italic mb-4">
                            "Turning aspirations into purposeful preparation"
                        </p>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6 font-normal">
                            Systematic entrance examination training complementing CBSE syllabus with fundamental conceptual mastery, guided doubt resolution, and mock testing.
                        </p>
                        <!-- Key Highlights Chips -->
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="text-[11px] font-semibold bg-gray-100 text-gray-700 px-2.5 py-1 rounded-md">Conceptual Clarity</span>
                            <span class="text-[11px] font-semibold bg-gray-100 text-gray-700 px-2.5 py-1 rounded-md">Syllabus Sync</span>
                            <span class="text-[11px] font-semibold bg-gray-100 text-gray-700 px-2.5 py-1 rounded-md">Doubt Clinics</span>
                            <span class="text-[11px] font-semibold bg-gray-100 text-gray-700 px-2.5 py-1 rounded-md">Mock Tests</span>
                        </div>
                    </div>
                    <div>
                        <a href="<?php echo home_url('/competitive-coaching/'); ?>" class="inline-flex items-center justify-between w-full bg-primary hover:bg-secondary text-white font-bold py-3 px-5 rounded-xl text-sm transition duration-300 shadow group-hover:shadow-md">
                            <span>Explore JEE & NEET Prep</span>
                            <i class="fas fa-arrow-right text-xs transform group-hover:translate-x-1 transition"></i>
                        </a>
                    </div>
                </div>

                <!-- 6. Academic Methodology & Evaluation -->
                <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 flex flex-col justify-between group">
                    <div>
                        <div class="flex items-center justify-between mb-5">
                            <span class="bg-secondary/10 text-secondary font-bold text-xs uppercase tracking-wider px-3.5 py-1.5 rounded-full">
                                Pedagogy & Assessment
                            </span>
                            <div class="w-12 h-12 rounded-xl bg-secondary text-white flex items-center justify-center text-xl shadow group-hover:scale-110 transition duration-300">
                                <i class="fas fa-chalkboard-teacher"></i>
                            </div>
                        </div>
                        <h3 class="nav-font font-bold text-2xl text-primary mb-2 group-hover:text-secondary transition">
                            Methodology & Evaluation
                        </h3>
                        <p class="text-secondary font-semibold text-sm italic mb-4">
                            "Learning, reflection and continuous improvement"
                        </p>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6 font-normal">
                            Student-centred teaching pedagogy combining active discussions, continuous assessments, structured term examinations, mindfulness, and parent-teacher collaboration.
                        </p>
                        <!-- Key Highlights Chips -->
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="text-[11px] font-semibold bg-gray-100 text-gray-700 px-2.5 py-1 rounded-md">Student-Centred</span>
                            <span class="text-[11px] font-semibold bg-gray-100 text-gray-700 px-2.5 py-1 rounded-md">Continuous Testing</span>
                            <span class="text-[11px] font-semibold bg-gray-100 text-gray-700 px-2.5 py-1 rounded-md">Term Exams</span>
                            <span class="text-[11px] font-semibold bg-gray-100 text-gray-700 px-2.5 py-1 rounded-md">Parent Partnership</span>
                        </div>
                    </div>
                    <div>
                        <a href="<?php echo home_url('/teaching-methodology/'); ?>" class="inline-flex items-center justify-between w-full bg-primary hover:bg-secondary text-white font-bold py-3 px-5 rounded-xl text-sm transition duration-300 shadow group-hover:shadow-md">
                            <span>Explore Methodology</span>
                            <i class="fas fa-arrow-right text-xs transform group-hover:translate-x-1 transition"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 8. Grand Academic Philosophy Banner -->
    <section class="py-20 bg-primary text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-primaryDark via-primary to-primaryDark opacity-95"></div>
        <div class="container mx-auto px-4 max-w-5xl relative z-10 text-center">
            <span class="inline-block bg-secondary text-white font-bold text-xs uppercase tracking-widest px-4 py-1.5 rounded-full mb-4 shadow">
                Our Core Educational Commitment
            </span>
            <h2 class="nav-font font-extrabold text-3xl md:text-5xl text-yellow-300 mb-6">
                “Beyond Books. Beyond Boundaries.”
            </h2>
            <p class="text-lg md:text-xl text-gray-100 leading-relaxed font-light mb-8 max-w-3xl mx-auto">
                We aspire to combine academic excellence with innovation, creativity, mindfulness and strong human values. From rhymes in the early years to scientific inquiry in higher classes, our aim is to make every stage of learning purposeful, engaging and relevant to the future.
            </p>
            <div class="bg-white/10 backdrop-blur-md p-6 rounded-2xl border border-white/20 max-w-2xl mx-auto mb-8">
                <p class="text-white font-bold text-base md:text-lg">
                    “We nurture curious minds, creative thinkers and responsible citizens.”
                </p>
            </div>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="<?php echo home_url('/admissions/'); ?>" class="bg-secondary hover:bg-red-700 text-white font-bold py-3.5 px-8 rounded-lg shadow-xl uppercase tracking-wider text-sm transition">
                    Admissions Enquiry 2026–27
                </a>
                <a href="<?php echo home_url('/contact/'); ?>" class="bg-white/10 hover:bg-white/20 text-white border border-white/30 font-bold py-3.5 px-8 rounded-lg shadow uppercase tracking-wider text-sm transition">
                    Contact Academic Office
                </a>
            </div>
        </div>
    </section>

    <!-- Footer (Reused) -->
    
<?php
get_footer();
?>