<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


<?php
if(!isset($_SESSION))
{
    session_start();
}
include('includes/dbh.php');


$query="SELECT * FROM cv where `cv`.`uID`='".$_SESSION['username']."';";
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
      $companyID=$_SESSION['companyID'];

      $Name=$row["Full Name"];
      $email=$row["Email"];
      $ssc_institution_name=$row["sscInstitute"];
      $ssc_department=$row["sscDepartment"];
      $ssc_gpa=$row["sscGPA"];
      $under_institution_name=$row["underInstitute"];
      $under_degree=$row["underDegree"];
       $under_cgpa=$row["underCGPA"];
      $post_institution_name=$row["postInstitute"];
      $post_degree=$row["postDegree"];
      $post_cgpa=$row["postCGPA"];
      $computer_expertise=$row["computerExpertise"];
      //$companyID=$row["$companyID"];

        //echo "<p style=background:cyan;align:center;><b>".$row['AllDescription']."</b></p>";
        $query2 = "INSERT INTO `appliedjobs` (`uID`, `Full Name`, `Email`, `sscInstitute`, `sscDepartment`, `sscGPA`,  `underInstitute`, `underDegree`, `underCGPA`,  `postInstitute`, `postDegree`, `postCGPA`, `computerExpertise`,`companyID`) VALUES
        ('".$_SESSION["username"]."', '".$Name."', '".$email."', '".$ssc_institution_name."', '".$ssc_department."', '".$ssc_gpa."',  '".$under_institution_name."', '".$under_degree."', '".$under_cgpa."', '".$post_institution_name."',
           '".$post_degree."', '".$post_cgpa."', '".$computer_expertise."', '".$companyID."');";
        mysqli_query($conn,$query2);


    }


}

print_r($_SESSION['companyID']);
?>
</body>
</html>
