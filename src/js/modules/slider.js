app.slider = (function($){
  'use strict';

  function init(){
    $('.flexslider').flexslider();
  }

  $(window).on('load', init);

})(jQuery);
