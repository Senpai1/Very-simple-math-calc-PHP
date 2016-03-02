<html>
<head>
    <title>Math calculator</title>
	<meta charset="iso-8859-1">
	<style>
	*{
		text-align:center;
	}
	</style>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    Math calculation:
	<select Name="Num1">
		<option value="+">add</option>
		<option value="-">minus</option>
		<option value="/">divide</option>
		<option value="*">multiply</option>
	</select>
	<br>
	input first number: <input type="number" step="any" min=”0″ Name="Num2"><br>
    input second number: <input type="number" step="any" min=”0″ Name="Num3"><p>
    <input type="Submit" value="Calculate">
    </form>
	<?php
	if (count($_POST) > 0 && isset($_POST["Num1"]) && isset($_POST["Num2"]) && isset($_POST["Num3"])){
		
		$firstnumber = $_POST["Num2"];
		$secondnumber = $_POST["Num3"];
		$calc = $_POST["Num1"];
		switch($calc){
			case '+':
				$sum = $firstnumber + $secondnumber;
				echo $firstnumber . " + " . $secondnumber . " = " . $sum;
				break;
			case '-':
				$sum = $firstnumber - $secondnumber;
				echo $firstnumber . " - " . $secondnumber . " = " . $sum;
				break;
			case '/':
				$sum = $firstnumber / $secondnumber;
				echo $firstnumber . " / " . $secondnumber . " = " . $sum;
				break;
			case '*':
				$sum = $firstnumber * $secondnumber;
				echo $firstnumber . " * " . $secondnumber . " = " . $sum;
				break;
		}
	}
	?>
</body>
</html>