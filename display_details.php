<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'asbeza');



    $id = $_POST['details_id'];
    $query3 = "DELETE FROM producttb WHERE id='$id'";
    $query_run = mysqli_query($connection, $query3);
    echo $id;
    if ($query_run) 
    {
        
        echo "<script> alert('Data Deleted'); </script>";
        echo $id;
        header("location:products.php");
    } else {
        echo "<script> alert('Something went wrong'); </script>";
    }
