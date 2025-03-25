<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Logical Operators</title>
</head>
<body>

	<?php 

		$subject1= 60;
		$subject2= 90;


		echo "Subject 1:" . $subject1 . "<br>";
		echo "Subject 2:" . $subject2 . "<br>";


		if (($subject1 > 50) && ($subject2 > 50)) {

			echo "You have passed the exam";
		}

		else{
			echo "You need to pass both subjects";
		}


	 ?>

	 <br>

	 	<h2>Not Operator</h2>
	 <?php 

	 	$username= "Dileep";
	 if (!isset($username)) {

	 	echo "Your name is: " . $username;

	 }




	  ?>
</body>
</html>