<!-- WORKS -->
<section class="section featured-artists" id="anchor03">
  <div class="container">
    <div class="row">
      <div class="text-center">
        <div class="voffset70"></div>
        <div class="separator-icon">
          <i class="fa fa-microphone"></i>
        </div>
        <div class="voffset20"></div>
        <h2 class="title"><?= $titulo ?></h2>
        <div class="voffset80"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th><?=$titulos_tabla[0]?></th>
              <th class="hidden-xs"><?=$titulos_tabla[1]?></th>
              <th><?=$titulos_tabla[2]?></th>
              <th class="hidden-xs hidden-sm"><?=$titulos_tabla[3]?></th>
              <th class="hidden-xs"><?=$titulos_tabla[4]?></th>
            </tr>
          </thead>
          <tbody>
            <!-- Creamos la tabla -->
            <?php foreach ($filas_tabla as $i => $fila): ?>
              <tr class="open-disc" data-url="discs/tabla<?=$i+1?>.php">
                <td><?=$fila[0]?></td>
                <td class="hidden-xs"><?=$fila[1]?></td>
                <td><?=$fila[2]?></td>
                <td class="hidden-xs hidden-sm"><?=$fila[3]?></td>
                <td class="hidden-xs"><?=$fila[4]?></td>
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
