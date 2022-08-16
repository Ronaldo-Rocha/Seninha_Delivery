<?php
ob_start();
session_start();
require('../_app/Config.inc.php');
require('../_app/Mobile_Detect.php');
$detect = new Mobile_Detect;

$site = HOME;

// $login = new AdministradorLogin(1);

// $logoff = filter_input(INPUT_GET, 'logoff', FILTER_VALIDATE_BOOLEAN);

// if(!$login->CheckLogin()):
//     unset($dataLogin['administrador']);
//     header("Location: {$site}");
// else:
//     $adminlogin =  $_SESSION['administrador'];
// endif;

// if(!empty($logoff) && $logoff == 'true'):
//     unset($_SESSION['administrador']);
//     header("Location: {$site}admin");
// endif;

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title><?= $texto['nome_site_landing']; ?> - Administrar</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="../plugins/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- Vector CSS -->
    <link href="../plugins/bower_components/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/blue-dark.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <link href="../css/x0popup-master/dist/x0popup.min.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../css/x0popup-master/dist/x0popup.min.js"></script>

</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">

                </div>
                <!-- /Logo -->
                <!-- Search input and Toggle icon -->
                <ul class="nav navbar-top-links navbar-left">
                    <li><a href="javascript:void(0)" class="open-close waves-effect waves-light visible-xs"><i class="ti-close ti-menu"></i></a></li>

                </ul>
                <!-- <ul class="nav navbar-top-links navbar-right pull-right">

                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"><b class="hidden-xs"><?= $_SESSION['administrador']['admin_email']; ?></b><span class="caret"></span> </a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">

                            <li><a href="<?= $site . 'admin/painel.php' ?>?logoff=true"><i class="fa fa-power-off"></i> Sair</a></li>
                        </ul> -->
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-menu hidden-xs"></i><i class="ti-close visible-xs"></i></span> <span class="hide-menu">MENU</span></h3>
                </div>
                <ul class="nav" id="side-menu">

                    <li class="devider"></li>
                    <li> <a href="<?= $site ?>admin/painel.php" class="waves-effect"><i class="icon-home"></i> <span class="hide-menu">Painel</span></a> </li>
                    <li> <a href="<?= $site; ?>admin/painel.php?exe=configuracoes" class="waves-effect"><i class="mdi mdi-settings fa-fw"></i> <span class="hide-menu">Configurações</span></a> </li>
                    <li> <a href="<?= $site; ?>admin/painel.php?exe=mudar-login" class="waves-effect"><i class="mdi mdi-settings fa-fw"></i> <span class="hide-menu">Alterar dados de login</span></a> </li>
                    <li> <a href="<?= $site; ?>admin/painel.php?exe=todos-os-clientes"><i class="mdi mdi-account-multiple"></i> <span class="hide-menu">Todos os clientes</span></a> </li>
                </ul>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper" style="min-height: 888px;">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">BEM VINDO</h4>
                    </div>                   
                </div>


                
<!-- ============================================================== -->
<!-- Other sales widgets -->
<!-- ============================================================== -->
<!-- .row -->
<!-- TABELA 1 -->
                    <div class="row">
                        <a href="#">
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">TOTAL CLIENTES</h3>
                            <ul class="list-inline two-part">
                                <li><i class="icon-people text-info"></i></li>
                                <li class="text-right"><span class="counter">12</span></li>
                            </ul>            
                        </div>

                    </div>
                    </a>
                        <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">TOTAL MOTOBOY</h3>
                            <ul class="list-inline two-part">
                                <li><i class="icon-folder text-purple"></i></li>
                                <li class="text-right"><span class="counter">12</span></li>
                            </ul>
                        </div>
                    </div>
                        <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">TOTAL CIDADES</h3>
                            <ul class="list-inline two-part">
                                <li><i class="icon-folder-alt text-danger"></i></li>
                                <li class="text-right"><span class="counter">212</span></li>
                            </ul>
                        </div>
                    </div>
                        <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">PEDIDOS REALIZADOS</h3>
                            <ul class="list-inline two-part">
                                <li><i class="ti-wallet text-success"></i></li>
                                <li class="text-right"><span class="counter">605</span></li>
                            </ul>
                        </div>
                    </div>
                </div>

<!-- FIM TABELA1 -->
<!-- /.row -->

<!-- ============================================================== -->
<!-- Demo table -->
<!-- ============================================================== -->

<!-- TABELA 2 -->
<div class="row">
    <div class="col-md-12">
        <div class="col-md-12">
        
            <div class="col-md-6 white-box">
                <a href="adicionarCliente.html"><button class="btn btn-info" type="submit">Cadastrar Cliente</button></a> 
            </div>

            <div class="col-md-6 white-box">
                <a href="adicionarMotoboy.html"><button class="btn btn-info" type="submit">Cadastrar Motoboy</button> </a>
            </div>
            
        </div>
        <div class="panel">
            <div class="panel-heading">TODAS AS CONTAS</div>
            <div class="panel-heading">
                <div class="row">

                    <form method="post">
                        <div class="input-group m-b-30">                    
                            <input class="form-control" type="text" name="s" placeholder="Nome da loja, link da loja ou cidade da loja"> 
                            <span class="input-group-btn"> 
                                <button class="btn btn-info" type="submit">Pesquisar</button> 
                            </span> 
                        </div>
                    </form>
                                    </div>
            </div>

            <div class="table-responsive">
            <table class="table table-hover manage-u-table">
                    <thead>
                        <tr>
                            <th>Nome da Loja</th>
                            <th>Cidade</th>
                            <th>Quantidade de entrega</th>
                            <th>Credito</th>
                            <th>Status</th>
                            <th>Opções</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td style="text-align: left;"><span class="font-medium">Petiscaria São Mateus</span></td>
                            <td>
                                <span class="font-medium" style="color: blue;cursor: pointer;">Viçosa</span>
                            </td>
                            <td>
                                15 
                            </td>
                            <td>
                                0
                            </td>
                            <td>
                                <button class="btn btn-danger">Inativo</button>
                            </td>
                            <td>
                                <center><a href="#"><button class="btn btn-success">Mudar senha</button></a></center>
                            </td>
                            <td>
                                <a href="#">
                                    <button type="button" class="btn btn-info">
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i> Contato
                                    </button>
                                </a>

                                <button type="button" data-toggle="modal" data-target="#modalRenovar_43" class="btn btn-info renovardata">
                                Adicionar Crédito
                                </button>

                                <!-- MODAL -->
                                <div class="modal fade" id="modalRenovar_43" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"><b>LOJA: </b>Petiscaria São Mateus</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" id="formRenovar_43">
                                                    <div class="form-group">

                                                        <label>Adicionar Credito:</label>
                                                        <input class="form-control text-muted" type="number" min="10" value="10" step="10" name="empresa_data_renovacao" required="">

                                                    </div>

                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="hidden" name="user_id" value="43">

                                                <button type="button" data-iddaloja="43" class="btn btn-primary salvarnovadata">Salvar</button>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- FIM DO MODAL -->


                                <button type="button" data-idusereloja="43" class="btn btn-danger excluirlojaeuser">
                                    <i class="fa fa-trash" aria-hidden="true"></i> Excluir
                                </button>


                            </td>
                        </tr>



                    </tbody>


                    <tbody>
                        <tr>
                            <td style="text-align: left;"><span class="font-medium">Valente Burguer</span></td>
                            <td>
                                <a href="#">
                                    <span class="font-medium" style="color: blue;cursor: pointer;">Viçosa</span>
                                </a>
                            </td>
                            <td>
                                15 
                            </td>
                            <td>

                                43
                            </td>
                            <td>
                                <button class="btn btn-danger">Inativo</button>
                            </td>
                            <td>
                                <center><a href="#"><button class="btn btn-success">Mudar senha</button></a></center>
                            </td>
                            <td>


                                <a href="#">
                                    <button type="button" class="btn btn-info">
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i> Contato
                                    </button>
                                </a>

                                <button type="button" data-toggle="modal" data-target="#modalRenovar_42" class="btn btn-info renovardata">
                                     Adicionar Crédito
                                </button>

                                <!-- MODAL -->
                                <div class="modal fade" id="modalRenovar_42" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"><b>LOJA: </b>Valente Burguer</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" id="formRenovar_42">
                                                    <div class="form-group">

                                                        <label>Adicionar Credito:</label>
                                                        <input class="form-control " type="number" min="10" value="10" step="10" name="empresa_data_renovacao" required="">

                                                    </div>

                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="hidden" name="user_id" value="42">

                                                <button type="button" data-iddaloja="42" class="btn btn-primary salvarnovadata">Salvar</button>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- FIM DO MODAL -->


                                <button type="button" data-idusereloja="42" class="btn btn-danger excluirlojaeuser">
                                    <i class="fa fa-trash" aria-hidden="true"></i> Excluir
                                </button>


                            </td>
                        </tr>



                    </tbody>


                    <tbody>
                        <tr>
                            <td style="text-align: left;"><span class="font-medium">rango Bom</span></td>
                            <td>
                                <a href="#" >
                                    <span class="font-medium" style="color: blue;cursor: pointer;">Viçosa</span>
                                </a>
                            </td>
                            <td>
                                25 
                            </td>
                            <td>

                                2
                            </td>
                            <td>
                                <button class="btn btn-danger">Inativo</button>
                            </td>
                            <td>
                                <center><a href="#"><button class="btn btn-success">Mudar senha</button></a></center>
                            </td>
                            <td>


                                <a href="#">
                                    <button type="button" class="btn btn-info">
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i> Contato
                                    </button>
                                </a>

                                <button type="button" data-toggle="modal" data-target="#modalRenovar_41" class="btn btn-info renovardata">
                                     Adicionar Crédito
                                </button>

                                <!-- MODAL -->
                                <div class="modal fade" id="modalRenovar_41" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"><b>LOJA: </b>rango Bom</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" id="formRenovar_41">
                                                    <div class="form-group">

                                                        <label>Adicionar Credito:</label>
                                                        <input class="form-control " type="number" min="10" value="10" step="10" name="empresa_data_renovacao" required="">

                                                    </div>

                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="hidden" name="user_id" value="41">

                                                <button type="button" data-iddaloja="41" class="btn btn-primary salvarnovadata">Salvar</button>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- FIM DO MODAL -->


                                <button type="button" data-idusereloja="41" class="btn btn-danger excluirlojaeuser">
                                    <i class="fa fa-trash" aria-hidden="true"></i> Excluir
                                </button>


                            </td>
                        </tr>



                    </tbody>


                    <tbody>
                        <tr>
                            <td style="text-align: left;"><span class="font-medium">Brothers Burguer</span></td>
                            <td>
                                <a href="#">
                                    <span class="font-medium" style="color: blue;cursor: pointer;">Viçosa</span>
                                </a>
                            </td>
                            <td>
                                25 
                            </td>
                            <td>

                                45
                            </td>
                            <td>
                                <button class="btn btn-danger">Inativo</button>
                            </td>
                            <td>
                                <center><a href="#"><button class="btn btn-success">Mudar senha</button></a></center>
                            </td>
                            <td>


                                <a href="#">
                                    <button type="button" class="btn btn-info">
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i> Contato
                                    </button>
                                </a>

                                <button type="button" data-toggle="modal" data-target="#modalRenovar_40" class="btn btn-info renovardata">
                                     Adicionar Crédito
                                </button>

                                <!-- MODAL -->
                                <div class="modal fade" id="modalRenovar_40" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"><b>LOJA: </b>Brothers Burguer</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" id="formRenovar_40">
                                                    <div class="form-group">

                                                        <label>Adicionar Credito:</label>
                                                        <input class="form-control " type="number" min="10" value="10" step="10" name="empresa_data_renovacao" required="">

                                                    </div>

                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="hidden" name="user_id" value="40">

                                                <button type="button" data-iddaloja="40" class="btn btn-primary salvarnovadata">Salvar</button>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- FIM DO MODAL -->


                                <button type="button" data-idusereloja="40" class="btn btn-danger excluirlojaeuser">
                                    <i class="fa fa-trash" aria-hidden="true"></i> Excluir
                                </button>


                            </td>
                        </tr>



                    </tbody>


                    <tbody>
                        <tr>
                            <td style="text-align: left;"><span class="font-medium">Cervejaria Pradaria</span></td>
                            <td>
                                <a href="#">
                                    <span class="font-medium" style="color: blue;cursor: pointer;">Viçosa</span>
                                </a>
                            </td>
                            <td>
                                25 
                            </td>
                            <td>

                                3
                            </td>
                            <td>
                                <button class="btn btn-danger">Inativo</button>
                            </td>
                            <td>
                                <center><a href="#"><button class="btn btn-success">Mudar senha</button></a></center>
                            </td>
                            <td>


                                <a href="#" >
                                    <button type="button" class="btn btn-info">
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i> Contato
                                    </button>
                                </a>

                                <button type="button" data-toggle="modal" data-target="#modalRenovar_39" class="btn btn-info renovardata">
                                     Adicionar Crédito
                                </button>

                                <!-- MODAL -->
                                <div class="modal fade" id="modalRenovar_39" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"><b>LOJA: </b>Cervejaria Pradaria</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" id="formRenovar_39">
                                                    <div class="form-group">

                                                        <label>Adicionar Credito:</label>
                                                        <input class="form-control " type="number" min="10" value="10" step="10" name="empresa_data_renovacao" required="">

                                                    </div>

                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="hidden" name="user_id" value="39">

                                                <button type="button" data-iddaloja="39" class="btn btn-primary salvarnovadata">Salvar</button>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- FIM DO MODAL -->


                                <button type="button" data-idusereloja="39" class="btn btn-danger excluirlojaeuser">
                                    <i class="fa fa-trash" aria-hidden="true"></i> Excluir
                                </button>


                            </td>
                        </tr>



                    </tbody>


                    <tbody>
                        <tr>
                            <td style="text-align: left;"><span class="font-medium">Samuraisushi2021</span></td>
                            <td>
                                <a href="#" >
                                    <span class="font-medium" style="color: blue;cursor: pointer;">Belo Horizonte</span>
                                </a>
                            </td>
                            <td>
                                25 
                            </td>
                            <td>

                                0
                            </td>
                            <td>
                                <button class="btn btn-danger">Inativo</button>
                            </td>
                            <td>
                                <center><a href="#"><button class="btn btn-success">Mudar senha</button></a></center>
                            </td>
                            <td>


                                <a href="#" >
                                    <button type="button" class="btn btn-info">
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i> Contato
                                    </button>
                                </a>

                                <button type="button" data-toggle="modal" data-target="#modalRenovar_38" class="btn btn-info renovardata">
                                     Adicionar Crédito
                                </button>

                                <!-- MODAL -->
                                <div class="modal fade" id="modalRenovar_38" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"><b>LOJA: </b>Samuraisushi2021</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" id="formRenovar_38">
                                                    <div class="form-group">

                                                        <label>Adicionar Credito:</label>
                                                        <input class="form-control " type="number" min="10" value="10" step="10" name="empresa_data_renovacao" required="">

                                                    </div>

                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="hidden" name="user_id" value="38">

                                                <button type="button" data-iddaloja="38" class="btn btn-primary salvarnovadata">Salvar</button>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- FIM DO MODAL -->


                                <button type="button" data-idusereloja="38" class="btn btn-danger excluirlojaeuser">
                                    <i class="fa fa-trash" aria-hidden="true"></i> Excluir
                                </button>


                            </td>
                        </tr>



                    </tbody>


                    <tbody>
                        <tr>
                            <td style="text-align: left;"><span class="font-medium">Pizzaria Arte do Cheff</span></td>
                            <td>
                                <a href="#" >
                                    <span class="font-medium" style="color: blue;cursor: pointer;">Belo Horizonte</span>
                                </a>
                            </td>
                            <td>
                                25 
                            </td>
                            <td>

                                6
                            </td>
                            <td>
                                <button class="btn btn-danger">Inativo</button>
                            </td>
                            <td>
                                <center><a href="#"><button class="btn btn-success">Mudar senha</button></a></center>
                            </td>
                            <td>


                                <a href="#" >
                                    <button type="button" class="btn btn-info">
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i> Contato
                                    </button>
                                </a>

                                <button type="button" data-toggle="modal" data-target="#modalRenovar_37" class="btn btn-info renovardata">
                                     Adicionar Crédito
                                </button>

                                <!-- MODAL -->
                                <div class="modal fade" id="modalRenovar_37" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"><b>LOJA: </b>Pizzaria Arte do Cheff</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" id="formRenovar_37">
                                                    <div class="form-group">

                                                        <label>Adicionar Credito:</label>
                                                        <input class="form-control " type="number" min="10" value="10" step="10" name="empresa_data_renovacao" required="">

                                                    </div>

                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="hidden" name="user_id" value="37">

                                                <button type="button" data-iddaloja="37" class="btn btn-primary salvarnovadata">Salvar</button>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- FIM DO MODAL -->


                                <button type="button" data-idusereloja="37" class="btn btn-danger excluirlojaeuser">
                                    <i class="fa fa-trash" aria-hidden="true"></i> Excluir
                                </button>


                            </td>
                        </tr>



                    </tbody>


                    <tbody>
                        <tr>
                            <td style="text-align: left;"><span class="font-medium">Edilaine lanches</span></td>
                            <td>
                                <a href="#" >
                                    <span class="font-medium" style="color: blue;cursor: pointer;">Belo Horizonte</span>
                                </a>
                            </td>
                            <td>
                                25 
                            </td>
                            <td>

                                0
                            </td>
                            <td>
                                <button class="btn btn-danger">Inativo</button>
                            </td>
                            <td>
                                <center><a href="#"><button class="btn btn-success">Mudar senha</button></a></center>
                            </td>
                            <td>


                                <a href="#" >
                                    <button type="button" class="btn btn-info">
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i> Contato
                                    </button>
                                </a>

                                <button type="button" data-toggle="modal" data-target="#modalRenovar_36" class="btn btn-info renovardata">
                                     Adicionar Crédito
                                </button>

                                <!-- MODAL -->
                                <div class="modal fade" id="modalRenovar_36" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"><b>LOJA: </b>Edilaine lanches</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" id="formRenovar_36">
                                                    <div class="form-group">

                                                        <label>Adicionar Credito:</label>
                                                        <input class="form-control " type="number" min="10" value="10" step="10" name="empresa_data_renovacao" required="">

                                                    </div>

                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="hidden" name="user_id" value="36">

                                                <button type="button" data-iddaloja="36" class="btn btn-primary salvarnovadata">Salvar</button>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- FIM DO MODAL -->


                                <button type="button" data-idusereloja="36" class="btn btn-danger excluirlojaeuser">
                                    <i class="fa fa-trash" aria-hidden="true"></i> Excluir
                                </button>


                            </td>
                        </tr>



                    </tbody>


                    <tbody>
                        <tr>
                            <td style="text-align: left;"><span class="font-medium">KINGS PIZZA</span></td>
                            <td>
                                <a href="#" >
                                    <span class="font-medium" style="color: blue;cursor: pointer;">Belo Horizonte</span>
                                </a>
                            </td>
                            <td>
                                25
                             </td>
                            <td>

                                19
                            </td>
                            <td>
                                <button class="btn btn-danger">Inativo</button>
                            </td>
                            <td>
                                <center><a href="#"><button class="btn btn-success">Mudar senha</button></a></center>
                            </td>
                            <td>


                                <a href="#" >
                                    <button type="button" class="btn btn-info">
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i> Contato
                                    </button>
                                </a>

                                <button type="button" data-toggle="modal" data-target="#modalRenovar_35" class="btn btn-info renovardata">
                                     Adicionar Crédito
                                </button>

                                <!-- MODAL -->
                                <div class="modal fade" id="modalRenovar_35" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"><b>LOJA: </b>KINGS PIZZA</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" id="formRenovar_35">
                                                    <div class="form-group">

                                                        <label>Adicionar Credito:</label>
                                                        <input class="form-control " type="number" min="10" value="10" step="10" name="empresa_data_renovacao" required="">

                                                    </div>

                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="hidden" name="user_id" value="35">

                                                <button type="button" data-iddaloja="35" class="btn btn-primary salvarnovadata">Salvar</button>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- FIM DO MODAL -->


                                <button type="button" data-idusereloja="35" class="btn btn-danger excluirlojaeuser">
                                    <i class="fa fa-trash" aria-hidden="true"></i> Excluir
                                </button>


                            </td>
                        </tr>



                    </tbody>


                    <tbody>
                        <tr>
                            <td style="text-align: left;"><span class="font-medium">DEMONSTRAÇÃO</span></td>
                            <td>
                                <a href="#">
                                    <span class="font-medium" style="color: blue;cursor: pointer;">Belo Horizonte</span>
                                </a>
                            </td>
                            <td>
                                30
                            </td>
                            <td>

                                24
                            </td>
                            
                            <td>
                                <button class="btn btn-danger">Inativo</button>
                            </td>
                            <td>
                                <center><a href="#"><button class="btn btn-success">Mudar senha</button></a></center>
                            </td>
                            <td>


                                <a href="#">
                                    <button type="button" class="btn btn-info">
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i> Contato
                                    </button>
                                </a>

                                <button type="button" data-toggle="modal" data-target="#modalRenovar_1" class="btn btn-info renovardata">
                                     Adicionar Crédito
                                </button>

                                <!-- MODAL -->
                                <div class="modal fade" id="modalRenovar_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"><b>LOJA: </b>DEMONSTRAÇÃO</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" id="formRenovar_1">
                                                    <div class="form-group">

                                                        <label>Adicionar Credito:</label>
                                                        <input class="form-control " type="number" min="10" value="10" step="10" name="empresa_data_renovacao" required="">

                                                    </div>

                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="hidden" name="user_id" value="1">

                                                <button type="button" data-iddaloja="1" class="btn btn-primary salvarnovadata">Salvar</button>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- FIM DO MODAL -->


                                <button type="button" data-idusereloja="1" class="btn btn-danger excluirlojaeuser">
                                    <i class="fa fa-trash" aria-hidden="true"></i> Excluir
                                </button>


                            </td>
                        </tr>



                    </tbody>
                </table>
</div>
<!-- FIM TABELA 2 -->
</div>
</div>
</div>

<nav aria-label="Page navigation example">
    <ul class="pagination"><li><a title="Primeiro" href="https://miodelivery.com.br/admin/painel.php?exe=home&amp;page=1">Primeiro</a></li><li><span class="active">1</span></li><li><a title="Página 2" href="https://miodelivery.com.br/admin/painel.php?exe=home&amp;page=2">2</a></li><li><a title="Último" href="https://miodelivery.com.br/admin/painel.php?exe=home&amp;page=2">Último</a></li></ul></nav>

<script type="text/javascript">

    $(document).ready(function(){

        $('.excluirlojaeuser').click(function(){
            var iduserloja = $(this).data('idusereloja');

            x0p({
                title: 'Atênção',
                text: 'Excluir esse cliente?',
                icon: 'info',
                animationType: 'fadeIn',
                buttons: [
                {
                    type: 'cancel',
                    text: 'Cancelar'
                },
                {
                    type: 'info',
                    text: 'Sim',
                    showLoading: true
                }
                ]
            }).then(function(data) {
                if(data.button == 'info') {
        // Simulate Delay
        setTimeout(function() {



            $.ajax({
                url: 'https://miodelivery.com.br/admin/controlers/excluircliente.php',
                method: 'post',
                data: {'idcliente' : iduserloja},
                success: function(data){
                    if(data == 0){
                        window.location.reload(1);
                    }else if(data == 1){
                        window.location.reload(1);
                    }
                }
            });




        }, 1500);
    }
});


        });
    });




</script>




                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2022 © Mío delivery</footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--Counter js -->
    <script src="../plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="../plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Vector map JavaScript -->
    <script src="../plugins/bower_components/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="../plugins/bower_components/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../plugins/bower_components/vectormap/jquery-jvectormap-in-mill.js"></script>
    <script src="../plugins/bower_components/vectormap/jquery-jvectormap-us-aea-en.js"></script>
    <!-- chartist chart -->
    <script src="../plugins/bower_components/chartist-js/dist/chartist.min.js"></script>
    <script src="../plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!-- sparkline chart JavaScript -->
    <script src="../plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="../plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <script src="js/dashboard3.js"></script>
    <!--Style Switcher -->
    <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>

    <script src="../js/jquery.mask.js"></script>
    <script>
        $('#dinheiro').mask('#.##0,00', {
            reverse: true
        });
        $('.telefone').mask('(00) 0 0000-0000');
        $('.estado').mask('AA');
        $('.cpf').mask('000-000.000-00');
        $('.cnpj').mask('00.000.000/0000-00');
        $('.rg').mask('00.000.000-0');
        $('.cep').mask('00000-000');
        $('.dataNascimento').mask('00/00/0000');
        $('.placaCarro').mask('AAA-0000');
        $('.horasMinutos').mask('00:00');
        $('.cartaoCredito').mask('0000 0000 0000 0000');
        $('.numero').mask('#########0');
        $('.descontoporcentagem').mask('##0');
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.salvarnovadata').click(function() {
                var pegaiddocliente = $(this).data('iddaloja');

                $.ajax({
                    url: 'controlers/novadatarenovacao.php',
                    method: 'post',
                    data: $('#formRenovar_' + pegaiddocliente).serialize(),
                    success: function(data) {
                        if (data == "erro1") {
                            $('#modalRenovar_' + pegaiddocliente).modal('hide');
                            x0p('Opss...',
                                'Informe a nova data!',
                                'error', false);

                        } else if (data == "erro2") {
                            $('#modalRenovar_' + pegaiddocliente).modal('hide');
                            x0p('Opss...',
                                'o formato da data e inválido!',
                                'error', false);
                        } else if (data == "erro3") {
                            $('#modalRenovar_' + pegaiddocliente).modal('hide');
                            x0p('Opss...',
                                'Ocorreu um erro!',
                                'error', false);
                        } else if (data == "erro0") {
                            window.location.reload(1);
                        }
                    }
                });

            });
        });
    </script>
</body>

</html>