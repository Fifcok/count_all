<?php
require ('php/simple_html_dom.php');
date_default_timezone_set('Europe/Warsaw'); 
$timenow = time ();

$date = (date("Y-m-d",$timenow));
$time = (date("H:i:s",$timenow));

echo "Dziś mamy: {$date} <br />";
echo "Jest godzina: {$time} <br />";


$latitude = 50.089418; 
$longitude = 20.177092;
$sunrise = date_sunrise($date, SUNFUNCS_RET_STRING, $latitude, $longitude);
$sunset = date_sunset($date, SUNFUNCS_RET_STRING, $latitude, $longitude);

echo "Wschód słońca: {$sunrise} <br />";
echo "Zachód słońca: {$sunset} <br />";
?>

<br /> <br />
<form method="post" id="calculator" class="col-md-3">

<?php
echo "<input type='date' name='callendar' value='{$date}' min='2023-02-02' max='{$date}'><br />";
?>

	<input name="searchbutton" id="button" type="submit" value="Wyszukaj" style="width: 100px;">
</form>

<?php
include ('php/config.php');

$base = new mysqli ($host, $user, $password, $db);
	$base->set_charset("utf8");
	if ( $base->connect_error )
	die("MYSQL Error: ".$base->connect_error);
		
if (isset($_POST['searchbutton'])) {

$teraz_data = $_POST["callendar"];

	$sql = "SELECT * FROM inwerter WHERE id = (SELECT max(id) FROM inwerter WHERE data = '{$teraz_data}')";

	$time_now = $base->query($sql);

	while($row_time_now = $time_now->fetch_assoc()) {
		echo "<h3>Aktualna produkcja: <b>{$row_time_now['y']}W</b><br />";
		echo "Dziś zostało wyprodukowane: <b>{$row_time_now['today']}kWh</b></h3><br />";

	}

$sql5 = "SELECT x, y FROM inwerter WHERE data = '{$teraz_data}'";
	$inverter = $base->query($sql5);

	while($row_inverter = mysqli_fetch_assoc($inverter)) {

		$inverter_table[] = $row_inverter;
	  }
	}

?>

<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: "Produkcja dzisiaj"
	},
	axisY: {
		title: "Produkcja",
		valueFormatString: "#",
		suffix: "W"
	},
	axisX: {

		valueFormatString: "HH:mm:ss",

	},
	data: [{
		type: "area",
		markerSize: 1,
		xValueFormatString: "HH:mm:ss",
		xValueType: "dateTime",
		dataPoints: <?php echo json_encode($inverter_table, JSON_NUMERIC_CHECK); ?>
	}]
});
 
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html> 
