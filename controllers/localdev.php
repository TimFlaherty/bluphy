<?php
	include('../models/db.php');
	global $locdev;
	$output = shell_exec('hcitool dev');
	$outparts = explode(PHP_EOL, $output);
	array_shift($outparts);
	array_pop($outparts);
	$locdev = $outparts;
	if(empty($locdev)){
		echo "No devices found. Please make sure your Bluetooth is set to 'discoverable'.";
	} else {
		echo "<table><tr><th colspan='2'>Local Devices</th></tr>";
		
		for($i = 0; $i < count($locdev); $i++) {
			echo "<tr><td><input type='radio' name='device' value=".$i."></td><td>".$locdev[$i]."</td></tr>";
		}
		
		echo "<tr><th colspan='2'><button type='button' onclick='selectloc();'>Use This Device</button></th></tr></table>";
	}
?>