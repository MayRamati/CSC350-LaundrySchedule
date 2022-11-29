<html>
<head>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <script src="./script.js"></script>
</head>
<body>

<?php
$conn = mysqli_connect ("localhost","root","root","laundry_schedule");
echo "<p><b>You are allowed to sign up for no more than one time slot per week</b>"; 
echo "<p>Please select one of the available slot";
if(!$conn)
	echo "NO CONNECTION";
else
{
	$sql = "select slot_id,av_day,av_time from weekly_cal where apt_number = 0;";
	$result = mysqli_query($conn,$sql);
	if(!$result)
		echo "ERROR";
	else
	{
		if(mysqli_num_rows($result) > 0)
		{
			echo "<html>";
			echo "<form action = 'update.php' method = 'post'>";
			echo "<select name = 'slot'>";
			while ($row = mysqli_fetch_assoc($result))
			{

				echo "<option value='".$row["slot_id"]."'>".$row["av_day"]." ".$row["av_time"]."</option>";	
			
	
			}	
				echo "</select>";				
				echo "<p><input type='submit' value = 'insert'></p>";
				echo "</form>";
				echo "</html>";
	
			
		}
		else
			echo "NO DATA";
	}
	
}
	
?>
</body>
</html>
