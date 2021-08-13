$(document).ready(function(){
    $('.top_jets_page .inner_list li').each(function(){
        $(this).delay($(this).index()*200).animate({opacity: 1},500);
    });
});