<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Table of the number</title>
</head>
<body>
	<?php
		$n=$_POST['n'];
		$table="1";
		for ($i=1; $i <= 10; $i++) { 
			$table=$i*$n;
			echo "<h1>$n x $i =$table <br></h1>";
		}
	?>
</body>
</html>