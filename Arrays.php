<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Arrays</title>
</head>
<body>

	<?php 
		$mycars= array("Toyota","Nissan","Kia","Mazda");
		echo $mycars[3];

	 ?>

	 <br>


	 <h2>Before</h2>

	 <pre>
	 <?php print_r($mycars); ?>
	 </pre>



	 <h2>After</h2>
	 	

	 	<?php 

	 	$mycars[4]="Suzuki";

	 	 ?>



	 	<pre>
	 		
	 		<?php print_r($mycars); ?>
	 	</pre>



	 

</body>
</html>