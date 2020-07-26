$(document).ready( function () {
  $('table').DataTable({
   "info": false

  });

  $('.edit_button').on('click',function(){
    $('#edit_product_modal').modal('show');
    $tr = $(this).closest('tr');
    var data = $tr.children("td").map(function(){
      return $(this).text();
    }).get();
    console.log(data);
    $('#update_product_name').val(data[0]);
    $('#update_last_name').val(data[1]);
    $('#update_price').val(data[2]);
    $('#update_quantity').val(data[3]);
  })
} );

function DeleteProduct() {
  var conf = confirm(
    "Are you sure, do you really want to delete this product?"
  );
}
