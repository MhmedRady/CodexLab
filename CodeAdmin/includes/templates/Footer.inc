
<!-- /*************************************************************************************/ -->

 <span id="tag" style="position:fixed; color:#fff;"></span>

	<!-- /************************************************************************************/ -->

	<!-- /*************************************************************************************/ -->

	 <span id="GET" style="position:fixed; color:#fff;"></span>

		<!-- /************************************************************************************/ -->

	<!-- /********************************************************/ -->

        <?php if (!isset($prev) || $prev == 0): ?>




                  <!-- /********************************************/ -->

                  <div id="uploadimageModal" class="modal croper" role="dialog">
                    <div class="cropoverlay"></div>
                    <div class="modal-dialog">
                      <div class="modal-content">

                            <div class="modal-body">

                              <div class="col text-center">
                                <div id="image_demo" style="width:350px; margin-top:0px"></div>
                              </div>
                              <div class="col crop-btn" style="padding-top:0px;">
                                <button class="col btn btn-primary btn-block btn-sm crop_image"><span class="spinner-grow spinner-grow-sm"></span>SET Image</button>
                                <button id="cropClos" type="button" class="col btn btn-default btn-block btn-sm Clos" data-dismiss="modal" aria-hidden="true">Close</button>
                              </div>
                            </div>

                        </div>
                      </div>
                  </div>

                  <!-- /**************************************/ -->




        <?php endif; ?>

	<!-- /********************************************************/ -->
  </section>
<footer>

  <?php
  $i1 = rand(1,9); $i2 =$i1 + 1; $i3 =$i1 - 1;
   $jsVersion = $i1.'.'.$i2.'.'.$i3; ?>


<?php

  if (!isset($prev) || $prev == 0) :

 ?>

	<script src="<?php echo $js; ?>feather.min.js" type="text/javascript"></script>

  <script src="<?php echo $js; ?>jquery-ui.min.js" type="text/javascript"></script>
  <script src="<?php echo $js; ?>popper.min.js" type="text/javascript"></script>
	<script src="<?php echo $js; ?>jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="<?php echo $js; ?>jquery-3.4.1-mask.main.js" type="text/javascript"></script>

  <script src="<?php echo $js; ?>jquery-3.4.1-mask.main.js" type="text/javascript"></script>
	<script src="<?php echo $js; ?>croppie.js" type="text/javascript"></script>
  <script src="<?php echo $js; ?>jquery.form.min.js" type="text/javascript"></script>

  <script src="<?php echo $js; ?>BsMultiSelect.js" type="text/javascript"></script>
  <script src="<?php echo $js; ?>bootstrap.min.js" type="text/javascript"></script>
<?php if (isset($dash) && $dash == 1): ?>
	<script src="<?php echo $js; ?>moment.min.js" type="text/javascript"></script>
	<script src="<?php echo $js; ?>tempusdominus-bootstrap-4.min.js" type="text/javascript"></script>
	<script src="<?php echo $js; ?>summernote/summernote-bs4.min.js" type="text/javascript"></script>
<?php endif; ?>

<?php if (isset($table) && $table == 1): ?>

		<!-- Page level plugins -->
	  <script src="<?php echo $js; ?>jquery.dataTables.min.js"></script>
	  <script src="<?php echo $js; ?>dataTables.bootstrap4.min.js"></script>

	  <!-- Page level custom scripts -->
	  <script src="<?php echo $js; ?>datatables-demo.js"></script>

<?php endif; ?>

	<script src="<?php echo $live; ?>AJAX.js" type="text/javascript"></script>
	<script src="<?php echo $js; ?>js.js?v=<?php echo $jsVersion ?>" type="text/javascript"></script>

<?php endif; ?>


<?php if (isset($prev) && $prev == 1): ?>

  <?php if (isset($GRPHview) &&  $GRPHview == 2): ?>

    <!-- /************** * GRAPHIC TEMP CAROUSEL * **************/ -->

    <script src="<?php echo $js; ?>jquery-ui.min.js" type="text/javascript"></script>
    <script src="<?php echo $js; ?>popper.min.js" type="text/javascript"></script>
    <script src="<?php echo $js; ?>jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="<?php echo $js; ?>bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo $js; ?>owl.carousel.min.js"></script>
    <script src="<?php echo $js; ?>jquery.fancybox.min.js"></script>
    <script src="<?php echo $js; ?>aos.js"></script>
    <script src="<?php echo $live; ?>AJAX.js" type="text/javascript"></script>

  <?php endif; ?>
    <script src="<?php echo $js; ?>prev.js" type="text/javascript"></script>
  <?php endif; ?>

  <script>

      //  $.cookieBar({
      //     message: jQuery('#_cookie-law-content').html(),
      //     acceptText: 'Ok',
      //     fixed: true
      // });

  </script>

</footer>

  </body>
</html>
