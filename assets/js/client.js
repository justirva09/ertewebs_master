function menuToggle(){
    $('.nav-toggle').on('click', function(){
        $(this).toggleClass('active');
        $('.header-right').toggleClass('active');
    })
}

$(document).ready(function(){
    $(window).bind('scroll', function(){
        if($(window).scrollTop() > 150) {
            $('#main-header').addClass('fixed');
        } else {
            $('#main-header').removeClass('fixed');
        }
    });
    menuToggle();
})