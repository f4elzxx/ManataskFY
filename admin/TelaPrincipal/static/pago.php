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

	<link rel="canonical" href="https://demo-basic.adminkit.io/upgrade-to-pro.html" />

	<title>Pro | Manataskfy</title>

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

					<li class="sidebar-item active">
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
							<i class="align-middle" data-feather="plus-square"></i> <span class="align-middle">Adicionar Tarefas</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="config.php">
              <i class="align-middle" data-feather="settings"></i> <span class="align-middle">Configurações</span>
            </a>
					</li>

				</ul>

				
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

					<h1 class="h3 mb-3">Atualize para nossa versão Pro</h1>

					<div class="row">
						<div class="col-1 col-md-11 col-lg-10 col-xl-8 col-xxl-6 mx-left">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">ManataskFY PRO</h5>
									<h6 class="card-subtitle text-muted">Procurando mais ferramentas e personalizações? Confira nossa versão premium.</h6>
								</div>
								<div class="card-body">
									<div class="table-responsive table-upgrade">
										<table class="table">
											<thead>
												<tr>
													<th></th>
													<th class="text-center">Básico</th>
													<th class="text-center">Pro</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													
												</tr>
												<tr>
													<td>Tarefas por Semana</td>
													<td class="text-center">8</td>
													<td class="text-center"><strong>Ilimitado</strong></td>
												</tr>
												
												<tr>
													<td>Estatísticas</td>
													<td class="text-center"><span role="img" aria-label="no">❌</span></td>
													<td class="text-center"><span role="img" aria-label="yes">✔</span></td>
												</tr>
												<tr>
													<td>Modo escuro</td>
													<td class="text-center"><span role="img" aria-label="no">❌</span></td>
													<td class="text-center"><span role="img" aria-label="yes">✔</span></td>
												</tr>
												<tr>
													<td>Histórico </td>
													<td class="text-center"><span role="img" aria-label="no">❌</span></td>
													<td class="text-center"><span role="img" aria-label="yes">✔</span></td>
												</tr>
												<tr>
													<td>Chat em tempo real</td>
													<td class="text-center"><span role="img" aria-label="no">❌</span></td>
													<td class="text-center"><span role="img" aria-label="yes">✔</span></td>
												</tr>
												<tr>
													<td>Objetivo e metas</td>
													<td class="text-center"><span role="img" aria-label="no">❌</span></td>
													<td class="text-center"><span role="img" aria-label="yes">✔</span></td>
												</tr>
												<tr>
													<td>Lembretes de tarefas por email e SMS</td>
													<td class="text-center"><span role="img" aria-label="no">❌</span></td>
													<td class="text-center"><span role="img" aria-label="yes">✔</span></td>
												</tr>

												<tr>
													<td>Seguir pessoas</td>
													<td class="text-center"><span role="img" aria-label="no">❌</span></td>
													<td class="text-center"><span role="img" aria-label="yes">✔</span></td>
												</tr>

												<tr>
													<td>Adicionar foto de perfil</td>
													<td class="text-center"><span role="img" aria-label="no">❌</span></td>
													<td class="text-center"><span role="img" aria-label="yes">✔</span></td>
												</tr>

												
													<td></td>
													<td class="text-center">Gratuito</td>
													<td class="text-center">R$59 por mês</td>
												</tr>
												<tr>
													<td class="text-center"></td>
													<td class="text-center">
														<a target="_blank" href="https://adminkit.io/" class="btn btn-light">Download</a>
													</td>
													<td class="text-center">
														<a target="_blank" href="https://adminkit.io/pricing" class="btn btn-150 btn-primary">Compre o Pro</a>
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
			</main>

		
		</div>
	</div>

	<script src="js/app.js"></script>

</body>

</html>