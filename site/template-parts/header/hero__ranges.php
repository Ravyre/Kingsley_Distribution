<?php
/**
 * Template: Hero - Ranges
 */
?>

<?php $namePage = basename($_SERVER['PHP_SELF'], '.php'); ?>
<div class="<?php echo $namePage ?>__hero--colour">
  <div class="<?php echo $namePage ?>__hero--img">
    <picture>
      <source data-srcset="https://res.cloudinary.com/kingsley/image/upload/ranges/<?php echo $namePage ?>/<?php echo $namePage ?>_logo_01.webp" type="image/webp">
      <img class="<?php echo $namePage ?>__hero--logo" data-src="https://res.cloudinary.com/kingsley/image/upload/ranges/<?php echo $namePage ?>/<?php echo $namePage ?>_logo_01.png" alt="kingsley distribution ranges <?php echo $namePage ?> logo">
    </picture>
  </div>
</div>
