<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 

		$var1=20;
		$var2=50;



	 ?>





	 Basic calculation(va1+var2): <?php echo ($var1+$var2); ?>



	 <h2> Some Usefull integer functions</h2>


	 squre root: <?php echo sqrt(100); ?><br>
	 Expotentiol:<?php echo pow(4, 3); ?><br>
	 Absolute Value:<?php echo abs(10-79); ?><br>
	 Random Number: <?php echo rand() ?><br>
	 Random 10-100:<?php echo rand(10,100); ?>


	 <h2>Increment and Decrement</h2>

	 <?php $var1 = $var1+20; ?>
	 <?php echo $var1; ?>

</body>
</html>