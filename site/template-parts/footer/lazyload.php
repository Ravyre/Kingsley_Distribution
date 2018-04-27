<?php
/**
 * LazyLad
 */
?>

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
