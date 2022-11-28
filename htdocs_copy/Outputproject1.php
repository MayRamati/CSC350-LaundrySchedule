!DOCTYPE html>
<html>

<head>
Schedule
</head>
<body>

<?php

$conn = mysqli_connect("localhost","root","root","college");

if (!$conn){
  echo "no connection";}
 else{ 
$sql="select * from college.schedule";
$result=mysqli_query($conn,$sql);
if(!$result){
	echo "eror";
	
}
else{
	echo "course number  title credits phone section room instructor name email position";
	echo"<br>";
	if(mysqli_num_rows($result)>0)
		while($row=mysqli_fetch_assoc($result)){
		    echo $row["course_number"]."-".$row["title"]."-".$row["credits"]."-".$row["phone"]."-".$row["section"]."-".$row["room"]."-".$row["instructor_name"]."-".$row["email"]."-".$row["position"];
			 echo "<p>";
		}
	else
        echo "no data found";		
		
}
 }
?>
</body>
</html>

</html>