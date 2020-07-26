


<?php
require 'config.php';
$name = $_POST['name'];
//echo $name;
//$nid = $_POST['name2'];
error_reporting(E_ERROR | E_WARNING | E_PARSE | 0);
$database = new config("asbeza", "producttb");


$result = $database->search($name);

// $result= $con->query("SELECT * FROM $this->tablename WHERE product_name= $name ");

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $name = $row['product_name'];
        $price = $row['product_price'];
        $img = $row['product_image'];
    $json = json_encode($row);
echo $json;
        // echo '
                
        //         <a href="#" class="img-prod" data-toggle="modal" data-target="#details_modal"><img class="img-fluid" src="' . $img .
        //     ' " alt="">
        //     </a>
        //     <div class="text py-3 pb-4 px-3 text-center">

        //         <h3 id="viewer">' .
        //     $name .
        //     '</h3>
        //         <span> <input type="hidden" name="quantity" value="1">
        //         </span>

        //         <div class="d-flex">
        //             <div class="pricing">
        //                 <p class="price">
        //                     <span class="price-sale">ETB-' .
        //     $price .
        //     ' 
        //                     </span></p>
        //             </div>
        //         </div><br>

        //         <div class="bottom-area d-flex px-3">
        //             <div class="m-auto d-flex">
        //                 <a name="detailsbutton" id="detailsbutton" class="mr-2 detailsbutton d-flex justify-content-center align-items-center text-center" data-toggle="modal" data-target="#details_modal">
        //                     <span><i class="ion-ios-menu"></i></span>
        //                 </a>
        //                 <button type="submit" class="shop-item-button btn btn-success" name="add" value="add to cart"><i class="ion-ios-cart"></i></button>

        //                 <input type="hidden" name="quantity" value="1">

        //                 <input type="hidden" name="name" value="' .
        //     $name .
        //     '">
        //                 <input type="hidden" name="price" value="' .
        //     $price .
        //     '">




        //             </div>
        //         </div>
        //     </div> ';
    }
} else {
    echo "No item with that keyword!!!";
    //   exit(mysql_error());
}
?>
<?php


?>