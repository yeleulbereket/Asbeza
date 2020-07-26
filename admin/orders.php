
<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;

}
require_once('../php_stripe_paypage/config/db.php');
require_once('../php_stripe_paypage/lib/pdo_db.php');
require_once('../php_stripe_paypage/models/Customer.php');


// Instantiate Customer
$customer = new Customer();

// Get Customer
$customers = $customer->getCustomers();
// require_once("component.php");
// $database = new config("asbeza", "producttb");
?>
    <div id="wrapper">
        <!-- #wrapper begin -->

        <?php include("includes/sidebar.php"); ?>
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
                            <table class="table table-striped">
      <thead>
        <tr>
          <th>Customer ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Date</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($customers as $c): ?>
          <tr>
            <td><?php echo $c->id; ?></td>
            <td><?php echo $c->first_name; ?> <?php echo $c->last_name; ?></td>
            <td><?php echo $c->email; ?></td>
            <td><?php echo $c->created_at; ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
                        </div><!-- table-responsive finish -->

                        

                    </div><!-- panel-body finish -->

                </div><!-- panel panel-primary finish -->
            </div><!-- col-lg-8 finish -->



        </div>
    </div>