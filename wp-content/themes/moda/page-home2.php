<?php
/**
 * Template Name: Home Page V.2
 *
 * A custom Home Page Template
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 */
get_header(); ?>
<div class="band showcase">
	<?php putRevSlider("home") ?>
</div>

<div class="band promoarea-wide">
	<div class="container">
		<h1>FREE INTERNATIONAL SHIPPING! OFFER ENDS MAY 20TH 2013</h1>
	</div>
</div>

<div class="band main">
	<div class="container">
		<div class="featuredProducts scrollfocus">
	<h2 class="spb_heading"><span>Featured Products</span></h2>
		<ul class="products" id="scrolling">

	<?php
	$args = array('post_type' => 'product','post_status'=>'publish','meta_key' => '_featured','meta_value'=>'yes','posts_per_page' => 8);
	$loop = new WP_Query($args);
	while ($loop->have_posts() ) : $loop ->the_post(); ?>


	<li class="product four columns">
			<div class="product-image">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium', array('class' => 'scale-with-grid')); ?></a>
			</div>

			<div class="product-details">
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<span class="price"><span class="amount"><?php echo $product->get_price_html(); ?></span></span>
			</div>
	</li> <!-- end of product -->


	<?php endwhile; wp_reset_query(); ?>
		</ul>

<a id="scroll_prev" href="#" data-icon="&#xe045;" aria-hidden="true"><span></span></a>
<a id="scroll_next" href="#" data-icon="&#xe046;" aria-hidden="true"><span></span></a>
	</div><!-- end of featured products -->

	</div><!-- end of container -->
</div><!-- end of main -->

<div class="clear"></div>
<div class="band twitbox">
	<div class="container">
		<h2><span>Latest Tweets</span></h2>
		<p>Our Brand New Multi-Purpose WooCommerce WordPress Theme - “Neighborhood”, is now available at ThemeForest <a href="#">http://t.co/anqyNQX3ZV</a></p>
	</div>
</div>
<div class="clear"></div>

<div class="band pre-footer">
	<div class="container">
	<h2 class="pre_headingCentered centered"><span>Featured Articles</span></h2>
 <?php
	$args = array('post_type' => 'post','post_status'=>'publish','posts_per_page' => 4);
	$loop = new WP_Query($args);
	while ($loop->have_posts() ) : $loop ->the_post(); ?>

			<div class="four columns">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium', array('class' => 'scale-with-grid')); ?></a>
			<h3 class="articletitle"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
			<?php echo excerpt(20); ?>
			<hr class="dot"/>
			<div class="two columns alpha post-item-details">
				<span class="post-date"><?php the_date(); ?></span>
			</div>
			<div class="two columns omega socialfeed" style="float:right;">
				<div class="comments"  data-icon="&#xe066;"><span>6</span></div><div class="likes" data-icon="&#xe089;"><span>23</span></div>
			</div>
			</div>
	<?php endwhile; wp_reset_query(); ?>

		</div>

</div>


<?php get_footer(); ?>
