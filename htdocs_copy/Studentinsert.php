<?php 
$conn = mysqli_connect("localhost","root","root","test");
if(!$conn)
	echo "no Connection";
else{
	echo "good connection";
	$sql="insert into four(title) values ('qwertyuioplkjhgfdsazxcvbnmlkjh')" ;
	if (mysqli_query($conn,$sql))
		echo"row inserted";
	else
	 echo "row nto inserted";
	// creat a SQL statemetn as a string and send it to the database
}
?>