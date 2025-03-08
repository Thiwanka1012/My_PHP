<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Swich</title>
</head>
<body>
	<?php 


	$user_group_code = 'A';


	switch ($user_group_code) {
		case 'A':
			echo "User Group : Administator <br>";
			break;
		case 'P':
			echo "User Group : Power User <br>";
			break;

		case 'U':
			echo "User Group : User <br>";
			break;

	
		case 'G':
			echo "User Group : Guest <br>";
			break;

		default:
			echo "Invalid User Group";
			break;
	}




	 ?>

</body>
</html>