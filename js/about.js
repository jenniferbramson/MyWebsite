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

  // See if all inputs filled
  var inputs = document.getElementsByClassName('contacters');
  console.log(inputs);
  var valid = true;

  for (var i = 0; i < inputs.length; i++) {
    if (!inputs[i].value) {
      valid = false;
    }
  }

  var valid_length = true;
  if ((inputs[0].value).length > 30 || (inputs[1].value).length > 30) {
    valid_length = false;
  }

  // Submit if filled, otherwise show error
  if (valid && valid_length) {
    var values = $(this).serialize();

    var state = $.ajax({
      url: window.location.origin + '/MyWebsite/handle_submit.php',
      type: 'POST',
      data: values,
      dataType:"json",
      success: function (result) {
        console.log("Submitted");
        console.log(this);
      }
    });

    $('#contactForm').hide();
    $('#success').show();
  } else if (!valid_length) {
    $('#error').html("Error: name and email must be smaller than 30 symbols each!");
  } else {
    $('#error').html("Error: all fields must be filled out with valid input!");
  }

});

