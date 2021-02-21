<?php
/*

================================================================================
=====  DASHBOARD PAGE
================================================================================

*/

  ob_start();

      session_start();

      $pageTitle = 'Dashboard';
      $dash      = 1;
      $noNavbar  = 1;
      $table     = 1;
      $StartUp   = 1;
      include "inc.php";
       ?>
      <?php if (isset($_SESSION['myadmin'])): ?>
        <?php echo $_SESSION['myadmin'] . $_SESSION['ID'] ?>
        <a href="LOGOUT.php">logout</a>
    <section class="dashpag tabs">
      <h3 class="pag-T"><?php Ptitle(); ?></h3>
      <div class="container">
        <div class="row">

          <div class="short col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-Temp">
              <a class="inner" href="Works.php">
                <?php $count = countof('ID','Temp','',''); ?>
                <h3><?php echo $count; ?></h3>
                <p>Templates</p>
              </a>
              <div class="icon">
                <i class="fa fa-briefcase"></i>
              </div>
              <a href="works.php?TempS=addNew" class="small-box-footer">Add New <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="short col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-ORD">
              <a class="inner">
                <h3>150</h3>
                <p>Orders</p>
              </a>
              <div class="icon">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bag-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M14 5H2v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5zM1 4v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4H1z"/>
                  <path d="M8 1.5A2.5 2.5 0 0 0 5.5 4h-1a3.5 3.5 0 1 1 7 0h-1A2.5 2.5 0 0 0 8 1.5z"/>
                  <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z"/>
                  <path fill-rule="evenodd" d="M7.5 10a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-2z"/>
                </svg>
              </div>
              <a href="#" class="small-box-footer">Add New <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="short col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-SRV">
              <a href="Services.php?do=all" class="inner">
                <?php $count = countof('ID','Services','',''); ?>
                <h3><?php echo $count; ?></h3>
                <p>Services</p>
              </a>
              <div class="icon">
                <i class="fa fa-star-o"></i>
              </div>
              <a href="services.php?srv=newSRV" class="small-box-footer">Add New <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="short col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-CAT">
              <a href="categories.php?cat=All" class="inner">
                <?php $count = countof('ID','Categories','',''); ?>
                <h3><?php echo $count; ?></h3>
                <p>Categories</p>
              </a>
              <div class="icon">
                <i data-feather='layers'></i>
              </div>
              <a href="categories.php?cat=NewCat" class="small-box-footer">Add New <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="short col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-STR">
              <a class="inner">
                <h3>150</h3>
                <p>Started</p>
              </a>
              <div class="icon">
                <i data-feather='clock'></i>
              </div>
              <a href="#" class="small-box-footer">Add New <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="short col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box Web">
              <a href="categories.php?cat=All&main=1" class="inner">
                <?php $webP = getOne('Temp','categories','WHERE ID = 1',''); ?>
                <h3><?php echo $webP[0]['Temp']; ?></h3>
                <p>Web Temp</p>
              </a>
              <div class="icon">
                <i class="fa fa-google-wallet"></i>
              </div>
              <a href="categories.php?cat=All&main=1" class="small-box-footer">All Data <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="short col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box Graphic">
              <a href="categories.php?cat=All&main=5" class="inner">
                <?php $GRPHP = getOne('Temp','categories','WHERE ID = 5',''); ?>
                <h3><?php echo $GRPHP[0]['Temp']; ?></h3>
                <p>Graphic Temp</p>
              </a>
              <div class="icon">
                <i class="fa fa-paint-brush"></i>
              </div>
              <a href="categories.php?cat=All&main=5" class="small-box-footer">All Data <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!-- <div class="short col-lg-3 col-6"> -->
            <!-- small box -->
            <!-- <div class="small-box bg-WY">
              <a class="inner">
                <?php $count = countof('ID','Temp','WHERE Cat_ID = 5',''); ?>
                <h3><?php echo $count; ?></h3>
                <p>Why US</p>
              </a>
              <div class="icon">
                <i class="fa fa-contao "></i>
              </div>
              <a href="#" class="small-box-footer">Add New <i class="fa fa-arrow-circle-right"></i></a>
            </div> -->
          <!-- </div> -->

          <div class="short col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-TOL">
              <a class="inner" href="Tools.php?tol=All">
                <h3>150</h3>
                <p>Tools</p>
              </a>
              <div class="icon">
                <i class="fa fa-bug"></i>
              </div>
              <a href="#" class="small-box-footer">Add New <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

        </div>

<!-- /*****************************************************/ -->

    <div class="rols">
      <div class="container">
        <h3 class="avr">Average Engine</h3>
        <div class="row">
          <div class="_col col-md-6 col-12 col">
            <div class="mor_tmp">
              <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">Category Average</th>
                  </tr>
                </thead>
                <tbody>
                  <?php  $yst = getAlltable('Name,view,likes,Yview,Ylike','categories',"",'','view','DESC',3); ?>
                  <?php foreach ($yst as $yst): ?>
                    <?php
                      $Name = $yst['Name'];$V = $yst['view'];$K = $yst['likes'];$YV = $yst['Yview'];$YK = $yst['Ylike'];
                      $UPK  = $K >= $YK ? 'up':'down';
                      $UPV  = $V >= $YV ? 'up':'down';
                     ?>
                    <tr>
                      <td>
                        <div class="yaster">
                          <div class="row">
                            <div class="info col-sm-6 col-xs-6"><abbr class="avr_name"><?php echo $Name ?></abbr>
                              <time>Yesterday</time>
                            </div>
                            <div class="changes col-sm-6 col-xs-6">
                              <!-- /* VIEWS Average */ -->
                              <div class="value up"><i class="fa fa-caret-up hidden-sm hidden-xs"></i> <?php echo $YV ?>.00</div>
                              <div class="change hidden-sm hidden-xs">+4.95 (3.49%)</div>
                              <!-- /* LIKES Average */ -->
                              <div class="value up"><i class="fa fa-caret-up hidden-sm hidden-xs"></i> <?php echo $YK ?>.00</div>
                              <div class="change hidden-sm hidden-xs"><samp>+4.95</samp> <samp>(3.49%)</samp> </div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="stock current-price">
                          <div class="yaster">
                            <div class="row">
                              <div class="info col-sm-6 col-xs-6"><abbr class="avr_name"><?php echo $Name ?></abbr>
                                <time>Today</time>
                              </div>
                              <div class="changes col-sm-6 col-xs-6">
                                <!-- /* VIEWS Average */ -->
                                <div class="value <?php echo $UPV ?>"><i class="fa fa-caret-<?php echo $UPV ?> hidden-sm hidden-xs"></i> <?php echo $V ?>.00</div>
                                <div class="change hidden-sm hidden-xs">+4.95 (3.49%)</div>
                                <!-- /* LIKES Average */ -->
                                <div class="value <?php echo $UPK ?>"><i class="fa fa-caret-<?php echo $UPK ?> hidden-sm hidden-xs"></i> <?php echo $K ?>.00</div>
                                <div class="change hidden-sm hidden-xs">+4.95 (3.49%)</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                  <?php endforeach; ?>


                </tbody>
              </table>
            </div>
          </div>
          <div class="_col col-md-6 col-12 col">
            <div class="mor_seen">
              <div class="custom-bar-chart">
                <ul class="y-axis">
                  <li><span>1000+</span></li>
                  <li><span>500</span></li>
                  <li><span>200</span></li>
                  <li><span>100</span></li>
                  <li><span>50</span></li>
                  <li><span>0</span></li>
                </ul>
                <?php $Tavr = getAlltable('Name,view','temp','','','view','DESC',5); ?>

                <?php foreach ($Tavr as $T): ?>
                  <div class="bar">
                    <div class="title _T"><?php echo $T['Name']; ?></div>
                    <?php $pres = ($T['view']*100)/1000 ; $pres = $T['view'] >= 1000 ? '100%' : "$pres%" ; ?>
                    <div class="value tooltips" data-original-title="8.500" data-toggle="tooltip" data-placement="top" style="height:<?php echo $pres ?>"><?php echo $pres ?></div>
                  </div>
                <?php endforeach; ?>

              </div>
              <!--custom chart end-->
            </div>
          </div>
          <div class="_col col-md-6 col-12 col">
            <div class="mor_cat">
              <table class="table table-striped table-dark">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>
                      <div class="progs">
                        <span style="width:80%;"></span>
                      </div>
                    </td>
                    <td>
                      <div class="avr">
                        <span></span>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="_col col-md-6 col-12 col">
            <div class="mor_cat">

              <div class="SRV-table">
                <table class="table table-striped table-dark">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>
                        <div class="progs">
                          <span style="width:20%;"></span>
                        </div>
                      </td>
                      <td>
                        <div class="avr">
                          <span></span>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Larry</td>
                      <td>the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
              </div>

            </div>
          </div>
          <div class="_col col-md-6 col-12 col">
            <div class="mor_cat">

            </div>
          </div>
        </div>
      </div>
    </div>

<!-- /********************************************************/ -->
      </div>
    </section>
      <?php else: ?>
        <?php print_r($_SESSION); ?>
      <?php  header('location:logphp.php'); ?>
      <?php endif; ?>

      <?php include $tpl . 'footer.inc'; ?>

  <?php   ob_end_flush();  // Release The Output ?>
