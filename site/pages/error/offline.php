<?php
/**
 * Offline (fetched by ServiceWorker)
 */
?>

<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . ('/Kingsley_Distribution/site/template-parts/variables.php');
?>

<!-- Header -->
<?php include $root_doc . ('template-parts/header/head.php'); ?>

<div id="error" class="error-offline">
  <div class="error-offline__overlay">
    <div class="error-offline__overlay--inner">
      <img class="error-offline__logo" src="http://res.cloudinary.com/kingsley/image/upload/logo/logo-txt_01.svg" alt="kingsley distribution logo">
      <h1>You're <span>offline</span></h1>
      <p>You don't have internet connect at the moment. <br> Don't worry, you can still contact us via telephone.</p>
      <h2>Call us at: <span><a href="tel:+441726862670">+44 1726 862670</a></span></h2>
    </div>
  </div>
</div>
