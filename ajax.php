<?php

/*
require '../config.php';



 // if (isset($_POST["sub"])){

    echo 'helo';
  

    
    /*$result = $link->query ("SELECT studentinfo.id,studentinfo.first_name FROM studentinfo WHERE studentinfo.id > 5");
    if($result->num_rows > 0){
      while ($row =$result->fetch_assoc()){
        echo $row['first_name'] .'<br>' . $row['id'] ;
      }
    }*/
?>

<?php
// Establishing connection with server by passing "server_name", "user_id", "password".
require 'config.php';
$name = $_POST['name'];
$price = $_POST['price'];
$id = $_POST['id'];

//echo $asd;
/*
$result = $link->query ("SELECT studentinfo.id,studentinfo.first_name FROM studentinfo WHERE studentinfo.id > $asd");

if($result->num_rows > 0){
  while ($row =$result->fetch_assoc()){
    echo $row['first_name'] . " " ;
    
    echo $row['id'] ;
  }
}else{
echo "NO DATA AVAILABLE!!!";
}*/
//mysql_close($link); // Connection Closed.

$database = new config("asbeza", "producttb");
$result = $database->getData2($id);




if ($result->num_rows > 0) {
  // echo '<table class="table " ><thead><tr><th>ID</th><th>Name</th></tr></thead>';
  $num = 1;
  while ($row = $result->fetch_assoc()) {


echo " <div class='item-text'>
  
<p id='cart-item-title' class='font-weight-bold mb-0'>".$name."</p>
<span>$</span>
<span id='cart-item-price' class='cart-item-price' class='mb-0'></span>
</div>
<a href='#' id='cart-item-remove' class='cart-item-remove'>
<i class='icon-trash'></i>
</a>

</div>";

    // echo "<tr>
    // <td> <input type='text' value=" . $row['inCart'] . " class='form-control'/>" . $row["product_name"] . "
    
    
    // </td>";
    $num++;
  }
} else {
  echo "NO DATA AVAILABLE!!!";
  //exit(mysql_error());
}

echo "</table>";
  



?>
