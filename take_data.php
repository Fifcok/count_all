<?php
require ('php/simple_html_dom.php');

$html = file_get_html ("https://www.aviationweather.gov/metar/data?ids=epkk");

echo $html->find("code",0)->innertext;

 ?>
