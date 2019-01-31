<?php
class ConnectqDB{
	public $connect;
	public function __construct(){
		$this->connect = mysqli_connect("localhost" , "root" , "" ,"capstone2");
	}
}

$connect = new ConnectqDB;

?>