<?php
/**
 * Template Name: Right Sidebar
 *
 * A custom Home Page Template
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 */
get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="post" id="post-<?php the_ID(); ?>">

<?php get_template_part('pgintro'); ?>

<div class="band main">
	<div class="container pages">


	<div class="eleven columns alpha page">

		<?php the_content(); ?>
		<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

		<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
	</div>

	<div class="four columns sidebar omega offset-by-one">

		<?php get_sidebar('page'); ?>

	</div><!-- end of Sidebar -->


	</div><!-- end of container -->
</div><!-- end of main -->
<?php endwhile; endif; ?>
<?php get_footer(); ?>
