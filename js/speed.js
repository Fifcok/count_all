function speed(operator) {
  var x = document.getElementById('a').value;
  var z = document.getElementById('rodzaj').value;

  if (x == "") {
    alert("Wypełnij wszystkie pola");

  } else {

    var a = parseFloat(x);

    if (a <= "0" | a > "2500") {
      alert("Nie można wpisać watości równej lub mniejszej od 0 i większej od 2500");

    } else {

      switch (operator) {
        case 'Licz':

        if (z == "kmh to knots") {
            var result = a * 0.539956803;
            var result1 = result.toFixed(2);
            var exit = x + " km/h" + " = " + result1.toString()+ " knots";
          }

        else {
            var result = a * 1.852;
            var result1 = Math.round(result);
            var exit = x + " knots" + " = " + result1.toString()+ " km/h";
          }

          break;
      }

      document.getElementById('result').textContent = exit;
      document.getElementById('wynik').textContent = "Wynik: ";
    }
  }
}
