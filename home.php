<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home page</title>
</head>
<body>

	<h1>Home Page</h1>

	<?php 

		$news_item =32;
		$category = "Sports";


	 ?>


	<a href="news.php?news_item=<?php echo $news_item;?> &category = <?php echo $category ?>">Read News Item 1</a>

</body>
</html>