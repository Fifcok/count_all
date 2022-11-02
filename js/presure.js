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

        if (z == "QNH to inHg") {
            var result = a * 0.02953;
            var result1 = result.toFixed(2);
            var exit = result1.toString();
          }

        else {
            var result = a * 33.865;
            var result1 = Math.round(result);
            var exit = result1.toString();
          }

          break;
      }

      document.getElementById('result').textContent = x + " = " + exit;
      document.getElementById('wynik').textContent = "Wynik: ";
    }
  }
}
