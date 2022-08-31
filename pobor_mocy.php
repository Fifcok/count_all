<!DOCTYPE HTML>
<html lang="pl-PL">

<head>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js'></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/my_css.css">
	<script src="js/pobor_mocy.js"></script>
	<title>countALL Prąd - pobór mocy</title>
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
						<h3>Prąd - pobór mocy</h3>

						<div class="row" id="calc_form">
							Moc urządzenia [W]
							<input type="number" name="a" id="a" placeholder="np. 1500" required />
						</div>

						<div class="row" id="calc_form">
							Czas pracy
							<input type="number" name="b" id="b" placeholder="np. 15" required />
							<select id="c">
								<option value="sekundy">sekundy</option>
								<option value="minuty">minuty</option>
								<option value="godziny">godziny</option>
								<option value="dni">dni</option>
								<option value="lata">lata</option>
							</select>
						</div>


						<div class="row" id="calc_form">
							<button type="button" onclick="moc(this.innerHTML)" style="width: 100px;">Licz</button>
						</div>

						<div class="row" id="calc_form">
							<p name="wynik" id="wynik"></p>
							<h2>
								<p name="result" id="result"></p>
							</h2>
						</div>
					</form>

					<div class="col-md-9">

						Aby obliczyć, pobór mocy przez urządzenie w danym czasie należy wpisać moc urządzenai (podana w Watach [W]) oraz czas w jakim
						urządzenie będzie pracować (+ wybrać z listy).<br /> <br />

						Do obliczenia stosuje się następujące wzory:
						<ul>
							<li><b>Sekundy: (Moc urządzenia</b> / 3600) * <b>ilość sekund</b></li>
							<li><b>Miuty: (Moc urządzenia</b> / 60) * <b>ilość minut</b></li>
							<li><b>Godziny: Moc urządzenia</b> * <b>ilość godzin</b></li>
							<li><b>Dni: Moc urządzenia</b> * 24 * <b>ilość dni</b></li>
							<li><b>Lata: Moc urządzenia</b> * 8760 * <b>ilość lat</b></li>
						</ul>
						<br />
						<b>UWAGA!</b> Podane wyżej wyniki będą w Watach na godzinę [Wh], aby obliczyć kilowaty na godzinę [kWh] należy wynik podzielić przez 1000.

						<hr>

						<b>Przykład:</b><br /><br />
						Moc urządzenia: <b>1200 W</b><br />
						Czas pracy: <b>29 dni</b><br /><br />
						<b>1200 W</b> * 24 * <b>29</b> = 835000 W<br /><br />
						835000 W / 1000 = <b>835 KwH</b><br /><br />
						Naszym wynikiem jest pobór mocy równy <b>835 kWh</b> podczas pracy urządzenia o mocy 1200 W przez 29 dni.<br /><br /><br /><br />

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
