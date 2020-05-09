<?php
include 'dbconnect.php'
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Department</title>
</head>
<body>
<?php
if(isset($_GET["id"])){
	$id = $_GET["id"];
	//echo "ID is " . $id;
	$sql = "select department_id, department_name, location from department ";
	$sql .= "where department_id = ".$id;

	$result = mysqli_query($conn, $sql);

	$row = mysqli_fetch_assoc($result);

	if($row) {
		$department_name = $row["department_name"];
		$location = $row["location"];
		$department_id = $row["department_id"];
?>
	
	<h1>Edit info: <?php echo $department_name; ?></h1>
	<form action="edit_department_process.php" method="POST">
		<table>
			<tr>
				<th>Department</th>
				<td>
					<input type="text" name="department_name" id="department_name" value="<?php echo $department_name; ?>">
					<input type="hidden" name="id" value="<?php echo $id; ?>">
				</td>
			</tr>
			<tr>
				<th>Location</th>
				<td><input type="text" name="location" id="location" value="<?php echo $location; ?>"></td>
			</tr>
			<tr>
				<th>&nbsp;</th>
				<td><input type="submit"></td>
			</tr>
		</table>
	</form>

<?php
	} else {
?>
	
	<h1>Department does not exist</h1>

<?php
	}
?>

<?php
}
else {
	echo "Error, No ID";
}
?>

<p>
	<a href="index.php">Home</a> | <a href="list_department.php">List Department</a>
</p>
</body>
</html>