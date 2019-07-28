<!DOCTYPE html>
<html>
<head>
	<title>Job Search</title>

	<style type="text/css">

		table{
			width: 100%;
			text-align: center;
			background-color: #ACFCFE;
			border-radius: 20px;
			margin-top: 30px;
		}


	</style>

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

</head>
<body>

<?php

	session_start();
	include("includes/dbh.php");

	if (isset($_POST['submit'])) {

	$Keyword = $_POST['Keyword'];
	$Category = $_POST['Category'];
	$Salary = $_POST['Salary'];


		$query = "select * from jobDB.job where jobtype like '%".$Category."%'
     AND keywords like '%".$Keyword."%' AND Salary like '%".$Salary."%';";


				$result = mysqli_query($conn,$query);
				$rows= mysqli_num_rows($result);

        $rows=mysqli_num_rows($result);
        if ($rows> 0)
        {
        while($row = mysqli_fetch_assoc($result))
        {
        echo "<a style=background:cyan;width:25%;float:left><b>Name:".$row['companyID']."<br/>Salary:".$row['salary']."<br/>Education:".$row['Education']."<br/>Description:".$row['keywords']." posted by".$row['uID']."</b></a>";
        }


        }

        else
        {
        echo '<script language="javascript">';
        echo 'alert("No result found")';
        echo '</script>';
        }
}

	?>

</body>
</html>
