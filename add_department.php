<!DOCTYPE html>
<html>
<head>
	<title>Add Department</title>
</head>
<body>
<h1>Add Department</h1>
<form action="add_department_process.php" method="post">
	<table>
		<tr>
			<th>Department</th>
			<td><input type="text" name="department" id="department"></td>
		</tr>
		<tr>
			<th>Location</th>
			<td><input type="text" name="location" id="location"></td>
		</tr>
		<tr>
			<th>&nbsp;</th>
			<td><input type="submit" value="Submit"></td>
		</tr>
	</table>
</form>
<p>
	<a href="index.php">Back</a>
</p>
</body>
</html>