<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array Functions</title>
</head>
<body>

<?php 

	$mynumbers = array(1,2,3,4,5,6,7,8,9);






 ?>


 Max value : <?php echo max($mynumbers); ?><br>
 Min value : <?php echo min($mynumbers); ?><br>
 Count: <?php echo count($mynumbers); ?><br>
 Sort: <?php echo sort($mynumbers); ?><br>

 <pre>
 	
 	Sort: <?php sort($mynumbers); print_r($mynumbers); ?>
 </pre>

 <pre>
 	
 Reverse sort: <?php rsort($mynumbers); print_r($mynumbers); ?>
 </pre>

 Implode: <?php  $string=implode("|", $mynumbers); echo $string ?><br>

 Explode: <pre>
 	
<?php 

$newarray = explode("|", $string);
print_r($newarray);

 ?>



 </pre>


 Search: <?php echo in_array(22, $mynumbers); ?><br>

</body>
</html>