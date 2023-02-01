<?php
require ('php/simple_html_dom.php');
  
$timenow = time ();

$date = (date("Y-m-d",$timenow));
echo $date;
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
		echo "Aktualna produkcja: {$row_time_now['now']}W<br />";
		echo "Dziś zostało wyprodukowane: {$row_time_now['today']}kWh<br />";

	}
}

?>