<?php

session_start();
if($_SESSION["loggedInType"]=="Admin"){

error_reporting(0);


?>

<!DOCTYPE html>
<html>
<head>
	<title>bd job searcher</title>

	<style type="text/css">

		body{

		}


		table{
			border-radius: 25px;
		    background: #B2ECF5;
		    padding: 20px;
		    width: 60%;

		}

	</style>

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

</head>

<body align="center">

<script>
        function showResult(str) {
            if (str.length==0) {
                document.getElementById("livesearch").innerHTML="";
                document.getElementById("livesearch").style.border="0px";
                return;
            }
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
            } else {  // code for IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function() {
                if (this.readyState==4 && this.status==200) {
                    document.getElementById("livesearch").innerHTML=this.responseText;
                    document.getElementById("livesearch").style.border="1px solid #A5ACB2";
                }
            }
            xmlhttp.open("GET","livesearch.php?q="+str,true);
            xmlhttp.send();
        }

    </script>
</head>

<body class="container-fluid">
<br>
<form>
        <input type="text" name="search" placeholder="Search" onkeyup="showResult(this.value)">
</form>
<div style="border-bottom-left-radius: 4px;border-bottom-right-radius: 4px;">

	<a id="livesearch" href="deleteuser.php"></a>
</div>



	<div>
		<h4>Company Request</h4>

		<?php

			$companyID = "";
			$companyName ="";
			$referenceName = "";
			$designation ="";
			$referanceDetails ="";

				include('includes/dbh.php');
				$query = "select * from company where Status=0;";

				$result = mysqli_query($conn,$query);
				$resultCheck = mysqli_num_rows($result);

				if($resultCheck>0){
					while($row=mysqli_fetch_assoc($result)){
						$uID = $row['uID'];
						$companyName =$row['Name'];
						$referenceName = $row['ContactPersonName'];
						$designation =$row['Designation'];
						$referanceDetails =$row['ContactPersonDetails'];

						echo "$uID";
						echo '<h3>'.$companyName.'</h3>';
						echo 'Contact: '.$referenceName.'<br>';
						echo 'Phone: '.$designation.'<br>';
						echo 'Details: '.$referanceDetails.'<br>';

						echo '<a href="handleAdminApprove.php?uID='.$uID.'">APPROVE</a>';
						echo '<hr>';
					}
				}

		?>



	</div>








</body>
</html>

<?php

}
else{
	echo '<h1>Invalid Request....</h1>';
}

?>
