<!DOCTYPE HTML>
<html lang="pl-PL">

<head>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js'></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/my_css.css">
	<script src="js/script.js"></script>
	<script src="js/speed.js"></script>
	<title>countALL km/h <-> knots</title>
	<link rel="icon" type="image/x-icon" href="img/favicon.ico">
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
						<h3>Przelicznik prędkości</h3>
						<div class="row" id="calc_form">
							Przeliczana wartość
							<input step="1" onfocus="this.value=''" type="number" name="a" id="a" placeholder="Wpisz wartość" required />
						</div>

						<div class="row" id="calc_form">
							<select type="text" name="rodzaj" id="rodzaj">
								<option value="kmh to knots">km/h -> knots</option>
								<option value="knots to kmh">knots -> km/h</option>
							</select>
						</div>

						<div class="row" id="calc_form">
							<button id="myBtn" type="button" onclick="speed(this.innerHTML)" style="width: 100px;">Licz</button>
						</div>

						<div class="row" id="calc_form">
							<p name="wynik" id="wynik"></p>
							<h2>
								<p name="result" id="result"></p>
							</h2>
						</div>
					</form>

					<script>
						var input1 = document.getElementById("a");

						input1.addEventListener("keypress", function(event) {
							if (event.key === "Enter") {
								event.preventDefault();
								document.getElementById("myBtn").click();
							}
						});
					</script>

					<br /><br /><br /><br />

					<div class="col-md-9">
						Prędkość z wezłów <b>[knots]</b> na kilometry na godzinę <b>[km/h]</b>.<br />
						Mając prędkość podaną w <b>[km/h]</b> wystarczy pomnożyć ją przez <b>0.539956803</b> w celu otrzymania prędkości w <b>[knots]</b>.<br />
						Odwrotnie, znając prędkość w <b>[knots]</b> należy pomnożyć ją przez <b>1.852</b>, aby uzyskać ją w <b>[km/h]</b>.<br />

						<hr>
						<b>Przykład:</b><br /><br />
						Prędkość w kilometrach na godzinę: <b>755 km/h</b><br />
						<b>755</b> * <b>0.539956803</b> = <b>407.67 knots</b><br /><br />
						Tutaj już wiemy, że prędkość równa <b>755 km/h</b> to <b>407.67 knots</b>

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
