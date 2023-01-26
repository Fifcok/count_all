<?php
require ('php/simple_html_dom.php');
$html = file_get_html ("https://internetowykantor.pl/kurs-euro/");

for ($i = 0; $i <= 4; $i++) {

    echo $i;
echo ". ";

echo $html->find("span.bem-single-rate-box__item-rate",$i)->innertext;

echo "<br />";
}

?>
