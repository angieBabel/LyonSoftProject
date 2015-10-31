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
                </div>
                <div class="row">
                  <div class=" collapse navbar-collapse">
                     <ul class="nav navbar-nav ">
                        <li id="lista1"><a href="#"><i class="fa fa-file-excel-o"></i> Excel </a></li>
                        <li id="lista2"><a href="#"><i class="fa fa-print"></i> Print </a></li>
                        <li id="lista3"><a href="index.php/welcome/matAltaTallas"><i class="fa fa-plus"></i> New </a></li>
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
