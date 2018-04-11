app.onlineCourses = (function($){

  'use strict';

  function courseNumberClick(event) {
    window.open(
      $(event.target).attr('href'),
      '_blank',
      'resizable=no,status=no,location=no,toolbar=no,menubar=no,fullscreen=no,scrollbars=no,dependent=no,width=628,height=228'
    );

    return false;
  }

  function init() {
    var $courseNumber = $('.view-online-courses .course-number a');

    $courseNumber.click(courseNumberClick);
  }

  $(document).on('ready', init);

})(jQuery);
