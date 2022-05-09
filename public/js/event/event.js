/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*************************************!*\
  !*** ./resources/js/event/event.js ***!
  \*************************************/
var btnAddMore = document.querySelector('#btnAddMore');
btnAddMore.addEventListener('click', function () {
  var ticket = document.querySelector('#ticket');
  var ticketFirstChild = ticket.firstElementChild;
  var ticketClone = ticketFirstChild.cloneNode(true);
  ticket.appendChild(ticketClone);
});
/******/ })()
;