<?php
include 'dbconnect.php'
?>
<!DOCTYPE html>
<html>
<head>
	<title>List Department</title>
</head>
<body>
<h1>List of departments</h1>
<?php
$sql = "select department_id, department_name, location from department";

$result = mysqli_query($conn, $sql);

if ($result){
?>
<h2>Number of departments <?php echo mysqli_num_rows($result) ?></h2>
<table>
	<thead>
		<tr>
			<th>Department</th>
			<th>Location</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
		<?php
		while ($row = mysqli_fetch_assoc($result)){
		?>
		<tr>
			<td><?php echo $row["department_name"]; ?></td>
			<td><?php echo $row["location"]; ?></td>
			<td>
				<a href="edit_department.php?id=<?php echo $row["department_id"] ?>">Edit</a>
				<a href="delete_department.php?id=<?php echo $row["department_id"] ?>">Delete</a>
			</td>
		</tr>
		<?php
		}
		?>
	</tbody>
</table>

<?php
} else {
?>

<h2>There are no departments</h2>

<?php
}
?>
<p>
	<a href="index.php">Home</a>
</p>
</body>
</html>