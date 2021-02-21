

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
         <?php } endif;?>


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


                  </tbody>
                </table>
              </div>
            </div>
          </div>


          <!-- /*************************************************************/ -->
          </div>

<!-- /*************************************************************/ -->

<!-- /****************
END MAIN
*********************/  -->
    <?php endif; ?>
