<form method="post">
  Wpisz ICAO lotniska
  <input name="searchtext" type="text" placeholder="np. EPKK" equired="required">
  <input name="searchbutton" id="button" type="submit" value="Wyszukaj">
</form>

<?php

include ('config.php');

if (isset($_POST['searchbutton'])) {

$airport = $_POST["searchtext"];

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
