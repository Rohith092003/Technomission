<?php
/* Template Name: Admissions Page */
get_header();
?>
<!-- Page Header -->
    <section class="relative py-16 md:py-24 bg-primaryDark overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cbse-students-campus.jpg?v=<?php echo time(); ?>" alt="TMISB Admissions" class="w-full h-full object-cover opacity-20 filter brightness-90">
            <div class="absolute inset-0 bg-gradient-to-r from-primaryDark/95 via-primaryDark/85 to-primaryDark/60"></div>
        </div>
        <div class="container mx-auto px-4 relative z-10 max-w-7xl">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
                <div class="lg:col-span-7">
                    <div class="inline-flex items-center gap-2 bg-secondary text-white px-3.5 py-1.5 rounded text-xs font-bold tracking-widest uppercase mb-4 shadow">
                        <i class="fas fa-user-graduate"></i> Academic Session 2026–27
                    </div>
                    <h1 class="nav-font font-extrabold text-4xl sm:text-5xl md:text-6xl text-white mb-4 leading-tight">
                        Admissions <span class="text-secondary">2026–27</span>
                    </h1>
                    <p class="text-xl md:text-2xl text-yellow-300 font-semibold italic mb-5">
                        "Your Child's Journey Begins Here"
                    </p>
                    <p class="text-gray-300 text-base md:text-lg leading-relaxed mb-6 font-light">
                        Choosing the right school is an important decision for every family. At Techno Mission International School, Bhagalpur, we aim to make the admission process clear, accessible, and supportive for parents.
                    </p>
                    <div class="flex items-center text-gray-300 text-sm font-medium">
                        <a href="<?php echo home_url('/'); ?>" class="hover:text-white transition flex items-center"><i class="fas fa-home mr-2"></i> Home</a>
                        <i class="fas fa-chevron-right mx-3 text-xs text-gray-500"></i>
                        <span class="text-secondary font-semibold">Admissions</span>
                    </div>
                </div>

                <!-- Right Hero Image Showcase -->
                <div class="lg:col-span-5 hidden lg:block">
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl border-4 border-white/15 group">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cbse-students-campus.jpg?v=<?php echo time(); ?>" alt="Indian CBSE School Students at TMISB" class="w-full h-80 object-cover transform group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-primaryDark/90 via-primaryDark/20 to-transparent flex items-end p-5">
                            <div class="text-white">
                                <span class="bg-secondary text-white text-[10px] font-bold px-2 py-0.5 rounded uppercase tracking-wider mb-1 inline-block">CBSE Affiliation: 330331</span>
                                <p class="text-xs font-medium text-gray-200">Holistic Schooling from Pre-Primary to Senior Secondary (+2)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 1 & 2: Admission Process & Online Application Form -->
    <section class="section-padding bg-gray-50" id="process">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="flex flex-col lg:flex-row gap-12">
                
                <!-- Left: 5-Step Process -->
                <div class="w-full lg:w-7/12">
                    <div class="mb-8">
                        <span class="w-10 h-1 bg-secondary rounded-full inline-block mb-3"></span>
                        <h4 class="text-secondary font-bold text-sm uppercase tracking-widest mb-1">Simple & Transparent</h4>
                        <h2 class="nav-font font-bold text-3xl md:text-4xl text-primary mb-4">
                            Step-by-Step Admission Process
                        </h2>
                        <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                            We guide families through every milestone of enrollment to ensure a supportive, seamless transition into TMISB.
                        </p>
                    </div>

                    <!-- Students Experience Showcase Banner -->
                    <div class="relative rounded-2xl overflow-hidden shadow-md mb-8 border border-gray-200 group">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cbse-students-learning.jpg?v=<?php echo time(); ?>" alt="Indian CBSE Students Collaborating in School Library" class="w-full h-64 md:h-72 object-cover transform group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-primaryDark/85 via-primaryDark/30 to-transparent flex items-end p-6">
                            <div class="text-white">
                                <span class="bg-secondary text-white text-[10px] font-bold uppercase tracking-widest px-2.5 py-1 rounded inline-block mb-1.5 shadow">
                                    Admissions Open 2026–27
                                </span>
                                <h4 class="font-bold text-lg md:text-xl text-white">Nurturing Confident, Well-Rounded Learners</h4>
                                <p class="text-xs text-gray-200 mt-0.5">Empowering students through CBSE academics, practical labs, and values-based guidance.</p>
                            </div>
                        </div>
                    </div>

                    <!-- 5 Steps List -->
                    <div class="space-y-6">
                        
                        <!-- Step 1 -->
                        <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-md transition">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-xl bg-primary text-white flex items-center justify-center font-bold text-lg shrink-0 shadow">
                                    01
                                </div>
                                <div>
                                    <h3 class="nav-font font-bold text-xl text-primary mb-1">Step 1: Admission Enquiry</h3>
                                    <p class="text-gray-600 text-sm leading-relaxed mb-2 font-normal">
                                        Parents can enquire about admission through the school's website, by contacting the admission office or by visiting the school campus. Our team can provide information about available classes, eligibility, curriculum, fees and the admission procedure.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-md transition">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-xl bg-secondary text-white flex items-center justify-center font-bold text-lg shrink-0 shadow">
                                    02
                                </div>
                                <div>
                                    <h3 class="nav-font font-bold text-xl text-primary mb-1">Step 2: Registration</h3>
                                    <p class="text-gray-600 text-sm leading-relaxed mb-2 font-normal">
                                        Parents are required to complete the prescribed registration form and provide the necessary student and parent/guardian details. Registration allows the school to process the application but does not, by itself, guarantee admission.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-md transition">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-xl bg-primary text-white flex items-center justify-center font-bold text-lg shrink-0 shadow">
                                    03
                                </div>
                                <div>
                                    <h3 class="nav-font font-bold text-xl text-primary mb-1">Step 3: Interaction or Entrance Assessment</h3>
                                    <p class="text-gray-600 text-sm leading-relaxed mb-2 font-normal">
                                        Depending on the class applied for, the school may conduct an age-appropriate interaction, a basic learning assessment or a written entrance assessment. The purpose is to understand the student's readiness for the relevant class and identify any academic support that may be required.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Step 4 -->
                        <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-md transition">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-xl bg-secondary text-white flex items-center justify-center font-bold text-lg shrink-0 shadow">
                                    04
                                </div>
                                <div>
                                    <h3 class="nav-font font-bold text-xl text-primary mb-1">Step 4: Document Verification</h3>
                                    <p class="text-gray-600 text-sm leading-relaxed mb-2 font-normal">
                                        The school verifies the documents required for admission, including proof of date of birth and previous academic records, where applicable. Parents may be asked to provide additional documents depending on the class and individual circumstances.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Step 5 -->
                        <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-md transition">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-xl bg-primary text-white flex items-center justify-center font-bold text-lg shrink-0 shadow">
                                    05
                                </div>
                                <div>
                                    <h3 class="nav-font font-bold text-xl text-primary mb-1">Step 5: Admission Confirmation</h3>
                                    <p class="text-gray-600 text-sm leading-relaxed mb-2 font-normal">
                                        Admission is confirmed after the school completes the prescribed assessment and verification procedures, approves the application and receives the required fees and documents within the stipulated period.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Important Notice Callout -->
                    <div class="mt-8 bg-blue-50 border-l-4 border-primary p-5 rounded-r-xl">
                        <div class="flex items-start gap-3">
                            <i class="fas fa-info-circle text-primary text-lg mt-0.5"></i>
                            <div class="text-xs md:text-sm text-gray-700 leading-relaxed font-medium">
                                Parents are advised to retain the registration acknowledgement and follow the instructions communicated by the admission office. For admission enquiries, please contact the school office or submit the online admission enquiry form.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: Application Form (Sticky on Desktop) -->
                <div class="w-full lg:w-5/12" id="apply-online">
                    <div class="bg-white border border-gray-200 rounded-2xl shadow-xl p-8 md:p-10 sticky top-36">
                        <div class="mb-6 pb-4 border-b border-gray-100">
                            <span class="bg-secondary text-white text-[11px] font-bold uppercase tracking-wider px-3 py-1 rounded inline-block mb-2 shadow">
                                Admissions Open 2026–27
                            </span>
                            <h3 class="nav-font font-bold text-2xl text-primary">Online Admission Enquiry</h3>
                            <p class="text-gray-500 text-xs mt-1">Submit your details and our admission counselor will contact you within 24 hours.</p>
                        </div>
                        
                        <?php
// Display Forminator form if available, otherwise show styled template form
$form_rendered = false;
if ( shortcode_exists( 'forminator_form' ) ) {
    $form_posts = get_posts( array(
        'post_type'      => 'forminator_forms',
        'post_status'    => 'publish',
        'posts_per_page' => 1,
    ) );
    if ( ! empty( $form_posts ) ) {
        echo do_shortcode( '[forminator_form id="' . $form_posts[0]->ID . '"]' );
        $form_rendered = true;
    }
}
if ( ! $form_rendered ) :
?>
<form class="space-y-4" onsubmit="event.preventDefault(); alert('Thank you! Your admission enquiry has been submitted. Our team will contact you shortly.');">
                            <div>
                                <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1">Student Full Name *</label>
                                <input type="text" required placeholder="Enter student full name" class="w-full px-3.5 py-2.5 rounded-lg border border-gray-300 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition text-sm">
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1">Date of Birth *</label>
                                    <input type="date" required class="w-full px-3.5 py-2.5 rounded-lg border border-gray-300 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition text-sm text-gray-700">
                                </div>
                                <div>
                                    <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1">Gender *</label>
                                    <select required class="w-full px-3.5 py-2.5 rounded-lg border border-gray-300 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition text-sm text-gray-700 bg-white">
                                        <option value="" disabled selected>Select Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1">Parent / Guardian Name *</label>
                                    <input type="text" required placeholder="Parent or guardian name" class="w-full px-3.5 py-2.5 rounded-lg border border-gray-300 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition text-sm">
                                </div>
                                <div>
                                    <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1">Contact Number *</label>
                                    <input type="tel" required placeholder="10-digit mobile number" class="w-full px-3.5 py-2.5 rounded-lg border border-gray-300 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition text-sm">
                                </div>
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1">Email Address (Optional)</label>
                                <input type="email" placeholder="email@example.com" class="w-full px-3.5 py-2.5 rounded-lg border border-gray-300 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition text-sm">
                            </div>
                            
                            <div>
                                <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1">Class Applying For *</label>
                                <select required class="w-full px-3.5 py-2.5 rounded-lg border border-gray-300 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition text-sm text-gray-700 bg-white">
                                    <option value="" disabled selected>-- Select Class / Grade --</option>
                                    <optgroup label="Pre-Primary Wing">
                                        <option value="nursery">Nursery (Age 3+)</option>
                                        <option value="lkg">LKG (Age 4+)</option>
                                        <option value="ukg">UKG (Age 5+)</option>
                                    </optgroup>
                                    <optgroup label="Primary Wing">
                                        <option value="class-1">Class I (Age 6+)</option>
                                        <option value="class-2">Class II</option>
                                        <option value="class-3">Class III</option>
                                        <option value="class-4">Class IV</option>
                                        <option value="class-5">Class V</option>
                                    </optgroup>
                                    <optgroup label="Middle & Secondary Wing">
                                        <option value="class-6">Class VI</option>
                                        <option value="class-7">Class VII</option>
                                        <option value="class-8">Class VIII</option>
                                        <option value="class-9">Class IX</option>
                                        <option value="class-10">Class X (Transfer subject to CBSE)</option>
                                    </optgroup>
                                    <optgroup label="Senior Secondary Wing">
                                        <option value="class-11-science">Class XI — Science (PCM / PCB)</option>
                                        <option value="class-11-commerce">Class XI — Commerce</option>
                                        <option value="class-12">Class XII (Transfer subject to CBSE)</option>
                                    </optgroup>
                                </select>
                            </div>

                            <button type="submit" class="w-full bg-secondary hover:bg-red-700 text-white font-bold uppercase tracking-wider text-sm py-3.5 rounded-lg transition duration-300 shadow-md flex items-center justify-center gap-2">
                                <i class="fas fa-paper-plane"></i> Submit Admission Enquiry
                            </button>
                        </form>
<?php endif; ?>

                        <div class="mt-6 pt-4 border-t border-gray-100 flex items-center justify-between text-xs text-gray-500">
                            <span><i class="fas fa-lock mr-1 text-primary"></i> Data Confidentiality Assured</span>
                            <a href="tel:+919431214985" class="text-primary font-bold hover:underline">Direct Desk: 9431214985</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Section 3: Eligibility and Age Criteria -->
    <section class="section-padding bg-white border-t border-gray-200" id="eligibility">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="max-w-3xl mx-auto text-center mb-12">
                <span class="inline-block bg-primary/10 text-primary font-bold text-xs uppercase tracking-widest px-4 py-1.5 rounded-full mb-3">
                    Class-Wise Norms
                </span>
                <h4 class="text-secondary font-bold text-sm uppercase tracking-widest mb-1">Age Eligibility for Admission</h4>
                <h2 class="section-title">Eligibility & Age Progression Framework</h2>
                <p class="text-gray-600 text-base leading-relaxed">
                    For the 2026–27 academic session, the age reference date specified in the developer's brief is <strong class="text-primary font-bold">31 March 2026</strong>.
                </p>
            </div>

            <!-- Framework Context Alert -->
            <div class="max-w-4xl mx-auto bg-amber-50 border border-amber-200 rounded-xl p-4 mb-8 text-amber-900 text-xs md:text-sm leading-relaxed flex items-start gap-3">
                <i class="fas fa-exclamation-circle text-secondary text-lg mt-0.5 shrink-0"></i>
                <div>
                    The following table is a provisional age-progression framework for management review, not a verified TMISB admission policy. The progression reflects the commonly used age bands aligned with entry to Nursery at age 3+ and Class I at age 6+. Please confirm the official class-specific age cut-offs with the admission desk.
                </div>
            </div>

            <!-- Age Criteria Table -->
            <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden mb-12">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse text-sm">
                        <thead>
                            <tr class="bg-primary text-white text-xs uppercase tracking-wider font-bold">
                                <th class="py-4 px-6">Class / Level</th>
                                <th class="py-4 px-6">Minimum Age (as of 31 March 2026)</th>
                                <th class="py-4 px-6">Typical Age Band</th>
                                <th class="py-4 px-6">Entry Readiness Key</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 text-gray-700 font-normal">
                            <tr class="hover:bg-gray-50 transition">
                                <td class="py-3.5 px-6 font-bold text-primary">Nursery</td>
                                <td class="py-3.5 px-6"><span class="bg-green-100 text-green-800 font-bold px-2.5 py-0.5 rounded text-xs">3 Years +</span></td>
                                <td class="py-3.5 px-6">3 to 4 Years</td>
                                <td class="py-3.5 px-6 text-xs text-gray-500">Play-way & sensory readiness</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition bg-gray-50/50">
                                <td class="py-3.5 px-6 font-bold text-primary">LKG (Lower Kindergarten)</td>
                                <td class="py-3.5 px-6"><span class="bg-green-100 text-green-800 font-bold px-2.5 py-0.5 rounded text-xs">4 Years +</span></td>
                                <td class="py-3.5 px-6">4 to 5 Years</td>
                                <td class="py-3.5 px-6 text-xs text-gray-500">Rhymes, basic shapes & numbers</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition">
                                <td class="py-3.5 px-6 font-bold text-primary">UKG (Upper Kindergarten)</td>
                                <td class="py-3.5 px-6"><span class="bg-green-100 text-green-800 font-bold px-2.5 py-0.5 rounded text-xs">5 Years +</span></td>
                                <td class="py-3.5 px-6">5 to 6 Years</td>
                                <td class="py-3.5 px-6 text-xs text-gray-500">Pre-literacy & motor coordination</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition bg-gray-50/50">
                                <td class="py-3.5 px-6 font-bold text-primary">Class I</td>
                                <td class="py-3.5 px-6"><span class="bg-blue-100 text-primary font-bold px-2.5 py-0.5 rounded text-xs">6 Years +</span></td>
                                <td class="py-3.5 px-6">6 to 7 Years</td>
                                <td class="py-3.5 px-6 text-xs text-gray-500">Foundational literacy & numeracy</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition">
                                <td class="py-3.5 px-6 font-bold text-primary">Class II</td>
                                <td class="py-3.5 px-6 font-semibold">7 Years +</td>
                                <td class="py-3.5 px-6">7 to 8 Years</td>
                                <td class="py-3.5 px-6 text-xs text-gray-500">Reading fluency & basic arithmetic</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition bg-gray-50/50">
                                <td class="py-3.5 px-6 font-bold text-primary">Class III</td>
                                <td class="py-3.5 px-6 font-semibold">8 Years +</td>
                                <td class="py-3.5 px-6">8 to 9 Years</td>
                                <td class="py-3.5 px-6 text-xs text-gray-500">Language expression & environmental awareness</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition">
                                <td class="py-3.5 px-6 font-bold text-primary">Class IV</td>
                                <td class="py-3.5 px-6 font-semibold">9 Years +</td>
                                <td class="py-3.5 px-6">9 to 10 Years</td>
                                <td class="py-3.5 px-6 text-xs text-gray-500">Mathematical problem solving</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition bg-gray-50/50">
                                <td class="py-3.5 px-6 font-bold text-primary">Class V</td>
                                <td class="py-3.5 px-6 font-semibold">10 Years +</td>
                                <td class="py-3.5 px-6">10 to 11 Years</td>
                                <td class="py-3.5 px-6 text-xs text-gray-500">Primary graduation readiness</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition">
                                <td class="py-3.5 px-6 font-bold text-primary">Class VI</td>
                                <td class="py-3.5 px-6 font-semibold">11 Years +</td>
                                <td class="py-3.5 px-6">11 to 12 Years</td>
                                <td class="py-3.5 px-6 text-xs text-gray-500">Middle school subject-based curriculum</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition bg-gray-50/50">
                                <td class="py-3.5 px-6 font-bold text-primary">Class VII</td>
                                <td class="py-3.5 px-6 font-semibold">12 Years +</td>
                                <td class="py-3.5 px-6">12 to 13 Years</td>
                                <td class="py-3.5 px-6 text-xs text-gray-500">Science laboratory exploration</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition">
                                <td class="py-3.5 px-6 font-bold text-primary">Class VIII</td>
                                <td class="py-3.5 px-6 font-semibold">13 Years +</td>
                                <td class="py-3.5 px-6">13 to 14 Years</td>
                                <td class="py-3.5 px-6 text-xs text-gray-500">Analytical & logical reasoning</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition bg-gray-50/50">
                                <td class="py-3.5 px-6 font-bold text-primary">Class IX</td>
                                <td class="py-3.5 px-6 font-semibold">14 Years +</td>
                                <td class="py-3.5 px-6">14 to 15 Years</td>
                                <td class="py-3.5 px-6 text-xs text-gray-500">Secondary CBSE foundation</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition">
                                <td class="py-3.5 px-6 font-bold text-primary">Class X</td>
                                <td class="py-3.5 px-6 font-semibold">15 Years +</td>
                                <td class="py-3.5 px-6">15 to 16 Years</td>
                                <td class="py-3.5 px-6 text-xs text-gray-500">Transfer strictly subject to CBSE norms</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition bg-gray-50/50">
                                <td class="py-3.5 px-6 font-bold text-primary">Class XI (Science / Commerce)</td>
                                <td class="py-3.5 px-6 font-semibold">16 Years +</td>
                                <td class="py-3.5 px-6">Passed Class X</td>
                                <td class="py-3.5 px-6 text-xs text-gray-500">Class X Board Marks & Stream suitability</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition">
                                <td class="py-3.5 px-6 font-bold text-primary">Class XII</td>
                                <td class="py-3.5 px-6 font-semibold">17 Years +</td>
                                <td class="py-3.5 px-6">Passed Class XI</td>
                                <td class="py-3.5 px-6 text-xs text-gray-500">Transfer strictly subject to CBSE norms</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 4: Required Documents Checklist -->
    <section class="section-padding bg-lightBg border-t border-gray-200" id="documents">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="max-w-3xl mx-auto text-center mb-12">
                <span class="inline-block bg-primary/10 text-primary font-bold text-xs uppercase tracking-widest px-4 py-1.5 rounded-full mb-3">
                    Verification Requirements
                </span>
                <h4 class="text-secondary font-bold text-sm uppercase tracking-widest mb-1">Documents Required for Admission</h4>
                <h2 class="section-title">Required Documents Checklist</h2>
                <p class="text-gray-600 text-base leading-relaxed">
                    To help ensure a smooth admission process, parents are requested to submit the documents applicable to the class for which admission is sought.
                </p>
            </div>

            <!-- 3 Category Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                
                <!-- 1. Student Documents -->
                <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100 flex flex-col justify-between hover:shadow-md transition">
                    <div>
                        <div class="w-12 h-12 rounded-xl bg-primary text-white flex items-center justify-center text-xl mb-6 shadow">
                            <i class="fas fa-child"></i>
                        </div>
                        <h3 class="nav-font font-bold text-xl text-primary mb-4 pb-2 border-b border-gray-100">
                            Student Documents
                        </h3>
                        <ul class="space-y-3 text-xs md:text-sm text-gray-600">
                            <li class="flex items-start gap-2.5">
                                <i class="fas fa-check-circle text-secondary text-sm mt-0.5 shrink-0"></i>
                                <span>Proof of date of birth, such as a birth certificate or other document accepted under the school's admission policy.</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fas fa-check-circle text-secondary text-sm mt-0.5 shrink-0"></i>
                                <span>Previous year's report card or academic progress record, where applicable.</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fas fa-check-circle text-secondary text-sm mt-0.5 shrink-0"></i>
                                <span>Transfer Certificate (TC) or School Leaving Certificate (SLC), where applicable.</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fas fa-check-circle text-secondary text-sm mt-0.5 shrink-0"></i>
                                <span>Recent passport-size photographs of the student.</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fas fa-check-circle text-secondary text-sm mt-0.5 shrink-0"></i>
                                <span>Any additional academic or eligibility documents required for the class concerned.</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 2. Parent/Guardian Documents -->
                <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100 flex flex-col justify-between hover:shadow-md transition">
                    <div>
                        <div class="w-12 h-12 rounded-xl bg-secondary text-white flex items-center justify-center text-xl mb-6 shadow">
                            <i class="fas fa-user-friends"></i>
                        </div>
                        <h3 class="nav-font font-bold text-xl text-primary mb-4 pb-2 border-b border-gray-100">
                            Parent / Guardian Documents
                        </h3>
                        <ul class="space-y-3 text-xs md:text-sm text-gray-600">
                            <li class="flex items-start gap-2.5">
                                <i class="fas fa-check-circle text-secondary text-sm mt-0.5 shrink-0"></i>
                                <span>Parent or guardian identification and contact details.</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fas fa-check-circle text-secondary text-sm mt-0.5 shrink-0"></i>
                                <span>Aadhaar or other identity documentation, as required under the school's approved policy.</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fas fa-check-circle text-secondary text-sm mt-0.5 shrink-0"></i>
                                <span>Recent passport-size photographs of parents/guardians, if required by the school.</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 3. Additional Documents, Where Applicable -->
                <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100 flex flex-col justify-between hover:shadow-md transition">
                    <div>
                        <div class="w-12 h-12 rounded-xl bg-primaryDark text-white flex items-center justify-center text-xl mb-6 shadow">
                            <i class="fas fa-folder-open"></i>
                        </div>
                        <h3 class="nav-font font-bold text-xl text-primary mb-4 pb-2 border-b border-gray-100">
                            Additional Documents
                        </h3>
                        <p class="text-xs text-gray-400 uppercase font-semibold mb-3">Where Applicable</p>
                        <ul class="space-y-3 text-xs md:text-sm text-gray-600">
                            <li class="flex items-start gap-2.5">
                                <i class="fas fa-check-circle text-secondary text-sm mt-0.5 shrink-0"></i>
                                <span>Caste / category certificate, where relevant to an applicable scheme or requirement.</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fas fa-check-circle text-secondary text-sm mt-0.5 shrink-0"></i>
                                <span>Documents supporting any applicable admission concession or special consideration.</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fas fa-check-circle text-secondary text-sm mt-0.5 shrink-0"></i>
                                <span>Any other documents specifically requested by the school for verification.</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

            <!-- Important Instructions Card (Redesigned) -->
            <div class="max-w-5xl mx-auto bg-white rounded-2xl p-8 md:p-10 shadow-lg border border-gray-100 relative overflow-hidden">
                <!-- Top Brand Accent Line -->
                <div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-secondary via-primary to-secondary"></div>

                <!-- Header Row -->
                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-5 mb-8 pb-6 border-b border-gray-100">
                    <div class="flex items-center gap-4">
                        <div class="w-14 h-14 rounded-2xl bg-amber-500/10 text-secondary flex items-center justify-center text-2xl shrink-0 shadow-sm border border-amber-500/20">
                            <i class="fas fa-clipboard-check"></i>
                        </div>
                        <div>
                            <span class="inline-flex items-center gap-1.5 bg-amber-50 text-amber-800 border border-amber-200 px-3 py-0.5 rounded-full text-xs font-bold uppercase tracking-wider mb-1">
                                <i class="fas fa-shield-alt text-secondary text-[11px]"></i> Mandatory Verification Protocols
                            </span>
                            <h3 class="nav-font font-bold text-2xl md:text-3xl text-primary leading-tight">
                                Important Instructions for Document Submission
                            </h3>
                        </div>
                    </div>
                    <div class="hidden lg:block text-right">
                        <span class="text-xs text-gray-500 font-medium">Session 2026–27</span>
                        <div class="text-xs font-bold text-primary flex items-center gap-1 mt-0.5">
                            <i class="fas fa-lock text-secondary"></i> Verified Verification Desk
                        </div>
                    </div>
                </div>

                <!-- Grid of Instruction Cards (1 to 4) -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-6">
                    
                    <!-- Instruction 1 -->
                    <div class="bg-gray-50/80 hover:bg-white rounded-xl p-5 border border-gray-200/80 hover:border-primary/30 hover:shadow-md transition-all duration-300 group flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-primary text-white flex items-center justify-center font-bold text-sm shrink-0 shadow group-hover:scale-105 transition-transform">
                            01
                        </div>
                        <div>
                            <div class="flex items-center gap-2 mb-1">
                                <h4 class="font-bold text-primary text-base">Accurate Information</h4>
                                <span class="bg-blue-100 text-primary text-[10px] font-bold px-2 py-0.5 rounded">Accuracy</span>
                            </div>
                            <p class="text-gray-600 text-xs md:text-sm leading-relaxed">
                                Parents must ensure that all details provided in the admission application are complete, authentic, and strictly match the student's official government records and birth certificate.
                            </p>
                        </div>
                    </div>

                    <!-- Instruction 2 -->
                    <div class="bg-gray-50/80 hover:bg-white rounded-xl p-5 border border-gray-200/80 hover:border-secondary/30 hover:shadow-md transition-all duration-300 group flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-secondary text-white flex items-center justify-center font-bold text-sm shrink-0 shadow group-hover:scale-105 transition-transform">
                            02
                        </div>
                        <div>
                            <div class="flex items-center gap-2 mb-1">
                                <h4 class="font-bold text-primary text-base">Specified Format</h4>
                                <span class="bg-red-50 text-secondary text-[10px] font-bold px-2 py-0.5 rounded">Compliance</span>
                            </div>
                            <p class="text-gray-600 text-xs md:text-sm leading-relaxed">
                                Documents must be submitted in the exact format prescribed by the school office (legible physical copies or clear digital scans with appropriate self-attestation).
                            </p>
                        </div>
                    </div>

                    <!-- Instruction 3 -->
                    <div class="bg-gray-50/80 hover:bg-white rounded-xl p-5 border border-gray-200/80 hover:border-primary/30 hover:shadow-md transition-all duration-300 group flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-primaryDark text-white flex items-center justify-center font-bold text-sm shrink-0 shadow group-hover:scale-105 transition-transform">
                            03
                        </div>
                        <div>
                            <div class="flex items-center gap-2 mb-1">
                                <h4 class="font-bold text-primary text-base">Verification of Originals</h4>
                                <span class="bg-purple-50 text-primaryDark text-[10px] font-bold px-2 py-0.5 rounded">Validation</span>
                            </div>
                            <p class="text-gray-600 text-xs md:text-sm leading-relaxed">
                                Original certificates must be presented for physical cross-verification at the time of admission. Certified photocopies will be retained for the school archives.
                            </p>
                        </div>
                    </div>

                    <!-- Instruction 4 -->
                    <div class="bg-gray-50/80 hover:bg-white rounded-xl p-5 border border-gray-200/80 hover:border-secondary/30 hover:shadow-md transition-all duration-300 group flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-emerald-600 text-white flex items-center justify-center font-bold text-sm shrink-0 shadow group-hover:scale-105 transition-transform">
                            04
                        </div>
                        <div>
                            <div class="flex items-center gap-2 mb-1">
                                <h4 class="font-bold text-primary text-base">Transfer Formalities</h4>
                                <span class="bg-emerald-50 text-emerald-700 text-[10px] font-bold px-2 py-0.5 rounded">Transfers</span>
                            </div>
                            <p class="text-gray-600 text-xs md:text-sm leading-relaxed">
                                For candidates relocating from another recognised school, the original Transfer Certificate (TC/SLC) and previous academic progress reports must be submitted without discrepancy.
                            </p>
                        </div>
                    </div>

                </div>

                <!-- Instruction 5: Support & Office Assistance Banner -->
                <div class="bg-gradient-to-r from-primary/5 via-primary/10 to-transparent rounded-xl p-5 border border-primary/20 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-6">
                    <div class="flex items-start gap-3.5">
                        <div class="w-10 h-10 rounded-xl bg-primary text-white flex items-center justify-center font-bold text-sm shrink-0 shadow">
                            05
                        </div>
                        <div>
                            <div class="flex items-center gap-2 mb-0.5">
                                <h4 class="font-bold text-primary text-base">Office Assistance & Missing Documents</h4>
                                <span class="bg-green-100 text-green-800 text-[10px] font-bold px-2 py-0.5 rounded">Desk Support</span>
                            </div>
                            <p class="text-gray-600 text-xs md:text-sm leading-relaxed">
                                If any specific certificate is delayed or unavailable, contact the admission office immediately for provisional documentation guidance.
                            </p>
                        </div>
                    </div>
                    <a href="tel:+919431214985" class="shrink-0 inline-flex items-center gap-2 bg-primary hover:bg-primaryDark text-white px-4 py-2.5 rounded-lg text-xs font-bold shadow-sm transition">
                        <i class="fas fa-phone-alt text-secondary"></i> Call Desk: 9431214985
                    </a>
                </div>

                <!-- Bottom Advisory Note -->
                <div class="bg-amber-50/80 border-l-4 border-amber-500 rounded-r-xl p-4 flex items-center gap-3">
                    <i class="fas fa-info-circle text-amber-600 text-base shrink-0"></i>
                    <p class="text-xs md:text-sm text-amber-900 font-medium leading-relaxed">
                        <span class="font-bold text-amber-950">Important Reminder:</span> Please confirm the class-specific document requirements and verification schedule with the admissions office before completing the enrollment process.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <!-- Section 5: Entrance Assessment Details -->
    <section class="section-padding bg-white border-t border-gray-200" id="assessment">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="max-w-3xl mx-auto text-center mb-12">
                <span class="inline-block bg-primary/10 text-primary font-bold text-xs uppercase tracking-widest px-4 py-1.5 rounded-full mb-3">
                    Evaluation Approach
                </span>
                <h4 class="text-secondary font-bold text-sm uppercase tracking-widest mb-1">Entrance Assessment Details</h4>
                <h2 class="section-title">Understanding Every Student's Learning Readiness</h2>
                <p class="text-gray-600 text-base leading-relaxed mb-4">
                    At Techno Mission International School, we believe that admission assessments, where applicable, should help the school understand a student's readiness for the next stage of learning.
                </p>
                <p class="text-gray-500 text-sm leading-relaxed italic">
                    The assessment process should be appropriate to the student's age and class. It should focus on understanding existing knowledge, foundational skills and learning readiness rather than creating unnecessary pressure.
                </p>
            </div>

            <!-- 4 Stage Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12 max-w-6xl mx-auto">
                
                <!-- 1. Pre-Primary Admissions -->
                <div class="bg-lightBg rounded-2xl p-8 border border-gray-100 hover:shadow-lg transition">
                    <div class="flex items-center justify-between mb-4">
                        <span class="bg-primary/10 text-primary font-bold text-xs uppercase tracking-wider px-3 py-1 rounded-full">
                            Nursery, LKG & UKG
                        </span>
                        <div class="w-10 h-10 rounded-lg bg-primary text-white flex items-center justify-center text-lg">
                            <i class="fas fa-shapes"></i>
                        </div>
                    </div>
                    <h3 class="nav-font font-bold text-xl text-primary mb-2">Pre-Primary Admissions</h3>
                    <p class="text-gray-600 text-xs md:text-sm leading-relaxed mb-4">
                        For young children, the school may use an age-appropriate interaction or observation-based assessment, depending on its approved admission policy.
                    </p>
                    <div class="bg-white rounded-xl p-4 border border-gray-100 mb-4">
                        <p class="text-xs font-bold text-primary uppercase tracking-wider mb-2">The interaction may involve:</p>
                        <ul class="space-y-2 text-xs text-gray-600">
                            <li class="flex items-center gap-2"><i class="fas fa-circle text-[6px] text-secondary"></i> Basic recognition of colours, shapes, pictures and familiar objects.</li>
                            <li class="flex items-center gap-2"><i class="fas fa-circle text-[6px] text-secondary"></i> Simple conversation and listening activities.</li>
                            <li class="flex items-center gap-2"><i class="fas fa-circle text-[6px] text-secondary"></i> Early number and language awareness appropriate to child's age.</li>
                            <li class="flex items-center gap-2"><i class="fas fa-circle text-[6px] text-secondary"></i> Observation of communication, participation and general readiness.</li>
                        </ul>
                    </div>
                    <p class="text-xs text-secondary font-semibold italic">
                        The process should be welcoming and comfortable for the child.
                    </p>
                </div>

                <!-- 2. Primary Admissions -->
                <div class="bg-lightBg rounded-2xl p-8 border border-gray-100 hover:shadow-lg transition">
                    <div class="flex items-center justify-between mb-4">
                        <span class="bg-secondary/10 text-secondary font-bold text-xs uppercase tracking-wider px-3 py-1 rounded-full">
                            Classes I – V
                        </span>
                        <div class="w-10 h-10 rounded-lg bg-secondary text-white flex items-center justify-center text-lg">
                            <i class="fas fa-cubes"></i>
                        </div>
                    </div>
                    <h3 class="nav-font font-bold text-xl text-primary mb-2">Primary Admissions</h3>
                    <p class="text-gray-600 text-xs md:text-sm leading-relaxed mb-4">
                        For primary classes, an assessment may evaluate foundational skills relevant to the class applied for.
                    </p>
                    <div class="bg-white rounded-xl p-4 border border-gray-100 mb-4">
                        <p class="text-xs font-bold text-primary uppercase tracking-wider mb-2">Areas evaluated may include:</p>
                        <ul class="space-y-2 text-xs text-gray-600">
                            <li class="flex items-center gap-2"><i class="fas fa-circle text-[6px] text-secondary"></i> English or relevant language skills prescribed by the school.</li>
                            <li class="flex items-center gap-2"><i class="fas fa-circle text-[6px] text-secondary"></i> Reading, comprehension and basic writing.</li>
                            <li class="flex items-center gap-2"><i class="fas fa-circle text-[6px] text-secondary"></i> Mathematics, including number recognition and arithmetic.</li>
                            <li class="flex items-center gap-2"><i class="fas fa-circle text-[6px] text-secondary"></i> General awareness and foundational environmental understanding.</li>
                        </ul>
                    </div>
                    <p class="text-xs text-secondary font-semibold italic">
                        The assessment should be aligned with expected learning outcomes of the relevant entry class.
                    </p>
                </div>

                <!-- 3. Middle and Secondary Admissions -->
                <div class="bg-lightBg rounded-2xl p-8 border border-gray-100 hover:shadow-lg transition">
                    <div class="flex items-center justify-between mb-4">
                        <span class="bg-primary/10 text-primary font-bold text-xs uppercase tracking-wider px-3 py-1 rounded-full">
                            Classes VI – X
                        </span>
                        <div class="w-10 h-10 rounded-lg bg-primary text-white flex items-center justify-center text-lg">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                    </div>
                    <h3 class="nav-font font-bold text-xl text-primary mb-2">Middle & Secondary Admissions</h3>
                    <p class="text-gray-600 text-xs md:text-sm leading-relaxed mb-4">
                        For middle and secondary classes, the school may assess the student's understanding of subjects studied in the previous class.
                    </p>
                    <div class="bg-white rounded-xl p-4 border border-gray-100 mb-4">
                        <p class="text-xs font-bold text-primary uppercase tracking-wider mb-2">Depending on entry class, assessment may include:</p>
                        <ul class="space-y-2 text-xs text-gray-600">
                            <li class="flex items-center gap-2"><i class="fas fa-circle text-[6px] text-secondary"></i> English and relevant language skills.</li>
                            <li class="flex items-center gap-2"><i class="fas fa-circle text-[6px] text-secondary"></i> Mathematics and logical reasoning.</li>
                            <li class="flex items-center gap-2"><i class="fas fa-circle text-[6px] text-secondary"></i> Science and application of basic concepts.</li>
                            <li class="flex items-center gap-2"><i class="fas fa-circle text-[6px] text-secondary"></i> Other prescribed subjects under school policy.</li>
                        </ul>
                    </div>
                    <p class="text-xs text-secondary font-semibold italic">
                        Admission to higher classes requires verification of previous records and eligibility satisfaction.
                    </p>
                </div>

                <!-- 4. Senior Secondary Admissions -->
                <div class="bg-lightBg rounded-2xl p-8 border border-gray-100 hover:shadow-lg transition">
                    <div class="flex items-center justify-between mb-4">
                        <span class="bg-secondary/10 text-secondary font-bold text-xs uppercase tracking-wider px-3 py-1 rounded-full">
                            Class XI (Science / Commerce)
                        </span>
                        <div class="w-10 h-10 rounded-lg bg-secondary text-white flex items-center justify-center text-lg">
                            <i class="fas fa-atom"></i>
                        </div>
                    </div>
                    <h3 class="nav-font font-bold text-xl text-primary mb-2">Senior Secondary Admissions — Class XI</h3>
                    <p class="text-gray-600 text-xs md:text-sm leading-relaxed mb-4">
                        Admission to Class XI is subject to successful completion of Class X or an equivalent recognised examination, the school's eligibility requirements, subject availability and seat availability.
                    </p>
                    <div class="bg-white rounded-xl p-4 border border-gray-100 mb-4">
                        <p class="text-xs font-bold text-primary uppercase tracking-wider mb-2">Stream Determination:</p>
                        <p class="text-xs text-gray-600 leading-relaxed">
                            The school may consider the student's Class X results and subject-specific preparedness when determining eligibility for the available streams and subject combinations (Science PCM/PCB, Commerce, and Electives).
                        </p>
                    </div>
                    <p class="text-xs text-secondary font-semibold italic">
                        Formal admission subject to verification of Class X board marksheet & TC.
                    </p>
                </div>

            </div>

            <!-- Assessment Procedure and Communication Card (Redesigned) -->
            <div class="max-w-5xl mx-auto bg-white rounded-2xl p-8 md:p-10 shadow-lg border border-gray-100 relative overflow-hidden">
                <!-- Top Brand Accent Line -->
                <div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-primary via-secondary to-primary"></div>

                <!-- Header Row -->
                <div class="flex flex-col sm:flex-row items-start sm:items-center gap-5 mb-8 pb-6 border-b border-gray-100">
                    <div class="w-14 h-14 rounded-2xl bg-primary/10 text-primary flex items-center justify-center text-2xl shrink-0 shadow-sm border border-primary/20">
                        <i class="fas fa-bullhorn text-secondary"></i>
                    </div>
                    <div>
                        <span class="inline-flex items-center gap-2 bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-xs font-semibold uppercase tracking-wider mb-1">
                            <i class="fas fa-info-circle text-primary"></i> Guidelines & Notice
                        </span>
                        <h3 class="nav-font font-bold text-2xl md:text-3xl text-primary leading-tight">
                            Assessment Procedure & Communication
                        </h3>
                    </div>
                </div>

                <!-- Two-Column Information Highlights -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                    <!-- Point 1 -->
                    <div class="bg-gray-50/80 rounded-xl p-5 border border-gray-100 flex items-start gap-4">
                        <div class="w-10 h-10 rounded-lg bg-white text-secondary shadow-sm flex items-center justify-center text-base shrink-0 mt-0.5 border border-gray-200">
                            <i class="fas fa-calendar-check"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800 text-sm md:text-base mb-1.5">Advance Syllabus & Schedule Notice</h4>
                            <p class="text-gray-600 text-xs md:text-sm leading-relaxed font-normal">
                                The school will communicate the applicable assessment format, date, subjects, syllabus or learning areas, and reporting instructions to parents well before the assessment.
                            </p>
                        </div>
                    </div>

                    <!-- Point 2 -->
                    <div class="bg-gray-50/80 rounded-xl p-5 border border-gray-100 flex items-start gap-4">
                        <div class="w-10 h-10 rounded-lg bg-white text-primary shadow-sm flex items-center justify-center text-base shrink-0 mt-0.5 border border-gray-200">
                            <i class="fas fa-heart"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800 text-sm md:text-base mb-1.5">Supportive & Balanced Transition</h4>
                            <p class="text-gray-600 text-xs md:text-sm leading-relaxed font-normal">
                                Parents are encouraged to ensure that students are familiar with the concepts and skills expected at their current stage of learning. The purpose is to support an appropriate academic transition and identify areas where guidance may be useful.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Note Callout Box -->
                <div class="bg-amber-50/80 border-l-4 border-amber-500 rounded-r-xl p-4 md:p-5 flex items-start gap-3">
                    <i class="fas fa-shield-alt text-amber-600 text-lg mt-0.5 shrink-0"></i>
                    <div class="text-xs md:text-sm text-amber-900 leading-relaxed font-normal">
                        <strong class="font-semibold text-amber-950">Important Note:</strong> The actual assessment format, subjects, syllabus and class-wise requirements will be as prescribed by the school for the relevant admission session.
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
                            <span class="text-base md:text-lg leading-snug">Does TMISB provide hostel or boarding facilities?</span>
                        </span>
                        <i class="fas fa-chevron-down text-xs transition-transform duration-300 shrink-0" :class="activeAccordion === 9 ? 'rotate-180 text-primary' : 'text-gray-400'"></i>
                    </button>
                    <div x-show="activeAccordion === 9" x-collapse x-cloak class="px-6 pb-6 pt-2 text-gray-600 text-sm md:text-base leading-relaxed border-t border-gray-100">
                        <p class="mb-3">
                            Parents interested in residential facilities should contact the school to confirm whether boarding is currently available, the classes eligible for admission, accommodation arrangements, supervision, meal facilities and applicable charges.
                        </p>
                        <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded bg-blue-50 text-primary text-xs font-medium border border-blue-100">
                            <i class="fas fa-info-circle"></i> Please check with the school office regarding operational boarding options, separate boy/girl accommodation rules, and residential fee schedules.
                        </div>
                    </div>
                </div>

                <!-- FAQ 10 -->
                <div class="border border-gray-200 rounded-xl overflow-hidden transition-all duration-300" :class="activeAccordion === 10 ? 'shadow-md border-primary/40 bg-white' : 'hover:border-gray-300 bg-white'">
                    <button @click="activeAccordion = activeAccordion === 10 ? null : 10" class="w-full text-left px-6 py-5 font-bold text-gray-800 flex justify-between items-center focus:outline-none transition-colors" :class="activeAccordion === 10 ? 'bg-primary/5 text-primary' : 'hover:bg-gray-50'">
                        <span class="flex items-center gap-3 pr-4">
                            <span class="w-8 h-8 rounded-lg text-xs font-bold flex items-center justify-center shrink-0 transition-colors" :class="activeAccordion === 10 ? 'bg-primary text-white shadow-sm' : 'bg-gray-100 text-gray-600'">10</span>
                            <span class="text-base md:text-lg leading-snug">How can I obtain the fee structure and confirm admission?</span>
                        </span>
                        <i class="fas fa-chevron-down text-xs transition-transform duration-300 shrink-0" :class="activeAccordion === 10 ? 'rotate-180 text-primary' : 'text-gray-400'"></i>
                    </button>
                    <div x-show="activeAccordion === 10" x-collapse x-cloak class="px-6 pb-6 pt-2 text-gray-600 text-sm md:text-base leading-relaxed border-t border-gray-100">
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