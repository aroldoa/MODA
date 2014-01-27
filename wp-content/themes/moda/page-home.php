<?php
/**
 * Template Name: Home Page
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


<div class="band promoarea">
	<div class="container promotion">
		<h1>All Items are 20% off! Enjoy! &mdash; Use Promo Code: <strong>GIVEME20</strong></h1>
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


	<li class="product four columns ">
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



	<div class="bestSellers">

			<h2 class="spb_heading"><span>Best Sellers</span></h2>
			<ul class="products">

		    <?php
	$args = array('post_type' => 'product','post_status'=>'publish','meta_key' => 'total_sales','orderby' => 'meta_value','posts_per_page' =>8);
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

		</div>


	</div><!-- end of container -->
</div><!-- end of main -->

<div class="band pre-footer">
	<div class="container">
		<div class="eight columns alpha">
		<h2 class="pre_heading"><span>Featured Articles</span></h2><br/>

 <?php
	$args = array('post_type' => 'post','post_status'=>'publish','posts_per_page' => 2);
	$loop = new WP_Query($args);
	while ($loop->have_posts() ) : $loop ->the_post(); ?>

			<div class="four columns alpha">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium', array('class' => 'scale-with-grid')); ?></a>
			<h3 class="articletitle"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
			<?php echo excerpt(20); ?>
			<hr class="dot" />
			<div class="three columns alpha post-item-details">
				<span class="post-date"><?php the_date(); ?></span>
			</div>
			<div class="one column omega socialfeed">
				<div class="comments one column"  data-icon="&#xe066;"><span>6</span></div>
			</div>
			</div>
	<?php endwhile; wp_reset_query(); ?>
		</div>
		<div class="eight columns omega">
			<h2 class="pre_heading"><span>Featured Promotions</span></h2><br/>
 <?php
	$args = array('post_type' => 'promotions','post_status'=>'publish','posts_per_page' => 2);
	$loop = new WP_Query($args);
	while ($loop->have_posts() ) : $loop ->the_post(); ?>

			<div class="four columns alpha">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large', array('class' => 'scale-with-grid')); ?></a>
				<h3 class="articletitle"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
			<?php echo excerpt(20); ?>

			<hr class="dot" />
			<div class="post-item-details">
				<span class="post-date"><?php the_date(); ?></span>
			</div>

			</div>
	<?php endwhile; wp_reset_query(); ?>
		</div>
	</div>
</div>


<?php get_footer(); ?>
