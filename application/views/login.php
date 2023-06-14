<head>
   <title>Login - Easy Green Pakistan</title>
</head>
<?php
include('header.php')
?>
         <!--Inner Header Start-->
         <section class="wf100 p100 inner-header">
            <div class="container">
               <h1>My Account</h1>
               <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#"> My Account </a></li>
               </ul>
            </div>
         </section>
         <!--Inner Header End--> 
         <!--Causes Start-->
         <section class="wf100 p80">
            <div class="container">
               <div class="row">
                  <div class="col-lg-8">
                     <div class="myaccount-form">
                        <h3>Register Your Account</h3>
                        <form>
                           <ul class="row">
                              <li class="col-md-6">
                                 <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Your Name" required>
                                 </div>
                              </li>
                              <li class="col-md-6">
                                 <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Contact #" required>
                                 </div>
                              </li>
                              <li class="col-md-6">
                                 <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Email Address" required>
                                 </div>
                              </li>
                              <li class="col-md-6">
                                 <div class="input-group">
                                    <input type="text" class="form-control" placeholder="User Name">
                                 </div>
                              </li>
                              <li class="col-md-6">
                                 <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Password">
                                 </div>
                              </li>
                              <li class="col-md-6">
                                 <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Re-enter Password">
                                 </div>
                              </li>
                              <li class="col-md-12">
                                 <div class="input-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">I agree to the Terms of <a href="#">Services & Privacy Plicy</a></label>
                                 </div>
                              </li>
                              <li class="col-md-12">
                                 <button class="register">Register Your Account</button>
                              </li>
                           </ul>
                        </form>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="login-box">
                        <h3>Login Account</h3>
                        <form>
                           <div class="input-group">
                              <input type="text" class="form-control" placeholder="Username/Email" required>
                           </div>
                           <div class="input-group">
                              <input type="password" class="form-control" placeholder="Password" required>
                           </div>
                           <div class="input-group form-check">
                              <input type="checkbox" class="form-check-input" id="exampleCheck2">
                              <label class="form-check-label" for="exampleCheck2">Remember Me</label>
                              <a href="#" class="fp">Forgot Password</a> 
                           </div>
                           <div class="input-group">
                              <button class="login-btn">Login Account</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--Causes End--> 
         <?php
include('footer.php')
?>