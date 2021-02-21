<?php
/*

================================================================================
=====  OUR TEMPLATE PAGE
================================================================================

*/

  ob_start();

  session_start();

  $works = isset($_GET['TempS'])? $_GET['TempS'] : 'all';
  if ($works == 'editsET') {
      $Titel = 'edit Template';
  }elseif ($works == 'addNew') {
      $Titel = 'New Template ';
  }else {
    $Titel = 'Templates';
  }
  $pageTitle = $Titel;
  $table     = 1;
  $noNavbar  = 1;
  $StartUp   = 1;
  $prev      = 0;
  include "inc.php";
   ?>

  <?php if (isset($_SESSION['myadmin'])): ?>
    <?php echo $_SESSION['myadmin'] .$_SESSION['ID'] ?>
<section class="works tabs">
  <!-- <a href="LOGOUT.php">logout</a> -->
  <h3 class="pag-T"> <?php Ptitle(); ?> </h3>
  <div class="container">

<?php
$path = '../data/TEMP/';
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "pOST";
    // if($works == 'DATA'){
      if (isset($_POST['NawTemp'])) {


      }elseif (isset($_POST['editTemp'])) {
        echo "EDIT";

      }else {
        header("Location:?TempS=all");
      }
  // }
}elseif ($works == 'all') {

  $main = isset($_GET['main']) && is_numeric($_GET['main'])? intval($_GET['main']):'';

  if (!empty($main)) {
    echo "main";
    $P = getOne('ID','categories',"WHERE Parent = $main");
    print_r($P);

  }else {
    $GET = getOne("*","Temp","",'');
  }

  ?>

    <div class="works-table">

    <!-- /**************************************************************/ -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"> <i data-feather='feather'></i> Our Templates</h6>
        <button class="add-new btn badge btn-primary btn-sm" type="button" name="button"> <a href="?TempS=addNew"> <i data-feather='plus-square'></i> New Template</a> </button>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped table-dark" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Admin</th>
                <th>Category</th>
                <th>View</th>
                <th>Approve</th>
                <th>Date</th>
                <th>Control</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Admin</th>
                <th>Category</th>
                <th>View</th>
                <th>Approve</th>
                <th>Date</th>
                <th>Control</th>
              </tr>
            </tfoot>
            <tbody>

<?php if (!empty($main)): ?>
<?php

foreach ($P as $val) {
  $P = $val['ID'];
   $GET = getOne('*','Temp',"WHERE Cat_ID = $P ");
   $Pcount = count($GET);
   if ($Pcount!==0) : ?>
     <?php foreach ($GET as $GET): ?>
       <tr>
       <?php $app  = $GET['Approve'] == 1 ?
       '<span class="badge badge-primary badge-sm"> Yes </span>'
       . '<span class="badge badge-warning badge-sm los"> No </span>'
        : '<span class="badge badge-warning badge-sm"> No </span>'
        . '<span class="badge badge-primary badge-sm los"> Yes </span>' ; ?>

       <?php $GETA = getOne('username',"admin","WHERE ID = {$GET['Admin_ID']}"); ?>
       <?php $GETC = getOne('Name',"Categories","WHERE ID = {$GET['Cat_ID']}"); ?>
       <?php
         $MM = getOne("Parent",'categories',"WHERE ID = {$GET['Cat_ID']}");
         $getMM = getOne('Name','categories',"WHERE ID = '{$MM[0]['Parent']}'",'');
        ?>
       <td><?php echo $GET['ID']; ?>
         <button type="button" name="preview" value="<?php echo $GET['ID']; ?>"  class="view btn badge btn-primary btn-sm" tabindex="kbfmbkf"> <a target="_blank" href="preview.php?V=<?php echo $getMM[0]['Name']; ?>&P=<?php echo $GET['Cat_ID']; ?>&Temp=<?php echo $GET['ID']; ?>"><i class="fa fa-eye"></i></a> </button>
         <button id="Del_<?php echo $GET['ID'] ?>" type="button" name="DelTEMP" value="<?php echo $GET['ID']; ?>" onclick="checkdata('#Del_<?php echo $GET['ID']; ?>','#GET','Tag','DelTEMP')" class="trash btn badge btn-danger btn-sm"><i class="fa fa-trash-o"></i> </button>
       </td>
       <td><?php echo $GET['Name'] ?></td>
       <td><span class="badge badge-info badge-sm"><?php echo $GETA[0]['username']; ?></span> </td>
       <td><?php echo $GETC[0]['Name'] ?></td>
       <td><?php echo $GET['View'] ?></td>
       <td><?php echo $app; ?></td>
       <td><?php echo date('Y-m-d',strtotime($GET['Date'])) ?></td>
       <td>
          <button type="button" class="btn badge btn-success btn-sm"><a href="?TempS=editsET&tempID=<?php echo $GET['ID']; ?>&siTG=edit"> <i class="fa fa-wrench"></i> edit </a> </button>

          <?php// if ($GET['Visibility']==0): ?>

            <!-- <samp class="vis-btn"> -->
              <button id="app_<?php echo $GET['ID']; ?>" value="<?php echo $GET['ID']; ?>" type="button" class="get btn badge btn-info btn-sm <?php if($GET['Approve']==0){echo "los";} ?>" name="app"
                onclick="checkdata('#app_<?php echo $GET['ID']?>','#tag','appTMP','app')" >
                <a > <i class="fa fa-eye"></i> Approve </a> </button>
              <button id="app_<?php echo $GET['ID']?>" type="button" value="<?php echo $GET['ID']; ?>" class="get btn badge btn-secondary btn-sm <?php if($GET['Approve']==1){echo "los";} ?>" name="app"
                onclick="checkdata('#app_<?php echo $GET['ID']?>','#tag','appTMP','app')" >
                <a > <i class="fa fa-low-vision"></i> Disapprove </a> </button>
            <!-- </samp> -->
        </td>
     </tr>
     <?php endforeach; ?>
   <?php endif; }?>


<?php else: ?>
  <?php foreach ($GET as $GET): ?>
    <tr>
    <?php $app  = $GET['Approve'] == 1 ?
    '<span class="badge badge-primary badge-sm"> Yes </span>'
    . '<span class="badge badge-warning badge-sm los"> No </span>'
     : '<span class="badge badge-warning badge-sm"> No </span>'
     . '<span class="badge badge-primary badge-sm los"> Yes </span>' ; ?>

    <?php $GETA = getOne('username',"admin","WHERE ID = {$GET['Admin_ID']}"); ?>
    <?php $GETC = getOne('Name',"Categories","WHERE ID = {$GET['Cat_ID']}"); ?>
    <?php
      $MM = getOne("Parent",'categories',"WHERE ID = {$GET['Cat_ID']}");
      $getMM = getOne('Name','categories',"WHERE ID = '{$MM[0]['Parent']}'",'');
     ?>
    <td><?php echo $GET['ID']; ?>
      <button type="button" name="preview" value="<?php echo $GET['ID']; ?>"  class="view btn badge btn-primary btn-sm" tabindex="kbfmbkf"> <a target="_blank" href="preview.php?V=<?php echo $getMM[0]['Name']; ?>&P=<?php echo $GET['Cat_ID']; ?>&Temp=<?php echo $GET['ID']; ?>"><i class="fa fa-eye"></i></a> </button>
      <button id="Del_<?php echo $GET['ID'] ?>" type="button" name="DelTEMP" value="<?php echo $GET['ID']; ?>" onclick="checkdata('#Del_<?php echo $GET['ID']; ?>','#GET','Tag','DelTEMP')" class="trash btn badge btn-danger btn-sm"><i class="fa fa-trash-o"></i> </button>
    </td>
    <td><?php echo $GET['Name'] ?></td>
    <td><span class="badge badge-info badge-sm"><?php echo $GETA[0]['username']; ?></span> </td>
    <td><?php echo $GETC[0]['Name'] ?></td>
    <td><?php echo $GET['View'] ?></td>
    <td><?php echo $app; ?></td>
    <td><?php echo date('Y-m-d',strtotime($GET['Date'])) ?></td>
    <td>
       <button type="button" class="btn badge btn-success btn-sm"><a href="?TempS=editsET&tempID=<?php echo $GET['ID']; ?>&siTG=edit"> <i class="fa fa-wrench"></i> edit </a> </button>

       <?php// if ($GET['Visibility']==0): ?>

         <!-- <samp class="vis-btn"> -->
           <button id="app_<?php echo $GET['ID']; ?>" value="<?php echo $GET['ID']; ?>" type="button" class="get btn badge btn-info btn-sm <?php if($GET['Approve']==0){echo "los";} ?>" name="app"
             onclick="checkdata('#app_<?php echo $GET['ID']?>','#tag','appTMP','app')" >
             <a > <i class="fa fa-eye"></i> Approve </a> </button>
           <button id="app_<?php echo $GET['ID']?>" type="button" value="<?php echo $GET['ID']; ?>" class="get btn badge btn-secondary btn-sm <?php if($GET['Approve']==1){echo "los";} ?>" name="app"
             onclick="checkdata('#app_<?php echo $GET['ID']?>','#tag','appTMP','app')" >
             <a > <i class="fa fa-low-vision"></i> Disapprove </a> </button>
         <!-- </samp> -->
     </td>
  </tr>
  <?php endforeach; ?>
<?php endif; ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>


    <!-- /*************************************************************/ -->
    </div>

    <?php
  }elseif ($works == 'addNew') {
    ?>

    <div class="addnew">
      <h4> <i data-feather='feather'></i> New Template </h4>

        <form id="NEW_TEMP" class="insert-form row" action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">

          <div class="col-md-6 col">

          <div class="insert col">
              <label class="requir"> Template Name </label>
              <span class="crcT Tn"><small id="crcN">0</small> / 25</span>
              <input id="Tname" class="form-control" type="text" name="Temp" value="<?php if(isset($Temp)){echo $Temp;} ?>" maxlength="25" placeholder="Template Name">
              <span class="error"></span>
              <?php if (!empty($Terror)): ?>
                <?php foreach ($Terror as $error): ?>
                  <span style="display:block;opacity:1;" class="error php_err img_err"><i class="fa fa-times-circle"></i> <?php echo $error ?> </span>
                <?php endforeach; ?>
              <?php endif; ?>
            </div>


            <div class="insert col">

              <?php $GET = getOne('ID,Name,Block','categories',"WHERE Parent = 0",''); ?>

              <label class="requir"> Category </label>
                <select id="CAT" class="custom-select colr"  onchange="checkMainCat()" name ="CName" >
                  <option selected disabled value="0">Main Category...</option>
                  <?php foreach ($GET as $OP): ?>
                    <option value="<?php echo $OP['ID']; ?>" <?php if($OP['Block'] == 1){echo "class='disabled' disabled";}  ?>><?php echo $OP['Name']; ?></option>
                  <?php endforeach; ?>
                </select>

                <span id="typerr" class="error"></span>
                <?php if (!empty($MError)): ?>
                  <?php foreach ($MError as $error): ?>
                  <span style="display:block;opacity:1;" class="error php_err img_err"><i class="fa fa-times-circle"></i> <?php echo $error ?> </span>
                  <?php endforeach; ?>
                <?php endif; ?>
            </div>

            <div class="insert col">

              <label class="requir colr"> Template Type </label>
                <select id="Ttype" class="custom-select" id="validationDefault04" name="Parent">
                  <option selected disabled value="0">Select Category First ... </option>
                </select>

                <?php if (!empty($PError)): ?>
                  <?php foreach ($PError as $error): ?>
                    <span style="display:block;opacity:1;" class="error php_err img_err"><i class="fa fa-times-circle"></i> <?php echo $error ?> </span>
                  <?php endforeach; ?>
                <?php endif; ?>

                <span id="typerr" class="error"></span>

            </div>

            <div class="insert col">

                <label class="requir">Description</label>
                <span class="crcT"><small id="crcT">0</small> / 190</span>
                <textarea name="Disc" id="Trea" cols="30" rows="3" class="form-control" maxlength=190
                placeholder="In less Than [ 190 ] Character , Insert This Template Description."></textarea>

                <?php if (!empty($Dirror)): ?>
                  <?php foreach ($Dirror as $error): ?>
                    <span style="display:block;opacity:1;" class="error php_err img_err"><i class="fa fa-times-circle"></i> <?php echo $error ?> </span>
                  <?php endforeach; ?>
                <?php endif; ?>
                <span id="deserr" class="error"></span>

            </div>


            <!-- /****************************/ -->

            <div class="row">
              <div class="input-img">

                <?php

                  for ($i=1; $i <4 ; $i++) {
                    if ($i==3) {
                      $fun = 'CROP' ;
                    }else {
                      $fun = 'CROP'. $i ;
                    }
                    ?>
                    <input class="form-control incrop" id="temp<?php echo $i ?>" type="file" name="input_<?php echo $i ?>" value="" onclick="<?php echo $fun ?>('#temp<?php echo $i ?>','#uploaded_<?php echo $i ?>','Temp<?php echo $i ?>')" >
                    <input id="cropd<?php echo $i ?>" type="text" style="display:none;" name="cropd_<?php echo $i ?>" value="">
                    <?php
                  }

                 ?>

              </div>
            </div>

            <!-- /****************************/ -->

          </div>

          <!-- /****************************/ -->

          <div class="col-md-6 col">

            <div class="Temp col-xl-9 col-lg-11 col-md-12 col-12">

              <div class="blog-entry align-self-stretch">


                    <div class="box">
                      <!-- CAROUSEL TOW -->

                      <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">

                        <ol class="carousel-indicators">
                           <li data-target="#carousel" data-slide-to="0" class=""></li>
                           <li data-target="#carousel" data-slide-to="1" class="active"></li>
                           <li data-target="#carousel" data-slide-to="2" class=""></li>
                         </ol>

                          <div class="carousel-inner">

                          <div id="uploaded_1" class="carousel-item">
                            <img src="<?php echo $img ?>872418.png">
                          </div>

                          <div id="uploaded_2" class="carousel-item active">
                            <img src="<?php echo $img ?>C.jpg">
                          </div>

                          <div id="uploaded_3" class="carousel-item">
                            <img src="<?php echo $img ?>7.png">
                          </div>

                        </div>

                        <div class="fixed_info">
                          <i class="info fa fa-exclamation-circle unlock" role="combobox" aria-expanded="false"></i>
                          <p class="col-12 large_P data"> A small river named Duden flows by their place and supplies it with the necessary regelialia A small river named Duden flows by their place and supplies it with the necessary regelialia.regelialia</p>
                        </div>

                      </div>

                    </div>

                    <div class="text py-4 d-block">
                    	<div class="meta">
                        <div><a href="#"><i class="fa fa-calendar"></i> <?php echo date('F j ,Y'); ?></a></div>
                        <div><a href="#"><?php echo $_SESSION['myadmin']; ?></a></div>
                        <div><a href="#" class="meta-chat"><i class="fa fa-eye"></i> 0</a></div>
                      </div>
                      <h3 class="heading mt-2"><a id="Nameval" href="#">CODEX|LAB</a></h3>
                      <p class="length_p" maxlength='90'>Select Template Tools . </p>
                    </div>

            </div>

          </div>

          <div class="insert col TAG">

            <label class="requir"> Template Tools </label>
            <select name="TOOLS" id="TOOLS" class="form-control Tool" value=''  multiple="multiple" >
              <?php $TOL = getOne('*','tools',"WHERE Approve = 1") ?>
              <?php foreach ($TOL as $TOL):  ?>
                <?php $CAT = getOne('Name','categories',"WHERE ID = {$TOL['Cat_ID']}"); $CAT = $CAT[0]['Name']; ?>
                <optgroup label="<?php echo $CAT ?>">
                  <option value="<?php echo $TOL['ID']; ?>"><?php echo $TOL['Name']; ?></option>
                </optgroup>

              <?php endforeach; ?>


            </select>

            <input id="toolval" type="hidden" name="TVal" value="">

            <span id="typerr" class="error"></span>

            <?php if (!empty($Terror)): ?>
              <?php foreach ($Terror as $error): ?>
                <span style="display:block;opacity:1;" class="error php_err img_err"><i class="fa fa-times-circle"></i> <?php echo $error ?> </span>
              <?php endforeach; ?>
            <?php endif; ?>

          </div>

          <div class="insert radio col">

            <label class="col-sm control-label requir" >Approve</label>

            <div class="custom-control custom-radio custom-control-inline radio-1">
                <input style="cursor:pointer" type="radio" id="customRadioInline1" name="App" value="1" class="custom-control-input in_1">
                <label style="cursor:pointer" class="custom-control-label in_1" for="customRadioInline1">Yes</label>
            </div>

            <div class="custom-control custom-radio custom-control-inline radio-2" style="cursor:pointer">
                <input style="cursor:pointer" type="radio" id="customRadioInline2" name="App" value="0" class="custom-control-input in_2" checked>
                <label style="cursor:pointer" class="custom-control-label in_2" for="customRadioInline2">No</label>
            </div>

          </div>

      <!-- /*******************************************/ -->

          <div class="insert-btn">
            <button id="add_temp" class="btn badge btn-warning btn-sm" type="submit" name="NawTemp"><span class="spinner-grow spinner-grow-sm"></span> Add Template </button>
            <button class="btn badge btn-dark btn-sm" type="button" ><a href="dashboard.php" style="color:#eee;">  cancel  </a> </button>
          </div>

<!-- /*******************************************/ -->

    </div>

        </form>

   </div>

    <?php
  }elseif ($works == 'editsET') {

    $TEMPID = isset($_GET['tempID']) && is_numeric($_GET['tempID']) ?intval($_GET['tempID']) : 0;

    $getcoubt = checkItem('ID','Temp',"$TEMPID",'');
    if ($getcoubt == 1) {
      $get = getOne('*','Temp',"WHERE ID = $TEMPID",'');
      $SITG = isset($_GET['siTG']) ? $_GET['siTG'] : '';
      $get = $get[0];
      if ($SITG=='edit') {
        //  print_r($get);
    ?>

    <div class="addnew editTemp">
      <h4> <i data-feather='feather'></i> edit Template </h4>

        <form id="edit_temp" class="insert-form row" action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
          <input type="hidden" name="ID" value="<?php echo $TEMPID; ?>">
          <div class="col-md-6 col">
<?php
  $sh = md5($get['ID']);
 ?>
 <span style="color:#fff;"> <?php echo $sh ?> </span>
          <div class="insert col">
              <label class="requir"> Template Name </label>
              <span class="crcT Tn"><small id="crcN">0</small> / 25</span>
              <input id="Tname" class="form-control" type="text" name="Temp" value="<?php echo $get['Name']; ?>" maxlength="25" placeholder="Template Name">
              <span class="error"></span>
              <?php if (!empty($Terror)): ?>
                <?php foreach ($Terror as $error): ?>
                  <span style="display:block;opacity:1;" class="error php_err img_err"><i class="fa fa-times-circle"></i> <?php echo $error ?> </span>
                <?php endforeach; ?>
              <?php endif; ?>
            </div>


            <div class="insert col">
              <?php $PP = $get['Cat_ID']; ?>
              <?php $main = getOne('ID,Name,Block','categories',"WHERE Parent = 0",''); ?>
              <?php $M   = getOne("Parent",'categories',"WHERE ID = {$PP}"); ?>
              <label class="requir"> Category </label>
                <select id="CAT" class="custom-select colr"  onchange="checkMainCat()" name ="CName" >
                  <?php foreach ($main as $OP): ?>
                    <option value="<?php echo $OP['ID']; ?>"
                      <?php if($OP['Block'] == 1){echo "class='disabled' disabled";}  ?>
                      <?php if($M[0]['Parent']==$OP['ID']){echo "selected";} ?>><?php echo $OP['Name']; ?></option>
                  <?php endforeach; ?>
                </select>

                <span id="typerr" class="error"></span>
                <?php if (!empty($MError)): ?>
                  <?php foreach ($MError as $error): ?>
                  <span style="display:block;opacity:1;" class="error php_err img_err"><i class="fa fa-times-circle"></i> <?php echo $error ?> </span>
                  <?php endforeach; ?>
                <?php endif; ?>
            </div>

            <div class="insert col">
              <?php $P = getOne('ID,Name,Block','Categories',"WHERE ID = {$get['Cat_ID']}"); ?>
              <label class="requir colr"> Template Type </label>

                <select id="Ttype" class="custom-select" id="validationDefault04" name="Parent">
                  <?php foreach ($P as $P): ?>
                    <option value="<?php echo $P['ID'] ?>" <?php if($P['Block'] == 1){echo "class='disabled' disabled";}  ?> <?php if($P['ID']==$get['Cat_ID']){echo "selected";} ?>><?php echo $P['Name'] ?></option>
                  <?php endforeach; ?>
                </select>

                <?php if (!empty($PError)): ?>
                  <?php foreach ($PError as $error): ?>
                    <span style="display:block;opacity:1;" class="error php_err img_err"><i class="fa fa-times-circle"></i> <?php echo $error ?> </span>
                  <?php endforeach; ?>
                <?php endif; ?>

                <span id="typerr" class="error"></span>

            </div>

            <div class="insert col">

                <label class="requir">Description</label>
                <span class="crcT"><small id="crcT">0</small> / 190</span>
                <input id="treaVal" type="text" style="display:none" name="" value="<?php echo $get['Description'] ?>">

                <textarea name="Disc" id="Trea" cols="30" rows="3" class="form-control" maxlength=190
                placeholder="In less Than [ 190 ] Character , Insert This Template Description."></textarea>

                <?php if (!empty($Dirror)): ?>
                  <?php foreach ($Dirror as $error): ?>
                    <span style="display:block;opacity:1;" class="error php_err img_err"><i class="fa fa-times-circle"></i> <?php echo $error ?> </span>
                  <?php endforeach; ?>
                <?php endif; ?>
                <span id="deserr" class="error"></span>

            </div>


            <!-- /****************************/ -->

            <div class="row">

              <div class="input-img">

                <?php

                  for ($i=1; $i <4 ; $i++) {
                    if ($i==3) {
                      $fun = 'CROP' ;
                    }else {
                      $fun = 'CROP'. $i ;
                    }
                    ?>
                    <input class="form-control" id="temp<?php echo $i ?>" type="file" name="input_<?php echo $i ?>" value="" onclick="<?php echo $fun ?>('#temp<?php echo $i ?>','#uploaded_<?php echo $i ?>','Temp<?php echo $i ?>')" >
                    <input id="cropd<?php echo $i ?>" type="text" style="display:none;" name="cropd_<?php echo $i ?>" value="">
                    <?php
                   }

                 ?>

              </div>

            </div>

            <!-- /****************************/ -->
            <!-- /******************************/ -->

            <div class="insert col">

              <button type="button" class="btn btn-primary uplode-btn" data-toggle="modal" data-target="#exampleModal" >Data file</button>

            </div>

            <!-- /****************************/ -->

          </div>

          <!-- /****************************/ -->

          <div class="col-md-6 col">

            <div class="Temp col-xl-9 col-lg-11 col-md-12 col-12">

              <div class="blog-entry align-self-stretch">


                    <div class="box">
                      <!-- CAROUSEL TOW -->
                      <?php $temp = $get['Name']; ?>

                      <?php if ($get['img_1'] !==0 && $get['img_2'] !==0 && $get['img_3'] !==0): ?>

                        <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">

                          <ol class="carousel-indicators">
                             <li data-target="#carousel" data-slide-to="0" class=""></li>
                             <li data-target="#carousel" data-slide-to="1" class="active"></li>
                             <li data-target="#carousel" data-slide-to="2" class=""></li>
                           </ol>

                           <div class="carousel-inner">

                             <?php
                             for ($i=1; $i <4 ; $i++) { $img = $get['img_'.$i];

                             ?>
                               <?php if (!empty($img)): ?>
                                 <div id="uploaded_<?php echo $i; ?>" class="carousel-item <?php if($i==2){echo "active";} ?>">
                                   <img src="<?php echo $path.$TEMPID."/img/$img"; ?>">
                                 </div>
                               <?php else : ?>
                                 <div id="uploaded_<?php echo $i; ?>" class="carousel-item <?php if($i==2){echo "active";} ?>">
                                   <img src="<?php echo "layout/img/default.jpg"; ?>">
                                 </div>
                               <?php endif; } ?>

                          </div>


                      <?php endif; ?>


                        <div class="fixed_info">
                          <i class="info fa fa-exclamation-circle unlock" role="combobox" aria-expanded="false"></i>
                          <p class="col-12 large_P data"><?php echo $get['Description'] ?></p>
                        </div>

                        <div class="delTM">
                          <button type="button" class="trash btn badge btn-danger btn-sm delet-tag"><i class="fa fa-trash-o"></i> </button>
                        </div>

                      </div>

                    </div>
                    <?php $TOL = getOne('*','tools',"WHERE Approve = 1",'') ?>

                    <?php $arrTOL = explode(',',$get['Tool']); $count = count($arrTOL); //print_r($arrTOL);?>

                    <div class="text py-4 d-block">
                      <div class="meta">
                        <div><a href="#"><i class="fa fa-calendar"></i> <?php echo date('M j ,Y'); ?></a></div>
                        <div><a href="#"><?php echo $_SESSION['myadmin']; ?></a></div>
                        <div><a href="#" class="meta-chat"><i class="fa fa-eye"></i> 0</a></div>
                      </div>
                      <h3 class="heading mt-2"><a id="Nameval" href="#"><?php echo $get['Name']; ?></a></h3>
                      <p class="length_p row Tools">

                        <?php  foreach ($TOL as $TOL):  ?>

                             <?php for($i=0;$i<$count;$i++){ if($TOL['ID'] == $arrTOL[$i]){ ?>
                               <a href="tools.php"><img src="..\data\TOL\<?php echo $TOL['Name']; ?>\<?php echo $TOL['img'] ?>" alt="<?php echo $TOL['Name']; ?>"></a>
                              <?php } }  ?>

                        <?php  endforeach; ?>

                      </p>
                    </div>

            </div>

          </div>

          <div class="insert col TAG">

            <label class="requir"> Template Tools </label>
            <select name="TOOLS" id="TOOLS" class="form-control Tool" value=''  multiple="multiple" >

              <?php $TOL = getOne('*','tools',"WHERE Approve = 1",'') ?>

              <?php $arrTOL = explode(',',$get['Tool']); $count = count($arrTOL); // print_r($arrTOL);?>

              <?php  foreach ($TOL as $TOL):  ?>

                  <option value="<?php echo $TOL['ID']; ?>" <?php for($i=0;$i<$count;$i++){ if($TOL['ID'] == $arrTOL[$i]){echo "selected";} }  ?>>
                    <?php echo $TOL['Name']; ?>
                  </option>

              <?php  endforeach; ?>



            </select>

            <input id="toolval" type="hidden" name="TVal" value="<?php echo $get['Tool']; ?>">

            <span id="typerr" class="error"></span>

            <?php if (!empty($Terror)): ?>
              <?php foreach ($Terror as $error): ?>
                <span style="display:block;opacity:1;" class="error php_err img_err"><i class="fa fa-times-circle"></i> <?php echo $error ?> </span>
              <?php endforeach; ?>
            <?php endif; ?>

          </div>



          <div class="insert radio col">

            <label class="col-sm control-label requir" >Approve</label>

            <div class="custom-control custom-radio custom-control-inline radio-1">
                <input style="cursor:pointer" type="radio" id="customRadioInline1" name="App" value="1" class="custom-control-input in_1"
                <?php if($get['Approve']==1){echo "checked";} ?>>
                <label style="cursor:pointer" class="custom-control-label in_1" for="customRadioInline1">Yes</label>
            </div>

            <div class="custom-control custom-radio custom-control-inline radio-2" style="cursor:pointer">
                <input style="cursor:pointer" type="radio" id="customRadioInline2" name="App" value="0" class="custom-control-input in_2"
                <?php if($get['Approve']==0){echo "checked";} ?>>
                <label style="cursor:pointer" class="custom-control-label in_2" for="customRadioInline2">No</label>
            </div>

          </div>

          <input id="File_POST" type="hidden" name="File_10" value="">

      <!-- /*******************************************/ -->

          <div class="insert-btn">
            <button id="TEMP_edit" class="btn badge btn-info btn-sm" type="submit" name="editTemp"><span class="spinner-grow spinner-grow-sm"></span><i class="fa fa-wrench"></i> Save </button>
            <button type="button" class="btn badge badge-light btn-light btn-sm show-me" data-dismiss="modal" href="#"><a href="preview.php?V=<?php echo $OP['Name']; ?>&P=<?php echo $PP ; ?>&Temp=<?php ECHO $TEMPID ?>"> <i data-feather='crosshair'></i><span>View</span> </a> </button>
            <button class="btn badge btn-dark btn-sm" type="button" ><a href="dashboard.php" style="color:#eee;">  cancel  </a> </button>
          </div>

    <!-- /*******************************************/ -->

    </div>

        </form>


  <div style="position:absolute;" class="uplode-modal">

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Template Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

    <div class="modal-body">

      <?php $main = $M[0]['Parent']; ?>

      <div id="_WEB" class="container-fluid _main <?php if($main == 1){echo "SHOW";} ?>">
        <form id="_ZIP" method="post" enctype="multipart/form-data">
          <div class="form-group">

           <input type="hidden" name="ID" value="<?php echo $TEMPID; ?>">
           <input type="file" class="form-control" name="File_zip" id="File_zip" accept=".zip, .rar" />
           <input type="submit" onclick="_ZIP()" style="display:none;" id="SUB_zip" value="Upload" class="btn btn-info"
           onclick="">

           <div class="progress">
             <div id="BAR_ZIP" class="progress-bar progress-bar-striped progress-bar-animated"
               role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" ><span id="pres_ZIP"></span>
             </div>
           </div>

          </div>

          <div id="OUT_zip" style="display:none;"></div>

        </form>
      </div>

      <div id="_GRPH" class="container-fluid _main <?php if($main == 5){echo "SHOW";} ?>">

        <?php for ($U=1; $U <=10; $U++) { echo $U;  ?>

          <form id="upimg_<?php echo $U; ?>" method="post" enctype="multipart/form-data">

                <div class="form-group">

                 <input type="hidden" name="ID" value="<?php echo $TEMPID; ?>">
                 <input type="file" class="form-control" name="File_<?php echo $U; ?>" id="File_<?php echo $U; ?>" accept=".jpg, .png , .gif, .jpeg" />
                 <input type="submit" style="display:none;" id="SUB_<?php echo $U; ?>" value="Upload" class="btn btn-info"
                 onclick="progDATA('#upimg_<?php echo $U; ?>','#File_<?php echo $U; ?>','#OUT_<?php echo $U; ?>','TEMP_<?php echo $U; ?>','#BAR_<?php echo $U; ?>','#pres_<?php echo $U ?>')">

                 <div class="progress">
                  <div id="BAR_<?php echo $U; ?>" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" ><span id="pres_<?php echo $U ?>"></span> </div>
                 </div>

                </div>

                <div id="OUT_<?php echo $U; ?>" style="display:none;"></div>

           </form>

          <?php } ?>

      </div>



    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
      <button type="button"  id="upload" class="btn btn-primary btn-sm" style="font-weight: bold;">
        <i style="position: relative;top: 2px;height: 16px;" data-feather='upload'></i> upload</button>
    </div>
</div>
</div>
</div>
  </div>


        <div class="del-list row">
          <div class="tag">

            <button id="DEL" type="button" style="display:none;" class="btn btn-primary " onclick="" data-toggle="modal" data-target="#DEL_model">  </button>
            <?php $IMG = getOne('Name,img_1,img_2,img_3','temp',"WHERE ID = $TEMPID"); ?>
            <?php $temp = $IMG[0]['Name']; ?>
            <!-- Modal -->
            <div class="addDONE modal delet fade added" id="DEL_model" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"> <?php echo $get['Name']; ?> Images</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span class="closetag" aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div style="text-transform: capitalize;" class="modal-body">
                    <?php for ($i=1; $i <4 ; $i++) {
                      $img = $IMG[0]['img_'.$i];
                      if ($img!=='0') {
                        ?>
                        <div class="form-check form-check-inline col-md-4 col widget">
                            <input style="top: -50px;" class="form-check-input val-img" type="checkbox" id="inlineCheckbox<?php echo $i; ?>" value="<?php echo $i; ?>">
                            <img class="form-check-label" for="inlineCheckbox<?php echo $i; ?>" src="<?php if($img!=='0'){ echo $path.$TEMPID.'/img//'.$img;} ?>" alt="">
                        </div>
                        <?php
                      }else {
                        ?>
                        <div class="form-check form-check-inline col-md-4 col widget">
                            <img style="opacity: .5;" class="form-check-label"  src="layout\img\default.jpg" alt="">
                        </div>
                        <?php
                      }
                    } ?>

                  </div>
                    <div class="modal-footer">
                      <button id="closetag" type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cansel</button>
                      <button id="TAGsub" type="submit" value="<?php echo $TEMPID; ?>" onclick="deletimg()" name="delimg" class="btn btn-primary btn-sm">Delete</button>
                    </div>
                </div>
              </div>
            </div>

            <form id="idForm" style="display:none;" action="Works.php?TempS=deletimg" method="post">
              <input type="text" name="ID" value="<?php echo $TEMPID; ?>">
              <input id="deltval" type="text" name="img" value="">
              <input id="send" type="submit" name="DELTIMG" >
            </form>

          </div>
        </div>

    </div>

    <?php
     }
    }
  }elseif ($works == 'deletimg') {
    echo "string";
    ?>
      <script type="text/javascript">
       console.log('submit send');
      </script>
    <?php

  }else {
    header('location:Works.php');
  }
  ?>

  <!-- /***********************************************************/ -->



  <?php

    for ($i=1; $i <3 ; $i++) {
      ?>

      <div id="uploadimageModal_<?php echo $i ?>" class="modal croper" role="dialog">
        <div class="cropoverlay"></div>
        <div class="modal-dialog">
          <div class="modal-content">

                <div class="modal-body">

                  <div class="col text-center">
                    <div id="image_demo_<?php echo $i ?>" style="width:350px; margin-top:0px"></div>
                  </div>
                  <div class="col crop-btn" style="padding-top:0px;">
                    <button class="col btn btn-primary btn-block btn-sm crop_image_<?php echo $i ?>"><span class="spinner-grow spinner-grow-sm"></span>SET Image</button>
                    <button id="cropClos" type="button" class="col btn btn-default btn-block btn-sm Clos" data-dismiss="modal" aria-hidden="true">Close</button>
                  </div>
                </div>

            </div>
          </div>
      </div>

      <?php
    }

   ?>

<!-- /*********************************************************************************/ -->

<!-- /*********************************************************************************/ -->

</section>

<?php else: ?>
  <?php echo SETtage('error Page',"'index.php',3000,0",'Just <strong> ADMIN </strong> CAN OPEN THIS PAGE.',0,3,'','','','','',1); ?>
<?php endif; ?>

 <?php include $tpl . 'footer.inc'; ?>


 <?php   ob_end_flush();  // Release The Output ?>
