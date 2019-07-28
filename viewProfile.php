<!DOCTYPE html>
<html>
	<head>
		<title>My CV</title>

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

			$query1 = "select * from cv where uID='".$unID."';";

			$result1 = mysqli_query($conn,$query1);
			$resultCheck1 = mysqli_num_rows($result1);

			if($resultCheck1>0){
					while($row=mysqli_fetch_assoc($result1)){
						$fullName =$row['Full Name'];
						$location =$row['Location'];
						$phone =$row['Phone'];
						$email=$row['Email'];
						$sscInstitute =$row['sscInstitute'];
						$sscDep =$row['sscDepartment'];
						$sscGpa =$row['sscGPA'];
						//$sscYear =$row['sscYear'];
						$hscInstitute =$row['hscInstitute'];
						$hscDep =$row['hscDepartment'];
						$hscGpa =$row['hscGPA'];
						//$hscYear =$row['hscYear'];
						$underInstitute =$row['underInstitute'];
						$underDegree =$row['underDegree'];
						$underCgpa =$row['underCGPA'];
						$postInstitute =$row['postInstitute'];
						$postDegree =$row['postDegree'];
						$postCgpa =$row['postCGPA'];
						$postOutOfCgpa =$row['postYear'];
						$computerExpertise =$row['computerExpertise'];

					}

					echo "<table style='border: 3px black'>
						<tr><td>$fullName</td></tr>
						<tr><td>$location </td></tr>
						<tr><td>$phone</td></tr>
						<tr><td>$email</td></tr>
						<tr><td>$sscInstitute</td></tr>

						<tr><td>$sscDep</td></tr>
						<tr><td>$sscGpa</td></tr>
						<tr><td>$hscInstitute</td></tr>
						<tr><td>$hscDep</td></tr>
						<tr><td>$hscGpa</td></tr>
						<tr><td>$underInstitute</td></tr>
					<tr><td>$underDegree</td></tr>
					<tr><td>$underCgpa</td></tr>
						<tr><td>$postInstitute</td></tr>
						<tr><td>$postDegree</td></tr>
					<tr><td>$postOutOfCgpa</td></tr>
						<tr><td>$computerExpertise</td></tr>

						</table>";

				}





		echo '<br>';
		echo '<hr>';

		?>


	</body>
</html>
