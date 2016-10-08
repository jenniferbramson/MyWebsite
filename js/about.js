var previous = 4;
var current = 0;
var next = 1;
var num = 5;  // 5 images indexed 0 to 4
//var width;

var images = $('#slider ul').children();
$(images[current]).fadeIn();
//alert(images[0]);

/*
$('.next').click(function(e) {
//  width = $('#slider').offsetWidth;

  images[current].fadeOut();
  images[next].fadeIn();

  updateCurr();
});

$('.prev').click(function(e) {

  images[current].fadeOut();
  images[previous].fadeIn();

  updateCurr();
});

function updateCurr() {
  previous = current;
  current = next;

  if (current == 5) {
    next = 1;
  } else {
    current = current + 1;
  }
}
*/