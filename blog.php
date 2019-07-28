<!DOCTYPE html>
<?php
session_start();
//$username = $_SESSION["username"];
// "$ername";
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">

<style>


.modal {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; 
}


</style>
</head>
<body>

<div class="blog">
<a href="index.php">Home</a>
<a href="registration.php">Registration</a>
<a href="login.php">Login</a>
<a href="jobs.php">Jobs</a>
<a href="blog.php">Blog</a>
<a href="contact.php" target="_blank">Contact us</a>
<a href="about.php">About</a>
</div>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;position:absolute;top:150px">Write Something</button>

<div id="id01" class="modal">
  
  <form style="position:absolute;top:200px" class="modal" method="POST" action="blogpost.php">
  <div >
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>   

    <div style="height:300px;background-color:gray">
	   <input style="height:200px;width:100px" type="textarea" placeholder="Write title" name="title">
      <input style="height:200px;width:400px" type="textarea" placeholder="Write Something" name="post">
        <br/><br/>
      <button type="submit">Post</button>

    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>


