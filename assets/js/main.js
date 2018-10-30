$(document).ready(function(){
$(".fancyb").fancybox();
    $(".fancyform").fancybox({
        padding:    0
    });

    $(".dropdown").focus(            
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
            $(this).toggleClass('open');       
        }
    );

    $('#tienda').carousel({
        interval:   8000
    });

    $('#tienda2').carousel({
        interval:   9000
    });

    $('#marcas').carousel({
        interval:   7000
    });


});

