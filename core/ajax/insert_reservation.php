<?php
$connect = mysqli_connect("localhost", "admin", "root", "capstone2");
?>
<?php



if(!empty($_POST))
{
    $random =  mysqli_real_escape_string($connect, $_POST["random"]);
    $name = mysqli_real_escape_string($connect, $_POST["fullname"]);  
    $email = mysqli_real_escape_string($connect, $_POST["email"]);  
    $quantity = mysqli_real_escape_string($connect, $_POST["quantity"]);  
    $phone = mysqli_real_escape_string($connect, $_POST["phone"]);  
    $date =  mysqli_real_escape_string($connect,$_POST["date"]);
    $time = mysqli_real_escape_string($connect,$_POST["time"]);  
    $message = mysqli_real_escape_string($connect, $_POST["message"]);
    $query = "
    INSERT INTO table_reservation(reservation_number,customer_name, email, quantity, phone, dated, message, timed )  
     VALUES('$random','$name', '$email', '$quantity', '$phone', '$date', '$message', '$time')
    ";


       if(mysqli_query($connect, $query)){

        echo "Inserted";
       }
}
?>
