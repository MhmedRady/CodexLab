

// /* START CROPE MEMBER IMG */

        /**  *  **/
var pOST = 'includes/libraries/live/check.php?check=Ckc!&page=';
  /************* START [ CHECK LOGIN USERNAME NAME ]  ************/
var admin = $('#admin'),

    erro=true;

  function checkdata(id,val,page,name) {
    // console.log('check');
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

/***********************************************/

function CHuS() {
  if (admin.val()!=='' && admin.val().length>=4) {
    checkdata('#admin','#erG','checkAdmin','admin');
    // console.log('check');
  }else {
    $('#erG').fadeOut();
  }
}

  function getforgot() {
    if (admin.val()!=='' && admin.val().length>=4) {
      $('#logform').fadeOut(1000).css('display','none !important');
      // console.log('get');
      checkdata('#forgot','#getforgot','forgot','forgot');
      $('#forgotform').delay(1000).fadeIn(1500);
    }
  }

    //
    //  /************* START [ CHECK CATEGORIES TO GET TEMPLATE TYPE ]  ************/
    //

    // CATEGORY VISIBILITY

    function chKcAT() {
      checkdata('#CatN','#ck','CeKCat','CName');
    }

    function checkMainCat() {
      var cAT_v = $('#CAT').val();
      if (cAT_v == 1) {
        $('#_WEB').addClass('SHOW').siblings().removeClass('SHOW');
      }else if (cAT_v == 5) {
        $('#_GRPH').addClass('SHOW').siblings().removeClass('SHOW');
      }
      checkdata('#CAT','#Ttype','GetTemp','CName');
    }


    // function DEL() {
    //   console.log('DELETE');
    //   checkdata('#TAG','#GET','Del','TAG');
    // }

/**********************************/

//
//  /************* START [ CHECK & INSERT NEW CATEGORY  ]  ************/
//

function chKcAT() {
  checkdata('#CatN','#ck','CeKCat','CName');
}

/**********************************/


function checktype() {
  checkdata('#srvimg','#tag','type','inputimg');
}

/**********************************/

function deletimg(){
  // console.log('ajax call');
 checkdata('#TAG','#tag','dlTimg','delimg');
}

/**********************************/
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
            $('.tag').remove();
         });
       }
     }else {
      console.log('remove time');
     }
   }, time);
}

/*********************************************/

/**** ** * REFRESH PAGE FUNCTION * ** ****/

  function ref(time) {
    setTimeout(function(){
      location.reload(true);
    },time);
  }

/*********************************************/

/**** ** * CROPE FUNCTION * ** ****/

/*********************************************/
function CROP(input,output,page,ww) {
console.log(ww+'<<<<<<<<');
  var w_W = $(window).width(),
   w ;
  // console.log(w_W);
  if (w_W <= 760) {
    w = 300;
  }else {
    if (ww == 1) {
      w = 430;
    } else {
      w = 373;
    }
  }
  $image_crop = $('#image_demo').croppie({
    enableExif: true,
    viewport: {
      width:w,
      height:280,
      type:'rectangle' //circle 'square'
    },
    boundary:{
      width:'100%',
      height:350
    }
  });

  $(input).on('change', function(){
    $(this).addClass('incrop').siblings().removeClass('incrop');
    var reader = new FileReader();
    reader.onload = function (event) {
      $image_crop.croppie('bind', {
        url: event.target.result
      }).then(function(){
        console.log('Completed IMG Crop');
      });
    }
    reader.readAsDataURL(this.files[0]);
    $('#uploadimageModal').modal('show');
  });

  $('.crop_image').click(function(event){
    $image_crop.croppie('result', {
      type: 'canvas',
      size: 'viewport'
    }).then(function(response){

      $.ajax({
        url:"includes/libraries/crop/upload.php?crop="+page,
        type: "POST",
        data:{'img':response},
        success:function(data)
        {
          $('#uploadimageModal').modal('hide');
          $(output).html(data);
          $('#image_demo').children().remove();
        }
      });
    });
  });


}

/*********************************************/


/*********************************************/

function CROP1(input,output,page) {

  var w_W = $(window).width(),
   w ;
  console.log(w_W);
  if (w_W <= 760) {
    w = 300;
  }else {
    w = 373;
  }
  $image_crop = $('#image_demo_1').croppie({
    enableExif: true,
    viewport: {
      width:w,
      height:280,
      type:'rectangle' //circle 'square'
    },
    boundary:{
      width:'100%',
      height:350
    }
  });

  $(input).on('change', function(){
    $(this).addClass('incrop').siblings().removeClass('incrop');
    var reader = new FileReader();
    reader.onload = function (event) {
      $image_crop.croppie('bind', {
        url: event.target.result
      }).then(function(){
        console.log('Completed IMG Crop');
      });
    }
    reader.readAsDataURL(this.files[0]);
    $('#uploadimageModal_1').modal('show');
  });

  $('.crop_image_1').click(function(event){
    $image_crop.croppie('result', {
      type: 'canvas',
      size: 'viewport'
    }).then(function(response){

      $.ajax({
        url:"includes/libraries/crop/upload.php?crop="+page,
        type: "POST",
        data:{'img':response},
        success:function(data)
        {
          $('#uploadimageModal_1').modal('hide');
          $(output).html(data);
          $('#image_demo_1').children().remove();
        }
      });
    });
  });


}


/*********************************************/

/*********************************************/
function CROP2(input,output,page) {

  var w_W = $(window).width(),
   w ;
  // console.log(w_W);
  if (w_W <= 760) {
    w = 300;
  }else {
    w = 373;
  }
  $image_crop = $('#image_demo_2').croppie({
    enableExif: true,
    viewport: {
      width:w,
      height:280,
      type:'rectangle' //circle 'square'
    },
    boundary:{
      width:'100%',
      height:350
    }
  });

  $(input).on('change', function(){
    $(this).addClass('incrop').siblings().removeClass('incrop');
    var reader = new FileReader();
    reader.onload = function (event) {
      $image_crop.croppie('bind', {
        url: event.target.result
      }).then(function(){
        console.log('Completed IMG Crop');
      });
    }
    reader.readAsDataURL(this.files[0]);
    $('#uploadimageModal_2').modal('show');
  });

  $('.crop_image_2').click(function(event){
    $image_crop.croppie('result', {
      type: 'canvas',
      size: 'viewport'
    }).then(function(response){

      $.ajax({
        url:"includes/libraries/crop/upload.php?crop="+page,
        type: "POST",
        data:{'img':response},
        success:function(data)
        {
          $('#uploadimageModal_2').modal('hide');
          $(output).html(data);
          $('#image_demo_2').children().remove();
        }
      });
    });
  });


}


/*********************************************/


/*********************************************/
function SRVCROP() {
   CROP('#srvimg','#OUTLOAD','srv',ww=1);
}

/*********************************************/



/*********************************************/

function CATCROP() {
   CROP('#catimg','#OUTLOAD','cat',ww=1);
}

/*********************************************/

/********** UPLODE PROGRESS **********/

    function  progBAR(fRm,input,out,bar,prs,up){

    /**************************/
    var from = $(fRm),
    btn= $(btn),
    input = $(input),
    output = $(out);
    var bar = $(bar);
    from.submit(function(event){
    event.preventDefault();
    if(input.val()!=='')
    {

    var percent = $(prs);
    event.preventDefault();
    bar.show();
    output.hide();
    $(this).ajaxSubmit({
    target: out,
    url:"includes/libraries/UP/upload_file.php?UP="+up,
    beforeSubmit:function(){
    var percentVal = '0%';
    bar.width(percentVal)
    percent.html(percentVal);
    },
    uploadProgress: function(event, position, total, percentageComplete)
    {
    var percentVal = percentageComplete + '%';
    percent.html(percentVal);

    bar.animate({
    width: percentVal + '%'
    }, {
    duration: 1000
    });

    },
    success:function(){

    var percentVal = '100%';
    bar.width(percentVal)
    percent.html(percentVal);

    output.fadeIn(1000);
    },
    resetForm: true
    });
    }
    return false;
    });


    /*************************/
    }

/********************** USING */

          // function stopsub(form) {
          //   // console.log('preventDefault');
          //   var form = $(form);
          //   form.submit(function(e){
          //     // e.preventDefault();
          //   })
          // }
/*************************************************************/


  /******* ** UPLODED TEMP DATA PROGRESS BAR ** ******/

function progDATA(form,input,out,up,bar,pres) {

    var submt = $(form),
    input = $(input),
    output=$(out),
    bar = $(bar),
    pres = $(pres);

  submt.submit(function(event){
    console.log('progress data SEND');
    if(input.val()!=='')
    {
      console.log('progBAR called');
     event.preventDefault();
     output.hide();
     $(this).ajaxSubmit({
      target: out,
      url:'includes/libraries/UP/upload_file.php?UP='+up,
      beforeSubmit:function(){
       bar.width('0%');
       // pres.html(0+'%')
       bar.fadeIn();
      },
      uploadProgress: function(event, position, total, percentageComplete)
      {
      // pres.html(percentageComplete+'%'),
       bar.animate({
        width: percentageComplete + '%'
       }, {
        duration: 1000
       });
      },
      success:function(){
        // pres.html(1+'%'),
       output.show();
      },
      resetForm: true
     });
    }
    return false;
   });

}

function _ZIP() {
  console.log('zip function colled');
   progDATA('#_ZIP','#File_zip','#OUT_zip','TEMP_zip','#BAR_zip','#pres_zip');
}

/**********************************************/

/*********** * GO BACK FUNCTION *  ***********/

  function GOBACK() {
    console.log('GO BACK FUNCTION CALL');
    window.history.back();
  }


$(document).ready(function(){
  // $('#admin-availability').fadeOut();
  admin.each(function(){
    if ($(this).val()!==''&& $(this).val().length>4 && $('#erG').hasClass('E')) {
      checkdata('#admin','#erG','checkAdmin','admin');
    }
  });

/**********************************************/

  /******* ** NEW TEMPLATE FORM ** ******/

  function submitform(sub,page,out) {
    $(sub).submit(function(event){
      console.log('NEW TEMP FORM DATA SEND');
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
            $(out).html(response);
        });
    });

  }

 /******** ** TEMPLATE PAGE DATA ** ********/

   $('#add_temp').click(function(){
     submitform('#NEW_TEMP','NEW_TEMP','#tag');
   });

   $('#TEMP_edit').click(function(){
     submitform('#edit_temp','edit_TEMP','#tag');
   });

   /******** ** SERVICES PAGE DATA ** ********/

     $('#_SERV').click(function(){
       console.log('add_SERV butn');
       submitform('#NEW_SRV','NEW_SRV','#tag');
     });

     $('#subE').click(function(){
       submitform('#edit_SRV','edit_SRV','#tag');
     });

/**********************************************************/

/******** ** CATEGORY PAGE DATA ** ********/

  $('#subN').click(function(){
    console.log('add_CAT butn');
    submitform('#addCat','NEW_CAT','#tag');
  });

  $('#subCAT').click(function(){
    submitform('#eddCat','edit_CAT','#tag');
  });

/**********************************************************/

  /******* ** DELETE IMG FUNCTION ** ******/

  $('#TAGsub').click(function(){
    $('#send').click();
  });

  $("#idForm").submit(function(event){
      event.preventDefault(); //prevent default action
      var post_url = pOST+'dlTimg'; //get form action url
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
          $("#GET").html(response);
      });
  });
/**********************************************/

/********* ** CHECK UPLODE FILE SIZE / TYPE ** *********/

function UPLODED(input) {
  $(input).change(function () {
        var fileExtension = ['jpeg', 'jpg', 'png', 'gif'];
        if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
            $(this).val('');
            for (var i = 1; i < 4 ; i++) {
              $('#image_demo'+i).children().remove();
            }
            $('#image_demo').children().remove();
            alert("Only formats are allowed : [ "+fileExtension.join(', ')+' ]');
        }
    });
}

function _size(id,size) {

  $(id+" input[type='file']").on("change", function () {
   if(this.files[0].size > size) {
     alert("Please upload file less than 2MB. Thanks!!");
     $(this).val('');
   }
  });

}

  // _size('#_WEB',2000000);

/***********************************************/

UPLODED('#temp1'); UPLODED('#temp2'); UPLODED('#temp3'); UPLODED('#catimg'); UPLODED('#srvimg');
  UPLODED('#srvimg'); UPLODED('#uploadFile');
    for (var i =1; i <=10; i++) {
      UPLODED('#File_'+i);
    }


  $("#_WEB input[type='file']").change(function(){
    var fileExtension = ['rar', 'zip'];
    if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
      $(this).val('');
      alert("Only formats are allowed : [ "+fileExtension.join(', ')+' ]');
    }
  });

// onclick="progDATA('#up_<?php echo $U; ?>','#File_<?php echo $U; ?>','#OUT_<?php echo $U; ?>','TEMP_<?php echo $U; ?>','#BAR_<?php echo $U; ?>')"

  console.log('ajax');

});
