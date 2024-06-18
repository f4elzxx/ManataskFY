<?php

session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
}
require_once('../../actions/classes/Usuario.class.php');

// Puxar as categorias:
$a = new Usuario();


$att = $a->ListarTudo()[0];




?>

<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/ui-forms.html" />

    <title> Configurações | Manataskfy</title>

    <link href="css/app.css" rel="stylesheet">
    <link href="css/app1.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="exibirtarefas.php">
                    <span class="align-middle">ManataskFY</span>
                </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                    Páginas
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="exibirtarefas.php">
                            <i class="align-middle" data-feather="layers"></i> <span class="align-middle">Tarefas</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="perfil.php">
                            <i class="align-middle" data-feather="user"></i> <span class="align-middle">Perfil</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="addtarefas.php">
                            <i class="align-middle" data-feather="plus-square"></i> <span class="align-middle">Adicionar Tarefa</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
						<a class="sidebar-link" href="config.php">
              <i class="align-middle" data-feather="settings"></i> <span class="align-middle">Configurações</span>
            </a>
					</li>

                </ul>

                <div class="sidebar-cta">
                    <div class="sidebar-cta-content">
                        <strong class="d-inline-block mb-2">Veja nossos planos</strong>
                        <div class="mb-3 text-sm">
                            Você está procurando mais opções? Confira nossa versão premium.
                        </div>
                        <div class="d-grid">
                            <a href="pago.php" class="btn btn-150 btn-primary">Pro</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">


                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                                <i class="align-middle" data-feather="settings"></i>
                            </a>

                            <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                                <img src="img/avatars/profile.jpg" class="avatar img-fluid rounded me-1" alt="usuario" /> <span class="text-dark"><?= $_SESSION['usuario']['usuarioo']; ?></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="perfil.php"><i class="align-middle me-1" data-feather="user"></i> Perfil</a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="config.php"><i class="align-middle me-1" data-feather="settings"></i> Configurações</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../../actions/sair.php">Sair</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="content">
                <div class="container-fluid p-0">
                    <form action="../../actions/editar_usuario.php" method='POST'>

                        <div class="mb-3">
                            <h1 class="h3 d-inline align-middle">Informações pessoais</h1>
                            </a>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="card">
                                    
                                    
                                   <div class="card-body">
                                   <h5 class="card-title mb-3">Nome completo </h5>
                                        <input type="text" class="form-control" name="nome" id="nome" value="<?= $_SESSION['usuario']['nome']; ?>">
                                    </div>
                                    
                                       
                               
                                    <div class="card-body">
                                    <h5 class="card-title mb-3">Usuário </h5>
                                        <input type="text" class="form-control" name="usuarioo" id="usuarioo" value="<?= $_SESSION['usuario']['usuarioo']; ?>">
                                    </div>
                                    

                                    <div class="card-body">
                                    <h5 class="card-title mb-3">Email </h5>

                                        <input type="text" class="form-control" name="email" id="email" value="<?= $_SESSION['usuario']['email']; ?>">
                                    </div>

                                    <div class="card-body">
                                    <h5 class="card-title mb-3">Descrição </h5>

                                    <input type="text" class="form-control" name="descricao" id="descricao" value="<?= $_SESSION['usuario']['descricao']; ?>">
								</div>
                                
                                </form>
                                  
                                </div>



                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Genêro</h5>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="radio" id="masculino" name="genero" value="masculino"  <?= $_SESSION['usuario']['genero'] == 'masculino' ? 'checked' : ''; ?>>
                                                <span class="form-check-label">
                                                    Masculino
                                                </span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="radio" id="feminino" name="genero" value="feminino"  <?= $_SESSION['usuario']['genero'] == 'feminino' ? 'checked' : ''; ?>>
                                                <span class="form-check-label">
                                                   Feminino
                                                </span>

                
											</span>

                                            </label>
                                        </div>

                                    </div>
                                </div>

                

                               
                                <br><br>
                                <button type="submit" name="submit"  id="submit" class="btn btn-150 btn-secondary">Salvar</button>
                            </div>

                            <script src="js/app.js"></script>
                            <?php include("alertasinclude.php");
	                        ?>

</body>

</html>