<?php include_once("/sections/header.php") ?>

<body>

    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php/welcome/cargarPanel">Materials</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.php/welcome/matProductos"><i class="fa fa-fw fa-dashboard"></i> Productos</a>
                    </li>
                    <li>
                        <a href="index.php/welcome/matProveedores"><i class="fa fa-fw fa-bar-chart-o"></i> Proveedores</a>
                    </li>
                    <li>
                        <a href="index.php/welcome/matAlmacenes"><i class="fa fa-fw fa-table"></i> Almacenes</a>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Corridas/Tallas</a>
                    </li>
                    <li>
                        <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Unicades de Medida</a>
                    </li>
                    <li>
                        <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Compras al Almacén</a>
                    </li>
                    <li>
                        <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Consulta de Compras</a>
                    </li>
                    <li>
                        <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> Consulta de existencias</a>
                    </li>
                    <li>
                        <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> Cuentas por Pagar Nota</a>
                    </li>
                    <li>
                        <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> Bancos</a>
                    </li>
                    <li>
                        <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> Movimientos al Almacén</a>
                    </li>
                    <li>
                        <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> Entrada Inventario</a>
                    </li>
                    <li>
                        <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> Reporte Movimiento )</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

              <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h2>Providers</h2>
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
                                <th >Id</th><!--Colunas-->
                                <th >Name</th>
                                <th >Comercial Name</th>
                                <th >Date</th>
                            </tr>
                        </thead>
                        <tbody>
                         <!-- <?php //foreach($proveedores as $rowProveedores){ ?>
                         <tr>
                             <td><?php //echo $rowProveedores['id']; ?></td>
                             <td><?php //echo $rowProveedores['name']; ?></td>
                             <td><?php //echo $rowProveedores['comercialname']; ?></td>
                             <td><?php //echo $rowProveedores['date']; ?></td>
                         </tr>
                         <?php// } ?> -->
                         <tr>
                           <td>DATOS</td>
                           <td>DATOS</td>
                           <td>DATOS</td>
                           <td>DATOS</td>
                         </tr>
                         <tr>
                           <td>DATOS</td>
                           <td>DATOS</td>
                           <td>DATOS</td>
                           <td>DATOS</td>
                         </tr>
                         <tr>
                           <td>DATOS</td>
                           <td>DATOS</td>
                           <td>DATOS</td>
                           <td>DATOS</td>
                         </tr>
                        </tbody>
                    </table>
                  </div>
                </div>
                <div class="row">
                  <div class=" collapse navbar-collapse">
                     <ul class="nav navbar-nav ">
                        <li id="lista1"><a href="#"><i class="fa fa-file-excel-o"></i> Excel </a></li>
                        <li id="lista2"><a href="#"><i class="fa fa-print"></i> Print </a></li>
                        <li id="lista3"><a href="#"><i class="fa fa-plus"></i> New </a></li>
                        <li id="lista4"><a href="#"><i class="fa fa-pencil"></i> Edit </a></li>
                        <li id="lista5"><a href="#"><i class="fa fa-times"></i> Deactivate </a></li>
                     </ul>
                  </div>
                </div>
              </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

</body>
<?php  include_once ("/sections/footer.php") ?>
