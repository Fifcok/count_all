function moc(operator) {
  var x = document.getElementById('a').value;
  var y = document.getElementById('b').value;
  var z = document.getElementById('c').value;

  if (x == "" | y == "") {
    alert("Wypełnij wszystkie pola");

  } else {

    var a = parseInt(x);
    var b = parseInt(y);

    if (a <= "0" | b <= "0") {
      alert("Nie można wpisać watości równej lub mniejszej od 0");

    } else {

      switch (operator) {
        case 'Licz':

        if (z == "sekundy") {
            var result = (a / 3600) * b;
            var result1 = Math.round(result);
            var exit = result1.toString() + " Wh"
          }

        else if (z == "minuty") {
            var result = (a / 60) * b;
            var result1 = Math.round(result);
            var exit = result1.toString() + " Wh";
          }
          else if (z == "godziny") {
            var result = a * b;
            var result1 = result / 1000;
            var result2 = Math.round(result1);
            var exit = result2.toString() + " kWh";
          }
          else if (z == "dni") {
            var result = a * b * 24;
            var result1 = result / 1000;
            var result2 = Math.round(result1);
            var exit = result2.toString() + " kWh";
          }
          else if (z == "lata") {
            var result = a * b * 8760;
            var result1 = result / 1000;
            var result2 = Math.round(result1);
            var exit = result2.toString() + " kWh";
          }

          break;
      }

      document.getElementById('result').textContent = exit;
      document.getElementById('wynik').textContent = "Wynik: ";
    }
  }
}
