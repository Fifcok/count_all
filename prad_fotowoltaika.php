<!DOCTYPE HTML>
<html lang="pl-PL">
<head>
	
	<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css' rel='stylesheet'>
	<script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js'></script>
	<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js' integrity='sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT' crossorigin='anonymous'></script>
	<link rel="stylesheet" href="css/my_css.css">
	
	<script src="js/script.js"></script>
	
	<title>countALL Prąd - fotowoltaika</title>
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
						
							<h3>Prąd - fotowoltaika</h3>
							
							<div class="row" id="calc_form">
								Pobrane [kWh]
								<input type="number" name="a" id="a" placeholder="Pobrane [kWh]" required/>
							
							</div>
							
							<div class="row" id="calc_form">
								Wpuszczone [kWh]
								<input type="number" name="b" id="b" placeholder="Wpuszczone [kWh]" required/>
								
							</div>
														
								<div class="row" id="calc_form">
								<button type="button" onclick="fotowoltaika(this.innerHTML)" style="width: 100px;">Licz</button>
							</div>
							
							<div class="row" id="calc_form">
								
								<p name="wynik" id="wynik"></p><h2><p name="result" id="result"></p></h2>
							
							</div>
							
						</form>
						
						<div class="col-md-9">
						
							Aby obliczyć, czy w bilansie wpuszczonego prądu do sieci wyprodukowanego przez instalację fotowoltaiczną potrzebne są [kWh] wpuszczone do sieci oraz pobrane z sieci.
							Dane te można odczytać na stronie <a class="link_my" href="https://logowanie.tauron-dystrybucja.pl/" target="_blank">tauron-dystrybucja.pl</a><br /> <br />
							
							Istnieją dwa przypadki obliczanie:
							<ul>
								<li>Wpuszczone &lt;= pobrane <b>wpuszczone - (pobrane * 1.2)</b></li>
								<li>Wpuszczone &gt; pobrane <b>(wpuszczone * 0.8) - pobrane</b></li>
							</ul>
							
							<hr>
							
							<b>Przykład:</b><br /><br />
							
							Wpuszczone: <b>1255 kWh</b><br />
							Pobrane: <b>1820 kWh</b><br /><br />
							
							Wiedząc, że zostało pobrane więcej niż wpuszczone należy zastowosać wzór <b>wpuszczone - (pobrane * 1.2)</b><br /><br />
							
							<b>1255 kWh</b> - (<b>1820 kWh</b> * 1.2) = -929 Kwh<br /><br />
							
							Naszym wynikiem jest <b>-929 kWh</b><br /><br /><br /><br />
							
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