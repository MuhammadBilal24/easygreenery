<!-- Header Start -->
<head>
   <title>Contact Us - Easy Green Pakistan</title>
</head>
<?php
include('header.php')?>
<!-- Header End  -->
         <!--Inner Header Start-->
         <section class="wf100 p100 inner-header">
            <div class="container">
               <h1>Contact Us</h1>
               <ul>
                  <li><a href="<?=base_url()?>Home">Home</a></li>
                  <li><a href="<?=base_url()?>Contact"> Contact </a></li>
               </ul>
            </div>
         </section>
         <!--Inner Header End--> 
         <!--Contact Start-->
         <section class="contact-page wf100 p80">
            <div class="container">
               <div class="row">
                <div class="col-md-1"></div>
                  <div class="col-md-10">
                     <div class="contact-form mb60">
                        <h3>Feel Free to Contact Us</h3>
                       <form action="" id="insertform">
                       <ul class="cform">
                           <li class="half pr-15">
                              <input type="text" id="customer_name" name="customer_name" class="form-control" placeholder="Full Name">
                           </li>
                           <li class="half pl-15">
                              <input type="email" id="customer_email" name="customer_email"  class="form-control" placeholder="Email">
                           </li>
                           <!-- <li class="half pr-15">
                              <input type="text"  class="form-control" placeholder="Contact">
                           </li>
                           <li class="half pl-15">
                              <input type="text" class="form-control" placeholder="Subject">
                           </li> -->
                           <li class="full">
                              <textarea id="customer_message" name="customer_message" class="textarea-control" placeholder="Message"></textarea>
                           </li>
                           <li class="full">
                              <input type="submit" value="Contact us" class="submit" style="background-color:  #27821e; color:white; font-size:20px " >
                           </li>
                        </ul>
                       </form>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="google-map">
                        <div class="contact-map-info">
                           <address>
                              <ul>
                                 <li>
                                    <strong class="add-title">Address:</strong>
                                    <?= $website_data->address?>
                                 </li>
                                 <li>
                                    <strong class="add-title">Contact:</strong>
                                    <p><strong>Phone:</strong> <?= $website_data->number?></p>
                                    <!-- <p><strong>Fax:</strong> +1 321 2345 876-7</p> -->
                                 </li>
                                 <li>
                                    <strong class="add-title">For More Information:</strong>
                                    <p><strong>Email:</strong> <?=$website_data->email?></p>
                                    <!-- <p>contact@ecova.com</p> -->
                                 </li>
                              </ul>
                           </address>
                        </div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11418.310112375979!2d-74.00986187433132!3d40.710981182716246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY!5e0!3m2!1sen!2s!4v1540972202179"></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--Contact End--> 
       <!-- Footer Start -->
       <?php
       include('footer.php');
       ?>
      <!--   Footer End -->
        
   
   <script>
          
    // Insert Add New User 
    $('#insertform').submit(function () {
      var form = $('#insertform').serialize();
      var customer_name = $('#customer_name').val();
      var customer_email = $('#customer_email').val();
      var customer_message = $('#customer_message').val();
      event.preventDefault();
      if (customer_name == "") {
        swal({
         icon: "error",
          title: "Enter Customer Name",
          timer: 1500,
        })
      }
      else if (customer_email == "") {
        swal({
         icon: "error",
          title: "Enter Email UserName",
          timer: 1500,
        })
      }
      else if (customer_message == "") {
        swal({
         icon: "error",
          title: "Any Message For Us",
          timer: 1500,
        })
      }
      else {

        $.ajax({
          type: 'post',
          url: '<?= base_url()?>Contact/insert',
          data: form,
          success: function (data) {
            if (data == "Correct") {
              swal({
                icon: "success",
                title: "Thank You",
                text: "Your Message Sent",
                timer: 1500,
              }).then(() => {
                location.reload();
              })
            }
            else {
              swal({
                icon: "Error",
                title: "Try Again",
                text: "Any Issue Occured",
              }).then(() => {
                location.reload();
              })
            }
          }
        })
      }
    })
    // End Insert Function
      </script>