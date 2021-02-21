<?php
    $pageTitle = 'Template';
    $body      = 1;
    $noNavbar  = 1;
    $StartUp   = 1;
    include 'inc.php';
?>

<div class="cover">
  <img src="layout/images/LOGO/333.png" alt="">
  <span>ODE</span>
  <img src="layout/images/LOGO/7.png" alt="">
  <span>LAB</span>
</div>

<section class="topic">
  <div class="overlay"></div>
  <div class="container _top_link">
    <div class="row">
      <div dir="rtl" class="col-sm link">
        <h3> معرض الاعمال </h3>
          <code class="_tabs">
            <a href="index">الرئيــسية</a> / <span> معرض الاعمال </span>
          </code>
        </div>
    </div>
  </div>

  <div class="fram fram-top">

    <!-- /************************************************/ -->

    <div class="_desktop">
      <img class="img-responsive lazy" src="layout/images/fD.jpg">
        <div class="desktop-content">
            <img src="layout/images/web/dk1.jpg" class="img-responsive lazy" />
            <img src="layout/images/web/dk3.png" class="img-responsive lazy" />
        </div>
      </div>
      <div class="_mobile">
        <img src="layout/images/fPh.jpg" class="img-responsive"/>
        <div class="mobile-content">
          <img src="layout/images/web/mo1.png" class="img-responsive lazy" />
          <img src="layout/images/web/mo.jpg" class="img-responsive lazy" />
        </div>
      </div>
    <!-- /************************************************/ -->

    <!-- </div> -->
  </div>

</section>

    <section id="_OURWORK" class="ftco-section Works">

      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">معرض أعمالنا</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>

            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div id="WORKS" class="row d-flex moverow">

        <?php $TEMP = getAlltable('*',"temp","WHERE Approve = 1",'','ID','DESC',3); ?>
        <?php $allcount = countof('ID','temp',"WHERE Approve = 1"); ?>

          <?php foreach ($TEMP as $T): $TN = $T['Name']; $ID = $T['ID'] ;
            $path = "data/TEMP/$ID/img/"; ?>

          <?php
            $M = getOne('Parent',"categories","WHERE ID = {$T['Cat_ID']}");
            $MN = getOne("ID,Name",'Categories',"WHERE ID = {$M[0]['Parent']}");
           ?>

            <div class="_Temp col-xl-4 col-lg-5 col-md-6 col-11 col-sm-8 d-flex ftco-animate">

              <div class="blog-entry align-self-stretch">

                <div class="box">
                  <a  class="box_cat"><?php echo $MN[0]['Name']; ?>  </a>
                  <!-- CAROUSEL TOW -->

                  <div id="carousel_<?php echo $ID; ?>" class="carousel slide carousel-fade" data-ride="carousel">
                    <?php  if ( !empty($T['img_3'])): ?>
                      <ol class="carousel-indicators">
                        <?php // for ($g=0; $g <=2 ; $g++) { ?>
                            <li data-target="#carousel_<?php echo $ID; ?>" data-slide-to="0" class="active"></li>
                          <?php if (!empty($T['img_2'])): ?>
                            <li data-target="#carousel_<?php echo $ID; ?>" data-slide-to="1"></li>
                          <?php endif; ?>
                            <?php if ( !empty($T['img_3']) ): ?>
                            <li data-target="#carousel_<?php echo $ID; ?>" data-slide-to="2"></li>
                          <?php endif; ?>
                        <?php // } ?>
                      </ol>
                    <?php endif; ?>

                    <div class="carousel-inner">

                      <?php

                        for ($i=1; $i <4 ; $i++) {
                          $img = $T['img_'.$i];?>
                          <?php if (!empty($img)) { ?>
                            <div class="carousel-item <?php if($i == 1){echo 'active';} ?>">
                              <a target="_blank" href="Preview?V=<?php echo md5($MN[0]['Name']); ?>&P=<?php echo md5($T['Cat_ID']); ?>&Temp=<?php echo sha1($ID); ?>"><img src="<?php echo $path.$img ?>" ></a>
                            </div>
                          <?php } ?>
                         <?php } ?>

                    </div>

                    <div class="fixed_info">
                      <i class="info fa fa-exclamation-circle unlock" role="combobox" aria-expanded="false"></i>
                      <p class="col-12 data"><?php echo $T['Description']; ?></p>
                    </div>

                    <div class="get">

                      <button id="go_content" data-move='#CONTENT' class="btn badge btn-outline-dark btn-sm cont" type="button" value="<?php echo $ID; ?>" name="button" title="Content">
                        <a id="go_content" class="last" data-move='#CONTENT' href="#"><i class="fa fa-get-pocket"></i></a>
                      </button>

                    </div>

                  </div>

                </div>

                <?php $AID = $T['Admin_ID']; ?>
                <?php $A = getOne('username,ID','Admin',"WHERE ID = $AID",'' ); ?>
                <?php $view = $T['View']; ?>

                <div class="text py-4 d-block">

                  <div class="meta">
                    <div class="date"><a href="#"><?php echo date('M j ',strtotime($T['Date'])); ?></a></div>
                    <div><a href="#"><?php echo $A[0]['username']; ?></a></div>

                    <div>
                      <?php if ($view >99): ?>
                        <a class="meta-chat badge badge-danger"><span class="icon-eye"></span>  +99</a>
                        <?php else: ?>
                          <a class="meta-chat"><span class="icon-eye"></span>  <?php echo  $view; ?></a>
                      <?php endif; ?>
                    </div>
                    <div><a ><i class="fa fa-thumbs-o-up"></i> <?php echo $T['Likes']; ?></a></div>
                  </div>

                  <h3 class="heading mt-2">
                    <a target="_blank" href="Preview?V=<?php echo md5($MN[0]['Name']); ?>&P=<?php echo md5($T['Cat_ID']); ?>&Temp=<?php echo sha1($ID); ?>"><?php echo $T['Name']; ?>
                    </a>
                  </h3>

                  <p class="length_p row Tools">
                    <?php $TOLS = explode(',',$T['Tool']); $tC = count($TOLS); for ($TO=0; $TO <$tC ; $TO++) { ?>
                      <?php $TOOL = getOne('*','Tools',"WHERE ID = $TOLS[$TO]",''); ?>
                      <?php foreach ($TOOL as $TOL): $TolN = $TOL['Name']; $Tolimg = $TOL['img'];  $TPATH = "Data\TOL\\$TolN\\$Tolimg" ?>
                        <a href="#"><img src="<?php echo $TPATH; ?>" alt=""></a>
                      <?php endforeach; ?>
                    <?php } ?>
                   </p>

                </div>

              </div>

            </div>

            <?php endforeach; ?>

  <?php $getID = getAlltable('ID',"temp","WHERE Approve = 1",'','ID','DESC',3); ?>

  <?php foreach ($getID as $yfy): ?>

    <?php $postID = $yfy['ID']; ?>

  <?php endforeach; ?>

  </div>

  <button id="_Temp_more" type="button" class="_seemore id_<?php echo $ID; ?>" name="button">
    <span class="_show_more" id="<?php echo $postID ; ?>">مشاهدة المزيد</span>
    <span class="_loader"><img src="layout/images/gif/preder.gif" alt=""> </span>
  </button>

<!-- /*******************************************************************/ -->

      </div>
    </section>

    <?php
    $footerBack='AB';
        include $tpl  . 'Footer.inc';
    ?>
