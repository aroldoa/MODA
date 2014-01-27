<?php get_header(); ?>

<?php get_template_part('pgintro'); ?>


<div class="band main">
	<div class="container pages">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<?php the_content(); ?>
		</div>

	<?php endwhile; ?>
	<?php else : ?>
		<h2>Not Found</h2>
	<?php endif; ?>

</div><!-- end of container -->
</div><!-- end of main -->
<?php get_footer(); ?>
