/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/main.js ***!
  \******************************/
(function ($) {
  "use strict";

  var fullHeight = function fullHeight() {
    $('.js-fullheight').css('height', $(window).height());
    $(window).resize(function () {
      $('.js-fullheight').css('height', $(window).height());
    });
  };

  fullHeight();
  $('#sidebarCollapse').on('click', function () {
    $('#sidebar').toggleClass('active');
  });
})(jQuery);
/******/ })()
;