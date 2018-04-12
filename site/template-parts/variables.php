<?php
/**
 * Global Variables
 */
?>
<?php
$protocol = isset($_SERVER["HTTPS"]) ? 'https://' : 'http://';
$url_base = $protocol . $_SERVER['HTTP_HOST'];
$local = $url_base . '/Kingsley_Distribution/site/';

$root_doc = $_SERVER['DOCUMENT_ROOT'] . '/Kingsley_Distribution/site/';

$namePage = basename($_SERVER['PHP_SELF'], '.php');
?>
