<html>
<head>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <script src="./script.js"></script>
   <form class="login-form" action="valid.php" method="POST">
   <div class="login-form__logo-container">
   <img class="login-form__logo" src="logo.png" alt="logo">
   </div>
</head>
<body>

<?php

$conn = mysqli_connect("localhost","root","root","laundry_schedule");
if (!$conn)
  echo "no connection";
else
{
	$apt_num = $_REQUEST["apt_number"];
	$password = $_REQUEST["password"];
		$sql = "insert into user (apt_number,password) values ('$apt_num', '$password')";
		
	if(mysqli_query($conn,$sql))
		echo "<p>You have successfully signed up, please log in</p>";
   else
		echo "<p>You already have an account, please log in</p>"; 
}

?>



     <div class="container">
      <p>
        <label for="apt_number"><b>Apartment Number</b></label>
      </p>

      <input id="apt_number" type="text" placeholder="Enter Apartment" name="apt_number" required>
      <p>
        <label for="password"><b>Password</b></label>
      </p>
      <input id="password" type="password" placeholder="Enter Password" name="password" required>
      <button type="submit" name="login">log in</button>



   </div>
  </form>
  </div>

</body>
</html>


