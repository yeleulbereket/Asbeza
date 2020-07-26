<?php
session_start();
include("config.php");

if (($_POST['addproduct']) == "") {
    // $id = $_POST['id'];
    $name = $_POST['product_name'];
    $price = $_POST['product_price'];
    $image = $_POST['product_image'];
    $query1 = "INSERT INTO producttb (product_name,product_price,product_image) VALUES ('$name','$price','./images/$image')";
    $query_run = mysqli_query($connection, $query1);
    if ($query_run) {
        echo "<script> alert('Product added');</script>";
        header('location: products.php');
    } else {
        echo "<script> alert('Data not saved!!'); </script>";
    }
}
