<?php
session_start();
print_r($_SESSION);
print_r($_POST['title']);
$crdate = date('Y-m-d H:i:s');
print_r($crdate);
include('includes/dbh.php');

	if(isset($_SESSION['username'])){
		$flag=0;
	}
	else{
		echo "
		<script  type='text/javascript'>
		alert('Please log in first...');
		</script>

		";

    $flag=1;
		include("login.php");
		var_dump($_SESSION);
	}


 if($_POST['title']==null|| $_POST['post']==null){
	echo '<h3 align="center">At first write something</h3>';
  $flag=1;
}
if($flag==0)
{
	$query = "INSERT INTO  `blog` (`blogID`,`uID` , `title`,`blog`,`date`) VALUES (0,'".$_SESSION["username"]."', '".$_POST['title']."','".$_POST['post']."', '".$crdate."');";
	mysqli_query($conn,$query);
}






?>
