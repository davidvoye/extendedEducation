app.stickyNav = (function($, scrollspy, Drupal){
  'use strict';

  var navTop,
      $nav,
      $wrapper;


  function init(){
    $nav = $('.sticky-nav'),
    $wrapper = $('.sticky-nav__wrapper');
    if ($nav.length) {
      navTop = $nav.offset().top,
      makeNavSticky();
      highlightSectionLinks();
      scrollLinks();
    }
  }


  function makeNavSticky() {
    if ($nav) {
      $nav.scrollspy({
        min: navTop,
        max: $('body').height(),
        onEnter: function(element, position) {
          $nav.addClass('fixed');
          $wrapper.addClass('is-fixed');
        },
        onLeave: function(element, position) {
          $nav.removeClass('fixed');
          $wrapper.removeClass('is-fixed');
        }
      });
    }
  }


  function highlightSectionLinks(){
    $('.sticky-nav-section').each(function(){
      $(this).scrollspy({
        min: ($(this).offset().top - 120),
        max: $(this).offset().top + $(this).height() - 120,
        onEnter: function onEnter(element, position) {
          $('.sticky-nav a').each(function(){
            if (element.id === $(this).attr('href').substr(1)) {
              $(this).addClass('is-active');
            } else {
              $(this).removeClass('is-active');
            }
          });
        }
      });
    });
  }


  function scrollLinks(){
    $('.sticky-nav a').on('click', function(e){
      e.preventDefault();
      if(!($(this).hasClass('is-active'))){
        var element = $(this).attr('href');
        $('html, body').animate({
          scrollTop: ($(element).offset().top - $('.sticky-nav').height()),
        });
      }
    });
  }


  Drupal.behaviors.stickyNav = {
    attach: function (context, settings) {
      // Destroy all instances of scrollspy!!
      $.fn.scrollspy('destroy');
      if ($('.sticky-nav').length) {
        makeNavSticky();
        highlightSectionLinks();
      }
    }
  };


  /* Document ready
  /* + + + + + + + + + + + + + + + + + + + + + + + + + + + */

  $(window).on('load', init);

})(jQuery, window.scrollspy, Drupal);
