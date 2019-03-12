
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
              <h1 class="primary-title"><span style="font-size:68px;letter-spacing: 3px">Video Games Music</h1>
            </div>
            <div class="item">
              <h1 class="primary-title"><span style="font-size:68px;letter-spacing: 3px">HQ Sound Effects</h1>
            </div>
            <div class="item">
              <h1 class="primary-title"><span style="font-size:68px;letter-spacing: 3px">Engine Interactive</h1>
            </div>
          </div>
          <div class="voffset50"></div>
          <h2 class="subtitle-text">LET'S CREATE TOGETHER </h2>
          <!--<a href="#anchor05" class="btn btn-invert">Learn more</a>-->
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


    <!-- CONTACTS -->
    <section class="section inverse-color contact" id="anchor05">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="voffset70"></div>
            <div class="separator-icon">
              <i class="fa fa fa-microphone"></i>
            </div>
            <div class="voffset30"></div>
            <p class="pretitle">get in touch</p>
            <div class="voffset20"></div>
            <h2 class="title">say hello!</h2>
            <div class="voffset80"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-md-7">
            <form action="mail.php" method="post" id="contactform" class="contact-form">
              <div class="form-group">
                <label class="title small" for="name">Your name:</label>
                <input type="text" placeholder="Full Name" name="name" id="name" class="text name required">
              </div>

              <div class="form-group">
                <label class="title small" for="email">Your email:</label>
                <input type="email" placeholder="Your Email" name="email" id="email" class="text email required">
              </div>

              <div class="form-group">
                <label class="title small" for="message">Your message:</label>
                <textarea name="message" class="text area required" id="message" placeholder="Type Message"></textarea>
              </div>

              <!-- <div class="formSent"><p><strong>Your Message Has Been Sent!</strong> Thank you for contacting us.</p></div> -->
              <input type="submit" value="Submit" class="btn rounded">
              <div class="voffset80"></div>
            </form>
          </div>
          <div class="col-sm-6 col-md-5">
            <div class="col-contact">
              <h4 class="title small">Music Studio</h4>
              <div class="voffset20"></div>
              <p>Madrid : Alberto Trigueros  - alberto@groovelstudio.com</p>
              <p>Valencia : Juan Novella - juan_hust@groovelstudio.com - @juan_hust</p>
              <ul class="contact">
                <li><i class="fa fa-twitter"></i> @groovelstudio</li>
                <li><i class="fa fa-envelope"></i> groovelstudio@gmail.com</li>
              </ul>
              <h4 class="title small">Get socialized with us</h4>
              <ul class="social-links">
                <li><a href="https://soundcloud.com/groovel-studio"><i class="fa fa-soundcloud"></i></a></li>
                <li><a href="https://twitter.com/GroovelStudio"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.facebook.com/GroovelStudio"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://www.linkedin.com/in/groovel-studio-a363bbb6/"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UCBZTTVynuWw4uLgbmWXVSyg"><i class="fa fa-youtube"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <footer>
      <div class="container">
        <p class="copy">© 2017. All Music and Works protected under a Creative Commons licence.</p>
        <ul class="menu-footer">
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
        </ul>
      </div>
    </footer>

    <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-61961383-1');ga('send','pageview');
    </script>

    <script src="scripts/vendor/jquery.js"></script>
    <script src="scripts/vendor/jquery.superslides.min.js"></script>
    <script src="scripts/vendor/flickity.pkgd.js"></script>
    <script src="scripts/vendor/audio.min.js"></script>
    <script src="scripts/vendor/twitterFetcher_min.js"></script>
    <script src="scripts/vendor/isotope.pkgd.min.js"></script>
    <script src="scripts/vendor/jquery.swipebox.min.js"></script>
    <script src="scripts/vendor/TimeCircles.js"></script>
    <script src="scripts/vendor/owl.carousel.min.js"></script>
    <script src="scripts/vendor/jquery.parallax.min.js"></script>

    <script src="scripts/discography.js"></script>
    <script src="scripts/news.js"></script>
    <script src="scripts/main.js"></script>

    <script src="scripts/vendor/bootstrap.js"></script>
  </body>
</html>
