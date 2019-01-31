<?php
//insert.php  
$connect = mysqli_connect("localhost", "admin", "root", "capstone2");
if(!empty($_POST))
{
 $output = '';
    $pname = mysqli_real_escape_string($connect, $_POST["product_name"]);  
    $pnum = mysqli_real_escape_string($connect, $_POST["product_num"]);  
    $pqua = mysqli_real_escape_string($connect, $_POST["product_q"]);  
    $query = "
    INSERT INTO product_list(product_name, product_number, product_quantity)  
     VALUES('$pname', '$pnum', '$pqua')
    ";

       if(mysqli_query($connect, $query)){

        echo "Inserted";
       }
}
?>
