$(function() {
	
	// on scroll
	$(document).scroll(function() {
	    var x = $(this).scrollTop();
	    var threshold = $('.modaal-header').height() - 100;
	    var fixedHdr = $('.modaal-fixed-header');
	    
	    if (x >= threshold) {
		    fixedHdr.addClass('reveal');
		    $('.scroll-trigger').fadeOut(150);
	    } else {
		    fixedHdr.removeClass('reveal');
		    $('.scroll-trigger').fadeIn(150);
	    }
	    
	    $('.modaal-header .modaal-logo').css({
		    transform: 'translateY(' + x/3 + 'px)'
		});
	    $('.modaal-header .modaal-logo').css({
	    	opacity: 1 - (x/400)
	    });
	});
	
});