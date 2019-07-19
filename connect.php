<?php
// host name
$host = "fdb24.awardspace.net";

//host username
$host_username = "3042025_startdown";
//host password
$host_password ="startup2018";

//connected database 
$db = "3042025_startdown";
//connection code
$conn = new mysqli($host, $host_username, $host_password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
//echo ("Database connected successfully");
}
?>
