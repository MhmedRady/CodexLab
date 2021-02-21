<?php
// session_start();
ob_start();

if (!isset($_SESSION['myadmin'])) {
    header('location:../../index');
    exit;
}else{
  // $prev = 1;
  // $noNavbar  = 0;
  // $table     = 0;
  // $StartUp   = 0;
  // include '../inc.php';
echo "<br> START UP <br>";
  // CATEGORY TEMPS

  $GETP = getOne('ID AS Pid','categories','WHERE Parent !=0');
  $count = count($GETP);

  for ($i=0; $i <$count ; $i++) {

      $P = $GETP[$i]['Pid'];
// echo "$P";
      $cuntP = countof('ID','temp',"WHERE Cat_ID = $P");
      $cuntO = countof('ID','Orders',"WHERE Cat_ID = $P");

      update($P,'',"categories","SET Temp = $cuntP",'WHERE ID = ?');

      update($P,'',"categories","SET Orders = $cuntO",'WHERE ID = ?');

      $like = sum('Likes','Temp',"WHERE Cat_ID = $P");
      $view = sum('View','Temp',"WHERE Cat_ID = $P");

      if ($cuntP !== '0') {

        $sumK = $like[0]['SUM'];
        update($P,'','categories',"SET likes = $sumK","WHERE ID = ?");

        $sumV = $view[0]['SUM'];
        update($P,'','categories',"SET View = $sumV","WHERE ID = ?");

      }

  }

  $getM = getOne('ID','categories',"WHERE Parent = 0");
  $Mcount = count($getM);
  for ($i=0; $i <$Mcount ; $i++) {
    $M = $getM[$i]['ID'];

    $count = countof('ID','Categories',"WHERE Parent = $M");

    if ($count!=='0') {

      // SET SUM MAIN TEMPLATE

      $SUM = sum('Temp','categories',"WHERE Parent = $M");
      $sum = $SUM[0]['SUM'];
      update($M,'',"categories","SET Temp = $sum",'WHERE ID = ?');

      // SET SUM MAIN ORDERS

      $SUM = sum('Orders','categories',"WHERE Parent = $M");
      $sum = $SUM[0]['SUM'];
      update($M,'',"categories","SET Orders = $sum",'WHERE ID = ?');

      // SET SUM MAIN Likes

      $SUM = sum('Likes','categories',"WHERE Parent = $M");
      $sum = $SUM[0]['SUM'];
      update($M,'',"categories","SET Likes = $sum",'WHERE ID = ?');

      // SET SUM MAIN Likes

      $SUM = sum('Likes','categories',"WHERE Parent = $M");
      $sum = $SUM[0]['SUM'];
      // update($M,'',"categories","SET Likes = $sum",'WHERE ID = ?');

      // SET SUM MAIN Likes

      $SUM = sum('View','categories',"WHERE Parent = $M");
      $sum = $SUM[0]['SUM'];
      update($M,'',"categories","SET View = $sum",'WHERE ID = ?');

      // SET SUM MAIN Likes

      $totalview = sum('View','categories',"WHERE Parent = 0");
      $T_V = $totalview[0]['SUM'];

      // $totallike = sum('Likes','categories',"WHERE Parent = 0");
      // $T_K = $totallike[0]['SUM'];

    }

  }

  /**
  // TIME UPDATE DATABASE
   **/

    echo "Today is " . date("Y-m-d") . "<br>"; $date = date("H:i:s");
    $TID = getOne('ID,Today,likes,view','categories');
    $count = count($TID);
    // echo "$count";
    for ($i=0; $i <$count ; $i++) {
      $ID =  $TID[$i]['ID'];
      $like = $TID[$i]['likes'];
      $view = $TID[$i]['view'];
      $Yday = $TID[$i]['Today'];
      $Tday = date("Y-m-d");
      if ($Tday > $Yday):

        // UPDATE YASTERDAY LIKE
        update($ID,'','Categories',"SET Ylike  = $like","WHERE ID = ? ");

        // UPDATE YASTERDAY VIEW
        update($ID,'','Categories',"SET Yview  = $view","WHERE ID = ? ");

        // UPDATE YASTERDAY TO NOW()
        update($ID,'','Categories',"SET Today  = NOW()","WHERE ID = ? ");

       endif;
    }

    /**
    // START GENERAL DATA UPDATES
    **/
    $gen = getOne('*','general',"WHERE TDay like '%$Tday%'");
    $Kcat= getAlltable('likes','categories',"WHERE Today like '%$Tday%'","AND Parent!=0","Likes",'DESC',1);
    $Vcat= getAlltable('view','categories',"WHERE Today like '%$Tday%'","AND Parent!=0","view",'DESC',1);

    print_r($Vcat);

    $catK = $Kcat[0]['likes'];
    $catV = $Vcat[0]['view'];

    echo "MORE CAT LIKE TO DAY $catK<br>";
    echo "MORE CAT VIEW TO DAY $catV<br>";

    update('TDay',"",'general',"SET MV_Cat=$catV,MK_Cat=$catK","WHERE TDay = ? ");

}
 ?>
