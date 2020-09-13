<?php get_header(); ?>

<article class="single" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	<header>
		<div class="single__image--background">	
			<div class="single__image--wrapper">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'blog-single-image', array( 'class' => "single-image") ); ?></a>
			</div>
			<!-- <h3 id="importance" data-toggle="modal" data-target="#centralModalInfo"><?php echo get_post_meta($post -> ID, 'importance', true); ?></h3> -->
		</div>
		<h2 class="single__title" ><?php the_title(); ?></h2>
		<div class="meta-info">
            <p>Posted on <?php echo get_the_date(); ?> by <?php 
                while ( have_posts() ): the_post();
                    the_author_posts_link();
                endwhile; 
            ?></p>
			<p>Topics: <?php the_category( ', ' ); ?></p>
			<p><?php the_tags( 'Tags: ', ', ' ); ?></p>
		</div>
	</header>
		<div class="content">
            <?php  
                while ( have_posts() ): the_post();
                    the_content(); 
                endwhile;          
            ?>
        </div>
</article>

<div class="post-pagination-wrapper">
    <div class="post-pagination-wrapper prev">
        <?php  
            previous_post_link(
                '<span class="direction-previous">Previous Article</span>
                <h4>%link</h4>
                ', '%title', false
            );
        ?>
    </div>
    <div class="post-pagination-wrapper next">
        <?php  
            next_post_link(
                '<span class="direction-next">Next Article</span>
                <h4>%link</h4>
                ', '%title', false
            );
        ?>
    </div>
</div>

<?php get_footer(); ?>