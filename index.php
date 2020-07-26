<?php
// include("includes/header.php");
include("lang.php");

require_once("component.php");
include("config.php");
//session_start();
$database = new config("asbeza", "producttb");
//echo $_SESSION['lang'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
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

	<!-- Bootstrap Stylesheet -->

</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.php"><?php echo $lang['title'] ?></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="index.php" class="nav-link"><?php echo $lang['home'] ?></a></li>
					<li class="nav-item"><a href="shop.php" class="nav-link"><?php echo $lang['shop'] ?></a></li>

					</li>

					<li class="nav-item"><a href="contact.php" class="nav-link"><?php echo $lang['contact'] ?></a></li>
					<!-- <li class="nav-item cta cta-colored"> -->


		





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
					<li  class="nav-item">
					<a style="text-transform: none; padding-right: 0px;" class="nav-link" href="index.php?lang=en" ><?php echo $lang['lang_en'] ?>|</a>
					</li>
					<li class="nav-item" style="padding-left: 0px;" >
					<a style=" text-transform:none; padding-left: 0px; " class="nav-link" href="index.php?lang=am" ><?php echo $lang['lang_am'] ?></a>
					</li>
<!-- 
					<li class="nav-item">
<a class="nav-link" href="index.php?lang=en"><?php echo $lang['lang_en'] ?></a>|<a class="nav-link" href="index.php?lang=am"><?php echo $lang['lang_am'] ?></a> 

					</li> -->

				</ul>
			</div>
		</div>
	</nav>

	<section id="home-section" class="hero">
		<div class="home-slider owl-carousel">
			<div class="slider-item" style="background-image: url(images/bg_4.jpg);">
				<!-- <img src="images/bg_6.jpg" alt=""> -->
				<div class="overlay"></div>
				<div class="container">
					<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

						<div class="col-md-12 ftco-animate text-center">
							<h1 class="mb-2"><?php echo $lang['descr2']?></h1>
							<h2 class="subheading mb-9">We deliver fast &amp; safely</h2>
							<p><a href="shop.php" class="btn btn-success py-2 px-4"><?php echo $lang['shopnow'] ?></a></p>
						</div>

					</div>
				</div>
			</div>

			<div class="slider-item" style="background-image: url(images/bg_9.jpg);">
				<div class="overlay"></div>
				<div class="container">
					<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

						<div class="col-sm-12 ftco-animate text-center">
							<h1 class="mb-2"><?php echo $lang['descr']?></h1>
							<h2 class="subheading mb-4">Order &amp; pay online</h2>
							<p><a href="shop.php" class="btn btn-success py-2 px-4"><?php echo $lang['shopnow'] ?></a></p>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="ftco-section">
		<div class="container">
			<div class="row no-gutters ftco-services">
				<div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services mb-md-0 mb-4">
						<div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
							<span class="flaticon-shipped"></span>
						</div>
						<div class="media-body">
							<h3 class="heading">Fast Delivery</h3>
						</div>
					</div>
				</div>
				<div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services mb-md-0 mb-4">
						<div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
							<span class="flaticon-diet"></span>
						</div>
						<div class="media-body">
							<h3 class="heading">Always Fresh</h3>
						</div>
					</div>
				</div>
				<div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services mb-md-0 mb-4">
						<div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
							<span class="flaticon-award"></span>
						</div>
						<div class="media-body">
							<h3 class="heading">Superior Quality</h3>
						</div>
					</div>
				</div>
				<div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services mb-md-0 mb-4">
						<div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
							<span class="flaticon-customer-service"></span>
						</div>
						<div class="media-body">
							<h3 class="heading">Secure Payment</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div id="cart" class="modal fade" role="dialog">

		<div class="modal-dialog" role="document">
			<div class="modal-content" id="carter">


				<div class="cart-total-container d-flex justify-content-around text-capitalize mt-5">
					<h5>total</h5>
					<h5> $ <strong id="cart-total" class="font-weight-bold"></strong> </h5>
				</div>

				<a href="#" class="checkout dropdown-item btn btn-secondary">checkout</a>

				<!-- <a class="dropdown-item mt-2" href="" class="btn btn-warning">Manage Account</a>
	  <a href="#" id="clear-cart" class="dropdown-item btn btn-primary">clear cart</a>

	  <a href="#" class="dropdown-item btn btn-secondary">checkout</a>

	  <a class="btn btn-secondary dropdown-item" href="">Sign Out</a> -->
			</div>
		</div>

	</div>
	<div class="modal fade" id="detailsmodal" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>

				</div>
				<div class="modal-body">
					<img class="img-fluid" src="images/product-7.jpg" alt="" style="width: 35% ">

					<h3>Bell Pepper</h3>
					<p class="price"><span>$120.00</span></p>
					<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio itaque eligendi aperiam vero, sint, cupiditate ipsum consequatur rem dolor unde asperiores
						ratione natus commodi ipsa eaque dolorum accusamus. Eos, accusantium.</p>
				</div>

			</div>

		</div>
	</div>
	<div class="modal-body" id="details_modal">
		<?php
		// component($row['product_detail']);
		?>

		<!-- <input type="hidden" name="delete_id" id="delete_id"> -->

		<!-- <img class="img-fluid" src="images/product-7.jpg" alt="" style="width: 35% ">

						<h3>Bell Pepper</h3>
						<p class="price"><span>$120.00</span></p> -->
		<!-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio itaque eligendi aperiam vero, sint, cupiditate ipsum consequatur rem dolor unde asperiores
							ratione natus commodi ipsa eaque dolorum accusamus. Eos, accusantium.</p> -->

	</div>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center mb-3 pb-3">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<h2 class="mb-4">Our Products</h2>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<?php
				$result = $database->getData();

				for ($i = 0; $i < 8; $i++) {
					$row = $result->fetch_assoc();
					component($row['product_name'], $row['product_price'], $row['product_image'], $row['id'], $row['inCart'], $row['product_detail']);
				}
				?>

			</div>
		</div>
	</section>


	<footer class="ftco-footer ftco-section">
		<div class="row">
			<div class="mouse">
				<a href="#" class="mouse-icon">
					<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
				</a>
			</div>
		</div>

	</footer>
	<!-- <script type="text/javascript" src="store.js"></script> -->

	<?php
	include("includes/footer.php");
	?>