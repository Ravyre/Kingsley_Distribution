<?php
/**
 * Template: Hero - Ranges
 */
?>

<?php $title = get_the_title(); ?>
<div class="<?php echo strtolower( $title ); ?>__hero--colour">
  <div class="<?php echo strtolower( $title ); ?>__hero--img">
    <picture>
      <source data-srcset="https://res.cloudinary.com/kingsley/image/upload/ranges/<?php echo strtolower( $title ); ?>/<?php echo strtolower( $title ); ?>_logo_01.webp" type="image/webp">
      <img class="<?php echo strtolower( $title ); ?>__hero--logo" data-src="https://res.cloudinary.com/kingsley/image/upload/ranges/<?php echo strtolower( $title ); ?>/<?php echo strtolower( $title ); ?>_logo_01.png" alt="kingsley distribution ranges <?php echo strtolower( $title ); ?> logo">
    </picture>
  </div>
</div>
