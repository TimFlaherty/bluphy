<?php
// Set up database connection
	include('../lib/dbvars.inc'); // Include credentials
	$conn = mysqli_connect("localhost", $dbuser, $dbpass, "bluphy");
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
?>