<?php

session_start();
//include("includes/header.php");


require_once('config.php');
//include("includes/header.php");

//include("includes/header2.php");
require_once("component.php");
$database = new config("asbeza", "producttb");



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
			<a class="navbar-brand" href="index.html">Asbeza</a>
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
							$num = 0;
$result = $database->getinCart();
echo $result->num_rows;


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
					<li class="nav-item"><a href="login.php" class="nav-link">Login/Signup</a></li>
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

	<div class="modal fade" id="details_modal" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->

			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>

				</div>

				<div class="modal-body" id="detailsmodal">

					<!-- <input type="hidden" name="delete_id" id="delete_id"> -->

					<!-- <img class="img-fluid" src="images/product-7.jpg" alt="" style="width: 35% ">

						<h3>Bell Pepper</h3>
						<p class="price"><span>$120.00</span></p> -->
					<!-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio itaque eligendi aperiam vero, sint, cupiditate ipsum consequatur rem dolor unde asperiores
							ratione natus commodi ipsa eaque dolorum accusamus. Eos, accusantium.</p> -->
				</div>

			</div>

		</div>
	</div>


	<div id="cart" class="modal fade" role="dialog">

		<div class="modal-dialog" role="document">

		<form action="checkout.php" method="GET">


			<div class="modal-content" id="carter">
			
<?php
$result = $database->getinCart();
while ($row = $result->fetch_assoc()) {


	echo $row['product_name'] ."<br>";
}




?>

            
				<div class="cart-total-container d-flex justify-content-around text-capitalize mt-5">
					<h5>total</h5>
					<h5> ETB-  <strong id="cart-total" class="font-weight-bold"></strong> </h5>
				</div>

				<button type="submit" align="right" name="checkout" class="btn btn-success col-md-3 " style="text-align: center" >checkout</button>

				<!-- <a class="dropdown-item mt-2" href="" class="btn btn-warning">Manage Account</a>
	  <a href="#" id="clear-cart" class="dropdown-item btn btn-primary">clear cart</a>

	  <a href="#" class="dropdown-item btn btn-secondary">checkout</a>

	  <a class="btn btn-secondary dropdown-item" href="">Sign Out</a> -->
			</div>
			
			</form>

		</div>
		
	</div>



	<div class="container" style="padding-top: 60px; padding-right: 0px; padding-left: 30px; ">
		<form class="form-group" action="search.php">
			<div class="input-group">
				<input type='text' placeholder='Search' class='form-control col-md-5'>
				<button type="submit" class="btn btn-default">
					<i class="ion-ios-search"></i>
				</button>

			</div>
		</form>
	</div>

	<section class="ftco-section">

		<div class="container">
			<div class="row">
				<?php
				$result = $database->getData();
				while ($row = $result->fetch_assoc()) {
					component($row['product_name'], $row['product_price'], $row['product_image'], $row['id'], $row['inCart'], $row['product_detail']);
				}

				?>





			</div>
		</div>
	</section>
	<!-- <script>
	(function() {
  const cartBtn = document.querySelectorAll(".shop-item-button");

  cartBtn.forEach(function(btn) {
    btn.addEventListener("click", function(event) {
      console.log(event.target);
      let name =
        event.target.parentElement.parentElement.parentElement.children[0].textContent;
		let price =
        event.target.parentElement.parentElement.parentElement.children[1].children[0].children[0].textContent;
	 
		  
    });
  });
  // 
})();

	</script> -->

	<div class="view">




	</div>
	<!-- <script type="text/javascript" src="cart.js"></script> -->
	<?php
	include("includes/footer.php");

	?>
	<script>


	</script>
	<script type="text/javascript" src="app.js"></script>

	<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	<script src="../jquery.slim.min.js"></script>
	<script src="../popper.min.js"></script>
	<script src="../bootstrap.min.js"></script>
	<!-- <script type="text/javascript" src="store.js"></script> -->
	<script src="js/jquery.min.js"></script>