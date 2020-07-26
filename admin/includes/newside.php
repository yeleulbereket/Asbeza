<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Asbeza Admin</title>
    <link rel="stylesheet" href="../css/bootstrap-337.min.css">
    <link rel="stylesheet" href="../font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
<nav class="navbar navbar-dark fixed-top ">
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

        <a href="index.php?dashboard" class="navbar-brand" >Admin Panel</a>

    </div><!-- navbar-header finish -->

    <ul class="nav navbar-right top-nav">
        <!-- nav navbar-right top-nav begin -->

        <li class="dropdown">
            <!-- dropdown begin -->

            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- dropdown-toggle begin -->
                <i class="fa fa-user"></i> Admin <b class="caret"></b>

            </a><!-- dropdown-toggle finish -->

            <ul class="dropdown-menu">
                <!-- dropdown-menu begin -->

                <li>
                    <!-- li begin -->
                    <a href="">
                        <!-- a href begin -->

                        My Account



                    </a><!-- a href finish -->
                </li><!-- li finish -->


                <li>
                    <!-- li begin -->
                    <a href="">
                        <!-- a href begin -->

                        Log Out

                    </a><!-- a href finish -->
                </li><!-- li finish -->

            </ul><!-- dropdown-menu finish -->

        </li><!-- dropdown finish -->

    </ul><!-- nav navbar-right top-nav finish -->

    <div class="collapse navbar-collapse navbar-ex1-collapse" style="background-color: white;">
        <!-- collapse navbar-collapse navbar-ex1-collapse begin -->
        <ul class="nav navbar-nav side-nav">
            <!-- nav navbar-nav side-nav begin -->
            <li>
                <!-- li begin -->
                <a style="color: #000;" href="index.php?dashboard">
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

<script src="../js/jquery-331.min.js"></script>
    <script src="../js/bootstrap-337.min.js"></script>
    <script src="../js/script.js"></script>