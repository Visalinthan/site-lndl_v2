$(document).ready(function() {

    /*  $('#main-nav a').click(function() {
          //removing the previous selected menu state
          $('#main-nav').find('li.active').removeClass('active');
          //adding the state for this parent menu
          $(this).parents("li").addClass('active');

      });*/


    if (sessionStorage.getItem('page') == "Particuliers" || sessionStorage.getItem('page') == "Professionnels") {
        if ($('#label-nav').text() != sessionStorage.getItem('page')) {
            $("#label-nav").append(sessionStorage.getItem('page'));
        }

    }

    if (sessionStorage.getItem('page') == null) {
        sessionStorage.setItem('page', 'Particuliers');
        $("#label-nav").append('Particuliers')
    }

    var switchPage = $("#mySwitch");

    if (sessionStorage.getItem('page') == "Particuliers") {
        $(".pro").remove();
        $('.part').show();
        switchPage.attr("checked", true)

    } else if (sessionStorage.getItem('page') == "Professionnels") {
        $(".part").remove();
        $('.pro').show();
        switchPage.attr("checked", false)
    }

    switchPage.click(function() {
        if ($("input[type=checkbox]").is(":checked")) {
            sessionStorage.setItem('page', 'Particuliers');
        } else {
            sessionStorage.setItem('page', 'Professionnels');
        }
        location.reload();
    });


    let path = window.location.pathname;

    let links = document.querySelectorAll('#main-nav li a');

    for (const element of links) {

        if (element.pathname == path) {
            $("#main-nav li").siblings().removeClass('active');
            $(element.parentElement).addClass('active');
        }
    }


    $("#sous-menu ul li ").bind('click', function(e) {
        e.preventDefault(); // prevent hard jump, the default behavior

        var target = $(this).children().attr("href"); // Set the target as variable
        console.log(target);

        // perform animated scrolling by getting top-position of target-element and set it as scroll target
        $('main').animate({
            scrollTop: $(target).offset().top
        }, 500, function() {
            location.hash = target; //attach the hash (#jumptarget) to the pageurl
        });

        return false;
    });



    $(window).scroll(function() {
        var scrollDistance = $(window).scrollTop();
        var iHeight = $("main").height();

        if (iHeight - 450 <= scrollDistance) {
            $('#sous-menu ul').css('position', 'sticky');
        } else {
            $('#sous-menu ul').css('position', 'fixed');
        }

        $('.bloc').each(function(i) {
            if ($(this).position().top <= scrollDistance + 200) {
                $('#sous-menu li.active').removeClass('active');
                $('#sous-menu li').eq(i).addClass('active');
            }
        });

    }).scroll();


});