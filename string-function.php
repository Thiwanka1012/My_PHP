<?php 


$first="The five";
$second="two";


$sentence=$first;
$sentence .= $second;

echo $sentence;

 ?>


 <br>

 All simple:<?php echo strtolower($sentence) ?>

<br>

 All capital:<?php echo strtoupper($sentence) ?>

 <br>

 FrsitCapital: <?php echo ucfirst($sentence) ?>

 <br>

 Count letters: <?php echo strlen($sentence) ?>


 <br>

 Search Name: <?php echo strstr($sentence, "five"); ?>

 <br>

 Replace: <?php echo str_replace("two", "seven", $sentence); ?>