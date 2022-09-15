tinymce.init({
    selector: '#description',
    plugins: 'image autolink lists media table',
    toolbar: 'undo redo | styleselect | forecolor | bold italic | alignleft aligncenter alignright alignjustify | outdent indent',
    language: 'pt_BR',
    height: '480'
})

const btnAddMore = document.querySelector('#btnAddMore');

btnAddMore.addEventListener('click', () => {
    const removeTicketButton = document.createElement('button')
    removeTicketButton.setAttribute('type', 'button')
    removeTicketButton.setAttribute('class', 'btn btnRemoveTicket text-end')
    removeTicketButton.setAttribute('style', 'width:65%')
    removeTicketButton.innerHTML = '🗑️ Remover'

    const ticket = document.querySelector('#ticket');

    const ticketFirstChild = ticket.firstElementChild;
    const ticketClone = ticketFirstChild.cloneNode(true);

    ticket.appendChild(removeTicketButton)
    ticket.appendChild(ticketClone);

    removeTicket()
});

removeTicket()

function removeTicket() {
    const btnRemoveTicket = document.getElementsByClassName('btnRemoveTicket')

    Array.from(btnRemoveTicket).map(value => {
        value.addEventListener('click', () => {
            value.nextElementSibling.remove()
            value.remove()
        })
    })
}
