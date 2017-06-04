<?php
	include('../models/db.php');
	
	$sendsql = "SELECT * FROM active WHERE id = 0";
	$send = $conn->query($sendsql);
	if ($send->num_rows > 0) {
	   	while($col = $send->fetch_assoc()) {
	   		$rx = $col["rx"];
	   		$port = $col["port"];
	   		$msg = $col["msg"];
	   		shell_exec('python ../controllers/send.py '.$rx.' '.$port.' '.$msg);
	   		echo $rx.' '.$port.' '.$msg;
	   	}
	}