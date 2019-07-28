<?php
session_start();
include('includes/dbh.php');

///write new query here
$q=$_GET["q"];

$result=mysqli_query($conn,"SELECT uID,type FROM user where uID like  '%$q%' or type like '%$q%' ");

$rows=mysqli_num_rows($result);
if ($rows> 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        echo "<p><a href='deleteuser.php?id=".$row['uID']."' class='leftborder'><b>".$row['uID']."||".$row['type']."</b></a></p>";
    }

}
else
{
    echo "No news found according to this search term";
}