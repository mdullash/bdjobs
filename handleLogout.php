<?php

error_reporting(0);

session_start();

session_unset(); 

session_destroy(); 

session_start();
$_SESSION["loggedInType"]="none";


header("location: index.php");

?>