<?php include_once("/sections/header.php") ?>

<body>

    <div id="wrapper">
       <!-- Menu de materiales -->
        <?php include_once ("menuMateriales.php") ?>

        <div id="page-wrapper">

          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                  <h1 id="IdTitulo">Added Products</h1>
              </div>
            </div>
            <div class="row ">
              <div class="col-lg-2"></div>
              <div class="col-lg-8 pform">
                <form class="form-horizontal" action="" method="POST">
                  <div class="form-group">
                    <label for="clave" class="control-label col-lg-9">Clave</label>
                    <div class="col-lg-3">
                      <input type="text" name="clave" type="text" class="form-control" disabled>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="clave" class="control-label col-lg-2">Descrpipcion</label>
                    <div class="col-lg-10">
                      <textarea name="descripcion" id="" rows="3  " class="form-control" placehoder="Descripción de la actividad">
                      </textarea>

                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="ucosto">Costo</label>
                    <div class="col-lg-2">
                      <input type="text" class="form-control" placeholder="Amount" name="ucosto">
                    </div>
                    <label for="umedidas" class="control-label col-lg-2">U. de Medida</label>
                    <div class="col-lg-2">
                      <select name="umedidas" id="" class="form-control">
                                <option value="1">Opciones</option>
                                <option value="2">Opciones</option>
                                <option value="3">Opciones</option>
                                <option value="4">Opciones</option>
                      </select>
                    </div>
                    <label for="tallas" class="control-label col-lg-2">Tallas</label>
                    <div class="col-lg-2">
                        <select name="tallas" id="" class="form-control">
                          <option value="1">Opciones</option>
                          <option value="2">Opciones</option>
                          <option value="3">Opciones</option>
                          <option value="4">Opciones</option>
                        </select>
                    </div>
                  </div>
                  <br>

                  <div class="form-group ">
                    <label class="col-lg-12" for="">Stock</label>
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
                    <label class="col-lg-12" for="">Código de Barras</label>
                    <br>
                    <label class="control-label col-lg-1" for="sku1">Sku(1)</label>
                    <div class="col-lg-5">
                      <input type="text" class="form-control" name="sku1">
                    </div>
                    <label for="sku2" class="control-label col-lg-1">Sku(2)</label>
                    <div class="col-lg-5">
                      <input type="text" class="form-control" name="sku2">
                    </div>
                  </div>


                  <div class="form-group ">
                    <div class="col-lg-10"></div>
                      <div class="col-lg-2">
                        <button type="submit" class="btn btn-primary form-control">Save</button>
                      </div>
                  </div>
                </form>
              </div>
              <div class="col-lg-2"></div>
            </div>
          </div>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
</body>
<?php  include_once ("/sections/footer.php") ?>
