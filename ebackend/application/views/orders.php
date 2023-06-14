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
              <h4 style="color: green;">Orders</h4>
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
                      <th>Order.No</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Products</th>
                      <th>City</th>
                      <th>Address</th>
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
                      <td> ' . $value->name. ' </td>
                      <td> ' . $value->email. ' </td>
                      <td> ' . $value->phone. ' </td>
                      <td> ' . $value->productid. ' </td>
                      <td> ' . $value->city. ' </td>
                      <td> ' . $value->address. ' </td>
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

  <?php
include('footer.php');
?>
