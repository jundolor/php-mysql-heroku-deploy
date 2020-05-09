<?php
include 'dbconnect.php'
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
if(isset($_GET["id"])){
	$id = $_GET["id"];

	$sql = "select department_name from department ";
	$sql .= "where department_id = ".$id;

	$result = mysqli_query($conn, $sql);

	$row = mysqli_fetch_assoc($result);

	if($row) {
		$department_name = $row["department_name"];
?>
	<h1>Delete <?php echo $department_name; ?>?</h1>
	<p>
		<a href="delete_department_process.php?id=<?php echo $id; ?>&department=<?php echo $department_name ?>">Continue delete</a>
	</p>
<?php
	} else {
?>
	<h1>Department does not exist</h1>
<?php
	}
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