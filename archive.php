<?php get_header(); ?>

<div class="archive">
    <div class="archive__headline">
        <?php 
            the_archive_title( '<h1 class="archive__headline--title">', '</h1>' );
            the_archive_description( '<h3 class="archive__headline--subtitle">', '</h3>'  );
        ?>
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