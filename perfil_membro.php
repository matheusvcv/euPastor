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
			<h3>Perfil</h3>
			<div class="container mt-4" id="perfil_membro">
				<h5>Informações Pessoais:</h5>
					<p><strong>Nome: </strong><span id="nome"></span></p>	
			</div>
			</div>
		</div>
	</div>

	<script>

	$(document).ready(function() {//Define que quando o documento for carregado, a tabela será configurada
		$.ajax({//Inicia a requisição ajax utilizando jQuery para buscar dados no servidor
			url: 'ws/seleciona_membro_individual.php?id=' + <?php echo $_GET['id']; ?>,//Define o endereço do script PHP que vai retornar os arquivos em formato Json
			dataType: 'json',//Define que o formato do dado vai ser json
			success: function(data){//Define que a função será realizada quando a requisição for concluida com sucesso

				if(data && !data.erro){

					console.log(data);

					$('#nome').text(data.nome_membro);

					/*$('#datatable').DataTable().clear();//Recebe a datable e limpa os dados antes de inserir os novos

					$('#datatable').DataTable().rows.add([data]).draw();//Adiciona linhas na tabela com os dados recebidos*/

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