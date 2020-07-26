<?php
    include("config.php");
    session_start();
    // $id = $_POST['id'];
    if (isset($_POST['checkout'])) {
        $name = $_POST['name'];
        $price = $_POST['price'];

        foreach ($_SESSION['shopping_cart'] as $key => $product) {
        //     echo $product['name'];
        //     echo $product['price'];
        //     echo $product['quantity'];
         }
    } else {
        // echo "asdfasdadweeretyuuk";
    }


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
<style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 45%;
        width: 50%;
      }
      /* Optional: Makes the sample page fill the window. */
     
    </style>
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

                    <!-- <li class="nav-item"><a href="login.php" class="nav-link">Login/Signup</a></li> -->
                    <li class="nav-item">
                        <div id="google_translate_element"></div>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

	<div id="cart" class="modal fade" role="dialog">

		<div class="modal-dialog" >



				<div class="modal-content" id="carter">
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
									<td align="right">Total</td>
									<td align="right">$ <?php echo number_format($total, 2); ?></td>
									<td></td>
								</tr>
								<tr>
									<td>

										<?php
										if (isset($_SESSION['shopping_cart'])) :
											if (count($_SESSION['shopping_cart']) > 0) :
										?>
												<!-- <input type='hidden' name="name" value="<?php //echo $product; echo explode(",",$product)[0]; ?>"> -->
												<input type='hidden' name="price" value="<?php echo $product['price'] ?>">



												<button type="submit" class="btn btn-default" name="checkout">Checkout

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
	</div>

    


<form action="php_stripe_paypage/index.php" method="post" >
  <section class="ftco-section ftco-cart">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input style="border-radius: 11px;" type="text" class="form-control" name="firstName" id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input style="border-radius: 11px;" type="text" class="form-control" name="lastName" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
              <div class="col-md-12 mb-3">
              <label for="email">Email <span class="text-muted">(Optional)</span></label>
              <input style="border-radius: 11px;" type="email" class="form-control" name="email" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>
            <!-- <div class="col-md-11 mb-3">
              <label for="address">Address</label>
              <input style="border-radius: 22px;" type="text" class="form-control" id="address" placeholder="1234 Main St" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div> -->

            <div class="col-md-8 mb-3">
            <h4 class="mb-3">Payment</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                <label class="custom-control-label" for="credit">Credit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="cashondelivery" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="cashondelivery">Cash on Delivery</label>
              </div>
            
            </div>
            </div>



            </div>   
            <h3>Delivery </h3>

            <div class="row" id="map">

</div>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                <label class="custom-control-label" for="credit">Current location</label>
              </div>
                      <h4 style="color: black;" > OR</h4>
              <div class="custom-control custom-radio">
                <input id="cashondelivery" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="debit">Give another address </label>
              </div>
              
            
            </div>
            
<input style="border-radius: 11px;" type="submit" class="col-md-10 btn btn-primary" value="Continue">
            <!-- <p><a style="border-radius: 11px;" href="./php_stripe_paypage/index.php" type="submit" class="col-md-10 btn btn-primary">Continue </a></p> -->
                 


			</div>

  <div class="col-md-4">

<div class="cart-total mb-3">
    <h3>Cart Totals </h3>
    <p class="d-flex">
        <span>Item</span>
        <span>Price</span>
        <span>Quantity</span>
    </p>

    <?php
  $total = 0;
  foreach ($_SESSION['shopping_cart'] as $key => $product) {
    $total = $total + ($product['quantity'] * $product['price']);


    echo '<p class="d-flex">
    <span>'; echo $product['name']; echo '</span>
    <span>'; echo $product['price']; echo '</span>
    <span>'; echo $product['quantity']; echo '</span>
</p>';

  }

  ?>
       <hr>

 <p class="d-flex">
        <span>Total</span>
        <span><?php echo $total; ?></span>
    </p>

    
</div>
<a class="btn btn-outline-primary" href="shop.php">return to shop</a>

</div>

</div>
		</div>

	</div>
</section>
</form>



<!-- <button class="btn btn-dark" data-toggle="modal" data-target="#mapmodals"> </button> -->






 
    <script src="jquery.min.js"></script>

    <!-- <button onclick="initMap();" id="location-button">Get location </button> -->
    
    
    <!-- <div id="map"></div> -->
    <script>
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.
      var map, infoWindow;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 15
        });
        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var acc = position.coords.accuracy;
      console.log(acc);            
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }
   


      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap">
    </script>
     <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <script src="../../../../assets/js/vendor/holder.min.js"></script>
  </body>