
<?php echo $js; ?>

        <footer>

          <?php if (isset($GRPHview) &&  $GRPHview == 2): ?>



            <script src="<?php echo $js; ?>jquery-ui.min.js" type="text/javascript"></script>
            <script src="<?php echo $js; ?>popper.min.js" type="text/javascript"></script>
            <script src="<?php echo $js; ?>bootstrap.min.js" type="text/javascript"></script>
        		<script src="<?php echo $js; ?>jquery.min.js" type="text/javascript"></script>
            <script src="<?php echo $js; ?>owl.carousel.min.js"></script>
            <script src="<?php echo $js; ?>jquery.fancybox.min.js"></script>
            <script src="<?php echo $js; ?>aos.js"></script>
            <script src="<?php echo $live; ?>AJAX.js" type="text/javascript"></script>

          <?php endif; ?>

            <script src="<?php echo $js; ?>prev.js" type="text/javascript"></script>

        </footer>

       </body>
    </html>
