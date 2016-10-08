$('#eventInput').submit(function(e) {

  var inputs = [$('#input1'), $('#input2'), $('#input3')];
  var hasInput = false;

  for (i = 0; i < inputs.length; i++) {
    if(inputs[i].val()) {
      $('#error').html("");
      hasInput = true;
    }
  }

  if(hasInput) {
    $(this).fadeOut();
  } else {
    $('#error').html("You didn't fill anything out!");
  }

  e.preventDefault();
});


