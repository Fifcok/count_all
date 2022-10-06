<!DOCTYPE HTML>
<html lang="pl-PL">

<head>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js'></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/my_css.css">
	<script src="js/script.js"></script>
	<script src="js/binary.js"></script>
	<title>countALL Licznik</title>
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
					
					<div class="col-md-12">


						<h3><p id="kuba"></p></h3>

						<script>
						var countDownDate = new Date("Oct 31, 2022 16:00:00").getTime();

						var x = setInterval(function() {

						  var now = new Date().getTime();

						  var distance = countDownDate - now;

						  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
						  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
						  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
						  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

						  document.getElementById("kuba").innerHTML = "Zostało " + days + " dni " + hours + " godzin "
						  + minutes + " minut i " + seconds + " sekund do odejścia jego i mnie :(";

						  if (distance < 0) {
						    clearInterval(x);
						    document.getElementById("kuba").innerHTML = "Już tu nie pracuje :(";
						  }
						}, 1000);
						</script>


						<br /><br /><br /><br />
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
