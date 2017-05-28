<?php include('../models/db.php'); ?>
<html>
<head>
	<title>bluphy admin</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
	<script>
	function active() {
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("active").innerHTML = this.responseText;
			}
		};
		xmlhttp.open("GET", "../views/active.php", true);
		xmlhttp.send();
	}
	
	function locdev() {
		document.getElementById("locdev").innerHTML = "One moment please...<br>";
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("locdev").innerHTML = this.responseText;
				active();
				document.getElementById("scanbtn").disabled = false;
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
				active();
			}
		};
		xmlhttp.open("GET", "../controllers/select.php?y=" + selection, true);
		xmlhttp.send();
	}
	
	function rst() {
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				active();
				document.getElementById("locdev").innerHTML = this.responseText;
				document.getElementById("scan").innerHTML = this.responseText;
				document.getElementById("scanbtn").disabled = true;
				window.alert("Session has been reset");
			}
		};
		xmlhttp.open("GET", "../controllers/reset.php", true);
		xmlhttp.send();
	}
	</script>
</head>

<body>
<script>active();</script>
<div id="active"></div>
<br>
<b>1:</b><br>
<button type="button" onclick="locdev();">Initialize Local Bluetooth</button>
<br>
<br>
<div id="locdev"></div>
<br>
<br>
<b>2:</b><br>
<button type="button" id="scanbtn" onclick="scan();" disabled>Scan Devices</button>
<br>
<br>
<div id="scan"></div>
<br>
<br>
<br>
<button type="button" onclick="rst();">Reset Session</button>
</body>
</html>