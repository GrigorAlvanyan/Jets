var $tabletSizes = 992;
var $smallTSize = 768;

function isTouchDevice() {
	return 'ontouchstart' in document.documentElement;
}

function detectDevice() {
	if (navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0) {
		$('body').addClass('ios_device');
	};
	if(isTouchDevice()) {
		$('html').addClass('touch');
	} else {
		$('html').addClass('web');
	}
}

function closeAllMenues(evt) {
	detectDevice();
	if(window.innerWidth > $smallTSize) {
		$('.main_menu > li.opened').removeClass('opened');
		$('.submenu_list').fadeOut(300);
	}

}

function ignorBodyClick(evt){
	evt.stopPropagation();
}

function ignorMobileBodyClick(evt){
	if (window.innerWidth < 992) {
		evt.stopPropagation();
	}
}

function dropToggle(evt) {
    evt.preventDefault();
    if(!$(this).parent().hasClass('opened')) {
        closeAllMenues(evt);
        evt.stopPropagation();
        $(this).parent().addClass('opened').find('.drop_list').stop(true, true).slideDown(300);
    }
}

function dropList(dropButton, dropList,dropItem,dropElement) {
    if(dropButton.parents(dropItem).hasClass('opened')) {
        dropButton.parents(dropItem).removeClass('opened').find(dropElement).slideUp(300);
    } else {
        dropButton.parents(dropList).find('.opened').removeClass('opened');
        dropButton.parents(dropList).find(dropElement).slideUp(300);
        dropButton.parents(dropItem).addClass('opened').find(dropElement).stop(true,true).slideDown(300);
        setTimeout(function(){
            if($(dropList).find('.opened').length > 0) {
                if(dropButton.parents(dropItem).offset().top < $(document).scrollTop()) {
                    $('body,html').animate({scrollTop:dropButton.parents(dropItem).offset().top},300);
                }
            }
        },300)
    }

}

function mobMenuTrigger(e){
	e.preventDefault();
	if ($('body').hasClass('menu_opened')) {
		$('body').removeClass('menu_opened');
	} else {
		$('.menu_list li').removeClass('opened');
		$('.submenu_list').hide();
		$('.header_menu_inner').animate({scrollTop: 0},0);
		$('body').addClass('menu_opened');
	}
}

function passengerDrop(e){
	e.preventDefault();
	if (!$('body').hasClass('passenger_popup')) {
		setTimeout(function(){
			$('body').addClass('passenger_popup');
		},0)

	}
}

function detectContentHeight() {
	var freeSpace = window.innerHeight - $('.header').height() - $('.footer').height();
	if (freeSpace > 0) {
		$('.content').css('min-height',freeSpace);
	} else {
		$('.content').css('min-height',0);
	}
	$('.footer').css('opacity',1);
}

function checkFields() {
    $('form input').change(function() {
        if ($(this).val().length > 0) {
            $(this).parent().find('.individual_hint').show();
            $(this).parent().find('.standard_hint').hide();
        } else {
            $(this).parent().find('.individual_hint').hide();
            $(this).parent().find('.standard_hint').show();
        }

        if($('.confirm_field').length > 0) {
            $('.confirm_field').on('keyup change',function(){
                if($(this).val() == $(this).parents('form').find('.password_field').val()) {
                    $(this).parent().removeClass('has-error');
                    passwordConfirm = true;
                }
            })
        }
    });
}

function checkPassConfirm() {
    var passValue = $('.confirm_field').parents('form').find('.password_field').val();
    var passConfirm = $('.confirm_field').val();
    if(passValue && passValue != passConfirm && $('.pass_fields').css('display') != "none") {
        $('.confirm_field').parent().addClass('has-error');
        passwordConfirm = null;
    } else {
        passwordConfirm = true;
    }
}

function checkForm(e) {
    var $button = $(this);
    if($button.parents('form').find('.confirm_field').length > 0) {
        checkPassConfirm();
    } else {
        passwordConfirm = true;
    }
    $.validate({
        scrollToTopOnError: false,
        onError: function() {
            if ($button.parents('form').hasClass('login_form') || $button.parents('form').hasClass('register_form')) {

                $('.has-error').each(function(){
                    var errorInputType = $(this).find('input').attr('type');
                    $('input[type="'+errorInputType+'"]').parents('.general_field').addClass('has-error');
                });
            }
        },
        onSuccess: function() {
            if(!passwordConfirm) {
                return false;
            }
        }

    });
    setTimeout(function(){
        if($button.hasClass('checkout_submit') && $('.has-error').length > 0) {
            $('body, html').animate({scrollTop: $('.has-error').eq(0).offset().top - $('.header').height()},1000);
        }
    },100)
}

function openLanguages(evt) {
	evt.preventDefault();
	if (!$('.language_block').hasClass('opened')) {
		closeAllMenues(evt);
		evt.stopPropagation();
		$('.language_block').addClass('opened');
		$('.language_list').stop(true,true).slideDown();
	}
}

function dropToggle(e) {
	e.preventDefault();
	if($(this).parent().hasClass('opened')) {
		$(this).parent().removeClass('opened').find('.drop_element').slideUp(300);
	} else {
		$('.drops_list li').removeClass('opened');
		$('.drop_element').slideUp(300);
		$(this).parent().addClass('opened').find('.drop_element').stop(true,true).slideDown(300);
		setTimeout(function(){
			if($('.drops_list li.opened').offset().top < $(document).scrollTop()) {
				$('body,html').animate({scrollTop:$('.drops_list li.opened').offset().top},300);
			}
		},300)
	}
}

function openSubWithClick(evt){
	evt.preventDefault();
	if(isTouchDevice() && window.innerWidth > $smallTSize) {
		if(!$(this).parents('li').hasClass('opened')) {
			closeAllMenues(evt);
			evt.stopPropagation();
			$(this).parents('li').addClass('opened').find('.submenu_list').stop(true,true).slideDown(300);
		}
	}
}

function openSubWithHover(){
	if (!isTouchDevice() && window.innerWidth > 768) {
		var $item = $(this).parents('li');
		$item.addClass('hovered');
		setTimeout(function(){
			if ($item.hasClass('hovered')) {
				$item.addClass('opened').find('.submenu_list').stop(true,true).slideDown(300);
			}
		},300)
	}
}

function initMap() {
	if($('.map_block').data('coords')){
		var map =  null;
		var positions = $('.map_block').data('coords').split(",");
		function initialize() {
			map = new google.maps.Map(document.getElementById('map-canvas'), {
				zoom: 17,
				center: {
					lat: positions[0]*1,
					lng: positions[1]*1
				},
				styles: [
					[
						{
							"featureType": "administrative",
							"elementType": "all",
							"stylers": [
								{
									"saturation": "-100"
								}
							]
						},
						{
							"featureType": "administrative.province",
							"elementType": "all",
							"stylers": [
								{
									"visibility": "off"
								}
							]
						},
						{
							"featureType": "landscape",
							"elementType": "all",
							"stylers": [
								{
									"saturation": -100
								},
								{
									"lightness": 65
								},
								{
									"visibility": "on"
								}
							]
						},
						{
							"featureType": "poi",
							"elementType": "all",
							"stylers": [
								{
									"saturation": -100
								},
								{
									"lightness": "50"
								},
								{
									"visibility": "simplified"
								}
							]
						},
						{
							"featureType": "road",
							"elementType": "all",
							"stylers": [
								{
									"saturation": "-100"
								}
							]
						},
						{
							"featureType": "road.highway",
							"elementType": "all",
							"stylers": [
								{
									"visibility": "simplified"
								}
							]
						},
						{
							"featureType": "road.arterial",
							"elementType": "all",
							"stylers": [
								{
									"lightness": "30"
								}
							]
						},
						{
							"featureType": "road.local",
							"elementType": "all",
							"stylers": [
								{
									"lightness": "40"
								}
							]
						},
						{
							"featureType": "transit",
							"elementType": "all",
							"stylers": [
								{
									"saturation": -100
								},
								{
									"visibility": "simplified"
								}
							]
						},
						{
							"featureType": "water",
							"elementType": "geometry",
							"stylers": [
								{
									"hue": "#ffff00"
								},
								{
									"lightness": -25
								},
								{
									"saturation": -97
								}
							]
						},
						{
							"featureType": "water",
							"elementType": "labels",
							"stylers": [
								{
									"lightness": -25
								},
								{
									"saturation": -100
								}
							]
						}
					]
				]
			});

			var marker = new google.maps.Marker({
				position:  {lat: positions[0]*1, lng: positions[1]*1},
				icon: 'css/images/map_marker.svg',
				map: map,

			});

		}
		google.maps.event.addDomListener(window, "resize", function() {
			var center = map.getCenter();
			google.maps.event.trigger(map, "resize");
			map.setCenter(center);
		});
		google.maps.event.addDomListener(window, 'load', initialize);
	}
}


function mouseLeaveItem(){
	$(this).parents('li').removeClass('hovered');
}

function closeSubWithHover(){
	if (!isTouchDevice()) {
		$(this).removeClass('opened').find('.submenu_list').fadeOut(300);
	}
}

function comboHover() {
	$(this).parents('.combo_hover').addClass('hovered');
}

function comboUnHover() {
	$(this).parents('.combo_hover').removeClass('hovered');
}

function tabSwitch(e) {
	e.preventDefault();
	if(!$(this).hasClass('selected')) {
		$(this).parents('.tab_buttons').find('a').removeClass('selected');
		$(this).parents('.tab_section').find('.tab_block').removeClass('selected');
		$(this).addClass('selected');
		$('.tab_block.'+$(this).data('tab')).addClass('selected');
	}
}

function detectCallPosibillity() {
	if (/Android|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(navigator.userAgent)) {
	  	$('.phone_link').addClass('clickable');
	}
	$('.phone_link').click(function(e){
		if(!$(this).hasClass('clickable')) {
			e.preventDefault();
		}
	})
}

function initSlider(sliderEl, sliderOpts) {
	sliderEl.slick(sliderOpts);
}

function accordionToggle(_button, _block, _list) {
    if(_button.parent(_block).hasClass('opened')) {
        _button.parent(_block).removeClass('opened');
        _button.parent(_block).find(_list).slideUp(300);
    } else {
        $(_block).removeClass('opened');
        $(_list).slideUp(300);
        _button.parent(_block).addClass('opened').find(_list).stop(true,true).slideDown(300);
    }
}
function goToTarget() {
    var endPoint = $(this).data('endpoint');
    $('html,body').animate({scrollTop: $('[data-target="'+endPoint+'"]').offset().top - $('.header_inner').height()},500);
    if($('[data-target="'+endPoint+'"]').parent().hasClass('tab_buttons')) {
        $('[data-target="'+endPoint+'"]').trigger('click');
    }
}

function openPopup(evt) {
    evt.preventDefault();
    $('body').addClass('popup_opened');
    var popupName = '.' + $(this).data('popup');
    $(popupName).addClass('showed');
}

function closePopup() {
    $('body').removeClass('popup_opened');
    $('.popup_block').removeClass('showed');
}
function changeCount(decreaseBtn, increaseBtn, countInput) {

	$(document).on('change', countInput, function () {
		var thisDecrease = $(this).parents('.product_count').find('.decrease_btn');
		var thisIncrease = $(this).parents('.product_count').find('.increase_btn');
		var maxValue = $(this).data('max') ? $(this).data('max') : Math.pow(10, $(this).attr('maxlength')) - 1;
		if ($(this).val() <= 1) {
			$(this).val(1);
			thisDecrease.addClass('inactive');
			thisIncrease.removeClass('inactive');
		} else if ($(this).val() >= maxValue) {
			$(this).val(maxValue);
			thisIncrease.addClass('inactive');
			thisDecrease.removeClass('inactive');
		} else {
			thisIncrease.removeClass('inactive');
			thisDecrease.removeClass('inactive');
		}
	})

	$(document).on('click', decreaseBtn, function () {
		var thisInput = $(this).parent().find('input');
		var thisIncrease = $(this).parent().find('.increase_btn');
		var _value = thisInput.val();
		thisIncrease.removeClass('inactive');
		if (_value > 1) {
			_value--;
			thisInput.val(_value);
		}
		if (_value == 1) {
			$(this).addClass('inactive');
		}
	});

	$(document).on('click', increaseBtn, function () {
		var thisInput = $(this).parent().find('input');
		var thisDecrease = $(this).parent().find('.decrease_btn');
		var _value = thisInput.val();
		var maxValue = thisInput.data('max') ? thisInput.data('max') : Math.pow(10, thisInput.attr('maxlength')) - 1;
		thisDecrease.removeClass('inactive');
		if (_value < maxValue) {
			_value++;
			thisInput.val(_value);
		}
		if (_value == maxValue) {
			$(this).addClass('inactive');
		}
	});
}


$(document).ready(function(){
	//detect device type
	detectDevice();
	detectCallPosibillity();

	//hover effect with multiple links hover
	$('.combo_link').hover(comboHover,comboUnHover);

	$('.submenu_btn').hover(openSubWithHover,mouseLeaveItem);
	$('.main_menu > li').hover(function(){},closeSubWithHover);
	$('.submenu_btn').click(openSubWithClick);

	//intlTelInput
	if ($('.time_picker').length > 0) {
		$('.time_picker').timepicker({

		});
	}

	changeCount('.decrease_btn', '.increase_btn', '.product_count input');

	if ($('.telephone_block').length > 0) {
	    var countryCode = $('.telephone_block').attr('data-country');
		var input = document.querySelector(".telephone_block");
		var tellval = window.intlTelInput(input, {
			nationalMode: true,
			hiddenInput: 'fullNumber',
			separateDialCode: false,
			utilsScript: 'js/intlInputPhone.min.js',
			preferredCountries: [countryCode],
		});
		var tellChange = function () {
			if (tellval.isValidNumber()) {
				var tellhead = tellval.getNumber();
				$('input[name=fullNumber]').val(tellhead)
			} else {
				$('input[name=fullNumber]').val('')
			}
		};

		input.addEventListener('change', tellChange);
		input.addEventListener('keyup', tellChange);
	}
	//close dropdowns with outside click
	$('body').click(closeAllMenues);

    if($('.when_input').length > 0) {
        $('.when_input').daterangepicker({
			autoUpdateInput: false,
        });

		$('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
			$(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
		});

		$('input[name="datefilter"]').on('cancel.daterangepicker', function(ev, picker) {
			$(this).val('');
		});
    }
	//opening/closing mobile menu
	$('.menu_btn').click(mobMenuTrigger);

	// form front validation
	if($('.validate_btn').length > 0) {
		checkFields();
		$('.validate_btn').click(checkForm);
	}
	if($('.slider_jets .images_slider').length > 0) {
		$('.slider_jets .images_slider').slick({
			slidesToShow: 2,
			responsive: [
				{
					breakpoint: 960,
					settings: {
						slidesToShow: 2.33,
					}
				},
				{
					breakpoint: 576,
					settings: {
						slidesToShow: 2.25,
					}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
					}
				}
			]
		})
	}

	if($('.ibiza_slider .images_slider').length > 0) {
		$('.ibiza_slider .images_slider').slick({
			slidesToShow: 1.1,
			responsive: [
				{
					breakpoint: 960,
					settings: {
						slidesToShow: 2.33,
					}
				},
				{
					breakpoint: 576,
					settings: {
						slidesToShow: 1.25,
					}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
					}
				}
			]
		})
	}
	//our company page
	$('.our_company .list_partners li').each(function(){
		$(this).delay($(this).index()*200).animate({opacity: 1},500);
	});

	$('body').click(function(e){
		if(!$(e.target).is('.passenger_list *') && $('body').hasClass('passenger_popup')) {
			$('body').removeClass('passenger_popup')
		}
	})
	$('.passenger_block > label').click(passengerDrop);

	//jet inner page
	$('.top_jets_inner .city_list li').each(function(){
		$(this).delay($(this).index()*200).animate({opacity: 1},500);
	});

	$(window).scroll(function () {
		if ($(document).scrollTop() > 40) {
			$('.header').addClass('fixed')
		} else {
			$('.header').removeClass('fixed');
		}
	}).trigger('scroll');

    if($('.animation_block').length > 0) {
        $(window).scroll(function(){
            $('.animation_block').each(function(){
                if($(this).offset().top + $(this).height()/2 < $(document).scrollTop() + window.innerHeight) {
                    $(this).addClass('showed');
                } else if($(this).offset().top > $(document).scrollTop() + window.innerHeight) {
                    $(this).removeClass('showed');
                }
            })
        }).trigger('scroll');
    }

});

$(window).on('load',function(){
	$(window).resize(function(){
		//detect content min height and show footer
		detectContentHeight();

	}).trigger('resize');
	setTimeout(function(){
		if($('.num_block[data-num]').length > 0) {
			$(window).scroll(function(){
				if($('.num_block').length > 0) {
					$('.num_block').each(function() {
						if(!$(this).hasClass('showed') && $(document).scrollTop() + window.innerHeight >= $(this).offset().top + 100) {
							var $this = $(this),
								countTo = $this.data('num');
							$(this).addClass('showed');
							$({ countNum: $this.text()}).animate({
									countNum: countTo
								},

								{
									duration: 2500,
									easing:'linear',
									step: function() {
										$this.text(Math.floor(this.countNum));
									},
									complete: function() {
										$this.text(this.countNum);
									}

								});
						}

					});
				}
			}).trigger('scroll')
		}
	},1000);
});
