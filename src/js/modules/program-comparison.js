app.programComparison = (function($){
  'use strict';

  function init(){
    setHeight($('.program-comparison__info'));
    setHeight($('.program-comparison__audience'));
    setHeight($('.program-comparison__requirements'));
    setHeight($('.program-comparison__location'));
    setHeight($('.program-comparison__button'));
  }

  function setHeight($el) {
    var elHeight = 0;

    $el.removeAttr('style');

    if ($(window).width() > 550) {

      for (var i = 0; i < $el.length; i++) {
       if ($($el[i]).height() > elHeight){
          elHeight = $($el[i]).height();
       }
      }

      $el.height(elHeight);

    }

  }

  if ($('.program-comparison').length) {
    $(window).on('load', init);
    $(window).on('resize', init);
  }

})(jQuery);
