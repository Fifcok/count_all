function aircraft(operator) {
  var typ = document.getElementById('typ').value;

  var myArrays = {
      B738: ['39.50', '35.80', '12.5', '2', '79000', '2930', 'M0.785', '189'],
      A320: ['37.57', '34.10', '11.7', '2', '77000', '3078', 'M0.780', '190']
};

  document.getElementById('dlugosc').textContent = "Długość: " + myArrays[typ][0] + 'm';
  document.getElementById('szerokosc').textContent = "Szerokość: " + myArrays[typ][1] + 'm';
  document.getElementById('wysokosc').textContent = "Wysokość: " + myArrays[typ][2] + 'm';
  document.getElementById('silniki').textContent = "Ilość silników: " + myArrays[typ][3];
  document.getElementById('mtow').textContent = "MTOW: " + myArrays[typ][4] + 'kg';
  document.getElementById('zasieg').textContent = "Zasięg: " + myArrays[typ][5] + 'nm';
  document.getElementById('predkosc').textContent = "Prędkość max.: " + myArrays[typ][6];
  document.getElementById('pasazerowie').textContent = "Pasażerowie max.: " + myArrays[typ][7];
  document.getElementById("foto").src = "img/aircrafts/" + typ + ".jpg";
}
