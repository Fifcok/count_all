<!DOCTYPE HTML>
<html lang="pl-PL">
<head>
	
	<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css' rel='stylesheet'>
	<script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js'></script>
	<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js' integrity='sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT' crossorigin='anonymous'></script>
	<link rel="stylesheet" href="css/my_css.css">
	
	<script src="js/script.js"></script>
	
	<title>countALL Runway slope</title>
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
						
							<h3>Runway slope</h3>
							
							<div class="row" id="calc_form">
								Początkowa wysokość pasa [ft]
								<input type="number" name="a" id="a" placeholder="Początkowa wysokość pasa" required/>
							
							</div>
							
							<div class="row" id="calc_form">
								Końcowa wysokość pasa [ft]
								<input type="number" name="b" id="b" placeholder="Końcowa wysokość pasa" required/>
								
							</div>
							
							<div class="row" id="calc_form">
								Długośc pasa [ft]
								<input type="number" name="c" id="c" min="0" placeholder="Długość pasa" required/>
								
							</div>
							
							<div class="row" id="calc_form">
								<button type="button" onclick="rwyslope(this.innerHTML)" style="width: 100px;">Licz</button>
							</div>
							
							<div class="row" id="calc_form">
								
								<p name="wynik" id="wynik"></p><h2><p name="result" id="result"></p></h2>
							
							</div>
							
						</form>
						
						<div class="col-md-9">
						
							<b>Runway Slope</b> potrzebny do startu samolotu obliczany jest w bardzo prosty sposób.<br /><br />
							Końcową wysokość pasa należy odjąć od początkowej, następnie tę różnicę podzielić przez długość pasa, a finalnie pomnożyć całość przez 100<br /><br />
							
							<u>Informacje na temat pasa znajdują się w Chartach.</u><br /><br />
							
							<img class="col-md-12" src="img/rwyslope.png" alt="EPKK Charts">
							
							<b>UWAGA!</b> Runway slope może wyjść dodatnie lub ujemne.
							
							<hr>
							
							<b>Przykład (EPKK 25):</b><br /><br />
							
							Początkowa wysokość pasa: <b>779 ft</b><br />
							Końcowa wysokość pasa: <b>791 ft</b><br />
							Długość pasa: <b>8336 ft</b><br /><br />
							
							<b>791 ft</b> - <b>779 ft</b> = 12 ft<br /><br />
																					
							12 ft / <b>8336 ft</b> = 0.00143953934<br /><br />
							
							0.00143953934 * 100 = 0.14395393474<br /><br />
							
							Nasz wynik możemy zaokrąglić do dwóch miejsc po przecinku<br /><br />
							
							Naszym wynikiem jest <b>slope 0.14</b><br /><br /><br /><br />
							
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