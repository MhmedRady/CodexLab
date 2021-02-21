

// /* START CROPE MEMBER IMG */

        /**  *  **/
var pOST = 'includes/libraries/live/check?check=Ckc!&page=';
  /************* START [ CHECK LOGIN USERNAME NAME ]  ************/
var userin = $('#user-log'),

    erro=true;

  function checkdata(id,val,page,name) {
    console.log('check');
    var
     id = $(id).val(),
     valu = $(val);

    jQuery.ajax({
  	url: pOST+page,
  	data:name+'='+id,
  	type: "POST",
  	success:function(data){
  		valu.html(data);
    },
  	 error:function (){}
  	});

  }

  function preview(id,val,name) {
console.log('ajax preview');
    var
     id = $(id).val(),
     valu = $(val);
    jQuery.ajax({
  	url: 'preview.php',
  	data:name+'='+id,
  	type: "POST",
  	success:function(data){
  		valu.html(data);
    },
  	 error:function (){}
  	});
  }

function GETTEMP() {
  console.log('get temp');
  checkdata('#TEMP','#out_TEMP','GETTEMP','GET_TEMP');
}

$('#Web_like').on('click',function(){
  console.log('like btn');
  checkdata('#Web_like','#CODEX_OUT',"weblike","Temp_like");
});



// <!-- /*********** START CATEGORIES MENU VIEW ************/ -->

  function GETtab(btn,addClass,dirdiv,data){
    console.log('get tabs');
  var li = $(li) , div = $(dirdiv) ;
    li.on('click', function(){
    $(this).addClass(addClass).siblings().removeClass(addClass);
    div.hide();
    $($(this).data(data)).show();
  });
  };

/*************************************************************/

    /********* **** SET TIME FUNCTION **** *********/

function RedirectTime(page,time,f) {

  setTimeout(function() {
     if ($(".addDONE").hasClass('added')) {

       if (f==0) {
         console.log('if=0');
         window.location.replace(page);

       }else {
         console.log('if=1');
         $(".addDONE").animate({opacity:0},1000,
         function(){
            $('._tag').remove();
         });
       }
     }else {
      console.log('remove time');
     }
   }, time);
}

    /**********************************/

/**** ** * REFRESH PAGE FUNCTION * ** ****/

  function ref(time) {
    setTimeout(function(){
      location.reload(true);
    },time);
  }

/*********************************************/

function SRCHTEMP(){

  $('#SRCHSUB').click();

}

/******** ** SEND TEMP LIKES  ** *********/

function likeTEMP() {
var LIKE_ = $('#CODEX_like_');
LIKE_.toggleClass('liked');
  var D_like = $('.data_like'),
   D_val = parseInt(D_like.text());
  if (LIKE_.hasClass('liked')) {
    var VAL_plus = D_val + 1;
    $(this).val(VAL_plus);
    D_like.text(VAL_plus);
    checkdata('#CODEX_like_','#CODEX_OUT','Temp_like','Temp_like');
    // preview('#CODEX_like_','#CODEX_OUT','Temp_like');
    console.log('like temp sent'+VAL_plus);
  } else {
    var VAL_minus = D_val - 1;
    $(this).val(VAL_minus);
    D_like.text(VAL_minus);
    checkdata('#CODEX_like_','#CODEX_OUT','dislike','Temp_like');
    console.log('like temp sent'+VAL_minus);
  }
  // checkdata(id,val,page,name);
}


/****************************************/

  var sound = new Audio();
  sound.src='layout/intuition.mp3';

  function audplay() {

      sound.play();
    }

  /**** ** CHAT PAGE ** ****/
var msg = $('.msg');

  $('#GO_chat').on('click',function(){
    $('.msg').addClass('on_chat');
    $('._chat').fadeIn(1000);
  });

  $(window).on('scroll',function(){
    $('#_chat').addClass('clickd');
    var _S = $(window).scrollTop();
    if (_S>=2000) {
      if (msg.hasClass('_msg_o')) {
        msg.show(500);
        $('._msg_P button').delay(10000).fadeIn(1000);

        if (!$('._msg_P span').hasClass('write')) {
          $('._msg_P span').addClass('write');
          // audplay();
          writer('._msg_P span','pargph');
        }
        msg.removeClass('_msg_o');
      }
    }

  });

$(document).ready(function(){

      /******* ** TEMPLATE PAGE GET MORE ** ******/

      $(document).on('click','#_Temp_more',function(){
        console.log('_Temp_more');
          var ID = $('#_Temp_more span').attr('id');
          $('._show_more').hide();
          $('._loader').css('display','block');
          $.ajax({
              type:'POST',
              url: pOST+'more_TEMP',
              data:'id='+ID,
              success:function(html){
                  // $('.id_'+ID).remove();
                  $('._loader').hide();
                  $('._show_more').show();
                $('#WORKS').append(html).fadein(1000);
              }
          });
          $('#_Temp_more span').attr('id',ID-1);
      });

  /**********************************************/

  /******* ** SEARCH CATEGORY ENGEIN ** ******/

  $("#CATSRCH").submit(function(event){
    console.log('CAT SEARCH submit Search SEND');
      event.preventDefault(); //prevent default action
      var post_url = pOST+'SRCHTEMP'; //get form action url
      var request_method = $(this).attr("method"); //get form GET/POST method
      var form_data = new FormData(this); //Creates new FormData object
      $.ajax({
          url : post_url,
          type: request_method,
          data : form_data,
      contentType: false,
      cache: false,
      processData:false
      }).done(function(response){ //
          $("#OUT_LIST").html(response);
      });
  });

/**********************************************/



/******* ** CONTENT US FORM ** ******/

$("#_CONTENT").submit(function(event){
  console.log('CONTENT US FORM DATA SEND');
    event.preventDefault(); //prevent default action
    var post_url = pOST+'CONTENT'; //get form action url
    var request_method = $(this).attr("method"); //get form GET/POST method
    var form_data = new FormData(this); //Creates new FormData object
    $.ajax({
        url : post_url,
        type: request_method,
        data : form_data,
    contentType: false,
    cache: false,
    processData:false
    }).done(function(response){ //
        $("#_POST").html(response);
    });
});

/**********************************************/

/******* ** CONTENT US FORM ** ******/

$("#CODEX_CONTENT").submit(function(event){
  console.log('CONTENT US FORM DATA SEND');
    event.preventDefault(); //prevent default action
    var post_url = pOST+'CONTENT_TEMP'; //get form action url
    var request_method = $(this).attr("method"); //get form GET/POST method
    var form_data = new FormData(this); //Creates new FormData object
    $.ajax({
        url : post_url,
        type: request_method,
        data : form_data,
    contentType: false,
    cache: false,
    processData:false
    }).done(function(response){ //
        $("#_POST").html(response);
    });
});

/**********************************************/

function send_(form,page,out) {
  var
  form = $(form),
  out  = $(out);
  form.submit(function(event){

    console.log('CONTENT US FORM DATA SEND');
      event.preventDefault(); //prevent default action
      var post_url = pOST+page; //get form action url
      var request_method = $(this).attr("method"); //get form GET/POST method
      var form_data = new FormData(this); //Creates new FormData object
      $.ajax({
          url : post_url,
          type: request_method,
          data : form_data,
      contentType: false,
      cache: false,
      processData:false
      }).done(function(response){ //
          out.html(response);
      });
  });

}
function msg_send() {
  send_('.captchform','msg_send','#CODEX_OUT')
}
/******* ** CHAT US FORM ** ******/
var firstarray = ['1','2','3','4','5','6','7','8','9','0','۰', '۱', '۲', '۳', '٤','٥','٦','۸', '۹','/','*','!','<','>','(',')','.','-','+','=','÷','{','}','?',':',';','@','#','$','%','^','&','_','.','؟',','];

var
CAHT_FORM  = $('#chat_FORM'),
CAHT_SEND  = $('#s_CHAT'),
CAHT_NAME  = $('#chat_NAME'),
CAHT_PHON  = $('#chat_PHONE'),
CAHT_MAIL  = $('#chat_EMAIL'),
CAHT_DESC  = $('#chat_MSG'),
CAHTC_NAME = true,
CAHTC_PHON = true,
CAHTC_MAIL = true,
CAHTC_DESC = true;

CAHT_SEND.on('click',function(){
  console.log('send btn');
  if (CAHT_NAME.val() == '') {
    CAHT_NAME.addClass('_chatERR');
    CAHTC_NAME = true;
  }else {

    CAHT_NAME.removeClass('_chatERR');
    CAHTC_NAME = false;

    var fvalN = CAHT_NAME.val().length,
        fvalF = CAHT_NAME.val();
    if (fvalN > 0 ) {
        for (var i = 0; i < fvalN; i++) {
             var fval = CAHT_NAME.val().charAt(i);
             var num  = 0 ;
           if ($.inArray(fval, firstarray) >= 0) {
             var num = 1;
           }else {
             var num = 0;
           }
        if (num==0) {
              CAHT_NAME.removeClass('_chatERR');
                 CAHTC_NAME = false;
         }else if (num==1) {
                CAHT_NAME.addClass('_chatERR');
                 CAHTC_NAME = true;
                 return;
            }
        }
    }

  }

  if (CAHT_PHON.val() == '' || CAHT_PHON.val().length !==16) {
    CAHT_PHON.addClass('_chatERR');
    CAHTC_PHON = true;
  }else {
    CAHT_PHON.removeClass('_chatERR');
    CAHTC_PHON = false;
  }
  if (CAHT_MAIL.val() == '' ) {
    CAHT_MAIL.addClass('_chatERR');
    CAHTC_MAIL = true;
  }else {
    CAHT_MAIL.removeClass('_chatERR');
    CAHTC_MAIL = false;
  }
  if (CAHT_DESC.val() == '' ) {
    CAHT_DESC.addClass('_chatERR');
    CAHTC_DESC = true;
  }else {
    CAHT_DESC.removeClass('_chatERR');
    CAHTC_DESC = false;
  }
});

console.log(CAHTC_NAME +"<>"+
CAHTC_PHON +"<>"+
CAHTC_MAIL +"<>"+
CAHTC_DESC);

CAHT_FORM.submit(function(e){
  if(CAHTC_NAME == true  ||
    CAHTC_PHON  == true  ||
    CAHTC_MAIL  == true  ||
    CAHTC_DESC  == true){
    e.preventDefault();
  }else {
      event.preventDefault(); //prevent default action
      var post_url = pOST+'_CHAT'; //get form action url
      var request_method = $(this).attr("method"); //get form GET/POST method
      var form_data = new FormData(this); //Creates new FormData object
      $.ajax({
          url : post_url,
          type: request_method,
          data : form_data,
      contentType: false,
      cache: false,
      processData:false
      }).done(function(response){ //
          $("#_POST").html(response);
      });
  }

});


/**********************************************/

  console.log('ajax');
});
writer('#pph','pragph');
function writer(div,data) {
  var div=$(div),
  writerdata= div.data(data),
  textn = writerdata.length,
  n=0,
  typer = setInterval(function(){
    div.each(function(){
      div.html(div.html()+writerdata[n])
    });
    n+=1;
    if (n>=textn) {
      clearInterval(typer);
    }
  },80);
}
