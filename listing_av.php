<html>
<head>
  <link href="style2.css" rel="stylesheet" type="text/css" />
  <script src="./script.js"></script>
</head>
<body>

<?php
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
			
$conn = mysqli_connect ("localhost","root","root","laundry_schedule");
echo "<b><center>You are allowed to sign up for no more than one time slot per week</b>"; 
echo "<p><b>Please select one of the available slot";
echo "<p>";
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
			echo "<form class = 'form' action = 'update.php' method = 'post'>";
			echo "<select name = 'slot'>";
			while ($row = mysqli_fetch_assoc($result))
			{

				echo "<option style='color=green' value='".$row["slot_id"]."'>".$row["av_day"]." ".$row["av_time"]."</option>";	
			
	
			}	
			 
				echo "</select>";				
				echo "<p><input class = 'buttonstyle' type='submit' value = 'insert' ></p>";
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
