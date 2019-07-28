<?php

session_start();

?>


<!DOCTYPE html>
<html>
	<head>
		<title>Comany Profile</title>

		<style>
			.f1{
				text-decoration:none;
			}
		</style>
		<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	</head>

	<body>

	<h1 align="center" >Comany Signup</h1>

	<form style=margin-left:100px class="f1" action="handleCompanySignup.php" method="POST">

	<h3>Account Information</h3> </td>

	<table  >

	<tr>
		<td width="300" height="50">User Name:</td>
		<td ><input placeholder="User name" type="text" name="userName" style="width:400px" ></input> </td>
	</tr>

	<tr>
		<td width="300" height="50">Email:</td>
		<td ><input placeholder="Email" type="text" name="email" style="width:400px" ></input> </td>
	</tr>

	<tr>
		<td width="300" height="50">Password:</td>
		<td ><input placeholder="Password" type="password" name="password" style="width:400px" ></input> </td>
	</tr>

	<tr>
		<td width="300" height="50">Confirm Password:</td>
		<td ><input placeholder="Confirm Password" type="password" name="confirmPassword" style="width:400px" ></input> </td>
	</tr>



	</table>

	<h3>Company Details</h3> </td>



	<table  >

		<tr>
			<td height="40" width="300">Company Name:</td>
			<td><input type="text" placeholder="Name"  name="companyName" style="width:400px "></input></td>
		</tr>



		<tr>
			<td height="40" width="300">Company Type:</td>
			<td><input type="text" placeholder="Type"  name="companyType" style="width:400px "></input></td>
		</tr>


	<tr>
		<td height="40">Phone:</td>
		<td><input type="text" placeholder="Phone"  name="phone"style="width:400px"></input></td>
	</tr>



	<tr>

		<td height="60"><label>Address:	</label></td>

		</tr>
		<tr>

		<td House:width="300" height="50">House:</td>
		<td><input type="text" placeholder="House"  name="house"style="width:400px "></input></td>

		</tr>
		<tr>

		<td House:width="300" height="50">Road:</td>
		<td><input type="text" placeholder="Road"  name="road"style="width:400px"></input></td>



	</tr>


	<tr>

		<td height="40">City: </td>
			<td><select  name="city" style="width:400px">
					<option value="Dhaka">Dhaka</option>
					<option value="Khulna">Khulna</option>
					<option  value="Rajshahi">Rajshahi</option>
					<option value="Barisal">Barisal</option>
					<option value="Chittagong">Chittagong</option>
					<option value="Others">Others</option>
			</select></td>

	</tr>
	<tr>

		<td height="40">Area: </td>
			<td><select name="area" style="width:400px">
					<option value="Banani">Banani</option>
					<option value="Kuratoli">Kuratoli</option>
					<option value="Mirpur">Mirpur</option>
					<option value="Khigaon">Khigaon</option>
					<option value="Motijhil">Motijhil</option>
					<option value="Hatir">Hatir Jhil</option>
			</select></td>


	</tr>


	</table>

	<h3>Contact Person</h3> </td>

	<table>
	<tr>
		<td width="250" height="40"><label>Contact Person's Name:	</label> </td>
		<td><input type="text" placeholder="Contact Person Name"  name="contactPersonName"style="width:400px"></input></td>
	</tr>

	<tr>
		<td width="300" height="40"><label>Contact Person's Designation:	</label> </td>
		<td><input type="text" name="Designation" width="250" height="250px" style="width:400px"></input></td>
	</tr>

	<tr>
		<td width="300" height="40"><label>Contact Person's Email :	</label> </td>
		<td><input type="Email" name="CPEmail" width="250" height="250px" style="width:400px"></input></td>
	</tr>

	<tr>

		<td colspan="2">
			<h4>Wait for approvement</h4>

		</td>

	</tr>


	</table>
	<br><br><br>



	<input type="submit" class="submit" value="Request" style="margin-left:500px"></input>



	</form>
	</body>
</html>
