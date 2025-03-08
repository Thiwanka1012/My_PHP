<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>


<h1>Arrays</h1>


<?php 

	$mycars = array("Toyota","Nissan","Kia",array("Black","White","Blue"));
	echo $mycars[2];






 ?><br>


p<pre>
 <?php print_r($mycars); ?><br>
</pre>


<h3>After</h3>


<?php $mycars[3]="Suzuki"; ?>
<?php $mycars[4]="Alto"; ?>
<?php $mycars[5]="BMW"; ?>
<?php $mycars[]="Benz"; ?>
<?php $mycars[3][1]="Red"; ?>

<pre>
	<?php print_r($mycars); ?>
</pre>



</body>
</html>