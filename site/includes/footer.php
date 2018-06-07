<?php
/**
 * This is the template that displays all of the <head> section and everything up until <div class="content">
 */
?>

<?php
// config
require_once __DIR__ . ('/config.php');
?>

  <?php

  if (strpos($_SERVER['SCRIPT_NAME'], 'policies') == false):
    include ROOT_PATH . ('/includes/parts/call-to/newsletter.php');
  endif;

  ?>

  </div>
    <!-- footer -->
    <footer>
      <div class="row">
        <div class="col-2">© 2018 Kingsley Distribution Ltd</div>
        <div class="col-2"><a href="tel:+441726862670">01726 862670</a><span>|</span><a href="mailto:sals@kingsleydistribtion.co.uk">sales@kingsleydistribtion.co.uk</a></div>
      </div>
    </footer>

    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <?php include ROOT_PATH . ('/includes/lazyload.php') ?>
    <script src="<?php echo BASE_URL; ?>assets/js/scripts.min.js"></script>
    <?php include ROOT_PATH . ('/includes/serviceworker.php') ?>

  </body>
</html>
