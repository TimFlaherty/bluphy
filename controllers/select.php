<?php
	include('../models/db.php');
	$y = $_REQUEST["y"];
	$slct = "SELECT * FROM dev WHERE id = ".$y."";
	$slctn = $conn->query($slct);
	if ($slctn->num_rows > 0) {
    	while($row = $slctn->fetch_assoc()) {
			echo $row["mac"];
    	}
	}
?>