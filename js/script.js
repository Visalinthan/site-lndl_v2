$(document).ready(function() {
    $("#overlay .flip-card").click(function() {
        var page = $(this).attr('id');
        sessionStorage.setItem('page', page);

        setTimeout(function() {
            location.href = 'home.php';
        }, 1000);
    });

    if (sessionStorage.getItem('page') == "Particulier" || sessionStorage.getItem('page') == "Professionnel") {
        $("#overlay").hide();
        $("#label-nav").append(sessionStorage.getItem('page'));

    } else {
        $("#overlay").show();
    }

    var switchPage = $("#mySwitch");

    if (sessionStorage.getItem('page') == "Particulier") {
        $(".pro").hide();
        $('.part').show();
        switchPage.attr("checked", true)

    } else if (sessionStorage.getItem('page') == "Professionnel") {
        $(".part").hide();
        $('.pro').show();
        switchPage.attr("checked", false)
    }

    switchPage.click(function() {
        if ($("input[type=checkbox]").is(":checked")) {
            sessionStorage.setItem('page', 'Particulier');
        } else {
            sessionStorage.setItem('page', 'Professionnel');
        }
        location.href = 'home.php';
    });

    AOS.init({
        offset: 100,
        duration: 700,
        easing: 'ease-in-sine',
        delay: 500,
        once: true,
        disable: 'mobile'
    });

});