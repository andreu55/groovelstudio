
  <?php
    $lang = 'es';
    require 'head.php'
  ?>

  <body data-spy="scroll" data-target="#navbar-muziq" data-offset="80">

    <?php
      $barra = ['Inicio', 'Quiénes somos', 'Qué Hacemos', 'Trabajos', 'Nuestra Música', 'Contacta'];
      $idioma = ['link' => 'index_en.php', 'img' => 'eng_flag.png', 'alt' => 'ENG'];
      require 'header.php';
    ?>

    <!-- INTRO -->
    <section class="intro full-width jIntro" id="anchor00">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="slider-intro">
              <div id="slides">
                <div class="overlay"></div>
                <div class="slides-container">
                  <img src="images/bg01.jpg" alt="slide1">
                  <img src="images/bg01.jpg" alt="slide2">
                  <img src="images/bg01.jpg" alt="slide3">
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="vcenter text-center text-overlay">
          <div class="logo-intro"><img src="" alt=""></div>
          <div id="owl-main-text" class="owl-carousel">
            <div class="item">
              <h1 class="primary-title">Composición de Música</h1>
            </div>
            <div class="item">
              <h1 class="primary-title">Diseño de sonido</h1>
            </div>
            <div class="item">
              <h1 class="primary-title">Integración en Motor Gráfico</h1>
            </div>
          </div>
          <div class="voffset50"></div>
          <button type="button" class="btn" data-toggle="modal" data-target=".modal-video">
            <img src="images/youtube1.png" alt="Youtube Channel" height="70" width="70">
          </button>
        </div>


        <div class="modal fade modal-video" tabindex="-1" role="dialog" aria-labelledby="modal-videoLabel">
          <div class="modal-dialog modal-lg">
            <iframe width="100%" height="100%" src="https://www.youtube-nocookie.com/embed/Z3MPmmyIyfo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>

      </div>
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

    <!-- ABOUT -->
    <section class="section featured-artists" id="anchor01">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="voffset70"></div>

            <div class="voffset30"></div>
            <p class="pretitle">¿Quiénes somos?</p>
            <div class="voffset20"></div>
            <h2 class="title">Groovel Studio</h2>
            <div class="voffset80"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
                 <div class="gallery-cell col-xs-12 col-sm-6 col-md-4 col-lg-3">
               <div class="image">
                    <img src="images/about/juan_groovel.png" alt="">
                  </div> </div>
             <div class="gallery-cell col-xs-12 col-sm-6 col-md-4 col-lg-6">
            <div class="blog";>Somos Alberto y Juan, componemos música y diseñamos sonido. Ofrecemos servicios de producción de música de una gran cantidad de géneros y estilos, y de diseño de sonido para cualquier contenido audiovisual. <br><br>Estamos localizados en Madrid y Valencia y además de la producción sonora trabajamos con software especializado de videojuegos (Middleware) y edición de video. <br><br>Te ayudamos a contar las historias de tus videojuegos y a transmitir sus emociones; diseñamos sonido a medida para tu trailer cinematográfico, de tus animaciones y cualquier medio digital.
            </div>
            </div>
             <div class="gallery-cell col-xs-12 col-sm-6 col-md-4 col-lg-3">
                 <div class="image">
                    <img src="images/about/alberto_groovel.png" alt="">
                  </div>
               </div>
          </div>
        </div>
        <div class="voffset120"></div>
      </div>
    </section>

    <!-- WHAT WE DO -->
    <section class="section featured-artists inverse-color" id="anchor02">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="voffset70"></div>
            <div class="separator-icon">
              <i class="fa fa-microphone"></i>
            </div>
            <div class="voffset30"></div>
            <p class="pretitle">MÚSICA | EFECTOS DE SONIDO | AUDIO INTERACTIVO | INTEGRACIÓN EN MOTOR</p>
            <div class="voffset20"></div>
            <h2 class="title">QUÉ HACEMOS</h2>
            <div class="voffset80"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="voffset20"></div>
            <div class="js-flickity" data-flickity-options="{ &quot;cellAlign&quot;: &quot;left&quot;, &quot;wrapAround&quot;: false, &quot;contain&quot;: true, &quot;prevNextButtons&quot;: true }">
              <div class="gallery-cell col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="featured-artist">
                  <div class="image">
                    <img src="images/whatwedo/originalmusic.png" alt="">
                  </div>
                  <div class="rollover">
                    <div class="text">
                      <h4 class="title-artist"><span style="font-size:28px">Música <br>Original</h4>
                      <p>ORQUESTAL. POP. ROCK. ELECTRÓNICA. OTROS.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="gallery-cell col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="featured-artist">
                  <div class="image">
                    <img src="images/whatwedo/sounddesign.png" alt="">
                  </div>
                  <div class="rollover">
                    <div class="text">
                      <h4 class="title-artist"><span style="font-size:28px">Diseño <br>Sonoro</h4>
                      <p>DISEÑO DE SONIDO HQ. GRABACIÓN. FOLEY. LIBRERIAS.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="gallery-cell col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="featured-artist">
                  <div class="image">
                    <img src="images/whatwedo/interactiveaudio.png" alt="">
                  </div>
                  <div class="rollover">
                    <div class="text">
                      <h4 class="title-artist"><span style="font-size:28px">Audio <br>Interactiva</h4>
                      <p>COMPORTAMIENTO INTERACTIVO. EXPERIENCIA DE USUARIO ÚNICA. WWISE / FMOD.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="gallery-cell col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="featured-artist">
                  <div class="image">
                    <img src="images/whatwedo/engineintegration.png" alt="">
                  </div>
                  <div class="rollover">
                    <div class="text">
                      <h4 class="title-artist"><span style="font-size:28px">Integración<br>Motor Gráfico</h4>
                      <p>INTEGRACIÓN EN UNITY Y UNREAL ENGINE. PLUG-IN MASTER AUDIO. AUDIO MANAGER.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="voffset120"></div>
      </div>
    </section>

    <!-- WORKS -->
    <section class="section featured-artists" id="anchor03">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="voffset70"></div>
            <div class="separator-icon">
              <i class="fa fa-microphone"></i>
            </div>
            <div class="voffset30"></div>
            <p class="pretitle"></p>
            <div class="voffset20"></div>
            <h2 class="title">TRABAJOS</h2>
            <div class="voffset80"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="voffset20"></div>
            <table width="100%">
<thead>
<tr>
<th align="left"><span style="font-size:24px">JUEGO</th>
<th align="left"><span style="font-size:24px">TIPO DE TRABAJO</th>
<th align="left"><span style="font-size:24px">DESARROLLADOR</th>
<th align="left"><span style="font-size:24px">PLATAFORMA</th>
<th align="left"><span style="font-size:24px">AÑO</th>
</tr>
</thead>
<tbody>
<tr>
<td>-</td>
<td>-</td>
<td>-</td>
<td>-</td>
<td>-</td>
</tr>
<tr>
<td>Grefusa Heroes</td>
<td>Música y Efectos de Sonido</td>
<td>No Spoon Lab</td>
<td>Android / iOS</td>
<td>2019</td>
</tr>
<tr>
<td>My Granny Lala and Me</td>
<td>Sound Effects</td>
<td>Beatriz Olcina</td>
<td>PC</td>
<td>2019</td>
</tr>
<tr>
<td>Crisis Serena (WIP)</td>
<td>Música y Efectos de Sonido</td>
<td>Pixel Powa</td>
<td>PC</td>
<td>2018</td>
</tr>
<tr>
<td>River (WIP)</td>
<td>Música y Efectos de Sonido</td>
<td>Studio Istmo</td>
<td>PC</td>
<td>2017</td>
</tr>
<tr>
<td>Robo Ball</td>
<td>Música</td>
<td><a href="https://joanmartinezclari.wordpress.com/">Joan Martinez Clari</a></td>
<td><a href="https://play.google.com/store/apps/details?id=com.caparra.games.ball">Android</a> / iOS</td>
<td>2016</td>
</tr>
<tr>
<td>GenPoc</td>
<td>Música, Efectos de Sonido e Integración</td>
<td><a href="http://www.genpoc.com/">Drassana Games</a></td>
<td>PC</td>
<td>2016</td>
</tr>
<tr>
<td><a href="http://www.bluefxgames.com/App/JoeJump">Joe Jump</a></td>
<td>Música</td>
<td><a href="http://www.bluefxgames.com/">BlueFX Studio</a></td>
<td><a href="https://play.google.com/store/apps/details?id=com.bluefxgames.joejump">Android</a> / iOS</td>
<td>2016</td>
</tr>
<tr>
<td>Tic Tac Traca</td>
<td>Efectos de Sonido</td>
<td><a href="http://www.laboratoryofdreams.com/">The Laboratory of Dreams</a></td>
<td><a href="https://play.google.com/store/apps/details?id=com.laboratoryofdreams.tictactraca">Android</a> / iOS</td>
<td>2016</td>
</tr>
<tr>
<td>Mobsferatu</td>
<td>Efectos de Sonido</td>
<td><a href="http://www.cremagames.com/">Crema Games</a></td>
<td><a href="https://cremagames.itch.io/mobsferatu">PC</a></td>
<td>2015</td>
</tr>
<tr>
<td>EdVE</td>
<td>Producción de video y música</td>
<td><a href="https://www.facebook.com/groups/devsfromspain/">Devsfromspain</a> &amp; <a href="http://www.aevi.org.es/desarrollo-espanol/iniciativas/">AEVI</a></td>
<td><a href="http://www.groovelstudio.com/?page_id=487">Youtube</a></td>
<td>2015</td>
</tr>
<tr>
<td>Kill Blocks</td>
<td>Música y Efectos de Sonido</td>
<td><a href="http://mobilendo.com/">Mobilendo</a></td>
<td><a href="https://play.google.com/store/apps/details?id=com.mobilendo.killblocks">Android</a> / <a href="https://itunes.apple.com/us/app/kill-blocks/id969491786?mt=8">iOS</a></td>
<td>2015</td>
</tr>
</tbody>
</table>
          </div>
        </div>
        <div class="voffset120"></div>
      </div>
    </section>


    <!-- OUR MUSIC -->
    <section class="section discography inverse-color" id="anchor04">
      <div id="discography"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="voffset70"></div>
            <div class="separator-icon">
              <i class="fa fa-music"></i>
            </div>
            <div class="voffset30"></div>
            <p class="pretitle"><span style="color:white">TRABAJOS Y PORTFOLIO</p>
            <div class="voffset20"></div>
            <h2 class="title">NUESTRA MÚSICA</h2>
            <div class="voffset80"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <ul class="carousel-discography js-flickity" data-flickity-options="{ &quot;cellAlign&quot;: &quot;left&quot;, &quot;wrapAround&quot;: false, &quot;contain&quot;: true, &quot;prevNextButtons&quot;: true }">
              <!-- col-xlg-3 -->
              <li class="gallery-cell col-xs-12 col-sm-6 col-md-4">
                <div class="info-album">
                  <div class="cover open-disc" data-url="discs/disc-01.html">
                    <img src="images/ourmusic/orchestralandsymphonic.png" alt="">
                    <div class="rollover">
                      <i class="fa fa-soundcloud"></i>
                      <p>abrir lista de reproducción</p>
                    </div>
                  </div>
                  <p class="artist">ORQUESTAL Y SINFÓNICO</p>
                </div>
              </li>
              <li class="gallery-cell col-xs-12 col-sm-6 col-md-4">
                <div class="info-album">
                  <div class="cover open-disc" data-url="discs/disc-02.html">
                    <img src="images/ourmusic/electronicgenres.png" alt="">
                    <div class="rollover">
                      <i class="fa fa-soundcloud"></i>
                      <p>abrir lista de reproducción</p>
                    </div>
                  </div>
                  <p class="artist">GÉNEROS ELECTRÓNICOS</p>
                </div>
              </li>
              <li class="gallery-cell col-xs-12 col-sm-6 col-md-4">
                <div class="info-album">
                  <div class="cover open-disc" data-url="discs/disc-03.html">
                    <img src="images/ourmusic/modernband.png" alt="">
                    <div class="rollover">
                      <i class="fa fa-soundcloud"></i>
                      <p>abrir lista de reproducción</p>
                    </div>
                  </div>
                  <p class="artist">BANDA MODERNA</p>
                </div>
              </li>
              <li class="gallery-cell col-xs-12 col-sm-6 col-md-4">
                <div class="info-album">
                  <div class="cover open-disc" data-url="discs/disc-04.html">
                    <img src="images/ourmusic/retro.png" alt="">
                    <div class="rollover">
                      <i class="fa fa-soundcloud"></i>
                      <p>listen playlist</p>
                    </div>
                  </div>
                  <p class="artist">RETRO</p>
                </div>
              </li>
              <li class="gallery-cell col-xs-12 col-sm-6 col-md-4">
                <div class="info-album">
                  <div class="cover open-disc" data-url="discs/disc-05.html">
                    <img src="images/ourmusic/folkandethinc.png" alt="">
                    <div class="rollover">
                      <i class="fa fa-soundcloud"></i>
                      <p>abrir lista de reproducción</p>
                    </div>
                  </div>
                  <p class="artist">ÉTNICO Y FOLK</p>
                </div>
              </li>
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

    <?php
      $titulo = "MANTENTE EN CONTACTO";
      $subtitulo = "¡Salúdanos!";
      $nombre = "Tu nombre";
      $email = "Tu E-mail";
      $mensaje = "Tu mensaje";
      $estudio_musica = "Estudio de Música";
      $buscanos = "¡Búscanos en redes sociales!";
      require 'contacto.php';
    ?>

    <?php
      $copy = "Toda la música y trabajos protegidos bajo licencia Creative Commons.";
      require 'footer.php';
    ?>
