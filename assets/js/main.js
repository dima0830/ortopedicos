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

     $('#tienda-mobil').carousel({
        interval:   8000
    });


    $('#tienda2').carousel({
        interval:   9000
    });

    $('#marcas').carousel({
        interval:   7000
    });

    /*Buscador*/
    $(window).scroll(function (event) {
        var scroll = $(window).scrollTop();
        // Do something
        if(scroll > 150) {
        	$( "#trBuscar" ).show();
        } else {
        	$( "#trBuscar" ).hide();
        }
    });
    $( "#trBuscar" ).click(()=>{
      $( "#inputBuscar" ).focus();
    });

var $height = $(window).scrollTop();
  if($height > 50) {
        $('#bucas').addClass('actve-scroll');
    } else {
        $('#bucas').removeClass('actve-scroll');
    }
});
