<?php
require ('php/simple_html_dom.php');
  
$timenow = time ();

$date = (date("Y-m-d",$timenow));
$time = (date("H:s:m",$timenow));
echo $date;
echo "<br />";
echo $time;
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
		echo "Aktualna produkcja: {$row_time_now['y']}W<br />";
		echo "Dziś zostało wyprodukowane: {$row_time_now['today']}kWh<br />";

	}
}


$sql5 = "SELECT x, y FROM inwerter WHERE data = '{$date}'";
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
