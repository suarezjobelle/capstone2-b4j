<?php
// $connect = mysqli_connect("localhost", "admin", "root", "capstone2");
include '../init.php';
// if(!empty($_POST))
// {
//  $output = '';

//     $oname = mysqli_real_escape_string($connect, $_POST["order_name"]);  
//     $onum = mysqli_real_escape_string($connect, $_POST["order_price"]);  
//     // $query = "
//     // INSERT INTO order_list(order_name, order_price)  
//     //  VALUES('$oname', '$onum')
//     // ";

//        if(mysqli_query($connect, $query)){

//         echo "Inserted";
//        }
// }
    $order_price = $_POST["order_price"];
    $order_name = $_POST["order_name"];
    $count = count($order_name);
    $counter = count($order_price);
    $x = trim(implode(" ", array_values($order_price)));
    for($z =1; $z <= $counter; $z++){
        $explode = explode(" ",$x);
        if(empty($explode)){
            
        }else{
            $ex = $explode;
        }
    }
    
    for ($i=0; $i < $count; $i++) { 
         // $data = array(
         //        "order_name" => $order_name[$i],
         //        "order_price" => $explode[$i],
         //    );
           // $connect->insert_data("order_list",$data);
    }
    print_r($ex);
    
?>
