/*=========================================================================================
    File Name: Form-Repeater.js
    Description: form repeater page specific js
    ----------------------------------------------------------------------------------------
    Item Name: Frest HTML Admin Template
    Version: 1.0
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

$(document).ready(function () {
  // form repeater jquery
  $('.file-repeater, .contact-repeater, .repeater-default, .type-of-notification, .production-site, .list-of-suppliers, .selling-locations, .list-of-fishtypes, .list-of-warehouse').repeater({
    show: function () {
      $(this).slideDown();
    },
    hide: function (deleteElement) {
      if (confirm('Are you sure you want to delete this element?')) {
        $(this).slideUp(deleteElement);
      }
    }
  });

  $('.repeater-default-select2').repeater({
      show: function () {
          $(this).slideDown(function(){
              $('.js-example-basic-single').select2();
          });
      },
      hide: function (deleteElement) {
          if (confirm('Are you sure you want to delete this element?')) {
              $(this).slideUp(deleteElement);
          }
      },
      ready: function (setIndexes) {
          $('.js-example-basic-single').select2();
      },
  });


});
