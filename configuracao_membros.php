<!Doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="shortcut icon" href="img/logo_login_image.png" type="image/x-icon">
	<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
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
	<!--Início do Corpo da página.-->
	<div class="card card_body m-3">
		<div class="card-content collapse show">
			<div class="card-body card-dashboard">
				<div id="cadastro_usuario" name="cadastro_usuario">
					<!--Início do formulário-->
					<h3>Cadastro de Membros</h3>
					<div class="container-fluid">
						<form  method="POST" name="form_inserir_membros" id="form_inserir_membros">
							<div class="row mt-3">
								<h6>Dados Pessoais</h6>
							</div>
							<div class="row mb-4">
								<div class="col-lg-4">
									<label for="nome" class="form-label">Nome do membro:</label>
									<input type="text" class="form-control form_item" id="nome_membro" name="nome_membro" placeholder="Digite o nome aqui.">
								</div>
								<div class="col-lg-4">
									<label for="telefone" class="form-label">CPF do mebro:</label>
									<input type="text" class="form-control form_item" id="cpf_membro" name="cpf_membro" placeholder="Digite o CPF aqui.">
								</div>
								<div class="col-lg-4">
									<label for="nascimento" class="form-label">Data de Nascimento:</label>
									<input type="date" class="form-control form_item" id="nascimento_membro" name="nascimento_membro">
								</div>
							</div>
							<div class="row mt-3">
								<h6>Dados de contato - Salário</h6>
							</div>
							<div class="row mb-4">
								<div class="col-lg-4">
									<label for="email" class="form-label">Endereço de e-mail:</label>
									<input type="email" class="form-control form_item" id="email_membro" name="email_membro" placeholder="Digite o e-mail aqui.">
								</div>
								<div class="col-lg-4">
									<label for="nome_usuario" class="form-label">Telefone Mobile (WhatsApp):</label>
									<input type="text" class="form-control form_item" id="telefone_membro" name="telefone_membro" placeholder="Digite o telefone aqui.">
								</div>
								<div class="col-lg-4">
									<label for="nome" class="form-label">Faixa Salarial:</label>
									<input type="text" class="form-control form_item" id="faixa_salarial" name="faixa_salarial" placeholder="Digite o salário aqui.">
								</div>
							</div>
							<div class="row mt-3">
								<h6>Outras informações</h6>
							</div>
							<div class="row mb-4">
								<div class="col-lg-4">
									<label for="cargo" class="form-label">Quanto tempo este membro faz parte da igreja?</label>
									<select class="form-select form_item" id="tempo_de_membro" name="tempo_de_membro">
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
							</div>
							<div class="row justify-content-end mb-2">
								<div class="col-lg-1 col-sm-12 mt-3">
									<button type="submit" class="btn btn-success form-control form_item" onclick="inserir_membro();">Cadastrar</button>
								</div>
								<div class="col-lg-1 mt-3">
									<div class="btn btn-danger form-control form_item" onclick="esconde_form_cad_membro();">Cancelar</div>
								</div>
							</div>
						</form>
					</div>	
				</div>
				<div>
					<button id="exibe_form_cad_membro" class="btn btn-success" onclick="exibe_form_cad_membro();">Cadastrar Membro</button>
				</div>
				<!--Início da DataTable-->
				<div class="container-fluid">
					<div class="row mt-3">
						<table id="datatable" class="table table-striped table-bordered table-hover justify-content-center" cellspacing="0" width="100%">
							<thead>
								<tr class="table-dark justify-content-center">
									<th class="align-middle text-center">ID</th>
									<th class="align-middle text-center">Ações</th>
									<th class="align-middle text-center">Nome</th>
									<th class="align-middle text-center">CPF</th>
									<th class="align-middle text-center">Nascimento</th>
									<th class="align-middle text-center">E-mail</th>
									<th class="align-middle text-center">Telefone</th>
									<th class="align-middle text-center">Tempo de Igreja</th>
									<th class="align-middle text-center">Ativo</th>
									<th class="align-middle text-center">Salário</th>
									<th class="align-middle text-center">Contribuição Sugerida</th>
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--Script Bootstrap-->
	<script src="../../bootstrap/js/bootstrap.min.js"></script>
	<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
	<script>

	function inserir_membro()
	{
		var nome_membro = $('#nome_membro').val();
		var cpf_membro = $('#cpf_membro').val();
		var nascimento_membro = $('#nascimento_membro').val();
		var email_membro = $('#email_membro').val();
		var telefone_membro = $('#telefone_membro').val();
		var faixa_salarial = $('#faixa_salarial').val();
		var tempo_de_membro = $('#tempo_de_membro').val();
		var ativo = $('#ativo').val();

		$.ajax({
			url: 'ws/ws_cadastrar_membros.php',
			type: 'post',
			data:{
				'nome_membro': nome_membro,
				'cpf_membro': cpf_membro,
				'nascimento_membro': nascimento_membro,
				'email_membro': email_membro,
				'telefone_membro': telefone_membro,
				'faixa_salarial': faixa_salarial,
				'tempo_de_membro': tempo_de_membro,
				'ativo': ativo
			},

		}).done(function(response){
			
			if (response === "success")
			{
				window.location.href = 'configuracao_membros.php?s=1';
			}

			if (response === "error")
			{
				window.location.href = 'configuracao_membros.php?s=0';
			}
		});
	}

	$(document).ready(function() {





	$('#datatable').DataTable({
			/* fixedHeader: {
			header: true,
			headerOffset: $('.header-navbar').outerHeight()
		}, */		
		"autoWidth": false,
		"bLengthChange": false,
		pageLength: 10,
		dom: 'Bfrtip',
		buttons: [
		  {
			extend: 'excelHtml5',
			text: 'Excel',
			className: 'excel_btn',
			titleAttr: 'Exportar para Excel',
			exportOptions: {
			columns: ':visible'
			}
		  }
		],


		"search": {
		"regex": true
		},
		destroy: true,
		"processing" : false,
		"paging": true,
		"searching": false,
		"bFilter": false,
		"columnDefs":[
		   {"visible": false, "targets":0}
		],

		"columns":[
			{"data": "id"},
			{"data": ""},
			{"data": "nome_membro"},
			{"data": "cpf_membro"},
			{"data": "nascimento_membro"},
			{"data": "email_membro"},
			{"data": "telefone_membro"},
			{"data": "faixa_salarial"},
			{"data": "tempo_de_membro"},
			{"data": "ativo"},
			{
				"data": "faixa_salarial",
				"render": function(data, type, row, meta){
					if(type === 'display'){
						return data / 10;
					}
					return data;
				}
			}
		]

		});
	});



	$.ajax({
		url: 'ws/seleciona_membros.php',
		dataType: 'json',
		success: function(data){

			if(data.length > 0){

				$('#datatable').DataTable().clear();

				$('#datatable').DataTable().rows.add(data).draw();

			}else{

				$('#datatable').DataTable().clear().draw();
				$('#datatable').DataTable().rows.add('<tr><td colspan="3">Nenhum resultado encontrado.</td><tr>').draw();

			}
		},

		error: function() {

			console.error('Ocorreu um erro ao obter os dados.');
		}
	});





		
		function exibe_form_cad_membro()
		{
			$('#cadastro_usuario').css('display', 'block');
			$('#exibe_form_cad_membro').css('display', 'none');
		}

		
		function esconde_form_cad_membro()
		{
			$('#cadastro_usuario').css('display', 'none');
			$('#exibe_form_cad_membro').css('display', 'block');
		}

	</script>
</body>
</html>