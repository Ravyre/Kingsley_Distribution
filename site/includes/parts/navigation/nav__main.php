<?php
/**
 * Navigation Template; main navigation bar on entire site.
 */
?>

<nav class="nav">
  <div class="nav__bar">
    <a class="nav__logo" href="/">
      <picture>
        <source media="(max-width:794px)" data-srcset="//res.cloudinary.com/kingsley/image/upload/q_auto/w_auto/dpr_auto/logo/logo-shield_01.webp" srcset="#" type="image/webp">
        <source media="(max-width:794px)" data-srcset="//res.cloudinary.com/kingsley/image/upload/q_auto/w_auto/dpr_auto/logo/logo-shield_01.png" srcset="#" type="image/png">
        <source media="(max-width:794px)" data-srcset="//res.cloudinary.com/kingsley/image/upload/q_auto/w_auto/dpr_auto/logo/logo-shield_01.svg" srcset="#" type="image/svg+xml">
        <source data-srcset="//res.cloudinary.com/kingsley/image/upload/q_auto/w_auto/dpr_auto/logo/logo-txt_01.webp" srcset="#" type="image/webp">
        <source data-srcset="//res.cloudinary.com/kingsley/image/upload/q_auto/w_auto/dpr_auto/logo/logo-txt_01.png" srcset="#" type="image/png">
        <img data-src="//res.cloudinary.com/kingsley/image/upload/q_auto/w_auto/dpr_auto/logo/logo-txt_01.svg" src="#" alt="kingsley distribution logo">
      </picture>
    </a>

    <div class="nav__links">
      <div class="nav__links--contact">
        <div class="nav__links--contact-phone">
          <a href="tel:+441726862670">
            <span class="icon-phone"></span><span class="navinfo">+44 1726 862670</span>
            </a>
        </div>
        <div class="nav__links--contact-email">
          <a href="mailto:sales@kingsleydistribution.co.uk">
            <span class="icon-envelope"></span><span class="navinfo">sales@kingsleydistribution.co.uk</span>
          </a>
        </div>
      </div>
      <div id="burger" class="nav__burger">
        <span></span>
        <span></span>
        <span></span>
        <div class="nav__burger--cross"></div>
      </div>
      <span class="nav__burger--label">menu</span>
    </div>
  </div>
  <div class="nav__menu">
    <div class="nav__menu--links">
      <ul>
        <a href="/"><li>Home</li></a>
        <a href="/about"><li>About</li></a>
        <a href="javascript:void(0);"><li>Ranges</li></a>
        <a href="/faq"><li>FAQ</li></a>
        <a href="/contact"><li>Contact</li></a>
        <a id="nav__link--consent" href="javascript:void(0);"><li>Cookie Consent</li></a>
      </ul>
    </div>
    <div class="nav__menu--footer">
      <div class="nav__menu--footer--social">
        <a target="_blank" rel="noopener" href="https://www.facebook.com/Kingsley-Distribution-167297257264972/"><span class="icon-facebook"></span></a>
        <a target="_blank" rel="noopener" href="https://www.linkedin.com/company/kingsley-distribution"><span class="icon-linkedin"></span></a>
      </div>
      <!-- <div class="nav__menu--footer--legal">
        <a href="#"><span>Terms of Service</span></a>
        <a href="#"><span>Privacy Policy</span></a>
      </div> -->
    </div>
  </div>
</nav>
