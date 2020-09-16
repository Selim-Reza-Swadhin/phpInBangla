<!DOCTYPE html>
<html>
<head>
	<title>Forms</title>
</head>
<body>
	

	<h1>Forms</h1>
	<form action="submit2.php" method="post">
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td>Subject</td>
				<td>
					<input type="checkbox" name="subject[]" value="math"> Math 
					<input type="checkbox" name="subject[]" value="science"> Science 
					<input type="checkbox" name="subject[]" value="english"> English
				</td>
				<tr>
					<td>Gender</td>
					<td>
						<input type="radio" name="gender" value="male"> Male 
						<input type="radio" name="gender" value="female"> Female
					</td>
				</tr>
				<tr>
					<td>Description</td>
					<td>
						<textarea name="description"></textarea>
					</td>
				</tr>
				<tr>
					<td>Country</td>
					<td>
						<select name="country">
							<option value="nepal">Nepal</option>
							<option value="india">India</option>
							<option value="china">China</option>
							<option value="bangladesh">Bangladesh</option>
						</select>
					</td>
				</tr>
			</tr>
		</table>
		 
		<button type="submit">Submit</button>

	</form>

</body>
</html>