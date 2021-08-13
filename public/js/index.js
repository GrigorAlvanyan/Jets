$(document).ready(function(){
    //all functions for index page call here
    if($('.main_slider').length > 0) {
        $('.main_slider').slick({
            arrows: true,
            dots: false,
            autoplay: false,
            autoplaySpeed: 4000,
        })
    }

    if($('.inner_slider').length > 0) {
        $('.inner_slider').slick({
            arrows: true,
            dots: false,
            autoplay: false,
            autoplaySpeed: 4000,
        })
    }

    if($('.slider_block').length > 0) {
        $('.slider_block').slick({
            arrows: false,
            dots: true,
            autoplay: false,
            autoplaySpeed: 4000,
        });

        $('a[data-slide]').click(function(e) {
            e.preventDefault();
            var slideno = $(this).data('slide');
            $('.slider_block').slick('slickGoTo', slideno - 1);
        });

        var selector = '.list_btn li';

        $(selector).on('click', function(){
            $(selector).removeClass('active_slide');
            $(this).addClass('active_slide');
        });
    }

});