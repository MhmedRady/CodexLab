<?php
$i1 = rand(1,9); $i2 =$i1 + 1; $i3 = $i1 - 1 ; $i4 = $i1;
 $v = $i1.'.'.$i2.'.'.$i3.'.'.$i4; ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <?php $title = gettitle(); ?>
 <title><?php echo $title; ?></title>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="description" content="OneTech shop project">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="<?php echo $css ?>bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="<?php echo $css ?>fontawesome-all.css">
 <link rel="stylesheet" type="text/css" href="<?php echo $css ?>font-awesome.min.css">
 <link rel="stylesheet" type="text/css" href="<?php echo $css ?>owl.carousel.css">
 <link rel="stylesheet" type="text/css" href="<?php echo $css ?>owl.theme.default.css">
 <link rel="stylesheet" type="text/css" href="<?php echo $css ?>animate.css">
 <link rel="stylesheet" type="text/css" href="<?php echo $css ?>slick.css">

<?php if ($title === 'Products'): ?>
   <link rel="stylesheet" type="text/css" href="<?php echo $css ?>product_styles.css?v=<?php echo $v; ?>">
   <link rel="stylesheet" type="text/css" href="<?php echo $css ?>product_responsive.css">
<?php elseif ($title === 'Shop'): ?>
  <link rel="stylesheet" type="text/css" href="<?php echo $css ?>jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $css ?>shop_styles.css?v=<?php echo $v; ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo $css ?>shop_responsive.css">
<?php elseif ($title === 'Blog'): ?>
  <link rel="stylesheet" type="text/css" href="<?php echo $css ?>blog_styles.css?v=<?php echo $v; ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo $css ?>blog_responsive.css">
<?php elseif ($title === 'Blog Post'): ?>
  <link rel="stylesheet" type="text/css" href="<?php echo $css ?>blog_single_styles.css?v=<?php echo $v; ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo $css ?>blog_single_responsive.css">
<?php elseif ($title === 'Regulars'): ?>
  <link rel="stylesheet" type="text/css" href="<?php echo $css ?>Regulars_styles.css?v=<?php echo $v; ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo $css ?>Regulars_responsive.css">
<?php elseif ($title === 'Cart'): ?>
  <link rel="stylesheet" type="text/css" href="<?php echo $css ?>Cart_styles.css?v=<?php echo $v; ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo $css ?>Cart_responsive.css">
<?php elseif ($title === 'Contact'): ?>
  <link rel="stylesheet" type="text/css" href="<?php echo $css ?>Contact_styles.css?v=<?php echo $v; ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo $css ?>Contact_responsive.css">
  <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/42/2/common.js"></script>
  <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/42/2/util.js"></script>
  <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/42/2/map.js"></script>
  <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/42/2/marker.js"></script>
  <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/42/2/stats.js"></script>
  <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/42/2/onion.js"></script>
  <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/42/2/controls.js"></script>
  <?php else: ?>
     <link rel="stylesheet" type="text/css" href="<?php echo $css ?>main_styles.css?v=<?php echo $v; ?>">
     <link rel="stylesheet" type="text/css" href="<?php echo $css ?>responsive.css">
 <?php endif; ?>
 <link rel="stylesheet" type="text/css" href="<?php echo $css ?>mycss.css?v=<?php echo $v; ?>">
 </head>

 <body>

   <div class="spinner-wrapper">
   			<div class="spinner">
   				<div class="sk-folding-cube">
   					<div class="sk-cube1 sk-cube"></div>
   					<div class="sk-cube2 sk-cube"></div>
   					<div class="sk-cube4 sk-cube"></div>
   					<div class="sk-cube3 sk-cube"></div>
   				</div>
   			</div>
   </div>

<!-- ============================================== HEADER ============================================== -->
