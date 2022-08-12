function headwindcalc(operator) 
		{
			var x = document.getElementById('a').value;
			var y = document.getElementById('b').value;
			var z = document.getElementById('c').value;
			
			if (x == "" | y == "" | z == "") {
				alert ("Wypełnij wszystkie pola");
				
			}
			else {
			
			var a = parseInt(x);
			var b = parseInt(y);
			var c = parseInt(z);
			 
			switch(operator)
			{
				case 'Licz':
				
				if (a >= b) {
									
					var kat = parseFloat(a) - parseFloat(b);
					
					if (kat == 90) {
					
						var wynik = 0;
										}
					else {
					
					var cosin = Math.cos(kat * Math.PI / 180);
					
					var wynik = parseFloat(c) * cosin;
					
					var wynik2 = wynik.toFixed(2);

					}
					}
				else {
				
					var kat = parseFloat(b) - parseFloat(a);
					
					if (kat == 90) {
					
						var wynik = 0;
										}
					else {
					
					var cosin = Math.cos(kat  * Math.PI / 180);
					
					var wynik = parseFloat(c) * cosin;
					
					var wynik2 = wynik.toFixed(2);
				}
				}
				
				break;
			}
			
			if (wynik >= 0) {
			
				if (wynik == 0) {
					var result = 0;
					
					var exit = "HD" + result.toString();	
	
					document.getElementById('result').textContent = exit;
					document.getElementById('wynik').textContent = "Wynik: ";
					
				}
				else {
					
					var result = Math.abs(wynik2);
				
					var exit = "HD" + result.toString();	
	
					document.getElementById('result').textContent = exit;
					document.getElementById('wynik').textContent = "Wynik: ";
					
				}
			}
			else {
			
				var result = Math.abs(wynik2);
				
				var exit = "TL" + result.toString();	
	
				document.getElementById('result').textContent = exit;
				document.getElementById('wynik').textContent = "Wynik: ";


			}
		}}
		
function rwyslope(operator) 
		{
			var x = document.getElementById('a').value;
			var y = document.getElementById('b').value;
			var z = document.getElementById('c').value;
			
			if (x == "" | y == "" | z == "") {
				alert ("Wypełnij wszystkie pola");
				
			}
			else {
			
			var a = parseInt(x);
			var b = parseInt(y);
			var c = parseInt(z);
			  
			 
			switch(operator)
			{
				case 'Licz':
										
					var wynik = ((parseFloat(b) - parseFloat(a)) / parseFloat(c)) * 100;
					var slope = wynik.toFixed(2);
				
				break;
			}			
					
					
					var exit = "Slope " + slope.toString();
	
					document.getElementById('result').textContent = exit;
					document.getElementById('wynik').textContent = "Wynik: ";
			
		}}
			
function fotowoltaika(operator)
		{
			var x = document.getElementById('a').value;
			var y = document.getElementById('b').value;
			
			if (x == "" | y == "") {
				alert ("Wypełnij wszystkie pola");
				
			}
			else {
			
			var a = parseInt(x);
			var b = parseInt(y);
		 
			switch(operator)
			{
				case 'Licz':
				if (a >= b) {
					var wynik =  parseFloat(b) - (parseFloat(a) * 1.2);
					var result = wynik.toFixed(0);
					}
				else {
					var wynik = (parseFloat(b) * 0.8) - parseFloat(a);
					var result = wynik.toFixed(0);
				}
				break;  
			}
		 
			var exit = result.toString() + " kWh";
			
			document.getElementById('result').textContent = exit;
			document.getElementById('wynik').textContent = "Wynik: ";
		}}
		
function isa(operator)
		{
			var x = document.getElementById('a').value;
			var y = document.getElementById('b').value;
			
			if (x == "" | y == "") {
				alert ("Wypełnij wszystkie pola");
				
			}
			else {
			
			var a = parseInt(x);
			var b = parseInt(y);
			 
			switch(operator)
			{
				case 'Licz':
							
					var wynik_isa = 15-((parseFloat(a)/1000)*2);
					
					var wynik_isadev = parseFloat(b) - wynik_isa;
					
					var isa = wynik_isa.toFixed(2);
					var isadev = wynik_isadev.toFixed(2);
				
				break;
			}			
					
					
					var exit1 = "ISA: " + isa.toString() + "°C";
					var exit2 = "ISA DEV: " + isadev.toString() + "°C";
	
					document.getElementById('result1').textContent = exit1;
					document.getElementById('result2').textContent = exit2;
					document.getElementById('wynik').textContent = "Wynik: ";
			
		}}
		
function paliwo(operator)
		{
			var x = document.getElementById('a').value;
			var rodzaj = document.getElementById('rodzaj').value;
			if (x == "") {
				alert ("Wypełnij wszystkie pola");
				
			}
			
			else {
			
			var a = parseInt(x);
			
			switch(operator)
			{
				case 'Licz':
							
					if (rodzaj == "Kilogramów")
					{
						
						var wynik11 = parseFloat(a) * 0.32905;
						var wynik12 = parseFloat(a) * 1.24558;
						var wynik13 = parseFloat(a) * 2.20462;
						
						var wynik15 = parseFloat(a) * 0.001;
						var wynik16 = parseFloat(a) * 0.27399;
						
						var wynik1 = wynik11.toFixed(2);
						var wynik2 = wynik12.toFixed(2);
						var wynik3 = wynik13.toFixed(2);
						var wynik4 = parseFloat(a);
						var wynik5 = wynik15.toFixed(2);
						var wynik6 = wynik16.toFixed(2);
						
					}
					
					else if (rodzaj == "Galonów_US")
					{

						var wynik12 = parseFloat(a) * 3.78541;
						var wynik13 = parseFloat(a) * 6.7;
						var wynik14 = parseFloat(a) * 3.03907;
						var wynik15 = parseFloat(a) * 0.00304;
						var wynik16 = parseFloat(a) * 0.83267;
						
						var wynik1 = parseFloat(a);
						var wynik2 = wynik12.toFixed(2);
						var wynik3 = wynik13.toFixed(2);
						var wynik4 = wynik14.toFixed(2);
						var wynik5 = wynik15.toFixed(2);
						var wynik6 = wynik16.toFixed(2);
					}
					
					else if (rodzaj == "Litrów")
					{
						var wynik11 = parseFloat(a) * 0.26417;
						
						var wynik13 = parseFloat(a) * 1.76995;
						var wynik14 = parseFloat(a) * 0.80284;
						var wynik15 = parseFloat(a) * 0.0008;
						var wynik16 = parseFloat(a) * 0.21997;
						
						var wynik1 = wynik11.toFixed(2);
						var wynik2 = parseFloat(a);
						var wynik3 = wynik13.toFixed(2);
						var wynik4 = wynik14.toFixed(2);
						var wynik5 = wynik15.toFixed(2);
						var wynik6 = wynik16.toFixed(2);
					}
					
					else if (rodzaj == "Ton")
					{
						var wynik11 = parseFloat(a) * 329.04815;
						var wynik12 = parseFloat(a) * 1245.58276;
						var wynik13 = parseFloat(a) * 2204.62262;
						var wynik14 = parseFloat(a) * 1000;

						var wynik16 = parseFloat(a) * 273.98990;
						
						var wynik1 = wynik11.toFixed(2);
						var wynik2 = wynik12.toFixed(2);
						var wynik3 = wynik13.toFixed(2);
						var wynik4 = wynik14.toFixed(2);
						var wynik5 = parseFloat(a);
						var wynik6 = wynik16.toFixed(2);
					}
					
					else if (rodzaj == "Funtów")
					{
						var wynik11 = parseFloat(a) * 0.14925;
						var wynik12 = parseFloat(a) * 0.56499;

						var wynik14 = parseFloat(a) * 0.45359;
						var wynik15 = parseFloat(a) * 0.00045;
						var wynik16 = parseFloat(a) * 0.12428;
						
						var wynik1 = wynik11.toFixed(2);
						var wynik2 = wynik12.toFixed(2);
						var wynik3 = parseFloat(a);
						var wynik4 = wynik14.toFixed(2);
						var wynik5 = wynik15.toFixed(2);
						var wynik6 = wynik16.toFixed(2);
					}
					
					else if (rodzaj == "Galonów_imperialnych")
					{
						var wynik11 = parseFloat(a) * 1.20095;
						var wynik12 = parseFloat(a) * 4.54609;
						var wynik13 = parseFloat(a) * 8.04637;
						var wynik14 = parseFloat(a) * 3.64977;
						var wynik15 = parseFloat(a) * 0.00365;
						
						var wynik1 = wynik11.toFixed(2);
						var wynik2 = wynik12.toFixed(2);
						var wynik3 = wynik13.toFixed(2);
						var wynik4 = wynik14.toFixed(2);
						var wynik5 = wynik15.toFixed(2);
						var wynik6 = parseFloat(a);
					}
				
				break;
			}			

					var exit1 = "Galony US: " + wynik1.toString();
					var exit2 = "Litry: " + wynik2.toString();
					var exit3 = "Funty: " + wynik3.toString();
					var exit4 = "Kilogramy: " + wynik4.toString();
					var exit5 = "Tony: " + wynik5.toString();
					var exit6 = "Galony imperialne: " + wynik6.toString();
	
					document.getElementById('galony_US').textContent = exit1;
					document.getElementById('litry').textContent = exit2;
					document.getElementById('funty').textContent = exit3;
					document.getElementById('kilogramy').textContent = exit4;
					document.getElementById('tony').textContent = exit5;
					document.getElementById('galony_imperialne').textContent = exit6;
			
		}}
		