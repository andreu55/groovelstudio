
  <?php
    $lang = 'en';
    require 'head.php'
  ?>

  <body data-spy="scroll" data-target="#navbar-muziq" data-offset="80">

    <?php
      $barra = ['Home', 'About', 'What we do', 'Works', 'Our Music', 'Contact'];
      $idioma = ['link' => 'index.php', 'img' => 'esp_flag.png', 'alt' => 'ESP'];
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
                  <img src="images/bg02.jpg" alt="slide1">
                  <img src="images/bg01.jpg" alt="slide2">
                  <img src="images/bg03.png" alt="slide3">
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="vcenter text-center text-overlay">
          <div class="logo-intro"><img src="" alt=""></div>
          <div id="owl-main-text" class="owl-carousel">
            <div class="item">
              <h1 class="primary-title">Video Games Music</h1>
            </div>
            <div class="item">
              <h1 class="primary-title">HQ Sound Effects</h1>
            </div>
            <div class="item">
              <h1 class="primary-title">Engine Interactive</h1>
            </div>
          </div>
          <div class="voffset50"></div>
          <h2 class="subtitle-text">LET'S CREATE TOGETHER</h2>
          <button type="button" class="btn" data-toggle="modal" data-target=".modal-video">
            <img src="images/youtube1.png" alt="Youtube Channel" height="70" width="70">
          </button>
          <!--<a href="#anchor05" class="btn btn-invert">Learn more</a>-->
        </div>

        <!-- Modal -->
        <div class="modal fade modal-video" tabindex="-1" role="dialog" aria-labelledby="modal-videoLabel">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/Z3MPmmyIyfo?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- PLAYER -->
    <div class="player horizontal">
      <div class="container">
        <div class="info-album-player">
          <div class="album-cover"><img src="images/groovel_player.png" alt="groovel_player"></div>
          <p class="album-title">Preview Music</p>
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
            <div class="separator-icon">
              <i class="fa fa-microphone"></i>
            </div>
            <div class="voffset30"></div>
            <p class="pretitle">2 MEN STUDIO</p>
            <div class="voffset20"></div>
            <h2 class="title">Juan Novella & <br>Alberto Trigueros</h2>
            <div class="voffset80"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="voffset20"></div>
            <div class="js-flickity" data-flickity-options="{ &quot;cellAlign&quot;: &quot;left&quot;, &quot;wrapAround&quot;: false, &quot;contain&quot;: true, &quot;prevNextButtons&quot;: true }">
              <div class="gallery-cell col-xs-12 col-sm-6 col-md-4 col-lg-3">
                 <div>
              <p><span style="font-size:18px;letter-spacing: 2px;line-height: 1px;">"As a teenager I found myself composing music for an indie band. I realized I was enjoying it more than anything before. After several years I can say I still feel the same."<br><br>Juan Novella "Hust"<br> Valencia, Spain</p>
               </div>
              </div>
              <div class="gallery-cell col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="featured-artist">
                  <div class="image">
                    <img src="images/about/juan_groovel.png" alt="">
                  </div>
                  <div class="rollover">
                    <ul class="social">
                      <li><a href="https://twitter.com/Juan_Hust"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="https://soundcloud.com/juan-hust-novella"><i class="fa fa-soundcloud"></i></a></li>
                    </ul>
                    <div class="text">
                      <h6 class="title-artist"> <span style="font-size:26px"> Juan <br>Novella <br>(Valencia)</h4>
                      <p>MUSIC COMPOSER. ORCHESTRAL. ETHNIC. MODERN BAND. SOUND EFFECTS. ENGINE INTEGRATION.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="gallery-cell col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="featured-artist">
                  <div class="image">
                    <img src="images/about/alberto_groovel.png" alt="">
                  </div>
                  <div class="rollover">
                     <ul class="social">
                      <li><a href="https://twitter.com/Groovel_IC"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="https://soundcloud.com/al-tp-66676346"><i class="fa fa-soundcloud"></i></a></li>
                    </ul>
                    <div class="text">
                      <h6 class="title-artist"><span style="font-size:26px">Alberto <br>Trigueros <br>(Madrid)</h4>
                      <p>ELECTRONIC GENRES. SOUND TECHNICIAN. PRODUCTION. MIX. MASTERING. SOUND EFFECTS.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="gallery-cell col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div>
              <p><span style="font-size:18px;letter-spacing: 2px;line-height: 1px;">"I love trying to understand every sound, its texture. Looking for an equilibrium and the coherence in our mixes. I think that a sound that finds his place is a happy sound."<br><br>Alberto Trigueros<br> Madrid, Spain</p>
               </div>
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
            <p class="pretitle">| MUSIC | SOUND EFFECTS | INTERACTIVE | ENGINE INTEGRATION |</p>
            <div class="voffset20"></div>
            <h2 class="title">WHAT WE DO</h2>
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
                      <h4 class="title-artist"><span style="font-size:28px">Original <br>Music</h4>
                      <p>ORCHESTRA. POP. ROCK. ELECTRONIC. OTHERS.</p>
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
                      <h4 class="title-artist"><span style="font-size:28px">Sound <br>Design</h4>
                      <p>HIGH QUALITY SOUND DESIGN. RECORDING FOLEY. LIBRARY.</p>
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
                      <h4 class="title-artist"><span style="font-size:28px">Interactive <br>Audio</h4>
                      <p>INTERACTIVE BEHAVIOUR. UNIQUE USER EXPERIENCE. FMOD & WWISE.</p>
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
                      <h4 class="title-artist"><span style="font-size:28px">Engine <br>Integration </h4>
                      <p>WORK WITH UNITY. MASTER AUDIO. UNREAL ENGINE. INTEGRATION.</p>
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
            <h2 class="title">PUBLISHED WORKS</h2>
            <div class="voffset80"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="voffset20"></div>
            <table width="100%">
<thead>
<tr>
<th align="left"><span style="font-size:24px">Game</th>
<th align="left"><span style="font-size:24px">Type of Work</th>
<th align="left"><span style="font-size:24px">Developer</th>
<th align="left"><span style="font-size:24px">Platform</th>
<th align="left"><span style="font-size:24px">Year</th>
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
<td>Music & Sound Effects</td>
<td>No Spoon Lab</td>
<td>Android & iOs</td>
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
<td>Music & Sound Effects</td>
<td>Pixel Powa</td>
<td>PC</td>
<td>2018</td>
</tr>
<tr>
<td>River (WIP)</td>
<td>Music & Sound Effects</td>
<td>Studio Istmo</td>
<td>PC</td>
<td>2017</td>
</tr>
<tr>
<td>Robo Ball</td>
<td>Music</td>
<td><a href="https://joanmartinezclari.wordpress.com/">Joan Martinez Clari</a></td>
<td><a href="https://play.google.com/store/apps/details?id=com.caparra.games.ball">Android</a> / iOS</td>
<td>2016</td>
</tr>
<tr>
<td>GenPoc</td>
<td>Music, Sound Effects &amp; Integration</td>
<td><a href="http://www.genpoc.com/">Drassana Games</a></td>
<td>PC</td>
<td>2016</td>
</tr>
<tr>
<td><a href="http://www.bluefxgames.com/App/JoeJump">Joe Jump</a></td>
<td>Music</td>
<td><a href="http://www.bluefxgames.com/">BlueFX Studio</a></td>
<td><a href="https://play.google.com/store/apps/details?id=com.bluefxgames.joejump">Android</a> / iOS</td>
<td>2016</td>
</tr>
<tr>
<td>Tic Tac Traca</td>
<td>Sound Effects</td>
<td><a href="http://www.laboratoryofdreams.com/">The Laboratory of Dreams</a></td>
<td><a href="https://play.google.com/store/apps/details?id=com.laboratoryofdreams.tictactraca">Android</a> / iOS</td>
<td>2016</td>
</tr>
<tr>
<td>Mobsferatu</td>
<td>Sound Effects</td>
<td><a href="http://www.cremagames.com/">Crema Games</a></td>
<td><a href="https://cremagames.itch.io/mobsferatu">PC</a></td>
<td>2015</td>
</tr>
<tr>
<td>EdVE</td>
<td>Music &amp; Video Production</td>
<td><a href="https://www.facebook.com/groups/devsfromspain/">Devsfromspain</a> &amp; <a href="http://www.aevi.org.es/desarrollo-espanol/iniciativas/">AEVI</a></td>
<td><a href="http://www.groovelstudio.com/?page_id=487">Youtube</a></td>
<td>2015</td>
</tr>
<tr>
<td>Kill Blocks</td>
<td>Music &amp; Sound Effects</td>
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
            <p class="pretitle"><span style="color:white">Works & Portfolio</p>
            <div class="voffset20"></div>
            <h2 class="title">OUR MUSIC</h2>
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
                      <p>listen playlist</p>
                    </div>
                  </div>
                  <p class="artist">Orchestral & Symphonic</p>
                </div>
              </li>
              <li class="gallery-cell col-xs-12 col-sm-6 col-md-4">
                <div class="info-album">
                  <div class="cover open-disc" data-url="discs/disc-02.html">
                    <img src="images/ourmusic/electronicgenres.png" alt="">
                    <div class="rollover">
                      <i class="fa fa-soundcloud"></i>
                      <p>listen playlist</p>
                    </div>
                  </div>
                  <p class="artist">Electronic Genres</p>
                </div>
              </li>
              <li class="gallery-cell col-xs-12 col-sm-6 col-md-4">
                <div class="info-album">
                  <div class="cover open-disc" data-url="discs/disc-03.html">
                    <img src="images/ourmusic/modernband.png" alt="">
                    <div class="rollover">
                      <i class="fa fa-soundcloud"></i>
                      <p>listen playlist</p>
                    </div>
                  </div>
                  <p class="artist">Modern Band</p>
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
                  <p class="artist">Retro</p>
                </div>
              </li>
              <li class="gallery-cell col-xs-12 col-sm-6 col-md-4">
                <div class="info-album">
                  <div class="cover open-disc" data-url="discs/disc-05.html">
                    <img src="images/ourmusic/folkandethinc.png" alt="">
                    <div class="rollover">
                      <i class="fa fa-soundcloud"></i>
                      <p>listen playlist</p>
                    </div>
                  </div>
                  <p class="artist">Folk & Ethnic</p>
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
      $titulo = "Get in touch";
      $subtitulo = "say hello!";
      $nombre = "Your name";
      $email = "Your email";
      $mensaje = "Your message";
      $estudio_musica = "Music Studio";
      $buscanos = "Get socialized with us";
      require 'contacto.php';
    ?>

    <?php
      $copy = "All music and works protected under a Creative Commons licence.";
      require 'footer.php';
    ?>
