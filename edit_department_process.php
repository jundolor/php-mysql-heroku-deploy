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
/*
if(isset($_POST["id"])){
	$department_id = $_POST["id"];
	$department_name = $_POST["department_name"];
	$location = $_POST["location"];

	$sql = "update department set department_name = '". $department_name."', ";
	$sql .= "location = '". $location ."' ";
	$sql .= "where department_id = " . $department_id;
	
	if (mysqli_query($conn, $sql)) {
      echo "<h1>Record updated successfully</h1>";
   } else {
      echo "Error updating record: " . mysqli_error($conn);
   }
   */
 echo "<p>Editing is disabled</p>";  
?>

<p>
	<a href="edit_department.php?id=<?php echo $department_id ?>">Back</a>
</p>
<?php
} else {
?>
<h1>Invalid access</h1>

<?php
}
?>
<p>
	<a href="index.php">Home</a> | <a href="list_department.php">List Department</a>
</p>
</body>
</html>