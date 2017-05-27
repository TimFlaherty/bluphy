<?php
	include('../models/db.php');
	
	$output = shell_exec('hcitool scan');
	$outparts = explode(PHP_EOL, $output);
	array_shift($outparts);
	array_pop($outparts);
	$dev = $outparts;
	
	echo "<table><tr><th colspan='2'>Select Device</th></tr>";
	
	for($x = 0; $x < count($dev); $x++) {
		echo "<tr><td><input type='radio' name='device' value=".$x.">".substr($dev[$x], 18).("</td></tr>");
	}
	
	echo "</table>";
?>