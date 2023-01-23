<!DOCTYPE HTML>
<html lang="pl-PL">

<head>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js'></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/my_css.css">
	<script src="js/script.js"></script>
	<script src="js/height.js"></script>
	<title>countALL m <-> ft</title>
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
						<h3>Przelicznik wysokości</h3>
						<div class="row" id="calc_form">
							Przeliczana wartość
							<input step="1" onfocus="this.value=''" type="number" name="a" id="a" placeholder="Wpisz wartość" required />
						</div>

						<div class="row" id="calc_form">
							<select type="text" name="rodzaj" id="rodzaj">
								<option value="m to ft">m -> ft</option>
								<option value="ft to m">ft -> m</option>
							</select>
						</div>

						<div class="row" id="calc_form">
							<button id="myBtn" type="button" onclick="height(this.innerHTML)" style="width: 100px;">Licz</button>
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
						Wysokość z metrów <b>[m]</b> na stopy <b>[ft]</b>.<br />
						Posiadając wysokość podaną w <b>[m]</b> wystarczy pomnożyć ją przez <b>3.28084</b> w celu otrzymania wysokości w <b>[ft]</b>.<br />
						W drugą stronę, znając wysokość w <b>[ft]</b> należy pomnożyć ją przez <b>0.3048</b>, aby uzyskać ją w <b>[m]</b>.<br />

						<hr>
						<b>Przykład:</b><br /><br />
						Wysokość w metrach: <b>6500 m</b><br />
						<b>6500</b> * <b>3.28084</b> = <b>21325.46 ft</b><br /><br />
						Tutaj już wiemy, że wysokość <b>6500 m</b> to <b>21325.46 ft</b>

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
