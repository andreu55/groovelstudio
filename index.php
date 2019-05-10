
<?php

  // require 'database.php';

  // head, header, barra superior, iconos sociales
  $lang = 'es';
  $title = 'Groovel Studio. Sound 4 Games';
  $description = 'Diseñamos sonido a medida. Te ayudamos a contar las historias de tus videojuegos y a transmitir sus emociones.';
  $barra = [
    'Inicio',
    'Quiénes somos',
    'Qué Hacemos',
    'Trabajos',
    'Nuestra Música',
    'Contacta'
  ];
  $idioma = [
    'link' => 'index_en.php',
    'src' => 'images/eng_flag.png',
    'alt' => 'ENG'
  ];
  // Ahora cargan en database.php
  $social_links = [
    ['nombre' => 'SoundCloud', 'icon' => 'soundcloud', 'url' => 'https://soundcloud.com/groovel-studio'],
    ['nombre' => 'Twitter', 'icon' => 'twitter', 'url' => 'https://twitter.com/GroovelStudio'],
    ['nombre' => 'Facebook', 'icon' => 'facebook', 'url' => 'https://www.facebook.com/GroovelStudio'],
    ['nombre' => 'LinkedIn', 'icon' => 'linkedin', 'url' => 'https://www.linkedin.com/in/groovel-studio-a363bbb6/'],
    ['nombre' => 'YouTube', 'icon' => 'youtube', 'url' => 'https://www.youtube.com/channel/UCBZTTVynuWw4uLgbmWXVSyg'],
  ];
  require 'sections/header.php';


  // Slides de portada y modal
  $slides = [
    ['src' => 'images/bg01.jpg', 'titulo' => 'Composición de Música', 'boton' => 'Contáctanos', 'alt' => 'slide1'],
    ['src' => 'images/bg02.jpg', 'titulo' => 'Diseño de sonido', 'boton' => 'Contáctanos', 'alt' => 'slide2'],
    ['src' => 'images/bg03.jpg', 'titulo' => 'Integración en Motor Gráfico', 'boton' => 'Contáctanos', 'alt' => 'slide3'],
  ];
  require 'sections/portada.php';


  // Bloque Quienes Somos
  $titulo = "¿Quiénes somos?";
  $subtitulo = "Groovel Studio";
  $texto = "Somos Alberto y Juan, componemos música y diseñamos sonido.
  Ofrecemos servicios de producción de música de una gran cantidad de géneros y estilos, y de diseño de sonido para cualquier contenido audiovisual.
  <br><br>
  Estamos localizados en Madrid y Valencia y además de la producción sonora trabajamos con software especializado de videojuegos (Middleware) y edición de video.
  <br><br>
  Te ayudamos a contar las historias de tus videojuegos y a transmitir sus emociones; diseñamos sonido a medida para tu trailer cinematográfico, de tus animaciones y cualquier medio digital.";
  require 'sections/quienes_somos.php';


  // Bloque Que Hacemos
  $titulo = "QUÉ HACEMOS";
  $subtitulo = "MÚSICA &nbsp;|&nbsp; EFECTOS DE SONIDO &nbsp;|&nbsp; AUDIO INTERACTIVO &nbsp;|&nbsp; INTEGRACIÓN EN MOTOR";
  $imagenes = [
    [
      'src' => 'images/whatwedo/originalmusic.png',
      'alt' => 'Composición de Música',
      'texto' => 'ORQUESTAL &nbsp;|&nbsp; POP &nbsp;|&nbsp; ROCK &nbsp;|&nbsp; ELECTRÓNICA &nbsp;|&nbsp; OTROS'
    ],[
      'src' => 'images/whatwedo/sounddesign.png',
      'alt' => 'Efectos de Sonido',
      'texto' => 'DISEÑO DE SONIDO HQ &nbsp;|&nbsp; GRABACIÓN &nbsp;|&nbsp; FOLEY &nbsp;|&nbsp; LIBRERIAS'
    ],[
      'src' => 'images/whatwedo/interactiveaudio.png',
      'alt' => 'Diseño sonoro Adaptativo',
      'texto' => 'COMPORTAMIENTO INTERACTIVO &nbsp;|&nbsp; EXPERIENCIA DE USUARIO ÚNICA &nbsp;|&nbsp; WWISE/FMOD'
    ],[
      'src' => 'images/whatwedo/engineintegration.png',
      'alt' => 'Integración en el Motor Gráfico',
      'texto' => 'INTEGRACIÓN EN UNITY Y UNREAL ENGINE &nbsp;|&nbsp; PLUG-IN MASTER AUDIO &nbsp;|&nbsp; AUDIO MANAGER'
    ]
  ];
  require 'sections/que_hacemos.php';


  // Bloque Tabla Proyectos
  $titulo = "Proyectos";
  $titulos_tabla = [
    'JUEGO',
    'TIPO DE TRABAJO',
    'DESARROLLADOR',
    'PLATAFORMA',
    'AÑO',
  ];
  $destacados = [
    [
      'src' => 'images/destacados/GrefuHeroes.png',
      'ano' => '2019',
      'alt' => 'GrefuHeroes',
      'titulo' => 'GrefuHeroes',
      'desarrollador' => 'Play &amp Go Experience',
      'detalles' => 'Música y Efectos de Sonido',
      'link' => 'https://play.google.com/store/apps/details?id=com.playandgo.grefuheroes&hl=en_US',
    ],[
      'src' => 'images/destacados/MyGrannyLala.png',
      'ano' => '2019',
      'alt' => 'My Granny Lala and Me',
      'titulo' => 'My Granny Lala &amp; Me (DEMO)',
      'desarrollador' => 'Two Cousins',
      'detalles' => 'Efectos de Sonido',
      'link' => 'http://beatrizolcina.com/portfolio/grandma-project',
    ],[
      'src' => 'images/destacados/3Cherry.png',
      'ano' => '2019',
      'alt' => 'Triple Cherry Slots',
      'titulo' => 'Triple Cherry Slots',
      'desarrollador' => 'Triple Cherry',
      'detalles' => 'Música y Efectos de Sonido',
      'link' => 'https://3cherry.com/',
    ],[
      'src' => 'images/destacados/CrisisSerena.png',
      'ano' => '2018',
      'alt' => 'Crisis Serena',
      'titulo' => 'Crisis Serena (DEMO)',
      'desarrollador' => 'Pixel Powa',
      'detalles' => 'Música y Efectos de Sonido',
      'link' => 'https://www.facebook.com/crisisserena/',
    ],
  ];
  $filas_tabla = [
    [
      'GrefuHeroes',
      'Música y Efectos de Sonido',
      'Play &amp Go Experience',
      'Android / iOS',
      '2019'
    ],[
      'My Granny Lala &amp; Me (DEMO)',
      'Efectos de Sonido',
      'Two Cousins',
      'PC',
      '2019'
    ],[
      'Nile Treasures',
      'Música y Efectos de Sonido',
      'Triple Cherry',
      'Web',
      '2019'
    ],[
      "7's Club",
      'Música y Efectos de Sonido',
      'Triple Cherry',
      'Web',
      '2019'
    ],[
      'Mystic Buffalo',
      'Música y Efectos de Sonido',
      'Triple Cherry',
      'Web',
      '2019'
    ],[
      'Gods Odyssey',
      'Música y Efectos de Sonido',
      'Triple Cherry',
      'Web',
      '2019'
    ],[
      'Crisis Serena (DEMO)',
      'Música y Efectos de Sonido',
      'Pixel Powa',
      'PC',
      '2018'
    ],[
      "Pyme's Genocice",
      'Música y Efectos de Sonido',
      "Pyme's Genocide",
      'PC / Mac / Web',
      '2018'
    ],[
      'Robo Ball',
      'Música',
      'Joan Martinez Clari',
      'Android / iOS',
      '2016'
    ],[
      'GenPoc (DEMO)',
      'Música, Efectos de Sonido e Integración',
      'Drassana Games',
      'PC',
      '2016'
    ],[
      'Joe Jump',
      'Música',
      'BlueFX Studio',
      'Android / iOS',
      '2016'
    ],[
      'Tic Tac Traca',
      'Efectos de Sonido',
      'The Laboratory of Dreams',
      'Android / iOS / Switch',
      '2016'
    ],[
      'Mobsferatu',
      'Efectos de Sonido',
      'Crema Games',
      'PC',
      '2015'
    ],[
      'EdVE',
      'Producción de video y música',
      'Devsfromspain &amp; AEVI',
      'Youtube',
      '2015'
    ],[
      'Kill Blocks',
      'Música y Efectos de Sonido',
      'Mobilendo',
      'Android / iOS',
      '2015'
    ]
  ];
  require 'sections/proyectos.php';


  // Bloque Portfolio
  $titulo = "NUESTRA MÚSICA";
  $subtitulo = "TRABAJOS Y PORTFOLIO";
  $abrir_lista = "Abrir lista de reproducción";
  $portfolio = [
    ['url' => 'discs/disc-01.html', 'src' => 'orchestralandsymphonic.png', 'texto' => 'ORQUESTAL Y SINFÓNICO'],
    ['url' => 'discs/disc-02.html', 'src' => 'electronicgenres.png', 'texto' => 'GÉNEROS ELECTRÓNICOS'],
    ['url' => 'discs/disc-03.html', 'src' => 'modernband.png', 'texto' => 'BANDA MODERNA'],
    ['url' => 'discs/disc-04.html', 'src' => 'retro.png', 'texto' => 'RETRO'],
    ['url' => 'discs/disc-05.html', 'src' => 'folkandethinc.png', 'texto' => 'ÉTNICO Y FOLK'],
  ];
  require 'sections/nuestra_musica.php';


  // Bloque contacto, linea final y dependencias js
  $titulo = "MANTENTE EN CONTACTO";
  $subtitulo = "¡Salúdanos!";
  $nombre = "Tu nombre";
  $email = "Tu E-mail";
  $mensaje = "Tu mensaje";
  $boton_enviar = "Enviar";
  $estudio_musica = "Estudio de Música";
  $buscanos = "¡Búscanos en redes sociales!";
  $copy = "Toda la música y trabajos protegidos bajo licencia Creative Commons.";
  require 'sections/contacto.php';
