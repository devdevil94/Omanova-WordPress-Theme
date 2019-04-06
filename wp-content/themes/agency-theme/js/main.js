

// Or with jQuery

$(function(){
   
    $('.carousel.carousel-slider').carousel({
        fullWidth: true,
        indicators: true
    });
    
    $('.sidenav').sidenav();
    $('.parallax').parallax();
    $('input#input_text, textarea#textarea').characterCounter();
    $('.modal').modal();
});



