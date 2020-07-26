
<!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Asbeza Admin</title>
      <link rel="stylesheet" href="css/bootstrap-337.min.css">
      <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="css/datatables.min.css" />
      <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap4.min.css" />

      <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css">
  </head>

  <body>
      <nav class="navbar navbar-inverse navbar-fixed-top">
          <!-- navbar navbar-inverse navbar-fixed-top begin -->
          <div class="navbar-header">
              <!-- navbar-header begin -->

              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                  <!-- navbar-toggle begin -->

                  <span class="sr-only">Toggle Navigation</span>

                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>

              </button><!-- navbar-toggle finish -->

              <a href="index.php?dashboard" class="navbar-brand" style="color: #000;">Asbeza Admin</a>

          </div><!-- navbar-header finish -->

          <ul class="nav navbar-right top-nav">
              <!-- nav navbar-right top-nav begin -->



              <li class="nav-item dropdown d-none d-xl-inline-block">
                  <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                      <span class="profile-text">Welcome, <?php echo htmlspecialchars($_SESSION["username"]); ?> </span>
                      <i style="padding-left: 6px;" class="fa fa-user"></i>
                      <i style="padding-left: 6px;" class="fa fa-caret-down"></i> </a>
                  <ul class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                      <li>

                          <!-- <a class="dropdown-item mt-2" href="reset-password.php" class="btn btn-warning">Manage Account</a> -->
                      </li>
                      <li>
                          <a class="dropdown-item" href="logout.php">Sign Out</a>
                          </a>
                      </li>
                  </ul>
              </li>






          </ul>
          <!-- nav navbar-right top-nav finish -->

          <div class="collapse navbar-collapse navbar-ex1-collapse" style="background-color: white;">
              <!-- collapse navbar-collapse navbar-ex1-collapse begin -->
              <ul class="nav navbar-nav side-nav">
                  <!-- nav navbar-nav side-nav begin -->
                  <li>
                      <!-- li begin -->
                      <a style="color: #000;" href="admin_home.php">
                          <!-- a href begin -->

                          <i class="fa fa-fw fa-dashboard"></i> Dashboard

                      </a><!-- a href finish -->

                  </li><!-- li finish -->



                  <li>
                      <!-- li begin -->
                      <a style="color: #000;" href="products.php">
                          <!-- a href begin -->
                          <i class="fa fa-fw fa-tag align-left"></i> Products
                      </a><!-- a href finish -->
                  </li><!-- li finish -->





                  <li>
                      <!-- li begin -->
                      <a style="color: #000;" href="customers.php">
                          <!-- a href begin -->
                          <i class="fa fa-fw fa-users"></i> View Customers
                      </a><!-- a href finish -->
                  </li><!-- li finish -->

                  <li>
                      <!-- li begin -->
                      <a style="color: #000;" href="orders.php">
                          <!-- a href begin -->
                          <i class="fa fa-fw fa-book"></i> View Orders
                      </a><!-- a href finish -->
                  </li><!-- li finish -->

                  <li>
                      <!-- li begin -->
                      <a style="color: #000;" href="payments.php">
                          <!-- a href begin -->
                          <i class="fa fa-fw fa-money"></i> View Payments
                      </a><!-- a href finish -->
                  </li><!-- li finish -->





              </ul><!-- nav navbar-nav side-nav finish -->
          </div><!-- collapse navbar-collapse navbar-ex1-collapse finish -->

      </nav><!-- navbar navbar-inverse navbar-fixed-top finish -->

      <script src="js/jquery-331.min.js"></script>
      <script src="js/bootstrap-337.min.js"></script>
      <script src="../js/script.js"></script>
      <script type="text/javascript" src="js/datatables.min.js"></script>
      <script type="text/javascript" src="js/dataTables.bootstrap.min.js"></script>
      <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>