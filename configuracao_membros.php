<?php
include "src/protect.php";
?>
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
	<title>Configuração de Membros</title>
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
							<a class="nav-link active botao_sair" aria-current="page" href="logout.php">SAIR</a>
						<li class="nav-item">
							<a class="nav-link" href="pagina_inicial.php">Página Inicial</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="instrucoes.php">Como utilizar o sistema?</a>
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
			<a class="nav-link barra_item" href="lista_membros.php">Lista de Membros</a>
		</li>
		<li class="nav-item">
			<a class="nav-link barra_item" href="escola_biblica_dominical.php">Escola Biblica Dominical</a>
		</li>
		<li class="nav-item">
			<a class="nav-link barra_item" href="configuracao_membros.php">Configuração de Membros</a>
		</li>
		<li class="nav-item">
			<a class="nav-link barra_item" href="pagina_administrativa/views/cadastrar_usuarios.php">Cadastrar Usuários</a>
		</li>
	</ul>
		<!--Início do Corpo da página.-->
		<div class="card card_body m-3">
			<div class="card-content collapse show">
				<div class="card-body card-dashboard">
				<div class="d-flex align-items-center justify-content-between mb-3">
		          <h3 class="mb-0">Configuração de Membros</h3>
		          <a href="pagina_inicial.php">
		            <img src="img/voltar.png" alt="Voltar">
		          </a>
		        </div>
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
									<label for="telefone" class="form-label">CPF do membro:</label>
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
								<div class="col-lg-1 col-sm-12 mt-3" style="min-width: 120px;">
									<button type="submit" class="btn btn-success form-control form_item" onclick="inserir_membro();">Cadastrar</button>
								</div>
								<div class="col-lg-1 mt-3" style="min-width: 120px;">
									<div class="btn btn-danger form-control form_item" onclick="esconde_form_cad_membro();">Cancelar</div>
								</div>
							</div>
						</form>
					</div>	
				</div>
				<!--Início da DataTable-->
				<div class="container-fluid">
					<div class="row mt-3">
						<!--Botão de exibir o formulário-->
						<div>
							<button id="exibe_form_cad_membro" class="btn btn-success" onclick="exibe_form_cad_membro();">Cadastrar Membro</button> 
						</div>
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
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

	<script>

	$(document).ready(function() {
	    $('#datatable').DataTable({
	        "autoWidth": false,
	        "bLengthChange": false,
	        "scrollX": true,
	        "pageLength": 10,
	        "dom": 'Bfrtip',
	        "buttons": [
	            {
	                "extend": 'excelHtml5',
	                "text": 'Excel',
	                "className": 'excel_btn',
	                "titleAttr": 'Exportar para Excel',
	                "exportOptions": {
	                    "columns": ':visible'
	                }
	            }
	        ],
	        "search": {
				"regex": false
			},
	        "searching": false, 
	        "columnDefs": [
	            {"visible": false, "targets": 0}
	        ],
	       aaSorting: [[0, "desc"]],
	        "ajax": {
	            "url": "ws/seleciona_membros.php",
				"type": 'GET',
				"contentType": "application/json",
	            "dataSrc": "",
            "data": { 

				},
	        },
	        "columns": [
	            {"data": "id"},
	            {
	                "data": "id",
	                "render": function(data, type, row, meta) {
	                    if (type === 'display') {
	                        return '<a><img src="img/save_icon.svg" onclick="editar_membros('+ row.id +')" class="icon_2"></a>' + '<a><img src="img/delete_icon.svg" onclick="deletar_membro('+ row.id +')" class="icon"></a>';
	                    }
	                    return data;
	                }
	            },
	            {
	                "data": "nome_membro",
	                "defaultContent": "",
	                "render": function(data, type, row, meta) {
	                    if (type === 'display') {
	                        return '<input id="nome_membro_' + row.id + '" name="nome_membro_' + row.id + '" value="' + data + '" style="text-align: center;">';
	                    }
	                }
	            },
	            {
					"data": "cpf_membro",
					"defaultContent": "",
					"render": function (data, type, row, meta){
						if(type === 'display'){
							return '<input id="cpf_membro_' + row.id + '" name="cpf_membro_' + row.id + '" value="'+ data +'" style="text-align: center;">';
						}

					}
				},
				{
					"data": "nascimento_membro",
					"defaultContent": "",
					"render": function (data, type, row, meta){
						if(type === 'display'){
							const date = new Date(data);
							const dia = String(date.getDate()).padStart(2, '0');
							const mes = String(date.getMonth() + 1).padStart(2, '0');
							const ano = date.getFullYear();
							const data_formatada = `${dia}-${mes}-${ano}`;
							return '<input id="nascimento_membro_' + row.id + '" name="nascimento_membro_' + row.id + '" value="'+ data_formatada +'" style="text-align: center;">';
						}

					}
				},
				{
					"data": "email_membro",
					"defaultContent": "",
					"render": function (data, type, row, meta){
						if(type === 'display'){
							return '<input id="email_membro_' + row.id + '" name="email_membro_' + row.id + '" value="'+ data +'" style="text-align: center;">';
						}

					}
				},
				{
					"data": "telefone_membro",
					"defaultContent": "",
					"render": function (data, type, row, meta){
						if(type === 'display'){
							return '<input id="telefone_membro_' + row.id + '" name="telefone_membro_' + row.id + '" value="'+ data +'" style="text-align: center;">';
						}

					}
				},
				{
					"data": "tempo_de_membro",
					"defaultContent": "",
					"render": function (data, type, row, meta){
						if(type === 'display'){
							return '<input id="tempo_de_membro_' + row.id + '" name="tempo_de_membro_' + row.id + '" value="'+ data +'" style="text-align: center;">';
						}

					}
				},
				{
					"data": "ativo",
					"defaultContent": "",
					"render": function (data, type, row, meta){
						if(type === 'display'){
							return '<input id="ativo_' + row.id + '" name="ativo_' + row.id + '" value="'+ data +'" style="text-align: center;">';
						}

					}
				},
				{
					"data": "faixa_salarial",
					"defaultContent": "",
					"render": function (data, type, row, meta){
						if(type === 'display'){
							return '<input id="faixa_salarial_' + row.id + '" name="faixa_salarial_' + row.id + '"  value="'+ data +'" style="text-align: center;">';
						}
					}
				},
				{
					"data": "faixa_salarial",
					"defaultContent": "",
					"render": function(data, type, row, meta){
						if(type === 'display'){
							return '<input value="' + data / 10 + '"style="text-align: center;" disabled>';
						}
						return data;
					}
				}
	        ],

	        "drawCallback": function(settings) {
	        	//Serve para aplicar as máscaras após a renderização da tabela.
	        	$('[id^=cpf_membro_]').mask('000.000.000-00');
	        	$('[id^=telefone_membro_]').mask('(00) 00000-0000');
	        }
	    });
	});

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

	function editar_membros(id)
	{
		$('#datatable').DataTable().ajax.reload();

		var nome_membro = $('#nome_membro_'+id).val();
		var cpf_membro = $('#cpf_membro_'+id).val();
		var nascimento_membro = $('#nascimento_membro_'+id).val();
		var email_membro = $('#email_membro_'+id).val();
		var telefone_membro = $('#telefone_membro_'+id).val();
		var faixa_salarial = $('#faixa_salarial_'+id).val();
		var tempo_de_membro = $('#tempo_de_membro_'+id).val();
		var ativo = $('#ativo_'+id).val();

		$.ajax({
			url: 'ws/ws_editar_membros.php',
			type: 'post',
			data:{
				'id': id,
				'nome_membro': nome_membro,
				'cpf_membro': cpf_membro,
				'nascimento_membro': nascimento_membro,
				'email_membro': email_membro,
				'telefone_membro': telefone_membro,
				'faixa_salarial': faixa_salarial,
				'tempo_de_membro': tempo_de_membro,
				'ativo': ativo
			},
		}).done(function(response) {

			$('#datatable').DataTable().ajax.reload();

		});
	}

	function deletar_membro(id)
	{

		Swal.fire({
			title: 'Deletar Membro',
			text: "Você tem certeza que deseja deletar esse membro?",
			showCancelButton: true,
			confirmButtonColor: '#d33',
			cancelButtonColor: '#198754',
			confirmButtonText: 'Sim, deletar',
			cancelButtonText: 'Cancelar'
		}).then((result)=>{
			if(result.isConfirmed){
				$.ajax({
					url: 'ws/ws_deletar_membros.php',
					type: 'POST',
					dataType: 'json',
					data: {id: id},
					success: function(response){
						if(response.status === 'success'){
							$('#datatable').DataTable().ajax.reload();
							Swal.fire('Deletado!', 'O membro foi deletado com sucesso.', 'success');

						}else{
							Swal.fire('Erro!', response.message || 'Erro ao deletar o membro.', 'error');
						}
					},
					error: function(xhr, status, error){
						Swal.fire('Erro!', 'Ocorreu um erro na requisição. Tente Novamente.', 'error');
					}
				});
			}
		});
	}

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