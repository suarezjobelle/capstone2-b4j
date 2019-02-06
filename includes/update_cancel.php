<?php
$connect = mysqli_connect("localhost" , "admin" , "root" ,"capstone2");
?>
<?php
if( isset( $_REQUEST['cancel'] ))
{
    $id=$_POST['id'];
    $sql = "UPDATE table_reservation SET cancel_status='0' WHERE id='$id'";
        if (mysqli_query($connect,$sql)) {
       		echo "<script>alert('Your Reservation is Cancelled')
       		window.location.href='../index.php';
       		</script>";  
        }
   
         // header("location:");
}

?>