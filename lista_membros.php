<?php
include "view/head_lista_membros.php";
?>
<!Doctype html>
<html>
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

				<!--Início da DataTable-->
				<div class="container-fluid">
					<div class="row mt-3">
						<table id="datatable" class="table table-striped table-bordered table-hover justify-content-center" cellspacing="0" width="100%">
							<thead>
								<tr class="table-dark justify-content-center">
									<th class="align-middle text-center">ID</th>
									<th class="align-middle text-center">Ocorrências</th>
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
			{
				"data": "",
				"render": function (data, type, row, meta){
					if(type === 'display'){
						return '<img src="img/file_icon.png">';		
					}
					
					return data;
				}
			},
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


	</script>
</body>
</html>