<!-- WHAT WE DO -->
<section class="section featured-artists inverse-color" id="anchor02">
  <div class="container">
    <div class="row">
      <div class="text-center">
        <div class="separator-icon">
          <i class="fa fa-fw fa-microphone"></i>
        </div>
        <div class="voffset30"></div>
        <p class="pretitle"><?= $subtitulo ?></p>
        <div class="voffset20"></div>
        <h2 class="title"><?= $titulo ?></h2>
      </div>
    </div>
    <div class="voffset70"></div>
    <div class="row">

      <?php foreach ($imagenes as $img): ?>
        <div class="bloque-img col-xs-6 col-lg-3">
          <img class="img-responsive bloque-img-contenido" src="images/whatwedo/<?=$img['src']?>" alt="<?=$img['alt']?>">
          <p class="texto text-center"><?=$img['texto']?></p>
        </div>
      <?php endforeach; ?>

    </div>

  </div>
</section>
