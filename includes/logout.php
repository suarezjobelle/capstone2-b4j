<?php
include_once 'core/init.php';	
echo $_SESSION['id'];
if ($id == session_destroy()) {
header("location:../login.php");
}
?>