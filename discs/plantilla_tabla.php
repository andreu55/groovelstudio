<div class="container">
  <div class="close-btn"></div>
  <article class="post-item">
    <div class="row">
      <div class="col-sm-6">
        <img class="img-responsive" src="<?= $imagen ?>" alt="<?= $titulo ?>">
        <p class="date">
          <span class="day"><?= $any ?></span>
          <!-- <span class="month">2019</span> -->
        </p>
      </div>
      <div class="col-sm-6">
        <div class="voffset30"></div>
        <h4 class="title small"><span>Plataforma:</span> <?= $plataforma ?></h4>
        <h3 class="title post"><?= $titulo ?></h3>
        <p><?= $texto ?></p>
        <?php if (isset($boton) && $boton): ?>
          <a href="<?= $boton['href'] ?>" class="btn btn-danger">
            <?= $boton['titulo'] ?>
          </a>
        <?php endif; ?>
      </div>
    </div>
  </article>
</div>
