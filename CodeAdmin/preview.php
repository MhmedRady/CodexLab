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
      $noNavbar  = 1;
      $StartUp   = 0;
      $Adminprev = 1;
      $prev = 1;
      include "inc.php";

     ?>

     <?php
      $i1 = rand(1,9); $i2 =$i1 + 1; $i3 =$i1 - 1; $i4 = $i1;
      $cssVersion = $i1.'.'.$i2.'.'.$i3;
      $v = 'v'.$i4.'='.$cssVersion;
      ?>

     <!DOCTYPE html>
     <html lang="en" dir="ltr">
       <head>
     <?php echo $_SESSION['myadmin'] .$_SESSION['ID'] ?>
         <meta charset="utf-8">

    <?php $temp = isset($_GET['Temp']) && is_numeric($_GET['Temp']) ? intval($_GET['Temp']): '' ?>
    <?php $GETTEMP = getOne('*',"temp","WHERE ID = $temp");   ?>

     <title><?php $TEMP = $GETTEMP[0]['Name']; echo $TEMP; ?></title><link rel="icon"type="image/png" href="<?php echo $img; titimg(); ?>">

     <link rel="stylesheet" href="<?php echo $css ?>font-awesome.min.css">
     <link rel="stylesheet" href="<?php echo $css ?>bootstrap.min.css">

     <?php if (isset($_SESSION['myadmin'])){ ?>

     <?php $view = isset($_GET['V']) ? $_GET['V'] : '' ?>

     <?php $P = isset($_GET['P']) && is_numeric($_GET['P']) ? intval($_GET['P']): '' ?>

       <?php if (isset($view) && !empty($view)){ ?>

         <?php

           $checkP = checkItem('ID','Categories',"$P",'AND Parent != 0');
           $checkT = checkItem('ID','temp',"$temp","AND Cat_ID = $P");

     // echo $temp.">>>>>".$P.">>>>>".$checkP.">>>>>".$checkT;

           if ($checkT == 1 && $checkP == 1) {

               $M = getOne("Parent",'categories',"WHERE ID = $P");
               $getM = getOne('Name','categories',"WHERE ID = '{$M[0]['Parent']}'",'');
               if ($getM[0]['Name'] == $view) {
                 // echo $view;
                 $M = $M[0]['Parent'];
                   if ($M == '1') {
                     $path = "..\data\WEB Temp\\$temp\index.php";
                     echo "WEB TEMPLATE";
                   }elseif ($M == '5') {
                     $GRPHview = 2;
                     $path = "..\data\Temp\\$temp\Data\\";
                     echo "Graphic TEMPLATE";
                   }
               }
           }

           ?>

       <?php } ?>


     <?php if (!isset($GRPHview) ||  $GRPHview == 0): ?>
       <!-- <script src="<?php echo $js; ?>jquery-3.2.1.min.js" type="text/javascript"></script> -->
     <?php endif; ?>


   <?php if (isset($GRPHview) &&  $GRPHview == 2): ?>
     <!-- /************** * GRAPHIC TEMP CAROUSEL * **************/ -->
     <link rel="stylesheet" href="<?php echo $css ?>jquery.fancybox.min.css">
     <link rel="stylesheet" href="<?php echo $css ?>owl.carousel.min.css">
   <?php endif; ?>

   <link rel="stylesheet" href="<?php echo $css ?>prev5.css">

   </head>

   <body>

 <aside onscroll="GRT()" class="PREV tabs">

<!-- /************** * FIXED MENU * **************/ -->

<div class="fixedmenu owl-stage-outer" >
  <button type="button" class="btn-sm CODEXmnu" name="button"><img class="imgCODEX" src="<?php echo $img; ?>333.png" alt=""> </button>
  <div class="admin">
    <img src="<?php echo $img; ?>4.png" alt="">
    <span> <span id="adN"><?php echo $_SESSION['myadmin'] ?></span> <small><?php echo $_SESSION['ID'] ?></small> </span>
  </div>

    <div class="intro-CODEX">
      <ul>
        <li><a href="Dashboard.php"><i class="fa fa-tachometer "></i> Dashboard </a> </li>
        <li><a href="categories.php"><i class="fa fa-cubes"></i> categories</a> </li>
        <li><a href="services.php"><i class="fa fa-star"></i> services</a> </li>
        <li><a href="Works.php"><i class="fa fa-briefcase"></i> Templates</a> </li>
        <li class="op-list"><a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-plus-circle"></i> add new</a> </li>
        <!-- <div class=""> -->
          <ul class=" list-CODEX collapse list-unstyled" id="pageSubmenu">
            <li><a target="_blank" href="categories.php?cat=NewCat">New Category</a> </li>
            <li><a target="_blank" href="services.php?srv=newSRV">New Service</a> </li>
            <li><a target="_blank" href="works.php?TempS=addNew">New Template</a> </li>
            <li><a target="_blank" href="#">New Project</a> </li>
          </ul>
        <!-- </div> -->
        <li><a href="logout.php"><i class="fa fa-sign-out"></i> logout</a> </li>



      </ul>
    </div>

  </div>

</aside >


<?php if (isset($M) && $M == '1'): ?>

  <!-- /************** * WEB TEMP * **************/ -->

      <section id="WEB_VIEWER" class="Web">

        <?php
           include $path;
         ?>

      </section>

<?php elseif(isset($M) && $M == '5') : ?>

  <!-- /************** * GRAPHIC TEMP * **************/ -->

      <section id="GRPH_VIEWER" class="Graphic">

        <?php
           echo  $path;
         ?>

        <?php $TEMPimg = getOne('*','data',"WHERE Temp_ID = $temp",'') ; ?>

         <div class="site-section">
           <div class="container">
             <div class="row">
               <div class="col-lg-12">
                 <div class="owl-carousel owl-3">
                   <?php for ($i=1; $i <=10 ; $i++) { $img = $TEMPimg[0]['Temp_'.$i] !=='0' ? $TEMPimg[0]['Temp_'.$i]:'';?>
                    <?php if (!empty($img)): ?>
                      <?php $img = $path."Temp_$i\\".$img; ?>
                      <a id="img_click" href="<?php echo $img ?>" data-fancybox="gal"><img src="<?php echo $img ?>" alt="<?php echo $TEMP . " image $i"  ?>" class="img-fluid"></a>
                    <?php endif; ?>
                   <?php } ?>
                </div>
               </div>
             </div>
           </div>
         </div>

      </section>

<?php endif; ?>

<?php }else{ ?>
  <?php echo SETtage('error Page',"'logphp.php.php',3000,1",'Just <strong> ADMIN </strong> CAN OPEN THIS PAGE.',1,3,'',$Temp,$ID,'','',1); ?>
<?php } ?>


<!-- /************** * CODEX FOOTER * **************/ -->

  <?php  include $tpl . 'footer.inc'; ?>



     </body>
   </html>

  <?php   ob_end_flush();  // Release The Output ?>
