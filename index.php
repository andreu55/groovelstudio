
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
  $subtitulo = "MÚSICA | EFECTOS DE SONIDO | AUDIO INTERACTIVO | INTEGRACIÓN EN MOTOR";

  $imagenes = [
  ['src' => 'originalmusic.png', 'alt' => 'Composición de Música'],
  ['src' => 'sounddesign.png', 'alt' => 'Efectos de Sonido'],
  ['src' => 'interactiveaudio.png', 'alt' => 'Diseño sonoro Adaptativo'],
  ['src' => 'engineintegration.png', 'alt' => 'Integración en el Motor Gráfico'],
  ];

  // Bloque Que Hacemos
  require 'section_que_hacemos.php';


  $titulo = "Trabajos";
  $titulos_tabla = [
    'JUEGO',
    'TIPO DE TRABAJO',
    'DESARROLLADOR',
    'PLATAFORMA',
    'AÑO',
  ];

  // Bloque Tabla Trabajos
  require 'section_trabajos.php';


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
