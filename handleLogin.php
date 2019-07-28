<?php
session_start();
if(isset($_POST['submit'])){
$_SESSION["username"]=$_POST["userName"];

}
include('includes/dbh.php');


	$query = "select * from jobDB.user;";


				$result = mysqli_query($conn,$query);
				$resultCheck = mysqli_num_rows($result);

				if($resultCheck>0){
					while($row=mysqli_fetch_assoc($result)){
						if($row['uID']==$_POST['userName']){
							if($row['password']==$_POST['password']){
								$_SESSION["loggedIn"] = $_POST['userName'];
								if($row['type']=="JobSeeker"){
									$_SESSION["loggedInType"]="User";

									header("Location: userHome.php");
								}
 								else if($row['type']=="Company"){
 									$_SESSION["loggedInType"]="Company";
									header("location: companyHome.php");
								}
								else if($row['type']=="Admin"){
									$_SESSION["loggedInType"]="Admin";
									header("location: adminHome.php");
								}

							}
							else{
								echo 'Only the password is wrong...';
								$check =1;
							}
						}
						else if($row['password']==$_POST['password']){
							echo 'Wrong userName... Maybe the password is correct...';
							$check =1;
						}

					}
				}




?>
