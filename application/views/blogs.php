<head>
   <title>Blogs - Easy Green Pakistan</title>
</head>
<?php
include('header.php') ?>
<!--Inner Header Start-->
<section class="wf100 p100 inner-header">
   <div class="container">
      <h1>Blogs</h1>
      <ul>
         <li><a href="#">Home</a></li>
         <!-- <li><a href="#">Pages </a></li> -->
         <!-- <li><a href="#">Projects</a></li> -->
         <li><a href="#">Blogs</a></li>
      </ul>
   </div>
</section>
<!--Inner Header End-->
<!--Blog Start-->
<section class="wf100 p80 blog">
   <div class="blog-details">
      <div class="container">
         <div class="row">
            <div class="col-lg-9 col-md-8">
               <!--Blog Single Content Start-->
               <div class="blog-single-content">
                  <h5>Documentary</h5>
                  <iframe src="https://player.vimeo.com/video/89009039"></iframe>
                  <h5>Details</h5>
                  <!-- <table>
                     <tr>
                        <td>Project Title</td>
                        <td>Implanting of Solar & Wind Energy Systems</td>
                     </tr>
                     <tr>
                        <td>Project Manager</td>
                        <td>Albert Stewart</td>
                     </tr>
                     <tr>
                        <td>Date & Duration</td>
                        <td>20 Sep. 2018 - 25 Oct. 2020, <strong>2 Years</strong></td>
                     </tr>
                     <tr>
                        <td>Category</td>
                        <td>Solar Panels, Wind Mills</td>
                     </tr>
                     <tr>
                        <td>Budget</td>
                        <td>$78.5 Millions</td>
                     </tr>
                  </table> -->
                  <div class="blog-single-thumb"><img src="<?= base_url() ?>assets/images/blog/bf4.jpg" alt=""></div>
                  <h3>Implanting Solar & Wind Energies System</h3>
                  <ul class="post-meta">
                     <li><i class="fas fa-user-circle"></i> John Ashley</li>
                     <li><i class="fas fa-calendar-alt"></i> 29 September, 2018</li>
                     <li><i class="fas fa-comments"></i> 134 Comments</li>
                     <li class="tags"><i class="fas fa-tags"></i> <a href="#">Plant</a> <a href="#">Trees</a> <a href="#">Water</a> <a href="#">Recycling</a></li>
                  </ul>
                  <p> The environment includes; the surface of the earth, natural re­sources, land and water, mountains and plains, fertile lands and deserts, oceans, storms and cy­clones, weather and climatic factors, seasons, etc. It also includes biological conditions such as plants, animals with all their complexities.</p>
                  <p>We are going to run a solid educational campaign for the orphan children study. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum.</p>
                  <p>You need to be sure there isn't anything embarrassing hidden in the middle of text. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage. </p>
                  <p> Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. </p>
                 

                  <ul class="small-gallery">
                     <li> <img src="<?= base_url() ?>assets/images/blog/bsmall1.jpg" alt=""> </li>
                     <li> <img src="<?= base_url() ?>assets/images/blog/bsmall2.jpg" alt=""> </li>
                     <li> <img src="<?= base_url() ?>assets/images/blog/bsmall3.jpg" alt=""> </li>
                  </ul>

                  <!--Post Tags Start-->
                  <!-- <div class="single-post-tags wf100"> <a href="#">Solar Energy</a> <a href="#"> Plant Ecology </a> <a href="#"> Wildlife </a> <a href="#"> Eco Ideas </a> <a href="#"> Waste Management </a> <a href="#"> Water </a> <a href="#"> Forest Planting </a> <a href="#"> Donation </a> <a href="#"> Wind Energy </a> <a href="#"> Recycling </a> </div> -->
                  <!--Post Tags End-->
                  <!--Author Box Start-->
                  
                  <!--Author Box End-->
                  <!--Author Comments Start-->
                  <div class="post-comments wf100">
                     <h4>Comments on Post</h4>
                     <ul class="comments">
                     <?php
                        foreach ($comment_data as $value)
                           echo '
                             <li class="comment">
                                    <div class="user-thumb"> <img src="assets/images/auser.jpg" alt=""></div>
                                    <div class="comment-txt">
                                       <h6>' . $value->name . '</h6>
                                       <p>' . $value->comment . '</p>
                                       <ul class="comment-time">
                                          <li>' . $value->datetime . '</li>
                                          <li> <a href="#"></a>' . $value->email . ' </li>
                                       </ul>
                                       <br>
                                       <ul class="children">
                                     <li class="comment">
                                       <div class="user-thumb"> <img src="assets/images/auser.jpg" alt=""></div>
                                       <div class="comment-txt">
                                          <h6>Admin</h6>
                                          <p>'. $value->reply .'</p>
                                       </div>
                                    </li></ul>
                                    </div>
                                    
                              ';
                      ?>
                       
                        </li>
                        <!-- <li class="comment">
                                    <div class="user-thumb"> <img src="<?= base_url() ?>assets/images/auser.jpg" alt=""></div>
                                    <div class="comment-txt">
                                       <h6> Harry Butler </h6>
                                       <p> Personally I think a combination of all these methods is most effective, but in today’s post I will be focusing specifically on how to use and style WordPress’ built-in sticky post feature and highlighting it’s best use case based on my own experience. </p>
                                       <ul class="comment-time">
                                          <li>Posted: 09 July, 2018 at 2:37 pm</li>
                                          <li> <a href="#"><i class="fas fa-reply"></i> Reply</a> </li>
                                       </ul>
                                    </div>
                                 </li> -->
                     </ul>
                  </div>
                  <!--Author Comments End-->
                  <!--Leave a Comment Start-->
                  <div class="wf100 comment-form">
                     <h4>Leave a Comment</h4>
                     <form action="" id="insertform">
                        <ul class="cform">
                           <li class="half pr-15">
                              <input type="text" id="name" name="name" class="form-control" placeholder="Name">
                           </li>
                           <li class="half pl-15">
                              <input type="email" id="email" name="email" class="form-control" placeholder="Email or Username">
                           </li>
                           <!-- <li class="half pr-15">
                              <input type="text"  class="form-control" placeholder="Contact">
                           </li>
                           <li class="half pl-15">
                              <input type="text" class="form-control" placeholder="Subject">
                           </li> -->
                           <li class="full">
                              <textarea id="comment" name="comment" class="textarea-control" placeholder="Comment Please"></textarea>
                           </li>
                           <li class="full">
                              <input type="submit" value="Comment Please" class="fsubmit">
                           </li>
                        </ul>
                     </form>
                  </div>
                  <!--Leave a Comment End-->
               </div>
               <!--Blog Single Content End-->
            </div>
            <div class="col-lg-3 col-md-4">
               <div class="sidebar">
                  <!--Widget Start-->
                  <div class="side-widget">
                     <h5>Search</h5>
                     <div class="side-search">
                        <form>
                           <input type="search" class="form-control" placeholder="Search">
                           <button><i class="fas fa-search"></i></button>
                        </form>
                     </div>
                  </div>
                  <!--Widget End-->
                  <!--Widget Start-->
                  <!-- <div class="side-widget text-widget">
                              <h5>Text Widget</h5>
                              <p> We are Ecova: eco &amp; environmental community. We need your support and help to Stop Globar Warning. Few generations ago it to seemed like world’s resources were infinite, and the people needed only to access them to create business, Lorem ipsum dolor it amet consect adipiscing. </p>
                           </div> -->
                  <!--Widget End-->
                  <!--Widget Start-->
                 
                  <!--Widget Start-->
                  <!--Widget Start-->
                  <!-- <div class="side-widget project-list-widget">
                              <h5>Current Projects</h5>
                              <ul>
                                 <li><a href="#">Waste Management</a></li>
                                 <li><a href="#">Solar Energy</a></li>
                                 <li><a href="#">Eco Ideas</a></li>
                                 <li><a href="#">Recycling Materials</a></li>
                                 <li><a href="#">Plant Ecology</a></li>
                                 <li><a href="#">Saving Wildlife</a></li>
                                 <li><a href="#">Water Resources</a></li>
                                 <li><a href="#">Forest &amp; Tree Planting</a></li>
                                 <li><a href="#">Wing Energy</a></li>
                              </ul>
                           </div> -->
                  <!--Widget End-->
                  <!--Widget Start-->
                  <div class="side-widget">
                     <h5>Tags</h5>
                     <div class="single-post-tags"> <a href="#">Solar Energy</a> <a href="#"> Plant Ecology </a> <a href="#"> Wildlife </a> <a href="#"> Eco Ideas </a> <a href="#"> Waste Management </a> <a href="#"> Water </a> <a href="#"> Forest Planting </a> <a href="#"> Donation </a> <a href="#"> Wind Energy </a> <a href="#"> Recycling </a> </div>
                  </div>
                  <!--Widget End-->
                  <!--Widget Start-->
                  <div class="side-widget">
                     <h5>Recent Work</h5>
                     <div id="side-slider" class="owl-carousel owl-theme">
                        <!--Item Start-->
                        <div class="item">
                           <div class="pro-box"> <img src="<?= base_url() ?>assets/images/current-pro2.jpg" alt="">
                              <h5>Forest &amp; Tree Planting</h5>
                              <div class="pro-hover">
                                 <h6>Forest &amp; Tree Planting</h6>
                                 <p>We are working over 20 years on Waste Management &amp; Material Recycling Projects.</p>
                                 <a href="#">Read More</a>
                              </div>
                           </div>
                        </div>
                        <!--Item End-->

                        <!--Item Start-->
                        <div class="item">
                           <div class="pro-box"> <img src="<?= base_url() ?>assets/images/current-pro1.jpg" alt="">
                              <h5>Forest &amp; Tree Planting</h5>
                              <div class="pro-hover">
                                 <h6>Forest &amp; Tree Planting</h6>
                                 <p>We are working over 20 years on Waste Management &amp; Material Recycling Projects.</p>
                                 <a href="#">Read More</a>
                              </div>
                           </div>
                        </div>
                        <!--Item End-->

                        <!--Item Start-->
                        <div class="item">
                           <div class="pro-box"> <img src="<?= base_url() ?>assets/images/current-pro5.jpg" alt="">
                              <h5>Forest &amp; Tree Planting</h5>
                              <div class="pro-hover">
                                 <h6>Forest &amp; Tree Planting</h6>
                                 <p>We are working over 20 years on Waste Management &amp; Material Recycling Projects.</p>
                                 <a href="#">Read More</a>
                              </div>
                           </div>
                        </div>
                        <!--Item End-->

                     </div>
                  </div>
                  <!--Widget End-->
                  <!--Widget Start-->
                  <div class="side-widget">
                     <h5>Our Causes</h5>
                     <div class="campaign-box">
                        <div class="campaign-thumb"> <a href="#"><i class="fas fa-link"></i></a> <img src="<?= base_url() ?>assets/images/news1.jpg" alt=""> </div>
                        <div class="campaign-txt">
                           <h6><a href="#">Let’s Stop Global Warming</a></h6>
                           <ul class="participants">
                              <li><img src="<?= base_url() ?>assets/images/u1.jpg" alt=""></li>
                              <li><img src="<?= base_url() ?>assets/images/u4.jpg" alt=""></li>
                              <li><img src="<?= base_url() ?>assets/images/u5.jpg" alt=""></li>
                              <li><span>+16</span></li>
                              <li><strong><i>21</i> Backers</strong></li>
                           </ul>
                           <div class="progress">
                              <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                           <ul class="funds">
                              <li><strong>47%</strong> Funded</li>
                              <li><strong>$638</strong> Raised</li>
                              <li><strong>$9750</strong> Required</li>
                           </ul>
                        </div>
                        <a href="#" class="dbutton">Donate Now</a>
                     </div>
                  </div>
                  <!--Widget End-->
                  <!--Widget Start-->
                  <div class="side-widget">
                     <h5>Upcoming Events</h5>
                     <!--Blog Post Start-->
                     <div class="event-post">
                        <div class="event-thumb">
                           <a href="#"><i class="fas fa-link"></i></a> <img src="<?= base_url() ?>assets/images/ep1.jpg" alt="">
                           <ul class="post-meta">
                              <li>29 August, 2018 </li>
                              <li> 08:00 am - 01:00 pm</li>
                           </ul>
                        </div>
                        <div class="event-txt">
                           <h6><a href="#">Forest Planting Campaign</a></h6>
                           <p><i class="fas fa-map-marker-alt"></i> Green Gardendening Center, NY </p>
                        </div>
                     </div>
                     <!--Blog Post End-->
                  </div>
                  <!--Widget End-->
                  <!--Widget Start-->
                  <!-- <div class="side-widget archives">
                     <h5>Archives</h5>
                     <ul>
                        <li><a href="#"> November 2018</a></li>
                        <li><a href="#"> October 2018</a></li>
                        <li><a href="#"> September 2018</a></li>
                        <li><a href="#"> August 2018</a></li>
                        <li><a href="#"> July 2018</a></li>
                        <li><a href="#"> June 2018</a></li>
                        <li><a href="#"> May 2018</a></li>
                        <li><a href="#"> April 2018</a></li>
                        <li><a href="#"> March 2018</a></li>
                        <li><a href="#"> February 2018</a></li>
                        <li><a href="#"> January 2018</a></li>
                        <li><a href="#"> December 2017</a></li>
                     </ul>
                  </div> -->
                  <!--Widget End-->
                  <!--Widget Start-->
                  <!-- <div class="side-widget">
                     <div class="donation-amount">
                        <h5>Make a Donation</h5>
                        <form>
                           <ul class="radio-boxes">
                              <li>
                                 <div class="radio custom">
                                    <input name="donation" id="d1" type="radio" class="css-radio">
                                    <label for="d1" class="css-label">$5</label>
                                 </div>
                              </li>
                              <li>
                                 <div class="radio custom">
                                    <input name="donation" id="d2" type="radio" class="css-radio">
                                    <label for="d2" class="css-label">$20</label>
                                 </div>
                              </li>
                              <li>
                                 <div class="radio custom">
                                    <input name="donation" id="d3" type="radio" class="css-radio">
                                    <label for="d3" class="css-label">$50</label>
                                 </div>
                              </li>
                              <li>
                                 <div class="radio custom">
                                    <input name="donation" id="d4" type="radio" class="css-radio">
                                    <label for="d4" class="css-label">$100</label>
                                 </div>
                              </li>
                              <li>
                                 <div class="radio custom">
                                    <input name="donation" id="d5" type="radio" class="css-radio">
                                    <label for="d5" class="css-label">$250</label>
                                 </div>
                              </li>
                              <li>
                                 <div class="radio custom">
                                    <input name="donation" id="d6" type="radio" class="css-radio">
                                    <label for="d6" class="css-label">$500</label>
                                 </div>
                              </li>
                              <li class="last-input">
                                 <div class="inputs">
                                    <input class="enter" type="text" placeholder="Enter other amout $ ">
                                 </div>
                              </li>
                              <li class="form-submit">
                                 <button type="submit">Continue to Donate</button>
                              </li>
                           </ul>
                        </form>
                     </div>
                  </div> -->
                  <!--Widget End-->
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--Blog End-->
<?php
include('footer.php') ?>

<script>
   // Insert Add New User 
   $('#insertform').submit(function() {
      var form = $('#insertform').serialize();
      var name = $('#name').val();
      var email = $('#email').val();
      var comment = $('#comment').val();
      event.preventDefault();
      if (name == "") {
         swal({
            icon: "error",
            title: "Enter Your Name",
            timer: 1500,
         })
      } else if (email == "") {
         swal({
            icon: "error",
            title: "Enter Email UserName",
            timer: 1500,
         })
      } else if (comment == "") {
         swal({
            icon: "error",
            title: "Any Comment For Us",
            timer: 1500,
         })
      } else {

         $.ajax({
            type: 'post',
            url: '<?= base_url() ?>Blogs/insert',
            data: form,
            success: function(data) {
               if (data == "Correct") {
                  swal({
                     icon: "success",
                     title: "Thank You",
                     text: "Your Comment Sent",
                     timer: 1500,
                  }).then(() => {
                     location.reload();
                  })
               } else {
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