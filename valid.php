<html>

<head>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <script src="./script.js"></script>

</head>
<body>

<?php
		
		session_start();
		$_SESSION['apt_number'] = $_REQUEST["apt_number"];
       
       $conn = mysqli_connect("localhost","root","root","laundry_schedule");
       $valid= mysqli_query($conn,"select apt_number,password from user where apt_number = '".$_REQUEST["apt_number"]."' and password = '".$_REQUEST["password"]."'");
	   $num = mysqli_num_rows($valid);
	
	   if($num > 0)
	   {
		  echo "<p><form action = 'listing_av.php' method= 'post'><input type='submit' value = 'click here to view avaliable slots'></form></p>";
		
	   }   

		else 
		{
		   echo "<hr><font color='red'><b><h3>Sorry Invalid Username and Password<br>Please Enter Correct Credentials</br></h3></</font></hr>";
		   echo "<p><form action = 'login.php' method= 'post'><input type='submit' value = 'return to login page'></form></p>";
        }
	
?>





</body>
</html>
