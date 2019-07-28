
<?php

	include('includes/dbh.php');
	
	$query = "UPDATE `company` SET `Status` = '1' WHERE `company`.`uID`='".$_GET['uID']."'";
	mysqli_query($conn,$query);

	header("Location: adminHome.php");


?>
