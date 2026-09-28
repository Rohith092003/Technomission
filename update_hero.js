const fs = require('fs');

let html = fs.readFileSync('index.html', 'utf8');

// 1. Replace the Hero HTML
const htmlStartMarker = '<!-- 3. Hero Section -->';
const htmlEndMarker = '</section>';

const htmlStartIndex = html.indexOf(htmlStartMarker);
const htmlEndIndex = html.indexOf(htmlEndMarker, htmlStartIndex) + htmlEndMarker.length;

if (htmlStartIndex !== -1 && htmlEndIndex !== -1) {
    const newHero = `<!-- 3. Hero Section (Redesigned) -->
    <section class="swiper hero-swiper relative">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide">
                <div class="hero-slide relative flex items-center" style="background-image: url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=1920&q=80');">
                    <!-- Elegant Dark Gradient Overlay for left-aligned text -->
                    <div class="absolute inset-0 bg-gradient-to-r from-primaryDark/90 via-primaryDark/60 to-transparent"></div>
                    
                    <div class="container mx-auto px-4 lg:px-12 relative z-10 w-full">
                        <div class="max-w-3xl animate-fadeInUp">
                            <div class="inline-block border-l-4 border-secondary pl-3 mb-4">
                                <h2 class="text-white font-semibold tracking-[0.15em] text-sm uppercase">Welcome to Techno Mission</h2>
                            </div>
                            <h1 class="text-white nav-font font-extrabold text-5xl md:text-6xl lg:text-7xl leading-tight mb-6">
                                Strong Academics.<br>Future Skills.
                            </h1>
                            <p class="text-gray-200 text-lg md:text-xl mb-10 font-light max-w-2xl leading-relaxed">
                                A future-focused K-12 Day-Cum-Boarding school empowering students through academic excellence, innovation, and character development.
                            </p>
                            <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-5">
                                <a href="admissions.html" class="bg-secondary text-white font-bold py-3.5 px-8 rounded flex items-center justify-center hover:bg-red-800 transition shadow-lg group">
                                    Apply Now <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition"></i>
                                </a>
                                <a href="#" class="bg-transparent border-2 border-white text-white font-bold py-3.5 px-8 rounded flex items-center justify-center hover:bg-white hover:text-primary transition">
                                    Explore Campus
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="swiper-slide">
                <div class="hero-slide relative flex items-center" style="background-image: url('https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=1920&q=80');">
                    <div class="absolute inset-0 bg-gradient-to-r from-primaryDark/90 via-primaryDark/60 to-transparent"></div>
                    
                    <div class="container mx-auto px-4 lg:px-12 relative z-10 w-full">
                        <div class="max-w-3xl">
                            <div class="inline-block border-l-4 border-secondary pl-3 mb-4">
                                <h2 class="text-white font-semibold tracking-[0.15em] text-sm uppercase">World-Class Facilities</h2>
                            </div>
                            <h1 class="text-white nav-font font-extrabold text-5xl md:text-6xl lg:text-7xl leading-tight mb-6">
                                Learn. Grow.<br>Succeed.
                            </h1>
                            <p class="text-gray-200 text-lg md:text-xl mb-10 font-light max-w-2xl leading-relaxed">
                                State-of-the-art smart classrooms, advanced robotics labs, and comprehensive sports complexes designed for holistic development.
                            </p>
                            <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-5">
                                <a href="admissions.html" class="bg-secondary text-white font-bold py-3.5 px-8 rounded flex items-center justify-center hover:bg-red-800 transition shadow-lg group">
                                    Admissions Enquiry <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="swiper-slide">
                <div class="hero-slide relative flex items-center" style="background-image: url('https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?auto=format&fit=crop&w=1920&q=80');">
                    <div class="absolute inset-0 bg-gradient-to-r from-primaryDark/90 via-primaryDark/60 to-transparent"></div>
                    
                    <div class="container mx-auto px-4 lg:px-12 relative z-10 w-full">
                        <div class="max-w-3xl">
                            <div class="inline-block border-l-4 border-secondary pl-3 mb-4">
                                <h2 class="text-white font-semibold tracking-[0.15em] text-sm uppercase">Secure Environment</h2>
                            </div>
                            <h1 class="text-white nav-font font-extrabold text-5xl md:text-6xl lg:text-7xl leading-tight mb-6">
                                A Home Away<br>From Home.
                            </h1>
                            <p class="text-gray-200 text-lg md:text-xl mb-10 font-light max-w-2xl leading-relaxed">
                                Our premium Day-Cum-Boarding facilities ensure students are nurtured in a safe, inspiring, and engaging community.
                            </p>
                            <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-5">
                                <a href="#" class="bg-primary text-white border border-primary font-bold py-3.5 px-8 rounded flex items-center justify-center hover:bg-primaryDark transition shadow-lg">
                                    View Facilities
                                </a>
                                <a href="contact.html" class="bg-transparent border-2 border-white text-white font-bold py-3.5 px-8 rounded flex items-center justify-center hover:bg-white hover:text-primary transition">
                                    Contact Us
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Swiper Navigation -->
        <div class="swiper-pagination !bottom-8"></div>
        <div class="swiper-button-next !text-white !right-8 hidden md:flex opacity-70 hover:opacity-100 transition scale-75"></div>
        <div class="swiper-button-prev !text-white !left-8 hidden md:flex opacity-70 hover:opacity-100 transition scale-75"></div>
    </section>`;

    html = html.substring(0, htmlStartIndex) + newHero + html.substring(htmlEndIndex);
    
    // Update Swiper Config in the script tags
    const scriptStartMarker = "new Swiper('.hero-swiper', {";
    const scriptStartIndex = html.indexOf(scriptStartMarker);
    const scriptEndIndex = html.indexOf('});', scriptStartIndex) + 3;

    if (scriptStartIndex !== -1) {
        const newScript = `new Swiper('.hero-swiper', {
            loop: true,
            effect: 'fade', // Elegant fade transition between slides
            fadeEffect: {
                crossFade: true
            },
            autoplay: {
                delay: 6000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });`;
        html = html.substring(0, scriptStartIndex) + newScript + html.substring(scriptEndIndex);
    }
    
    // Add custom animation for fadeInUp to style.css
    let css = fs.readFileSync('css/style.css', 'utf8');
    if (!css.includes('.animate-fadeInUp')) {
        css += `\n
@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
}
.animate-fadeInUp {
    animation: fadeInUp 1s ease-out forwards;
}
.swiper-slide-active .animate-fadeInUp {
    animation: fadeInUp 1s ease-out forwards;
}
.swiper-slide:not(.swiper-slide-active) .animate-fadeInUp {
    opacity: 0;
}
`;
        fs.writeFileSync('css/style.css', css, 'utf8');
    }

    fs.writeFileSync('index.html', html, 'utf8');
    console.log('Hero section redesigned successfully.');
} else {
    console.log('Could not find Hero Section markers.');
}
