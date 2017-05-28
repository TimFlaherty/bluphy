<?php
	include('../models/db.php');
	$hdr = "<table>
		<tr>
			<th colspan='4'>Active Session</th>
		</tr>
		<tr>
			<th>TX</th>
			<th>RX</th>
			<th>Port</th>
			<th>Message</th>
		</tr>
		<tr>";
		
	$footer = "</tr>
		<tr>
			<th colspan='4'><input type='button' value='Send' disabled></th>
		</tr>
	</table>";
	
	echo $hdr;
	
	$actvsql = "SELECT * FROM active WHERE id = 0";
	$actv = $conn->query($actvsql);
	if ($actv->num_rows > 0) {
	    	while($col = $actv->fetch_assoc()) {
	    		echo "<td>".$col["tx"]."</td>";
	    		echo "<td>".$col["rx"]."</td>";
	    		echo "<td>".$col["port"]."</td>";
	    		echo "<td>".$col["msg"]."</td>";
	    	}
	}
	
	echo $footer;
?>