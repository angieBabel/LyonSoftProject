<?php include_once("/sections/header.php") ?>

<body>

    <div id="wrapper">
    <!-- Menu de materiales -->
         <?php include_once ("menuMateriales.php") ?>


        <div id="page-wrapper">

              <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header" id="IdTitulo">Products</h1>
                    </div>

                </div>
                <div class="row">
                  <div class="col-lg-2 col-md-2 col-sm-1"></div>
                  <div class="col-lg-8 col-md-8 col-sm-9">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search for...">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                      </span>
                    </div>
                  </div>
                </div>
                <br>
                <br>
                <div class="row">
                  <div class="col-lg-1"></div>
                  <div class="table-responsive col-lg-10">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr><!--Renglones-->
                              <th>ID</th>
                              <th>Description</th><!--Colunas-->
                              <th>IdMedida</th>
                              <th>Cost</th>
                              <th>Max</th>
                              <th>Min</th>
                              <th>Sizes</th>
                              <th>Tiempo Entrega</th>
                              <th></th>
                              <th></th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php foreach($productos as $rowProductos){ ?>
                          <tr>
                              <td><?php echo $rowProductos['clave']; ?></td>
                              <td><?php echo $rowProductos['descripcion']; ?></td>
                              <td><?php echo $rowProductos['idmedida']; ?></td>
                              <td><?php echo $rowProductos['costo']; ?></td>
                              <td><?php echo $rowProductos['maximo']; ?></td>
                              <td><?php echo $rowProductos['minimo']; ?></td>
                              <td><?php echo $rowProductos['clavecor']; ?></td>
                              <td><?php echo $rowProductos['tentrega']; ?></td>
                              <td><a href="index.php/uploader/editaProducto?id=<?php echo $rowProductos['clave'];?>"><i class="fa fa-pencil-square-o"></i></a></td>
                              <td><a href="index.php/uploader/desactivaProducto?id=<?php echo $rowProductos['clave'];?>"><i class="fa fa-times-circle"></i></a></td>
                          </tr>
                          <?php } ?>
                        </tbody>
                    </table>
                  </div>
                  <div class="col-lg-1"></div>
                </div>
                <div class="row">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle btn btn-default btnInferior" data-toggle="collapse" data-target="#menuInferior"> <!-- Menu desplegable para inferiores -->
                      <span class="sr-only">Toggle navigation</span>
                      <span class=""><strong>Acciones</strong></span>
                      <!--<span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span> -->
                    </button>
                  </div>
                  <div class="col-lg-1"></div>
                  <div class="col-lg-10 collapse navbar-collapse navbar-ex1-collapse" id="menuInferior">
                     <ul class="nav navbar-nav ">
                        <li id="lista1"><a href="#"><i class="fa fa-tags fa-lg"></i>  </a></li>
                        <li id="lista1"><a href="#"><i class="fa fa-list-alt fa-lg"></i></a></li>
                        <li id="lista1"><a href="#"><i class="fa fa-file-excel-o fa-lg"></i> </a></li>
                        <li id="lista2"><a href="#"><i class="fa fa-print fa-lg"></i> </a></li>

                      </ul>
                      <ul class="nav navbar-nav navbar-right ">
                          <li id="lista3"><a href="index.php/welcome/matAltaProductos">Agregar producto  <i class="fa fa-plus-square fa-lg"></i></a></li>
                      </ul>
                    </div>
                    <div class="col-lg-1"></div>
                  </div>
                </div>
              </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

</body>
<?php  include_once ("/sections/footer.php") ?>
