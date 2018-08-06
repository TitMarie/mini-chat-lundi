//raffréchie la page
setInterval(function() {
        $.get("includes/messages.php", function(htmlmessage) {
        $('#messages-container').html(htmlmessage);
        window.scrollTo(0, 9999);        
    })    
}, 2000)


//requête ajax pour envoyer les inputs sur store.php sans aller directement sur la page
function storeMessage(event, form) {
    // let $form = $(form);
    $('form').find('#btnenvoi').text('En cours..');

    event.preventDefault();

    $.post({
        url: $('form').attr('action'),
        data : $('form').serialize(),
        // data: 'pseudo=' + $('#pseudo').val() + '&message=' + $('#message').val(),
        success: function(error) {
            if(error) {
                alert(error);
            }
            //si pas d'ereur
            $('form').find('#btnenvoi').text('Envoyer');
            //enlever la valeur envoyé de l'input message
            $('#message').val('');
        }
    })

}


