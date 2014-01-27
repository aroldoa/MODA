<?php get_header(); ?>

<?php get_template_part('pgintro'); ?>

<div class="band main">
	<div class="container blog">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

		<div class="entry-listing">
			<div class="entry-content-single">
				<?php the_content(); ?>
				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				<?php the_tags( 'Tags: ', ', ', ''); ?>
				<?php edit_post_link('Edit this entry','','.'); ?>
			</div>

				<div class="blog-socialshare">
				Share: <a href="#"><span class="socialicons" data-icon="&#xe093;" aria-hidden="true"></span></a><a href="#"><span class="socialicons" data-icon="&#xe094;" aria-hidden="true"></span></a><a href="#"><span class="socialicons" data-icon="&#xe095;" aria-hidden="true"></span></a><a href="#"><span class="socialicons" data-icon="&#xe096;" aria-hidden="true"></span></a>
			</div>

			</div><!-- end of entry -->
		</div><!-- end of post class-->
		<?php endwhile; endif; ?>

	</div><!-- end of container -->
</div><!-- end of main -->
<?php get_footer(); ?>