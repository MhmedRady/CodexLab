<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  //upload.php
  function rmrf($dir) {
      foreach (glob($dir) as $file) {
          if (is_dir($file)) {
              rmrf("$file/*");
              rmdir($file);
              unlink("$file/*");
          } else {
              unlink($file);
          }
      }
  }

$PAGE = isset($_GET['UP'])? $_GET['UP']: '';

  for ($i=1; $i <11 ; $i++) {

    /****************************/

    if ($PAGE == 'TEMP_'.$i) {
      ?>
        <script type="text/javascript">
          console.log('page');
        </script>
      <?php
// if (isset($_POST['UP_'.$i])) {

  ?>
    <script type="text/javascript">
      console.log('PS');
    </script>
  <?php
  if(!empty($_FILES))
  {
    $ID = $_POST['ID'];
   /************/
   $imgN = $_FILES['File_'.$i]['name'];
   $imgAllowExtension = array("gif", "jpeg", "jpg", "png");
   @$imggetExtension = strtolower(end(explode('.',$imgN)));
   if (! in_array($imggetExtension,$imgAllowExtension)) {
     echo 'Insert file In Types <strong> "gif", "jpeg" , "jpg" , "png" </strong>';
   }else {

     /***********************/

     $path = 'upload/'.$PAGE;
     if(is_uploaded_file($_FILES['File_'.$i]['tmp_name']))
     {

       if (!is_dir($path)) {
          @mkdir($path);
       }

       $files = scandir($path,SCANDIR_SORT_NONE);
       $count = count($files);
       for ($d=2; $d <$count ; $d++) {
         if (isset($files[$d])) {
         @unlink($path.'/'.$files[$d]);
         // @rmdir($path);
           //  exit();
         }
       }

       $imgN = $i . '_' . $ID . '_'. $PAGE . "." . $imggetExtension ;
      sleep(1);
      $source_path = $_FILES['File_'.$i]['tmp_name'];
      $target_path = $path . "/" . $imgN;
      if(move_uploaded_file($source_path, $target_path))
      {
       ?>
        <span style="color:#000">image uploaded <?php echo $ID . '------' .$count; ?></span>
       <?php
      }
     }
     /***********************/
   }

   /************/
  }

// }


}

    /****************************/

  }


    if ($PAGE == 'TEMP_zip') {

      if (!empty($_FILES)) {

/**********************************************/
      $path = 'upload/zip';

        if (!is_dir($path)) {
            mkdir($path);
        }

          $ID = $_POST['ID'];
          /************/
          $zipN = $_FILES['File_zip']['name'];
          $size = $_FILES['File_zip']['size'];
          // echo $zipN;
          // echo $size;
          // print_r($_FILES);
          $AllowExtension = array("rar", "zip");
          @$getExtension = strtolower(end(explode('.',$zipN)));
          if (! in_array($getExtension,$AllowExtension)) {
            echo 'Insert file In Types <strong> "RAR", "ZIP" </strong>';
          }elseif ($size > 36700160 || $size == 0) {
            echo "File Size Can't Be  <strong> More Thane 40MB </strong>";
            exit();
          }else {
            if (is_uploaded_file($_FILES['File_zip']['tmp_name'])) {


            $files = scandir($path,SCANDIR_SORT_NONE);
            $count = count($files);

            // for ($d=2; $d <$count ; $d++) {
            //   if (isset($files[$d])) {
            //   @unlink($path.'/'.$files[$d]);
            //   }
            // }

            // rmrf($path);

            $source_path = $_FILES['File_zip']['tmp_name'];
            $target_path = $path . "/" . $zipN;
            if(@move_uploaded_file($source_path, $target_path))
            {

              /***********************************************/

              class Extractor {

                  /**
                   * Checks file extension and calls suitable extractor functions.
                   *
                   * @param $archive
                   * @param $destination
                   */
                  public static function extract($archive, $destination){
                      $ext = pathinfo($archive, PATHINFO_EXTENSION);
                      switch ($ext){
                          case 'zip':
                              $res = self::extractZipArchive($archive, $destination);
                              break;
                      }

                      return $res;
                  }

                  /**
                   * Decompress/extract a zip archive using ZipArchive.
                   *
                   * @param $archive
                   * @param $destination
                   */
                  public static function extractZipArchive($archive, $destination){
                      // Check if webserver supports unzipping.
                      if(!class_exists('ZipArchive')){
                          $GLOBALS['status'] = array('error' => 'Your PHP version does not support unzip functionality.');
                          return false;
                      }

                      $zip = new ZipArchive;

                      // Check if archive is readable.
                      if($zip->open($archive) === TRUE){
                          // Check if destination is writable
                          if(is_writeable($destination . '/')){
                        @      $zip->extractTo($destination);
                              $zip->close();
                              $GLOBALS['status'] = array('success' => 'Files unzipped successfully');
                              return true;
                          }else{
                              $GLOBALS['status'] = array('error' => 'Directory not writeable by webserver.');
                              return false;
                          }
                      }else{
                          $GLOBALS['status'] = array('error' => 'Cannot read .zip archive.');
                          return false;
                      }
                  }

                  /**
                   * Decompress a .gz File.
                   *
                   * @param $archive
                   * @param $destination
                   */

                  public static function extractGzipFile($archive, $destination){
                      // Check if zlib is enabled
                      if(!function_exists('gzopen')){
                          $GLOBALS['status'] = array('error' => 'Error: Your PHP has no zlib support enabled.');
                          return false;
                      }
                  }

                  /**
                   * Decompress/extract a Rar archive using RarArchive.
                   *
                   * @param $archive
                   * @param $destination

                   */
                  public static function extractRarArchive($archive, $destination){
                      // Check if webserver supports unzipping.
                      if(!class_exists('RarArchive')){
                          $GLOBALS['status'] = array('error' => 'Your PHP version does not support .rar archive functionality.');
                          return false;
                      }
                  }

              }

              /**********************************************/

              $extractor = new Extractor;

              // Path of archive file
              $archivePath = $target_path;

              // Destination path
              $destPath = 'upload/zip/';

              // Extract archive file
              $extract = $extractor->extract($archivePath, $destPath);

              if($extract){
                  echo $GLOBALS['status']['success'];
              }else{
                  echo $GLOBALS['status']['error'];
              }

             ?>
              <span style="color:#000"> zip file moved <?php echo $zipN; ?></span>
             <?php
            }

         }

          }



      }
    }


}



 ?>
