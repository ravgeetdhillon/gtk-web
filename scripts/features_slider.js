/**
 * Features page accordian
 * Devin Samarin <eboyjr14@gmail.com>
 **/

/*
$(function() {
	var features_box = $('#features_box');
	$('#features_box .accordian_info').hide();
	$('#features_box .accordian_head').mouseover(function() {
		$(this).next().slideDown("slow").parent().addClass("accordian_open");
	});
	features_box.mouseleave(function() {
		$('.accordian_open', features_box).removeClass("accordian_open").children(":last-child").slideUp("fast");
	});
});
*/

$.fn.gtk_slider = function() {
	var object = $(this);
	var slider = $('.list', object);
	var position = 0;
	
	var max = slider.children();
	slider.height( max.eq(position).height() );
	max = max.size()-1;
	
	var next = function() {
		if (position < max) {
			position++;
		} else {
			position = 0;
		}
		move(position);
		return false;
	};
	var prev = function() {
		if (position) {
			position--;
		} else {
			position = max;
		}
		move(position);
		return false;
	};
	
	var move = function(x) {
		slider.animate({marginLeft: -x*860, height: slider.children().eq(x).height() });
	};
	
	$('.next').click(next);
	$('.prev').click(prev);
};

$(function() {
	$('#features_box').gtk_slider();
});
