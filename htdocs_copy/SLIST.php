
<html>

<head>
Name | Major
</head>
<body>

<?php
$conn = mysqli_connect("localhost","root","root","midterm2022");

error_reporting(E_ALL);
if(!$conn){
	echo "FALSE";
}
else{
	echo "<p>connection variable</p>";
$list = $_POST['list'];
$CSC = $_POST["CSC"];
$CIS = $_POST['CIS'];
$CNT = $_POST['CNT'];

if($list == "CSC"){
echo $sql="select * from student where s_major";
}
elseif($list == "CIS"){
echo $sql="select * from student where s_major ";
}
elseif($list == "CSC"){
echo $sql="select * from student where s_major";
}
	
	  $res = mysqli_query($conn, $sql);
	if($res){
		echo "Selected";
		
	}
	else{
		echo "<p> ERROR </p>"; 
		echo $conn->error;
}
}
?>
</body>
</head>
</html>