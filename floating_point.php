<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<h1>Floating Points</h1>



	<?php 

		$float=6.28;


	 ?>


	 <?php echo $float; ?><br>

	 <?php $float +=20; echo $float; ?><br>
	 <?php echo 10/3; ?><br>




	 <h2>Functions</h2>

	 Round: <?php echo round($float,3); ?><br>
	 Round up: <?php echo ceil($float); ?><br>
	 Round Down: <?php echo floor($float); ?><br>


	 <h2>How to check if a number is an integer or a float</h2>


	 <?php 

	 	$myinteger=33;
	 	$myfloat=55.555;





	  ?>



	  <?php echo "Is {myfloat} an float?" . is_float($myfloat); ?><br>
	  <?php echo "Is {myinteger} an integer?" . is_integer($myinteger); ?><br>



</body>
</html>