<?php
include_once 'core/init.php';

class MainFunction extends ConnectqDB{
 public function insert_message($uid,$rec_id,$msg){
	$sql8="INSERT INTO table_reservation SET sender_id='$uid', receiver_id='$rec_id', message='$msg'";
 		$result = mysqli_query($this->connect,$sql8) or die (mysqli_connect_errno()."Data cannot insert");
 	return $result;	
 }
//for register
 public function reg_user($fullname,$contact,$email,$password,$position){
 	$password =md5($password);

 		$sql="INSERT INTO admin_account SET contact='$contact', password='$password', email='$email', fullname='$fullname', position='$position'";
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
}
//end session

public function fetch_data($table){
$sql6 = "SELECT * FROM  ".$table;
$query =mysqli_query($this->connect,$sql6);
return  $query ;
//End of fetch_data
}
 //Class
}
?> 