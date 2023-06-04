function presure(operator) {
  var x = document.getElementById('a').value;
  var z = document.getElementById('rodzaj').value;

  if (x == "") {
    alert("Wypełnij wszystkie pola");

  } else {

    var a = parseFloat(x);

    if (a <= "0" | a > "1100") {
      alert("Nie można wpisać watości równej lub mniejszej od 0 i większej od 1100");

    } else {

      switch (operator) {
        case 'Licz':

        if (z == "QNH") {
      
            var exitb = parseFloat(a) * 0.02953;
            var exitc = parseFloat(a) * 0.75006;

            var wynik1 = parseFloat(a);
            var wynik2 = exitb.toFixed(2);
            var wynik3 = exitc.toFixed(2);

          } else if (z == "inHg"){

            var exita = parseFloat(a) * 33.865;
            var exitc = parseFloat(a) * 25.39981;

            var wynik1 = exita.toFixed(2);
            var wynik2 = parseFloat(a);
            var wynik3 = exitc.toFixed(2);
       
          } else if (z == "mmHg") {
            var exita = parseFloat(a) * 1.33323;
            var exitb = parseFloat(a) * 0.03937;

            var wynik1 = exita.toFixed(2);
            var wynik2 = exitb.toFixed(2);
            var wynik3 = parseFloat(a);

          }

          break;
      }

   
      var exit1 = "QHN: " + wynik1.toString();
      var exit2 = "inHg: " + wynik2.toString();
      var exit3 = "mmHg: " + wynik3.toString();

      document.getElementById('result1').textContent = exit1;
      document.getElementById('result2').textContent = exit2;
      document.getElementById('result3').textContent = exit3;
    }
  }
}
