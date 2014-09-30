<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CysCode 1st Round</title>

    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px;
      }
    </style>
  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <?php if (isset($_SESSION['username'])): ?>
          <a class="brand pull-left" href="#"><i class="icon-fire"></i> CysCode 1st Round</a>
          <?php else: ?>
          <a class="brand pull-left" href="#"><i class="icon-fire"></i> CysCode 1st Round</a>
          <?php endif ?>
        </div>
      </div>
    </div>

    <div class="container">

      <?php echo $_content_ ?>

    </div>

    <script>
    console.log(<?php eh(round(microtime(true) - TIME_START, 3)) ?> + 'sec');
    </script>

  </body>
</html>
