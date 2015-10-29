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
                        <li id="lista3"><a href="index.php/welcome/matAltaProveedores"><i class="fa fa-plus"></i> New </a></li>
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
