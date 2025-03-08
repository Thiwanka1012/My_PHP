<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>For each</title>
</head>
<body>

	<?php 

	$job_categories = array("Accounting", "Finance" , "It" , "Marketing" , "Sales");

	foreach ($job_categories as $job_categories) {
		echo $job_categories . "<br>";
	}


	 ?>

</body>
</html>