$(document).ready(function () {
  (function () {
    
  
  var words = [
    'Siste[+]',
    'Desarrollo Webb',
    'Teléfono',
    ], i = -1;
  
  setInterval(function () {
    $("#sistemas").fadeOut(function () {
      $(this).html(words[i=i+1%words.length]).fadeIn();
      if (i==2) {
        i=-1;
      }
    });
  },2000);
})();
});
