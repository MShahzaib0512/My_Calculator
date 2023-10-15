<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calculator</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body style="background: #7f5539;">
	<h1 align="center" style="color:  #ede0d4;;">Calculator</h1>
	<div class="Even_odd mustarka" style="border: 3px solid #b08968; background: #b08968; border-radius: 35px; display: inline-block; width: 40%; ">
		<h1 align="center" style="color:  #ede0d4;;" >Check  the number is even or odd:</h1>
				<form action="Even_odd.php" method="post" >
					<table align="center">
						<tr><th class="th">Enter the number:</th><td><input  class="tag" type="number" name="n"></td></tr>
						<!-- <tr><th>Result is :</th><td><input readonly class="tag"></td></tr> -->
						<tr><td colspan="2"><input id="btn" type="submit" name="submit" class="tag" value="check"></td></tr>
					</table>
				</form>
	</div>
	<div class="mustarka" >
		<h1 align="center" style="color:  #ede0d4;;">Check  the letter is vowel or not:</h1>
		<form method="post" action="Vowel.php">
			<table align="center">
				<tr><th class="th">Enter the Latter:</th><td><input  class="tag" type="text" name="n"></td></tr>
				<tr><td colspan="2"><input id="btn" type="submit" name="submit" class="tag" value="check"></td></tr>
			</table>
		</form>

	</div>
	<div class="Factorial mustarka" style="border: 3px solid #b08968; background: #b08968; border-radius: 35px; display: inline-block; width: 40%; ">
			<h1 align="center" style="color:  #ede0d4;;">Find factorial of the number:</h1>
		<form method="post" action="factorial.php">
			<table align="center">
				<tr><th class="th">Enter the Number:</th><td><input  class="tag" type="number" name="n"></td></tr>
				<tr><td colspan="2"><input id="btn" type="submit" name="submit" class="tag" value="Find"></td></tr>
			</table>
		</form>
	</div>
	<div class="Leapyear mustarka" style="border: 3px solid #b08968; background: #b08968; border-radius: 35px; display: inline-block; width: 40%; ">
		
			<h1 align="center" style="color:  #ede0d4;;" >Weather the year is leap or not:</h1>
		<form method="post" action="leapyear.php">
			<table align="center">
				<tr><th class="th">Enter the Year:</th><td><input  class="tag" type="number" name="n"></td></tr>
				<tr><td colspan="2"><input id="btn" type="submit" name="submit" class="tag" value="check"></td></tr>
			</table>
		</form>
	</div>

	<div class="Leapyear mustarka" style="border: 3px solid #b08968; margin-left: 450px; background: #b08968; border-radius: 35px; display: inline-block; width: 40%; ">
		
			<h1 align="center" style="color:  #ede0d4;;" >Print table:</h1>
		<form method="post" action="table.php">
			<table align="center">
				<tr><th class="th">Enter the Number:</th><td><input  class="tag" type="number" name="n"></td></tr>
				<tr><td colspan="2"><input id="btn" type="submit" name="submit" class="tag" value="check"></td></tr>
			</table>
		</form>
	</div>
</body>
</html>