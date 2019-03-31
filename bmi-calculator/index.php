<?php
	$gewicht = $_GET["gewicht"];
	$lengte = $_GET["lengte_cm"];
	BMIcalc($gewicht,$lengte);
	function BMIcalc($gewicht,$lengte){
		$lengte = $lengte / 100;
		echo "uw gewicht " . $gewicht . " kg.<br>";
		echo "uw lengte " . $lengte . " m<br>";
		$BMI = $gewicht / ($lengte * $lengte);
		echo "uw BMI is: " . $BMI . "<br>";
		if($BMI > 40){
			echo "stop per direct met aankomen.";
		}
		if ($BMI > 30) {
			echo "u kunt proberen om af te vallen.";
		}
		if ($BMI  < 30) {
			echo "U heeft een gezonde BMI. ";
		}
		if ($BMI < 15) {
			echo "u moet aan komen.";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BMI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <script src="main.js"></script>
</head>
<body>
<div id="container">
    <div id="input">
        <form action="POST">
   <div id="input">
			<p>AGE</p><input id="leeftijd" size="20" type="text"><br>
		</div>
		<div id="input2">
			<p>WEIGHT (in kg):</p><br>
			<input id="gewicht" size="20" type="text"><br>
		</div>
		<div id="input3">
			<p>HEIGHT (in cm):</p><br>
			<input id="lengte" size="20" type="text"><br>
		</div>
        <button class="button" id="bereken" type="button" value="CALCULATE" id="bereken" name="submit" >Calculate</button>
</div>
    <div id="resultaat"></div>
    <script scr="ajax.js"></script>
    <script scr="script.js"></script>
</body> 
</html> 