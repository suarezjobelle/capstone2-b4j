<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
?>
<?php
include_once 'function/functions.php';
$connect = new MainFunction();
?>