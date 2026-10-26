<?php
/* Template Name: About Page */
get_header();
?>
<!-- Page Header -->
    <section class="relative py-16 md:py-32 bg-primaryDark overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/morning-assembly-students.jpg" alt="Campus Background" class="w-full h-full object-cover opacity-30">
            <div class="absolute inset-0 bg-gradient-to-r from-primaryDark/95 via-primaryDark/80 to-primaryDark/40"></div>
        </div>
        <div class="container mx-auto px-4 relative z-10 max-w-7xl">
            <div class="max-w-3xl">
                <div class="inline-flex items-center gap-2 bg-secondary text-white px-3.5 py-1.5 rounded text-xs font-bold tracking-widest uppercase mb-4 shadow">
                    <i class="fas fa-graduation-cap"></i> Discover TMISB
                </div>
                <h1 class="nav-font font-extrabold text-4xl sm:text-5xl md:text-6xl text-white mb-4 leading-tight">
                    About Techno Mission<br><span class="text-secondary">International School</span>
                </h1>
                <p class="text-xl md:text-2xl text-yellow-300 font-semibold italic mb-6">
                    "We Share Your Dreams. We Shape Your Future."
                </p>
                <div class="flex items-center text-gray-300 text-sm font-medium">
                    <a href="<?php echo home_url('/'); ?>" class="hover:text-white transition flex items-center"><i class="fas fa-home mr-2"></i> Home</a>
                    <i class="fas fa-chevron-right mx-3 text-xs text-gray-500"></i>
                    <span class="text-secondary font-semibold">About Us</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 1. Overview & Philosophy -->
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
                        Nurturing Knowledge, Character & Future Leadership
                    </h2>
                    
                    <p class="text-gray-700 text-lg leading-relaxed mb-5 font-normal">
                        Education is not merely about academic achievement; it is about discovering potential, developing character, and preparing young minds for a meaningful future.
                    </p>
                    <p class="text-gray-600 leading-relaxed mb-5">
                        <strong class="text-primary font-semibold">Techno Mission International School, Bhagalpur (TMISB)</strong> is committed to nurturing knowledgeable, confident, and responsible individuals through a balanced approach to education. We believe every child has unique abilities, aspirations, and potential. Our responsibility is to provide the guidance, opportunities, and learning environment that enable every student to discover and develop those strengths.
                    </p>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        A reputed, first-of-its-kind school in the Silk City, Bhagalpur, Techno Mission provides academic excellence and all-round development to each student, blending Indian values with a global outlook. Rooted in Yoga, meditation, cultural and spiritual values, our school visualizes knowledge as power. We fire the imagination with greater zeal and try to reach the zenith of purity and success.
                    </p>

                    <!-- Quote Box -->
                    <div class="bg-lightBg border-l-4 border-secondary p-5 rounded-r-xl shadow-sm mb-6">
                        <p class="text-primary font-semibold italic text-base md:text-lg mb-1">
                            “What you are is God's gift to you,<br>
                            What you become is your gift to God.”
                        </p>
                        <span class="text-xs text-gray-500 font-bold uppercase tracking-wider">— Guiding Maxim at TMISB</span>
                    </div>

                    <p class="text-gray-600 text-sm leading-relaxed">
                        The curriculum of the school is designed as per the <strong class="text-primary font-semibold">CBSE Board</strong>. Welcoming students from CBSE, ICSE, and Bihar Board backgrounds, our school also provides synchronized on-campus facilities for competitive examinations including <strong class="text-primary">IIT-JEE, NEET, CA, and CLAT</strong>.
                    </p>
                </div>
                
                <!-- Image & Badge Side -->
                <div class="w-full lg:w-5/12 relative">
                    <div class="relative bg-white rounded-2xl p-3 shadow-xl border border-gray-100 group">
                        <div class="relative rounded-xl overflow-hidden shadow-sm aspect-[16/11]">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/client-images/techno-mission-group-photo.jpg" alt="Techno Mission International School Students & Campus" class="w-full h-full object-cover object-top transition duration-500 group-hover:scale-[1.02]">
                            <div class="absolute inset-0 bg-gradient-to-t from-primaryDark/85 via-transparent to-transparent"></div>
                            
                            <!-- Badges on photo -->
                            <div class="absolute top-3 right-3 bg-primary text-white text-[10px] font-bold uppercase px-2.5 py-1 rounded-full shadow">
                                Silk City Bhagalpur
                            </div>
                            <div class="absolute bottom-3 left-3 right-3 text-white">
                                <span class="bg-secondary text-white text-[10px] font-bold uppercase tracking-wider px-2 py-0.5 rounded shadow">CBSE Affiliation 330331</span>
                                <p class="text-xs font-semibold text-gray-200 mt-1">Our Senior Scholars &amp; Campus Building</p>
                            </div>
                        </div>
                        
                        <!-- Floating Badge -->
                        <div class="mt-3 bg-lightBg p-3.5 rounded-xl border border-gray-100 flex items-center justify-between gap-4">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 rounded-lg bg-secondary text-white flex items-center justify-center text-xl font-bold shadow text-white">
                                    29+
                                </div>
                                <div>
                                    <p class="text-[10px] text-gray-500 font-bold uppercase tracking-wider leading-none">Years of</p>
                                    <p class="text-base font-bold text-primary leading-tight">Educational Excellence</p>
                                </div>
                            </div>
                            <span class="bg-primary/10 text-primary text-[11px] font-bold uppercase px-2.5 py-1 rounded-md">
                                Est. 1997
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. Vision & Mission -->
    <section class="py-20 bg-lightBg border-y border-gray-100 relative" id="vision-mission">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-16">
                <h4 class="text-secondary font-bold text-sm uppercase tracking-widest mb-2">Our Purpose</h4>
                <h2 class="section-title">Vision & Mission</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <!-- Vision Card -->
                <div class="bg-white rounded-2xl p-8 md:p-10 shadow-lg border-t-4 border-primary hover:shadow-2xl transition duration-300 relative overflow-hidden group">
                    <div class="w-16 h-16 rounded-2xl bg-primary/10 text-primary flex items-center justify-center text-3xl mb-6 group-hover:bg-primary group-hover:text-white transition duration-300">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3 class="nav-font font-bold text-2xl md:text-3xl text-primary mb-4">Our Vision</h3>
                    <p class="text-gray-600 leading-relaxed text-base md:text-lg">
                        To provide quality education to our offspring, to make them find their choices, explore their talents and develop leadership skills.
                    </p>
                </div>

                <!-- Mission Card -->
                <div class="bg-white rounded-2xl p-8 md:p-10 shadow-lg border-t-4 border-secondary hover:shadow-2xl transition duration-300 relative overflow-hidden group">
                    <div class="w-16 h-16 rounded-2xl bg-secondary/10 text-secondary flex items-center justify-center text-3xl mb-6 group-hover:bg-secondary group-hover:text-white transition duration-300">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3 class="nav-font font-bold text-2xl md:text-3xl text-primary mb-4">Our Mission</h3>
                    <p class="text-gray-600 leading-relaxed text-base md:text-lg mb-4">
                        Pursuing dreams against all odds.
                    </p>
                    <p class="text-gray-600 leading-relaxed text-sm md:text-base">
                        Pushing boundaries to design a high-quality curriculum and a supportive environment for students to excel in all fields. Our learning environment encourages intellectual curiosity, critical thinking and cooperation. We aim at promoting a culture of enduring educational excellence and well-being at the mental and spiritual levels.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Our Core Values -->
    <section class="section-padding bg-white" id="values">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-16">
                <h4 class="text-secondary font-bold text-sm uppercase tracking-widest mb-2">Character Building</h4>
                <h2 class="section-title">Our Core Values</h2>
                <p class="text-gray-600 max-w-2xl mx-auto text-base">
                    Shaping our students into responsible citizens and better human beings through enduring principles:
                </p>
            </div>

            <!-- 9 Values Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                
                <!-- 1. Compassion -->
                <div class="p-6 rounded-xl bg-lightBg border border-gray-100 hover:border-primary/30 hover:shadow-lg transition group">
                    <div class="w-12 h-12 rounded-lg bg-primary/10 text-primary flex items-center justify-center text-xl mb-4 group-hover:bg-primary group-hover:text-white transition">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h4 class="nav-font font-bold text-lg text-primary mb-2">Compassion</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">Empathy, kindness, and understanding toward others in our shared society.</p>
                </div>

                <!-- 2. Integrity -->
                <div class="p-6 rounded-xl bg-lightBg border border-gray-100 hover:border-primary/30 hover:shadow-lg transition group">
                    <div class="w-12 h-12 rounded-lg bg-primary/10 text-primary flex items-center justify-center text-xl mb-4 group-hover:bg-primary group-hover:text-white transition">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <h4 class="nav-font font-bold text-lg text-primary mb-2">Integrity</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">Unwavering honesty, ethical choices, and personal moral uprightness.</p>
                </div>

                <!-- 3. Diversity -->
                <div class="p-6 rounded-xl bg-lightBg border border-gray-100 hover:border-primary/30 hover:shadow-lg transition group">
                    <div class="w-12 h-12 rounded-lg bg-primary/10 text-primary flex items-center justify-center text-xl mb-4 group-hover:bg-primary group-hover:text-white transition">
                        <i class="fas fa-users"></i>
                    </div>
                    <h4 class="nav-font font-bold text-lg text-primary mb-2">Diversity</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">Respecting individual differences, diverse backgrounds, and multifaceted ideas.</p>
                </div>

                <!-- 4. Respect -->
                <div class="p-6 rounded-xl bg-lightBg border border-gray-100 hover:border-primary/30 hover:shadow-lg transition group">
                    <div class="w-12 h-12 rounded-lg bg-primary/10 text-primary flex items-center justify-center text-xl mb-4 group-hover:bg-primary group-hover:text-white transition">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h4 class="nav-font font-bold text-lg text-primary mb-2">Respect</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">Valuing teachers, parents, peers, environment, and our collective cultural heritage.</p>
                </div>

                <!-- 5. Service -->
                <div class="p-6 rounded-xl bg-lightBg border border-gray-100 hover:border-primary/30 hover:shadow-lg transition group">
                    <div class="w-12 h-12 rounded-lg bg-primary/10 text-primary flex items-center justify-center text-xl mb-4 group-hover:bg-primary group-hover:text-white transition">
                        <i class="fas fa-hand-holding-heart"></i>
                    </div>
                    <h4 class="nav-font font-bold text-lg text-primary mb-2">Service</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">Commitment to giving back to society and contributing positively to humanity.</p>
                </div>

                <!-- 6. Responsibility -->
                <div class="p-6 rounded-xl bg-lightBg border border-gray-100 hover:border-primary/30 hover:shadow-lg transition group">
                    <div class="w-12 h-12 rounded-lg bg-primary/10 text-primary flex items-center justify-center text-xl mb-4 group-hover:bg-primary group-hover:text-white transition">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h4 class="nav-font font-bold text-lg text-primary mb-2">Responsibility</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">Owning one's actions, duties, intellectual discipline, and civic obligations.</p>
                </div>

                <!-- 7. Innovation -->
                <div class="p-6 rounded-xl bg-lightBg border border-gray-100 hover:border-primary/30 hover:shadow-lg transition group">
                    <div class="w-12 h-12 rounded-lg bg-primary/10 text-primary flex items-center justify-center text-xl mb-4 group-hover:bg-primary group-hover:text-white transition">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h4 class="nav-font font-bold text-lg text-primary mb-2">Innovation</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">Fostering creative exploration, new technologies, curiosity, and fresh solutions.</p>
                </div>

                <!-- 8. Pursuing Excellence -->
                <div class="p-6 rounded-xl bg-lightBg border border-gray-100 hover:border-primary/30 hover:shadow-lg transition group">
                    <div class="w-12 h-12 rounded-lg bg-primary/10 text-primary flex items-center justify-center text-xl mb-4 group-hover:bg-primary group-hover:text-white transition">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <h4 class="nav-font font-bold text-lg text-primary mb-2">Pursuing Excellence</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">Striving continuously to achieve the highest standards in academics, sports, and character.</p>
                </div>

                <!-- 9. Experiential Learning -->
                <div class="p-6 rounded-xl bg-lightBg border border-gray-100 hover:border-primary/30 hover:shadow-lg transition group">
                    <div class="w-12 h-12 rounded-lg bg-primary/10 text-primary flex items-center justify-center text-xl mb-4 group-hover:bg-primary group-hover:text-white transition">
                        <i class="fas fa-flask"></i>
                    </div>
                    <h4 class="nav-font font-bold text-lg text-primary mb-2">Experiential Learning</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">Learning by doing through experiments, practical projects, discussions, and field exploration.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- 4. Pedagogy, Talent, Tradition & Yoga/Meditation -->
    <section class="section-padding bg-lightBg border-t border-gray-100">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-16">
                <h4 class="text-secondary font-bold text-sm uppercase tracking-widest mb-2">Holistic Dimensions</h4>
                <h2 class="section-title">Nurturing Mind, Body & Soul</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1: Pedagogy -->
                <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100 hover:shadow-xl transition">
                    <div class="w-14 h-14 rounded-xl bg-primary text-white flex items-center justify-center text-2xl mb-6 shadow-md">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                    <h3 class="nav-font font-bold text-xl text-primary mb-3">Student-Centered Pedagogy</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">
                        Our pedagogy is rooted in the belief that every child is a unique learner with the potential to excel. We follow a student-centered and experiential approach that makes learning meaningful, engaging, and enjoyable.
                    </p>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Our teachers provide personalized guidance, conceptual clarity, and create an inclusive learning atmosphere.
                    </p>
                </div>

                <!-- Card 2: Talent & Tradition -->
                <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100 hover:shadow-xl transition">
                    <div class="w-14 h-14 rounded-xl bg-secondary text-white flex items-center justify-center text-2xl mb-6 shadow-md">
                        <i class="fas fa-music"></i>
                    </div>
                    <h3 class="nav-font font-bold text-xl text-primary mb-3">Talent & Tradition</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">
                        The school provides students a platform to explore their artistic and cultural talents through music, dance, dramatics, and diverse cultural celebrations. Students are encouraged to express themselves with confidence and creativity.
                    </p>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Celebrations of national festivals and diverse traditions further foster respect for our shared Indian heritage and values.
                    </p>
                </div>

                <!-- Card 3: Yoga & Meditation -->
                <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100 hover:shadow-xl transition">
                    <div class="w-14 h-14 rounded-xl bg-primary text-white flex items-center justify-center text-2xl mb-6 shadow-md">
                        <i class="fas fa-spa"></i>
                    </div>
                    <h3 class="nav-font font-bold text-xl text-primary mb-3">Yoga & Meditation</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">
                        A calm mind and a healthy body form the foundation for meaningful learning. Our yoga and meditation sessions help students develop physical strength, concentration, and inner balance.
                    </p>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Through these practices, students learn to manage stress, improve focus, and cultivate mindfulness and balance in daily life.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. CBSE Affiliation Verification Strip -->
    <section class="py-12 bg-primary text-white relative shadow-inner" id="affiliation">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-8">
                <div>
                    <span class="inline-block bg-secondary text-white text-[11px] font-bold uppercase tracking-wider px-3 py-1 rounded mb-2">
                        Official Board Credentials
                    </span>
                    <h3 class="nav-font font-bold text-2xl md:text-3xl text-white mb-2">
                        CBSE Affiliation: Senior Secondary Level
                    </h3>
                    <p class="text-gray-300 text-sm max-w-2xl">
                        Techno Mission International School is recognized in the Central Board of Secondary Education (CBSE) directory. Managed by <strong class="text-white">Jagriti Charitable Trust</strong>.
                    </p>
                </div>
                <div class="flex flex-wrap items-center gap-6 bg-white/10 p-6 rounded-2xl backdrop-blur-sm border border-white/20">
                    <div class="text-center sm:text-left">
                        <span class="text-xs uppercase text-yellow-300 font-bold tracking-wider block">Affiliation Number</span>
                        <span class="text-2xl font-extrabold text-white">330331</span>
                    </div>
                    <div class="h-10 w-px bg-white/20 hidden sm:block"></div>
                    <div class="text-center sm:text-left">
                        <span class="text-xs uppercase text-yellow-300 font-bold tracking-wider block">School Location</span>
                        <span class="text-base font-bold text-white">Jagatpur, Bhagalpur</span>
                    </div>
                    <div class="h-10 w-px bg-white/20 hidden sm:block"></div>
                    <a href="<?php echo home_url('/contact/'); ?>" class="bg-secondary hover:bg-red-700 text-white font-bold py-2.5 px-5 rounded-lg text-xs uppercase tracking-wider transition shadow">
                        Mandatory Disclosures
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. Leadership Messages (Director & Principal) -->
    
    <!-- Director's Message -->
    <section class="section-padding bg-white relative overflow-hidden" id="director">
        <div class="container mx-auto px-4 max-w-7xl relative z-10">
            <div class="flex flex-col lg:flex-row items-start gap-12 lg:gap-16">
                <!-- Image Side -->
                <div class="w-full lg:w-4/12 relative shrink-0">
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl border-4 border-white">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/director.jpg?v=2" alt="Er. Anshu Kumar Singh - Director" class="w-full h-auto object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-primaryDark p-6 text-white text-center">
                            <h4 class="nav-font font-bold text-xl text-white">Er. Anshu Kumar Singh</h4>
                            <p class="text-xs text-secondary font-bold uppercase tracking-widest mt-1">Director, TMISB</p>
                        </div>
                    </div>

                </div>

                <!-- Message Content -->
                <div class="w-full lg:w-8/12">
                    <div class="flex items-center mb-3">
                        <span class="w-10 h-1 bg-secondary rounded-full mr-3"></span>
                        <h4 class="text-secondary font-bold text-sm uppercase tracking-widest">Leadership</h4>
                    </div>
                    <h2 class="nav-font font-extrabold text-3xl md:text-4xl text-primary mb-6">
                        From the Director's Desk
                    </h2>
                    
                    <p class="text-gray-700 font-semibold text-base mb-4 italic">
                        Dear Parents, Students and Well-wishers,
                    </p>
                    
                    <div class="space-y-4 text-gray-600 text-base leading-relaxed">
                        <p>
                            At Techno Mission International School, we believe that education is one of the most meaningful investments in a child's future. A school's responsibility extends beyond imparting knowledge or preparing students for examinations. It must also nurture character, develop independent thinking and inspire young people to discover their strengths and use them purposefully.
                        </p>
                        <p>
                            Our vision is to provide an educational environment where academic excellence is complemented by values, creativity, discipline and compassion. We want our students to develop the confidence to ask questions, the courage to explore new possibilities and the integrity to make responsible choices.
                        </p>
                        <p>
                            We recognise that every child is different. Each student has individual abilities, interests and aspirations that deserve encouragement and guidance. Our endeavour is to create opportunities through which students can identify their talents, strengthen their capabilities and develop a lifelong love of learning.
                        </p>
                        <p>
                            We also believe that true education requires balance. Intellectual growth must go hand in hand with physical fitness, emotional well-being, cultural awareness and social responsibility. By encouraging participation in academics, sports, creative pursuits and cultural activities, we seek to prepare our students for the many dimensions of life.
                        </p>
                        <p>
                            Parents are our valued partners in this journey. Their trust, cooperation and participation strengthen our efforts to provide meaningful educational experiences.
                        </p>
                        <p>
                            As we continue to build upon the school's legacy, our commitment remains to help every student grow into a knowledgeable, confident, compassionate and responsible individual, ready to contribute positively to society.
                        </p>
                        <p class="font-semibold text-primary pt-2">
                            Together, let us nurture potential, inspire excellence and shape a brighter future.
                        </p>
                    </div>

                    <div class="mt-8 pt-4 border-t border-gray-200">
                        <p class="text-sm text-gray-500 italic">With best wishes,</p>
                        <h5 class="nav-font font-bold text-lg text-primary">Er. Anshu Kumar Singh</h5>
                        <p class="text-xs text-secondary font-bold uppercase tracking-wider">Director</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Principal's Message -->
    <section class="section-padding bg-lightBg border-t border-gray-200" id="principal">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="flex flex-col lg:flex-row-reverse items-start gap-12 lg:gap-16">
                <!-- Image Side -->
                <div class="w-full lg:w-4/12 relative shrink-0">
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl border-4 border-white">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/principal-leena-kumari.jpg" alt="Ms. Leena Kumari - Principal" class="w-full h-auto object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-primaryDark p-6 text-white text-center">
                            <h4 class="nav-font font-bold text-xl text-white">Ms. Leena Kumari</h4>
                            <p class="text-xs text-secondary font-bold uppercase tracking-widest mt-1">Principal, TMISB</p>
                        </div>
                    </div>

                </div>

                <!-- Message Content -->
                <div class="w-full lg:w-8/12">
                    <div class="flex items-center mb-3">
                        <span class="w-10 h-1 bg-secondary rounded-full mr-3"></span>
                        <h4 class="text-secondary font-bold text-sm uppercase tracking-widest">Academic Leadership</h4>
                    </div>
                    <h2 class="nav-font font-extrabold text-3xl md:text-4xl text-primary mb-6">
                        From the Principal's Desk
                    </h2>
                    
                    <p class="text-gray-700 font-semibold text-base mb-4 italic">
                        Dear Parents and Students,
                    </p>
                    
                    <div class="space-y-4 text-gray-600 text-base leading-relaxed">
                        <p>
                            Every child enters school with curiosity, potential and the desire to learn. Our role as educators is to guide that curiosity, strengthen that potential and help each student develop the knowledge, confidence and character needed to succeed in life.
                        </p>
                        <p>
                            At Techno Mission International School, we strive to create a learning environment that combines academic discipline with encouragement, exploration and personal growth. We want our students not merely to remember information, but to understand concepts, ask meaningful questions, think critically and apply their learning with confidence.
                        </p>
                        <p>
                            We believe that values are as important as knowledge. Honesty, respect, compassion, responsibility and perseverance help shape individuals who can make sound decisions and contribute positively to their communities.
                        </p>
                        <p>
                            We also encourage students to participate in activities beyond the classroom. Sports, creative expression, cultural programmes and other learning experiences provide valuable opportunities to develop teamwork, leadership, discipline and self-confidence.
                        </p>
                        <p>
                            We recognise that every student learns differently and progresses at an individual pace. Through guidance, constructive feedback and cooperation with parents, we aim to help students recognise their strengths and work steadily towards improvement.
                        </p>
                        <p>
                            I invite our parents to join us as active partners in this educational journey. Together, we can create an environment in which children feel supported, challenged and inspired to become the best version of themselves.
                        </p>
                        <p class="font-semibold text-primary pt-2">
                            Let us work together to make learning meaningful and every student's growth a shared achievement.
                        </p>
                    </div>

                    <div class="mt-8 pt-4 border-t border-gray-200">
                        <p class="text-sm text-gray-500 italic">With warm regards,</p>
                        <h5 class="nav-font font-bold text-lg text-primary">Ms. Leena Kumari</h5>
                        <p class="text-xs text-secondary font-bold uppercase tracking-wider">Principal</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. Why Choose Techno Mission International School (8 Pillars) -->
    <section class="section-padding bg-white" id="why-tmisb">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-16">
                <h4 class="text-secondary font-bold text-sm uppercase tracking-widest mb-2">Our Distinct Edge</h4>
                <h2 class="section-title">Why Choose Techno Mission?</h2>
                <p class="text-gray-600 max-w-3xl mx-auto text-base">
                    An Education That Goes Beyond the Classroom. We build strong academic foundations while helping students discover their individual talents, sound values, and future pathways.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- 1. Strong Academic Foundations -->
                <div class="bg-lightBg rounded-2xl p-6 border border-gray-100 hover:shadow-xl transition group">
                    <span class="w-10 h-10 rounded-lg bg-primary text-white flex items-center justify-center font-bold text-sm mb-4">01</span>
                    <h3 class="nav-font font-bold text-lg text-primary mb-2">Strong Academic Foundations</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        We value conceptual understanding, disciplined study habits and a genuine interest in learning, developing strong reasoning and problem-solving abilities.
                    </p>
                </div>

                <!-- 2. Learning That Encourages Curiosity -->
                <div class="bg-lightBg rounded-2xl p-6 border border-gray-100 hover:shadow-xl transition group">
                    <span class="w-10 h-10 rounded-lg bg-secondary text-white flex items-center justify-center font-bold text-sm mb-4">02</span>
                    <h3 class="nav-font font-bold text-lg text-primary mb-2">Encouraging Curiosity</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Questioning, lively discussion, practical exploration and creative thinking help learners move beyond rote memorisation towards true deep understanding.
                    </p>
                </div>

                <!-- 3. Holistic Development -->
                <div class="bg-lightBg rounded-2xl p-6 border border-gray-100 hover:shadow-xl transition group">
                    <span class="w-10 h-10 rounded-lg bg-primary text-white flex items-center justify-center font-bold text-sm mb-4">03</span>
                    <h3 class="nav-font font-bold text-lg text-primary mb-2">Holistic Development</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Recognising the vital importance of physical fitness, emotional maturity, social skills, creativity and ethical awareness in shaping complete individuals.
                    </p>
                </div>

                <!-- 4. Values & Character Formation -->
                <div class="bg-lightBg rounded-2xl p-6 border border-gray-100 hover:shadow-xl transition group">
                    <span class="w-10 h-10 rounded-lg bg-secondary text-white flex items-center justify-center font-bold text-sm mb-4">04</span>
                    <h3 class="nav-font font-bold text-lg text-primary mb-2">Values & Character</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Compassion, integrity, respect, discipline and responsibility guide our students to make sound judgements and treat others fairly.
                    </p>
                </div>

                <!-- 5. Individual Potential & Talent -->
                <div class="bg-lightBg rounded-2xl p-6 border border-gray-100 hover:shadow-xl transition group">
                    <span class="w-10 h-10 rounded-lg bg-primary text-white flex items-center justify-center font-bold text-sm mb-4">05</span>
                    <h3 class="nav-font font-bold text-lg text-primary mb-2">Individual Potential</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Every child has different interests and strengths. We encourage them through suitable academic, sporting, artistic, cultural, and co-curricular platforms.
                    </p>
                </div>

                <!-- 6. Indian Values & Global Outlook -->
                <div class="bg-lightBg rounded-2xl p-6 border border-gray-100 hover:shadow-xl transition group">
                    <span class="w-10 h-10 rounded-lg bg-secondary text-white flex items-center justify-center font-bold text-sm mb-4">06</span>
                    <h3 class="nav-font font-bold text-lg text-primary mb-2">Indian Values & Global Outlook</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Deep respect for India's cultural heritage while nurturing adaptability and openness to participate confidently in a modern, interconnected world.
                    </p>
                </div>

                <!-- 7. Mindfulness & Well-being -->
                <div class="bg-lightBg rounded-2xl p-6 border border-gray-100 hover:shadow-xl transition group">
                    <span class="w-10 h-10 rounded-lg bg-primary text-white flex items-center justify-center font-bold text-sm mb-4">07</span>
                    <h3 class="nav-font font-bold text-lg text-primary mb-2">Mindfulness & Well-being</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Healthy routines, physical sports, yoga, and meditation complement learning by encouraging inner concentration, self-awareness, and mental balance.
                    </p>
                </div>

                <!-- 8. School-Parent Partnership -->
                <div class="bg-lightBg rounded-2xl p-6 border border-gray-100 hover:shadow-xl transition group">
                    <span class="w-10 h-10 rounded-lg bg-secondary text-white flex items-center justify-center font-bold text-sm mb-4">08</span>
                    <h3 class="nav-font font-bold text-lg text-primary mb-2">Parent-School Partnership</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        A child's progress is strengthened when educators and families work in close cooperation with regular communication and shared responsibility.
                    </p>
                </div>

            </div>

            <!-- Our Promise Banner -->
            <div class="mt-14 bg-gradient-to-r from-primary to-primaryDark text-white p-8 md:p-12 rounded-3xl shadow-xl text-center max-w-4xl mx-auto">
                <span class="inline-block bg-secondary text-white font-bold text-xs uppercase tracking-widest px-4 py-1 rounded-full mb-4">
                    Our Sacred Promise
                </span>
                <p class="text-lg md:text-xl text-gray-100 leading-relaxed font-light mb-4">
                    “We aspire to provide an environment in which students are encouraged to learn with curiosity, act with integrity, strive for excellence and approach the future with confidence.”
                </p>
                <h4 class="text-yellow-300 font-bold text-base md:text-lg">
                    At TMISB, success is not measured only by what a student achieves, but also by the person the student becomes.
                </h4>
            </div>
        </div>
    </section>

    <!-- 8. Our Faculty & Staff -->
    <section class="section-padding bg-lightBg border-t border-gray-200" id="faculty">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-16">
                <h4 class="text-secondary font-bold text-sm uppercase tracking-widest mb-2">The Mentors</h4>
                <h2 class="section-title">Our Faculty & Staff</h2>
                <p class="text-gray-600 max-w-3xl mx-auto text-base">
                    Behind every meaningful learning experience is a teacher who guides, encourages and inspires.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100 hover:shadow-lg transition">
                    <div class="w-12 h-12 rounded-xl bg-primary/10 text-primary flex items-center justify-center text-xl mb-6">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3 class="nav-font font-bold text-xl text-primary mb-3">Our Teaching Team</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Our faculty supports students in building conceptual understanding, strengthening essential skills and developing confidence in their learning. Teachers guide co-curricular activities, encouraging discipline, cooperation, and mutual respect.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100 hover:shadow-lg transition">
                    <div class="w-12 h-12 rounded-xl bg-secondary/10 text-secondary flex items-center justify-center text-xl mb-6">
                        <i class="fas fa-hand-holding-heart"></i>
                    </div>
                    <h3 class="nav-font font-bold text-xl text-primary mb-3">Our Commitment to Students</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        We encourage every student to ask questions, seek guidance, build sound learning habits and take increasing responsibility for personal progress within a relationship built on mutual respect and shared commitment.
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100 hover:shadow-lg transition">
                    <div class="w-12 h-12 rounded-xl bg-primary/10 text-primary flex items-center justify-center text-xl mb-6">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3 class="nav-font font-bold text-xl text-primary mb-3">Our Support Team</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Our dedicated administrative and support teams coordinate seamless school operations, maintain proactive communication with families, and ensure a secure, organized, and welcoming campus environment.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer (Reused) -->
    
<?php
get_footer();
?>