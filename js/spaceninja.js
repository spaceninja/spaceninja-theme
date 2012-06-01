jQuery(document).ready(function($) {

  // Extend jQuery.support to test for placeholder support
  $.support.touch = ('ontouchstart' in document.documentElement);

  // If the placeholder attribute is not supported
  // ref: http://www.cssnewbie.com/cross-browser-support-for-html5-placeholder-text-in-forms/
  if($.support.touch) {
    $('html').addClass('is_touch_device');
  }


});
