<?php
if(!isset($_SESSION))
{
    session_start();
}
include('includes/dbh.php');

//$usr=$_SESSION['userName'];
$result=mysqli_query($conn,"SELECT * FROM appliedjobs where `appliedjobs`.`companyID`='".$_SESSION['username']."'");

$rows=mysqli_num_rows($result);
if ($rows> 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
      $fullName =$row['Full Name'];
      $email=$row['Email'];
      $sscInstitute =$row['sscInstitute'];
      $sscDep =$row['sscDepartment'];
      $sscGpa =$row['sscGPA'];
      $underInstitute =$row['underInstitute'];
      $underDegree =$row['underDegree'];
      $underCgpa =$row['underCGPA'];
      $postInstitute =$row['postInstitute'];
      $postDegree =$row['postDegree'];
      $postCgpa =$row['postCGPA'];
      $computerExpertise =$row['computerExpertise'];

        //echo "<p style=background:cyan;width:25%;float:left><b>Name:".$row['companyID']."<br/>Salary:".$row['salary']."<br/>Blog:".$row['Education']."<br/>Description:".$row['keywords']."posted by".$row['uID']."</b></a>";
        echo "<table style=style=background:cyan;width:25%;float:left>
          <tr><td>$fullName</td></tr>
          <tr><td>$email</td></tr>
          <tr><td>$sscInstitute</td></tr>

          <tr><td>$sscDep</td></tr>
          <tr><td>$sscGpa</td></tr>

          <tr><td>$underInstitute</td></tr>
        <tr><td>$underDegree</td></tr>
        <tr><td>$underCgpa</td></tr>
          <tr><td>$postInstitute</td></tr>
          <tr><td>$postDegree</td></tr>
          <tr><td>$computerExpertise</td></tr>

          </table>";


    }


}

else
{
  echo '<script language="javascript">';
  echo 'alert("No post yet")';
  echo '</script>';
}
