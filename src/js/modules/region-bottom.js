app.regionBottom = (function($){
  'use strict';

  function init(){
    if ($('html').hasClass('no-flexbox')) {
      $('.region-bottom').equalHeightColumns({
        selector: '.block-block',
        outerHeight: true,
        responsive: true,
      });
    }
  }

  $(document).on('ready', init);

})(jQuery);
