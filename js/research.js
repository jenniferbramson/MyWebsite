
var num = 30;
var current = 1;

var lastScreenTop = window.pageYOffset;

$(document).scroll(function() {
  lastScreenTop = window.pageYOffset;
  next();

  document.getElementById('dna').src="./img/dna/dna-" + current + ".png";
});


function next() {
  if (current == num) {
    current = 1;
  } else {
    current = current + 1;
  }
}
