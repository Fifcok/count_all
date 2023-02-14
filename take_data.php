<?php
require ('php/simple_html_dom.php');

include ('php/config.php');

$base = new mysqli ($host, $user, $password, $db);
	$base->set_charset("utf8");
	if ( $base->connect_error )
	die("MYSQL Error: ".$base->connect_error);

date_default_timezone_set('Europe/Warsaw');
$timenow = time ();

$date = (date("Y-m-d",$timenow));
$sunset_date = (date("m-d",$timenow));
$time = (date("H:i:s",$timenow));

echo "Dziś mamy: {$date} <br />";
echo "Jest godzina: {$time} <br />";


$sql6 = "SELECT * FROM sun WHERE (date LIKE '$sunset_date')";

	$sunrise = $base->query($sql6);

	while($sunrise_sunset = $sunrise->fetch_assoc()) {
		echo "Wschód słońca: <b>{$sunrise_sunset['sunrise']}</b><br />";
		echo "Zachód słońca: <b>{$sunrise_sunset['sunset']}</b><br />";
	}
	

$time_int = (strtotime(date("H:i:s",$timenow)))*1000;

	
$sql = "SELECT * FROM inwerter WHERE id = (SELECT max(id) FROM inwerter WHERE data = '{$date}')";

	$time_now = $base->query($sql);

	while($row_time_now = $time_now->fetch_assoc()) {
		$time_database = $row_time_now['x'];
	}

if (($time_int - $time_database) > 100000 ){
	echo "<h3>Aktualna produkcja: <b>0W</b>";
}
else {

	$time_now_2 = $base->query($sql);
	while($row_time_now_2 = $time_now_2->fetch_assoc()) {
		echo "<h3>Aktualna produkcja: <b>{$row_time_now_2['y']}W</b>";
	}
}

?>

<br /> <br />
<form method="post" id="calculator" class="col-md-3">

<?php
echo "<input type='date' name='callendar' value='{$date}' min='2023-02-02' max='{$date}'><br />";
?>

	<input name="searchbutton" id="button" type="submit" value="Wyszukaj" style="width: 100px;">
</form>

<?php
		
$teraz_data = $date;

if (isset($_POST['searchbutton'])) {

$teraz_data = $_POST["callendar"];
}

$sql2 = "SELECT * FROM inwerter WHERE id = (SELECT max(id) FROM inwerter WHERE data = '{$teraz_data}')";

	$time_now2 = $base->query($sql2);

	while($row_time_now2 = $time_now2->fetch_assoc()) {


		echo "{$teraz_data} zostało wyprodukowane: <b>{$row_time_now2['today']}kWh</b></h3><br />";

	}

$sql5 = "SELECT x, y FROM inwerter WHERE data = '{$teraz_data}'";
	$inverter = $base->query($sql5);

	while($row_inverter = mysqli_fetch_assoc($inverter)) {

		$inverter_table[] = $row_inverter;
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
