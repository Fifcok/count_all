function aircraft(operator) {
  var typ = document.getElementById('typ').value;

  var myArrays = {
      B738: ['39.50', '35.80', '12.5', '2', '79000', '2930', 'M0.785', '189'],
      A321: ['37.52', '34.10', '11.70', '2', '77000', '5700', 'M0.780', '190'],
      A320: ['37.57', '34.10', '11.7', '2', '77000', '3078', 'M0.780', '190']
};

  document.getElementById('dlugosc').textContent = "Długość: ";
  document.getElementById('dlugosc_value').textContent = myArrays[typ][0] + 'm';

  document.getElementById('szerokosc').textContent = "Szerokość: ";
  document.getElementById('szerokosc_value').textContent = myArrays[typ][1] + 'm';

  document.getElementById('wysokosc').textContent = "Wysokość: ";
  document.getElementById('wysokosc_value').textContent = myArrays[typ][2] + 'm';

  document.getElementById('silniki').textContent = "Ilość silników: ";
  document.getElementById('silniki_value').textContent = myArrays[typ][3];

  document.getElementById('mtow').textContent = "MTOW: ";
  document.getElementById('mtow_value').textContent = myArrays[typ][4] + 'kg';

  document.getElementById('zasieg').textContent = "Zasięg: ";
  document.getElementById('zasieg_value').textContent = myArrays[typ][5] + 'nm';

  document.getElementById('predkosc').textContent = "Prędkość max.: ";
  document.getElementById('predkosc_value').textContent = myArrays[typ][6];

  document.getElementById('pasazerowie').textContent = "Pasażerowie max.: ";
  document.getElementById('pasazerowie_value').textContent = myArrays[typ][7];

  document.getElementById("foto").src = "img/aircrafts/" + typ + ".jpg";
}
