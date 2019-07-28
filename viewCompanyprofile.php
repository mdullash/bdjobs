<!DOCTYPE html>

<html>
	<head>
		<title>Company Profile</title>

		<style type="text/css">

			body{
				padding-left: 10%;
				padding-right: 10%;
			}

		</style>

	</head>
	<body style="font-size:120%;">


    <?php

      include('includes/dbh.php');
      session_start();
$unID=$_SESSION["username"];

			$query1 = "select * from company where UIDD='".$unID."';";

			$result1 = mysqli_query($conn,$query1);
			$resultCheck1 = mysqli_num_rows($result1);

			if($resultCheck1>0){
					while($row=mysqli_fetch_assoc($result1)){
						$fullName =$row['Name'];
            	$type =$row['type'];
						$location =$row['Location'];
						$contactPersonName=$row['ContactPersonName'];
            $contactPersonDesignation=$row['Designation'];
            $contactPersonDetails=$row['ContactPersonDetails'];

					}

					echo "<table style='border: 3px black'>
						<tr><td>Fullname:$fullName</td></tr>
						<tr><td>Location:$location </td></tr>
						<tr><td>Company Type:$type</td></tr>
						<tr><td>Contact person name$contactPersonName</td></tr>
						<tr><td>Designation:$contactPersonDesignation</td></tr>
						<tr><td>Contact person details:$contactPersonDetails</td></tr>

						</table>";

				}





		echo '<br>';
		echo '<hr>';

		?>


	</body>
</html>
