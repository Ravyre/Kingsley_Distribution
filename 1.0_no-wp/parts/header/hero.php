<?php
/**
 * This is the template that displays all of the <head> section and everything up until <div class="content">
 */
?>

<?php
  $protocol = isset($_SERVER["HTTPS"]) ? 'https://' : 'http://';
  $url_base = $protocol . $_SERVER['HTTP_HOST'];
  $local = $url_base . '/Kingsley_Distribution/1.0_no-wp/';
?>

<?php if (strpos($_SERVER['SCRIPT_NAME'], 'index.php') !== false) : ?>
  <div class="home__hero">
    <div class="home__hero--cont">
      <h1 class="home__hero--head">Reliable and efficient distribution <br>
      <span>For wargaming retailers</span></h1>
      <hr>
      <h2 class="home__hero--sub">We are the UK\'s number one distributor for the tabletop industry</h2>
      <a class="btn__blu" href="#account">Open an account</a><a class="btn__wht" href="#about">Find out More</a>
    </div>
  </div>
<?php else: ?>
  <?php $namePage = basename($_SERVER['PHP_SELF'], '.php'); ?>
  <div class="<?php echo $namePage ?>__hero--colour">
    <div class="<?php echo $namePage ?>__hero--img">
      <picture>
        <source data-srcset="https://res.cloudinary.com/kingsley/image/upload/ranges/<?php echo $namePage ?>/<?php echo $namePage ?>_logo_01.webp" type="image/webp">
        <img class="<?php echo $namePage ?>__hero--logo" data-src="https://res.cloudinary.com/kingsley/image/upload/ranges/<?php echo $namePage ?>/<?php echo $namePage ?>_logo_01.png" alt="kingsley distribution ranges <?php echo $namePage ?> logo">
      </picture>
    </div>
  </div>
<?php endif; ?>
