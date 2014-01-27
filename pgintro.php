<div class="band pageTitlebar">
	<div class="container">


		<div class="eight columns alpha">

	<?php wp_reset_query(); ?>

	<?php
		if (is_shop()){

		echo "<h1>Shop</h1>";

		}

		elseif (is_product_category() ) {

		echo "<h1>";
		echo single_cat_title();
		echo "</h1>";

		}

		elseif (is_product() ){

		echo "<h1>";
		echo "Hello";
		echo "</h1>";

		}

		elseif ( is_404() ) {

		echo "<h1>";
		echo "Page Not Found";
		echo "</h1>";

		}

		else {

		echo "<h1>";
		the_title();
		echo "</h1>";

		}
	?>

		</div>

		<div class="eight columns omega">
			<div class="breadcrumbs">

				<?php do_action( 'breadcrumbs' ); ?>

			</div>
		</div>

	</div>
</div>

