<?php include('header.php') ?>
<div class="band pageTitlebar">
	<div class="container">
		<h1>My Account</h1>
	</div>
</div>

<div class="band breadcrumbs">
	<div class="container">
		<a href="#">Home</a><span data-icon="&#x35;"></span><span>My Account</span>
	</div>
</div>

<div class="band main">
	<div class="container woocommerce checkout">

		<div class="eight columns alpha">

		<h3 class="spb_headingLeft noleftspace"><span>Registered Customers</span></h3>

			<form id="accountlogin" name="acctlogin" method="post" class="accountlogin" action="#">
				<p>
					<label>Username or Email Address <span class="required">*</span></label>
					<input type="text" class="email-acct" name="email_account_login" id="" placeholder=""  value="" />
				</p>
				<p>
					<label>Password <span class="required">*</span></label>
					<input type="text" class="pass-acct" name="pass_account_login" id="" placeholder=""  value="" />
				</p>
				<p>
					<button>Login</button> &nbsp; <span><a href="#">Lost password?</a></span>
				</p>
			</form>
		</div>
		<div class="seven columns omega offset-by-one">

		<h3 class="spb_headingLeft noleftspace"><span>Not Registered?</span></h3>

			<p>Creating an account with Neighborhood is quick and easy, and will allow you to move through our checkout quicker.</p>

			<p>Login using <a href="#">demo</a> as both username and password to view the user area.</p>

			<p><button>Create an account</button></p>


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