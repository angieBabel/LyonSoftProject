<?php include_once("sections/header.php") ?>

<body>

    <div id="wrapper">
       <!-- Menu de materiales -->
         <?php include_once ("menuMateriales.php") ?>

        <div id="page-wrapper">

              <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-12">
                    <h1 id="IdTitulo" class="page-header">Edita Almacen</h1>
                  </div>
                </div>

                <div class="row ">
                  <div class="col-lg-2"></div>
                  <div class="col-lg-8 ">

                    <form class="form-horizontal" action="index.php/uploader/actualizaAlmacen" method="POST" enctype="multipart/form-data">
                      <?php form_open_multipart('uploader/actualizaAlmacen'); ?>
                        <div class="form-group">
                          <input type="hidden" name="id" value="<?php echo $almacen['clave']?>">
                          <label for="clave" class="control-label col-lg-9">Clave</label>
                          <div class="col-lg-3">
                              <input type="text" name="clave" type="text" placeholder="<?php echo $almacen['clave']?>" class="form-control" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="descripcion" class="control-label col-lg-2">Descrpipcion</label>
                          <div class="col-lg-10">
                            <textarea name="descripcion" id="" rows="3  " class="form-control" placehoder="Descripción de la actividad">
                              <?php echo $almacen['descripcion']?>
                            </textarea>
                          </div>
                        </div>
                        <div class="form-group ">
                          <div class="col-lg-8"></div>
                          <div class="col-lg-2">
                            <button type="submit" class="btn btn-danger form-control">Cancel</button>
                          </div>
                          <div class="col-lg-2">
                            <button type="submit" class="btn btn-success form-control">Save</button>
                          </div>
                        </div>
                    </form>

                  </div>
                  <div class="col-lg-2"></div>
                </div>
        <!-- /#page-wrapper -->
              </div>
        </div>
    <!-- /#wrapper -->
    </div>

</body>
<?php  include_once ("sections/footer.php") ?>
