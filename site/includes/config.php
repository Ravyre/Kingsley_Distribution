<?php
/**
 * The base configuration for Kingsley Distribution
 */

// https://teamtreehouse.com/community/how-do-i-correctly-link-my-css-file-to-both-my-indexphp-and-my-include-php-files-when-the-whole-site-is-within-a-folder
// http://www.phptherightway.com/
// https://teamtreehouse.com/community/difference-between-rootpath-and-baseurl
// https://codereview.stackexchange.com/questions/79528/

// https://stackoverflow.com/questions/14752470/


/*--------------------------------------------------------------
  Variables
--------------------------------------------------------------*/
$pagename = basename($_SERVER['PHP_SELF'], '.php');

$brixly = '5.101.139.178';

$localhost = array(
  'localhost',
  '127.0.0.1',
  '::1'
);


/*--------------------------------------------------------------
  PHP Version
--------------------------------------------------------------*/
// Find out what version of PHP is being used
// echo 'Current PHP version: ' . phpversion();


/*--------------------------------------------------------------
  Errors
--------------------------------------------------------------*/


/*--------------------------------------------------------------
  Defines
--------------------------------------------------------------*/
if (in_array($_SERVER['REMOTE_ADDR'], $localhost)) {

  // use for assets (css, js, imgs, etc)
  define( "BASE_URL", "/Kingsley_Distribution/site/" );

  // use for includes (header, footer, etc)
  define( "ROOT_PATH", $_SERVER["DOCUMENT_ROOT"] . "/Kingsley_Distribution/site/" );

  // page name; takes file name, removes extension and prints the result
  define( "PAGE_NAME", ucwords($pagename) );

}

?>
