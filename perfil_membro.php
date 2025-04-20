<?php
include "view/head_lista_membros.php";
include "src/protect.php";
?>
<!Doctype html>
<html>
<body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
			<a class="nav-link barra_item" href="lista_membros.php">Lista de Membros</a>
		</li>
		<li class="nav-item">
			<a class="nav-link barra_item" href="escola_biblica_dominical.php">Escola Biblica Dominical</a>
		</li>
		<li class="nav-item">
			<a class="nav-link barra_item" href="configuracao_membros.php">Configuração de Membros</a>
		</li>
		<li class="nav-item">
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
				<div class="col mt-2">
					<button type="button" class="btn btn-success">Inserir</button>
					<button type="button" class="btn btn-success">Consultar</button>
				</div>
				</div>
			</div>


		</div>
	</div>
	<script src="bootstrap/js/bootstrap.min.js"></script><!--Carrega o Bootstrap-->
	<script>

	$(document).ready(function() {//Define que quando o documento for carregado, a tabela será configurada
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
					let faixa_salarial = parseFloat(data.faixa_salarial);
					let contribuicao_sugerida = faixa_salarial/10;
					$('#contribuicao_sugerida').text(contribuicao_sugerida.toFixed(2));

				}else{
				}
			},
			error: function() {//Função executada caso haja um erro na requisição Ajax
			}
		});
	});
	</script>
</body>
</html>