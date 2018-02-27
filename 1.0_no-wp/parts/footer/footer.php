<?php
/**
 * This is the template that displays all of the <head> section and everything up until <div class="content">
 */
?>

<?php
  $root_doc = $_SERVER['DOCUMENT_ROOT'] . '/Kingsley_Distribution/1.0_no-wp/';

  $protocol = isset($_SERVER["HTTPS"]) ? 'https://' : 'http://';
  $url_base = $protocol . $_SERVER['HTTP_HOST'];
  $local = $url_base . '/Kingsley_Distribution/1.0_no-wp/';
?>

  <?php include $root_doc . ('parts/call-to/newsletter.php') ?>
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
    <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
    <!-- https://github.com/verlok/lazyload -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-lazyload/10.4.1/lazyload.min.js"></script>
    <script>
      (function() {
        new LazyLoad({
          data_src: 'src',
          data_srcset: 'srcset'
        });
      }());
    </script>
    <script src="<?php echo $local ?>js/scripts.min.js"></script>
  </body>
</html>
