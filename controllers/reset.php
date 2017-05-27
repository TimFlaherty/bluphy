<?php
	include('../models/db.php');
	$rst1 = "DELETE FROM dev";
	$rst2 = "DELETE FROM locdev";
	$rst3 = "DELETE FROM active";
	$rst4 = "INSERT INTO active (id) VALUES (0)";
	$conn->query($rst1);
	$conn->query($rst2);
	$conn->query($rst3);
	$conn->query($rst4);
	echo "";
?>