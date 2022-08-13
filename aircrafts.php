<!DOCTYPE HTML>
<html lang="pl-PL">

<head>
	<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css' rel='stylesheet'>
	<script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js'></script>
	<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js' integrity='sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT' crossorigin='anonymous'></script>
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
							<select type="text" name="typ" id="typ">
								<optgroup label="Boeing">
									<option value="B738">B738</option>
								</optgroup>
								<optgroup label="Airbus">
									<option value="A320">A320</option>
									<option value="A321">A321</option>
								</optgroup>
							</select>
						</div>

						<div class="row" id="calc_form">
							<button type="button" onclick="aircraft(this.innerHTML)" style="width: 100px;">Pokaż</button>
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
