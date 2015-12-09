<?php include_once("sections/header.php") ?>

<body>

    <div id="wrapper">
       <!-- Menu de materiales -->
        <?php include_once ("menuMateriales.php") ?>

        <div id="page-wrapper">

          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                  <h1 class="page-header" id="IdTitulo">Added Products</h1>
              </div>
            </div>
            <div class="row ">
              <div class="col-lg-1"></div>
              <div class="col-lg-10">
                <form class="form-horizontal" action="index.php/uploader/altaProducto" method="POST" enctype="multipart/form-data">
                <?php form_open_multipart('uploader/altaProducto'); ?>
                  <div class="form-group">
                    <label for="clave" class=" control-label col-lg-9">Clave</label>
                    <div class="col-lg-3">
                      <?php foreach ($ultimoProducto as $ultimo) { ?>
                        <input type="text" name="clave" type="text" placeholder="<?php echo $ultimo['clave']+1 ?>" class="form-control" disabled>
                     <?php } ?>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="clave" class="text-left control-label col-lg-2">Descrpipcion</label>
                    <div class="col-lg-10">
                      <textarea name="descripcion" id="" rows="3  " class="form-control" placehoder="Descripción de la actividad">
                      </textarea>

                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label text-left col-lg-2" for="ucosto">Costo</label>
                    <div class="col-lg-2">
                      <input type="text" class="form-control" placeholder="Amount" name="ucosto">
                    </div>
                    <label for="umedidas" class="control-label col-lg-1">Medida</label>
                    <div class="col-lg-3">
                      <select name="umedidas" id="" class="form-control">
                        <?php foreach ($unimedidas as $unimedida ) { ?>
                        <option value="<?php echo $unimedida['clave'] ?>">
                          <?php echo $unimedida['descripcion']; ?>
                        </option>
                       <?php } ?>
                      </select>
                    </div>
                    <label for="tallas" class="control-label col-lg-1">Tallas</label>
                    <div class="col-lg-3">
                        <select name="tallas" id="" class="form-control">
                          <?php foreach ($tallas as $talla ) { ?>
                          <option value="<?php echo $talla['clave']; ?>">
                            <?php echo $talla['corrida']; ?>
                          </option>
                         <?php } ?>
                        </select>
                    </div>
                  </div>

                  <div class="form-group ">

                    <label class="col-lg-12 page-header text-center" for=""><h4>Stock</h4></label>
                    <br>
                    <label class="control-label col-lg-2" for="minimo">Minimo</label>
                    <div class="col-lg-2">
                      <input type="text" class="form-control" name="minimo">
                    </div>
                    <label for="maximo" class="control-label col-lg-2">Máximo</label>
                    <div class="col-lg-2">
                      <input type="text" class="form-control" name="maximo">
                    </div>
                    <label for="tentrega" class="control-label col-lg-2">Tiempo de Entrega</label>
                    <div class="col-lg-2">
                      <input type="number" class="form-control" name="tentrega">
                    </div>
                  </div>

                  <div class="form-group ">
                    <label class="col-lg-12 page-header text-center" for=""><h4>Código de Barras</h4></label>
                    <br>
                    <label class="control-label col-lg-2" for="sku1">Sku(1)</label>
                    <div class="col-lg-4">
                      <input type="text" class="form-control" name="sku1">
                    </div>
                    <label for="sku2" class="control-label col-lg-2">Sku(2)</label>
                    <div class="col-lg-4">
                      <input type="text" class="form-control" name="sku2">
                    </div>
                  </div>

                  <div class="form-group ">
                    <div class="col-lg-10"></div>
                      <div class="col-lg-2">
                        <button type="submit" class="btn btn-success form-control">Save</button>
                      </div>
                  </div>
                </form>
              </div>
              <div class="col-lg-1"></div>
            </div>
          </div>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
</body>
<?php  include_once ("sections/footer.php") ?>
