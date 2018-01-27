<?php require (__DIR__.'/inc/class/autoload.php'); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>PixelSync_</title>
    <?php $autoload->css(); ?>
  </head>
  <body id="body-container">
    <div id="main-container" class="container">

        <?= $autoload->board(); ?>
        <?= $autoload->clock(); ?>
        <?= $autoload->weather(); ?>
        <?= $autoload->flashinfo(); ?>
        <?= $autoload->partners(); ?>
        <?= $autoload->schedule(); ?>


    </div>

      <div id="refresh"></div>

    <?php $autoload->js(); ?>
  </body>
</html>