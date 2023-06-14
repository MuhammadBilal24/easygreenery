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
              <h4 style="color: green;">PLANTS</h4>
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
                      <th>Product/Name</th>
                      <th>Type</th>
                      <th>Nursery</th>
                      <th>Details</th>
                      <th>Price</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sr = 0;
                    foreach ($datatable as $v)
                    {
                      $sr++;
                    echo'
                      <tr class="text-center">
                        <td>'.$sr.'</td>
                        <td>
                          <h4>' . $v->plant . '</h4>
                          <img src="' . base_url() . 'assets/product/' . $v->img . '"  style="width:50px;height:50px; ">
                        </td>
                        <td> ' . $v->typename. ' </td>
                        <td> ' . $v->nurseryname . ' </td>
                        <td> ' . $v->description . ' </td>
                        <td> ' . $v->price . ' </td>
                        <td>
                          <button type="button" class="btn btn-danger" id="deletebtn" data-id="' . $v->id . '"> 
                            <i class="fa fa-trash"> Delete</i> 
                          </button>
                        </td>
                      </tr>                        
                      ';
                    }
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
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="lblmodal" style="color: green;">Add New Plant</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <form action="" class="form-group" id="insertform">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <div class="row">
                <!-- Hidden Id For Edit -->
                <input type="text" id="id" name="id" hidden>
                <!-- Hidden Id For Edit -->

                <!-- Plant Name -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <label for="plant_name">Plant Name</label>
                  <input type="text" id="plant_name" name="plant_name" class="form-control" placeholder="Enter a Plant Name">
                </div>
                <!-- Plant Name -->

                <!-- Product Type -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <label for="plant_type">Product Type</label>
                  <select type="text" id="plant_type" name="plant_type" class="form-control">
                    <option value="">Choose a Product Type</option>
                    <?php
                    foreach ($planttypedata as $planttype) {
                      echo '
                            <option value="' . $planttype->id . '">' . $planttype->type . '</option>
                            ';
                    };
                    ?>
                  </select>
                </div>
                <!-- Product Type -->

                <!-- Nursery Name -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <label for="nursery_name">Nursery Name</label>
                  <select type="text" id="nursery_name" name="nursery_name" class="form-control">
                    <option value="">Choose a Nursery Name</option>
                    <?php
                    foreach ($nursery_nametabledata as $nursery_namedata) {
                      echo '
                                <option value="' . $nursery_namedata->id . '">' . $nursery_namedata->nursery_name . ' | ' . $nursery_namedata->nursery_city . '</option>
                            ';
                    }
                    ?>
                  </select>
                </div>
                <!-- Nursery Name -->

                <!-- Picture  -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <label>Upload Photo:</label>
                  <input name="file" type="file" id="image_file" required class="form-control"><!-- Plant Type -->
                </div>
                <!-- Picture  -->

                <!-- Description -->
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <label for="description">Description</label>
                  <textarea class="form-control" rows="4" id="description" name="description" placeholder="Enter any description about this product"></textarea>
                </div>
                <!-- Description -->

                <!-- Price -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <label for="price">Price</label>
                  <input type="text" id="price" name="price" class="form-control" placeholder="Enter a Price">
                </div>
                <!-- Price -->

                <div class="modal-footer">
                  <button type="submit" id="btnsave" class="btn btn-info btn-block"><i class="fa fa-save">Save</i></button>
                  <button type="button" id="btnupdate" class="btn btn-success btn-block"><i class="fa fa-edit">Update</i></button>
                </div>
              </div>
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
      $("#lblmodal").text("Add New Plant");
      $("#btnsave").show();
      $("#btnupdate").hide();
      $("#type").val("");
    });
    //-- Add new Button Function --//

    // Insert Add New User 
    $('#insertform').submit(function() {
      var form = $('#insertform').serialize();
      var plant_name = $('#plant_name').val();
      var plant_type = $('#plant_type').val();
      var size = $('#size').val();
      var nursery_name = $('#nursery_name').val();
      var season = $('#season').val();
      var city = $('#city').val();
      var description = $('#description').val();
      var price = $('#price').val();
      var img = $('#img').val();

      event.preventDefault();
      if (plant_name == "") {
        swal({

          icon: "error",
          title: "Enter Plant Name",
          timer: 1500,
        })
      } else if (plant_type == "") {
        swal({

          icon: "error",
          title: "Enter Plant Type",
          timer: 1500,
        })
      } else if (size == "") {
        swal({

          icon: "error",
          title: "Size of Plant ?",
          timer: 1500,
        })
      } else if (nursery_name == "") {
        swal({

          icon: "error",
          title: "Stock nursery_name..?",
          timer: 1500,
        })
      } else if (season == "") {
        swal({

          icon: "error",
          title: "Choose a Season",
          timer: 1500,
        })
      } else if (city == "") {
        swal({

          icon: "error",
          title: "Select Any City",
          timer: 1500,
        })
      } else if (description == "") {
        swal({

          icon: "error",
          title: "Enter Description",
          timer: 1500,
        })
      } else if (price == "") {
        swal({

          icon: "error",
          title: "Enter Price",
          timer: 1500,
        })
      } else if (img == "") {
        swal({

          icon: "error",
          title: "Insert an Plant Image",
          timer: 1500,
        })
      } else {

        $.ajax({
          type: 'post',
          url: '<?= base_url() ?>Plants/insert',
          data: new FormData(this),
          processData: false,
          contentType: false,
          cache: false,
          async: false,
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


    // Delete User Function
    $(document).on('click', '#deletebtn', function() {
      var id = $(this).data('id');
      //alert(id);
      $.ajax({
        type: 'post',
        url: "<?= base_url() ?>Plants/delete",
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