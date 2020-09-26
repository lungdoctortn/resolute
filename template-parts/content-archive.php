

<article <?php post_class(array( 'class' => 'blog-post' ) ); ?>>
	<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>

	
	<div class="thumbnail">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'blog-image', array( 'class' => 'archive-image' ) ); ?></a>
	</div>
	<div class="meta-info">
		<p>Posted on <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?> </p>
		<p>Categories: <?php the_category( ', ' ); ?></p>
		<p><?php the_tags('Tags: ', ', ' ); ?></p>		
	</div>

		<!-- <p class="archive__paragraph" ><?php the_excerpt(); ?></p> -->
		<?php add_filter("excerpt_length", "custom_excerpt_length_short", 999); ?>
			<p class="archive__paragraph"><?php the_excerpt(); ?></p>
		<?php remove_filter("excerpt_length", "custom_excerpt_length_short", 999); ?>
</article>
<div class="clear"></div>