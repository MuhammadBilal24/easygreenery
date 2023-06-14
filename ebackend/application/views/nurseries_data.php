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
              <h4 style="color: green;">Nurseries</h4>
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
                      <th>Nursery Name</th>
                      <th>Address</th>
                      <th>City</th>
                      <th>Contact</th>
                      <th>Images</th>
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
                      <td> ' . $value->nursery_name. ' </td>
                      <td> ' . $value->address. ' </td>
                      <td> ' . $value->city. ' </td>
                      <td> ' . $value->contact. ' </td>
                      <td><img src="' . base_url() . 'assets/product/' . $value->img . '"  style="width:40%;height:80px; width:70px "></td>
                      
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
          <h5 class="modal-title" id="lblmodal" style="color: green;">Add New Nursery</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="" class="form-group" id="insertform">
            <!-- Hidden Id For Edit -->
            <input type="text" id="id" name="id" hidden>
            <!-- Hidden Id For Edit -->

               <label for="nursery_name">Nursery Name</label>
               <input type="text" id="nursery_name" name="nursery_name" class="form-control" placeholder="Enter a Nursery Name">
              
               <label for="address">Address</label>
               <input type="text" id="address" name="address" class="form-control" placeholder="Enter Address">
              
               <label for="city">City</label>
            <select type="text" id="city" name="city" class="form-control">
              <option value="">Select a City</option>
              <?php
                foreach ($citydata as $cty)
                  echo '
                    <option value="' . $cty->cityname . '">' . $cty->cityname . '</option>
                    ';
              ?>
            </select>
            
               <label for="contact">Contact</label>
               <input type="text" id="contact" name="contact" class="form-control" placeholder="Enter Contact">

                 
                  <label>Upload Photo:</label>
                  <input name="file" type="file" id="image_file" required class="form-control">

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
      $("#lblmodal").text("Add New Nursery");
      $("#btnsave").show();
      $("#btnupdate").hide();
      $("#nursery_name").val("");
      $("#address").val("");
      $("#city").val("");
      $("#contact").val("");
      $("#img").val("");
    });
    //-- Add new Button Function --//

    // Insert Add New User 
    $('#insertform').submit(function () {
      var form = $('#insertform').serialize();
      var nursery_name = $('#nursery_name').val();
      var address = $('#address').val();
      var city = $('#city').val();
      var contact = $('#contact').val();
      var img = $('#img').val();
      event.preventDefault();
      if (nursery_name == "") {
        swal({

          icon: "error",
          title: "Enter Nursery Name",
          timer: 1500,
        })
      }
      else if( address=="")
      {
        swal({
            icon: "error",
            title: "Enter Address",
            timer: 1500,
          })
      }
      else if( city=="")
      {
        swal({
            icon: "error",
            title: "Enter City",
            timer: 1500,
          })
      }
      else if( contact=="")
      {
        swal({
            icon: "error",
            title: "Enter Contact Details",
            timer: 1500,
          })
      }
      else if( img=="")
      {
        swal({
            icon: "error",
            title: "Insert Any Image",
            timer: 1500,
          })
      }
      else {

        $.ajax({
          type: 'post',
          url: '<?= base_url()?>Nurseries_data/insert',
          data: new FormData(this),
          processData: false,
          contentType: false,
          cache: false,
          async: false,
          success: function (data) {
            if (data == "Correct") {
              swal({
                icon: "success",
                title: "Data Saved",
                text: "Successfully",
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
    
    // Edit Function
    $(document).on('click','#editbtn',function(){
      var id=$(this).data('id');
      $("#exampleModal").modal('show');
      $("#btnsave").hide();
      $("#btnupdate").show();
      $("#lblmodal").text("Edit Nursery Data");
      $("#nursery_name").val("");
      $("#address").val("");
      $("#city").val("");
      $("#contact").val("");
      $.ajax({
        type:'post',
        url:'<?= base_url()?>Nurseries_data/edit',
        data:{id:id},
        dataType:'json',
        before:function(){
        },
        success:function(result){
          $("#id").val(result.id);
          $("#nursery_name").val(result.nursery_name);
          $("#address").val(result.address);
          $("#city").val(result.city);
          $("#contact").val(result.contact);
          
        }
      })
    });

    // Edit Funtion End //

    // -- Update Function --//
    $("#btnupdate").click(function(){
      var form = $('#insertform').serialize();
      var nursery_name = $('#nursery_name').val();
      var address = $('#address').val();
      var city = $('#city').val();
      var contact = $('#contact').val();
      event.preventDefault();
      if (nursery_name == "") {
        swal({

          icon: "error",
          title: "Enter Nursery Name",
          timer: 1500,
        })
      }
      else if(address=="")
      {
        swal({
            icon: "error",
            title: "Enter Address",
            timer: 1500,
          })
      }
      else if(city=="")
      {
        swal({
            icon: "error",
            title: "Enter city",
            timer: 1500,
          })
      }
      else if(contact=="")
      {
        swal({
            icon: "error",
            title: "Enter Contact Details",
            timer: 1500,
          })
      }
      else {

        $.ajax({
          type: 'post',
          url: '<?= base_url()?>Nurseries_data/update',
          data: form,
          success: function (data) {
            if (data == "Correct") {
              swal({
                icon: "success",
                title: "Data Updated",
                text: "Successfully",
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
    });
    // -- Update Function --//
    // Delete User Function
    $(document).on('click', '#deletebtn', function () {
      var id = $(this).data('id');
      //alert(id);
      $.ajax({
        type: 'post',
        url: "<?= base_url()?>Nurseries_data/delete",
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
                    title: "Data Deleted",
                    text: "Successfully",
                    timer: 1500,
                  }).then(() => {
                    location.reload();
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
                location.reload();
            })

          }
        }

      })

    })
    //  End Delete Function
  </script>