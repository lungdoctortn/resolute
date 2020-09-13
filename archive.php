<?php get_header(); ?>

<div class="archive">
    <div class="archive__headline">
        <div class="archive__headline--title"></div>
        <div class="archive__headline--subtitle"></div> 
    </div>
    <div class="archive__content">
        <?php while ( have_posts() ) : the_post(); // standard WordPress loop. ?>

        <?php get_template_part( 'template-parts/content', 'archive' ); // loading our custom file. ?>

        <?php endwhile; // end of the loop. ?>
    </div>
    <div class="archive__sidebar">
            
    </div>
</div>

<?php get_footer(); ?>