<?php
include("includes/header.php");
?>

<div id="content">
    <!-- #content Begin -->
    <div class="container" style="padding-top: 65px; padding-right: 0px; padding-left: 50px; ">
        <!-- container Begin -->
        <div class="col-md-12">
            <!-- col-md-12 Begin -->
            <div class="box">
                <!-- box Begin -->

                <div class="box-header">
                    <!-- box-header Begin -->

                    <center>
                        <!-- center Begin -->

                        <h2> Register a new account </h2>

                    </center><!-- center Finish -->

                    <form action="#" method="POST" enctype="multipart/form-data">
                        <!-- form Begin -->

                        <div class="form-group">
                            <!-- form-group Begin -->

                            <label>Full Name</label>

                            <input type="text" class="form-control" name="c_name" required>

                        </div><!-- form-group Finish -->

                        <div class="form-group">
                            <!-- form-group Begin -->

                            <label>Email</label>

                            <input type="email" class="form-control" name="c_email" required>

                        </div><!-- form-group Finish -->

                        <div class="form-group">
                            <!-- form-group Begin -->

                            <label>Password</label>

                            <input type="password" class="form-control" name="c_pass" required>

                        </div><!-- form-group Finish -->





                        <div class="form-group">
                            <!-- form-group Begin -->

                            <label>Your Contact</label>

                            <input type="text" class="form-control" name="c_contact" required>

                        </div><!-- form-group Finish -->

                        <div class="form-group">
                            <!-- form-group Begin -->

                            <label>Your Address</label>

                            <input type="text" class="form-control" name="c_address" required>

                        </div><!-- form-group Finish -->



                        <div class="text-center">
                            <!-- text-center Begin -->

                            <button type="submit" name="register" class="btn btn-success">

                                <i class="ion-ios"></i> Register

                            </button>

                        </div><!-- text-center Finish -->

                    </form><!-- form Finish -->

                </div><!-- box-header Finish -->

            </div><!-- box Finish -->

        </div><!-- col-md-12 Finish -->

    </div><!-- container Finish -->
</div><!-- #content Finish -->
<?php
include("includes/footer.php");
?>