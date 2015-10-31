<?php include_once("/sections/header.php") ?>

<body>

    <div id="wrapper">
       <!-- Menu de materiales -->
         <?php include_once ("menuMateriales.php") ?>

        <div id="page-wrapper">

              <div class="container-fluid">
               <div class="row">
                    <div class="col-lg-12">
                        <h1 id="IdTitulo">Alta de Almacen</h1>
                    </div>

                </div>
                <form class="form-group" action="" method="POST">
                    <div class="row">
                    <div class="col-lg-2"></div>
                      <div class="col-lg-2">
                        <label for="clave">Clave</label>
                        <input type="text" name="clave" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-2"></div>
                      <div class="col-lg-6">
                        <label for="descripcion">Descrpipcion</label>
                        <textarea name="descripcion" id="" rows="3  " class="form-control" placehoder="Descripción de la actividad">
                        </textarea>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6"></div>
                      <div class="col-lg-1">
                        <input type="submit" class="btn btn-succes" value="Guardar">
                      </div>
                      <div class="col-lg-1">
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
