 <?php
   $data['website_data'] = $this->db->get('customize_table')->result()[0];
   ?>
 <!--Footer Start-->
 <footer class="footer">
    <div class="footer-top wf100">
       <div class="container">
          <div class="row">
             <div class="col-lg-3 col-md-6 col-sm-6">
                <!--Footer Widget Start-->
                <div class="footer-widget">
                   <h4 style="color: white;"><?= $website_data->web_name ?></h4>
                   <p> <?= $website_data->about ?> </p>
                   <p> <?= $website_data->address ?> </p>
                   <p> <?= $website_data->email ?> </p>
                   <a href="<?= base_url() ?>about" class="lm">About Us</a>
                </div>
                <!--Footer Widget End-->
             </div>
             <div class="col-lg-3 col-md-6 col-sm-6">
                <!--Footer Widget Start-->
                <div class="footer-widget">
                   <h4 style="color: white;">Our Promises</h4>
                   <ul class="quick-links">
                      <li><a href="#">Solar Energy</a></li>
                      <li><a href="#">Waste Management</a></li>
                      <li><a href="#">Eco Ideas</a></li>
                      <li><a href="#">Recycling Materials</a></li>
                      <li><a href="#">Plant Ecology</a></li>
                      <li><a href="#">Saving Wildlife </a></li>
                   </ul>
                </div>
                <!--Footer Widget End-->
             </div>
             <div class="col-lg-3 col-md-6 col-sm-6">
                <!--Footer Widget Start-->
                <div class="footer-widget">
                   <h4 style="color: white;">Latest Posts</h4>
                   <ul class="lastest-products">
                      <li> <img src="<?= base_url() ?>assets/images/flp1.jpg" alt=""> <strong><a href="#">How you can keep alive wild animals for...</a></strong> <span class="pdate"><i>Posted:</i> 29 September, 2018</span> </li>
                      <li> <img src="<?= base_url() ?>assets/images/flp2.jpg" alt=""> <strong><a href="#">Eliminate your plastic bottle pollution & keep...</a></strong> <span class="pdate"><i>Posted:</i> 29 September, 2018</span> </li>
                      <li> <img src="<?= base_url() ?>assets/images/flp3.jpg" alt=""> <strong><a href="#">How you can keep alive wild animals for...</a></strong> <span class="pdate"><i>Posted:</i> 29 September, 2018</span> </li>
                   </ul>
                </div>
                <!--Footer Widget End-->
             </div>
             <div class="col-lg-3 col-md-6 col-sm-6">
                <!--Footer Widget Start-->
                <div class="footer-widget">
                   <div id="fpro-slider" class="owl-carousel owl-theme">

                      <?php
                        foreach ($plants_data as $value)
                           echo '
                              <div class="item">
                                 <div class="f-product">
                                 <img src="' . base_url() . 'ebackend/assets/product/' . $value->img . '"  style="height:250px" alt="">
                                    <div class="fp-text">
                                 
                                       <h6><a href="#">' . $value->plant . '</a></h6> 
                                    </div>
                                 </div>
                              </div>
                              ';
                        ?>
                      <!-- prcie for footer cart -->
                      <!-- <strong>Rs- ' . $value->price . '</strong> -->
                      <!--Footer Product End-->
                   </div>
                </div>

                <!--Footer Widget End-->
             </div>
          </div>
       </div>
    </div>
    <div class="footer-copyr wf100">
       <div class="container">
          <div class="row">
             <div class="col-md-4 col-sm-4">
                <!--  <img src="<?= base_url() ?>assets2/images/iconmain1.png" alt=""> -->
             </div>
             <div class="col-md-8 col-sm-8">
                <p><a target="_blank" href="http://localhost/freshplantpakistan/Home"><?= $website_data->email ?></a></p>
             </div>
          </div>
       </div>
    </div>
 </footer>
 <!--Footer End-->
 </div>
 <!--   JS Files Start  -->
 <script src="<?= base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
 <script src="<?= base_url() ?>assets/js/jquery-migrate-1.4.1.min.js"></script>
 <script src="<?= base_url() ?>assets/js/popper.min.js"></script>
 <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
 <script src="<?= base_url() ?>assets/js/owl.carousel.min.js"></script>
 <script src="<?= base_url() ?>assets/js/jquery.prettyPhoto.js"></script>
 <script src="<?= base_url() ?>assets/js/isotope.min.js"></script>
 <script src="<?= base_url() ?>assets/js/custom.js"></script>
 <script src="<?= base_url() ?>assets/js/slick.min.js"></script>
 <!-- Sweetalert  -->
 <script src="<?= base_url() ?>assets/js/sweetalert.js "></script>
 <script src="<?= base_url() ?>assets/js/custom.js"></script>


 <!--  -->

 <!--   Footer End -->
 <!-- modernizr js -->
 <script src="<?= base_url() ?>assets2/js/vendor/modernizr-3.6.0.min.js"></script>
 <!-- jquery-1.12.0 version -->
 <script src="<?= base_url() ?>assets2/js/vendor/jquery-1.12.0.min.js"></script>
 <!-- bootstra.min js -->
 <script src="<?= base_url() ?>assets2/js/bootstrap.min.js"></script>
 <!-- meanmenu js -->
 <script src="<?= base_url() ?>assets2/js/jquery.meanmenu.min.js"></script>
 <!-- easing js -->
 <script src="<?= base_url() ?>assets2/js/jquery.easing.min.js"></script>
 <!---venobox-js-->
 <script src="<?= base_url() ?>assets2/js/venobox.min.js"></script>
 <!---slick-js-->
 <script src="<?= base_url() ?>assets2/js/slick.min.js"></script>
 <!---waypoints-js-->
 <script src="<?= base_url() ?>assets2/js/waypoints.js"></script>
 <!---counterup-js-->
 <script src="<?= base_url() ?>assets2/js/jquery.counterup.min.js"></script>
 <!---isotop-js-->
 <script src="<?= base_url() ?>assets2/js/isotope.pkgd.min.js"></script>
 <!-- jquery-ui js -->
 <script src="<?= base_url() ?>assets2/js/jquery-ui.min.js"></script>
 <!-- jquery.countdown js -->
 <script src="<?= base_url() ?>assets2/js/jquery.countdown.min.js"></script>
 <!-- plugins js -->
 <script src="<?= base_url() ?>assets2/js/plugins.js"></script>
 <!-- main js -->
 <script src="<?= base_url() ?>assets2/js/main.js"></script>

<!-- Footer End -->
<script>
   // Add Item in Cart Js Funtion //
   $(document).on('click', '#addcart', function() {
      event.preventDefault();
      var id = $(this).data("id");
      var nalo = $(this).data("nalo");
      //test ok  alert(id);
      $.ajax({
         type: 'post',
         url: "<?= base_url() ?>Home/addtocart",
         data: {
            id: id
         },
         success: function(data) {
            $("#cartlist").html(data);
            cartitems();
            swal({
               icon: "success",
               title: nalo,
               text: "Item Add Successfully",
               timer: 1500,
            })
         }
      });
   })

   function cartitems() {
      $.ajax({
         type: 'post',
         url: "<?= base_url() ?>Home/cartitems",
         data: "",
         dataType: 'json',
         success: function(data) {
            $("#cart_badge").html(data);
         }
      });
   }

   function cartload() {
      $.ajax({
         type: 'post',
         url: "<?= base_url() ?>Home/cart_load",
         data: "",
         success: function(data) {
            $("#cartlist").html(data);
         }
      });
   }
   $(document).ready(function() {
      cartload();
      cartitems();
   });
</script>

 </body>


 </html>