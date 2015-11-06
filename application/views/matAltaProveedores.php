<?php include_once("/sections/header.php") ?>

<body>

    <div id="wrapper">
       <!-- Menu de materiales -->
         <?php include_once ("menuMateriales.php") ?>

        <div id="page-wrapper">

               <div class="container-fluid">
                  <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header" id="IdTitulo">Add Providers</h1>
                    </div>
                  </div>
                  <div class="row ">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10 ">
                      <form class="form-horizontal" action="" method="POST">

                        <div class="form-group">
                          <label class="control-label col-lg-10" for="idproveedor">Id Proveedor</label>
                          <div class="col-lg-2">
                            <input type="text" name="idproveedor" class="form-control">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-lg-10" for="nocliente">No. Cliente</label>
                          <div class="col-lg-2">
                            <input type="text" name="nocliente" class="form-control">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-lg-3" for="nombreproveedor">Nombre del Proveedor</label>
                          <div class="col-lg-9">
                            <input type="text" class="form-control" name="nombreproveedor">
                          </div>
                        </div>

                        <div class="form-group text-left">
                          <label class="control-label col-lg-3" for="nombrecomercial">Nombre Comercial</label>
                          <div class="col-lg-9">
                            <input type="text" class="form-control" name="nombrecomercial">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-lg-3" for="direccion">Dirección</label>
                          <div class="col-lg-6">
                            <input type="text" class="form-control" name="direccion">
                          </div>
                          <label class="control-label col-lg-1" for="cp">C.P.</label>
                          <div class="col-lg-2">
                            <input type="text" name="cp" class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-lg-3" for="Ciudad">Ciudad</label>
                          <div class="col-lg-4">
                            <select class="form-control" name="ciudad" id="">
                              <option value="">Opciones</option>
                              <option value="">Opciones</option>
                              <option value="">Opciones</option>
                              <option value="">Opciones</option>
                            </select>
                          </div>
                          <label class="control-label col-lg-1" for="colonia">Colonia</label>
                          <div class="col-lg-4">
                            <select class="form-control" name="colonia" id="">
                              <option value="">Opciones</option>
                              <option value="">Opciones</option>
                              <option value="">Opciones</option>
                              <option value="">Opciones</option>
                            </select>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-lg-3" for="rfc">R.F.C.</label>
                          <div class="col-lg-4">
                            <input type="text" name="rfc" class="form-control">
                          </div>
                          <label class="control-label col-lg-1" for="curp">C.U.R.P.</label>
                          <div class="col-lg-4">
                            <input type="text" name="curp" class="form-control">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-lg-3" for="cuentacontable">Cuenta Contable</label>
                          <div class="col-lg-4">
                            <input type="text" name="cuentacontable" class="form-control">
                          </div>
                          <label class="control-label col-lg-1" for="porcutilidad">Utilidad</label>
                          <div class="col-lg-4">
                            <input type="text" name="porcutilidad" class="form-control"  placeholder="%">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-lg-3" for="correo">Correo</label>
                          <div class="col-lg-4">
                            <input type="text" class="form-control" name="correo">
                          </div>
                          <label class="control-label col-lg-1" for="tel">Telefono</label>
                          <div class="col-lg-4">
                            <input type="text" class="form-control" name="tel">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-lg-3" for="diasdesc">Dias C/Desc.</label>
                          <div class="col-lg-4">
                            <input type="text" name="diasdesc" class="form-control">
                          </div>
                           <label class="control-label col-lg-1" for="porcdesc">% Desc.</label>
                          <div class="col-lg-4">
                            <input type="text" name="porcdesc" class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                         <label class="control-label col-lg-3" for="diassindesc">Dias S/Desc.</label>
                         <div class="col-lg-4">
                           <input type="text" name="diasdesc" class="form-control">
                         </div>
                          <label class="control-label col-lg-1" for="porcsindesc">S/Desc.</label>
                         <div class="col-lg-4">
                           <input type="text" name="porcdesc" class="form-control">
                         </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-lg-3" for="paginaweb">Página Web</label>
                          <div class="col-lg-9">
                            <input type="text" class="form-control" name="paginaweb">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-lg-3" for="agenteventas">Agente Ventas</label>
                          <div class="col-lg-9">
                            <input type="text" class="form-control" name="agenteventas">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-lg-3" for="creditocobranza">Credito y Cobranza</label>
                          <div class="col-lg-9">
                            <input type="text" class="form-control" name="creditocobranza">
                          </div>
                        </div>

                        <div class="form-group">
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
                    <div class="col-lg-1"></div>
                  </div>
              </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

</body>
<?php  include_once ("/sections/footer.php") ?>
