<?php
$log = !isset($_SESSION['Client']) ?0:1;
 ?>
<!--    START NAVBAR     -->
  <div class="container">
<div id="Client" class="Client">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#"><img class="lord-logo" src="layout\imgs\4.png" alt=""> <span class="B-1">LORD</span><span class="B-2">|</span><span class="B-3">Mark</span></a>

      <div class="sm">
        <a class=" bell" href="#"><i class="fa fa-bell-o"></i> </a>
        <span class="badge badge-danger" id="navig">0</span>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="dropbarnd" role="button" >
                Brands
              </a>
            </li>

              <?php
                  $getMine = getAlltable('*','categories',"WHERE Block !=0 "," AND Parent = 0 AND Visibility = 1",'Ordering','DESC',3);
              ?>
              <?php foreach ($getMine as $mine): $M = $mine['ID'];?>
                  <li class="nav-item dropdown  O">
                    <a class="nav-link dropdown-toggle" role="button">
                      <?php echo $mine['Name']; ?>
                    </a>
                  </li>

              <!-- /*************************************************/ -->
          <section class="hide">

              <div class="D-cat">
                <div class="row">
            <?php

              if($mine['Visibility'] !==0):

              $getp = getAlltable('*','categories',"WHERE Parent = $M","AND Visibility = 1 AND Parent !=0 AND Brands !=0","Ordering",'DESC','3');
            ?>

              <!-- /*************************************************/ -->

                <?php foreach ($getp as $J ): ?>
                  <div class="col-md-4">

                  <h3><?php echo $J['Name'] ?></h3>
                <?php
                  $getB = getAlltable('*,LENGTH(Name) AS COUNTS' ,'brands',"WHERE Cat_ID = {$J['ID']} ",'AND Approve = 1','My_Items','DESC',10);
                ?>
                <?php foreach ($getB as $B): ?>
                  <ul>
                    <?php if($B['COUNTS'] > 15): ?>
                    <li> <a class="col-md-4 try" class="btn badge btn-light" href="#"><strong><?php echo $B['Name'] . $B['COUNTS']; ?></strong><span class=" badge badge-info"><?php echo $B['My_Items']; ?></span></a> </li>
                    <?php else: ?>
                    <li> <a class="col-md-4" class="btn badge btn-light" href="#"><strong><?php echo $B['Name']; ?></strong><span class=" badge badge-info"><?php echo $B['My_Items']; ?></span></a> </li>
                   <?php endif; ?>
                  </ul>
              <?php endforeach; ?>
              <?php if ($J['Brands'] > 5 ): ?>
                <button id="more" href="#" type="button" name="more" class="btn badge btn-primary" >view more</button>
              <?php endif; ?>
            </div>
              <?php endforeach; ?>


              <!-- /*************************************************/ -->
              </div>

              </div>

          </section>

  <?php endif; endforeach; ?>

  <li class="nav-item dropdown catMore">
    <a id="Cat" data-scroll="cat-tabs" class="nav-link dropdown-toggle more" role="button">
      Categories
    </a>
  </li>


    <li class="nav-item dropdown catMore">
      <a id="Advs" data-scroll="itm" class="nav-link dropdown-toggle more" role="button">
        Advs
      </a>
    </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Contact Us</a>
            </li>

            <div class="lg">
              <li class="nav-item">
                <a class=" bell" href="#"><i class="fa fa-bell-o"></i> </a>
                <span class="badge badge-danger" id="navig">0</span>
              </li>
            </div>

          </ul>

      </div>
    </nav>
</div>

  </div>

<!--    END NAVBAR     -->

<!-- /***** SRART FIXED NAVBAR *****/ -->
  <div class="container">

    <div class="fixed-nav">
      <div class="lord-brand">
        <span class="lord-1">LODR</span>
          <img class="lord-logo" src="layout\imgs\4.png" alt="">
        <span class="lord-2">Mark</span>
      </div>
      <div class="btn-list">
        <ul class="navbar">
          <li><a href="#">Home</a></li>
          <li><a href="#">Categories</a></li>
          <li><a href="#"></a>Advs</li>
          <li><a href="#"></a>Contact Us</li>
          <li><a href="#"></a>
            <div class="sm">
              <a class=" bell" href="#"><i class="fa fa-bell-o"></i> </a>
              <span class="badge badge-danger" id="navig">0</span>
            </div>
          </li>
        </ul>
      </div>
    </div>

  </div>
<style media="screen">
  .fixed-nav{
    position: fixed;
  }
</style>
<!-- /***** SRART FIXED NAVBAR *****/ -->


<!-- /**************/ -->

<?php if (isset($_SESSION['Username'])): ?>

  <div class="fixed-menu">
    <button type="button" class="open-menu btn btn-outline-light badge badge-light btn-sm" name="button"><i disabled class="fa fa-gear "></i> </button>
  <!-- <i disabled class="fa fa-gear open-menu"></i> -->

          <h3 class="fm-1"></h3>

          <h3 class="fm-3">

            <a class="dropdown-item" href="admin CB/Dashboard.php"><i class="fa fa-pencil-square" aria-hidden="true"></i>  <?php echo lang("site"); ?></a>
          </h3>

          <h3 class="fm-2">
              <a class="dropdown-item" href="users.php?do=Edit&userid=<?php echo $_SESSION['ID'];?>"><i class="fa fa-pencil-square" aria-hidden="true"></i>  <?php echo lang("Edit Profile"); ?></a>
          </h3>

          <h3 class="fm-2">
            <a class="dropdown-item" href="#"><i class="fa fa-wrench" aria-hidden="true"></i>  <?php echo lang("menu"); ?></a>
          <hr></h3>

          <h3 class="fm-3">
            <a class="dropdown-item" href="logout.php"><?php echo lang("تسجيل الخروج"); ?>  <i class="fa fa-sign-out" aria-hidden="true"></i></a>
          </h3>

          <h3 class="fm-2">link1<hr></h3>

          <h3 class="fm-3">
            <a class="dropdown-item" target="_blank" href="includes/libraries/live/live.php"><i class="fa fa-search" aria-hidden="true"></i> <?php echo lang('البحث'); // CHECK NAME AJAX PAGE ?>  </a>
          </h3>

          <h3 class="fm-3">
            <a class="dropdown-item" target="_blank" href="Members.php?do=Found"><i class="fa fa-user" aria-hidden="true"></i> <?php echo lang('ايجاد عضو'); // Found Member?>  </a>
          </h3>

          <h3 class="fm-3">
            <a class="dropdown-item" target="_blank" href="Categories.php?do=Found"><i class="fa fa-cubes" aria-hidden="true"></i> <?php echo lang('ايجاد قسم'); //Found Category?>  </a>
          </h3>

          <h3 class="fm-3">
            <a class="dropdown-item" target="_blank" href="Brand.php?do=Brand"><i class="fa fa-star" aria-hidden="true"></i> <?php echo lang('ايجاد براند'); // Found Brand ?>  </a>
          </h3>

          <h3 class="fm-3">
            <a class="dropdown-item" target="_blank" href="Items.php?do=Manege"><i class="fa fa-tags" aria-hidden="true"></i> <?php echo lang('ايجاد اعلان'); // Found Brand ?>  </a>
          </h3>

        for more Contact Us
  <hr>
  </div>
<?php endif; ?>
<!-- /*  START USER MENU  */ -->
<?php if ($log == 1): ?>

<div class="user-menu">
  <button type="button" class="open-menu btn btn-outline-light badge badge-light btn-sm"  name="button"><img src="layout\imgs\4.png" alt=""> </button>
<!-- <i disabled class="fa fa-gear open-menu"></i> -->

        <h3 class="fm-1"></h3>

        <h3 class="fm-3">

          <a class="dropdown-item" href="http://localhost/eCommerce/index.php"><i class="fa fa-pencil-square" aria-hidden="true"></i>  <?php echo lang("site"); ?></a>
        </h3>

        <h3 class="fm-2">
            <a class="dropdown-item" href="users.php?do=Edit&userid=<?php echo $_SESSION['ID'];?>"><i class="fa fa-pencil-square" aria-hidden="true"></i>  <?php echo lang("Edit Profile"); ?></a>
        </h3>

        <h3 class="fm-2">
          <a class="dropdown-item" href="#"><i class="fa fa-wrench" aria-hidden="true"></i>  <?php echo lang("menu"); ?></a>
        <hr></h3>

        <h3 class="fm-3">
          <a class="dropdown-item" href="logout.php"><?php echo lang("تسجيل الخروج"); ?>  <i class="fa fa-sign-out" aria-hidden="true"></i></a>
        </h3>

        <h3 class="fm-2">link1<hr></h3>

        <h3 class="fm-3">
          <a class="dropdown-item" target="_blank" href="includes/libraries/live/live.php"><i class="fa fa-search" aria-hidden="true"></i> <?php echo lang('البحث'); // CHECK NAME AJAX PAGE ?>  </a>
        </h3>

        <h3 class="fm-3">
          <a class="dropdown-item" target="_blank" href="Members.php?do=Found"><i class="fa fa-user" aria-hidden="true"></i> <?php echo lang('ايجاد عضو'); // Found Member?>  </a>
        </h3>

        <h3 class="fm-3">
          <a class="dropdown-item" target="_blank" href="Categories.php?do=Found"><i class="fa fa-cubes" aria-hidden="true"></i> <?php echo lang('ايجاد قسم'); //Found Category?>  </a>
        </h3>

        <h3 class="fm-3">
          <a class="dropdown-item" target="_blank" href="Brand.php?do=Brand"><i class="fa fa-star" aria-hidden="true"></i> <?php echo lang('ايجاد براند'); // Found Brand ?>  </a>
        </h3>

        <h3 class="fm-3">
          <a class="dropdown-item" target="_blank" href="Items.php?do=Manege"><i class="fa fa-tags" aria-hidden="true"></i> <?php echo lang('ايجاد اعلان'); // Found Brand ?>  </a>
        </h3>

      for more Contact Us
<hr>
</div>
<?php endif; ?>
<!-- /*  END USER MENU  */ -->


<!--    START SCROLI BTN    -->

<div class="scroliup">
<a class="scrolltop" href="#"><i class="fa fa-caret-square-o-up" aria-hidden="true"></i></a>
</div>

 <!--   END SCROLI BTN    -->
