<?php

session_start();

$flag =0;

			$userName = $_POST['userName'];
			$password = $_POST['password'];
			$confirmPassword = $_POST['confirmPassword'];
			$companyName = $_POST['companyName'];
			$companyType = $_POST['companyType'];
			$road = $_POST['road'];
			$city = $_POST['city'];
			$area = $_POST['area'];
			$contactPersonName = $_POST['contactPersonName'];
			$Designation = $_POST['Designation'];
			$Mobile = $_POST['Mobile'];
			$CPEmail = $_POST['CPEmail'];

			$_SESSION["companyName"] = $companyName;
			$_SESSION["road"] = $road;
			$_SESSION["city"] = $city;
			$_SESSION["area"] = $area;
			$_SESSION["contactPersonName"] = $contactPersonName;
			$_SESSION["Designation"] = $Designation;
			$_SESSION["Mobile"] = $Mobile;
			$_SESSION["CPEmail"] = $CPEmail;



				if($userName==null || $password==null ||  $confirmPassword==null ||  $companyName==null ||    $road==null ||  $city==null ||  $area==null ||  $contactPersonName==null ||  $Designation==null ||  $CPEmail==null){
					echo "***Fill the form properly...";
					include("companySignup.php");
					$flag =1;
				}

				if($password!=$confirmPassword ){
					echo "***Password does not match...";
					include("companySignup.php");
					$flag =1;
				}

				if($userName!=null){
					include('includes/dbh.php');
					$query = "select * from jobDB.user;";
					$result = mysqli_query($conn,$query);
					$resultCheck = mysqli_num_rows($result);

					if($resultCheck>0){
									while($row=mysqli_fetch_assoc($result)){
										if($row['uID']==$userName){
											//$n =rand(10,99);
											echo '<h3 align="center">UserName must be UNIQUE</h3>';
											$flag=1;
											include('companySignup.php');
									}
								}
						}
					else{
						echo '<h3 align="center"> NO USER FOUND ... </h3>';
					}
				}





				if($flag ==0){
						include('includes/dbh.php');

						echo '<h3 align="center">Successfully registered.We will contact with you soon...'.$userName.'</h3>';

						$query = "INSERT INTO `company` ( `uID`, `Name`, `type`,`Location`, `ContactPersonName`, `Designation`, `ContactPersonDetails`,`Status`,`UIDD`) VALUES ('".$userName."', '".$companyName."', '".$companyType."', '".$city."','".$contactPersonName."', '".$Designation."', '".$CPEmail."','0','".$_POST['userName']."');";
						$result = mysqli_query($conn,$query);
						mysqli_num_rows($result);
						echo "$companyName";

						$query2 = "INSERT INTO  `user` (`uID`,`email` ,`password`, `type`) VALUES ('".$_POST['userName']."', '".$_POST['email']."','".$_POST['password']."', 'Company');";
						$result2 = mysqli_query($conn,$query2);
						$resultCheck2 = mysqli_num_rows($result2);

						header("Location: index.php");
					}



?>
