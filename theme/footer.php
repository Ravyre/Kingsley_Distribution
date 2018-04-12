<?php
/**
* The template for displaying the footer
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package Kingsley Distribtion
 */
?>

    </div> <!-- content -->
  <?php if (!is_404()) : ?>
    <?php get_template_part( '/template-parts/newsletter/newsletter', get_post_format() ); ?>
    <!-- Footer -->
    <footer>
      <div class="row">
        <div class="col-2">© 2018 Kingsley Distribution Ltd</div>
        <div class="col-2"><a href="tel:+441726862670">01726 862670</a><span>|</span><a href="mailto:sales@kingsleydistribution.co.uk">sales@kingsleydistribution.co.uk</a></div>
      </div>
    </footer>
  <?php endif; ?>
    <?php
      wp_footer();
      wp_enqueue_style('dashicons');
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-lazyload/10.4.1/lazyload.min.js"></script>
    <script>
      (function() {
        new LazyLoad({
          data_src: 'src',
          data_srcset: 'srcset'
        });
      }());
	  </script>
  </body>
</html>
