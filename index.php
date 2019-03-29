
  <?php

    $lang = 'es';
    $social_links = [
      ['nombre' => 'SoundCloud', 'icon' => 'soundcloud', 'url' => 'https://soundcloud.com/groovel-studio'],
      ['nombre' => 'Twitter', 'icon' => 'twitter', 'url' => 'https://twitter.com/GroovelStudio'],
      ['nombre' => 'Facebook', 'icon' => 'facebook', 'url' => 'https://www.facebook.com/GroovelStudio'],
      ['nombre' => 'LinkedIn', 'icon' => 'linkedin', 'url' => 'https://www.linkedin.com/in/groovel-studio-a363bbb6/'],
      ['nombre' => 'YouTube', 'icon' => 'youtube', 'url' => 'https://www.youtube.com/channel/UCBZTTVynuWw4uLgbmWXVSyg'],
    ];

    require 'section_head.php'
  ?>

  <body data-spy="scroll" data-target="#navbar-muziq" data-offset="80">

    <?php
      $barra = ['Inicio', 'Quiénes somos', 'Qué Hacemos', 'Trabajos', 'Nuestra Música', 'Contacta'];
      $idioma = ['link' => 'index_en.php', 'img' => 'eng_flag.png', 'alt' => 'ENG'];
      require 'section_header.php';
    ?>

    <?php
      $slides = [
        ['src' => 'bg01.jpg', 'titulo' => 'Composición de Música', 'alt' => 'slide1'],
        ['src' => 'bg01.jpg', 'titulo' => 'Diseño de sonido', 'alt' => 'slide2'],
        ['src' => 'bg01.jpg', 'titulo' => 'Integración en Motor Gráfico', 'alt' => 'slide3'],
      ];
      require 'section_intro.php';
    ?>


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

    <?php
      $titulo = "¿Quiénes somos?";
      $subtitulo = "Groovel Studio";
      $texto = "Somos Alberto y Juan, componemos música y diseñamos sonido.
      Ofrecemos servicios de producción de música de una gran cantidad de géneros y estilos, y de diseño de sonido para cualquier contenido audiovisual.
      <br><br>
      Estamos localizados en Madrid y Valencia y además de la producción sonora trabajamos con software especializado de videojuegos (Middleware) y edición de video.
      <br><br>
      Te ayudamos a contar las historias de tus videojuegos y a transmitir sus emociones; diseñamos sonido a medida para tu trailer cinematográfico, de tus animaciones y cualquier medio digital.";

      require 'section_quienes_somos.php';
    ?>

    <?php
      $titulo = "QUÉ HACEMOS";
      $subtitulo = "MÚSICA | EFECTOS DE SONIDO | AUDIO INTERACTIVO | INTEGRACIÓN EN MOTOR";

      require 'section_que_hacemos.php';
    ?>

    <?php
      $titulo = "Trabajos";
      $texto = "";

      require 'section_trabajos.php';
    ?>

    <?php
      $titulo = "";
      $texto = "";

      require 'section_nuestra_musica.php';
    ?>

    <?php
      $titulo = "MANTENTE EN CONTACTO";
      $subtitulo = "¡Salúdanos!";
      $nombre = "Tu nombre";
      $email = "Tu E-mail";
      $mensaje = "Tu mensaje";
      $estudio_musica = "Estudio de Música";
      $buscanos = "¡Búscanos en redes sociales!";
      require 'section_contacto.php';
    ?>

    <?php
      $copy = "Toda la música y trabajos protegidos bajo licencia Creative Commons.";
      require 'section_footer.php';
    ?>
