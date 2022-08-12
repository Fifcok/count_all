<!DOCTYPE HTML>
<html lang="pl-PL">

<head>
	<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css' rel='stylesheet'>
	<script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js'></script>
	<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js' integrity='sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT' crossorigin='anonymous'></script>
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
					<form id="calculator" class="col-md-3">
						<h3>Przelicznik paliwa Jet A</h3>
						<div class="row" id="calc_form">
							Przeliczana wartość
							<input type="number" name="a" id="a" placeholder="Wpisz wartość" required />
						</div>

						<div class="row" id="calc_form">
							<select type="text" name="rodzaj" id="rodzaj">
								<option value="Kilogramów">Kilogramów</option>
								<option value="Galonów_US">Galonów US</option>
								<option value="Litrów">Litrów</option>
								<option value="Ton">Ton</option>
								<option value="Funtów">Funtów (lbs)</option>
								<option value="Galonów_imperialnych">Galonów imperialnych</option>
							</select>
						</div>

						<div class="row" id="calc_form">
							<button type="button" onclick="paliwo(this.innerHTML)" style="width: 100px;">Licz</button>
						</div>

						<div class="row" id="calc_form">
							<b>
								<p name="result" id="galony_US"></p>
								<p name="result" id="litry"></p>
								<p name="result" id="funty"></p>
								<p name="result" id="kilogramy"></p>
								<p name="result" id="tony"></p>
								<p name="result" id="galony_imperialne"></p>
							</b>
						</div>
					</form>

					<br /><br /><br /><br />

					<div class="col-md-9">
						Paliwo jako, że ma mniejsza gęstość niż na przykład woda, nie może być przeliczane w stosunku 1:1 na kilogramy.<br />
						Przelicznik na inne jesdnostki może byc przydatny, gdy w samoloce zastosowane inne jednostki niż na przykład przy generowaniu planu lotu<br /><br />
						Stosując odpowiednie współczynniki łatwo można przeliczyć ciężar paliwa <b>Jet A</b> z każdej jednostki na każdą:
						<ul>
							<li>kilogramy,</li>
							<li>galony US,</li>
							<li>litry,</li>
							<li>tony,</li>
							<li>funty (lbs),</li>
							<li>galony imperialne.</li>
						</ul>
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
