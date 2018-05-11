<?php
/**
 * This is the template that displays all of the <head> section and everything up until <div class="content">
 */
?>

<?php
  require $_SERVER['DOCUMENT_ROOT'] . ('/Kingsley_Distribution/site/template-parts/variables.php');
?>

  <?php include $root_doc . ('template-parts/call-to/newsletter.php') ?>

  </div> <!-- content end -->
    <!-- footer -->
    <footer>
      <div class="row">
        <div class="col-2">© 2018 Kingsley Distribution Ltd</div>
        <div class="col-2"><a href="tel:+441726862670">01726 862670</a><span>|</span><a href="mailto:sals@kingsleydistribtion.co.uk">sales@kingsleydistribtion.co.uk</a></div>
      </div>
    </footer>

    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script> -->
    <!-- <script src="<?php echo $local ?>/cookieconsent.min.js"></script> -->

    <?php include $root_doc . ('template-parts/footer/lazyload.php') ?>

    <script src="<?php echo $local ?>assets/js/scripts.min.js"></script>

    <?php // include $root_doc . ('template-parts/footer/serviceworker.php') ?>

  </body>
</html>
