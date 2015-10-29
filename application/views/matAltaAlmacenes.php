<?php include_once("/sections/header.php") ?>

<body>

    <div id="wrapper">
       <!-- Menu de materiales -->
         <?php include_once ("menuMateriales.php") ?>

        <div id="page-wrapper">

              <div class="container-fluid">
                  <form class="form-group" action="" method="POST">
                      <div class="row">
                        <div class="col-lg-2">
                          <label for="clave">Clave</label>
                          <input type="text" name="clave" type="text" class="form-control">
                        </div>
                        <div class="col-lg-4">
                          <label for="descripcion">Descrpipcion</label>
                          <textarea name="descripcion" id="" rows="3  " class="form-control" placehoder="Descripción de la actividad">
                          </textarea>
                        </div>
                      </div>
                      <div class="row">
                          <div class="col-lg-2">
                            <label for="ucosto">Ultimo Costo</label>
                            <input type="text" class="form-control" name="ucosto">
                          </div>
                          <div class="col-lg-4">
                            <label for="umedidas">Unicad de Medida</label>
                            <select name="umedidas" id="" class="form-control">
                              <option value="1">Opciones</option>
                              <option value="2">Opciones</option>
                              <option value="3">Opciones</option>
                              <option value="4">Opciones</option>
                            </select>
                          </div>
                          <div class="col-lg-4">
                            <label for="tallas">Tallas</label>
                             <select name="tallas" id="" class="form-control">
                                <option value="1">Opciones</option>
                                <option value="2">Opciones</option>
                                <option value="3">Opciones</option>
                                <option value="4">Opciones</option>
                              </select>
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-2">
                          <label for="minimo">Minimo</label>
                          <input type="text" class="form-control" name="minimo">
                        </div>
                        <div class="col-lg-2">
                          <label for="maximo">Máximo</label>
                          <input type="text" class="form-control" name="maximo">
                        </div>
                        <div class="col-lg-2">
                          <label for="tentrega">Tiempo de Entrega</label>
                          <input type="number" class="form-control" name="tentrega">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-2">
                          <label for="sku1">Sku (1)</label>
                          <input type="text" class="form-control" name="sku1">
                        </div>
                        <div class="col-lg-2">
                          <label for="sku2">Sku (2)</label>
                          <input type="text" class="form-control" name="sku2">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-2">
                          <input type="submit" class="btn btn-succes" value="Aceptar">
                        </div>
                      </div>
                  </form>
              </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

</body>
<?php  include_once ("/sections/footer.php") ?>
