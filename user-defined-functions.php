<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Defined Function</title>
</head>
<body>

	<?php 

		function get_month_name($monthvalue){


			switch ($monthvalue) {
				case 1: echo "Duruthu";break;
				case 2: echo "Nawam";break;
				case 3: echo "Medin";break;
				case 4: echo "Bak";break;
				case 5: echo "Vesak";break;
				case 6: echo "Poson";break;
				case 7: echo "Esala";break;
				case 8: echo "Nikini";break;
				case 9: echo "Binara";break;
				case 10: echo "Vap";break;
				case 11: echo "Ill";break;
				case 12: echo "Uduwap";break;
				default: echo "Invalid Month";break;
			}

			



		}

		echo get_month_name(8);




	 ?>

</body>
</html>