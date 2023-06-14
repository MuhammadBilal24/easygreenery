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
              <h4 style="color: green;">Online Customer Contacts</h4>
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
                      <th>Message</th>
                      <!-- <th>Edit</th> -->
                      <!-- <th>Actions</th> -->
                    </tr>
                  </thead>
                  <tbody>

                    <?php
                    $serial=1;
                    foreach ($tabledata as $value)
                    echo'
                      <tr class="text-center">
                      <td> ' . $serial++ . ' </td>
                      <td> ' . $value->customer_name. ' </td>
                      <td> ' . $value->customer_email. ' </td>
                      <td> ' . $value->customer_message. ' </td>
                      </tr>
                      ';
                                ?>
                </table>
                <!-- <td><button type="button" id="editbtn" data-id="' . $value->id . '" class="btn btn-success" >  <i class="fa fa-edit"> Edit</i> </button>
                         <button type="button" class="btn btn-danger" id="deletebtn" data-id="' . $value->id . '"> <i class="fa fa-trash"> Delete</i> </button></td> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php
include('footer.php');
?>