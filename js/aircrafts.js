function aircraft(operator) {
  var typ = document.getElementById('typ').value;

  var myArrays = {
//Boeing
      B738: ['39.50', '35.80', '12.5', '2', '79 000', '2 930', 'M0.785', '189'],

//Airbus
      A221: ['35.00', '35.1', '11.50', '2', '60 781', '3 100', 'M0.780', '133'],
      A223: ['38.70', '35.1', '11.50', '2', '67 585', '3 300', 'M0.780', '160'],
      A306: ['54.10', '44.84', '16.50', '2', '165 000', '4 158', 'M0.800', '266'],
      A313: ['46.66', '43.90', '15.80', '2', '164 000', '5 184', 'M0.820', '212'],
      A318: ['31.44', '34.10', '12.70', '2', '68 000', '3 240', 'M0.780', '132'],
      A319: ['33.84', '34.10', '11.70', '2', '75 500', '3 672', 'M0.780', '160'],
      A19N: ['33.84', '35.80', '11.76', '2', '75 500', '3 753', 'M0.780', '160'],
      A320: ['37.57', '34.10', '11.70', '2', '77 000', '3 078', 'M0.780', '190'],
      A20N: ['37.57', '35.80', '11.76', '2', '78 000', '3 699', 'M0.780', '189'],
      A321: ['37.52', '34.10', '11.70', '2', '77 000', '5 700', 'M0.780', '190'],
      A21N: ['44.51', '35.80', '11.76', '2', '93 500', '3 699', 'M0.780', '206'],
      A332: ['59.00', '60.30', '17.40', '2', '233 000', '6 750', 'M0.830', '253'],
      A333: ['63.60', '60.30', '16.50', '2', '233 000', '5 670', 'M0.830', '295'],
      A338: ['58.82', '64.00', '17.39', '2', '242 000', '7 506', 'M0.860', '257'],
      A339: ['63.66', '64.00', '16.79', '2', '240 000', '6 550', 'M0.860', '287'],
      A342: ['59.40', '60.30', '16.70', '4', '275 000', '7 992', 'M0.830', '239'],
      A343: ['63.60', '60.30', '16.70', '4', '275 000', '7 398', 'M0.830', '295'],
      A345: ['67.90', '63.45', '17.10', '4', '368 000', '9 018', 'M0.830', '313'],
      A346: ['75.30', '63.45', '17.30', '4', '368 000', '7 506', 'M0.830', '380'],
      A358: ['60.54', '64.75', '17.05', '2', '248 000', '8 246', 'M0.850', '280'],
      A359: ['66.80', '64.75', '17.05', '2', '280 000', '7 749', 'M0.850', '315'],
      A35K: ['73.78', '64.75', '17.08', '2', '308 000', '7 992', 'M0.850', '369'],
      A388: ['73.00', '79.80', '24.10', '4', '548 000', '8 100', 'M0.850', '525'],

//Embrayer
      E170: ['29.90', '26.00', '9.85', '2', '38 600', '2 150', 'M0.750', '78'],
      E175: ['31.68', '26.00', '9.86', '2', '40 370', '2 200', 'M0.750', '78'],
      E190: ['36.24', '28.72', '10.57', '2', '51 800', '2 450', 'M0.780', '114'],
      E195: ['38.65', '28.72', '10.55', '2', '52 290', '2 300', 'M0.780', '116'],

//Embrayer
      DC10: ['55.50', '50.40', '17.70', '3', '263 085', '4 004', 'M0.840', '250'],
      DC91: ['36.37', '28.47', '8.38', '2', '54 885', '1 671', 'M0.770', '104'],
      MD11: ['61.21', '51.66', '17.60', '3', '285 990', '6 804', 'M0.840', '298'],

//Comac
      AJ27: ['33.46', '27.28', '8.44', '2', '40 500', '1 188', 'M0.780', '90'],
      AJ29: ['36.35', '27.28', '8.44', '2', '43 616', '1 188', 'M0.780', '105'],

//Sukhoi
      SU1: ['29.94', '27.80', '10.28', '2', '45 880', '1 646', 'M0.780', '108'],

//Lockheed
      L101: ['50.00', '50.09', '16.87', '3', '231 300', '6 080', 'M0.840', '230']
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
