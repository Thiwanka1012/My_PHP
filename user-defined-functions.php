<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Defined Function</title>
</head>
<body>

	<?php 

		function get_month_name($monthvalue=0 , $yearvalue=2016){


			switch ($monthvalue) {
				case 1: $monthname="Duruthu";break;
				case 2: $monthname="Nawam";break;
				case 3: $monthname="Medin";break;
				case 4: $monthname="Bak";break;
				case 5: $monthname="Vesak";break;
				case 6: $monthname="Poson";break;
				case 7: $monthname="Esala";break;
				case 8: $monthname="Nikini";break;
				case 9: $monthname="Binara";break;
				case 10: $monthname="Vap";break;
				case 11: $monthname="Ill";break;
				case 12: $monthname="Uduwap";break;
				default: $monthname="Invalid Month";break;
			}

			
			return $yearvalue . " " . $monthname;


		}

		echo get_month_name(8,2014);
		echo "<br>";
		echo get_month_name(1,2025);




	 ?>

</body>
</html>