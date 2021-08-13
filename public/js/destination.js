$(document).ready(function(){

    $('.destinations_page .city_list li').each(function(){
        $(this).delay($(this).index()*200).animate({opacity: 1},500);
    });

    $('.ignore').niceSelect();

});