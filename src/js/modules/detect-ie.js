(function($){
  'use strict';
  var ua = window.navigator.userAgent;
  var msie = ua.indexOf('MSIE ');
  var trident = ua.indexOf('Trident/');
  var edge = ua.indexOf('Edge/');


  function detectIE() {
    if (msie > 0) {
      // IE 10 or older => return version number
      return true;
    }
    if (trident > 0) {
      // IE 11 => return version number
      return true;
    }

    if (edge > 0) {
       // IE 12 => return version number
       // return true;
    }

    // other browser
    return false;
  }

  if (detectIE()){
   $('html').addClass('ie');
  }

})(jQuery);
