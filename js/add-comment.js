$( '.add' ).focus(function() {
  $( '.bot' ).show(10);
});
$( '.add' ).focusout(function() {
  $( '.bot' ).hide(10);
});