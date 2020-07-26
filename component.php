<?php




function component($productname, $productprice, $productimg, $productid, $inCart, $productdetail)
{
    $database = new config("asbeza", "producttb");

    echo "
    <div class='col-md-3 ftco-animate'>

    <form action='shop.php' method='post'>
    <div class='product'>

<a href='#' class='img-prod' data-toggle='modal' data-target='#detailsmodal' ><img class='img-fluid' src='$productimg' alt=''>
						<div class='overlay'></div>
					</a>
      <div class='text py-3 pb-4 px-3 text-center'>
       
        <h3><a href='#'>$productname</a></h3>

        <input type='hidden' name='product_id' value='$productid'>
        

        <div class='d-flex'>
            <div class='pricing'>
                <p class='price'><span class='price-sale'>ETB-$productprice</span></p>
            </div>
        </div>
        <br>
        <div class='bottom-area d-flex px-3'>
            <div class='m-auto d-flex'>
            
                <a href='#' id='details_button' class=' details_button d-flex justify-content-center align-items-center text-center' data-toggle='modal' data-target='#detailsmodal    '>
                    <span><i class='ion-ios-menu'></i></span>
                </a>


                <input type='hidden' name='product_name' value='$productname'>
                <input type='hidden' name='product_image' value='$productimg'>
                <input type='hidden' name='product_id' value='$productprice'>
                <input type='hidden' name='product_detail' value='$productdetail'>

                


            </div>
        </div>
</div>
</div>
</form>
</div>
";
}



// <div class="modal fade" id="Modal_details" role="dialog">
// 				<div class="modal-dialog">

// 					<!-- Modal content-->
// 					<div class="modal-content">
// 						<div class="modal-header">
// 							<button type="button" class="close" data-dismiss="modal">&times;</button>

// 						</div>
// 						<div class="modal-body">
// 							<img class="img-fluid" src="images/product-7.jpg" alt="" style="width: 35% ">

// 							<h3>Bell Pepper</h3>
// 							<p class="price"><span>$120.00</span></p>
// 							<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio itaque eligendi aperiam vero, sint, cupiditate ipsum consequatur rem dolor unde asperiores
// 								ratione natus commodi ipsa eaque dolorum accusamus. Eos, accusantium.</p>
// 							<p><a href="#" class="btn btn-black py-3 px-5">Add to Cart</a></p>
// 						</div>

// 					</div>

// 				</div>
// 			</div>
?>


<!-- <script type="text/javascript" src="store.js"></script> -->
<script type="text/javascript" src="app.js"></script>