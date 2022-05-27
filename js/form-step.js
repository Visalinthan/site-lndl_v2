var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

//Affiche chaque partie de formulaire en fonction du paramètre 
function showTab(n) {
    // This function will display the specified tab of the form...

    var x = document.getElementsByClassName("form-step");
    var y = x[currentTab].getElementsByTagName("input");
    x[n].style.display = "flex";

    //... and fix the Previous/Next buttons:
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

    document.querySelectorAll('.btn-simuler').forEach(item => {
        item.addEventListener('click', event => {
            var btnClicked = item.getAttribute("id");

            if (btnClicked == 'nextBtn' && validateForm(y)) {
                nextPrev(1);
            } else if (btnClicked == 'prevBtn') {
                nextPrev(-1);
            }
        });

    });



    /*
        x[currentTab].querySelectorAll("input").forEach(item => {

            item.addEventListener('click', e => {
                validateForm(y);
            });
        });
    */

    //... and run a function that will display the correct step indicator:
    //fixStepIndicator(n)
}

// bouton next 
function nextPrev(n) {
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("form-step");

    // Exit the function if any field in the current tab is invalid:
    // if (n == 1 && !validateForm()) return false;
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    console.log(currentTab + "+" + n)
    currentTab = currentTab + (n);

    // if you have reached the end of the form...
    if (currentTab >= x.length) {
        // ... the form gets submitted:
        document.getElementById("regForm").submit();
        return false;
    }
    // Otherwise, display the correct tab:
    showTab(currentTab);
}


function validateForm(y) {
    var i, valid = false;

    // A loop that checks every input field in the current tab:
    for (i = 0; i < y.length; i++) {
        // If a field is empty...    
        if (y[i].value == "" || y[i].validity.valid == false) {
            // add an "invalid" class to the field: 
            if (!y[i].classList.contains("invalid")) {
                y[i].className += " invalid";
            }

            valid = false;

        } else if (!y[i].classList.contains("valid")) {
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

/*
function fixStepIndicator(n) {
    // This function removes the "active" class of all steps...
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
    }
    //... and adds the "active" class on the current step:
    x[n].className += " active";
}*/