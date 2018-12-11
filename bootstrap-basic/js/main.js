/**
 * Main Javascript.
 * This file is for who want to make this theme as a new parent theme and you are ready to code your js here.
 */




(function($) {
  $(document).ready(function(){
    new WOW().init();
		$(".help-block-doctors option").clone().appendTo("select[name='your-doctor']");
	
		$('.block-certificates .certificate').owlCarousel({
			autoplay:true,
			autoplayTimeout:5000,
			loop:true,
			nav: false,
			/*navText: ["<img alt='arrow_left' src='../sites/all/themes/bootstrap_subtheme/img/arrow_left_partner.png'  />",
						  "<img alt='arrow_right' src='../sites/all/themes/bootstrap_subtheme/img/arrow_right_partner.png'  />"],*/
			items:4,

			responsive: { //Адаптация в зависимости от разрешения экрана
					  0: {
						  items: 1
					  },
						767: {
							items: 2
						},
					  992: {
						  items: 3
					  },
					  1200: {
							items: 4
						}
				  }
		});
    
	 
		$('.block-team .people').owlCarousel({
			autoplay:true,
			autoplayTimeout:5000,
			loop:true,
			nav: false,
			/*navText: ["<img alt='arrow_left' src='../sites/all/themes/bootstrap_subtheme/img/arrow_left_partner.png'  />",
						  "<img alt='arrow_right' src='../sites/all/themes/bootstrap_subtheme/img/arrow_right_partner.png'  />"],*/
			items:4,

			responsive: { //Адаптация в зависимости от разрешения экрана
					  0: {
						  items: 1
					  },
						767: {
							items: 2
						},
					  992: {
						  items: 3
					  },
					  1200: {
							items: 4
						}
				  }
			});

		
		$('.block-slider-big-corusel').owlCarousel({
			autoplay:true,
			autoplayTimeout:5000,
			loop:true,
			nav: false,

			items:1,
			responsive: { //Адаптация в зависимости от разрешения экрана
				0: {
					items: 1
				},
				767: {
					items: 1
				},
				992: {
					items: 1
				},
				1200: {
					items: 1
				}
			}


		});
		
		$('.block-info-about .img-block').owlCarousel({
			autoplay:true,
			autoplayTimeout:5000,
			loop:true,
			nav: false,

			items:1,
			responsive: { //Адаптация в зависимости от разрешения экрана
				0: {
					items: 1
				},
				767: {
					items: 1
				},
				992: {
					items: 1
				},
				1200: {
					items: 1
				}
			}


		});

		$('.block-reviews.main .all-reviews').owlCarousel({
			autoplay:true,
			autoplayTimeout:5000,
			loop:true,
			nav: true,
			navText: ["<img alt='arrow_left' src='/wp-content/themes/bootstrap-basic/img/left-arrow.png'  />",
			 "<img alt='arrow_right' src='/wp-content/themes/bootstrap-basic/img/right-arrow.png'  />"],
			items:1,


		});

		$('input[name="acceptance-765"]').styler();
		$("input[name='your-tel']").mask("+7-999-99-99-999");
		
		$( ".service-content.post .name-section" ).click(function() {
			number=$(this).attr("num"); console.log(".service-content .services-section[num='"+number+"']");
			
			if ( $( ".service-content .services-section[num='"+number+"']" ).is( ":hidden" ) ) {
				$( ".service-content .services-section[num='"+number+"']" ).slideDown( "slow" );
			} else {
				$( ".service-content .services-section[num='"+number+"']" ).hide("slow");
			}
			
			
		});

});

	
})( jQuery );
