<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Taller</title>
    
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo constant('URL'); ?>public/css/bootstrap.min.css" rel="stylesheet" />

    <!-- MetisMenu CSS -->
    <link href="<?php echo constant('URL'); ?>public/css/metisMenu.min.css" rel="stylesheet" />

    <!-- Timeline CSS -->
    <link href="<?php echo constant('URL'); ?>public/css/timeline.css" rel="stylesheet" />

    <!-- Custom CSS -->
    <link href="<?php echo constant('URL'); ?>public/css/startmin.css" rel="stylesheet" />

    <!-- Morris Charts CSS -->
    <link href="<?php echo constant('URL'); ?>public/css/morris.css" rel="stylesheet" />

    <!-- Custom Fonts -->
    <link href="<?php echo constant('URL'); ?>public/css/font-awesome.min.css" rel="stylesheet" type="text/css" />


    <!-- DataTables CSS -->
    <link href="<?php echo constant('URL'); ?>public/css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo constant('URL'); ?>public/css/dataTables/dataTables.responsive.css" rel="stylesheet">
    <!-- sweetalert2 CSS -->
    <link href="<?php echo constant('URL'); ?>public/sweetalert/dist/sweetalert2.min.css" rel="stylesheet">

</head>

<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo constant('URL'); ?>main">TALLAR MECANICO</a>
            </div>

            <!-- button de responsi -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Top Navigation: Right Menu -->
            <ul class="nav navbar-right navbar-top-links">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> hector.coyotl
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- Sidebar -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search..." />
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="<?php echo constant('URL'); ?>nuevaCotizacion"><i class="fa fa-edit fa-fw"></i> Cotizaciones</a>
                        </li>
                        <li>
                        <a href="<?php echo constant('URL'); ?>nuevaProveedorRefaccion"><i class="fa  fa-balance-scale fa-fw"></i> Refaccion Proveedor</a>

                                </li>
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Proveedores<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo constant('URL'); ?>nuevoProveedor">Nuevo</a>
                                </li>
                                <li>
                                    <a href="<?php echo constant('URL'); ?>consultarProveedor">Consultar</a>
                                </li>
      
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa  fa-male fa-fw"></i> Sucursales<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo constant('URL'); ?>nuevaSucursal">Nuevo</a>
                                </li>
                                <li>
                                    <a href="<?php echo constant('URL'); ?>consultarSucursales">Consultar</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-cogs fa-fw"></i> Refacciones<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo constant('URL'); ?>nuevaRefaccion">Nueva</a>
                                </li>
                                <li>
                                    <a href="<?php echo constant('URL'); ?>consultarRefacciones">Consultar</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-taxi"></i> Marcas Autos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo constant('URL'); ?>nuevaMarca">Nuevo</a>
                                </li>
                                <li>
                                    <a href="<?php echo constant('URL'); ?>consultarMarca">Consultar</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <br>

