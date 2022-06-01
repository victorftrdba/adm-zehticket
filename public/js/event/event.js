/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*************************************!*\
  !*** ./resources/js/event/event.js ***!
  \*************************************/
tinymce.init({
  selector: '#description',
  plugins: 'a11ychecker media advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinymcespellchecker',
  toolbar: 'undo redo | styleselect | forecolor | bold italic | alignleft aligncenter alignright alignjustify | outdent indent',
  language: 'pt_BR',
  height: '480'
});
var btnAddMore = document.querySelector('#btnAddMore');
btnAddMore.addEventListener('click', function () {
  var ticket = document.querySelector('#ticket');
  var ticketFirstChild = ticket.firstElementChild;
  var ticketClone = ticketFirstChild.cloneNode(true);
  ticket.appendChild(ticketClone);
});
/******/ })()
;