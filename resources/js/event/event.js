tinymce.init({
    selector: '#description',
    plugins: 'a11ychecker advcode casechange export formatpainter image editimage linkchecker autolink lists media checklist permanentpen powerpaste table advtable tinymcespellchecker',
    toolbar: 'undo redo | styleselect | forecolor | bold italic | alignleft aligncenter alignright alignjustify | image media | outdent indent',
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
