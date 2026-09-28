const fs = require('fs');

let html = fs.readFileSync('index.html', 'utf8');

const idx = html.indexOf('<!-- View All button -->');
if (idx !== -1) {
    const newNoticeStr = `<!-- Notice Item -->
                            <div class="flex gap-4 p-4 bg-white rounded-xl shadow-sm hover:shadow-md transition border border-gray-50 hover:border-primary/20 group">
                                <div class="flex flex-col items-center justify-center bg-gray-50 text-gray-500 rounded-lg min-w-[60px] h-[60px] shrink-0 border border-gray-100">
                                    <span class="text-xl font-bold leading-none">25</span>
                                    <span class="text-xs uppercase font-semibold mt-1">Sep</span>
                                </div>
                                <div class="flex items-center">
                                    <h4 class="font-bold text-gray-800 text-sm group-hover:text-primary transition leading-snug"><a href="#">School Closed for Public Holiday on Friday</a></h4>
                                </div>
                            </div>
                            `;
                            
    html = html.substring(0, idx) + newNoticeStr + html.substring(idx);
    fs.writeFileSync('index.html', html, 'utf8');
    console.log('Added 5th notice');
} else {
    console.log('Could not find View All button comment');
}
