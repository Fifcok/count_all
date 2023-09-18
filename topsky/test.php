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
echo "<div class='departure-board'>";

        $no_flights = "THERE ARE CURRENTLY NO FLIGHTS";
        $table_no_flights = [];
		for ($i_no_flights = 0; $i_no_flights < strlen($no_flights); $i_no_flights++) {
            $table_no_flights[] = ["letter_no_flights" => $no_flights[$i_no_flights],];
            echo "<span class='letter letter-".$table_no_flights[$i_no_flights]['letter_no_flights']."'></span>";
        }
        echo "</div><br />";
?>
</body>

</html>