<!DOCTYPE html>
<?php
session_start();
include('includes/dbh.php');


$result=mysqli_query($conn,"SELECT * FROM blog");

$rows=mysqli_num_rows($result);
if ($rows> 0)
{
    while($row = mysqli_fetch_assoc($result))
    {

        echo "<p style=background:cyan><b>Name:".$row['uID']."<br/>Title:".$row['title']."<br/>Blog:".$row['blog']."<br/>Date:".$row['date']."</b></p>";

    }

}
else
{
    echo "No blog post yet";
}
