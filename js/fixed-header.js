$(document).ready(function() {
  var stuck = $('#header');
  var start = $('#header').offset().top;
  $.event.add(window, "scroll", function() {
    var p = $(window).scrollTop();
    $(stuck).css('position',((p)>start) ? 'fixed' : 'static');
    $(stuck).css('top',((p)>start) ? '0px' : '');
  });
});