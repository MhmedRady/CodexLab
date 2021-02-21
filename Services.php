<?php
    $pageTitle = 'Services';
    $body      = 1;
    $noNavbar  = 1;
    $StartUp   = 1;
    include 'inc.php';
?>
  <section class="SERV_top">
    <div class="hesr">
      <h3 class="ftco-animate"><span> <spam>Codex</spam>|lab </span> Designs </h3>
      <h5 class="ftco-animate"> Create the best Application & Logo for Your Business today  </h5>
      <button class="ftco-animate" type="button" name="button">Get Project</button>
    </div>
    <div class="serv_imgs ">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-6 _1 ftco-animate">
            <img src="layout/images/WEB/W2.png" alt="">
          </div>
          <div class="col-lg-7 col-10 _2 ftco-animate">
            <img src="layout/images/WEB/W2.png" alt="">
          </div>
          <div class="col-md-6 col-6 _3 ftco-animate">
            <img src="layout/images/WEB/W2.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

    <?php $path = 'layout/images/BACK/' ; ?>


        <!-- /**** OUR SERVICES ****/ -->

    <section id="_OURSERV" class="ftco-section ftco-services">
      <div class="overlay"></div>
      <div class="container n_b">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col col-lg-8 col-xl-8 heading-section ftco-animate text-center">
            <h2 class="mb-4">خدمات الموقع</h2>
            <img class="back-S" src="layout/images/black/B7.png" alt="">
            <p class="col">
              تصميم وتطوير مواقع ويب سريعة الاستجابة ، والعمل عبر مجموعة واسعة من الأجهزة ، من شاشات كمبيوتر سطح المكتب إلى الهواتف المحمولة. تصميم الويب سريع الاستجابة هو نهج يهدف إلى تصميم مواقع الويب لتوفير تجربة مشاهدة مثالية ، وسهولة القراءة والتنقل مع الحد الأدنى من تغيير الحجم .
            </p>
          </div>
        </div>
        <div class="container">

          <div class="row">
            <?php $SERV = getOne('*','Services','WHERE Approve = 1'); ?>

            <?php foreach ($SERV as $S): ?>

              <div class="col-12 col-lg-4 col-md-6 col-sm-10 ftco-animate marg">
                <div class="media d-block text-center block-6 services">
                  <div class="icon d-flex justify-content-center align-items-center mb-5"
                  <?php $Simg = "data/SERV/".$S['ID']."/".$S['img'];?>
                  style="background-image:url('<?php echo $Simg; ?>');background-size: cover;;">
                  </div>
                  <div class="media-body">
                    <h3 class="heading"><?php echo $S['Name']; ?></h3>
                    <p class="col">
                      <?php echo $S['Description'] ?>
                    </p>
                  </div>
                </div>
              </div>

            <?php endforeach; ?>

          </div>

        </div>
      </div>
    </section>

    <!-- /*************************************/ -->

          <!-- /* **** OUR PROJECTS **** */ -->

            <section id="Catmarketplace" class="ftco-section Projctes">
              <div class="overlay"></div>
            	<div class="container">
            		<div class="row justify-content-center mb-5 pb-3">
                  <div class="col-xl-7 col-md heading-section ftco-animate text-center">
                    <h2 class="mb-4">Explore Our marketplace</h2>
                    <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>

                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                </div>
            	</div>

                <!-- /* SELCTORS OF OUR PROJECTS */ -->

                <div class="CAT_select select container ftco-animate">

                  <div class="row">
                    <?php $M = getAlltable('ID,Name','categories',"WHERE Parent = 0 ",'AND Visibility = 1','temp','DESC',2) ; ?>
                      <button data-cat='.all' aria-controls="true" class="active col-4" type="btn btn-outline-primary btn-sm" name="button"><img src="layout\images\svg\8.svg" alt=""><span> All</span> </button>
                      <?php foreach ($M as $M): $MID = $M['ID']; ?>
                        <button id="CAT_<?php echo $MID; ?>"  onclick=" ('#CAT_<?php echo $MID; ?>','V_CAT','#C_<?php echo $MID; ?>','cat')" data-cat='.C_<?php echo $M['ID']; ?>' aria-controls="false" class="col-4" type=" btn btn-outline-danger btn-sm" name="button"><img src="<?php if($M['ID']==5){echo "layout\images\svg\\6.svg";}else{echo "layout\images\svg\\7.svg";}?>" alt="">
                          <?php if ($M['ID']==5): ?>
                            <span> Graphic </span>
                            <?php else: ?>
                            <span> Website </span>
                          <?php endif; ?>
                          </button>
                      <?php endforeach; ?>

                  </div>

                </div>

            	<div class="container-wrap">

            		<div class="row no-gutters d-flex view">

                  <!-- /*********** ** GET CATEGORY ** ***********/ -->

                  <?php
                   /**
                    GET WEB CATEGORY DATA
                   **/
                   ?>

          <?php $P = getAlltable('*','Categories',"WHERE Parent = 1" ,'AND Visibility = 1','Temp','DESC',0); ?>
          <?php foreach ($P as $P): ?>
            <?php
              $MN = getOne("ID,Name",'Categories',"WHERE ID = {$P['Parent']}");
             ?>
            <?php $PID = $P['ID']; $CAT = $P['Name']; $CIMG = $P['img']; $CPAT="data/PCAT/$PID/$CIMG"; ?>
            <div class="C_<?php echo $MN[0]['ID']; ?> card col-sm-6 col-lg-6 col-md-12 ftco-animate CAT_parent">
              <div class="row no-gutters d-flex">
                <a href="blog.php?C=<?php echo $P['ID']; ?>&CName=<?php echo $CAT; ?>" class="img col-md-6" style="background-image: url('<?php echo $CPAT; ?>');"><span><?php echo $CAT; ?></span> </a>
                <div class="text col-md-6">
                  <div class="card-body">
                    <p><?php echo $P['Description']; ?></p>
                    <div class="go"><button class="btn badge btn-outline-primary btn-sm" type="button" name="button">
                      <a href="blog.php?C=<?php echo $P['ID']; ?>&CName=<?php echo $CAT; ?>"><i class="fa fa-eye"></i> عرض التصاميم</a></button>
                      <button class="btn badge btn-outline-dark btn-sm" value="<?php echo $P['ID']; ?>" type="button" name="CAT">
                      <a class="last" > <i class="fa fa-get-pocket"></i> طلب تصميم</a> </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>

          <?php
           /**
            //  GET GRAPHIC CATEGORY DATA
           **/ ?>

          <?php $P = getAlltable('*','Categories',"WHERE Parent = 5" ,'AND Visibility = 1','Temp','DESC',0); ?>
          <?php foreach ($P as $P): ?>
            <?php
              $MN = getOne("ID,Name",'Categories',"WHERE ID = {$P['Parent']}");
             ?>
            <?php $PID = $P['ID']; $CAT = $P['Name']; $CIMG = $P['img']; $CPAT="data/PCAT/$PID/$CIMG"; ?>
            <div class="C_<?php echo $MN[0]['ID']; ?> card col-sm-6 col-lg-6 col-md-12 ftco-animate CAT_parent">
              <div class="row no-gutters d-flex">
                <a href="blog.php?C=<?php echo $P['ID']; ?>&CName=<?php echo $CAT; ?>" class="img col-md-6" style="background-image: url('<?php echo $CPAT; ?>');"><span><?php echo $CAT; ?></span> </a>
                <div class="text col-md-6">
                  <div class="card-body">
                    <p><?php echo $P['Description']; ?></p>
                    <div class="go"><button class="btn badge btn-outline-primary btn-sm" type="button" name="button">
                      <a href="blog.php?C=<?php echo $P['ID']; ?>&CName=<?php echo $CAT; ?>"><i class="fa fa-eye"></i> عرض التصاميم</a></button>
                      <button class="btn badge btn-outline-dark btn-sm" value="<?php echo $P['ID']; ?>" type="button" name="CAT">
                      <a class="last" > <i class="fa fa-get-pocket"></i> طلب تصميم</a> </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>

            		</div>
            	</div>

        <!-- /**********************************************************************************/ -->

            </section>

        		<section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url();" data-stellar-background-ratio="0.5">
              <!-- <div class="bacV">
                <video id="BV" autoplay muted loop poster="posterimage.jpg">
                  <source src="layout/V/BV.mp4" type="video/mp4">
                </video>
              </div> -->
            	<div class="overlay"></div>
              <div class="container">
                <div class="row justify-content-center">
                	<div class="col-md-10">
                		<div class="row">
        		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
        		            <div class="block-18 text-center">
        		              <div class="text">
                            <div class="icon"><span class="flaticon-web-programming"></span></div>
        		              	<strong class="number" data-number="100">0</strong>
        		              	<span>Web Template</span>
        		              </div>
        		            </div>
        		          </div>
        		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
        		            <div class="block-18 text-center">
        		              <div class="text">
        		              	<div class="icon"><span class="flaticon-graphic-designer"></span></div>
        		              	<strong class="number" data-number="85">0</strong>
        		              	<span>Graphic Templates</span>
        		              </div>
        		            </div>
        		          </div>
        		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
        		            <div class="block-18 text-center">
        		              <div class="text">
        		              	<div class="icon"><span class="flaticon-rating"></span></div>
        		              	<strong class="number" data-number="10567">0</strong>
        		              	<span>Our Vistors</span>
        		              </div>
        		            </div>
        		          </div>
        		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
        		            <div class="block-18 text-center">
        		              <div class="text">
        		              	<div class="icon"><span class="flaticon-certification"></span></div>
        		              	<strong class="number" data-number="900">0</strong>
        		              	<span>Completion</span>
        		              </div>
        		            </div>
        		          </div>
        		        </div>
        		      </div>
                </div>
              </div>
            </section>


        <?php
        $footerBack='AB';
            include $tpl  . 'Footer.inc';
        ?>
