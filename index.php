
<?php
    $pageTitle = 'Codex|LAB';
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
<section class="_top" style="background-image:url(layout/images/Back.jpg);">
  <div class="logo">
    <small>CREATIVE</small>
    <img src="layout/images/LOGO/tc.png" alt="">
  </div>
  <div class="top_body">
    <div class="container">
      <div class="_span">
        <span id="S_1" class="col-md-5">
          <?php
            for ($i=0; $i <7 ; $i++) {
              ?>
                <?php if ($i == 0): ?>
                  <li id="W_<?php echo $i ?>">W</li>
                <?php endif; ?>
                <?php if ($i == 1): ?>
                  <li id="W_<?php echo $i ?>">e</li>
                <?php endif; ?>
                <?php if ($i == 2): ?>
                  <li id="W_<?php echo $i ?>">b</li>
                <?php endif; ?>
                <?php if ($i == 3): ?>
                  <li id="W_<?php echo $i ?>">s</li>
                <?php endif; ?>
                <?php if ($i == 4): ?>
                  <li id="W_<?php echo $i ?>">i</li>
                <?php endif; ?>
                <?php if ($i == 5): ?>
                  <li id="W_<?php echo $i ?>">t</li>
                <?php endif; ?>
                <?php if ($i == 6): ?>
                  <li id="W_<?php echo $i ?>">e</li>
                <?php endif; ?>
              <?php
            }
           ?>
        </span>
        <span id="S_2"class="col-md-2">&</span>
        <span id="S_2" class="col-md-5 _G">
          <?php
            for ($i=0; $i <7 ; $i++) {
              ?>
                <?php if ($i == 0): ?>
                  <li id="G_<?php echo $i ?>">G</li>
                <?php endif; ?>
                <?php if ($i == 1): ?>
                  <li id="G_<?php echo $i ?>">R</li>
                <?php endif; ?>
                <?php if ($i == 2): ?>
                  <li id="G_<?php echo $i ?>">A</li>
                <?php endif; ?>
                <?php if ($i == 3): ?>
                  <li id="G_<?php echo $i ?>">P</li>
                <?php endif; ?>
                <?php if ($i == 4): ?>
                  <li id="G_<?php echo $i ?>">H</li>
                <?php endif; ?>
                <?php if ($i == 5): ?>
                  <li id="G_<?php echo $i ?>">I</li>
                <?php endif; ?>
                <?php if ($i == 6): ?>
                  <li id="G_<?php echo $i ?>">C</li>
                <?php endif; ?>
              <?php
            }
           ?>
        </span>
      </div>
      <img class="back-S _PC" src="layout/images/black/B7.png" alt="">
      <img class="back-S _MoB" src="layout/images/line.png" alt="">

    </div>


    <?php $pargph = "We’re a creative technology lab that delivers groundbreaking
     experiences through web and mobile development, graphic designes,
     user experience design and innovative technology services."; ?>
    <p id="pph" class="col-lg-8 col-md-10 col" data-pragph='<?php echo $pargph ?>'></p>
  </div>
</section>
<!-- <section class="BlockTop" style="background-image:url(layout/images/Back.jpg);">
    <div class="overlay"></div>
      <div class="bcvedio">

        <div class="_TC">
          <div class="logo">
            <small>CREATIVE</small>
            <img src="layout/images/LOGO/tc.png" alt="">
          </div>
          <div class="container">
            <div class="_data">
                <span id="S_1" class="col-md-5">
                  <?php
                    for ($i=0; $i <7 ; $i++) {
                      ?>
                        <?php if ($i == 0): ?>
                          <li id="W_<?php echo $i ?>">W</li>
                        <?php endif; ?>
                        <?php if ($i == 1): ?>
                          <li id="W_<?php echo $i ?>">e</li>
                        <?php endif; ?>
                        <?php if ($i == 2): ?>
                          <li id="W_<?php echo $i ?>">b</li>
                        <?php endif; ?>
                        <?php if ($i == 3): ?>
                          <li id="W_<?php echo $i ?>">s</li>
                        <?php endif; ?>
                        <?php if ($i == 4): ?>
                          <li id="W_<?php echo $i ?>">i</li>
                        <?php endif; ?>
                        <?php if ($i == 5): ?>
                          <li id="W_<?php echo $i ?>">t</li>
                        <?php endif; ?>
                        <?php if ($i == 6): ?>
                          <li id="W_<?php echo $i ?>">e</li>
                        <?php endif; ?>
                      <?php
                    }
                   ?>
                </span>
                <span id="S_2"class="col-md-2">&</span>
                <span id="S_2" class="col-md-5 _G">
                  <?php
                    for ($i=0; $i <7 ; $i++) {
                      ?>
                        <?php if ($i == 0): ?>
                          <li id="G_<?php echo $i ?>">G</li>
                        <?php endif; ?>
                        <?php if ($i == 1): ?>
                          <li id="G_<?php echo $i ?>">R</li>
                        <?php endif; ?>
                        <?php if ($i == 2): ?>
                          <li id="G_<?php echo $i ?>">A</li>
                        <?php endif; ?>
                        <?php if ($i == 3): ?>
                          <li id="G_<?php echo $i ?>">P</li>
                        <?php endif; ?>
                        <?php if ($i == 4): ?>
                          <li id="G_<?php echo $i ?>">H</li>
                        <?php endif; ?>
                        <?php if ($i == 5): ?>
                          <li id="G_<?php echo $i ?>">I</li>
                        <?php endif; ?>
                        <?php if ($i == 6): ?>
                          <li id="G_<?php echo $i ?>">C</li>
                        <?php endif; ?>
                      <?php
                    }
                   ?>
                </span>
                <img class="back-S _PC" src="layout/images/black/B7.png" alt="">
                <img class="back-S _MoB" src="layout/images/line.png" alt="">
              <div class="row">
                <?php $pargph = "We’re a creative technology lab that delivers groundbreaking
                 experiences through web and mobile development, graphic designes,
                 user experience design and innovative technology services."; ?>

                <p id="pph" data-pragph='<?php echo $pargph ?>'></p>
              </div>
            </div>
          </div>
        </div>



      </div>

</section> -->


    <section class="ftco-intro">
    	<div class="container-wrap">
    		<div class="wrap d-md-flex row">
	    		<div class="info col-md-12 col-xl-8">
	    			<div class="row no-gutters">
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-phone"></span></div>
	    					<div class="text">
	    						<a href="tel:+0201069364670">+ (020) 10 693 646 70</a>
	    						<p>A small river named Duden flows</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="fa fa-envelope-o"></span></div>
	    					<div class="text"><?php $contact = 'Hi Codex|LAB Company'; ?>
	    						<a href="mailto:TenCent10.TC@Gmail.com?subject=<?php echo $contact; ?>">TenCent10.TC@Gmail.com</a>
	    						<p>Suite 721 New York NY 10016</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-clock-o"></span></div>
	    					<div class="text">
	    						<h3>Open Monday-Friday</h3>
	    						<p>8:00am - 9:00pm</p>
	    					</div>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="social d-md-flex pl-md-5 p-4 align-items-center col-md-12 col-xl-4">
	    			<ul class="social-icon">
              <div class="row">
                <!-- <div class="col-lg"> -->
                  <li class="col-md col ftco-animate"><a target='_blank' href="#"><span class="flicker-1 icon-twitter"></span></a></li>
                  <li class="col-md col ftco-animate"><a target='_blank' href="#"><span class="flicker-1 icon-facebook"></span></a></li>
                <!-- </div> -->
                    <!-- <div class="col-lg"> -->
                      <li class="col-md col ftco-animate"><a target='_blank' href="#"><span class="flicker-1 icon-instagram"></span></a></li>
                      <li class="col-md col ftco-animate"><a target='_blank' href="https://api.whatsapp.com/send?phone=+0201069364670&text=&source=&data=&app_absent="><span class="flicker-1 fa fa-whatsapp"></span></a></li>
                    <!-- </div> -->
              </div>
            </ul>
	    		</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-about d-md-flex">
    	<div class="one-half col img" style="background-image: url(layout/images/gif/all.gif);">

      </div>
    	<div class="one-half col tow STR">
        <div class="overlay"></div>
        <div class="heading-section ftco-animate ">
          <h2 class="mb-4">Welcome to <span class="flaticon-code"><img src="layout/images/logo/333.png" alt=""><span>Codex</span> </span> A Web Development Company</h2>
        </div>
        <div class="our-list ftco-animate">
          <h4 class="ftco-animate">what we can do for your business:</h4>
          <ul id="we_1" class="app" dir="rtl">
            1
            <li class="ftco-animate">
              <strong>تصـميم المواقع,</strong>
              <strong>,و انشاء تطبيقات ,</strong>
              <span>
                بسيطه وشخصيه وفريده بشكل متكامل .
                <!-- (we do not use templates or open source solutions). -->
              </span>
            </li>

            <li class="ftco-animate fadeInUp ftco-animated">
              <strong>تصميم وتطوير مواقع ويب سريعة الاستجابة ,</strong>
              <span>تصميم مواقع االويب سريعة الاستجابة للعمل عبر مجموعة واسعة من الأجهزة ، من شاشات كمبيوتر سطح المكتب إلى الهواتف المحمولة واجهزة التابلت .</span>
            </li>

            <li class="ftco-animate">
              <strong> تطوير المواقع  و استخدام انظمة ادارة محتوي الويب [ CMS ],    </strong>
              <span>انظمة ادارة محتوي هي انظمه تستخدم لانشاء وتطوير مواقع الويب لرفع اداء المواقع الالكترونية  من خلالها نشر وإدارة المحتوى على الويب بطريقة سهلة عبر أدوات يدوية يمكن الوصول إليها بسهولة على لوحة التحكم  [ Admin Dashboard ] مثل [ WordPress &amp; Drupal ].</span>
            </li>
            <li class="ftco-animate">
              <strong>انشاء مواقع التجارة اللالكترونية وجعلها اكثر  فاعلية, </strong>
              <span>عن طريق استخدام انظمة الحجز والدفع الالكتروني [ Payment Gateway  ]. </span>
            </li>
            <li class="ftco-animate">
              <strong>تصميم موقع الكتروني وتطبيق ويب للشركات والانشطة الخاصة,</strong>
              <span>
                 استخدام الانظمة الالكترونية لاصحاب المشاريع الخاصة تساعد علي توسيع نطاق مشروعك الخاص ويسهل علي المستخدم الوصول اليك  و حل مشاكل التسويق الالكتروني .
              </span>
            </li>
            <li class="ftco-animate">
              <strong>استخدام نظام تهيئة المواقع لمحركات البحث العالمية [  SEO ],  </strong>
              <span>
                ما يعرف بمصادقة محركات البحث الالكتروني ( Search Engine Optimization )  هو نظام تحسين ظهور موقعك إلالكتروني في نتائج محركات البحث المجانية مثل جوجل بحيث يظهر في النتائج المطلوبة للدي العملاء المحتملين لسهولة انتشار موقعك .
              </span>
            </li>

            <li class="ftco-animate">
              <strong>انشاء وتطوير تطبيقات الهواتف ,</strong>
              <span>انشاء تطبيق الهاتف الخاص بمشروعك للعمل علي انظمة الهواتف المحمولة الاندرويد والايفون او تصميم تطبيق من موقعك الخاص وجعل تطبيق المشروع يتناسب مع انظمة الهواتف الذكية [ IOS ] & [ Android ]  .</span>
            </li>



          </ul>
          <ul id="we_2" dir="rtl">
            2
            <li class="ftco-animate">
              <strong>تصـميم المواقع,</strong>
              <strong>و انشاء تطبيقات</strong>
              <span>
                بسيطه وشخصيه وفريده بشكل متكامل
                <!-- (we do not use templates or open source solutions). -->
              </span>
            </li>
            <li class="ftco-animate">
              <strong> تطوير المواقع  و استخدام انظمة ادارة محتوي الويب [ CMS ],    </strong>
              <span>انظمة ادارة محتوي الويب هي انظمه تستخدم لانشاء وتطوير مواقع الويب لرفع اداء و درجة حماية المواقع الالكترونية مثل [ WordPress & Drupal ].</span>
            </li>
            <li class="ftco-animate">
              <strong>انشاء مواقع التجارة اللالكترونية وجعلها اكثر  فاعلية, </strong>
              <span>عن طريق استخدام انظمة الحجز والدفع الالكتروني [ Payment Gateway  ]. </span>
            </li>
            <li class="ftco-animate">
              <strong>تصميم موقع الكتروني وتطبيق ويب للشركات والانشطة الخاصة,</strong>
              <span>
                 استخدام الانظمة الالكترونية لاصحاب المشاريع الخاصة تساعد علي توسيع نطاق مشروعك الخاص ويسهل علي المستخدم الوصول اليك  و حل مشاكل التسويق الالكتروني .
              </span>
            </li>
            <li class="ftco-animate">
              <strong>استخدام نظام تهيئة المواقع لمحركات البحث العالمية [  SEO ],  </strong>
              <span>
                ما يعرف بمصادقة محركات البحث الالكتروني ( Search Engine Optimization )  هو نظام تحسين ظهور موقعك إلالكتروني في نتائج محركات البحث المجانية مثل جوجل بحيث يظهر في النتائج المطلوبة للدي العملاء المحتملين لسهولة انتشار موقعك .
              </span>
            </li>

            <li class="ftco-animate">
              <strong>Shopping mall website design,</strong>
              <span>Shopping center website design.Shopping mall and business center website design.</span>
            </li>

            <li class="ftco-animate">
              <strong>Building professional & easy website design,</strong>
              <span>For Marketing, Car Showrooms, Hospitals , Clinics, Restaurants, Coffee Shops etc...</span>
            </li>
          </ul>
  			</div>

        <div class="btn-N-P ftco-animate">
          <li><i data-feather='arrow-left-circle'></i></li>
          <li class="show"><i data-feather='arrow-right-circle'></i></li>
        </div>
    	</div>
    </section>

<?php $path = 'layout/images/BACK/' ; ?>

        <!-- /**** OUR SERVICES ****/ -->

    <section class="ftco-section ftco-services">
    	<div class="overlay"></div>
    	<div class="container n_b">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col col-lg-8 col-xl-8 heading-section ftco-animate text-center">
            <h2 class="mb-4">خدمـات الموقع</h2>
            <img class="back-S" src="layout/images/black/B7.png" alt="">
            <p class="col">
              تصميم وتطوير مواقع ويب سريعة الاستجابة ، والعمل عبر مجموعة واسعة من الأجهزة ، من شاشات كمبيوتر سطح المكتب إلى الهواتف المحمولة. تصميم الويب سريع الاستجابة هو نهج يهدف إلى تصميم مواقع الويب لتوفير تجربة مشاهدة مثالية ، وسهولة القراءة والتنقل مع الحد الأدنى من تغيير الحجم .
            </p>
          </div>
        </div>
        <div class="container">

          <div class="row">
            <?php
              $SERV = getAlltable('*','services',"WHERE Approve = 1",'','ID','ASC',5);
             ?>
             <?php foreach ($SERV as $SRV): $SID = $SRV['ID']; $SNAME = $SRV['Name']; $SIMG = $SRV['img'] ; $SPATH = "data/SERV/$SID/$SIMG"; ?>
               <div class="col-sm-10 col-12 col-lg-4 col-md-6 ftco-animate marg">
                 <div class="media d-block text-center block-6 services">
                   <div class="icon d-flex justify-content-center align-items-center mb-5"
                   style='background-image:url("<?php echo $SPATH; ?>")'>
                   </div>
                   <div class="media-body">
                     <h3 class="heading"><?php echo $SRV['Name']; ?></h3>
                     <p><?php echo $SRV['Description']; ?>.</p>
                   </div>
                 </div>
               </div>
             <?php endforeach; ?>

          </div>

          <div class="row view mor_serv">
            <div class="col-xl-4 col-sm-6 see-more">
              <a class="d-flex ftco-animate" href="Services?#Catmarketplace"><button class="btn badge see-more btn-sm" type="button" name="button"><i data-feather='plus-circle'></i> See All</button></a>
            </div>
          </div>

        </div>
    	</div>
    </section>

<!-- /*************************************/ -->

    <section class="home-slider owl-carousel img" style="background-image: url(layout/images/black/B1.jpg);">

      <div class="slider-item" style="background-image: url(layout/images/gif/other.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
              <h1 class="mb-4"> <span class="subheading codex_head_slider">Codex Lab</span> A Web Development And Graphic Design Company! </h1>
              <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              <p class="buttons"><a id="_order" data-cont='.ContactUS' href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item">

      	<div class="overlay"></div>

        <div class="container">

          <div class="row slider-text align-items-center" data-scrollax-parent="true">

            <div class="col-md-6 col-sm-12 ftco-animate">
            	<span class="subheading">Web Development</span>
              <h1 class="mb-4">professional websites</h1>
              <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              <p class="buttons">
                <a id="_order" data-cont='.ContactUS' href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a>
                <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a>
              </p>
            </div>

            <div class="col-md-6 ftco-animate">
            	<img src="layout/images/GIF/home-screen.png" class="img-fluid" alt="">
            </div>

          </div>

        </div>

      </div>

      <div class="slider-item">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">

            <div class="col-md-6 col-sm-12 order-md-last ftco-animate">
            	<span class="subheading">Mobile Development</span>
              <span class="after"></span>
              <h1 class="mb-4">Mobile App Development</h1>
              <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              <p class="buttons"><a id="_order" data-cont='.ContactUS' href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
            </div>
            <div class="col-md-6 ftco-animate">
            	<img src="layout/images/gif/gifgit.gif" class="img-fluid gif" alt="">
            </div>

          </div>
        </div>
      </div>

    </section>

<!-- /************************************/ -->

<!-- /* **** OUR PROJECTS **** */ -->

    <section class="ftco-section Projctes">
      <div class="overlay"></div>
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-xl-7 col-md heading-section ftco-animate text-center">
            <h2 class="mb-4">Explore Our marketplace</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
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
    		<div class="row no-gutters d-flex view ">


          <!-- /*********** ** GET CATEGORY ** ***********/ -->

  <?php $P = getAlltable('*','Categories',"WHERE Parent = 1" ,'AND Visibility = 1','Temp','DESC',2); ?>
  <?php foreach ($P as $P): ?>
    <?php
      $MN = getOne("ID,Name",'Categories',"WHERE ID = {$P['Parent']}");
     ?>
    <?php $CATID = $P['ID']; $CAT = $P['Name']; $CIMG = $P['img']; $CPAT="data/PCAT/$CATID/$CIMG"; ?>
    <div class="C_<?php echo $MN[0]['ID']; ?> card col-sm-6 col-lg-6 col-md-12 ftco-animate CAT_parent">
      <div class="row no-gutters d-flex">
        <a href="blog?C=<?php echo $P['ID']; ?>&CName=<?php echo $CAT; ?>" class="img col-md-6" style="background-image: url('<?php echo $CPAT; ?>');"><span><?php echo $CAT; ?></span> </a>
        <div class="text col-md-6">
          <div class="card-body">
            <p><?php echo $P['Description']; ?></p>
            <div class="go"><button class="btn badge btn-outline-primary btn-sm" type="button" name="button">
              <a href="blog?C=<?php echo $P['ID']; ?>&CName=<?php echo $CAT; ?>"><i class="fa fa-eye"></i> عرض التصاميم</a></button>
              <button class="btn badge btn-outline-dark btn-sm" value="<?php echo $P['ID']; ?>" type="button" name="CAT">
              <a class="last" > <i class="fa fa-get-pocket"></i> طلب تصميم</a> </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>


  <?php $P = getAlltable('*','Categories',"WHERE Parent = 5" ,'AND Visibility = 1','Temp','DESC',2); ?>
  <?php foreach ($P as $P): ?>
    <?php
      $MN = getOne("ID,Name",'Categories',"WHERE ID = {$P['Parent']}");
     ?>
    <?php $CATID = $P['ID']; $CAT = $P['Name']; $CIMG = $P['img']; $CPAT="data/PCAT/$CATID/$CIMG"; ?>

    <div class="C_<?php echo $MN[0]['ID']; ?> card col-sm-6 col-lg-6 col-md-12 ftco-animate CAT_parent">
      <div class="row no-gutters d-flex">
        <a href="blog?C=<?php echo $P['ID']; ?>&CName=<?php echo $CAT; ?>" class="img col-md-6" style="background-image: url('<?php echo $CPAT; ?>');"><span><?php echo $CAT; ?></span> </a>
        <div class="text col-md-6">
          <div class="card-body">
            <p><?php echo $P['Description']; ?></p>
            <div class="go"><button class="btn badge btn-outline-primary btn-sm" type="button" name="button">
              <a href="blog?C=<?php echo $P['ID']; ?>&CName=<?php echo $CAT; ?>"><i class="fa fa-eye"></i> عرض التصاميم</a></button>
              <button class="btn badge btn-outline-dark btn-sm" value="<?php echo $P['ID']; ?>" type="button" name="CAT">
              <a class="last" > <i class="fa fa-get-pocket"></i> طلب تصميم</a> </button>
            </div>
          </div>
        </div>
      </div>
    </div>

  <?php endforeach; ?>


    <!-- /****************************************************************/ -->

    		</div>

          <div class="row view">
            <div class="col-xl-4 col-sm-6 see-more">
              <a class="d-flex ftco-animate" target="_blank" href="About?#Catmarketplace"><button class="btn btn-outline-primary see-more btn-sm" type="button" name="button"><i data-feather='plus-circle'></i> See More</button></a>
            </div>
          </div>

    	</div>

<!-- /**********************************************************************************/ -->

    </section>

		<section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: var(--BB);" data-stellar-background-ratio="0.5">
<?php
  // $webT = getOne('Temp','category',"WHERE");
 ?>
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
  include $tpl. 'footer.inc'
 ?>
