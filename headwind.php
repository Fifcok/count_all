<!DOCTYPE HTML>
<html lang="pl-PL">
<head>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js'></script>
	<link rel="stylesheet" href="css/my_css.css">
	<script src="js/script.js"></script>
	<title>countALL Headwind</title>
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
						<h3>Head / Tail wind</h3>
						<div class="row" id="calc_form">
							Kierunek pasa [°]
							<input type="number" name="a" id="a" min="0" max="360" placeholder="HDG pasa" required />
						</div>

						<div class="row" id="calc_form">
							Kierunek wiatru [°]
							<input type="number" name="b" id="b" min="0" max="360" placeholder="Kierunek wiatru" oninvalid="setCustomValidity('Proszę wypełnić pole!')" required />
						</div>

						<div class="row" id="calc_form">
							Wiatr [knots]
							<input type="number" name="c" id="c" min="0" placeholder="Siła wiatru" required />
						</div>

						<div class="row" id="calc_form">
							<button type="button" onclick="headwindcalc(this.innerHTML)" style="width: 100px;">Licz</button>
						</div>

						<div class="row" id="calc_form">
							<p name="wynik" id="wynik"></p>
							<h2>
								<p name="result" id="result"></p>
							</h2>
						</div>
					</form>

					<div class="col-md-9">
						<b>Headwind / Tailwind</b> potrzebny do startu samolotu obliczany jest w bardzo prosty sposób. <br />
						W zależności, która wartość w stopniach jest większa, od tej odejmuje się tę mniejszą. Następnie obliczany jest cosinus tego kąta. Następnie wynik z cosinusa kąta mnożony jest przez siłę wiatru. <br /><br />
						<b>UWAGA!</b> Jeśli różnica w kierunku wiatru i pasa wynosi 90° to HD jest równe 0. <br /><br />
						<u>Informacje na temat HDG pasa znajdują się w Chartach.</u><br /><br />
						<img class="col-md-12" src="img/headwind_HDG.png" alt="EPKK Charts">
						<u>Kierunek oraz siłę wiatru odczytujemy z METAR'u.</u><br /><br />
						EPKK 151000Z <b>24006KT</b> 6000 -SHRA FEW003 SCT006 BKN010CB 11/10 Q1019<br /><br />
						<b>Kierunek 240°, siła 06 knots</b><br /><br />
						Aby stwierdzić, czy wiatr jest TL (tailwind), czy HD (headwind) należy zwrócić uwagę na wynik różnicy kątów. <br />
						<ul>
							<li>HD - kąt &lt; 90°</li>
							<li>TL - kąt &gt; 90°</li>
							<li>HD/TL = 0 - kąt = 90°</li>
						</ul>

						<hr>
						<b>Przykład:</b><br /><br />
						Kierunek pasa: <b>230°</b><br />
						Kierunek wiatru: <b>195°</b><br />
						Siła wiatru: <b>8 knots</b><br /><br />
						<b>230°</b> - <b>195°</b> = 35°<br /><br />
						Tutaj już wiemy, że nasz wiatr będzie <b>HD</b> ponieważ jest mniejszy niż 90°<br /><br />
						cos (35°) = 0.8192<br /><br />
						Cosinusa sprawdzamy w tablicach trygonometrycznych, na przykład <a class="link_my" href="https://www.matemaks.pl/tablice-wartosci-funkcji-trygonometrycznych-dla-katow-ostrych.html" target="_blank">tutaj</a>.<br /><br />
						Następnie mnożymy siłę wiatru przez wynik cosinusa naszego kąta<br /><br />
						<b>8 knots</b> * 0.8192 = 6.5535<br /><br />
						Naszym wynikiem jest <b>HD6.55</b><br /><br /><br /><br />
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
