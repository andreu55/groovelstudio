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
        <p class="pretitle"><?= $titulo ?></p>
        <div class="voffset20"></div>
        <h2 class="title"><?= $subtitulo ?></h2>
        <div class="voffset80"></div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-6 col-md-7">
        <form action="mail.php" method="post" id="contactform" class="contact-form">
          <div class="form-group">
            <label class="title small" for="name"><?= $nombre ?>:</label>
            <input type="text" name="name" id="name" class="text name required" placeholder="<?= $nombre ?>">
          </div>

          <div class="form-group">
            <label class="title small" for="email"><?= $email ?>:</label>
            <input type="email" name="email" id="email" class="text email required" placeholder="<?= $email ?>">
          </div>

          <div class="form-group">
            <label class="title small" for="message"><?= $mensaje ?>:</label>
            <textarea name="message" id="message" class="text area required" placeholder="<?= $mensaje ?>"></textarea>
          </div>

          <!-- <div class="formSent"><p><strong>Your Message Has Been Sent!</strong> Thank you for contacting us.</p></div> -->
          <input type="submit" value="Submit" class="btn rounded">
          <div class="voffset80"></div>
        </form>
      </div>
      <div class="col-sm-6 col-md-5">
        <div class="col-contact">
          <h4 class="title small"><?= $estudio_musica ?></h4>
          <div class="voffset20"></div>
          <p>
            Madrid : <b>Alberto Trigueros</b><br>
            <em>alberto@groovelstudio.com</em>
          </p>
          <p>
            Valencia : <b>Juan Novella</b>
            <em>juan_hust@groovelstudio.com - @juan_hust</em>
          </p>
          <ul class="contact">
            <li><i class="fa fa-twitter"></i> @groovelstudio</li>
            <li><i class="fa fa-envelope"></i> groovelstudio@gmail.com</li>
          </ul>
          <h4 class="title small"><?= $buscanos ?></h4>
          <div class="social-links">
            <li><a href="https://soundcloud.com/groovel-studio"><i class="fa fa-soundcloud"></i></a></li>
            <li><a href="https://twitter.com/GroovelStudio"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://www.facebook.com/GroovelStudio"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://www.linkedin.com/in/groovel-studio-a363bbb6/"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="https://www.youtube.com/channel/UCBZTTVynuWw4uLgbmWXVSyg"><i class="fa fa-youtube"></i></a></li>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
