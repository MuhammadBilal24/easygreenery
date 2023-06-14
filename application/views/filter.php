<!-- Header Start -->
<?php
include('header.php')?>
<!-- bootstrap v4.0.0 -->
<link rel="stylesheet" href="<?=base_url()?>assets2/css/bootstrap.min.css">
	<!-- fontawesome-icons css -->
	<link rel="stylesheet" href="<?=base_url()?>assets2/css/font-awesome.min.css">
	<!-- themify-icons css -->
	<link rel="stylesheet" href="<?=base_url()?>assets2/css/themify-icons.css">
	<!-- elegant css -->
	<link rel="stylesheet" href="<?=base_url()?>assets2/css/elegant.css">
	<!-- meanmenu css -->
	<link rel="stylesheet" href="<?=base_url()?>assets2/css/meanmenu.min.css">
	<!-- animate css -->
	<link rel="stylesheet" href="<?=base_url()?>assets2/css/animate.css">
	<!-- venobox css -->
	<link rel="stylesheet" href="<?=base_url()?>assets2/css/venobox.css">
	<!-- jquery-ui.min css -->
	<link rel="stylesheet" href="<?=base_url()?>assets2/css/jquery-ui.min.css">
	<!-- slick css -->
	<link rel="stylesheet" href="<?=base_url()?>assets2/css/slick.css">
	<!-- slick-theme css -->
	<link rel="stylesheet" href="<?=base_url()?>assets2/css/slick-theme.css">
	<!-- helper css -->
	<link rel="stylesheet" href="<?=base_url()?>assets2/css/helper.css">
	<!-- style css -->
	<link rel="stylesheet" href="<?=base_url()?>assets2/style.css">
	<!-- responsive css -->
	<link rel="stylesheet" href="<?=base_url()?>assets2/css/responsive.css">
<!-- Header End  -->
<!--Inner Header Start-->
         <section class="wf100 p100 inner-header">
            <div class="container">
               <h1>About Us</h1>
               <ul>
                  <li><a href="<?=base_url()?>Home">Home</a></li>
                  <li><a href="<?=base_url()?>About">About Us</a></li>
               </ul>
            </div>
         </section>
         <!--Inner Header End--> 
         <!--About Start-->
         <section class="wf100 about"  style="width:70%; margin:70px">
            <!--About Txt Video Start-->
            <!--products start-->
	<div class="products-area mt-50 sm-mt-100 ">
		<div class="container" >
			<div class="row">
				<div class="col-lg-3 col-md-4">
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
						<div class="single-sidebar no-bg">
							<h4>Price</h4>
							<div class="price_filter">
								<div id="slider-range"></div>
								<div class="price_slider_amount">
									<label>Price:</label>
									<input type="text" id="amount" name="price"  placeholder="Add Your Price" />
								</div>
							</div>
						</div>
						<div class="single-sidebar no-bg product-list">
							<h4>New Products</h4>
							<ul class="list-none">
								<li>
									<a href="#"><img src="assets/images/products/product-list/1.jpg" alt="" /></a>
									<h5><a href="#">Aloe vera - herbal</a></h5>
									<small>$69.99</small>
								</li>
								<li>
									<a href="#"><img src="assets/images/products/product-list/2.jpg" alt="" /></a>
									<h5><a href="#">Aloe vera plant</a></h5>
									<small>$99.99</small>
								</li>
								<li>
									<a href="#"><img src="assets/images/products/product-list/3.jpg" alt="" /></a>
									<h5><a href="#">Succulent</a></h5>
									<small>$29.49</small>
								</li>
							</ul>
						</div>
						<div class="single-sidebar ad-placeholder img-100p">
							<img src="assets/images/sidebar/2.jpg" alt="" />
							<div class="adplace-text style-2">
								<h4>Discount 15% <br/> for plant</h4>
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
				<div class="col-lg-9 col-md-8">
					<!--products-area start-->
					<div class="products-area">
						<div class="container">
							<div class="row align-items-baseline">
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
							</div>
							<div class="tab-content mt-30">
								<div id="home" class="tab-pane active">
									<div class="row">
                           <?php
                        foreach($plants_data as $value)
                        echo'
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="single-product">
												<div class="product-thumb-sin">
													<a href="#"><img src=""' . base_url() . 'assets/product/' . $value->img . '"  style="height:300px"  alt=""></a>
													<div class="product-action">
														<a href="#" class="add-to-cart">
															<span>Add to Cart</span>
														</a>
													</div>
												</div>
												<div class="product-text">
													<h4><a href="#">' . $value->plant . '</a></h4>
													<span class="product-price">' . $value->price . '</span>
												</div>
											</div>
										</div>
                              ';
                  ?>
										<!-- <div class="col-lg-4 col-md-6 col-sm-12">
											<div class="single-product">
												<div class="product-thumb-sin">
													<a href="#"><img src="assets/images/products/2.jpg" alt="" /></a>
													<div class="product-action">
														<a href="#" class="add-to-cart">
															<span>Add to Cart</span>
														</a>
													</div>
												</div>
												<div class="product-text">
													<h4><a href="#">Cactus White</a></h4>
													<span class="product-price">$99.99</span>
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="single-product">
												<div class="product-thumb-sin">
													<a href="#"><img src="assets/images/products/3.jpg" alt="" /></a>
													<div class="product-action">
														<a href="#" class="add-to-cart">
															<span>Add to Cart</span>
														</a>
													</div>
												</div>
												<div class="product-text">
													<h4><a href="#">Haworthia Wide Zebra</a></h4>
													<span class="product-price">$29.49</span>
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="single-product">
												<div class="product-thumb-sin">
													<a href="#"><img src="assets/images/products/4.jpg" alt="" /></a>
													<div class="product-action">
														<a href="#" class="add-to-cart">
															<span>Add to Cart</span>
														</a>
													</div>
												</div>
												<div class="product-text">
													<h4><a href="#">Aloe vera - herbal</a></h4>
													<span class="product-price">$69.99</span>
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="single-product">
												<div class="product-thumb-sin">
													<a href="#"><img src="assets/images/products/5.jpg" alt="" /></a>
													<div class="product-action">
														<a href="#" class="add-to-cart">
															<span>Add to Cart</span>
														</a>
													</div>
												</div>
												<div class="product-text">
													<h4><a href="#">Cactus White</a></h4>
													<span class="product-price">$99.99</span>
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="single-product">
												<div class="product-thumb-sin">
													<a href="#"><img src="assets/images/products/6.jpg" alt="" /></a>
													<div class="product-action">
														<a href="#" class="add-to-cart">
															<span>Add to Cart</span>
														</a>
													</div>
												</div>
												<div class="product-text">
													<h4><a href="#">Haworthia Wide Zebra</a></h4>
													<span class="product-price">$29.49</span>
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="single-product">
												<div class="product-thumb-sin">
													<a href="#"><img src="assets/images/products/1.jpg" alt="" /></a>
													<div class="product-action">
														<a href="#" class="add-to-cart">
															<span>Add to Cart</span>
														</a>
													</div>
												</div>
												<div class="product-text">
													<h4><a href="#">Aloe vera - herbal</a></h4>
													<span class="product-price">$69.99</span>
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="single-product">
												<div class="product-thumb-sin">
													<a href="#"><img src="assets/images/products/2.jpg" alt="" /></a>
													<div class="product-action">
														<a href="#" class="add-to-cart">
															<span>Add to Cart</span>
														</a>
													</div>
												</div>
												<div class="product-text">
													<h4><a href="#">Cactus White</a></h4>
													<span class="product-price">$99.99</span>
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="single-product">
												<div class="product-thumb-sin">
													<a href="#"><img src="assets/images/products/3.jpg" alt="" /></a>
													<div class="product-action">
														<a href="#" class="add-to-cart">
															<span>Add to Cart</span>
														</a>
													</div>
												</div>
												<div class="product-text">
													<h4><a href="#">Haworthia Wide Zebra</a></h4>
													<span class="product-price">$29.49</span>
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="single-product">
												<div class="product-thumb-sin">
													<a href="#"><img src="assets/images/products/4.jpg" alt="" /></a>
													<div class="product-action">
														<a href="#" class="add-to-cart">
															<span>Add to Cart</span>
														</a>
													</div>
												</div>
												<div class="product-text">
													<h4><a href="#">Aloe vera - herbal</a></h4>
													<span class="product-price">$69.99</span>
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="single-product">
												<div class="product-thumb-sin">
													<a href="#"><img src="assets/images/products/5.jpg" alt="" /></a>
													<div class="product-action">
														<a href="#" class="add-to-cart">
															<span>Add to Cart</span>
														</a>
													</div>
												</div>
												<div class="product-text">
													<h4><a href="#">Cactus White</a></h4>
													<span class="product-price">$99.99</span>
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="single-product">
												<div class="product-thumb-sin">
													<a href="#"><img src="assets/images/products/6.jpg" alt="" /></a>
													<div class="product-action">
														<a href="#" class="add-to-cart">
															<span>Add to Cart</span>
														</a>
													</div>
												</div>
												<div class="product-text">
													<h4><a href="#">Haworthia Wide Zebra</a></h4>
													<span class="product-price">$29.49</span>
												</div>
											</div>
										</div> -->
									</div>
								</div>
								<div id="menu1" class="tab-pane fade">
									<div class="row">
										<div class="col-sm-12">
											<div class="single-product style-3">
												<div class="row">
													<div class="col-sm-4">
														<div class="product-thumb-sin">
															<a href="#"><img src="assets/images/products/1.jpg" alt="" /></a>
														</div>
													</div>
													<div class="col-sm-8">
														<div class="product-text">
															<h4><a href="#">Haworthia Wide Zebra</a></h4>
															<span class="product-price">$29.49</span>
															<p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nul...</p>
															<a href="#" class="add-to-cart btn-common">Add to Cart</a>
														</div>
													</div>
												</div>
											</div>
											<div class="single-product style-3">
												<div class="row">
													<div class="col-sm-4">
														<div class="product-thumb-sin">
															<a href="#"><img src="assets/images/products/2.jpg" alt="" /></a>
														</div>
													</div>
													<div class="col-sm-8">
														<div class="product-text">
															<h4><a href="#">Haworthia Wide Zebra</a></h4>
															<span class="product-price">$29.49</span>
															<p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nul...</p>
															<a href="#" class="add-to-cart btn-common">Add to Cart</a>
														</div>
													</div>
												</div>
											</div>
											<div class="single-product style-3">
												<div class="row">
													<div class="col-sm-4">
														<div class="product-thumb-sin">
															<a href="#"><img src="assets/images/products/3.jpg" alt="" /></a>
														</div>
													</div>
													<div class="col-sm-8">
														<div class="product-text">
															<h4><a href="#">Haworthia Wide Zebra</a></h4>
															<span class="product-price">$29.49</span>
															<p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nul...</p>
															<a href="#" class="add-to-cart btn-common">Add to Cart</a>
														</div>
													</div>
												</div>
											</div>
											<div class="single-product style-3">
												<div class="row">
													<div class="col-sm-4">
														<div class="product-thumb-sin">
															<a href="#"><img src="assets/images/products/4.jpg" alt="" /></a>
														</div>
													</div>
													<div class="col-sm-8">
														<div class="product-text">
															<h4><a href="#">Haworthia Wide Zebra</a></h4>
															<span class="product-price">$29.49</span>
															<p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nul...</p>
															<a href="#" class="add-to-cart btn-common">Add to Cart</a>
														</div>
													</div>
												</div>
											</div>
											<div class="single-product style-3">
												<div class="row">
													<div class="col-sm-4">
														<div class="product-thumb-sin">
															<a href="#"><img src="assets/images/products/5.jpg" alt="" /></a>
														</div>
													</div>
													<div class="col-sm-8">
														<div class="product-text">
															<h4><a href="#">Haworthia Wide Zebra</a></h4>
															<span class="product-price">$29.49</span>
															<p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nul...</p>
															<a href="#" class="add-to-cart btn-common">Add to Cart</a>
														</div>
													</div>
												</div>
											</div>
											<div class="single-product style-3">
												<div class="row">
													<div class="col-sm-4">
														<div class="product-thumb-sin">
															<a href="#"><img src="assets/images/products/6.jpg" alt="" /></a>
														</div>
													</div>
													<div class="col-sm-8">
														<div class="product-text">
															<h4><a href="#">Haworthia Wide Zebra</a></h4>
															<span class="product-price">$29.49</span>
															<p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nul...</p>
															<a href="#" class="add-to-cart btn-common">Add to Cart</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--products-area end-->
				</div>
			</div>
		</div>
	</div>
	<!--products-area end-->
            <!--Our Success Story End--> 
            <!--Why you Need to Choose Ecova Start-->
            <!-- <div class="choose-ecova wf100 p80">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-8">
                        <div class="section-title-2">
                           <h5>Why you Need to</h5>
                           <h2>Choose Ecova</h2>
                        </div>
                        <div class="row">
                           <div class="col-6">
                              <div class="eco-box">
                                 <span class="econ-icon"><i class="far fa-handshake"></i></span>
                                 <h5> Become a Volunteer </h5>
                                 <p> Lorem ipsum dolor amet consectetur adipiscing elit, sed eiusmod tempor incididunt ut labore et dolore. </p>
                              </div>
                           </div>
                           <div class="col-6">
                              <div class="eco-box">
                                 <span class="econ-icon"><i class="far fa-money-bill-alt"></i></span>
                                 <h5> Send Donation </h5>
                                 <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id. </p>
                              </div>
                           </div>
                           <div class="col-6">
                              <div class="eco-box">
                                 <span class="econ-icon"><i class="fas fa-heart"></i></span>
                                 <h5> Affective Causes </h5>
                                 <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain.</p>
                              </div>
                           </div>
                           <div class="col-6">
                              <div class="eco-box">
                                 <span class="econ-icon"> <i class="fas fa-coffee"></i> </span>
                                 <h5> Fund Raising </h5>
                                 <p>Who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences. </p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="volunteer-form">
                           <div class="section-title">
                              <h3>Join us Now</h3>
                           </div>
                           <ul>
                              <li>
                                 <input type="text" class="form-control" placeholder="Your Name" aria-label="Your Name">
                              </li>
                              <li>
                                 <input type="text" class="form-control" placeholder="Email Address" aria-label="Email Address">
                              </li>
                              <li>
                                 <input type="text" class="form-control" placeholder="Contact" aria-label="Contact">
                              </li>
                              <li>
                                 <input type="submit" class="fsubmit" value="Signup to Join us">
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div> -->
            <!--Why you Need to Choose Ecova End--> 
            <!--Testimonials Start-->
            <!-- <section class="testimonials-section bg-white wf100 p80">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="section-title-2 text-center">
                           <h5>Testimonials</h5>
                           <h2>What People Says</h2>
                        </div>
                        <div id="testimonials" class="owl-carousel owl-theme">
                           <!--testimonials box start-->
                           <!-- <div class="item">
                              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using lorem sum is that it has a more or less normal distribution.</p>
                              <div class="tuser"> <img src="<?=base_url()?>assets/images/tuser1.jpg" alt=""> <strong>Danny Scotten</strong> Florida Partner </div>
                           </div> -->
                           <!--testimonials box End--> 
                           <!--testimonials box start-->
                           <!-- <div class="item">
                              <p>As opposed to using 'Content here, content here', making it look like readable English. Many Desktop and Web Pages are using lorem ipsum.</p>
                              <div class="tuser"> <img src="<?=base_url()?>assets/images/tuser2.jpg" alt=""> <strong>Richardson</strong> Florida Partner </div>
                           </div> -->
                           <!--testimonials box End--> 
                           <!--testimonials box start-->
                           <!-- <div class="item">
                              <p>It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
                              <div class="tuser"> <img src="<?=base_url()?>assets/images/tuser3.jpg" alt=""> <strong>Anna Lillian</strong> Florida Partner </div>
                           </div> -->
                           <!--testimonials box End--> 
                           <!--testimonials box start-->
                           <!-- <div class="item">
                              <p>Those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain.</p>
                              <div class="tuser"> <img src="<?=base_url()?>assets/images/tuser1.jpg" alt=""> <strong>Danny Scotten</strong> Florida Partner </div>
                           </div> -->
                           <!--testimonials box End--> 
                           <!--testimonials box start-->
                           <!-- <div class="item">
                              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using lorem sum is that it has a more or less normal distribution.</p>
                              <div class="tuser"> <img src="<?=base_url()?>assets/images/tuser1.jpg" alt=""> <strong>Danny Scotten</strong> Florida Partner </div>
                           </div> -->
                           <!--testimonials box End--> 
                           <!--testimonials box start-->
                           <!-- <div class="item">
                              <p>As opposed to using 'Content here, content here', making it look like readable English. Many Desktop and Web Pages are using lorem ipsum.</p>
                              <div class="tuser"> <img src="<?=base_url()?>assets/images/tuser2.jpg" alt=""> <strong>Richardson</strong> Florida Partner </div>
                           </div> -->
                           <!--testimonials box End--> 
                           <!--testimonials box start-->
                           <!-- <div class="item">
                              <p>It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
                              <div class="tuser"> <img src="<?=base_url()?>assets/images/tuser3.jpg" alt=""> <strong>Anna Lillian</strong> Florida Partner </div>
                           </div> -->
                           <!--testimonials box End--> 
                           <!--testimonials box start-->
                           <!-- <div class="item">
                              <p>Those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain.</p>
                              <div class="tuser"> <img src="<?=base_url()?>assets/images/tuser1.jpg" alt=""> <strong>Danny Scotten</strong> Florida Partner </div>
                           </div> -->
                           <!--testimonials box End--> 
                           <!--testimonials box start-->
                           <!-- <div class="item">
                              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using lorem sum is that it has a more or less normal distribution.</p>
                              <div class="tuser"> <img src="<?=base_url()?>assets/images/tuser1.jpg" alt=""> <strong>Danny Scotten</strong> Florida Partner </div>
                           </div> -->
                           <!--testimonials box End--> 
                           <!--testimonials box start-->
                           <!-- <div class="item">
                              <p>As opposed to using 'Content here, content here', making it look like readable English. Many Desktop and Web Pages are using lorem ipsum.</p>
                              <div class="tuser"> <img src="<?=base_url()?>assets/images/tuser2.jpg" alt=""> <strong>Richardson</strong> Florida Partner </div>
                           </div> -->
                           <!--testimonials box End--> 
                           <!--testimonials box start-->
                           <!-- <div class="item">
                              <p>It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
                              <div class="tuser"> <img src="<?=base_url()?>assets/images/tuser3.jpg" alt=""> <strong>Anna Lillian</strong> Florida Partner </div>
                           </div> -->
                           <!--testimonials box End--> 
                           <!--testimonials box start-->
                           <!-- <div class="item">
                              <p>Those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain.</p>
                              <div class="tuser"> <img src="<?=base_url()?>assets/images/tuser1.jpg" alt=""> <strong>Danny Scotten</strong> Florida Partner </div>
                           </div> -->
                           <!--testimonials box End--> 
                        <!-- </div>
                     </div>
                  </div>
               </div> -->
            <!-- </section> --> -->
            <!--Testimonials End--> 
            <!--Partner Logos Section Start-->
            <!-- <div class="partner-logos wf100">
               <div class="container">
                  <div id="partner-logos" class="owl-carousel owl-theme">
                     <div class="item"><img src="<?=base_url()?>assets/images/plogo1.png" alt=""></div>
                     <div class="item"><img src="<?=base_url()?>assets/images/plogo2.png" alt=""></div>
                     <div class="item"><img src="<?=base_url()?>assets/images/plogo3.png" alt=""></div>
                     <div class="item"><img src="<?=base_url()?>assets/images/plogo4.png" alt=""></div>
                     <div class="item"><img src="<?=base_url()?>assets/images/plogo5.png" alt=""></div>
                     <div class="item"><img src="<?=base_url()?>assets/images/plogo1.png" alt=""></div>
                     <div class="item"><img src="<?=base_url()?>assets/images/plogo2.png" alt=""></div>
                     <div class="item"><img src="<?=base_url()?>assets/images/plogo3.png" alt=""></div>
                     <div class="item"><img src="<?=base_url()?>assets/images/plogo4.png" alt=""></div>
                     <div class="item"><img src="<?=base_url()?>assets/images/plogo5.png" alt=""></div>
                  </div>
               </div>
            </div> -->
            <!--Partner Logos Section End--> 
         </section>
         <!--About End--> 

        <!-- Footer Start -->
         <?php
         include('footer.php');
         ?>
        <!--   Footer End -->
        <!-- modernizr js -->
	<script src="<?=base_url()?>assets2/js/vendor/modernizr-3.6.0.min.js"></script>
	<!-- jquery-1.12.0 version -->
	<script src="<?=base_url()?>assets2/js/vendor/jquery-1.12.0.min.js"></script>
	<!-- bootstra.min js -->
	<script src="<?=base_url()?>assets2/js/bootstrap.min.js"></script>
	<!-- meanmenu js -->
	<script src="<?=base_url()?>assets2/js/jquery.meanmenu.min.js"></script>
	<!-- easing js -->
	<script src="<?=base_url()?>assets2/js/jquery.easing.min.js"></script>
	<!---venobox-js-->
	<script src="<?=base_url()?>assets2/js/venobox.min.js"></script>
	<!---slick-js-->
	<script src="<?=base_url()?>assets2/js/slick.min.js"></script>
	<!---waypoints-js-->
	<script src="<?=base_url()?>assets2/js/waypoints.js"></script>
	<!---counterup-js-->
	<script src="<?=base_url()?>assets2/js/jquery.counterup.min.js"></script>
	<!---isotop-js-->
	<script src="<?=base_url()?>assets2/js/isotope.pkgd.min.js"></script>
	<!-- jquery-ui js -->
	<script src="<?=base_url()?>assets2/js/jquery-ui.min.js"></script>
	<!-- jquery.countdown js -->
	<script src="<?=base_url()?>assets2/js/jquery.countdown.min.js"></script>
	<!-- plugins js -->
	<script src="<?=base_url()?>assets2/js/plugins.js"></script>
	<!-- main js -->
	<script src="<?=base_url()?>assets2/js/main.js"></script>