<?php
$tabledata=$this->db->get('customize_table')->result()[0];
  ?>
<!DOCTYPE html>
<html lang="en">


<!-- auth-register.html  21 Nov 2019 04:05:01 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?= $tabledata->web_name ?></title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?=base_url()?>assets/css/app.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/bundles/jquery-selectric/selectric.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="<?=base_url()?>assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='<?=base_url()?>assets/img/logo2.png' />
</head>

<body style="background-image:url(<?=base_url()?>assets/img/back.jpg) ;">
  <div class="loader"></div>
  <div id="app">
    <br><br>
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="card card-success">
              <div class="card-header">
              <img style="width:35px ;" src="<?=base_url()?>assets/img/logo2.png" alt="">
               <h4 style="color: green;" ><?= $tabledata->web_name?></h4>
              </div>
              <div class="card-body">
                <form method="POST" id="insertform">
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="name" style="color: green;" >First Name</label>
                      <input id="name" type="text" class="form-control" name="name" autofocus>
                    </div>
                    <!-- <div class="form-group col-6">
                      <label for="last_name" style="color: green;" >Last Name</label>
                      <input id="last_name" type="text" class="form-control" name="last_name">
                    </div> -->
                    <div class="form-group col-6">
                    <label for="email" style="color: green;" >Email</label>
                    <input id="email" type="email" class="form-control" name="email">
                    <div class="invalid-feedback">
                    </div>
                    </div>
                  </div>
                  <!-- <div class="form-group col-6">
                    <label for="email" style="color: green;" >Email</label>
                    <input id="email" type="email" class="form-control" name="email">
                    <div class="invalid-feedback">
                    </div>
                  </div> -->
                  <div class="row">
                    <div class="form-group col-12">
                      <label for="password" class="d-block" style="color: green;" >Password</label>
                      <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator"
                        name="password">
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    <!-- <div class="form-group col-6">
                      <label for="password2" class="d-block" style="color: green;" >Account Type</label>
                      <input id="password2" type="password" class="form-control" name="password-confirm">
                    </div> -->
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                      <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-success btn-lg btn-block">
                      SIGNUP
                    </button>
                  </div>
                </form>
              </div>
              <div class="mb-4 text-muted text-center">
                Already Registered? <a href="<?=base_url()?>Login" style="color: green;" >Login</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="<?=base_url()?>assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="<?=base_url()?>assets/bundles/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="<?=base_url()?>assets/bundles/jquery-selectric/jquery.selectric.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="<?=base_url()?>assets/js/page/auth-register.js"></script>
  <!-- Template JS File -->
  <script src="<?=base_url()?>assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="<?=base_url()?>assets/js/custom.js"></script>
  <!-- Sweetalert  -->
  <script src="<?=base_url()?>assets/js/sweetalert.js "></script>
</body>


<!-- auth-register.html  21 Nov 2019 04:05:02 GMT -->
</html>
<script>
// Insert Add New User 
$('#insertform').submit(function () {
      var form = $('#insertform').serialize();
      var name = $('#name').val();
      var email = $('#email').val();
      var password = $('#password').val();
      event.preventDefault();
      if (name == "") {
        swal({

          icon: "error",
          title: "Enter Your Name",
          timer: 1500,
        })
      }
      if (email == "") {
        swal({

          icon: "error",
          title: "Enter Email Username",
          timer: 1500,
        })
      }
      else if (password == "") {
        swal({

          icon: "error",
          title: "Enter Password",
          timer: 1500,
        })
      }
      else {

        $.ajax({
          type: 'post',
          url: '<?= base_url()?>Signup/insert',
          data: form,
          success: function (data) {
            if (data == "Correct") {
              swal({
                icon: "success",
                title: "Signup Success",
                text: "Welcome to Fresh Plant Pakistan ",
                showConfirmButton: true,
              }).then(() => {
                window.location="<?=base_url()?>Login";
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