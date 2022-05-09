const btnAddMore = document.querySelector('#btnAddMore');

btnAddMore.addEventListener('click', () => {
    const ticket = document.querySelector('#ticket');

    const ticketFirstChild = ticket.firstElementChild;
    const ticketClone = ticketFirstChild.cloneNode(true);

    ticket.appendChild(ticketClone);
});
