<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
include_once 'database/connect_database.php';
include_once 'function/functions.php';
$connect = new MainFunction();
?>