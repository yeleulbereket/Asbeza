<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'asbeza');

if (isset($_POST['deleteproduct'])) {
    $id = $_POST['delete_id'];
    $query3 = "DELETE FROM producttb WHERE id='$id'";
    $query_run = mysqli_query($connection, $query3);
    echo $id;
    if ($query_run) 
    {
        
        echo "<script> alert('Data Deleted'); </script>";
        echo $id;
        header("location: products.php");
    } else {
        echo "<script> alert('Something went wrong'); </script>";
    }
}


if (isset($_POST['updatedata'])) {
    $id = $_POST['update_product_id'];
    $name = $_POST['update_product_name'];
    $price = $_POST['update_price'];
    //echo $name;
    $query2 = "UPDATE producttb SET product_name = '$name', product_price = '$price' WHERE id ='$id'";
    $query_run = mysqli_query($connection, $query2);

    if ($query_run) {
      //  echo $id;
        echo "<script> alert('Data Updated'); </script>";
        header("location:products.php");
    } else {
        echo "<script> alert('Something went wrong'); </script>";
    }
}

