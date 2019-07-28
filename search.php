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
<title>bd job searcher | Login</title>

<style >

.error {color: white;}
</style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body style="margin-top:160px">


<div class="container" >

	<form action="searchjob.php" method="POST" >


			<div class="form-group ">
			<input placeholder="Keyword" type="text" name="Keyword" id="userName" class="form-control" ></input>
			</div>

			<div class="form-group ">
			<input type="text" placeholder="Category" name="Category" id="password" class="form-control" ></input>
			</div>
      <div class="form-group ">
      <input type="text" placeholder="Salary" name="Salary" id="password" class="form-control" ></input>
      </div>

      <br/><br/>
			<div class="form-group ">
			<input type="submit" name="submit" value="Search" id="submit" class="btn btn-success" >
			</div>

	</form>

</div>

</body>
</html>
