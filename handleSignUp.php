<?php

include('includes/dbh.php');
error_reporting(0);

$flag=0;

if($_POST['userName']==null || $_POST['password']==null || $_POST['email']==null){
	echo '<h3 align="center">Fill the form properly...</h3>';
	$flag=1;
}

if(strlen($_POST['userName'])<2 && $_POST['userName']!=null){
	echo '<h3 align="center">userName must contains at least two characters...</h3>';
	$flag=1;
}

if(strlen($_POST['password'])<3 && $_POST['password']!=null){
	echo '<h3 align="center">password must contains at least 3 characters...</h3>';
	$flag=1;
}

$email =  $_POST['email'];
$i = strlen($email);

if($email[$i-1]!='m' || $email[$i-2]!='o' || $email[$i-3]!='c' ||  $email[$i-4]!='.' ){
	echo '<h3 align="center">Email must be in correct form...</h3>';
	$flag=1;
}

if($_POST['password']!=$_POST['confirm_password']){
	echo '<h3 align="center">Password does not match...</h3>';
	$flag=1;
}

if($_POST['userName']!=null){
	$query = "select * from jobDB.user;";
	$result = mysqli_query($conn,$query);
	$resultCheck = mysqli_num_rows($result);

	if($resultCheck>0){
					while($row=mysqli_fetch_assoc($result)){
						if($row['uID']==$_POST['userName']){
							$n =rand(10,99);
							echo '<h3 align="center">UserName must be UNIQUE... You can try '.$_POST['userName'].$n.' ... </h3>';
							$flag=1;
					}
				}
}
}

if($flag==0){

		$query = "INSERT INTO  `user` (`uID`,`email` , `password`,`type`) VALUES ('".$_POST['userName']."','".$_POST['email']."', '".$_POST['password']."', '".$_POST['userType']."');";
		mysqli_query($conn,$query);

	include('index.php');
}
else{
	include('SignUp.php');
}


?>
