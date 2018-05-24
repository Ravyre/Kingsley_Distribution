<?php
/**
 * FAQ Page
 */
?>

<?php
// config
require_once __DIR__ . ('/../includes/config.php');
// header
include ROOT_PATH . ('includes/header.php');
?>

<!-- FAQ -->
<div class="faq__acc">
  <div class="letter-faq">
    <h2>Any questions? Read our FAQ</h2>
  </div>
  <p>Alternatively, <a href="#contact"><span>ask your own questions here.</span></a>
  <div class="faq__acc">
    <div class="faq__acc--card">
      <div class="faq__acc--title">How do I place an order with you?</div>
      <div class="faq__acc--panel">
        <p>Placing an order is really easy. You can contact us on our landline (01726 862670) or via email (sales@kingsleydistribution.co.uk).</p>
      </div>
    </div>
    <div class="faq__acc--card">
      <div class="faq__acc--title">I'm a consumer, can I order products from you?</div>
      <div class="faq__acc--panel">
        <p>Unfortunately not. We only sell directly to retailers.</p>
      </div>
    </div>
    <div class="faq__acc--card">
      <div class="faq__acc--title">I only trade online, can I still open an account?</div>
      <div class="faq__acc--panel">
        <p>Of course you can. This is not a problem at all.</p>
        <p>Be sure to send us an email or give us a call to open an account and place your first order.</p>
      </div>
    </div>
    <div class="faq__acc--card">
      <div class="faq__acc--title">Where do you ship to?</div>
      <div class="faq__acc--panel">
        <p>We send goods worldwide. We are based in Cornwall England, therefore there may be additional shipping charges for customers outside of the UK.</p>
      </div>
    </div>
    <div class="faq__acc--card">
      <div class="faq__acc--title">How soon after placing an order will my items be shipped?</div>
      <div class="faq__acc--panel">
        <p>Orders placed before 11:30am GMT normally are dispatched the next working day.</p>
      </div>
    </div>
    <div class="faq__acc--card">
      <div class="faq__acc--title">There's a problem with my order, what do I do?</div>
        <div class="faq__acc--panel">
        <p>Please get in contact with us as soon as possible so we can promptly deal with any issues you encounter.</p>
      </div>
    </div>
  </div>
</div>
<!-- Contact Us -->
<div class="faq__contact">
  <div class="letter-c">
    <h2>We'd Love to Hear from you</h2>
  </div>
  <div class="faq__contact--txt">
    <p>We are UK based but we have been providing services around the world for many years.</p>
    <p>Our office is open from Monday to Friday between 9am and 9pm GMT</p>
  </div>
  <a class="btn__contact"  href="/contact/"><span>Contact Us</span></a>
</div>

<!-- Footer -->
<?php include ROOT_PATH . ('includes/footer.php') ?>
