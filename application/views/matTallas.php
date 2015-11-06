<?php include_once("/sections/header.php") ?>

<body>

    <div id="wrapper">
    <!-- Menu de materiales -->
         <?php include_once ("menuMateriales.php") ?>


        <div id="page-wrapper">

              <div class="container-fluid">
                <div class="row">
<<<<<<< HEAD
                  <div class="col-lg-12">
                    <h1 class="page-header" id="IdTitulo">Tallas</h1>
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
              </div>
              <br>
              <br>
              <div class="row">
                <div class="col-lg-1"></div>
                <div class="table-responsive col-lg-10">
                  <table class="table table-hover table-striped">
                    <thead>
                      <tr><!--Renglones-->
                        <th >Run</th><!--Colunas-->
                        <th >Description</th>
                        <th >p1</th>
                        <th >p2</th>
                        <th >p3</th>
                        <th >p4</th>
                        <th >p5</th>
                        <th >p6</th>
                        <th >p7</th>
                        <th >p8</th>
                        <th >p9</th>
                        <th >p10</th>
                        <th >p11</th>
                        <th >p12</th>
                        <th >p13</th>
                        <th >p14</th>
                        <th >p15</th>
                        <th >Length</th>
                      </tr>
                    </thead>
                    <tbody>
=======
                    <div class="col-lg-12">
                        <h1 id="IdTitulo">Corridas/Tallas</h1>
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
                                <td>Clave</td>
                                <td>Corrida</td>
                                <td>Descripcion</td>
                                <td>Letra</td>
                                <th>T-1</th>
                                <th>T-2</th>
                                <th>T-3</th>
                                <th>T-4</th>
                                <th>T-5</th>
                                <th>T-6</th>
                                <th>T-7</th>
                                <th>T-8</th>
                                <th>T-9</th>
                                <th>T-10</th>
                                <th>T-11</th>
                                <th>T-12</th>
                                <th>T-13</th>
                                <th>T-14</th>
                                <th>T-15</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php foreach($tallas as $rowTallas){ ?>
                                 <tr>

                                 <td><?php echo $rowTallas['clave']; ?></td>
                                 <td><?php echo $rowTallas['corrida']; ?></td>
                                 <td><?php echo $rowTallas['descripcion']; ?></td>
                                 <td><?php echo $rowTallas['letra']; ?></td>
                                 <td><?php echo $rowTallas['cor1']; ?></td>
                                 <td><?php echo $rowTallas['cor2']; ?></td>
                                 <td><?php echo $rowTallas['cor3']; ?></td>
                                 <td><?php echo $rowTallas['cor4']; ?></td>
                                 <td><?php echo $rowTallas['cor5']; ?></td>
                                 <td><?php echo $rowTallas['cor6']; ?></td>
                                 <td><?php echo $rowTallas['cor7']; ?></td>
                                 <td><?php echo $rowTallas['cor8']; ?></td>
                                 <td><?php echo $rowTallas['cor9']; ?></td>
                                 <td><?php echo $rowTallas['cor10']; ?></td>
                                 <td><?php echo $rowTallas['cor11']; ?></td>
                                 <td><?php echo $rowTallas['cor12']; ?></td>
                                 <td><?php echo $rowTallas['cor13']; ?></td>
                                 <td><?php echo $rowTallas['cor14']; ?></td>
                                 <td><?php echo $rowTallas['cor15']; ?></td>
                                 <td><a href=""><i class="fa fa-pencil-square-o"></i></a></td>
                                 <td><a href=""><i class="fa fa-trash-o"></i></a></td>
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
                        <li id="lista1"><a href="#"><i class="fa fa-file-excel-o fa-lg"></i> </a></li>
                        <li id="lista2"><a href="#"><i class="fa fa-print fa-lg"></i> </a></li>

                      </ul>
                      <ul class="nav navbar-nav navbar-right ">
                          <li id="lista3"><a href="index.php/welcome/matAltaTallas">Agregar Corrida  <i class="fa fa-plus-square fa-lg"></i></a></li>
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



<?php include_once("/sections/header.php") ?>

<body>

    <div id="wrapper">
    <!-- Menu de materiales -->
         <?php include_once ("menuMateriales.php") ?>


        <div id="page-wrapper">

              <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h2>Tallas</h2>
                        </div>
                        <div class="panel-boy">
                            <label for="">Search</label><input type="text"><i class="fa fa-search "></i>
                            <label for="ordenar" class="control-label">Order By:</label>
                            <select class="" name="ordenar">
                                 <option><i class="fa fa-circle-o"></i> Id</option>
                                 <option><i class="fa fa-circle-o"></i> Name</option>
                                 <option><i class="fa fa-circle-o"></i> Comercial Name</option>
                                 <option><i class="fa fa-circle-o"></i> Date</option>
                            </select>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="row">
                  <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr><!--Renglones-->
                                <th >Run</th><!--Colunas-->
                                <th >Description</th>
                                <th >T-1</th>
                                <th >T-2</th>
                                <th >T-3</th>
                                <th >T-4</th>
                                <th >T-5</th>
                                <th >T-6</th>
                                <th >T-7</th>
                                <th >T-8</th>
                                <th >T-9</th>
                                <th >T-10</th>
                                <th >T-11</th>
                                <th >T-12</th>
                                <th >T-13</th>
                                <th >T-14</th>
                                <th >T-15</th>
                                <th >Length</th>
                            </tr>
                        </thead>
                        <tbody>
>>>>>>> origin/desarrollo
                           <!-- <?php //foreach($tallas as $rowTallas){ ?>
                           <tr>


                              <td ><?php// echo $rowTallas['run']; ?></td>
                              <td ><?php// echo $rowTallas['description']; ?></td>
                              <td ><?php //echo $rowTallas['p1']; ?></td>
                              <td ><?php// echo $rowTallas['p2']; ?></td>
                              <td ><?php// echo $rowTallas['p3']; ?></td>
                              <td ><?php// echo $rowTallas['p4']; ?></td>
                              <td ><?php //echo $rowTallas['p5']; ?></td>
                              <td ><?php// echo $rowTallas['p6']; ?></td>
                              <td ><?php// echo $rowTallas['p7']; ?></td>
                              <td ><?php// echo $rowTallas['p8']; ?></td>
                              <td ><?php// echo $rowTallas['p9']; ?></td>
                              <td ><?php// echo $rowTallas['p10']; ?></td>
                              <td ><?php //echo $rowTallas['p11']; ?></td>
                              <td ><?php// echo $rowTallas['p12']; ?></td>
                              <td ><?php //echo $rowTallas['p13']; ?></td>
                              <td ><?php// echo $rowTallas['p14']; ?></td>
                              <td ><?php //echo $rowTallas['p15']; ?></td>
                           <?php //} ?> -->
                           <tr>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                           </tr>
                           <tr>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                           </tr>
                           <tr>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                           </tr>
                           <tr>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                             <td>datos</td>
                           </tr>
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
                <div class=" col-lg-10 collapse navbar-collapse navbar-ex1-collapse" id="menuInferior">
                    <ul class="nav navbar-nav ">
                      <li id="lista1"><a href="#"><i class="fa fa-file-excel-o fa-lg"></i> </a></li>
                      <li id="lista2"><a href="#"><i class="fa fa-print fa-lg"></i> </a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right ">
                      <li id="lista3"><a href="index.php/welcome/matAltaProveedores">Agregar talla <i class="fa fa-plus-square fa-lg"></i></a></li>
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
