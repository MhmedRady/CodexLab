<?php
ob_start();

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

  if ($_SERVER['REQUEST_METHOD'] !== 'POST'){
    header('location : http://localhost/codexlab/');
    exit;
  }else {


  $check   = isset($_GET['check']) ? $_GET['check'] = 'Ckc!' : $_GET['check'] ;

              /***************** START CATEGORY SEARCH  *************/

    if ($check !== 'Ckc!') :
      header('location : http://localhost/codexlab/');
      exit;
      else :

        /** ***********************************************
          // START _CHECK CLASS
        *********************************************** **/

        class _CHECK
        {
        public $error = array();
        public $N;
        public $P;
        public $E;
        public $D;
        public $ip;
        public $err = 0;
        const NUM = 12;
        const Qrray = array("[","1","2","3","4","5","6","7","8","9","0","۰", "۱", "۲", "۳", "٤","٥","٦","۸","۹",
         "/","*","!","<",">","(",")",".","-","+","=","÷","{","}","?",":",";","@","#","$","%","^","&","_",".","؟",
         ",","]");

        public function checkempty()
        {
          $ex = str_split($this->N);
          $count = count($ex);
          if (empty($this->N)) {
              array_push($this->error,"لم يتم داخال الأسم");
          }else {
            for ($i=0; $i <$count ; $i++) {
              if (in_array($ex[$i],SELF::Qrray) || is_numeric($ex[$i])) {
                $this->err = 1;
              }
            }
            if ($this->err==1) {
              array_push($this->error,"برجاء ادخال الاسم بشكل صحيح");
            }
          }

          if ( empty($this->P)) {
              array_push($this->error,"لم يتم ادخال رقم الهاتف");

          }elseif (strlen($this->P) !==SELF::NUM) {
            array_push($this->error,"رقم الهاتف الذي ادخلته غير صحيح ");
          }
          if (empty($this->E)) {
              array_push($this->error,"برجاء ادخال البريد الالكتروني");
          }
          if (empty($this->D)) {
              array_push($this->error,"في عبارات بسيطه ادخل استفسارك حتي نتمكن من تقديم المساعدة !");
          }
        }
        public function _CHECK1($xsr,$select,$from,$val,$and=NULL,$cmsg)
        {
          $XSRF = _CSRF();
          $IP   = $this->ip;
          $csrf = strlen($xsr);
          $XSRF = strlen($XSRF);
          $A = checkItem($select, $from, $val, $and);
          // if ($A !== 0) {
            if ($csrf!==$XSRF) {
              global $con;
              $cmsg = "البيانات المدخلة غير صحيحة برجاء ادخال البيانات بشكل صحيح !";
              if ($A == 0) {
                $msg = $con->prepare("INSERT INTO msg(IP,Block,Date)
                VALUES(:zip,:zB,now())");
                $msg->execute(array('zip'=>$IP,'zB'=>1));
                $datarow = $msg->rowCount();
              }
              array_push($this->error,$cmsg);
            } else {
              if($A !== 0){
                $B = checkItem($select, $from, $val, 'AND Block = 1');
                if ($B !== 0 ) {
                  $cmsg = "لا يمكن ارسال هذه الرسالة برجاء المحاولة في وقت لاحق .";
                }
                array_push($this->error,$cmsg);
              }
          }

          }
        // }

        }

        /** ***********************************************
          // END _CHECK CLASS
        *********************************************** **/

      $page = !isset($_GET['page']) ? $_GET['page'] = 'check' : $_GET['page'];

    if (isset($page) && $page == 'GETTEMP'){

    if (!empty($_POST["GET_TEMP"])) {
      $checkTEMP = filter_var($_POST["GET_TEMP"],FILTER_SANITIZE_STRING) ;

      if ($checkTEMP !==0) {
        $GET = getAlltable('ID,Name,Cat_ID','temp',"WHERE Name like '%$checkTEMP%'",'AND Approve = 1','View','DESC',0);
        ?>
        <?php if (!empty($GET)): ?>
          <?php foreach ($GET as $TEMP): ?>
            <?php
            $ID = $TEMP['ID'] ;
              $M = getOne('Parent',"categories","WHERE ID = {$TEMP['Cat_ID']}");
              $MN = getOne("ID,Name",'Categories',"WHERE ID = {$M[0]['Parent']}");
             ?>
            <li><a href="preview?V=<?php echo md5($MN[0]['Name']); ?>&P=<?php echo md5($TEMP['Cat_ID']); ?>&Temp=<?php echo sha1($ID); ?>"><?php echo $TEMP['Name']; ?></a> </li>
          <?php endforeach; ?>
          <?php else: ?>
          <?php
            echo "<li> <a style='color: #444;'> DATA NOT FOUND </a> </li>";
           ?>
        <?php endif; ?>
        <?php
      }

    }else if(empty($_POST["SEARCH_TEMP"])){
      echo "<li> <a style='color: #444;'> INSERT TEMPLATE NAME </a> </li>";
    }
  } elseif (isset($page) && $page == 'SRCHTEMP'){

    $TEMP = $_POST["TEMP_NAME"];
    $CAT  = $_POST["CAT_ID"];

    $TEMP = filter_var($TEMP,FILTER_SANITIZE_STRING) ;

    if ($CAT !=='0') {

      $checkTEMP = checkval('ID','Temp',"WHERE Name LIKE ?","AND Cat_ID = ?",'AND Approve = 1',$TEMP,$CAT);


        /*****************************************/

        if ($checkTEMP !==0) {
          $getTMP = getOne('*','temp',"WHERE Name like '%$TEMP%'","AND Cat_ID = $CAT  AND Approve = 1");
           foreach ($getTMP as $TMP): ?>
            <?php if ($TMP['img_1'] !== '0'):
              $IMG = $TMP['img_1'];
              elseif ($TMP['img_2'] !== '0'):
                $IMG = $TMP['img_2'];
              elseif ($TMP['img_3'] !== '0'):
                $IMG = $TMP['img_3'];
             endif; ?>
            <li>
              <button type="button" class="search_temp" >
                <a href="#">
                  <img src="data\TEMP\<?php echo $TMP['Name']; ?>\img\<?php echo $IMG; ?>" alt="<?php echo $TMP['Name']; ?>">
                  <span><?php echo $TMP['Name']; ?></span>
                </a>
              </button>
            </li>
          <?php endforeach; ?>
          <?php
        }

        /****************************************/

    }else {
      echo "<br>".'Select Category first'."</br>";
    }


}elseif (isset($page) && $page =='weblike') {
  if (!empty($_POST["Temp_like"])) {
    $id = $_POST["Temp_like"];
    $getid = getOne('ID,Likes','Temp',"WHERE md5(ID) like '%$id%'");
    $ID = $getid[0]['ID'];

    if (count($_COOKIE)>0) {

      if (isset($_COOKIE['Codex'])) {
        // echo "COOKIE isset";
        $like = $_COOKIE['Codex'];
        $arr  = explode(',',$like);
        if (!in_array($ID,$arr)) {
          $likes = intval($getid[0]['Likes'])+1;

          // array_push($arr,$ID);
          // print_r($arr);
          // $str = implode(',',$arr) ;
          // echo "<br> $str <br>";
          // // setcookie('Codex',$str,time()+3600,'/codexlab/Preview','localhost',TRUE,true);
          // print_r($arr);

          echo "like not in array >>>>>>> $likes";

        } else {
          $array = array(7,8);
            // $arr = explode(',',$_COOKIE['Codex']);
            // $arr = explode(',',$array);
            $val = 5;
            array_push($val,$array);
            print_r($arr);
            $likes = intval($getid[0]['Likes'])-1;
            //
            foreach ($arr as $key => $value) {
              if ($value == $ID) {
                echo "<br> no like temp <br/>";
                unset($arr[$key]);
              }
            }
                        print_r($arr);
  // echo "dislike in array >>>>>>> $likes";
            $str = implode(',',$arr) ;
            print_r($arr);
  //           setcookie('Codex',$str,time()+3600,'/codexlab/Preview','localhost',TRUE,true);
  //           print_r($_COOKIE['Codex']);

          echo " dislike in array";
        }
      } else {
        $arr = array();
        $arr [] = $ID;
        $likes = intval($getid[0]['Likes'])+1;
   echo "$likes";
   echo "COOKIE created  >>>>>>> $likes";
        $str = implode(',',$arr) ;
         setcookie('Codex',$str,time()+3600,'/','localhost',FALSE,TRUE);
        print_r($arr);
        echo "COOKIE created";
      }

    //  update($ID,'','temp',"SET Likes = $likes","WHERE ID = ? ");

    }else {
      echo "please active COOKIE first";
    }

}
}elseif (isset($page) && $page == 'Temp_like'){
$like = array();
  if (!empty($_POST["Temp_like"])) {

    $ID = $_POST["Temp_like"];

    $checkTEMP = checkItem('ID',"temp","$ID",'AND Approve = 1');

    if ($checkTEMP !==0) {
      $getlike = getOne('Name,Likes','temp',"WHERE ID = $ID");
      $likes = intval($getlike[0]['Likes']) + 1;
      print_r($_COOKIE);

      echo "pOST isset";
      echo $_POST["Temp_like"];

      if (count($_COOKIE)>0) {
        if (isset($_COOKIE['Codex'])) {
          echo "COOKIE isset";
          $like = $_COOKIE['Codex'];
          $arr = explode(',',$like);
          if (!in_array($ID,$arr)) {
            $arr [] = $ID;
            $str = implode(',',$arr) ;
            echo "<br> $str <br>";
            setcookie('Codex',$str,time()+3600,'/','localhost',true,true);
            print_r($arr);
          } else {
            print_r($_COOKIE['Codex']);
            echo "in array";
          }
        } else {
          $arr = array();
          $arr [] = $ID;
          $str = implode(',',$arr) ;
          setcookie('Codex',$str,time()+3600,'/','localhost',true,true);
          print_r($arr);
          echo "COOKIE created";
        }

        update($ID,'','temp',"SET Likes = $likes","WHERE ID = ? ");

      }else {
        echo "please active COOKIE first";
      }


    }
  }
}elseif (isset($page) && $page == 'dislike'){

  if (!empty($_POST["Temp_like"])) {
    $ID = $_POST["Temp_like"];

    $checkTEMP = checkItem('ID',"temp","$ID",'AND Approve = 1');

    if ($checkTEMP !==0) {
      $getlike = getOne('Likes','temp',"WHERE ID = $ID");
      if ($getlike[0]['Likes'] >0) {
        $dislike = intval($getlike[0]['Likes']) - 1;
      }else {
        $dislike = 0;
      }

      if (isset($_COOKIE['Codex'])) {
        $arr = explode(',',$_COOKIE['Codex']);
        if (in_array($ID,$arr)) {
          foreach ($arr as $key => $value) {
            if ($value == $ID) {
              echo "<br> no like temp <br/>";
              unset($arr[$key]);
            }
          }
          $str = implode(',',$arr) ;
          setcookie('Codex',$str,time()+3600,'/','localhost',true,true);

        }else {
          echo "<br> not in array <br>";
        }
      }

      update($ID,'','temp',"SET Likes = $dislike","WHERE ID = ? ");

    }
  }
}elseif (isset($page) && $page == 'CONTENT') {
  // echo "post";
  $ownr = $_POST['_ownr'];
  $phon = $_POST['_phon'];
  $mail = $_POST['_mail'];
  $comp = $_POST['_comp'];
  $catP = $_POST['_cat'];
  $desc = $_POST['_desc'];

  // $phon = '+'.1546546456546;

  $ph = explode(' ',$phon);

  $ph = implode('',$ph);

  $ownr = filter_var($ownr,FILTER_SANITIZE_STRING);
  $phon = filter_var($ph,FILTER_VALIDATE_INT);
  $mail = filter_var($mail,FILTER_VALIDATE_EMAIL);
  $comp = filter_var($comp,FILTER_SANITIZE_STRING);
  $catP = filter_var($catP,FILTER_VALIDATE_INT);
  $desc = filter_var($desc,FILTER_SANITIZE_STRING);

  // echo $ownr .'<br> <<<<<<<<<<< </br>' .
  //      $phon .'<br> <<<<< phone <<<<<< </br>' .
  //      $mail .'<br> <<<<< email <<<<<< </br>' .
  //      $comp .'<br> <<<<<<<<<<< </br>' .
  //      $catP .'<br> <<<<<<<<<<< </br>' .
  //      $desc .'<br> <<<<<<<<<<< </br>' ;

  $errorarray = array();

  if (empty($ownr)|| !isset($ownr))
  {
      $errorarray[] = "name error";
  }
  elseif (!is_string($ownr))
  {
      $errorarray[] = "name error";
  }

  if (!is_numeric($phon))
  {
      $errorarray[] = "Phone error";
  }
  elseif(strlen($phon)!==12)
  {
     $errorarray[] = "Phone error length";
  }

  if (!isset($mail) || empty($mail))
  {
      $errorarray[] = "mail error";
  }

  if (empty($catP) || $catP == 0 || $catP == 1 || $catP == 5)
  {
    $errorarray[] = "Cat error";
  }

  if (!isset($desc) || empty($desc))
  {
      $errorarray[] = 'description error';
  }

  if (empty($errorarray)) {
      echo "<br> empty errors </br>";
  } else {

    $redir = "'',5000,1";

    $titl  = 'New Order';

    ?>

    <div class="_tag">

      <button id="added" type="button" style="display:none;" class="btn btn-primary "  data-toggle="modal" data-target="#droperror">  </button>

      <!-- Modal -->

      <div class="addDONE modal fade added" id="droperror" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel"><?php echo $titl; ?></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span class="closetag" aria-hidden="true">&times;</span>
              </button>
            </div>

            <div style="text-transform: capitalize;" class="modal-body">

              <?php foreach ($errorarray as $error): ?>
                <div class="alert alert-danger" role="alert">
                  <?php echo " $error "; ?>
                </div>
              <?php endforeach; ?>

            </div>

              <div class="modal-footer">
                <button id="closetag" type="button" class="btn btn-secondary btn-sm clos_tag" data-dismiss="modal" >Cansel</button>
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
}elseif (isset($page) && $page == "CONTENT_TEMP") {
  ?>
    <script type="text/javascript">
      console.log('CONTENT_TEMP');
    </script>
  <?php
}elseif (isset($page) && $page == 'more_TEMP') {

    $last = $_POST["id"];

    $count = countof('ID','temp',"WHERE ID < '$last' ",'AND Approve = 1') ;

    $GETmor = getAlltable('*','Temp',"WHERE ID < '$last'",'AND Approve = 1','ID',"DESC",3);

    $lastID = getOne('ID','temp','WHERE Approve = 1','LIMIT 1');

    $lastID = $lastID[0]['ID'];

    if ( $last !== $lastID) {
      foreach ($GETmor as $T): $TN = $T['Name']; $ID = $T['ID'] ;
      $M = getOne('Parent',"categories","WHERE ID = {$T['Cat_ID']}");
      $MN = getOne("ID,Name",'Categories',"WHERE ID = {$M[0]['Parent']}");
      $path = "data/TEMP/$ID/img/";
        ?>
              <div class="_Temp col-xl-4 col-lg-5 col-md-6 col-11 col-sm-8">

                <div class="blog-entry align-self-stretch">

                  <div class="box">
                    <a href="#" class="box_cat"><?php echo $MN[0]['Name']; ?>  </a>
                    <!-- CAROUSEL TOW -->

                    <div id="carousel_<?php echo $ID; ?>" class="carousel slide carousel-fade" data-ride="carousel">
                      <?php  if ( !empty($T['img_3'])): ?>
                        <ol class="carousel-indicators">
                          <?php // for ($g=0; $g <=2 ; $g++) { ?>
                              <li data-target="#carousel_<?php echo $ID; ?>" data-slide-to="0" class="active"></li>
                            <?php if (!empty($T['img_2'])): ?>
                              <li data-target="#carousel_<?php echo $ID; ?>" data-slide-to="1"></li>
                            <?php endif; ?>
                              <?php if ( !empty($T['img_3']) ): ?>
                              <li data-target="#carousel_<?php echo $ID; ?>" data-slide-to="2"></li>
                            <?php endif; ?>
                          <?php // } ?>
                        </ol>
                      <?php endif; ?>

                      <div class="carousel-inner">

                        <?php

                          for ($i=1; $i <4 ; $i++) {
                            $img = $T['img_'.$i];?>
                            <?php if (!empty($img)) { ?>
                              <div class="carousel-item <?php if($i == 1){echo 'active';} ?>">
                                <a target="_blank" href="Preview?V=<?php echo $MN[0]['Name']; ?>&P=<?php echo $T['Cat_ID']; ?>&Temp=<?php echo $ID; ?>"><img src="<?php echo $path.$img ?>" ></a>
                              </div>
                            <?php } ?>
                           <?php } ?>

                      </div>

                      <div class="fixed_info">
                        <i class="info fa fa-exclamation-circle unlock" role="combobox" aria-expanded="false"></i>
                        <p class="col-12 data"><?php echo $T['Description']; ?></p>
                      </div>

                      <div class="get">

                        <button id="go_content" data-move='#CONTENT' class="btn badge btn-outline-dark btn-sm cont" type="button" value="<?php echo $ID; ?>" name="button" title="Content">
                          <a id="go_content" class="last" data-move='#CONTENT' href="#"><i class="fa fa-get-pocket"></i></a>
                        </button>

                      </div>

                    </div>

                  </div>

                  <?php $AID = $T['Admin_ID']; ?>
                  <?php $A = getOne('username,ID','Admin',"WHERE ID = $AID",'' ); ?>
                  <?php $view = $T['View']; ?>

                  <div class="text py-4 d-block">

                    <div class="meta">
                      <div class="date"><a href="#"><?php echo date('M j ',strtotime($T['Date'])); ?></a></div>
                      <div><a href="#"><?php echo $A[0]['username']; ?></a></div>

                      <div>
                        <?php if ($view >99): ?>
                          <a class="meta-chat badge badge-danger"><span class="icon-eye"></span>  +99</a>
                          <?php else: ?>
                            <a class="meta-chat"><span class="icon-eye"></span>  <?php echo  $view; ?></a>
                        <?php endif; ?>
                      </div>
                      <div><a ><i class="fa fa-thumbs-o-up"></i> <?php echo $T['Likes']; ?></a></div>
                    </div>

                    <h3 class="heading mt-2"><a target="_blank" href="Preview?V=<?php echo $MN[0]['Name']; ?>&P=<?php echo $T['Cat_ID']; ?>&Temp=<?php echo $ID; ?>"><?php echo $T['Name']; ?></a></h3>

                    <p class="length_p row Tools">
                      <?php $TOLS = explode(',',$T['Tool']); $tC = count($TOLS); for ($TO=0; $TO <$tC ; $TO++) { ?>
                        <?php $TOOL = getOne('*','Tools',"WHERE ID = $TOLS[$TO]",''); ?>
                        <?php foreach ($TOOL as $TOL): $TolN = $TOL['Name']; $Tolimg = $TOL['img'];  $TPATH = "Data\TOL\\$TolN\\$Tolimg" ?>
                          <a href="#"><img src="<?php echo $TPATH; ?>" alt=""></a>
                        <?php endforeach; ?>
                      <?php } ?>
                     </p>

                  </div>

                </div>

              </div>

        <?php

        endforeach;

    if ($ID == $lastID) {
      ?>
        <script type="text/javascript">
          $('#_Temp_more').attr('disabled','').addClass('_nomore');
        </script>
      <?php
    }
  }

}elseif (isset($page) && $page == "_CHAT") {

$page = isset($_GET['data']) && $_GET['data'] == 'msg_sub' ? $_GET['data'] : '';

    $name = $_POST['name'];
    $phon = $_POST['phon'];
    $mail = $_POST['mail'];
    $desc = $_POST['desc'];
    $csrP = $_POST['_CSRF'];
    $name = filter_var($name,FILTER_SANITIZE_STRING);
    $phon = filter_var($phon,FILTER_SANITIZE_STRING);
    $mail = filter_var($mail,FILTER_VALIDATE_EMAIL);
    $desc = filter_var($desc,FILTER_SANITIZE_STRING);

    $sp = str_split($phon);

    $spcount = count($sp);

    for ($i=0; $i <$spcount ; $i++) {
      if ($sp[$i]==' ') {
          unset($sp[$i]);
      }
    }

$phon = implode($sp);

$msg = 'لقد تم إرسال رسالتك مسبقا وسوف نقوم بالتواصل معك خلال 24 ساعة !';

  $check = new _CHECK;
  $check->N = $name;
  $check->P = $phon;
  $check->E = $mail;
  $check->D = $desc;
  $IP = $check->ip = $_SERVER['REMOTE_ADDR'];
  $check->checkempty();
  $checkMSG = $check->_CHECK1($csrP,'IP','msg',$IP,'',$msg);

  $error = $check->error;

    /******************************************************************/

    ?>

      <div class="_tag">

        <button id="added" type="button" style="display:none;" class="btn btn-primary"  data-toggle="modal" data-target="#droperror">  </button>

        <!-- Modal -->
      <?php $titl = 'إرسال استفسارك'; ?>
        <div class="addDONE modal fade added" id="droperror" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div dir="rtl" class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"><?php echo $titl; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span class="closetag" aria-hidden="true">&times;</span>
                </button>
              </div>

              <div id="out_msg" style="text-transform: capitalize;" class="modal-body">

                <?php
                   if (isset($error) && !empty($error)){ ?>
                    <?php foreach ($error as $error): ?>
                      <div dir="rtl" class="alert alert-danger" role="alert">
                        <?php echo $error ; ?>
                      </div>
                    <?php endforeach; ?>
                  <?php }else{ ?>
                    <?php

                    /****************** ** DATABASE ** *****************/

                      $msg = $con->prepare("INSERT INTO msg(owner,phone,mail,Description,IP,Date)
                      VALUES(:zw,:zp,:ze,:zd,:zip,now())");
                      $msg->execute(array('zw'=>$name,'zp'=>$phon,'ze'=>$mail,'zd'=>$desc,'zip'=>$IP,));
                      $datarow = $msg->rowCount();
                      ?>
                        <?php if ($datarow == 1): ?>
                          <div dir="rtl" class="alert alert-accept" role="alert"><?php echo "تم ارسال الرسالة وسوف نتواصل بالرد عليكم خلال 24 ساعه !" ?></div>
                        <?php endif; ?>
                      <?php

                  /*****************************************************************/
                      } ?>

              </div>

                <div class="modal-footer">
                  <button id="closetag" type="button" class="btn btn-secondary btn-sm clos_tag" data-dismiss="modal" >Cansel</button>
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

    /*****************************************************************/

}

  /****************************************/
  endif;

  }

ob_end_flush();  // Release The Output

?>
