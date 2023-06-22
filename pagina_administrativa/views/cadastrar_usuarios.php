<!Doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../../style.css">
	<link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.min.css">
	<link rel="shortcut icon" href="../../img/logo_login_image.png" type="image/x-icon">
	<title>Cadastrar Usuários</title>
</head>
<body>
<!--Início da NavBar-->
	<nav class="navbar navbar-dark bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="#"><img src="../../img/logo_login_branca_image.png" style="margin-right: 1.5vh;" alt="Logo" width="30" height="29" class="d-inline-block align-text-top">MyChurch</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
				<div class="offcanvas-header">
					<h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Opções:</h5>
					<button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
				</div>
				<div class="offcanvas-body">
					<ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
						<li class="nav-item">
							<a class="nav-link active botao_sair" aria-current="page" href="../../logout.php">SAIR</a>
						<li class="nav-item">
							<a class="nav-link" href="pagina_inicial.php">Página Inicial</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Como utilizar o sistema?</a>
						</li>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
	<!--Barra de Navegação entr módulos-->
	<ul class="nav mb-2 barra_nav">
		<li class="nav-item">
			<a class="nav-link barra_item" href="../../pagina_inicial.php">Página Inicial</a>
		</li>
		<li class="nav-item">
			<a class="nav-link barra_item" href="#">Lista de Membros</a>
		</li>
		<li class="nav-item">
			<a class="nav-link barra_item" href="#">Cadastrar Usuários</a>
		</li>
		<li class="nav-item">
			<a class="nav-link barra_item">Outro módulo</a>
		</li>
	</ul>
	
	<div class="card card_body m-3">
		<div class="card-content collapse show">
			<div class="card-body card-dashboard">
				<!--Início do formulário-->
				<div class="container-fluid">
					<h4>Cadastrar Usuários</h4>

						<form class="mt-3" method="POST" action="../ws/ws_cadastrar_usuarios.php">

						<div class="row">
							<div class="col mb-3">
								<label for="nome" class="form-label">Nome Completo:</label>
								<input type="text" class="form-control form_item" id="nome" name="nome">
							</div>
							<div class="col mb-3">
								<label for="email" class="form-label">Endereço de e-mail:</label>
								<input type="email" class="form-control form_item" id="email" name="email">
							</div>
						</div>

						<div class="row">

							<div class="col mb-3">
								<label for="nome_usuario" class="form-label">Defina um nome de usuário:</label>
								<input type="text" class="form-control form_item" id="nome_usuario" name="nome_usuario">
							</div>
							<div class="col mb-3">
								<label for="senha" class="form-label">Senha:</label>
								<input type="password" class="form-control form_item" id="senha" name="senha">
							</div>
						</div>
							<button type="submit" class="btn btn-success">Cadastrar</button>
							<div class="btn btn-danger">Cancelar</div>
						</form>
					</div>
			
			</div>
		</div>
	</div>

	<!--Script Bootstrap-->
	<script src="../../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>