<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Piemonte template | <?php print $title; ?> </title>

    <!-- Bootstrap -->
    <link href="css/vendor/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom -->
    <link href="css/custom.css" rel="stylesheet">
  </head>
  <body>
    <header>
      <nav class="navbar navbar-fixed-top navbar-inverse">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Piemonte</a>
          </div>
          <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
            <?php
              $class_Alpi = "";
              $class_Novara = "";
              $class_Monumenti = "";
              $class_Centro = "";
              $class_Architetture = "";
              $class_Lago = "";
              // if ($title == "Home") {
              //   $class_home = ' class="active"';
              // } else if ($title == "About") {
              //   $class_about = ' class="active"';
              // } else if ($title == "Contact") {
              //   $class_contact = ' class="active"';
              // }
              switch ($title) {
                case 'Le Alpi':
                  $class_Alpi = ' class="active"';
                  break;
                case 'Novara':
                  $class_Novara = ' class="active"';
                  break;
                case 'Monumenti e luoghi d-interesse':
                  $class_Monumenti = ' class="active"';
                  break;
                case 'Centro storico':
                  $class_Centro = ' class="active"';
                  break;
                case 'Architetture civili':
                  $class_Architetture = ' class="active"';
                  break;
                case 'Lago Maggiore':
                  $class_Lago = ' class="active"';
                  break;
              }
            ?>

              <li<?php print $class_Alpi; ?>><a href="le-alpi.php">Le Alpi</a></li>
              <li<?php print $class_Novara; ?>><a href="novara.php">Novara</a></li>
              <li<?php print $class_Monumenti; ?>><a href="monumenti-e-luoghi-d-interesse.php">Monumenti e luoghi d'interesse</a></li>
              <li<?php print $class_Centro; ?>><a href="centro-storico.php">Centro storico</a></li>
              <li<?php print $class_Architetture; ?>><a href="architetture-civili.php">Architetture civili</a></li>
              <li<?php print $class_Lago; ?>><a href="lago-maggiore.php">Lago maggiore</a></li>
            </ul>
          </div><!-- /.nav-collapse -->
        </div><!-- /.container -->
      </nav><!-- /.navbar -->
    </header>

    <div class="row">
      <div class="container">