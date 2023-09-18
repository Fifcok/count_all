<!DOCTYPE HTML>
<html lang="pl-PL">

<head>
	<link rel="stylesheet" href="./style_board.css">
	<script src="https://kit.fontawesome.com/dd348bbd0a.js" crossorigin="anonymous"></script>
   	<link href="https://fonts.googleapis.com/css?family=Fira+Sans&display=swap" rel="stylesheet">
	<meta charset="utf-8">
</head>

<body>

<?php

// Utwórz obiekt cURL
$curl = curl_init();

// Ustaw nagłówek autoryzacji
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    'Authorization: Bearer TKY_uXdIZR0PAQ9oAiY7TtF6AfOVrG1i5L'
));

// Wykonaj żądanie HTTP
curl_setopt($curl, CURLOPT_URL, 'https://newsky.app/api/airline-api/flights/ongoing');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);

// Przeanalizuj odpowiedź
$data = json_decode($response, true);

// Zamknij obiekt cURL
curl_close($curl);

//wypisz ile jest lotów
$total = $data['totalResults'];
//echo "Aktualnie lotów: <b>" . $total . "</b><br /><br />";

//print_r ($data);
//numer ID - pierwszy
$number = 1;

//tutaj zaczyna się wyświetlanie tablicy
if ($total > 0) { 
for ($x=0; $x<$total; $x++){
	echo "<div class='departure-board'>";
			
        //wyświetl TKY
        $line_name = $data['results'][$x]['airline']['icao'];
        $table_line_name = [];
        for ($i_line_name = 0; $i_line_name < strlen($line_name); $i_line_name++) {
            $table_line_name[] = ["letter_line_name" => $line_name[$i_line_name],];
            echo "<span class='letter letter-".$table_line_name[$i_line_name]['letter_line_name']."'></span>";
        }
        
        //wyświetl numer lotu
        $flight_number = $data['results'][$x]['flightNumber'];
        $table_flight_number = [];

        for ($i_flight_number = 0; $i_flight_number < 4; $i_flight_number++) {
            $table_flight_number[] = ["letter_flight_number" => $flight_number[$i_flight_number],];

			$if_empty_flight_number = $flight_number[$i_flight_number];
			if (!empty($if_empty_flight_number)){
				echo "<span class='letter letter-".$table_flight_number[$i_flight_number]['letter_flight_number']."'></span>";
			}
			else {
				if ($if_empty_flight_number == "0") {
					echo "<span class='letter letter-".$table_flight_number[$i_flight_number]['letter_flight_number']."'></span>";
				}
				else {
					echo "<span class='letter letter-blank'></span>";
				}
			}
        }
		echo "&nbsp;&nbsp;";

        //wyświetl icao samolotu - już podzielone na literki
        $aircraft_icao = $data['results'][$x]['aircraft']['airframe']['icao'];
        $table_aircraft_icao = [];
        for ($i_aircraft_icao = 0; $i_aircraft_icao < strlen($aircraft_icao); $i_aircraft_icao++) {
            $table_aircraft_icao[] = ["letter_aircraft_icao" => $aircraft_icao[$i_aircraft_icao],];
			echo "<span class='letter letter-".$table_aircraft_icao[$i_aircraft_icao]['letter_aircraft_icao']."'></span>";
        }
		echo "&nbsp;&nbsp;";		

		//wyświetl czas odlotu
        $time_dep = $data['results'][$x]['depTimeAct'];
        $dateTime = new DateTime($time_dep);
        $hour = $dateTime->format("H");
        $minute = $dateTime->format("i");
 
		//godzina
		$table_hour = [];
		for ($i_dep_hour = 0; $i_dep_hour < strlen($hour); $i_dep_hour++) {
            $table_hour[] = ["letter_hour" => $hour[$i_dep_hour],];
			echo "<span class='letter letter-".$hour[$i_dep_hour]['letter_hour']."'></span>";
		}
		echo "<b style='font-size: 23px;'>:</b>";
		//minuta
		$table_minute = [];
		for ($i_dep_minute = 0; $i_dep_minute < strlen($minute); $i_dep_minute++) {
            $table_minute[] = ["letter_minute" => $minute[$i_dep_minute],];
			echo "<span class='letter letter-".$minute[$i_dep_minute]['letter_minute']."'></span>";
		}
		echo "&nbsp;&nbsp;";

		//wyświetl icao lotniska startu
		$dep_icao = $data['results'][$x]['dep']['icao'];
     		$table_dep_icao = [];
        for ($i_dep_icao = 0; $i_dep_icao < strlen($dep_icao); $i_dep_icao++) {
            $table_dep_icao[] = ["letter_dep_icao" => $dep_icao[$i_dep_icao],];
			echo "<span class='letter letter-".$dep_icao[$i_dep_icao]['letter_dep_icao']."'></span>";
		}
		echo "&nbsp;&nbsp;";

		//wyświetl lotnisko docelowe
        $arr_icao = $data['results'][$x]['arr']['icao'];
		$table_arr_icao = [];
		for ($i_arr_icao = 0; $i_arr_icao < strlen($arr_icao); $i_arr_icao++) {
            $table_arr_icao[] = ["letter_arr_icao" => $arr_icao[$i_arr_icao],];
			echo "<span class='letter letter-".$arr_icao[$i_arr_icao]['letter_arr_icao']."'></span>";
		}
		echo "&nbsp;&nbsp;";
		
		
        //wyświetl nazwę pilota
        $pilot_name = $data['results'][$x]['pilot']['fullname'];
        $table_pilot_name = [];
		for ($i_pilot_name = 0; $i_pilot_name < 18; $i_pilot_name++) {
            $table_pilot_name[] = ["letter_pilot_name" => $pilot_name[$i_pilot_name],];

			$if_empty_pilot_name = $pilot_name[$i_pilot_name];
			if ($if_empty_pilot_name == " " || $if_empty_pilot_name == ""){
				echo "<span class='letter letter-blank'></span>";
			}
			else {
				$upper_name = $table_pilot_name[$i_pilot_name]['letter_pilot_name'];
				$upper_name1 = strtoupper($upper_name);
				echo "<span class='letter letter-".$upper_name1."'></span>";
			}
		}
		echo "</div><br />";
    }
}
else {
	echo "<div class='departure-board'>";
	$no_flights = "THERE ARE CURRENTLY NO FLIGHTS";
	$table_no_flights = [];
	for ($i_no_flights = 0; $i_no_flights < strlen($no_flights); $i_no_flights++) {
		$table_no_flights[] = ["letter_no_flights" => $no_flights[$i_no_flights],];
		echo "<span class='letter letter-".$table_no_flights[$i_no_flights]['letter_no_flights']."'></span>";
	}
	echo "</div>";
}
?>
</body>

</html>