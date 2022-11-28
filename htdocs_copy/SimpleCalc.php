<!DOCTYPE html>
<html>

<head>
	Basic Calculator
</head>
<body>

	<?php

        $number_1= $_REQUEST['number_1'];
		$number_2= $_REQUEST['number_2'];

if(empty($number_1)!= true && empty($number_2)!= true)
{
		
		$sign= $_REQUEST['Sign'];
		
		$expression=''.$number_1.' '.$sign.' '.$number_2.''; 
		$result = '';
		eval( '$result = (' . $expression . ');' ); 
		
		
		echo "<p>The inputed expression was ".$expression."</p>";
		echo "<p>The result of that expression is ".$result."</p>";
	
	if($sign == "/" && $_POST($number_2)==0){
	echo "<h2>Undefined</h2>";}
	
}
	
	
 else {
	echo "<h2>Entry can not be empty</h2>";
 }
 
?>

	
</body>
</html>

</html>