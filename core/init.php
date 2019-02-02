<?php

include_once 'function/functions.php';
$connect = new MainFunction();
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

?>