<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


<?php
session_start();
include('includes/dbh.php');

$_SESSION['companyID']=$_GET['idd'];
print_r($_SESSION['companyID']);
echo $_GET['idd'];


$query="SELECT AllDescription FROM job where `job`.`jobID`='".$_GET['id']."';";
$result = mysqli_query($conn, $query);

if ($result=mysqli_query($conn,$query ))
{
  // Return the number of rows in result set
  $rows =mysqli_num_rows($result);
}
if ($rows> 0)
{
    while($row = mysqli_fetch_assoc($result))
    {

        echo "<p style=background:cyan;align:center;><b>".$row['AllDescription']."</b></p>";


    }


}


?>
<a href="applyJob.php">Apply Job</a>
</body>
</html>
