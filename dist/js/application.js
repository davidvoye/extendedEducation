/*! gruntyplate - v0.1.0 - 2016-12-01
* Copyright (c) 2016 Gruntyplate;*/

var app={};!function(a){"use strict";function b(){return d>0||e>0}var c=window.navigator.userAgent,d=c.indexOf("MSIE "),e=c.indexOf("Trident/");c.indexOf("Edge/");b()&&a("html").addClass("ie")}(jQuery),app.flexboxfallback=function(a,b){"use strict";function c(){a(".equal-height").equalHeightColumns({selector:".equal-height__item",outerHeight:!0,responsive:!0})}b.behaviors.flexboxfallback={attach:function(b,d){a("html").hasClass("no-flexbox")&&c()}}}(jQuery,Drupal),app.slider=function(a){"use strict";function b(){a(".flexslider").flexslider()}a(window).on("load",b)}(jQuery),app.stickyNav=function(a,b,c){"use strict";function d(){i=a(".sticky-nav"),j=a(".sticky-nav__wrapper"),i.length&&(h=i.offset().top,e(),f(),g())}function e(){i&&i.scrollspy({min:h,max:a("body").height(),onEnter:function(a,b){i.addClass("fixed"),j.addClass("is-fixed")},onLeave:function(a,b){i.removeClass("fixed"),j.removeClass("is-fixed")}})}function f(){a(".sticky-nav-section").each(function(){a(this).scrollspy({min:a(this).offset().top-120,max:a(this).offset().top+a(this).height()-120,onEnter:function(b,c){a(".sticky-nav a").each(function(){b.id===a(this).attr("href").substr(1)?a(this).addClass("is-active"):a(this).removeClass("is-active")})}})})}function g(){a(".sticky-nav a").on("click",function(b){if(b.preventDefault(),!a(this).hasClass("is-active")){var c=a(this).attr("href");a("html, body").animate({scrollTop:a(c).offset().top-a(".sticky-nav").height()})}})}var h,i,j;c.behaviors.stickyNav={attach:function(b,c){a.fn.scrollspy("destroy"),a(".sticky-nav").length&&(e(),f())}},a(window).on("load",d)}(jQuery,window.scrollspy,Drupal),app.smoothScroll=function(a){"use strict";function b(){a('a[href*="#"]:not([href="#"])[class="js-inner-link"]').click(function(){if(location.pathname.replace(/^\//,"")===this.pathname.replace(/^\//,"")&&location.hostname===this.hostname){var b=a(this.hash);if(b=b.length?b:a("[name="+this.hash.slice(1)+"]"),b.length)return a("html, body").animate({scrollTop:b.offset().top},1e3),!1}})}a(document).on("ready",b)}(jQuery),app.degreePrograms=function(a){"use strict";function b(){a("body").hasClass("section-degree-programs-courses")&&(a(d).insertBefore(a(".view-degree-programs").parent()),c=a(".sticky-nav ul"),a(".view-degree-programs-other h2").each(function(){var b=a("a",this).text(),d=b.replace(/\s/g,"").replace(/[^a-zA-Z0-9]/g,"");a('<li><a href="#'+d+'">'+b+"</a></li>").appendTo(c)}))}var c,d='<div class="sticky-nav__wrapper sticky-nav__wrapper--negative-bottom">                <nav class="sticky-nav">                  <ul>                    <li><a href="#degree-programs" class="is-active">Degree Programs</a></li>                  </ul>                </nav>              </div>';a(document).on("ready",b)}(jQuery),app.programComparison=function(a){"use strict";function b(){c(a(".program-comparison__info")),c(a(".program-comparison__audience")),c(a(".program-comparison__requirements")),c(a(".program-comparison__location")),c(a(".program-comparison__button"))}function c(b){var c=0;if(b.removeAttr("style"),a(window).width()>550){for(var d=0;d<b.length;d++)a(b[d]).height()>c&&(c=a(b[d]).height());b.height(c)}}a(".program-comparison").length&&(a(window).on("load",b),a(window).on("resize",b))}(jQuery),app.siteBanner=function(a){"use strict";"objectFit"in document.documentElement.style==!1&&document.addEventListener("DOMContentLoaded",function(){Array.prototype.forEach.call(document.querySelectorAll(".data-object-fit img"),function(a){(a.runtimeStyle||a.style).background='url("'+a.src+'") 50% 50% / cover no-repeat',a.src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='"+a.width+"' height='"+a.height+"'%3E%3C/svg%3E"})})}(jQuery),app.regionBottom=function(a){"use strict";function b(){a("html").hasClass("no-flexbox")&&a(".region-bottom").equalHeightColumns({selector:".block-block",outerHeight:!0,responsive:!0})}a(document).on("ready",b)}(jQuery);
//# sourceMappingURL=application.js.map