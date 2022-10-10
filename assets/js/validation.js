var validation = {
    rules: {},
    messages: {},
    errorPlacement: function(error, element) {
        if (element.is(":radio") || element.is(":checkbox")) {
            let label = $('label[for="' + $(element).attr("id") + '"]');
            error.appendTo(label);
        } else { // This is the default behavior 
            error.insertAfter(element);
        }
    }
}

function initForm(formulaire, champs) {

    $(formulaire).find(':input', ':select', ':textarea').each(
        function() {
            var input = $(this);
            if (input.attr('type') != "submit") {
                champs.push(input);
            }
        }
    );
}

function addRegexValidator() {
    jQuery.validator.addMethod(
        "regex",
        function(value, element, regexp) {
            if (regexp.constructor != RegExp)
                regexp = new RegExp(regexp);
            else if (regexp.global)
                regexp.lastIndex = 0;
            return this.optional(element) || regexp.test(value);
        }, "erreur expression reguliere"
    );
}



function ValidationRulesAndMessage(formulaire, champs) {

    initForm(formulaire, champs);

    addRegexValidator();

    jQuery.each(champs, function(index, value) {


        if (value.attr('type') == "text") {
            if (value.attr('name') == "prenom") {
                validation.messages[value.attr('name')] = { required: "Veuillez entrer votre prénom " };
            } else if (value.attr('id') == "other-chauffe") {
                console.log(value.attr('id'));
                validation.rules[value.attr('name')] = { required: true };
                validation.messages[value.attr('name')] = { required: "Veuillez entrer votre autre type de chauffage " };
            } else {
                validation.messages[value.attr('name')] = { required: "Veuillez entrer votre " + value.attr('name') };
            }

        }


        if (value.attr('type') == "email" && value.attr('id') != "mail-f") {
            validation.rules[value.attr('name')] = { required: true, regex: /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i };
            validation.messages[value.attr('name')] = { required: "Veuillez entrer votre adresse mail", regex: "Veuillez entrer une adresse mail valide !" };
        }

        if (value.attr('type') == "number") {
            if (value.attr("name") == "tel" || value.attr("name") == "phone") {
                validation.rules[value.attr('name')] = { required: true, regex: /^(?:(?:\+|00)33|0)\s*[1-9](?:[\s.-]*\d{2}){4}$/gmi };
                validation.messages[value.attr('name')] = { required: "Veuillez entrer votre numéro de téléphone", regex: "Veuillez entrer un numéro de téléphone valide !" };
            } else if (value.attr('name') == "nbFoyer") {
                validation.messages[value.attr('name')] = { required: "Veuillez entrer le nombre de personne dans votre foyer" };
            } else if (value.attr("name") == "codepostale") {
                validation.messages[value.attr('name')] = "Veuillez entrer votre code postale";
            } else {
                validation.messages[value.attr('name')] = "Veuillez entrer votre " + value.attr('name');
            }
        }

        if (value.attr('type') == "radio") {
            validation.messages[value.attr('name')] = "Veuillez sélectionnez votre " + value.attr('name');
        }

        if (value.attr('type') == "checkbox") {
            validation.rules[value.attr('name')] = { required: true, minlength: 1 };
            if (value.attr('name') == "accept") {
                validation.messages[value.attr('name')] = "Merci d'accepter notre politique de confidentialité et mentions légales";
            } else {
                validation.messages[value.attr('name')] = "Veuillez sélectionnez un ou plusieurs" + value.attr('name');
            }
        }

        if (value.attr('id') == "choose") {
            validation.messages[value.attr('name')] = { required: "Comment peut-on vous aider ?" };
        }

        if (value.attr('id') == "ville") {
            validation.messages[value.attr('name')] = { required: "Veuillez entrer votre ville " };
        }

        if (value.attr('id') != "comment-message" && value.attr('id') != "mail-f") {
            validation.rules[value.attr('name')] = { required: true };
        }





    });

}

function backend_API_challenge() {
    var response = grecaptcha.getResponse();
    $.ajax({
        type: "POST",
        url: 'https://www.google.com/recaptcha/api/siteverify',
        data: { "secret": "(6Ld7JBQdAAAAAJkRLISko3n-ThD9r7oMZ8ZfJId0)", "response": response, "remoteip": "localhost" },
        contentType: 'application/x-www-form-urlencoded',
        success: function(data) { console.log(data); }
    });
}

$(function() {
    var inputs = [];
    var form;

    if (document.getElementById("form-simule")) {
        form = $("#form-simule");
        ValidationRulesAndMessage(form, inputs);
        form.validate(validation);
    }

    if (document.getElementById("contactform")) {
        form = $("#contactform");
        ValidationRulesAndMessage(form, inputs);
        form.validate(validation);
    }

    if (document.getElementById("newsletterform")) {
        document.getElementById("newsletterform").addEventListener("submit", function(evt) {
            form = $("#newsletterform");
            ValidationRulesAndMessage(form, inputs);
            form.validate(validation);
        });
    }


});