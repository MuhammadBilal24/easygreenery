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
              <h4 style="color: green;">PLANTS TYPE</h4>
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
                      <th>Sr</th>
                      <th>Type</th>
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
                        <td> ' . $value->type . ' </td>
                        <td>
                          <button type="button" id="editbtn" data-id="' . $value->id . '" class="btn btn-info" >  
                            <i class="fa fa-edit"> Edit</i> 
                          </button>
                          <button type="button" class="btn btn-danger" id="deletebtn" data-id="' . $value->id . '"> 
                            <i class="fa fa-trash"> Delete</i> 
                          </button>
                        </td>
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
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="lblmodal" style="color: green;">Add New Plant</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="" class="form-group" id="insertform">
            <!-- Hidden Id For Edit -->
            <input type="text" id="id" name="id" hidden>
            <!-- Hidden Id For Edit -->

            <!-- Type -->
            <label for="name">Type</label>
            <input type="text" id="type" name="type" class="form-control" placeholder="Enter Product Type">
            <!-- Type -->

            <div class="modal-footer">
              <button type="submit" id="btnsave" class="btn btn-info btn-block"><i class="fa fa-save"> Save</i></button>
              <button type="button" id="btnupdate" class="btn btn-success btn-block"><i class="fa fa-edit"> Update</i></button>
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
    $("#addbtn").click(function() {
      $("#exampleModal").modal('show');
      $("#lblmodal").text("Add New Plant Type");
      $("#btnsave").show();
      $("#btnupdate").hide();
      $("#type").val("");
    });
    //-- Add new Button Function --//

    // Insert Add New User 
    $('#insertform').submit(function() {
      var form = $('#insertform').serialize();
      var type = $('#type').val();
      event.preventDefault();
      if (type == "") {
        swal({

          icon: "error",
          title: "Enter Plant Type",
          timer: 1500,
        })
      } else {

        $.ajax({
          type: 'post',
          url: '<?= base_url() ?>PlantType/insert',
          data: form,
          success: function(data) {
            if (data == "Correct") {
              swal({
                icon: "success",
                title: "Data Saved",
                text: "Successfully",
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

    // Edit Function
    $(document).on('click', '#editbtn', function() {
      var id = $(this).data('id');
      $("#exampleModal").modal('show');
      $("#btnsave").hide();
      $("#btnupdate").show();
      $("#lblmodal").text("Edit Plant Type");
      $("#type").val("");
      $.ajax({
        type: 'post',
        url: '<?= base_url() ?>PlantType/edit',
        data: {
          id: id
        },
        dataType: 'json',
        before: function() {

        },
        success: function(result) {
          $("#id").val(result.id);
          $("#type").val(result.type);

        }
      })
    });

    // Edit Funtion End //

    // -- Update Function --//
    $("#btnupdate").click(function() {
      var form = $('#insertform').serialize();
      var type = $('#type').val();
      event.preventDefault();
      if (type == "") {
        swal({

          icon: "error",
          title: "Enter Plant Type",
          timer: 1500,
        })
      } else {

        $.ajax({
          type: 'post',
          url: '<?= base_url() ?>PlantType/update',
          data: form,
          success: function(data) {
            if (data == "Correct") {
              swal({
                icon: "success",
                title: "Data Updated",
                text: "Successfully",
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
    });
    // -- Update Function --//
    // Delete User Function
    $(document).on('click', '#deletebtn', function() {
      var id = $(this).data('id');
      //alert(id);
      $.ajax({
        type: 'post',
        url: "<?= base_url() ?>PlantType/delete",
        data: {
          id: id
        },
        success: function(data) {
          if (data == 'Correct') {
            swal({
                title: 'Are you sure?',
                text: 'This User and it`s details will be permanantly deleted!',
                icon: 'warning',
                buttons: ["Cancel", "Yes!"],
              })
              .then(function(value) {
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

    })
    //  End Delete Function
  </script>