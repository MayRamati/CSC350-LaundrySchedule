<!DOCTYPE html>
<html>

<head>
	Schedule
</head>
<body>

<?php
$conn = mysqli_connect("localhost","root","root","college");
ini_set('display_errors', '1');
ini_set('display_start_errors', '1');
error_reporting(E_ALL);
if (!$conn)
  echo "no connection";
else
{
//if(isset($_POST['submit'])) 
  echo "<p> success!";
  $course_number = $_POST['course_number'];
  $title = $_POST['title'];
  $credits = $_POST['credits'];
  $section = $_POST['section'];
  $room = $_POST['room'];
  $instructor_name = $_POST['instructor_name'];
  $email = $_POST['email'];
  $position = $_POST['position'];
  $phone = $_POST['phone'];

  
  $sql = "insert into schedule(course_number,title,credits,phone,section,room,instructor_name,email,position) 
  values ('$course_number', '$title','$credits','$section','$room','$instructor_name','$email','$position','$phone')";

   $res = mysqli_query($conn, $sql);
   // print("Result of the res query: ");
   // print_r($res);

  if($res)
		echo "<p> row inserted </p>";      
  else {
		echo "<p> nothing inserted </p>"; 
		echo $conn->error;
	}

}

?>
</body>
</html>

</html>