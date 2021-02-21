<?php
    $pagetit = gettitle();

    if(isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER'])){
      $REFERER = 1;
      // echo "<br> " . $_SERVER["HTTP_REFERER"] . "<br/>";
    $refuri = parse_url($_SERVER['HTTP_REFERER']); // use the parse_url() function to create an array containing information about the domain
  //  print_r($refuri);
    $geturi = $refuri['host'] . $_SERVER['REQUEST_URI']; // SITE URI PHATH

    // echo "<br> Get ".$geturi." <br>"; echo '>>>>>>>>>>>'.$pagetit;

    $righturl = $refuri['host'] . $refuri['path'] .$pagetit; // RIGHT URI PHATH

    // print_r($refuri);
    // echo "<br> right ".$righturl." <br>";

    // if($refuri['host'] == "localhost"){
    //
    // //the link was on your site
    // }
    // else{
    // //the link was on another site. $refuri['host'] will return what that site is
    // }
    // if ($geturi === $righturl ) {
    //   header('http://localhost/codexlab/');
    // }
    // }
    // else{
    //the visitor typed gibberish into the address bar
  }else {
    $REFERER = 0;
  }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <?php
    $i1 = rand(1,9); $i2 =$i1 + 1; $i3 = $i1 - 1 ; $i4 = $i1  ; $i5 = $i1*$i1;
     $cssVersion = $i1.'.'.$i2.'.'.$i3.'.'.$i4.'.'.$i5; ?>

     <?php date_default_timezone_set("Africa/Cairo"); ?>

    <title><?php echo gettitle() ?></title><link rel="icon"type="image/png" href="<?php titimg(); ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo $css; ?>font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $css; ?>open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $css; ?>animate.css">

    <link rel="stylesheet" href="<?php echo $css; ?>owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo $css; ?>owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo $css; ?>magnific-popup.css">

    <link rel="stylesheet" href="<?php echo $css; ?>aos.css">

    <link rel="stylesheet" href="<?php echo $css; ?>ionicons.min.css">

    <link rel="stylesheet" href="<?php echo $css; ?>bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo $css; ?>jquery.timepicker.css">

    <link rel="stylesheet" href="<?php echo $css; ?>normalize.css">
    <link rel="stylesheet" href="<?php echo $css; ?>flaticon.css">
    <link rel="stylesheet" href="<?php echo $css; ?>icomoon.css">
    <link rel="stylesheet" href="<?php echo $css; ?>bootstrap.min.css">
    <!-- <link rel="stylesheet" href=" <?php echo $css; ?>style8.css?v=<?php echo $cssVersion; ?>">
    <link rel="stylesheet" href=" <?php echo $css; ?>mycss.css?v=<?php echo $cssVersion; ?>"> -->
    <link rel="stylesheet" href=" <?php echo $css; ?>css.css?v=<?php echo $cssVersion; ?>">
  </head>

  <div class="spinner-wrapper">
       <div class="spinner">
         <div class="sk-folding-cube">
           <div class="sk-cube1 sk-cube"></div>
           <div class="sk-cube2 sk-cube"></div>
           <div class="sk-cube4 sk-cube"></div>
           <div class="sk-cube3 sk-cube"></div>
         </div>
       </div>
     </div>

  <body>

    <style media="screen">

    .body{
        opacity: 0;
      }

    </style>
    <main class="body">
