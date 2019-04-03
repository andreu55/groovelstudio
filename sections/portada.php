<!-- INTRO -->
<section class="intro full-width jIntro" id="anchor00">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="slider-intro">
          <div id="slides">
            <div class="overlay"></div>
            <div class="slides-container">
              <?php foreach ($slides as $slide): ?>
                <img src="images/<?= $slide['src'] ?>" alt="<?= $slide['alt'] ?>">
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="vcenter text-center text-overlay">
      <div id="owl-main-text" class="owl-carousel">
        <?php foreach ($slides as $slide): ?>
          <h1 class="primary-title">
            <?= $slide['titulo'] ?>
          </h1>
        <?php endforeach; ?>
      </div>

      <!-- Boton que abre el video -->
      <i class="fa fa-youtube-play fa-5x youtube-color hidden-xs" aria-hidden="true" data-toggle="modal" data-target=".modal-video"></i>

      <!-- style="white-space:nowrap" -->
      <a href="#anchor05" class="btn btn-lg btn-danger hidden-sm hidden-md hidden-lg">
        <?= $slide['boton'] ?>
      </a>


    </div>

    <div class="modal fade modal-video" tabindex="-1" role="dialog">
      <!-- modal-lg -->
      <div class="modal-dialog">
        <!-- width="100%" height="100%" -->
        <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/GiQ5pBHTFRk" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>

  </div>
  <!-- hidden-xs hidden-sm -->
  <nav class="social-flotante">
    <ul>
      <?php foreach ($social_links as $s): ?>
        <li><a href="<?= $s['url'] ?>"><?= $s['nombre'] ?> <i class="fa fa-fw fa-<?= $s['icon'] ?>"></i></a></li>
      <?php endforeach; ?>
    </ul>
  </nav>
</section>

<!-- PLAYER -->
<div class="player horizontal">
  <div class="container">
    <div class="info-album-player">
      <div class="album-cover"><img src="images/groovel_player.png" alt="groovel_player"></div>
      <p class="album-title">Música de Muestra</p>
      <p class="artist-name">Groovel</p>
    </div>
    <div class="player-content">
      <audio preload></audio>
      <ol class="playlist">
        <li><a href="#" data-src="mp3/windroseisland.mp3">Windrose Island</a></li>
        <li><a href="#" data-src="mp3/arcadeapoclypse.mp3">Arcade Apocalypse</a></li>
        <li><a href="#" data-src="mp3/oneforsorrow.mp3">One for Sorrow</a></li>
        <li><a href="#" data-src="mp3/cavern.mp3">Awakening of Crescentia</a></li>
      </ol>
      <div class="nextprev">
        <span class="prev">prev</span>
        <span class="next">next</span>
      </div>
      <span class="btnloop">loop</span>
    </div>
  </div>
</div>
