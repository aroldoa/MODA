<div class="band footer">
	<div class="container">
		<div class="four columns alpha">

		 <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer One')) : endif; ?>

		</div>
		<div class="four columns">
			<h4 class="spb_heading"><span>About Moda</span></h4>
			<?php wp_nav_menu(array(

							'menu'=> 'About Moda',
							'container' => 'ul',
							'menu_id' =>'footer-menu1',
							'depth'=> '0'

						));?>
		</div>
		<div class="four columns">
			<h4 class="spb_heading"><span>Customer Service</span></h4>
			<ul id="footer-menu2">
				<li><a href="#">F.A.Q's</a></li>
				<li><a href="#">Delivery &amp; Returns</a></li>
				<li><a href="#">Order Tracking</a></li>
				<li><a href="#">Payment</a></li>
				<li><a href="#">Privacy</a></li>
			</ul>
		</div>
		<div class="four columns omega social">
			<h4 class="spb_heading"><span>Follow Us</span></h4>
			<a href="#" class="socialicons" data-icon="&#xe093;" aria-hidden="true"></a><a href="#" class="socialicons" data-icon="&#xe094;" aria-hidden="true"></a><a href="#" class="socialicons" data-icon="&#xe095;" aria-hidden="true"></a><a href="#" class="socialicons" data-icon="&#xe096;" aria-hidden="true"></a><a href="#" class="socialicons" data-icon="&#xe09b;" aria-hidden="true"></a><a href="#" class="socialicons" data-icon="&#xe09a;" aria-hidden="true"></a><a href="#" class="socialicons" data-icon="&#xe09c;" aria-hidden="true"></a><a href="#" class="socialicons" data-icon="&#xe098;" aria-hidden="true"></a>

			<div class="contact-area">

			<h4 class="spb_heading"><span>Contact Us</span></h4>
				<div class="contact-number">(+48) 798 798 798</div>
			</div>
		</div>
	</div>
</div>

<div class="band copyright">
	<div class="container">
		<div class="ten columns alpha">
			&copy; <?php echo date("Y"); echo " "; bloginfo('name'); ?>
		</div>
		<div class="six columns omega">
			<ul id="credit-cards">
				<li><img class="scale-with-grid" src="<?php bloginfo( 'template_directory' ); ?>/images/visa.png" alt="Visa Icon"/></li>
				<li><img class="scale-with-grid" src="<?php bloginfo( 'template_directory' ); ?>/images/amex.png" alt="Visa Icon"/></li>
				<li><img class="scale-with-grid" src="<?php bloginfo( 'template_directory' ); ?>/images/discover.png" alt="Visa Icon"/></li>
				<li><img class="scale-with-grid" src="<?php bloginfo( 'template_directory' ); ?>/images/paypal.png" alt="Visa Icon"/></li>
			</ul>
		</div>
	</div>
</div>

	<?php wp_footer(); ?>
<script>
<?php echo of_get_option('site_analytics','no entry'); ?>
</script>


</body>
</html>
