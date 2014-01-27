<?php
/*
Template Name: Blog - Mini
*/

/* This example is for a child theme of Twenty Thirteen:
*  You'll need to adapt it the HTML structure of your own theme.
*/

get_header(); ?>

<?php get_template_part('pgintro'); ?>

<div class="band main">
	<div class="container">

	<div class="four columns sidebar alpha">
	<?php get_sidebar(); ?>
	</div>


<div class="twelve columns omega blog-listRight">

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

<div class="entry-listing-mini" style="display:block !important;">
				<div class="six columns alpha" style="float:left;">
					<div class="entry-image-mini">
						<a href="<?php the_permalink() ?>"><?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
						the_post_thumbnail('', array('class' => 'scale-with-grid'));
						}
						?>
					</a>
					</div>
				</div><!-- end of six columns -->

				<div class="six columns omega" style="float:right;">
					<div class="entry-title-mini">
						<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					</div>

					<div class="entry-excerpt-mini">
					<?php echo excerpt(35); ?>
					</div>

					<hr/>

					<div class="blog-date-mini">
						<?php the_time('F'); ?> <?php the_time('jS'); ?>, <?php the_time('Y'); ?><div class="comments-mini" data-icon="&#xe066;"><span><?php comments_number(); ?></span></div><div class="likes-mini" data-icon="&#xe089;"><span>23</span></div>
					</div>
				</div><!-- end of six columns -->
		</div><!-- end of listing -->

		<?php endwhile;
			}
			wp_reset_query();  // Restore global post data stomped by the_post().
		?>

		</div><!-- end of twelve columns -->
	</div><!-- end of container -->
</div><!-- end of main -->
<?php get_footer(); ?>