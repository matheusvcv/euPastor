<!Doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="shortcut icon" href="img/logo_login_image.png" type="image/x-icon">
	<title>Cadastro de Membros</title>
</head>
<body>
<!--Início da NavBar-->
	<nav class="navbar navbar-dark bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="#"><img src="img/logo_login_branca_image.png" style="margin-right: 1.5vh;" alt="Logo" width="30" height="29" class="d-inline-block align-text-top">MyChurch</a>
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
	<!--Barra de Navegação entre módulos-->
	<ul class="nav mb-2 barra_nav">
		<li class="nav-item">
			<a class="nav-link barra_item" href="pagina_inicial.php">Página Inicial</a>
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
	<!--Início do Corpo da página.-->
	<div class="card card_body m-3">
		<div class="card-content collapse show">
			<div class="card-body card-dashboard">
				<div id="cadastro_usuario">
					
				
				<!--Início do formulário-->
				<h3>Cadastro de Membros</h3>
				<div class="container-fluid">
					<form class="mt-3" method="POST" action="../ws/ws_cadastrar_usuarios.php">
						<div class="row mt-3">
							<h6>***</h6>
						</div>
						<div class="row">
							<div class="col-lg-4">
								<label for="nome" class="form-label">Nome do membro:</label>
								<input type="text" class="form-control form_item" id="nome_membro" name="nome_membro">
							</div>
							<div class="col-lg-4">
								<label for="telefone" class="form-label">CPF do mebro:</label>
								<input type="text" class="form-control form_item" id="cpf_membro" name="cpf_membro">
							</div>
							<div class="col-lg-4">
								<label for="nascimento" class="form-label">Data de Nascimento:</label>
								<input type="date" class="form-control form_item" id="nascimento_membro" name="nascimento_membro">
							</div>
						</div>
						<div class="row mt-3">
							<h6>******</h6>
						</div>
						<div class="row">
							<div class="col-lg-4">
								<label for="email" class="form-label">Endereço de e-mail:</label>
								<input type="email" class="form-control form_item" id="email_membro" name="email_membro">
							</div>
							<div class="col-lg-4">
								<label for="nome_usuario" class="form-label">Telefone:</label>
								<input type="text" class="form-control form_item" id="telefone_membro" name="telefone_membro">
							</div>
							<div class="col-lg-4">
								<label for="cargo" class="form-label">Quanto tempo este membro faz parte da igreja?</label>
								<select class="form-select form_item" id="tempo" name="tempo">
									<option value="1">Membro Novo</option>
									<option value="2">De 01 a 03 anos</option>
									<option value="3">De 03 a 05 anos</option>
									<option value="4">Mais de 05 anos</option>
								</select>
							</div>
						</div>
						<div class="row mt-3">
							<h6>******</h6>
						</div>
						<div class="row">
							<div class="col-lg-4">
								<label for="cargo" class="form-label">Quanto tempo este membro faz parte da igreja?</label>
								<select class="form-select form_item" id="tempo" name="tempo">
									<option value="Membro Novo">Membro Novo</option>
									<option value="De 01 a 03 anos">De 01 a 03 anos</option>
									<option value="De 03 a 05 anos">De 03 a 05 anos</option>
									<option value="Mais de 05 anos">Mais de 05 anos</option>
								</select>
							</div>
							<div class="col-lg-4">
								<label for="cargo" class="form-label">Este pode ser considerado um membro ativo?</label>
								<select class="form-select form_item" id="ativo" name="ativo">
									<option value="Sim">Sim</option>
									<option value="Nao">Não</option>
									<option value="Membro novo, ainda não é possível definir.">Membro novo, ainda não é possível definir.</option>
								</select>
							</div>
							<div class="col-lg-4">
								<label for="nome" class="form-label">Faixa Salarial:</label>
								<input type="text" class="form-control form_item" id="faixa_salarial" name="faixa_salarial">
							</div>
						</div>

						<div class="row justify-content-end mb-2">
							<div class="col-lg-1 col-sm-12 mt-3">
								<button type="submit" class="btn btn-success form-control form_item">Cadastrar</button>
							</div>
							<div class="col-lg-1 mt-3">
								<a href="../../pagina_inicial.php?usuario_cadastrado=2"><div class="btn btn-danger form-control form_item">Cancelar</div></a>
							</div>
						</div>
					</form>
				</div>	
			</div>


</div>


		</div>
	</div>
	<!--Script Bootstrap-->
	<script src="../../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>