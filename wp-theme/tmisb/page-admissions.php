<?php
/* Template Name: Admissions Page */
get_header();
?>


    <!-- 3. Bottom Bar / Main Navigation (Tier 3) -->
    <nav class="bg-primary hidden xl:block border-t border-white/10">
        <div class="container mx-auto px-2 max-w-[1500px]">
            <ul class="flex justify-center items-center space-x-8 2xl:space-x-10 nav-font font-semibold text-white text-sm py-3.5">
                <li><a href="<?php echo home_url('/'); ?>" class="hover:text-secondary transition pb-1">Home</a></li>
                
                <li class="relative group nav-item">
                    <a href="<?php echo home_url('/about/'); ?>" class="hover:text-secondary transition flex items-center pb-1">About Us <i class="fas fa-chevron-down text-[10px] ml-1.5 opacity-70"></i></a>
                    <ul class="dropdown-menu absolute hidden bg-white shadow-xl border-t-4 border-secondary top-full left-0 w-64 py-2 z-50 transition-opacity opacity-0 group-hover:opacity-100 text-gray-800 font-medium rounded-b">
                        <li><a href="<?php echo home_url('/about/'); ?>#overview" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">About School</a></li>
                        <li><a href="<?php echo home_url('/about/'); ?>#vision-mission" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Vision & Mission</a></li>
                        <li><a href="<?php echo home_url('/about/'); ?>#director" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Director's Message</a></li>
                        <li><a href="<?php echo home_url('/about/'); ?>#principal" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Principal's Message</a></li>
                        <li><a href="<?php echo home_url('/about/'); ?>#values" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Core Values</a></li>
                        <li><a href="<?php echo home_url('/about/'); ?>#why-tmisb" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Why Choose TMISB</a></li>
                        <li><a href="<?php echo home_url('/about/'); ?>#affiliation" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">CBSE Affiliation</a></li>
                        <li><a href="<?php echo home_url('/about/'); ?>#faculty" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary">Faculty & Staff</a></li>
                    </ul>
                </li>

                <li class="relative group nav-item">
                    <a href="<?php echo home_url('/academics/'); ?>" class="hover:text-secondary transition flex items-center pb-1">Academics <i class="fas fa-chevron-down text-[10px] ml-1.5 opacity-70"></i></a>
                    <ul class="dropdown-menu absolute hidden bg-white shadow-xl border-t-4 border-secondary top-full left-0 w-64 py-2 z-50 transition-opacity opacity-0 group-hover:opacity-100 text-gray-800 font-medium rounded-b">
                        <li><a href="<?php echo home_url('/academics/'); ?>#overview" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Academic Philosophy</a></li>
                        <li><a href="<?php echo home_url('/academics/'); ?>#pre-primary" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Pre-Primary (Nursery–UKG)</a></li>
                        <li><a href="<?php echo home_url('/academics/'); ?>#primary" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Primary Wing (Classes I–V)</a></li>
                        <li><a href="<?php echo home_url('/academics/'); ?>#secondary" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Middle & Secondary (VI–X)</a></li>
                        <li><a href="<?php echo home_url('/academics/'); ?>#senior-secondary" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Senior Secondary (XI–XII)</a></li>
                        <li><a href="<?php echo home_url('/academics/'); ?>#competitive" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Competitive Prep (JEE/NEET)</a></li>
                        <li><a href="<?php echo home_url('/academics/'); ?>#methodology" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary">Teaching & Evaluation</a></li>
                    </ul>
                </li>
                
                <li class="relative group nav-item">
                    <a href="<?php echo home_url('/labs/'); ?>" class="hover:text-secondary transition flex items-center pb-1">Labs <i class="fas fa-chevron-down text-[10px] ml-1.5 opacity-70"></i></a>
                    <ul class="dropdown-menu absolute hidden bg-white shadow-xl border-t-4 border-secondary top-full left-0 w-48 py-2 z-50 transition-opacity opacity-0 group-hover:opacity-100 text-gray-800 font-medium rounded-b">
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Computer Lab</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Physics Lab</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Chemistry Lab</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Biology Lab</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary">Robotics Lab</a></li>
                    </ul>
                </li>

                <li class="relative group nav-item">
                    <a href="<?php echo home_url('/activities/'); ?>" class="hover:text-secondary transition flex items-center pb-1">Activities <i class="fas fa-chevron-down text-[10px] ml-1.5 opacity-70"></i></a>
                    <ul class="dropdown-menu absolute hidden bg-white shadow-xl border-t-4 border-secondary top-full left-0 w-48 py-2 z-50 transition-opacity opacity-0 group-hover:opacity-100 text-gray-800 font-medium rounded-b">
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Yoga</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Dramatics</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Sports</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary">Art & Craft</a></li>
                    </ul>
                </li>

                <li><a href="<?php echo home_url('/gallery/'); ?>" class="hover:text-secondary transition pb-1">Gallery</a></li>
                <li><a href="#" class="hover:text-secondary transition pb-1">Blog</a></li>
                <li><a href="<?php echo home_url('/contact/'); ?>" class="hover:text-secondary transition pb-1">Contact Us</a></li>
            </ul>
        </div>
    </nav>

    <!-- Dynamic Active Nav Script -->
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const navLinks = document.querySelectorAll('nav ul > li > a, nav ul > li.nav-item > a');
        const currentPath = window.location.pathname;
        
        // Remove hardcoded active classes
        navLinks.forEach(link => {
            link.classList.remove('border-b-2', 'border-secondary');
        });

        // Determine current page identifier
        let activeFound = false;
        navLinks.forEach(link => {
            const href = link.getAttribute('href');
            if (!href || href === '#') return;

            // Check if current URL includes the href (works for about.html and /about/)
            if (href !== 'index.html' && href !== '/' && currentPath.includes(href.replace('.html', ''))) {
                link.classList.add('border-b-2', 'border-secondary');
                activeFound = true;
            }
        });

        // Fallback for Home page
        if (!activeFound && (currentPath === '/' || currentPath.endsWith('index.html'))) {
            navLinks.forEach(link => {
                if (link.getAttribute('href') === 'index.html' || link.getAttribute('href').includes('home_url')) {
                    link.classList.add('border-b-2', 'border-secondary');
                }
            });
        }

        // Mobile menu active link highlighting
        const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');
        mobileNavLinks.forEach(link => {
            const href = link.getAttribute('href');
            if (!href || href === '#') return;
            
            if (href !== 'index.html' && href !== '/' && currentPath.includes(href.replace('.html', ''))) {
                link.classList.add('text-secondary', 'font-bold');
            } else if ((currentPath === '/' || currentPath.endsWith('index.html') || currentPath.endsWith('/')) && href === 'index.html') {
                link.classList.add('text-secondary', 'font-bold');
            }
        });
    });
    </script>
    

    
    </div>

    <!-- Page Header -->
    <section class="page-header py-14 sm:py-20 md:py-24 text-center">
        <div class="container mx-auto px-4">
            <h1 class="nav-font font-bold text-4xl text-white mb-4">Admissions 2026–27</h1>
            <div class="flex items-center justify-center text-gray-300 text-sm">
                <a href="<?php echo home_url('/'); ?>" class="hover:text-white transition">Home</a>
                <i class="fas fa-chevron-right mx-3 text-xs"></i>
                <span class="text-secondary font-semibold">Admissions</span>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 max-w-7xl">
            
            <div class="flex flex-col lg:flex-row gap-12">
                
                <!-- Left: Info & Process -->
                <div class="w-full lg:w-1/2">
                    <h2 class="nav-font font-bold text-3xl text-primary mb-6">Welcome to TMISB</h2>
                    <p class="text-gray-600 mb-8 leading-relaxed">
                        We are thrilled that you are considering Techno Mission International School for your child's education. We seek students who are enthusiastic, curious, and ready to embrace our holistic educational approach.
                    </p>
                    
                    <h3 class="nav-font font-bold text-2xl text-gray-800 mb-6 border-b-2 border-primary pb-2 inline-block">Admission Process</h3>
                    <div class="mt-4 space-y-8">
                        
                        <!-- Step 1 -->
                        <div class="flex items-start">
                            <div class="flex items-center justify-center w-8 h-8 rounded bg-primary text-white font-bold shrink-0 mt-1 mr-5">
                                1
                            </div>
                            <div>
                                <h4 class="font-bold text-lg text-gray-800 mb-1">Online Registration</h4>
                                <p class="text-sm text-gray-600 leading-relaxed border-l-2 border-gray-200 pl-4 py-1">Fill out the official online application form with the prospective student's details. Ensure all provided information matches official records.</p>
                            </div>
                        </div>
                        
                        <!-- Step 2 -->
                        <div class="flex items-start">
                            <div class="flex items-center justify-center w-8 h-8 rounded bg-primary text-white font-bold shrink-0 mt-1 mr-5">
                                2
                            </div>
                            <div>
                                <h4 class="font-bold text-lg text-gray-800 mb-1">Interaction & Assessment</h4>
                                <p class="text-sm text-gray-600 leading-relaxed border-l-2 border-gray-200 pl-4 py-1">A brief interaction session or aptitude test will be scheduled, varying based on the grade applied for, to understand the student's current proficiency.</p>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="flex items-start">
                            <div class="flex items-center justify-center w-8 h-8 rounded bg-primary text-white font-bold shrink-0 mt-1 mr-5">
                                3
                            </div>
                            <div>
                                <h4 class="font-bold text-lg text-gray-800 mb-1">Document Verification & Fee</h4>
                                <p class="text-sm text-gray-600 leading-relaxed border-l-2 border-gray-200 pl-4 py-1">Submit required physical documents (Birth Certificate, Previous Report Card, Aadhar) to the school office and complete the initial fee deposit.</p>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <!-- Right: Application Form -->
                <div class="w-full lg:w-1/2">
                    <div class="bg-gray-50 border border-gray-200 p-8 md:p-12">
                        <div class="mb-8 border-b border-gray-300 pb-4">
                            <h3 class="nav-font font-bold text-2xl text-gray-800 uppercase tracking-wide">Apply Online</h3>
                            <p class="text-gray-500 text-sm mt-1">Application for Academic Session 2026-27</p>
                        </div>
                        
                        <form class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-2">Student's Full Name *</label>
                                    <input type="text" class="w-full px-0 py-2 border-b-2 border-gray-300 focus:border-primary outline-none transition bg-transparent text-gray-800 text-base">
                                </div>
                                <div>
                                    <label class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-2">Date of Birth *</label>
                                    <input type="date" class="w-full px-0 py-2 border-b-2 border-gray-300 focus:border-primary outline-none transition bg-transparent text-gray-800 text-base">
                                </div>
                            </div>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-2">Parent/Guardian Name *</label>
                                    <input type="text" class="w-full px-0 py-2 border-b-2 border-gray-300 focus:border-primary outline-none transition bg-transparent text-gray-800 text-base">
                                </div>
                                <div>
                                    <label class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-2">Contact Number *</label>
                                    <input type="tel" class="w-full px-0 py-2 border-b-2 border-gray-300 focus:border-primary outline-none transition bg-transparent text-gray-800 text-base">
                                </div>
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-2">Email Address (Optional)</label>
                                <input type="email" class="w-full px-0 py-2 border-b-2 border-gray-300 focus:border-primary outline-none transition bg-transparent text-gray-800 text-base">
                            </div>
                            
                            <div>
                                <label class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-2">Grade Applying For *</label>
                                <select class="w-full px-0 py-2 border-b-2 border-gray-300 focus:border-primary outline-none transition bg-transparent text-gray-800 text-base">
                                    <option value="" disabled selected>-- Select Grade --</option>
                                    <option value="nursery">Nursery / LKG / UKG</option>
                                    <option value="primary">Primary (Class 1-5)</option>
                                    <option value="secondary">Secondary (Class 6-10)</option>
                                    <option value="senior">Senior Secondary (Class 11-12)</option>
                                </select>
                            </div>

                            <button type="button" class="w-full bg-primary hover:bg-gray-900 text-white font-bold uppercase tracking-widest text-sm py-4 mt-6 transition duration-300">
                                Submit Application
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Admissions Frequently Asked Questions (FAQs) -->
    <section id="faqs" class="section-padding bg-white border-t border-gray-100">
        <div class="container mx-auto px-4 max-w-4xl">
            <div class="text-center mb-12">
                <h4 class="text-secondary font-bold text-sm uppercase tracking-wider mb-2">Have Questions?</h4>
                <h2 class="section-title">Frequently Asked Questions</h2>
                <p class="text-gray-600 max-w-2xl mx-auto text-base">
                    Find comprehensive answers to commonly asked questions regarding admissions, age criteria, document verification, curriculum guidelines, and fee schedules for the 2026–27 session.
                </p>
            </div>

            <!-- Accordion Container -->
            <div class="space-y-4" x-data="{ activeAccordion: 1 }">
                
                <!-- FAQ 1 -->
                <div class="border border-gray-200 rounded-xl overflow-hidden transition-all duration-300" :class="activeAccordion === 1 ? 'shadow-md border-primary/40 bg-white' : 'hover:border-gray-300 bg-white'">
                    <button @click="activeAccordion = activeAccordion === 1 ? null : 1" class="w-full text-left px-6 py-5 font-bold text-gray-800 flex justify-between items-center focus:outline-none transition-colors" :class="activeAccordion === 1 ? 'bg-primary/5 text-primary' : 'hover:bg-gray-50'">
                        <span class="flex items-center gap-3 pr-4">
                            <span class="w-8 h-8 rounded-lg text-xs font-bold flex items-center justify-center shrink-0 transition-colors" :class="activeAccordion === 1 ? 'bg-primary text-white shadow-sm' : 'bg-gray-100 text-gray-600'">01</span>
                            <span class="text-base md:text-lg leading-snug">When do admissions open for the 2026–27 academic session?</span>
                        </span>
                        <i class="fas fa-chevron-down text-xs transition-transform duration-300 shrink-0" :class="activeAccordion === 1 ? 'rotate-180 text-primary' : 'text-gray-400'"></i>
                    </button>
                    <div x-show="activeAccordion === 1" x-collapse x-cloak class="px-6 pb-6 pt-2 text-gray-600 text-sm md:text-base leading-relaxed border-t border-gray-100">
                        <p class="mb-3">
                            Admission enquiries for the 2026–27 session may be made through the school's official website or admission office. Parents are advised to contact the school for current application dates, class-wise vacancies, and the registration schedule.
                        </p>
                        <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded bg-blue-50 text-primary text-xs font-medium border border-blue-100">
                            <i class="fas fa-info-circle"></i> Official opening and closing dates for applications are confirmed via the school notice board and admission office.
                        </div>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="border border-gray-200 rounded-xl overflow-hidden transition-all duration-300" :class="activeAccordion === 2 ? 'shadow-md border-primary/40 bg-white' : 'hover:border-gray-300 bg-white'">
                    <button @click="activeAccordion = activeAccordion === 2 ? null : 2" class="w-full text-left px-6 py-5 font-bold text-gray-800 flex justify-between items-center focus:outline-none transition-colors" :class="activeAccordion === 2 ? 'bg-primary/5 text-primary' : 'hover:bg-gray-50'">
                        <span class="flex items-center gap-3 pr-4">
                            <span class="w-8 h-8 rounded-lg text-xs font-bold flex items-center justify-center shrink-0 transition-colors" :class="activeAccordion === 2 ? 'bg-primary text-white shadow-sm' : 'bg-gray-100 text-gray-600'">02</span>
                            <span class="text-base md:text-lg leading-snug">How can I apply for admission to TMISB?</span>
                        </span>
                        <i class="fas fa-chevron-down text-xs transition-transform duration-300 shrink-0" :class="activeAccordion === 2 ? 'rotate-180 text-primary' : 'text-gray-400'"></i>
                    </button>
                    <div x-show="activeAccordion === 2" x-collapse x-cloak class="px-6 pb-6 pt-2 text-gray-600 text-sm md:text-base leading-relaxed border-t border-gray-100">
                        <p>
                            Parents can begin by submitting the online admission enquiry form above or contacting the school office directly. The admission process generally involves registration, an interaction or assessment where applicable, document verification, and admission confirmation in accordance with the school's approved policy.
                        </p>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="border border-gray-200 rounded-xl overflow-hidden transition-all duration-300" :class="activeAccordion === 3 ? 'shadow-md border-primary/40 bg-white' : 'hover:border-gray-300 bg-white'">
                    <button @click="activeAccordion = activeAccordion === 3 ? null : 3" class="w-full text-left px-6 py-5 font-bold text-gray-800 flex justify-between items-center focus:outline-none transition-colors" :class="activeAccordion === 3 ? 'bg-primary/5 text-primary' : 'hover:bg-gray-50'">
                        <span class="flex items-center gap-3 pr-4">
                            <span class="w-8 h-8 rounded-lg text-xs font-bold flex items-center justify-center shrink-0 transition-colors" :class="activeAccordion === 3 ? 'bg-primary text-white shadow-sm' : 'bg-gray-100 text-gray-600'">03</span>
                            <span class="text-base md:text-lg leading-snug">Which classes are open for admission?</span>
                        </span>
                        <i class="fas fa-chevron-down text-xs transition-transform duration-300 shrink-0" :class="activeAccordion === 3 ? 'rotate-180 text-primary' : 'text-gray-400'"></i>
                    </button>
                    <div x-show="activeAccordion === 3" x-collapse x-cloak class="px-6 pb-6 pt-2 text-gray-600 text-sm md:text-base leading-relaxed border-t border-gray-100">
                        <p>
                            Admission is subject to the classes offered by the school, available seats, and the applicable eligibility criteria. Parents should contact the admission office to confirm vacancies for their child's intended class.
                        </p>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="border border-gray-200 rounded-xl overflow-hidden transition-all duration-300" :class="activeAccordion === 4 ? 'shadow-md border-primary/40 bg-white' : 'hover:border-gray-300 bg-white'">
                    <button @click="activeAccordion = activeAccordion === 4 ? null : 4" class="w-full text-left px-6 py-5 font-bold text-gray-800 flex justify-between items-center focus:outline-none transition-colors" :class="activeAccordion === 4 ? 'bg-primary/5 text-primary' : 'hover:bg-gray-50'">
                        <span class="flex items-center gap-3 pr-4">
                            <span class="w-8 h-8 rounded-lg text-xs font-bold flex items-center justify-center shrink-0 transition-colors" :class="activeAccordion === 4 ? 'bg-primary text-white shadow-sm' : 'bg-gray-100 text-gray-600'">04</span>
                            <span class="text-base md:text-lg leading-snug">What are the age criteria for admission?</span>
                        </span>
                        <i class="fas fa-chevron-down text-xs transition-transform duration-300 shrink-0" :class="activeAccordion === 4 ? 'rotate-180 text-primary' : 'text-gray-400'"></i>
                    </button>
                    <div x-show="activeAccordion === 4" x-collapse x-cloak class="px-6 pb-6 pt-2 text-gray-600 text-sm md:text-base leading-relaxed border-t border-gray-100">
                        <p>
                            Age eligibility depends on the class applied for and the applicable admission rules. Parents should refer to the school's approved age-eligibility table for the relevant academic session and confirm any specific requirements with the admission office.
                        </p>
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="border border-gray-200 rounded-xl overflow-hidden transition-all duration-300" :class="activeAccordion === 5 ? 'shadow-md border-primary/40 bg-white' : 'hover:border-gray-300 bg-white'">
                    <button @click="activeAccordion = activeAccordion === 5 ? null : 5" class="w-full text-left px-6 py-5 font-bold text-gray-800 flex justify-between items-center focus:outline-none transition-colors" :class="activeAccordion === 5 ? 'bg-primary/5 text-primary' : 'hover:bg-gray-50'">
                        <span class="flex items-center gap-3 pr-4">
                            <span class="w-8 h-8 rounded-lg text-xs font-bold flex items-center justify-center shrink-0 transition-colors" :class="activeAccordion === 5 ? 'bg-primary text-white shadow-sm' : 'bg-gray-100 text-gray-600'">05</span>
                            <span class="text-base md:text-lg leading-snug">Is an entrance test required for admission?</span>
                        </span>
                        <i class="fas fa-chevron-down text-xs transition-transform duration-300 shrink-0" :class="activeAccordion === 5 ? 'rotate-180 text-primary' : 'text-gray-400'"></i>
                    </button>
                    <div x-show="activeAccordion === 5" x-collapse x-cloak class="px-6 pb-6 pt-2 text-gray-600 text-sm md:text-base leading-relaxed border-t border-gray-100">
                        <p>
                            The assessment or interaction requirements depend on the class applied for and the school's admission policy. The school will communicate the applicable format, subjects, syllabus or learning areas and schedule to parents before the assessment.
                        </p>
                    </div>
                </div>

                <!-- FAQ 6 -->
                <div class="border border-gray-200 rounded-xl overflow-hidden transition-all duration-300" :class="activeAccordion === 6 ? 'shadow-md border-primary/40 bg-white' : 'hover:border-gray-300 bg-white'">
                    <button @click="activeAccordion = activeAccordion === 6 ? null : 6" class="w-full text-left px-6 py-5 font-bold text-gray-800 flex justify-between items-center focus:outline-none transition-colors" :class="activeAccordion === 6 ? 'bg-primary/5 text-primary' : 'hover:bg-gray-50'">
                        <span class="flex items-center gap-3 pr-4">
                            <span class="w-8 h-8 rounded-lg text-xs font-bold flex items-center justify-center shrink-0 transition-colors" :class="activeAccordion === 6 ? 'bg-primary text-white shadow-sm' : 'bg-gray-100 text-gray-600'">06</span>
                            <span class="text-base md:text-lg leading-snug">What documents are required for admission?</span>
                        </span>
                        <i class="fas fa-chevron-down text-xs transition-transform duration-300 shrink-0" :class="activeAccordion === 6 ? 'rotate-180 text-primary' : 'text-gray-400'"></i>
                    </button>
                    <div x-show="activeAccordion === 6" x-collapse x-cloak class="px-6 pb-6 pt-2 text-gray-600 text-sm md:text-base leading-relaxed border-t border-gray-100">
                        <p>
                            Documents may include proof of date of birth, previous academic records, a Transfer Certificate or School Leaving Certificate where applicable, student photographs, and other documents prescribed by the school. Parents should refer to the official admission checklist for the complete requirements applicable to their child's class.
                        </p>
                    </div>
                </div>

                <!-- FAQ 7 -->
                <div class="border border-gray-200 rounded-xl overflow-hidden transition-all duration-300" :class="activeAccordion === 7 ? 'shadow-md border-primary/40 bg-white' : 'hover:border-gray-300 bg-white'">
                    <button @click="activeAccordion = activeAccordion === 7 ? null : 7" class="w-full text-left px-6 py-5 font-bold text-gray-800 flex justify-between items-center focus:outline-none transition-colors" :class="activeAccordion === 7 ? 'bg-primary/5 text-primary' : 'hover:bg-gray-50'">
                        <span class="flex items-center gap-3 pr-4">
                            <span class="w-8 h-8 rounded-lg text-xs font-bold flex items-center justify-center shrink-0 transition-colors" :class="activeAccordion === 7 ? 'bg-primary text-white shadow-sm' : 'bg-gray-100 text-gray-600'">07</span>
                            <span class="text-base md:text-lg leading-snug">Does the school offer a sibling discount or any other fee concession?</span>
                        </span>
                        <i class="fas fa-chevron-down text-xs transition-transform duration-300 shrink-0" :class="activeAccordion === 7 ? 'rotate-180 text-primary' : 'text-gray-400'"></i>
                    </button>
                    <div x-show="activeAccordion === 7" x-collapse x-cloak class="px-6 pb-6 pt-2 text-gray-600 text-sm md:text-base leading-relaxed border-t border-gray-100">
                        <p class="mb-3">
                            Any sibling concession, scholarship, or fee concession is subject to the school's approved policy and eligibility conditions. Parents should contact the accounts or admission office to confirm whether a concession is available, the applicable amount, and the procedure for applying.
                        </p>
                        <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded bg-blue-50 text-primary text-xs font-medium border border-blue-100">
                            <i class="fas fa-info-circle"></i> Please check with the accounts department for active concession categories for the 2026–27 session.
                        </div>
                    </div>
                </div>

                <!-- FAQ 8 -->
                <div class="border border-gray-200 rounded-xl overflow-hidden transition-all duration-300" :class="activeAccordion === 8 ? 'shadow-md border-primary/40 bg-white' : 'hover:border-gray-300 bg-white'">
                    <button @click="activeAccordion = activeAccordion === 8 ? null : 8" class="w-full text-left px-6 py-5 font-bold text-gray-800 flex justify-between items-center focus:outline-none transition-colors" :class="activeAccordion === 8 ? 'bg-primary/5 text-primary' : 'hover:bg-gray-50'">
                        <span class="flex items-center gap-3 pr-4">
                            <span class="w-8 h-8 rounded-lg text-xs font-bold flex items-center justify-center shrink-0 transition-colors" :class="activeAccordion === 8 ? 'bg-primary text-white shadow-sm' : 'bg-gray-100 text-gray-600'">08</span>
                            <span class="text-base md:text-lg leading-snug">Can a student transfer to TMISB in the middle of the academic session?</span>
                        </span>
                        <i class="fas fa-chevron-down text-xs transition-transform duration-300 shrink-0" :class="activeAccordion === 8 ? 'rotate-180 text-primary' : 'text-gray-400'"></i>
                    </button>
                    <div x-show="activeAccordion === 8" x-collapse x-cloak class="px-6 pb-6 pt-2 text-gray-600 text-sm md:text-base leading-relaxed border-t border-gray-100">
                        <p class="mb-3">
                            Mid-session transfer requests may be considered subject to seat availability, eligibility, the student's previous academic records, and the school's admission policy. Parents should contact the admission office before initiating the transfer and confirm the documents and formalities required.
                        </p>
                        <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded bg-amber-50 text-amber-800 text-xs font-medium border border-amber-200">
                            <i class="fas fa-exclamation-triangle text-secondary"></i> Admission to Classes X and XII is strictly subject to applicable CBSE board rules and cannot be assumed through the ordinary transfer process.
                        </div>
                    </div>
                </div>

                <!-- FAQ 9 -->
                <div class="border border-gray-200 rounded-xl overflow-hidden transition-all duration-300" :class="activeAccordion === 9 ? 'shadow-md border-primary/40 bg-white' : 'hover:border-gray-300 bg-white'">
                    <button @click="activeAccordion = activeAccordion === 9 ? null : 9" class="w-full text-left px-6 py-5 font-bold text-gray-800 flex justify-between items-center focus:outline-none transition-colors" :class="activeAccordion === 9 ? 'bg-primary/5 text-primary' : 'hover:bg-gray-50'">
                        <span class="flex items-center gap-3 pr-4">
                            <span class="w-8 h-8 rounded-lg text-xs font-bold flex items-center justify-center shrink-0 transition-colors" :class="activeAccordion === 9 ? 'bg-primary text-white shadow-sm' : 'bg-gray-100 text-gray-600'">09</span>
                            <span class="text-base md:text-lg leading-snug">How can I obtain the fee structure and confirm admission?</span>
                        </span>
                        <i class="fas fa-chevron-down text-xs transition-transform duration-300 shrink-0" :class="activeAccordion === 9 ? 'rotate-180 text-primary' : 'text-gray-400'"></i>
                    </button>
                    <div x-show="activeAccordion === 9" x-collapse x-cloak class="px-6 pb-6 pt-2 text-gray-600 text-sm md:text-base leading-relaxed border-t border-gray-100">
                        <p>
                            Parents can request the current approved fee schedule directly from the school's admission office. The applicable charges, payment deadlines, and any additional costs should be confirmed before admission. Admission is finalised only after the school completes its prescribed formalities and communicates confirmation to the parent or guardian.
                        </p>
                    </div>
                </div>

            </div>

            <!-- Need Further Help CTA Card -->
            <div class="mt-12 bg-lightBg rounded-2xl p-8 border border-gray-200 text-center flex flex-col md:flex-row items-center justify-between gap-6">
                <div class="text-left">
                    <h4 class="nav-font font-bold text-xl text-primary mb-1">Still have questions regarding admissions?</h4>
                    <p class="text-gray-600 text-sm">Our admissions counsel team is available to assist you Monday through Saturday, 9:00 AM – 3:00 PM.</p>
                </div>
                <div class="flex items-center gap-3 shrink-0">
                    <a href="tel:+919431214985" class="bg-primary hover:bg-primaryDark text-white font-bold py-3 px-6 rounded-lg text-sm transition shadow flex items-center">
                        <i class="fas fa-phone-alt mr-2 text-secondary"></i> Call Helpline
                    </a>
                    <a href="<?php echo home_url('/contact/'); ?>" class="bg-white hover:bg-gray-100 text-gray-800 border border-gray-300 font-bold py-3 px-6 rounded-lg text-sm transition">
                        Contact Desk
                    </a>
                </div>
            </div>

        </div>
    </section>

    <!-- Footer (Reused) -->
    
<?php
get_footer();
?>