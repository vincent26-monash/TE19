jQuery(document).ready(function($){
    $('#tabs-head a').on('click', function (e) {
      e.preventDefault();
      $(this).tab('show');
    });
	var options = {
		useEasing: true, 
		useGrouping: true,
		separator: ',', 
		decimal: '.', 
	};
	$('.count').each(function(){
		var demo = new CountUp($(this)[0], parseInt($(this).data('start')), parseInt($(this).data('end')), 0, 2.5, options);
		if (!demo.error){
			$(window).on('scroll',function(){
				if($(window).scrollTop()>$('#clients-desktop').offset().top)
				{
					demo.start();
				}
				else if($(window).scrollTop()>$('#clients-mobile').offset().top)
				{
					demo.start();
				}
			});			
		} else {
			console.error(demo.error);
		}
	});
	
	$('.scroll,.single-project-navigation a').click(function(e){
		$('html,body').animate({scrollTop:$($(this).attr('href')).offset().top - 80},1000);
		e.preventDefault();
	});
	
	$('.mobile-nav-toggle').on('click',function(e){
		$('#site-navigation').slideToggle();
		e.preventDefault();
	});
	
	if($(window).width()<1024)
	{
		$('.main-menu li').click(function(e){
			if($(this).has(".sub-menu"))
			{
				$(this).children(".sub-menu").slideToggle();
			}
		});
	}
	var amenityslider = new Swiper('#client-logo-mob',{
		slidesPerView:1,
		spaceBetween:0,
		speed: 2000,
		loop: true,
		autoplay: {
			delay: 3000,
			disableOnInteraction:false
		},
		fadeEffect: {
    crossFade: true
  },
				breakpoints: {
    
			768: {
			  slidesPerView: 1,
			  slidesPerGroup:1,
			  spaceBetween:0
			}
		  }
	});
	var amenityslider = new Swiper('#section2-mob',{
		slidesPerView:1,
		spaceBetween:0,
		speed: 2000,
		loop: true,
		autoplay: {
			delay: 3000,
			disableOnInteraction:false
		},
		fadeEffect: {
    crossFade: true
  },
				breakpoints: {
    
			768: {
			  slidesPerView: 1,
			  slidesPerGroup:1,
			  spaceBetween:0
			}
		  }
	});
    $("#footer-slide").click(function(){
        $("#slide").slideToggle();
    });
	
	

	$(document).ready(function() {
  $('#play-video').on('click', function(ev) {
 
    $("#video")[0].src += "&autoplay=1";
    ev.preventDefault();
 
  });
});

$(document).ready(function () {
  $(".video-gallery").magnificPopup({
    delegate: "a",
    type: "iframe",
    gallery: {
      enabled: true
    }
  });
});

	/* $(window).on('scroll',function(){
		if($(this).scrollTop() >= $('#clients-desktop').offset().top)
		{
			$('.count').each(function () {
				$('.count').prop('Counter',0).animate({
					Counter: $('.count').text()
				}, {
					duration: 4000,
					easing: 'swing',
					step: function (now) {
						$('.count').text(Math.ceil(now));
					}
				});
			});
		}
	}); */
	
	
	

	
	
	
	
    
new WOW().init();
});