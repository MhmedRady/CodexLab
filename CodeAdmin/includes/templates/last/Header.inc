<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php gettitle() ?></title><link rel="icon"type="image/png" href="layout\imgs\4.png">
    <link rel="stylesheet" href="<?php echo $css; ?>font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $css; ?>bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $css; ?>jquery-ui.css">
    <link rel="stylesheet" href="<?php echo $css; ?>jquery.selectBoxIt.css">
    <link rel="stylesheet" href="<?php echo $css; ?>mycss.css">
  </head>
<body>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <style media="screen">
    body
    {
      /* display: none; */
      <?php //if ($_SESSION['Username'] =='m7') {echo "url('layout/imgs/4.png')";} ?>;

      background-position: center;
      background-repeat: no-repeat;
      background-attachment: fixed;
    }
<?php if ($body == 1): ?>

.body {
  display: block;
}
<?php endif; ?>
  </style>
    <?php

     // IF USER LOGIN OR NOT

    $log = !isset($_SESSION['Client']) ?0:1;
      // if (!empty($_SESSION['Client'])) {
      //   echo "uuuuuuuuuuuuuuuuuuuuuuuuuuu";
      // }$_SESSION['Client'];
    ?>

<div class="body">

            <!--    START UPPER BAR     -->

<div class="Bar">
  <div class="body">
    <div class="col">
      <div class="B-btn">
        <?php if ($log == 0): ?>
          <a href="login.php" class="btn badge btn-info">Login|signUp</a>
        <?php endif; ?>
        <button type="submit" class="btn badge btn-light lang ml-auto" name="lang">عربي</button>


      </div>
      </div>

    <div class="col">

    </div>
  </div>
  <hr class="hr-Bar">
</div>

              <!--    END UPPER BAR     -->
