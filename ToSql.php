<?php
require ('php/simple_html_dom.php');


$timenow = time ();
$date = (date("Y-m-d",$timenow));
$time = (strtotime(date("H:i:s",$timenow)))*1000;


	include ('php/config.php');

include ('php/ZeverSolarInverter.php');
		
			$ip = '192.168.1.102';

			$zeverSolarInverter = new ZeverSolarInverter($ip);
	
			$inverter = $zeverSolarInverter->poll()['inverter'];

print_r($inverter);

				$i = $inverter['Pac'];
				$z = $inverter['TotalToday'];

				echo $i;
				echo $z;			
								
if ($i >=0 AND !empty($i)){

$base = new mysqli ($host2, $user, $password, $db);
	$base->set_charset("utf8");
	if ( $base->connect_error )
	die("MYSQL Error: ".$base->connect_error);
					
	$sql = "INSERT INTO inwerter VALUES (id, '$date', '$time', '$i','$z')";
	$sql2 = "UPDATE inwerter SET y = NULL WHERE y = ''";
	$sql3 = "UPDATE inwerter SET today = NULL WHERE today = ''";
	mysqli_query($base, $sql);
	mysqli_query($base, $sql2);
	mysqli_query($base, $sql3);
	mysqli_close($base);


	$base = new mysqli ($host, $user, $password, $db);
		$base->set_charset("utf8");
		if ( $base->connect_error )
		die("MYSQL Error: ".$base->connect_error);
						
		$sql = "INSERT INTO inwerter VALUES (id, '$date', '$time', '$i','$z')";
		$sql2 = "UPDATE inwerter SET y = NULL WHERE y = ''";
		$sql3 = "UPDATE inwerter SET today = NULL WHERE today = ''";
		mysqli_query($base, $sql);
		mysqli_query($base, $sql2);
		mysqli_query($base, $sql3);
		mysqli_close($base);
}

?>


