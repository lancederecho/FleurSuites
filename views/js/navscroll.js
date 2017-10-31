$(document).ready(function() {
	$(window).scroll(function() {
  	if($(document).scrollTop() > 10) {
    	$('div.navbar').addClass('shrink');
    }
    else {
    $('div.navbar').removeClass('shrink');
    }
  });
});