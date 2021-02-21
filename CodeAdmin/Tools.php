
<?php
/*
================================================================================
=====  CATEGORY PAGE
================================================================================
*/
  ob_start();

  session_start();



  // NAVBAR WORKING SENTAX$

  // if SESSION IS SET Redirect CONDETION
  if (isset($_SESSION['myadmin'])) : // if user logedin and user is EXIST in DB Redirect to Location HTTP Page
  $pageTitle = 'Tools'; //
    $table     = 1;
    $noNavbar  = 1;
    $StartUp   = 0;
    include "inc.php";
    $path = '../data/TOL/';
    $TOL  = isset($_GET['tol']) ? $_GET['tol']:'All';
?>
<section class="TOL tabs">

<a href="LOGOUT.php">logout</a>

<h3 class="pag-T"> <?php Ptitle(); ?> </h3>
<div class="container">

  <?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['NawTool'])) {

      if (!isset($_POST['CAT'])) {
          $_POST['CAT'] = 0;
      }

      if (!isset($_POST['img'])) {
          $_POST['img'] = '';
      }

      $TOOl = $_POST['TOL'];
      $CAT  = $_POST['CAT'];
      $APP  = $_POST['APP'];
      $crop = $_POST['img'];
      $IMG  = $_FILES['inputimg'];

      $imgname    = $IMG['name'];
      $imgtype    = $IMG['type'];
      $imgsize    = $IMG['size'];
      $imgerr     = $IMG['error'];
      $imgtmp     = $IMG['tmp_name'];

      echo "Name".'   '.$TOOl.'</br>';
      echo "CAT".'   '.$CAT.'</br>';
      echo "CROP".'   '.$crop.'</br>';
      echo "APP".'   '.$APP.'</br>';
      // echo "tmp".'   '.$imgtmp.'</br>';

      print_r($IMG);

      $TOOl       = filter_var($TOOl, FILTER_SANITIZE_STRING);

      // GET LIST OF ALLOWED FILE UPLODE TYPES

      $imgAllowExtension = array("gif", "jpeg", "jpg", "png");

      // GET VARIABLE FROM FORMS

      @$imgformat = strtolower(end(explode('.',$imgname)));


      $TOLerr = array();
      $CATerr = array();
      $IMGerr = array();

      $check = checkItem('Name','tools',"$TOOl",'');

      if (empty($TOOl) || !isset($TOOl)) {
        $TOLerr[] = "Tool Name Can't Be Empty!";
      }else
      if ($check==1) {
        $TOLerr[] = "This Tool inserted Before!";
      }elseif (strlen($TOOl)>25) {
        $TOLerr[] = "Tool Name Must Be less Than <strong> [ 25 ] </strong> Characters.";
      }

      if ($CAT == 0 || !isset($CAT)) {
        $CATerr[] = "Select Main Category !";
      }

      if(empty($imgname) || $imgerr == 4 ){
             $IMGerr[] = "Image Can't Be Empty!";
      }elseif (!empty($IMG) && ! in_array($imgformat,$imgAllowExtension)) {
             $IMGerr[] = 'Please Insert image In Types <strong> "gif", "jpeg" , "jpg" , "png" </strong> ' ;
      }elseif ($imgsize > 2097152) {
             $IMGerr[] = ' Image Size Can\'t Be larger Than <strong> "2MB" </strong> ' ;
      }

      if (empty($TOLerr) && empty($CATerr) && empty($imgErrors)) {

        if (!is_dir($path.$TOOl)) {
           mkdir($path.$TOOl);
        }else {
          $files = scandir($path.$TOOl,SCANDIR_SORT_NONE);
          if (isset($files[2])) {
            unlink($path.$TOOl.'/'.$files[2]);
          }
        }
        @rename('includes\libraries\crop\SRV\\'.$crop ,"../data/TOL/$TOOl/" . $crop);

        /****************** DATABASE *******************/

        $set=$con->prepare("INSERT INTO tools(Name, Approve, img, Cat_ID, Date) VALUES(:znm,:zAPP, :zimg, :zCAT, now()) ");

        $set->execute(array('znm'=>$TOOl, 'zAPP'=>$APP, 'zimg'=>$crop, 'zCAT'=>$CAT));

        echo SETtage('New Tool',"'',5000,1",'Tool <strong>'.$TOOl.'</strong> was Added As A new Tool.',1,0,'','','');


        /***********************************************/

      }

       }
       
      }

  // /***********************************************************/


  if ($TOL == 'All') {
  /******************************************************************/
  ?>

    <div class="TOL-table">


          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"> <i class="fa fa-quote-left"></i> <?php echo Ptitle(); ?></h6>
              <button class="add-new btn badge btn-primary btn-sm" type="button" name="button"> <a href="?tol=newTol"> <i data-feather='plus-square'></i> New <?php echo Ptitle(); ?></a> </button>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Category</th>
                      <th>IMG</th>
                      <th>Approve</th>
                      <th>Date</th>
                      <th>Control</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Category</th>
                      <th>IMG</th>
                      <th>Approve</th>
                      <th>Date</th>
                      <th>Control</th>
                    </tr>
                  </tfoot>
                  <tbody>

      <?php $getall = getOne('*','tools','','') ?>


            <?php foreach ($getall as $TOL): ?>
              <?php $GETCAT = getOne('ID,Name','categories',"WHERE ID = {$TOL['Cat_ID']}",'');  $CAT = $GETCAT[0]['Name']; $CATID = $GETCAT[0]['ID'];?>
              <?php $name = $TOL['Name']; $img = $TOL['img'] ?>
              <?php $APP  = $TOL['Approve'] == 1 ? '<span class="badge badge-primary badge-sm"> Yes </span>'
               : '<span class="badge badge-warning badge-sm"> No </span>' ; ?>
              <?php $img = "<img class='img' src='$path$name/$img'.'>"; ?>
              <tr>
                <td><?php echo $TOL['ID'];?>
                    <button id="Del_<?php echo $TOL['ID'] ?>" type="button" name="DelTOL" value="<?php echo $TOL['ID']; ?>" onclick="checkdata('#Del_<?php echo $TOL['ID']; ?>','#GET','Tag','DelTOL')" class="trash btn badge btn-danger btn-sm"><i class="fa fa-trash-o"></i> </button>
                </td>
                <td class="<?php if(strlen($TOL['Name']) >13){echo "textCrop";} ?>" style="font-weight:550; text-shadow: 0 0px 2px #000;" title="<?php echo $TOL['Name']; ?>"> <?php echo $TOL['Name']; ?> </td>

                  <td><button type="button" class="badge btn-primary btn-sm" name="button"><a href="Categories.php?cat=editsET&catID=<?php echo $CATID; ?>&siTG=edit"><?php echo $CAT; ?></a> </button> </td>

                <td><?php echo $img ?></td>
                <td> <?php echo $APP ?> </td>
                <td> <?php echo date('Y-m-d',strtotime($TOL['Date'])) ?> </td>
                <td>

                  <div class="control">
                        <button id="APP_<?php echo $TOL['ID']; ?>" value="<?php echo $TOL['ID']; ?>" type="button" class="get btn badge btn-info btn-sm <?php if($TOL['Approve']==0){echo "los";} ?>" name="APP"
                          onclick="checkdata('#APP_<?php echo $TOL['ID']?>','#tag','appTOL','APP')" >
                          <a > <i class="fa fa-low-vision"></i> Approve </a> </button>
                        <button id="APP_<?php echo $TOL['ID']?>" type="button" value="<?php echo $TOL['ID']; ?>" class="get btn badge btn-secondary btn-sm <?php if($TOL['Approve']==1){echo "los";} ?>" name="APP"
                          onclick="checkdata('#APP_<?php echo $TOL['ID']?>','#tag','appTOL','APP')" >
                          <a > <i class="fa fa-low-vision"></i> Disapprove </a> </button>

                      <!-- </samp> -->
                  </div>

                 </td>
              </tr>
            <?php endforeach; ?>
                </tbody>
                </table>
              </div>
            </div>
          </div>

<span id="val" style="position:fixed;"></span>
    </div>

  <?php
  /******************************************************************/
}elseif ($TOL =='newTol' ) {

  ?>

  <div class="addnew newTol">

    <h4> <i class="fa fa-bug"></i> New Tool </h4>

    <form class="insert-form row" action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">

      <div class="insert col-12 col-md-6">
        <label class="requir"> Tool Name </label>
        <span class="crcT Tn"><small id="crcN">0</small> / 25</span>
        <input id="Sname" class="form-control" type="text" name="TOL" value="" maxlength="25" placeholder="Services Name, Not More Than [25] Character">
        <?php if (!empty($TOLerr)): ?>
          <?php foreach ($TOLerr as $error): ?>
            <span style="display:block;opacity:1;" class="error php_err "><i class="fa fa-times-circle"></i> <?php echo $error ?> </span>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>

      <div class="insert col-12 col-md-6">

        <?php $GET = getOne('ID,Name','categories',"WHERE Parent = 0",''); ?>

        <label class="requir"> Category </label>
          <select id="CAT" class="custom-select colr" name="CAT" >
            <option selected disabled value="0">Main Category...</option>
            <?php foreach ($GET as $OP): ?>
              <option value="<?php echo $OP['ID']; ?>"><?php echo $OP['Name']; ?></option>
            <?php endforeach; ?>
          </select>

          <?php if (!empty($CATerr)): ?>
            <?php foreach ($CATerr as $error): ?>
              <span style="display:block;opacity:1;" class="error php_err "><i class="fa fa-times-circle"></i> <?php echo $error ?> </span>
            <?php endforeach; ?>
          <?php endif; ?>

          <span id="typerr" class="error"></span>

      </div>

<!-- <div class="row"> -->

  <!-- <div class="inset col-12 col-md-6">

  </div> -->

  <div class="insert TOL-logo col-12 col-md-6 col-lg-5 col-xl">

    <label class="requir"> Tool Logo </label>
    <div id="OUTLOAD" class="TOL-logo col-md-8 col-8">
      <img src="<?php echo $img ?>872418.png" alt="">
    </div>
    <input class="form-control" id="srvimg" type="file" name="inputimg" value="" onclick="SRVCROP()" >
    <input id="cropd" type="text" style="display:none;" name="cropd" value="">
    <span class="error"></span>

    <?php if (!empty($IMGerr)): ?>
      <?php foreach ($IMGerr as $error): ?>
        <span style="display:block;opacity:1;" class="error php_err "><i class="fa fa-times-circle"></i> <?php echo $error ?> </span>
      <?php endforeach; ?>
    <?php endif; ?>

  </div>

<!-- </div> -->

<div class="insert radio col-12 col-md-6">

  <label class="col-sm control-label requir" >Approve</label>

  <div class="custom-control custom-radio custom-control-inline radio-1">
      <input style="cursor:pointer" type="radio" id="customRadioInline1" name="APP" value="1" class="custom-control-input in_1">
      <label style="cursor:pointer" class="custom-control-label in_1" for="customRadioInline1">Yes</label>
  </div>

  <div class="custom-control custom-radio custom-control-inline radio-2" style="cursor:pointer">
      <input style="cursor:pointer" type="radio" id="customRadioInline2" name="APP" value="0" class="custom-control-input in_2">
      <label style="cursor:pointer" class="custom-control-label in_2" for="customRadioInline2">No</label>
  </div>

  <div class="insert-btn ">
    <button class="btn badge btn-info btn-sm" type="submit" name="NawTool"><span class="spinner-grow spinner-grow-sm"></span> Add Tool </button>
    <button class="btn badge btn-dark btn-sm" type="button" ><a href="dashboard.php" style="color:#eee;">  cancel  </a> </button>
  </div>
</div>

    </form>

</div>

  <?php
}


 ?>
 </div>



</section>

<?php else: ?>
  <?php print_r($_SESSION); ?>
<?php  header('location:logphp.php'); ?>
<?php endif; ?>

<?php include $tpl . 'footer.inc';

    ob_end_flush();  // Release The Output

 ?>
