AOS.init({
 duration: 800,
 easing: 'slide',
 once: false
});


$(function(){
console.log('admin privew');



  /**** START FIXED MENU ****/

var menu=$('.fixedmenu'),
 menuClick = $('.CODEXmnu');

  menuClick.click(function(){
    menu.toggleClass('open');
    if (menu.hasClass('open')) {
      menu.animate({
        right:'-40px',
      },1000);
    }else {
      menu.animate({
        right:'-295px',
      },1000);
    }
  });

  $('.op-list').click(function(){
    $('.list').toggleClass('o-li');
    if ($('.list').hasClass('o-li')) {
      $('.list').animate({
        height:'260px',
      });
    }else {
      $('.list').animate({
        height:0,
      },500);
    }
  });

  $('#sidebarCollapse').on('click', function () {
      $('#sidebar').toggleClass('active');
  });

  /**** END FIXED MENU ****/

  /* START TEXT CROP FUNCTION */

      function cropText(select,max) {
      var t = $(select).text().length;
      $(select).each(function(e){
      if (t > max) {
        var crop = $(this).text().substr(0,max);
      var get =  $(this).text(crop + ' '+'[..]');
      }
      });
      };

  /*************************************************************/
  // console.log('works');
    cropText('#adN',5);

/****************************************/



var siteCarousel = function () {
  if ( $('.nonloop-block-13').length > 0 ) {
    $('.nonloop-block-13').owlCarousel({
      center: false,
      items: 1,
      loop: true,
      stagePadding: 0,
      margin: 0,
      smartSpeed: 1000,
      autoplay: true,
      nav: true,
      navText: ['<span class="icon-arrow_back">', '<span class="icon-arrow_forward">'],
      responsive:{
        600:{
          margin: 0,
          nav: true,
          items: 2
        },
        1000:{
          margin: 0,
          stagePadding: 0,
          nav: true,
          items: 2
        },
        1200:{
          margin: 0,
          stagePadding: 0,
          nav: true,
          items: 3
        }
      }
    });
  }

  let owl2 = $('.slide-one-item-alt-text').owlCarousel({
    center: false,
    items: 1,
    loop: true,
    stagePadding: 0,
    margin: 0,
    smartSpeed: 1000,
    autoplay: true,
    pauseOnHover: true,
    onDragged: function(event) {
      console.log('event : ',event.relatedTarget['_drag']['direction'])
      if ( event.relatedTarget['_drag']['direction'] == 'left') {
        $('.owl-1').trigger('next.owl.carousel');
      } else {
        $('.owl-1').trigger('prev.owl.carousel');
      }
    }
  });

  let owl = $('.owl-1').owlCarousel({
    // animateOut: 'fadeOut',
    center: true,
    items: 1,
    loop: true,
    margin: 0,
    smartSpeed: 1500,
    dots: true,
    autoplay: true,
    pauseOnHover: false,
    onDragged: function(event) {
      console.log('event : ',event.relatedTarget['_drag']['direction'])
      if ( event.relatedTarget['_drag']['direction'] == 'left') {
        $('.slide-one-item-alt-text').trigger('next.owl.carousel');
      } else {
        $('.slide-one-item-alt-text').trigger('prev.owl.carousel');
      }
    }
  })

  $( '.owl-dot' ).on( 'click', function() {
    console.log(owl2.trigger('to.owl.carousel', $(this).index()));
  })




  $('.owl-2').owlCarousel({
    animateOut: 'fadeOut',
    center: true,
    items: 1,
    loop: true,
    margin: 0,
    smartSpeed: 1500,
    autoplay: true,
    pauseOnHover: false
  });
  $('.owl-3').owlCarousel({
    animateOut: 'fadeOut',
    center: true,
    items: 1,
    loop: true,
    margin: 0,
    smartSpeed: 1500,
    autoplay: true,
    pauseOnHover: false
  })

  $('.slide-one-item').owlCarousel({
    center: false,
    items: 1,
    loop: true,
    stagePadding: 0,
    margin: 0,
    smartSpeed: 1500,
    autoplay: true,
    pauseOnHover: false,
    dots: true,
    nav: false,
    navText: ['<span class="icon-keyboard_arrow_left">', '<span class="icon-keyboard_arrow_right">']
  });




  $('.slide-one-item-alt').owlCarousel({
    center: false,
    items: 1,
    loop: true,
    stagePadding: 0,
    margin: 0,
    smartSpeed: 1000,
    autoplay: true,
    pauseOnHover: true,
    onDragged: function(event) {
      console.log('event : ',event.relatedTarget['_drag']['direction'])
      if ( event.relatedTarget['_drag']['direction'] == 'left') {
        $('.slide-one-item-alt-text').trigger('next.owl.carousel');
      } else {
        $('.slide-one-item-alt-text').trigger('prev.owl.carousel');
      }
    }
  });

  if ( $('.owl-all').length > 0 ) {
    $('.owl-all').owlCarousel({
      center: false,
      items: 1,
      loop: false,
      stagePadding: 0,
      margin: 0,
      autoplay: false,
      nav: false,
      dots: true,
      touchDrag: true,
      mouseDrag: true,
      smartSpeed: 1000,
      navText: ['<span class="icon-arrow_back">', '<span class="icon-arrow_forward">'],
      responsive:{
        768:{
          margin: 30,
          nav: false,
          responsiveRefreshRate: 10,
          items: 1
        },
        992:{
          margin: 30,
          stagePadding: 0,
          nav: false,
          responsiveRefreshRate: 10,
          touchDrag: false,
          mouseDrag: false,
          items: 3
        },
        1200:{
          margin: 30,
          stagePadding: 0,
          nav: false,
          responsiveRefreshRate: 10,
          touchDrag: false,
          mouseDrag: false,
          items: 3
        }
      }
    });
  }

};
  siteCarousel();

  $('.owl-prev').html("<span class='fa fa-chevron-left'></span>");
  $('.owl-next').html("<span class='fa fa-chevron-right'></span>");

  /******************************************/

  $('.fancybox-button').each('click',function(){
    // console.log($('.fancybox-thumbs__list').children()+'<<<<<<<<<<<<<<<<<<');
    console.log('img_click');
  });

  /*****************************************/


});
