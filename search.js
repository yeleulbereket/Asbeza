$(document).ready(function() {
    $("#search").click(function(event) {
        console.log(event.target);
        
    var name = $("#keyword").val();
    console.log(name);
    //var namei = $("#sub").val();
    //var upd = $("#up").val();
    
    // Returns successful data submission message when the entered information is stored in database.
    $.post("search.php", {
    name: name
    //name2: namei
    
    }, function(data) {
      //alert(data);
      $('#searched').html(data);
      
    
     // To reset form fields
    });
    
    });

    $("#catlist").change(function (event) { 
        var cat = $("#catlist").val();
         console.log(cat);
        
    });
    });