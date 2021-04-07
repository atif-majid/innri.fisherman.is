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
  $('.file-repeater, .contact-repeater, .repeater-default, .type-of-notification, .production-site, .list-of-suppliers, .selling-locations').repeater({
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
          alert('show');
          $(this).slideDown(function(){
              alert('slidedown');
              //$(this).find('.js-example-basic-single').select2();
              /*$(this).each('.js-example-basic-single', function(index, obj){
                  obj.select2()
              });*/
              $('.js-example-basic-single').each(function(i, obj) {
                  alert(i);
                  alert(obj);
                  $(this).select2();
              });
          });
      },
      hide: function (deleteElement) {
          alert('hide');
          if (confirm('Are you sure you want to delete this element?')) {
              $(this).slideUp(deleteElement);
              //$(this).each('.js-example-basic-single', ).select2();
              /*$(this).each('.js-example-basic-single', function(index, obj){
                  obj.select2()
              });*/
              $('.js-example-basic-single').each(function(i, obj) {
                  //test
                  //obj.select2();
                  $('.js-example-basic-single').each(function(i, obj) {
                      alert(i);
                      alert(obj);
                      $(this).select2();
                  });
              });
          }
      },
      ready: function (setIndexes) {
          alert('ready');
          //$(this).find('.js-example-basic-single').select2();
          /*$(this).each('.js-example-basic-single', function(index, obj){
              obj.select2()
          });*/
          $('.js-example-basic-single').each(function(i, obj) {
              //test
              //obj.select2();
          });
      },
  });


});
