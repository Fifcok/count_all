<?php
include ('php/config.php');

$date = date("d.m");
$date2 = date("d.m.Y");

$base = new mysqli ($host, $user, $password, $db);
$base->set_charset("utf8");
if ( $base->connect_error )
die("MYSQL Error: ".$base->connect_error);

$swieta_sql = "SELECT opis FROM swieta WHERE data LIKE '$date'";
$swieta = $base->query($swieta_sql);

$row = $swieta->fetch_assoc();

echo "<div class='row'><p class='text-center'><b>Dziś mamy {$date2}</b></p><p class='text-center' style='font-style: italic;''>{$row['opis']}</p></div>";
?>
