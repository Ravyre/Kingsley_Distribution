<?php
/**
 * This is the template that displays all of the <head> section and everything up until <div class="content">
 */
?>

<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . ('/Kingsley_Distribution/site/parts/variables.php');
?>

<!DOCTYPE html>
<html lang="en-GB">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#11749c">
    <meta name="description" content="">
    <meta name="referrer" content="no-referrer">
    <?php include $root_doc . ('parts/header/open-graph.php') ?>

    <title>TEST • KD • <?php echo $namePage ?></title>

    <link rel="shortcut icon" href="<?php echo $local ?>favicon.ico" type="image/x-icon">
    <link rel="manifest" href="<?php echo $local ?>manifest.json">
    <link rel="stylesheet" href="<?php echo $local ?>css/style.min.css">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
  </head>
  <body>

    <!-- scroll to top -->
    <?php include $root_doc . ('parts/nav/nav__to-top.php') ?>

    <!-- header -->
  	<header>
      <!-- navigation -->
      <?php include $root_doc . ('parts/nav/nav__main.php') ?>

        <!-- hero -->
        <?php include $root_doc . ('parts/header/hero.php') ?>
    </header>

    <!-- content -->
    <div class="content">
