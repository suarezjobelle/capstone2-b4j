<?php

include '../init.php';
    $id_user = $_SESSION['id_user'];
    $order_price = $_POST["choice"];
    $order_name = $_POST["menu"];
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
         $data = array(
                "order_name" => $order_name[$i],
                "order_price" => $explode[$i],
            );
           // $connect->insert_data("order_list",$data);
    }
    // print_r($ex);  

$columns = implode(", ",array_keys($data));
$escaped_values = array_map('mysql_real_escape_string', array_values($data));
$values  = implode(", ", $escaped_values);
$sql = "INSERT INTO `orderlist`(order_name,order_price) VALUES ($values)";
echo $sql;
?>
