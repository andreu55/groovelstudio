
<?php

  $lang = 'es';
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
  $social_links = [
    ['nombre' => 'SoundCloud', 'icon' => 'soundcloud', 'url' => 'https://soundcloud.com/groovel-studio'],
    ['nombre' => 'Twitter', 'icon' => 'twitter', 'url' => 'https://twitter.com/GroovelStudio'],
    ['nombre' => 'Facebook', 'icon' => 'facebook', 'url' => 'https://www.facebook.com/GroovelStudio'],
    ['nombre' => 'LinkedIn', 'icon' => 'linkedin', 'url' => 'https://www.linkedin.com/in/groovel-studio-a363bbb6/'],
    ['nombre' => 'YouTube', 'icon' => 'youtube', 'url' => 'https://www.youtube.com/channel/UCBZTTVynuWw4uLgbmWXVSyg'],
  ];

  // head, header, barra superior, iconos sociales
  require 'section_header.php';


  $slides = [
    ['src' => 'bg01.jpg', 'titulo' => 'Composición de Música', 'alt' => 'slide1'],
    ['src' => 'bg01.jpg', 'titulo' => 'Diseño de sonido', 'alt' => 'slide2'],
    ['src' => 'bg01.jpg', 'titulo' => 'Integración en Motor Gráfico', 'alt' => 'slide3'],
  ];

  // Slides de portada y modal
  require 'section_portada.php';


  $titulo = "¿Quiénes somos?";
  $subtitulo = "Groovel Studio";
  $texto = "Somos Alberto y Juan, componemos música y diseñamos sonido.
  Ofrecemos servicios de producción de música de una gran cantidad de géneros y estilos, y de diseño de sonido para cualquier contenido audiovisual.
  <br><br>
  Estamos localizados en Madrid y Valencia y además de la producción sonora trabajamos con software especializado de videojuegos (Middleware) y edición de video.
  <br><br>
  Te ayudamos a contar las historias de tus videojuegos y a transmitir sus emociones; diseñamos sonido a medida para tu trailer cinematográfico, de tus animaciones y cualquier medio digital.";

  // Bloque Quienes Somos
  require 'section_quienes_somos.php';


  $titulo = "QUÉ HACEMOS";
  $subtitulo = "MÚSICA &nbsp;|&nbsp; EFECTOS DE SONIDO &nbsp;|&nbsp; AUDIO INTERACTIVO &nbsp;|&nbsp; INTEGRACIÓN EN MOTOR";

  $imagenes = [
    ['src' => 'originalmusic.png', 'alt' => 'Composición de Música', 'texto' => 'ORQUESTAL &nbsp;|&nbsp; POP &nbsp;|&nbsp; ROCK &nbsp;|&nbsp; ELECTRÓNICA &nbsp;|&nbsp; OTROS'],
    ['src' => 'sounddesign.png', 'alt' => 'Efectos de Sonido', 'texto' => 'DISEÑO DE SONIDO HQ &nbsp;|&nbsp; GRABACIÓN &nbsp;|&nbsp; FOLEY &nbsp;|&nbsp; LIBRERIAS'],
    ['src' => 'interactiveaudio.png', 'alt' => 'Diseño sonoro Adaptativo', 'texto' => 'COMPORTAMIENTO INTERACTIVO &nbsp;|&nbsp; EXPERIENCIA DE USUARIO ÚNICA &nbsp;|&nbsp; WWISE/FMOD'],
    ['src' => 'engineintegration.png', 'alt' => 'Integración en el Motor Gráfico', 'texto' => 'INTEGRACIÓN EN UNITY Y UNREAL ENGINE &nbsp;|&nbsp; PLUG-IN MASTER AUDIO &nbsp;|&nbsp; AUDIO MANAGER'],
  ];

  // Bloque Que Hacemos
  require 'section_que_hacemos.php';


  $titulo = "Proyectos";
  $titulos_tabla = [
    'JUEGO',
    'TIPO DE TRABAJO',
    'DESARROLLADOR',
    'PLATAFORMA',
    'AÑO',
  ];
  $filas_tabla = [
    ['discs/tabla1.php', 'Grefusa Heroes', 'Música y Efectos de Sonido', 'No Spoon Lab', 'Android / iOS', '2019'],
    ['discs/tabla2.php', 'My Granny Lala and Me', 'Sound Effects', 'Beatriz Olcina', 'PC', '2019'],
    ['', 'Crisis Serena (WIP)', 'Música y Efectos de Sonido', 'Pixel Powa', 'PC', '2018'],
    ['', 'River (WIP)', 'Música y Efectos de Sonido', 'Studio Istmo', 'PC', '2017'],
    ['', 'Robo Ball', 'Música', '<a target="_blank" href="https://joanmartinezclari.wordpress.com/">Joan Martinez Clari</a>', '<a target="_blank" href="https://play.google.com/store/apps/details?id=com.caparra.games.ball">Android</a> / iOS', '2016'],
    ['', 'GenPoc', 'Música, Efectos de Sonido e Integración', '<a target="_blank" href="http://www.genpoc.com/">Drassana Games</a>', 'PC', '2016'],
    ['', '<a target="_blank" href="http://www.bluefxgames.com/App/JoeJump">Joe Jump</a>', 'Música', '<a target="_blank" href="http://www.bluefxgames.com/">BlueFX Studio</a>', '<a target="_blank" href="https://play.google.com/store/apps/details?id=com.bluefxgames.joejump">Android</a> / iOS', '2016'],
    ['', 'Tic Tac Traca', 'Efectos de Sonido', '<a target="_blank" href="http://www.laboratoryofdreams.com/">The Laboratory of Dreams</a>', '<a target="_blank" href="https://play.google.com/store/apps/details?id=com.laboratoryofdreams.tictactraca">Android</a> / iOS', '2016'],
    ['', 'Mobsferatu', 'Efectos de Sonido', '<a target="_blank" href="http://www.cremagames.com/">Crema Games</a>', '<a target="_blank" href="https://cremagames.itch.io/mobsferatu">PC</a>', '2015'],
    ['', 'EdVE', 'Producción de video y música', '<a target="_blank" href="https://www.facebook.com/groups/devsfromspain/">Devsfromspain</a> &amp; <a target="_blank" href="http://www.aevi.org.es/desarrollo-espanol/iniciativas/">AEVI</a>', '<a target="_blank" href="http://www.groovelstudio.com/?page_id=487">Youtube</a>', '2015'],
    ['', 'Kill Blocks', 'Música y Efectos de Sonido', '<a target="_blank" href="http://mobilendo.com/">Mobilendo</a>', '<a target="_blank" href="https://play.google.com/store/apps/details?id=com.mobilendo.killblocks">Android</a> / <a target="_blank" href="https://itunes.apple.com/us/app/kill-blocks/id969491786?mt=8">iOS</a>', '2015']
  ];

  // Bloque Tabla Proyectos
  require 'section_proyectos.php';


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

  // Bloque Portfolio
  require 'section_nuestra_musica.php';


  $titulo = "MANTENTE EN CONTACTO";
  $subtitulo = "¡Salúdanos!";
  $nombre = "Tu nombre";
  $email = "Tu E-mail";
  $mensaje = "Tu mensaje";
  $estudio_musica = "Estudio de Música";
  $buscanos = "¡Búscanos en redes sociales!";
  $copy = "Toda la música y trabajos protegidos bajo licencia Creative Commons.";

  // Bloque contacto, linea final y dependencias js
  require 'section_contacto.php';
