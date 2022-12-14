<?php
require "../view/template/header.php";
?>
<link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<link href="../view/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
<link href="../view/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="../view/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
<link href="../view/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
<link href="../view/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
<?php
    include_once "conexion.php";
    $sentencia = $bd -> query("select * from habitacion_h");
    $persona = $sentencia->fetchAll(PDO::FETCH_OBJ);
    //print_r($persona);
?>
<div class="right_col" role="main">
    <div class="x_panel">
        <div class="x_title">
            <h2> Habitaciones<small>Todos los campos son obligatorios**</small></h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <br />
            <form class="form-vertical" method="POST" action="registroHab.php">
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Numero Habitacion<span class="required">*</span>
                    </label>
                    <div class="col-md-4">
                        <input type="text" id="first-name2" name="A"required="required" class="form-control">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Nombre Habitacion<span
                            class="required">*</span>
                    </label>
                    <div class="col-md-4">
                        <input type="text" id="last-name2"  name="B" required="required" class="form-control">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Precio de habitacion</label>
                    <div class="col-md-4 ">
                        <input type="number" class="form-control" name="C" placeholder="Solo numero">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Capacidad<span class="required">*</span>
                    </label>
                    <div class="col-md-4">
                        <input type="text" id="last-name2"  name="D"required="required" class="form-control">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Tama??o<span class="required">*</span>
                    </label>
                    <div class="col-md-4">
                        <input type="text" id="last-name2" name="E" required="required" class="form-control">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Cantidad<span class="required">*</span>
                    </label>
                    <div class="col-md-4">
                        <input type="text" id="last-name2"  name="F" required="required" class="form-control">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Descripcion<span class="required">*</span>
                    </label>
                    <div class="col-md-4">
                        <input type="text" id="last-name2"  name="G" required="required" class="form-control">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Cantidad de camas<span class="required">*</span>
                    </label>
                    <div class="col-md-4">
                        <input type="text" id="last-name2"  name="H" required="required" class="form-control">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Modelo de cama<span class="required">*</span>
                    </label>
                    <div class="col-md-4">
                        <input type="text" id="last-name2"  name="I" required="required" class="form-control">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Otros detalles<span class="required">*</span>
                    </label>
                    <div class="col-md-4">
                        <input type="text" id="last-name2"  name="J" required="required" class="form-control">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Estado<span class="required">*</span>
                    </label>
                    <div class="col-md-4">
                        <input type="text" id="last-name2"  name="K" required="required" class="form-control">
                    </div>
                </div>
                <div class="item form-group">
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-round btn-success form-control">Agregar</button>
                    </div>
                </div>
            </form>
        </div>


    </div>
    <div class="x_panel">
        <div class="x_title">
            <h2>Lista de categoria<small>**</small></h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box table-responsive">
                        <table id="datatable-fixed-header" class="table table-striped table-bordered"
                            style="width:100%">
                            <thead>
                                <tr>
                                    <th>Nombre Habitacion</th>
                                    <th>Precio</th>
                                    <th>Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                foreach($persona as $dato){ 
                            ?>

                            <tr>
                                <td scope="row"><?php echo $dato->Nombre_Hab; ?></td>
                                <td><?php echo $dato->Precio; ?></td>
                                <td><?php echo $dato->Estado; ?></td>
                            </tr>

                            <?php 
                                }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require "../view/template/footer.php";
?>
<!-- NProgress -->
<script src="../view/vendors/nprogress/nprogress.js"></script>
<!-- iCheck -->
<script src="../view/vendors/iCheck/icheck.min.js"></script>
<!-- Datatables -->
<script src="../view/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../view/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="../view/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="../view/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="../view/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="../view/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="../view/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="../view/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="../view/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="../view/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="../view/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="../view/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="../view/vendors/jszip/dist/jszip.min.js"></script>
<script src="../view/vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="../view/vendors/pdfmake/build/vfs_fonts.js"></script>