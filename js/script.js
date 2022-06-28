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
        if ($('#label-nav').text() != sessionStorage.getItem('page')) {
            $("#label-nav").append(sessionStorage.getItem('page'));
        }

    } else {
        $("#overlay").show();
    }

    var switchPage = $("#mySwitch");

    if (sessionStorage.getItem('page') == "Particulier") {
        $(".pro").remove();
        $('.part').show();
        switchPage.attr("checked", true)

    } else if (sessionStorage.getItem('page') == "Professionnel") {
        $(".part").remove();
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




    $('.navbar .nav-list li').click(function(e) {
        var click = $(this).children().attr("href");
        localStorage.setItem('active', click);
        var active = localStorage.getItem('active');

        if (active == $('main').attr('id')) {
            $(this).siblings().removeClass('active').end().addClass('active');
        }

        //e.preventDefault();

        //$this.parent().siblings().removeClass('active').end().addClass('active');

        //Load the page content in to element
        //with id #content using ajax (There are other ways)
        //$('#content').load($this.href());
    });





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

    AOS.init({
        offset: 100,
        duration: 700,
        easing: 'ease-in-sine',
        delay: 500,
        once: true,
        disable: 'mobile'
    });

});