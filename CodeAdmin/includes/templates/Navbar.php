
<!-- /***************************************************************************/ -->
<div class="head">
  <nav class="header navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" >
    <div class="container">
      <!-- <span class="flaticon-pizza-1 mr-1"> -->
      <a class="navbar-brand" href="Dashboard.php"><img src="<?php echo $img ?>C.jpg" alt=""><span>odex</span><span class="clip"></span></a>
      <button class="click navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="gear" data-feather='list'></span>
      </button>

      <div class="link collapse navbar-collapse" id="ftco-nav">

        <ul class="navbar-nav ml-auto">

            <li class="nav-item"><a href='Dashboard.php' class="nav-link">Home</a></li>
            <li class="nav-item"><a id="services" href="services.php" class="nav-link"><i class="fa fa-comments-o"></i> </a></li>
            <li class="nav-item"><a id="services" href="services.php" class="nav-link"><i class="fa fa-bell-o"></i> </a></li>
            <li class="nav-item"><a href="menu.php" class="nav-link"><img src="<?php echo $img; ?>4.png" alt=""> </a></li>

        </ul>

      </div>

    </div>
  </nav>

  <!-- END nav -->

<hr class="hr">


<!-- /******* END NAVBAR *******/ -->

<!-- /****  START FIXED MENU  ****/ -->

    <div class="fixedmenu owl-stage-outer" >
      <div class="admin">
        <img src="<?php echo $img; ?>4.png" alt="">
        <span> <span id="adN"><?php echo $_SESSION['myadmin'] ?></span> <small><?php echo $_SESSION['ID'] ?></small> </span>
      </div>

        <div class="intro-menu">

          <ul>
            <li><a href="Dashboard.php"><i data-feather='home'></i> Home </a> </li>
            <li><a href="categories.php"><i class="fa fa-cubes"></i> categories</a> </li>
            <li><a href="services.php"><i class="fa fa-star"></i> services</a> </li>
            <li><a href="Works.php"><i class="fa fa-briefcase"></i> Templates</a> </li>
            <li class="op-list"><a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-plus-circle"></i> add new</a> </li>
            <!-- <div class=""> -->
              <ul class=" list-CODEX collapse list-unstyled" id="pageSubmenu">
                <li><a href="categories.php?cat=NewCat">New Category</a> </li>
                <li><a href="services.php?srv=newSRV">New Service</a> </li>
                <li><a href="works.php?TempS=addNew">New Template</a> </li>
                <li><a href="#">New Project</a> </li>
              </ul>
            <!-- </div> -->
            <li><a href="logout.php"><i class="fa fa-sign-out"></i> logout</a> </li>

          </ul>

        </div>

      </div>



</div>

<!-- /****  END FIXED MENU  ****/ -->
