<?php
include "../../src/protect.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../style.css">
	<link rel="shortcut icon" href="../../img/logo_login_image.png" type="image/x-icon">
	<title>Cadastrar Usuários</title>
</head>
<body>

<!-- Início da NavBar -->
<nav class="navbar navbar-dark bg-dark">
	<div class="container-fluid">
		<a class="navbar-brand" href="#">
			<img src="../../img/logo_login_branca_image.png" style="margin-right: 1.5vh;" alt="Logo" width="30" height="29" class="d-inline-block align-text-top">MyChurch
		</a>
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
						<a class="nav-link active botao_config" aria-current="page" href="logout.php">SAIR</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active botao_config" href="../../instrucoes.php">Como utilizar o sistema?</a>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Módulos:</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../../pagina_inicial.php">Página Inicial</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../../lista_membros.php">Lista de Membros</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../../escola_biblica_dominical.php">Escola Bíblica Dominical</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../../configuracao_membros.php">Configuração de Membros</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="cadastrar_usuarios.php">Cadastrar Usuários</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</nav>

<!-- Barra de Navegação entre módulos -->
<ul class="nav mb-2 barra_nav">
	<li class="nav-item">
		<a class="nav-link barra_item" href="../../pagina_inicial.php">Página Inicial</a>
	</li>
	<li class="nav-item">
		<a class="nav-link barra_item" href="../../lista_membros.php">Lista de Membros</a>
	</li>
	<li class="nav-item">
		<a class="nav-link barra_item" href="../../escola_biblica_dominical.php">Escola Bíblica Dominical</a>
	</li>
	<li class="nav-item">
		<a class="nav-link barra_item" href="../../configuracao_membros.php">Configuração de Membros</a>
	</li>
	<li class="nav-item">
		<a class="nav-link barra_item" href="cadastrar_usuarios.php">Cadastrar Usuários</a>
	</li>
</ul>

<!-- Início do Corpo da página -->
<div class="card card_body m-3">
	<div class="card-content collapse show">
		<div class="card-body card-dashboard">

			<div class="d-flex align-items-center justify-content-between mb-3">
				<h3>Cadastrar Usuários</h3>
				<a href="../../pagina_inicial.php">
					<img src="../../img/voltar.png" alt="Voltar">
				</a>
			</div>

			<div class="container-fluid">
				<form class="mt-3" method="POST" action="../ws/ws_cadastrar_usuarios.php" autocomplete="off">
					<div class="row mt-3">
						<h6>Dados Pessoais</h6>
					</div>
					<div class="row mb-4">
						<div class="col-lg-4">
							<label for="nome" class="form-label">Nome Completo:</label>
							<input type="text" class="form-control form_item" id="nome" name="nome" placeholder="Digite o nome aqui." required>
						</div>
						<div class="col-lg-4">
							<label for="telefone" class="form-label">Telefone:</label>
							<input type="text" class="form-control form_item" id="telefone" name="telefone" placeholder="Digite o telefone aqui." required>
						</div>
						<div class="col-lg-4">
							<label for="nascimento" class="form-label">Data de Nascimento:</label>
							<input type="date" class="form-control form_item" id="nascimento" name="nascimento" required>
						</div>
					</div>

					<div class="row mt-3">
						<h6>Dados de Login</h6>
					</div>
					<div class="row mb-4">
						<div class="col-lg-4">
							<label for="email" class="form-label">Endereço de e-mail:</label>
							<input type="email" class="form-control form_item" id="email" name="email" placeholder="Digite o e-mail aqui." required>
						</div>
						<div class="col-lg-4">
							<label for="nome_usuario" class="form-label">Defina um nome de usuário:</label>
							<input type="text" class="form-control form_item" id="nome_usuario" name="nome_usuario" placeholder="Digite o nome de usuário aqui." required>
						</div>
						<div class="col-lg-4">
							<label for="senha" class="form-label">Senha:</label>
							<input type="password" class="form-control form_item" id="senha" name="senha" placeholder="Digite a senha aqui." required minlength="6">
						</div>
					</div>

					<div class="row mt-3">
						<h6>Dados da Instituição</h6>
					</div>
					<div class="row mb-4">
						<div class="col-lg-4">
							<label for="igreja" class="form-label">Igreja:</label>
							<input type="text" class="form-control form_item" id="igreja" name="igreja" placeholder="Digite o nome da igreja aqui." required>
						</div>
						<div class="col-lg-4">
							<label for="cargo" class="form-label">Cargo:</label>
							<select class="form-select form_item" id="cargo" name="cargo" required>
								<option value="1">Pastor</option>
								<option value="2">Presbítero</option>
								<option value="3">Auxiliar</option>
								<option value="4">Outros</option>
							</select>
						</div>
						<div class="col-lg-4">
							<label for="perfil" class="form-label">Perfil:</label>
							<select class="form-select form_item" id="perfil" name="perfil" required>
								<option value="1">Super-Admin</option>
								<option value="2">Admin</option>
								<option value="3">Comum</option>
							</select>
						</div>
					</div>

					<div class="row justify-content-end mb-2">
						<div class="col-lg-1 col-sm-12 mt-3" style="min-width: 120px;">
							<button type="submit" class="btn btn-success form-control form_item">Cadastrar</button>
						</div>
						<div class="col-lg-1 mt-3" style="min-width: 120px;">
							<a href="../../pagina_inicial.php?usuario_cadastrado=2" class="btn btn-danger form-control form_item" role="button">Cancelar</a>
						</div>
					</div>
				</form>
			</div>	

		</div>
	</div>
</div>

<!-- Script Bootstrap -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
const telefoneInput = document.getElementById('telefone');

telefoneInput.addEventListener('input', function (e) {
		let value = e.target.value.replace(/\D/g, '');
		if(value.length > 0){
			value = '(' + value;
		}

		if(value.length > 3){
			value = value.slice(0, 3) + ') ' + value.slice(3);
		}

		if(value.length > 10){
			value = value.slice(0, 10) + '-' + value.slice(10);
		}

		e.target.value = value;
	});
});
</script>
</body>
</html>
