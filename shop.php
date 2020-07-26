<?php

session_start();
$product_ids = array();
$product_names = array();
//include("includes/header.php");
//session_destroy();

require_once('config.php');
//include("includes/header.php");

//include("includes/header2.php");
//require_once("component.php");
$database = new config("asbeza", "producttb");


if (filter_input(INPUT_POST, 'add')) {
	if (isset($_SESSION['shopping_cart'])) {

		$count = count($_SESSION['shopping_cart']);
		$product_ids = array_column($_SESSION['shopping_cart'], 'id');
		// $product_names = array_column($_SESSION['shopping_cart'],'name');

		if (!in_array(filter_input(INPUT_GET, 'id'), $product_ids)) {

			$_SESSION['shopping_cart'][$count] = array(
				'id' => filter_input(INPUT_GET, 'id'),
				'name' => filter_input(INPUT_POST, 'name'),
				'price' => filter_input(INPUT_POST, 'price'),
				'quantity' => filter_input(INPUT_POST, 'quantity')
			);
		} else {
			for ($i = 0; $i < count($product_ids); $i++) {
				if ($product_ids[$i] == filter_input(INPUT_GET, 'id')) {
					$_SESSION['shopping_cart'][$i]['quantity'] += filter_input(INPUT_POST, 'quantity');
				}
			}
		}
	} else {
		$_SESSION['shopping_cart'][0] = array(
			'id' => filter_input(INPUT_GET, 'id'),
			'name' => filter_input(INPUT_POST, 'name'),
			'price' => filter_input(INPUT_POST, 'price'),
			'quantity' => filter_input(INPUT_POST, 'quantity')
		);
	}
}

if (filter_input(INPUT_GET, 'action') == 'delete') {
	foreach ($_SESSION['shopping_cart'] as $key => $product) {
		if ($product['id'] == filter_input(INPUT_GET, 'id')) {

			unset($_SESSION['shopping_cart'][$key]);
		}
	}
	$_SESSION['shopping_cart'] =  array_values($_SESSION['shopping_cart']);
}
//print_r($_SESSION);
//pre_r($_SESSION);
function pre_r($array)
{

	echo '<pre>';
	print_r($array);
	echo '</pre>';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- Bootstrap Stylesheet -->


	<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/materialdesignicons.min.css">
	<link rel="stylesheet" href="css/font-awsome/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/aos.css">

	<link rel="stylesheet" href="css/ionicons.min.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">


	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css" />

	<!-- Bootstrap CDN -->
	<link rel="stylesheet" href="/bootstrap.min.css">

	<style>
.table tbody tr td {

	padding-top: 10px;
	padding-bottom: 10px;
    border: 1px solid transparent !important;
	border-bottom: 1px solid rgba(0, 0, 0, 0.05) !important; 
}

	


	</style>
	<!-- Bootstrap Stylesheet -->

</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.php">Asbeza</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="shop.php" class="nav-link">Shop</a></li>

					</li>

					<li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
					<li class="nav-item cta cta-colored">


						<!-- <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="cart-info" href="#" data-toggle="dropdown" aria-expanded="false">
            <span class="icon-shopping-cart">
                <span id="cart-amount">0</span> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              
            <div class="cart-buttons-container mt-3 d-flex justify-content-between">
            <a href="#" id="clear-cart" class="btn ">clear cart</a>
            <a href="#" class="btn btn-secondary">checkout</a>
          </div>
              
              
              </a>
            </div>
          </li> -->


					<li class="nav-item dropdown d-none d-xl-inline-block">
						<a class="nav-link dropdown-toggle" href="" data-toggle="modal" data-target="#cart" aria-expanded="false">
							<span class="icon-shopping-cart"></span>
							<span id="item-count">


								<?php
								$count = 0;
								if (isset($_SESSION['shopping_cart'])) {
									echo count($_SESSION['shopping_cart']);
								} else
									echo $count;
								?>
							</span>

						</a>

						<div id='cart-info' class=" cart dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">


						</div>
						<!-- <a href="#" data-toggle="modal" data-target="#cart" class="btn btn-primary align-content">Add Product</a>  -->

					</li>




					<!-- <div id="cart" class="cart">




            <div class="cart-buttons-container mt-3 d-flex justify-content-between">
            <a href="#" id="clear-cart" class="btn btn-outline-secondary btn-black text-uppercase">clear cart</a>
            <a href="#" class="btn btn-outline-secondary text-uppercase btn-pink">checkout</a>
          </div>
        </div> -->
					<style>

					</style>
					<script>
						//             (function() {
						//   const cartInfo = document.getElementById("cart-info");
						//   console.log(1);


						//   //  const cart = document.getElementById("cart");

						//   cartInfo.addEventListener("click", function() {
						//     console.log(cartInfo);

						//   });
						// })();
						// function add() {
						//   var foo = document.getElementById('cart-amount').innerHTML;
						//   foo++;
						//   document.getElementById('cart-amount').innerHTML = foo;
						// }
					</script>
					<!-- <li class="nav-item"><a href="login.php" class="nav-link">Login/Signup</a></li> -->
					<li class="nav-item">
						<div id="google_translate_element"></div>
					</li>

				</ul>
			</div>
		</div>
	</nav>

	<!-- <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({
        pageLanguage: 'en'
      }, 'google_translate_element');
    }
  </script> -->
	<!-- <button class="btn btn-black" id="testbtn2" name="testbtn2">test</button> -->

	<div class="modal fade" id="details_modal" name="details_modal" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->

			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>

				</div>

				<div class="modal-body" id="detailsmodal">


					<?php
					$result = $database->getData(6);

					$row = $result->fetch_assoc();

					// 
					?>

					<input type="hidden" name="delete_id" id="delete_id">

					<img class="img-fluid" src="<?php echo $row['product_image'] ?>" alt="" style="width: 35% ">

					<h3> <?php echo $row['product_name'] ?> </h3>
					<p class="price"><span> <?php echo $row['product_price'] ?> </span></p>
					<p><?php echo $row['product_detail'] ?></p>
				</div>

			</div>

		</div>
	</div>


	<div  id="cart" class="modal fade" role="dialog">

		<div class="modal-dialog modal-xl" >



			<div  class="modal-content" id="carter">
				<div class="container-fluid">
					<form action="checkout.php" method="POST">

						<div style="clear:both"></div>
						<div class="table-responsive">


							<table class="table">
								<tr>
									<th>
									</th>
								</tr>

								<tr>
									<th>Product name</th>
									<th>Quantity</th>
									<th>Price</th>
									<th>Total</th>
									<th>Action</th>
								</tr>

								<?php
								if (!empty($_SESSION['shopping_cart'])) :

									$total = 0;
									foreach ($_SESSION['shopping_cart'] as $key => $product) :

								?>
										<tr>
											<td><?php echo $product['name']; ?></td>
											<td><?php echo $product['quantity']; ?></td>
											<td><?php echo $product['price']; ?></td>
											<td><?php echo number_format($product['quantity'] * $product['price'], 2); ?></td>
											<input type='hidden' name="name" value="<?php echo $product['name'] ?>">

											<td>
												<a href="shop.php?action=delete&id=<?php echo $product['id'] ?>">
													<div class="btn-danger">Remove</div>
												</a>
											</td>
										</tr>
									<?php
										$total = $total + ($product['quantity'] * $product['price']);

									endforeach;


									?>
									<tr>
										<td style="color: black;" ><big>Total</big></td>
										<td></td>
										<td></td>
										<td>$ <?php echo number_format($total, 2); ?></td>
										<td></td>
									</tr>
									<tr>
										<td>

											<?php
											if (isset($_SESSION['shopping_cart'])) :
												if (count($_SESSION['shopping_cart']) > 0) :
											?>
													<!-- <input type='hidden' name="name" value="<?php //echo $product; echo explode(",",$product)[0]; 
																									?>"> -->
													<input type='hidden' name="price" value="<?php echo $product['price'] ?>">



													<button type="submit" style="border-radius: 20px;" class=" btn btn-outline-primary" name="checkout">Checkout

														<!-- <a href="" class="button">checkout </a> -->
												<?php
												endif;
											endif; ?>
										</td>

									</tr>
								<?php
								endif;
								?>
							</table>
						</div>
					</form>
				</div>
			</div>

		</div>

		<!-- </form> -->

	</div>

	</div>



	<div class="container" style="padding-top: 60px; padding-right: 0px; padding-left: 30px; ">



		<!-- <form class="form-group"> -->
		<div class="input-group">
			<div style="padding-top:5px; padding-right: 10px; padding-left: 30px; ">
				Category
				<select class="" id="catlist">
					<option>All</option>
					<option>Item</option>
					<option>Another Item</option>
					<option>One more item</option>
				</select>
			</div>

			<input style="border-radius: 10px" type='text' name="keyword" id="keyword" placeholder='Search' class='form-control col-md-5'>
			<button type="submit" name="search" id="search" class="btn btn-outline-secondary mx-2">
				<i class="ion-ios-search"></i>
			</button>

		</div>
		<!-- </form> -->
	</div>

	<section class="ftco-section">
		<div class="container">
		<div class="col-md-2 product" id="searched"></div>

			<div class="row">

			 <!-- <div class="col-md-2 product" id="searched">


				</div>  -->

				<?php
				$result = $database->getData();
				while ($row = $result->fetch_assoc()) {
				?>
					<div class='col-md-2 ftco-animate product'>

						<form action="shop.php?action=add&id=<?php echo $row['id'] ?>" method='POST'>
							<div class='product'>
								
								<input type='hidden' name="name" value="<?php echo $row['product_name'] ?>">
								<input type='hidden' name='product_image' value="<?php echo $row['product_image'] ?>">
								<input type='hidden' name="price" value="<?php echo $row['product_price'] ?>">
								<input type='hidden' name="details" value="<?php echo $row['product_detail'] ?>">

								<a name="detailsimage" id='detailsimage' class='img-prod detailsimage' data-toggle='modal' data-target='#details_modal'>
									<img class='img-fluid' src='<?php echo $row['product_image'] ?>' alt=''>
								</a>
								<div class='text py-3 pb-4 px-3 text-center'>

									<h3 id="viewer"><?php echo $row['product_name'] ?></h3>
									<span> <input type='hidden' name='quantity' value='1'>
									</span>

									<!-- <input type='hidden' name='product_id' value='$productid'> -->
									<div class='d-flex'>
										<div class='pricing'>
											<p class='price'>
												<span class='price-sale'>ETB-<?php echo $row['product_price'] ?>
												</span></p>
										</div>
									</div><br>

									<div class='bottom-area d-flex px-3'>
										<div class='m-auto d-flex'>
											<input type='hidden' name="name" value="<?php echo $row['product_name'] ?>">
											<input type='hidden' name='product_image' value="<?php echo $row['product_image'] ?>">
											<input type='hidden' name="price" value="<?php echo $row['product_price'] ?>">
											<input type='hidden' name="details" value="<?php echo $row['product_detail'] ?>">


											<a name="detailsbutton" id='detailsbutton' class='mr-2 detailsbutton d-flex justify-content-center align-items-center text-center' data-toggle='modal' data-target='#details_modal'>
												<span><i class='ion-ios-menu'></i></span>
											</a>

											<button type="submit" class='shop-item-button btn btn-success' name='add' value='add to cart'><i class="ion-ios-cart"></i></button>

											<input type='hidden' name='quantity' value='1'>


											<!-- <input type='hidden' name="product_detail" value='$productdetail'> -->



											<!-- <h3><a href='#'><?php echo $row['inCart'] ?></a></h3> -->

										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				<?php

				}


				// component($row['product_name'], $row['product_price'], $row['product_image'], $row['id'], $row['inCart'], $row['product_detail']);


				?>





			</div>
		</div>
	</section>
	<script>
		// (function() {
		// $("#search").click(function(event) {
		// 	console.log(event.target);

		// var name = $("#keyword").val();
		// console.log(name);
		// //var namei = $("#sub").val();
		// //var upd = $("#up").val();

		// // Returns successful data submission message when the entered information is stored in database.
		// $.post("search.php", {
		// name: name
		// //name2: namei

		// }, function(data) {
		//   //alert(data);
		//   $('#searched').html(data);


		//  // To reset form fields
		// });

		// });
		// });
	</script>
	<?php
	//session_destroy();
	?>
	<div class="view">




	</div>
	<!-- <script type="text/javascript" src="cart.js"></script> -->
	<?php
	include("includes/footer.php");

	?>
	<script>
		(function() {


			let detBtn = document.querySelectorAll(".detailsbutton");
			let dd = document.getElementById("detailsmodal");
			detBtn.forEach(function(btn) {

				btn.addEventListener("click", function(event) {
					$div = $(this).closest("div");

					var data = $div.children("input").map(function() {

							return $(this).val();
						})
						.get();
					let name = data[0];
					let image = data[1];
					let price = data[2];
					let detail = data[3];
					// console.log(name);
					// console.log(image);
					// console.log(price);
					// console.log(detail);


					dd.innerHTML = `
<img class="img-fluid" src="${image}" alt="" style="width: 35% ">

						<h3>${name}</h3>
            <p class="price"><span>ETB-${price}</span></p>
            <p class="detail">${detail}</p>
`;

				});

			});


			
			let detBtn2 = document.querySelectorAll(".detailsimage");
			
			let dd2 = document.getElementById("detailsmodal");

			detBtn2.forEach(function(btn){

				btn.addEventListener("click", function(event) {
					$div = $(this).closest("div");

					var data = $div.children("input").map(function() {

							return $(this).val();
						})
						.get();
					let name = data[0];
					let image = data[1];
					let price = data[2];
					let detail = data[3];
					


					dd.innerHTML = `
<img class="img-fluid" src="${image}" alt="" style="width: 35% ">

						<h3>${name}</h3>
            <p class="price"><span>ETB-${price}</span></p>
            <p class="detail">${detail}</p>
`;

				});

				
				

			});
			



		})();
	</script>

	<script>


	</script>
	<script type="text/javascript" src="search.js"></script>

	<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	<script src="../jquery.slim.min.js"></script>
	<script src="../popper.min.js"></script>
	<script src="../bootstrap.min.js"></script>
	<!-- <script type="text/javascript" src="store.js"></script> -->
	<script src="js/jquery.min.js"></script>