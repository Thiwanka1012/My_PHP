<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Assosiative arrays</title>
</head>
<body>


	<h1>Assosicate Arrays</h1>

	<?php 

		$student = array("first_name" => "Dileep" , "last_name" => "Kariyawasam", "age" => 21);


	 ?>


	 <?php echo $student["first_name"]; ?><br>

	 Full name: <?php echo $student["first_name"] . " " . $student["last_name"]; ?>



</body>
</html>