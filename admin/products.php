<?php
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: index.php");
    exit;
}
?>
<div id="wrapper">
    <!-- #wrapper begin -->

    <?php include("includes/sidebar.php");
    include("config.php");
    ?>
    <script>
        $(document).ready(function() {
            // $('#tableid').DataTable({

            // });
            $('.deletebtn').on('click', function() {
                $('#deletemodal').modal('show');
                $tr = $(this).closest('tr');
                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();
                $('#delete_id').val(data[0]);


            });
            $('.edit_button').on('click', function() {
                $('#edit_product_modal').modal('show');
                $tr = $(this).closest('tr');
                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();
                var img = $tr.children("td").map(function() {
                    return $(this).children("img");
                }).get();
                console.log(data);
                // console.log(img[1][0].src);
                var newImg = img[1][0].src;
                var lastImg = newImg.substring(31);
                console.log(lastImg);
                $('#update_product_id').val(data[0]);
                $('#update_product_image2').val(lastImg);
                $('#update_product_name').val(data[2]);
                $('#update_price').val(data[3]);
            });
        });
    </script>
    <div id="page-wrapper">
        <!-- #page-wrapper begin -->
        <div class="container-fluid">
            <!-- container-fluid begin -->
            <div class="row">
                <div class="col-10">
                    <h2>Product List</h2>
                </div>
                <div style="padding-right: 30px;" class="col-2" align="right">
                    <a href="#" data-toggle="modal" data-target="#add_product_modal" class="btn btn-primary align-conte">Add Product</a> <br><br>
                </div>
            </div>
            <div class="table-responsive">
                <table id="tableid" class="tableid table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Action</th>


                        </tr>
                    </thead>
                    <?php
                    if ($query_runn) {

                        foreach ($query_runn as $row) {
                    ?>
                            <tbody id="product_list">
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td width="10%"><img width="60%" src=".<?php echo $row['product_image']; ?>"></td>

                                    <td style="padding-top: 16px;"><?php echo $row['product_name']; ?></td>
                                    <td style="padding-top: 16px;"><?php echo $row['product_price']; ?></td>

                                    <td style="padding-top: 16px;"><a class="edit_button btn btn-sm btn-warning" data-toggle="modal">Update </a><span> </span>
                                        <a class="deletebtn btn btn-sm btn-danger" data-toggle="modal">Delete</a></td>



                                </tr>

                            </tbody>
                    <?php
                        }
                    } else {

                        echo "No Record found";
                    }
                    ?>
                </table>


            </div><!-- #page-wrapper finish -->
        </div><!-- wrapper finish -->

        <div class="modal fade" id="add_product_modal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">

                        <h2 class="modal-title" id="exampleModalLabel">Add Product <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times; </button></h2>

                    </div>

                    <div class="container-fluid">




                        <form action="add_product.php" method="POST">
                            <div class="modal-body">

                                <div class="form-group ">
                                    <label>Product Name</label>
                                    <input type="text" name="product_name" class="form-control" placeholder="Enter Product Name">

                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Product Price</label>
                                        <input type="text" name="product_price" class="form-control" placeholder="Enter Product Price">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Product Image <small>(format: jpg, jpeg, png)</small></label>
                                        <input type="file" name="product_image" class="form-control">
                                    </div>
                                </div>
                                <br>
                                <input type="hidden" name="add_product" value="1">
                                <div class="col-12">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="submit" name="addproduct" class="btn btn-primary">Add Product</button>
                                </div>
                            </div>

                        </form>


                    </div>

                </div>
            </div>
        </div>


        <div class="modal fade" id="edit_product_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Update</h4>
                    </div>
                    <form action="update_details.php" method="POST">

                        <div class="modal-body">


                            <div class="form-group">
                                <label for="update_product_name">Id</label>
                                <input type="text" name="update_product_id" id="update_product_id" placeholder="Product ID" class="form-control update_product_id" />
                            </div>

                            <div class="form-group">
                                <label for="update_last_name">Product Name</label>
                                <input type="text" name="update_product_name" id="update_product_name" placeholder="Name" class="form-control update_product_name" />
                            </div>
                                                                                                         
                            <div class="form-group">
                                <label for="update_mi">Price</label>
                                <input type="text" name="update_price" id="update_price" placeholder="Price" class="form-control update_price" />
                            </div>

                            <div class="form-group">
                                <label>Product Image <small>(format: jpg, jpeg, png)</small></label>
                                <input type="file" name="update_product_image" id="update_product_image" class="form-control update_product_image" />
                            </div>
                            <input type="hidden" name="update_product_image2" id="update_product_image2">
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                <button type="submit" name="updatedata" class="btn btn-primary">Save Changes</button>
                                <!-- <input type="hidden" id="hidden_user_id"> -->
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="deletemodal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">

                        <h2 class="modal-title" id="exampleModalLabel">Delete Product <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times; </button></h2>

                    </div>

                    <div class="container-fluid">
                        <form action="delete_product.php" method="POST">
                            <div class="modal-body">

                                <input type="hidden" name="delete_id" id="delete_id">
                                <h4>Do you want to Delete this data?</h4>
                            </div>
                            <br>
                            <div class="col-12">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                <button type="submit" id="deleteproduct" name="deleteproduct" class="btn btn-primary">Yes</button>
                            </div>
                    </div>

                    </form>


                </div>

            </div>
        </div>