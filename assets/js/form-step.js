let currentTab = 0; // Current tab is set to be the first tab (0)
// Display the current tab

showTab(currentTab);


//Affiche chaque partie de formulaire en fonction du paramètre 
function showTab(n) {

    let x = document.querySelectorAll(".form-step");

    if (n <= 4) {
        $('.title-step h4').text("Étape 1 / 3 : Votre logement");
    } else if (x[n].classList.contains('projet') || x[n].classList.contains('serv')) {
        $('.title-step h4').text("Étape 2 / 3 : Votre projet");
    } else if (x[n].classList.contains('infos')) {
        $('.title-step h4').text("Étape 3 / 3 : Vos cordonnées");
    }

    if (x[n].classList.contains('projet')) {

        let projets = document.getElementsByName('projet[]');
        let serv = [];

        x.forEach(s => {
            if (s.classList.contains('serv')) {
                serv.push(s);
                s.remove();
            }
        });

        $(".projet input").on('change', function(event) {

            projets.forEach(p => {

                serv.forEach(s => {

                    if (p.checked) {
                        if (p.value == s.id) {
                            $(".projet").after(s);
                        }
                    } else if (!p.checked) {
                        if (p.value == s.id) {
                            s.remove();
                        }
                    }
                });
            });
        });

    }

    x[n].style.display = "flex";

    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }

    if (n == (x.length - 2)) {
        document.getElementById("nextBtn").innerHTML = "Valider";
    } else {
        document.getElementById("nextBtn").innerHTML = "Suivant";
    }

    x[currentTab].querySelectorAll("input").forEach(item => {

        item.addEventListener('change', e => {
            validateForm();
        });
    });

}

function nextPrev(n) {

    let x = document.querySelectorAll(".form-step");
    var form = $("form");
    var response = grecaptcha.getResponse();

    if (currentTab == (x.length - 2) && response.length == 0) {
        alert("Veuillez valider le captcha !");
        //evt.preventDefault();
        return false;
    } else if (form.valid()) {
        //let inputs = x[currentTab].querySelectorAll("input");
        if (n == 1 && !validateForm()) return false;

        x[currentTab].style.display = "none";
        currentTab = currentTab + n;

        if (currentTab == (x.length - 1)) {

            let datastring = $("#form-simule").serializeArray();
            document.getElementById("nextBtn").setAttribute('type', 'submit');

            $(".btn-form-step").css("display", "none");

            $("#form-simule").on('submit', function(event) {

                event.preventDefault();
                $.ajax({
                    type: "post",
                    url: "../form/post-simule.php",
                    contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
                    data: $(datastring),
                }).done(function() {
                    setTimeout(() => {
                        window.location.href = '../home.php';
                    }, 5000);
                });
            });


            showTab(currentTab);

        } else {
            showTab(currentTab);
        }

    }

}


function validateForm() {
    var x, y, i, valid = true;

    x = document.getElementsByClassName("form-step");
    y = x[currentTab].querySelectorAll("input, select");

    for (i = 0; i < y.length; i++) {

        if (y[i].value == "" || y[i].type != "checkbox" && y[i].validity.valid == false) {
            // add an "invalid" class to the field: 
            if (!y[i].classList.contains("invalid")) {
                y[i].classList.remove("valid");
                y[i].className += " invalid";
            }

            valid = false;

        } else if (y[i].type == "checkbox" && y[i].name == "projet") {

            let projets = document.getElementsByName('projet');
            let checked = []

            projets.forEach(function(p) {
                if (p.checked) {
                    checked.push(p);
                }
            });

            if (checked.length > 0) {
                y[i].classList.remove("invalid");
                y[i].className += " valid";
                valid = true;
            } else {
                y[i].classList.remove("valid");
                y[i].className += " invalid";
                valid = false;
            }

        } else if (!y[i].classList.contains("valid")) {

            y[i].classList.remove("invalid");
            y[i].className += " valid";
            valid = true;

        }

    }
    // If the valid status is true, mark the step as finished and valid:
    /* if (valid) {
         document.getElementsByClassName("step")[currentTab].className += " finish";
     }*/
    return valid; // return the valid status
}


function fixStepIndicator(n) {
    // This function removes the "active" class of all steps...
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
    }
    //... and adds the "active" class on the current step:
    x[n].className += " active";
}