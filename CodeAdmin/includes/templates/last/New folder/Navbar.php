<?php
$log = !isset($_SESSION['Client']) ?0:1;
 ?>

<!-- /***** SRART FIXED NAVBAR *****/ -->

<!-- /****************************************** -->

  <div class="header">

    <nav class="navbar navbar-dark bg-dark">
      <span>

      </span>
        <a class="navbar-brand" href="#">
          <img src="layout/imgs/8.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
          <span>Bootstrap</span>
        </a>
        <a class="menu">
          <svg class="bi bi-gear-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 01-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 01.872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 012.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 012.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 01.872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 01-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 01-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 100-5.86 2.929 2.929 0 000 5.858z" clip-rule="evenodd"/>
          </svg>
        </a>

                <ul class="nav justify-content-end">

                    <li id="search" class="nav-item">
                      <!-- <div class="Sput">
                        <input type="text" name="" value="">
                        <span></span>
                      </div> -->
                      <span class="nav-link found" href="#">
                        <svg class="bi bi-search" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 011.415 0l3.85 3.85a1 1 0 01-1.414 1.415l-3.85-3.85a1 1 0 010-1.415z" clip-rule="evenodd"/>
                            <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 100-11 5.5 5.5 0 000 11zM13 6.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z" clip-rule="evenodd"/>
                        </svg>
                      </span>
                    </li>
                    <li id="bell" class="nav-item">
                      <span class="nav-link" href="#">
                        <svg class="bi bi-bell" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path d="M8 16a2 2 0 002-2H6a2 2 0 002 2z"/>
                          <path fill-rule="evenodd" d="M8 1.918l-.797.161A4.002 4.002 0 004 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 00-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 111.99 0A5.002 5.002 0 0113 6c0 .88.32 4.2 1.22 6z" clip-rule="evenodd"/>
                        </svg>
                      </span>
                    </li>
                    <li id="user" class="nav-item dropdown">
                      <span class="user nav-link dropdown-item" href="#"><i class="fa fa-user"></i> <i class="fa fa-caret-down"></i> </span>
                    </li>

                </ul>


    </nav>


  </div>

<!-- /***** END FIXED NAVBAR *****/ -->

<!-- /***** SRART FIXED MENU *****/ -->
<?php $get = getOne('*','categories',"WHERE Parent = 0",'AND Visibility = 1',"AND Block != 0");?>
<?php $countM  = countof('ID','categories',"WHERE Parent = 0 "," AND Block !=0 AND Visibility = 1 ");?>
  <div class="menuoverlay"></div>
  <div class="fixed-menu">
  <!-- <i disabled class="fa fa-gear open-menu"></i> -->
  <div class="menu-Logo">
    <span>LORD</span>
    <img src="layout/imgs/4.png" alt="">
    <span>Mark</span>
  </div>
      <div class="list">



                  <h3 class="fm-1"></h3>

                  <h3 class="fm-3">
                    <a class="dropdown-item" href="start.php"><i class="fa fa-home" aria-hidden="true"></i>  <?php echo lang("home"); ?></a>
                  </h3>

                  <h3 id="Adv" data-scroll='#itms' class="fm-3">
                    <a class="dropdown-item" ><i class="fa fa-tags" aria-hidden="true"></i>  <?php echo lang('الاعلانات'); ?></a>
                  </h3>

                  <h3 data-down='.offers' class="fm-3">
                    <a class="dropdown-item"><i class="fa fa-diamond" aria-hidden="true"></i>  <?php echo lang('عرض خاص'); ?>
                      <svg class="bi bi-caret-down" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3.204 5L8 10.481 12.796 5H3.204zm-.753.659l4.796 5.48a1 1 0 001.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 00-.753 1.659z" clip-rule="evenodd"/>
                      </svg>
                    </a>
                  </h3>

                  <div class="offers menu">
                    <ul>

                      <li><a id="supr" data-scroll='.supr'>Supermarket</span> </li>
                      <li><a id="hlth" data-scroll='.hlth'>Health</span> </li>
                      <li><a id="hmtl" data-scroll='.hmtl'>Home Tools</span> </li>
                      <li><a id="mnfs" data-scroll='.mnfs'>Men's Fashion</span> </li>
                      <li><a id="wmfs" data-scroll='.wmfs'>Women's Fashion</span> </li>

                    </ul>
                  </div>
                  <h3 id="shop" data-down='.<?php echo $get[1]['Name']; ?>' class="fm-2">
                      <a class="dropdown-item" ><i class="fa fa-shopping-cart" aria-hidden="true"></i>  <?php echo $get[1]['Name']; ?>
                        <svg class="bi bi-caret-down" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M3.204 5L8 10.481 12.796 5H3.204zm-.753.659l4.796 5.48a1 1 0 001.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 00-.753 1.659z" clip-rule="evenodd"/>
                        </svg>
                      </a>
                  </h3>

                  <div class="<?php echo $get[1]['Name']; ?> menu">
            <?php $count = countof('ID','categories',"WHERE Parent = {$get[1]['ID']}");  ?>
            <?php $getP = getAlltable('ID,Name,Parent,Ordering,Brands,LENGTH(Name) AS COUNTS','categories',"WHERE Parent = {$get[1]['ID']} "," AND Block !=0 AND Visibility = 1 ",'Ordering','DESC'); ?>
                    <ul>
        <?php foreach ($getP as $P): ?>

            <li><a href="#"><?php echo $P['Name']; ?></a> <span class="badge badge-secondary"><?php echo $P['Ordering'] ?></span> </li>

        <?php endforeach; ?>

                    </ul>
                  </div>

                  <h3 data-down='.<?php echo $get[0]['Name']; ?>' class="fm-2">
                    <a class="dropdown-item"><i class="fa fa-sitemap" aria-hidden="true"></i>  <?php echo $get[0]['Name']; ?>
                      <svg class="bi bi-caret-down" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3.204 5L8 10.481 12.796 5H3.204zm-.753.659l4.796 5.48a1 1 0 001.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 00-.753 1.659z" clip-rule="evenodd"/>
                      </svg>
                    </a>
                  </h3>
                  <div class="<?php echo $get[0]['Name']; ?> menu">
            <?php $count = countof('ID','categories',"WHERE Parent = {$get[1]['ID']}");  ?>
            <?php $getP = getAlltable('ID,Name,Parent,Ordering,Brands,LENGTH(Name) AS COUNTS','categories',"WHERE Parent = {$get[0]['ID']} "," AND Block !=0 AND Visibility = 1 ",'Ordering','DESC'); ?>
                    <ul>
        <?php foreach ($getP as $P): ?>

            <li><a href="#"><?php echo $P['Name']; ?></a> <span class="badge badge-secondary"><?php echo $P['Ordering'] ?></span> </li>

        <?php endforeach; ?>

                    </ul>
                  </div>

                  <h3 data-down='.<?php echo $get[2]['Name']; ?>' class="fm-3">
                    <a class="dropdown-item"><i class="fa fa-user-md" aria-hidden="true"></i> <?php echo $get[2]['Name']; // CHECK NAME AJAX PAGE ?>
                      <svg class="bi bi-caret-down" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3.204 5L8 10.481 12.796 5H3.204zm-.753.659l4.796 5.48a1 1 0 001.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 00-.753 1.659z" clip-rule="evenodd"/>
                      </svg>
                      </a>
                  </h3>

                  <div class="<?php echo $get[2]['Name']; ?> menu">
            <?php $count = countof('ID','categories',"WHERE Parent = {$get[1]['ID']}");  ?>
            <?php $getP = getAlltable('ID,Name,Parent,Ordering,Brands,LENGTH(Name) AS COUNTS','categories',"WHERE Parent = {$get[2]['ID']} "," AND Block !=0 AND Visibility = 1 ",'Ordering','DESC'); ?>
                    <ul>
        <?php foreach ($getP as $P): ?>

            <li><a href="#"><?php echo $P['Name']; ?></a> <span class="badge badge-secondary"><?php echo $P['Ordering'] ?></span> </li>

        <?php endforeach; ?>

                    </ul>
                  </div>

                  <h3 data-down='.<?php echo $get[3]['Name']; ?>' class="fm-3">
                    <a class="dropdown-item"><i class="fa fa-medkit" aria-hidden="true"></i> <?php echo $get[3]['Name']; ; // Found Member?>
                      <svg class="bi bi-caret-down" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3.204 5L8 10.481 12.796 5H3.204zm-.753.659l4.796 5.48a1 1 0 001.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 00-.753 1.659z" clip-rule="evenodd"/>
                      </svg>
                      </a>
                  </h3>

                  <div class="<?php echo $get[3]['Name']; ?> menu">
            <?php $count = countof('ID','categories',"WHERE Parent = {$get[3]['ID']}");  ?>
            <?php $getP = getAlltable('ID,Name,Parent,Ordering,Brands,LENGTH(Name) AS COUNTS','categories',"WHERE Parent = {$get[1]['ID']} "," AND Block !=0 AND Visibility = 1 ",'Ordering','DESC'); ?>
                    <ul>
        <?php foreach ($getP as $P): ?>

            <li><a href="#"><?php echo $P['Name']; ?></a> <span class="badge badge-secondary"><?php echo $P['Ordering'] ?></span> </li>

        <?php endforeach; ?>

                    </ul>
                  </div>

                  <h3 class="fm-3">
                    <a class="dropdown-item" target="_blank" href="Categories.php?do=Found"><i class="fa fa-cubes" aria-hidden="true"></i> <?php echo lang('ايجاد قسم'); //Found Category?>
                      <svg class="bi bi-caret-down" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3.204 5L8 10.481 12.796 5H3.204zm-.753.659l4.796 5.48a1 1 0 001.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 00-.753 1.659z" clip-rule="evenodd"/>
                      </svg>
                     </a>
                  </h3>

                  <h3 class="fm-3">
                    <a class="dropdown-item" target="_blank" href="Brand.php?do=Brand"><i class="fa fa-star" aria-hidden="true"></i> <?php echo lang('ايجاد براند'); // Found Brand ?>  </a>
                  </h3>

                  <h3 class="fm-3">
                    <a class="dropdown-item" target="_blank" href="Items.php?do=Manege"><i class="fa fa-tags" aria-hidden="true"></i> <?php echo lang('ايجاد اعلان'); // Found Brand ?>  </a>
                  </h3>

                  <h3 class="fm-3 log">
                    <a class="dropdown-item" href="logout.php"><?php echo lang("تسجيل الخروج"); ?>  <i class="fa fa-sign-out" aria-hidden="true"></i></a>
                  </h3>

                  <hr>

                <h4>
                   for more Contact Us
                </h4>

      </div>
  </div>

<!-- /***** SRART FIXED MENU *****/ -->
<!--    START SCROLI BTN    -->

<div class="scroliup">
<a class="scrolltop" href="#"><i class="fa fa-caret-square-o-up" aria-hidden="true"></i></a>
</div>

 <!--   END SCROLI BTN    -->
