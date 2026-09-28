const fs = require('fs');

const file = 'index.html';
let content = fs.readFileSync(file, 'utf8');

const marker = '<!-- 9. Image Gallery -->';
const index = content.indexOf(marker);

if (index !== -1) {
    const achievementsSection = `    <!-- 8.5 Student Achievements -->
    <section class="section-padding bg-lightBg border-y border-gray-100">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-12">
                <h4 class="text-secondary font-bold text-sm uppercase tracking-wider mb-2">Wall of Fame</h4>
                <h2 class="section-title">Student Achievements</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Celebrating the hard work, dedication, and outstanding success of our students in academics, sports, and co-curricular activities.</p>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Achievement 1 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 group relative cursor-pointer">
                    <img src="Achievements/students_achievements_1771715819718_ewu4r8.jpg" alt="Student Achievement" class="w-full h-auto object-contain transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-primary/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-center pb-6">
                        <span class="text-white font-bold bg-secondary px-4 py-1 rounded-full text-xs shadow-lg transform translate-y-4 group-hover:translate-y-0 transition duration-300">View Details</span>
                    </div>
                </div>
                
                <!-- Achievement 2 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 group relative cursor-pointer">
                    <img src="Achievements/students_achievements_1771715822383_5whp8p.jpg" alt="Student Achievement" class="w-full h-auto object-contain transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-primary/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-center pb-6">
                        <span class="text-white font-bold bg-secondary px-4 py-1 rounded-full text-xs shadow-lg transform translate-y-4 group-hover:translate-y-0 transition duration-300">View Details</span>
                    </div>
                </div>
                
                <!-- Achievement 3 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 group relative cursor-pointer">
                    <img src="Achievements/students_achievements_1771715823656_7xpfmn.jpg" alt="Student Achievement" class="w-full h-auto object-contain transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-primary/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-center pb-6">
                        <span class="text-white font-bold bg-secondary px-4 py-1 rounded-full text-xs shadow-lg transform translate-y-4 group-hover:translate-y-0 transition duration-300">View Details</span>
                    </div>
                </div>
                
                <!-- Achievement 4 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 group relative cursor-pointer">
                    <img src="Achievements/students_achievements_1771715825041_n6sp8rg.jpg" alt="Student Achievement" class="w-full h-auto object-contain transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-primary/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-center pb-6">
                        <span class="text-white font-bold bg-secondary px-4 py-1 rounded-full text-xs shadow-lg transform translate-y-4 group-hover:translate-y-0 transition duration-300">View Details</span>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="#" class="inline-flex items-center text-primary font-bold hover:text-secondary transition uppercase tracking-wider text-sm border-b-2 border-primary hover:border-secondary pb-1">View All Achievements <i class="fas fa-arrow-right ml-2"></i></a>
            </div>
        </div>
    </section>

    `;
    
    content = content.substring(0, index) + achievementsSection + content.substring(index);
    fs.writeFileSync(file, content, 'utf8');
    console.log('Achievements section added successfully!');
} else {
    console.log('Could not find Image Gallery marker in index.html');
}
