<?php
	include('../models/db.php');
	$y = $_REQUEST["y"];
	echo $dev[$y];
	echo mb_strimwidth($dev[$y], 0, 18, "");	
?>