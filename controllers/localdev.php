<?php
	include('../models/db.php');
	
	$output = shell_exec('hcitool dev');
	$outparts = explode(PHP_EOL, $output);
	array_shift($outparts);
	array_pop($outparts);
	$locdev = $outparts;
	if(empty($locdev)){
		echo "No devices found. Please make sure your Bluetooth is connected to the server.";
	} else if (count($locdev) == 1) {
		$locmac = ltrim(substr($locdev[0], -18));
		$locname = substr($locdev[0], 0, -18);
		$insrtlocdev = "UPDATE active SET tx = '".$locmac."' WHERE id = 0";
		$conn->query($insrtlocdev);
		echo "<table><tr><th colspan='2'>Local Device Info</th></tr><tr><td>".$locname."</td><td>".$locmac."</td></tr></table>";
	} else {
		echo "<table><tr><th colspan='2'>Local Devices</th></tr>";
		
		for($i = 0; $i < count($locdev); $i++) {
			echo "<tr><td><input type='radio' name='device' value=".$i."></td><td>".$locdev[$i]."</td></tr>";
		}
		
		echo "<tr><th colspan='2'><button type='button' onclick='selectloc();'>Use This Device</button></th></tr></table>";
	}
?>