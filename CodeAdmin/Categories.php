
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
  if (!isset($_SESSION['myadmin'])) : // if user logedin and user is EXIST in DB Redirect to Location HTTP Page
     header('location:../../index');
     exit;
     else:

  $cat = isset($_GET['cat']) ?$_GET['cat']:'All';

  if ($cat == 'editsET') {
      $tete = 'edit Category';
  }elseif ($cat == 'NewCat') {
      $tete = 'New Category ';
  }else {
    $tete = 'Categories';
  }

  $pageTitle = $tete; //
    $table     = 1;
    $noNavbar  = 1;
    $StartUp   = 1;
    include "inc.php";
    $path = '../data/PCAT/';

?>

<section class="CAT tabs">

<a href="LOGOUT.php">logout</a>

<h3 class="pag-T"> <?php Ptitle(); ?> </h3>
<div class="container">

  <?php

  if ($cat == 'All') {
  /******************************************************************/
  $main = isset($_GET['main']) && is_numeric($_GET['main'])? intval($_GET['main']):'';
  ?>
  <?php if (!empty($main)): ?>
    <?php $N = getOne('Name AS MC','categories',"WHERE ID = $main"); ?>
    <?php $getall = getAlltable('*','categories',"WHERE Parent = $main",'','Temp','',0);
      $titl = $N[0]['MC'];
     ?>
    <?php else: $titl = Ptitle(); ?>
    <?php $getall = getAlltable('*','categories',"",'','Temp','',0); ?>
  <?php endif; ?>

<?php if (!empty($main)): ?>
<h2 class="h_main"> Parent Category </h2>
<?php endif; ?>

    <div class="cat-table">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"> <i class="fa fa-quote-left"></i> <?php echo $titl; ?></h6>
              <button class="add-new btn badge btn-primary btn-sm" type="button" name="button"> <a href="?cat=NewCat"> <i data-feather='plus-square'></i> New Category</a> </button>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Main / P</th>
                      <th>img</th>
                      <th>Orders</th>
                      <th>Temp</th>
                      <th>Visible</th>
                      <th>Block</th>
                      <th>Control</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Main / P</th>
                      <th>img</th>
                      <th>Orders</th>
                      <th>Temp</th>
                      <th>Visible</th>
                      <th>Block</th>
                      <th>Control</th>
                    </tr>
                  </tfoot>
                  <tbody>



      <?php foreach ($getall as $CAT): $ID = $CAT['ID'];?>
        <?php $name = $CAT['Name']; $img = $CAT['img'] ?>
        <?php $vis  = $CAT['Visibility'] == 1 ? '<span class="badge badge-primary badge-sm"> Yes </span>'
         : '<span class="badge badge-warning badge-sm"> No </span>' ; ?>
        <?php $blok = $CAT['Block'] == 1 ? '<span class="badge badge-danger badge-sm"> Yes </span>' : '<span class="badge badge-light badge-sm">No</span>' ?>
        <?php $P = $CAT['Parent'] == 0 ? '<strong>#</strong>' : '<strong>'.$CAT["Parent"].'</strong>'; ?>
        <?php $img = $CAT['Parent'] == 0 ?' ــــ ':"<img class='img' src='$path$ID/$img'.'>"; ?>
        <tr>
          <td><?php echo $CAT['ID'];?>
              <button id="Del_<?php echo $CAT['ID'] ?>" type="button" name="DelCat" value="<?php echo $CAT['ID']; ?>" onclick="checkdata('#Del_<?php echo $CAT['ID']; ?>','#GET','Tag','DelCat')" class="trash btn badge btn-danger btn-sm"><i class="fa fa-trash-o"></i> </button>
          </td>
          <td class="<?php if(strlen($CAT['Name']) >13){echo "textCrop";} ?>" style="font-weight:550; text-shadow: 0 0px 2px #000;" title="<?php echo $CAT['Name']; ?>"> <?php echo $CAT['Name']; ?> </td>

          <td><?php echo $P; ?></td>
          <td><?php echo $img; ?></td>
          <td> <span class="badge badge-info badge-sm "> <?php echo $CAT['Orders']; ?> </span> </td>
          <td> <span class="badge badge-warning badge-sm "> <?php echo $CAT['Temp']; ?> </span> </td>
          <td> <?php echo $vis ?> </td>
          <td> <?php echo $blok ?> </td>
          <td>

            <div class="control">
              <button type="button" class="btn badge btn-success btn-sm"><a href="?cat=editsET&catID=<?php echo $CAT['ID']; ?>&siTG=edit"> <i class="fa fa-wrench"></i> edit </a> </button>
              <?php// if ($CAT['Visibility']==0): ?>

                <!-- <samp class="vis-btn"> -->
                  <button id="visible_<?php echo $CAT['ID']; ?>" value="<?php echo $CAT['ID']; ?>" type="button" class="get btn badge btn-info btn-sm <?php if($CAT['Visibility']==0){echo "los";} ?>" name="SEND"
                    onclick="checkdata('#visible_<?php echo $CAT['ID']?>','#tag','visB','vis')" >
                    <a > <i class="fa fa-low-vision"></i> visible </a> </button>
                  <button id="visible_<?php echo $CAT['ID']?>" type="button" value="<?php echo $CAT['ID']; ?>" class="get btn badge btn-secondary btn-sm <?php if($CAT['Visibility']==1){echo "los";} ?>" name="vis"
                    onclick="checkdata('#visible_<?php echo $CAT['ID']?>','#tag','visB','vis')" >
                    <a > <i class="fa fa-low-vision"></i> invisible </a> </button>

                <!-- </samp> -->
            </div>

           </td>
        </tr>
      <?php endforeach; ?>

<!-- /******************************************************************************************/ -->

                  </tbody>
                </table>
              </div>
            </div>
          </div>

<span id="val" style="position:fixed;"></span>
    </div>

<?php if (!empty($main)): ?>

        <h2 class="h_main"> Category Templates </h2>

            <div class="works-table">

            <!-- /**************************************************************/ -->

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"> <i data-feather='feather'></i> <?php echo $titl; ?> Templates</h6>
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

        <?php

        foreach ($getall as $val) {
          $P = $val['ID'];
           $GET = getOne('*','Temp',"WHERE Cat_ID = $P ");
           $Pcount = count($GET);
           if ($Pcount!==0) { ?>
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
           <?php } }?>
           </div>
         </div>
       </div>
     </div>


<?php endif; ?>

  <?php
  /******************************************************************/
}elseif ($cat =='NewCat' ) {

  ?>

  <div class="addnew newCAT">

  <h4> <i class="fa fa-quote-left"></i> New Category </h4>


      <form id="addCat" class="insert-form row " action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">

        <div class="col-md-10 col-lg-9 col">
          <div class="insert col col-md-10">

            <label class="requir"> Category Name </label>

              <input id="CatN" class="form-control" type="text" name="Name" value="<?php if ( isset($name) && !empty($name) ){echo $name;}  ?>" maxlength="25" placeholder="Enter CATEGORY Name">

              <?php if (!empty($ERRORNAME)): ?>
                <?php foreach ($ERRORNAME as $error): ?>
                  <span style="display:block;opacity:1;" class="error php_err"><i class="fa fa-times-circle"></i> <?php echo $error ?> </span>
                <?php endforeach; ?>
              <?php endif; ?>

              <span id="errCat" class="error"></span>

          </div>

          <div class="insert col col-md-10">

            <?php $getM = getAlltable('ID,Name,Block','Categories','WHERE Parent = 0','','Temp','',0) ?>

            <label> Main Category</label>
              <select id="parent" class="custom-select" name="parent">
                <option style="color:#d00" value="0">Set As Main Category ...</option>
                <?php foreach ($getM as $Cat): ?>
                  <?php if ($Cat['Block']==1): ?>
                    <option class="disabled" disabled value="<?php echo $Cat['ID']; ?>"><?php echo $Cat['Name'] ?> </option>
                    <?php else: ?>
                      <option style="font-widget=550" value="<?php echo $Cat['ID']; ?>" ><?php echo $Cat['Name']; ?></option>
                  <?php endif; ?>
                <?php endforeach; ?>
              </select>

          </div>

          <div class="row rod">

            <div class="insert radio col ">

              <label class="col-sm control-label requir" >Visible</label>

              <div class="custom-control custom-radio custom-control-inline radio-1">
                  <input style="cursor:pointer" type="radio" id="nEWVIS1" name="visB" value="1" class="custom-control-input in_1">
                  <label style="cursor:pointer" class="custom-control-label in_1" for="nEWVIS1">Yes</label>
              </div>

              <div class="custom-control custom-radio custom-control-inline radio-2" style="cursor:pointer">
                  <input style="cursor:pointer" type="radio" id="nEWVIS2" name="visB" value="0" class="custom-control-input in_2">
                  <label style="cursor:pointer" class="custom-control-label in_2" for="nEWVIS2">No</label>
              </div>

            </div>

            <div class="insert radio col ">

              <label class="col-sm control-label " >Block</label>

              <div class="custom-control custom-radio custom-control-inline radio-1">
                  <input style="cursor:pointer" type="radio" id="customRadioInline3" name="blok" value="1" class="custom-control-input in_1">
                  <label style="cursor:pointer" class="custom-control-label in_1" for="customRadioInline3">Yes</label>
              </div>

              <div class="custom-control custom-radio custom-control-inline radio-2" style="cursor:pointer">
                  <input style="cursor:pointer" type="radio" id="customRadioInline4" name="blok" value="0" class="custom-control-input in_2" checked>
                  <label style="cursor:pointer" class="custom-control-label in_2" for="customRadioInline4">No</label>
              </div>

              <input id="block" style="display:none;" type="text" name="bloCk" value="">

            </div>

            <?php if (!empty($ERRORV)): ?>
              <?php foreach ($ERRORV as $error): ?>
                <span style="display:block;opacity:1; width: 60%;" class="raderr error php_err"><i class="fa fa-times-circle"></i> <?php echo $error ?> </span>
              <?php endforeach; ?>
            <?php endif; ?>

            <span id="Viserr" class="raderr error"></span>
          </div>

          <!-- /*******************************************/ -->

              <div class="insert-btn">
                <button id="subN" class="btn badge btn-warning btn-sm" type="submit" name="NawCat" ><span class="spinner-grow spinner-grow-sm"></span> Add Category </button>
                <button class="btn badge btn-dark btn-sm" type="submit" name="NawTemp"><a href="dashboard.php" style="color:#eee;">  cancel  </a> </button>
              </div>

          <!-- /*******************************************/ -->

          <div class="parent">

            <div class="overlay"> <span>Open For Parent Categories</span> </div>

            <div class="col row View no-gutters d-flex">

              <a href="#" class="img col-md-6" ><span id="OUTLOAD"><img src="<?php echo $img; ?>7.png" alt=""></span> <span class="Cathead">CODEX|LAB</span> </a>
              <div class="text col-md-6">
                <div class="card-body">
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                <div class="go"><button class="btn badge btn-info btn-sm" type="button" name="button">
                  <a class="" href="#"><i class="fa fa-eye"></i> previrw</a></button>
                  <button class="btn badge btn-outline-dark btn-sm" type="button" name="button">
                    <a class="last" href="#"><i class="fa fa-get-pocket"></i> Content</a> </button>
                </div>
                </div>
              </div>

            </div>

            <div class="input-img col col-lg-5 col-md-10">
              <input class="form-control" id="catimg" type="file" name="inputimg" value="" onclick="CATCROP()" >
              <input id="cropd" type="text" style="display:none;" name="cropd" value="">

              <?php if (!empty($ERRIMG)): ?>
                <?php foreach ($ERRIMG as $error): ?>
                  <span style="display:block;opacity:1;" class="error php_err img_err"><i class="fa fa-times-circle"></i> <?php echo $error ?> </span>
                <?php endforeach; ?>
              <?php endif; ?>

            </div>

            <div class="input-p col col-lg-8">
              <textarea  id="Trea" cols="30" rows="3" name="DISC" class="form-control" maxlength=90
              placeholder="In less Than [ 90 ] Character , Insert This Category Description."></textarea>



            </div>
            <?php if (!empty($ERRDISC)): ?>
              <?php foreach ($ERRDISC as $error): ?>
                <span style="display:block;opacity:1; width:60%;" class="error php_err img_err"><i class="fa fa-times-circle"></i> <?php echo $error ?> </span>
              <?php endforeach; ?>
            <?php endif; ?>
          </div>

        </div>

      </form>

<!-- /****************************************************/ -->



<!-- /***************************************************/ -->

    </div>

  <?php
}elseif ($cat == 'editsET') {

  $CATID = isset($_GET['catID']) && is_numeric($_GET['catID']) ?intval($_GET['catID']) : 0;

  $getcoubt = checkItem('ID','Categories',"$CATID",'');
  if ($getcoubt == 1) {
    $get = getOne('*','Categories',"WHERE ID = $CATID",'');
    $SITG = isset($_GET['siTG']) ? $_GET['siTG'] : '';
    $get = $get[0];
    if ($SITG=='edit') {

      ?>
      <div class="addnew newCAT">

      <h4> <i class="fa fa-wrench"></i> Edit Category </h4>


          <form id="eddCat" class="insert-form row " action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">

            <div class="col-md-10 col-lg-9 col">
              <div class="insert col col-md-10">
                <input type="hidden" name="CATID" value="<?php echo $get['ID'] ?>">
                <label class="requir"> Category Name </label>

                  <input id="CatN" class="form-control" type="text" name="Name" value="<?php echo $get['Name'] ?>" maxlength="25" placeholder="Enter CATEGORY Name">

                  <?php if (!empty($ERRORNAME)): ?>
                    <?php foreach ($ERRORNAME as $error): ?>
                      <span style="display:block;opacity:1; width:60%;" class="error php_err"><i class="fa fa-times-circle"></i> <?php echo $error ?> </span>
                    <?php endforeach; ?>
                  <?php endif; ?>

                  <span id="errCat" class="error"></span>

              </div>

              <div class="insert col col-md-10">

                <?php $getM = getAlltable('ID,Name,Block','Categories','WHERE Parent = 0','','Temp','',0) ?>

                <label> Main Category</label>

                  <select id="parent" class="custom-select" name="Parent">
                    <option style="color:#d00" value="0">Set As Main Category ... </option>
                    <?php foreach ($getM as $Cat): ?>
                      <?php if ($Cat['Block']==1): ?>
                        <option style="color:#ddd;" value="<?php echo $Cat['ID']; ?>" class="disabled" disabled  <?php if( $get['Parent'] == $Cat['ID'] ){echo "selected";} ?>><?php echo $Cat['Name'] ?></option>
                        <?php else: ?>
                          <option style="font-widget=550" value="<?php echo $Cat['ID']; ?>" <?php if( $get['Parent'] == $Cat['ID'] ){echo "selected";} ?>><?php echo $Cat['Name']; ?></option>
                      <?php endif; ?>
                    <?php endforeach; ?>
                  </select>

              </div>

              <?php $visY = $get['Visibility'] ==1? "checked":''; ?>
              <?php $visN = $get['Visibility'] ==0? "checked":''; ?>
              <?php $blkY = $get['Block'] ==1? "checked":''; ?>
              <?php $blkN = $get['Block'] ==0? "checked":''; ?>

              <div class="row rod">

                <div class="insert radio col ">

                  <label class="col-sm control-label requir" >Visible</label>

                  <div class="custom-control custom-radio custom-control-inline radio-1">
                      <input style="cursor:pointer" type="radio" id="customRadioInline3" name="V" value="1" class="custom-control-input in_1" <?php echo $visY ?>>
                      <label style="cursor:pointer" class="custom-control-label in_1" for="customRadioInline3">Yes</label>
                  </div>

                  <div class="custom-control custom-radio custom-control-inline radio-2" style="cursor:pointer">
                      <input style="cursor:pointer" type="radio" id="customRadioInline4" name="V" value="0" class="custom-control-input in_2" <?php echo $visN ?>>
                      <label style="cursor:pointer" class="custom-control-label in_2" for="customRadioInline4">No</label>
                  </div>

                </div>

                <div class="insert radio col ">

                      <label class="col-sm control-label " >Block</label>

                      <div class="custom-control custom-radio custom-control-inline radio-1">
                          <input style="cursor:pointer" type="radio" id="customRadioInline5" name="blok" value="1" class="custom-control-input in_1" <?php echo $blkY ?>>
                          <label style="cursor:pointer" class="custom-control-label in_1" for="customRadioInline5">Yes</label>
                      </div>

                      <div class="custom-control custom-radio custom-control-inline radio-2" style="cursor:pointer">
                          <input style="cursor:pointer" type="radio" id="customRadioInline6" name="blok" value="0" class="custom-control-input in_2" <?php echo $blkN ?>>
                          <label style="cursor:pointer" class="custom-control-label in_2" for="customRadioInline6">No</label>
                      </div>

                      <input id="block" style="display:none;" type="text" name="bloCk" value="">

                </div>

                <?php if (!empty($ERRORV)): ?>
                  <?php foreach ($ERRORV as $error): ?>
                    <span style="display:block;opacity:1; width: 60%;" class="raderr error php_err"><i class="fa fa-times-circle"></i> <?php echo $error ?> </span>
                  <?php endforeach; ?>
                <?php endif; ?>

                <span id="Viserr" class="raderr error"></span>
              </div>

              <!-- /*******************************************/ -->

                  <div class="insert-btn">
                    <button id="subCAT" class="btn badge btn-warning btn-sm" type="submit" name="EditCat" ><span class="spinner-grow spinner-grow-sm"><i class="fa fa-wrench"></i> Edit </span> </button>
                    <button class="btn badge btn-dark btn-sm" type="button"><a href="categories.php?cat=All" style="color:#eee;">  Cancel  </a> </button>
                  </div>

              <!-- /*******************************************/ -->


                <div class="parent <?php if ($get['Parent'] == 0){echo "PRNT";} ?>">

                  <div class="overlay <?php if ($get['Parent'] !== 0){echo "noOVR";} ?>"> <span>Open For Parent Categories</span> </div>

                  <div class="col row View no-gutters d-flex">

                    <a href="#" class="img col-md-6" ><span id="OUTLOAD"><img src="<?php echo $path.$get['ID'].'/'.$get['img']; ?>" alt=""></span> <span class="Cathead">CODEX|LAB</span> </a>
                    <div class="text col-md-6">
                      <div class="card-body">
                      <p><?php echo $get['Description']; ?></p>
                      <div class="go"><button class="btn badge btn-info btn-sm" type="button" name="button">
                        <a class="" href="#"><i class="fa fa-eye"></i> previrw</a></button>
                        <button class="btn badge btn-outline-dark btn-sm" type="button" name="button">
                          <a class="last" href="#"><i class="fa fa-get-pocket"></i> Content</a> </button>
                      </div>
                      </div>
                    </div>

                  </div>

                  <div class="input-img col col-lg-5 col-md-10">

                    <input class="form-control" id="catimg" type="file" name="inputimg" value="" onclick="CATCROP()" >
                    <input id="cropd" type="text" style="display:none;" name="cropd" value="">

                    <?php if (!empty($ERRIMG)): ?>
                      <?php foreach ($ERRIMG as $error): ?>
                        <span style="display:block;opacity:1;" class="error php_err img_err"><i class="fa fa-times-circle"></i> <?php echo $error ?> </span>
                      <?php endforeach; ?>
                    <?php endif; ?>

                  </div>

                  <div class="input-p col col-lg-8">
                    <input id="treaVal" type="text" style="display:none" name="" value="<?php echo $get['Description'] ?>">
                    <textarea  id="Trea" cols="30" rows="3" name="DISC" class="form-control" maxlength=90
                    placeholder="In less Than [ 90 ] Character , Insert This Category Description." ></textarea>
                  </div>

                  <?php if (!empty($ERRDISC)): ?>
                    <?php foreach ($ERRDISC as $error): ?>
                      <span style="display:block;opacity:1; width:60%;" class="error php_err img_err"><i class="fa fa-times-circle"></i> <?php echo $error ?> </span>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </div>

            </div>

          </form>

    <!-- /****************************************************/ -->



    <!-- /***************************************************/ -->

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


<?php endif; ?>

<?php include $tpl . 'footer.inc';

    ob_end_flush();  // Release The Output

 ?>
