$('#cathyPt').click(function(e) {
  e.preventDefault();

  toDiv($('#cathyDiv'));
});

$('#pointPt').click(function(e) {
  e.preventDefault();

  toDiv($('#pointDiv'));
});

$('#upperPt').click(function(e) {
  e.preventDefault();

  toDiv($('#upperDiv'));
});

$('#hallowPt').click(function(e) {
  e.preventDefault();

  toDiv($('#hallowDiv'));
});

$('#shadyPt').click(function(e) {
  e.preventDefault();

  toDiv($('#shadyDiv'));
});

function toDiv(div) {
  div.fadeIn();

  var offset = div.offset();
  offset.top -= 20;

  $('html, body').animate ({
    scrollTop: offset.top
  });
}