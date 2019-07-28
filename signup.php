<!DOCTYPE html>
<html>
<head>
	<title>bd job sercher | Sign Up</title>

	<style >


	</style>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body  style="margin-top:160px;margin-left:500px">

	<div style="align:center;" class="container">

		<form  action="handleSignUp.php" method="POST" >

			<table >
		    <tr>
			<td>User Name:</td>
			<td><input placeholder="User name" type="text" name="userName" class="form-control "  ><br/></input></td>
			</tr>

			<tr>
			<td>Email:</td>
			<td><input type="email" placeholder="Email"  name="email" class="form-control" ><br/></input></td>
			</tr>
		    <tr>

			<td>Password:</td>
			<td><input type="Password" placeholder="Password" name="password" class="form-control" ><br/></input></td>
			</tr>
			<tr>
			<td>Confirm Password:</td>
			<td><input type="Password" placeholder="Confirm Password" class="form-control" name="confirm_password" ><br/></input></td>
			</tr>

			<tr><br/>
				<td>
				</td>
			</tr>
			<tr>
			<td>
			</td>
			</tr>
			<tr>
		 	<td>User type:</td>
					<td><select name="userType" class="form-control">

						<option value="JobSeeker">Sign up as job seeker</option>

					</select></td>
					</tr>
			<tr>
			<td><input type="submit" name="submit" value="Sign UP"  class="btn btn-success"></td>
			</tr>
			</table>
	</form>

	<div class="form-group">
		<base target="_parent">
				<form action="companySignup.php" >
					Want to sign up as company ?
					<input type="submit" name="" value="Company Signup" class="btn btn-secondary btn-sm">
				</form>

	</div>

	</div>



</body>
</html>
