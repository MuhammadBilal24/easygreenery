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
              <h4 style="color: green;">CUSTOMIZE</h4>
              <div class="ml-auto">
                <!-- Button trigger modal -->
                <!-- <button type="button" class="btn btn-primary" id="addbtn">
                  +Add New
                </button> -->
                <!-- Edit Button -->
                <?php      
                foreach($tabledata as $value )
                echo'
                <button type="button"  id="editbtn" data-toggle="modal" data-target=".bd-example-modal-lg" data-id=' . $value->id . ' class="btn btn-success"><i class="fa fa-edit"> Edit</i></button>
                ';
                ?>
                <!-- Edit Button End -->
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                  <thead>
                    <tr class="text-center">
                      <th>Website Name</th>
                      <th>Address</th>
                      <th>Email</th>
                      <th>Link</th>
                      <th>Number</th>
                      <th>About</th>
                      <!-- <th>Edit</th> -->
                      <!-- <th>Delete</th> -->
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach ($tabledata as $value)
                    echo'
                      <tr class="text-center">
                      <td> ' . $value->web_name. ' </td>
                      <td> ' . $value->address . ' </td>
                      <td> ' . $value->email . ' </td>
                      <td> ' . $value->link . ' </td>
                      <td> ' . $value->number . ' </td>
                      <td> ' . $value->about . ' </td>
                      </tr>
                      ';
                      ?>
                </table>
                <!-- <td><button type="button"  id="editbtn" data-toggle="modal" data-target=".bd-example-modal-lg" data-id=' . $value->id . ' class="btn btn-success"><i class="fa fa-edit"> Edit</i></button> -->
                <!-- <td><button type="button"  id="deletebtn" data-id=' . $value->id . '   class="btn btn-danger"><i class="fa fa-trash"> Delete</i></button></td>-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Section Customize 2 -->
  <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4 style="color: green;">CUSTOMIZE WEBSITE DETAILS</h4>
              <div class="ml-auto">
                <!-- Button trigger modal -->
                <!-- <button type="button" class="btn btn-primary" id="addbtn">
                  +Add New
                </button> -->
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                  <thead>
                    <tr class="text-center">
                      <th>PH11</th>
                      <th>PH12</th>
                      <th>PH13</th>
                      <th>PH21</th>
                      <th>PH22</th>
                      <th>PH23</th>
                      <th>PH31</th>
                      <th>PH32</th>
                      <th>PH33</th>
                      <!-- <th>Address</th>
                      <th>Email</th>
                      <th>Link</th>
                      <th>Number</th> -->
                      <!-- <th>Edit</th> -->
                      <!-- <th>Delete</th> -->
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach ($tabledata as $value)
                    echo'
                      <tr class="text-center">
                      <td> ' . $value->ph11. ' </td>
                      <td> ' . $value->ph12. ' </td>
                      <td> ' . $value->ph13. ' </td>
                      <td> ' . $value->ph21. ' </td>
                      <td> ' . $value->ph22. ' </td>
                      <td> ' . $value->ph23. ' </td>
                      <td> ' . $value->ph31. ' </td>
                      <td> ' . $value->ph32. ' </td>
                      <td> ' . $value->ph33. ' </td>
                      </tr>
                      ';
                      ?>
                  </tbody>
                </table>
                <!-- <td><button type="button"  id="deletebtn" data-id=' . $value->id . '   class="btn btn-danger"><i class="fa fa-trash"> Delete</i></button></td>-->
                <!-- <td><button type="button"  id="editbtn2" data-id=' . $value->id . ' class="btn btn-success"><i class="fa fa-edit"> Edit</i></button> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Modal -->
  <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" 
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="lblmodal" style="color: green;">Edit Customize</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="" class="form-group" id="insertform">
            <!-- Hidden Id For Edit -->
            <input type="text" id="id" name="id" hidden>
            <!-- Hidden Id For Edit -->

            
               <label for="web_name">Website Name</label>
               <input type="text" id="web_name" name="web_name" class="form-control" placeholder="Enter a Website Name">
            

             
             <label for="address">Address</label>
               <input type="text" id="address" name="address" class="form-control" placeholder="Enter a Address">
            

             
             <label for="email">Email</label>
               <input type="text" id="email" name="email" class="form-control" placeholder="Enter Email">
            

             
             <label for="link">Link</label>
               <input type="text" id="link" name="link" class="form-control" placeholder="Enter Link">
            

             
             <label for="number">Number</label>
               <input type="text" id="number" name="number" class="form-control" placeholder="Enter Number">
            
          
            
            <label for="about">About</label>
               <input type="text" id="about" name="about" class="form-control" placeholder="Write About Website ">
            
            <br>
            <h5 class="modal-title" id="lblmodal" style="color: green;">Edit Website Details</h5>
          
            <!-- ph1 -->
            <label for="ph11">Picture Detail</label>
              <input type="text" id="ph11" name="ph11" class="form-control" placeholder="Enter Picture Detail 11">
            
            
            <label for="ph12">Picture Detail</label>
              <input type="text" id="ph12" name="ph12" class="form-control" placeholder="Enter Picture Detail 12">
            
            
            <label for="ph13">Picture Detail</label>
              <input type="text" id="ph13" name="ph13" class="form-control" placeholder="Enter Picture Detail 13">
            
            
            <!-- ph2 -->
            <label for="ph21">Picture Detail</label>
              <input type="text" id="ph21" name="ph21" class="form-control" placeholder="Enter Picture Detail 21">
            
            
            <label for="ph22">Picture Detail</label>
              <input type="text" id="ph22" name="ph22" class="form-control" placeholder="Enter Picture Detail 22">
            
            
            <label for="ph23">Picture Detail</label>
              <input type="text" id="ph23" name="ph23" class="form-control" placeholder="Enter Picture Detail 23">

              <!-- ph3 -->
              <label for="ph31">Picture Detail</label>
              <input type="text" id="ph31" name="ph31" class="form-control" placeholder="Enter Picture Detail 31">
            
            
            <label for="ph32">Picture Detail</label>
              <input type="text" id="ph32" name="ph32" class="form-control" placeholder="Enter Picture Detail 32">
            
            
            <label for="ph33">Picture Detail</label>
              <input type="text" id="ph33" name="ph33" class="form-control" placeholder="Enter Picture Detail 33">

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
    // $("#addbtn").click(function(){
    //   $("#exampleModal").modal('show');
    //   $("#lblmodal").text("Add New City Name");
    //   $("#btnsave").show();
    //   $("#btnupdate").hide();
    //   $("#cityname").val("");
    // });
    // //-- Add new Button Function --//

    // // Insert Add New User 
    // $('#insertform').submit(function () {
    //   var form = $('#insertform').serialize();
    //   var cityname = $('#cityname').val();
    //   event.preventDefault();
    //   if (cityname == "") {
    //     swal({

    //       icon: "error",
    //       title: "Enter City Name",
    //       timer: 1500,
    //     })
    //   }
    //   else {

    //     $.ajax({
    //       type: 'post',
    //       url: '<?= base_url()?>City/insert',
    //       data: form,
    //       success: function (data) {
    //         if (data == "Correct") {
    //           swal({
    //             icon: "success",
    //             title: "Data Saved",
    //             text: "Successfully",
    //             timer: 1500,
    //           }).then(() => {
    //             location.reload();
    //           })
    //         }
    //         else {
    //           swal({
    //             icon: "Error",
    //             title: "Try Again",
    //             text: "Any Issue Occured",
    //           }).then(() => {
    //             location.reload();
    //           })
    //         }
    //       }
    //     })
    //   }
    // })
    // End Insert Function
    
    // Edit Function
    $(document).on('click','#editbtn',function(){
      var id=$(this).data('id');
      $("#exampleModal").modal('show');
      $("#btnsave").hide();
      $("#btnupdate").show();
      $("#lblmodal").text("Edit Customize");
      $("#web_name").val("");
      $("#address").val("");
      $("#email").val("");
      $("#link").val("");
      $("#number").val("");
      $("#about").val("");
      $("#ph11").val("");
      $("#ph12").val("");
      $("#ph13").val("");
      $("#ph21").val("");
      $("#ph22").val("");
      $("#ph23").val("");
      $("#ph31").val("");
      $("#ph32").val("");
      $("#ph33").val("");
      $.ajax({
        type:'post',
        url:'<?= base_url()?>Customize/edit',
        data:{id:id},
        dataType:'json',
        before:function(){
          
        },
        success:function(result){
          $("#id").val(result.id);
          $("#web_name").val(result.web_name);
          $("#address").val(result.address);
          $("#email").val(result.email);
          $("#link").val(result.link);
          $("#number").val(result.number);
          $("#about").val(result.about);
          $("#ph11").val(result.ph11);
          $("#ph12").val(result.ph12);
          $("#ph13").val(result.ph13);
          $("#ph21").val(result.ph21);
          $("#ph22").val(result.ph22);
          $("#ph23").val(result.ph23);
          $("#ph31").val(result.ph31);
          $("#ph32").val(result.ph32);
          $("#ph33").val(result.ph33);
        }
      })
    });

    // Edit Funtion End //

    // -- Update Function --//
    $("#btnupdate").click(function(){
      var form = $('#insertform').serialize();
      var web_name = $('#web_name').val();
      var address = $('#address').val();
      var email = $('#email').val();
      var link = $('#link').val();
      var number = $('#number').val();
      var about = $('#about').val();
      var ph11 = $('#ph11').val();
      var ph12 = $('#ph12').val();
      var ph13 = $('#ph13').val();
      var ph21 = $('#ph21').val();
      var ph22 = $('#ph22').val();
      var ph23 = $('#ph23').val();
      var ph31 = $('#ph31').val();
      var ph32 = $('#ph32').val();
      var ph33 = $('#ph33').val();
      event.preventDefault();
      if (web_name == "") {
        swal({
          icon: "error",
          title: "Enter Website Name",
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
      else if(email=="")
      {
        swal({
          icon: "error",
          title: "Enter Email",
          timer: 1500,
        })
      }
      else if(link=="")
      {
        swal({
          icon: "error",
          title: "Enter Website Link",
          timer: 1500,
        })
      }
      else if(number=="")
      {
        swal({
          icon: "error",
          title: "Enter Number",
          timer: 1500,
        })
      }
      else if(about=="")
      {
        swal({
          icon: "error",
          title: "Write Somthing About Website",
          timer: 1500,
        })
      }
      else if(ph11=="")
      {
        swal({
          icon: "error",
          title: "Enter Picture Detail 11",
          timer: 1500,
        })
      }
      else if(ph12=="")
      {
        swal({
          icon: "error",
          title: "Enter Picture Detail 12",
          timer: 1500,
        })
      }
      else if(ph13=="")
      {
        swal({
          icon: "error",
          title: "Enter Picture Detail 13",
          timer: 1500,
        })
      }
      else if(ph21=="")
      {
        swal({
          icon: "error",
          title: "Enter Picture Detail 21",
          timer: 1500,
        })
      }
      else if(ph22=="")
      {
        swal({
          icon: "error",
          title: "Enter Picture Detail 22",
          timer: 1500,
        })
      }
      else if(ph23=="")
      {
        swal({
          icon: "error",
          title: "Enter Picture Detail 23",
          timer: 1500,
        })
      }
      else if(ph31=="")
      {
        swal({
          icon: "error",
          title: "Enter Picture Detail 31",
          timer: 1500,
        })
      }
      else if(ph32=="")
      {
        swal({
          icon: "error",
          title: "Enter Picture Detail 32",
          timer: 1500,
        })
      }
      else if(ph33=="")
      {
        swal({
          icon: "error",
          title: "Enter Picture Detail 33",
          timer: 1500,
        })
      }
      else {

        $.ajax({
          type: 'post',
          url: '<?= base_url()?>Customize/update',
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
    // $(document).on('click', '#deletebtn', function () {
    //   var id = $(this).data('id');
    //   //alert(id);
    //   $.ajax({
    //     type: 'post',
    //     url: "<?= base_url()?>City/delete",
    //     data: { id: id },
    //     success: function (data) {
    //       if (data == 'Correct') {
    //         swal({
    //           title: 'Are you sure?',
    //           text: 'This User and it`s details will be permanantly deleted!',
    //           icon: 'warning',
    //           buttons: ["Cancel", "Yes!"],
    //         })
    //           .then(function (value) {
    //             if (value) {
    //               swal({
    //                 icon: "success",
    //                 title: "Data Deleted",
    //                 text: "Successfully",
    //                 timer: 1500,
    //               }).then(() => {
    //                 location.reload();
    //               })
    //             }
    //           })
    //       }
    //       else {
    //         swal({
    //           icon: "Error",
    //           title: "Try Again",
    //           text: "Any Issue Occured",
    //         }).then(() => {
    //             location.reload();
    //         })

    //       }
    //     }

    //   })

    // })
    //  End Delete Function
    
  </script>