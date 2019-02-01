<?php 
include 'core/init.php';
// $order_name = array("order_name" => $_POST['order_name']);
  
?>
 <?php 

     if(isset($_REQUEST['user_login'])) {
        extract($_REQUEST);
        $logins = $connect->check_user($log_email,$log_pass);
        if($logins) {
            header("location:user_logged.php");
        }else{
            echo 'Invalid Username or Password';
        }
     }
?> 
<?php
$n=10; 
function getName($n) { 
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $randomString = 'B4J'; 
  
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
  
    return $randomString; 
} 
$random=getName($n); 
?>
<!-- modal -->
<div class="modal fade" id="add_data_Modal">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">RESERVE A TABLE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<form action="" method="POST" id="insert_form">
  <div class="form-row">
    <input type="hidden" class="form-control" id="random" name="random" value="<?php echo $random ?>">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Full Name</label>
      <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Email</label>
      <input type="email" class="form-control" name="email" id="email" placeholder="Email Address">
    </div>
  </div>
   <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">How Many People</label>
      <input type="number" class="form-control" id="quantity" name="quantity">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Phone</label>
      <input type="text" name="phone" class="form-control" id="phone" placeholder="Contact Number">
    </div>
  </div>
   <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Date</label>
      <input type="date" class="form-control" id="date" name="date">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Time</label>
      <input type="time" class="form-control" name="time" id="time" placeholder="Contact Number">
    </div>
  </div>
    <div class="form-group">
    <label for="inputAddress">Message</label>
    <textarea class="form-control" id="message" name="message" rows="3" style="resize: none;"></textarea>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />
      </div>
      </form>
    </div>
  </div>
</div>
<!-- /modal -->
<!-- reservation script -->
<script>  
$(document).ready(function(){

 $('#insert_form').on("submit", function(event){  
  event.preventDefault();  
  if($('#fullname').val() == "")  
  {  
   alert("Name is required");  
  }  
  else if($('#email').val() == '')  
  {  
   alert("Address is required");  
  }  
  else if($('#quantity').val() == '')
  {  
   alert("Quantity is required");  
  }
   else if($('#phone').val() == '')
  {  
   alert("Phone is required");  
  }
  else if($('#date').val() == '')  
  {  
   alert("Date is required");  
  }  
  else if($('#time').val() == '')
  {  
   alert("Time is required");  
  }
   else if($('#message').val() == '')
  {  
   alert("Message is required");  
  }
  else  
  {  
   $.ajax({  
    url:"core/ajax/insert_reservation.php",  
    method:"POST",  
    data:$('#insert_form').serialize(),  
    beforeSend:function(){  
     $('#insert').val("Inserting");  
    },  
    success:function(data){  
     $('#insert_form')[0].reset();  
     $('#add_data_Modal').modal('hide'); 
     var data = document.getElementById("random").value; 
      alert("Your Reservation ID is : " + data + "  Save this ID for your cancellation" )
    }  
   });  
  }  
 });
});  
 </script>
  <!-- /reservation script -->
<!-- cancel modal -->
<div class="modal fade" id="cancel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">CANCEL RESERVED TABLE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-inline my-2 my-lg-0">
      <input class="form-control col-md-9 mr-2" type="search" placeholder="Enter Reservation Reference Number" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
      </div>
 <hr style="border-top: 1px solid black;">
          <center><p>Cancel Reservation</p></center>
 
    </div>
  </div>
</div>
<!-- /cancel modal -->

<!-- add_product modal -->
<div class="modal fade" id="add_product">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">ADD A PRODUCT</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<form action="" method="POST" id="order_form">
    <div class="form-group">
      <label for="inputEmail4">Product Name</label>
      <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Product Name">
    </div>
    <div class="form-group ">
      <label for="inputPassword4">Product Number</label>
      <input type="text" class="form-control" name="product_num" id="product_num" placeholder="Product Number">
    </div>
    <div class="form-group ">
      <label for="inputPassword4">Product Quantity</label>
      <input type="number" class="form-control" name="product_q" id="product_q" placeholder="Product Quantity">
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="add" id="add" value="Add" class="btn btn-success" />
      </div>
      </form>
    </div>
  </div>
</div>
<!-- /add_product modal -->
<script>  
$(document).ready(function(){
 $('#order_form').on("submit", function(event){  
  event.preventDefault();  
  if($('#product_name').val() == "")  
  {  
   alert("Product Name is required");  
  }  
  else if($('#product_num').val() == '')  
  {  
   alert("Product Number is required");  
  }  
  else if($('#product_q').val() == '')
  {  
   alert("Product Quantity is required");  
  }
   
  else  
  {  
   $.ajax({  
    url:"core/ajax/insert_product.php",  
    method:"POST",  
    data:$('#order_form').serialize(),  
    beforeSend:function(){  
     $('#add').val("Adding");  
    },  
    success:function(data){  
     $('#order_form')[0].reset();  
     $('#add_product').modal('hide');  
     alert("one product added")
    }  
   });  
  }  
 });
});  
 </script>

 <!-- Ordering Online -->
 <div class="modal fade" id="add_user_Modal">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Sign up for Online Ordering</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
<ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Sign Up</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Login</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <center> <h3 class="mt-3" >REGISTRATION</h3> </center>
    <form action="" method="POST" id="user_log" class="p-3">

      <div class="form-group">
      <label for="inputEmail4">Customer Name</label>
      <input type="text" class="form-control" id="user_name" name="user_name" >
      </div>
    <div class="form-group ">
      <label for="inputPassword4">Address</label>
      <input type="text" class="form-control" name="user_address" id="user_address" >
    </div>
    <div class="form-group ">
      <label for="inputPassword4">Contact Number</label>
      <input type="text" class="form-control" name="user_contact" id="user_contact">
    </div>
    <div class="form-group ">
      <label for="inputPassword4">Email</label>
      <input type="email" class="form-control" name="user_email" id="user_email">
    </div>
    <div class="form-group ">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" name="user_pass" id="user_pass">
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="user" id="user" value="Register" class="btn btn-success" />
      </div>
     </form>
  </div>



  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <center> <h3 class="mt-3" >LOGIN</h3> </center>
       <form action="" method="POST" name="logins" id="login_user" class="p-3">
    <div class="form-group ">
      <label for="inputPassword4">Email</label>
      <input type="email" class="form-control" name="log_email" id="log_email">
    </div>
    <div class="form-group ">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" name="log_pass" id="log_pass">
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="user_login" id="user_login" value="Login" class="btn btn-success" />
      </div>
     </form>


</div>
</div>
    </div>
  </div>
</div>
</div>
<!-- /modal -->
<!-- Order Online script -->
<script>  
$(document).ready(function(){
 $('#user_log').on("submit", function(event){  
  event.preventDefault();  
  if($('#user_name').val() == "")  
  {  
   alert("Name is required");  
  }  
  else if($('#user_address').val() == '')  
  {  
   alert("Address is required");  
  }  
  else if($('#user_contact').val() == '')
  {  
   alert("Contact is required");  
  }
   
  else  
  {  
   $.ajax({  
    url:"core/ajax/insert_user.php",  
    method:"POST",  
    data:$('#user_log').serialize(),  
    beforeSend:function(){  
     $('#user').val("Registered");  
    },  
    success:function(data){  
     $('#user_log')[0].reset();  
     $('#add_user_Modal').modal('hide'); 
      alert("Success")
    }  
   });  
  }  
 });
});  
 </script>
<!-- /OrderOnline script -->
<div class="modal fade" id="order" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">ONLINE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
<div class="modal-body">
<form class="form-inline my-2 my-lg-0" id="order_id" method="post" >
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Menu Name</th>
        <th>Price</th>
        <th>Select</th>
      </tr>
    </thead>

<?php  $myrow = $connect->fetch_data("Menu_list");
    foreach($myrow as $rows){   ?>   

   <!--   <input type="checkbox" name="menu" value="<?php echo $rowed['menu_name']?>"> -->
 <tbody id="myTable">
      <tr>
        <td><?php echo $rows['menu_name']?></td>
        <td><?php echo $rows['menu_price']?></td>
        
        <input type="text" name="order_price[]" id="<?php echo $rows["id"]; ?>">
    <td><input class="order_name" type="checkbox" name="order_name[]" id="" value="<?php echo $rows['menu_name']?>"  data-order_id="<?php echo $rows["id"]; ?>" data-price="<?php echo $rows['menu_price']?>"></td>
      </tr>
    <?php }?>
    </tbody>
  </table>
</div>
       <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="order" id="order" value="Order" class="btn btn-success" />
      </div>
        </form>
    </div>
  </div>
</div>
<?php 
   

 ?>

<script> 

$(document).ready(function(){
 $('#order_id').on("submit",function(event){  
    event.preventDefault();   
   $.ajax({  
    url:"core/ajax/insert_order.php",  
    method:"POST",  
    data:new FormData(this),
    processData:false,
    cache:false,
    contentType:false,
    beforeSend:function(){  
     $('#order').val("Ordered");  
    },  
    success:function(data){  
     $('#order_id')[0].reset();  
     // $('#order').modal('hide');  
     alert(data);
    },error:function(data){
      alert(data);
    } 
   });   
   
 });
 $(".order_name").on('click',function(){
    var id = $(this).data('order_id');
    var value = $(this).val();
    var price = $(this).data("price");
    $("#"+id).val(price);
    alert(value + " " + price);
 });
});  
 </script>