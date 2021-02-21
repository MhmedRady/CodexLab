<?php

    /*

    ================================================================================
    =====  PREVIEW PAGE
    ================================================================================

    */

      ob_start();

      session_start();

      $pageTitle = 'preview ';
      $table     = 1;
      $noNavbar  = 0;
      $StartUp   = 0;
      $Adminprev = 0;
      $prev = 1;
      $CODEX = 1;
      include "inc.php";

      $temp  = isset($_GET['Temp'])  ? $_GET['Temp'] : '';
      $P     = isset($_GET['P'])     ? $_GET['P']     : '';
      $V     = isset($_GET['V'])     ? $_GET['V']    : '';

  if (empty($temp)||empty($P)||empty($V)) {
      header("location:404");
      exit;
  }else {
    /**
     // CHECK CLASS VALUES IN DATABASE
     */
    class CHECKrows
    {
      public $ID ;
      public $V ;
      public $P ;

      public function checkV($T)
      {

        if ($T == 0) {
          $shaID  = $this->ID;
          $P      = $this->P;
          $select = 'ID';
          $from   = 'Temp';
          $hash   = 'sha1(ID)';
          $And    = "AND md5(Cat_ID) Like '%$P%' AND Approve = 1";
        }

        if($T == 1) {
          $shaID  = $this->V;
          $select = 'Name';
          $from   = 'categories';
          $hash   = 'md5(Name)';
          $And    = "AND Parent = 0 AND Block = 0";
        }

        if($T == 5) {
          $shaID  = $this->P;
          $select = 'ID';
          $from   = 'categories';
          $hash   = 'md5(ID)';
          $And    = "AND Parent != 0 AND Block = 0";
        }

        global $con;

        $statement = $con->Prepare("SELECT $select FROM $from WHERE $hash like ? $And");

        $statement->execute(array($shaID));

        $count = $statement->rowCount();

        return $count;

      }
      public function GET_()
      {
        $TM = getOne("*",'Temp',"WHERE sha1(ID) like '%$this->ID%'");
        return $TM[0];
      }
      public function GET_img()
      {
        $img_iTm = checkItem('sha1(Temp_ID)','data',"$this->ID");
        if ($img_iTm == 1) {
          $img_iTm = getOne('*','data',"WHERE sha1(Temp_ID) like '%$this->ID%'");
          $img_iTm = $img_iTm[0];
        }
        return $img_iTm;
       }
       public function GET_M()
       {
         $M   = getOne("ID",'categories',"WHERE md5(Name) like '%$this->V%'");
         $MID = $M[0]['ID'];
         return $MID;
       }
    }

    $check = new CHECKrows();

    $check->V = $V;
    $check->P = $P;
    $check->ID = $temp;

    $checkT = $check->checkV(0);
    $checkV = $check->checkV(1);
    $checkP = $check->checkV(5);

    $GET_T  = $check->GET_();
    $GET_I  = $check->GET_img();

    if ($checkV !== 1 || $checkP !== 1 || $checkT !== 1) {
      header("location:404");
      exit;
    }
  }


      $MID = $check->GET_M();
      $TEMP = $GET_T['Name'];
      $getTM = $GET_T;
      $heart = 0;
      $ID = $getTM['ID'];
      $_COOKIEV = 0;
      if (count($_COOKIE)>0) {
        $_COOKIEV = 1;
        if (isset($_COOKIE['Codex'])) {

          $like = $_COOKIE['Codex'];
          $arr  = explode(',',$like);

          if (in_array($ID,$arr)) {
            $heart = 1;
          }

        }
      }

      $ip=$_SERVER['REMOTE_ADDR'];


        $i1 = rand(1,9); $i2 =$i1 + 1; $i3 =$i1 - 1; $i4 = $i1;
        $cssVersion = $i1.'.'.$i2.'.'.$i3;
        $v = 'v'.$i4.'='.$cssVersion;
        $link;
        $dataPath = 0;
        if (isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER'])) {

          $link = $_SERVER['HTTP_REFERER'];
          if (parse_url($_SERVER['HTTP_REFERER'])['path'] === "/codexlab/blog") {
              $dataPath = 1;
          }else {
              $dataPath = 2;
          }
          // echo "<br>". $link ."<br>";
        } else {
          $link = "http://localhost/codexlab/";
          // echo "<br>". $link ."<br>";
        }
      ?>

     <!DOCTYPE html>
     <html lang="en" dir="ltr">
       <head>

         <meta charset="utf-8">
         <meta name="description" content="Free Web tutorials">
         <meta name="keywords" content="HTML, CSS, JavaScript">
         <meta name="viewport" content="width=device-width, initial-scale=1">

     <title><?php  ?></title><link rel="icon"type="image/png" href="<?php echo titimg(); ?>">
     <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
     <link rel="stylesheet" href="<?php echo $css ?>font-awesome.min.css">
     <link rel="stylesheet" href="<?php echo $css ?>bootstrap.min.css">

         <?php

         // echo $view;
           if ($MID == 1 ) {
             $Wpath = "data\WEB_Temp\\$TEMP\index";
             // echo "WEB_TempLATE";
           }elseif ($MID  == 5) {
             $GRPHview = 2;
             $path = "data\Temp\\$ID\Data\\";
             echo "Graphic TEMPLATE";
             ?>
             <style media="screen">
             body{
               display: none;
             }
             </style>
             <?php
           }
           ?>

   <?php if (isset($GRPHview) &&  $GRPHview == 2): ?>
     <!-- /************** * GRAPHIC TEMP CAROUSEL * **************/ -->
     <link rel="stylesheet" href="<?php echo $css ?>jquery.fancybox.min.css">
     <link rel="stylesheet" href="<?php echo $css ?>owl.carousel.min.css">
   <?php endif; ?>

   <link rel="stylesheet" href="<?php echo $css ?>myprev.css?v=<?php echo $cssVersion; ?>">

   </head>
<?php if ($MID  == 5): ?>
   <body class="PREV_CODEX Graphic_PREV">
  <?php else: ?>
   <body class="PREV_CODEX">
<?php endif; ?>

  <div class="spinner-wrapper" style="display: none;">
     <div class="spinner">
       <div class="sk-folding-cube">
         <div class="sk-cube1 sk-cube"></div>
         <div class="sk-cube2 sk-cube"></div>
         <div class="sk-cube4 sk-cube"></div>
         <div class="sk-cube3 sk-cube"></div>
       </div>
     </div>
  </div>


      <header id="_H" class="_H">
        <nav class="navbar navbar-expand-lg navbar-light bg-custm">

          <!-- Image and text -->

            <nav class="navbar navbar-light bg-custm">
              <a class="navbar-brand" href="http://localhost/codexlab/">
                <img src="layout/images/LOGO/tc.png" width="50" height="40" class="d-inline-block align-top" alt="" loading="lazy">
              </a>
            </nav>

            <div class="navbar-nav _reff">
              <a class="_back" href="<?php echo $link ?>"><i class="badge fa fa-long-arrow-left" ></i></a>
              <?php if ($dataPath == 1): ?>
                <a class="badge" href="<?php echo $link; ?>">Blog</a><span class="badge">/</span><a class="badge" href="#"><?php echo $TEMP ?></a>
                <?php else: ?>
                <a class="badge" href="<?php echo $link; ?>">Codex|lab</a><span class="badge">/</span><a class="badge" href="#"><?php echo $TEMP ?></a>
              <?php endif; ?>
            </div>
            <div class="navbar-nav _monT">
            <?php if ($MID == 1): ?>

              <button id="NAV_PC" class="btn badg btn-sm " type="button" name="button" data-mont="#S_PC">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-laptop" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M13.5 3h-11a.5.5 0 0 0-.5.5V11h12V3.5a.5.5 0 0 0-.5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11z"/>
                  <path d="M0 12h16v.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5V12z"/>
                </svg>
                <span id="S_PC"> PC & laptop</span>
              </button>

              <button id="NAV_TB" class="btn badg btn-sm " type="button" name="button" data-mont="#S_TB">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-tablet" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M12 1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
                  <path fill-rule="evenodd" d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                </svg>
                <span id="S_TB"> Tablet & ipad </span>
              </button>

              <button id="NAV_MB" class="btn badg btn-sm " type="button" name="button" data-mont="#S_MB">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-phone" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M11 1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
                  <path fill-rule="evenodd" d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                </svg>
                <span id="S_MB"> Mobile </span>
              </button>

            <?php else: ?>

              <button id="NAV_PL" class="btn badg btn-sm " type="button" name="button" data-mont="#S_MB">
                <i class="fa fa-play-circle"></i>
                <span id="S_MB"> Play </span>
              </button>

              <button id="NAV_LV" class="btn badg btn-sm " type="button" name="button" data-mont="#S_MB">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-view-list" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M3 4.5h10a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1H3zM1 2a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 2zm0 12a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 14z"/>
                </svg>
                <span id="S_MB"> List View </span>
              </button>

            <?php endif; ?>
            </div>
            <div class="navbar-nav _cont">
              <button id="Codex_CONET" class="btn badge btn-danger btn-sm" type="button" name="button"  data-toggle="modal" data-target="#Codex_MODEL"> <i class="fa fa-get-pocket"></i> ContactUS </button>
            </div>
            <?php
               $heartO = $heart == 1? "fa-heart":"fa-heart-o";
               $class  = $heart == 1? "Rlike":"";
             ?>

            <div class="navbar-nav _like">
              <button id="Web_like" class="<?php echo $class; ?>" name="Temp_like" value="<?php echo md5($getTM['ID']); ?>" >  <i class="fa <?php echo $heartO ?>"></i> <span><?php echo $getTM['Likes']; ?></span> </button>
            </div>

            <div class="navbar-nav _see">
              <button> <i class="fa fa-eye"></i> <span><?php echo $getTM['View'] ?></span> </button>
            </div>

        </nav>
      </header>


    <?php if ($_COOKIEV == 0): ?>
      <div id="_COOKIE" class="_COOKIE">
        <div class="overlay"></div>
        <div class="COOKbody col-md-6">
          <h4>Sorry Cookies are disabled in your Browser</h4>
           <p dir="rtl">هذا المحتوي يستخدم <strong><code> [ Cookis ] </code></strong>برجاء تفعيلها حتي تتمكن من استخدام المحتوي بشكل سليم واضافة الأعجاب للتصميم والتواصل معنا . </p>
        </div>
      </div>
    <?php endif; ?>

       <div id="Mainoverlay" class="Mainoverlay"></div>

 <aside id="CODEX_SIDE" onscroll="GRT()" class="CODEX_SIDE owl-stage-outer">

<!-- /************** * FIXED MENU * **************/ -->

  <div class="logo">
    <div class="name">
      <img src="layout/images/LOGO/333.png" alt="">
      <span>ode</span><img src="layout/images/LOGO/7.png" alt=""> <span>lab</span>
    </div>
  </div>

  <div class="intro-menu owl-stage">

      <h6 class="fm-1"></h6>

    <ul>

      <li>
        <a class="dropdown-item " target="_blank" href="http://localhost/codexlab/">
          <span><i class="fa fa-home"></i>Home</span>
       </a>
      </li>

      <li  aria-expanded='false'>
        <a id="CAT" class="dropdown-item dropdown-toggle " href="#Category" data-toggle="collapse" aria-expanded="false" ><span><i class="fa fa-cubes"></i>Category</span> </a>
      </li>

      <?php $menuCat = getAlltable('ID,Name','categories','WHERE Parent !=0','AND Visibility = 1','Temp','DESC',5); ?>
        <!-- <div class=""> -->
          <ul class="dropdown-list collapse list-unstyled list-menu" id="Category">
            <?php foreach ($menuCat as $menuCAT): ?>
              <li><a target="_blank" href="blog?cati=<?php echo $menuCAT['ID']; ?>?tP=<?php echo $menuCAT['Name']; ?>"> <?php echo $menuCAT['Name']; ?></a> </li>
            <?php endforeach; ?>
            <li><a style="font-weight:550;color:#999" target="_blank" href="#">See All</a> </li>
          </ul>
        <!-- </div> -->

        <li  aria-expanded='false'>
          <a id="TM" class="dropdown-item" href="#Template" data-toggle="collapse" aria-expanded="false" ><span><i class="fa fa-briefcase"></i>Template</span> </a>
        </li>

        <?php  $menuTMP = getAlltable('ID,Name,Cat_ID','temp','WHERE Approve !=0','','View','DESC',5); ?>
          <!-- <div class=""> -->
            <ul class="dropdown-list collapse list-unstyled list-menu" id="Template">
              <?php foreach ($menuTMP as $menuTMP): ?>
                <?php
                  $Mmenu  = getOne('Parent',"categories","WHERE ID = {$menuTMP['Cat_ID']}");
                  $MNmenu = getOne("ID,Name",'Categories',"WHERE ID = {$Mmenu[0]['Parent']}");
                 ?>
                <li><a target="_blank" href="preview?V=<?php echo $MNmenu[0]['Name']; ?>&P=<?php echo $menuTMP['Cat_ID']; ?>&Temp=<?php echo $menuTMP['ID']; ?>"> <?php echo $menuTMP['Name']; ?> </a> </li>
              <?php endforeach; ?>
              <li><a style="font-weight:550;color:#999" target="_blank" href="#">See All</a> </li>
            </ul>
          <!-- </div> -->

      <li>
        <a href="About" class="dropdown-item" >
          <span><i class="fa fa-star"></i>Services</span>
       </a>
      </li>

      <li>
        <a class="dropdown-item" href="about">
          <span><i class="fa fa-user"></i>About Us</span>
       </a>
      </li>

    </ul>

<div class="search-input">
  <input id="TEMP" type="text" name="GET_TEMP" onkeyup="GETTEMP()" value="" placeholder="Template Search">
  <div class="scene">
    <div class="cube show-bottom">
      <div class="cube__face cube__face--front"><i class='fa fa-search'></i> </div>
      <div class="x cube__face cube__face--back"><i class='fa fa-search'></i></div>
      <div class="cube__face cube__face--right"><i class='fa fa-search'></i></div>
      <div class="x cube__face cube__face--left"><i class='fa fa-times'></i></div>
      <div class="cube__face cube__face--top"><i class='fa fa-search'></i></div>
      <div class="x cube__face cube__face--bottom"><i class='fa fa-search'></i></div>
    </div>
  </div>
  <div class="search-list">
    <ul id="out_TEMP">
      <li id="insert"> <a style='color: #444;'> INSERT TEMPLATE Name </a> </li>
    </ul>
  </div>
</div>

    <h4 class="copy_right_area">
      <span>
        Copyright ©2020 All rights reserved
      </span>
    </h4>



  </div>

<!-- </div> -->

</aside>


<?php if ($MID == 1): ?>
<style media="screen">
  body{
    overflow: hidden;
  }
</style>
  <!-- /************** * WEB_Temp * **************/ -->
  <section id="WEB_VIEWER" class="_Web">
    <div class="_CODEX">
      <side id="WEB_ul" class="_side">
        <button id="_open_COD" type="button" name="button" class="open_COD">
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z"/>
            <path fill-rule="evenodd" d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z"/>
          </svg>
        </button>
        <ul  class="_ul">
          <!-- LAPTOP MONITORS -->
          <li>
            <button id="iframPC" type="button" name="button" class="btn badge btn-light" title="Convert To PC & laptop View">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-laptop" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M13.5 3h-11a.5.5 0 0 0-.5.5V11h12V3.5a.5.5 0 0 0-.5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11z"/>
                <path d="M0 12h16v.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5V12z"/>
              </svg>
            </button>
            <span class="badge">Lap/PC</span>
          </li>
          <!-- TABLET MONITORS -->
          <li>
            <button id="iframTB" type="button" name="button" class="btn badge btn-light" title="Convert To Tablet View">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-tablet" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M12 1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
                <path fill-rule="evenodd" d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
              </svg>
            </button>
            <span class="badge">Tablet/ipad</span>
          </li>
          <!-- PHONE MONITORS -->
          <li>
            <button id="iframPH" type="button" name="button" class="btn badge btn-light" title="Convert To Mobile View">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-phone" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M11 1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
                <path fill-rule="evenodd" d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
              </svg>
            </button>
            <span class="badge">Mobile</span>
          </li>

        </ul>
      </side>
    </div>

    <iframe id="_MYframe" src="http://localhost/codexlab/<?php echo $Wpath ?>" width="100%" ></iframe>

  </section>


<?php elseif(isset($MID) && $MID == '5') : ?>

  <!-- /************** * GRAPHIC TEMP * **************/ -->

      <section id="GRPH_VIEWER" class="Graphic">

        <?php
           echo  $path."<br>";
         ?>

        <?php $TEMPimg = getOne('*','data',"WHERE sha1(Temp_ID) like '%$temp%'",'') ; ?>

         <div class="site-section">
           <div class="cstm-container">
             <div class="row">

               <div class="col-lg-12 view_col">

                <div class="owl-carousel owl-3 carousel_view">
                   <?php for ($i=1; $i <=10 ; $i++) { $img = $TEMPimg[0]['Temp_'.$i] !=='0' ? $TEMPimg[0]['Temp_'.$i]:'';?>
                    <?php if (!empty($img)): ?>
                      <?php $img = $path."Temp_$i\\".$img; ?>
                      <a id="img_click" href="<?php echo $img ?>" data-fancybox="gal"><img src="<?php echo $img ?>" alt="<?php echo $TEMP . " image $i"  ?>" class="img-fluid"></a>
                    <?php endif; ?>
                   <?php } ?>
                </div>
                <div class="content">
                  <div class="container">
                    <div class="row">
                      
                      <h3 class="col-md-7"><?php echo $getTM['Name']; ?></h3>
                      <div class="text col-xl-8 col-lg-10 col-md-11">
                        <div class="publish">
                          <span><?php echo date('M d Y',strtotime($getTM['Date'])); ?></span>
                          <?php $Admin = $getTM['Admin_ID']; echo $Admin; ?>
                          <?php $Admin = getOne('ID,username,img','admin',"WHERE ID = $Admin","AND Block = 0") ?>
                          <span> <?php echo $Admin[0]['username'] ?> </span>
                          <span> <i class="fa fa-eye"></i> <?php echo $getTM['View'] ?> </span>
                          <span> <i class="fa fa-thumbs-o-up"></i> <?php echo $getTM['Likes'] ?> </span>
                        </div>
                        <p>
                          <?php echo $getTM['Description']; ?>
                        </p>
                      </div>
                    </div>

                  </div>
                </div>
               </div>
             </div>

             <div class="more_TEMP">
               <h3>
                 Other Templates for <?php echo $MP[0]['Name'] ?>
                 <img class="back-S" src="layout/images/black/B7.png" alt="">
               </h3>

               <div class="row">

                 <?php $checkmore = checkval('ID','Temp',"WHERE ID !=?","AND Cat_ID = ?","AND Approve = ?",$ID,$P,1); ?>

                 <?php if ($checkmore !== 0): ?>

                     <?php $getmoreP = getAlltable('*','temp',"WHERE Cat_ID = {$getTM['Cat_ID']}","AND Approve = 1 AND ID !=$ID",'View','DESC',3) ?>
              <?php foreach ($getmoreP as $mTP): ?>
                <?php $mA = getOne('username','admin',"WHERE ID = {$mTP['Admin_ID']}",'AND Block = 0') ?>

                <div class="col-xl-4 col-lg-4 col-md-4 col more">

                   <div class="in">
                     <a href="#">
                       <img src="layout/images/WEB/dk2.png" alt="">
                       <p class="col">
                         <span><?php echo $mTP['Name'] ?></span>
                         <span> <i class="fa fa-thumbs-o-up"></i> <?php echo $mTP['Likes'] ?> </span>
                         <span> <i class="fa fa-eye"></i> <?php echo $mTP['View'] ?> </span>
                         <span class="admin_" style="text-decoration: underline;"> <?php echo $mA[0]['username'] ?> </span>
                       </p>
                     </a>
                   </div>

                </div>

              <?php endforeach; ?>

                 <?php endif; ?>

               </div>
             </div>

           </div>



         </div>



<?php endif; ?>

<!-- /************** * CODEX FOOTER * **************/ -->

  <?php  include $tpl . 'Footer.inc'; ?>

  <?php   ob_end_flush();  // Release The Output ?>
