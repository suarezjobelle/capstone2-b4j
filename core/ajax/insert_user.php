<?php
include 'core/init.php';?>
<?php
if(!empty($_POST))
{
    
    $name = mysqli_real_escape_string($connect, $_POST["user_name"]);  
    $address = mysqli_real_escape_string($connect, $_POST["user_address"]);  
    $contact = mysqli_real_escape_string($connect, $_POST["user_contact"]);  
    $email = mysqli_real_escape_string($connect, $_POST["user_email"]);  
    $pass =  mysqli_real_escape_string($connect,$_POST["user_pass"]);
    $pass = md5($pass);
    $query = "
    INSERT INTO user_account(fullname, address, contact, email, password)  
     VALUES('$name','$address','$contact','$email','$pass')
    ";
       if(mysqli_query($connect, $query)){

       echo "inserted";
       }
}
?>
