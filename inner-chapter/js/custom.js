jQuery(document).ready(function($) {

	// add current year to footer
	var d = new Date();
	var thisYear = d.getFullYear();
	$('#this-year').html(thisYear);

	// change the music production icon once every 1.5 seconds, 5 times (and repeat)
	changeMusicProdIcon(1500, 5);
	var animationEnded = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

	$('#main-heading').one(animationEnded, function() {
	  $('#ic-logo').css('visibility', 'visible').addClass('animated flipInY');
	});

	function changeMusicProdIcon(interval, frames) {
		var num = 1;
		var musicProdIcon = $('#music-production-icon');
		function changePos() {
			musicProdIcon.attr('id', 'pos' + num);
			num++;
			if(num === frames) num = 1;
		}
		var swap = window.setInterval(changePos, interval);
	}
});

	





