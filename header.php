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
        <img class="img-responsive" src="images/logo.png" alt="logo" style="height:62px">
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
        <li><a href="<?= $idioma['link'] ?>"><img src="images/<?= $idioma['img'] ?>" width="26" alt="<?= $idioma['alt'] ?>"/></a></li>
      </ul>
    </div>

  </nav>
</header>
