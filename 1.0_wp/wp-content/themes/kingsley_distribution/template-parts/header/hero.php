<?php if ( is_front_page() ) { ?>
  <!-- Hero -->
  <div class="home__hero">
    <div class="home__hero--cont">
      <h1 class="home__hero--head">Reliable and efficient distribution <br>
      <span>For wargaming retailers</span></h1>
      <hr>
      <h2 class="home__hero--sub">We are the UK's number one distributor for the tabletop industry</h2>
      <a class="btn__blu" href="#account">Open an account</a><a class="btn__wht" href="#about">Find out More</a>
    </div>
  </div> <?php
} else { ?>
  <!-- Hero -->
  <?php $title = get_the_title(); ?>
  <div class="<?php echo strtolower( $title ); ?>__hero--colour">
    <div class="<?php echo strtolower( $title ); ?>__hero--img">
      <picture>
        <source data-srcset="https://res.cloudinary.com/kingsley/image/upload/ranges/<?php echo strtolower( $title ); ?>/<?php echo strtolower( $title ); ?>_logo_01.webp" type="image/webp">
        <img class="<?php echo strtolower( $title ); ?>__hero--logo" data-src="https://res.cloudinary.com/kingsley/image/upload/ranges/<?php echo strtolower( $title ); ?>/<?php echo strtolower( $title ); ?>_logo_01.png" alt="kingsley distribution ranges <?php echo strtolower( $title ); ?> logo">
      </picture>
    </div>
  </div>
<?php } ?>
