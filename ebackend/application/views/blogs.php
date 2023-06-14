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
              <h4 style="color: green;">Blogs</h4>
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
                      <th>Date Time</th>
                      <th>Reviews</th>
                      <th>Description</th>
                      <th>Image</th>
                      <!-- <th>Season</th>
                      <th>City</th>
                      <th>Description</th>
                      <th>datetime</th>
                      <th>Image</th> -->
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php
                  $serial = 1;
                  foreach ($tabledata as $value)
                   echo '
                      <tr class="text-center">
                      <td> ' . $serial++ . ' </td>
                      <td> ' . $value->datetime . ' </td>
                      <td> ' . $value->reviews . ' </td>
                      <td> ' . $value->description . ' </td>
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
          <h5 class="modal-title" id="lblmodal" style="color: green;">Add New Blogs</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="" class="form-group" id="insertform">
            <!-- Hidden Id For Edit -->
            <input type="text" id="id" name="id" hidden>
            <!-- Hidden Id For Edit -->

            <!-- Plant Type -->
            <label for="datetime">Date Time</label>
            <input type="date" id="datetime" name="datetime" class="form-control" placeholder="Enter a Date Time">
            <!-- Plant Type -->

            <!-- Plant Type -->
            <label  for="reviews">Review</label>
            <input type="text" id="reviews" name="reviews" class="form-control" placeholder="Write A Review">
            <!-- Plant Type -->
           

            <!-- Plant Type -->

            <!-- Plant Type -->
            <label for="description">Description</label>
            <input type="text" id="description" name="description" class="form-control" placeholder="Write Description">
            <!-- Plant Type -->

            <!-- Plant Type -->
            <label>Upload Photo:</label>
            <input name="file" type="file" id="image_file" required class="form-control"><!-- Plant Type -->
            

            <div class="modal-footer">
              <button type="submit" id="btnsave" class="btn btn-info btn-block"><i class="fa fa-save">
                  Save</i></button>
              <button type="button" id="btnupdate" class="btn btn-success btn-block"><i class="fa fa-edit">
                  Update</i></button>
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
    $("#addbtn").click(function () {
      $("#exampleModal").modal('show');
      $("#lblmodal").text("Add New Blog");
      $("#btnsave").show();
      $("#btnupdate").hide();
      $("#type").val("");
    });
    //-- Add new Button Function --//

    // Insert Add New User 
    $('#insertform').submit(function () {
      var form = $('#insertform').serialize();
      var datetime = $('#datetime').val();
      var reviews = $('#reviews').val();
      var description = $('#description').val();
      var img = $('#img').val();

      event.preventDefault();
      if (reviews == "") {
        swal({

          icon: "error",
          title: "Enter Blogs Data",
          timer: 1500,
        })
      }
      
      else if (description == "") {
        swal({

          icon: "error",
          title: "Enter Description",
          timer: 1500,
        })
      }
      else if (datetime == "") {
        swal({

          icon: "error",
          title: "Enter datetime",
          timer: 1500,
        })
      }
      else if (img == "") {
        swal({

          icon: "error",
          title: "Insert an Blogs Picture",
          timer: 1500,
        })
      }
      else {

        $.ajax({
          type: 'post',
          url: '<?= base_url()?>Blogs/insert',
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
    $(document).on('click', '#editbtn', function () {
      var id = $(this).data('id');
      $("#exampleModal").modal('show');
      $("#btnsave").hide();
      $("#btnupdate").show();
      $("#lblmodal").text("Edit a Blogs Info");
      $("#reviews").val("");
      $("#description").val("");
      $("#datetime").val("");
      $("#img").val("");
      $.ajax({
        type: 'post',
        url: '<?= base_url()?>Blogs/edit',
        data: new FormData(this),
        processData: false,
        contentType: false,
        cache: false,
        async: false,
        dataType: "json",
        success: function (result) {
          $("#id").val(result.id);
          $("#reviews").val(result.reviews);
          $("#description").val(result.description);
          $("#datetime").val(result.datetime);
          $("#img").val(result.img);

        }
      })
    });

    // Edit Funtion End //

    // -- Update Function --//
    $("#btnupdate").click(function () {
      var form = $('#insertform').serialize();
      var reviews = $('#reviews').val();
      var description = $('#description').val();
      var datetime = $('#datetime').val();
      var img = $('#img').val();
      event.preventDefault();
      if (reviews == "") {
        swal({

          icon: "error",
          title: "Write A Review",
          timer: 1500,
        })
      }
      
      else if (description == "") {
        swal({

          icon: "error",
          title: "Enter Description",
          timer: 1500,
        })
      }
      else if (datetime == "") {
        swal({

          icon: "error",
          title: "Enter datetime",
          timer: 1500,
        })
      }
      else if (img == "") {
        swal({

          icon: "error",
          title: "Insert an Blogs Picture",
          timer: 1500,
        })
      }
      else {

        $.ajax({
          type: 'post',
          url: '<?= base_url()?>Blogs/update',
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
    // -- End Update Function --//

    // Delete User Function
    $(document).on('click', '#deletebtn', function () {
      var id = $(this).data('id');
      //alert(id);
      $.ajax({
        type: 'post',
        url: "<?= base_url()?>Blogs/delete",
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