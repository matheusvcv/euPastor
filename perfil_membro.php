<?php
//include "view/head_lista_membros.php";
include "src/protect.php";
?>
<!Doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="shortcut icon" href="img/logo_login_image.png" type="image/x-icon">
	<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
	<title>Perfil</title>
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
						</li>
						<li class="nav-item">
							<a class="nav-link" href="pagina_inicial.php">Página Inicial</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Como utilizar o sistema?</a>
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
		<li class="nav-item">
			<a class="nav-link barra_item">Outro módulo</a>
		</li>
	</ul>
	<!--Início do Corpo da página.-->
	<div class="card card_body m-3">
		<div class="card-content collapse show">
			<div class="card-body card-dashboard">	
			<h3>Informações Pessoais:</h3>
			<div class="container-fluid">
				<div class="row mt-4" id="perfil_membro">
					<div class="col-12 col-sm-6 col-lg-4">
						<p><strong>Nome: </strong><span id="nome_membro"></span></p>
						<p><strong>CPF: </strong><span id="cpf_membro"></span></p>
						<p><strong>Data de Nascimento: </strong><span id="nascimento_membro"></span></p>
					</div>
					<div class="col-12 col-sm-6 col-lg-4">
						<p><strong>E-mail: </strong><span id="email_membro"></span></p>
						<p><strong>Telefone: </strong><span id="telefone_membro"></span></p>
						<p><strong>Tempo de Igreja: </strong><span id="tempo_de_membro"></span></p>
					</div>
					<div class="col-12 col-sm-6 col-lg-4">
						<p><strong>Ativo: </strong><span id="ativo"></span></p>
						<p><strong>Salário: </strong><span id="faixa_salarial"></span></p>
						<p><strong>Contribuição Sugerida: </strong><span id="contribuicao_sugerida"></span></p>
					</div>
				</div>
				<div class="row mt-4 mb-4">
					<h3>Ocorrências:</h3>
					<div class="col-12 col-sm-6 col-lg-2 mt-2">
						<button type="button" class="btn btn-success w-100" id="exibe_form_inserir_ocorrencia" onclick="exibe_form_inserir_ocorrencia();">Inserir Ocorrência</button>
					</div>
					<div class="col-12 col-sm-6 col-lg-2 mt-2">
						<button id="btn-consultar" name="btn-consultar" type="button" class="btn btn-success w-100" onclick="exibir_ocorrências()">Consultar Ocorrências</button>
					</div>
				</div>
				<!--Início do formulário-->
				<div id="inserir_ocorrencia" name="inserir_ocorrencia" style="display: none;">
					<h3>Inserir Ocorrência</h3>
					<div class="container-fluid">
						<form method="POST" name="form_inserir_ocorrencia" id="form_inserir_ocorrencia">
							<div class="row mt-3">
								<h6>Informações</h6>
							</div>

							<div class="row mb-4">
								<div class="col-lg-6">
									<label for="titulo" class="form-label">Título:</label>
									<input type="text" class="form-control form_item" id="titulo" name="titulo" placeholder="Digite o Título aqui." required>
								</div>
							</div>
							<div class="row mb-4">
								<div class="col-lg-6">
									<label for="ocorrencia" class="form-label">Ocorrência:</label>
									<textarea class="form-control form_item" id="ocorrencia" name="ocorrencia" placeholder="Digite a Ocorrência aqui." required></textarea>
								</div>
							</div>

							<div class="row justify-content-end mb-2">
								<div class="col-lg-1 col-sm-12 mt-3" style="min-width: 120px;">
									<button type="button" class="btn btn-success form-control form_item" onclick="inserir_ocorrencia();">Cadastrar</button>
								</div>
								<div class="col-lg-1 mt-3" style="min-width: 120px;">
									<div class="btn btn-danger form-control form_item" onclick="cancela_exibe_form_inserir_ocorrencia();">Cancelar</div>
								</div>
							</div>
						</form>
					</div>
				</div>
				<!--Final do formulário-->
				<!--Iinicio das Ocorrências-->
				<div id="lista_ocorrencias" name="lista_ocorrencias" style="display: block;">

				</div>
			</div>
		</div>	
	</div>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.min.css" rel="stylesheet">
	<script src="bootstrap/js/bootstrap.min.js"></script><!--Carrega o Bootstrap-->
	<script>

	$(document).ready(function() {//Define que quando o documento for carregado, os dados serão carregados.
		$.ajax({//Inicia a requisição ajax utilizando jQuery para buscar dados no servidor
			url: 'ws/seleciona_membro_individual.php?id=' + <?php echo $_GET['id']; ?>,//Define o endereço do script PHP que vai retornar os arquivos em formato Json
			dataType: 'json',//Define que o formato do dado vai ser json
			success: function(data){//Define que a função será realizada quando a requisição for concluida com sucesso
				if(data && !data.erro){

					$('#nome_membro').text(data.nome_membro);
					$('#cpf_membro').text(data.cpf_membro);
					$('#nascimento_membro').text(data.nascimento_membro);
					$('#email_membro').text(data.email_membro);
					$('#telefone_membro').text(data.telefone_membro);
					$('#tempo_de_membro').text(data.tempo_de_membro);
					$('#ativo').text(data.ativo);
					$('#faixa_salarial').text(data.faixa_salarial.toFixed(2));
					let faixa_salarial = parseFloat(data.faixa_salarial) || 0;
					$('#faixa_salarial').text(faixa_salarial.toFixed(2));
					$('#contribuicao_sugerida').text((faixa_salarial / 10).toFixed(2));



				}else{
				}
			},
			error: function() {//Função executada caso haja um erro na requisição Ajax
				console.error("Erro ao carregar os dados do membro.", data);
			}
		});
	});

	function exibe_form_inserir_ocorrencia()
	{
		$('#inserir_ocorrencia').css('display', 'block');
		$('#exibe_form_inserir_ocorrencia').css('display', 'none');
		$('#btn-consultar').css('display', 'none');	
	}

	function cancela_exibe_form_inserir_ocorrencia()
	{
		$('#inserir_ocorrencia').css('display', 'none');
		$('#exibe_form_inserir_ocorrencia').css('display', 'block');
		$('#btn-consultar').css('display', 'block');	
	}

	function inserir_ocorrencia()
	{
		var id_membro = <?php echo $_GET['id']; ?>;
		var titulo = $('#titulo').val();
		var ocorrencia = $('#ocorrencia').val();

		$.ajax({
			url: 'ws/inserir_ocorrencia.php',
			type: 'post',
			data:{
				'id_membro': id_membro,
				'titulo': titulo,
				'ocorrencia': ocorrencia
			},

		}).done(function(response){
			console.log(response);
			if(response === "success")
			{
				Swal.fire({
					icon: 'success',
					title: 'Ocorrência Cadastrada!',
					text: 'Ocorrência foi cadastrada com sucesso!',
					confirmButtonText: 'OK'

				}).then((result)=>{
					if(result.isConfirmed){
						location.reload(); //Recarrega a página quando o usuário clica em ok.
					}
				});	
			} else{
				Swal.fire({
					icon: 'error',
					title: 'Erro ao Cadastrar!',
					text: 'Ocorreu um erro ao tentar registrar a ocorrência.',
					confirmButtonText: 'OK'
				});
			}

		});
	}


	function exibir_ocorrências()
	{
		$.ajax({
			url: 'ws/seleciona_ocorrencias.php?id=' + <?php echo $_GET['id']; ?>,
			dataType: 'json',
			success: function(data){
				if(data && !data.erro){
					$('#lista_ocorrencias').empty();

				data.forEach(function(ocorrencia){

					let bloco_ocorrencia = `
						<div class="col-12 mb-3">
							<div class="border rounded p-3 bg-light">
								<p><strong>Data de Registro: </strong>${ocorrencia.data_registro}</p>
								<p><strong>Título: </strong>${ocorrencia.titulo}</p>
								<p><strong>Ocorrência: </strong>${ocorrencia.ocorrencia}</p>
							</div>
						</div>
					`;

					$('#lista_ocorrencias').append(bloco_ocorrencia);
				});

				} else {
					$('#lista_ocorrencias').html(`<p class="text-danger"><strong>Nenhuma ocorrência encontrada.</strong></p>`);
				}
				},
				error: function(xhr, status, error){
					console.error("Erro ao carregar ocorrências:", error);
				}
			});


	}
	</script>
</body>
</html>