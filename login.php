<!DOCTYPE html>

<?php
    if(!isset($_SESSION))
    {
        session_start();
    }

if(isset($_POST['submit'])){
$_SESSION["username"]=$_POST["userName"];

}
?>
<html>
<head>
  <script src="validate.js"></script>
<title>bd job searcher | Login</title>

<style >

.error {color: white;}
</style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body style="margin-top:160px">


<div class="container" >

	<form action="handleLogin.php" method="POST" onsubmit="return validate()" >


			<div class="form-group ">
			Username:
			<input placeholder="User name" type="text" name="userName" id="userName" class="form-control" onchange="validate()"></input>
			<p id="userNameWarning" style="color:red; text-decoration: bold;"></p>
			</div>

			<div class="form-group ">
			Password :
			<input type="Password" placeholder="Password" name="password" id="password" class="form-control" onchange="validate()"></input>
			<p id="PasswordWarning" style="color:red; text-decoration: bold;"></p>
			</div>

      <br/><br/>
			<div class="form-group ">
			<input type="submit" name="submit" value="Login" id="submit" class="btn btn-success" >
			</div>

	</form>

</div>

</body>
</html>
