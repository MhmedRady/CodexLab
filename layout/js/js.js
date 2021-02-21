//
// $( window ).on( "load", function() {
//   $('.load').delay(5000).fadeOut();
//
// });

$( document ).ready(function() {
    $('.spinner-wrapper').fadeOut();
  /* SHOW BODY */

'use strict';
feather.replace()

/* fadeIn BODY AFTER DATA LOADING */
$('body').fadeIn(1000);
// $('.body').animate({
//   opacity:1,
// },1500);
$('.body').animate({
  opacity:1,
},2000);

function cropText(select,max) {
var t = $(select).text().length;
$(select).each(function(){
if (t > max) {
  var crop = $(this).text().substr(0,max);
var get =  $(this).text(crop + '[..]');
}
});
};
/** * VAR * **/
$('.getlen').each(function(){
  console.log('['+$(this).text().length+']');
});
var win=$(window),
nav=$('.head .header'),
divbrand =$('.head .brand'),
headhr =$('.head .hr'),
lang =$('.head .lang img'),
prIN =$('.Par-IN'),
navtfirtS =$('.head .navbar-brand span:first-of-type'),
navlastS =$('.navbar-brand span:last-of-type'),
ov=$('.Mainoverlay'),
gear=$('.head .click'),
fixedmenu=$('.fixed-menu'),
fixedintroM=$('.fixed-menu .intro-menu'),
fixedsearch = $('.fixed-menu .search-input'),
menuSH=$('.fixed-menu .search-input input'),
menucube=$('.fixed-menu .search-input .cube'),
cubelift =$('.fixed-menu .scene .cube > div , .fixed-menu .scene .cube'),
fixedhr=$('.fixed-cube hr'),
cube=$('.fixed-cube .cube');


/**/

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


win.on('scroll',function(){
  var scrl = win.scrollTop();
  // console.log(scrl);
  if (scrl >=100) {
    nav.addClass('fixed');
    headhr.addClass('FHR');
  }else {
    nav.removeClass('fixed');
    headhr.removeClass('FHR');
  }
  if ($('.social-icon li').hasClass('ftco-animated')) {
    $('.social-icon li').addClass('animate');
  }

});

for (var i = 0; i < 7; i++) {
  $('#W_'+i).delay(1500).animate({  opacity: 1,right:0 }, {
      step: function(now,fx) {
        $(this).css('-webkit-transform','rotateY('+now+'deg)');
        $(this).css('-moz-transform','rotateY('+now+'deg)');
        $(this).css('transform','rotateY('+now+'deg)');
      },
      duration:'slow'
  },'linear');
  $('#G_'+i).delay(1500).animate({  opacity: 1,left:0  }, {
      step: function(now,fx) {
        $(this).css('-webkit-transform','rotateY('+now+'deg)');
        $(this).css('-moz-transform','rotateY('+now+'deg)');
        $(this).css('transform','rotateY('+now+'deg)');
      },
      duration:'slow'
  },'linear');

}

/**** ** FIXED CUBE ** ****/

win.on('scroll',function(){
  var scrl = win.scrollTop(),
  hroffset=$('.ftco-intro').offset().top;
  // console.log(hroffset);
  if (scrl>=1000) {
    fixedhr.addClass('HR');
    $('.fixed-cube .scene').addClass('top');
  }

  if (fixedhr.hasClass('HR')) {
    fixedhr.delay(8000).animate({
      top:'-500px',
    });
    if ($('.fixed-cube .scene').hasClass('top')) {
      $('.fixed-cube .cube').addClass('animate_1');
    }
  }
});

(function showCube(){
  cube.each(function(){
    if ($(this).hasClass('show-top')) {
      $(this).delay(5000).fadeIn(200,function(){
        $(this).attr('class','cube show-left');
        showCube();
      });
    }else if ($(this).hasClass('show-left')) {
      $(this).delay(5000).fadeIn(200,function(){
        $(this).attr('class','cube show-right');
        showCube();
      });
    }else if ($(this).hasClass('show-right')) {
      $(this).delay(5000).fadeIn(200,function(){
        $(this).attr('class','cube show-bottom');
        showCube();
      });
    }else if ($(this).hasClass('show-bottom')) {
      $(this).delay(5000).fadeIn(200,function(){
        $(this).attr('class','cube show-front ');
        showCube();
      });
    }else if ($(this).hasClass('show-front')) {
      $(this).delay(5000).fadeIn(200,function(){
        $(this).attr('class','cube show-back');
        showCube();
      });
    }else if ($(this).hasClass('show-back')) {
      $(this).delay(5000).fadeIn(200,function(){
        $(this).attr('class','cube show-top ');
        showCube();
      });
    }
  });

}());


                //              FIXED MENU WITH EFFECTS

   gear.on('click', function(){


       fixedmenu.toggleClass('is-visible');
   if  (fixedmenu.hasClass('is-visible')){

        fixedmenu.animate({
       right:0,
     },500);

 // FIXED MENU OVERLAY

 ov.fadeIn(500);

   }else {

   fixedmenu.animate({
      right:'-350px'
    },500);

 // FIXED MENU OVERLAY

 ov.fadeOut(1500);
 $('.drop').delay(1000).click();

   }
   });

ov.click(function () {
  gear.click();
});

  menuSH.on('focus',function(){
    if ($('#Template').hasClass('show')) {
        $('#TM').click();
    }
    if ($('#Category').hasClass('show')) {
        $('#CAT').click();
    }
    fixedsearch.delay(1000).addClass('search-cupe');
    $('.fixed-menu .search-list').fadeIn(500);
    menucube.attr('class','cube show-left');
  });
  cubelift.click(function(){
    $('.fixed-menu .search-list').fadeOut(550);
      fixedsearch.removeClass('search-cupe');
  });
  $('.search-input .cube').click(function(){
    $(this).attr('class','cube show-bottom');
  });

  menuSH.keydown(function(){
    $('#insert').fadeOut(500);
  });

/****************************************************************/

/******  ** START ANIMATION  **  ******/

navtfirtS.delay(500).animate({
  top:0,
},1500);
headhr.delay(500).animate({
  width:'100%',
},1000);


 /**** ** ABOUT ** ****/

var show = $('.btn-N-P .show'),
ourlist  = $('.our-list ul');
var WE_1 = $('#we_1'),
    WE_2 = $('#we_2');

 $('.btn-N-P li').click(function(){

   if ($(this).is(':last-child')) {

     show.animate({
       right: '-10%',
       opacity:0,
     },500);
     show.siblings().animate({
       left:'25%',
       opacity:1,
     },500);
     // show.delay(1000).removeClass('show').siblings().addClass('show');

   }else {

     show.siblings().animate({
       left: '-10%',
       opacity:0,
     },500);

     show.animate({
       right:'25%',
       opacity:1,
     },500);

   }
   WE_1.delay(500).toggleClass('app');
   WE_2.delay(500).toggleClass('app');
 });

/****  ** OUR SERVICES **  ****/

$('.ftco-services .services').on('touchstart',function(){
  $(this).toggleClass('hi');
});

/****  ** VBODY **  ****/

(function getnext(){
  $('.vbody .show').each(function(){
    $('.vbody .show').fadeIn(200);
    if (!$(this).is(':last-child')) {
      $(this).delay(2000).fadeOut(200,function(){
        $(this).removeClass('show').next().addClass('show');
        getnext();
      });
    }else {
      $(this).delay(2000).fadeOut(200,function(){
        $(this).removeClass('show');
         $('.vbody div').eq(0).addClass('show');
         getnext();
      });
    }
  });

}());

/**********************************************/

/**** ABOUTUS PAGE ****/

$('.cont .data img ').on('touchstart',function(){
  $(this).toggleClass('hover').siblings().removeClass('hover');
});

$('.why .row>div').on('touchstart',function(){
  $(this).toggleClass('change').siblings().removeClass('change');
});

/****  ** OUR PROJECTS **  ****/

var selectP = $('.Projctes .select button');

selectP.click(function(){

  $(this).attr('aria-controls','true').siblings().attr('aria-controls','false');
  if ($(this).attr('aria-controls','true')) {
    $(this).addClass('active').siblings().removeClass('active');
  }
});

/**************************************************************/

/****  ** OUR PROJECTS **  ****/

/****** ** MOUSE UP AND MOUSE DOWN ** ******/

    $(window).on("scroll", function () {
           var $this = $(this),
               // $statusText = $("p > span"),
               currScroll = $this.scrollTop();
           if (currScroll > prevScroll){
               // console.log('down');
               // $statusText.text("down");
           } else {
             // console.log('up');
              // $statusText.text("up");
           }
           prevScroll = currScroll;
    });

/**************************************************************/

/****  ** OUR BLOG **  ****/
var fixed_info = $('.fixed_info i');

fixed_info.click(function(){
  var info_P = $(this).next(),
  val_len = $(this).next().text().length,
  info_P_H=info_P.innerHeight();
  $(this).parent().toggleClass('rol');
  $(this).parent().siblings().removeClass('rol');
  console.log(val_len);
  if (val_len>364) {
    cropText(info_P,372);
  }
  if ($(this).parent().hasClass('rol')) {
    // $(this).parent().css('height',info_P_H+80+'px');
    $(this).animate({
      top:'10%',
    },1000);
    $(this).parent().animate({
      left:'0',
    },1000);
    $(this).attr('class','info fa fa-times-circle');
    info_P.delay(1000).fadeIn(1000);
  }else {
    info_P.fadeOut(1000);
    $(this).animate({
      top:'70%',
    },1000);
    info_P.parent().animate({
      left:'-90%',
    },1000);
    $(this).attr('class','info fa fa-exclamation-circle');
  }
});

/***********************************************************************/

/*********** ** CODEX CONTENT ** ***********/

var CODEX_form = $('#_CONTENT'),
CODEX_send = $('#_send'),
CODEX_submet = $('#_submet'),
CODEX_name = $('#name'),
CODEX_name_err = $('#namerr'),
CODEX_check_N = true,
CODEX_phone = $('#phone'),
CODEX_phone_err = $('#phnerr'),
CODEX_check_P = true,
CODEX_mail = $('#_email'),
CODEX_mail_err = $('#_emlerr'),
CODEX_check_ml = true,
CODEX_cAT = $('#_CAT'),
CODEX_CAT_err = $('#_CATerr'),
CODEX_check_CAT = true,
CODEX_desc = $('#Trea'),
CODEX_desc_err = $('#deserr'),
CODEX_check_DESC = true,
CODEX_submet = true;

// $('.owl-carousel.owl-drag .owl-item').each(function(){
//   $(this).css({width: "320px !important"});
// });
/*************************************************************/
//

  var firstarray = ['1','2','3','4','5','6','7','8','9','0','۰', '۱', '۲', '۳', '٤','٥','٦','۸', '۹','/','*','!','<','>','(',')','.','-','+','=','÷','{','}','?',':',';','@','#','$','%','^','&','_','.','؟',','];

  CODEX_name.blur(function(){
    if (CODEX_name.val() !=='' ){
        CODEX_name_err.fadeOut(500);
        CODEX_check_N = false;
    }
  });

CODEX_cAT.on('change',function(){
  if (CODEX_cAT.val() == 0){
      CODEX_CAT_err.fadeOut(500);
      CODEX_check_CAT = false;
  }
});

CODEX_phone.blur(function(){
  if (CODEX_phone.val() !=='' && CODEX_phone.val().length == 11){
      CODEX_phone_err.fadeOut(500);
      CODEX_check_P = false;
  }
});

CODEX_desc.blur(function(){

  if (CODEX_desc.val() !==''){
    CODEX_desc_err.fadeOut(500);
    CODEX_check_DESC = false;
  }

});

  CODEX_send.on('click',function(){

    if (CODEX_name.val()=='') {
        CODEX_name_err.html("<small class='error'>  لم يتم ادخال اسم صاحب الطلب <i class='fa fa-exclamation-circle'></i> </small>");
        CODEX_name_err.fadeIn(500);
        CODEX_check_N = true;
    }
    else {

/*******************************************************/

var fvalN = CODEX_name.val().length,
    fvalF = CODEX_name.val();
if (fvalN > 0 ) {
    for (var i = 0; i < fvalN; i++) {
        var fval = CODEX_name.val().charAt(i);
        var num = 0 ;
       if ($.inArray(fval, firstarray) >= 0) {
         var num = 1;
       }else {
         var num = 0;
       }
    if (num==0) {
          CODEX_name_err.fadeOut(500);
             CODEX_check_N = false;
     }else if (num==1) {
             CODEX_name_err.html("<small class='error'> برجاء ادخال الاسم بشكل صحيح <i class='fa fa-exclamation-circle'></i> </small>");
              CODEX_name_err.delay(1000).fadeIn(500);
             CODEX_check_N = true;
             return;
        }
    }
}


/*****************************************************/

}
    if (CODEX_phone.val()=='') {
        CODEX_phone_err.html("<small class='error'>برجاء ادخال رقم الهاتف  <i class='fa fa-exclamation-circle'></i> </small>");
        CODEX_phone_err.fadeIn(500);
        CODEX_check_P = true;
    }else if (CODEX_phone.val().length !==17) {
      CODEX_phone_err.html("<small class='error'> هذا الرقم غير صحيح  <i class='fa fa-exclamation-circle'></i> </small>");
      CODEX_phone_err.fadeIn(500);
      CODEX_check_P = true;
    }else {
      CODEX_phone_err.fadeOut(500);
      CODEX_check_P = false;
    }

    if (CODEX_mail.val()=='') {
        CODEX_mail_err.html("<small class='error'>لم يتم ادخال البريد الالكتروني  <i class='fa fa-exclamation-circle'></i> </small>");
        CODEX_mail_err.fadeIn(500);
        CODEX_check_ml = true;
    } else {
      CODEX_mail_err.fadeOut(500);
      CODEX_check_ml = false;
    }

  // CODEX_name_err.html("<small class='error'> <i class='fa fa-exclamation-circle'></i> </small>");

    if (CODEX_cAT.val()==null) {
        CODEX_CAT_err.html("<small class='error'>لم يتم اختيار القسم  <i class='fa fa-exclamation-circle'></i> </small>");
        CODEX_CAT_err.fadeIn(500);
        CODEX_check_CAT = true;
    }else {
      CODEX_CAT_err.fadeOut(500);
      CODEX_check_CAT = false;
    }

    if (CODEX_desc.val()=='') {
        CODEX_desc_err.html("<small class='error'> قم بادخال وصفًا مختصرًا  للمشروع <i class='fa fa-exclamation-circle'></i> </small>");
        CODEX_desc_err.fadeIn(500);
        CODEX_check_DESC = true;
    }else {
      CODEX_desc_err.fadeOut(500);
      CODEX_check_DESC = false;
    }
  if (
    CODEX_check_N == false &&
    CODEX_check_P == false &&
    CODEX_check_ml == false &&
    CODEX_check_CAT == false &&
    CODEX_check_DESC == false
    ) {
      $('#_submet').click();
    }

  });

  CODEX_form.submit(function(e){
    if (
      CODEX_check_N == true &&
      CODEX_check_P == true &&
      CODEX_check_ml == true &&
      CODEX_check_CAT == true &&
      CODEX_check_DESC == true
      ) {
        e.preventDefault();
      }
  });

/****    ** STATIC FUNCTION **    ****/

/****************************************/

// ADD ( * ) TO Required INPUT & LABEL ---->

  $('label,input').each(function(){
    if ($(this).hasClass('requir')) {
        $(this).after('<div class="ast"><span class="asterisk">*</span></div>');
    }
        // $('.requir').after('<span class="asterisk">*</span>');
  });

  // SCROLI OFFSET FUNCTION

  function topscroli(btn,data,spead,top){
    var data= $($(btn).data(data));

    $(btn).on('click',function(e){
      // console.log(data);
    e.preventDefault();
    $('html , body').animate({
        scrollTop : data.offset().top-top
    },spead);
    });
  };

  // topscroli('#About','move',1000,50);
  // topscroli('#services','move',1000,50);
  topscroli('#AboutMe','move',1000,50);

  topscroli('#Cservices','move',1000,50);
  topscroli('#Cabout','move',1000,50);
  topscroli('#go_content','move',2000,50);
  topscroli('.page-item','page',2000,50);

  topscroli('#_contact , #Contact , #_order','cont',2000,50);
             /****   ****/

function overlayH(div,overlay){
  var overH = $(div).innerHeight();
$(overlay).css("height",overH);
$(window).on('resize',function(){
  var overH = $(div).height();
  $(overlay).css("height",overH);
});
}

overlayH('.ftco-about .STR','.ftco-about .overlay');


/***** ** ** *****/
/* START TEXT CROP FUNCTION */

function cropText(select,max) {
var t = $(select).text().length;
$(select).each(function(){
if (t > max) {
  var crop = $(this).text().substr(0,max);
var get =  $(this).text(crop + ' '+'  ...');
}
});
};
/*************************************************************/


/*** MOUSE ClICK ***/

// $(document)[0].oncontextmenu = function() { return false; }
//
//  $(document).mousedown(function(e) {
//    console.log(e.button);
//      if( e.button == 2 ) {
//          alert('Sorry, this functionality is disabled!');
//          e.preventDefault();
//          return false;
//      }
//  });


/********** STOP COPY & PASTE & CUT **********/

    function NOCOPY(input) {
      input.bind("cut copy paste",function(e) {
        e.preventDefault();
      });
    }

    NOCOPY(CODEX_name);
    NOCOPY(CODEX_phone);
             /****  *  ****/

  /* NUMERIC VALUES ID */

   $(".Numeric").keydown(function (e) {
       if ((e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
         (e.keyCode >= 35 && e.keyCode <= 40) ||
         $.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1) {
         return;
      }
      if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) &&
         (e.keyCode < 96 || e.keyCode > 105)) {
          e.preventDefault();
      }
   });

/**********************************************/
  //

// $('.top').css('background-position-y',100+'px');
  var prevScroll = 0;
var elm = $('.makeUS .heading-section h3');
var widthWin = win.width();
  $(window).on("scroll", function () {
         var $this = $(this),
         topBack = $('.top'),
         fram = $('.fram-top'),
         whyUS = $('.makeUS .heading-section h3'),
             // $statusText = $("p > span"),
             currScroll = $this.scrollTop();
             var valB = -100+currScroll,
             valBD = 100-currScroll,
             valY = -300+currScroll,
             valYD = 300+currScroll;
             if (widthWin<700) {
               valB = 0+currScroll;
             }
         if (currScroll > prevScroll){
          //   console.log('down'+currScroll);
             topBack.css('background-position-y',valBD+'px');
             // fram.css('margin-top',valBD+'px');
             // whyUS.css('top',valY+'px');

         } else {
        //   console.log('up'+currScroll);
           topBack.css('background-position-y',valB+'px');
           // whyUS.css('top',valYD+'px');
           // fram.css('margin-top',valB+'px');
         }
         prevScroll = currScroll;
  });

/************************  VIEW All CATEGORY  **************************/

    $('.CAT_select button').on('click', function (){

      if ($(this).data('cat') === '.all') {

        $('.CAT_parent').removeClass('V_CAT');
      } else {

        $('.CAT_parent').addClass('V_CAT');
        $($(this).data('cat')).removeClass('V_CAT');
      }
    });

/***********************************************************/

/********* **  START FOOTER ** *********/

cropText('.Hlength',60);

$("#_lock").on('click',function(){
  console.log('lock_msg');
  $('._msg_P span').animate({
    opacity:0
  },500,function(){

    $('.msg_numb').animate({
      opacity:1,
      top:'-10px',
      left:'-10px',
    },500);
      $('._chat').fadeOut();
      $('._msg_P button').fadeOut();
      $('.msg').fadeOut();
  });


});

$('#_chat').on('click',function(){
  $(".msg").addClass('on_chat');
  if (!$('._msg_P span').hasClass('write')) {
    $('._msg_P span').addClass('write');
    writer('._msg_P span','pargph');

  }
  $('._msg_P button').fadeIn();
  $('._msg_P span').css('opacity','1');
  $('._chat').fadeIn();
  $(".msg").fadeIn(2000);
});
/**************************************************/
console.log('width now >>>> '+$(window).width());
$('.desktop-content').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: false,
  arrows: false,
  autoplay: true,
  autoplaySpeed: 3000,
  draggable: false,
  pauseOnHover: false,
  pauseOnFocus: false
});

$('.mobile-content').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: false,
  arrows: false,
  autoplay: true,
  autoplaySpeed: 3000,
  draggable: false,
  pauseOnHover: false,
  pauseOnFocus: false
});


/**************************************************/
});
