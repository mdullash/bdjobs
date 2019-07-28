<?php

error_reporting(0);
session_start();

			$Name = $_POST['name'];
			$email = $_POST['email'];
			//$post_year= $_POST['']
			$phone = $_POST['phone'];
			$location = $_POST['location'];
			$ssc_institution_name = $_POST['ssc_institution_name'];
			$ssc_department = $_POST['sscDep'];
			$ssc_gpa = $_POST['ssc_gpa'];
			$hsc_institution_name = $_POST['hsc_institution_name'];
			$hsc_department = $_POST['hscDep'];
			$hsc_gpa = $_POST['hsc_gpa'];
			$under_institution_name = $_POST['under_institution_name'];
			$under_degree = $_POST['underDegree'];
			$under_cgpa = $_POST['under_cgpa'];
			$post_institution_name = $_POST['post_institution_name'];
			$post_degree = $_POST['postDegree'];
			$post_cgpa = $_POST['post_cgpa'];
			$computer_expertise = $_POST['computerExpertise'];

			$i = strlen($email);


			if($Name==null || $email==null ||  $phone==null ||  $location==null ||  $ssc_institution_name==null ||  $ssc_department==null ||  $ssc_gpa==null ||  $hsc_institution_name==null ||  $hsc_department==null ||  $hsc_gpa==null ||  $under_institution_name==null ||  $under_degree==null ||  $under_cgpa==null ){
					echo "***Fill the form properly...";
					include("buildMyCv.php");
			}


 			else if($email[$i-1]!='m' || $email[$i-2]!='o' || $email[$i-3]!='c' ||  $email[$i-4]!='.' ){
					echo '<h3 align="center">Email must be in correct form...</h3>';

			}

			else{
				include('includes/dbh.php');

				$query = "INSERT INTO `cv` (`uID`, `Full Name`, `Location`, `Phone`, `Email`, `sscInstitute`, `sscDepartment`, `sscGPA`,  `hscInstitute`, `hscDepartment`, `hscGPA`, `underInstitute`, `underDegree`, `underCGPA`,  `postInstitute`, `postDegree`, `postCGPA`, `postYear`, `computerExpertise`,`cvID`) VALUES ('".$_SESSION["username"]."', '".$Name."', '".$location."', '".$phone."', '".$email."', '".$ssc_institution_name."', '".$ssc_department."', '".$ssc_gpa."',  '".$hsc_institution_name."', '".$hsc_department."', '".$hsc_gpa."', '".$under_institution_name."', '".$under_degree."', '".$under_cgpa."', '".$post_institution_name."', '".$post_degree."', '".$post_cgpa."', '222', '".$computer_expertise."','0');";
				mysqli_query($conn,$query);


				echo "<h3>Successfully inserted...</h3>";
				header("Location: userHome.php");
			}



?>
