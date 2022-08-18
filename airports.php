<!DOCTYPE HTML>
<html lang="pl-PL">

<head>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js'></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/my_css.css">
	<script src="js/script.js"></script>
	<title>countALL Fuel</title>
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
							Wybierz ICAO lotniska
						</div>

						<div class="row" id="calc_form">
							<input onfocus="this.value=''" class="form-control" list="ICAOs" name="ICAOs" id="typ" placeholder="Wpisz ICAO, żeby wyszukać...">
							<datalist id="ICAOs">

								<?php

					    include ('php/config.php');

					    $base = new mysqli ($host, $user, $password, $db);
					    $base->set_charset("utf8");
					    if ( $base->connect_error )
					    die("MYSQL Error: ".$base->connect_error);

							$airport = $_POST["ICAOs"];

					    $airports_ICAO_sql = "SELECT * FROM airports";
					    $airports_ICAO = $base->query($airports_ICAO_sql);

							$airports_sql = "SELECT * FROM airports WHERE (ICAO LIKE '%$airport')";
							$airports = $base->query($airports_sql);

							$runways_sql = "SELECT * FROM runways WHERE (ICAO LIKE '%$airport')";
							$runways = $base->query($runways_sql);

							$freq_sql = "SELECT * FROM freq WHERE (ICAO LIKE '%$airport')";
							$freq = $base->query($freq_sql);



					    if (!$airports_ICAO){
					    die("MYSQL Error: error");
					    }

					    while($row_ICAO = $airports_ICAO->fetch_assoc()) {

					    	echo "<option value='{$row_ICAO['ICAO']}'></option>";
					    	}

					    echo "</datalist>";


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

						echo "<table style='text-align: center; width: 100%; border: 1px solid; border-collapse: collapse;'><tr><th>ICAO</th><th>Town</th><th>Name</th><th>Elevation</th></tr>";
						if (!$airports){
						die("MYSQL Error: error");
						}

						while($row_airports = $airports->fetch_assoc()) {

							echo "<tr style='text-align: center;'><td>{$row_airports['ICAO']}</td><td>{$row_airports['town']}</td><td>{$row_airports['name']}</td><td>{$row_airports['elevation']} ft</td></tr>";

							$latitude = $row_airports['latitude'];
							$longitude = $row_airports['longitude'];

							}

						echo "</table>";
						}
						}
						?>

						<br />

						<?php
						if (isset($_POST['searchbutton'])) {
						if (mysqli_num_rows($runways) != 0) {

						  echo "<table style='text-align: center; width: 100%; border: 1px solid; border-collapse: collapse;'><tr><th>Pasy</th><th>True HDG</th><th>Wysokości progów</th><th>Długość</th><th>Szerokość</th></tr>";
						if ( !$runways ){
						die("MYSQL Error: error");
						}

						while($row_runways = $runways->fetch_assoc() ) {

						  echo "<tr style='text-align: center;'><td>{$row_runways['rwy1']} / {$row_runways['rwy2']}</td><td>{$row_runways['rwy1_hdg']} / {$row_runways['rwy2_hdg']}</td><td>{$row_runways['rwy1_elevation']} / {$row_runways['rwy2_elevation']}ft</td><td>{$row_runways['lenght']}ft</td><td>{$row_runways['width']}ft</td></tr>";
							}

						echo "</table>";
						}
						}
						?>

						<br />

						<?php
						if (isset($_POST['searchbutton'])) {

						if (mysqli_num_rows($freq) != 0) {

						  echo "<table style='text-align: center; width: 100%; border: 1px solid; border-collapse: collapse;'><tr><th>Typ</th><th>Opis</th><th>Częstotliwość</th></tr>";
						if ( !$freq ){
						die("MYSQL Error: error");
						}

						while($row_freq = $freq->fetch_assoc() ) {

						  echo "<tr style='text-align: center;'><td>{$row_freq['type']}</td><td>{$row_freq['description']}</td><td>{$row_freq['mhz']} MHz</td></tr>";
							}

						echo "</table>";
						}
						}
						?>

						<br />

						<?php
						if (isset($_POST['searchbutton'])) {
							if (mysqli_num_rows($airports) != 0){

							echo "<iframe style='pointer-events: none; border-radius: 5px;' src='https://metar-taf.com/embed/{$airport}?bg_color=0057a3&layout=landscape'
						frameBorder='0' width='100%' height='255' scrolling='no'></iframe>";
						}
						}
						?>

						<br />

						<?php

						if (isset($_POST['searchbutton'])) {
							if (mysqli_num_rows($airports) != 0){
								echo "$latitude, $longitude ";
								echo "<a href='https://skyvector.com/?ll={$latitude},{$longitude}&chart=301&zoom=2' target='blank'>SkyVector</a>";
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
