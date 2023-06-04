<!DOCTYPE HTML>
<html lang="pl-PL">

<head>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js'></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/my_css.css">
	<script src="js/script.js"></script>
	<script src="js/presure.js"></script>
	<title>countALL QNH <-> inHg</title>
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
						<h3>Przelicznik ciśnienia</h3>
						<div class="row" id="calc_form">
							Przeliczana wartość
							<input step="0.01" onfocus="this.value=''" type="number" name="a" id="a" placeholder="Wpisz wartość" required />
						</div>

						<div class="row" id="calc_form">
							<select type="text" name="rodzaj" id="rodzaj">
								<option value="QNH">QNH</option>
								<option value="inHg">inHg</option>
								<option value="mmHg">mmHg</option>
							</select>
						</div>

						<div class="row" id="calc_form">
							<button id="myBtn" type="button" onclick="presure(this.innerHTML)" style="width: 100px;">Licz</button>
						</div>

						<div class="row" id="calc_form">
							<h2>
								<p name="result" id="result1"></p>
								<p name="result" id="result2"></p>
								<p name="result" id="result3"></p>
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
						Ciśnienie z QNH / inHg / mmHg przeliczane jest w celu ustawienia wysokościomierza w samolocie.<br />
						Przykładem jest podawane na przykład w USA ciśnienie w słupku rtęci, a samolot może ustawić tylko ciśnienie w QHN. Występuje rónież ciśnienie podawane
						w minimetrach słupka rtęci (zazwyczaj samoloty radzieckiej konstrukcji)<br />
						QNH -> inHg / <b>* 0.02953</b><br />
						QHN -> mmHg / <b>* 0.75006</b><br />
						inHg -> QNH / <b>* 33.865</b><br />
						inHg -> mmHg / <b>* 25.39981</b><br />
						mmHg -> QNH / <b>* 1.33323</b><br />
						mmHg -> inHg / <b>* 0.03937</b><br />

						<hr>
						<b>Przykład:</b><br /><br />
						Ciśnienie QNH: <b>1024</b><br />
						<b>1024</b> * <b>0.02953</b> = <b>~30.24 inHg</b><br /><br />
						Tutaj już wiemy, że ciśnienie QNH równe <b>1024</b> to <b>~30.24 inHg</b>

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
