const fs = require('fs');
let html = fs.readFileSync('index.html', 'utf8');

const startMarker = '<!-- 9. Image Gallery (Smooth Carousel) -->';
const endMarker = '<!-- 10. Latest News -->';

const startIndex = html.indexOf(startMarker);
const endIndex = html.indexOf(endMarker);

if (startIndex !== -1 && endIndex !== -1) {
    const newGallery = `<!-- 9. Image Gallery (Smooth CSS Marquee) -->
    <section class="section-padding bg-lightBg overflow-hidden">
        <div class="container mx-auto px-4 max-w-7xl mb-10">
            <div class="flex justify-between items-end border-b border-gray-200 pb-4">
                <div>
                    <h4 class="text-secondary font-bold text-sm uppercase tracking-wider mb-2">Campus Life</h4>
                    <h2 class="section-title left-align mb-0">Image Gallery</h2>
                </div>
                <a href="gallery.html" class="hidden md:inline-block border border-primary text-primary px-6 py-2 rounded hover:bg-primary hover:text-white transition">View All</a>
            </div>
        </div>
        
        <!-- CSS Marquee -->
        <div class="marquee-container w-full relative overflow-hidden flex items-center" style="padding-bottom: 40px; height: 350px;">
            <div class="marquee-track flex gap-6 absolute left-0">
                <!-- Slide 1 -->
                <div class="w-[300px] md:w-[450px] shrink-0">
                    <div class="rounded-xl overflow-hidden shadow-card h-[250px] md:h-[350px]">
                        <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=800&q=80" alt="Classroom" class="w-full h-full object-cover">
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="w-[300px] md:w-[450px] shrink-0">
                    <div class="rounded-xl overflow-hidden shadow-card h-[250px] md:h-[350px]">
                        <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=800&q=80" alt="Library" class="w-full h-full object-cover">
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="w-[300px] md:w-[450px] shrink-0">
                    <div class="rounded-xl overflow-hidden shadow-card h-[250px] md:h-[350px]">
                        <img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?auto=format&fit=crop&w=800&q=80" alt="Study" class="w-full h-full object-cover">
                    </div>
                </div>
                <!-- Slide 4 -->
                <div class="w-[300px] md:w-[450px] shrink-0">
                    <div class="rounded-xl overflow-hidden shadow-card h-[250px] md:h-[350px]">
                        <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=800&q=80" alt="Computers" class="w-full h-full object-cover">
                    </div>
                </div>
                <!-- Slide 5 -->
                <div class="w-[300px] md:w-[450px] shrink-0">
                    <div class="rounded-xl overflow-hidden shadow-card h-[250px] md:h-[350px]">
                        <img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?auto=format&fit=crop&w=800&q=80" alt="Books" class="w-full h-full object-cover">
                    </div>
                </div>
                <!-- Duplicate for infinite loop -->
                <!-- Slide 1 -->
                <div class="w-[300px] md:w-[450px] shrink-0">
                    <div class="rounded-xl overflow-hidden shadow-card h-[250px] md:h-[350px]">
                        <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=800&q=80" alt="Classroom" class="w-full h-full object-cover">
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="w-[300px] md:w-[450px] shrink-0">
                    <div class="rounded-xl overflow-hidden shadow-card h-[250px] md:h-[350px]">
                        <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=800&q=80" alt="Library" class="w-full h-full object-cover">
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="w-[300px] md:w-[450px] shrink-0">
                    <div class="rounded-xl overflow-hidden shadow-card h-[250px] md:h-[350px]">
                        <img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?auto=format&fit=crop&w=800&q=80" alt="Study" class="w-full h-full object-cover">
                    </div>
                </div>
                <!-- Slide 4 -->
                <div class="w-[300px] md:w-[450px] shrink-0">
                    <div class="rounded-xl overflow-hidden shadow-card h-[250px] md:h-[350px]">
                        <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=800&q=80" alt="Computers" class="w-full h-full object-cover">
                    </div>
                </div>
                <!-- Slide 5 -->
                <div class="w-[300px] md:w-[450px] shrink-0">
                    <div class="rounded-xl overflow-hidden shadow-card h-[250px] md:h-[350px]">
                        <img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?auto=format&fit=crop&w=800&q=80" alt="Books" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
        
        <style>
            .marquee-track {
                /* We have 5 unique slides + 5 duplicated. We animate to shift by half the total width (the unique width).
                   Each slide is 450px + 24px gap = 474px (approx). Total unique track width ~ 2370px.
                   Using transform translatex(-50%) shifts it exactly one full set of images over. */
                width: max-content;
                animation: scrollMarquee 20s linear infinite;
            }
            .marquee-container:hover .marquee-track {
                animation-play-state: paused;
            }
            @keyframes scrollMarquee {
                0% {
                    transform: translateX(0);
                }
                100% {
                    /* Scroll exactly half of the total track width (since we duplicated the set exactly once) */
                    transform: translateX(calc(-50% - 12px));
                }
            }
            @media (max-width: 768px) {
                /* Gap is 24px (gap-6 in tailwind), so half of the single gap is 12px to offset */
            }
        </style>
    </section>

    `;
    
    html = html.substring(0, startIndex) + newGallery + html.substring(endIndex);
    fs.writeFileSync('index.html', html, 'utf8');
    console.log('Gallery updated to CSS Marquee.');
} else {
    console.log('Could not find Gallery section.', startIndex, endIndex);
}
