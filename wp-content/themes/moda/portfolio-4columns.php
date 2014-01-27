<?php
/*
Template Name: 4 Column Portfolio
*/

/* This example is for a child theme of Twenty Thirteen:
*  You'll need to adapt it the HTML structure of your own theme.
*/

get_header(); ?>

<?php get_template_part('pgintro'); ?>

<div class="band main portfolio">
	<div class="container">
<?php
			$args=array(
			'post_type' => 'portfolio',
			'post_status' => 'publish',
			'posts_per_page' => -1,
			'caller_get_posts'=> 1
			);
			$my_query = null;
			$my_query = new WP_Query($args);
			if( $my_query->have_posts() ) {
			while ($my_query->have_posts()) : $my_query->the_post(); ?>


	<div class="four columns portfolio-4col-entry alpha">

		<a href="<?php the_permalink() ?>">

			<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
			the_post_thumbnail('3-columns', array('class' => 'scale-with-grid')); }?>

		</a>

	</div>

<?php endwhile;
	}
	wp_reset_query();  // Restore global post data stomped by the_post().
?>

	</div><!-- end of container -->
</div><!-- end of main -->
<?php get_footer(); ?>