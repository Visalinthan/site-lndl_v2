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

        validation.rules[value.attr('name')] = { required: true };

        console.log(value);

        if (value.attr('type') == "text") {
            validation.messages[value.attr('name')] = { required: "Veuillez entrer votre " + value.attr('name') };
        }

        if (value.attr('type') == "number") {
            validation.messages[value.attr('name')] = { required: "Veuillez entrer votre " + value.attr('name') };
        }

        if (value.attr('type') == "email") {
            validation.rules[value.attr('name')] = { required: true, regex: /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i };
            validation.messages[value.attr('name')] = { required: "Veuillez entrer votre adresse mail", regex: "Veuillez entrer une adresse mail valide !" };
        }

        if (value.attr('type') == "number") {
            if (value.attr("name") == "tel" || value.attr("name") == "phone") {
                validation.rules[value.attr('name')] = { required: true, regex: /^(?:(?:\+|00)33|0)\s*[1-9](?:[\s.-]*\d{2}){4}$/gmi };
                validation.messages[value.attr('name')] = { required: "Veuillez entrer votre numéro de téléphone", regex: "Veuillez entrer un numéro de téléphone valide !" };
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
                validation.messages[value.attr('name')] = "Veuillez cocher la case ";
            } else {
                validation.messages[value.attr('name')] = "Veuillez sélectionnez un ou plusieurs" + value.attr('name');
            }
        }

        if (value.attr('id') == "choose") {
            validation.messages[value.attr('name')] = { required: "Veuillez selectionnez !" };
        }

        if (value.attr('id') == "comment-message") {
            validation.messages[value.attr('name')] = { required: "Veuillez écrire votre demande" };
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
    var form = $("form");
    if (form) {
        ValidationRulesAndMessage(form, inputs);
        form.validate(validation);
    }
});