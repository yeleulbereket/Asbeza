<?php
include("includes/header.php");

?>
<!-- <div class="hero-wrap hero-bread" style=" background-image: url('images/contact.jpg');">
  <div class="container">
    <div class="row no-gutters slider-text align-items-left justify-content-left">
      <div class="col-md-9 ftco-animate text-left">
        <h1 class="mb-1 bread">Contact us</h1>
      </div>
    </div>
  </div>
</div> -->

<section style=" background-image: url('images/contact.jpg');" class="ftco-section ">
<form action="email_handler.php" class="p-3 col-md-5 contact-form" method="POST">
          <div class="form-group">
            <input name="name" type="text" class=" form-control" placeholder="Your Name" required>
          </div>
          <div class="form-group">
            <input name="email" type="email" class="form-control" placeholder="Your Email" required>
          </div>
           <div class="form-group">
            <input name="subject" type="text" class="form-control" placeholder="Subject" >
          </div> 
          <div class="form-group">
            <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message" required></textarea>
          </div>
          <div class="form-group">
            <input id="send_email" name="send_email" type="submit" class="btn btn-primary py-2 px-4">
          </div>
        </form>

  <!-- <div style=" background-image: url('images/contact.jpg');" class="container" > -->

    <!-- <div class="row block-9"> -->
      <!-- <div class="col-md-6 order-md-last d-flex"> -->
       
      <!-- </div> -->


    <!-- </div> -->
  <!-- </div> -->
</section>
<?php
  //  $name = $_POST['name'];
  //  $user_email = $_POST['email'];
  //  $message = $_POST['message'];
     
  //  $email_subject = $_POST['subject'];
  //  $email_body = "Name : $name.\n".
  //               "email : $user_email.\n".
  //               "Message : $message.\n";

  //               $to = "teshomeamanuel9@gmail.com";
  //               $headers = "From : $user_email \r\n";
  //               $headers = "Reply-to: $user_email \r\n";
  //               mail($to,$email_subject,$email_body,$headers);
                
  //               header("Location: contact.php");

?>

<?php
include("includes/footer.php");

?>