
//   begin: show search box for mobile
$('#search-icon-mobile').on('click', function () {
    $('#search-box-mobile').toggleClass('hidden shown');
});
//   end

//   begin: show search box for mobile
$('#menu').on('click', function () {
    $('.show-aside').css('z-index', '98');
    $('.wrap-left-navigation').css('display', 'block');
    $('#left-navigation').toggleClass('open');
});
$('.show-aside').on('click', function () {
    $('.wrap-left-navigation').toggle();
    $('.show-aside').toggleClass('open');
    $('aside').toggleClass('open');
});
$('.wrap-left-navigation').on('click', function () {
    $('#left-navigation').removeClass('open');
    $('aside').removeClass('open');
    $('.show-aside').removeClass('open').css('z-index', '100');
    $('.wrap-left-navigation').css('display', 'none');
});
//  end

$(document).ready(function() {
    // Check if body height is higher than window height :)
    if ($("body").height() > $(window).height()) {
        var previous = window.scrollY;
        window.addEventListener('scroll', function(event) {
            // scroll for nav
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

            // scroll for aside
            if( $(window).width() > 991 ) {
                minOffset = $('.header').outerHeight() + $('.navbar').outerHeight() + $('.ads-300x250').outerHeight();
                maxOffset = minOffset + $('#article-detail > h3').outerHeight() + $('#article-detail > .publish-date').outerHeight() + $('#article-detail > .social-share').outerHeight() + $('#article-detail > .cover-image').outerHeight() + $('.article-content').outerHeight() + $('.article-footer').outerHeight();
                console.log(maxOffset);
                console.log(window.scrollY);

                if( window.scrollY <= minOffset ) {
                    $('#article-page aside').removeClass('fixed').removeAttr('style');
                } else {
                    if( window.scrollY < (parseInt(maxOffset) - 10 - $('.ads-300x250').outerHeight()) ) {
                        $('#article-page aside').addClass('fixed').removeAttr('style');
                    } else {
                        console.log(parseInt(maxOffset));
                        $('#article-page aside').removeAttr('style').removeClass('fixed').attr('style', 'margin-top:' + (parseInt(maxOffset) - $('.ads-300x250').outerHeight() - $('#article-page aside').outerHeight()) + 'px');
                    }
                }
            }
        });
    }
});