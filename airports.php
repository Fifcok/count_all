<!DOCTYPE HTML>
<html lang="pl-PL">

<head>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js'></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/my_css.css">
	<script src="js/script.js"></script>
	<title>countALL Airports</title>
	<link rel="icon" type="image/x-icon" href="img/favicon.ico">
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6199309078483888" crossorigin="anonymous"></script>
</head>

<body class="body_my">
	<div class="wrapper container wrapper_container_my">
		<div class="row">
			<?php
				include('php/logo.php');
			?>
			<div class="col-md-10 d-flex flex-row-reverse">
				<?php
						include('php/nav.php');
					?>
			</div>
		</div>

		<div class="row">
			<div class="col-md-10">
				<div class="row">
					<form method="post" id="calculator" class="col-md-3">
						<h3>Lotniska</h3>

						<div class="row" id="calc_form">
							<input onfocus="this.value=''" type="text" class="form-control" name="ICAOs" id="typ" placeholder="Wpisz ICAO, żeby wyszukać...">
							
							<script type="text/javascript">
								$(function() {
									$( "#typ" ).autocomplete({
									source: '../php/ajax-db-search.php',
									});
								});
							</script>

								<?php

					    include ('php/config.php');
							require ('php/simple_html_dom.php');

					    $base = new mysqli ($host, $user, $password, $db);
					    $base->set_charset("utf8");
					    if ( $base->connect_error )
					    die("MYSQL Error: ".$base->connect_error);

							if (isset($_POST["ICAOs"])){
								$airport = $_POST["ICAOs"];
							}

							$airports_ICAO_sql = "SELECT * FROM airports";
							$airports_ICAO = $base->query($airports_ICAO_sql);

							$airports_sql = "SELECT * FROM airports WHERE (ICAO LIKE '$airport')";
							$airports = $base->query($airports_sql);

							$runways_sql = "SELECT * FROM runways WHERE (ICAO LIKE '$airport')";
							$runways = $base->query($runways_sql);

							$freq_sql = "SELECT * FROM freq WHERE (ICAO LIKE '$airport')";
							$freq = $base->query($freq_sql);



					    if (!$airports_ICAO){
					    die("MYSQL Error: error");
					    }
					    ?>
						</diV>

						<div class="row" id="calc_form">
							<input name="searchbutton" id="button" type="submit" value="Wyszukaj" style="width: 100px;">
						</div>

					</form>

					<br /><br /><br /><br />

					<div class="col-md-9">

						<?php
						if (isset($_POST['searchbutton'])) {

						if (mysqli_num_rows($airports) == 0) {
						   echo "<script type='text/javascript'>alert('Nie znaleziono lotniska')</script>";
						} else {

						if (!$airports){
						die("MYSQL Error: error");
						}

						while($row_airports = $airports->fetch_assoc()) {
							echo "<h2>{$row_airports['ICAO']} - {$row_airports['name']}</h2>";
							echo "<h3>{$row_airports['town']}</h3>";

							$elevation_meters = $row_airports['elevation'] * "0.3048";
							$elevation_meters_round = round($elevation_meters, 0);
							echo "<b>Wysokość:</b> {$row_airports['elevation']} ft ({$elevation_meters_round} m) <br /><br />";

							$ch = curl_init("https://aviationweather.gov/adds/dataserver_current/httpparam?dataSource=metars&requestType=retrieve&format=xml&hoursBeforeNow=1&mostRecent=true&stationString={$airport}");
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

							echo "<p>{$array['data']['METAR']['raw_text']}</p>";
							$latitude = $row_airports['latitude'];
							$latitude_round = round($latitude, 4);
							$longitude = $row_airports['longitude'];
							$longitude_round = round($longitude, 4);

							echo "<b>Koordynaty:</b> {$latitude_round}, {$longitude_round} <br />";
							echo "<a href='https://skyvector.com/?ll={$row_airports['latitude']},{$row_airports['longitude']}&chart=301&zoom=2' target='blank' class='link_my'>SkyVector</a><br />";
							}
						}
						}
						?>

						<br />

						<?php
						if (isset($_POST['searchbutton'])) {
						if (mysqli_num_rows($runways) != 0) {
							echo "<div class='row'>";
							echo "<h3>Informacje o pasach</h3>";
						  echo "<table style='text-align: center; width: 100%;'><tr><th>Pasy</th><th>True HDG</th><th>Wysokości progów</th><th>Rozmiar pasa</th><th>Slope</th></tr>";
						if ( !$runways ){
						die("MYSQL Error: error");
						}

						while($row_runways = $runways->fetch_assoc() ) {

						$lenght	= $row_runways['lenght'] * "0.3048";
						$lenght_round = round($lenght, 0);
						$width	= $row_runways['width'] * "0.3048";
						$width_round = round($width, 0);

						$rwy1_elevation = $row_runways['rwy1_elevation'];
						$rwy2_elevation = $row_runways['rwy2_elevation'];
						$rwy_lenght = $row_runways['lenght'];

						$slope = (($rwy2_elevation - $rwy1_elevation) / $rwy_lenght) * "100";
						$slope_round = round($slope, 2);

						$slope2 = (($rwy1_elevation - $rwy2_elevation) / $rwy_lenght) * "100";
						$slope2_round = round($slope2, 2);

						  echo "<tr style='text-align: center;'><td>{$row_runways['rwy1']} / {$row_runways['rwy2']}</td><td>{$row_runways['rwy1_hdg']} / {$row_runways['rwy2_hdg']}</td><td>{$row_runways['rwy1_elevation']} / {$row_runways['rwy2_elevation']}ft</td><td>{$row_runways['lenght']} x {$row_runways['width']}ft ({$lenght_round} x {$width_round} m)</td><td>{$slope_round} / {$slope2_round}</td></tr>";
							}

						echo "</table>";
						echo "</div>";
						}
						}
						?>

						<?php
						if (isset($_POST['searchbutton'])) {
							if (mysqli_num_rows($airports) != 0){
								
							echo "<a href='https://metar-taf.com/{$airport}' target='_blank' id='metartaf-p9ufrdCe' style='background-color: #cdcdcd; margin-top: 10px; font-size:18px; font-weight:500; color:#000; width:100%; height:255px; display:block'>METAR Kraków John Paul II International Airport</a>";
							echo "<script async defer crossorigin='anonymous' src='https://metar-taf.com/embed-js/{$airport}?bg_color=cdcdcd&layout=landscape&target=p9ufrdCe'></script>";
						}
						}
						?>

						<?php
						if (isset($_POST['searchbutton'])) {

						if (mysqli_num_rows($freq) != 0) {
						echo "<h3>Radio</h3>";
						if ( !$freq ){
						die("MYSQL Error: error");
						}

						while($row_freq = $freq->fetch_assoc() ) {
							echo "<div class='row'>";
						  echo "<div class='col-md-1'><p><b>{$row_freq['type']}</b></p></div>";
							echo "<div class='col-md-3'><p style='margin-bottom: 0px;'>{$row_freq['mhz']} MHz</p><p style='margin-bottom: 10px; color: #cbcbcb; font-style: italic;'>{$row_freq['description']}</p></div>";
							echo "</div>";
							}

						echo "</table>";
						}
						}
						?>

						<br /><br /><br /><br />

					</div>
				</div>
			</div>

			<div class="col-md-2">
				<?php
						include('php/friends.php');
					?>
			</div>
		</div>
	</div>
	<?php
			include('php/footer.php');
		?>
</body>

</html>
