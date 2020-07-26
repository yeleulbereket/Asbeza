
<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

require_once('../php_stripe_paypage/config/db.php');
require_once('../php_stripe_paypage/lib/pdo_db.php');
require_once('../php_stripe_paypage/models/Transaction.php');

// Instantiate Transaction
$transaction = new Transaction();

// Get Transaction
$transactions = $transaction->getTransactions();
?>

<div id="wrapper">
    <!-- #wrapper begin -->

    <?php include("includes/sidebar.php"); ?>

    <div id="page-wrapper">
        <!-- #page-wrapper begin -->
        <div class="container-fluid">
            <!-- container-fluid begin -->

            <?php

            // if(isset($_GET['dashboard'])){

            include("dashboard.php");

            //}

            ?>

        </div><!-- container-fluid finish -->
    </div><!-- #page-wrapper finish -->
</div><!-- wrapper finish -->


</body>

</html>