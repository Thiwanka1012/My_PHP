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
		$url = "news.php?news_item={$news_item}&category ={ $category}";


	 ?>


	<a href="<?php echo $url ; ?>">Read News Item 1</a>

</body>
</html>