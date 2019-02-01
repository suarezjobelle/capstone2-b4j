<?php
include_once 'core/init.php';	
echo $_SESSION['id_user'];
if ($id == session_destroy()) {
header("location:../index.php");
}
?>