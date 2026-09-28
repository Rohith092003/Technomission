const fs = require('fs');

const template = fs.readFileSync('about.html', 'utf8');

function generateAdmissions() {
    let page = template;
    
    // Update Title
    page = page.replace(/<title>.*?<\/title>/, `<title>Admissions | TMISB</title>`);
    
    // Reset About Us active link
    page = page.replace(
        '<a href="about.html" class="text-primary border-b-2 border-primary flex items-center py-2">About Us',
        '<a href="about.html" class="hover:text-primary flex items-center py-2">About Us'
    );
    
    // Update Page Header and Breadcrumb
    page = page.replace(
        /<h1 class="nav-font font-bold text-4xl text-white mb-4">.*?<\/h1>/,
        `<h1 class="nav-font font-bold text-4xl text-white mb-4">Admissions 2026–27</h1>`
    );
    page = page.replace(
        /<span class="text-secondary font-semibold">.*?<\/span>/,
        `<span class="text-secondary font-semibold">Admissions</span>`
    );
    
    const admissionsContent = `<!-- Content Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 max-w-7xl">
            
            <div class="flex flex-col lg:flex-row gap-12">
                
                <!-- Left: Info & Process -->
                <div class="w-full lg:w-1/2">
                    <h2 class="nav-font font-bold text-3xl text-primary mb-6">Welcome to TMISB</h2>
                    <p class="text-gray-600 mb-8 leading-relaxed">
                        We are thrilled that you are considering Techno Mission International School for your child's education. We seek students who are enthusiastic, curious, and ready to embrace our holistic educational approach.
                    </p>
                    
                    <h3 class="nav-font font-bold text-2xl text-gray-800 mb-6">Admission Process</h3>
                    <div class="space-y-6 relative before:absolute before:inset-0 before:ml-5 before:-translate-x-px md:before:mx-auto md:before:translate-x-0 before:h-full before:w-0.5 before:bg-gradient-to-b before:from-transparent before:via-gray-300 before:to-transparent">
                        
                        <!-- Step 1 -->
                        <div class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group is-active">
                            <div class="flex items-center justify-center w-10 h-10 rounded-full border border-white bg-secondary text-black font-bold shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2 shadow">
                                1
                            </div>
                            <div class="w-[calc(100%-4rem)] md:w-[calc(50%-2.5rem)] p-4 rounded-xl border border-gray-200 bg-white shadow-sm">
                                <h4 class="font-bold text-lg text-primary mb-1">Registration</h4>
                                <p class="text-sm text-gray-600">Fill out the online application form with the student's details.</p>
                            </div>
                        </div>
                        
                        <!-- Step 2 -->
                        <div class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group is-active">
                            <div class="flex items-center justify-center w-10 h-10 rounded-full border border-white bg-secondary text-black font-bold shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2 shadow">
                                2
                            </div>
                            <div class="w-[calc(100%-4rem)] md:w-[calc(50%-2.5rem)] p-4 rounded-xl border border-gray-200 bg-white shadow-sm">
                                <h4 class="font-bold text-lg text-primary mb-1">Interaction / Test</h4>
                                <p class="text-sm text-gray-600">A brief interaction session or aptitude test depending on the grade applied for.</p>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group is-active">
                            <div class="flex items-center justify-center w-10 h-10 rounded-full border border-white bg-secondary text-black font-bold shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2 shadow">
                                3
                            </div>
                            <div class="w-[calc(100%-4rem)] md:w-[calc(50%-2.5rem)] p-4 rounded-xl border border-gray-200 bg-white shadow-sm">
                                <h4 class="font-bold text-lg text-primary mb-1">Document Verification</h4>
                                <p class="text-sm text-gray-600">Submit required documents (Birth Certificate, Previous Report Card, Aadhar).</p>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <!-- Right: Application Form -->
                <div class="w-full lg:w-1/2">
                    <div class="bg-white p-8 md:p-10 rounded-2xl shadow-xl border-t-4 border-primary">
                        <div class="text-center mb-8">
                            <h3 class="nav-font font-bold text-2xl text-gray-800">Apply Online</h3>
                            <p class="text-gray-500 text-sm mt-2">Fill out the form below to begin the admission process for the 2026-27 session.</p>
                        </div>
                        
                        <form class="space-y-5">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-1">Student's Name</label>
                                    <input type="text" placeholder="John Doe" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition bg-gray-50 focus:bg-white">
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-1">Date of Birth</label>
                                    <input type="date" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition bg-gray-50 focus:bg-white text-gray-600">
                                </div>
                            </div>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-1">Parent's Name</label>
                                    <input type="text" placeholder="Mr. Robert Doe" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition bg-gray-50 focus:bg-white">
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-1">Phone Number</label>
                                    <input type="tel" placeholder="+91 XXXXX XXXXX" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition bg-gray-50 focus:bg-white">
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Email Address</label>
                                <input type="email" placeholder="email@example.com" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition bg-gray-50 focus:bg-white">
                            </div>
                            
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Grade Applying For</label>
                                <select class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition bg-gray-50 focus:bg-white text-gray-600">
                                    <option value="" disabled selected>Select a Grade</option>
                                    <option value="nursery">Nursery / LKG / UKG</option>
                                    <option value="primary">Primary (Class 1-5)</option>
                                    <option value="secondary">Secondary (Class 6-10)</option>
                                    <option value="senior">Senior Secondary (Class 11-12)</option>
                                </select>
                            </div>

                            <button type="button" class="w-full bg-primary hover:bg-blue-800 text-white font-bold py-4 rounded-lg shadow-md transition duration-300 mt-4 flex justify-center items-center">
                                Submit Application <i class="fas fa-paper-plane ml-2"></i>
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>`;
    
    // Replace Content Section
    const contentStart = page.indexOf('<!-- Content Section -->');
    const contentEnd = page.indexOf('<!-- Footer (Reused) -->');
    
    page = page.substring(0, contentStart) + admissionsContent + '\n\n    ' + page.substring(contentEnd);
    
    fs.writeFileSync('admissions.html', page, 'utf8');
}

generateAdmissions();
console.log('admissions.html generated successfully!');
