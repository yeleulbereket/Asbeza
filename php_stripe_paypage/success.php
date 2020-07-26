<?php
// if (!empty($_GET['tid'] && !empty($_GET['product']))) {
//   $GET = filter_var_array($_GET, FILTER_SANITIZE_STRING);

//   $tid = $GET['tid'];
//   $product = $GET['product'];
//   $verification = $_GET['verification'];
// } else {
//   header('Location: index.php');
// }
$conn = mysqli_connect('localhost', 'root', '', 'stripe');
// Check connection
 if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
 }
 $insert = ("UPDATE transactions SET verification = $verification  WHERE id = '$tid'; ");

 if(mysqli_query($conn,$insert)){

   echo "successfully added";
 }
 else{

  echo "ertrewertrewerttre";
 }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Thank You</title>
</head>

<body>
  <div class="container mt-4">
    <h2>Thank you for using Asbeza</h2>
    <hr>
    <pre>
    <p>This is your payment transaction ID. Show it to the Delivery guy for verification. <h4> <?php echo $tid; ?> </h4>
         This is your delivery verifcation number. Give it to the delivery person only if you recieved your items. 
        <h4><?php echo $verification; ?></h4></p>
</pre>
    <p><a href="/asbeza/index.php" class="btn btn-success mx-3 mt-2">Finished</a></p>
  </div>
</body>

</html>