<?php


	session_start();


	if(isset($_SESSION['username'])){
		echo 'Applied successfully...';
		include("sendcv.php");
	}
	else{
		echo "
		<script  type='text/javascript'>
		alert('Please log in first...');
		</script>

		";


		include("login.php");
		var_dump($_SESSION);
	}

?>
