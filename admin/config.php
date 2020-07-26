<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'asbeza');

$query = "SELECT * FROM producttb";
$query_runn = mysqli_query($connection,$query);
?>