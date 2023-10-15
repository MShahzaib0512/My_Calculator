<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Even Odd</title>
</head>
<body>
	<?php
		// print_r($_POST);
		$num1=$_POST['n'];
		if($num1%2==0)
			$result="Even";
		else
			$result="odd";

		echo "Result is:$result ";
		
		?>
	<!-- 	<div class="style" style="border: 2px solid mediumpurple; border-radius: 23px; display: inline-block;">
				<h1>Check weather the number is even or odd:</h1>
				<form action="" method="post" >
					<table align="center">
						<tr><th class="th">Enter the number:</th><td><input  class="tag" type="number" name="n"></td></tr>
						<tr><th>Result is :</th><td><input readonly class="tag" value=<?php echo "$result ";?>></td></tr>
						<tr><td><input id="btn" type="submit" name="submit" class="tag" value="check"></td></tr>
					</table>
				</form>
		</div> -->
</body>
</html>