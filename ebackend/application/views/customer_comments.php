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
              <h4 style="color: green;">Customer Comments</h4>
              <!-- <div class="ml-auto">
                <!-- Button trigger modal -->
                <!-- <button type="button" class="btn btn-primary" id="addbtn">
                  +Add New
                </button>
              </div> -->
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                  <thead>
                    <tr class="text-center">
                      <th>Serial.No</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Comments</th>
                      <!-- <th>Edit</th> -->
                      <th></th>
                      <th>Given Reply</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $serial=1;
                    foreach ($tabledata as $value)
                    echo'
                      <tr class="text-center">
                      <td> ' . $serial++ . ' </td>
                      <td> ' . $value->name. ' </td>
                      <td> ' . $value->email. ' </td>
                      <td> ' . $value->comment. ' </td>
                      <td><button type="button" id="editbtn" data-id="' . $value->id . '" class="btn btn-info" >  <i class="fa fa-edit"> Reply</i> </button></div></td>
                      <td> ' . $value->reply. ' </td>
                      <td><button type="button" class="btn btn-danger" id="deletebtn" data-id="' . $value->id . '"> <i class="fa fa-trash"></i> </button></td>
                      </tr>
                      ';
                      ?>
                </table>
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
          <h5 class="modal-title" id="lblmodal" style="color: green;">Reply Please</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="" class="form-group" id="insertform">
            <!-- Hidden Id For Edit -->
            <input type="text" id="id" name="id" hidden>
            <!-- Hidden Id For Edit -->

            <!-- City Name -->
               <label for="reply">Reply</label>
               <input type="text" id="reply" name="reply" class="form-control" placeholder="Write a Reply">
            <!-- City Name -->
            

            <div class="modal-footer">
              <button type="submit" id="btnsave" class="btn btn-info btn-block" ><i class="fa fa-save"> Save</i></button>
              <button type="button" id="btnupdate"  class="btn btn-success btn-block">Reply</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php
include('footer.php');
?>
<script>

   //-- Add new Button Function --//
   $("#addbtn").click(function(){
      $("#exampleModal").modal('show');
      $("#lblmodal").text("Reply Please");
      $("#btnsave").show();
      $("#btnupdate").hide();
      $("#reply").val("");
    });
    //-- Add new Button Function --//
    
    // Edit Function
    $(document).on('click','#editbtn',function(){
      var id=$(this).data('id');
      $("#exampleModal").modal('show');
      $("#btnsave").hide();
      $("#btnupdate").show();
      $("#lblmodal").text("Reply Please");
      $("#reply").val("");
      $.ajax({
        type:'post',
        url:'<?= base_url()?>Customer_comments/edit',
        data:{id:id},
        dataType:'json',
        before:function(){
        },
        success:function(result){
          $("#id").val(result.id);
          $("#reply").val(result.reply);
          
        }
      })
    });

    // Edit Funtion End //

    // -- Update Function --//
    $("#btnupdate").click(function(){
      var form = $('#insertform').serialize();
      var reply = $('#reply').val();
      event.preventDefault();
      if (reply == "") {
        swal({

          icon: "error",
          title: "Write a Reply Please",
          timer: 1500,
        })
      }
      else {

        $.ajax({
          type: 'post',
          url: '<?= base_url()?>Customer_comments/update',
          data: form,
          success: function (data) {
            if (data == "Correct") {
              swal({
                icon: "success",
                title: "Reply Sent",
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
 // Delete User Function
    $(document).on('click', '#deletebtn', function () {
      var id = $(this).data('id');
      //alert(id);
      $.ajax({
        type: 'post',
        url: "<?= base_url()?>Customer_comments/delete",
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
                    title: "Comment Deleted",
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