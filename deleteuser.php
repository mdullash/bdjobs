<?php
session_start();
include('includes/dbh.php');

///write new query here


$result=mysqli_query($conn,"DELETE from user where uID='".$_GET['id']."'");
include('adminhome.php');

?>
