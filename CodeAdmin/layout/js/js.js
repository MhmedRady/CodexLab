$(document).ready( function() {
  'use strict';
  feather.replace()

  /*********************************************/
  function Redir() {
  window.location.replace("dashboard.php");
  }
  /********************************************/

  $('body').fadeIn(1000);
  $('.body').fadeIn(1500);
  console.log('start');
var $this = $(this);
/****  ** START LOG PAGE **  ****/
var trust = true,
adminT=true,
passT=true,
admin=$('#admin'),
avil=$('#admin-availability'),
adminerr = $('#erU'),
pass = $('#pass'),
passerr=$('#errorpass'),
login =$('#login');
$('#erU,#erG').each(function(){
  $(this).fadeOut();
});

admin.blur(function(){
  if ($(this).val() == '' || $(this).val().length<4) {
    adminerr.html('<i class="fa fa-exclamation-circle"></i> ' + "incorrect user name");
    adminerr.delay(1000).fadeIn(1000);
    adminT=true;
  }else {
    adminT=false;
    adminerr.fadeOut(500);
  }

});

    pass.blur(function(){
      if (pass.val()=='') {
        passerr.html('<i class="fa fa-exclamation-circle"></i> ' + "Password can't be empty");
        passerr.fadeIn(1000).animate({opacity:1},1000);
        passT = true;
      }else {
        passT = false;
        passerr.fadeOut(1000);
       }

    });


admin.focus(function(){
  $('.php-error-A').fadeOut(1000);
  $(this).animate({color:'#1c7dfa',borderColor:'#ced4da'},1000);
});

pass.focus(function(){
  $('.php-error-P').fadeOut(1000);
  $(this).animate({color:'#1c7dfa',borderColor:'#ced4da'},1000);
});


  login.on('click',function(){
    $('.php-error-A').fadeOut();
    if (admin.val()=='' || admin.val().length<4 || admin.hasClass('N')) {
      adminT = true;
    }else {
      adminT = false;
    }

    if (pass.val() == '') {
      passT = true;
    }else {
      passT = false;
     }

  });

  $('.contact-form').submit(function(e){
    if ( adminT == true || passT == true ) {
      e.preventDefault();
    }
  });

/**** START FIXED MENU ****/
var menuClick = $('.head nav .click '),
menu=$('.fixedmenu');

menuClick.click(function(){
  menu.toggleClass('open');
  if (menu.hasClass('open')) {
    menu.animate({
      right:0,
    },1000);
  }else {
    menu.animate({
      right:'-270px',
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
/**** END FIXED MENU ****/

// ADD ( * ) TO Required INPUT & LABEL ---->

  $('label,input').each(function(){
    if ($(this).hasClass('requir')) {
        $(this).after('<div class="ast"><span class="asterisk">*</span></div>');
    }
        // $('.requir').after('<span class="asterisk">*</span>');
  });

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
    /* START TITLE CROP FUNCTION */

        function cropTITl(select,max) {
        var t = $(select).text().length;
        $(select).each(function(e){
        if (t > max) {
          var crop = $(this).text().substr(0,max);
        var get =  $(this).text(crop + ' '+'');
        }
        });
        };
/*************************************************************/
  cropTITl('.avr_name',8);
    cropTITl('._T',4);
// console.log('works');
  cropText('#adN',5);

  cropText('.Tdisc',30);

  cropText('.textCrop',13);
/*************************************************************/
$("#TOOLS").bsMultiSelect({cssPatch : {
                   choices: {columnCount:'3' },
                }});

  $("#TOOLS").bsMultiSelect();

$("#TOOLS").on('change',function(){
  console.log($(this).val());
});


/**** TEMPLATE CARD FIXED INFO ****/


var fixed_info = $('.fixed_info i');

$('#Trea').on('focus blur',function(){
  fixed_info.click();
});

fixed_info.click(function(){

  var info_P = $(this).next(),
  val_len = $(this).next().text().length;
  // info_P_H=info_P.innerHeight();
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
  } else {
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

/*****  ADD NEW TEMP  *****/

function print_r(input,output) {
  $(input).on('keydown paste keyup keypress',function(e){
    var input = $(this).val(),
    tmax = input = $(this).val().length;
    // console.log(tmax);
    $(output).text($(this).val());

  });
}

print_r('#Tname','#Nameval');

// print_r('#Trea','.length_p');

print_r('#Trea','.large_P');


/***********************************/

$('#Tname').on('keyup',function(){
  var text = $(this).val().length;
  $('#crcN').text(text);
  if (text == 35) {
    $('#crcN').css({color:'#f00'},500);
  }else {
    $('#crcN').css({color:'#fff'},500);
  }
});

$('#Trea').on('keyup paste',function(e){
  var text = $(this).val().length;
  $('#crcT').text(text);
  // $('.large_P').text(text);

// if (text==90){
//     fixed_info.click();
// }else
 if (text <= 190) {
    cropText($('.length_p'),90);
    $('#crcT').css({color:'#f00'},500);
    // e.return();
  }
});

var defName = $('#Nameval').text();
$('#Tname').blur(function(){
  if ($(this).val()=='') {
    $('#Nameval').text(defName);
  }else {
    $('#Nameval').text($(this).val());
  }
});

var defDesc = $('.length_p').text();

$('#Trea').blur(function(){
  if ($(this).val()=='') {
    // $('.length_p').text(defDesc);
  }else {
    // $('.length_p , .large_P').text($(this).val());
  }
  if ($(this).val().length > 90) {
    cropText($('.length_p'),90);
  }
});

        /**** ** * ** ****/


$('#cropClos , .Clos').click(function(){
  console.log('cancel crop');
  $('.incrop').val('');
  $('.incrop').removeClass('incrop');
  $('#image_demo').children().remove();
  $('#image_demo_1').children().remove();
  $('#image_demo_2').children().remove();
});

$('.cropoverlay').on('click',function(){
  $('#cropClos , .Clos').click();
});

  /*** * TOOLS * ***/

  $('#TOOLS').on('change',function(){
    var val=$(this).val();
    $('#toolval').val(val);
  });

/***** ADD CATEGORY *****/

var nameCat = $('#CatN'),
errCat = $('#errCat'),
  catV = true,
  subN = $('#subN'),
  subE = $('#subE'),
  vis = $('#nEWVIS1,#nEWVIS2'),
  visV = true,
  viserr = $('#Viserr'),
  inradio = $('#inradio'),
  block = $('#block'),
  pRT =   $('#parent'),
  overP = $('.parent .overlay'),
  valH =  $('.Cathead').text(),
  valP =  $('.card-body p').text(),
  inCatH = $('#CatN'),
  outCatH = $('.Cathead'),
  outCatP = $('.card-body p');

  pRT.on('change',function(){
  var  valP = $(this).val();
    if (valP == 0 ) {
      overP.fadeIn(500);
      outCatH.text(valH);
      // outCatP.text(valP);
      $('#Trea').val(0);
      console.log($('#Trea').val());
    }else{
      inCatH.blur(function(){
        if (inCatH.val()=='') {
          outCatH.text(valH);
        }else {
          outCatH.val(valH);
        }
      });
      outCatH.text(inCatH.val());
      print_r('#CatN','.Cathead');
      print_r('#Trea','.card-body p');
      overP.fadeOut(500);
    }
  });

  pRT.each(function(){
    if (valP !== 0) {
      outCatH.text(inCatH.val());
      print_r('#CatN','.Cathead');
      print_r('#Trea','.card-body p');
    }
  });

  $('#Trea').on('keydown',function(){
    var val = $(this).val().length;
    console.log(val);
  });

  pRT.on('change',function(){
    var val = pRT.val();
    if (val!==0) {
      $('.parent').fadeIn(1000);
    }
  });

/***********/



/**********/
vis.on('change',function(){
  visV = false;
  if($(this).val()==1){
    inradio.val(1);
  }else if ($(this).val()==0) {
    inradio.val(0);
  }
  console.log(inradio.val());
});

$('#customRadioInline3,#customRadioInline4').on('change',function(){
  if($(this).val()==1){
    block.val(1);
  }else if ($(this).val()==0) {
    block.val(0);
  }
});

  subN.on('click',function(){
    $('.php_err').fadeOut();
    console.log($('#parent').val()+'parent');
    if (visV == true) {
      viserr.html('<i style="margin: 5px;" class="fa fa-exclamation-circle"></i> ' + "Select Category Visibility");
      viserr.delay(500).animate({opacity:1},1000);
      visV = true;
    }else {
      viserr.animate({opacity:0},1000);
      visV = false;
    }
    if (nameCat.val()=='' ) {
      errCat.html('<i style="margin: 5px;" class="fa fa-exclamation-circle"></i> ' + "Enter Category Name");
      errCat.delay(500).animate({opacity:1},1000);
      catV = true;
    }else {
      errCat.animate({opacity:0},1000);
      catV = false;
    }
    console.log(catV,visV);
  });

$(".addDONE").each(function(){
  if ($(this).hasClass('added')) {
    $('#added').click();
  }
});

$('#closetag, .closetag').click(function(){
  $(".addDONE").removeClass('added');
});

$('.get').on('click',function(){
  $(this).fadeOut(500).addClass('los').siblings().removeClass('los').fadeIn(500);
});

  $('#addCat').submit(function(e){
    if ( catV == true || visV == true) {
      e.preventDefault();
    }
  });


/************** EDIT CATEGORY ************/

subE.on('click',function(){
  $('.php_err').fadeOut();
  if (nameCat.val()=='') {
    errCat.html('<i style="margin: 5px;" class="fa fa-exclamation-circle"></i> ' + "Enter Category Name");
    errCat.delay(500).animate({opacity:1},1000);
    catV = true;
  }else if ($('#ck').hasClass('err')) {
    catV = true;
  } else {
    errCat.animate({opacity:0},1000);
    catV = false;
  }

});


  $('#editCat').submit(function(e){
    if ( catV == true) {
      e.preventDefault();
    }
  });


  /* SERVICES PAGE */

  print_r('#Sname','.heading');
  print_r('#Srea','.length_P');

  $('#Sname').on('keyup',function(){
    var text = $(this).val().length;

      $('#crcN').text(text);
      if (text == 25) {
        $('#crcN').css({color:'#f00'},500);
      }else {
        $('#crcN').css({color:'#fff'},500);
      }

  });
  var lastSRV = $('.heading').text(),
  last_SP = $('.length_P').text();
  $('#Sname').blur(function(){
    if ($(this).val()=='') {
      $('.heading').text(lastSRV);
    }
  });

  $('#Srea').blur(function(){
    if ($(this).val()=='') {
      $('.length_P').text(last_SP);
    }else {
      $('.length_P').text($('#Srea').val());
    }
  });

  $('#Srea').on('keyup paste',function(e){
    var text = $(this).val().length;
    $('#crcT').text(text);

  if (text == 110) {
      $('#crcT').css({color:'#f00'},500);
    }else {
      $('#crcT').css({color:'#FFF'},500);
    }
  });

  /*****************************************/

  /*****************************************/

  $('#Srea,#Trea').each(function(){
    $(this).text($('#treaVal').val());
  });

  $('.in_1,.in_2').on('click',function(){
    $('#block').val($(this).val());
  });



  $('.delet-tag').on('click',function(){
    $('.addDONE').removeClass('delet');
    $('#DEL').click();
  });
  var arr = [];
    $('input[type="checkbox"]').click(function(){
  var val = $(this).val();
        if($(this).prop("checked") == true){
          arr.push(val);
            console.log(val + "  Checkbox is checked.");

        }

        else if($(this).prop("checked") == false){

          arr = $.grep(arr, function(value) {
            return value != val;
          });

          console.log(val + "  Checkbox is unchecked.");

        }
        $('#deltval').val(arr);
        console.log(arr);
    });




$('#upload').click(function(){

  if ($('#_WEB').hasClass('SHOW')) {
    console.log('upload button clicked');
    if ($('#File_zip').val()!=='') {
      $('#SUB_zip').click();
      $('#BAR_zip').on('change width',function(){
        var barW = $('#BAR_zip').width()+'%';
        $('pres_zip').html(barW);
      });
      $('#File_POST').val(10);
    }

  }else if ($('#_GRPH').hasClass('SHOW')) {
    for (var i = 1; i < 11; i++) {
      $('#SUB_'+i).click();
      var post_img = $('#File_'+i).val();

      if (post_img !=='') {
        $('#File_POST').val(10);

        console.log($('#File_POST').val());
      }
      $('#BAR_'+i).on('change width',function(){
        var barW = $('#BAR_'+i).width()+'%';
        console.log(barW);
        $('pres_'+i).html(barW);
      });
    }
  }
});

  });
