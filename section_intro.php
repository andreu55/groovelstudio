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
      <!-- <div class="logo-intro"><img src="" alt=""></div> -->
      <div id="owl-main-text" class="owl-carousel">
        <?php foreach ($slides as $slide): ?>
          <!-- <div class="item"> -->
            <h1 class="primary-title"><?= $slide['titulo'] ?></h1>
          <!-- </div> -->
        <?php endforeach; ?>
      </div>
      <!-- <div class="voffset50"></div> -->
      <button type="button" class="btn btn-sm btn-youtube" data-toggle="modal" data-target=".modal-video">
        <!-- <img src="images/youtube1.png" alt="Youtube Channel" height="70" width="70"> -->
        <i class="fa fa-youtube-play fa-5x" aria-hidden="true"></i>
      </button>

    </div>

    <div class="modal fade modal-video" tabindex="-1" role="dialog" aria-labelledby="modal-videoLabel">
      <div class="modal-dialog modal-lg">
        <iframe width="100%" height="100%" src="https://www.youtube-nocookie.com/embed/Z3MPmmyIyfo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>

  </div>
  <nav class="social-flotante hidden-xs hidden-sm">
    <ul>
      <?php foreach ($social_links as $s): ?>
        <li><a href="<?= $s['url'] ?>"><?= $s['nombre'] ?> <i class="fa fa-fw fa-<?= $s['icon'] ?>"></i></a></li>
      <?php endforeach; ?>
    </ul>
  </nav>
</section>
