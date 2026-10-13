<?php get_header(); ?>
<main class="py-16 bg-white min-h-[50vh]">
    <div class="container mx-auto px-4 max-w-5xl">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                the_title('<h1 class="nav-font font-bold text-3xl md:text-4xl text-primary mb-6">', '</h1>');
                the_content();
            endwhile;
        else :
            echo '<p class="text-gray-600">No content found.</p>';
        endif;
        ?>
    </div>
</main>
<?php get_footer(); ?>