<?php
/**
 * Loop Price
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $product;
?>

<?php if ( $price_html = $product->get_price_html() ) : ?>
	<span class="price"><span class="amount"><?php echo $price_html; ?></span></span>
<?php endif; ?>