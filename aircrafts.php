<!DOCTYPE HTML>
<html lang="pl-PL">

<head>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js'></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/my_css.css">
	<script src="js/script.js"></script>
	<script src="js/aircrafts.js"></script>
	<title>countALL Aircrafts</title>
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
					<form id="calculator" class="col-md-3">
						<h3>Dane techniczne samolotów</h3>
						<div class="row" id="calc_form">
							Wybierz typ samolotu
						</div>

						<div class="row" id="calc_form">
							<input class="form-control" list="datalistOptions" id="typ" placeholder="Wpisz, żeby wyszukać...">
							<datalist id="datalistOptions">
								<!--Boeing-->
									<option value="B703">B707-320B</option>
									<option value="B712">B717-200HGW</option>
									<option value="B722">B727-200ADV</option>
									<option value="B37M">B737 MAX 7</option>
									<option value="B38M">B737 MAX 8</option>
									<option value="B39M">B737 MAX 9</option>
									<option value="B3XM">B737 MAX 10</option>
									<option value="B732">B737-200</option>
									<option value="B733">B737-300</option>
									<option value="B734">B737-400</option>
									<option value="B735">B737-500</option>
									<option value="B736">B737-600</option>
									<option value="B737">B737-700</option>
									<option value="B738">B737-800</option>
									<option value="B739">B737-900</option>
									<option value="B744">B747-400</option>
									<option value="B748">B747-800</option>
									<option value="B752">B757-200</option>
									<option value="B753">B757-300</option>
									<option value="B762">B767-200</option>
									<option value="B763">B767-300</option>
									<option value="B764">B767-400</option>
									<option value="B772">B777-200</option>
									<option value="B77L">B777-200LR</option>
									<option value="B773">B777-300</option>
									<option value="B778">B777-8</option>
									<option value="B779">B777-9</option>
									<option value="B788">B787-8</option>
									<option value="B789">B787-9</option>
									<option value="B78X">B787-10</option>
								<!--Airbus-->
									<option value="A221">A220-100</option>
									<option value="A223">A220-300</option>
									<option value="A306">A300-600</option>
									<option value="A313">A310-300</option>
									<option value="A318">A318</option>
									<option value="A319">A319</option>
									<option value="A19N">A319-NEO</option>
									<option value="A320">A320-200</option>
									<option value="A20N">A320-NEO</option>
									<option value="A321">A321-200</option>
									<option value="A21N">A321-NEO</option>
									<option value="A332">A330-200</option>
									<option value="A333">A330-300</option>
									<option value="A338">A330-800 NEO</option>
									<option value="A339">A330-900 NEO</option>
									<option value="A342">A340-200</option>
									<option value="A343">A340-300X</option>
									<option value="A345">A340-500</option>
									<option value="A346">A340-600</option>
									<option value="A358">A350-800</option>
									<option value="A359">A350-900</option>
									<option value="A35K">A350-1000</option>
									<option value="A388">A380-800</option>
								<!--Embrayer-->
									<option value="E170">E170</option>
									<option value="E175">E175</option>
									<option value="E190">E190</option>
									<option value="E195">E195</option>
								<!--McDonnel Douglas-->
									<option value="DC10">DC-10-30</option>
									<option value="DC91">DC-9-30</option>
									<option value="MD11">MD-11</option>
								<!--Comac-->
									<option value="AJ27">ARJ21-700</option>
									<option value="AJ29">ARJ21-900</option>
								<!--Sukhoi-->
									<option value="SU1">SSJ-100-90</option>
								<!--Lockheed-->
									<option value="L101">L-1011 TriStar 500</option>
							</datalist>

						</div>

						<div class="row" id="calc_form">
							<input type="button" onclick="aircraft(this.innerHTML)" value="Pokaż" style="width: 100px;">
						</div>

						<div class="row" id="calc_form">
							<p class="bold one_line" name="result" id="dlugosc"></p>
							<p class="one_line" name="result" id="dlugosc_value"></p>
							<p class="bold one_line" name="result" id="szerokosc"></p>
							<p class="one_line" name="result" id="szerokosc_value"></p>
							<p class="bold one_line" name="result" id="wysokosc"></p>
							<p class="one_line" name="result" id="wysokosc_value"></p>
							<p class="bold one_line" name="result" id="silniki"></p>
							<p class="one_line" name="result" id="silniki_value"></p>
							<p class="bold one_line" name="result" id="mtow"></p>
							<p class="one_line" name="result" id="mtow_value"></p>
							<p class="bold one_line" name="result" id="zasieg"></p>
							<p class="one_line" name="result" id="zasieg_value"></p>
							<p class="bold one_line" name="result" id="predkosc"></p>
							<p class="one_line" name="result" id="predkosc_value"></p>
							<p class="bold one_line" name="result" id="pasazerowie"></p>
							<p class="one_line" name="result" id="pasazerowie_value"></p>
							<br /><br /><br /><br />
						</div>
					</form>

					<br /><br /><br /><br />

					<div class="col-md-9">

						<img id="foto" class='col-md-12' style="border-radius: 5%;" src="">

						<br /><br />
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
