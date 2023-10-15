<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Factorial</title>
	<!-- <style>
		.mustarka{margin: 70px; border: 3px solid #b08968; background: #b08968; border-radius: 35px; display: inline-block; width: 40%; margin-left: 500px; margin-top: 250px; border: 3px solid #b08968; background: #b08968; border-radius: 35px; display: inline-block; width: 40%;}
		.tag{border: 2px solid black; border-radius: 12px;}
		th{ font-size: 21px; color: black;}
		#btn{background: #e6ccb2; color: black; width:349px; margin: 15px;}
			@font-face{font-family: jpweb; src: url(Ubuntu-Bold.ttf);}
		body{font-family: jpweb; background: #7f5539;}
		@media only screen and (max-width: 600px) {
					h1{color:  #ede0d4;}
 					 body {background-color: lightblue;}
					}
  					.mustarka{margin-left: 162px; margin-top: 124px; width: 60%;}
  					#btn{margin-left: 88px; width: 170px;}
				}
	</style> -->
</head>
<body>
	<?php
		if (isset($_POST['n'])) {
		
		$num=$_POST['n'];
		if ($num>0) {
			$fact=1;
		for ($i=$num; $i>=1 ; $i--) { 
			$fact=$fact*$i;
		}
		echo "Factrial of number is :$fact";
		}
		else
		{
			$fact=1;
		for ($i=$num; $i<=-1 ; $i++) { 
			$fact=$fact*$i;
		}
		echo "Factrial of number is :$fact";
		}

		}

	?>
</body>
</html>