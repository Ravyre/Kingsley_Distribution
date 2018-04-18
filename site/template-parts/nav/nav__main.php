<?php
/**
 * Navigation Template; main navigation bar on entire site.
 */
?>

<?php
  $protocol = isset($_SERVER["HTTPS"]) ? 'https://' : 'http://';
  $url_base = $protocol . $_SERVER['HTTP_HOST'];
  $local = $url_base . '/Kingsley_Distribution/1.0_no-wp/';
?>

<nav class="nav__cont">
  <ul class="nav__desktop">
    <li class="nav__item"><a href="//localhost/Kingsley_Distribution/1.0_no-wp/#about">About</a></li>
    <li class="nav__item"><a href="//localhost/Kingsley_Distribution/1.0_no-wp/#why">Why</a></li>
    <li class="nav__item"><a href="//localhost/Kingsley_Distribution/1.0_no-wp/#products">Products</a></li>
    <li class="nav__item"><a href="<?php echo $local ?>"><img class="logo" data-src="https://res.cloudinary.com/kingsley/image/upload/q_auto,f_auto/logo/logo-shield_01.svg" alt="kingsley distribution logo"></a></li>
    <li class="nav__item"><a href="//localhost/Kingsley_Distribution/1.0_no-wp/#latest">Latest</a></li>
    <li class="nav__item"><a href="//localhost/Kingsley_Distribution/1.0_no-wp/#faq">FAQ</a></li>
    <li class="nav__item"><a href="//localhost/Kingsley_Distribution/1.0_no-wp/#contact">Contact</a></li>
  </ul>
  <div class="nav__mobile">
    <a href="<?php echo $local ?>"><img class="logo" data-src="https://res.cloudinary.com/kingsley/image/upload/q_auto,f_auto/logo/logo-txt_01.svg" alt="kingsley distribution logo"></a>
    <div class="nav__burger">
      <div class="nav__burger--bun-top"></div>
      <div class="nav__burger--filling"></div>
      <div class="nav__burger--bun-btm"></div>
    </div>
    <ul class="nav__mobile--list">
      <li><a href="#about">About</a></li>
      <li><a href="#why">Why</a></li>
      <li><a href="#products">Products</a></li>
      <li><a href="#latest">Blog</a></li>
      <li><a href="#faq">FAQ</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </div>
</nav>
