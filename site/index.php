<?php
/**
 * Index Page; first page viewed when loading website.
 */
?>

<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . ('/Kingsley_Distribution/site/template-parts/variables.php');
?>

<?php
include $root_doc . ('template-parts/header/head.php');
?>

<!-- About -->
<div  id="about" class="home__about scrollspy">
  <div class="letter-a">
    <h2>About Kingsley Distribution</h2>
  </div>
  <div>
    <p>Here at Kingsley Distribution, we pride ourselves on our fast, honest and professional service, as well as our incredible catalogue of ranges.</p>
    <p>Being a leading wargaming distributor makes us one of the best places to get wargames and specialist stock or accessories for the tabletop industry. We began trading in 2009 and have quickly become etablished as one of the best in our field.</p>
    <p>With a varied and large selection of ranges to choose from, we can cater to almost any need you, or your customers, might require. We are official distributors for several extremely popular ranges such as: TTCombat, Hawk Wargames, Infinity, Army Painter, Knight Models and many more!</p>
    <p>At Kingsley Distribution, we believe the customer comers first; we will do our utmost to ensure customer satisfaction at all times.</p>
  </div>
</div>

<!-- Why Choose Us -->
<div id="why" class="home__why-us scrollspy">
  <div class="letter-w">
    <h2>Why Choose Kingsley Distribution</h2>
  </div>
  <div class="row">
    <div class="col-3">
      <span class="icon-thumbs-o-up"></span>
        <h3>Experienced</h3>
        <p>Our staff are extremely knowledgeable in our product ranges to ensure you receive the best advice to start-up or expand your current range.</p>
    </div>
    <div class="col-3">
      <span class="icon-clock-o"></span>
      <h3>Efficient</h3>
      <p>We pride ourselves in our rapid service and efficient turnaround of orders.
        All mainland Uk orders are shipped via 24 hour courier delivery.</p>
    </div>
    <div class="col-3">
      <span class="icon-handshake-o"></span>
      <h3>Trusted</h3>
      <p>We sell to over 300 stores in the UK alone, and are continually expanding in customers in Europe, USA and the rest of the world.</p>
    </div>
  </div>
</div>

<!-- Product Ranges -->
<div id="products" class="home__ranges scrollspy">
  <?php include $root_doc . ('template-parts/ranges/ranges__grid.php'); ?>
</div>

<!-- Blog -->
  <!-- <div id="latest" class="home__blog scrollspy">
    <div class="letter-l">
    <h2>Keep up-to-date with our news and announcements</h2>
  </div>
    <?php // include $root_doc . ('template-parts/blog/blog__index.php'); ?>
</div> -->

<!-- FAQ -->
<div id="faq" class="home__faq scrollspy">
  <div class="letter-faq">
    <h2>Any questions? Read our FAQ</h2>
  </div>
  <p>Alternatively, <a href="#contact"><span>ask your own questions here.</span></a>
    <div class="home__acc">
    <div class="home__acc--card">
      <div class="home__acc--title">How do I place an order with you?</div>
      <div class="home__acc--panel">
        <p>Placing an order is really easy. You can contact us on our landline (01726 862670) or via email (sales@kingsleydistribution.co.uk).</p>
      </div>
    </div>
    <div class="home__acc--card">
      <div class="home__acc--title">I'm a consumer. can I order products from you?</div>
      <div class="home__acc--panel">
        <p>Unfortunately not. We only sell directly to retailers.</p>
      </div>
    </div>
    <div class="home__acc--card">
      <div class="home__acc--title">I only trade online, can I still open an account?</div>
      <div class="home__acc--panel">
        <p>Of course you can. This is not a problem at all.</p>
        <p>Be sure to send us an email or give us a call to open an account and place your first order.</p>
      </div>
    </div>
    <div class="home__acc--card">
      <div class="home__acc--title">Where do you ship to?</div>
      <div class="home__acc--panel">
        <p>We send goods worldwide. We are based in Cornwall England, therefore there may be additional shipping charges for customers outside of the UK.</p>
      </div>
    </div>
    <div class="home__acc--card">
      <div class="home__acc--title">How soon after placing an order will my items be shipped?</div>
      <div class="home__acc--panel">
        <p>Orders placed before 11:30am GMT normally are dispatched the next working day.</p>
      </div>
    </div>
    <div class="home__acc--card">
      <div class="home__acc--title">There's a problem with my order, what do I do?</div>
        <div class="home__acc--panel">
        <p>Please get in contact with us as soon as possible so we can promptly deal with any issues you encounter.</p>
      </div>
    </div>
  </div>
</div>

<!-- Open an Account -->
<div id="account" class="home__open-account scrollspy">
  <div class="letter-o">
    <h2>Open an account with us</h2>
  </div>
  <p>Opening an account with us couldn't be easier.</p>
  <p>Fill out the form below, sit tight and we'll contact you as soon as your account is ready.</p><br>
  <p>Alternatively, you can <a class="home__open-account--a" href="mailto:sales@kingsleydistribution.co.uk">email</a> or <a class="home__open-account--a" href="tel:+441726862670">call</a> us directly to open an account.</p>
  <div role="form" class="wpcf7" id="wpcf7-f64-p65-o1" dir="ltr" lang="en-GB">
    <div class="screen-reader-response"></div>
    <form action="/Kingsley%20Distribution/1.0_wp/index.php/contact-test/#wpcf7-f64-p65-o1" method="post" class="wpcf7-form" novalidate="novalidate">
      <div style="display: none;">
        <input name="_wpcf7" value="64" type="hidden">
        <input name="_wpcf7_version" value="4.9.2" type="hidden">
        <input name="_wpcf7_locale" value="en_GB" type="hidden">
        <input name="_wpcf7_unit_tag" value="wpcf7-f64-p65-o1" type="hidden">
        <input name="_wpcf7_container_post" value="65" type="hidden">
      </div>
      <div class="col-2">
        <span class="wpcf7-form-control-wrap home_forename">
          <input name="home_forename" id="forename" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" aria-labelledby="forename" placeholder="Forename" type="text">
        </span>
        <span class="wpcf7-form-control-wrap home_surname">
          <input name="home_surname" id="surname" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Surname" type="text">
        </span>
        <span class="wpcf7-form-control-wrap home_email">
          <input name="home_email" id="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email" type="email">
        </span>
        <span class="wpcf7-form-control-wrap home_telephone">
          <input name="home_telephone" id="telephone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" placeholder="Phone" type="tel">
        </span>
        <span class="wpcf7-form-control-wrap home_company">
          <input name="home_company" id="company-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Company Name" type="text">
        </span>
        <span class="wpcf7-form-control-wrap home_vat">
          <input name="home_vat" id="vat-number" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="VAT Number (if applicable)" type="text">
        </span>
        <span class="wpcf7-form-control-wrap home__address">
          <input name="home__address" id="address" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form__address" aria-required="true" aria-invalid="false" placeholder="Company Address" type="text">
        </span>
        <span class="wpcf7-form-control-wrap home__message">
          <textarea name="home__message" id="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea form__message" aria-invalid="false" placeholder="Message"></textarea>
        </span>
        <div>
          <input value="Send" id="send" class="wpcf7-form-control wpcf7-submit btn__wht" type="submit">
          <span class="ajax-loader"></span>
        </div>
      </div>
      <div class="wpcf7-response-output wpcf7-display-none"></div>
    </form>
  </div>
</div>

<!-- Contact Us -->
<div id="contact" class="home__contact scrollspy">
  <div class="letter-c">
    <h2>We'd Love to Hear from you</h2>
  </div>
  <p>We are UK based but we have been providing services around the world for many years.</p>
  <p>Our office is open from Monday to Friday between 9am and 9pm GMT</p>
  <div class="home__contact--info">
    <div>
      <a class="a-wht" href="mailto:sales@kingsleydistribution.co.uk">
        <span class="icon icon-envelope"></span>
        sales@kingsleydistribution.co.uk
      </a>
    </div>
    <div>
      <a class="a-wht" href="tel:+441726862670">
        <span class="icon icon-phone5"></span>
        01726 862670
      </a>
    </div>
    <div>
      <a class="a-wht" href="https://goo.gl/maps/XVh2VxJxoL62">
        <p><span class="icon icon-map-marker2"></span></p>
        Kingsley Distribtion,<br>Unit 1, Moorland Road Business Park,<br>Moorland Road, Indian Queens,<br> Cornwall, TR9 6GX
      </a>
    </div>
  </div>
</div>

<!-- Footer -->
<?php include $root_doc . ('template-parts/footer/footer.php') ?>
