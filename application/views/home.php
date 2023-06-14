<!-- Header Start  -->
<?php
include('header.php');
?>
<!-- Header End  -->
<!--Slider Start-->
<section id="home-slider" class="owl-carousel owl-theme wf100">
   <div class="item">
      <div class="slider-caption h2slider">
         <div class="container">
            <strong style="color: #27821e ;"><?= $website_data->ph11 ?><span></span></strong>
            <h1 style="color: #27821e ;"><?= $website_data->ph12 ?></h1>
            <p style="color: #27821e ;"><?= $website_data->ph13 ?></p>
            <a href="<?= base_url() ?>Plants" class="active">Shop Now</a> <a href="<?= base_url() ?>Contact">Join us Now</a>
         </div>
      </div>
      <img src="<?= base_url() ?>assets2/images/banners/2c.png" alt=""> <!-- h2-slide1 -->
   </div>
   <div class="item">
      <div class="slider-caption h2slider">
         <div class="container">
            <strong style="color: #27821e ;"><span><?= $website_data->ph21 ?></span></strong>
            <h1 style="color: #27821e ; "><?= $website_data->ph22 ?></h1>
            <p style="color: #27821e ; "><?= $website_data->ph23 ?></p>
            <a href="<?= base_url() ?>Plants" class="active">Shop Now</a> <a href="<?= base_url() ?>Contact">Join us Now</a>
         </div>
      </div>
      <img src="<?= base_url() ?>assets2/images/banners/3c.png" alt=""> <!-- h2-slide2 -->
   </div>
   <div class="item">
      <div class="slider-caption h2slider">
         <div class="container">
            <strong style="color: #27821e ;"><span><?= $website_data->ph31 ?></span></strong>
            <h1 style="color: #27821e ;"><?= $website_data->ph32 ?></h1>
            <p style="color: #27821e ;"><?= $website_data->ph33 ?></p>
            <a href="<?= base_url() ?>Plants" class="active">Shop Now</a> <a href="<?= base_url() ?>Contact">Join us Now</a>
         </div>
      </div>
      <img src="<?= base_url() ?>assets2/images/banners/4c.png" alt=""> <!-- h2-slide3 -->
   </div>
</section>
<!--Slider End-->
<!--Service Area Start-->
<section class="services-area wf100">
   <div class="container">
      <ul>
         <!--box  start-->
         <li>
            <div class="sinfo">
               <img src="<?= base_url() ?>assets/images/sericon1.png" alt="">
               <h6>Grow Plants</h6>
               <p>Waste Management</p>
            </div>
         </li>
         <!--box  end-->
         <!--box  start-->
         <li>
            <div class="sinfo">
               <img src="<?= base_url() ?>assets/images/sericon2.png" alt="">
               <h6>Use Fertilizers</h6>
               <p>Researched Natural Chemicals </p>
            </div>
         </li>
         <!--box  end-->
         <!--box  start-->
         <li>
            <div class="sinfo">
               <img src="<?= base_url() ?>assets/images/sericon3.png" alt="">
               <h6>Pure Water</h6>
               <p>Save Water Resources</p>
            </div>
         </li>
         <!--box  end-->
         <!--box  start-->
         <li> <!-- class="active" -->
            <div class="sinfo">
               <img src="<?= base_url() ?>assets/images/sericon4.png" alt="">
               <h6>Maintainance</h6>
               <p>Look After By Experts </p>
            </div>
         </li>
         <!--box  end-->
         <!--box  start-->
         <li>
            <div class="sinfo">
               <img src="<?= base_url() ?>assets/images/sericon5.png" alt="">
               <h6>Forest Planting</h6>
               <p>Make Plants Alive for Life</p>
            </div>
         </li>
         <!--box  end-->
      </ul>
   </div>
</section>
<!--Service Area End-->
<!--About Section Start-->
<section class="home2-about wf100 p100 gallery">
   <div class="container">
      <div class="row">
         <div class="col-md-5">
            <div class="video-img"> <a href="http://vimeo.com/43338103&amp;width=700" data-rel="prettyPhoto" title="Vimeo video"><i class="fas fa-play"></i></a> <img src="<?= base_url() ?>assets/images/11.jpg" alt="" style="width: 450px;"> </div>
         </div>
         <div class="col-md-7">
            <div class="h2-about-txt">
               <h3>Building A Community Of Plant Lovers</h3>
               <h2><?= $website_data->web_name ?></h2>
               <p><?= $website_data->about ?></p>
               <p>So we can sell the finest plants at the very best prices. Our plants are grown with love and we quality check at every stage to make sure only the best plants arrive at your door. If you’re not 100% happy, tell us within 30 days and we’ll sort it.</p>
               <a class="aboutus" href="<?= base_url() ?>About">More About Us</a>
            </div>
         </div>
      </div>
   </div>
</section>
<!--Current Projects Start-->
<section class="wf100 p80 current-projects">
   <div class="container">
      <div class="row">
         <div class="col-lg-6">
            <div class="section-title-2">
               <h5>WE ARE WORKING WITH</h5>
               <h2 style="font-size: 28px;color:green;"><i class="" style="color: green;font-size:22px;"> </i> VERIFIED NUSRSERIES</h2>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="tab-content" id="myTabContent">
               <!--WildLife Slider Start-->
               <div class="tab-pane fade show active" id="wildlife" role="tabpanel" aria-labelledby="wildlife-tab">
                  <div class="cpro-slider owl-carousel owl-theme">

                     <!--Nursery Data-->
                     <?php
                     foreach ($nursery_data as $n) {
                        echo '
                                    <div class="item">
                                       <div class="pro-box">
                                       <img src="' . base_url() . 'assets/product/' . $n->img . '"  style="height:200px" alt="">
                                          <h5>' . $n->nursery_name . '</h5>
                                          <div class="pro-hover">
                                             <h6>Address: ' . $n->address . '</h6>
                                             <p>City: ' . $n->city . '.</p>
                                             <a href="#">Phone: ' . $n->contact . '</a> 
                                          </div>
                                       </div>
                                    </div>
                                    ';
                     };
                     ?>

                     <!--Nursery Data-->
                  </div>
               </div>
            </div>
         </div>
      </div>
</section>
<section class=" p80 current-projects">
   <div class="container">
                <div class="row">
         <?php
         foreach ($planttype as $v) {
         ?>
            <h2 style="font-size: 28px;color:green;"><i class="" style="color: green;font-size:0px;"> </i><?= $v->type ?></h2>
            <div class="col-md-12">
               <div class="tab-content" id="myTabContent">
                  <!--WildLife Slider Start-->
                  <div class="tab-pane fade show active" id="wildlife" role="tabpanel" aria-labelledby="wildlife-tab">
                     <div class="cpro-slider owl-carousel owl-theme">

                        <!--Nursery Plants Data-->
                        <?php
                        foreach ($plants_data as $value) {
                           if ($value->type == $v->id) {
                              echo '
                              <div class="item">
                                 <div class="product-box"  >
                                    <div class="pro-thumb" >
                                       <a href="#" id="addcart" data-id="' . $value->id . '" data-nalo="' . $value->plant . '">Add To Cart</a> 
                                          <img src="' . base_url() . 'ebackend/assets/product/' . $value->img . '"  style="height:300px"  alt="">
                                    </div>
                                    <div class="pro-txt">
                                       <h6>
                                          <a href=".Product_intro."> ' . $value->plant . '</a>
                                       </h6>
                                          <p1>' . $value->description . '</p1>
                                          <p class="pro-price"><del>discountprice</del>Rs- ' . $value->price . '</p>
                                    </div>
                                 </div> 
                              </div>
                           ';
                           }
                        };
                        echo '</div>
                     </div>
                  </div>';
                        ?>
                     <?php
                  }
                     ?>
                     <!--Nursery Plants Data-->
                     </div>
                  </div>
</section>


<!--Why Fresh Plant Pakistan + Facts Start-->
<section class="why-ecova wf100">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h1>Why <?= $website_data->web_name ?></h1>
            <p>Unbeatable Quality, Delivery To Your Door, All The Help You Need
            </p>
            <a href="<?= base_url() ?>Plants" class="cus">Shop Now</a>
         </div>
      </div>
   </div>
</section>
<!--Why Fresh Plant Pakistan + Facts End-->
<!--Current Projects End-->
<!--News & Articles Start-->
<section class=" wf100 p80">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <div class="section-title-2">
               <h5>Read Our Latest</h5>
               <h2>News & Articles</h2>
            </div>
         </div>
         <div class="col-md-6"> <a href="<?= base_url() ?>Blogs" class="view-more">View More News</a> </div>
      </div>
      <div class="row">
         <div class="col-md-6">
            <div class="blog-post-large">
               <div class="post-thumb"> <a href="#"><i class="fas fa-link"></i></a> <img src="<?= base_url() ?>assets2/images/blog/9.jpg" alt=""></div>
               <div class="post-txt">
                  <ul class="post-meta">
                     <li><i class="fas fa-calendar-alt"></i> 29 September, 2018</li>
                     <li><i class="fas fa-comments"></i> 134 Comments</li>
                  </ul>
                  <h5><a href="#">Planting Trees for Better Future</a></h5>
               </div>
            </div>
         </div>
         <div class="col-md-6">
            <!--Blog Small Post Start-->
            <div class="blog-small-post">
               <div class="post-thumb"> <a href="#"><i class="fas fa-link"></i></a> <img src="<?= base_url() ?>assets2/images/blog/17.jpg" alt=""> </div>
               <div class="post-txt">
                  <span class="pdate"> <i class="fas fa-calendar-alt"></i> 29 September, 2018</span>
                  <h5><a href="#">How you can keep alive wildlife long.</a></h5>
                  <p>According to a survey the perceived higher cost of environmentally.</p>
               </div>
            </div>
            <!--Blog Small Post End-->
            <!--Blog Small Post Start-->
            <div class="blog-small-post">
               <div class="post-thumb"> <a href="#"><i class="fas fa-link"></i></a> <img src="<?= base_url() ?>assets2/images/blog/7.jpg" alt=""> </div>
               <div class="post-txt">
                  <span class="pdate"> <i class="fas fa-calendar-alt"></i> 29 September, 2018</span>
                  <h5><a href="#">The effort GoGreen has been felt across</a></h5>
                  <p>Majority have suffered alteration in some form by injected humour.</p>
               </div>
            </div>
            <!--Blog Small Post End-->
         </div>
      </div>
   </div>
</section>
<!--News & Articles End-->
<!-- Footer Start  -->
<?php
include('footer.php');
?>
<!-- Footer End -->
<!-- <script>
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
</script> -->