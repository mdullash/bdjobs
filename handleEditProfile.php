<?php
session_start();
error_reporting(0);

			$Name = $_POST['name'];
			$uID=$_SESSION["username"];

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



			if($Name==null ||  $phone==null ||  $location==null ||  $ssc_institution_name==null ||  $ssc_department==null ||  $ssc_gpa==null ||  $hsc_institution_name==null ||  $hsc_department==null ||  $hsc_gpa==null ||  $under_institution_name==null ||  $under_degree==null ||  $under_cgpa==null ){
					echo "***Fill the form properly...";
					include("editProfile.php");
			}


			else{
				include('includes/dbh.php');

				$query = "UPDATE `cv` SET `Full Name` = '".$Name."', `Location` = '".$location."', `Phone` = '".$phone."',  `sscInstitute` = '".$ssc_institution_name."', `sscDepartment` = '".$ssc_department."',
				`sscGPA` = '".$ssc_gpa."', `hscInstitute` = '".$hsc_institution_name."', `hscDepartment` = '".$hsc_department."', `hscGPA` = '".$hsc_gpa."',  `underInstitute` = '".$under_institution_name."',
				`underDegree` = '".$under_degree."', `underCGPA` = '".$under_cgpa."', `postInstitute` = '".$post_institution_name."', `postDegree` = '".$post_degree."', `postCGPA` = '".$post_cgpa."', `computerExpertise` = '".$computer_expertise."' WHERE `cv`.`uID` = '".$uID."';";
				mysqli_query($conn,$query);

				echo "
				<script  type='text/javascript'>

				alert('Successfully updated...');


				</script>


				";

				include("userHome.php");
			}



?>
