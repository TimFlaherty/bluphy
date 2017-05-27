<?php include('../models/db.php'); ?>
<html>
<head>
	<title>bluphy admin</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
	<script>
	function locdev() {
		document.getElementById("locdev").innerHTML = "One moment please...<br>";
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("locdev").innerHTML = this.responseText;
			}
		};
		xmlhttp.open("GET", "../controllers/localdev.php", true);
		xmlhttp.send();
	}
	
	function scan() {
		document.getElementById("scan").innerHTML = "One moment please...<br>";
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("scan").innerHTML = this.responseText;
			}
		};
		xmlhttp.open("GET", "../controllers/scan.php", true);
		xmlhttp.send();
	}
	
	function select() {
		var selection = document.querySelector("input[name='device']:checked").value;
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				window.alert(this.responseText);
			}
		};
		xmlhttp.open("GET", "../controllers/select.php?y=" + selection, true);
		xmlhttp.send();
	}
	
	function rst() {
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("locdev").innerHTML = this.responseText;
				document.getElementById("scan").innerHTML = this.responseText;
				window.alert("Session has been reset");
			}
		};
		xmlhttp.open("GET", "../controllers/reset.php", true);
		xmlhttp.send();
	}
	</script>
</head>

<body>
<button type="button" onclick="locdev();">Show Local Devices</button>
<br>
<button type="button" onclick="scan();">Scan Devices</button>
<br>
<br>
<div id="locdev"></div>
<br>
<br>
<div id="scan"></div>
<br>
<br>
<br>
<button type="button" onclick="rst();">Reset Session</button>
</body>
</html>