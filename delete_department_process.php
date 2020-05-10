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
$id = $_GET["id"];
$department = $_GET["department"];

//echo "id is ".$id." department is ".$department;
/*
$sql = "delete from department where department_id = ".$id;

$result = mysqli_query($conn, $sql);

if ($result) {
    echo "<h1>".$department. " deleted successfully</h1>";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
*/
echo "<p>Deleting is disabled</p>";
?>

<p>
	<a href="index.php">Home</a> | <a href="list_department.php">List Department</a>
</p>
</body>
</html>