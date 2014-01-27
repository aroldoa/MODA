<?php
/*
Template Name: Blog - Right Sidebar
*/

/* This example is for a child theme of Twenty Thirteen:
*  You'll need to adapt it the HTML structure of your own theme.
*/

get_header(); ?>

<?php get_template_part('pgintro'); ?>

<div class="band main">
	<div class="container">

<div class="twelve columns alpha blog-listLeft">
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

		<div class="ten columns alpha">
			<div class="entry-listing">

				<div class="entry-image">
					<a href="<?php the_permalink() ?>"><?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
						the_post_thumbnail('', array('class' => 'scale-with-grid'));
						}
						?>
					</a>
				</div><!-- end of entry image -->

			<div class="entry-title">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			</div><!-- end of entry title -->

			<div class="entry-excerpt">
				<?php the_excerpt(); ?>
			</div><!-- end of entry excerpt -->

			</div><!-- end of entry listing -->
			</div><!-- end of ten columns -->

			<div class="two columns omega">
				<div class="blog-date"><?php the_time('F'); ?>, <?php the_time('jS'); ?>
					<span class="blog-year"><?php the_time('Y'); ?></span>
				</div><!-- end of blog date -->
				<div class="comments" data-icon="&#xe066;"><span><?php comments_number(); ?></span>
				</div><!-- end of comments -->
				<div class="likes" data-icon="&#xe089;"><span>23</span>
				</div><!-- end of likes -->
			</div><!-- end of two columns -->

		<?php endwhile;
			}
			wp_reset_query();  // Restore global post data stomped by the_post().
		?>


		</div><!-- end of twelve columns -->


		<div class="four columns sidebar omega">
			<?php get_sidebar(); ?>
		</div>

	</div><!-- end of container -->
</div><!-- end of main -->
<?php get_footer(); ?>