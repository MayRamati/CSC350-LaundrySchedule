<?php

$conn = mysqli_connect("localhost","root","root","college");
if (!$conn)
  echo "no connection";
else
{
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

  $sql = "insert into schedule(course_number,title,credits,phone,section,room,instructor_name,email,position) values ('$course_number', '$title','$credits','$section','$room','$instructor_name','$email','$position','$phone')";

  if(mysqli_query($conn,$sql))
    echo "<p> row inserted";
  else
    echo "<p> nothing inserted"; 
}

?>