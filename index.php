<!DOCTYPE HTML>
<html lang="pl-PL">
<head>
	<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css' rel='stylesheet'>
	<script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js'></script>
	<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js' integrity='sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT' crossorigin='anonymous'></script>
	<link rel="stylesheet" href="css/my_css.css">
	<title>countALL</title>
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
					<h2 class="text-center">Awiacja</h2>
				</div>

				<div class="row">
					<a class="col-md-2 index_headwind image_my" href="headwind.php">
						<p class="text-center index_kafelek">Headwind</p>
					</a>
					<a class="col-md-2 index_slope image_my" href="rwyslope.php">
						<p class="text-center index_kafelek">Slope</p>
					</a>
					<a class="col-md-2 index_isa image_my" href="isa.php">
						<p class="text-center index_kafelek">ISA / ISA DEV</p>
					</a>
					<a class="col-md-2 index_fuel image_my" href="fuel_weight.php">
						<p class="text-center index_kafelek">Paliwo Jet A</p>
					</a>
				</div>

				<hr>

				<div class="row">
					<h2 class="text-center">W domu</h2>
				</div>

				<div class="row">
					<a class="col-md-2 index_prad image_my" href="prad_fotowoltaika.php">
						<p class="text-center index_kafelek">Fotowoltaika</p>
					</a>
				</div>

				<hr>

				<div class="row">
					<h2 class="text-center">Pozostałe</h2>
				</div>

				<div class="row">
					<a class="col-md-2 index_dip image_my" href="bin2dip.php">
						<p class="text-center index_kafelek">DIP Switch</p>
					</a>
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
