<?php
/*
Template Name: Blog - Masonry
*/

/* This example is for a child theme of Twenty Thirteen:
*  You'll need to adapt it the HTML structure of your own theme.
*/

get_header(); ?>

<?php get_template_part('pgintro'); ?>

<div class="band main blog">
	<div class="container" id="masonry">
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

			<div class="item blogentry">
					<a href="<?php the_permalink() ?>"><?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
						the_post_thumbnail('', array('class' => 'scale-with-grid')); } ?>
					</a>
					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					<p><?php the_excerpt(); ?></p>
			</div><!-- end of entry image -->

		<?php endwhile;
			}
			wp_reset_query();  // Restore global post data stomped by the_post().
		?>



	</div><!-- end of container -->
</div><!-- end of main -->
<?php get_footer(); ?>