<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Floating Points</title>
</head>
<body>

	<h2>Floating Point</h2>


	<?php 

		$float = 6.28;




	 ?>

	 <?php echo $float; ?>


	 <br>


	 <?php $float+=5; ?>
	 <?php echo $float; ?>


	 <h2>Functions</h2>


	 Round: <?php echo round($float,1); ?> <br>
	 Round Up: <?php echo ceil($float); ?>
</body>
</html>