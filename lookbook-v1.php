<?php
/**
 * Template Name: Look Book. V.1
 *
 * A custom Home Page Template
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 */
get_header(); ?>
<?php get_template_part('pgintro'); ?>

<?php
			$args=array(
			'post_type' => 'lookbooks',
			'post_status' => 'publish',
			'posts_per_page' => -1,
			'caller_get_posts'=> 1
			);
			$my_query = null;
			$my_query = new WP_Query($args);
			if( $my_query->have_posts() ) {
			while ($my_query->have_posts()) : $my_query->the_post(); ?>



<div class="band main">
	<div class="pages container">

		<a href="<?php the_permalink() ?>"><?php the_title();?></a>
</div><!-- end of container -->

<?php endwhile;
	}
	wp_reset_query();  // Restore global post data stomped by the_post().
?>


</div><!-- end of main -->
<?php get_footer(); ?>
