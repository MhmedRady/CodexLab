$(document).ready(function(){
  "use strict";
    $('.spinner-wrapper').fadeOut();
    $('body').fadeIn(1000);



    //     /*<!--    START SCROLI TOP BTN    -->*/

        var scrollTop = $('#top');
        $(window).scroll(function (){
        if($(window).scrollTop() >= 500){
        if (scrollTop.is(':hidden')) {
        scrollTop.fadeIn(1000);
        }
        }else {
        scrollTop.fadeOut(1000);
        }
        });
        // ClICK TO SCROLI TOP
        scrollTop.click(function (event) {
        event.preventDefault();
        $('html, body').animate({
        scrollTop: 0
        }, 1000);
        });

  /*********** ** SIDE SHOP ** *************/

  var W_ =  $(window).width(),
  open_ = $('#_side'),
  side_ = $('.side_'),
  close_= $('#close_side') ;

  $('.shop').each(function(){
    if (W_<=991) {
      $('.side_').addClass('side_md');
      open_.on('click',function(){
        side_.toggleClass('openSide_');
        if (side_.hasClass('openSide_')) {
          side_.animate({
            left:0,
          });
          open_.animate({
            left: '380px',
          });
        }else {
          side_.animate({
            left:'-400px',
          });
          open_.animate({
            left: 0,
          });
        }
      });
    }

  });

  close_.click(function(){
    open_.click();
  });

  $('#search_').each(function(){
    $(this).val('');
  });

  $('#mob_cat').click(function(){
    open_.click();
  });

    /*

  	17. Init Reviews Slider

  	*/
	initReviewsSlider();
  	function initReviewsSlider()
  	{
  		if($('.reviews_slider').length)
  		{
  			var reviewsSlider = $('.reviews_slider');

  			reviewsSlider.owlCarousel(
  			{
  				items:3,
  				loop:true,
  				margin:30,
  				autoplay:false,
  				nav:false,
  				dots:true,
  				dotsContainer: '.reviews_dots',
  				responsive:
  				{
  					0:{items:1},
  					768:{items:2},
  					991:{items:3}
  				}
  			});
  		}
  	}

});
