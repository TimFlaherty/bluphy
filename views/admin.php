<html>
<head>
	<title>bluphy admin</title>
	<script>
	function scan() {
		document.getElementById("scan").innerHTML = "One moment please...<br>";
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("scan").innerHTML += this.responseText;
			}
		};
		xmlhttp.open("GET", "../controllers/scan.php", true);
		xmlhttp.send();
	}
	</script>
</head>

<body>
<button type="button" onclick="scan();">Scan Devices</button>
<br>
<div id="scan"></div>
</body>
</html>