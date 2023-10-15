<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Leap Year</title>
</head>
<body>
	<?php
		$num=$_POST['n'];
		if($num%2==0)
			echo "leap Year";
		else
			echo " <h2>Not a leap Year</h2>";
	?>
</body>
</html>