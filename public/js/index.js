(function($){
   ' use strict';
   	// sidebar

	$('.bar').on('click', function(){
		$('.sidebar').animate({ right : 0 });
	});

	$('.sidebar-close').on('click', function(){
		$('.sidebar').animate({ right : -250 });
	});
	// social-box-ms

	    
    
    $(window).scroll(function(){

        var dis = $(window).scrollTop();

        if (dis > 700) {
            $('.box , .ms').show();
        }
        else 
        $('.box , .ms').hide();

    });

    $('.box').on('click',function(){
        $('html').animate({scrollTop:0});
    })
	

    // social-icon
    $(window).scroll(function(){

        var so = $(window).scrollTop();

        if (so > 800) {
            $('.social-icons ').addClass('social');
        }
        else 
        $('.social-icons').removeClass('social');
    });

     // wow.js

     var wow = new WOW(
        {
          boxClass:     'wow',      // animated element css class (default is wow)
          animateClass: 'animate__animated', // animation css class (default is animated)
          offset:       0,          // distance to the element when triggering the animation (default is 0)
          mobile:       true,       // trigger animations on mobile devices (default is true)
          live:         true,       // act on asynchronously loaded content (default is true)
          callback:     function(box) {
            // the callback is fired every time an animation is started
            // the argument that is passed in is the DOM node being animated
          },
          scrollContainer: null,    // optional scroll container selector, otherwise use window,
          resetAnimation: true,     // reset animation on end (default is true)
        }
      );
      wow.init();



}) (jQuery);