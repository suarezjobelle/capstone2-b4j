<?php
include_once 'core/init.php';
$connect = new MainFunction();
if (isset($_REQUEST['Submit'])) {
  extract($_REQUEST);
  $register = $connect->reg_user($fullname,$contact,$position,$password,$email);

  if ($register) {
    # code...
    echo 'Registration Successful <a href="login.php>" Click here to login';
  }else{
    echo 'Registration Failed';
  }
}
?>
<body class="admin-login">
   <center><h1>REGISTER NOW</h1></center>
	<div class="container card mt-5 mb-5 p-5 col-md-3">

<form action="" method="post" name="reg">
	<div class="form-group">
    <label for="inputAddress">Full Name</label>
    <input type="text" class="form-control" name="fullname" placeholder="Enter Fullname" required>
  </div>
  <div class="form-group">
    <label for="inputAddress">Contact</label>
    <input type="text" class="form-control " name="contact" placeholder="Enter Username" required>
  </div>

    <div class="form-group ">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name="email" placeholder="Email" required>
    </div>
    <div class="form-group">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control"  name="password" placeholder="Password" required>
    </div>
 <div class="form-group">
      <label for="inputPassword4">Position</label>
     <select class="custom-select" id="position" name="position">
    <option selected>Choose...</option>
    <option value="Manager">Manager</option>
    <option value="Admin">Admin</option>
=
  </select>
    </div>
 
  <input type="submit" name="Submit" onclick="submitreg();" class="btn btn-primary" value="Sign in">
</form><br><br>
 
  <script type="text/javascript">
       function submitreg(){
        var form = document.reg;
        if (form.fullname.value == "") {
            alert("Enter Name");
            return false;
        }
        else if (form.contact.value == ""){
            alert("Enter Contact Number");
            return false;
        } else if (form.email.value == ""){
            alert("Enter Email");
            return false;
        } else if (form.password.value == ""){
            alert("Enter Password");
            return false;
        }else if (form.position.value == ""){
            alert("Select Position");
            return false;
        }
       } 
    </script>
</body>