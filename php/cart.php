<?php include('header.php')?>
<div class="band pageTitlebar">
	<div class="container">
		<h1>Shopping Cart</h1>
	</div>
</div>

<div class="band breadcrumbs">
	<div class="container">
		<a href="#">Home</a><span data-icon="&#x35;"></span><span>Sweaters</span>
	</div>
</div>

<div class="band main">
	<div class="container woocommerce cartpage">

		<div class="twelve columns alpha">

		<form action="http://demo2.woothemes.com/sliding/cart/" method="post">

		<table class="shop_table cart" cellspacing="0">
				<thead>
					<tr>
						<th class="product-remove">&nbsp;</th>
						<th class="product-thumbnail">&nbsp;</th>
						<th class="product-name">Product</th>
						<th class="product-price">Price</th>
						<th class="product-quantity">Quantity</th>
						<th class="product-subtotal">Total</th>
					</tr>
				</thead>
					<tr class = "cart_table_item">
						<!-- Remove from cart link -->
						<td class="product-remove">
							<a href="#" class="remove" title="Remove this item">&times;</a>
						</td>
						<!-- The thumbnail -->
						<td class="product-thumbnail">
							<a href="#"><img src="images/products/suite.jpg" class="attachment-shop_thumbnail wp-post-image scale-with-grid" alt="1up" width="80px" /></a>
						</td>
						<!-- Product Name -->
						<td class="product-name">
							<a href="#">1up</a><dl class="variation"><dt>Size:</dt><dd>Medium</dd><dt>Colour:</dt><dd>Green</dd></dl>
						</td>
						<!-- Product price -->
						<td class="product-price">
							<span class="amount">&pound;4.96</span>
						</td>
						<!-- Quantity inputs -->
						<td class="product-quantity">
							<div class="quantity"><input type="number" name="cart[ab1a6025223f8b24ecc5c8c6fab61eaf][qty]" step="1" min="" max="" value="1" size="4" title="Qty" class="input-text qty text" maxlength="12" /></div>
						</td>
						<!-- Product subtotal -->
						<td class="product-subtotal">
							<span class="amount">&pound;4.96</span>
						</td>
					</tr>
		</table>
		</form><!-- end of cart input form area-->

		</div>

		<div class="four columns omega">

		<h3 class="spb_headingLeft noleftspace"><span>Your Cart Summary</span></h3>



		</div>
		<div class="clear"></div>

		<div class="seven columns alpha shippingcalc">

			<h3 class="spb_headingLeft noleftspace"><span>Calculate Shipping</span></h3>
			<select>
				<option>Select</option>
				<option>United States</option>
			</select>

			<div class="two columns alpha">
				<input type="text" name="city" value="State"/>
			</div>
			<div class="two columns">
				<input type="text" name="zip" value="Zip"/>
			</div>
			<div class="three columns omega">
				<button>Update Totals </button>
			</div>

		</div><!-- end of shipping calculate area -->

		<div class="five columns omega">

		<h3 class="spb_headingLeft noleftspace"><span>Have a Promo Code?</span></h3>

			<div class="coupon">
				<input type="text" name="coupon_code" class="input-text" id="coupon_code" value="Coupon Code" /><button>Apply</button>
			</div>

		</div><!-- end of coupon area -->

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

<?php include('footer.php')?>