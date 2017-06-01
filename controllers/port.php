<?php
	include('../models/db.php');
	$p = $_REQUEST["p"];
	$insertport = "UPDATE active SET port = ".$p." WHERE id = 0";
	$conn->query($insertport);
?>