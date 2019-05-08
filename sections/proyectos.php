<!-- WORKS -->
<section class="section featured-artists" id="anchor03">
  <div class="container">

    <div class="text-center">
      <div class="voffset70"></div>
      <div class="separator-icon">
        <i class="fa fa-fw fa-book"></i>
      </div>
      <div class="voffset20"></div>
      <h2 class="title"><?= $titulo ?></h2>
      <div class="voffset40"></div>
    </div>

    <!-- Destacados -->
    <div class="row">
      <!-- <div class="col-md-12"> -->
        <?php foreach ($destacados as $destacado): ?>

          <div class="bloque-img col-sm-6 col-lg-3">
            <div class="featured-artist">
              <img class="img-responsive bloque-img-contenido" src="<?=$destacado['src']?>" alt="<?=$destacado['alt']?>">
              <div class="rollover">
                <ul class="social">
                  <li><a href="<?=$destacado['link']?>" target="_blank"><i class="fa fa-fw fa-external-link"></i></a></li>
                </ul>
                <div class="text">
                  <h6 class="title-artist">
                    <small class="title-small">
                      <?=$destacado['ano']?>
                    </small>
                    <br>
                    <?=$destacado['titulo']?>
                  </h6>
                  <!-- class="hidden-xs" -->
                  <p>
                    <em><?=$destacado['desarrollador']?></em>
                  </p>
                  <p>
                    <?=$destacado['detalles']?>
                  </p>
                </div>
              </div>
            </div>
          </div>

        <?php endforeach; ?>

      <!-- </div> -->
    </div>

    <div class="voffset50"></div>

    <!-- Tabla -->
    <div class="row">
      <div class="col-xs-12">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th><?=$titulos_tabla[0]?></th>
              <th class="hidden-xs"><?=$titulos_tabla[1]?></th>
              <th><?=$titulos_tabla[2]?></th>
              <th class="hidden-xs hidden-sm"><?=$titulos_tabla[3]?></th>
              <th><?=$titulos_tabla[4]?></th>
            </tr>
          </thead>
          <tbody>
            <!-- Creamos la tabla -->
            <?php foreach ($filas_tabla as $i => $fila): ?>
              <?php //= $fila[0] ? 'class="open-disc" data-url="'.$fila[0].'"' : '' ESTO SE PUEDE BORRAR ?>
              <tr>
                <td><?=$fila[1]?></td>
                <td class="hidden-xs"><?=$fila[2]?></td>
                <td><?=$fila[3]?></td>
                <td class="hidden-xs hidden-sm"><?=$fila[4]?></td>
                <td><?=$fila[5]?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="voffset120"></div>
  </div>

  <div id="discography"></div>

</section>
