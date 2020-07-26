
<?php
include("includes/header.php");

$id = $_GET['ids'];
echo $id;


?>

<section class="ftco-section ftco-cart">
	<div class="container">
		<div class="row">
			<div class="col-md-9 ftco-animate">
				<div class="cart-list">


					<table class="table">
						<thead class="thead-primary">

							<tr class="text-center">
								<!-- <th>Image</th> -->
								<th>Product name</th>
								<th>Price</th>
								<th>Quantity</th>
								<th>Total</th>

							</tr>
						</thead>
						<tbody>

							<tr class="text-center">

								<!-- <td class="image-prod"><div class="img" style="background-image:url(images/product-3.jpg);"></div></td> -->

								<td class="product-name">
									<h3>Bell Pepper</h3>
								</td>

								<td class="price">$4.90</td>

								<td class="quantity">
									<div class="input-group mb-3">
										<input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
									</div>
								</td>

								<td class="total">$4.90</td>

							</tr><!-- END TR-->

							<tr class="text-center">

								<!-- <td class="image-prod"><div class="img" style="background-image:url(images/product-4.jpg);"></div></td> -->

								<td class="product-name">
									<h3>kirubel</h3>
								</td>

								<td class="price">$15.70</td>

								<td class="quantity">
									<div class="input-group mb-3">
										<input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
									</div>
								</td>

								<td class="total">$15.70</td>

							</tr><!-- END TR-->
						</tbody>
					</table>
				</div>
			</div>
			<div class="col-md-3">

				<div class="cart-total mb-3">
					<h3>Cart Totals </h3>
					<p class="d-flex">
						<span>Subtotal</span>
						<span>$20.60</span>
					</p>
					<p class="d-flex">
						<span>Delivery</span>
						<span>$0.00</span>
					</p>
					<p class="d-flex">
						<span>Discount</span>
						<span>$3.00</span>
					</p>
					<hr>
					<p class="d-flex total-price">
						<span>Total</span>
						<span>$17.60</span>
					</p>
				</div>
				<p><a href="login.php" class="btn btn-primary">Checkout</a></p>
				</<div>
			</div>
		</div>

	</div>
</section>
<div id="cart-table">



</div>
<!-- <script>
console.log(cart);

</script> -->
 <script type="text/javascript" src="cart.js"></script> 

<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/scrollax.min.js"></script>
<!-- <script src="js/google-map.js"></script> -->
<script src="js/main.js"></script>
<script src="bootstrap.min.js"></script>
<script src="jquery.slim.min.js"></script>
<script src="popper.min.js"></script>
<script src="function.js"></script>
<?php
include("includes/footer.php")
?>