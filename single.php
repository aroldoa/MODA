<?php get_header(); ?>

<?php get_template_part('pgintro'); ?>

<div class="band main">
	<div class="container">
		<div class="four columns sidebar alpha">
			<?php get_sidebar(); ?>
		</div><!-- end of Sidebar -->

<div class="twelve columns omega blog blog-listRight">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<div class="entry-listing">
				<?php if (has_post_thumbnail()) {
					$image_url = wp_get_attachment_image_src(get_post_thumbnail_id(),'large', true);
					echo '<div class="entry-image"> <a href="' . $image_url[0] .'" title="' . the_title_attribute('echo=0') . '">';
						 the_post_thumbnail();
					echo '</a></div>';
					} else {

					}
				?>
			<div class="entry-content">

			<h2><?php the_title(); ?></h2>
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

			<div class="blog-comments">

				<?php comments_template(); ?>

			</div><!-- end of blog Comments-->

		<?php endwhile; endif; ?>

		</div>
	</div><!-- end of container -->
</div><!-- end of main -->
<?php get_footer(); ?>