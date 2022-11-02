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
							<input onfocus="this.value=''" type="number" name="a" id="a" placeholder="Wpisz wartość" required />
						</div>

						<div class="row" id="calc_form">
							<select type="text" name="rodzaj" id="rodzaj">
								<option value="QNH to inHg">QNH -> inHg</option>
								<option value="inHg to QNH">inHg -> QNH</option>
							</select>
						</div>

						<div class="row" id="calc_form">
							<button type="button" onclick="presure(this.innerHTML)" style="width: 100px;">Licz</button>
						</div>

						<div class="row" id="calc_form">
							<p name="wynik" id="wynik"></p>
							<h2>
								<p name="result" id="result"></p>
							</h2>
						</div>
					</form>

					<br /><br /><br /><br />

					<div class="col-md-9">
						Ciśnienie z QNH na inHg i odwrotnie przeliczane jest w celu ustawienia wysokościomierza w samolocie.<br />
						Przykładem jest podawane na przykład w USA ciśnienie w słupku rtęci, a samolot może ustawić tylko ciśnienie w QHN.<br />
						Mając podane ciśnienie QNH wystarczy pomnożyć je przez <b>0.02953</b> w celu otrzymania wartości w inHg.<br />
						Posiadając ciśnienie w inHg należy pomnożyć przez <b>33.865</b>, aby uzyskać wartość w QNH.<br />

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
