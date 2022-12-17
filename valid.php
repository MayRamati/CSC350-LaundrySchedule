<html>

<head>
  <link href="style2.css" rel="stylesheet" type="text/css" />
  <script src="./script.js"></script>

</head>
<body>

<?php 
		
		session_start();
		$_SESSION['apt_number'] = $_REQUEST["apt_number"];
	
       
       $conn = mysqli_connect("localhost","root","root","laundry_schedule");
       $valid= mysqli_query($conn,"select apt_number,password from user where apt_number = '".$_REQUEST["apt_number"]."' and password = '".$_REQUEST["password"]."'");
	   $num = mysqli_num_rows($valid);
	   echo "<style type='text/css'>
            .buttonstyle 
			{ 
			 border-radius: 40px;
			border: 1px solid #328f8a;
			background-color: #08ac4b;
			color: #FFFFFF;
			font-size: 12px;
			font-weight: bold;
			padding: 12px 45px;
			letter-spacing: 1px;
			text-transform: uppercase;
			transition: transform 80ms ease-in;
			}

			.form{
			  max-width: 600px;
			  margin: 0 auto;
			  border-radius: 5px;
			  overflow: hidden;
			  box-shadow: 0 0 15px rgba(0, 0, 0, 0.15);
			}
			</style>";
	
	   if($num > 0)
	   {
		  
		  echo "<p><form class = 'form' action = 'listing_av.php' method= 'post'>
		  <input class = 'buttonstyle' type='submit' value = 'click here to view avaliable slots' ></form></p>";
		
	   }   

		else 
		{
		   echo "<hr><font color='red'><b><h3><center>Sorry Invalid Username and Password
		   <br>Please Enter Correct Credentials</br></h3></</font></hr>";
		   echo "<p><form class = 'loginform' action = 'login.php' method= 'post'>
		   <input class = 'buttonstyle' type='submit' value = 'return to login page'></form></p>";
        }
	
?>







</body>
</html>
