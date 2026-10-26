<?php
/* Template Name: Competitive Coaching Page */
get_header();
?>
<!-- Page Header -->
    <section class="relative py-16 md:py-28 bg-primaryDark overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80" alt="Competitive Exam Preparation" class="w-full h-full object-cover opacity-25">
            <div class="absolute inset-0 bg-gradient-to-r from-primaryDark/95 via-primaryDark/85 to-primaryDark/50"></div>
        </div>
        <div class="container mx-auto px-4 relative z-10 max-w-7xl">
            <div class="max-w-3xl">
                <div class="inline-flex items-center gap-2 bg-secondary text-white px-3.5 py-1.5 rounded text-xs font-bold tracking-widest uppercase mb-4 shadow">
                    <i class="fas fa-trophy"></i> Specialized Entrance Wing
                </div>
                <h1 class="nav-font font-extrabold text-4xl sm:text-5xl md:text-6xl text-white mb-4 leading-tight">
                    Competitive <span class="text-secondary">Prep (JEE / NEET)</span>
                </h1>
                <p class="text-xl md:text-2xl text-yellow-300 font-semibold italic mb-6">
                    "Turning aspirations into purposeful preparation"
                </p>
                <div class="flex items-center text-gray-300 text-sm font-medium">
                    <a href="<?php echo home_url('/'); ?>" class="hover:text-white transition flex items-center"><i class="fas fa-home mr-2"></i> Home</a>
                    <i class="fas fa-chevron-right mx-3 text-xs text-gray-500"></i>
                    <a href="<?php echo home_url('/academics/'); ?>" class="hover:text-white transition">Academics</a>
                    <i class="fas fa-chevron-right mx-3 text-xs text-gray-500"></i>
                    <span class="text-secondary font-semibold">Competitive Prep</span>
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
                            Turning Aspirations into Purposeful Preparation
                        </h2>
                        <p class="text-gray-700 text-lg leading-relaxed mb-6 font-normal">
                            For students aspiring to pursue engineering, medicine and related fields, competitive examinations require conceptual clarity, consistent practice, analytical thinking and disciplined preparation.
                        </p>
                        <p class="text-gray-600 leading-relaxed mb-6">
                            Where offered by <strong class="text-primary font-semibold">TMISB</strong>, competitive examination support aims to complement the regular school curriculum and help students prepare systematically for their chosen academic pathways.
                        </p>
                    </div>

                    <!-- 5 Strategic Pillars Grid -->
                    <div class="space-y-6 mb-12">
                        <!-- 1 -->
                        <div class="bg-lightBg rounded-2xl p-6 sm:p-8 border border-gray-100 hover:shadow-lg transition">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-xl bg-primary text-white flex items-center justify-center text-xl shrink-0 shadow">
                                    <i class="fas fa-bullseye"></i>
                                </div>
                                <div>
                                    <h3 class="nav-font font-bold text-xl text-primary mb-2">Conceptual Clarity</h3>
                                    <p class="text-gray-600 text-sm leading-relaxed">
                                        Strengthening fundamentals in relevant subjects and applying concepts to examination-style problems.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- 2 -->
                        <div class="bg-lightBg rounded-2xl p-6 sm:p-8 border border-gray-100 hover:shadow-lg transition">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-xl bg-secondary text-white flex items-center justify-center text-xl shrink-0 shadow">
                                    <i class="fas fa-sync"></i>
                                </div>
                                <div>
                                    <h3 class="nav-font font-bold text-xl text-primary mb-2">Syllabus Coordination</h3>
                                    <p class="text-gray-600 text-sm leading-relaxed">
                                        Aligning school learning and entrance examination preparation wherever the programme permits to maximize focus and avoid duplicate efforts.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- 3 -->
                        <div class="bg-lightBg rounded-2xl p-6 sm:p-8 border border-gray-100 hover:shadow-lg transition">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-xl bg-primary text-white flex items-center justify-center text-xl shrink-0 shadow">
                                    <i class="fas fa-comments"></i>
                                </div>
                                <div>
                                    <h3 class="nav-font font-bold text-xl text-primary mb-2">Guided Doubt Clarification</h3>
                                    <p class="text-gray-600 text-sm leading-relaxed">
                                        Providing regular opportunities to address difficult concepts and reinforce understanding with experienced mentor guidance.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- 4 -->
                        <div class="bg-lightBg rounded-2xl p-6 sm:p-8 border border-gray-100 hover:shadow-lg transition">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-xl bg-secondary text-white flex items-center justify-center text-xl shrink-0 shadow">
                                    <i class="fas fa-file-alt"></i>
                                </div>
                                <div>
                                    <h3 class="nav-font font-bold text-xl text-primary mb-2">Practice and Assessment</h3>
                                    <p class="text-gray-600 text-sm leading-relaxed">
                                        Using subject-wise exercises, mock tests and performance reviews, where provided, to identify areas for improvement and build exam endurance.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- 5 -->
                        <div class="bg-lightBg rounded-2xl p-6 sm:p-8 border border-gray-100 hover:shadow-lg transition">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-xl bg-primary text-white flex items-center justify-center text-xl shrink-0 shadow">
                                    <i class="fas fa-stopwatch"></i>
                                </div>
                                <div>
                                    <h3 class="nav-font font-bold text-xl text-primary mb-2">Time Management and Revision</h3>
                                    <p class="text-gray-600 text-sm leading-relaxed">
                                        Encouraging consistent study schedules, planned revision and balanced preparation for school and entrance examinations.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Verified Press Clippings & Hall of Fame -->
                    <div class="mb-12">
                        <div class="flex items-center justify-between mb-6 border-b border-gray-200 pb-3">
                            <div>
                                <span class="w-10 h-1 bg-secondary rounded-full inline-block mb-2"></span>
                                <h3 class="nav-font font-extrabold text-2xl text-primary">Proven Track Record &amp; Media Highlights</h3>
                                <p class="text-xs text-gray-500">Documented newspaper reports celebrating TMISB students in national competitive examinations.</p>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <?php
                        $coaching_achievements = new WP_Query( array(
                            'post_type'      => 'tmisb_achievement',
                            'posts_per_page' => 6,
                            'post_status'    => 'publish',
                            'orderby'        => array( 'menu_order' => 'ASC', 'date' => 'DESC' ),
                            'meta_query'     => array(
                                array(
                                    'key'     => '_tmisb_achievement_show_coaching',
                                    'value'   => '1',
                                    'compare' => '=',
                                ),
                            ),
                        ) );

                        if ( $coaching_achievements->have_posts() ) :
                            while ( $coaching_achievements->have_posts() ) : $coaching_achievements->the_post();
                                $badge        = get_post_meta( get_the_ID(), '_tmisb_achievement_badge', true );
                                $badge_color  = get_post_meta( get_the_ID(), '_tmisb_achievement_badge_color', true ) ?: 'secondary';
                                $caption      = get_post_meta( get_the_ID(), '_tmisb_achievement_caption', true );
                                $legacy_img   = get_post_meta( get_the_ID(), '_tmisb_achievement_legacy_image', true );
                                
                                $img_url = get_the_post_thumbnail_url( get_the_ID(), 'large' );
                                if ( ! $img_url && $legacy_img ) {
                                    $img_url = get_template_directory_uri() . '/' . $legacy_img;
                                }
                                $badge_style = ( $badge_color === 'primary' ) ? 'bg-primary/10 text-primary' : 'bg-secondary/10 text-secondary';
                        ?>
                            <div class="bg-white rounded-2xl p-4 border border-gray-200 shadow-sm hover:shadow-md transition group">
                                <div class="bg-gray-50 rounded-xl overflow-hidden p-2 mb-3 border border-gray-100 flex items-center justify-center">
                                    <?php if ( $img_url ) : ?>
                                        <img src="<?php echo esc_url( $img_url ); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-auto max-h-[320px] object-contain transition duration-500 group-hover:scale-105">
                                    <?php endif; ?>
                                </div>
                                <div class="flex items-center justify-between mb-1">
                                    <?php if ( ! empty( $badge ) ) : ?>
                                        <span class="<?php echo esc_attr( $badge_style ); ?> text-[10px] font-bold uppercase tracking-wider px-2 py-0.5 rounded"><?php echo esc_html( $badge ); ?></span>
                                    <?php endif; ?>
                                    <span class="text-[11px] text-gray-400 font-medium"><?php _e( 'Media / Verified', 'tmisb' ); ?></span>
                                </div>
                                <h4 class="nav-font font-bold text-base text-primary"><?php the_title(); ?></h4>
                                <?php if ( ! empty( $caption ) ) : ?>
                                    <p class="text-xs text-gray-600 mt-1 leading-relaxed"><?php echo esc_html( $caption ); ?></p>
                                <?php endif; ?>
                            </div>
                        <?php
                            endwhile;
                            wp_reset_postdata();
                        else :
                        ?>

                            <!-- Clipping 1: NEET Medical 2022 -->
                            <div class="bg-white rounded-2xl p-4 border border-gray-200 shadow-sm hover:shadow-md transition group">
                                <div class="bg-gray-50 rounded-xl overflow-hidden p-2 mb-3 border border-gray-100 flex items-center justify-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/achievement-neet-medical-toppers.jpg" alt="NEET 2022 Results - 10 Students Qualified" class="w-full h-auto max-h-[320px] object-contain transition duration-500 group-hover:scale-105">
                                </div>
                                <div class="flex items-center justify-between mb-1">
                                    <span class="bg-secondary/10 text-secondary text-[10px] font-bold uppercase tracking-wider px-2 py-0.5 rounded">NEET 2022 Medical</span>
                                    <span class="text-[11px] text-gray-400 font-medium">Dainik Jagran / Media</span>
                                </div>
                                <h4 class="nav-font font-bold text-base text-primary">10 Students Qualified in NEET</h4>
                                <p class="text-xs text-gray-600 mt-1 leading-relaxed">
                                    Top scorers include Kumar Shubham (671/720), Tarbiya Niyom (668/720), and Swati Kumari (621/720), guided under Director Er. Anshu Kumar Singh.
                                </p>
                            </div>

                            <!-- Clipping 2: JEE Advanced 2020 Toppers -->
                            <div class="bg-white rounded-2xl p-4 border border-gray-200 shadow-sm hover:shadow-md transition group">
                                <div class="bg-gray-50 rounded-xl overflow-hidden p-2 mb-3 border border-gray-100 flex items-center justify-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/achievement-jee-topper-anuj-arya.jpg" alt="12th Class Topper - First Attempt Success in JEE Advanced" class="w-full h-auto max-h-[320px] object-contain transition duration-500 group-hover:scale-105">
                                </div>
                                <div class="flex items-center justify-between mb-1">
                                    <span class="bg-primary/10 text-primary text-[10px] font-bold uppercase tracking-wider px-2 py-0.5 rounded">IIT-JEE Advanced</span>
                                    <span class="text-[11px] text-gray-400 font-medium">Prabhat Khabar / Media</span>
                                </div>
                                <h4 class="nav-font font-bold text-base text-primary">12th School Topper - 1st Attempt Success</h4>
                                <p class="text-xs text-gray-600 mt-1 leading-relaxed">
                                    Anuj Kumar secured All India Rank 1015 (OBC Rank 132), and Arya Kumar achieved AIR 16275 in JEE Advanced 2020 on their very first attempt.
                                </p>
                            </div>

                            <!-- Clipping 3: 5 Students in JEE Advanced -->
                            <div class="bg-white rounded-2xl p-4 border border-gray-200 shadow-sm hover:shadow-md transition group">
                                <div class="bg-gray-50 rounded-xl overflow-hidden p-2 mb-3 border border-gray-100 flex items-center justify-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/achievement-jee-5-students.jpg" alt="5 Students Qualified for IIT-JEE Advanced" class="w-full h-auto max-h-[320px] object-contain transition duration-500 group-hover:scale-105">
                                </div>
                                <div class="flex items-center justify-between mb-1">
                                    <span class="bg-secondary/10 text-secondary text-[10px] font-bold uppercase tracking-wider px-2 py-0.5 rounded">IIT-JEE Mains &amp; Advanced</span>
                                    <span class="text-[11px] text-gray-400 font-medium">Dainik Jagran</span>
                                </div>
                                <h4 class="nav-font font-bold text-base text-primary">5 Students Selected for JEE Advanced</h4>
                                <p class="text-xs text-gray-600 mt-1 leading-relaxed">
                                    Exceptional scores: Anuj Kumar (99.90 percentile), Arya Kumar (98.27), Ravishankar Singh (97.27), Rohit Kumar (96.53), and Mohit Kumar.
                                </p>
                            </div>

                            <!-- Clipping 4: ISRO Cyberspace Competition -->
                            <div class="bg-white rounded-2xl p-4 border border-gray-200 shadow-sm hover:shadow-md transition group">
                                <div class="bg-gray-50 rounded-xl overflow-hidden p-2 mb-3 border border-gray-100 flex items-center justify-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/achievement-isro-cyber-space.jpg" alt="ISRO Cyberspace National Winners" class="w-full h-auto max-h-[320px] object-contain transition duration-500 group-hover:scale-105">
                                </div>
                                <div class="flex items-center justify-between mb-1">
                                    <span class="bg-primary/10 text-primary text-[10px] font-bold uppercase tracking-wider px-2 py-0.5 rounded">ISRO National Laurels</span>
                                    <span class="text-[11px] text-gray-400 font-medium">National Media</span>
                                </div>
                                <h4 class="nav-font font-bold text-base text-primary">2 Students Ranked in Top 500 in India</h4>
                                <p class="text-xs text-gray-600 mt-1 leading-relaxed">
                                    Class 9 students Abhijeet Kumar &amp; Ayush Kumar Singh brought national pride by securing top ranks in ISRO Cyber Space Competition 2020.
                                </p>
                            </div>
                        
                        <?php endif; ?>
                        </div>
                    </div>

                    
                    <!-- Callout Emphasis Box -->
                    <div class="bg-gradient-to-r from-primary to-primaryDark text-white p-8 rounded-2xl shadow-xl mb-8">
                        <span class="inline-block bg-secondary text-white font-bold text-[11px] uppercase tracking-widest px-3 py-1 rounded mb-3">Our Core Emphasis</span>
                        <p class="text-lg md:text-xl font-light italic leading-relaxed text-gray-100 mb-2">
                            “Our emphasis is on helping students develop the knowledge, confidence and perseverance required to pursue their aspirations with purpose.”
                        </p>
                    </div>

                    <!-- Compliance Note -->
                    <div class="p-4 bg-yellow-50 border border-yellow-200 rounded-xl mb-10 text-xs text-yellow-800">
                        <i class="fas fa-info-circle mr-1.5 text-yellow-600"></i> The school must verify whether JEE/NEET coaching is operational, the faculty involved, the format of instruction and the availability of test series before these services are advertised.
                    </div>

                    <!-- Next Academic Stage Navigation -->
                    <div class="p-6 bg-lightBg rounded-2xl border border-gray-200 flex items-center justify-between">
                        <div>
                            <span class="text-xs uppercase text-gray-500 font-bold tracking-wider block">Pedagogical Framework</span>
                            <h4 class="nav-font font-bold text-lg text-primary">Academic Methodology & Evaluation</h4>
                        </div>
                        <a href="<?php echo home_url('/teaching-methodology/'); ?>" class="inline-flex items-center bg-primary hover:bg-secondary text-white font-bold py-2.5 px-5 rounded-lg text-xs uppercase tracking-wider transition">
                            Explore Methodology <i class="fas fa-arrow-right ml-2"></i>
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
            <a href="<?php echo home_url('/senior-secondary/'); ?>" class="flex items-center justify-between p-3.5 rounded-xl transition bg-gray-50 text-gray-700 hover:bg-primary/5 hover:text-primary">
                <span class="flex items-center text-sm">
                    <i class="fas fa-atom mr-3 text-xs text-primary"></i> Senior Secondary (XI–XII)
                </span>
                <i class="fas fa-chevron-right text-xs text-gray-400"></i>
            </a>
        </li>
<li>
            <a href="<?php echo home_url('/competitive-coaching/'); ?>" class="flex items-center justify-between p-3.5 rounded-xl transition bg-primary text-white font-bold shadow-md">
                <span class="flex items-center text-sm">
                    <i class="fas fa-trophy mr-3 text-xs text-secondary"></i> Competitive Prep (JEE/NEET)
                </span>
                <i class="fas fa-chevron-right text-xs text-white"></i>
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