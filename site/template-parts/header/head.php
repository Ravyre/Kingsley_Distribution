<?php
/**
 * Template: displays all of the <head> section and everything up until <div class="content">
 */
?>

<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . ('/simple_html_dom.php');
  require_once $_SERVER['DOCUMENT_ROOT'] . ('/Kingsley_Distribution/site/template-parts/variables.php');
?>

<!DOCTYPE html>
<html lang="en-GB">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#11749c">
    <meta name="description" content="Kingsley Distribution are an honest, fast and reliable distributor with an incredible catalogue of ranges for the warming and tabletop industry. Since our start in 2009 we have quickly become etablished as one of the best in our field.">
    <meta name="referrer" content="no-referrer">
    <?php include $root_doc . ('template-parts/header/social.php') ?>
    <title>TEST • KD • <?php echo $namePage ?></title>
    <link rel="shortcut icon" href="<?php echo $local ?>favicon.ico" type="image/x-icon">
    <link rel="manifest" href="<?php echo $local ?>manifest.json">
    <link rel="stylesheet" href="<?php echo $local ?>assets/css/style.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" /> -->
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo $local ?>/cookieconsent.min.css" /> -->
    <?php include $root_doc . ('cookieconsent.php'); ?>
  </head>
  <body>

    <!-- scroll to top -->
    <?php include $root_doc . ('template-parts/nav/nav__to-top.php'); ?>

    <!-- header -->
  	<header>

      <?php
      // https://stackoverflow.com/questions/408405/
      // https://stackoverflow.com/questions/3408049/

      /* Variables
      ============================================= */
      $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

      /* Functions
      ============================================= */
      function pagesHead($page, $head, $subHead) {
        $htmlOutput = <<<HTML
        <!-- hero -->
        <div class="{$page}__hero">
          <div class="{$page}__hero--colour">
            <div class="{$page}__hero--img">
              <div class="{$page}__hero--txt">
                <h1>{$head}</h1>
                <h4>{$subHead}</h4>
              </div>
            </div>
          </div>
        </div>
HTML;
        echo $htmlOutput;
      }

      /* Statements
      ============================================= */
      if (strpos($_SERVER['SCRIPT_NAME'], 'index') !== false):
        include $root_doc . ('template-parts/nav/nav__main.php');
        include $root_doc . ('template-parts/header/hero__index.php');

      elseif (strpos($_SERVER['SCRIPT_NAME'], '404') !== false):
        echo '';

      elseif (strpos($_SERVER['SCRIPT_NAME'], 'about') !== false):
        include $root_doc . ('template-parts/nav/nav__main.php');
        pagesHead("about", "World Class Wargaming Distribution", "Because we believe that the customer comes first, we will do our very best to ensure customer satisfacton at all times");

    elseif (strpos($_SERVER['SCRIPT_NAME'], 'faq') !== false):
      include $root_doc . ('template-parts/nav/nav__main.php');
      pagesHead("faq", "Have a Question?", "If you're unsure on anything, please take a moment to read through our FAQ");

    elseif (strpos($_SERVER['SCRIPT_NAME'], 'contact') !== false):
      include $root_doc . ('template-parts/nav/nav__main.php');
      pagesHead("contact", "How can we help?", "Have a question or would like to open an account? Drop us a line below; we love to help");

      elseif (strpos($_SERVER['REQUEST_URI'], 'ranges') == true):
        include $root_doc . ('template-parts/nav/nav__main.php');
        include $root_doc . ('template-parts/header/hero__ranges.php');

      endif;

      ?>
    </header>

    <!-- content -->
    <div class="content">
