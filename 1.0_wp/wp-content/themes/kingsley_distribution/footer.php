<?php
/**
* The template for displaying the footer
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package Kingsley Distribtion
 */
?>
      <?php get_template_part( '/template-parts/newsletter/newsletter', get_post_format() ); ?>
    </div> <!-- content -->
    <!-- Footer -->
    <footer>
      <div class="row">
        <div class="col-2">© 2018 Kingsley Distribution Ltd</div>
        <div class="col-2"><a href="tel:+441726862670">01726 862670</a><span>|</span><a href="mailto:sales@kingsleydistribution.co.uk">sales@kingsleydistribution.co.uk</a></div>
      </div>
    </footer>
    <?php
      wp_footer();
      wp_enqueue_style('dashicons');
    ?>
  </body>
</html>
