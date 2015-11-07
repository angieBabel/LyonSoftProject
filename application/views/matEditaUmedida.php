<?php include_once("/sections/header.php") ?>

<body>

    <div id="wrapper">
       <!-- Menu de materiales -->
         <?php include_once ("menuMateriales.php") ?>

        <div id="page-wrapper">

              <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-12">
                    <h1 class="page-header" id="IdTitulo">Edita Unidad de Medida</h1>
                  </div>
                </div>

                <div class="row ">
                  <div class="col-lg-2"></div>
                  <div class="col-lg-8">

                    <form class="form-horizontal" action="index.php/uploader/actualizaUmedida" method="POST" enctype="multipart/form-data">
                      <?php form_open_multipart('uploader/actualizaUmedida'); ?>
                        <div class="form-group">
                          <input type="hidden" name="id" value="<?php echo $umedida['clave']?>">
                          <label for="clave" class="control-label col-lg-9">Clave</label>
                          <div class="col-lg-3">
                              <input type="text" name="clave" type="text" placeholder="<?php echo $umedida['clave']+1 ?>" class="form-control" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="descripcion" class="control-label col-lg-2">Descripcion</label>
                          <div class="col-lg-6">
                            <input name="descripcion" id=""  class="form-control" placehoder="" value="<?php echo $umedida['descripcion']?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="factor" class="control-label col-lg-2">Factor</label>
                          <div class="col-lg-3">
                            <input type="text" name="factor" type="text" class="form-control" value="<?php echo $umedida['factor_tbmedida']?>">
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
<?php  include_once ("/sections/footer.php") ?>
