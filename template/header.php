<?php
    session_start();
    if(!isset($_SESSION["user"])){
        header('location: /trabalho_ROKA/login/loginForm.php');
        die();
    }
    require('dataBase/dbconfig.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Sistema WEB</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
        crossorigin="anonymous"></script>
        

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.php">Sistema WEB</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                
            </div>
        </form>
        <!-- Navbar-->
        <span class="text-light">
        <?php
            echo $_SESSION['user'];
        ?>
        </span>
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="fas fa-user fa-fw"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Configurações</a></li>
                    <li><a class="dropdown-item" href="#!">Histórico</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li>
                        
                        <a class="dropdown-item" href="login/loginForm.php">Sair</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Painéis</div>
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Painel Inicial
                        </a>
                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link " href="CRUDS/Produto/listarProduto.php" >
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Produto                            
                        
                            
                        </a>
                        <div class="" id="collapseLayouts" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                
                            </nav>
                        </div>
                        <!-- Forms -->
                        <a  href="CRUDS/Funcionario/listarFuncionario.php" class="nav-link">
                            <div class="sb-nav-link-icon"><i class="fas fa-edit"></i></div>
                            Funcionario
                            
                        </a>
                        
                        <!-- Fim forms -->
                        
                        
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Usuário:</div>
                    <?php
                        echo $_SESSION['user'];
                    ?>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
        