<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>For loop Excersises</title>
</head>
<body>

	<?php

		for ($i=2; $i <= 12  ; $i++) { 
			echo "<b> Number: {$i} </b><br>";

			for ($j=1; $j <=12 ; $j++) { 
				echo "{$i} * {$j} = " . $i * $j . "<br>";
			}
		}





	  ?>

</body>
</html>