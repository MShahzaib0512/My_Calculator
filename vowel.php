<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Vowel</title>
</head>
<body>

	<?php
		// print_r($_POST);
		$txt=$_POST['n'];
		switch ($txt) {
			case 'a':
			case 'A':
				$result="Vowel";
				break;
			case 'e':
			case 'E':
				$result="Vowel";
				break;
			case 'i':
			case 'I':
				$result="Vowel";
				break;
			case 'o':
			case 'O':
				$result="Vowel";
				break;
			case 'u':
			case 'U':
				$result="Vowel";
				break;
			default:
				$result="Constant";
				
		}

		echo "<h3>Latter is:$result </h3> ";
	?>
</body>
</html>