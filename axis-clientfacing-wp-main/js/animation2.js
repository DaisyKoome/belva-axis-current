var radius3 = 150; // adjust to move out items in and out 
var fields3 = $('.item3'),
  container3 = $('#container3'),
  width3 = container3.width(),
  height3 = container3.height();
var angle3 = 0,
  step3 = (2 * Math.PI) / fields3.length;
fields3.each(function() {
  var a = Math.round(width3 / 2 + radius3 * Math.cos(angle3) - $(this).width() / 2);
  var b = Math.round(height3 / 2 + radius3 * Math.sin(angle3) - $(this).height() / 2);
  if (window.console) {
    console.log($(this).text(), a, b);
  }
  $(this).css({
    left: a + 'px',
    top: b + 'px'
  });
  angle3 += step3;
});