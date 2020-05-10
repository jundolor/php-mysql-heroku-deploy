<?php
//local database connection
#$servername = "localhost";
#$username = "root";
#$password = "";
#$dbname = "abc_co";

#remote database connection
$servername = "remotemysql.com";
$username = "ylZV9MbRWE";
$password = "QS1NQErgJJ";
$dbname = "ylZV9MbRWE";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully to DB";
?>


