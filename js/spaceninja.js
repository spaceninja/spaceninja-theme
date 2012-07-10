jQuery(document).ready(function($) {

  // Extend jQuery.support to test for touch support
  $.support.touch = ('ontouchstart' in document.documentElement);

  // If touch is not supported
  if($.support.touch) {
    $('html').addClass('is_touch_device');
  }


});
