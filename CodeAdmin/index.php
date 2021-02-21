
  <?php

  session_start();

  $pageTitle  = 'CODEX|Lab'; // PAGE TITLE

  $noNavbar   = 0;
  $StartUp    = 0;
  include "inc.php";

   ?>

<?php if (isset($_SESSION['myadmin'])): ?>
  <?php header('location:dashboard.php'); exit; ?>

<?php endif; ?>

    <?php if (!$_SERVER['REQUEST_METHOD'] == 'POST'): ?>
      <?php header('location:dashboard.php'); exit; ?>
    <?php else: ?>
      <?php if (isset($_POST['adminlog'])): ?>
        <?php echo 'admin' ?>
        <?php

        $admin = $_POST['admin'];
        $pass  = $_POST['pass'];
       // EDIT Members Rouls

        $AError = array();
        $PError = array();

        $admin = filter_var($admin,FILTER_SANITIZE_STRING);

        if(empty($admin)){ $AError[] = ' Username Can\'t Be Empty ' ;
        } elseif (strlen($admin) < 4 | strlen($admin) > 12){ $AError[] = 'Username can\'t Be less Than <strong>  4 </strong> Characters ' ; }

        if (empty($pass)) { $PError[] = 'No Password Inserted' ; }

        print_r($PError);
        print_r($AError);
    //     // Useing GROUPID = 1 => ADMIN USER ACCOUNT

    //

    if (empty($AError)) {

      $log = checkItem('username', 'admin', $admin, 'AND GroupID = 0 AND Block = 0');

      echo $log;

      if ( $log == 0 ) {
        $AError[] = ' This user Not Exist ' ;
      }

    }
    if (empty($PError) && empty($AError)) {
      echo "string";
      $hashedPass = sha1($pass);

      $stmt = $con->prepare("SELECT ID, username , password

                   FROM Admin
                   WHERE
                   username = ?
                   AND
                   password = ?
                   AND GroupID = 0
                   ");

                   $stmt->execute(array($admin, $hashedPass));
                   $get = $stmt->fetch();
                   $pass = $stmt->rowCount();

      if ($pass==0) {

        $PError[] = " incorrect password " ;
    }

    }

    if ( !empty($PError) && !empty($AError) ) {

      header('location:../index');
      exit;
  }else {


      //
      //if $pass > 0 the SESSION User is isset
      $hashedPass = sha1($pass);

      $stmt = $con->Prepare("SELECT ID, username FROM admin WHERE username = ? AND password = ? AND GroupID = 0 LIMIT 1");
      $stmt->execute(array($admin, $hashedPass));
      $row = $stmt->fetch();
      $count = $stmt->rowCount();

      $_SESSION['myadmin'] = $get['username'];  // session ADMIN Name
      $_SESSION['ID']      = $get['ID']; // session ADMIN ID

      $ID = $_SESSION['ID'];

      $adminN = $_SESSION['myadmin'];

      echo '>>>>'.'{'.$ID.'}'.$adminN;

      header('Location: dashboard.php');
      exit();

    }


         ?>
      <?php endif; ?>
    <?php endif; ?>
<?php // endif; ?>

    <section class="log">
      <!-- <div class="head_info"> -->
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="LOGO">
              <img src="<?php echo $img; ?>C.jpg" alt="">
              <span>ODE</span>
              <img src="<?php echo $img; ?>7.png" alt="">
              <span>LAB</span>
            </div>
          </div>
          <div class="row">
<!-- <i class="fa fa-times-circle"></i> -->
            <div  class="form col-xl-4 col-lg-6 col-md-7 col-11">
              <span class="top_span"> CODEX Admin </span>

                <div class="getlog">
                  <form id="logform" class="contact-form " action="<?php $_SERVER['PHP_SELF'] ?>" method="post">

                  <div class="input">

                    <input id="admin" class="form-control N" <?php if(!empty($AError)){echo 'style="border-color: #f00; color: #f00;"';} ?> type="text" name="admin" onblur="CHuS()" value="<?php if(isset($admin)){echo $admin;} ?>" placeholder="user name">

                    <span id="erG" class="error <?php if(empty($AError)){echo 'E';} ?>" style="display:block;"></span>

                    <span id="erU" class="error" style="display:block;"></span>

                    <?php if (!empty($AError)): ?>
                      <?php foreach ($AError as $error): ?>
                        <span style="display:block;" class="error php-error-A"><i class="fa fa-times-circle"></i> <?php echo $error ?> </span>
                      <?php endforeach; ?>
                    <?php endif; ?>

                  </div>

                  <div class="input">

                    <input id="pass" class="form-control " <?php if(!empty($PError)){echo 'style="border-color: #f00; color: #f00;"';} ?> type="password" name="pass" value="" placeholder="Password">
                    <!-- <span class="pass" style="display:block"></span> -->

                        <span style="display:block;" class="php-error-mem"> </span>

                        <?php if (!empty($PError)): ?>
                          <?php foreach ($PError as $error): ?>
                            <span style="display:block;" class="error php-error-P"><i class="fa fa-times-circle"></i> <?php echo $error ?> </span>
                          <?php endforeach; ?>
                        <?php endif; ?>

                      <span id="errorpass" style="display:block" class="error op"></span>

                  </div>

                  <button id="login" class="btn badge btn-info btn-sm login" onclick="CHuS()" type="submit" name="adminlog">Login</button>

                      <button id="forgot" class="fotget_btn" type="button" onclick="getforgot()" name="get_forgot">forgot pass</button>

                    </form>

                </div>

<!-- /********************************/ -->

                <div id="getforgot" class="getforgot">

                </div>

<!-- /********************************/ -->

            </div>

          </div>
        </div>
      <!-- </div> -->
    </section>

  <?php include $tpl . 'footer.inc'; ?>
