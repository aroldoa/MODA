<?php include('header.php') ?>
<div class="band pageTitlebar">
	<div class="container">
		<h1>Track your order</h1>
	</div>
</div>

<div class="band breadcrumbs">
	<div class="container">
		<a href="#">Home</a><span data-icon="&#x35;"></span><span>Track your order</span>
	</div>
</div>

<div class="band main">
	<div class="container woocommerce checkout">


	<h2 class="spb_heading centered"><span>Track your order</span></h2>

	<p>To track your order please enter your Order ID in the box below and press return. This was given to you on your receipt and in the confirmation email you should have received.</p>

		<div class="eight columns alpha">

			<form>
				<p>
					<label>Order ID <span class="required">*</span></label>
					<input type="text" class="email-acct" name="email_account_login" id="" placeholder=""  value="" />
				</p>

				<p>
					<button>Track Order</button>
				</p>
			</form>
		</div>
		<div class="eight columns omega">

				<p>
					<label>Billing Email <span class="required">*</span></label>
					<input type="text" class="pass-acct" name="pass_account_login" id="" placeholder=""  value="" />
				</p>
		</div>
	</div><!-- end of container -->
</div><!-- end of main -->

<div class="band pre-footer">
	<div class="container">
		<h3 class="pre_headingCentered centered"><span>Related Products</span></h3>
			<ul class="products">
				<li class="product four columns alpha">
					<div class="product-image">
						<a href="#"><img class="scale-with-grid" src="images/products/bag.jpg" alt="Bag" title="Bag"/></a>
					</div>

					<div class="product-details">
						<h3><a href="#">Aspesi &#8211; Jacket Shirt</a></h3>
						<span class="price"><span class="amount">&#36;260</span></span>
					</div>
				</li> <!-- end of product -->

				<li class="product four columns">
					<div class="product-image">
						<a href="#"><img class="scale-with-grid" src="images/products/checker.jpg" alt="Bag" title="Bag"/></a>
					</div>

					<div class="product-details">
						<h3><a href="#">Canvas HerringBone Bag</a></h3>
						<span class="price"><span class="amount">&#36;260</span></span>
					</div>
				</li> <!-- end of product -->

				<li class="product four columns">
					<div class="product-image">
						<a href="#"><img class="scale-with-grid" src="images/products/sweater.jpg" alt="Bag" title="Bag"/></a>
					</div>

					<div class="product-details">
						<h3><a href="#">Cashmere Sweater</a></h3>
						<span class="price"><span class="amount">&#36;260</span></span>
					</div>
				</li> <!-- end of product -->

				<li class="product four columns omega">
					<div class="product-image">
						<a href="#"><img class="scale-with-grid" src="images/products/dress.jpg" alt="Bag" title="Bag"/></a>
					</div>

					<div class="product-details">
						<h3><a href="#">Checkered Dress</a></h3>
						<span class="price"><span class="amount">&#36;260</span></span>
					</div>
			</li> <!-- end of product -->
		</ul>

	</div>
</div><!-- end of pre-footer area -->

<?php include('footer.php') ?>