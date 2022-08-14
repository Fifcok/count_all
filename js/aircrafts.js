function aircraft(operator) {
  var typ = document.getElementById('typ').value;

  var myArrays = {
      B738: ['39.50', '35.80', '12.5', '2', '79000', '2930', 'M0.785', '189'],
      A221: ['35.00', '35.1', '11.50', '2', '60781', '3100', 'M0.780', '133'],
      A223: ['38.70', '35.1', '11.50', '2', '67585', '3300', 'M0.780', '160'],
      A306: ['54.10', '44.84', '16.50', '2', '165000', '4158', 'M0.800', '266'],
      A313: ['46.66', '43.90', '15.80', '2', '164000', '5184', 'M0.820', '212'],
      A318: ['31.44', '34.10', '12.70', '2', '68000', '3240', 'M0.780', '132'],
      A319: ['33.84', '34.10', '11.70', '2', '75500', '3672', 'M0.780', '160'],
      A19N: ['33.84', '35.80', '11.76', '2', '75500', '3753', 'M0.780', '160'],
      A320: ['37.57', '34.10', '11.70', '2', '77000', '3078', 'M0.780', '190'],
      A20N: ['37.57', '35.80', '11.76', '2', '78000', '3699', 'M0.780', '189'],
      A321: ['37.52', '34.10', '11.70', '2', '77000', '5700', 'M0.780', '190'],
      A32N: ['44.51', '35.80', '11.76', '2', '93500', '3699', 'M0.780', '206'],
      A332: ['59.00', '60.30', '17.40', '2', '233000', '6750', 'M0.830', '253'],
      A333: ['63.60', '60.30', '16.50', '2', '233000', '5670', 'M0.830', '295'],
      A338: ['58.82', '64.00', '17.39', '2', '242000', '7506', 'M0.860', '257'],
      A339: ['63.66', '64.00', '16.79', '2', '240000', '6550', 'M0.860', '287'],
      A342: ['59.40', '60.30', '16.70', '4', '275000', '7992', 'M0.830', '239'],
      A343: ['63.60', '60.30', '16.70', '4', '275000', '7398', 'M0.830', '295'],
      A345: ['67.90', '63.45', '17.10', '4', '368000', '9018', 'M0.830', '313'],
      A346: ['75.30', '63.45', '17.30', '4', '368000', '7506', 'M0.830', '380'],
      A358: ['60.54', '64.75', '17.05', '2', '248000', '8246', 'M0.850', '280'],
      A359: ['66.80', '64.75', '17.05', '2', '280000', '7749', 'M0.850', '315'],
      A35K: ['73.78', '64.75', '17.08', '2', '308000', '7992', 'M0.850', '369'],
      A388: ['73.00', '79.80', '24.10', '4', '548000', '8100', 'M0.850', '525']
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
