<?php

session_start();
print_r($_SESSION);
$usr=$_SESSION['username'];

include('includes/dbh.php');

	$comapnyID ="";
	//$locationID ="";
	//$jobType ="";
	$comapnyName ="";
	$confirm ="";

	$query = "select * from company";

	$result = mysqli_query($conn,$query);
	$resultCheck = mysqli_num_rows($result);

	if($resultCheck>0){
					while($row=mysqli_fetch_assoc($result)){
						$comapnyID =$row['uID'];;

						$jobType =$row['type'];
						$comapnyName =$row['Name'];
						$status=$row['Status'];

					}
				}
	else{
		echo "<h1>Something went  wrong</h1>";
	}
  //$companyname=$_POST['companyname']
	$jobName = $_POST['jobName'];
	$education = $_POST['education'];
	$jobDescription = $_POST['jobDescription'];
	$Keywords = $_POST['Keywords'];
	$Salary = $_POST['Salary'];
	$alldesc=$_POST['Description'];
	$status=$row['Status'];




	if($_POST['jobName']==null || $_POST['education']==null || $_POST['jobDescription']==null || $_POST['Keywords']==null || $_POST['Salary']==null ){
	echo '<h3 align="center">Fill the form properly...</h3>';
	include("companyHome.php");
	}

	else if($status=="0"){
		echo '<h3 align="center">You can not offer job yet.. No admin have yet confrim you.. Admin will contact with you soon</h3>';
		include("companyHome.php");
	}

	else{


		$query1 = "INSERT INTO `job` (`jobID`, `companyID`, `Name`, `Education`, `Description`, `keywords`, `jobtype`, `Salary`,`AllDescription`,`uID`) VALUES ('0', '".$comapnyID."', '".$jobName."', '".$education."', '".$jobDescription."',  '".$Keywords."', '".$jobType."', '".$Salary."','".$alldesc."','".$usr."');";

		if(mysqli_query($conn,$query1)){
			echo '<h3 align="center">Successfully offered...</h3>';
			echo "$comapnyID";
		}
		else{
			echo '<h1>something went wrong</h1>'.mysqli_error($conn);
		}

		include("companyHome.php");
	}


?>
