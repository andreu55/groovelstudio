
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
    $texto = "We are Alberto and Juan, we offer music composition, sound design and music production services for a large number of genres and styles. We also offer sound design for any audiovisual content.
    <br><br>
    We are located in Madrid and Valencia and besides the sound production we work with specialized videogame software (Middleware) and video editing.
    <br><br>
    We will help you to tell the stories of your videogames and channel their emotions; we will design tailored sound for your film trailer, your animations or any digital medium.";

    require 'sections/quienes_somos.php';


    // Bloque Que Hacemos
    $titulo = "What we do";
    $subtitulo = "MUSIC &nbsp;|&nbsp; SOUND EFFECTS &nbsp;|&nbsp; INTERACTIVE &nbsp;|&nbsp; ENGINE INTEGRATION";
    $imagenes = [
      [
        'src' => 'images/whatwedo/originalmusic_en.png',
        'alt' => 'Original Music',
        'texto' => 'ORCHESTRA &nbsp;|&nbsp; POP &nbsp;|&nbsp; ROCK &nbsp;|&nbsp; ELECTRONIC &nbsp;|&nbsp; OTHERS'
      ],[
        'src' => 'images/whatwedo/sounddesign_en.png',
        'alt' => 'Sound Design',
        'texto' => 'HIGH QUALITY SOUND DESIGN &nbsp;|&nbsp;  &nbsp;|&nbsp; RECORDING FOLEY &nbsp;|&nbsp; LIBRARY'
      ],[
        'src' => 'images/whatwedo/interactiveaudio_en.png',
        'alt' => 'Interactive Audio',
        'texto' => 'INTERACTIVE BEHAVIOUR &nbsp;|&nbsp; UNIQUE USER EXPERIENCE &nbsp;|&nbsp; FMOD & WWISE'
      ],[
        'src' => 'images/whatwedo/engineintegration_en.png',
        'alt' => 'Engine Integration',
        'texto' => 'WORK WITH UNITY &nbsp;|&nbsp; MASTER AUDIO &nbsp;|&nbsp; UNREAL ENGINE &nbsp;|&nbsp; INTEGRATION'
      ],
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
        'src' => 'images/destacados/GrefuHeroes.png',
        'ano' => '2019',
        'alt' => 'GrefuHeroes',
        'titulo' => 'GrefuHeroes',
        'desarrollador' => 'Play &amp Go Experience',
        'detalles' => 'Music &amp; Sound Effects',
        'link' => 'https://play.google.com/store/apps/details?id=com.playandgo.grefuheroes&hl=en_US',
      ],[
        'src' => 'images/destacados/MyGrannyLala.png',
        'ano' => '2019',
        'alt' => 'My Granny Lala and Me',
        'titulo' => 'My Granny Lala &amp; Me (DEMO)',
        'desarrollador' => 'Two Cousins',
        'detalles' => 'Sound Effects',
        'link' => 'http://beatrizolcina.com/portfolio/grandma-project',
      ],[
        'src' => 'images/destacados/3Cherry.png',
        'ano' => '2019',
        'alt' => 'Triple Cherry Slots',
        'titulo' => 'Triple Cherry Slots',
        'desarrollador' => 'Triple Cherry',
        'detalles' => 'Music &amp; Sound Effects',
        'link' => 'https://3cherry.com/',
      ],[
        'src' => 'images/destacados/CrisisSerena.png',
        'ano' => '2018',
        'alt' => 'Crisis Serena',
        'titulo' => 'Crisis Serena (DEMO)',
        'desarrollador' => 'Pixel Powa',
        'detalles' => 'Music &amp; Sound Effects',
        'link' => 'https://www.facebook.com/crisisserena/',
      ],
    ];
    $filas_tabla = [
      [
        'GrefuHeroes',
        'Music &amp; Sound Effects',
        'Play &amp Go Experience',
        'Android / iOS',
        '2019'
      ],[
        'My Granny Lala &amp; Me (DEMO)',
        'Sound Effects',
        'Two Cousins',
        'PC',
        '2019'
      ],[
        'Nile Treasures',
        'Music &amp; Sound Effects',
        'Triple Cherry',
        'Web',
        '2019'
      ],[
        "7's Club",
        'Music &amp; Sound Effects',
        'Triple Cherry',
        'Web',
        '2019'
      ],[
        'Mystic Buffalo',
        'Music &amp; Sound Effects',
        'Triple Cherry',
        'Web',
        '2019'
      ],[
        'Gods Odyssey',
        'Music &amp; Sound Effects',
        'Triple Cherry',
        'Web',
        '2019'
      ],[
        'Crisis Serena (DEMO)',
        'Music &amp; Sound Effects',
        'Pixel Powa',
        'PC',
        '2018'
      ],[
        "Pyme's Genocice",
        'Music &amp; Sound Effects',
        "Pyme's Genocide",
        'PC / Mac / Web',
        '2018'
      ],[
        'Robo Ball',
        'Music',
        'Joan Martinez Clari',
        'Android / iOS',
        '2016'
      ],[
        'GenPoc (DEMO)',
        'Music, Sound Effects &amp; Integration',
        'Drassana Games',
        'PC',
        '2016'
      ],[
        'Joe Jump',
        'Music',
        'BlueFX Studio',
        'Android / iOS',
        '2016'
      ],[
        'Tic Tac Traca',
        'Sound Effects',
        'The Laboratory of Dreams',
        'Android / iOS / Switch',
        '2016'
      ],[
        'Mobsferatu',
        'Sound Effects',
        'Crema Games',
        'PC',
        '2015'
      ],[
        'EdVE',
        'Music &amp; Video Production',
        'Devsfromspain &amp; AEVI',
        'Youtube',
        '2015'
      ],[
        'Kill Blocks',
        'Music &amp; Sound Effects',
        'Mobilendo',
        'Android / iOS',
        '2015'
      ]
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
