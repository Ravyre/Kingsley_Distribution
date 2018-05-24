<?php
/**
 * Contact Page
 */
?>

<?php
// config
require_once __DIR__ . ('/../includes/config.php');
// header
include ROOT_PATH . ('includes/header.php');
?>

<!-- Contact Us -->
<div class="contact__general">
  <div class="letter-g">
    <h2>Get in touch with us</h2>
  </div>
  <div class="contact__general--container">
    <div>
      <address>
        <div>
          <h3>Our Warehouse</h3>
          <p>Unit 1 Moorland Road Business Park,</p>
          <p>Moorland Road, Indian Queens,</p>
          <p>Cornwall, TR9 6GX</p>
        </div>
        <div>
          <h3>General Enquiries</h3>
          <p>sales@kingsleydistribution.co.uk</p>
        </div>
        <div>
          <h3>Call Us</h3>
          <p>+44 (0) 1726 862670</p>
        </div>
      </address>
      <div class="contact__general--container-account">
        <h3>Want to open an account with us?</h3>
        <p>Not a problem!</p>
        <p>You can open an account by sending us an email, telephoning us or even clicking on the link below and filling out a form.</p>
        <a>
          <span>Open an Account</span>
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 104 53"  xml:space="preserve">
            <g class="svg__arrow">
              <line x1="2.5" y1="26.5" x2="85.5" y2="26.5"/>
            	<line x1="86" y1="27" x2="71" y2="13"/>
            	<line x1="71" y1="41" x2="86" y2="26"/>
            </g>
            <g class="svg__target">
            	<circle cx="75.5" cy="26.5" r="24.5"/>
            </g>
          </svg>
        </a>
      </div>
    </div>

    <div class="contact__general--form">
      <?php include ROOT_PATH . ('/includes/parts/forms/general-enquiries.php'); ?>
    </div>

  </div>
</div>


<!-- Open an Account -->
<div class="contact__account">
  <div class="letter-o">
    <h2>Open an account with us</h2>
  </div>
  <p>Opening an account with us couldn't be easier.</p>
  <p>Fill out the form below, sit tight and we'll contact you as soon as your account is ready.</p><br>
  <p>Alternatively, you can <a class="contact__account--a" href="mailto:sales@kingsleydistribution.co.uk">email</a> or <a class="contact__account--a" href="tel:+441726862670">call</a> us directly to open an account.</p>
  <div role="form" class="wpcf7" id="wpcf7-f64-p65-o1" dir="ltr" lang="en-GB">
    <div class="screen-reader-response"></div>
    <?php include ROOT_PATH . ('/includes/parts/forms/open-account.php'); ?>
  </div>
</div>


<!-- Footer -->
<?php include ROOT_PATH . ('includes/footer.php') ?>
