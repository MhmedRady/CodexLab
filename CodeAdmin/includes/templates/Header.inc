<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
<?php date_default_timezone_set("Africa/Cairo") ?>
    <meta charset="utf-8">
    <title><?php Ptitle() ?></title><link rel="icon"type="image/png" href="<?php echo $img; titimg(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php
  $i1 = rand(1,9); $i2 =$i1 + 1; $i3 =$i1 - 1; $i4 = $i1;
   $cssVersion = $i1.'.'.$i2.'.'.$i3;
   $v = 'v'.$i4.'='.$cssVersion;
 ?>

    <link rel="stylesheet" href="<?php echo $css; ?>font-awesome.min.css">
    <link rel="stylesheet" href=" <?php echo $css; ?>jquerysctipttop.css?v3">
    <link rel="stylesheet" href="<?php echo $css; ?>bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $css; ?>croppie.css" />

<?php if (isset($dash) && $dash == 1): ?>
      <link rel="stylesheet" href="<?php echo $css; ?>tempusdominus-bootstrap-4.min.css">
<?php elseif(isset($table) && $table == 1): ?>
<link href="<?php echo $css; ?>dataTables.bootstrap4.min.css" rel="stylesheet">
<?php endif; ?>
    <link rel="stylesheet" href=" <?php echo $css; ?>mycss0.css?<?php echo $v; ?>">

  </head>

  <body>

    <style media="screen">
      body
      {
        /* display: none; */

        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
      }

      .body{
        display: none;
      }

    </style>

    <section class="body">
