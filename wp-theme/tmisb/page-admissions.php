<?php
/* Template Name: Admissions Page */
get_header();
?>


    <!-- Page Header -->
    <section class="page-header py-24 text-center">
        <div class="container mx-auto px-4">
            <h1 class="nav-font font-bold text-4xl text-white mb-4">Admissions 2026–27</h1>
            <div class="flex items-center justify-center text-gray-300 text-sm">
                <a href="index.html" class="hover:text-white transition">Home</a>
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