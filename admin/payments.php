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

include("includes/sidebar.php"); 
?>

<div id="wrapper">
  <!-- #wrapper begin -->

  <br><br>
  <div class="row">
    <!-- row no: 3 begin -->
    <div class="col-lg-12">
      <!-- col-lg-8 begin -->
      <div style="border-color: green" class="panel panel-primary">
        <!-- panel panel-primary begin -->
        <div style="background-color: green" class="panel-heading">
          <!-- panel-heading begin -->
          <h3 class="panel-title">
            <!-- panel-title begin -->

            <i class="fa fa-money fa-fw"></i> New Orders

          </h3><!-- panel-title finish -->
        </div><!-- panel-heading finish -->

        <div class="panel-body">
          <!-- panel-body begin -->
          <div class="table-responsive">
            <!-- table-responsive begin -->
            <table class="table table-hover table-striped table-bordered">
              <!-- table table-hover table-striped table-bordered begin -->

              <thead>
                <!-- thead begin -->

                <tr>
                  <th>Transaction ID</th>
                  <th>Customer</th>
                  <th>Product</th>
                  <th>Amount</th>
                  <th>Date</th>
                </tr>

              </thead><!-- thead finish -->

              <tbody>

                <!-- tbody begin -->
                <?php foreach ($transactions as $t) : ?>
                  <tr>
                    <td><?php echo $t->id; ?></td>
                    <td><?php echo $t->customer_id; ?></td>
                    <td><?php echo $t->product; ?></td>
                    <td><?php echo sprintf('%.2f', $t->amount); ?> <?php echo strtoupper($t->currency); ?></td>
                    <td><?php echo $t->created_at; ?></td>
                  </tr>
                <?php endforeach; ?>

                <tr>

                  <!-- tr begin -->

              </tbody><!-- tbody finish -->

            </table><!-- table table-hover table-striped table-bordered finish -->
          </div><!-- table-responsive finish -->



        </div><!-- panel-body finish -->

      </div><!-- panel panel-primary finish -->
    </div><!-- col-lg-8 finish -->



  </div>
</div>

