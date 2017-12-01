'use strict';
/*
 * ================================================================================
 * Project : Boostrap skin with material design concept
 * Version : 1.0
 * Date    : 4 June 2015
 * Author  : ray-design
 * ================================================================================
 */

;(function($) {
  'use strict';

  // page scrolling feature - requires jquery easing plugin
  $('a.page-scroll').on('click', function(e) {
    e.preventDefault();
    var $anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: $($anchor.attr('href')).offset().top - 100
    }, 1000, 'easeInOutExpo');
  });

  // for demo purpose only
  $('a[href="#"]').on('click', function(e) {
    e.preventDefault();
  });

  // form submit handler
  $('#contact-form').submit(function(e) {
    e.preventDefault();
    $('#form-message').toaster();
  });

  // work dialog handler
  $('#work-grid .learn-more').on('click', function(e) {
    var img = $(this).closest('.bmd-card').find('.bmd-card-image-holder img').attr('src');
    $("#work-img").attr('src', img);
    if (img.indexOf('work8') > -1) {
      $('#work-img + .bmd-fab').removeClass('btn-primary').addClass('btn-danger')
    } else {
      $('#work-img + .bmd-fab').removeClass('btn-danger').addClass('btn-primary')
    }
    $("#work-modal").modal('show');
  });
}(jQuery));
