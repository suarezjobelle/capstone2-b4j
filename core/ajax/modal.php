<?php 
include 'core/init.php';
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