<?php
/**
 * Template Name: Home Page V.4
 *
 * A custom Home Page Template
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 */
get_header(); ?>
<div class="band showcase-minified">
	<div class="container">
	<?php putRevSlider("home-fixed") ?>
	</div>
</div>

<div class="band main featuredpromos">
	<div class="container">

	<hr/>
	<?php

	$args = array('post_type' => 'promotions','post_status'=>'publish','posts_per_page' => 2);
	$loop = new WP_Query($args); while ($loop->have_posts() ) : $loop ->the_post(); ?>

	<div class="eight columns newarrivals">



	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large', array('class' => 'scale-with-grid')); ?></a>


	</div><!-- end of New Arrivals Area -->

		<?php endwhile; wp_reset_query(); ?>

	</div><!-- end of main -->
</div>
<div class="clear"></div>

<div class="band pre-footer">
	<div class="container brands">
		<h2 class="pre_headingCentered centered"><span>Brands We Carry</span></h2>
		<ul>
			<li><a href="#"><img src="images/brand1.jpg" /></a></li>
			<li><a href="#"><img src="images/brand2.jpg" /></a></a></li>
			<li><a href="#"><img src="images/brand3.jpg" /></a></a></li>
			<li><a href="#"><img src="images/brand4.jpg" /></a></a></li>
			<li><a href="#"><img src="images/brand6.jpg" /></a></a></li>
			<li><a href="#"><img src="images/brand7.jpg" /></a></li>
		</ul>
	</div>
</div>


<?php get_footer(); ?>
