<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<body>
	<h1>Calculator</h1>
	<form action="calculate.php" method="get">
		1st Number <input type="text" name="num_1"><br>
		2nd Number <input type="text" name="num_2"><br>
		<select name="operation">
			<option value="add">+</option>
			<option value="minus">-</option>
			<option value="divide">/</option>
			<option value="multiply">*</option>
		</select><br>
		<input type="submit" value="Calculate">
	</form>
</body>
</html>