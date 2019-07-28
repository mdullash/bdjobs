<!DOCTYPE html>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">

<style>
.navbar {
    overflow: hidden;
    background-color: gray;
    font-family: Arial, Helvetica, sans-serif;
	margin-top:0px;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;

}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
</head>
<body>

<div style="background:green">
<marquee width="100%" direction="left" height="30%">
Best place to find job.
</marquee>
</div>
<div style="background-color:gray">
<img style="margin-left:180px;height:80px;width:900px" src="image/job3.png" alt="Get a job">
</div>
<div class="navbar">
<a href="index.php">Home</a>
<a href="signup.php">Registration</a>
<a href="login.php">Login</a>
<a href="search.php">Search Job</a>



<div class="dropdown">
<button class="dropbtn">Blog
<i class="fa fa-caret-down"></i>
</button>
<div class="dropdown-content">
<a href="blog.php">Write blog</a>
<a href="blogread.php">Read blog</a>
</div>
</div>
<a href="contact.php" target="_blank">Contact Us</a>
<a href="aboutus.php">About Us</a>
</div>

<div class="post">
<?php
session_start();
include('includes/dbh.php');

$result=mysqli_query($conn,"SELECT * FROM job ");

$rows=mysqli_num_rows($result);
if ($rows> 0)
{
while($row = mysqli_fetch_assoc($result))
{
echo "<a href='view.php?id=".$row['jobID']."&amp;idd=".$row['companyID']."' style=background:cyan;width:25%;float:left><b>Name:".$row['companyID']."<br/>Salary:".$row['salary']."<br/>Education:".$row['Education']."<br/>Description:".$row['keywords']." posted by ".$row['uID']."</b></a>";
}


}

else
{
echo '<script language="javascript">';
echo 'alert("No post yet")';
echo '</script>';
}
?>
</div>
<div class="sm">

<table style="position:absolute;margin-left:1250px;top:350px">
<tr>
<td><a href="https://www.facebook.com/md.984" target=_blank>
<img border="0" alt="Facebook id link" src="image/f.png" style="width:30px;height:30px"></td>
</tr>
<tr>

<td><a href="https://plus.google.com/110239211055484071894" target=_blank>
<img border="0" alt="Google+ id link" src="image/g+.png" style="width:30px;height:30px"></td>

</tr>
<tr>
<td><a href="https://twitter.com/md_ullash18" target=_blank>
<img border="0" alt="Twitter id link" src="image/t.png" style="width:30px;height:30px"></td>
</tr>
</table>
</div>
<div style="width:100%;background-color: green";>
<table class="tb1"  bgcolor="gray">
<tr>
<th align=left>About us</th>
<th align=left>Job seekers</th>
<th align="left">Employers</th>

</tr>
<tr>


  <td>About jobsearcher.com</td>
  <td>Create account</td>
  <td>Create account</td>
  </tr>
  <tr>
  <td>Terms and Condition</td>
  <td>Career counseling</td>
  <td>Products/Service</td>
  </tr>
  <tr>
  <td>International partners</td>
  <td>My bdjobs</td>
  <td>post a job</td>
  </tr>
  <tr>
  <td>Other partners</td>
  <td>FAQ</td>
  <td>FAQ</td>
  </tr>
  <tr>
  <td>Privacy policy</td>
  <td>Video Guides</td>
  </tr>
  <tr>
  <td>Feedback</td>
  </tr>
  <tr>
  <td>Contact Us</td>
  </tr>

</table>
</div>

</body>
</html>
