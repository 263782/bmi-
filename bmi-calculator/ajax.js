function ajax(gewicht, lengte) {
	let debug = true; //maak false als script werkt
	let controlScript = "php.php"; // php script met berekeningen
	let xmlhttp = new XMLHttpRequest(); // maak een instance
	let httpString = controlScript + "?gewicht=" + gewicht + "&lengte_cm=" + lengte;
	let httpResponse = "";
	if (debug) console.log(httpString); // debug
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			console.log("hier");
			if (debug) console.log("http response = " + xmlhttp.responseText);
			httpResponse = xmlhttp.responseText; // read the string from the server
			resultaat.innerHTML = httpResponse;
		}
	}
	xmlhttp.open("GET", httpString, true);
	xmlhttp.send();
}