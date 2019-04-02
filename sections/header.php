<?php
  $url = "http://groovel.cuentonomo.com";
?>

<!DOCTYPE html>

<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="<?= $lang ?>" dir="ltr" class="no-js"> <!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- Primary Meta Tags -->
  <title><?= $title ?></title>
  <meta name="title" content="<?= $title ?>">
  <meta name="description" content="<?= $description ?>">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?= $url ?>">
  <meta property="og:title" content="<?= $title ?>">
  <meta property="og:description" content="<?= $description ?>">
  <meta property="og:image" content="<?= $url ?>/favicon.png">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="<?= $url ?>">
  <meta property="twitter:title" content="<?= $title ?>">
  <meta property="twitter:description" content="<?= $description ?>">
  <meta property="twitter:image" content="<?= $url ?>/favicon.png">

  <!-- <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320"> -->
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">

  <meta name="robots" content="index, nofollow"/>

  <link rel="icon" type="image/png" href="favicon.png" sizes="196x196">

  <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="styles/vendor/bootstrap.min.css">
  <link rel="stylesheet" href="styles/vendor/font-awesome.min.css">
  <link rel="stylesheet" href="styles/vendor/superslides.css">
  <link rel="stylesheet" href="styles/vendor/owl.carousel.css">
  <link rel="stylesheet" href="styles/vendor/owl.transitions.css">
  <link rel="stylesheet" href="styles/vendor/flickity.min.css">
  <link rel="stylesheet" href="styles/vendor/swipebox.min.css">
  <!-- <link rel="stylesheet" href="styles/vendor/TimeCircles.css"> -->

  <link rel="stylesheet" href="styles/main.css">

  <!-- <link rel="stylesheet" href="styles/colors/color-yellow.css"> -->
  <!-- <link rel="stylesheet" href="styles/colors/color-lightblue.css"> -->
  <!-- <link rel="stylesheet" href="styles/colors/color-purple.css"> -->
  <!-- <link rel="stylesheet" href="styles/colors/color-green.css"> -->
  <!-- <link rel="stylesheet" href="styles/colors/color-militar.css"> -->
  <!-- <link rel="stylesheet" href="styles/colors/color-caqui.css"> -->
  <!-- <link rel="stylesheet" href="styles/colors/color-red.css"> -->

  <script src="scripts/vendor/modernizr.js"></script>
</head>

<body data-spy="scroll" data-target="#navbar-muziq" data-offset="80">

<!-- LOADER -->
<div id="mask">
  <div class="loader">
    <!-- <img src="images/loading.gif" alt='loading'> -->
    <div class="cssload-container">
      <div class="cssload-shaft1"></div>
      <div class="cssload-shaft2"></div>
      <div class="cssload-shaft3"></div>
      <div class="cssload-shaft4"></div>
      <div class="cssload-shaft5"></div>
      <div class="cssload-shaft6"></div>
      <div class="cssload-shaft7"></div>
      <div class="cssload-shaft8"></div>
      <div class="cssload-shaft9"></div>
      <div class="cssload-shaft10"></div>
    </div>
  </div>
</div>

<!-- HEADER -->
<header id="jHeader">
  <nav class="navbar navbar-default" role="navigation">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Desplegar navegación</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#anchor00">
        <img class="img-responsive" src="images/logo.png" alt="logo" style="height:51px">
        <b class="s4games visible-lg">Sound 4 Games</b>
      </a>
    </div>

    <div class="collapse navbar-collapse navbar-ex1-collapse" id="navbar-muziq">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#anchor00"><?= $barra[0] ?></a></li>
        <li><a href="#anchor01"><?= $barra[1] ?></a></li>
        <li><a href="#anchor02"><?= $barra[2] ?></a></li>
        <li><a href="#anchor03"><?= $barra[3] ?></a></li>
        <li><a href="#anchor04"><?= $barra[4] ?></a></li>
        <li><a href="#anchor05"><?= $barra[5] ?></a></li>
        <li><a href="<?= $idioma['link'] ?>"><img src="<?= $idioma['src'] ?>" width="26" alt="<?= $idioma['alt'] ?>"/></a></li>
      </ul>
    </div>

  </nav>
</header>
