<?php
/**
 * Component: fixed button on pages that scrolls users back to the top of the page.
 */
?>

<?php
/* Variables
============================================= */
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

if (strpos($url, 'error') != true): ?>
  <div class="to-top" id="to-top">
    <span class="icon-chevron-up2"></span>
  </div>

<?php endif;

?>
