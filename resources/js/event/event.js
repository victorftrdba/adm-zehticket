tinymce.init({
    selector: '#description',
    plugins: 'a11ychecker media advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinymcespellchecker',
    toolbar: 'undo redo | styleselect | forecolor | bold italic | alignleft aligncenter alignright alignjustify | outdent indent',
    language: 'pt_BR',
    height: '480'
})

const btnAddMore = document.querySelector('#btnAddMore');

btnAddMore.addEventListener('click', () => {
    const ticket = document.querySelector('#ticket');

    const ticketFirstChild = ticket.firstElementChild;
    const ticketClone = ticketFirstChild.cloneNode(true);

    ticket.appendChild(ticketClone);
});
