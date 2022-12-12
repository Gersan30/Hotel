<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="sicon" href="/admin/assets/img/Login/logo.png">
    <title>Hotel La Hacienda</title>
    <!-- Bootstrap -->
    <link href="../view/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../view/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../view/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../view/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../view/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">

    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="../view/index2.php" class="site_title"><i class="fa fa-home"></i> <span>La
                                hacienda</span></a>
                    </div>
                    <div class="clearfix"></div>
                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_info">
                            <span>Bienvenido,</span>
                            <h2>Juan</h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />
                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-tachometer"></i>Inicio<span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="../view/index2.php">Tablero</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-home"></i>Gestion de habitaciones<span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="../view/vista_categoria_habiacion.php">Categorias</a></li>
                                        <li><a href="../view/vista_habitacion.php">Habitacion</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-calendar"></i>Reservaciones<span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="general_elements.html">Check IN</a></li>
                                        <li><a href="media_gallery.html">Check OUT</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="glyphicon glyphicon-cutlery"></i>Gestion de restaruante<span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="chartjs.html">pedidos</a></li>
                                        <li><a href="fixed_footer.html">Platillos</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-cubes"></i>Gestion de almacen<span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="fixed_sidebar.html">Categoria</a></li>
                                        <li><a href="fixed_footer.html">Presentacion</a></li>
                                        <li><a href="fixed_footer.html">Producto</a></li>
                                        <li><a href="fixed_footer.html">Lotes</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="glyphicon glyphicon-shopping-cart"></i>Gestion de Compras<span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="../view/vista_proveedor.php">Proveedores</a></li>
                                        <li><a href="fixed_footer.html">Pedidos</a></li>
                                        <li><a href="fixed_footer.html">Orden</a></li>
                                        <li><a href="fixed_footer.html">Compras</a></li>
                                        <li><a href="fixed_footer.html">Recepcion de compras</a></li>
                                        <li><a href="fixed_footer.html">Devolucion de compras</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="menu_section">
                            <h3>Administracion</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-archive"></i>Gestion de inventario<span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="e_commerce.html">Solicitud de pedido de compras</a></li>
                                        <li><a href="e_commerce.html">Inventario</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-cutlery"></i>Gestion de cocina<span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="e_commerce.html">Pedido a bodega</a></li>
                                        <li><a href="e_commerce.html">Cocina</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-money"></i>Gestion de venta<span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="../view/vista_cliente.php">Gestion de cliente</a></li>
                                        <li><a href="page_403.html">Realizar venta</a></li>
                                        <li><a href="page_404.html">Realizar Devolucion</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-bank"></i>Gestion de caja<span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="#level1_1">Caja</a>
                                        <li><a>Apertura<span class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <li class="sub_menu"><a href="level2.html">Arqueo</a>
                                                </li>
                                                <li><a href="#level2_1">Cierre</a>
                                                </li>
                                                <li><a href="#level2_2"></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a>Movimientos<span class="fa fa-chevron-down"></span></a>
                                        <li><a href="#level2_1">Movimientos</a>
                                        </li>
                                </li>

                            </ul>
                            <li><a><i class="fa fa-users"></i>Gestion de negocio<span
                                        class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="../view/vista_coloborador.php">Coloboradores</a></li>
                                    <li><a href="../view/vista_cargo.php">Cargos</a></li>
                                    <li><a href="../view/vista_usuarios_sistema.php">Usuarios</a></li>
                                </ul>
                            </li>
                        </div>

                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="../admin/index.php">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>
            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class=" navbar-right">
                            <li class="nav-item dropdown open" style="padding-left: 15px;">
                                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true"
                                    id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                    <img src="images/img.jpg" alt="">Juan
                                </a>
                                <div class="dropdown-menu dropdown-usermenu pull-right"
                                    aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="login.html"><i class="fa fa-sign-out pull-right"></i>
                                        Log Out</a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>