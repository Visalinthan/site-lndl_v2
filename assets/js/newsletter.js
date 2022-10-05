$(function() {
    var form = $("#newsletterform");

    document.getElementById("newsletterform").addEventListener("submit", function(evt) {

        if (form.valid()) {
            $.ajax({
                type: "post",
                url: "form/post-newletter.php",
                data: $(form).serialize(),
            }).done(function() {
                $("#newsletterform")[0].reset();
                $('#successModal').modal('show');
                $('#successModal .modal-title').append('Newsletter');
                $('#successModal .modal-body').append('<p> Votre de demande a bien été envoyée ! </p>');
            });

        }
        evt.preventDefault();
        return true;

    });
});