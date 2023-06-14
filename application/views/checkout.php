<head>
   <title>Checkout - Easy Green Pakistan</title>
</head>
<?php
include('header.php'); ?>
<section class="wf100 p100 inner-header">
   <div class="container">
      <h1>Checkout</h1>
      <ul>
         <li><a href="#">Cart</a></li>
         <!-- <li><a href="#">Pages </a></li> -->
         <!-- <li><a href="#">Projects</a></li> -->
         <li><a href="#">Checkout</a></li>
      </ul>
   </div>
</section>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
   body {
      font-family: Arial;
      font-size: 17px;
      padding: 8px;
   }

   * {
      box-sizing: border-box;
   }

   .row {
      display: -ms-flexbox;
      /* IE10 */
      display: flex;
      -ms-flex-wrap: wrap;
      /* IE10 */
      flex-wrap: wrap;
      margin: 0 -16px;
   }

   .col-25 {
      -ms-flex: 25%;
      /* IE10 */
      flex: 25%;
   }

   .col-50 {
      -ms-flex: 50%;
      /* IE10 */
      flex: 50%;
   }

   .col-75 {
      -ms-flex: 75%;
      /* IE10 */
      flex: 75%;
   }

   .col-25,
   .col-50,
   .col-75 {
      padding: 80px 16px;
   }

   .container {
      padding: 5px 20px 15px 20px;
      /* border: 1px solid lightgrey; */
      border-radius: 20px;
   }

   input[type=text] {
      width: 100%;
      margin-bottom: 20px;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 3px;
   }

   label {
      margin-bottom: 10px;
      display: block;
   }

   .icon-container {
      margin-bottom: 20px;
      padding: 7px 0;
      font-size: 24px;
   }

   .btn {
      color: white;
      padding: 12px;
      margin: 10px 0;
      border: none;
      width: 100%;
      border-radius: 3px;
      cursor: pointer;
      font-size: 17px;
   }

   /* .btn:hover {
            background-color: ;
         } */

   a {
      color: #2196F3;
   }

   hr {
      border: 1px solid lightgrey;
   }

   span.price {
      float: right;
      color: grey;
   }

   /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
   @media (max-width: 800px) {
      .row {
         flex-direction: column-reverse;
      }

      .col-25 {
         margin-bottom: 20px;
      }
   }
</style>

<!-- 
<h2>Responsive Checkout Form</h2>
<p>Resize the browser window to see the effect. When the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other.</p> -->
<div class="row">
   <div class="col-75">
      <div class="container" style="border: 1px solid lightgrey; background-color:white">
         <form id="insertform">
            <div class="row">
               <div class="col-50">
                  <h3>Order Information</h3>
                  <div class="row">
                     <div class="col-50">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" placeholder="Full Name">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" placeholder="Email or Username">
                        <label for="city">City</label>
                        <input type="text" id="city" name="city" placeholder="City">
                     </div>
                     <div class="col-50">
                        <label for="lnames">Last Name</label>
                        <input type="text" id="lname" name="lname" placeholder="Last Name">
                        <label for="phone">Phone Number</label>
                       <input type="text" id="phone" name="phone" placeholder="Phone Number">
                        <br>
                        <label for="address">Address</label>
                        <input type="text" id="address" name="address" placeholder="Address">
                     </div>
                  </div>
                  <!-- <h3>Payment</h3>
                  <label for="fname">Accepted Cards</label>
                  <div class="icon-container">
                     <i class="fa fa-cc-visa" style="color:navy;"></i>
                     <i class="fa fa-cc-amex" style="color:blue;"></i>
                     <i class="fa fa-cc-mastercard" style="color:red;"></i>
                     <i class="fa fa-cc-discover" style="color:orange;"></i>
                  </div>
                  <label for="cname">Name on Card</label>
                  <input type="text" id="cname" name="cardname" placeholder="John More Doe">
                  <label for="ccnum">Credit card number</label>
                  <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                  <label for="expmonth">Exp Month</label>
                  <input type="text" id="expmonth" name="expmonth" placeholder="September"><br><br> -->

               </div>


               <!-- Carts -->
               <div class="col-25">
                  <div class="container-fluid">
                     <h4>
                        Cart 
                        <span class="price" style="color:black">
                           <i class="fa fa-shopping-cart"></i>
                           <b><?=$value=$this->cart->total_items();?></b>
                        </span>
                     </h4>
                     <?php
                     foreach ($this->cart->contents() as $cc) {
                        echo'
                           <label for="quantity" class="text-right" style="color:black">'.$cc['name'].'</label>
                            <p>
                            <img class="" src="' . base_url() . 'ebackend/assets/product/'.$cc['image'].'"  style="height:100px"  alt="">
                              <label class="text-right" for="quantity" style="color:black">Qty: '.$cc['qty'].'</label>
                              <label class="text-right" for="quantity" style="color:black">Price: '.$cc['price'].'</label>
                            </p>
                            <hr>
                            ';
                        }
                     ?>
                     <p style="color:black; font-size:23px ">Total <span class="price" style="color:black"><b>Rs-/ <?=$this->cart->total()?></b></span></p>
                  </div>
               </div>

            </div>
            <label>
               <!-- <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing -->
            </label>

            <input type="submit" style="background-color:green" value="Place Order" class="btn">
         </form>

      </div>

   </div>


</div>


<?php
include('footer.php'); ?>
 <script src="<?= base_url() ?>assets/js/sweetalert.js "></script>
<script>
   $('#insertform').submit(function(){
      var form = $('#insertform').serialize();
      var name = $('#name').val();
      var lname = $('#lname').val();
      var email = $('#email').val();
      var phone = $('#phone').val();
      var city = $('#city').val();
      var address = $('#address').val();
      event.preventDefault();
      if (name == "") {
        swal({
         icon: "error",
          title: "Enter Your Name",
          timer: 1500,
        })
      }
      else if (email == "") {
        swal({
         icon: "error",
          title: "Enter Email or Username",
          timer: 1500,
        })
      }
      else if (phone == "") {
        swal({
         icon: "error",
          title: "Enter Your Phone Number",
          timer: 1500,
        })
      }
      else if (city == "") {
        swal({
         icon: "error",
          title: "Enter Your City",
          timer: 1500,
        })
      }
      else if (address == "") {
        swal({
         icon: "error",
          title: "Enter Your Present Address",
          timer: 1500,
        })
      }
      else {
      $.ajax({
         type:'post',
         url:'<?=base_url()?>Checkout/insert',
         data:form,
         success: function(data)
         {  
            if (data == "Correct") {
              swal({
                icon: "info",
                title: "Just a Sec",
                //text: "Your Order has been Placed",
                timer: 1000,
              })
              .then(() => {
               swal({
                icon: "success",
                title: "Order Successfully Placed",
                text: "Order is on its way, ThankYou",
                buttons: true,
                //timer: 1500,
              }).then(()=>{
               location.reload();
              })  
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



</script>