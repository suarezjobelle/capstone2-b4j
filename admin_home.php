<?php
include 'includes/header.php'; 
include 'core/init.php';
$uid = $_SESSION['id'];
$connect = new MainFunction();
?>
<body class="admin-login">
  <div class="wrapper">
<nav id="sidebar">
    <div class="sidebar-header">
    <img src="./assets/image/icon.jpg" width="150px" height="70px" style="border-radius: 40%;">
        </div>
        <hr>
        <div class="sidebar-header">
                <h5 class="p-0">Welcome,<?php $connect->get_fullname($uid);?></h5>
            </div>
<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
  <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-main" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
  <a class="nav-link " id="v-pills-reserve-tab" data-toggle="pill" href="#v-pills-reserve" role="tab" aria-controls="v-pills-home" aria-selected="true">Reservation List</a>
  <a class="nav-link" id="v-pills-product-tab" data-toggle="pill" href="#v-pills-product" role="tab" aria-controls="v-pills-profile" aria-selected="false">Product List</a>
  <a class="nav-link" id="v-pills-menu-tab" data-toggle="pill" href="#v-pills-menu" role="tab" aria-controls="v-pills-messages" aria-selected="false">Menu List</a>
  <a class="nav-link" id="v-pills-order-tab" data-toggle="pill" href="#v-pills-order" role="tab" aria-controls="v-pills-settings" aria-selected="false">Order List</a>
  <a class="nav-link" id="v-pills-cancel-tab" data-toggle="pill" href="#v-pills-cancel" role="tab" aria-controls="v-pills-settings" aria-selected="false">Cancelled List</a>
</div>
        </nav>
<!-- Page Content Holder -->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                </div>
            </nav>
<!-- content here -->
<div class="tab-content mt-5" id="v-pills-tabContent">
<!-- 1st Content -->
<div class="tab-pane fade active" id="v-pills-main" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
<!-- /1st Content -->
<!-- Reservation List Content -->
  <div class="tab-pane fade show " id="v-pills-reserve" role="tabpanel" aria-labelledby="v-pills-home-tab"><div class="container">
  <h2>Reservation List</h2>
  <input class="form-control col-sm-5" id="myInput" type="text" placeholder="Search..">
  <br>
  <table class="table table-bordered table-striped  ">
    <thead>
      <tr>
        <th>Reference Number</th>
        <th>Customer Name</th>
        <th>Phone</th>
        <th>How Many people</th>
        <th>Date</th>
        <th>Time</th>
        <th>Note</th>
      </tr>
    </thead>
    <?php

    $myrow = $connect->fetch_data("reserve");
    foreach($myrow as $row){    
 
?>
    <tbody id="myTable">
      <tr>
        <td><?php echo $row['reservation_number']?></td>
        <td><?php echo $row['customer_name']?></td>
        <td><?php echo $row['phone']?></td>
        <td><?php echo $row['quantity']?></td>
        <td><?php echo $row['dated']?> </td>
        <td><?php echo $row['timed']?></td>
        <td><?php echo $row['message']?></td>

      </tr>
    <?php }?>
    </tbody>
  </table> 
</div>
  </div>
<!-- /Reservation List Content -->
<!-- Product Content -->
  <div class="tab-pane fade" id="v-pills-product" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
<!-- /Product Content -->
<!-- Menu List Content -->
  <div class="tab-pane fade" id="v-pills-menu" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
<!-- / Menu List Content -->
<!-- Order list Content -->
  <div class="tab-pane fade" id="v-pills-order" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
<!-- /Order List Content -->
<!-- Cancelled list Content -->
  <div class="tab-pane fade" id="v-pills-cancel" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
<!-- /Cancelled List Content -->


</div>
        </div>
    </div>
</body>