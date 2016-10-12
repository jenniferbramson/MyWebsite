var previous = 4;
var current = 0;
var next = 1;
var num = 5;  // 5 images indexed 0 to 4

var images = $('#slider').children();
$(images[current]).fadeIn();


$('.next').click(function(e) {
  $(images[current]).fadeOut("slow");
  $(images[next]).fadeIn("slow");

  previous = current;
  current = next;
  updateNext();
});

$('.prev').click(function(e) {

  $(images[current]).fadeOut("slow");
  $(images[previous]).fadeIn("slow");

  next = current;
  current = previous;
  updatePrevious();
});

function updateNext() {
  if (current == 4) {
    next = 0;
  } else {
    next = next + 1;
  }
}

function updatePrevious() {
  if (current == 0) {
    previous = 4;
  } else {
    previous = previous - 1;
  }
}

$('#contactForm').submit(function(e) {
  e.preventDefault();

  $('#contactForm').hide();
  $('#success').show();
});

