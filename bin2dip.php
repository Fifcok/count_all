<!DOCTYPE HTML>
<html lang="pl-PL">

<head>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js'></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/my_css.css">
	<script src="js/script.js"></script>
	<script src="js/binary.js"></script>
	<title>countALL DIP Switch</title>
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
					<div class="col-md-3">
					</div>

					<div class="col-md-9">
						<form id="calculator" name="picform" action="javascript:initPic(this.form);">
							<h3>Docelowy adres</h3>
							<div class="row" id="calc_form">
								<input type="number" name="picnum" id="range" placeholder="Wpisz adres  (0 - 511)" min="0" max="511" style="width: 200px;" required />
							</div>

							<div class="row" id="calc_form">
								<input name="showpic" value="Pokaż" onclick="initPic(this.form)" type="button" class="showpic" style="width: 100px;">
							</div>
						</form>

						<br />

						<div class="row">
							<div class="col-md-1" style="text-align: center;"><img src="img_dip/off1.png" ; name="sw0" ; id="sw0" ; class="sw" ;></div>
							<div class="col-md-1" style="text-align: center;"><img src="img_dip/off1.png" ; name="sw1" ; id="sw1" ; class="sw" ;></div>
							<div class="col-md-1" style="text-align: center;"><img src="img_dip/off1.png" ; name="sw2" ; id="sw2" ; class="sw" ;></div>
							<div class="col-md-1" style="text-align: center;"><img src="img_dip/off1.png" ; name="sw3" ; id="sw3" ; class="sw" ;></div>
							<div class="col-md-1" style="text-align: center;"><img src="img_dip/off1.png" ; name="sw4" ; id="sw4" ; class="sw" ;></div>
							<div class="col-md-1" style="text-align: center;"><img src="img_dip/off1.png" ; name="sw5" ; id="sw5" ; class="sw" ;></div>
							<div class="col-md-1" style="text-align: center;"><img src="img_dip/off1.png" ; name="sw6" ; id="sw6" ; class="sw" ;></div>
							<div class="col-md-1" style="text-align: center;"><img src="img_dip/off1.png" ; name="sw7" ; id="sw7" ; class="sw" ;></div>
							<div class="col-md-1" style="text-align: center;"><img src="img_dip/off1.png" ; name="sw8" ; id="sw8" ; class="sw" ;></div>
							<div class="col-md-1" style="text-align: center;"><img src="img_dip/off1.png" ; name="sw9" ; id="sw9" ; class="sw" ;></div>
						</div>

						<div class="row">
							<div class="col-md-1" style="text-align: center;">1</div>
							<div class="col-md-1" style="text-align: center;">2</div>
							<div class="col-md-1" style="text-align: center;">3</div>
							<div class="col-md-1" style="text-align: center;">4</div>
							<div class="col-md-1" style="text-align: center;">5</div>
							<div class="col-md-1" style="text-align: center;">6</div>
							<div class="col-md-1" style="text-align: center;">7</div>
							<div class="col-md-1" style="text-align: center;">8</div>
							<div class="col-md-1" style="text-align: center;">9</div>
						</div>

						<div class="row">
							<div class="col-md-1" style="text-align: center;">(2<sup>0</sup>)<br />=1</div>
							<div class="col-md-1" style="text-align: center;">(2<sup>1</sup>)<br />=2</div>
							<div class="col-md-1" style="text-align: center;">(2<sup>2</sup>)<br />=4</div>
							<div class="col-md-1" style="text-align: center;">(2<sup>3</sup>)<br />=8</div>
							<div class="col-md-1" style="text-align: center;">(2<sup>4</sup>)<br />=16</div>
							<div class="col-md-1" style="text-align: center;">(2<sup>5</sup>)<br />=32</div>
							<div class="col-md-1" style="text-align: center;">(2<sup>6</sup>)<br />=64</div>
							<div class="col-md-1" style="text-align: center;">(2<sup>7</sup>)<br />=128</div>
							<div class="col-md-1" style="text-align: center;">(2<sup>8</sup>)<br />=256</div>
						</div>

						<br />

						Wiele urządzeń, w szczególności scenicznych i oświetleniowych posiada indywidualną adresecję, która możliwa jest do wykonania tylko poprzez przełączniki DIP Switch. <br /><br />
						Przełączniki są ustawione zgodnie z wartościami binarnymi, co oznacza, że ​​każdy przełącznik może przekazywać tylko wartość 0 lub 1.<br />
						Obliczenie jest stosunkowo proste: każdy przełącznik ma wartość potęgi 2<sup>n-1</sup>, gdzie n jest numerem przełącznika.<br />
						Pierwszy przełącznik to 2<sup>1-1</sup>, czyli 2<sup>0</sup> = 1. Przełącznik 2 ma 2<sup>2-1</sup>, czyli 2<sup>1</sup> = 2.<br />
						Trzeci przełącznik ma 2<sup>2</sup> = 4, czwarty 2<sup>3</sup> = 8. Aby ustawić wartość, należy najpierw znaleźć najwyższą liczbę pasującą do wartości, a następnie dodać mniejsze wartości.<br />

						<hr>

						<b>Przykład:</b><br />
						Należy ustawić wartość <b>11</b>:<br />
						1. Najwyższa pasująca liczba to 8 (2<sup>3</sup>).<br />
						x x x 1 <br />
						2. Druga największa liczba to 2 (2<sup>1</sup>).<br />
						x 1 x x <br />
						3. Trzecia pod względem liczby pasująca liczba to 1 (2<sup>0</sup>).<br />
						1 x x x <br /><br />
						Więc ustawienie będzie wyglądać następująco: <b>1101 0000</b><br />
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
