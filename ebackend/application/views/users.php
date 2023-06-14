<?php
include('header.php');
?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4 style="color: green;">USERS</h4>
              <div class="ml-auto">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" id="addbtn">
                  +Add New
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                  <thead>
                    <tr class="text-center">
                      <th>Serial.No</th>
                      <th>Name/Username</th>
                      <th>Email Address</th>
                      <th>Password</th>
                      <th>UserType</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php
                    $serial=1;
                    foreach ($tabledata as $value)
                    echo'
                      <tr class="text-center">
                      <td> ' . $serial++ . ' </td>
                      <td> ' . $value->name . ' </td>
                      <td>' . $value->email . '</td>
                      <td>' . $value->password . '</td>
                      <td>' . $value->usertype . '</td>
                      <td><button type="button" id="editbtn" data-id="' . $value->id . '" class="btn btn-success" >  <i class="fa fa-edit"> Edit</i> </button>
                      <button type="button" class="btn btn-danger" id="deletebtn" data-id="' . $value->id . '"> <i class="fa fa-trash"> Delete</i> </button></td>
                      </tr>
                      ';
?>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="lbl_modal" style="color: green;">Add New User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="" class="form-group" id="insertform">
            <!-- Hidden Id For Edit -->
            <input type="text" id="id" name="id" hidden>
            <!-- Hidden Id For Edit -->

            <!-- Name -->
               <label for="name">Name</label>
               <input type="text" id="name" name="name" class="form-control" placeholder="Enter a Name">
            <!-- Name -->

            <!-- Email -->
            <label for="email">Email</label>
            <input type="text" id="email" name="email" class="form-control" placeholder="Enter Email Address">
            <!-- Email -->

            <!-- Password -->
            <label for="password">Password</label>
            <input type="text" id="password" name="password" class="form-control" placeholder="Enter Password">
            <!-- Password -->

            <!-- UserType -->
            <label for="password">UserType</label>
            <select for="" name="usertype" id="usertype"  class="form-control">
              <option value="">Choose Any One</option>
              <option value="admin">Admin</option>
              <option value="user">User</option>
            </select>
            <!-- User Type -->
            <div class="modal-footer">
              <button type="submit" id="btnsave" class="btn btn-info btn-block" ><i class="fa fa-save"> Save</i></button>
              <button type="button" id="btnupdate"  class="btn btn-success btn-block"><i class="fa fa-edit"> Update</i></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- End Add New Modal Here  -->

  <?php
include('footer.php');
?>

  <script> 

    //-- Add new Button Function --//
    $("#addbtn").click(function(){
      $("#exampleModal").modal('show');
      $("#lblmodal").text("Add New User");
      $("#btnsave").show();
      $("#btnupdate").hide();
    });
    //-- Add new Button Function --//

    // Insert Add New User 
    $('#insertform').submit(function () {
      var form = $('#insertform').serialize();
      var name = $('#name').val();
      var email = $('#email').val();
      var password = $('#password').val();
      var usertype = $('#usertype').val();
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
          title: "Enter Email or Username ",
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
      else if (usertype == "") {
        swal({

          icon: "error",
          title: "Select a User Type",
          timer: 1500,
        })
      }
      else {

        $.ajax({
          type: 'post',
          url: '<?= base_url()?>Users/insert',
          data: form,
          success: function (data) {
            if (data == "Correct") {
              swal({
                icon: "success",
                title: "WELCOME",
                text: "New Account Addeded",
                timer: 1500,
              }).then(() => {
                window.location = "<?= base_url()?>Users";
              })
            }
            else {
              swal({
                icon: "Error",
                title: "Try Again",
                text: "Any Issue Occured",
              }).then(() => {
                window.location = "<?= base_url()?>Users";
              })
            }
          }
        })
      }
    })
    // End Insert Function
    
    // Edit Function
    $(document).on('click','#editbtn',function(){
      var id=$(this).data('id');
      $("#exampleModal").modal('show');
      $("#btnsave").hide();
      $("#btnupdate").show();
      $("#lblmodal").text("Edit User");
      $.ajax({
        type:'post',
        url:'<?= base_url()?>Users/edit',
        data:{id:id},
        dataType:'json',
        before:function(){
          
        },
        success:function(result){
          $("#id").val(result.id);
          $("#name").val(result.name);
          $("#email").val(result.email);
          $("#password").val(result.password);
          $("#usertype").val(result.usertype);
        }
      })
    });

    // Edit Funtion End //

    // -- Update Function --//
    $("#btnupdate").click(function(){
      var form = $('#insertform').serialize();
      var name = $('#name').val();
      var email = $('#email').val();
      var password = $('#password').val();
      var usertype = $('#usertype').val();
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
          title: "Enter Email or Username ",
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
      else if (usertype == "") {
        swal({

          icon: "error",
          title: "Select a UserType",
          timer: 1500,
        })
      }
      else {

        $.ajax({
          type: 'post',
          url: '<?= base_url()?>Users/update',
          data: form,
          success: function (data) {
            if (data == "Correct") {
              swal({
                icon: "success",
                title: "Data Updated",
                text: "Successfully",
                timer: 1500,
              }).then(() => {
                window.location = "<?= base_url()?>Users";
              })
            }
            else {
              swal({
                icon: "Error",
                title: "Try Again",
                text: "Any Issue Occured",
              }).then(() => {
                window.location = "<?= base_url()?>Users";
              })
            }
          }
        })
      }
    });
    // -- Update Function --//
    // Delete User Function
    $(document).on('click', '#deletebtn', function () {
      var id = $(this).data('id');
      //alert(id);
      $.ajax({
        type: 'post',
        url: "<?= base_url()?>Users/delete",
        data: { id: id },
        success: function (data) {
          if (data == 'Correct') {
            swal({
              title: 'Are you sure?',
              text: 'This User and it`s details will be permanantly deleted!',
              icon: 'warning',
              buttons: ["Cancel", "Yes!"],
            })
              .then(function (value) {
                if (value) {
                  swal({
                    icon: "success",
                    title: "Deleted",
                    text: "Your Account is Deleted",
                    timer: 1500,
                  }).then(() => {
                    window.location = "<?= base_url()?>Users";
                  })
                }
              })
          }
          else {
            swal({
              icon: "Error",
              title: "Try Again",
              text: "Any Issue Occured",
            }).then(() => {
              window.location = "<?= base_url()?>Users";
            })

          }
        }

      })

    })
    //  End Delete Function
  </script>