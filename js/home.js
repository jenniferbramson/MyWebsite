// Flash camera when hovered over
$('#camera').hover(function() {
  $('#arrow-right').css({ "border-left-color": "#E9E581" });
  window.setTimeout(undo, 400);
});

function undo() {
  $('#arrow-right').css({ "border-left-color": "transparent" });
}