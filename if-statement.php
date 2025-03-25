<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>If statement</title>
</head>

<body>

<?php 

	$avg_score =20;

	echo "Score:" . $avg_score;
	echo "<br>";

	if ($avg_score >= 70){

		echo "You are Qualified, Grade A";
	}

	elseif ($avg_score >=65) {
		echo "You are Qualified, Grade B";
	}

	elseif($avg_score >=50){
		echo "You are Qualified, Grade C";
	}
 

	elseif($avg_score >= 35){
		echo "You are Qualified, Grade S";
	}

	else{
		echo "You are not Qualified,Fail";
	}




 ?>

</body>
</html>