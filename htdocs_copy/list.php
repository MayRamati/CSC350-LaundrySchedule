!DOCTYPE html>
<html>

<head>
Schedule
</head>
<body>

<?php
$conn = mysqli_connect("localhost","root","root","test1");

if(!$conn){
	echo "no connection";
}
else{
	echo "<p>sucess</p>";
$name  =$_POST['name'];

	$sql="insert into name (name)
	values('$name')";
	
	  $res = mysqli_query($conn, $sql);
	if($res){
		echo "row inserted";
		
	}
	else{
		echo "<p> nothing inserted </p>"; 
		echo $conn->error;
}
}
?>
</body>
</head>
</html>