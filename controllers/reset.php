<?php
	include('../models/db.php');
	$rst1 = "DELETE FROM dev";
	$rst2 = "DELETE FROM locdev";
	$conn->query($rst1);
	$conn->query($rst2);
	echo "";
?>