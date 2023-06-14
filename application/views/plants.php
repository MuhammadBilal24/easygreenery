<head>
   <title>Plants - Easy Green Pakistan</title>
</head>
<?php
include('header.php') ?>

<!-- bootstrap v4.0.0 -->
<link rel="stylesheet" href="<?= base_url() ?>assets2/css/bootstrap.min.css">
<!-- fontawesome-icons css -->
<link rel="stylesheet" href="<?= base_url() ?>assets2/css/font-awesome.min.css">
<!-- themify-icons css -->
<link rel="stylesheet" href="<?= base_url() ?>assets2/css/themify-icons.css">
<!-- elegant css -->
<link rel="stylesheet" href="<?= base_url() ?>assets2/css/elegant.css">
<!-- meanmenu css -->
<link rel="stylesheet" href="<?= base_url() ?>assets2/css/meanmenu.min.css">
<!-- animate css -->
<link rel="stylesheet" href="<?= base_url() ?>assets2/css/animate.css">
<!-- venobox css -->
<link rel="stylesheet" href="<?= base_url() ?>assets2/css/venobox.css">
<!-- jquery-ui.min css -->
<link rel="stylesheet" href="<?= base_url() ?>assets2/css/jquery-ui.min.css">
<!-- slick css -->
<link rel="stylesheet" href="<?= base_url() ?>assets2/css/slick.css">
<!-- slick-theme css -->
<link rel="stylesheet" href="<?= base_url() ?>assets2/css/slick-theme.css">
<!-- helper css -->
<link rel="stylesheet" href="<?= base_url() ?>assets2/css/helper.css">
<!-- style css -->
<link rel="stylesheet" href="<?= base_url() ?>assets2/style.css">
<!-- responsive css -->
<link rel="stylesheet" href="<?= base_url() ?>assets2/css/responsive.css">
<!--Inner Header Start-->
<section class="wf100 p100 inner-header">
   <div class="container">
      <h1>Plants</h1>
      <ul>
         <li><a href="#">Home</a></li>
         <li><a href="#">Plants</a></li>
         <!-- <li><a href="#"> Contact One</a></li> -->
      </ul>
   </div>
</section>
<!--Inner Header End-->
<!--Contact Start-->
<section class="contact-page wf100 p80">

   <div class="container">
   <!-- <div class="row align-items-baseline">
								<div class="col-sm-6">
									<div class="products-sort">
										<form>
											<label>Item Show :</label>
											<select>
												<option>12 Products</option>
												<option>8 Products</option>
												<option>4 Products</option>
											</select>
										</form>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="product-view-system pull-right mb-minus-20" role="tablist">
										<ul class="nav nav-tabs">
											<li><a class="active" data-toggle="tab" href="#home"><i class="fa fa-th-large"></i></a></li>
											<li><a data-toggle="tab" href="#menu1"><i class="fa fa-th-list"></i></a></li>
										</ul>
									</div>
								</div>
							</div> -->
      <div class="row">

         <div class="col-md-3">
            <div class="">
            <div class="sidebar sm-mt-0">
               <div class="single-sidebar no-bg sidebar-search-box">
                  <button><i class="fa fa-search"></i></button>
                  <input type="text" placeholder="Search..." />
               </div>
               <div class="single-sidebar no-bg">
                  <h4>Sort By</h4>
                  <ul class="list-none">
                     <li><a href="#">Default</a></li>
                     <li><a href="#">Popularity</a></li>
                     <li><a href="#">Average rating</a></li>
                     <li><a href="#">Price: low to high</a></li>
                     <li><a href="#">Price: high to low</a></li>
                  </ul>
               </div>
               <div class="single-sidebar no-bg">
                  <h4>Categories</h4>
                  <ul class="list-none">
                     <li><a href="#">Default</a><span>(16)</span></li>
                     <li><a href="#">Popularity</a><span>(25)</span></li>
                     <li><a href="#">Average rating</a><span>(95)</span></li>
                     <li><a href="#">Price: low to high</a><span>(15)</span></li>
                     <li><a href="#">Price: high to low</a><span>(10)</span></li>
                  </ul>
               </div>
               <!-- <div class="single-sidebar no-bg">
                  <h4>Price</h4>
                  <div class="price_filter">
                     <div id="slider-range"></div>
                     <div class="price_slider_amount">
                        <label>Price:</label>
                        <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                     </div>
                  </div>
               </div> -->
               <div class="single-sidebar ad-placeholder img-100p">
                  <img src="<?=base_url()?>assets2/images/sidebar/2.jpg" alt="" />
                  <div class="adplace-text style-2">
                     <h4>Discount 15% <br /> for plant</h4>
                  </div>
               </div>
               <div class="single-sidebar no-bg">
                  <h4>Tags</h4>
                  <div class="tags-list">
                     <a href="#">Equipments </a>
                     <a href="#">Plant</a>
                     <a href="#">Seed</a>
                     <a href="#">Decoration</a>
                     <a href="#">Green</a>
                     <a href="#">Pot</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
<!-- <br><br> -->
      <div class="col-md-9 ">
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
            </div>
      
      </div>
   </div>
   </div>

</section>
<!--Contact End-->
<?php
include('footer.php') ?>
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