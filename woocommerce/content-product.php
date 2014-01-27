<?php
/**
 * The template for displaying product content within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $product, $woocommerce_loop;

// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) )
	$woocommerce_loop['loop'] = 0;

// Store column count for displaying the grid
if ( empty( $woocommerce_loop['columns'] ) )
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 );

// Ensure visibility
if ( ! $product->is_visible() )
	return;

// Increase loop count
$woocommerce_loop['loop']++;

// Extra post classes
$classes = array();
if ( 0 == ( $woocommerce_loop['loop'] - 1 ) % $woocommerce_loop['columns'] || 1 == $woocommerce_loop['columns'] )
	$classes[] = 'first';
if ( 0 == $woocommerce_loop['loop'] % $woocommerce_loop['columns'] )
	$classes[] = 'last';
?>
<li <?php post_class( $classes ); ?>>

	<?php do_action( 'woocommerce_before_shop_loop_item' ); ?>

	<a href="<?php the_permalink(); ?>">
	<div class = "cf">
		<?php
			/**
			 * woocommerce_before_shop_loop_item_title hook
			 *
			 * @hooked woocommerce_show_product_loop_sale_flash - 10
			 * @hooked woocommerce_template_loop_product_thumbnail - 10
			 */
			do_action( 'woocommerce_before_shop_loop_item_title' );

			 $args = array(
   			'post_type' => 'attachment',
   			'numberposts' => -1,
  		    'post_status' => null,
  		    'post_parent' => $post->ID,
  		    'orderby' => 'menu_order',
  		    'order'   => 'ASC'

  );

  	$attachments = get_posts( $args );
     if ( $attachments ) {
     $num = 1 ;
     $order = '' ;
        foreach ( $attachments as $attachment ) {
        	if ($num <= 2) {
        	$order = ($num == 1 ) ? 'bottom' : 'top' ;
        	$image_attributes = wp_get_attachment_image_src( $attachment->ID, 'medium' );
			?>
		<img src="<?php echo $image_attributes[0]; ?>" alt="<?php the_title();?>" class = "<?php echo $order ; ?>" width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>">
			<?php
           $num++ ;
       }
          }
     }

		?>
</div>
<div class="product-details">
		<h3><?php the_title(); ?></h3>
		<?php
			/**
			 * woocommerce_after_shop_loop_item_title hook
			 *
			 * @hooked woocommerce_template_loop_price - 10
			 */
			do_action( 'woocommerce_after_shop_loop_item_title' );
		?>
</div>
	</a>

	<?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
</li>
