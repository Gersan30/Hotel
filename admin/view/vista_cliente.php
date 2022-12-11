<?php
require "../view/template/header.php";
?>
<link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<link href="../view/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
<link href="../view/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="../view/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
<link href="../view/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
<link href="../view/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
<div class="right_col" role="main">
    <div class="x_panel">
        <div class="x_title">
            <h2>Clientes<small>Todos los campos son requeridos</small></h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <br />
            <form class="form-inline">
                <div class="form-group">
                    <label class="col-form-label" for="first-name">Nombre<span class="required">*</span>
                    </label>
                    <div class="col-md-6">
                        <input type="text" id="first-name2" required="required" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3" for="last-name">Apellido<span class="required">*</span>
                    </label>
                    <div class="col-md-7">
                        <input type="text" id="last-name2" name="last-name" required="required" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3" for="last-name">Cedula<span class="required">*</span>
                    </label>
                    <div class="col-md-7">
                        <input type="text" id="last-name2" name="last-name" required="required" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3" for="last-name">Fecha de nacimiento<span class="required">*</span>
                    </label>
                    <div class="col-md-7">
                        <input type="text" id="last-name2" name="last-name" required="required" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3" for="last-name">Direccion<span class="required">*</span>
                    </label>
                    <div class="col-md-7">
                        <input type="text" id="last-name2" name="last-name" required="required" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-7">
                        <button type="button" class="btn btn-round btn-success form-control">Agregar</button>
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
                                    <th>Nombre</th>
                                    <th>Estado</th>
                                    <th>Operacion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>
                                        <div class="form-group">
                                            <div class="col-md-7">
                                                <button class="btn btn-round btn-warning form-control"
                                                    type="button">Editar</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
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