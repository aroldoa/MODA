<?php include('header.php') ?>
<div class="band pageTitlebar">
	<div class="container">
		<h1>Checkout</h1>
	</div>
</div>

<div class="band breadcrumbs">
	<div class="container">
		<a href="#">Home</a><span data-icon="&#x35;"></span><span>Checkout</span>
	</div>
</div>

<div class="band main">
	<div class="container woocommerce checkout">

		<div class="checkout-progression">

		</div>

		<div class="ten columns woo-billing alpha">
			<form name="checkout" method="post" class="checkout" action="#">
				<h3 class="spb_headingLeft noleftspace"><span>Billing</span></h3>

				<p id="billing_country_field">
					<label for="billing_country" class="">Country <abbr class="required" title="required">*</abbr></label>
					<select><option value="">Select a country&hellip;</option></select>
				</p>
				<p class="five columns alpha" id="billing_first_name">
					<label>First Name <abbr class="required" title="required">*</abbr></label>
						<input type="text" class="input-text" name="billing_first_name" id="billing_first_name" placeholder=""  value="" />
				</p>
				<p class="five columns omega" id="billing_last_name">
					<label>Last Name <abbr class="required" title="required">*</abbr></label>
						<input type="text" class="input-text" name="billing_last_name" id="billing_last_name" placeholder=""  value="" />
				</p>
				<p id="billing_address_1_field">
					<label>Address <abbr class="required" title="required">*</abbr></label>
						<input type="text" class="input-text" name="billing_address_1" id="billing_address_1" placeholder="Street address"  value="" autocomplete="no" />
				</p>
				<p id="billing_address_2_field">
					<input type="text" class="input-text" name="billing_address_2" id="billing_address_2" placeholder="Apartment, suite, unit etc. (optional)"  value="" autocomplete="no" />
				</p>
				<p class="five columns alpha" id="billing_city">
					<label>City <abbr class="required" title="required">*</abbr></label>
						<input type="text" class="input-text" name="billing_city" id="billing_city" placeholder="Town / City"  value="" autocomplete="no" />
				</p>
				<p class="five columns omega" id="billing_zip">
					<label>Zipcode <abbr class="required" title="required">*</abbr></label>
						<input type="text" class="input-text" name="billing_postcode" id="billing_postcode" placeholder="Postcode / Zip"  value="" autocomplete="no" />
				</p>
				<p id="billing_state">
					<label>State / County</label>
						<input type="text" class="input-text" name="billing_state" id="billing_state" value="" autocomplete="no" placeholder="State / County" />
				</p>
				<p class="five columns alpha" id="billing_email">
					<label>Email Address <abbr class="required" title="required">*</abbr></label>
						<input type="text" class="input-text" name="billing_email" id="billing_email" placeholder=""  value=""/>
				</p>
				<p class="five columns omega" id="billing_phone">
					<label for="billing_phone" class="">Phone <abbr class="required" title="required">*</abbr></label>
						<input type="text" class="input-text" name="billing_phone" id="billing_phone" placeholder=""  value=""/>
				</p>
			</form>
		</div><!-- end of Billing form -->

		<div class="five columns omega offset-by-one">

				<h3 class="spb_headingLeft noleftspace"><span>Your Order</span></h3>

				<table class="shop_tablesmall">
					<thead>
						<tr>
							<th class="product-name">Product</th>
							<th class="product-total">Total</th>
						</tr>
					</thead>
					<tfoot>
						<tr class="cart-subtotal">
							<th>Cart Subtotal</th>
						<td><span class="amount">&#36;463</span></td>
						</tr>

						<tr class="shipping">
							<th>Shipping</th>
							<td>Free Shipping<input type="hidden" name="shipping_method" id="shipping_method" value="free_shipping" /></td>
						</tr>
						<tr class="total">
							<th><strong>Order Total</strong></th>
							<td><strong><span class="amount">&#36;463</span></strong></td>
						</tr>
					</tfoot>
				<tbody>
						<tr class="checkout_table_item">
							<td class="product-name">Lynn Skinny G-star <strong class="product-quantity">&times; 1</strong></td>
							<td class="product-total"><span class="amount">&#36;59</span></td>
						</tr>
						<tr class="checkout_table_item">
							<td class="product-name">Harissa O-Neck Sweat <strong class="product-quantity">&times; 4</strong></td>
							<td class="product-total"><span class="amount">&#36;404</span></td>
						</tr>
				</tbody>
				</table>

				<div id="payment">
					<h3 class="spb_headingLeft noleftspace"><span>Payment Method</span></h3>
						<ul class="payment_methods methods">
							<li><input type="radio" id="payment_method_bacs" class="input-radio" name="payment_method" value="bacs"  checked='checked' /><label for="payment_method_bacs">Direct Bank Transfer </label>
								<div class="payment_box payment_method_bacs">
									<p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order wont be shipped until the funds have cleared in our account.</p>
								</div>
							</li>
							<li><input type="radio" id="payment_method_cheque" class="input-radio" name="payment_method" value="cheque"  /><label for="payment_method_cheque">Cheque Payment </label>
								<div class="payment_box payment_method_cheque" style="display:none;">
									<p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
								</div>
							</li>
							<li><input type="radio" id="payment_method_paypal" class="input-radio" name="payment_method" value="paypal"  /><label for="payment_method_paypal">PayPal <img src="http://flatsome.uxthemes.com/wp-content/plugins/woocommerce/assets/images/icons/paypal.png" alt="PayPal" /></label>
								<div class="payment_box payment_method_paypal" style="display:none;">
									<p>Pay via PayPal; you can pay with your credit card if you don&#8217;t have a PayPal account</p>
								</div>
							</li>
						</ul>

				<div class="form-row place-order">
							<noscript>Since your browser does not support JavaScript, or it is disabled, please ensure you click the <em>Update Totals</em> button before placing your order. You may be charged more than the amount stated above if you fail to do so.<br/>					<input type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="Update totals" /></noscript>
							<input type="hidden" id="_n" name="_n" value="df6a179f2e" /><input type="hidden" name="_wp_http_referer" value="/checkout/" />
							<button>Place order</button>
					</div>
				</div>
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