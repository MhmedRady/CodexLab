<?php
ob_start();
session_start();

include '../../functions/functions.php';
include '../../functions/GEN-Function.php';
include '../../../connect.php';

?>

<script type="text/javascript">

$('body').fadeIn(500);
$('.body').fadeIn(1000);
</script>
<?php
// if (isset($_SESSION['LORDADMIN'])) {

  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $adminP = '../../../';
    $data   = '../../../../data/';
  $check    = isset($_GET['check']) ? $_GET['check'] = 'Ckc!' : $_GET['check'] ;

              /***************** START CATEGORY SEARCH  *************/

    if ($check == 'Ckc!') :

      $page = !isset($_GET['page']) ? $_GET['page'] = 'check' : $_GET['page'];

      if (isset($page) && $page == 'GetTemp'){
         if(isset($_POST["CName"]) && !empty($_POST["CName"]) && is_numeric($_POST['CName']) ) {
           $cat = $_POST["CName"];
        $get = getAlltable('*','Categories',"Where Parent = {$cat}",'','Temp','',0);
         ?>
         <option selected disabled value="0">Select Template Type ...</option>
         <?php foreach ($get as $T): ?>

           <?php if ($T['Block']!=='0'): ?>
             <option disabled style="color:#666;background-color:#ccc" value="<?php echo $T['ID']; ?>"><?php echo $T['Name'] ?></option>
             <?php else: ?>
               <option value="<?php echo $T['ID']; ?>"><?php echo $T['Name'] ?></option>
           <?php endif; ?>

         <?php endforeach; ?>

         <?php
       }
       }elseif (isset($page) && $page == 'checkAdmin') {

         if(isset($_POST["admin"]) && !empty($_POST["admin"]) ) {

           $checkA = filter_var($_POST["admin"],FILTER_SANITIZE_STRING) ;

               $A = checkItem('username', 'admin', $checkA, "AND GroupID = 0 AND Block = 0");

             if($A==0 ) {
               echo "<span  class=' status-not-available' style='display:block'><li class='fa fa-times-circle'></li> User Name Not exist!  </span> ";
               ?>
               <script type="text/javascript">
                 $('#erG').delay(500).fadeIn(1000);
                 var trust = true;
                 $('#admin').addClass('N');
                 $('.contact-form').submit(function(e){
                   if ( trust == true ) {
                     e.preventDefault();
                   }
                 });
               </script>
               <?php
             }elseif ($A!==0) {
               ?>

               <script type="text/javascript">

               $('#admin').removeClass('N');

                 $('#erG').fadeOut(1);

                 var trust = false;
                 $('#admin').removeClass('N');
               </script>

               <?php
             }
          }

       }elseif (isset($page) && $page == 'forgot') {

         if(isset($_POST["forgot"]) ) {

           ?>
           <form id="forgotform" class="contact-form " action="<?php $_SERVER['PHP_SELF'] ?>" method="post">

           <div class="input">

             <input id="admin" class="form-control <?php if (!empty($userErrorm)){ echo 'inputerror'; } ?>" type="text" name="mem" onchange"checkMember()" value="<?php if(isset($user)){echo $user;} ?>" placeholder="User Name">

             <span  id="admin-availability" style="display:block"></span>
                 <!-- <span style="display:block;" class=" php-error-mem">  </span> -->
                 <span id="error-user" class="error"></span>
           </div>

           <div class="input">
             <input id="pass" class="form-control <?php if (!empty($userErrorm)){ echo 'inputerror'; } ?>" type="text" name="mem" onblur="checkMember()" value="<?php if(isset($user)){echo $user;} ?>" placeholder="Your Admin key">
             <span class="pass" style="display:block"></span>

                 <!-- <span style="display:block;" class=" php-error-mem"> </span> -->

               <span id="error-muser" class="error"></span>
           </div>

           <div class="input">
             <input id="pass" class="form-control <?php if (!empty($userErrorm)){ echo 'inputerror'; } ?>" type="text" name="mem" onblur="checkMember()" value="<?php if(isset($user)){echo $user;} ?>" placeholder="last Password">
             <span class="pass" style="display:block"></span>

                 <span style="display:block;" class=" php-error-mem"> </span>

               <span id="error-muser" class="error"></span>
           </div>

           <button class="btn badge btn-info btn-sm" type="submit" name="adminlog">Login</button>

             </form>

             <script type="text/javascript">
               $('#forgotform').delay(1000).fadeIn(1500,function(){
                 $('#logform').remove();
               });
             </script>

           <?php

         }

       }elseif (isset($page) && $page == 'CeKCat') {

         if(isset($_POST["CName"]) && !empty($_POST["CName"]) ) {

           $checkC = filter_var($_POST["CName"],FILTER_SANITIZE_STRING) ;

               $C = checkItem('Name', 'Categories', $checkC, "");

             if($C!==0 ) {
               echo "<span  class=' status-not-available' style='display:block'><li class='fa fa-times-circle'></li> This Category Name Inserted Before!  </span> ";
               ?>
                <script type="text/javascript">
                  $('#errCat').animate({opacity:0},1000);
                  $('#ck').delay(500).css('opacity',1).show().addClass('err');
                </script>
               <?php
             }else {
               ?>
               <script type="text/javascript">
                 $('#ck').hide().removeClass('err');
               </script>
               <?php
             }

            }
        }elseif (isset($page) && $page == 'visB') {

          if(isset($_POST["vis"]) && !empty($_POST["vis"]) ) {
            $CATID = $_POST["vis"];
            $check = checkItem('ID','Categories',"$CATID",'');
            if ($check==1) {
              $GET = getOne('*','Categories',"WHERE ID = $CATID",'');
              echo $CATID;
              if($GET[0]['Visibility']==0){
                update($CATID, '', 'categories', 'SET Visibility = 1',"WHERE ID = ? ");
                echo SETtage('Category Visibility',"'',5000,1",'Category <strong>'.$GET[0]['Name'].'</strong> visible Now.',1,0,'',$GET[0]['Name'],$GET[0]['ID']);
                ?>
                  <script type="text/javascript">
                  $(".addDONE").each(function(){
                    if ($(this).hasClass('added')) {
                      $('#added').click();
                    }
                  });
                  $('#closetag, .closetag').click(function(){
                    $(".addDONE").removeClass('added');
                  });
                  </script>
                <?php
              }else {
                update($CATID, '', 'categories', 'SET Visibility = 0',"WHERE ID = ? ");
                echo SETtage('Category Visibility',"'',5000,1",'Category <strong>'.$GET[0]['Name'].'</strong> Invisible Now.',1,0,'',$GET[0]['Name'],$GET[0]['ID']);
                ?>
                  <script type="text/javascript">
                $(".addDONE").each(function(){
                    if ($(this).hasClass('added')) {
                      $('#added').click();
                    }
                  });
                  </script>
                <?php
              }
            }else {
              echo "NO";
            }
          }

        }elseif (isset($page) && $page == 'appSRV') {

          if(isset($_POST["app"]) && !empty($_POST["app"]) ) {
            $SRVID = $_POST["app"];
            $check = checkItem('ID','Services',"$SRVID",'');
            if ($check==1) {
              $GET = getOne('*','Services',"WHERE ID = $SRVID",'');
              // echo $CATID;
              if($GET[0]['Approve']==0){
                 update($SRVID, '', 'services', 'SET Approve = 1',"WHERE ID = ? ");
                echo SETtage('Services Approving',"'',5000,1",'Services <strong>'.$GET[0]['Name'].'</strong> Approved Now.',1,0,'',$GET[0]['Name'],$GET[0]['ID']);
                ?>
                  <script type="text/javascript">
                  $(".addDONE").each(function(){
                    if ($(this).hasClass('added')) {
                      $('#added').click();
                    }
                  });
                  $('#closetag, .closetag').click(function(){
                    $(".addDONE").removeClass('added');
                  });
                  </script>
                <?php
              }else {
                 update($SRVID, '', 'services', 'SET Approve = 0',"WHERE ID = ? ");
                echo SETtage('Services Approving',"'',5000,1",'Services <strong>'.$GET[0]['Name'].'</strong> Disapproved Now.',1,0,'',$GET[0]['Name'],$GET[0]['ID']);
                ?>
                  <script type="text/javascript">
                  $(".addDONE").each(function(){
                    if ($(this).hasClass('added')) {
                      $('#added').click();
                    }
                  });
                  </script>
                <?php
              }
            }else {
              echo "NO";
            }
          }

      }elseif (isset($page) && $page == 'Tag') {

        if(isset($_POST["DelCat"]) && !empty($_POST["DelCat"]) ) {
          $CAT = $_POST["DelCat"];

          $GET = getOne('Name,Temp,Parent','categories',"WHERE ID = $CAT",'');
          $P = $GET[0]['Parent'];
          if ($P !== '0') {
            echo SETtage('Delete Category',"'',10000,1",'Are You sure to delete <strong>'.$GET[0]['Name'].'</strong> Category? This Category Contains <strong> [ '.$GET[0]['Temp'].'</strong> ] Template.',1,0,'',$GET[0]['Name'],$CAT,"checkdata('#TAG','#GET','Del','CAT')","Delete");
          }else {
            echo SETtage('Delete Category',"'',10000,1",'Sorry <strong>'.$GET[0]['Name'].'</strong> Is a Main Category So you Can not delete it! But you Cat Update it.',1,0);
          }


        }elseif ( isset($_POST["DelSRV"]) && !empty($_POST["DelSRV"]) ) {
          ?>
            <script type="text/javascript">
              console.log('delete services called');
            </script>
          <?php
          $SRV = $_POST["DelSRV"];

          $GET = getOne('*','Services',"WHERE ID = $SRV",'');

          echo SETtage('Delete Services',"'',10000,1",'Are You sure to delete <strong>'.$GET[0]['Name'].'</strong> Services?! ',1,0,'',$GET[0]['Name'],$GET[0]['ID'],"checkdata('#TAG','#GET','Del','SRV')","Delete");

        }elseif ( isset($_POST["DelTOL"]) && !empty($_POST["DelTOL"]) ) {

          $TOL = $_POST["DelTOL"];

          $GET = getOne('*','Tools',"WHERE ID = $TOL",'');

          echo SETtage('Delete Tool',"'',10000,1",'Are You sure to delete <strong>'.$GET[0]['Name'].'</strong> Tool?! ',1,0,'',$GET[0]['Name'],$GET[0]['ID'],"checkdata('#TAG','#GET','Del','TOL')","Delete");

        }elseif ( isset($_POST["DelTEMP"]) && !empty($_POST["DelTEMP"]) ) {

          $TMP = $_POST["DelTEMP"];

          $GET = getOne('*','Temp',"WHERE ID = $TMP",'');

          echo SETtage('Delete Template',"'',15000,1",'Are You sure to delete <strong>'.$GET[0]['Name'].'</strong> Template?! ',1,0,'',$GET[0]['Name'],$GET[0]['ID'],"checkdata('#TAG','#GET','Del','TMP')","Delete");

        }

      }elseif (isset($page) && $page == 'Del') {

        if(isset($_POST["TOL"]) && !empty($_POST["TOL"]) ) {
          $TOL = $_POST["TOL"];

          $GET = getOne('*','Tools',"WHERE ID = $TOL",'');
          $TOL = $GET[0];
          $TOLN = $TOL['Name'];

            if (is_dir($adminP."../data/TOL/".$TOLN)) {
              $files = scandir($adminP.'../data/TOL/'.$TOLN,SCANDIR_SORT_NONE);
              for ($i=2; $i <11 ; $i++) {
                if (isset($files[$i])) {
                  unlink($adminP.'../data/TOL/'.$TOLN.'/'.$files[$i]);
                }
              }
              rmdir($adminP.'../data/TOL/'.$TOLN);
            }

          $del = $con->prepare("DELETE FROM Tools WHERE ID = :zid");

          $del->bindParam(":zid", $TOL['ID']);

          $del->execute();

          $Deleted = $del->rowCount();

          if ($Deleted==1) {
            echo SETtage('Data Removed',"'',3000,1",'Tools <strong>'.$GET[0]['Name'].'</strong> Deleted. Page Will Refresh After <strong> [ 3 ] Seconds.</strong>',0,0,'',$GET[0]['Name'],$GET[0]['ID'],"","");
          }
         ?>
            <script type="text/javascript">
              ref('3000');
            </script>
         <?php
       }elseif (isset($_POST["SRV"]) && !empty($_POST["SRV"]) ) {
         $SRV = $_POST["SRV"];
         ?>
           <script type="text/javascript">
             console.log('delete services called');
           </script>
         <?php
          $ID = $SRV;
          $GET = getOne('Name','services',"WHERE ID = $ID");
         if (is_dir($data."SERV/".$ID)) {
           rmrf($data."SERV/".$ID);
         }

         $del = $con->prepare("DELETE FROM services WHERE ID = :zid");

         $del->bindParam(":zid", $SRV);

         $del->execute();

         $Deleted = $del->rowCount();

          if ($Deleted == 1) {
            echo SETtage('Data Removed',"'',3000,1",'Services <strong>'.$GET[0]['Name'].'</strong> Deleted. Page Will Refresh After <strong>[ 3 ] Seconds.</strong>',0,0,'',$GET[0]['Name'],$GET[0]['ID'],"",0);
          }

         ?>
            <script type="text/javascript">
              ref('3000');
            </script>
         <?php
       }elseif(isset($_POST["CAT"]) && !empty($_POST["CAT"]) ) {
        $ID = $_POST["CAT"];
        echo "DELET cat";
         $GET = getOne('Name,Parent,Temp','categories',"WHERE ID = $ID",'');
         echo "$ID <br>" ;
         $P = $GET[0]['Parent'];
         $TC = $GET[0]['Temp'];
         print_r($GET);

         $path = $data."PCAT/$ID";
         if ($P !== 0) {
           if (is_dir($path)) {
               rmrf($path);
             if (!is_dir($path)) {
               $Temp = getOne('ID,Name','temp',"WHERE Cat_ID = $ID");
               $Tcount = count($Temp);
               for ($i=0; $i <$TC ; $i++) {
                 $TN = $Temp[$i]['Name'];
                 $TID= $Temp[$i]['ID'];
                 if (is_dir($data."TEMP/$TID")) {
                   rmrf($data."TEMP/$TID");
                 }
                 if (is_dir($data."WEB_Temp/$TN")) {
                   rmrf($data."WEB_Temp/$TN");
                 }
               }
             }
           }
         }else {
           echo "Main";
         }

         // $del = $con->prepare("DELETE FROM categories WHERE ID = :zid");
         //
         // $del->bindParam(":zid", $CAT['ID']);
         //
         // $del->execute();
         //
         // $Deleted = $del->rowCount();
         //
         // if ($Deleted==1) {
           echo SETtage('Data Removed',"'',3000,1",'Category <strong>'.$GET[0]['Name'].'</strong> Deleted. Page Will Refresh After <strong>[ 3 ] Seconds.</strong>',0,0,'',$GET[0]['Name'],$ID,"","");
         // }
        ?>
           <script type="text/javascript">
             // ref('3000');
           </script>
        <?php
      }elseif(isset($_POST["TMP"]) && !empty($_POST["TMP"]) ) {

        $TMPID = $_POST["TMP"];

        $GET = getOne('*','Temp',"WHERE ID = $TMPID",'');
        $TMP = $GET[0];
        $TMPN = $TMP['Name'];
        $P   =  $TMP['Cat_ID'];

        $datapath = $adminP."../data/TEMP/".$TMPID;

        if (is_dir($datapath)) {
          rmrf($datapath);
        }

        $M = getOne('Parent','categories',"WHERE ID = $P");
        $M = $M[0]['Parent'];

        if ($M == 1) {
            $webpath = $data."WEB_Temp/$TMPN";
            if (is_dir($webpath)) {
              rmrf($webpath);
            }

        }
        $del = $con->prepare("DELETE FROM Temp WHERE ID = :zid");

        $del->bindParam(":zid", $TMP['ID']);

        $del->execute();

        $Deleted = $del->rowCount();

        if ($Deleted==1) {
          echo SETtage('Data Removed',"'',3000,1",'Template <strong>'.$GET[0]['Name'].'</strong> Deleted. Page Will Refresh After <strong>[ 3 ] Seconds.</strong>',0,0,'',$GET[0]['Name'],$GET[0]['ID'],"","");
        }
       ?>
          <script type="text/javascript">
            ref('3000');
          </script>
       <?php
     }
    }elseif (isset($page) && $page == 'appTOL') {

      if(isset($_POST["APP"]) && !empty($_POST["APP"]) ) {
        $TOLID = $_POST["APP"];
        $check = checkItem('ID','Tools',"$TOLID",'');
        if ($check==1) {
          $GET = getOne('*','Tools',"WHERE ID = $TOLID",'');
          // echo $CATID;
          if($GET[0]['Approve']==0){
             update($TOLID, '', 'Tools', 'SET Approve = 1',"WHERE ID = ? ");
            echo SETtage('Tool Approving',"'',5000,1",'Services <strong>'.$GET[0]['Name'].'</strong> Approved Now.',1,0,'',$GET[0]['Name'],$GET[0]['ID']);
            ?>
              <script type="text/javascript">
              $(".addDONE").each(function(){
                if ($(this).hasClass('added')) {
                  $('#added').click();
                }
              });
              $('#closetag, .closetag').click(function(){
                $(".addDONE").removeClass('added');
              });
              </script>
            <?php
          }else {
             update($TOLID, '', 'Tools', 'SET Approve = 0',"WHERE ID = ? ");
            echo SETtage('Tool Approving',"'',5000,1",'Category <strong>'.$GET[0]['Name'].'</strong> Disapproved.',1,0,'',$GET[0]['Name'],$GET[0]['ID']);
            ?>
              <script type="text/javascript">
              $(".addDONE").each(function(){
                if ($(this).hasClass('added')) {
                  $('#added').click();
                }
              });
              </script>
            <?php
          }
        }else {
          echo "NO";
        }
      }

  }elseif (isset($page) && $page == 'appTMP') {

    if(isset($_POST["app"]) && !empty($_POST["app"]) ) {
      $TMPID = $_POST["app"];
      $check = checkItem('ID','temp',"$TMPID",'');
      if ($check==1) {
        $GET = getOne('*','temp',"WHERE ID = $TMPID",'');
        // echo $CATID;
        if($GET[0]['Approve']==0){
           update($TMPID, '', 'temp', 'SET Approve = 1',"WHERE ID = ? ");
          echo SETtage('Template Approving',"'',5000,1",'Template <strong>'.$GET[0]['Name'].'</strong> Approved .',1,0,'',$GET[0]['Name'],$GET[0]['ID']);
          ?>
            <script type="text/javascript">
            $(".addDONE").each(function(){
              if ($(this).hasClass('added')) {
                $('#added').click();
              }
            });
            $('#closetag, .closetag').click(function(){
              $(".addDONE").removeClass('added');
            });
            </script>
          <?php
        }else {
           update($TMPID, '', 'temp', 'SET Approve = 0',"WHERE ID = ? ");
          echo SETtage('Template Approving',"'',5000,1",'Template <strong>'.$GET[0]['Name'].'</strong> Disapproved .',1,0,'',$GET[0]['Name'],$GET[0]['ID']);
          ?>
            <script type="text/javascript">
            $(".addDONE").each(function(){
              if ($(this).hasClass('added')) {
                $('#added').click();
              }
            });
            </script>
          <?php
        }
      }else {
        echo "NO";
      }
    }

    }elseif ( isset($page) && $page == 'dlTimg') {

    $ID = $_POST['ID'];
    $img = $_POST['img'];

        // echo $ID;

        // echo $img;

        $GET = getOne('*','Temp',"WHERE ID = $ID",'');
        $TEMP = $GET[0]['Name'];
        $IMG_1 = $GET[0]['img_1']; $IMG_2 = $GET[0]['img_2']; $IMG_3 = $GET[0]['img_3'];
        $files = scandir($data."TEMP/$ID/img/",SCANDIR_SORT_NONE);
          $arrTOL = explode(',',$img); $count = count($arrTOL); print_r($arrTOL);

           $cunt = count($arrTOL);

           for ($d=0; $d < $cunt ; $d++) {

             /************ DATABASE ***********/

          $del =  $arrTOL[$d];
          // echo "<br> delete img [ " . $del . " ] <br/>";
           $getimg = getOne("img_$del",'temp',"WHERE ID = $ID");
             if ($del == 1) {
               print_r($getimg);

               $img = $getimg[0]['img_1'];
               if ($img !=='0') {
                 @unlink($data."TEMP/$ID/img/".$img);
               }
                 update($ID, '', 'temp', 'SET img_1 = 0',"WHERE ID = ? ");
             }

             if ($del == 2) {
               print_r($getimg);

               $img = $getimg[0]['img_2'];
               if ($img !== '0') {
                 @unlink($data."TEMP/$ID/img/".$img);
               }
                 update($ID, '', 'temp', 'SET img_2 = 0',"WHERE ID = ? ");
             }

             if ($del == 3) {
              print_r($getimg);

              $img = $getimg[0]['img_3'];
              if ($img !=='0') {
                @unlink($data."TEMP/$ID/img/".$img);
              }
                update($ID, '', 'temp', 'SET img_3 = 0',"WHERE ID = ? ");
             }

             /************          ***********/

           }

        ?>

            <script type="text/javascript">
              console.log('submit send');
              ref('100');
            </script>

        <?php

    }elseif ( isset($page) && $page == 'NEW_TEMP') {

        $path = $data."TEMP/";

              if (!isset($_POST['CName'])) {
                  $_POST['CName'] = '0';
              }

              if (!isset($_POST['Parent'])) {
                  $_POST['Parent'] = '0';
              }

              if (!isset($_POST['img1'])) {
                  $_POST['img1'] = '';
              }

              if (!isset($_POST['img2'])) {
                  $_POST['img2'] = '';
              }

              if (!isset($_POST['img3'])) {
                  $_POST['img3'] = '';
              }

              $Temp   = $_POST['Temp'];
              $Main   = $_POST['CName'];
              $P      = $_POST['Parent'];
              $disc   = $_POST['Disc'];

              $img_1  = $_FILES['input_1'];
              $img_2  = $_FILES['input_2'];
              $img_3  = $_FILES['input_3'];

              $crop_1 = $_POST['img1'];
              $crop_2 = $_POST['img2'];
              $crop_3 = $_POST['img3'];

              $TOOL   = $_POST['TVal'];

              if (!isset($app)) {
                $app = '1';
              }

              $app    = $_POST['App'];

              // echo "Temp  ".$Temp.'<br/>';
              // echo "Main  ".$Main.'<br/>';
              // echo "Parent  ".$P.'<br/>';
              // echo "Disc  ".$disc.'<br/>';
              // echo "APP  ".$app.'<br/>';
              //
              // echo 'TOOLS'. $TOOL.'<BR/>';
              //
              // echo "Crop 1  ".$crop_1.'<br/>';
              // echo "Crop 2  ".$crop_2.'<br/>';
              // echo "Crop 3  ".$crop_3.'<br/>';

              $imgN_1 = $img_1['name'];
              $imgsize_1 = $img_1['size'];
              $imgtype_1 = $img_1['type'];
              $imgerror_1 = $img_1['error'];

              $imgN_2 = $img_1['name'];
              $imgsize_2 = $img_1['size'];
              $imgtype_2 = $img_1['type'];
              $imgerror_2 = $img_1['error'];

              $imgN_3 = $img_1['name'];
              $imgsize_3 = $img_1['size'];
              $imgtype_3  = $img_1['type'];
              $imgerror_3 = $img_1['error'];

              // GET LIST OF ALLOWED FILE UPLODE TYPES

              $imgAllowExtension = array("gif", "jpeg", "jpg", "png");

              // GET VARIABLE FROM FORMS

              /* error */   @$imggetExtension_1 = strtolower(end(explode('.',$imgN_1)));

              /* error */   @$imggetExtension_2 = strtolower(end(explode('.',$imgN_2)));

              /* error */   @$imggetExtension_3 = strtolower(end(explode('.',$imgN_3)));

              $ERRTEMP = array();

              if ($imgerror_1 == 4 && $imgerror_2 == 4 && $imgerror_3 == 4) {
                  $ERRTEMP[] = "Images Can't Be empty!";
              }elseif ($imgsize_1 > 4194304 || $imgsize_2 > 4194304 || $imgsize_3 > 4194304) {
                $ERRTEMP[] = ' Image Size Can\'t Be larger Than <strong> "4MB" </strong> ' ;
              }elseif (!empty($imgN_1) && ! in_array($imggetExtension_1,$imgAllowExtension)) {
                $ERRTEMP[] = ' error image Extention Not Allow Please Insert image In Types <strong> "gif", "jpeg" , "jpg" , "png" </strong> ' ;
              }elseif (!empty($imgN_2) && ! in_array($imggetExtension_2,$imgAllowExtension)) {
                $ERRTEMP[] = ' error image Extention Not Allow Please Insert image In Types <strong> "gif", "jpeg" , "jpg" , "png" </strong> ' ;
              }elseif (!empty($imgN_3) && ! in_array($imggetExtension_3,$imgAllowExtension)) {
                $ERRTEMP[] = ' error image Extention Not Allow Please Insert image In Types <strong> "gif", "jpeg" , "jpg" , "png" </strong> ' ;
              }

              $check = checkItem('Name','Temp',$Temp,'');
              if ($check==1) {
                 $ERRTEMP[] = "This Template Inserted Before!";
              }elseif (!isset($Temp) || empty($Temp)) {
                  $ERRTEMP[] = "Template Name Can't Be empty!";
              }elseif (!empty($Temp) && strlen($Temp) > 25) {
                  $ERRTEMP[] = "Template Name Can't Be More Than [ 25 ] Characters!";
              }

              if ($P == '0') {
                  $ERRTEMP[] = 'Select Template Type';
              }

              if ($Main == '0') {
                  $ERRTEMP[] = 'Select Template Category';
              }

              if (empty($disc)) {
                  $ERRTEMP[] = "Description Can't Be Empty!";
              }elseif (strlen($disc) > 190) {
                  $ERRTEMP[] = "Description Must Be Less Than 190!";
              }

              if (empty($TOOL)) {
                  $ERRTEMP[] = "Select Template Used Tools ";
              }
              $admin = $_SESSION['ID'];

              if (empty($ERRTEMP) && $check == 0) {


                  /***************** DATABASE ***************/

                  $set=$con->Prepare("INSERT INTO temp(Name,Description,img_1,img_2,img_3,Tool,Approve,Cat_ID,Admin_ID,Date)
                  VALUES(:znm,:zdis,:zimg1,:zimg2,:zimg3,:zT,:zApp,:zp,:zA,now())");

                  $set->execute(array('znm'=>$Temp,'zdis'=>$disc,'zimg1'=>$crop_1,'zimg2'=>$crop_2,'zimg3'=>$crop_3,'zT'=>$TOOL,'zApp'=>$app,'zp'=>$P,'zA'=>$admin));

                  $datarow = $set->rowCount();

                  if ($datarow ==1) {
                    $GET = getOne('ID','Temp',"WHERE Name = '$Temp'","AND Cat_ID = $P");



  $ID = $GET[0]['ID'];

  /*****************************************************************/

      if (!is_dir($path.$ID)) {

        mkdir($path.$ID);
        mkdir($path.$ID."/img");
        mkdir($path.$ID."/Data");

      } else {

        $files = scandir($path.$ID."/img",SCANDIR_SORT_NONE);

        for ($i=2; $i <11 ; $i++) {
          if (isset($files[$i])) {
            unlink($path.$ID."/img//".$files[$i]);
          }
        }

      }

      if ($imgerror_1 !==4) {
          @rename('..\crop\Temp_1\\' . $crop_1 , $path . $ID ."/img//". $crop_1);
      }

      if ($imgerror_2 !==4) {
          @rename('..\crop\Temp_2\\' . $crop_2 , $path . $ID ."/img//". $crop_2);
      }

      if ($imgerror_3 !==4) {
          @rename('..\crop\Temp_3\\' . $crop_3 , $path . $ID ."/img//". $crop_3);
        }

        for ($d=1; $d <4 ; $d++) {

          $files = scandir("..\crop\Temp_$d",SCANDIR_SORT_NONE);
          print_r($files);
          $filescount = count($files);
          echo ">>>>>>>>>>$filescount";

          for ($i=2; $i <$filescount ; $i++) {
            if (isset($files[$i])) {
              unlink("..\crop\Temp_$d\\".$files[$i]);
              echo "data deleted";
            }
          }
        }


  /****************************************************************/

                    $path = "works.php?TempS=editsET&tempID=".$ID."&siTG=edit";

                    echo SETtage('New Template',"$path,50000,0",'Templates <strong>'.$Temp.'</strong> was Added As A new Template.You Wil Redirect To edit Template Page After <strong> [ 5 ] </strong> Or Click Cansel',1,1,$path,$Temp,'','','<i class="fa fa-wrench"></i>  edit',0);

                    /*****************************************/

                  }

              }else {

                $path = "Works.php?TempS=addNew";
                $titl = 'Template error!';
                $redir= "$path,3000,0";

                ?>

                <div class="tag">

                  <button id="added" type="button" style="display:none;" class="btn btn-primary " onclick="RedirectTime(<?php echo $redir; ?>)" data-toggle="modal" data-target="#staticBackdrop">  </button>

                  <!-- Modal -->

                  <div class="addDONE modal fade added" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="staticBackdropLabel"><?php echo $titl; ?></h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="closetag" aria-hidden="true">&times;</span>
                          </button>
                        </div>

                        <div style="text-transform: capitalize;" class="modal-body">
                          <?php foreach ($ERRTEMP as $error): ?>
                            <div class="alert alert-danger" role="alert">
                              <?php echo " $error "; ?>
                            </div>
                          <?php endforeach; ?>
                        </div>

                          <div class="modal-footer">
                            <button id="closetag" type="button" class="btn btn-secondary btn-sm" data-dismiss="modal" >Cansel</button>
                          </div>

                      </div>
                    </div>
                  </div>

                  <script type="text/javascript">

                  $(".addDONE").each(function(){
                    if ($(this).hasClass('added')) {
                      $('#added').click();
                    }
                  });
                  $('#closetag, .closetag').click(function(){
                    $(".addDONE").removeClass('added');
                  });

                  </script>

                </div>

                <?php
              }

    }elseif ( isset($page) && $page == 'edit_TEMP') {

      ?>
        <script type="text/javascript">
          console.log('edit_TEMP');
        </script>
      <?php

      if (!isset($_POST['CName'])) {
          $_POST['CName'] = '0';
      }

      if (!isset($_POST['Parent'])) {
          $_POST['Parent'] = '0';
      }

      if (!isset($_POST['img1'])) {
          $_POST['img1'] = '';
      }

      if (!isset($_POST['img2'])) {
          $_POST['img2'] = '';
      }

      if (!isset($_POST['img3'])) {
          $_POST['img3'] = '';
      }

      /********************************************************************/

      $ID     = $_POST['ID'];

      $Temp   = $_POST['Temp'];
      $Main   = $_POST['CName'];
      $P      = $_POST['Parent'];
      $disc   = $_POST['Disc'];

      $img_1  = $_FILES['input_1'];
      $img_2  = $_FILES['input_2'];
      $img_3  = $_FILES['input_3'];

      $crop_1 = $_POST['img1'];
      $crop_2 = $_POST['img2'];
      $crop_3 = $_POST['img3'];

      $TOOL   = $_POST['TVal'];

      if (!isset($app)) {
        $app  = '1';
      }

      $app    = $_POST['App'];


      $imgN_1 = $img_1['name'];
      $imgsize_1 = $img_1['size'];
      $imgtype_1 = $img_1['type'];
      $imgerror_1 = $img_1['error'];

      $imgN_2 = $img_1['name'];
      $imgsize_2 = $img_1['size'];
      $imgtype_2 = $img_1['type'];
      $imgerror_2 = $img_1['error'];

      $imgN_3 = $img_1['name'];
      $imgsize_3 = $img_1['size'];
      $imgtype_3  = $img_1['type'];
      $imgerror_3 = $img_1['error'];

      /*******************************************************************/

      // GET LIST OF ALLOWED FILE UPLODE TYPES

      $imgAllowExtension = array("gif", "jpeg", "jpg", "png");

      // GET VARIABLE FROM FORMS

      /* error */   @$imggetExtension_1 = strtolower(end(explode('.',$imgN_1)));

      /* error */   @$imggetExtension_2 = strtolower(end(explode('.',$imgN_2)));

      /* error */   @$imggetExtension_3 = strtolower(end(explode('.',$imgN_3)));

      $ERRTEMP = array();

      if ($imgsize_1 > 4194304 || $imgsize_2 > 4194304 || $imgsize_3 > 4194304) {
        $ERRTEMP[] = ' Image Size Can\'t Be larger Than <strong> "4MB" </strong> ' ;
      }elseif (!empty($imgN_1) && ! in_array($imggetExtension_1,$imgAllowExtension)) {
        $ERRTEMP[] = ' error image Extention Not Allow Please Insert image In Types <strong> "gif", "jpeg" , "jpg" , "png" </strong> ' ;
      }elseif (!empty($imgN_2) && ! in_array($imggetExtension_2,$imgAllowExtension)) {
        $ERRTEMP[] = ' error image Extention Not Allow Please Insert image In Types <strong> "gif", "jpeg" , "jpg" , "png" </strong> ' ;
      }elseif (!empty($imgN_3) && ! in_array($imggetExtension_3,$imgAllowExtension)) {
        $ERRTEMP[] = ' error image Extention Not Allow Please Insert image In Types <strong> "gif", "jpeg" , "jpg" , "png" </strong> ' ;
      }

      $check = checkval('ID','Temp',"WHERE Name = ?","AND ID != ?",'',$Temp,$ID,'');

      if ($check==1) {
         $ERRTEMP[] = "This Template Inserted Before!";
      }elseif (!isset($Temp) || empty($Temp)) {
          $ERRTEMP[] = "Template Name Can't Be empty!";
      }elseif (!empty($Temp) && strlen($Temp) > 25) {
          $ERRTEMP[] = "Template Name Can't Be More Than [ 25 ] Characters!";
      }

      if ($P == '0') {
          $ERRTEMP[] = 'Select Template Type';
      }

      if ($Main == '0') {
          $ERRTEMP[] = 'Select Template Category';
      }

      if (empty($disc)) {
          $ERRTEMP[] = "Description Can't Be Empty!";
      }elseif (strlen($disc) > 190) {
          $ERRTEMP[] = "Description Must Be Less Than 190!";
      }

      if (empty($TOOL)) {
          $ERRTEMP[] = "Select Template Used Tools ";
      }

      if ( empty($ERRTEMP) && $check == 0) {

        echo "<br> no error  $ID";

        $GET = getOne('*','Temp',"WHERE ID = $ID",'');

        $lastN = $GET[0]['Name'];

     $checkrow = checkItem('Temp_ID',"data",$ID);

  /**************** DATABASE  ****************/

    $post_img = $_POST['File_10'];

    if (!isset($post_img)) {
      $post_img = 0;
    }

    $A = getOne('Admin_ID','temp',"WHERE ID = $ID");
    $A = $A[0]['Admin_ID'];

    echo $post_img;

    $P = $GET[0]['Cat_ID'];
    echo ">>>>>>>>>> $P";
    $M = getOne('Parent','categories',"WHERE ID = $P");
    $M = $M[0]['Parent'];

    if ($M !== 1) {
      if ($post_img==10) {
        if ($checkrow === 0) {
          $dataimg = $con->prepare("INSERT INTO data(Temp_ID,Cat_ID,Admin_ID)
          VALUES(:zT,:zC,:zA)");
          $dataimg->execute(array('zT'=>$ID,'zC'=>$P,'zA'=>$A));
          $datarow = $dataimg->rowCount();
        }
      }
    }

    $path= $data.'TEMP/';

  /******************************************/

        if (!is_dir($path.$ID)) {

            @mkdir($path.$ID);
            @mkdir($path.$ID.'/img');
            @mkdir($path.$ID.'/Data');

            if (!empty($crop_1) && !empty($crop_2) && !empty($crop_3)) {
                @unlink($path.$ID.'/img');
            }

            if (!empty($crop_1)) {
                @rename('..\crop\Temp_1\\' . $crop_1 , $path . $ID .'/img//'. $crop_1);
            }

            if (!empty($crop_2)) {
                @rename('..\crop\Temp_2\\' . $crop_2 , $path . $ID .'/img//'. $crop_2);
            }

            if (!empty($crop_3)) {
                @rename('..\crop\Temp_3\\' . $crop_3 , $path . $ID .'/img//'. $crop_3);
            }


          }else {

            $LASTimg_1 = $GET[0]['img_1'];
            $LASTimg_2 = $GET[0]['img_2'];
            $LASTimg_3 = $GET[0]['img_3'];



            $files = scandir($path.$ID.'/img',SCANDIR_SORT_NONE);

               // for ($i=1; $i <4 ; $i++) {
              // $LASTimg = $GET[0]['img_'.$i];
              /***************************************************/
              // $crop_1 = $_POST['img1'];

              // if ( $Temp == $lastN ) {

              for ($i=1; $i <4 ; $i++) {

/**************************************************/

                $Fimg  = $_FILES['input_'.$i];

                $imgerr = $Fimg['error'];

                $Fcrop = $_POST['img'.$i];

                $LASTimg = $GET[0]['img_'.$i];

                    if ($imgerr==0) {

                      if (is_file($path.$ID."/img//".$LASTimg)) {
                          unlink($path.$ID."/img//".$LASTimg);
                      }
                        rename('..\crop\Temp_'.$i.'\\' . $Fcrop , $path . $ID . '/img//'. $Fcrop);
                    }elseif($imgerr==4) {
                        $Fcrop = $_POST['img'.$i] = $GET[0]['img_'.$i];
                    }

/**************************************************/

                  }


              $crop_1 = $_POST['img1'];
              $crop_2 = $_POST['img2'];
              $crop_3 = $_POST['img3'];

              if (!is_dir($path.$ID."/Data//")) {
                  mkdir($path.$ID."/Data//");
              }

              for ($U=1; $U <=10 ; $U++) {

                $dataTEMP = $path.$ID."/Data/TEMP_".$U;

                $UPTEMP   = "../UP/upload/TEMP_".$U;

                  if (!is_dir($path.$ID."/Data/TEMP_".$U)) {
                      mkdir($path.$ID."/Data/TEMP_".$U);
                  }

                  if (isset($UPTEMP)) {

                     echo "TEMP_".$U . '<br/>';

                     $UP = scandir($UPTEMP,SCANDIR_SORT_NONE);
                     // print_r($UP);

                     if (isset($UP[2])) {

                       /**********************************/

                       $DATA  = scandir($dataTEMP,SCANDIR_SORT_NONE);

                       $DATACOUNT = count($DATA);

                       for ($d=2; $d < $DATACOUNT ; $d++) {
                         if (isset($DATA[$d])) {
                         @unlink($dataTEMP.'/'.$DATA[$d]);
                         }
                       }

                       /*********************************/

                         rename($UPTEMP.'/'.$UP[2],$path.$ID."/Data/TEMP_".$U.'/'.$UP[2]);

                         $upIMG = "TEMP_".$U ;

                         $upVAL = $UP[2];

                         echo '<br>'.$upIMG.'<br>';

                         echo '<br>'.$upVAL.'<br>';

                         if ($checkrow == 1) {
                           update($ID,'','data',"SET $upIMG = '$upVAL'","WHERE Temp_ID = ?");
                         }

                     }

                  }

                }

                if ($Main == '1') {

                    if (is_dir("../UP/upload/zip/$Temp")) {
                      @rename("../UP/upload/zip/$Temp",$data."WEB_Temp/".$Temp);
                    }

                    rmrf('../UP/upload/zip');
                }

              /******************** DATABASE *******************/

              $set=$con->prepare("UPDATE Temp SET Name = ?, Description = ?, img_1 = ?, img_2 = ?, img_3 = ?, Tool = ?, Approve=?, Cat_ID=? WHERE ID = ?");
              $set->execute(array(
                $Temp,
                $disc,
                $crop_1,
                $crop_2,
                $crop_3,
                $TOOL,
                $app,
                $P,
                $ID
              ));

              /********************          *******************/

              $Mn = getOne("Name",'categories',"WHERE ID = $Main",'AND Parent = 0');

              $path = "preview.php?V=".$Mn[0]['Name']."&P=".$P."&Temp=".$ID;

              $backP = "works.php?TempS=editsET&tempID=".$ID."&siTG=edit";

             echo SETtage('Template Update',"'',5000,1",'Template <strong>'.$Temp.'</strong> Data Updated.',1,1,$path,$Temp,$ID,"","<i style='font-size: 18px;' class='fa fa-crosshairs'></i>  View",0);

              /**************************************************/

          }

        }else {

          $path = "Works.php?TempS=addNew";
          $titl = 'Template error!';
          $redir= "'',300000,0";

          ?>

          <div class="tag">

            <button id="eDIT_DATA_TEMP" type="button" style="display:none;" class="btn btn-primary " onclick="RedirectTime(<?php echo $redir; ?>)" data-toggle="modal" data-target="#CHECK_pAGE">  </button>

            <!-- Modal -->

            <div class="addDONE modal fade added" id="CHECK_pAGE" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><?php echo $titl; ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span class="closetag" aria-hidden="true">&times;</span>
                    </button>
                  </div>

                  <div style="text-transform: capitalize;" class="modal-body">
                    <?php foreach ($ERRTEMP as $error): ?>
                      <div class="alert alert-danger" role="alert">
                        <?php echo " $error "; ?>
                      </div>
                    <?php endforeach; ?>
                  </div>

                    <div class="modal-footer">
                      <button id="closetag" type="button" class="btn btn-secondary btn-sm" data-dismiss="modal" >Cansel</button>
                    </div>

                </div>
              </div>
            </div>

            <script type="text/javascript">

            $(".addDONE").each(function(){
              if ($(this).hasClass('added')) {
                $('#eDIT_DATA_TEMP').click();
              }
            });
            $('#closetag, .closetag').click(function(){
              $(".addDONE").removeClass('added');
            });

            </script>

          </div>

          <?php
        }


    }elseif (isset($page) && $page == 'NEW_SRV') {

                $SARV = $_POST['SARV'];
                $DIC  = $_POST['DISC'];
                $APP  = $_POST['SAPP'];
                $IMG  = $_FILES['inputimg'];
                $crop = $_POST['cropd'];

                if (!isset($APP)) {
                  $APP = 1;
                }


                // $get = getOne('*','Services',"WHERE ID = ");

                $imgname    = $IMG['name'];
                $imgtype    = $IMG['type'];
                $imgsize    = $IMG['size'];
                $imgtmp     = $IMG['tmp_name'];
                $imgerror   = $IMG['error'];

                $SARV       = filter_var($SARV, FILTER_SANITIZE_STRING);

                // GET LIST OF ALLOWED FILE UPLODE TYPES

                $imgAllowExtension = array("gif", "jpeg", "jpg", "png");

                // GET VARIABLE FROM FORMS

                @$imgformat = strtolower(end(explode('.',$imgname)));


                $Errors = array();

                $check = checkItem('Name','services',"$SARV",'');

                if (empty($SARV) || !isset($SARV)) {
                  $Errors[] = "Services Name Can't Be Empty!";
                }else
                if ($check==1) {
                  $Errors[] = "This Services inserted Before!";
                }elseif (strlen($SARV)>25) {
                  $Errors[] = "Services Name Must Be less Than <strong> [ 25 ] </strong> Characters.";
                }

                if (empty($DIC) || !isset($DIC)) {
                  $Errors[] = "Services Description Can't Be Empty!";
                }elseif (strlen($DIC)>110) {
                  $Errors[] = "Services Description Must Be less Than <strong> [ 110 ] </strong> Characters.";
                }

                if($imgerror == 4){
                       $Errors[] = "Image Can't Be Empty!";
                }elseif (!empty($img) && ! in_array($imgformat,$imgAllowExtension)) {
                       $Errors[] = 'Please Insert image In Types <strong> "gif", "jpeg" , "jpg" , "png" </strong> ' ;
                }elseif ($imgsize > 4194304) {
                       $Errors[] = ' Image Size Can\'t Be larger Than <strong> "4MB" </strong> ' ;
                }

                if ( empty($Errors ) && $check == 0 ) {


                  $set=$con->prepare("INSERT INTO services(Name, Description, Approve, img, Date) VALUES(:znm,:zdes, :zapp, :zimg, now()) ");
                  $set->execute(array('znm'=>$SARV, 'zdes'=>$DIC, 'zapp'=>$APP, 'zimg'=>$crop));

                  $ID = getOne('ID','services',"WHERE Name LIKE '%$SARV%'");

                  $ID = $ID[0]['ID'];

                  $path = $data.'SERV/'.$ID.'/';

                  if (!is_dir($path)) {
                    mkdir($path);
                  }

                  @rename('..\crop\SRV\\'.$crop ,$path . $crop);


                  echo SETtage('New Services',"'',5000,1",'Services <strong>'.$SARV.'</strong> Added As A new Services.',1,0,'','',0);

                }else {
                  // $path = "Works.php?TempS=addNew";
                  $titl = 'Services error !';
                  $redir= "'',10000,1";

                  ?>

                  <div class="tag">

                    <button id="eDIT_DATA_SRV" type="button" style="display:none;" class="btn btn-primary " onclick="RedirectTime(<?php echo $redir; ?>)" data-toggle="modal" data-target="#CHECK_pAGE">  </button>

                    <!-- Modal -->

                    <div class="addDONE modal fade added" id="CHECK_pAGE" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">

                          <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel"><?php echo $titl; ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span class="closetag" aria-hidden="true">&times;</span>
                            </button>
                          </div>

                          <div style="text-transform: capitalize;" class="modal-body">
                            <?php foreach ($Errors as $error): ?>
                              <div class="alert alert-danger" role="alert">
                                <?php echo " $error "; ?>
                              </div>
                            <?php endforeach; ?>
                          </div>

                            <div class="modal-footer">
                              <button id="closetag" type="button" class="btn btn-secondary btn-sm" data-dismiss="modal" >Cansel</button>
                            </div>

                        </div>
                      </div>
                    </div>

                    <script type="text/javascript">

                    $(".addDONE").each(function(){
                      if ($(this).hasClass('added')) {
                        $('#eDIT_DATA_SRV').click();
                      }
                    });
                    $('#closetag, .closetag').click(function(){
                      $(".addDONE").removeClass('added');
                    });

                    </script>

                  </div>

                  <?php
                }

    }elseif (isset($page) && $page == 'edit_SRV') {

      /******************************************************/

      /*****************************************************/
                $ID   = $_POST['ID'];
                $SARV = $_POST['SARV'];
                $DIC  = $_POST['DISC'];
                $APP  = $_POST['SAPP'];
                $IMG  = $_FILES['inputimg'];
                $crop = $_POST['cropd'];

                if (!isset($APP)) {
                  $APP = 1;
                }

                // echo $ID;

                if (empty($crop)) {
                  $IMG['error']=4;
                }

                echo 'check' . $IMG['error'].'['.$crop.']';



                // echo "Name".'   '.$SARV;
                // echo "disc".'   '.$DIC;
                // echo "app".'   '.$APP;

                // echo "img".'   '.$IMG.'</br>';

                $imgname    = $IMG['name'];
                $imgtype    = $IMG['type'];
                $imgsize    = $IMG['size'];
                $imgtmp     = $IMG['tmp_name'];

                // echo "Name".'   '.$imgname.'</br>';
                // echo "type".'   '.$imgtype.'</br>';
                // echo "size".'   '.$imgsize.'</br>';
                // echo "tmp".'   '.$imgtmp.'</br>';

                $SARV       = filter_var($SARV, FILTER_SANITIZE_STRING);

                // GET LIST OF ALLOWED FILE UPLODE TYPES

                $imgAllowExtension = array("gif", "jpeg", "jpg", "png");

                // GET VARIABLE FROM FORMS

                @$imgformat = strtolower(end(explode('.',$imgname)));


                $SRVerr = array();

                $check = checkval('ID','Services',"WHERE Name = ?",'AND ID != ?','',$SARV,$ID,'');

                if (empty($SARV) || !isset($SARV)) {
                  $SRVerr[] = "Services Name Can't Be Empty!";
                }else
                if ($check==1) {
                  $SRVerr[] = "This Services inserted Before!";
                }elseif (strlen($SARV)>25) {
                  $SRVerr[] = "Services Name Must Be less Than <strong> [ 25 ] </strong> Characters.";
                }

                if (empty($DIC) || !isset($DIC)) {
                  $SRVerr[] = "Services Description Can't Be Empty!";
                }elseif (strlen($DIC)>110) {
                  $SRVerr[] = "Services Description Must Be less Than <strong> [ 110 ] </strong> Characters.";
                }

                if ($IMG['error']!==4 && ! in_array($imgformat,$imgAllowExtension)) {
                       $SRVerr[] = 'Please Insert image In Types <strong> "gif", "jpeg" , "jpg" , "png" </strong> ' ;
                }elseif ($imgsize > 4194304) {
                       $SRVerr[] = ' Image Size Can\'t Be larger Than <strong> "4MB" </strong> ' ;
                }

      /***************************/

                if (empty($SRVerr) && $check == 0) {

                  $get = getOne('*','Services',"WHERE ID = $ID",'');
                  $last = $get[0]['ID'];
                  $LASTimg = $get[0]['img'];

                  if ($crop==$LASTimg) {
                    $IMG['error']==4;
                  }

                  $path = $data.'SERV/'.$ID;

                  echo $path.'SERV'.$ID;

                  if (!is_dir($path)) {
                    mkdir($path);
                  }

                  //
                  // // // echo 'CROP' . $crop;
                  //
                  // if (empty($crop)) {
                  //   echo "emptycropd";
                  // }
                  //

                  $path = $data.'SERV/'.$ID.'/';

                  $files = scandir($data.'SERV/'.$ID,SCANDIR_SORT_NONE);

                  print_r($files);

                  if ($IMG['error']==0) {

                    // if (isset($files[3])) {
                      @unlink($path.$LASTimg);
                    // }



                    rename('..\crop\SRV\\'.$crop ,$path . $crop);

                    echo "IMG ReNAMED";

                  }

                    $set=$con->prepare("UPDATE Services SET Name =?, Description=?, Approve=?, img=? WHERE ID =?");

                    $set->execute(array($SARV, $DIC, $APP, $crop, $ID));

                    if ($set->rowCount()==1) {
                      echo SETtage('Services update',"'',5000,1",'Services <strong>'.$SARV.'</strong> has been updated successfuly .',1,0,'','',0);
                    }


                  }else {

                    /*************************************************************/

                        // $path = "Works.php?TempS=addNew";
                        $titl = 'Services error !';
                        $redir= "'',10000,1";

                        ?>

                        <div class="tag">

                          <button id="eDIT_DATA_SRV" type="button" style="display:none;" class="btn btn-primary " onclick="RedirectTime(<?php echo $redir; ?>)" data-toggle="modal" data-target="#CHECK_pAGE">  </button>

                          <!-- Modal -->

                          <div class="addDONE modal fade added" id="CHECK_pAGE" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">

                                <div class="modal-header">
                                  <h5 class="modal-title" id="staticBackdropLabel"><?php echo $titl; ?></h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span class="closetag" aria-hidden="true">&times;</span>
                                  </button>
                                </div>

                                <div style="text-transform: capitalize;" class="modal-body">
                                  <?php foreach ($SRVerr as $error): ?>
                                    <div class="alert alert-danger" role="alert">
                                      <?php echo " $error "; ?>
                                    </div>
                                  <?php endforeach; ?>
                                </div>

                                  <div class="modal-footer">
                                    <button id="closetag" type="button" class="btn btn-secondary btn-sm" data-dismiss="modal" >Cansel</button>
                                  </div>

                              </div>
                            </div>
                          </div>

                          <script type="text/javascript">

                          $(".addDONE").each(function(){
                            if ($(this).hasClass('added')) {
                              $('#eDIT_DATA_SRV').click();
                              // $('.modal-backdrop').remove();
                            }
                          });
                          $('#closetag, .closetag').click(function(){
                            $(".addDONE").removeClass('added');
                          });

                          </script>

                        </div>

                        <?php

                    /*************************************************************/

                  }
                //


      /*****************************************************/

    }elseif (isset($page) && $page == 'NEW_CAT') {
      if (!isset($_POST['visB'])) {
        $_POST['visB'] = '';
      }elseif ($_POST['visB'] == '0') {
        $_POST['visB'] = 0;
      }

      if (!isset($_POST['parent'])) {
        $_POST['parent'] = 0;
      }
      // if ($_POST['blok']!=='1') {
      //   $_POST['blok'] = 0;
      // }

    //  print_r($_FILES['inputimg']);

      $name = $_POST['Name'];
      $Parent = $_POST['parent'];
      $vis = $_POST['visB'];
      $block = $_POST['bloCk'];
echo "BLOCK" .  $block . '</br>';
      if ($Parent !== '0') {

        @$disc = $_POST['DISC'];
        @$IMG  = $_FILES['inputimg'];

        @$crop = $_POST['catimg'];

        $imgname  = $IMG['name'];
        $imgsize  = $IMG['size'];
        $imgtype  = $IMG['type'];

        $name     = filter_var($name, FILTER_SANITIZE_STRING);

        // GET LIST OF ALLOWED FILE UPLODE TYPES

        $imgAllowExtension = array("gif", "jpeg", "jpg", "png");

        // GET VARIABLE FROM FORMS

        @$imgformat = strtolower(end(explode('.',$imgname)));

        echo "disc" . $disc.'</br>';

        echo "imgtype" .  $imgname . '</br>';

      }

      echo "Name" .$name.'<br/>';
      echo "parent" .$Parent.'<br/>';
      echo "visible" .$vis.'<br/>';
      echo "block" .$block.'<br/>';

      // echo "block" .$disc.'<br/>';

      $ERROR  = array();

      $check = checkItem('Name','categories',$name,'');
      if ($check==1) {
        $ERROR[] = "this Category inserted Before!";
      }else
      if (empty($name)) {
        $ERROR[] = "Category Name Can't Be empty";
      }

      if (empty($vis) && $vis !==0) {
          $ERROR[] = "Select Category Visibility";
      }

/*********************************************************************/

      if ($Parent == '0') {

        $disc=$crop='';

      }else {

        if (empty($imgname)) {
               $ERROR[] = " Image Can't Be Empty!";
        }elseif ( ! in_array($imgformat,$imgAllowExtension)) {
               $ERROR[] = ' Please Insert image In Types <strong> "gif", "jpeg" , "jpg" , "png" </strong> ' ;
        }elseif ($imgsize > 2097152 ) {
               $ERROR[] = ' Image Size Can\'t Be larger Than <strong> "2MB" </strong> ' ;
        }

        if (empty($disc)) {
           $ERROR[] = "Description Can't Be Empty!";
        }

      }



      if ( empty($ERROR) && $check == 0) {


          /*************** DATABASE ****************/

          $set=$con->Prepare("INSERT INTO
          Categories(Name,Parent,Description,img,Visibility, Date,Block)
          VALUES(:zname,:zP,:zdis,:zimg,:zV,now(),:zB)
          ");

          $set->execute(array(
          'zname' => $name,
          'zP'    => $Parent,
          'zdis'  => $disc,
          'zimg'  => $crop,
          'zV'    => $vis,
          'zB'    => $block
          ));

          /****************************************/

          $get = getOne('ID','categories',"WHERE Name = '$name'",'');
          $ID  = $get[0]['ID'];


          $path = $data.'PCAT/'.$ID;

          if ($Parent !== '0') {

            if (!is_dir($path)) {
               mkdir($path);
            }else {
              $files = scandir($path,SCANDIR_SORT_NONE);
                if (isset($files[3])) {
                  unlink($path.'/'.$files[3]);
                }
            }

            @rename('..\crop\CAT\\' . $crop , $path .'/'. $crop);

          }


          echo SETtage('New Category ' ,"'categories.PHP',30000,0",'Category <strong>'.$name.'</strong> Data Inserted Done!.',1,1,'?cat=editsET&catID='.$ID.'&siTG=edit',$name,$ID,'','edit');

         }else {

           /*************************************************************/

               // $path = "Works.php?TempS=addNew";
               $titl = 'Category error !';
               $redir= "'',10000,1";

               ?>

               <div class="tag">

                 <button id="eDIT_DATA_CAT" type="button" style="display:none;" class="btn btn-primary " onclick="RedirectTime(<?php echo $redir; ?>)" data-toggle="modal" data-target="#CHECK_pAGE">  </button>

                 <!-- Modal -->

                 <div class="addDONE modal fade added" id="CHECK_pAGE" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                   <div class="modal-dialog">
                     <div class="modal-content">

                       <div class="modal-header">
                         <h5 class="modal-title" id="staticBackdropLabel"><?php echo $titl; ?></h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span class="closetag" aria-hidden="true">&times;</span>
                         </button>
                       </div>

                       <div style="text-transform: capitalize;" class="modal-body">
                         <?php foreach ($ERROR as $error): ?>
                           <div class="alert alert-danger" role="alert">
                             <?php echo " $error "; ?>
                           </div>
                         <?php endforeach; ?>
                       </div>

                         <div class="modal-footer">
                           <button id="closetag" type="button" class="btn btn-secondary btn-sm" data-dismiss="modal" >Cansel</button>
                         </div>

                     </div>
                   </div>
                 </div>

                 <script type="text/javascript">

                 $(".addDONE").each(function(){
                   if ($(this).hasClass('added')) {
                     $('#eDIT_DATA_CAT').click();
                     // $('.modal-backdrop').remove();
                   }
                 });
                 $('#closetag, .closetag').click(function(){
                   $(".addDONE").removeClass('added');
                 });

                 </script>

               </div>

               <?php

           /*************************************************************/

         }

          // /**********************************************************/

    }elseif (isset($page) && $page == 'edit_CAT') {

            $ID = $_POST['CATID'];

            $name = $_POST['Name'];
            // $Parent = $_POST['Parent'];
            // $vis = $_POST['visB'];

            $disc = $_POST['DISC'];
            $img = $_FILES['inputimg'];

            $get = getOne('*','categories',"WHERE ID = $ID",'');

            if (!isset($_POST['Parent'])) {
                $Parent = $get[0]['Parent'];
            } else {
                $Parent = $_POST['Parent'];
            }

            if (empty($_POST['catimg'])) {
              $crop =  $_POST['catimg'] = $get[0]['img'];
            }

            // print_r($img);

            // /***********************************************************/


            if ($_POST['V']!=='1') {
                $_POST['V'] = 0;
            }

            $vis  = $_POST['V'];
            $block = $_POST['bloCk'];
          // echo "Block".$_POST['bloCk'].'<br/>';
            if ($Parent !== '0') {

              @$disc = $_POST['DISC'];

              @$IMG  = $_FILES['inputimg'];

              @$crop = $_POST['catimg'];
          // echo "Crop".$crop.'<br/>';
              $imgname  = $IMG['name'];
              $imgsize  = $IMG['size'];
              $imgtype  = $IMG['type'];

              $name     = filter_var($name, FILTER_SANITIZE_STRING);

              // GET LIST OF ALLOWED FILE UPLODE TYPES

              $imgAllowExtension = array("gif", "jpeg", "jpg", "png");

              // GET VARIABLE FROM FORMS

              @$imgformat = strtolower(end(explode('.',$imgname)));

              echo "imgtype" .  $imgname . '</br>';

            }

            $check = checkval('ID','Categories',"WHERE Name = ?","AND ID != ?",'',$name,$ID,'');

                    // echo "block" .$disc.'<br/>';

                    $ERROR  = array();

                    if ($check ==1) {
                      $ERROR[] = "this Category inserted Before!";
                    }else
                    if (empty($name)) {
                      $ERROR[] = "Category Name Can't Be empty";
                    }

                    if (!isset($vis)) {
                      $ERROR[] = "Select Category Visibility";
                    }

                    if ($Parent == '0') {

                      echo "parent = 0";

                      $disc = $crop='';

                      rmrf($data.'PCAT/'.$ID);

                    } else {

                      if (!empty($crop) && $crop !== $get[0]['img']) {

                        if ( ! in_array($imgformat,$imgAllowExtension)) {
                          $ERROR[] = ' Please Insert image In Types <strong> "gif", "jpeg" , "jpg" , "png" </strong> ' ;
                        }elseif ($imgsize > 2097152 ) {
                          $ERROR[] = ' Image Size Can\'t Be larger Than <strong> "2MB" </strong> ' ;
                        }

                      }

                      if (empty($disc)) {
                         $ERROR[] = "Description Can't Be Empty!";
                      }

          /**************************************************************/
                }

                if (empty($ERROR) && $check == 0 ) {

                    if ($Parent !== '0'){
                      if (!empty($crop)) {
                        $lastimg = $get[0]['img'];
                        $path = $data.'PCAT/'.$ID;
                        if (is_dir($path)) {
                          unlink($path.'/'.$lastimg);
                        }
                           @rename('..\crop\CAT\\' . $crop , $path ."/". $crop);
                      }
                    }

                      /*************** DATABASE ****************/

                      $set=$con->Prepare("UPDATE Categories
                        SET Name =?,Parent =?,Description =?,img =?,Visibility =?, Block=? WHERE ID = ?
                      ");

                      $set->execute(array(
                         $name,
                         $Parent,
                         $disc,
                         $crop,
                         $vis,
                         $block,
                         $ID
                      ));

                      /****************************************/

                    echo SETtage('Category UpdatE',"'categories.PHP',3000,0",'Category <strong>'.$name.'</strong> Data Updated.',0,0,'',$name,$ID);

                } else {

                    /*************************************************************/

                        // $path = "Works.php?TempS=addNew";
                        $titl = 'Category error !';
                        $redir= "'',10000,1";

                        ?>

                        <div class="tag">

                          <button id="eDIT_DATA_CAT" type="button" style="display:none;" class="btn btn-primary " onclick="RedirectTime(<?php echo $redir; ?>)" data-toggle="modal" data-target="#CHECK_pAGE">  </button>

                          <!-- Modal -->

                          <div class="addDONE modal fade added" id="CHECK_pAGE" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">

                                <div class="modal-header">
                                  <h5 class="modal-title" id="staticBackdropLabel"><?php echo $titl; ?></h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span class="closetag" aria-hidden="true">&times;</span>
                                  </button>
                                </div>

                                <div style="text-transform: capitalize;" class="modal-body">
                                  <?php foreach ($ERROR as $error): ?>
                                    <div class="alert alert-danger" role="alert">
                                      <?php echo " $error "; ?>
                                    </div>
                                  <?php endforeach; ?>
                                </div>

                                  <div class="modal-footer">
                                    <button id="closetag" type="button" class="btn btn-secondary btn-sm" data-dismiss="modal" >Cansel</button>
                                  </div>

                              </div>
                            </div>
                          </div>

                          <script type="text/javascript">

                          $(".addDONE").each(function(){
                            if ($(this).hasClass('added')) {
                              $('#eDIT_DATA_CAT').click();
                              // $('.modal-backdrop').remove();
                            }
                          });
                          $('#closetag, .closetag').click(function(){
                            $(".addDONE").removeClass('added');
                          });

                          </script>

                        </div>

                        <?php

                    /*************************************************************/

                }

            /*********************************************************************/

    }



?>

<?php

/****************************************/
endif;

}else{
?>
  <div class="check-alert alert alert-danger">
    <i class='fa fa-times'></i>
    Sorry Just <strong> ADMIN </strong> Can Open This Page.
  </div>
  <div class="check-alert alert text-center alert-info">
    <i class='fa fa-exclamation'></i>
  So You Will Redirect to <strong> Home </strong> Page  After <strong>3</strong> Seconds.
  </div>
<?php

  header('Refresh: 3; url=..\..\..\logphp.php');

exit();
}

ob_end_flush();  // Release The Output


?>
