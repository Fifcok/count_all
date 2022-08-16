<!DOCTYPE HTML>
<html lang="pl-PL">

<head>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js'></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/my_css.css">
	<script src="js/script.js"></script>
	<script src="js/aircrafts.js"></script>
	<title>countALL Aircrafts</title>
	<link rel="icon" type="image/x-icon" href="img/favicon.ico">
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6199309078483888" crossorigin="anonymous"></script>
</head>

<form method="post">

  <input class="form-control" list="ICAOs" name="ICAOs" id="typ" placeholder="Wpisz ICAO, żeby wyszukać...">
  <datalist id="ICAOs">

    <?php

    include ('php/config.php');

    $base = new mysqli ($host, $user, $password, $db);
    $base->set_charset("utf8");
    if ( $base->connect_error )
    die("MYSQL Error: ".$base->connect_error);

    $sql0 = "SELECT * FROM airports";

    $result0 = $base->query($sql0);

    if (mysqli_num_rows($result0) == 0) {
       echo "<script type='text/javascript'>alert('Nie znaleziono lotniska')</script>";
    } else {

    if ( !$result0 ){
    die("MYSQL Error: error");
    }

    while($row0 = $result0->fetch_assoc() ) {

    	echo "<option value='{$row0['ICAO']}'></option>";
    	}

    echo "</datalist>";
    }

    ?>


      <input name="searchbutton" id="button" type="submit" value="Wyszukaj">
</form>


<?php



include ('php/config.php');

if (isset($_POST['searchbutton'])) {

$airport = $_POST["ICAOs"];

if (!empty($airport)){

$base = new mysqli ($host, $user, $password, $db);
$base->set_charset("utf8");
if ( $base->connect_error )
die("MYSQL Error: ".$base->connect_error);

$sql = "SELECT * FROM airports WHERE (ICAO LIKE '%$airport')";

$result = $base->query($sql);

if (mysqli_num_rows($result) == 0) {
   echo "<script type='text/javascript'>alert('Nie znaleziono lotniska')</script>";
} else {

echo "<table style='width: 700px; border: 1px solid; border-collapse: collapse;'><tr><th>ICAO</th><th>Town</th><th>Name</th><th>Elevation</th></tr>";
if ( !$result ){
die("MYSQL Error: error");
}

while($row = $result->fetch_assoc() ) {

	echo "<tr style='text-align: center;'><td>{$row['ICAO']}</td><td>{$row['town']}</td><td>{$row['name']}</td><td>{$row['elevation']} ft</td></tr>";
	}

echo "</table>";
}
}
}
?>

<br />

<?php

include ('php/config.php');

if (isset($_POST['searchbutton'])) {

$airport = $_POST["ICAOs"];

if (!empty($airport)){

$base = new mysqli ($host, $user, $password, $db);
$base->set_charset("utf8");
if ( $base->connect_error )
die("MYSQL Error: ".$base->connect_error);

$sql2 = "SELECT * FROM runways WHERE (ICAO LIKE '%$airport')";

$result2 = $base->query($sql2);

if (mysqli_num_rows($result2) == 0) {
   echo "<script type='text/javascript'>alert('Nie znaleziono lotniska')</script>";
} else {

  echo "<table style='width: 700px; border: 1px solid; border-collapse: collapse;'><tr><th>Pasy</th><th>HDG</th><th>Wysokości progów</th><th>Długość</th><th>Szerokość</th></tr>";
if ( !$result2 ){
die("MYSQL Error: error");
}

while($row2 = $result2->fetch_assoc() ) {

  echo "<tr style='text-align: center;'><td>{$row2['rwy1']} / {$row2['rwy2']}</td><td>{$row2['rwy1_hdg']} / {$row2['rwy2_hdg']}</td><td>{$row2['rwy1_elevation']} / {$row2['rwy2_elevation']}ft</td><td>{$row2['lenght']}ft</td><td>{$row2['width']}ft</td></tr>";
	}

echo "</table>";
}
}
}
?>

<br />

<?php

include ('php/config.php');

if (isset($_POST['searchbutton'])) {

$airport = $_POST["ICAOs"];

if (!empty($airport)){

$base = new mysqli ($host, $user, $password, $db);
$base->set_charset("utf8");
if ( $base->connect_error )
die("MYSQL Error: ".$base->connect_error);

$sql3 = "SELECT * FROM freq WHERE (ICAO LIKE '%$airport')";

$result3 = $base->query($sql3);

if (mysqli_num_rows($result3) == 0) {
   echo "<script type='text/javascript'>alert('Nie znaleziono lotniska')</script>";
} else {

  echo "<table style='width: 700px; border: 1px solid; border-collapse: collapse;'><tr><th>Typ</th><th>Opis</th><th>Częstotliwość</th></tr>";
if ( !$result3 ){
die("MYSQL Error: error");
}

while($row3 = $result3->fetch_assoc() ) {

  echo "<tr style='text-align: center;'><td>{$row3['type']}</td><td>{$row3['description']}</td><td>{$row3['mhz']} MHz</td></tr>";
	}

echo "</table>";
}
}
}
?>
