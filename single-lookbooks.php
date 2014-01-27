<?php get_header(); ?>

<?php get_template_part('pgintro'); ?>

<div class="band main">
	<div class="container blog blog-listRight">

 <?php $query = new WP_Query( array( 'post_type' => 'lookbooks', 'paged' => $paged ));
		if ( $query->have_posts() ) : ?>
    <?php while ( $query->have_posts() ) : $query->the_post(); ?>

 <?php the_content(); ?>

      <?php endwhile;?>
      <?php endif; ?>


	</div><!-- end of container -->
</div><!-- end of main -->
<?php get_footer(); ?>