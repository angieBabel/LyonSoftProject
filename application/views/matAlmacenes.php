<?php include_once("/sections/header.php") ?>

<body>

    <div id="wrapper">
        <!-- Menu de materiales -->
         <?php include_once ("menuMateriales.php") ?>

        <div id="page-wrapper">

              <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 id="IdTitulo">Stores</h1>
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
                                <th >ID</th><!--Colunas-->
                                <th >Description</th>
                                <th >Date</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                         <tr>
                            <td>Datos</td>
                            <td>Datos</td>
                            <td>Datos</td>
                            <td><i class="fa fa-pencil-square-o"></i></td>
                            <td><i class="fa fa-trash-o"></i></td>
                         </tr>
                         <tr>
                            <td>Datos</td>
                            <td>Datos</td>
                            <td>Datos</td>
                            <td><i class="fa fa-pencil-square-o"></i></td>
                            <td><i class="fa fa-trash-o"></i></td>
                         </tr>
                         <tr>
                            <td>Datos</td>
                            <td>Datos</td>
                            <td>Datos</td>
                            <td><i class="fa fa-pencil-square-o"></i></td>
                            <td><i class="fa fa-trash-o"></i></td>
                         </tr>
                         <tr>
                            <td>Datos</td>
                            <td>Datos</td>
                            <td>Datos</td>
                            <td><i class="fa fa-pencil-square-o"></i></td>
                            <td><i class="fa fa-trash-o"></i></td>
                         </tr>
                        </tbody>
                    </table>
                  </div>
                  <div class="col-lg-1"></div>
                </div>
                <div class="row">
                  <div class="col-lg-1"></div>
                  <div class="col-lg-10">
                    <ul class="nav navbar-nav ">
                      <li id="lista1"><a href="#"><i class="fa fa-file-excel-o fa-lg"></i> </a></li>
                      <li id="lista2"><a href="#"><i class="fa fa-print fa-lg"></i> </a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right ">
                      <li id="lista3"><a href="index.php/welcome/matAltaAlmacenes">Agregar almacen <i class="fa fa-plus-square fa-lg"></i></a></li>
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
