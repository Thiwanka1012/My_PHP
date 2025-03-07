<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php

	$var1=30;
	$var2=40;






  ?>


  Basic Calculation (((10+20+$var1)*$var2)/20-30);
  <?php echo (((10+20+$var1)*$var2)/20-30); ?><br>

  <h2>Some Useful Integer Functions</h2>


  Squre Root: <?php echo sqrt(100); ?><br>
  Expotential: <?php echo pow(2,4); ?><br>
  Absolute Value: <?php echo abs(10-15); ?><br>
  Modulo: <?php echo fmod(10, 3); ?><br>
  Random number: <?php echo rand(); ?><br>
  Random number: <?php echo rand(10,100); ?><br>

  <h2>Increment/Decrement</h2>


  Addition: <?php $var1 += 20; echo $var1; ?><br>
  Substraction:<?php $var1 -=40; echo $var1; ?><br>
  Multipication: <?php $var1 *=9; echo $var1; ?><br>









  
</body>
</html>