<?php
	include('../models/db.php');
	$m = $_REQUEST["m"];
	$insertmsg = "UPDATE active SET msg = '".$m."' WHERE id = 0";
	$conn->query($insertmsg);
?>