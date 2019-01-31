<?php

include_once 'database/connect_database.php';
include_once 'core/function/functions.php';
$connect = new MainFunction();
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>