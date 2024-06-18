<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
}
require_once('../../actions/classes/Atividade.class.php');

// Puxar as categorias:
$a = new Atividade();
$att = $a->ListarTudo();

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

	<title> AdicionarTarefa | Manataskfy</title>

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
								<img src="img/avatars/profile.jpg" class="avatar img-fluid rounded me-1" alt="usuario" /> <span class="text-dark">	<?= $_SESSION['usuario']['usuarioo']; ?></span>
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
				<form action="../../actions/cadastrar_atividade.php" method='POST'>

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">Adicionar Tarefas</h1>
						</a>
					</div>
					<div class="row">
						<div class="col-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Nome da tarefa</h5>
								</div>
								<div class="card-body">
									<input type="text" class="form-control" name="titulo" id="nome" placeholder="Nome da tarefa" required>
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Descrição</h5>
								</div>
								<div class="card-body">
									<textarea class="form-control" rows="2" name="descricao" id="dataterm" placeholder="Descrição" required></textarea>
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Tipo</h5>
								</div>
								<div class="card-body">
									<div>
										<label class="form-check">
											<input class="form-check-input" type="radio" id="diaria" name="tipo" value="diária" checked>
											<span class="form-check-label">
												Atividades diárias
											</span>
										</label>
										<label class="form-check">
											<input class="form-check-input" type="radio" id="esporte" name="tipo" value="esporte"  checked>
											<span class="form-check-label">
												Esportes
											</span>
										</label>
										<label class="form-check">
											<input class="form-check-input" type="radio" id="estudos" name="tipo" value="estudos"  checked>
											<span class="form-check-label">
												Estudos
											</span>
										</label>
										<label class="form-check">
											<input class="form-check-input" type="radio" id="outro" name="tipo" value="outro"  checked>
											<span class="form-check-label">
												Outros
											</span>
										</label>
									</div>

								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Inicio</h5>
								</div>
								<div class="card-body">
									<input type="date" name="dataini" id="data_inicio" class="form-control" id="data_inicio" required>
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Término</h5>
								</div>
								<div class="card-body">
									<input type="date" name="dataterm" id="datatermino" class="form-control" id="data_inicio" required>
								</div>
							</div>
							<br><br>
							<button type="submit" name="submit"  id="submit" class="btn btn-150 btn-secondary">Adicionar</button>
						
						</div>

						

	<script src="js/app.js"></script>
	<?php include("alertasinclude.php");
	?>

</body>

</html>