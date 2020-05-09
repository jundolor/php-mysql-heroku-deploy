<?php
include 'dbconnect.php'
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add department</title>
</head>
<body>
<?php
$dept = $_POST['department'];
$loc = $_POST['location'];

//echo $dept;
//echo '<br>';
//echo $loc;

$sql = "INSERT INTO department (department_name, location, date_create, date_modify)";
$sql .= " VALUES ";
$sql .= "('$dept', '$loc', now(), now())";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>
<p>
	<a href="add_department.php">Add Another Department</a>
</p>
<p>
	<a href="index.php">Home</a>
</p>
</body>
</html>