<?php include_once("/sections/header.php") ?>

<body>

    <div id="wrapper">
       <!-- Menu de materiales -->
         <?php include_once ("menuMateriales.php") ?>

        <div id="page-wrapper">

              <div class="container-fluid">
                  <div class="row">
                        <div class="col-lg-12">
                            <h1 id="IdTitulo">Alta de Proveedores</h1>
                        </div>

                  </div>
                  <form class="form-group" action="" method="POST">


                        <div class="form-group col-lg-2">
                          <label for="idproveedor">Id Proveedor</label>
                          <input type="text" name="idproveedor" class="form-control">
                        </div>
                        <div class="form-group col-lg-8"></div>
                        <div class="form-group col-lg-2">
                          <label for="nocliente">No. Cliente</label>
                          <input type="text" name="nocliente" class="form-control">
                        </div>

                        <div class="form-group col-lg-6">
                          <label for="nombreproveedor">Nombre del Proveedor</label>
                          <input type="text" class="form-control" name="nombreproveedor">
                        </div>
                        <div class="form-group col-lg-6">
                          <label for="nombrecomercial">Nombre Comercial</label>
                          <input type="text" class="form-control" name="nombrecomercial">
                        </div>

                        <div class="form-group col-lg-8">
                          <label for="direccion">Dirección</label>
                          <input type="text" class="form-control" name="direccion">
                        </div>
                        <div class="form-group col-lg-2">
                          <label for="cp">C.P.</label>
                          <input type="text" name="cp" class="form-control">
                        </div>

                        <div class="form-group col-lg-6">
                          <label for="Ciudad">Ciudad</label>
                          <select class="form-control" name="ciudad" id="">
                            <option value="">Opciones</option>
                            <option value="">Opciones</option>
                            <option value="">Opciones</option>
                            <option value="">Opciones</option>
                          </select>
                        </div>
                       <div class="form-group col-lg-6">
                          <label for="colonia">Colonia</label>
                          <select class="form-control" name="colonia" id="">
                            <option value="">Opciones</option>
                            <option value="">Opciones</option>
                            <option value="">Opciones</option>
                            <option value="">Opciones</option>
                          </select>
                        </div>

                        <div class="form-group col-lg-6">
                          <label for="rfc">R.F.C.</label>
                          <input type="text" name="rfc" class="form-control">
                        </div>
                         <div class="form-group col-lg-6">
                          <label for="curp">C.U.R.P.</label>
                          <input type="text" name="curp" class="form-control">
                        </div>
                        <div class="col-lg-6">
                          <label for="cuentacontable">Cuenta Contable</label>
                          <input type="text" name="cuentacontable" class="form-control">
                        </div>
                        <div class="col-lg-6">
                          <label for="porcutilidad">% Utilidad</label>
                          <input type="text" name="porcutilidad" class="form-control">
                        </div>
                        <div class="form-group col-lg-8">
                          <label for="correo">Correo</label>
                          <input type="text" class="form-control" name="correo">
                        </div>

                        <div class="form-group col-lg-3">
                          <label for="diasdesc">Dias C/Desc.</label>
                          <input type="text" name="diasdesc" class="form-control">
                        </div>
                         <div class="form-group col-lg-3">
                          <label for="porcdesc">% Desc.</label>
                          <input type="text" name="porcdesc" class="form-control">
                        </div>

                        <div class="form-group col-lg-3">
                          <label for="diassindesc">Dias S/Desc.</label>
                          <input type="text" name="diasdesc" class="form-control">
                        </div>
                         <div class="form-group col-lg-3">
                          <label for="porcsindesc">% S/Desc.</label>
                          <input type="text" name="porcdesc" class="form-control">
                        </div>


                        <div class="form-group col-lg-8">
                          <label for="paginaweb">Pág. Web</label>
                          <input type="text" class="form-control" name="paginaweb">

                        </div>

                        <div class="form-group col-lg-8">
                          <label for="agenteventas">Agente Ventas</label>
                          <input type="text" class="form-control" name="agenteventas">
                        </div>
                        <div class="form-group col-lg-8">
                          <label for="creditocobranza">Credito y Cobranza</label>
                          <input type="text" class="form-control" name="creditocobranza">
                        </div>

                        <div class="form-group col-lg-2">
                            <input type="submit" class="fa fa-save" value="Guardar">
                          </div>


                  </form>
              </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

</body>
<?php  include_once ("/sections/footer.php") ?>
