
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

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-up.html" />

	<title>Cadastro | Manataskfy</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="css/app1.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Manataskfy</h1>
							<p class="lead">
							Preencha as Informações abaixo para continuar
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-3">
									<form id="formCadastro" action="../../actions/cadastrar.usuario.php" method="POST">
										<div class="mb-3">
											<label class="form-label">Nome completo</label>
											<input class="form-control form-control-lg" type="text" name="nome" placeholder="Seu nome completo" required=""/>
										</div>
										<div class="mb-3">
											<label class="form-label">Usuário</label>
											<input class="form-control form-control-lg" type="text" name="usuarioo" placeholder="Como quer ser chamado?" required=""/>
										</div>
										<div class="mb-3">
											<label class="form-label">Email</label>
											<input class="form-control form-control-lg" type="email" name="email" placeholder="Insira seu Email" required=""/>
										</div>
										<div class="mb-3">
											<label class="form-label">Senha</label>
											<input class="form-control form-control-lg" type="password" name="senha" placeholder="Insira sua senha" required=""/>
										</div>
										<div class="mb-3">
											<label class="form-label">Descrição</label>
											<input class="form-control form-control-lg" type="text" name="descricao" placeholder="Insira uma breve descrição sobre você" required=""/>
										</div>
										<div class="d-grid gap-2 mt-3">
										<button type="submit" class="btn btn-lg btn-150 btn-primary">Cadastre-se</button>
										</div>
										
									</form>
								</div>
							</div>
						</div>
						<div class="text-center mb-3">
							Ja tem conta? <a href="login.php">Login</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="js/app.js"></script>
	<?php include("alertasinclude.php");
	?>

</body>

</html>