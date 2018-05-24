<?php
/**
 * Error Page; 404
 */
?>

<?php
// config
require_once __DIR__ . ('/../../includes/config.php');
// header
include ROOT_PATH . ('includes/header.php');
?>

<div id="error" class="error-fof">
  <div class="error-fof__overlay">
    <div class="error-fof__overlay--inner">
      <img class="error-fof__logo" src="http://res.cloudinary.com/kingsley/image/upload/logo/logo-txt_01.svg" alt="kingsley distribution logo">
      <h1>Error <span>404</span></h1>
      <p>Whoops! It looks like the page you're looking for has been moved, removed, renamed or may have never existed in the first place.</p>
      <div class="error-fof__buttons">
        <a class="btn__wht" href="//kingsleydistribution.co.uk">Back to Homepage</a>
        <a class="btn__blu" href="mailto:sales@kingsleydistribution.co.uk?subject=404 Error Page">Report Problem</a>
      </div>
    </div>
  </div>
</div>
