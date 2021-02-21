<?php

/*
=========================================
=========== GENERAL FUNCTION ============
=========================================

  **CHECK GETALL Function
  ** Functhon to CHECK ALL FROM ANY DATABASE TABLE
*/

  function getAlltable($name,$tablename, $where = NULL, $and = NULL, $orderby=NULL, $ordering = "DESC", $limit = 0){

    global $con;

    if ($limit !== 0) {
      $LIMIT  = "LIMIT $limit";
      $getAll = $con->prepare("SELECT $name FROM $tablename $where $and ORDER BY $orderby $ordering $LIMIT");
    } else {
      $getAll = $con->prepare("SELECT $name FROM $tablename $where $and ORDER BY $orderby $ordering ");
    }

    //$sql = $where == NULL ? '' : $where ;


    $getAll->execute();

    $All = $getAll->fetchAll();

    return $All;

}

/*  */

/***********************************************/
/*
  **CHECK GETALL Function
  ** Functhon to CHECK ALL FROM ANY DATABASE TABLE
*/

function getOne($name,$tablename, $where = NULL, $and = NULL) {

    global $con;

    $getOne = $con->prepare("SELECT $name FROM $tablename $where $and ");

    $getOne->execute();

    $ONE = $getOne->fetchAll();

    return $ONE;

}

/*  */


/***********************************************/

/*GET ARRANGE*/
function getTid($select, $from, $by, $sort){

  global $con;

      $stmt3 = $con->prepare("SELECT * FROM categories ORDER BY Ordering $sort");

      $stmt3->execute();

      $cats = $stmt3->fetchAll();

      return $cats ;

}

/*
[ -1- ]
  ** Count Number Of UNIT Function
  ** CALCULATE UNITS IN Row DATABASE
  ** 1- CALCULATE PARENT NUM IN CATEGORIES TABLE IN DATABASE
  *** 2- CAN USE IT FOR CALCULATE NUM OF MEMBERS RESGESTED DateTime [ ' >= 30 ' ]
  **** $from_row = The Col To Choose from It [ 'PARENT IN CATEGORIES' ]
  ***** $table = The Choose TABLE To COUNT FROM IT
  ****** $where = The GET VALUE To COUNT BY IT [ 'WHERE ID = $USR['UserID']' ]
*/

 function countof($from_row, $table,$where = NULL, $And=NULL){

     global $con;

        $stat2 = $con->prepare("SELECT COUNT($from_row) FROM $table $where $And");
        $stat2->execute();
        return $stat2->fetchColumn();

  }

/***********************************************/

/*
[ -1- ]
  ** GET MANY DAYS Function
  *** GET MANY OF DAYS FROM ADDED DATE TO TODAY
  **** $where = WHERE GET = {$row['CHECK']} => Date
  ***** [ 1 ] $select = CHECK NAME OF GET DATE UNIT
  ****** [ 2 ] $date = DATE TO CHECK NOW => [ DATE ] | DATETIME [ 2020/04/15 10:02:47 ]
  ******* [ 3 ] $from = TABLE NAME
  ******** [ 4 ] $where = WHERE CHECK = | !=
  ********* [ 5 ] $and = AND CHECK = | !=
*/

function Diff($select,$date ,$from,$where = NULL, $and_1 = NULL,$and_2 = NULL){

  global $con;

   $getdate = $con->prepare("SELECT $select , DATEDIFF(CURDATE(),$date) AS Added,HOUR($date) AS H,MINUTE($date) AS M FROM $from $where $and_1 $and_2 ");

   $getdate->execute();

   $All = $getdate->fetchAll();

    return $All;

}

/***********************************************/

// $stmt = $con->prepare("UPDATE users SET RegStatus = 0, UnRegDate=now() WHERE UserID = ?");
//
// $stmt->execute(array($userid));

function update($value1, $value2 = NULL, $from ,$set ,$where = NULL){

  global $con;

  $stmt = $con->prepare("UPDATE $from $set  $where");

  if ($value2 == NULL) {

      $stmt->execute(array($value1));

  }else {

      $stmt->execute(array($value1,$value2));

  }

  $count = $stmt->rowCount();

  return $count;

}

/*****************************************/
/*
[ -1- ]
  ** GET SUM
  *** GET TOTAL NUM OF $SUM
*/

function sum($sum,$from,$where=NULL,$and=NULL){
  global $con;
  $stmt = $con->Prepare("SELECT SUM($sum) AS SUM FROM $from $where $and");
  $stmt->execute();
  $stmt = $stmt->fetchAll();
  return $stmt;
};

/*****************************************/

/**
// FUNCTION GET CLIENT_IP
 **/

function getIp() {

  $ip = "REMOTE_ADDR" . $_SERVER['REMOTE_ADDR'];

  if (!empty($_SERVER['HTTP_CLIENT_IP'])) {

      $ip = "CLIENT_IP" . $_SERVER['HTTP_CLIENT_IP'];

  } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {

      $ip = "X_FORWARDED_FOR" . $_SERVER['HTTP_X_FORWARDED_FOR'];

  }

  return $ip;

}

/*****************************************/

/**
  // FUNCTION CSRF REQUEST
 **/
 function  _CSRF()
 {
   if (empty($_SESSION['key']))
 		$_SESSION['key'] = bin2hex(random_bytes(32));
 	//create CSRF token
 	$csrf = hash_hmac('sha256', 'this is some string: index.php', $_SESSION['key']);
   return $csrf;
 }

/*****************************************/

/**
  // FUNCTION TAG CHANGES SETTINGS
 **/

function SETtage($titl,$redir,$MSG)
{

  /****************************************/

  if (!isset($btn)) {
     $btn = 'Open Now';
  }

  ?>

  <div class="tag">

    <button id="added" type="button" style="display:none;" class="btn btn-primary " onclick="RedirectTime(<?php echo $redir; ?>)" data-toggle="modal" data-target="#staticBackdrop">  </button>

    <!-- Modal -->

    <div class="addDONE modal fade added" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel"><?php echo $titl; ?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span class="closetag" aria-hidden="true">&times;</span>
            </button>
          </div>

          <div style="text-transform: capitalize;" class="modal-body">
            <?php echo $MSG ?>
          </div>

            <div class="modal-footer">
              <button id="closetag" type="button" class="btn btn-secondary btn-sm" data-dismiss="modal" >Cansel</button>
            </div>

        </div>
      </div>
    </div>

    <script type="text/javascript">

    $(".addDONE").each(function(){
      if ($(this).hasClass('added')) {
        $('#added').click();
      }
    });

    $('#closetag, .closetag').click(function(){
      $(".addDONE").removeClass('added');
    });

    </script>

  </div>

<?php } ?>
