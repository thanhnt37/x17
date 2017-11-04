
//   begin: show search box for mobile
$('#search-icon-mobile').on('click', function () {
    $('#search-box-mobile').toggleClass('hidden shown');
});
//   end

//   begin: show search box for mobile
$('#menu').on('click', function () {
    $('.wrap-left-navigation').css('display', 'block');
    $('#left-navigation').toggleClass('open');
});
$('.wrap-left-navigation').on('click', function () {
    $('#left-navigation').toggleClass('open');
    $('.wrap-left-navigation').css('display', 'none');
});
//  end

$(document).ready(function() {
    // Check if body height is higher than window height :)
    if ($("body").height() > $(window).height()) {
        var previous = window.scrollY;
        window.addEventListener('scroll', function(event) {
            $offset = ( $(window).width() > 991 ) ? ($('.header').outerHeight() + $('.navbar').outerHeight()) : $('.navbar').outerHeight();

            if( window.scrollY >= $offset ) {
                $('body').css('padding-top', '56px');

                isScrollUp = (window.scrollY < previous);

                if (isScrollUp) {
                    $('nav').removeClass('scroll-down').addClass('scroll-up');
                } else {
                    $('#search-box-mobile').removeClass('shown').addClass('hidden');
                    $('nav').removeClass('scroll-up').addClass('scroll-down');
                }

                previous = window.scrollY;
            } else if( window.scrollY > 0) {
                $('body').css('padding-top', '0');
                $('#search-box-mobile').removeClass('shown').addClass('hidden');
                $('nav').removeClass('scroll-up').removeClass('scroll-down');
            }
        });
    }
});