/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*************************************!*\
  !*** ./resources/js/event/event.js ***!
  \*************************************/
tinymce.init({
  selector: '#description',
  plugins: 'image autolink lists media table',
  toolbar: 'undo redo | styleselect | forecolor | bold italic | alignleft aligncenter alignright alignjustify | outdent indent',
  language: 'pt_BR',
  height: '480'
});
var btnAddMore = document.querySelector('#btnAddMore');
btnAddMore.addEventListener('click', function () {
  var removeTicketButton = document.createElement('button');
  removeTicketButton.setAttribute('type', 'button');
  removeTicketButton.setAttribute('class', 'btn btnRemoveTicket text-end');
  removeTicketButton.setAttribute('style', 'width:65%');
  removeTicketButton.innerHTML = '🗑️ Remover';
  var ticket = document.querySelector('#ticket');
  var ticketFirstChild = ticket.firstElementChild;
  var ticketClone = ticketFirstChild.cloneNode(true);
  ticket.appendChild(removeTicketButton);
  ticket.appendChild(ticketClone);
  removeTicket();
});
removeTicket();

function removeTicket() {
  var btnRemoveTicket = document.getElementsByClassName('btnRemoveTicket');
  Array.from(btnRemoveTicket).map(function (value) {
    value.addEventListener('click', function () {
      value.nextElementSibling.remove();
      value.remove();
    });
  });
}
/******/ })()
;