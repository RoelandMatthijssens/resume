$(function() {
	$('.carousel').carousel();
	$('[rel="tooltip"]').tooltip({trigger : 'hover'});
	
/*
	$(".fancybox").find("img").stop(true, true).animate({
	                "opacity": 0.75
	            }, "slow");

	$(".fancybox").on("mouseenter", function () {
	                $(this).find("img").stop(true, true).animate({
	                    "opacity": 1
	                }, "slow");
	}).on("mouseleave", function () {
	            $(this).find("img").stop(true, true).animate({
	                "opacity": 0.2
	            }, "fast");
	}).fancybox({
	    padding: 0,
	    openEffect: 'elastic',
	    openSpeed: 250,

	    closeEffect: 'elastic',
	    closeSpeed: 450,
	    closeClick: false,

	    helpers: {
	        overlay: {
	            css: {
	                'background': 'rgba(0, 0, 0, 0.9)'
	            }
	        }
	    }
	});*/
	$(".fancybox").fancybox({
			prevEffect		: 'none',
			nextEffect		: 'none',
			closeBtn		: false,
			helpers		: {
				media : {},
				title	: { type : 'inside' },
				buttons	: {}
			}
		});
});