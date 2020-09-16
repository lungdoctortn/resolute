<?php  
	// Template Name: General Template
?>

<?php get_header(); ?>
    <div class="content-area">
    	<main>
    		<section class="middle-area">
    			<div class="container">
					<div class="general-template">
						<?php  

							if( have_posts() ):
								while( have_posts() ): the_post();

						?>
						<article>
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
							<h2><?php the_title(); ?></h2>
							<p><?php the_content(); ?></p>
						</article>

						<?php

								endwhile;
							else:

						?>
						<p>There are no posts to be displayed</p>
						<?php
							endif;
						?>

					</div>   					
    			</div>
    		</section>
    	</main>
    </div>
<?php get_footer(); ?>