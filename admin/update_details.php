<?php
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, 'asbeza');

if (isset($_POST['updatedata'])) {
    $id = $_POST['update_product_id'];
    $name = $_POST['update_product_name'];
    $price = $_POST['update_price'];
    $img = $_POST['update_product_image'];
    $img1 = $_POST['update_product_image2'];
    $image = './images/' . $img;
    $image1 = './images/' . $img1;
    //echo $name;

    $sql = "SELECT product_image FROM producttb WHERE id = '$id' ";
    $res = mysqli_query($connection, $sql);

    if ($img) {

        //  $query2 = "UPDATE producttb SET product_name = '$name', product_price = '$price' WHERE id ='$id'";
        $query2 = "UPDATE producttb SET product_name = '$name', product_price = '$price', product_image = '$image' WHERE id ='$id'";
        $query_run = mysqli_query($connection, $query2);

        if ($query_run) {
            //  echo $id;
            echo "<script> alert('Data Updated'); </script>";
            header("location:products.php");
        } else {
            echo "<script> alert('Something went wrong'); </script>";
        }
    } else {

        $query2 = "UPDATE producttb SET product_name = '$name', product_price = '$price', product_image = '$image1' WHERE id ='$id'";
        $query_run = mysqli_query($connection, $query2);

        if ($query_run) {
            //  echo $id;
            echo "<script> alert('Data Updated'); </script>";
            header("location:products.php");
        } else {
            echo "<script> alert('Something went wrong'); </script>";
        }
    }
}
