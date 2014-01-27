<?php
/*
Template Name: Blog - Full Width
*/

/* This example is for a child theme of Twenty Thirteen:
*  You'll need to adapt it the HTML structure of your own theme.
*/

get_header(); ?>

<?php get_template_part('pgintro'); ?>

<div class="band main">
		<div class="band blogFullWidth">
		<?php
			$args=array(
			'post_type' => 'post',
			'post_status' => 'publish',
			'posts_per_page' => -1,
			'caller_get_posts'=> 1
			);
			$my_query = null;
			$my_query = new WP_Query($args);
			if( $my_query->have_posts() ) {
			while ($my_query->have_posts()) : $my_query->the_post(); ?>



<div class="blogentry odd first">
			<div class="container">
				<div class="post-date"><span><?php the_time('F js Y'); ?></span></div>
					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					<div class="post-tags"><span><a href="#">Fashion</a></span>, <span><a href="#">Collection</a></span>, <span><a href="#">Fall</a></span></div>
					<a href="<?php the_permalink() ?>"><?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
						the_post_thumbnail('', array('class' => 'scale-with-grid'));
						}
						?>
					</a>
					<?php the_excerpt(); ?>
				<div class="post-comments"><?php comments_number(); ?></div>
				<div class="post-social"><a href="#"><span class="socialicons" data-icon="&#xe093;" aria-hidden="true"></span></a><a href="#"><span class="socialicons" data-icon="&#xe094;" aria-hidden="true"></span></a><a href="#"><span class="socialicons" data-icon="&#xe095;" aria-hidden="true"></span></a></div>
				<a href="<?php the_permalink() ?>"><button>Continue Reading</button></a>
			</div>
		</div>

		<?php endwhile;
			}
			wp_reset_query();  // Restore global post data stomped by the_post().
		?>
		</div>
</div><!-- end of main -->
<?php get_template_part('newsletter-signup'); ?>
<?php get_footer(); ?>