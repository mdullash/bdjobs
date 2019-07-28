 <?php

include('includes/dbh.php');
			session_start();

			$cvID ="";
			$fullName ="";
			$location ="";
			$phone ="";
			$sscInstitute ="";
			$sscDep ="";
			$sscGpa ="";
			$hscInstitute ="";
			$hscDep ="";
			$hscGpa ="";
			$underInstitute ="";
			$underDegree ="";
			$underCgpa ="";
			$underYear ="";
			$postInstitute ="";
			$postDegree ="";
			$postCgpa ="";
			$postYear ="";
			$computerExpertise ="";




$unID=$_SESSION["username"];
			$query1 = "select * from jobDB.cv where uID='".$unID."';";

			$result1 = mysqli_query($conn,$query1);
			$resultCheck1 = mysqli_num_rows($result1);

			if($resultCheck1>0){
					while($row=mysqli_fetch_assoc($result1)){
						$fullName =$row['Full Name'];
						$location =$row['Location'];
						$phone =$row['Phone'];
						$sscInstitute =$row['sscInstitute'];
						$sscDep =$row['sscDepartment'];
						$sscGpa =$row['sscGPA'];
						$hscInstitute =$row['hscInstitute'];
						$hscDep =$row['hscDepartment'];
						$hscGpa =$row['hscGPA'];
						$underInstitute =$row['underInstitute'];
						$underDegree =$row['underDegree'];
						$underCgpa =$row['underCGPA'];
						$postInstitute =$row['postInstitute'];
						$postDegree =$row['postDegree'];
						$postCgpa =$row['postCGPA'];
						$computerExpertise =$row['computerExpertise'];

					}
				}

?>


<!DOCTYPE html>
<html>
	<head>
		<title>Edit Profile</title>

		<style>
		body{
			padding-left: 20%;
			padding-right: 20%;
		}
		</style>

	</head>

	<body >

	<h1 align="center" style="color:DarkBlue;">Edit Profile</h1>
	<hr>

	<form action="handleEditProfile.php" method="POST">
		

	<h3 style="color:DarkBlue; background-color: #F0F0F0"><u>Personal Information</u></h3> </td>

	<table border="0" >

	<tr>
		<td width="300" height="50"><label>Name:	</label> </td>
		<td ><input placeholder="Full name" type="text" name="name" style="width:400px" value="<?php echo $fullName ?>"></input> </td>
	</tr>


	<tr>
		<td height="40"><label>Phone:	</label></td>
		<td><input type="text" placeholder="Phone"  name="phone"style="width:400px" value="<?php echo $phone ?>"></input></td>
	</tr>



	<tr>

		<td height="60"><label>Address:	</label></td>



		<td>
		<input type="text" placeholder="location"  name="location"style="width:400px" value="<?php echo $location ?>"></input></td>

	</tr>

	</table>

	<h3 style="color:DarkBlue; background-color: #F0F0F0"><u>Academic Information</u></h3> </td>



	<table border="0" >

	<tr>
		<td height="50"> <h4>School Secondary Certificate</h4> </td>
	</tr>

	<tr>
		<td width="250" height="40"><label>Name of institution:	</label> </td>
		<td width="100"><input placeholder="Name of institution" type="text" name="ssc_institution_name" style="width:400px" value="<?php echo $sscInstitute ?>"></input> </td>
	</tr>

	<tr>
		<td width="250" height="40"><label>Department:	</label> </td>
		<td><input type="text" name="sscDep" value="<?php echo $sscDep ?>"></td>
	</tr>

	<tr>
		<td width="250" height="40"><label>Grade point average:	</label> </td>
		<td width="100"><input placeholder="GPA" type="text" name="ssc_gpa" style="width:400px" value="<?php echo $sscGpa ?>"></input> </td>
	</tr>

	<tr>
		<td width="300" height="50"> <h4>Higher School Secondary Certificate</h4> </td>
	</tr>

	<tr>
		<td width="250" height="40"><label>Name of institution:	</label> </td>
		<td width="100"><input placeholder="Name of institution" type="text" name="hsc_institution_name" style="width:400px" value="<?php echo $hscInstitute ?>"></input> </td>
	</tr>

	<tr>
		<td width="250" height="40"><label>Department:	</label> </td>
		<td><input type="text" name="hscDep" value="<?php echo $hscDep ?>"></td>
	</tr>

	<tr>
		<td width="250" height="40"><label>Grade point average:	</label> </td>
		<td width="100"><input placeholder="GPA" type="text" name="hsc_gpa"style="width:400px"  value="<?php echo $hscGpa ?>"></input> </td>
	</tr>

	<tr>
		<td  height="50"> <h4>Undergraduation</h4> </td>
	</tr>

	<tr>
		<td width="250" height="40"><label>Name of institution:	</label> </td>
		<td width="100"><input placeholder="Name of institution" type="text" name="under_institution_name" style="width:400px"  value="<?php echo $underInstitute ?>"></input> </td>
	</tr>

	<tr>
		<td width="250" height="30"><label>Degree:	</label> </td>
		<td><input type="text" name="underDegree" value="<?php echo $underDegree ?>"></td>
	</tr>

	<tr>
		<td width="250" height="40"><label>CGPA:	</label> </td>
		<td width="100"><input placeholder="CGPA" type="text" name="under_cgpa" style="width:400px"  value="<?php echo $underCgpa ?>"></input> </td>
	</tr>


	<tr>
		<td  height="50"> <h4>Post Graduation</h4> </td>
	</tr>

	<tr>
		<td width="250" height="40"><label>Name of institution:	</label> </td>
		<td width="100"><input placeholder="Name of institution" type="text" name="post_institution_name" style="width:400px"  value="<?php echo $postInstitute ?>"></input> </td>
	</tr>

	<tr>
		<td width="250" height="40"><label>Degree:	</label> </td>
		<td><input type="text" name="postDegree" value="<?php echo $postDegree ?>"></td>
	</tr>

	<tr>
		<td width="250" height="40"><label>CGPA:	</label> </td>
		<td width="100"><input placeholder="CGPA" type="text" name="post_cgpa" style="width:400px" value="<?php echo $postCgpa ?>"></input> </td>
	</tr>


	</table>

	<h3 style="color:DarkBlue;  background-color: #F0F0F0" height="70"><u>Expertises</u></h3> </td>

	<table>
	<tr>
		<td width="250" height="40"><label>Computer Expertise:	</label> </td>
		<td><input type="text" name="computerExpertise" value="<?php echo $computerExpertise ?>"></input>
		</td>
	</tr>



	</table>
	<br><br><br>

	<input type="submit" value="Confirm" style="margin-left:500px"></input>



	</form>
	</body>
</html>
