<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array Functions</title>
</head>
<body>

<?php 

	$mynumbers = array(14,26,78,99,00);



 ?>


 Maximum value: <?php echo max($mynumbers); ?><br>
 Minimum Value:<?php echo min($mynumbers) ?><br>
 Count: <?php echo count($mynumbers) ?><br>
 Sort: <pre><?php echo sort($mynumbers); print_r($mynumbers); ?></pre>
Reverse Sort: <pre><?php echo rsort($mynumbers); print_r($mynumbers) ?></pre><br>

Impode: <?php 
		
			$string=implode("|", $mynumbers);
			echo $string;


 ?><br>
<pre>
Explode:<?php $newarray= explode("|", $string);
print_r($newarray);


?>
</pre>	


search: <?php echo in_array(26, $mynumbers); ?>

</body>
</html>