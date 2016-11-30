// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - http://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
(function ($, Drupal, window, document, undefined) {

Drupal.behaviors.parentSiteNameDual = {
		attach: function () {

		// Gets copy from site name (ultimately inside a span: #site-name a span)
		var parentName = $(".parent-site-header").text();

		var parentNameHuxley = parentName.replace("of the", "<span class=\"diminutive-type\">of the</span>");
		$('.parent-site-header span:contains(Huxley)').replaceWith(parentNameHuxley);

		// Rules for different colleges. Watch out for "&" (or &amp;) versus "and" use.
		/*var parentNameCST = parentName.replace("College of Science and Technology", "<span class=\"diminutive-type\">College of</span> Science <span class=\"diminutive-type\">and</span> Technology");
		$('.parent-site-header span:contains(Science and Technology)').replaceWith(parentNameCST);

		var parentNameCHSS = parentName.replace("College of", "<span class=\"diminutive-type\">College of</span>");
		$('.parent-site-header span:contains(Social Sciences)').replaceWith(parentNameCHSS);

		var parentNameCFPA = parentName.replace("College of Fine and Performing Arts", "<span class=\"diminutive-type\">College of</span> Fine <span class=\"diminutive-type\">and</span> Performing Arts");
		$('.parent-site-header span:contains(Performing Arts)').replaceWith(parentNameCFPA);*/
	}
}

})(jQuery, Drupal, this, this.document);


