app.flexboxfallback = (function($, Drupal){
  'use strict';

  Drupal.behaviors.flexboxfallback = {
    attach: function (context, settings) {
      if ($('html').hasClass('no-flexbox')) {
        equalHeightInit();
      }
    }
  }

  function equalHeightInit(){
    $('.equal-height').equalHeightColumns({
      selector: '.equal-height__item',
      outerHeight: true,
      responsive: true,
    });
  }

})(jQuery, Drupal);
