app.degreePrograms = (function($){
  'use strict';

  var $stickyNav,
      code = '<div class="sticky-nav__wrapper sticky-nav__wrapper--negative-bottom">\
                <nav class="sticky-nav">\
                  <ul>\
                    <li><a href="#degree-programs" class="is-active">Degree Programs</a></li>\
                  </ul>\
                </nav>\
              </div>';


  function init(){

    if ($('body').hasClass('section-degree-programs-courses')) {

      $(code).insertBefore( $('.view-degree-programs').parent());

      $stickyNav = $('.sticky-nav ul');

      $('.view-degree-programs-other h2').each(function(){
        var title = $('a', this).text(),
            id = title.replace(/\s/g,'').replace(/[^a-zA-Z0-9]/g, '');
       $('<li><a href="#' + id + '">'+ title +'</a></li>').appendTo($stickyNav);
      });

    }

  }

  /* Document ready
  /* + + + + + + + + + + + + + + + + + + + + + + + + + + + */

  $(document).on('ready', init);

})(jQuery);
