<html>
<head>
  <link href="style2.css" rel="stylesheet" type="text/css" />
  <script src="./script.js"></script>
  <div class="container">
</head>
<body>

<?php
	session_start();
	$conn = mysqli_connect("localhost","root","root","laundry_schedule");
    $slot = $_POST['slot'];
    $apt_number = $_SESSION['apt_number'];
	$sql = "update weekly_cal set apt_number = '$apt_number' where slot_id= '$slot'";
	$sql_2 = "insert into orders(apt_number,slot_id) values('$apt_number','$slot')";
	
	if(mysqli_query($conn,$sql_2))
	{
		if(mysqli_query($conn,$sql))
		{
		echo "<p><b><center> Your time slot is: </b>";
		$view = "SELECT av_day,av_time FROM weekly_cal where apt_number = '$apt_number'";
		$result = mysqli_query($conn,$view);
			if(mysqli_num_rows($result) > 0)
			{
				while ($row = mysqli_fetch_assoc($result))
				{
					echo "<p><tr><center>Day: ".$row["av_day"]."<p>Time: ".$row["av_time"]."</tr>";
					
				}
				echo "<p><b>Thank you!";
			}
	
		}
	}
	else
	{
		echo "<p><center><b>You already sign up for this week.<p>As a reminder, you signed for: ";
		$view_2 = "SELECT av_day,av_time FROM weekly_cal where apt_number = '$apt_number'";
		$result = mysqli_query($conn,$view_2);
		
			if(mysqli_num_rows($result) > 0)
			{
				while ($row = mysqli_fetch_assoc($result))
				{
					echo "<p><tr>Day: ".$row["av_day"]."<p>Time: ".$row["av_time"]."</tr>";
					
				}
			}
	
		
		
	}




?>
</div>
</body>
</html>