
<?php


/*
=========================================
      =========== START ADMIN FUNCTIONS ============
=========================================

/*
  ** TITLE Function
  ** TITLE Function PASGE TITLE IF IS SET USE IT IF NOT ECHO 'Default'
*/

function gettitle(){
  global $pageTitle ;
  if (isset($pageTitle)) {
    // code...
    return $pageTitle;
  } else {
    // code...
    return "Stork";
  }
}

function titimg(){
  global $Titleimg ;
  if (isset($Titleimg)) {
    // code...
    echo $Titleimg;
  } else {
    // code...
    $timg = "layout/images/LOGO/333.png";
    if (!empty($timg)||!isset($timg)) {
      echo $timg;
    }else {
      $timg ="../".$timg;
      echo $timg;
    }
  }
}


/*
  ** Redirect function
  ** Redirect function errpr to index.php
  ** Can change url Direct to any page by set  $ = url
*/
function redirfun($theMsg , $ndata = 1, $url = null, $seconds = 5) {

    if ($url === null) {
      // code...
      $url = 'index.php';
    }elseif ($url == 'M-B') {
      // code...
      $url = '';
    } else {

      if (isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] !== '') {

        $url = $_SERVER['HTTP_REFERER'] ;

        $link = 'Previous page';

      } else {
        $url = 'start.php' ;

        $link = 'Homepage';
      }

    }

/*
    ** $ndata msg
    ** USE IF NO DATA OR ERROR
*/
    if (!$ndata == 0) {
      // code...
      echo ' <h6> <i class="fa fa-times-circle-o fa-1x" aria-hidden="true"></i> No Data Updated</h6> ' ;

    }

    echo $theMsg;

      echo "<div class='back alert alert-info theMsg'> " . '<i class="fa fa-sign-out aria-hidden="true"></i>' ."    ". "You Will Redirect to  " . $link . "  After $seconds Seconds</div>";

    header("Refresh: $seconds; url=$url");

    exit();

}
