<?php
    $pageTitle = 'Codex|Lab';
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

  <section class="home-slider owl-carousel top img" style="background-image: url(layout/images/back/ni.jpg);">

    <div class="slider-item" style="background-image: url(images/bg_3.jpg);">
      <div class="overlay topover"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center">

          <div class="col-md-7 col-sm-12 text-center ftco-animate">
            <h1 class="mb-3 mt-5 bread">Our Works</h1>
            <p class="breadcrumbs"><span class="mr-2"><a id="pragph" href="index.html">Home</a></span><span>/</span><span> Our Works</span></p>
          </div>

        </div>
      </div>
    </div>

  </section>


    <section class="ftco-section Works">
      <div class="drops ftco-animate">
        <ul>
          <li></li><li></li><li></li><li></li><li></li><li></li>
          <li></li><li></li><li></li><li></li><li></li>
          <li></li><li></li><li></li><li></li><li></li>
          <li></li><li></li><li></li><li></li><li></li><li></li>
        </ul>
      </div>
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Read our blog</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>

            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div id="WORKS" class="row d-flex moverow">

<?php $try='A small river named Duden flows by their place and supplies it with the necessary regelialia A small river named Duden flows by their place and supplies it with the necessary regelialia A small river named Duden flows by their place and supplies it with the necessary regelialia A small river named Duden flows by their place and supplies it with the necessary regelialia.'; ?>

          <div class="col-xl-4 col-lg-5 col-md-6 col-11 d-flex ftco-animate">



          	<div class="blog-entry align-self-stretch">

              <div class="get">

                <button class="btn badge btn-outline-primary btn-sm" type="button" name="button">
                  <a class="" target="_blank" href="preview.php?Temp=bootstrap"><i class="fa fa-eye"></i> preview</a>
                </button>
                <button class="btn badge btn-outline-dark btn-sm" type="button" name="button">
                  <a id="go_content" class="last" data-move='#CONTENT' href="#"><i class="fa fa-get-pocket"></i> Content</a>
                </button>

              </div>

              <div class="box">
                <!-- CAROUSEL TOW -->

                <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">

                  <ol class="carousel-indicators">
                     <li data-target="#carousel" data-slide-to="0" class="active"></li>
                     <li data-target="#carousel" data-slide-to="1"></li>
                     <li data-target="#carousel" data-slide-to="2"></li>
                   </ol>
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="layout/images/burger-1.jpg" >
                    </div>
                    <div class="carousel-item">
                      <img src="layout/images/drink-7.jpg" >

                    </div>
                    <div class="carousel-item">
                      <img src="layout/images/drink-5.jpg" >
                    </div>
                  </div>

                  <div class="fixed_info">
                    <i class="info fa fa-exclamation-circle unlock" role="combobox" aria-expanded="false"></i>
                    <p class="col-12 data"><?php echo $try.'regelialia'; ?></p>
                  </div>

                </div>

              </div>

              <div class="text py-4 d-block">
              	<div class="meta">
                  <div><a href="#">Sept 10, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-eye"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">CODEXLAB</a></h3>
                <p class="length_p">AA A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>

            </div>
          </div>

          <div class="col-xl-4 col-lg-5 col-md-6 col-11 d-flex ftco-animate">



          	<div class="blog-entry align-self-stretch">
              <!-- <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');"> -->
              <!-- </a> -->
              <div class="box">
                <!-- CAROUSEL TOW -->

                <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">

                  <ol class="carousel-indicators">
                     <li data-target="#carousel" data-slide-to="0" class="active"></li>
                     <li data-target="#carousel" data-slide-to="1"></li>
                     <li data-target="#carousel" data-slide-to="2"></li>
                   </ol>
                  <div class="carousel-inner">

                      <div class="carousel-item active">
                        <img src="layout/images/burger-1.jpg" >
                      </div>

                      <div class="carousel-item">
                        <img src="layout/images/drink-7.jpg" >
                      </div>

                      <div class="carousel-item">
                        <img src="layout/images/drink-5.jpg" >
                      </div>

                  </div>

                  <div class="fixed_info">
                    <i class="info fa fa-exclamation-circle" role="combobox" aria-expanded="false"></i>
                    <p class="col-12 data">.</p>
                  </div>

                </div>

              </div>

              <div class="text py-4 d-block">
              	<div class="meta">
                  <div><a href="#">Sept 10, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-eye"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">CODEXLAB</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-5 col-md-6 col-11 d-flex ftco-animate">

            <!-- <i class="info fa fa-exclamation-circle unlock" role="combobox" aria-expanded="false"></i>
            <p class="col-12 data">.</p> -->

            <div class="blog-entry align-self-stretch">
              <!-- <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');"> -->
              <!-- </a> -->
              <div class="box">
                <!-- CAROUSEL TOW -->

                <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">

                  <ol class="carousel-indicators">
                     <li data-target="#carousel" data-slide-to="0" class="active"></li>
                     <li data-target="#carousel" data-slide-to="1"></li>
                     <li data-target="#carousel" data-slide-to="2"></li>
                   </ol>
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="layout/images/burger-1.jpg" >
                    </div>
                    <div class="carousel-item">
                      <img src="layout/images/drink-7.jpg" >

                    </div>
                    <div class="carousel-item">
                      <img src="layout/images/drink-5.jpg" >
                    </div>
                  </div>

                </div>

              </div>

              <div class="text py-4 d-block">
                <div class="meta">
                  <div><a href="#">Sept 10, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-eye"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">CODEXLAB</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-5 col-md-6 col-11 d-flex ftco-animate">

            <!-- <i class="info fa fa-exclamation-circle unlock" role="combobox" aria-expanded="false"></i>
            <p class="col-12 data">.</p> -->

            <div class="blog-entry align-self-stretch">
              <!-- <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');"> -->
              <!-- </a> -->
              <div class="box">
                <!-- CAROUSEL TOW -->

                <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">

                  <ol class="carousel-indicators">
                     <li data-target="#carousel" data-slide-to="0" class="active"></li>
                     <li data-target="#carousel" data-slide-to="1"></li>
                     <li data-target="#carousel" data-slide-to="2"></li>
                   </ol>
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="layout/images/burger-1.jpg" >
                    </div>
                    <div class="carousel-item">
                      <img src="layout/images/drink-7.jpg" >

                    </div>
                    <div class="carousel-item">
                      <img src="layout/images/drink-5.jpg" >
                    </div>
                  </div>

                </div>

              </div>

              <div class="text py-4 d-block">
                <div class="meta">
                  <div><a href="#">Sept 10, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-eye"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">CODEXLAB</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-5 col-md-6 col-11 d-flex ftco-animate">

            <!-- <i class="info fa fa-exclamation-circle unlock" role="combobox" aria-expanded="false"></i>
            <p class="col-12 data">.</p> -->

            <div class="blog-entry align-self-stretch">
              <!-- <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');"> -->
              <!-- </a> -->
              <div class="box">
                <!-- CAROUSEL TOW -->

                <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">

                  <ol class="carousel-indicators">
                     <li data-target="#carousel" data-slide-to="0" class="active"></li>
                     <li data-target="#carousel" data-slide-to="1"></li>
                     <li data-target="#carousel" data-slide-to="2"></li>
                   </ol>
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="layout/images/burger-1.jpg" >
                    </div>
                    <div class="carousel-item">
                      <img src="layout/images/drink-7.jpg" >

                    </div>
                    <div class="carousel-item">
                      <img src="layout/images/drink-5.jpg" >
                    </div>
                  </div>

                </div>

              </div>

              <div class="text py-4 d-block">
                <div class="meta">
                  <div><a href="#">Sept 10, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-eye"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">CODEXLAB</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-5 col-md-6 col-11 d-flex ftco-animate">

            <!-- <i class="info fa fa-exclamation-circle unlock" role="combobox" aria-expanded="false"></i>
            <p class="col-12 data">.</p> -->

            <div class="blog-entry align-self-stretch">
              <!-- <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');"> -->
              <!-- </a> -->
              <div class="box">
                <!-- CAROUSEL TOW -->

                <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">

                  <ol class="carousel-indicators">
                     <li data-target="#carousel" data-slide-to="0" class="active"></li>
                     <li data-target="#carousel" data-slide-to="1"></li>
                     <li data-target="#carousel" data-slide-to="2"></li>
                   </ol>
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="layout/images/burger-1.jpg" >
                    </div>
                    <div class="carousel-item">
                      <img src="layout/images/drink-7.jpg" >

                    </div>
                    <div class="carousel-item">
                      <img src="layout/images/drink-5.jpg" >
                    </div>
                  </div>

                </div>

              </div>

              <div class="text py-4 d-block">
                <div class="meta">
                  <div><a href="#">Sept 10, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-eye"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">CODEXLAB</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>



        </div>

        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul class="tabs">
                <li class="first"><span >&lt;</span></li>
                <?php
                for ($i=1; $i <=10 ; $i++) { ?>
                  <?php  $class = $i ==1? "data-move = '#WORKS' class='active'":''; ?>
                  <li <?php echo $class ?> ><span><?php echo $i; ?></span></li>
                  <?php
                  }
                 ?>

                <li class="last"><span >&gt;</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php
    $footerBack='AB';
        include $tpl  . 'Footer.inc';
    ?>
