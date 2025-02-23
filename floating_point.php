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
	 Round Up: <?php echo ceil($float); ?><br>
	 Round Down:<?php echo floor($float); ?>



	 <h2>How to check if a number is an Integer or a Float</h2>

	 	<?php 
	 		$myfloat=3.44;
	 		$myInteger=55;


	 	 ?>


	 	 <?php echo "Is {$myfloat} an myInteger?" . is_int($myfloat); ?><br>

	 	 <?php echo "Is {$myInteger} an myInteger?" . is_int($myInteger); ?><br>

	 	 <?php echo "Is {$myfloat} an float?" . is_float($myfloat); ?><br>


	 	 <?php echo "Is {$myfloat} an Numaric?" . is_numeric($myfloat); ?><br>





</body>
</html>