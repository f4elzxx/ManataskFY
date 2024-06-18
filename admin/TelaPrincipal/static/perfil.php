<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
	
}
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

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-profile.html" />

	<title>Perfil | Manataskfy</title>

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

					<li class="sidebar-item active">
						<a class="sidebar-link" href="perfil.php">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle">Perfil</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="addtarefas.php">
              <i class="align-middle" data-feather="plus-square"></i> <span class="align-middle">Adicionar Tarefas</span>
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

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">Perfil</h1>
				
					</div>
					<div class="row">
						<div class="col-md-4 col-xl-3">
							<div class="card mb-3">
								<div class="card-header">
									<h5 class="card-title mb-0">Detalhes do Perfil</h5>
								</div>
								<div class="card-body text-center">
									<img src="img/avatars/profile.jpg" alt="profile" class="img-fluid rounded-circle mb-2" width="128" height="128" />
								<h5 class="card-title mb-0"><?= $_SESSION['usuario']['usuarioo']; ?></h5>
								<div class="text-muted mb-2"><?= $_SESSION['usuario']['nome']; ?></div>
								<div class="text-muted mb-4"><?= $_SESSION['usuario']['descricao']; ?></div>
								<div>
										<a class="btn btn-150 btn-primary btn-sm" href="pago.php">Follow</a>
										<a class="btn btn-150 btn-primary btn-sm" href="pago.php"><span data-feather="message-square"></span> Message</a>
									</div>
									<div class="text-muted mb-2"></div>

								
								</div>
								
							</div>
						</div>
						<div class="col-md-8 col-xl-9">
							<div class="card">
								<div class="card-header">

									<h5 class="card-title mb-0">Chat</h5>
								</div>
								<div class="card-body h-100">

									<div class="d-flex align-items-start">
										<img src="img/avatars/baconhair.jpg" width="36" height="36" class="rounded-circle me-2" alt="Bacon Hair do Roblox">
										<div class="flex-grow-1">
											<small class="float-end text-navy">agora</small>
											<strong>Bacon hair do roblox</strong> Começou a te seguir <BR>
											<small class="text-muted">Hoje 7:51</small><br />

										</div>
									</div>

									<hr />
									<div class="d-flex align-items-start">
										<img src="img/avatars/roblox.jpg" width="36" height="36" class="rounded-circle me-2" alt="Jair Inacio Bolsonaro">
										<div class="flex-grow-1">
											<small class="float-end text-navy">6 horas atrás</small>
											<strong>Jair Inácio Bolsonaro</strong> acabou de fazer uma postagem em relação a sua <strong> Tarefa </strong><br />
											<small class="text-muted"> Hoje 1:51 pm</small>

											<div class="border text-sm text-muted p-2 mt-1">
											Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
											</div>

											<a href="pago.php" class="btn btn-sm btn-danger mt-1"><i class="feather-sm" data-feather="heart"></i> Curtir </a>
										</div>
									</div>

									<hr />
									<div class="d-flex align-items-start">
										<img src="img/avatars/Eduardo.jpg" width="36" height="36" class="rounded-circle me-2" alt="Christina Mason">
										<div class="flex-grow-1">
											<small class="float-end text-navy">7 horas e 51 minutos atrás</small>
											<strong>Eduardo</strong> acabou de postar uma tarefa<br />

											<small class="text-muted">Hoje 00:00 </small>
										</div>
									</div>

									<hr />
									

						
					</div>
					
				</div>
			</footer>
		</div>
	</div>

	<script src="js/app.js"></script>

</body>

</html>