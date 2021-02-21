
<?php
/*
================================================================================
=====  SERVICES PAGE
================================================================================
*/
  ob_start();

  session_start();

  // NAVBAR WORKING SENTAX$

  // if SESSION IS SET Redirect CONDETION
  if (isset($_SESSION['myadmin'])) : // if user logedin and user is EXIST in DB Redirect to Location HTTP Page
$srv = isset($_GET['srv']) ?$_GET['srv']:'All';
if ($srv == 'editsET') {
    $tete = 'edit Services';
}elseif ($srv == 'newSRV') {
    $tete = 'New Services ';
}else {
  $tete = 'Services';
}
  $pageTitle = $tete; //
    $table     = 1;
    $noNavbar  = 1;
    $StartUp   = 0;
    include "inc.php";
    $path = '../data/SERV/';

?>
<section class="SRV tabs">

<a href="LOGOUT.php">logout</a>

<h3 class="pag-T"> <?php Ptitle(); ?> </h3>
<div class="container">

  <?php

  if ($srv == 'All') {
  /******************************************************************/
  ?>

    <div class="SRV-table">


          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"> <i class="fa fa-quote-left"></i> <?php echo Ptitle(); ?></h6>
              <button class="add-new btn badge btn-primary btn-sm" type="button" name="button"> <a href="?srv=newSRV"> <i data-feather='plus-square'></i> New <?php echo Ptitle(); ?></a> </button>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Description</th>
                      <th>IMG</th>
                      <th>Approve</th>
                      <th>Data</th>
                      <th>Control</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Description</th>
                      <th>IMG</th>
                      <th>Approve</th>
                      <th>Data</th>
                      <th>Control</th>
                    </tr>
                  </tfoot>
                  <tbody>

      <?php $getall = getOne('*','services','','') ?>

      <?php foreach ($getall as $SRV): ?>
        <?php $app  = $SRV['Approve'] == 1 ?
          '<span class="badge badge-primary badge-sm"> Yes </span>'
        . '<span class="badge badge-warning badge-sm los"> No </span>'
         :'<span class="badge badge-warning badge-sm"> No </span>'
        . '<span class="badge badge-primary badge-sm los"> Yes </span>' ; ?>

        <tr>
          <td><?php echo $SRV['ID']; ?>
            <button id="Del_<?php echo $SRV['ID'] ?>" type="button" name="DelSRV" value="<?php echo $SRV['ID']; ?>" onclick="checkdata('#Del_<?php echo $SRV['ID']; ?>','#GET','Tag','DelSRV')" class="trash btn badge btn-danger btn-sm"><i class="fa fa-trash-o"></i> </button>
          </td>
          <td style="font-weight:550; text-shadow: 0 0px 2px #000;"><?php echo $SRV['Name']; ?></td>

          <td> <span class="badge-info badge-sm Tdisc"> <?php echo $SRV['Description']; ?> </span> </td>
          <td> <img src="<?php echo $path.$SRV['ID'].'/'.$SRV['img']; ?>" alt="">   </td>
          <td><?php echo $app ?></td>
          <td><?php echo date('Y-m-d',strtotime($SRV['Date'])) ?></td>
          <td>
             <button type="button" class="btn badge btn-success btn-sm"><a href="?srv=editsET&srvID=<?php echo $SRV['ID']; ?>&siTG=edit"> <i class="fa fa-wrench"></i> edit </a> </button>
             <?php// if ($SRV['Visibility']==0): ?>

               <!-- <samp class="vis-btn"> -->
                 <button id="app_<?php echo $SRV['ID']; ?>" value="<?php echo $SRV['ID']; ?>" type="button" class="get btn badge btn-info btn-sm <?php if($SRV['Approve']==0){echo "los";} ?>" name="SEND"
                   onclick="checkdata('#app_<?php echo $SRV['ID']?>','#tag','appSRV','app')" >
                   <a > <i class="fa fa-eye"></i> Approve </a> </button>
                 <button id="app_<?php echo $SRV['ID']?>" type="button" value="<?php echo $SRV['ID']; ?>" class="get btn badge btn-secondary btn-sm <?php if($SRV['Approve']==1){echo "los";} ?>" name="app"
                   onclick="checkdata('#app_<?php echo $SRV['ID']?>','#tag','appSRV','app')" >
                   <a > <i class="fa fa-low-vision"></i> Disapprove </a> </button>
               <!-- </samp> -->
             <?php// else: ?>

             <?php // endif; ?>
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
}elseif ($srv =='newSRV' ) {

  ?>
  <div class="addnew newSRV">
    <h4> <i data-feather='framer'></i> New Services </h4>

      <form id="NEW_SRV" class="insert-form row" action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">

        <div class="col-md-6 col">

          <div class="insert col">
            <label class="requir"> Services Name </label>
            <span class="crcT Tn"><small id="crcN">0</small> / 25</span>
            <input id="Sname" class="form-control" type="text" name="SARV" value="" maxlength="25" placeholder="Services Name, Not More Than [35] Character">
            <span class="error"></span>
          </div>

          <?php if (!empty($SRVerr)): ?>
            <?php foreach ($SRVerr as $error): ?>
              <span style="display:block;opacity:1;" class="error php_err "><i class="fa fa-times-circle"></i> <?php echo $error ?> </span>
            <?php endforeach; ?>
          <?php endif; ?>

          <div class="insert col">

              <label for="" class="requir">Description</label>
              <span class="crcT"><small id="crcT">0</small> / 110</span>
              <textarea name="DISC" id="Srea" cols="30" rows="3" class="form-control" maxlength=110
              placeholder="In less Than [ 110 ] Character , Insert This Services Description."></textarea>

              <?php if (!empty($DESerr)): ?>
                <?php foreach ($DESerr as $error): ?>
                  <span style="display:block;opacity:1;" class="error php_err "><i class="fa fa-times-circle"></i> <?php echo $error ?> </span>
                <?php endforeach; ?>
              <?php endif; ?>

              <span id="deserr" class="error"></span>

          </div>


          <!-- /****************************/ -->

          <div class="row">
            <div class="input-img">
              <input class="form-control" id="srvimg" data-toggle="modal" data-target="#data_crop" type="file" name="inputimg" value="" onclick="SRVCROP()" >
              <input id="cropd" type="text" style="display:none;" name="cropd" value="">
            </div>

            <?php if (!empty($imgErrors)): ?>
              <?php foreach ($imgErrors as $error): ?>
                <span style="display:block;opacity:1;" class="error php_err img_err"><i class="fa fa-times-circle"></i> <?php echo $error ?> </span>
              <?php endforeach; ?>
            <?php endif; ?>
          </div>

          <!-- /****************************/ -->

        </div>
        <!-- /****************************/ -->

        <div class="col-md-6 col">

         <div class="SRV col-xl-8 col-lg-11 col-md-12 col-12 marg">
            <div class="media d-block text-center block-6 services">
              <div id="OUTLOAD" class="icon d-flex justify-content-center align-items-center mb-5">
                <img src="<?php echo $img; ?>C.jpg" alt="">
              </div>
              <div class="media-body">
                <h3 class="heading">CODEX Services</h3>
                <p class="length_P">High-performing, intuitive and secure web solutions that support business processes and serve users globally.</p>
              </div>
            </div>
          </div>

        <div class="insert radio col">

          <label class="col-sm control-label requir" >Approve</label>

          <div class="custom-control custom-radio custom-control-inline radio-1">
              <input style="cursor:pointer" type="radio" id="customRadioInline1" name="SAPP" value="1" class="custom-control-input in_1" checked>
              <label style="cursor:pointer" class="custom-control-label in_1" for="customRadioInline1">Yes</label>
          </div>

          <div class="custom-control custom-radio custom-control-inline radio-2" style="cursor:pointer">
              <input style="cursor:pointer" type="radio" id="customRadioInline2" name="SAPP" value="0" class="custom-control-input in_2">
              <label style="cursor:pointer" class="custom-control-label in_2" for="customRadioInline2">No</label>
          </div>

        </div>

<!-- /*******************************************/ -->

        <div class="insert-btn">
          <button id="_SERV" class="btn badge btn-outline-info btn-sm" type="submit" name="newSRV"><span class="spinner-grow spinner-grow-sm"></span> Add Services </button>
          <button class="btn badge btn-dark btn-sm" type="button" name="NawTemp"><a href="dashboard.php" style="color:#eee;">  cancel  </a> </button>
        </div>

<!-- /*******************************************/ -->

  </div>

      </form>

</div>

  <?php
}elseif ($srv == 'editsET') {

  $SRVID = isset($_GET['srvID']) && is_numeric($_GET['srvID']) ?intval($_GET['srvID']) : 0;

  $getcoubt = checkItem('ID','Services',"$SRVID",'');
  if ($getcoubt == 1) {
    $get = getOne('*','Services',"WHERE ID = $SRVID",'');
    $SITG = isset($_GET['siTG']) ? $_GET['siTG'] : '';
    if ($SITG=='edit') {
    //  print_r($get);
    $crop = '';

      ?>

      <div class="addnew newSRV">
        <h4> <i class="fa fa-wrench"></i> Edit Services </h4>

          <form id="edit_SRV" class="insert-form row" action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">

            <input type="hidden" name="ID" value="<?php echo $SRVID; ?>">

            <div class="col-md-6 col">

              <div class="insert col">
                <label class="requir"> Services Name </label>
                <span class="crcT Tn"><small id="crcN">0</small> / 25</span>
                <input id="Sname" class="form-control" type="text" name="SARV" value="<?php echo $get[0]['Name'] ?>" maxlength="25" placeholder="Services Name, Not More Than [35] Character">
                <span class="error"></span>
              </div>

              <?php if (!empty($SRVerr)): ?>
                <?php foreach ($SRVerr as $error): ?>
                  <span style="display:block;opacity:1;" class="error php_err "><i class="fa fa-times-circle"></i> <?php echo $error ?> </span>
                <?php endforeach; ?>
              <?php endif; ?>

              <div class="insert col">

                  <label for="" class="requir">Description</label>
                  <span class="crcT"><small id="crcT">0</small> / 110</span>
                  <input id="treaVal" type="text" style="display:none" name="" value="<?php echo $get[0]['Description'] ?>">
                  <textarea name="DISC" id="Srea" cols="30" rows="3" class="form-control" maxlength=110
                  placeholder="In less Than [ 110 ] Character , Insert This Services Description." value=''></textarea>

                  <?php if (!empty($DESerr)): ?>
                    <?php foreach ($DESerr as $error): ?>
                      <span style="display:block;opacity:1;" class="error php_err "><i class="fa fa-times-circle"></i> <?php echo $error ?> </span>
                    <?php endforeach; ?>
                  <?php endif; ?>

                  <span id="deserr" class="error"></span>

              </div>


              <!-- /****************************/ -->

              <div class="row">
                <div class="input-img">
                  <input class="form-control" id="srvimg" type="file" name="inputimg" value="" onclick="SRVCROP()" >
                  <input id="cropd" type="text" style="display:none;" name="cropd" value="">
                </div>

                <?php if (!empty($imgErrors)): ?>
                  <?php foreach ($imgErrors as $error): ?>
                    <span style="display:block;opacity:1;" class="error php_err img_err"><i class="fa fa-times-circle"></i> <?php echo $error ?> </span>
                  <?php endforeach; ?>
                <?php endif; ?>
              </div>

              <!-- /****************************/ -->

            </div>
            <!-- /****************************/ -->

            <div class="col-md-6 col">
              <?php $path = '..\data\SERV\\' ?>
             <div class="SRV col-xl-8 col-lg-11 col-md-12 col-12 marg">
                <div class="media d-block text-center block-6 services">
                  <div id="OUTLOAD" class="icon d-flex justify-content-center align-items-center mb-5">
                  <img src="<?php echo $path.$get[0]['ID'].'\\'.$get[0]['img']; ?>" alt="">
                  </div>
                  <div class="media-body">
                    <h3 class="heading"><?php echo $get[0]['Name']; ?></h3>
                    <p class="length_P"><?php echo $get[0]['Description']; ?></p>
                  </div>
                </div>
              </div>

            <div class="insert radio col">

              <label class="col-sm control-label requir" >Approve</label>

              <div class="custom-control custom-radio custom-control-inline radio-1">
                  <input style="cursor:pointer" type="radio" id="customRadioInline1" name="SAPP" value="1" class="custom-control-input in_1"
                  <?php if($get[0]['Approve'] == 1){echo "checked";} ?>>
                  <label style="cursor:pointer" class="custom-control-label in_1" for="customRadioInline1">Yes</label>
              </div>

              <div class="custom-control custom-radio custom-control-inline radio-2" style="cursor:pointer">
                  <input style="cursor:pointer" type="radio" id="customRadioInline2" name="SAPP" value="0" class="custom-control-input in_2"
                  <?php if($get[0]['Approve'] == 0){echo "checked";} ?>>
                  <label style="cursor:pointer" class="custom-control-label in_2" for="customRadioInline2">No</label>
              </div>

            </div>

    <!-- /*******************************************/ -->

    <div class="insert-btn">
      <button id="subE" class="btn badge btn-warning btn-sm" type="submit" name="editSRV" ><span class="spinner-grow spinner-grow-sm"><i class="fa fa-wrench"></i> Edit </span> </button>
      <button class="btn badge btn-dark btn-sm" type="button"><a href="Services.php?cat=All" style="color:#eee;">  Cancel  </a> </button>
    </div>

    <!-- /*******************************************/ -->

      </div>

          </form>

    </div>

      <?php
    }
  }else {
    echo "not found";
  }

  ?>



  <?php
}


 ?>
 </div>



</section>

<?php else: ?>
  <?php print_r($_SESSION); ?>
<?php  header('location:index.php'); ?>
<?php endif; ?>

<?php include $tpl . 'footer.inc';

    ob_end_flush();  // Release The Output

 ?>
