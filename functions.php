<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Functions</title>
</head>
<body>

	<?php 


	$domain_name = "Best job.lk";
	echo "Outside Function: {$domain_name} <br>";
	myfunc();


	function myfunc(){
		global $domain_name;

		echo "Inside Function: {$domain_name} <br>";

	}





	 ?>

</body>
</html>