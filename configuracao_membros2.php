<!Doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="shortcut icon" href="img/logo_login_image.png" type="image/x-icon">
	<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">





	<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
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



				<div class="container-fluid">
					<div class="row mt-3">
						<table id="datatable" class="table table-striped table-bordered" style="width:100%">
					        <thead>
					            <tr>
									<th>ID</th>
									<th>Nome</th>
									<th>CPF</th>
									<th>Nascimento</th>
									<th>E-mail</th>
									<th>Telefone</th>
									<th>Tempo de Igreja</th>
									<th>Ativo</th>
									<th>Salário</th>
									<th>Contribuição Sugerida</th>
					            </tr>
					        </thead>
					        <tbody>
							</tbody>
						</table>	
					</div>
				</div>











<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
<script>
	$(document).ready(function() {
		$('#datatable').DataTable({
			"processing": true,
			"serverSide": true,
			"ajax": "ws/seleciona_membros.php",
			"columns": [
	            {"data": "id"},
	            {"data": "nome_membro"},
	            {"data": "cpf_membro"},
	            {"data": "nascimento_membro"},
	            {"data": "email_membro"},
	            {"data": "telefone_membro"},
	            {"data": "faixa_salarial"},
	            {"data": "tempo_de_membro"},
	            {"data": "ativo"}
       		 ],
		});

	});



		
</script>


</body>
</html>