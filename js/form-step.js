var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab


//Affiche chaque partie de formulaire en fonction du paramètre 
function showTab(n) {

    var x = document.getElementsByClassName("form-step");

    x[n].style.display = "flex";

    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }

    if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Envoyer";
    } else {
        document.getElementById("nextBtn").innerHTML = "Continuer";
    }

    x[currentTab].querySelectorAll("input").forEach(item => {

        item.addEventListener('change', e => {
            validateForm();
        });
    });

}

function nextPrev(n) {
    var x = document.getElementsByClassName("form-step");


    if (n == 1 && !validateForm()) return false;
    x[currentTab].style.display = "none";
    currentTab = currentTab + n;

    if (currentTab >= x.length) {
        document.getElementById("regForm").submit();
        return false;
    }
    showTab(currentTab);
}


function validateForm() {
    var x, y, i, valid = true;

    x = document.getElementsByClassName("form-step");
    y = x[currentTab].querySelectorAll("input, select");

    for (i = 0; i < y.length; i++) {

        if (y[i].value == "" || y[i].validity.valid == false) {
            // add an "invalid" class to the field: 
            if (!y[i].classList.contains("invalid")) {
                y[i].classList.remove("valid");
                y[i].className += " invalid";
            }

            valid = false;

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