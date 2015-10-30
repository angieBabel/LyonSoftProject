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
                        <div class="col-lg-4">
                          <label for="medidas">Medidas</label>
                          <input type="text" name="medidas" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-2">
                          <input type="submit" class="btn btn-succes" value="Guardar">
                          <input type="button" class="btn btn-succes" value="Cancelar">
                        </div>
                      </div>
                  </form>
              </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

</body>
<?php  include_once ("/sections/footer.php") ?>
