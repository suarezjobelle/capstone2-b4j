<?php
$connect = mysqli_connect("localhost" , "admin" , "root" ,"capstone2");
?>
<?php
$output = '';
if(isset($_POST["query"]))
{
    $search = mysqli_real_escape_string($connect, $_POST["query"]);
    $query = "
    SELECT * FROM table_reservation 
    WHERE reservation_number LIKE '%".$search."%'
    OR customer_name LIKE '%".$search."%' 
    OR email LIKE '%".$search."%'
    ";

$result = mysqli_query($connect, $query);

if(mysqli_num_rows($result) > 0)
{ ?>
<form method="POST" action="./includes/update_cancel.php">
    <div class="table-responsive">
                    <table class="table table bordered">
                        <tr>
                            <th>Reference</th>
                            <th>Customer Name</th>
                            <th>Date</th>
                            <th>Cancel</th>
                            
                        </tr>
<?php
    while($row = mysqli_fetch_array($result))
    {
        if ($row['cancel_status']==1) {

   ?>     
            <tr>
                <td><?php echo $row["reservation_number"]?></td>
                <td><?php echo $row["customer_name"]?></td>
                <td><?php echo $row["dated"]?></td>
                <input type="hidden" name="id" value="<?php echo $row["id"]?>">
                <td><button type="submit" value="<?php echo $row["id"]?>" onclick="testfun()" name="cancel" class="btn btn-dark">Cancel</button></td>
            </tr>
        </table>
</form>
    <?php
    }//if
}//while

}//numrows
}else
{
    echo 'Data not Available';  
}

?>  
