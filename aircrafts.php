<!DOCTYPE HTML>
<html lang="pl-PL">

<head>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js'></script>
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
									<option value="B703">B707-320B (B703)</option>
									<option value="B712">B717-200HGW (B712)</option>
									<option value="B722">B727-200ADV (B722)</option>
									<option value="B37M">B737 MAX 7 (B37M)</option>
									<option value="B38M">B737 MAX 8 (B38M)</option>
									<option value="B39M">B737 MAX 9 (B39M)</option>
									<option value="B3XM">B737 MAX 10 (B3XM)</option>
									<option value="B732">B737-200 (B732)</option>
									<option value="B733">B737-300 (B733)</option>
									<option value="B734">B737-400 (B734)</option>
									<option value="B735">B737-500 (B735)</option>
									<option value="B736">B737-600 (B736)</option>
									<option value="B737">B737-700 (B737)</option>
									<option value="B738">B737-800 (B738)</option>
									<option value="B739">B737-900 (B739)</option>
									<option value="B744">B747-400 (B744)</option>
									<option value="B748">B747-800 (B748)</option>
									<option value="B752">B757-200 (B752)</option>
									<option value="B753">B757-300 (B753)</option>
									<option value="B762">B767-200 (B762)</option>
									<option value="B763">B767-300 (B763)</option>
									<option value="B764">B767-400 (B764)</option>
									<option value="B772">B777-200 (B772)</option>
									<option value="B77L">B777-200LR (B77L)</option>
									<option value="B773">B777-300 (B773)</option>
									<option value="B778">B777-8 (B778)</option>
									<option value="B779">B777-9 (B779)</option>
									<option value="B788">B787-8 (B788)</option>
									<option value="B789">B787-9 (B789)</option>
									<option value="B78X">B787-10 (B78X)</option>
								<!--Airbus-->
									<option value="A221">A220-100 (A221)</option>
									<option value="A223">A220-300 (A223)</option>
									<option value="A306">A300-600 (A306)</option>
									<option value="A313">A310-300 (A313)</option>
									<option value="A318">A318 (A318)</option>
									<option value="A319">A319 (A319)</option>
									<option value="A19N">A319-NEO (A19N)</option>
									<option value="A320">A320-200 (A320)</option>
									<option value="A20N">A320-NEO (A20N)</option>
									<option value="A321">A321-200 (A321)</option>
									<option value="A21N">A321-NEO (A21N)</option>
									<option value="A332">A330-200 (A332)</option>
									<option value="A333">A330-300 (A333)</option>
									<option value="A338">A330-800 NEO (A338)</option>
									<option value="A339">A330-900 NEO (A339)</option>
									<option value="A342">A340-200 (A342)</option>
									<option value="A343">A340-300X (A343)</option>
									<option value="A345">A340-500 (A345)</option>
									<option value="A346">A340-600 (A346)</option>
									<option value="A358">A350-800 (A358)</option>
									<option value="A359">A350-900 (A359)</option>
									<option value="A35K">A350-1000 (A35K)</option>
									<option value="A388">A380-800 (A388)</option>
								<!--Embrayer-->
									<option value="E170">E170 (E170)</option>
									<option value="E175">E175 (E175)</option>
									<option value="E190">E190 (E190)</option>
									<option value="E195">E195 (E195)</option>
								<!--McDonnel Douglas-->
									<option value="DC10">DC-10-30 (DC10)</option>
									<option value="DC91">DC-9-30 (DC91)</option>
									<option value="MD11">MD-11 (MD11)</option>
								<!--Comac-->
									<option value="AJ27">ARJ21-700 (AJ27)</option>
									<option value="AJ29">ARJ21-900 (AJ29)</option>
								<!--Sukhoi-->
									<option value="SU1">SSJ-100-90 (SU1)</option>
								<!--Lockheed-->
									<option value="L101">L-1011 TriStar 500 (L101)</option>
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
