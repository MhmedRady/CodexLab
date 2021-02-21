
$(function(){

  $('body').fadeIn(1500);

/**** ** WEB TEMP VIIEW MONITORS LIST MENU ** ****/

var Windo_W = $(window).width(),
Windo_H = $(window).height(),
_SPIN = $('.spinner-wrapper');
iFRAM = $('#_MYframe'),
PC_   = $('#iframPC'),
TB_   = $('#iframTB'),
MB_   = $('#iframPH');

$("#_MYframe").each(function(){
  if (Windo_W <= 760) {
    PC_.addClass('disabled');
    TB_.addClass('disabled');
    MB_.parent().addClass('actMintor').siblings().removeClass('actMintor');
    console.log('Mobile MONITOR');
  }else if (Windo_W<=1024 && Windo_W > 760) {
    PC_.addClass('disabled');
    TB_.parent().addClass('actMintor').siblings().removeClass('actMintor');
    console.log('Tablet MONITOR');
  }else {
    PC_.parent().addClass('actMintor').siblings().removeClass('actMintor');
    console.log('PC MONITOR');
  }
});

function onCHANGE(btn,W,H) {

  btn.on('click',function(){

    if (!btn.hasClass('disabled')&& !btn.parent().hasClass('actMintor')) {
      btn.parent().addClass('actMintor').siblings().removeClass('actMintor');
      _SPIN.fadeIn();
      iFRAM.fadeOut(500);
      $('._H').css('z-index',"999999999");
      setTimeout(function(){
        _SPIN.fadeOut();
        iFRAM.animate({
          width : W,
          height: H,
        });
        iFRAM.css({margin:'0 auto',boxShadow:"0 2px 20px 10px #ddd",marginTop:"62PX"});
        iFRAM.fadeIn(500);
      },5000);
    }else if (btn.parent().hasClass('actMintor')) {
      alert('You Are already have This Device Monitor Fram Size ');
    }else if (btn.hasClass('disabled')) {
      alert("Sorry Your Device Monitor Can't Preview This Fram Size ");
    }

  });

}

onCHANGE(PC_,'100%','97vh');
onCHANGE(TB_,'786px','97vh');
onCHANGE(MB_,'360px','97vh');

$('#NAV_PC').click(function(){
  PC_.click();
});
$('#NAV_TB').click(function(){
  TB_.click();
});
$('#NAV_MB').click(function(){
  MB_.click();
});

  var Web_like   = $('#Web_like'),
      Web_likeI  = $('#Web_like i'),
      Web_likeS  = $('#Web_like span'),
      Web_like_0 = parseInt($('#Web_like span').text());

  Web_like.click(function(){
    // console.log(">>>>>>>>"+Web_like_0);
    Web_like.toggleClass('Rlike');
    if ($(this).hasClass('Rlike')) {
      VAL_plus = Web_like_0 + 1 ;
      Web_likeS.text(VAL_plus);
      Web_likeI.attr('class','fa fa-heart');
      console.log('hasClass');
    } else {
      VAL_plus = Web_like_0 - 1 ;
      console.log('not hasClass');
      Web_likeS.text(Web_like_0);
      Web_likeI.attr('class','fa fa-heart-o');
    }
  });


/**** ** GRAPHIC VIIEW LIST MENU ** ****/

  var _WEB = $('#_open_COD'),
  WEB_side = $('#WEB_ul');

  _WEB.click(function(){
    WEB_side.toggleClass('_WEB_mov');
    if (WEB_side.hasClass('_WEB_mov')) {
      WEB_side.animate({
        left:0,
      },550);
    }else {
      WEB_side.animate({
        left:'-150px',
      },550);
    }
  });

/**** ** ********************* ** ****/

  function hover_mont(btn) {

    $(btn).hover(function(){
      data_S = $(this).data('mont');
      $(data_S).fadeIn(800);
    },function(){
      data_S = $(this).data('mont');
      $(data_S).fadeOut(800);
    }
    );
  }
hover_mont('#NAV_PC');
hover_mont('#NAV_TB');
hover_mont('#NAV_MB');

hover_mont('#NAV_PL');
hover_mont('#NAV_LV');

/****************************************/

  $('#NAV_PL').click(function(){
    console.log('view click');
    $('#img_click').click();
    $('.fancybox-button--play').click();
  });

  $('#NAV_PL').click(function(){
    $('#img_click').click();
    $('.fancybox-button--play').click();
    $('.fancybox-button--thumbs').click();
  });

  // $('#NAV_PL').click(function(){
  //   $('#img_click').click();
  //   $('.fancybox-button--play').click();
  //   $('.fancybox-button--thumbs').click();
  // });

/*********** ** CODEX CONTENT ** ***********/
// CODEX_NAME
// CODEX_PHONE
// CODEX_EMAIL
// CODEX_COMP
// CODEX_CAT
// CODEX_DESC
var CODEX_send = $('#CODEX_SEND'),
CODEX_name = $('#CODEX_NAME'),
CODEX_name_err = $('#namerr'),
CODEX_check_N = true,
CODEX_phone = $('#CODEX_PHONE'),
CODEX_phone_err = $('#phnerr'),
CODEX_check_P = true,
CODEX_mail = $('#CODEX_EMAIL'),
CODEX_MAIL_err = $('#emlerr'),
CODEX_check_E = true,
CODEX_cAT = $('#CODEX_CAT'),
CODEX_CAT_err = $('#CATerr'),
CODEX_check_CAT = true,
CODEX_desc = $('#CODEX_DESC'),
CODEX_desc_err = $('#deserr'),
CODEX_check_DESC = true,
CODEX_submet = true
;
$('.owl-carousel.owl-drag .owl-item').each(function(){
  $(this).css({width: "320px !important"});
});
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

    }else {

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
    }else if (CODEX_phone.val().length !==11) {
      CODEX_phone_err.html("<small class='error'> هذا الرقم غير صحيح  <i class='fa fa-exclamation-circle'></i> </small>");
      CODEX_phone_err.fadeIn(500);
      CODEX_check_P = true;
    }else {
      CODEX_phone_err.fadeOut(500);
      CODEX_check_P = false;
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

    if (CODEX_mail.val()=='') {
        CODEX_MAIL_err.html("<small class='error'>ادخل البريد الالكتروني  <i class='fa fa-exclamation-circle'></i> </small>");
        CODEX_MAIL_err.fadeIn(500);
        CODEX_check_E = true;
    }else {
      CODEX_MAIL_err.fadeOut(500);
      CODEX_check_E = false;
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
    CODEX_check_E == false &&
    CODEX_check_CAT == false &&
    CODEX_check_DESC == false
    ) {
     $('#T_SEND').click();
    }
  console.log('ORD OWNR NAME'+CODEX_check_N+'<>'+num);
  });

/*************************************************************/
});
