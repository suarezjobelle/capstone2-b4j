<?php
include 'core/init.php';
$uid = $_SESSION['id'];
include_once 'core/ajax/modal.php'; 

?>
<body class="admin">  
  <div class="wrapper">
<nav id="sidebar">
    <div class="sidebar-header">
    <img src="./assets/image/icon.jpg" width="150px" height="70px" style="border-radius: 40%;">
        </div>
        <hr>
        <div class="sidebar-header">
                <h5 class="p-0">Welcome ,<?php $connect->get_fullname($uid);?></h5>
            </div>
<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
<!--   <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-main" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a> -->
  <a class="nav-link active" id="v-pills-product-tab" data-toggle="pill" href="#v-pills-product" role="tab" aria-controls="v-pills-profile" aria-selected="false">Product List</a>
  <a class="nav-link" id="v-pills-reserve-tab" data-toggle="pill" href="#v-pills-reserve" role="tab" aria-controls="v-pills-home" aria-selected="true">Reservation List</a>
  <a class="nav-link" id="v-pills-menu-tab" data-toggle="pill" href="#v-pills-menu" role="tab" aria-controls="v-pills-messages" aria-selected="false">Menu List</a>
  <a class="nav-link" id="v-pills-order-tab" data-toggle="pill" href="#v-pills-order" role="tab" aria-controls="v-pills-settings" aria-selected="false">Ordered Online List</a>
  <a class="nav-link" id="v-pills-cancel-tab" data-toggle="pill" href="#v-pills-cancel" role="tab" aria-controls="v-pills-settings" aria-selected="false">Cancelled List</a>
  <a class="nav-link" id="v-pills-reg-tab" data-toggle="pill" href="#v-pills-reg" role="tab" aria-controls="v-pills-settings" aria-selected="false">Registered Customer List</a>
  <a class="nav-link" href="./includes/logout.php">Logout</a>
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
<!-- div class="tab-pane fade " id="v-pills-main" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div> -->
<!-- /1st Content -->
<!-- Reservation List Content -->
  <div class="tab-pane fade " id="v-pills-reserve" role="tabpanel" aria-labelledby="v-pills-home-tab">
<div class="container">
  <h2>Reservation List</h2>
  <input class="form-control col-sm-5" id="myInput" type="text" placeholder="Search Name..">
  <br>
<div class="table-responsive table-wrapper-scroll-y card">
  <form method="POST">
  <table class="table table-bordered table-striped ">
    <thead>
      <tr>
        <th>Reference Number</th>
        <th>Customer Name</th>
        <th>Phone</th>
        <th>How Many people</th>
        <th>Date</th>
        <th>Time</th>
        <th>Note</th>
        <th>Action</th>
      </tr>
    </thead>
    <?php

    $myrow = $connect->fetch_data("table_reservation");
    foreach($myrow as $row){    
  if($row['cancel_status']==1 AND $row['delete_status']==1 ){
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
        <td><button type="submit" value="<?php echo $row['id']; ?>" name="del_res" target="_self"><i class="fas fa-trash btn-light"></i></button></td>
      </tr>
    <?php 
}
  }?>
    </tbody>
  </table> 
  </form>
    </div>
  </div>
  </div>
  <?php 
if(isset($_POST['del_res']))
{
  $connect = mysqli_connect("localhost" , "admin" , "root" ,"capstone2");
    $id=$_POST['del_res'];
    $sql = "UPDATE table_reservation SET delete_status='0' WHERE id= '$id'";
        if (mysqli_query($connect,$sql)) {
            # code...
           return true;
        }
}
?>
<!-- /Reservation List Content -->
<!-- Product Content -->
  <div class="tab-pane fade show active" id="v-pills-product" role="tabpanel" aria-labelledby="v-pills-profile-tab">
    <div class="container">
  <h2>Fresh Product List</h2>
  <input class="form-control col-sm-5" id="myProduct" type="text" placeholder="Search Product Name..">
  <br>
  <div class="table-responsive table-wrapper-scroll-y card"><button type="button" id="add_product" data-toggle="modal" data-target="#add_product" class="btn btn-danger col-sm-1 mb-1" style="float: right"><i class="fas fa-plus"></i></button>
    <form method="POST">
  <table class="table table-bordered table-striped"> 
    <thead>
      <tr>
        <th>Product Name</th>
        <th>Product Number</th>
        <th>Product Quantity</th>
        <th>Action</th>
      </tr>
    </thead>

    <?php
    $myrow = $connect->fetch_data("product_list");
    foreach($myrow as $rowed){
    if ($rowed['delete_status']==1) {
    ?>
    <tbody id="myTable">
      <tr>
        <td><?php echo $rowed['product_name']?></td>
        <td><?php echo $rowed['product_number']?></td>
        <td><?php echo $rowed['product_quantity']?></td>
         <td><button type="submit" name="edit" value="<?php echo $rowed['id']; ?>"><i class="far fa-edit"></i></button>
          <button type="submit" value="<?php echo $rowed['id']; ?>" name="del1" target="_self"><i class="fas fa-trash btn-light"></i></button></td>
      </tr>
    <?php }?>
     <?php }?>
    </tbody>
  </table> 
  </form>
  </div>
</div>
</div>
<?php 
 if (isset($_GET["edit"])) {
  # code...
  $id = $_GET["id"];
  $where = array("id"=>$id,);
  $row = $connect->select_data("product_list",$where);

 ?>
<div class=" container card mt-5 col-sm-5">
  <form action="" method="POST" id="edit_products">
    <div class="form-group">
      <label for="inputEmail4">Product Name</label>
      <input type="hidden" name="id" value="<?php echo $row['id'];?>" readonly>
      <input type="text" class="form-control" id="edit_product_name" name="edit_product_name" value="<?php echo $row['product_name']?>">
    </div>
    <div class="form-group ">
      <label for="inputPassword4">Product Number</label>
      <input type="text" class="form-control" name="edit_product_num" id="edit_product_num" value="<?php echo $row['product_number']?>">
    </div>
    <div class="form-group ">
      <label for="inputPassword4">Product Quantity</label>
      <input type="text" class="form-control" name="edit_product_q" id="edit_product_q" value="<?php echo $row['product_quantity']?>">
    </div>
            <input type="submit" name="edit" id="edit" value="Edit" class="btn btn-success" />

  </form>
      </div>
<?php } ?>
<?php 
if(isset($_POST['del1']))
{
  $connect = mysqli_connect("localhost" , "admin" , "root" ,"capstone2");
    $id=$_POST['del1'];
    $sql = "UPDATE product_list SET delete_status='0' WHERE id= '$id'";
        if (mysqli_query($connect,$sql)) {
            # code...
           return true;
        }
}
?>
<!-- /Product Content -->

  
<!-- Menu List Content -->
  <div class="tab-pane fade" id="v-pills-menu" role="tabpanel" aria-labelledby="v-pills-messages-tab">
<div class="container">
  <h2>Menu List</h2>
  <input class="form-control col-sm-5" id="myMenu" type="text" placeholder="Search Menu Name..">
  <br>
<form method="POST">
<div class="table-responsive table-wrapper-scroll-y card">
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Menu Name</th>
        <th>Price</th>
        <th>Action</th>
      </tr>
    </thead>
    <?php

    $myrow = $connect->fetch_data("Menu_list");
    foreach($myrow as $rows){    
 if ($rows['delete_status']==1) {
   # code...
 
?>
    <tbody id="myTable">
      <tr>
        <td><?php echo $rows['menu_name']?></td>
        <td><?php echo $rows['menu_price']?></td>
          <td><a href="admin_home.php?get=<?php echo $_SESSION['id']; ?>&id=<?php echo $rows['id']; ?>" ><i class="far fa-edit"></i></a>
            <button type="submit" value="<?php echo $rows['id']; ?>" name="del" target="_self"><i class="fas fa-trash btn-light"></i></button>
          </td>
      </tr>
      <?php }?>
    <?php }?>
    </tbody>
    </form>
  </table> 
  </div>
</div>
<?php

if(isset($_POST['del']))
{
  $connect = mysqli_connect("localhost" , "admin" , "root" ,"capstone2");
    $id=$_POST['del'];
    $sql = "UPDATE Menu_list SET delete_status='0' WHERE id= '$id'";
        if (mysqli_query($connect,$sql)) {
            # code...
           return true;
        }
}
?>

<?php 
 if (isset($_GET["get"])) {
  # code...
  $id = $_GET["id"];
  $where = array("id"=>$id,);
  $row = $connect->select_data("Menu_list",$where);

 ?>
<div class=" container card mt-5 col-sm-5">
  <form action="" method="POST" id="edit_products">
    <div class="form-group">
      <label for="inputEmail4">Product Name</label>
      <input type="hidden" name="id" value="<?php echo $row['id'];?>" readonly>
      <input type="text" class="form-control" id="edit_name" name="edit_name" value="<?php echo $row['menu_name']?>">
    </div>
    <div class="form-group ">
      <label for="inputPassword4">Product Number</label>
      <input type="text" class="form-control" name="edit_price" id="edit_price" value="<?php echo $row['menu_price']?>">
    </div>
            <input type="submit" name="edit_menu" id="edit_menu" value="Edit" class="btn btn-success" />
  </form>
      </div>
<?php } ?>

  </div>
<!-- / Menu List Content -->

<!-- Order list Content -->
  <div class="tab-pane fade" id="v-pills-order" role="tabpanel" aria-labelledby="v-pills-settings-tab">
     <h2>Ordered Online List</h2>
<div class="card">
  <form method="POST">
  <table class="table table-bordered table-striped ">
    <thead>
      <tr>
        <th>Name</th>
        <th>Order</th>
        <th>Price</th>
        <th>Date</th>
        <th>Action</th>
      </tr>s
    </thead>
    <?php
    $sum=0;
    $myrow = $connect->fetch_selected("order_list");
    foreach($myrow as $row_or){  
if ($row_or['delete_status']==1) {
?>
    <tbody id="myTable">
      <tr>
        <td><?php echo $row_or['fullname']?></td>
        <td><?php echo $row_or['order_name']?></td>
        <td><?php echo $row_or['order_price']?></td>
        <td><?php echo $row_or['dates']?></td>
        <td><button type="submit" value="<?php echo $row_or['id']; ?>" name="del_order" target="_self"><i class="fas fa-trash btn-light"></i></button></td>
      </tr>
          <?php $sum+=$row_or['order_price']; ?>
    <?php  }?>
       <?php  }?>
    </tbody>
  </table>  
  </form>
      <h4>TOTAL: <?php echo $sum; ?> </h4>
    </div>
  </div>
  <?php 
if(isset($_POST['del_order']))
{
  $connect = mysqli_connect("localhost" , "admin" , "root" ,"capstone2");
    $id=$_POST['del_order'];
    $sql0 = "UPDATE order_list SET delete_status='0' WHERE id= '$id'";
        if (mysqli_query($connect,$sql0)) {
            # code...
           return true;
        }
}
?>
<!-- /Order List Content -->

<!-- Cancelled list Content -->
  <div class="tab-pane fade" id="v-pills-cancel" role="tabpanel" aria-labelledby="v-pills-settings-tab">
  <h2>Cancelled List</h2>
<div class="card">
  <table class="table table-bordered table-striped ">
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

    $myrow = $connect->fetch_data("table_reservation");
    foreach($myrow as $row){    
 if($row['cancel_status']==0){
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
    <?php
}
     }?>
    </tbody>
  </table> 
    </div>
  </div>
<!-- /Cancelled List Content -->
<!-- Registered Customer list Content -->
  <div class="tab-pane fade" id="v-pills-reg" role="tabpanel" aria-labelledby="v-pills-settings-tab">
<h2>Customer List</h2>
<div class="card">
  <table class="table table-bordered table-striped ">
    <thead>
      <tr>
        <th>Customer ID</th>
        <th>Customer Name</th>
        <th>Address</th>
        <th>Contact</th>
      </tr>
    </thead>
    <?php

    $myrow = $connect->fetch_data("user_account");
    foreach($myrow as $row){    
?>
    <tbody id="myTable">
      <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['fullname']?></td>
        <td><?php echo $row['address']?></td>
        <td><?php echo $row['contact']?></td>

      </tr>
    <?php

     }?>
    </tbody>
  </table> 
    </div>
  </div>
<!-- /Registered Customer List Content -->

</div>
        </div>
    </div>
</body>