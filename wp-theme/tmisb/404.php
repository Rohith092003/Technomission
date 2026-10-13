<?php get_header(); ?>
<main class="py-24 bg-lightBg min-h-[60vh] flex items-center justify-center text-center">
    <div class="container mx-auto px-4 max-w-xl">
        <span class="w-16 h-16 rounded-2xl bg-secondary/10 text-secondary flex items-center justify-center text-3xl mx-auto mb-6 shadow-sm">
            <i class="fas fa-exclamation-triangle"></i>
        </span>
        <h1 class="nav-font font-extrabold text-5xl md:text-6xl text-primary mb-4">404</h1>
        <h2 class="nav-font font-bold text-2xl text-gray-800 mb-4">Page Not Found</h2>
        <p class="text-gray-600 text-sm md:text-base leading-relaxed mb-8">
            The page you are looking for may have been moved, renamed, or is temporarily unavailable.
        </p>
        <div class="flex justify-center gap-4">
            <a href="<?php echo home_url('/'); ?>" class="bg-primary hover:bg-primaryDark text-white font-bold py-3 px-6 rounded-lg text-sm uppercase tracking-wider transition shadow">
                Back to Home
            </a>
            <a href="<?php echo home_url('/academics/'); ?>" class="bg-secondary hover:bg-red-700 text-white font-bold py-3 px-6 rounded-lg text-sm uppercase tracking-wider transition shadow">
                Explore Academics
            </a>
        </div>
    </div>
</main>
<?php get_footer(); ?>