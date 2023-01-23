function height(operator) {
  var x = document.getElementById('a').value;
  var z = document.getElementById('rodzaj').value;

  if (x == "") {
    alert("Wypełnij wszystkie pola");

  } else {

    var a = parseFloat(x);

    if (a <= "0" | a > "50000") {
      alert("Nie można wpisać watości równej lub mniejszej od 0 i większej od 50000");

    } else {

      switch (operator) {
        case 'Licz':

        if (z == "m to ft") {
            var result = a * 3.28084;
            var result1 = result.toFixed(2);
            var exit = x + " m" + " = " + result1.toString()+ " ft";
          }

        else {
            var result = a * 0.3048;
            var result1 = Math.round(result);
            var exit = x + " ft" + " = " + result1.toString()+ " m";
          }

          break;
      }

      document.getElementById('result').textContent = exit;
      document.getElementById('wynik').textContent = "Wynik: ";
    }
  }
}
