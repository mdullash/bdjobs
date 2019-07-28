<?php
session_start();
include('includes/dbh.php');

$result=mysqli_query($conn,"SELECT * FROM job where Location=");

$rows=mysqli_num_rows($result);
if ($rows> 0)
{
while($row = mysqli_fetch_assoc($result))
{
echo "<a href='view.php?id=".$row['jobID']."&amp;idd=".$row['companyID']."' style=background:cyan;width:25%;float:left><b>Name:".$row['companyID']."<br/>Salary:".$row['salary']."<br/>Blog:".$row['Education']."<br/>Description:".$row['keywords']."posted by".$row['uID']."</b></a>";
}


}
