import os
import re

with open('about.html', 'r', encoding='utf-8') as f:
    template = f.read()

def generate_page(filename, title, page_header, breadcrumb, nav_target, content_html):
    page = template
    # Update Title
    page = re.sub(r'<title>.*?</title>', f'<title>{title}</title>', page)
    
    # Update Active Nav Link Desktop
    # Reset About Us
    page = page.replace(
        '<a href="about.html" class="text-primary border-b-2 border-primary flex items-center py-2">About Us',
        '<a href="about.html" class="hover:text-primary flex items-center py-2">About Us'
    )
    # Set target to active
    page = page.replace(
        f'<a href="#" class="hover:text-primary flex items-center">{nav_target}',
        f'<a href="#" class="text-primary border-b-2 border-primary flex items-center py-2">{nav_target}'
    )
    
    # Update Page Header and Breadcrumb
    page = re.sub(r'<h1 class="nav-font font-bold text-4xl text-white mb-4">.*?</h1>', f'<h1 class="nav-font font-bold text-4xl text-white mb-4">{page_header}</h1>', page)
    page = re.sub(r'<span class="text-secondary font-semibold">.*?</span>', f'<span class="text-secondary font-semibold">{breadcrumb}</span>', page)
    
    # Replace Content Section
    content_start = page.find('<!-- Content Section -->')
    content_end = page.find('<!-- Footer (Reused) -->')
    
    page = page[:content_start] + content_html + '\n\n    ' + page[content_end:]
    
    with open(filename, 'w', encoding='utf-8') as f:
        f.write(page)


# 1. Academics
academics_content = """<!-- Content Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-16">
                <h2 class="nav-font font-bold text-3xl text-primary mb-4">Academic Excellence</h2>
                <p class="text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Techno Mission International School (TMIS) is affiliated with the Central Board of Secondary Education (CBSE) and offers a comprehensive education from Nursery to Class 12. Our curriculum is designed to foster both academic excellence and holistic development.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                <!-- Primary & Secondary -->
                <div class="bg-gray-50 rounded-lg p-8 shadow hover:shadow-lg transition">
                    <div class="w-16 h-16 bg-primary text-white rounded-full flex items-center justify-center text-2xl mb-6">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <h3 class="nav-font font-bold text-xl text-gray-800 mb-3">Primary & Secondary</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Activity-based learning methods that encourage critical thinking, exploration, and foundational strength in core subjects.
                    </p>
                </div>
                
                <!-- Senior Secondary -->
                <div class="bg-gray-50 rounded-lg p-8 shadow hover:shadow-lg transition">
                    <div class="w-16 h-16 bg-primary text-white rounded-full flex items-center justify-center text-2xl mb-6">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3 class="nav-font font-bold text-xl text-gray-800 mb-3">Senior Secondary (+2)</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Comprehensive streams including PCM, PCB, Commerce, and Arts, allowing students to specialize based on their career aspirations.
                    </p>
                </div>
                
                <!-- Competitive Exams -->
                <div class="bg-gray-50 rounded-lg p-8 shadow hover:shadow-lg transition">
                    <div class="w-16 h-16 bg-primary text-white rounded-full flex items-center justify-center text-2xl mb-6">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3 class="nav-font font-bold text-xl text-gray-800 mb-3">Competitive Preparation</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Specialized coaching and pathways for IIT-JEE, NEET, and other competitive examinations to ensure future success.
                    </p>
                </div>
            </div>
        </div>
    </section>"""
generate_page('academics.html', 'Academics | TMISB', 'Academic Curriculum', 'Academics', 'Academics', academics_content)

# 2. Labs
labs_content = """<!-- Content Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-16">
                <h2 class="nav-font font-bold text-3xl text-primary mb-4">State-of-the-Art Laboratories</h2>
                <p class="text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    We believe in learning by doing. TMISB is equipped with modern, fully-functional laboratories designed to provide practical, hands-on experience that complements theoretical classroom learning.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-16 bg-white p-8 rounded-xl shadow-sm">
                <div>
                    <h3 class="nav-font font-bold text-2xl text-gray-800 mb-4">Science Laboratories</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Our dedicated Physics, Chemistry, and Biology labs are equipped with the latest apparatus and safety measures, enabling students, particularly at the +2 level, to conduct complex experiments and investigatory projects.
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-center text-gray-700"><i class="fas fa-check-circle text-secondary mr-3"></i> Advanced Physics Equipment</li>
                        <li class="flex items-center text-gray-700"><i class="fas fa-check-circle text-secondary mr-3"></i> Safe & Ventilated Chemistry Stations</li>
                        <li class="flex items-center text-gray-700"><i class="fas fa-check-circle text-secondary mr-3"></i> Modern Biology Microscopes & Specimens</li>
                    </ul>
                </div>
                <div class="h-64 bg-gray-200 rounded-lg bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1532094349884-543bc11b234d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80');"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-sm border-t-4 border-primary">
                    <h4 class="font-bold text-lg mb-3">Computer Science</h4>
                    <p class="text-sm text-gray-600">High-speed internet and modern systems to facilitate IT and technology-based learning.</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-sm border-t-4 border-primary">
                    <h4 class="font-bold text-lg mb-3">Robotics Lab</h4>
                    <p class="text-sm text-gray-600">Fostering innovation, coding skills, and logical thinking through hands-on robotics kits.</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-sm border-t-4 border-primary">
                    <h4 class="font-bold text-lg mb-3">Language & Maths Labs</h4>
                    <p class="text-sm text-gray-600">Specialized zones for improving linguistic fluency and understanding complex mathematical concepts visually.</p>
                </div>
            </div>
        </div>
    </section>"""
generate_page('labs.html', 'Laboratories | TMISB', 'Practical Learning', 'Labs', 'Labs', labs_content)

# 3. Activities
activities_content = """<!-- Content Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-16">
                <h2 class="nav-font font-bold text-3xl text-primary mb-4">Beyond the Classroom</h2>
                <p class="text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    TMISB places a strong emphasis on holistic development, integrating a wide range of sports and co-curricular activities into its curriculum to complement academic learning and build character.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                <!-- Sports -->
                <div class="border border-gray-100 rounded-xl overflow-hidden hover:shadow-xl transition">
                    <div class="h-48 bg-gray-200 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1526676037777-05a232554f77?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80');"></div>
                    <div class="p-8">
                        <h3 class="nav-font font-bold text-xl text-gray-800 mb-4"><i class="fas fa-running text-secondary mr-2"></i> Sports & Athletics</h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-4">
                            Physical fitness, team spirit, and discipline are fostered through comprehensive sports programs.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-gray-100 text-gray-700 text-xs px-3 py-1 rounded-full">Cricket</span>
                            <span class="bg-gray-100 text-gray-700 text-xs px-3 py-1 rounded-full">Football</span>
                            <span class="bg-gray-100 text-gray-700 text-xs px-3 py-1 rounded-full">Basketball</span>
                            <span class="bg-gray-100 text-gray-700 text-xs px-3 py-1 rounded-full">Swimming</span>
                            <span class="bg-gray-100 text-gray-700 text-xs px-3 py-1 rounded-full">Yoga</span>
                        </div>
                    </div>
                </div>
                
                <!-- Co-curricular -->
                <div class="border border-gray-100 rounded-xl overflow-hidden hover:shadow-xl transition">
                    <div class="h-48 bg-gray-200 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1514320291840-2e0a9bf2a9ae?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80');"></div>
                    <div class="p-8">
                        <h3 class="nav-font font-bold text-xl text-gray-800 mb-4"><i class="fas fa-palette text-secondary mr-2"></i> Performing & Creative Arts</h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-4">
                            We encourage students to explore their creativity and develop personality traits through diverse artistic mediums.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-gray-100 text-gray-700 text-xs px-3 py-1 rounded-full">Dramatics</span>
                            <span class="bg-gray-100 text-gray-700 text-xs px-3 py-1 rounded-full">Music</span>
                            <span class="bg-gray-100 text-gray-700 text-xs px-3 py-1 rounded-full">Dance</span>
                            <span class="bg-gray-100 text-gray-700 text-xs px-3 py-1 rounded-full">Fine Arts</span>
                            <span class="bg-gray-100 text-gray-700 text-xs px-3 py-1 rounded-full">Debate</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="bg-primary text-white p-8 rounded-xl text-center">
                <h3 class="font-bold text-xl mb-3">Clubs & Societies</h3>
                <p class="text-sm opacity-90 max-w-2xl mx-auto">
                    Students can participate in various clubs including N.C.C., Scouts & Guides, Literary Clubs, and Science Exhibitions to hone their leadership and teamwork skills.
                </p>
            </div>
        </div>
    </section>"""
generate_page('activities.html', 'Co-Curricular Activities | TMISB', 'Activities & Sports', 'Activities', 'Activities', activities_content)

print("Pages generated successfully!")
