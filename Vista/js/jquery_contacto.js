$(document).ready(function () {
  $("#sede").on('change', function () {
    $(".informacion_sede").hide();
    $("#" + $(this).val()).fadeIn();
  }).change();
});