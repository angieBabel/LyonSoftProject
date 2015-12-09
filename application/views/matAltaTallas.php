<?php include_once("sections/header.php") ?>

<body>

    <div id="wrapper">
       <!-- Menu de materiales -->
         <?php include_once ("menuMateriales.php") ?>

        <div id="page-wrapper">

              <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-12">
                    <h1 class="page-header" id="IdTitulo">Alta de Corrida</h1>
                  </div>
                </div>

                <div class="row ">
                  <div class="col-lg-1"></div>
                  <div class="col-lg-10">
                    <form class="form-horizontal" action="index.php/uploader/altaTalla" method="POST" enctype="multipart/form-data">
                      <?php form_open_multipart('uploader/altaTalla'); ?>
                        <div class="form-group">
                          <label for="clave" class="control-label col-lg-9">Clave</label>
                          <div class="col-lg-2">
                           <?php foreach ($ultimaTalla as $ultimo) { ?>
                              <input type="text" name="clave" type="text" placeholder="<?php echo $ultimo['clave']+1 ?>" class="form-control" disabled>
                           <?php } ?>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="corrida" class="control-label col-lg-2">Corrida</label>
                          <div class="col-lg-2">
                            <input type="text" name="corrida" class="form-control">
                          </div>
                          <label for="letra" class="control-label col-lg-2">Letra</label>
                          <div class="col-lg-3">
                            <input type="text" name="letra" class="form-control">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-12 page-header text-center" for="">Tallas Mexicanas</label>
                          <br>
                          <label for="t-1" class="control-label col-lg-1">T-1</label>
                          <div class="col-lg-1">
                            <input type="text" name="t-1" class="form-control">
                          </div>
                          <label for="t-2" class="control-label col-lg-2">T-2</label>
                          <div class="col-lg-1">
                            <input type="text" name="t-2" class="form-control">
                          </div>
                          <label for="t-3" class="control-label col-lg-2">T-3</label>
                          <div class="col-lg-1">
                            <input type="text" name="t-3" class="form-control">
                          </div>
                          <label for="t-4" class="control-label col-lg-2">T-4</label>
                          <div class="col-lg-1">
                            <input type="text" name="t-4" class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="t-5" class="control-label col-lg-1">T-5</label>
                          <div class="col-lg-1">
                            <input type="text" name="t-5" class="form-control">
                          </div>
                          <label for="t-6" class="control-label col-lg-2">T-6</label>
                          <div class="col-lg-1">
                            <input type="text" name="t-6" class="form-control">
                          </div>
                          <label for="t-7" class="control-label col-lg-2">T-7</label>
                          <div class="col-lg-1">
                            <input type="text" name="t-7" class="form-control">
                          </div>
                          <label for="t-8" class="control-label col-lg-2">T-8</label>
                          <div class="col-lg-1">
                            <input type="text" name="t-8" class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="t-9" class="control-label col-lg-1">T-9</label>
                          <div class="col-lg-1">
                            <input type="text" name="t-9" class="form-control">
                          </div>
                          <label for="t-10" class="control-label col-lg-2">T-10</label>
                          <div class="col-lg-1">
                            <input type="text" name="t-10" class="form-control">
                          </div>
                          <label for="t-11" class="control-label col-lg-2">T-11</label>
                          <div class="col-lg-1">
                            <input type="text" name="t-11" class="form-control">
                          </div>
                          <label for="t-12" class="control-label col-lg-2">T-12</label>
                          <div class="col-lg-1">
                            <input type="text" name="t-12" class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="t-13" class="control-label col-lg-1">T-13</label>
                          <div class="col-lg-1">
                            <input type="text" name="t-13" class="form-control">
                          </div>
                          <label for="t-14" class="control-label col-lg-2">T-14</label>
                          <div class="col-lg-1">
                            <input type="text" name="t-14" class="form-control">
                          </div>
                          <label for="t-15" class="control-label col-lg-2">T-15</label>
                          <div class="col-lg-1">
                            <input type="text" name="t-15" class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="descripcion" class="control-label col-lg-1">Descripcion</label>
                            <div class="col-lg-10">
                              <textarea name="descripcion" id="" rows="3  " class="form-control" placehoder="Descripción de la actividad">
                              </textarea>
                            </div>
                        </div>
                        <div class="form-group ">
                          <div class="col-lg-7"></div>
                          <div class="col-lg-2">
                            <button type="submit" class="btn btn-danger form-control">Cancel</button>
                          </div>
                          <div class="col-lg-2">
                            <button type="submit" class="btn btn-success form-control">Save</button>
                          </div>
                        </div>
                    </form>

                  </div>
                  <div class="col-lg-1"></div>
                </div>
        <!-- /#page-wrapper -->
              </div>
        </div>
    <!-- /#wrapper -->
    </div>

</body>
<?php  include_once ("sections/footer.php") ?>
