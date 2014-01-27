<?php
/**
 * Single Product Meta
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $post, $product;
?>
<div class="product_meta">

	<?php do_action( 'woocommerce_product_meta_start' ); ?>

	<div class="sku">
	<?php if ( $product->is_type( array( 'simple', 'variable' ) ) && get_option( 'woocommerce_enable_sku' ) == 'yes' && $product->get_sku() ) : ?>
		<span itemprop="productID" class="sku_wrapper"><?php _e( 'SKU:', 'woocommerce' ); ?> <span class="sku"><?php echo $product->get_sku(); ?></span></span>
	<?php endif; ?>
	</div>

	<div class="category">

	<?php
		$size = sizeof( get_the_terms( $post->ID, 'product_cat' ) );
		echo $product->get_categories( ', ', '<span class="posted_in">' . _n( 'Category:', 'Categories:', $size, 'woocommerce' ) . ' ', '.</span>' );
	?>

	</div>

	<div class="tags">
	<?php
		$size = sizeof( get_the_terms( $post->ID, 'product_tag' ) );
		echo $product->get_tags( ', ', '<span class="tagged_as">' . _n( 'Tag:', 'Tags:', $size, 'woocommerce' ) . ' ', '.</span>' );
	?>
	</div>


	<div class="socialshare">
			Share:<a href="#"><span class="socialicons" data-icon="&#xe093;" aria-hidden="true"></span></a><a href="#"><span class="socialicons" data-icon="&#xe094;" aria-hidden="true"></span></a><a href="#"><span class="socialicons" data-icon="&#xe095;" aria-hidden="true"></span></a><a href="#"><span class="socialicons" data-icon="&#xe096;" aria-hidden="true"></span></a>
	</div>


	<?php do_action( 'woocommerce_product_meta_end' ); ?>

</div>

<div class="producttabs">
<?php do_action('prodtabs');?>
</div>