
<!-- /***************************************************************************/ -->
<div class="head">
  <nav class="header navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" >
    <div class="container">
      <!-- <span class="flaticon-pizza-1 mr-1"> -->
      <a class="navbar-brand" href="index"><img src="layout/images/logo/C6.jpg" alt=""><span>odex</span><br><small>Development</small><span class="clip"></span></a>
      <button class="click navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="gear" data-feather='slack'></span>
      </button>
      <div class="link collapse navbar-collapse" id="ftco-nav">

        <ul class="navbar-nav ml-auto" dir="rtl">
          <?php $TEMP = countof('ID','temp','WHERE Approve = 1 ') ?>
            <li class="nav-item"><a href="http://localhost/codexlab/" class="nav-link"><?php echo Arb('Home') ?></a></li>
            <li class="nav-item"><a id="services" data-move='.ftco-services' href="services?#_OURSERV" class="nav-link"><?php echo Arb('Services') ?></a></li>
            <li class="nav-item"><a dir="ltr" href="blog" class="nav-link"> معرض الاعمال <span class="num"><?php echo $TEMP; ?></span> </a></li>
            <li class="nav-item"><a id="About" data-move='.ftco-about' href="about" class="nav-link"><?php echo Arb('About Us') ?></a></li>
            <li class="nav-item active"><a id="Contact" href="contact" data-cont=".ContactUS" class="nav-link"><?php echo Arb('Content') ?></a></li>
            <!-- <li style="display:block;" class="nav-item active"><i data-feather='search'></i> </li> -->

        </ul>

      </div>
    </div>
  </nav>

  <!-- END nav -->

<hr class="hr">
    <!-- <div class="lang">
        <img src="layout/images/LOGO/egy.png" alt="">
        <img class="show" src="" alt="">
    </div> -->
</div>

<!-- /******* END NAVBAR *******/ -->

<!-- /****  START FIXED MENU  ****/ -->

  <div id="Mainoverlay" class="Mainoverlay"></div>
  <!-- <div class="close-menu">
    <button  type="button" name="button"><li data-feather="x-circle"></li> </button>
  </div> -->
<div class="fixed-menu owl-stage-outer">

  <div class="logo">
    <div class="name">
      <img src="layout/images/LOGO/333.png" alt="">
      <span>ode</span><img src="layout/images/LOGO/7.png" alt=""> <span>lab</span>
    </div>
  </div>

  <div class="intro-menu owl-stage">

      <h6 class="fm-1"></h6>

    <ul dir="rtl">

      <li>
        <a class="dropdown-item " target="_blank" href="http://localhost/codexlab/">
          <span><i class="fa fa-home"></i><?php echo Arb('Home') ?></span>
       </a>
      </li>

      <li  aria-expanded='false'>
        <a id="CAT" class="dropdown-item " href="#Category" data-toggle="collapse" aria-expanded="false" ><span><i class="fa fa-cubes"></i><?php echo Arb('Category'); ?></span> </a>
      </li>

      <?php $getCat = getAlltable('ID,Name','categories','WHERE Parent !=0','AND Visibility = 1','Temp','DESC',5); ?>
        <!-- <div class=""> -->
          <ul class="dropdown-list collapse list-unstyled list-menu" id="Category">
            <?php foreach ($getCat as $CAT): ?>
              <li><a target="_blank" href="blog?cati=<?php echo $CAT['ID']; ?>?tP=<?php echo $CAT['Name']; ?>"> <?php echo $CAT['Name']; ?></a> </li>
            <?php endforeach; ?>
            <li><a style="font-weight:550;color:#999" href="Services?#Catmarketplace">See All</a> </li>
          </ul>
        <!-- </div> -->

        <li  aria-expanded='false'>
          <a id="TM" class="dropdown-item" href="#Template" data-toggle="collapse" aria-expanded="false" ><span><i class="fa fa-briefcase"></i><?php echo Arb('Template'); ?></span> </a>
        </li>

        <?php  $getTMP = getAlltable('ID,Name,Cat_ID','temp','WHERE Approve !=0','','View','DESC',5); ?>
          <!-- <div class=""> -->
            <ul class="dropdown-list collapse list-unstyled list-menu" id="Template">
              <?php foreach ($getTMP as $TMP): ?>
                <?php
                  $M  = getOne('Parent',"categories","WHERE ID = {$TMP['Cat_ID']}");
                  $MN = getOne("ID,Name",'Categories',"WHERE ID = {$M[0]['Parent']}");
                 ?>
                <li><a target="_blank" href="preview?V=<?php echo $MN[0]['Name']; ?>&P=<?php echo $TMP['Cat_ID']; ?>&Temp=<?php echo $TMP['ID']; ?>"> <?php echo $TMP['Name']; ?> </a> </li>
              <?php endforeach; ?>
              <li><a style="font-weight:550;color:#999" href="Blog?#_OURWORK">See All</a> </li>
            </ul>
          <!-- </div> -->

      <li>
        <a id="AboutMe" href="Services" data-move='.ftco-about' class="dropdown-item" >
          <span><i class="fa fa-star"></i><?php echo Arb('Services'); ?></span>
       </a>
      </li>

      <li>
        <a class="dropdown-item" href="about">
          <span><i class="fa fa-user"></i><?php echo Arb('About Us'); ?></span>
       </a>
      </li>

    </ul>

<div class="search-input">
  <input id="TEMP" type="text" name="GET_TEMP" onkeyup="GETTEMP()" value="" placeholder="<?php echo arb('Template Search'); ?>">
  <div class="scene">
    <div class="cube show-bottom">
      <div class="cube__face cube__face--front"><i data-feather='search'></i> </div>
      <div class="x cube__face cube__face--back"><i data-feather='x'></i></div>
      <div class="cube__face cube__face--right"><i data-feather='search'></i></div>
      <div class="x cube__face cube__face--left"><i data-feather='x'></i></div>
      <div class="cube__face cube__face--top"><i data-feather='search'></i></div>
      <div class="x cube__face cube__face--bottom"><i data-feather='search'></i></div>
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

</div>

<!-- /****  END FIXED MENU  ****/ -->

  <!-- /****  START FIXED CUBE  ****/ -->

  <div class="fixed-cube">

      <div class="move">
        <div class="scene">
          <div class="cube cube show-right">
            <div class="cube__face cube__face--front"><a href="#">التصاميم</a> </div>
            <div id="_contact" data-cont=".ContactUS" class="cube__face cube__face--back"><a href="#">اتصل بنا</a></div>
            <div class="cube__face cube__face--right"><a href="http://localhost/codexlab/"><i data-feather='home'></i></a> </div>
            <div class="cube__face cube__face--left"><a id="Cservices" data-move='.ftco-services' href="services">خدمـاتنـا</a></div>
            <div class="cube__face cube__face--top"><i class="click" data-feather='search' data-toggle="modal" data-target="#staticBackdrop"></i></div>
            <div class="cube__face cube__face--bottom"><a id="Cabout" data-move='.ftco-about' href="About">تعرف علينا</a></div>
          </div>
        </div>
      </div>

  </div>

<!-- /******** * SEARCH MODEL * ********/ -->

  <div class="search_model">
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
          </div>
          <div class="modal-body">
        <form id="CATSRCH" method="post">
            <div class="search_input">

              <div class="col input-group mb-2 search_tag" dir="rtl">

                <div class="input-group-prepend">
                  <div class="input-group-text"><i data-feather='search'></i> </div>
                </div>

                  <input type="text" class="form-control" id="TEMP_NAME" name="TEMP_NAME" onkeyup="SRCHTEMP()" placeholder="Template Name">

                  <select class="custom-select mr-sm-2 col-4" id="CAT_NAME" name="CAT_ID" dir="rtl" onchange="SRCHTEMP()">
                    <?php $CATP = getOne('ID,Name','categories',"WHERE Parent !=0 ","AND Block=0 "); ?>
                    <option selected value="0">القـسم ...</option>
                    <?php foreach ($CATP as $CP): ?>
                    <option value="<?php echo $CP['ID']; ?>"><?php echo $CP['Name']; ?></option>
                    <?php endforeach; ?>
                  </select>

                  <input id="SRCHSUB" type="submit" style="display:none;" name="CATSRCH">

              </div>

            </div>
              </form>
            <div class="container search_list">

              <ul id="OUT_LIST">

              </ul>

            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- /****  END FIXED CUBE  ****/ -->

<?php date_default_timezone_set("Africa/Cairo"); ?>
