<?php 
include 'core/init.php';
$connect = new MainFunction();
include 'includes/header.php';
if(isset($_REQUEST['submit'])) {
        extract($_REQUEST);
        $login = $connect->check_login($emailoruser,$password);
        if($login AND isset($_SESSION['id'])) {
            header("location:admin_home.php");
        }else{
            echo 'Invalid Username or Password';
        }
     }
     // if(isset()) {
        
     //    header("location:admin_home.php");
     // }
?>
<?php
if (isset($_REQUEST['Submit'])) {
  extract($_REQUEST);
  $register = $connect->reg_user($fullname,$contact,$email,$passwords,$position);

  if ($register) {
    # code...
    echo 'Registration Successful';
  }else{
    echo 'Registration Failed';
  }
}
?>

<body class="admin-login">
<div class="justify-content-center card col-sm-4 p-5 mt-5" style="margin-left: 500px;">

    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Register</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Login</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
      
      <center><h1>REGISTER NOW</h1></center>
<form action="" method="post" name="reg">
    <div class="form-group">
    <label for="inputAddress">Full Name</label>
    <input type="text" class="form-control" name="fullname" placeholder="Enter Fullname" required>
  </div>
  <div class="form-group">
    <label for="inputAddress">Contact</label>
    <input type="text" class="form-control " name="contact" placeholder="Enter Contact" required>
  </div>

    <div class="form-group ">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
    </div>
    <div class="form-group">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control"  name="passwords" placeholder="Enter Password" required>
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
</form>
  </div>
 




  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        <center><h1>LOGIN</h1></center>
<form action="" method="post" name="login">
    <span>Username or Email</span>
    <input type="text" name="emailoruser" class="form-control" required=""><br>
    <span>Password</span>
    <input type="password" class="form-control" name="password" required=""><br>
    <input type="submit" class="btn btn-primary" name="submit" value="Login" onclick="return(submitlogin())">
</form>
</div>
</div>

</div>
    <script type="text/javascript">
       function submitlogin(){
        var form = document.login;
        if (form.emailoruser.value == "") {
            alert("Enter Email or Pass");
            return false;
        }
        else if (form.password.value ==""){
            alert("Enter Password");
            return false;
        }
       } 
    </script>
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
        } else if (form.passwords.value == ""){
            alert("Enter Password");
            return false;
        }else if (form.position.value == ""){
            alert("Select Position");
            return false;
        }
       } 

    </script>
</body>