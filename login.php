<?php 
include 'core/init.php';
include 'includes/header.php';
$connect = new MainFunction();

     if(isset($_REQUEST['submit'])) {
        extract($_REQUEST);
        $login = $connect->check_login($emailoruser,$password);
        if($login) {
            header("location:admin_home.php");
        }else{
            echo 'Invalid Username or Password';
        }
     }
     if(isset($_SESSION['id'])) {
        
        header("location:admin_home.php");
     }


?>

<body class="admin-login">
<div class="justify-content-center card col-sm-4 p-5 mt-5" style="margin-left: 500px;">
	<center><h1>LOGIN</h1></center>
<form action="" method="post" name="login">

	<span>Username or Email</span>
	<input type="text" name="emailoruser" class="form-control" required=""><br>
	<span>Password</span>
	<input type="password" class="form-control" name="password" required=""><br>
	<input type="submit" class="btn btn-primary" name="submit" value="Login" onclick="return(submitlogin())">
</div>
</form>

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
</body>