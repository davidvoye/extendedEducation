app.smoothScroll = (function($){
  'use strict';

  function init(){
    $('a[href*="#"]:not([href="#"])[class="js-inner-link"]').click(function() {
      
      if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
  }

  /* Document ready
  /* + + + + + + + + + + + + + + + + + + + + + + + + + + + */

  $(document).on('ready', init);

})(jQuery);