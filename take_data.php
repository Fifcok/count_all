<?php
$ch = curl_init("https://aviationweather.gov/adds/dataserver_current/httpparam?dataSource=metars&requestType=retrieve&format=xml&hoursBeforeNow=1&mostRecent=true&stationString=EPKK");
/* set options */
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, 0);
/* execute request */
$output = curl_exec($ch);
/* close cURL resource */
curl_close($ch);

/* print output */
$xml = simplexml_load_string($output);
$json = json_encode($xml);
$array = json_decode($json,TRUE);

echo $array['data']['METAR']['raw_text'];
?>