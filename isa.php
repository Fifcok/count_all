<!DOCTYPE HTML>
<html lang="pl-PL">

<head>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js'></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/my_css.css">
	<script src="js/script.js"></script>
	<title>countALL ISA / ISA DEV</title>
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
						<h3>ISA / ISA DEV</h3>
						<div class="row" id="calc_form">
							Wysokość lotniska lub samolotu [ft]
							<input type="number" name="a" id="a" placeholder="Wysokość lotniska / samolotu" required />
						</div>

						<div class="row" id="calc_form">
							Temperatura powietrza - OAT [°C]
							<input type="number" name="b" id="b" placeholder="Temperatura OAT" required />
						</div>

						<div class="row" id="calc_form">
							<button type="button" onclick="isa(this.innerHTML)" style="width: 100px;">Licz</button>
						</div>

						<div class="row" id="calc_form">
							<p name="wynik" id="wynik"></p>
							<h2>
								<p name="result1" id="result1"></p>
							</h2>
							<p name="wynik" id="wynik"></p>
							<h2>
								<p name="result2" id="result2"></p>
							</h2>
						</div>
					</form>

					<div class="col-md-9">
						<b>ISA</b>, czyli Międzynarodowa Atmosfera Standardowa (ISA) to statyczny model atmosfery przedstawiający zmiany ciśnienia,
						temperatury, gęstości i lepkości atmosfery ziemskiej w szerokim zakresie wysokości lub wzniesień.
						Zostało ustalone, aby zapewnić wspólne odniesienie do temperatury i ciśnienia i składa się z tabel wartości na różnych wysokościach oraz kilku wzorów,
						na podstawie których te wartości zostały wyprowadzone.<br /><br />
						<b>ISA DEV</b>, oznacza w skrócie odchylenie od temperatury standardowej (ISA) do temperatury powietrza (OAT) - podanej w [°C].<br /><br />
						<b>Dlaczego w lotnictwie ISA DEV jest obliczana?</b><br /><br />
						Temperatura może znacząco wpłynąć na działania Twojego samolotu – poprzez niepoprawne lub brak wprowadzenia danych temperatury możesz przekonać się, że samolot będzie zachowywał się tak,
						jakby był na znacznie większej / mniejszej wysokości. Podczas startu, przelotu, wznoszenia i lądowania należy wziąć pod uwagę odchylenie temperatury,
						a wykresy są zwykle zaprojektowane z uwzględnieniem temperatury ISA.<br /><br />
						<u>Temperaturę odczytujemy z METAR'u.</u><br /><br />
						EPKK 151000Z 24006KT 6000 -SHRA FEW003 SCT006 BKN010CB <b>11</b>/10 Q1019<br /><br />
						<b>UWAGA!</b> Odczytaną temperaturą ma być temperatura powietrza, NIE PUNKT ROSY.<br /><br />
						<u>Wysokość lotniska znajduje się w chartach.</u><br /><br />
						<img class="col-md-12" src="img/elevation.png" alt="EPKK Charts"><br /><br />
						<b>UWAGA!</b> Wysokością nie musi być elewacja lotniska, może to być również aktualna wysokość samolotu, np.: 36000 ft.<br /><br />

						<hr>

						<b>Przykład (EPKK):</b><br /><br />
						Wysokość lotniska: <b>791 ft</b><br />
						Temperatura zewnętrzna: <b>11°C</b><br /><br />
						<b>ISA</b><br />
						15 - ((<b>791 ft</b> / 1000) * 2) = 13.42°C<br /><br />
						<b>ISA DEV</b><br />
						<b>11°C</b> - 13.42°C = -2.42°C<br /><br />
						Naszym wynikiem jest <b>ISA 13.42°C</b><br />
						Naszym wynikiem jest <b>ISA DEV -2.42°C</b><br /><br /><br /><br />
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
