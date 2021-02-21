<?php

    //Concecte code

    include 'connect.php';

    session_regenerate_id();

    // Routes

    $img = 'layout/img/';

    $tpl   = 'includes/templates/';
    $lang  = 'includes/languages/';
    $fun   = 'includes/functions/';
    $lib   = 'includes/libraries/';
    $css   = 'layout/css/';
    $live  = 'includes/libraries/live/';
    // $Font = 'layout/fonts/';
    $js   = 'layout/js/';
    $Sup  = 'Startup/';
    $Des  = 'design/';

    include $fun  . 'GEN-Function.php' ;
    include $fun  . 'functions.php' ;

    if (!isset($prev) || $prev == 0) {
      // include important Files


    include $lang . 'english.php';
    include $lang . 'arb.php';
    include $tpl  . 'Header.inc';

      // include AJAX LIVE File

    // include $live . 'check.php';

      // Iclude Nav When $noNavbar = '1';
    if (!$noNavbar == 0 ) {  include $tpl  . 'Navbar.php' ;    }

    }

    if (!$StartUp  == '0' ) {  include $Sup  . 'Startup.php';    }

    // Iclude Nav When $noNavbar = '1';

    // if (!$AJAXSRCH == '0') {  include $lib . 'AJAXSEARCH.php' ;    }

/*******************************************************************/
