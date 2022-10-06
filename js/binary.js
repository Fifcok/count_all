var max = 511,
  path = "img_dip/",
  ext = ".png",
  imgs = [];
imgs[0] = new Image;
imgs[0].src = "img_dip/on1.png";
imgs[1] = new Image;
imgs[1].src = "img_dip/off1.png";
imgs[2] = new Image;
imgs[2].src = "img_dip/on2.png";
imgs[3] = new Image;
imgs[3].src = "img_dip/off2.png";
imgs[4] = new Image;
imgs[4].src = "img_dip/on3.png";
imgs[5] = new Image;
imgs[5].src = "img_dip/off3.png";
imgs[6] = new Image;
imgs[6].src = "img_dip/on4.png";
imgs[7] = new Image;
imgs[7].src = "img_dip/off4.png";
imgs[8] = new Image;
imgs[8].src = "img_dip/on5.png";
imgs[9] = new Image;
imgs[9].src = "img_dip/off5.png";
imgs[10] = new Image;
imgs[10].src = "img_dip/on6.png";
imgs[11] = new Image;
imgs[11].src = "img_dip/off6.png";
imgs[12] = new Image;
imgs[12].src = "img_dip/on7.png";
imgs[13] = new Image;
imgs[13].src = "img_dip/off7.png";
imgs[14] = new Image;
imgs[14].src = "img_dip/on8.png";
imgs[15] = new Image;
imgs[15].src = "img_dip/off8.png";
imgs[16] = new Image;
imgs[16].src = "img_dip/on9.png";
imgs[17] = new Image;
imgs[17].src = "img_dip/off9.png";
var maxlength = decToBin(max).toString().length;
d = /^\d+$/;

function initPic(a) {

  var range = document.getElementById('range').value;
  if (range < 0 || range > 511)
  {
    alert("Wartośćh przekracza zakres (0 - 511)");
  } else {

    p = a.picnum.value;
    p /= 1;
    p > max ? (alert("Wartość przekracza zakres 511"), a.picnum.focus(), a.picnum.select()) : showPic(p);
    return !1
  }
}

function chgPic(a, b) {
  p += b;
  p = p > max ? 0 : 0 > p ? max : p;
  showPic(p);
  a.picnum.value = p
}

function showPic(a) {
  sws = decToBin(a);
  for (sw = sws.toString(); sw.length < maxlength;) sw = "0" + sw;
  for (i = 0; i < sw.length; i++) img = "1" == sw.charAt(sw.length - i - 1) ? "on" : "off", document.getElementById("sw" + i).src = "img_dip/" + img + (i + 1) + ext
}

function decToBin(a) {
  for (var b = "", c; 0 != a;) c = a % 2, b = c + b, a = Math.floor(a / 2);
  return b
};
