<?php
/**
 * Template Name: Contact Us
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
	<div class="googlemap">
		<div class="map-canvas" style="width:100%;height:300px;" data-address="London" data-zoom="14" data-maptype="roadmap" data-pinimage="http://neighborhood.swiftideas.net/wp-content/uploads/2012/10/custom_map_pin.png"></div>
	</div>

	<div class="container">
		<div class="ten columns alpha contactform">
			<h3 class="spb_headingLeft"><span>Contact Us</span></h3>
			<form>
				<label>Your Name (required)</label>
				<input type="text" class="fname" value=""/>

				<label>Your Email (required)</label>
				<input type="text" class="fname" value=""/>

				<label>Subject</label>
				<input type="text" class="fname" value=""/>

				<label>Your Message</label>
				<textarea class="fname" value=""></textarea>

				<button class="black">Submit</button>
			</form>
		</div>
		<div class="five columns offset-by-one omega">
			<h3 class="spb_headingLeft"><span>Stop in and Shop</span></h3>
			<div class="loc-address">
				MM Fashion Boutique<br/>
				1231 Madrid Ave.<br/>
				Madrid, Spain 91231<br/>
			</div>
			<div class="loc-telephone">
				P: (+48) 798 798 798
			</div>
			<div class="loc-email">
				E: <a href="#">hello@mmfashion.com</a>
			</div>
			<div class="loc-twitter">
				Twitter: <a href="#">@MMfashion</a>
			</div>
<?php endwhile; endif; ?>
		</div><!-- end of container -->
	</div><!-- end of main -->
</div>
<?php get_template_part('newsletter-signup'); ?>
<?php get_footer(); ?>
