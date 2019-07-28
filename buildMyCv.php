<?php
	session_start();
	//error_reporting(0);

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

	<h1 align="center" style="">Build Profile</h1>
	<hr>

	<form action="handleEditProfile1.php" method="POST">

	<h3>Personal Information</h3> </td>

	<table border="0" >

	<tr>
		<td width="300" height="50"><label>Name:	</label> </td>
		<td ><input placeholder="Full name" type="text" name="name" style="width:400px"></input> </td>
	</tr>

	<tr>
		<td height="40"><label>Email:	</label>	</td>
		<td><input type="text" placeholder="Email"  name="email"style="width:400px"></input>	</td>
	</tr>



	<tr>
		<td height="40"><label>Phone:	</label></td>
		<td><input type="text" placeholder="Phone"  name="phone"style="width:400px"></input></td>
	</tr>




	<tr>

		<td height="60"><label>Address:	</label></td>



		<td>
		<input type="text" placeholder="location"  name="location"style="width:400px" ></input></td>

	</tr>

	</table>

	<h3 >Academic Information</u></h3> </td>



	<table border="0" >

	<tr>
		<td height="50"> <h4>School Secondary Certificate</h4> </td>
	</tr>

	<tr>
		<td width="250" height="40"><label>Name of institution:	</label> </td>
		<td width="100"><input placeholder="Name of institution" type="text" name="ssc_institution_name" style="width:400px"></input> </td>
	</tr>

	<tr>
		<td width="250" height="40"><label>Department:	</label> </td>
		<td><input type="text" name="sscDep" placeholder="Department"></td>
	</tr>

	<tr>
		<td width="250" height="40"><label>Grade point average:	</label> </td>
		<td width="100"><input placeholder="GPA" type="text" name="ssc_gpa" style="width:400px"></input> </td>
	</tr>

	<tr>
		<td width="300" height="50"> <h4>Higher School Secondary Certificate</h4> </td>
	</tr>

	<tr>
		<td width="250" height="40"><label>Name of institution:	</label> </td>
		<td width="100"><input placeholder="Name of institution" type="text" name="hsc_institution_name" style="width:400px"></input> </td>
	</tr>

	<tr>
		<td width="250" height="40"><label>Department:	</label> </td>
		<td><input type="text" name="hscDep" placeholder="Science"></td>
	</tr>

	<tr>
		<td width="250" height="40"><label>Grade point average:	</label> </td>
		<td width="100"><input placeholder="GPA" type="text" name="hsc_gpa"style="width:400px" ></input> </td>
	</tr>

	<tr>
		<td  height="50"> <h4>Undergraduation</h4> </td>
	</tr>

	<tr>
		<td width="250" height="40"><label>Name of institution:	</label> </td>
		<td width="100"><input placeholder="Name of institution" type="text" name="under_institution_name" style="width:400px"></input> </td>
	</tr>

	<tr>
		<td width="250" height="30"><label>Degree:	</label> </td>
		<td><input type="text" name="underDegree" placeholder="Degree"></td>
	</tr>

	<tr>
		<td width="250" height="40"><label>CGPA:	</label> </td>
		<td width="100"><input placeholder="CGPA" type="text" name="under_cgpa" style="width:400px"  ></input> </td>
	</tr>

	<tr>
		<td width="250" height="40"><label>Credits:	</label> </td>
		<td width="100"><input placeholder="Credits" type="text" name="under_credits"style="width:400px" ></input> </td>
	</tr>

	<tr>
		<td  height="50"> <h4>Post Graduation</h4> </td>
	</tr>

	<tr>
		<td width="250" height="40"><label>Name of institution:	</label> </td>
		<td width="100"><input placeholder="Name of institution" type="text" name="post_institution_name" style="width:400px" ></input> </td>
	</tr>

	<tr>
		<td width="250" height="40"><label>Degree:	</label> </td>
		<td><input type="text" name="postDegree" placeholder="Degree"></td>
	</tr>

	<tr>
		<td width="250" height="40"><label>CGPA:	</label> </td>
		<td width="100"><input placeholder="CGPA" type="text" name="post_cgpa" style="width:400px"></input> </td>
	</tr>
	<tr>
		<td height="40"><label>Post Year:	</label></td>
		<td><input type="text" placeholder="Post Year"  name="phone"style="width:400px"></input></td>
	</tr>

	</table>

	<h3 style="height="70">Expert in</h3></td>

	<table>
	<tr>
		<td width="250" height="40"><label>Programming Language:</label> </td>
		<td><input type="text" name="computerExpertise" placeholder="Like PHP,JAVA,C#"></input>
		</td>
	</tr>


	</table>
	<br><br><br>

	<input type="submit" value="Confirm" style="margin-left:500px"></input>



	</form>
	</body>
</html>
