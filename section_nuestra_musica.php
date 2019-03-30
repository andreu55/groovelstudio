<!-- OUR MUSIC -->
<section class="section discography inverse-color" id="anchor04">
  <div id="discography"></div>
  <div class="container">
    <div class="row">
      <div class="text-center">
        <div class="voffset70"></div>
        <div class="separator-icon">
          <i class="fa fa-music"></i>
        </div>
        <div class="voffset30"></div>
        <p class="pretitle"><?=$subtitulo?></p>
        <div class="voffset20"></div>
        <h2 class="title"><?=$titulo?></h2>
        <div class="voffset80"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <ul class="carousel-discography js-flickity" data-flickity-options='{"cellAlign":"left", "wrapAround":false, "contain":true, "prevNextButtons":true}'>
          <?php foreach ($portfolio as $port): ?>
            <li class="gallery-cell col-xs-12 col-sm-6 col-md-4">
              <div class="info-album">
                <div class="cover open-disc" data-url="<?=$port['url']?>">
                  <img src="images/ourmusic/<?=$port['src']?>" alt="">
                  <div class="rollover">
                    <i class="fa fa-soundcloud"></i>
                    <p><?=$abrir_lista?></p>
                  </div>
                </div>
                <p class="artist"><?=$port['texto']?></p>
              </div>
            </li>
          <?php endforeach; ?>
        </ul>
        <div class="voffset90"></div>
      </div>
    </div>
  </div>
  <!-- DETAILS DISCO -->
  <div id="project-show"></div>
  <div class="section player-album project-window">
    <div class="project-content"></div><!-- AJAX Dinamic Content -->
  </div>
</section>
