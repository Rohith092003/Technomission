<?php
/* Template Name: Admissions Page */
get_header();
?>


    <!-- 3. Bottom Bar / Main Navigation (Tier 3) -->
    <nav class="bg-primary hidden xl:block border-t border-white/10">
        <div class="container mx-auto px-2 max-w-[1500px]">
            <ul class="flex justify-center items-center space-x-8 2xl:space-x-10 nav-font font-semibold text-white text-sm py-3.5">
                <li><a href="<?php echo home_url('/'); ?>" class="hover:text-secondary transition pb-1 border-b-2 border-secondary">Home</a></li>
                
                <li class="relative group nav-item">
                    <a href="<?php echo home_url('/about/'); ?>" class="hover:text-secondary transition flex items-center pb-1">About Us <i class="fas fa-chevron-down text-[10px] ml-1.5 opacity-70"></i></a>
                    <ul class="dropdown-menu absolute hidden bg-white shadow-xl border-t-4 border-secondary top-full left-0 w-64 py-2 z-50 transition-opacity opacity-0 group-hover:opacity-100 text-gray-800 font-medium rounded-b">
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">About School</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Principal's Message</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Management / Leadership</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Salient Features</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Values</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary">Alumni Connect</a></li>
                    </ul>
                </li>

                <li class="relative group nav-item">
                    <a href="<?php echo home_url('/academics/'); ?>" class="hover:text-secondary transition flex items-center pb-1">Academics <i class="fas fa-chevron-down text-[10px] ml-1.5 opacity-70"></i></a>
                    <ul class="dropdown-menu absolute hidden bg-white shadow-xl border-t-4 border-secondary top-full left-0 w-48 py-2 z-50 transition-opacity opacity-0 group-hover:opacity-100 text-gray-800 font-medium rounded-b">
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Primary</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary border-b border-gray-100">Secondary</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-50 hover:text-primary">High School</a></li>
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

    
    </div>

    <!-- Page Header -->
    <section class="page-header py-24 text-center">
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
                                    <input type="text" class="w-full px-0 py-2 border-b-2 border-gray-300 focus:border-primary outline-none transition bg-transparent text-gray-800">
                                </div>
                                <div>
                                    <label class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-2">Date of Birth *</label>
                                    <input type="date" class="w-full px-0 py-2 border-b-2 border-gray-300 focus:border-primary outline-none transition bg-transparent text-gray-800">
                                </div>
                            </div>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-2">Parent/Guardian Name *</label>
                                    <input type="text" class="w-full px-0 py-2 border-b-2 border-gray-300 focus:border-primary outline-none transition bg-transparent text-gray-800">
                                </div>
                                <div>
                                    <label class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-2">Contact Number *</label>
                                    <input type="tel" class="w-full px-0 py-2 border-b-2 border-gray-300 focus:border-primary outline-none transition bg-transparent text-gray-800">
                                </div>
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-2">Email Address (Optional)</label>
                                <input type="email" class="w-full px-0 py-2 border-b-2 border-gray-300 focus:border-primary outline-none transition bg-transparent text-gray-800">
                            </div>
                            
                            <div>
                                <label class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-2">Grade Applying For *</label>
                                <select class="w-full px-0 py-2 border-b-2 border-gray-300 focus:border-primary outline-none transition bg-transparent text-gray-800">
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

    <!-- Footer (Reused) -->
    
<?php
get_footer();
?>