<?php
/**
 * Template Name: Home Page V.3
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

<div class="band">
	<div class="container promoarea-callout">
		<div class="stroke">
		<h1>FREE INTERNATIONAL SHIPPING! OFFER ENDS MAY 20TH 2013 <span class="social-icons" data-icon="&#xe018;"></span></h1>
		</div>
	</div>
</div>

<div class="band main">
	<div class="container">
		<div class="eight columns newarrivals">
			<h2 class="spb_heading centered"><span>New Arrivals</span></h2>

		<div class="four columns alpha">
		<ul class="products">

	<?php
	$args = array('post_type' => 'product','post_status'=>'publish','meta_key' => '_featured','meta_value'=>'yes','posts_per_page' => 2);
	$loop = new WP_Query($args);
	while ($loop->have_posts() ) : $loop ->the_post(); ?>

				<li class="product">
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

		<div class="four columns omega">
		<ul class="products">

	<?php
	$args = array('post_type' => 'product','post_status'=>'publish','meta_key' => '_featured','meta_value'=>'yes','posts_per_page' => 2, 'offset' => 2);
	$loop = new WP_Query($args);
	while ($loop->have_posts() ) : $loop ->the_post(); ?>

				<li class="product">
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

		</div><!-- end of New Arrivals Area -->

		<div class="eight columns lookbook">
			<h2 class="spb_heading centered"><span>Fall Look Book</span></h2>


    <?php $query = new WP_Query( array( 'post_type' => 'lookbooks', 'paged' => $paged ));
		if ( $query->have_posts() ) : ?>
    <?php while ( $query->have_posts() ) : $query->the_post(); ?>

    <ul id="lookbook-slider">

<?php
if ( $post->post_type == 'lookbooks' && $post->post_status == 'publish' ) {
		$attachments = get_posts( array(
			'post_type' => 'attachment',
			'posts_per_page' => -1,
			'post_parent' => $post->ID,
			'exclude'     => get_post_thumbnail_id()
		) );

		if ( $attachments ) {
			foreach ( $attachments as $attachment ) {
				$class = "post-attachment mime-" . sanitize_title( $attachment->post_mime_type );
				$thumbimg = wp_get_attachment_link( $attachment->ID, 'scale-with-grid', true );
				echo '<li class="' . $class . ' data-design-thumbnail">' . $thumbimg . '</li>';
			}

		}
	}
?>
</ul>

      <?php endwhile;?>
      <?php endif; ?>


	</div><!-- end of container -->
</div><!-- end of main -->
</div>
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
	<div class="four columns min-list">

		<h2 class="pre_heading"><span>Featured Items</span></h2>
		<ul class="mini-list">
	<?php
	$args = array('post_type' => 'product','post_status'=>'publish','meta_key' => '_featured','meta_value'=>'yes','posts_per_page' => 3);
	$loop = new WP_Query($args);
	while ($loop->have_posts() ) : $loop ->the_post(); ?>

		<li class="mini-list-item four columns alpha">

					<figure>
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small', array('class' => 'scale-with-grid')); ?></a>
					</figure>

					<div class="product-details">
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<span class="amount"><?php echo $product->get_price_html(); ?></span>
					</div>
		</li> <!-- end of product -->

	<?php endwhile; wp_reset_query(); ?>
		</ul>
	</div><!-- end of min-list -->


		<div class="four columns min-list">

		<h2 class="pre_heading"><span>Best Sellers</span></h2>
		<ul class="mini-list">
	<?php
	$args = array('post_type' => 'product','post_status'=>'publish','meta_key' => 'total_sales','posts_per_page' => 3);
	$loop = new WP_Query($args);
	while ($loop->have_posts() ) : $loop ->the_post(); ?>

		<li class="mini-list-item four columns alpha">

					<figure>
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small', array('class' => 'scale-with-grid')); ?></a>
					</figure>

					<div class="product-details">
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<span class="amount"><?php echo $product->get_price_html(); ?></span>
					</div>
		</li> <!-- end of product -->

	<?php endwhile; wp_reset_query(); ?>
		</ul>
	</div><!-- end of min-list -->


		<div class="four columns min-list">

		<h2 class="pre_heading"><span>Top Rated</span></h2>
		<ul class="mini-list">
	<?php
	$args = array('post_type' => 'product','post_status'=>'publish','meta_key' => '_featured','meta_value'=>'yes','posts_per_page' => 3);
	$loop = new WP_Query($args);
	while ($loop->have_posts() ) : $loop ->the_post(); ?>

		<li class="mini-list-item four columns alpha">

					<figure>
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small', array('class' => 'scale-with-grid')); ?></a>
					</figure>

					<div class="product-details">
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<span class="amount"><?php echo $product->get_price_html(); ?></span>
					</div>
		</li> <!-- end of product -->

	<?php endwhile; wp_reset_query(); ?>
		</ul>
	</div><!-- end of min-list -->


		<div class="four columns min-list">

		<h2 class="pre_heading"><span>Sale Items</span></h2>
		<ul class="mini-list">
	<?php
	$args = array('post_type' => 'product','post_status'=>'publish','meta_key' => '_featured','meta_value'=>'yes','posts_per_page' => 3);
	$loop = new WP_Query($args);
	while ($loop->have_posts() ) : $loop ->the_post(); ?>

		<li class="mini-list-item four columns alpha">

					<figure>
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small', array('class' => 'scale-with-grid')); ?></a>
					</figure>

					<div class="product-details">
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<span class="amount"><?php echo $product->get_price_html(); ?></span>
					</div>
		</li> <!-- end of product -->

	<?php endwhile; wp_reset_query(); ?>
		</ul>
	</div><!-- end of min-list -->



	</div>
</div>
<?php get_footer(); ?>
