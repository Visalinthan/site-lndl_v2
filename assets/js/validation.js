var validation = {
    rules: {},
    messages: {},
    errorPlacement: function(error, element) {
        if (element.is(":radio") || element.is(":checkbox")) {
            error.appendTo(element.parents('ul'));
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

    console.log(champs);

    addRegexValidator();

    jQuery.each(champs, function(index, value) {
        /*
                if (value.attr("name") == "nom") {
                    validation.rules[value.attr('name')] = { required: true };
                    validation.messages[value.attr('name')] = "Veuillez entrer votre " + value.attr('name');
                }
                if (value.attr("name") == "prenom") {
                    validation.rules[value.attr('name')] = { required: true };
                    validation.messages[value.attr('name')] = "Veuillez entrer votre " + value.attr('name');
                }

        */
        validation.rules[value.attr('name')] = { required: true };

        if (value.attr('type') == "text") {
            validation.messages[value.attr('name')] = "Veuillez entrer votre " + value.attr('name');
        }

        if (value.attr('type') == "email") {
            validation.rules[value.attr('name')] = { required: true, regex: /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i };
            validation.messages[value.attr('name')] = { required: "Veuillez entrer votre adresse mail", regex: "Veuillez entrer une adresse mail valide !" };
        }

        if (value.attr('type') == "number") {
            if (value.attr("name") == "tel") {
                validation.rules[value.attr('name')] = { required: true, regex: /^(?:(?:\+|00)33|0)\s*[1-9](?:[\s.-]*\d{2}){4}$/gmi };
                validation.messages[value.attr('name')] = { required: "Veuillez entrer votre numéro de téléphone", regex: "Veuillez entrer un numéro de téléphone valide !" };
            } else if (value.attr("name") == "tel_filleul") {
                validation.rules[value.attr('name')] = { required: true, regex: /^(?:(?:\+|00)33|0)\s*[1-9](?:[\s.-]*\d{2}){4}$/gmi };
                validation.messages[value.attr('name')] = { required: "Veuillez entrer le numéro de téléphone du filleul", regex: "Veuillez entrer un numéro de téléphone valide !" };
            } else {
                validation.messages[value.attr('name')] = "Veuillez entrer votre " + value.attr('name');
            }
        }

        if (value.attr('type') == "radio") {
            validation.messages[value.attr('name')] = "Veuillez sélectionnez votre " + value.attr('name');
        }

        if (value.attr('type') == "checkbox") {
            validation.rules[value.attr('name')] = { required: true, minlength: 1 };
            if (value.attr('name') == "projet[]") {
                validation.messages[value.attr('name')] = "Veuillez sélectionnez un ou plusieurs projet(s)";
            } else {
                validation.messages[value.attr('name')] = "Veuillez sélectionnez un ou plusieurs type de projet(s)";
            }
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
    var form = $("#contactform");
    ValidationRulesAndMessage(form, inputs);
    form.validate(validation);

});