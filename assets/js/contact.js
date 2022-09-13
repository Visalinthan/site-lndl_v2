$(function() {
    var form = $("#contactform");

    document.getElementById("contactform").addEventListener("submit", function(evt) {

        if (form.valid()) {
            $.ajax({
                type: "post",
                url: "form/post-contact.php",
                data: $(form).serialize(),
            }).done(function() {
                $("#contactform")[0].reset();
                $('#successModal').modal('show');
                $('#successModal .modal-title').append('Contact');
                $('#successModal .modal-body').append('<p> Votre de demande a bien été envoyé ! </p>');
            });

        }
        evt.preventDefault();
        return true;

    });
});