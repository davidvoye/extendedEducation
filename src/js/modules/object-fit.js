app.siteBanner = (function($){
  'use strict';

  // This is a polyfill for the object-fit css property

  if ('objectFit' in document.documentElement.style === false) {
    document.addEventListener('DOMContentLoaded', function () {
      Array.prototype.forEach.call(document.querySelectorAll('.data-object-fit img'), function (image) {
        (image.runtimeStyle || image.style).background = 'url("' + image.src + '") 50% 50% / cover no-repeat';
        image.src = 'data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' width=\'' + image.width + '\' height=\'' + image.height + '\'%3E%3C/svg%3E';
      });
    });
  }

})(jQuery);
