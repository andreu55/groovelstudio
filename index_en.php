
  <?php

    // require 'database.php';

    // head, header, barra superior, iconos sociales
    $lang = 'en';
    $title = 'Groovel Studio. Sound 4 Games';
    $description = 'We compose music and design sound for videogames';
    $barra = ['Home',
      'About',
      'What we do',
      'Works',
      'Our Music',
      'Contact'
    ];
    $idioma = [
      'link' => 'index.php',
      'src' => 'images/esp_flag.png',
      'alt' => 'ESP'
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
      ['src' => 'images/bg02.jpg', 'titulo' => 'Video Games Music', 'boton' => 'Reach out', 'alt' => 'slide1'],
      ['src' => 'images/bg01.jpg', 'titulo' => 'HQ Sound Effects', 'boton' => 'Reach out', 'alt' => 'slide2'],
      ['src' => 'images/bg03.jpg', 'titulo' => 'Engine Interactive', 'boton' => 'Reach out', 'alt' => 'slide3'],
    ];
    require 'sections/portada.php';


    // Bloque Quienes Somos
    $titulo = "2 MEN STUDIO";
    $subtitulo = "Juan Novella & <br>Alberto Trigueros";
    $texto = "GROOVEL Innate Composing it’s a company that provides music and sound fx for videogames. Able to offer a finnished product, producing all sound and musical aspects or as a part of a creative process as composers and sound designers.
    <br><br>In Groovel we understand that in an audiovisual production the most important it’s understanding what does your project needs. We pretend to be a creative mainstay since the begenning of the development, being a part of the team.<br><br>
    'As a teenager I found myself composing music for an indie band. I realized I was enjoying it more than anything before. After several years I can say I still feel the same.'
    'I love trying to understand every sound, its texture. Looking for an equilibrium and the coherence in our mixes. I think that a sound that finds his place is a happy sound.'<br><br>Alberto Trigueros &amp; Juan Novella 'Hust'<br>Madrid &amp; Valencia<br>Spain.";
    require 'sections/quienes_somos.php';


    // Bloque Que Hacemos
    $titulo = "What we do";
    $subtitulo = "MUSIC &nbsp;|&nbsp; SOUND EFFECTS &nbsp;|&nbsp; INTERACTIVE &nbsp;|&nbsp; ENGINE INTEGRATION";
    $imagenes = [
      ['src' => 'images/whatwedo/originalmusic_en.png', 'alt' => 'Original Music', 'texto' => 'ORCHESTRA &nbsp;|&nbsp; POP &nbsp;|&nbsp; ROCK &nbsp;|&nbsp; ELECTRONIC &nbsp;|&nbsp; OTHERS'],
      ['src' => 'images/whatwedo/sounddesign_en.png', 'alt' => 'Sound Design', 'texto' => 'HIGH QUALITY SOUND DESIGN &nbsp;|&nbsp;  &nbsp;|&nbsp; RECORDING FOLEY &nbsp;|&nbsp; LIBRARY'],
      ['src' => 'images/whatwedo/interactiveaudio_en.png', 'alt' => 'Interactive Audio', 'texto' => 'INTERACTIVE BEHAVIOUR &nbsp;|&nbsp; UNIQUE USER EXPERIENCE &nbsp;|&nbsp; FMOD & WWISE'],
      ['src' => 'images/whatwedo/engineintegration_en.png', 'alt' => 'Engine Integration', 'texto' => 'WORK WITH UNITY &nbsp;|&nbsp; MASTER AUDIO &nbsp;|&nbsp; UNREAL ENGINE &nbsp;|&nbsp; INTEGRATION'],
    ];
    require 'sections/que_hacemos.php';


    // Bloque Tabla Proyectos
    $titulo = "Proyects";
    $titulos_tabla = [
      'Game',
      'Type of Work',
      'Developer',
      'Platform',
      'Year',
    ];
    $destacados = [
      [
        'src' => 'images/demo/discography/disco-1.jpg',
        'alt' => 'Composición de Música',
        'link' => 'https://google.es',
        'titulo' => 'GREFUSA HEROES',
        'desarrollador' => 'Play &amp Go',
        'detalles' => 'Música y Efectos de Sonido',
        'ano' => '2019',
      ],[
        'src' => 'images/demo/discography/disco-1.jpg',
        'alt' => 'Efectos de Sonido',
        'link' => 'https://google.es',
        'titulo' => 'MY GRANNY LALA &amp; ME',
        'desarrollador' => 'Play &amp Go',
        'detalles' => 'Efectos de Sonido',
        'ano' => '2018',
      ],[
        'src' => 'images/demo/discography/disco-1.jpg',
        'alt' => 'Diseño sonoro Adaptativo',
        'link' => 'https://google.es',
        'titulo' => 'CRISIS SERENA (WIP)',
        'desarrollador' => 'Play &amp Go',
        'detalles' => 'Música y Efectos de Sonido',
        'ano' => '2017',
      ],[
        'src' => 'images/demo/discography/disco-1.jpg',
        'alt' => 'Integración en el Motor Gráfico',
        'link' => 'https://google.es',
        'titulo' => 'GREFUSA HEROES',
        'desarrollador' => 'Play &amp Go',
        'detalles' => 'INTEGRACIÓN EN UNITY Y UNREAL ENGINE &nbsp;|&nbsp; PLUG-IN MASTER AUDIO &nbsp;|&nbsp; AUDIO MANAGER',
        'ano' => '2016',
      ],
    ];
    $filas_tabla = [
      ['', 'Grefusa Heroes', 'Music & Sound Effects', 'No Spoon Lab', 'Android / iOS', '2019'],
      ['', 'My Granny Lala and Me', 'Sound Effects', 'Beatriz Olcina', 'PC', '2019'],
      ['', 'Crisis Serena (WIP)', 'Music & Sound Effects', 'Pixel Powa', 'PC', '2018'],
      // ['', 'River (WIP)', 'Music & Sound Effects', 'Studio Istmo', 'PC', '2017'],
      ['', 'Robo Ball', 'Music', '<a target="_blank" href="https://joanmartinezclari.wordpress.com/">Joan Martinez Clari</a>', '<a target="_blank" href="https://play.google.com/store/apps/details?id=com.caparra.games.ball">Android</a> / iOS', '2016'],
      ['', 'GenPoc', 'Music, Sound Effects &amp; Integration', '<a target="_blank" href="http://www.genpoc.com/">Drassana Games</a>', 'PC', '2016'],
      ['', '<a target="_blank" href="http://www.bluefxgames.com/App/JoeJump">Joe Jump</a>', 'Music', '<a target="_blank" href="http://www.bluefxgames.com/">BlueFX Studio</a>', '<a target="_blank" href="https://play.google.com/store/apps/details?id=com.bluefxgames.joejump">Android</a> / iOS', '2016'],
      ['', 'Tic Tac Traca', 'Sound Effects', '<a target="_blank" href="http://www.laboratoryofdreams.com/">The Laboratory of Dreams</a>', '<a target="_blank" href="https://play.google.com/store/apps/details?id=com.laboratoryofdreams.tictactraca">Android</a> / iOS', '2016'],
      ['', 'Mobsferatu', 'Sound Effects', '<a target="_blank" href="http://www.cremagames.com/">Crema Games</a>', '<a target="_blank" href="https://cremagames.itch.io/mobsferatu">PC</a>', '2015'],
      ['', 'EdVE', 'Music &amp; Video Production', '<a target="_blank" href="https://www.facebook.com/groups/devsfromspain/">Devsfromspain</a> &amp; <a target="_blank" href="http://www.aevi.org.es/desarrollo-espanol/iniciativas/">AEVI</a>', '<a target="_blank" href="http://www.groovelstudio.com/?page_id=487">Youtube</a>', '2015'],
      ['', 'Kill Blocks', 'Music & Sound Effects', '<a target="_blank" href="http://mobilendo.com/">Mobilendo</a>', '<a target="_blank" href="https://play.google.com/store/apps/details?id=com.mobilendo.killblocks">Android</a> / <a target="_blank" href="https://itunes.apple.com/us/app/kill-blocks/id969491786?mt=8">iOS</a>', '2015']
    ];
    require 'sections/proyectos.php';


    // Bloque Portfolio
    $titulo = "OUR MUSIC";
    $subtitulo = "Works & Portfolio";
    $abrir_lista = "Listen Playlist";
    $portfolio = [
      ['url' => 'discs/disc-01.html', 'src' => 'orchestralandsymphonic.png', 'texto' => 'Orchestral &amp; Symphonic'],
      ['url' => 'discs/disc-02.html', 'src' => 'electronicgenres.png', 'texto' => 'Electronic Genres'],
      ['url' => 'discs/disc-03.html', 'src' => 'modernband.png', 'texto' => 'Modern Band'],
      ['url' => 'discs/disc-04.html', 'src' => 'retro.png', 'texto' => 'Retro'],
      ['url' => 'discs/disc-05.html', 'src' => 'folkandethinc.png', 'texto' => 'Folk & Ethnic'],
    ];
    require 'sections/nuestra_musica.php';


    // Bloque contacto, linea final y dependencias js
    $titulo = "Get in touch";
    $subtitulo = "say hello!";
    $nombre = "Your name";
    $email = "Your email";
    $mensaje = "Your message";
    $boton_enviar = "Submit";
    $estudio_musica = "Music Studio";
    $buscanos = "Get socialized with us";
    $copy = "All music and works protected under a Creative Commons licence.";
    require 'sections/contacto.php';
