<?php
$connect = mysqli_connect("localhost", "admin", "root", "capstone2");
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
{
    $output .= '<div class="table-responsive">
                    <table class="table table bordered">
                        <tr>
                            <th>Reference</th>
                            <th>Customer Name</th>
                            <th>Date</th>
                            <th>Cancel</th>
                            
                        </tr>';
    while($row = mysqli_fetch_array($result))
    {
        $output .= "
            <tr>
                <td>".$row["reservation_number"]."</td>
                <td>".$row["customer_name"]."</td>
                <td>".$row["dated"]."</td>
                <td><a href='index.php?&id=". $row["id"]."' name='cancel' class='btn btn-dark'>Cancel</a></td>
            </tr>
        ";
    }
    echo $output;
}
}else
{
    echo 'Data not Available';
}



if(isset($_POST['cancel']))
{
    $id = $_GET['id'];

    mysqli_query($connect, "UPDATE table_reservation SET cancel_status=0 WHERE id='".$row['id']."'"); 
}
?>