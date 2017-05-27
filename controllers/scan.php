<?php
	include('../models/db.php');

	$output = shell_exec('hcitool scan');
	$outparts = explode(PHP_EOL, $output);
	array_shift($outparts);
	array_pop($outparts);
	$dev = $outparts;
	if(empty($dev)){
		echo "No devices found. Please make sure your Bluetooth is set to 'discoverable'.";
	} else {
		echo "<table><tr><th colspan='2'>Select Device</th></tr>";
		
		for($x = 0; $x < count($dev); $x++) {
			$devname = substr($dev[$x], 18);
			$mac = ltrim(mb_strimwidth($dev[$x], 0, 18, ""));
			$insertdev = "INSERT INTO dev(id, dev, mac) VALUES (".$x.", '".$devname."', '".$mac."')";
			$conn->query($insertdev);
			echo "<tr><td><input type='radio' name='device' value=".$x."></td><td>".$devname.("</td></tr>");
		}
		
		echo "<tr><th colspan='2'><button type='button' onclick='select();'>Use This Device</button></th></tr></table>";
	}
?>