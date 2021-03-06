<?php
include 'connect_database.php';

class MainFunction extends ConnectqDB{

	 public function insert_data($table,$fields){
 //"insert into from table (, ,) values ('data','data')"
	 $sql ="";
	 $sql .="INSERT INTO " .$table;
	 $sql .=" (".implode(",",array_keys($fields)).") VALUES ";
	 $sql .="('".implode("','",array_values($fields))."')";
	 $query = mysqli_query($this->connect,$sql);
	 if($query){
	   return true;
	 }
}
 public function insert_message($uid,$rec_id,$msg){
	$sql8="INSERT INTO table_reservation SET sender_id='$uid', receiver_id='$rec_id', message='$msg'";
 		$result = mysqli_query($this->connect,$sql8) or die (mysqli_connect_errno()."Data cannot insert");
 	return $result;	
 }
//for register
 public function reg_user($fullname,$contact,$email,$password,$position){
 	$password =md5($password);
 		$sql="INSERT INTO admin_account SET fullname='$fullname', contact='$contact', email='$email', password='$password',  position='$position'";
 		$result = mysqli_query($this->connect,$sql) or die (mysqli_connect_errno()."Data cannot insert");
 		return $result;

 }
//end of register
 //For login process
public function check_login($emailoruser,$password){
	$password = md5($password);
	$sql2="SELECT id  FROM admin_account WHERE email='$emailoruser' OR password='$password'";
	//check username is available
	$result = mysqli_query($this->connect,$sql2);
	$user_data = mysqli_fetch_array($result);
	$count_row = $result->num_rows;
	if ($count_row == 1) {
		$_SESSION['login'] = true;
		$_SESSION['id'] = $user_data['id'];
		// $_SESSION['rid'] = $user_data['receiver_id'];
		return true;
	}
	else{
		return false;
	}
	
}
//end of login process
// show name or email
	 public function get_fullname($uid){
	 	$sql3="SELECT * FROM admin_account WHERE id ='$uid' ";
	 	$result = mysqli_query($this->connect,$sql3);
	 	$user_data = mysqli_fetch_array($result);
	 	echo $user_data['fullname'];
	 }
// end

//session start
public function get_session(){
	return $_SESSION['login'];
	return $_SESSION['logins'];
}
//end session

public function fetch_data($table){
$sql6 = "SELECT * FROM  ".$table;
$query =mysqli_query($this->connect,$sql6);
return  $query ;
//End of fetch_data
}

public function fetch_selected(){
$sql6 = "SELECT * FROM order_list INNER JOIN user_account ON order_list.id_name = user_account.id  ";
$query =mysqli_query($this->connect,$sql6);
return  $query ;
//End of fetch_data
}
//Select DAta
public function select_data($table,$where){

	$sql3 = "";
	$condition = "";
	foreach ($where as $key => $value){
		# code...
		$condition .= $key . "='" . $value . "' AND ";
	}
	$condition = substr($condition, 0, -5);
	$sql3 .= "SELECT * FROM ".$table." WHERE ".$condition;
	$query = mysqli_query($this->connect,$sql3);
	$rows = mysqli_fetch_array($query);
	return $rows;

 }
//End Select data
 //For login process
public function check_user($log_email,$log_pass){
	$log_pass = md5($log_pass);
	$sqllo="SELECT id  FROM user_account WHERE email='$log_email' OR password='$log_pass'";
	//check username is available
	$result = mysqli_query($this->connect,$sqllo);
	$user_data = mysqli_fetch_array($result);	
	$count_row = $result->num_rows;
	if ($count_row == 1) {
		$_SESSION['logins'] = true;
		$_SESSION['id_user'] = $user_data['id'];
		return true;
	}
	else{
		return false;
	}
	
}
//end of login process
// show name or email
	 public function get_user($id_user){
	 	$sqlu="SELECT * FROM user_account WHERE id ='$id_user' ";
	 	$result = mysqli_query($this->connect,$sqlu);
	 	$user_datas = mysqli_fetch_array($result);
	 	echo $user_datas['fullname'];
	 }
// end
	 //Start Update
public function update_data($table,$where,$fields){
	$sql = "";
	$condition = "";
	foreach ($where as $key => $value) {	
		# code...
		$condition .= $key . "='" .$value. "' AND ";
	

	}
		$condition = substr($condition, 0, -5);
		foreach ($fields as $key => $value) {
			# code...
			$sql .= $key . "='".$value."', ";
		}
		$sql = substr($sql, 0, -2);value . "' AND ";
		$sql = "UPDATE " .$table." SET ".$sql." WHERE " .$condition;
		if (mysqli_query($this->connect,$sql)) {
			# code...
			return true;
		}
}
//End of Update
 //Class
}
$connect = new MainFunction;

if(isset($_POST['edit'])){
$id = $_POST['id'];
$where = array("id"=>$id);
$myarray = array (
"id"=> $_POST['id'],
"product_name"=> $_POST['edit_product_name'],
"product_number"=> $_POST['edit_product_num'],
"product_quantity"=> $_POST['edit_product_q']
);
 if ($connect->update_data("product_list",$where,$myarray)) {
 	# code...
 	header("location:admin_home.php?msg= Updated!");
 }
}

if(isset($_POST['edit_menu'])){
$id = $_POST['id'];
$where = array("id"=>$id);
$myarray = array (
"id"=> $_POST['id'],
"menu_name"=> $_POST['edit_name'],
"menu_price"=> $_POST['edit_price']
);
 if ($connect->update_data("Menu_list",$where,$myarray)) {
 	# code...
 	header("location:admin_home.php?msg= Updated!");
 }
}

?> 